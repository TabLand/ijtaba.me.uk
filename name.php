<?php
    function whats_my_name() {
        if(isset($_GET['name'])) $my_name = $_GET['name']; 
        elseif(isset($_SERVER['HTTP_REFERER'])) $my_name = $_SERVER['HTTP_REFERER'];
        else $my_name = "Ijtaba";

       $my_name = preg_replace("/https?:\/\//", "",$my_name);
       $my_name = preg_replace("/\.tk/", "",$my_name);
       $matches = array();
       $my_name = preg_match("/[A-Za-z]+/",$my_name,$matches);

       if(count($matches)==1) {
            $my_name = ucfirst($matches[0]);
            return $my_name;
       }
       else{
            return "Ijtaba";
       }
    }
?>
