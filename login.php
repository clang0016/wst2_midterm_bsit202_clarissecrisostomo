<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <main>
        <?php
        session_start();
        if(isset($_SESSION['auth'])){
                header('location:home.php');
        }
        ?>
        <div>
            <div>
                <div>
                    <h1>Log In</h1>
                </div>
                <div>
                    <form id="login">
                        Username: <br>
                        <input type="text" name="username" id="username" required>
                        <br>
                        Password: <br>
                        <input type="password" name="password" id="password" required>
                        <br><br>
                        <input type="submit" value="Log In">
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="assets/js/jquery.min.js"></script>
</body>
</html>