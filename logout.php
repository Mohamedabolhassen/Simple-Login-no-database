<?php

include "./inc/header.php" ;
include "./inc/nav.php" ;
include "./inc/fotter.php" ;

session_start() ;



session_destroy() ;

header("location:index.php") ;

?>


<h1>LogOut!</h1>