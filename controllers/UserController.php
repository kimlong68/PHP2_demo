<?php
    require_once('models/UserModel.php');
    class UserController{
        public function getUser(){
            $username = isset($_POST['username'])? $_POST['username']: '';
            $password = isset($_POST['password'])? $_POST['password']: '';
            if($password != '' && $username != ''){
                $usermodel = new UserModel();
                $user = $usermodel->login($username, $userpassword);

                if($user){
                    echo "chuc mung ban da dang nhap thanh cong";
                }else{
                    require_once('views/Login.php');
                    echo 'sai ten dang nhap hoac mat khau';
                }
            }else{
                require_once('views/Login.php');
            }
        }
    }
?>