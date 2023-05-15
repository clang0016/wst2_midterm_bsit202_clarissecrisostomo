<?php

class Messages{
    public function send($data){
        session_start();

        $id = $_SESSION['auth'][0]['id'];
        ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
        $pdo = new PDO('mysql:host=localhost;dbname=wst2_midterm_bsit202_clarissecrisostomo','root','');

        $query = 'INSERT INTO chats(account_id,message) VALUES(:account_id,:message)';
        $insert = $pdo->prepare($query);
        $insert->bindValue('account_id',$id);
        $insert->bindValue('message',$data['message']);
        $insert->execute();

        echo 'success';
    }

    public function collect(){
        session_start();

        $id = $_SESSION['auth'][0]['id'];
        $pdo = new PDO('mysql:host=localhost;dbname=chatroom','root','');

        $stmt = $pdo->prepare('
                    SELECT id, name, messages.message FROM accounts
                        INNER JOIN messages ON accounts.id = messages.account_id
                        ORDER BY messages.chats_timestamp ASC
                    ');
        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $html = '';
        foreach($data as $message){
            if($id == $message['id']){
                $html.='<div>
                <div class="col-md-4 bg-primary p-2 float-end mb-2" style="border-style: hidden; border-radius:20px;">
                    <p class="text-white"> You</p>
                    <p>'.$message['message'].'</p>
                </div>
            </div>';
            }else{
                $html.='
                <div>
                    <div class="col-md-4 bg-secondary p-2 mb-2" style="border-style: hidden; border-radius:20px;">
                        <p class="text-white"> '.$message['name'].'</p>
                        <p>'.$message['message'].'</p>
                    </div>
                </div>';
            }
            
        }
        echo $html;
    }
}