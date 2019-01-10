<?php 
// Include Auth and DB
require_once 'auth.php';
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


</head>
<body>
   
    <!-- // Add Book Component -->
    <form class="form-issue-book text-center" method="post" action="/api/index.php?action=issue&obj=book" >
      <img class="mb-4" src="https://nlj.gov.jm/wp-content/uploads/2018/04/nlj-logo-web-header.gif" alt="nlaLogo" width="166" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Issue Book</h1>
      <section>
	  <div class="form-group">
      <label for="bookISBN" class="sr-only">ISBN</label>
      <input type="text" id="bookISBN" class="form-control" placeholder="ISBN Number" required autofocus name="bookISBN">
	  </div>
	  <div class="form-group">
	  <label for="bookName" class="sr-only">Member ID</label>
      <input type="text" id="bookName" class="form-control" placeholder="Book Name" required autofocus name="bookName">
	  </div>
	  </section
      <div class="form-group">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="next_book"> Issue Next Book
        </label>
      </div>
	  </div>
      <div class="form-group">
      <button class="btn btn-lg btn-primary btn-block" type="submit">Issue </button>
      </div>
	  <p class="mt-5 mb-3 text-muted">&copy; 2018 </p>
    </form>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>