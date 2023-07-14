<?php
    $con = mysqli_connect('localhost','root');

    if($con){
        echo "Connection Successful";
    }
    else{
        echo "Connection Failed";
    }

    mysqli_select_db($con, 'remotecontrol');

    $direction = $_POST['letter'];

    $query = "INSERT INTO directions (direction) VALUES ('$direction')";
    $query2 = "SELECT direction FROM directions ORDER BY id DESC LIMIT 1";

    mysqli_query($con,$query);

    $result = mysqli_query($con, $query2);

    if (!$result) {
        echo "Error retrieving direction: " . mysqli_error($con);
    } else {
        $row = mysqli_fetch_assoc($result);
        $last_letter = $row['direction'];
    }    
    
    header('location:index.php');
    session_start();
    $_SESSION['last_letter'] = $last_letter;
?>