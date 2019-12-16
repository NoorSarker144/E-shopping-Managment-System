<?php

function getMonth($month) {
    $months = array('January','February','March','April','May','June','July','August','September','October','November','December');
    return $months[$month];
}

function getMonth2($month) {
    $months = array('01' => 'January','02' => 'February','03' => 'March','04' => 'April','05' => 'May','06' => 'June','07' => 'July','08' => 'August','09' => 'September','10' => 'October','11' => 'November','12' => 'December');
    return $months[$month];
}

function is_leap_year($year) {
    return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year %400) == 0)));
}

function message($messages) {
    echo "<div class=\"alert alert-success\">";
    echo "<span class=\"glyphicon glyphicon-thumbs-up\"></span> $messages";
    echo "</div>";
}
