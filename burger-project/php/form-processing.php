<?php

    function secure_data($data) {
        $data_tr = trim($data);
        $data_str = stripslashes($data_tr);
        $data_secure = htmlspecialchars($data_str);
        return $data_secure;
    }

    function validate_data($data){

        $data_validate ='';
        $is_success=false;
        $error='';

        if(isset($data) && !empty($data) ){
            $is_success = true ;
        } else{
            $data_validate = secure_data($data);
            $error = 'Veuillez remplir ce champs';
        }

        
        return [
            "data"=>$data_validate,
            "success"=> $is_success,
            "error"=> $error
        ];
    }
    ?>