<?php
/*
 * Flicker Leap PHP Engineer Test
 *
 * This is where the magic happens. Run all code in here to show your end result.
 */

require __DIR__ . '/vendor/autoload.php';

use FlickerLeap\Diamond;
use FlickerLeap\Rectangle;
use FlickerLeap\Square;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flicker Leap - PHP Engineer Test</title>
    </head>
    <style type="text/css">
        body{line-height: 1em;}
    </style>
    <body>

        <h1>PHP Engineer Test</h1>

        <h2>Hello World</h2>

        <p>At the end of this test, you should have all the answers on this page.</p>

        <h2>Output a square</h2>

        <?php
            // implement the square class here
            $testObject = new Square();
            $testObject->draw();
        ?>

        <h2>Output a diamond</h2>

        <?php
           echo "<pre>";
            // output your diamond here
            $testObject = new Diamond();
            $testObject->draw();
            echo "</pre>";
        ?>

        <h2>Output your rectangle</h2>

        <?php
             // output your working rectangle here
                $testObject = new Rectangle();
                $testObject->draw();
        ?>

        <h2>Output the result of the API</h2>

        <?php
           
          // Use the Httpful client to output the API results here.
            $response = file_get_contents('http://pokeapi.co/api/v2/pokemon/mewtwo/');
            $response = json_decode($response);
            // echo "<pre>";
            // echo print_r($response);
            // echo "</pre>";
           
            
            foreach($response as $i => $item) {
                $total = count((array)$response);
            //     for ($total = 0; $total <= 2; $total++) {
            //     echo "The Name is: $i <br>";
            //   }

                echo "<pre>";
                echo print_r("Name: ".$i);
                echo "</pre>";
                
            }
            

        ?>

        <h2>Recommendations</h2>

        <p>I really enjoyed the test and so far , I do not have any recommendations</p>

    </body>
</html>
