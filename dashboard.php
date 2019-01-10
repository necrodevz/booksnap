<?php 
// Include Auth
require_once 'api/config/auth.php';
checkLogin();
?>

<!DOCTYPE html>
<html>
<head>
    <!--
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    -->
    <title>Book Search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <style>
        #id{
            padding: 0, 10, 0, 10;
        };
    </style>
</head>
<body>
   
       
    <div id="content" class="container fluid">
        <div class='row'>
            <h1> Welcome to the Dashboard </h1>
            <h3> Please select an option from the operations listed below </h3>
            <hr />
        </div>
        <div class='row'>
            <h2>Books</h2>
            <ul>
                <li><a href="api/book/add-book.php">Add Book</a></li>
                <li>View/Edit Book Info: <form action="api/actions/view_book.php" method='post'><input type='text' placeholder="ISBN" required name="isbn" /><input type='submit' value='Go' /></form></li>
                <li>Remove Book</li>
            </ul>
        </div>
        <div class='row'>
            <h2>Members</h2>
            <ul>
                <li>View/Edit Member Info: <form action="api/actions/view_member.php" method='post'><input type='text' placeholder="Member Id" required name="member_id" /><input type='submit' value='Go' /></form></li>
                <li>Issue Book to Member: <form action="api/actions/issue_book.php" method='post' ><input type='text' placeholder="Member Id" required name="member_id" /><input type='submit' value='Go' /></form></li>
                <li>Receive Issued Book: <form action="api/actions/return_book.php" method='post'><input type='text' placeholder="ISBN" required name="isbn" /><input type='submit' value='Go' /></form></li> 
                <li>Report Lost Book</li>
            </ul>
        </div>
        <div class='row'>
            <h2>Admin</h2>
            <ul>
                <li>Add Member</li>
                <li>Recover Lost Book: <form action="api/actions/return_book.php" method='post'><input type='text' placeholder="ISBN" required name="isbn" /><input type='submit' value='Go' /></form></li>
                <li>Revoke Membership</li>
            </ul>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>