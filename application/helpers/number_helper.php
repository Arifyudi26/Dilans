<?php
    function to_data_angka($inp){
        $outp   = str_replace('.', '', $inp);
        $pecah  = explode(",", $outp);
        $angka  = $pecah[0];
        
        return $angka;
    }

    function formatRp_acc($angka){
        if($angka < 0){
            $format_angka    = '(' . number_format(abs($angka),2,',','.')  .  ')';
        }
        else {
            $format_angka    = number_format($angka,2,',','.');
        }
     
        return $format_angka;
    }
?>
