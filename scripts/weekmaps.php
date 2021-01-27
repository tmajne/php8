<?php

/**
 * W JS od ES2015
 *
 * W php 7.4 zostały wprowadzone tak zwane Weak References.
 * Dzięki nim mogliśmy uzyskać dostęp do obiektu bez zwiększania licznika referencji
 *
 * Tworząc obiekt i przypisując go do zmiennej to tak naprawdę obiekt jest najpierw tworzony w pamięci
 * a w zmienna zostaje powiązana z referencją do tego obiektu (a nie z samym obiektem).
 * Referencja zawiera informacje o położeniu tego obiektu w pamięci.
 *
 * Gdy ten sam obiekt wiążemy z kolejną zmienną to nie powstaje nowy obiekt, tylko nowa referencja do niego.
 */

$foo = new stdClass();
$bar = $foo;

/**
 * Przy tworzeniu nowej referencji zostaje zinkrementowany wewnętrzny licznik referencji wskazujących na dany obiekt.
 * Za każdym razem gdy zmienna jest usuwana (unset, wychodzenie ze scope), ten licznik jest dekrementowany.
 * Gdy licznik się wyzeruje to garbage collector wie, że bezpiecznie można usunąć obiekt, ponieważ nie ma do niego już referencji
 *
 * Natomiast dzięki Weak References i Weak Maps licznik referencji nie jest podbijany.
 * Dzięki temu zmienne te nie są uwzględniania przez GC do stwierdzenia czy można bezpiecznie usunąć obiekt.
 * Jak GC usuwa obiekt to wszystkie obiekty "weak" są ustawiane na null
 */

class Post {
    public function __construct(private int $id)
    {}

    public function id(): int
    {
        return $this->id;
    }
}

class PostRepository
{
    private WeakMap $cache;

    public function __construct()
    {
        $this->cache = new WeakMap();
    }

    public function get(int $postId): Post
    {
        return new Post($postId);
    }

    public function getComments(Post $post)
    {
        // kluczem jest obiekt
        return $this->cache[$post] ??= $this->findComments($post->id());
    }

    private function findComments(int $prodId): array
    {
        return [
            new stdClass(),
            new stdClass()
        ];
    }
}

$repository = new PostRepository();

$post = $repository->get(1);
$comments = $repository->getComments($post);

print_r($comments);
print_r($repository);

unset($post);
print_r($repository);

/**
 * Dlaczego nie tablica:
 * Kluczem nie może być obiekt tylko "ID postu" tak więc tworzona jest referencja "twarda" do kolekcji obiektów.
 * W takim przypadku usunięcie Post'a nie spowoduje wyczyszczenie z pamięci jego komentarzy, ponieważ będzie dalej
 * istniała "twarda" referencja
 *
 * Zastosowanie:
 * W implementacji podręcznych systemów cache
 * W bibliotekach typu ORM, gdzie wczytywane są listy obiektów powiązanych relacjami
 * Wszędzie gzie potrzebujemy powiązać z obiektem jakieś pomocnicze dane, których nie potrzebujemy po usunięciu
 * głównej referencji
 */
