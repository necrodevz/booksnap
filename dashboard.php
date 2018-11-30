<?php require_once 'backend/auth.php'; checkLogin(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    -->
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body{
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container  fluid">
        <div class="col-md-2">

        </div>
        <div class="col-md-6">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active"  href="#">Dash</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Books</a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">View Books</a>
                    <a class="dropdown-item" href="#">Add a Book</a>
                    <!--
                    <a class="dropdown-item" href="#"></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
-->    
                </div>
                </li>
                <!--
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
-->
            </ul>
        </div>
    </div>
</body>
</html>