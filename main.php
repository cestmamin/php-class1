<!-- In PHP we start as following -->
<?php
    //We start opening our code using the php marks

    //We want to make an array for our user information, we do this by defining using a $ sign and the variable name
    //$userInfo = array()
    $userInfo = array(
        //Inside the brackets of the array you put the variables you need, in this case I made variables codeA and codeB and named them Hello and Goodbye.
        //That is the information that I want to echo in our index.php file.
        "codeA" => "Hello!",
        //In php we use =>, this means codeA is Hello or codeA is equal to Hello
        "codeB" => "Goodbye " . "My Friend!",
        //You can add more strings or even numbers by using a dot, . , this is the same thing as the function of a comma in php
        "codeC" => 5,
        //And even variables from other documents, in this case we will be using the file named extra.php
        //See the code below

    );

    //We do this as shows before using the incluse method
    
    // Include 'extra.php'
    include 'extra.php';

    // Assign a value to $codeD
    $codeD = $cookieDough;

    // Add $codeD to the $userInfo array
    $userInfo["codeD"] = $codeD;
?>