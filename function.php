<?php
    if(!function_exists('showTimeStamp')){
        function showTimeStamp(){
            date_default_timezone_set('Asia/Kolkata');
            $months = ['January','February','March','April','May','June','July','August','September','October','November','December'];

            $day = date('d');
            $month_index = date('m');
            $month_index = intval(str_replace('0', '', $month_index));
            $month = $months[$month_index-1];
            $year = '20'.date('y');
            $time = date('H:i:s');
            $time_stamp = $day.'-'.$month.'-'.$year.' '.$time;
            return $time_stamp;
        }
    }
?>