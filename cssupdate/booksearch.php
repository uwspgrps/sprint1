<?php
require_once("Template.php");
$page = new Template("Search");
$page->setHeadSection("<link rel='stylesheet' href='prettylab.css'>");
$page->setTopSection();
$page->setBottomSection();
print $page->getTopSection();

 
print "


<header>
	
  <h1>Book Locator</h1>
  <nav>
    <a href=index.php>Home</a>
    <a href=asgnabout.php>About</a>
    <a href=contactus.php>Contact</a>
	<a href=booksearch.php>Search</a>
  </nav>
</header>

<main>
  <section>
    <article>
      <h2>Search for a Book</h2>
 
	<form method='POST' action='results.php' onsubmit='return validateForm()'>
	Enter an ISBN, Author or Title:  <input type='text' name='name' id='name' ><br />
	
	<br />
	<input type='submit' name='submit'>
	</form>
      <p></p>
      <p></p>
    </article>
  </section>
  <aside>
    <div class=capsule>
      <h3>Sidebar</h3>
      <p></p>
    </div>
    <div class=capsule>
      <h3>Sidebar</h3>
      <p></p>
    </div>
    <div class=capsule>
      <h3>Sidebar</h3>
      <p></p>
    </div>
  </aside>
  
  <footer>Sprint 1 Ken Lucas Peter</footer>
  </main>";
  
 print $page->getBottomSection();

  ?>

