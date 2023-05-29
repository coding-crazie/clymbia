<?php
namespace App\Gates;

class AdminGate{
    public function check_admin($user){
        if($user->email==='fischermartin005@gmail.com' || $user->email==='alex.martin@refundments.com'){
            return true;
            
        }else{
            return false;
        }
    }  
}

