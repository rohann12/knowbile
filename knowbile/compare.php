<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/compare.css" />

    <title>view</title>
</head>

<body>
  

<?php include 'navbar/navbar.php'; 
    include 'db.php';
    $id=$_POST['model1'];
    

    //for first item
    $sql = "SELECT * FROM mobile_items where model like '$id%'";
    $conn = mysqli_connect("localhost", "root", "", "knowbile");
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
        }
        
            
    }
    // for second item
    $id1=$_POST['model'];
    // $id1=4;
    $sql1 = "SELECT * FROM mobile_items where model like '$id1%'";
    $conn1 = mysqli_connect("localhost", "root", "", "knowbile");
    $result1 = mysqli_query($conn1, $sql1);
    if ($result1) {
        while ($row = mysqli_fetch_assoc($result1)) {
            $id1 = $row['id'];
            $model1 = $row['model'];
            $released1 = $row['released'];
            $cpu1 = $row['cpu'];
            $gpu1 = $row['gpu'];
            $ram1= $row['ram'];
            $internal1 = $row['internal'];
            $memory1 = $row['memory'];
            $battery1 = $row['battery'];
            $dtype1 = $row['dtype'];
            $dsize1 = $row['dsize'];
            $resoultion1 = $row['resolution'];
            $rearc1 = $row['rearc'];
            $frontc1 = $row['frontc'];
        }

    }
    ?>
    <div id="container">
        
        <!-- <div id="productImg">
            <img src="images/mia3.jpg">
        </div> --></br>
        <div id="specs">
            <h3>General</h3>
            <ul>
                <li>
                    <div class="values"><?php echo $model1 ?></div>
                    <div class="attributes">Model</div>
                    <div class="values1"><?php echo $model ?></div>
                </li>
                <li>
                    <div class="values"><?php echo $released1 ?></div>
                    <div class="attributes">Released</div>
                    <div class="values1"><?php echo $released ?></div>

                </li>
            </ul>
            <h3>Hardware</h3>
            <ul>
                <li>
                    <div class="values"><?php echo $cpu1 ?></div>
                    <div class="attributes">CPU</div>
                    <div class="values1"><?php echo $cpu ?></div>
                </li>
                <li>
                    <div class="values"><?php echo $gpu1 ?></div>
                    <div class="attributes">GPU</div>
                    <div class="values1"><?php echo $gpu ?></div>

                </li>
                <li>
                    <div class="values"><?php echo $ram1 ?></div>
                    <div class="attributes">RAM</div>
                    <div class="values1"><?php echo $ram ?></div>

                </li>
                <li>
                    <div class="values"><?php echo $internal1 ?></div>
                    <div class="attributes">Internal Storage</div>
                    <div class="values1"><?php echo $internal ?></div>

                </li>
                <li>
                    <div class="values"><?php echo $memory1 ?></div>
                    <div class="attributes">Memory </div>
                    <div class="values1"><?php echo $memory ?></div>

                </li>
                <li>
                    <div class="values"><?php echo $battery1 ?></div>
                    <div class="attributes">Battery </div>
                    <div class="values1"><?php echo $battery ?></div>

                </li>
            </ul>
            <h3>Display</h3>
            <ul>
                <li>
                    <div class="values"><?php echo $dtype1 ?></div>
                    <div class="attributes">Type</div>
                    <div class="values1"><?php echo $dtype ?></div>
                </li>
                <li>
                    <div class="values"><?php echo $dsize1 ?></div>
                    <div class="attributes">Size</div>
                    <div class="values1"><?php echo $dsize ?></div>

                </li>
                <li>
                    <div class="values"><?php echo $resoultion1 ?></div>
                    <div class="attributes">Resolution</div>
                    <div class="values1"><?php echo $resoultion ?></div>

                </li>

            </ul>
            <h3>Camera</h3>
            <ul>
                <li>
                    <div class="values"><?php echo $rearc1 ?></div>
                    <div class="attributes">Rear</div>
                    <div class="values1"><?php echo $rearc ?></div>
                </li>
                <li>
                    <div class="values"><?php echo $frontc1 ?></div>
                    <div class="attributes">Front</div>
                    <div class="values1"><?php echo $frontc ?></div>
                </li>
</br>
</br>
            </ul>


        </div>

    </div>
</body>

</html>