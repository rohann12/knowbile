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

    <?php include 'navbar/navbar.php'; ?>
    <table>
        <h2>Mobile items</h2>
        <tr>
            <th>Model</th>
            <th>Released</th>
        </tr>
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
                <tr>
                    <td><?php echo $model ?></td>
                    <td><?php echo $released ?></td>
                </tr>
        <?php
            }
        }
        ?>

        <style>
            table,
            td,
            th {
                border: 1px solid;
            }

            th {
                background-color: #2d2525;
                color: white;
            }
        </style>
    </table>
</body>

</html>
