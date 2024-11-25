<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <title>Tenperature</title>
</head>

<body>
    <?php include("data.php");
    
    $state = "";
    
    if ($OnlTemp[0]["temp"] >= 30){
        $state = "hot";
    }elseif($OnlTemp[0]["temp"]<=20){
        $state = "cold";
    }else{$state = "normal";}
    ?>

    
    <center>
        <h1 style="font-size: 800%; margin:0; padding:0;" <?php echo "class=".$state ?>>
            <?php echo $OnlTemp[0]["temp"] ?>&deg;
        </h1>
        <p>now your temperature is <?php echo $OnlTemp[0]["temp"] ?>&deg;</p>
    </center>
    
    <br><br>

    <center>
        <table border="1" width="80%" align="center" class="datatable">
            <tr>
                <th>Temp</th>
                <th>Time</th>
            </tr>
            <?php
            
            foreach ($lastTemp as $i) {
                echo "<tr>";
                echo "<td>{$i["temp"]}</td>";
                echo "<td>{$i["time"]}</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <br><br>
        <a class="but" href="all.php">View All</a>
    </center>
    





    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
</body>

</html>