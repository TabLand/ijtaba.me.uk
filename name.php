<?php
    function whats_my_name() {
        if(isset($_SERVER['HTTP_REFERER'])){ 
            $my_name = check_list($_SERVER['HTTP_REFERER']);
        }
        else {
            $my_name = "Ijtaba";
        }
        return $my_name;
    }

    function check_list($referer){
         $names   = file('names.list',FILE_IGNORE_NEW_LINES);
         $my_name = preg_replace("/https?:\/\//", "",$referer);
         $my_name = preg_replace("/\.tk/",        "",$my_name);
         $my_name = preg_replace("/www\./",       "",$my_name);
         $matches = array();
         $my_name = preg_match("/[A-Za-z]+/",$my_name,$matches);
         
         if(count($matches)==1){
            if(in_array($matches[0],$names)){
                return ucfirst($matches[0]);
            }
            else {
                return "Ijtaba";
            }
         }
         else {
             return "Ijtaba";
         }
    }
?>
