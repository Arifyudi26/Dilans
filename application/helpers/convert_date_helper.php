<?php
    function convert_to_dmy($date) {
        $date = date("d-m-Y", strtotime($date));
        return $date;
    }

    function convert_to_d_M_y($date) {
        $date = date("d-M-Y", strtotime($date));
        return $date;
    }
	
    function convert_to_ymd($date) {
        $date = date("Y-m-d", strtotime($date));
        return $date;
    }
	
    function convert_to_textual($date) {
        $date = date("d M Y", strtotime($date));
        return $date;
    }
	
    function convert_month_to_int($month) {
        switch($month) {
            case "Jan" : 
                $month = "01";
            break;
        
            case "Feb" : 
                $month = "02";
            break;
        
            case "Mar" : 
                $month = "03";
            break;
        
            case "Apr" : 
                $month = "04";
            break;
        
            case "May" : 
                $month = "05";
            break;
        
            case "Jun" : 
                $month = "06";
            break;
        
            case "Jul" : 
                $month = "07";
            break;
        
            case "Aug" : 
                $month = "08";
            break;
        
            case "Sep" : 
                $month = "09";
            break;
        
            case "Oct" : 
                $month = "10";
            break;
        
            case "Nov" : 
                $month = "11";
            break;
        
            case "Dec" : 
                $month = "12";
            break;
        }

        return $month;
    }
	
    function convert_month_to_string($month) {
        switch($month) {
            case "01" : 
                $month = "Jan";
            break;
        
            case "02" : 
                $month = "Feb";
            break;
        
            case "03" : 
                $month = "Mar";
            break;
        
            case "04" : 
                $month = "Apr";
            break;
        
            case "05" : 
                $month = "May";
            break;
        
            case "06" : 
                $month = "Jun";
            break;
        
            case "07" : 
                $month = "Jul";
            break;
        
            case "08" : 
                $month = "Aug";
            break;
        
            case "09" : 
                $month = "Sep";
            break;
        
            case "10" : 
                $month = "Oct";
            break;
        
            case "11" : 
                $month = "Nov";
            break;
        
            case "12" : 
                $month = "Dec";
            break;
        }

        return $month;
    }
	
    function convert_month_to_integer($month) {
        switch($month) {
            case "Jan" : 
                $month = 1;
            break;
        
            case "Feb" : 
                $month = 2;
            break;
        
            case "Mar" : 
                $month = 3;
            break;
        
            case "Apr" : 
                $month = 4;
            break;
        
            case "May" : 
                $month = 5;
            break;
        
            case "Jun" : 
                $month = 6;
            break;
        
            case "Jul" : 
                $month = 7;
            break;
        
            case "Aug" : 
                $month = 8;
            break;
        
            case "Sep" : 
                $month = 9;
            break;
        
            case "Oct" : 
                $month = 10;
            break;
        
            case "Nov" : 
                $month = 11;
            break;

            case "Dec" : 
                $month = 12;
            break;
        }

        return $month;
    }

    function change_month_indonesia($month){
        $arr_month = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
        return $arr_month[$month-1];
    }
?>