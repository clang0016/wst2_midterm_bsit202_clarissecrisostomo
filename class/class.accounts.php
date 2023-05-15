<?php
class Accounts{
    public function login($data){
        session_start();
        ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
        $pdo = new PDO('mysql:host=localhost;dbname=bsit202_crisostomo_chatroom','root','');

        $query = 'SELECT * FROM accounts WHERE name=:name and password=:password';

        $check = $pdo->prepare($query);
        $check->bindValue('name',$data['name']);
        $check->bindValue('password',$data['password']);
        $check->execute();

        $records = $check->fetchAll();
        if(count($records) == 0){
            echo 'Invalid Username or Password';
        }else{
            $_SESSION['auth'] = $records;
            echo 'success';
        }
    }

    public function register($data){
        ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
        $pdo = new PDO('mysql:host=localhost;dbname=bsit202_crisostomo_chatroom','root','');

        $query = 'SELECT * FROM accounts WHERE name=:name';

        $check = $pdo->prepare($query);
        $check->bindValue('name',$data['name']);
        $check->execute();

        $records = $check->fetchAll();
        if(count($records) == 0){
             $query = 'INSERT INTO accounts(email,name,password) VALUES(:email,:name,:password)';
            $stmt = $pdo->prepare($query);
            $stmt->bindValue('email',$data['email']);
            $stmt->bindValue('name',$data['name']);
            $stmt->bindValue('password',$data['password']);


            $stmt->execute();

            return 'success';
        }else{
            return 'username already exist';
        }
       
    }
}