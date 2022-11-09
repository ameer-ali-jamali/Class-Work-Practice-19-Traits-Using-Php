Traits
PHP language only supports single-level inheritance where a child class can inherit only from one single parent. If we need to inherit multiple behaviours from a class, then we can use Traits to solve this.



Traits are used to declare methods that can be used in multiple classes which can have any access modifier (public, private, protected). Traits can also have normal methods and abstract methods that can be used in multiple classes.



Traits are declared with the trait class and to use a train in a class we need to use the use keyword.

Example:

<?php
trait message1
{
    public function msg1()
    {
        echo "give me cheeseburgers ";
    }
}

class Welcome
{
    use message1;
}

$obj = new Welcome();
$obj->msg1();
?>
Output:

give me cheeseburgers