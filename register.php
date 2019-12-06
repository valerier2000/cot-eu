<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COT EU</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-4">
        <?php
            if($_COOKIE['user'] == ''):
        ?>
        <div class="row">
            <div class="col">
                <h1>Registration form</h1>
                <form action="validation-form/check.php" method="POST">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Enter login"><br>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"><br>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"><br>
                    <input type="password" class="form-control" name="password" id="password"
                        placeholder="Enter password"><br>
                    <button class="btn btn-success" type="submit">Sign Up</button>
                </form>
            </div>
            <div class="col">
                <h1>Authorization form</h1>
                <form action="validation-form/auth.php" method="POST">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Enter login"><br>
                    <input type="password" class="form-control" name="password" id="password"
                        placeholder="Enter password"><br>
                    <button class="btn btn-success" type="submit">Log In</button>
                </form>
            </div>
                <?php else: ?>
                    <p>Hello <?=$_COOKIE['user']?>! Click <a href="/exit.php">here</a> to exit</p>
                <?php endif;?>
        </div>
    </div>
</body>

</html>