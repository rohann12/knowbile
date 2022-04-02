<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/style.css" />



</head>

<body>
<?php  include 'navbar/navbar.php';?>
    <div id="admin-add">
        <form action="add.php" method="post">
            <div id="container">
                <h3>General</h3></br>
                <Label for="model">Model:</Label>
                <input type="text" name="model" id="model" required></br>

                <Label for="released">Released:</Label>
                <input type="text" name="released" id="released" required></br>

                <h3>Hardware</h3></br>
                <Label for="cpu">CPU:</Label>
                <input type="text" name="cpu" id="cpu" required></br>

                <Label for="gpu">GPU:</Label>
                <input type="text" name="gpu" id="gpu" required></br>

                <Label for="ram">RAM:</Label>
                <input type="text" name="ram" id="ram" required></br>

                <Label for="internal">Internal Storage:</Label>
                <input type="text" name="internal" id="internal" required></br>

                <Label for="memory">Memory:</Label>
                <input type="text" name="memory" id="memory" required></br>

                <Label for="battery">Battery:</Label>
                <input type="text" name="battery" id="battery" required></br>

                <h3>Display</h3></br>
                <Label for="dtype">Type:</Label>
                <input type="text" name="dtype" id="dtype" required></br>

                <Label for="dsize">Size:</Label>
                <input type="text" name="dsize" id="dsize" required></br>

                <Label for="resolution">Resolution:</Label>
                <input type="text" name="resolution" id="resolution" required></br>

                <h3>Camera</h3></br>
                <Label for="rearc">Rear Camera:</Label>
                <input type="text" name="rearc" id="rearc" required></br>

                <Label for="frontc">Front Camera:</Label>
                <input type="text" name="frontc" id="frontc" required></br></br>
                <input type="submit" value="Save">
            </div>

        </form>
    </div>

    </html>