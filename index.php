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
use Httpful\Request;

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

            //instantiate square class
            $draw = new Square(10);

            // call draw method
            $draw->draw();
        ?>

        <h2>Output a diamond</h2>

        <?php
            // output your diamond here

            //instantiate diamond class
            $draw = new Diamond(5);

            // call draw method
            $draw->draw();
        ?>

        <h2>Output your rectangle</h2>

        <?php
            // output your working rectangle here

            //instantiate rectangle class
            $draw = new Rectangle(5);

            // call draw method
            $draw->draw();
        ?>

        <h2>Output the result of the API</h2>

        <?php
            // Use the Httpful client to output the API results here.

            // add url to variable
            $url = "https://pokeapi.co/api/v2/pokemon/mewtwo/";

            // make https get call to rul
            $response = Request::get($url) ->expectsJson()->send();

            // store results in variable
            $result = $response->body;

            //set to loop 3 items and echo  with labels
            for ($i=0; $i < 3; $i++) {
              echo "<p><b>Move name:</b> ".$result->moves[$i]->move->name."</p>";
            }
        ?>

        <h2>Recommendations</h2>

        <p>I would love to see a question that requires us to manipulate arrays. I've found that the practical application of them <br />
          in any given real situation where item association is requiredm a firm understanding not just arrays but multidimensional ones as well as
          <br/>creating meaningful keys could be the bridge between completing a task and running in circles the whole time.</p>

    </body>
</html>
