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
        <div>
            <div>
                <div>
                    <h1>Log In</h1>
                </div>
                <div>
                <div id="login_status"></div>
                    <form id="login">
                        Name: <br>
                        <input type="text" name="name" id="name" required>
                        <br>
                        Password: <br>
                        <input type="password" name="password" id="password" required>
                        <br><br>
                        <button type="button" class="login">Log In</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/login.js"></script>

</body>
</html>