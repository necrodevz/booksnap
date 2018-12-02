<?php 
// Include Auth and DB
require_once 'backend/auth.php';
require_once 'backend/db.php';


// Check if the User is logged in
checkLogin();

// Define variables
$books = array();
//$book = array();

// Define functions
function getBooks(){
    $result = getTableData('books');
    $books = mysqli_fetch_array($result) ? mysqli_fetch_array($result) : [];
}

?>
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
            <div class="col-md-3 ">
                <div class="row">
                    <a class="btn btn-primary" href="/book/backend/logout.php" role="button">Logout</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link"  href="/book/dashboard.php">Dash</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Books</a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="/book/books.php">View Books</a>
                            <a class="dropdown-item" href="/book/backend/add-book.php">Add a Book</a>
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
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>isbn</th>
                                <th>name</th>
                                <th>description</th>
                                <th>year_published</th>
                                <th>genre</th>
                                <th>author</th>
                                <th>publisher</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($books as $book) {?>
                            <tr>
                                <?php foreach ($book as $field) {?>
                                <td><?php echo $field; ?></td>
                            </tr>
                            <?php } ?>
                            <tr>
                                
                            </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>    
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>