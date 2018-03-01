
<?php
require_once("Template.php");
$page = new Template("Index");
$page->setHeadSection("<script type='text/javascript' src='hello.js'></script>");
$page->setHeadSection("<link rel='stylesheet' href='prettylab.css'>");
$page->setTopSection();
$page->setBottomSection();
print $page->getTopSection();
print "<header>
	
  <h1>Home page Assignment 01</h1>
  <nav>
    <a href=asgnhome.php>Home</a>
    <a href=asgnabout.php>About</a>
    <a href=contactus.php>Contact</a>
  </nav>
</header>
<main>
  <section>
    <article>
      <h2>Headline</h2>
      <p></p>
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
</main>";
print $page->getBottomSection();
print "<footer>Lab 01 Kline </footer>";