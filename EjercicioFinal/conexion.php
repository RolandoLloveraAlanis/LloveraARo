
<?php
    function conectar(){        
        $host='localhost';
        $user='root';
        $pass='';
        $db='19100205';
        $con=mysqli_connect($host,$user,$pass);
        mysqli_set_charset($con, 'utf8');
        mysqli_select_db($con,$db);
       return $con;
     }  
?>