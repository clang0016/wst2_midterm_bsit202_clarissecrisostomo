<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <main>
        <div>
            <div>
                <div>
                    <h1>Registration Form</h1>
                </div>
                <div>
                    <div id="registration_status"></div>
                    <form id="register">
                        Email: <br>
                        <input type="text" name="email" id="email" required>
                        <br>
                        Name: <br>
                        <input type="text" name="name" id="name" required>
                        <br>
                        Password: <br>
                        <input type="password" name="password" id="password" required>
                        <br><br>
                        <button type="button" class="register">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>

</body>
</html>