<?php
    function getRandomPassword($password_length){
        require_once __DIR__ . '/../data/alphabet.php';
    
        $random_index = array_rand($final_array, $password_length);
    
        $password_array = [];
        
        foreach ($random_index as $index) {
            $password_array[] = $final_array[$index];
           }
           
           $password = implode('', $password_array);
        
           return $password;
           
    }; 

?>