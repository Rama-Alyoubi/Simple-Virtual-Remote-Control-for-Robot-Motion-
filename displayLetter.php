<?php
    session_start();

    if (isset($_SESSION['last_letter'])) {
        $last_letter = $_SESSION['last_letter'];
    } else {
        $last_letter = 'No data available';
    }

?>

<p><?php echo $last_letter; ?></p>