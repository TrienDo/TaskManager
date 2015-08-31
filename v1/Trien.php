<?php
    class Person
    {
        function setValue($firstName, $lastName)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }
        function getValue()
        {
            return $this->firstName . " " . $this->lastName;
        }
    }
    $a = array();
    for($i=0; $i <=5; $i++)
    {
        $var2 = new stdClass;
        $var2->value = $i;
        $var2->{"position".$i} = 'position at '.$i;
        $a[$i] = $var2;
    }
    
    for($i=0; $i <=5; $i++)
    {
        echo $a[$i]->{"position".$i};
        echo $a[$i]->value;
    }
    
    function test(&$intVal)
    {
        static $i = 0;
        $i += $intVal;       
        $intVal ++;        
        return $i;
    }
    $a = 5;
    $b = 0;
    for($m=$a;$m<10;$m++)
       $b += test($a);
    echo "<br/>";
    echo $a;
    echo "<br/>";
    echo $b;
    
    $tim = new Person();
    $tim->setValue("Tim", "Smith");
    echo($tim->getValue());
    
?>