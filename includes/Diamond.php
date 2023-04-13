<?php
/*
 * The Shape Class
 */

namespace FlickerLeap;

use FlickerLeap\Shape;

/**
 *
 */
class Diamond extends Shape
{
    /**
     *
     * @param int $length
     */
    public function __construct($length = 5)
    {
        $this->name = 'Diamond';
        $this->sides = 4;
        $this->sideLength = $length;
        $this->pixel = "*";
    }

    /**
     *
     */
    public function displayName()
    {
        echo $this->name;
    }

    /**
     * Draws the square.
     */
    public function draw()
    {
        for ($i = 1; $i < 8; $i++) {
            for ($j = $i; $j < 8; $j++)
                echo "&nbsp;&nbsp;";
            for ($j = 2 * $i - 1; $j > 0; $j--)
                echo ("&nbsp;*");
            echo "<br>";
        }
        $n = 8;
        for ($i = 8; $i > 0; $i--) {
            for ($j = $n - $i; $j > 0; $j--)
                echo "&nbsp;&nbsp;";
            for ($j = 2 * $i - 1; $j > 0; $j--)
                echo ("&nbsp;*");
            echo "<br>";
        }
    }

    
}
