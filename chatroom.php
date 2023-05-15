<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatroom</title>
</head>
<body>
    <?php
        session_start();

        if(!isset($_SESSION['auth'])){
            header('login.php');
        }
    ?>
    <header>
        <div>
            <h1><center>Chatroom</center></h1>
        </div>
    </header>
    <main>
        <div class="messages">

        </div>

    </main>
    <footer>
        <input type="text" id="message" placeholder="Type your text here...">
    </footer>
</body>
</html>