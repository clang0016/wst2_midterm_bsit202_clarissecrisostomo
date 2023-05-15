<?php
require_once('../class/class.accounts.php');
require_once('../class/class.messages.php');
$accounts = new Accounts;
if($_GET['ind'] == 'register'){
    echo $accounts->register($_POST);
}
if($_GET['ind'] == 'login'){
    echo $accounts->login($_POST);
}

if($_GET['ind'] == 'send'){
    $messages = new Messages;
    $messages->send($_POST);
}

if($_GET['ind'] == 'collect'){
    $messages = new Messages;
    echo ($messages->collect());
}

?>