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
        .dash-btn {
            margin:35px;
        }
        .row {
            margin: 10px;
            padding:20px;
        }
    </style>
</head>
<body>
    <div class="container  fluid">
        <div class="row" >
            <div class="col-md-3 col-md-offset-1">
                <a class="btn btn-primary" href="/book/backend/logout.php" role="button">Logout</a>
            </div>
            <div class="col-md-7 col-md-offset-1">
                <div class="row">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active"  href="/book/dashboard.php">Dash</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Books</a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="/book/books.php">View Books</a>
                            <a class="dropdown-item" href="/book/backend/not-found.php">Add a Book</a>
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
                <!-- Suggestion: refactor this to use a PHP iterator -->
                <div class="row">
                    <a class="btn btn-outline-primary dash-btn" href="/book/backend/not-found.html" role="button">New Member</a>
                    <a class="btn btn-outline-primary dash-btn" href="/book/backend/not-found.html" role="button">Cancel Membership</a>
                </div>    
                <div class="row">
                    <a class="btn btn-outline-primary dash-btn" href="/book/backend/not-found.html" role="button">Issue Book</a>
                    <a class="btn btn-outline-primary dash-btn" href="/book/backend/not-found.html" role="button">Accept Return</a>
                    <a class="btn btn-outline-primary dash-btn" href="#" role="button">File Complaint</a>
                </div>    
            </div>
    </div>
    </div>
    
    