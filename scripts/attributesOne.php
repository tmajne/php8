<?php

declare(strict_types=1);

use Php8\Attribute\Deprecated;

include_once "../vendor/autoload.php";

// Attributes

/*
 * Odpowiednik adnotacji.
 * Używane do dodawania "metadanych" do klas/metod/funkcji/zmiennych/...
 *
 * Obecne w: JAVA, Python, Rust
 * Składnia jest mocno wzorowana na składni z języka Rust
 *
 * Przykłady adnotacji są na przykład w Symfony (doctrine mapping), funkcjonalność realizowana za pomocą notacji Docblock
 * W wersji Symfony 5.2 już możemy zamiast dotychczasowych adnotacji zastąpić jee natywne wspieranymi przez PHP argumentami
 *
 * Możemy używać z:
 * klasami, metodami, funkcjami, parametrami, właściwościami, stałymi w klasach
 *
 * Za pomocą refleksji (Reflection API) możemy sprawdzać/odczytywać atrybuty podczas wykonywania programowania (runtime)
 * W związku z czym atrybuty można rozpatrywać jako konfigurację osadzoną bezpośrednio w kodzie
 *
 * Atrybut tworzymy poprzez stworzenie klasy i oznaczenie jej jako atrybut.
 * Klasa może się znajdować zarówno w głównej jak i konkretnej przestrzeni nazw (stosujemy praktyki dobrego kodowania)
 * Gdy klasa atrybutu jest zdefiniowana w przestrzeni nazw trzeba ją zaimportować przed użyciem
 *
 * Do oznaczenia używamy składni #[ ]
 * Ciekawostka, początkowo składnia miała wyglądać następująco <<Attr>>, następnie: @@Attr aż do finalnego #[Attr]
 */


#[Deprecated]
function oldFunction() {}

class OldClass
{
    //#[Deprecated]
    //#[Deprecated('Method is old')]
    /*#[
        Deprecated('Method is old'),
        Deprecated(message: 'Use newMethod() instead')
    ]*/
    #[Deprecated('Method is old')]
    #[Deprecated(message: 'Use newMethod() instead')]
    public function oldMethod(): void
    {
        echo 'old method';
    }

    public function newMethod(): void
    {
        echo 'new method';
    }
}

$obj = new OldClass();
$obj->oldMethod();


function dumpAttributes($reflection) {
    $attributes = $reflection->getAttributes();

    foreach ($attributes as $attribute) {
        var_dump($attribute->getName());
        var_dump($attribute->getArguments());
        var_dump($attribute->newInstance());
    }
}

//dumpAttributes(new ReflectionFunction('oldFunction'));
//dumpAttributes(new ReflectionClass(OldClass::class));
dumpAttributes(new ReflectionMethod(OldClass::class, 'oldMethod'));

/**
 * Potencjalne zastosowania
 * Przy tworzeniu własnych frameworków :D
 * Zastępowanie adnotacji opartych na docBlockach na rozwiązanie oparte na atrybutach
 * Tam gzie wcześniej był sens używania adnotacji, czyli przy implementacji, np:
 * - routing'u
 * - wszelakich mappingów
 * - systemów uprawnień
 * - walidacji
 *
 * Oprócz tego np:
 * - do tagowania/oznaczania klas, np: #[Listener]
 */