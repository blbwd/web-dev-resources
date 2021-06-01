
<?php
     // Convert from MySQL Date format: yyyy-mm-dd
     // into dd/mm/yyyy

     // @param MySQL $date
     //@return string dd/mm/yyyy
     
    function convertDate($date)
    {
        $date_array = explode("-",$date); // split the array
        $y = $date_array[0];
        $m = $date_array[1];
        $d = $date_array[2];
        
        return $d . "/" . $m . "/" . $y;
    }
    ?>