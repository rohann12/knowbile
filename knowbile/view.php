<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/view.css" />

    <title>view</title>
</head>

<body>
<?php  include 'navbar/navbar.php';?>
    <?php
    include 'db.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM mobile_items where id= '$id'";
    $conn = mysqli_connect("localhost", "root", "", "knowbile");
    $result = mysqli_query($conn, $sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
           
            $model = $row['model'];
            $released = $row['released'];
            $cpu = $row['cpu'];
            $gpu = $row['gpu'];
            $ram = $row['ram'];
            $internal = $row['internal'];
            $memory = $row['memory'];
            $battery = $row['battery'];
            $dtype = $row['dtype'];
            $dsize = $row['dsize'];
            $resoultion = $row['resolution'];
            $rearc = $row['rearc'];
            $frontc = $row['frontc'];
        }
    }


    ?>


    <div id="container">
        <div id="productImg">
            <img src="images/mia3.jpg">
        </div>
        <div id="specs">
            <h3>General</h3>
            <ul>
                <li>
                    <div class="attributes">Model</div>
                    <div class="values"><?php echo $model ?></div>
                </li>
                <li>
                    <div class="attributes">Released</div>
                    <div class="values"><?php echo $released ?></div>

                </li>
            </ul>
            <h3>Hardware</h3>
            <ul>
                <li>
                    <div class="attributes">CPU</div>
                    <div class="values"><?php echo $cpu ?></div>
                </li>
                <li>
                    <div class="attributes">GPU</div>
                    <div class="values"><?php echo $gpu ?></div>

                </li>
                <li>
                    <div class="attributes">RAM</div>
                    <div class="values"><?php echo $ram ?></div>

                </li>
                <li>
                    <div class="attributes">Internal Storage</div>
                    <div class="values"><?php echo $internal ?></div>

                </li>
                <li>
                    <div class="attributes">Memory </div>
                    <div class="values"><?php echo $memory ?></div>

                </li>
                <li>
                    <div class="attributes">Battery </div>
                    <div class="values"><?php echo $battery ?></div>

                </li>
            </ul>
            <h3>Display</h3>
            <ul>
                <li>
                    <div class="attributes">Type</div>
                    <div class="values"><?php echo $dtype ?></div>
                </li>
                <li>
                    <div class="attributes">Size</div>
                    <div class="values"><?php echo $dsize ?></div>

                </li>
                <li>
                    <div class="attributes">Resolution</div>
                    <div class="values"><?php echo $resoultion ?></div>

                </li>

            </ul>
            <h3>Camera</h3>
            <ul>
                <li>
                    <div class="attributes">Rear</div>
                    <div class="values"><?php echo $rearc ?></div>
                </li>
                <li>
                    <div class="attributes">Front</div>
                    <div class="values"><?php echo $frontc ?></div>
                </li>
            </ul>


        </div>

    </div>
</body>

</html>