<?php

session_start() ;

$erros = [] ;

include "../core/funnctions.php" ;
include "../core/validations.php" ;
if(checkRequestMethod("POST") && checkPostinput('name')){


foreach($_POST as $key => $value){
    $$key = santizainput($value) ;
}

// vadltaions name => reqire -

if(! reqirderVal($name)){
    $erros[]= "Name is cant be empty" ;
}elseif(minVal($name,3)){
     $erros[]= "Name must be more than 3" ;
}elseif(maxVal($name,20)){
    $erros[]=  "Name cant be ,more than 20char" ;
}elseif(! valiEmail($email)){

$erros[]= "Input must be Email" ;

}


}else{
    $erros[]= "Not Supported method" ;
}

if(empty($erros)){
    $users_file = fopen("../data/users.csv","a+") ;
    
    $data = [$name,$email,sha1($password)];
    fputcsv($users_file,$data) ;
    $_SESSION['auth'] = [$name,$email] ;
   
    header("location:../profile.php") ;
    die() ;

}else{
    $_SESSION['errors'] = $erros;
    header("location:../register.php") ;
    die() ;
}






?>