<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />


    <title>Park Smart</title>
</head>

<body>
    <?php include 'navbar/navbar.php'; ?>


    <div class="php">
        <?php
        include 'db.php';

        $sql = "SELECT * FROM mobile_items ";
        $conn = mysqli_connect("localhost", "root", "", "Knowbile");
        $result = mysqli_query($conn, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
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

        ?>
                <div class="items-view">
                    <div class="item-pic">
                        <p><a href="view.php?id=<?php echo $id ?>">
                            <img src="images/mia3.jpg" style="width: 73%; margin-left: 12%;"> 
                        </a></p>
                    </div>


                    <div class="itemName">
                        <p> <?php echo $model ?></p>
                    </div>
                </div>

        <?php
            }
        }
        ?>
    </div>



    <style>
        .items-view {
            display: inline-block;
            height: 58vh;
            width: 48vh;
            margin: 10vh;
            background-color: #98c1c1;
            position: relative;
        }
        .item-pic,.itemName{
            display:inline-block;
            flex-direction: column;
        }
    </style>

</body>


</html>