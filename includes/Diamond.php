<?php
/*
 * The Diamond Class
 */

namespace FlickerLeap;

class Diamond extends Shape
{
    /**
     *
     * @param int $length
     */
    public function __construct($length = 10)
    {
        $this->name = 'Diamond';
        $this->sideLength = $length;
        $this->pixel = "*";
    }

    /**
     * Show name of shape
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
        $m = 1;
        $n= $this->sideLength;
        for ($row=1; $row <= $this->sideLength; $row++)
        {
            for ($column = $row; $column <= $this->sideLength-1; $column++) {echo "&nbsp;&nbsp;";}

            for($k=1; $k <= $m; $k++)  {echo "*";}

            for($c = $m; $c > 1; $c--) {echo "*";}

            $this->newLine();

            $m++;
        }
        for($i=1; $i<=$this->sideLength; $i++)
        {
            for($j=$i; $j >= 1; $j--) { echo "&nbsp;&nbsp;"; }

            for($k = $n; $k > 1; $k--) { echo "*"; }

            for($c = $n - 1; $c > 1; $c--) { echo "*"; }

            $this->newLine();

            $n--;
        }
    }
}
