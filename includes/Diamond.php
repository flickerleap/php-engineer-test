<?php
/*
 * Diamond Class
 */

namespace FlickerLeap;

/**
 * Class Diamond
 *
 * @package FlickerLeap
 */
class Diamond extends Shape
{
    /**
     *
     * @param int $length
     */
    public function __construct($length = 5)
    {
        $this->name       = 'Diamond';
        $this->sides      = 4;
        $this->sideLength = $length;
        $this->pixel      = "*";
    }

    /**
     * Displays name of the shape.
     */
    public function displayName()
    {
        echo $this->name;

    }

    /**
     * Draws the diamond.
     */
    public function draw()
    {
        // Loop for top half of diamond.
        $space = $this->sideLength;
        for ($i = 1; $i <= $this->sideLength; $i++) {
            for ($j = 1; $j <= $space; $j++) {
                echo $this->padding(2);
            }

            $space--;

            for ($j = 1; $j <= (2 * $i) - 1; $j++) {
                echo $this->pixel;
            }

            $this->newLine();
        }

        // Loop for bottom half of diamond.
        $space = 2;
        for ($i = 1; $i <= $this->sideLength; $i++) {

            for ($j = 1; $j <= $space; $j++) {
                echo $this->padding(2);
            }

            $space++;

            for ($j = 1; $j <= 2 * ($this->sideLength - $i) - 1; $j++) {
                echo $this->pixel;
            }

            $this->newLine();
        }
    }
}
