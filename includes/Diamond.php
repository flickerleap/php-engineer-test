<?php
/*
 * The Diamond Class
 */

namespace FlickerLeap;

/**
 *
 */
class Diamond extends Shape
{
    /**
     *
     * @param int $length
     */
    public function __construct($length) {
        $this->name = 'Diamond';
        $this->sides = 1 - $length;
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
     * Draws the Diamond.
     */
     public function draw()
     {
       for ($i= $this->sides ; $i <= ($this->sideLength - 1); $i++) {
         for ($j=$this->sides; $j <= $this->sideLength -1 ; $j++) {
            if (($j + $this->sideLength -1 == -$i) || ($j + $this->sideLength - 1 == $i) || ($j - $this->sideLength + 1 == -$i) || ($j - $this->sideLength + 1 == $i)) {
               echo $this->pixel . $this->padding(2);
            }
            else {
              echo $this->padding(2);
            }
         }
         $this->newLine();
       }
     }
 }
