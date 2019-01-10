<?php
$action = $_GET['action'];
$obj = $_GET['obj'];
require_once 'config/auth.php';
require_once 'config/db.php';


switch ($action && $obj) {
	case ($action == 'add' && $obj == 'book'):
		addBookToDatabase();
		break;
	case ($action == 'add' && $obj == 'member'):
		addNewMember();
		break;
	case ($action == 'issue' && $obj == 'book'):
		issueBookToMember();
		break;
	default:
		headers('Location: "/dashboard.php?&newtry"');
		
}

// Adds a new Member to the Database
function addNewMember(){
	$member = null;
	$member->name = htmlspecialchars($_POST['memberName']);
	$member->email = htmlspecialchars($_POST['memberEmail']);
	$result = saveRowData($member, 'member');

	if ($result && $_POST["next_book"]) {
		headers('Location: "api/member/add-member.php?&next_member"');
	} else {
		headers('Location: "/dashboard?&new_member={$result}"');
	}

}

// Gets the Book object from the Post request using htmlspecialchars
function addBookToDatabase(){
	$book = null;
	$book->isdn = htmlspecialchars($_POST['bookISBN']);
	$book->name = htmlspecialchars($_POST['bookName']);
	$book->description = htmlspecialchars($_POST['bookDescription']);
	$book->year_published = htmlspecialchars($_POST['bookYearPublished']);
	$book->genre = htmlspecialchars($_POST['bookGenre']);
	$book->author = htmlspecialchars($_POST['bookAuthor']);
	$book->publisher = htmlspecialchars($_POST['bookPublisher']);
	$result = saveRowData($book, 'books');

	if ($result && $_POST["next_book"]) {
		headers('Location: "/add-book&next_book"');
	} else {
		headers('Location: "/dashboard?&new_book={$result}"');
	}
}

