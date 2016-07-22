<?php
class Animal
{
    public $name = "No-name animal";
    
    public function __construct($name)
    {
    	echo "I LIVE!\n";
        $this->name = $name;
    }

    public function __destruct($name)
    {
    	echo "And now I'm dead.";
    }
}

$animal = new Animal("Alex");
echo "$animal->name\n";
