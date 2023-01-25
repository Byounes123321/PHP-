<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 1: Links and Variables</title>
</head>
<body>
<h1> PHP Exercise 1: Links and Variables</h1>
<p> Use PHP echo and variables to output the following link information:</p>


<hr>


<?php
    $linkName = 'CodeCademy';
    $linkURL = 'https://www.codecademy.com/';
    $linkImage = 'https://i.pcmag.com/imagery/reviews/05XBKmNFYeHCMIn726Nohqb-10..v1627594235.png';
    $linkDescription = 'Learn to code interactively, for free.';

    echo '<h1>'.$linkName.'</h1>
                <p>'.$linkDescription.'<p>
                <img src='.$linkImage.' height=200px></img>
                <p><a href='. $linkURL.'>Visit CodeCademy </p>' ;
?>
    
</body>
</html>