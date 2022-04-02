<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    

    <title>view</title>
</head>

<body>
  

<?php include 'navbar/navbar.php'; ?>
<div class="container">
<form method="post" action="compare.php">
            <label for="model">Model 1</label>
            <input type="text" name="model" id="model"><br/></br>
            <label for="model1">Model 2</label>

            <input type="text" name="model1" id="model1">

            <input type="submit" value="Save">

        </form>
</div>

<style>
    .container{
        position:relative;
        margin:auto;
        margin-top:10%;
        width:20%;
        height:30%;
        background-color:#6e8fa1;
    }
    input{
        position: relative;
        margin:5%;
        width:80%;
        display: inline-block;
        padding: 2.5%;
        text-align: center;

    }
</style>