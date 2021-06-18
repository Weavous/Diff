<?php

namespace Src;

use Src\Factory;

class DirectoryMapper extends Factory
{
    public function map(...$args)
    {
        $this->get(...$args);
    }

    public function get($dirname_one, $dirname_two)
    {
        echo "AQUI";
        echo $dirname_one;

        echo "<br>";

        echo $dirname_two;
    }

    // public static function fn(): string
    // {
    //     return "Testing...";
    // }
}
