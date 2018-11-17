<?php
class Circle{
    const pi = 3.14;

    public function Area($radius){
        return self::pi * ($radius * $radius);
    }
}
$circle = new Circle;
echo $circle->Area(5);
?>