<?php
    if(!isset($_SESSION['loggedin'])){
            header("location: /srProject/account/userIndex.php?action=forgot");
        }
?>

<!DOCTYPE html>
<html lang ="en">
  <head>
    <title>Photography</title>
    <meta charset="utf-8"/>
    <meta name="description" content="baby and toddler toys">
    <meta name="author" content="Shaela Sutton">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/srProject/css/home.css" type="text/css" rel="stylesheet"/>
    <link href="/srProject/css/signIn.css" type="text/css" rel="stylesheet"/>
</head>
<body>
    
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/srProject/common/header.php'; ?>
    
    <main id="sched">
        
        <?php 
        if(isset($sessionName)){
            echo "<h2>Welcome $sessionName</h2>";
        }
        
        echo "<h3>Available Slots</h3> $showTimes"; ?>
        
        
        <?php
        echo "<h3>Your Scheduled PhotoShoot</h3> $seePersonal";
        
        if($_SESSION['clientData']['clearance'] == 3){
            echo '<h3>Enter A Time Slot</h3><form action="../sched/schedIndex.php" method="post">
            <label for="date">Enter the Date: </label>
            <input type="date" name="date" required>
            <label for="startTime">Start Time: </label>
            <input type="time" name="startTime" required>
            <label for="endTime">End Time: </label>
            <input type="time" name="endTime" required>
            <button type="submit" name="action" value="addSched">Add Photoshoot Time</button>
            </form>';
        }
        ?>
    </main>
</body>
</html>