<?php

class user {
    // Magic method call
    public function __call($name, $arguments)
    {
        echo "Method " . $name . " not found <br>";
        print_r($arguments);
    }
}

$user = new user;
$user->go(1, 2);

////////////////////////////

// Overloading Example
class calc {
    public function __call($name, $arguments)
    {
        if($name == "add") {
            if(count($arguments) == 2) {
                echo $arguments[0] + $arguments[1];
            }elseif(count($arguments) == 3) {
                echo $arguments[0] + $arguments[1] + $arguments[2] . "<br>";
            }
        }
    }

    // Magic method get
    public function __get($name)
    {
        echo "This prop " . $name . " Not found <br>";
    }

    // Magic method set
    public function __set($name, $value)
    {
        echo "This prop " . $name . " Not found and value is " . $value . "<br>";
    }
}

$calc = new calc;
$calc->add(1,2,9);
$calc->name = "example";
echo $calc->name;


// Trait
trait soul {
    public function soulMethod()
    {
        echo "Soul <br>";
    }
}

trait body {
    public function bodyMethod()
    {
        echo "Body <br>";
    }
}

class person {
    use body, soul;
}

$new = new person;
$new->bodyMethod();
$new->soulMethod();


// Autoload Example
spl_autoload_register(function($className) {
    if (file_exists("controller/" . $className . ".php")) {
        include "controller/" . $className . ".php";
    }elseif(file_exists("model/" . $className . ".php")){
        include "model/" . $className . ".php";
    }
    
});

$user = new user;
$user->user();

$category = new category;
$category->category();


////////////////

include "DB.php";

// Namespace Example
use out\DB;
echo "<pre>";
print_r(DB::table("users")->select()->all());

?>