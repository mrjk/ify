<?php

/* This template helps to develop Ify */


//
// HEADERS
//////////

// Include CSS
echo '<header><link rel="stylesheet" href="../lib/ify/style2.css"></header><body>';

// Include libs
include('../ify.php');

// Set dynmic output
flush(); @ob_flush();  ## make sure that all output is sent in real-time

// Set time limit
set_time_limit ( 30 );

// Define user context
global $conf;
$conf = new ifyConfig('config.php');
$conf->setUser("jez");

// Initialise DB backend
$db = new ifyDB($conf);

// Initialise timer
$d->timerStart();
#$d->log(1, "Mon message", $tutu, $titi);






//
// CODE EXPERIMENTATIONS
////////////////////////


$search='all';
$result= $db->smartQuery($search, "count-title count-album", "", "html-table");

$result1= $db->smartQuery($search, "album count-title count-album", "album", "html-table");

echo "<table border='1'>";
print('<tr> </tr>' . $result);
print($result1);
echo "</table>";



// Remind closing the MySQL connection at the end
unset($db);
$d->timerGet();
echo "</body>"
?>
