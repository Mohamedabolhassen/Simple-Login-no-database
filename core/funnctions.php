<?php




function checkRequestMethod($method){
    if($_SERVER['REQUEST_METHOD']== $method){
        return true ;
    }

    return false ;
}


function checkPostinput($input){

if(isset($_POST[$input])){
    return true ;
}

return false ;

}






function checkEmpty($input){

if(empty($input)){
    echo " input cnt be empty" ;
}
    
}





function santizainput($input){
    if(!empty($input)){
         return trim(htmlspecialchars(htmlentities($input))) ;
    }else{
           return false ;
    }





    
    
    
   
}