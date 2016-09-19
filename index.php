<?php
header('Access-Control-Allow-Origin: *');  
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false); 

if($_POST['name']!=""&&$_POST['email']!=""){
 $myfile = fopen($_POST['name'].".txt", "x+") or die("Unable to open file!");
 $txt = "name ".$_POST['name']." email ".$_POST['email'];
 fwrite($myfile, $txt);

 echo "success !!";
}

?>