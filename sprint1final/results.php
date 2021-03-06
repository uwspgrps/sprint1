<?php
require_once("Template.php");
require_once("DB.class.php");
$page = new Template("DB Lab");
$page->setHeadSection("<link rel='stylesheet' href='styles/prettylab.css'>");
$page->setTopSection();
$page->setBottomSection();
print $page->getTopSection();
print "
<header>	
  <h1>Book Search Result</h1>
  <nav>
	<a href=index.php>Home</a>
    <a href=asgnabout.php>About</a>
    <a href=contactus.php>Contact</a>
	<a href=booksearch.php>Search</a>
  </nav>
</header>
<main><div class='tdiv'>";
/*
print "<table style="width:100%">
  <tr>
	<th>id</th>
    <th>inserttime</th> 
    <th>booktitle</th>
    <th>isbn</th> 
    <th>author</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td> 
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td> 
    <td>94</td>
  </tr>
</table>";
*/
$db = new DB();
//var_dump($db);
if (!$db->getConnStatus()) {
  print "An error has occurred with connection\n";
  exit;
}
//get POST input and assign to variable here
//sanitize input
if(!empty($_POST['name'])){
	$link = $db->returnDB();
	$input = $_POST['name'];
	$safeInput = mysqli_real_escape_string($link,$input);
	$query = "SELECT booktitle, isbn, author FROM bookinfo WHERE booktitle LIKE '%{$safeInput}%' OR isbn LIKE '%{$safeInput}%' OR author LIKE '%{$safeInput}%'";
	$result = $db->dbCall($query);
	if(!empty($result)){
		$position=0;
		print "<table style='width:50%'>";
		print "<tr>";
		print "<th>Book Title</th>
			  <th>ISBN</th>
			  <th>Author</th>";
		print "</tr>";
		while($position < count($result)){
			print "<tr>";
			print "<td>";
			print $result[$position]['booktitle'] . " ";
			print "</td>";
			print "<td>";
			print $result[$position]['isbn'] . " ";
			print "</td>";
			print "<td>";
			print $result[$position]['author'] . " ";
			print "</td>";
			print "</tr>";
			$position++;
		}
		print "</table>";		
	}	
	else{
		print "Can not find search result.";
	}
}else{
	print "You must fill in a search term";
}
print "</div></main>
	<footer>Sprint 1 Ken Lucas Peter</footer>
	";
print $page->getBottomSection();
?>
