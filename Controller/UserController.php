<?php 
    require_once 'Model/MasterModel.php';
    
    class UserController {
        public function login()
        {
            require_once "Model/Home.php";
            $db = new Home();
            $products= $db->get_all_product();
  
            $user_name= $_POST['user_name'];
            $_SESSION['user_name']= $_POST['user_name'];
            require 'View/index.php';
        }
    }


?> 