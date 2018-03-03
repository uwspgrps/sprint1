<?php
require_once("Template.php");
$page = new Template("Index");
$page->setHeadSection("<script type='text/javascript' src='hello.js'></script>");
$page->setHeadSection("<link rel='stylesheet' href='prettylab.css'>");
$page->setTopSection();
$page->setBottomSection();
print $page->getTopSection();


print "

<body>
<header>
	
  <h1>Contact us Sprint 1</h1>
  <nav>
    <a href=asgnhome.php>Home</a>
    <a href=asgnabout.php>About</a>
    <a href=contactus.php>Contact</a>
	<a href=booksearch.php>Search</a>
  </nav>
</header>
<main>
  <section>
    <article>
      <h2>Contact us</h2>
	<form method='POST' action='thanks.php' onsubmit='return validateForm()'>
	Name:  <input type='text' name='name' id='name' ><br />
	Enter your email:  <input type='text' name='email' id='email' required ><br />
	Tell us about your experience: <input type='text' name='input' id='textbox' required><br />
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
</main></body>";
print $page->getBottomSection();
print "<footer>Sprint 1 Ken Lucas Peter </footer>";