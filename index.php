<?php

require __DIR__ . '/vendor/autoload.php';

$file = $_SERVER['REQUEST_URI'];

$parser = new Parsedown;

$text = 'Salut les amis';

$text = file_get_contents(__DIR__ . '/' . $_SERVER['REQUEST_URI']);

if (!$text) {
    $text = file_get_contents(__DIR__ . '/' . 'documentation.md');
}

$content = $parser->text($text);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $_SERVER['REQUEST_URI'] ?>
    </title>
    <style>
        * {
            border-radius: 10px;
        }

        body {
            background-color: #363636;
            color: aliceblue;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .container {
            background-color: #4e4e4e;
            width: 1000px;
            margin: auto;
            padding: 20px;
        }

        a {
            color: yellowgreen;
        }

        .h1 {
            color: aliceblue;

        }

        .text-center {
            text-align: center;
        }

        pre {
            background-color: cornsilk;
            color: black;
            padding: 45px;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="/">
            <h1 class="h1 text-center">Home Page</h1>
        </a>
        <?= $content ?>
    </div>
</body>

</html>