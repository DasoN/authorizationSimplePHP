<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Form registration</title>
</head>
<body>
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="showRegData">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php
            error_reporting(0);
            if($_COOKIE['user'] == ''):
        ?>

        <div class="row">
            <div class="col">
                <h1>Form of registration</h1>
                <form action="validation-form/check.php" id="regForm" method="post">
                    <input type="text" name="login" id="loginReg" class="form-control" placeholder="input login"><br>
                    <input type="text" name="name" id="nameReg" class="form-control" placeholder="input name"><br>
                    <input type="password" name="password" id="passwordReg" class="form-control" placeholder="input password"><br>
                    <button class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop" id="regBtn" type="submit">reg</button>
                </form>
            </div>
            <div class="col">
                <h1>Form of Auth</h1>
                <form action="validation-form/auth.php"  id="authForm" method="post">
                    <input type="text" name="login" id="loginAuth" class="form-control" placeholder="input login"><br>
                    <input type="password" name="password" id="passwordAuth" class="form-control" placeholder="input password"><br>
                    <button class="btn btn-success" id="authBtn" type="submit">auth</button>
                </form>
            </div>
        </div>
        <?php else: ?>
            <p>Hi <?=$_COOKIE['user']?>. You are log in your profile. Press <a href="/exit.php">Leave</a> to exit from profile.</p>
        <?php endif;?>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./js/index.js"></script>
</body>
</html>