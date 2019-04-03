<?php
session_start();
?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
	<link rel="icon" href="favi.png" type="image/gif" sizes="16x16">
</head>

	<span id="headspan">
	<h1 id="header1">
	MORDPENDIUM
	</h1>
	<h2 id="header2">
	Mordheim Warband Builder
	</h2>
	</span>
  
	<span id="loginbox">
	<form>
		<input type="text" value="username">
	</form>
	<form>
		<input type="password" value="Password">
	</form>
	<form id = "submitlogin">
		<input type="button" value="Login">
	</form>
	</span>
  
  <ul id="nav_pane">
	<li><a href="index.php">Home</a></li>
	<li><a href="forum.html">Forum</a></li>
	<li><a href="warbands.php">Warbands</a></li>
	<li><a href="rules.html">Rules</a></li>
  </ul>
  
  <body>
    <div class="main-container">
    <div class="leftcolumn">
      <div class="card">
        <h2>Border Town Burning</h2>
        <h5>Title description, Dec 12, 2018</h5>
        <p>Last Recorded Game.</p>
      </div>
      <div class="card">
        <h2>Wagons Catching Fire?</h2>
        <h5>Title description, Nov 25, 2018</h5>
        <p>Probably Not, its not in the Rules Kurt...</p>
      </div>
	  <div class="card">
        <h2>Monks Devistate Everything</h2>
        <h5>Title description, Nov 18, 2018</h5>
        <p>Improvised weapons better than actual weapons?</p>
      </div>
	  <div class="card">
        <h2>Out of Control Rolls</h2>
        <h5>Title description, Sep 2, 2018</h5>
        <p>Find out how the Possessed can still suck.</p>
      </div>
	  <div class="card">
        <h2>Needed another</h2>
        <h5>Title description, Sep 1, 2007</h5>
        <p>Just to test my footer..</p>
      </div>
    </div>
    <div class="rightcolumn">
      <div class="card">
        <h2>Leading Warbands</h2>
		<div>
        <ol>
		  	<li><span class="bold_bigger">301</span> - Dis Wagon</li>
			<li><span class="bold_bigger">254</span> - Mikes Monkey Monks</li>
			<li><span class="bold_bigger">205</span> - The Purge</li>
		</ol>
		</div>
      </div>
      <div class="card">
        <h3>New Post</h3>
        <p>None Exist yet..</p>
      </div>
      <div class="card">
        <h3>Links</h3>
        <p>Some text..</p>
      </div>
    </div>

	<footer>
      <p class="text-center">this is a footer</p>
    </footer>
	</div>
  </body>
</html>
