
<?php
require_once("Template.php");
$page = new Template("Thank You");
$page->setHeadSection("<link rel='stylesheet' href='prettylab.css'>");
$page->setTopSection();
$page->setBottomSection();
print $page->getTopSection();


print "

<header>
	
  <h1>Thank you</h1>
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
	  <p> Thanks for your feedback</p>
      <p>We will get back to you as soon as possible</p>
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
 