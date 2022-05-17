<?php
/*
 * The Shape Class
 */

namespace FlickerLeap;

use FlickerLeap\Shape;

/**
 *
 */
class Rectangle extends Shape
{
    /**
     * @var int
     */
//    private $sideLength2;

    /**
     *
     * @param int $length
     */
    public function __construct($length = 10) {
        $this->name = 'Rectangle';
        $this->sides = 4;
        $this->sideLength = $length;
        $this->pixel = "*";
    }

    /**
     * Display Name
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
        for($i = 0; $i < $this->sideLength; $i++) {
            // print column
            for($j = 0; $j < $this->sideLength * 2; $j++) {
                if($i === 0 || $i === $this->sideLength - 1) {
                    echo $this->pixel;
                }
                else {
                    if($j === 0 || $j === ($this->sideLength * 2) - 1) {
                        echo $this->pixel;
                    }
                    else {
                        echo "&nbsp;&nbsp;";
                    }
                }
            }
            $this->newLine();
        }
    }
}
