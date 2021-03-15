<?php
    $date = new DateTime();
    $date->modify('next sunday');
    

    if (date('l') == $date->format('l')) {
        $nextSunday = "Today";
    } else {
        $nextSunday = $date->format('l, F jS');
    }
