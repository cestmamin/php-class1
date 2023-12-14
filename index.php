<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Class!</title>

    <link rel="stylesheet" type="text/css" href="/lib/style.css">
</head>

<body>
    <?php
        //First you gotta import the correct file, in this case it is main.php
        //You do this by using the inlude function

        include 'main.php';

        //Now you write your php code in that file

        //I want to echo the specific codeB, you do this as follows

        //To give this text a color, we'll be putting it inside a head, in this case h1


        // echo $userInfo["codeD"] we comment this line because we are echoing it inside a h1 so we can stlye it
    ?>
    <!-- Here we'll put the echo in a head -->
    <h1 class="phpEcho1">
        <?php
            echo $userInfo["codeD"];
        ?>
        <!-- And then you can even add more text by just typing text inside the h1 -->
        is the best icecream!
    </h1>

    <!-- The exercise for you now is to make your own h1 and array, you can use the example provided, but it's better to do it yourself! -->
    <!-- And the best part of all => it is that easy that you don't need chat GPT! -->
</body>
</html>