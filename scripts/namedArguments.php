<?php

// pozwalają przekazywać parametry funkcji w oparciu o nazwę, a nie kolejność
// umożliwia pominięcie parametrów opcjonalnych z domyślną wartością

declare(strict_types=1);

use Php8\NamedArguments;

include_once "../vendor/autoload.php";

//$object = new NamedArguments(1, 10);
$object = new NamedArguments(
    page: 2,
    count: 21
);

// pomijamy domyślny argument
//$object->foo(title: 'Title', options: ['value1']);

/*setcookie (
    string $name,
    string $value = "", 
    int $expires = 0, 
    string $path = "", 
    string $domain = "", 
    bool $secure = false, 
    bool $httponly = false
)*/

//setcookie ('cookie_name', "",  0,  "",  "",  true);
//setcookie (name: 'cookie_name', secure: true);

// zmiana kolejności przekazywania argumentów
//$object->foo(title: 'Title', description: 'description', options: ['value1']);
//$object->foo(description: 'description', options: ['value1'], title: 'Title');
//$object->foo(options: ['value1'], title: 'Title');

// inny sposób formatowania
//$object->foo(
//    options: ['value1'],
//    title: 'Title'
//);

// styl "mieszany", użycie name arguments razem ze zwykłymi
//$object->foo('Title', options: ['value2']);
//$object1 = new NamedArguments(count: 20, 2);
//$object1 = new NamedArguments(2, count: 20);

// pominięci argumentu bez wartości domyślnej
//$object->bar('Title', options: ['value1']);
//$object->bar('Title', options: ['value1'], description: 'desc');



