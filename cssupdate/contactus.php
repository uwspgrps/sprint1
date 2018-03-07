<?php
require_once("Template.php");
$page = new Template("About");
$page->setHeadSection("<link rel='stylesheet' href='styles/prettylab.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js'></script>
    <script type='text/javascript'' src='scripts/site.js'></script>");
$page->setTopSection();
$page->setBottomSection();
print $page->getTopSection();
print "
<header>	
  <h1>Contact Us Sprint 1</h1>
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
      <h2>Contact us</h2>
	<form id='contactForm' method='POST' action='thanks.php' >        
	    <div class='input'>
            <label class='col-md-3 col-form-label'>Name:</label>
            <input type='text' name='name' id='name' required='required' value='' size='25' maxlength='50' />
        </div>
        <div class='input'>
            <label class='col-md-3 col-form-label'>Email:</label>
            <input type='text' name='email' id='email' size='25' required='required' maxlength='75'/>
        </div>
        <div class='input'>
            <label class='col-md-10 offset-1 col-form-label'>Please leave your feedback below.</label>
            <textarea class='col-md-8 offset-2 commentsFeedback' name='commentsFeedback' id='commentsFeedback' maxlength='500'></textarea>
        </div>      
        <div class='input'>
            <input class='btn btn-primary col-md-2 offset-5' id='submitBtn' type='button' value='Submit' />
        </div>         
	</form>
    </article>
  </section>
  <aside>
    <div class=capsule>
      <h3>Volutpat</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
	  Morbi enim nunc faucibus a. Mauris a diam maecenas sed enim ut sem viverra. In metus vulputate eu scelerisque felis. Platea dictumst 
	  quisque sagittis purus sit amet volutpat consequat mauris. Lacus suspendisse faucibus interdum posuere. </p>
    </div>  
    <div class=capsule>
      <h3>Aliquam </h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
	  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
	  in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>
    <div class=capsule>
      <h3>Malesuada </h3>
      <p>Aliquet risus feugiat in ante metus. Urna id volutpat lacus laoreet non curabitur. Auctor elit sed vulputate mi sit amet mauris 
	  commodo quis. Blandit turpis cursus in hac habitasse platea dictumst quisque. Malesuada nunc vel risus commodo viverra.
	  Viverra mauris in aliquam sem fringilla ut morbi.  Pellentesque habitant morbi tristique senectus et netus et malesuada. 
	  Eget felis eget nunc lobortis mattis aliquam. Massa tincidunt dui ut ornare lectus. Libero nunc consequat 
	  interdum varius sit amet.</p>
    </div>
  </aside>
  </main>
<footer>Sprint 1 Ken Lucas Peter</footer>
";
print $page->getBottomSection();
?>