<?php
session_start();
?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="warband.css">
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
		<form method="post" action="handler.php">
			<form>
				<input type="text" id="username" placeholder="Username" name="username">
			</form>
			<form>
				<input type="password" id="password" placeholder="Password" name="password">
			</form>
			<?php
				if (isset($_SESSION['message'])) {
					echo "<div id='message'>" . $_SESSION['message'] . "</div>";
				}
				unset($_SESSION['message']);
			?>
			<form id = "submitlogin">
				<input type="submit" value="Login">
			</form>
		</form>
	</span>
  
  <ul id="nav_pane">
	<li><a href="index.php">Home</a></li>
	<li><a href="forum.html">Forum</a></li>
	<li><a href="warbands.php">Warbands</a></li>
	<li><a href="rules.html">Rules</a></li>

  </ul>
    <div>
	</div>
  <body>
	  <div id ="main_stats" class ="flex-container">
	     <div class ='title_type'>
		 Name: McSwindler
		 </div>
		 <div class ='title_type'>
		 Type: Merchant
		 </div>
        <table>
			<tr>
			<td id ='stat_header'>M</td>
			<td id ='stat_header'>WS</td>
			<td id ='stat_header'>BS</td>
			<td id ='stat_header'>S</td>
			<td id ='stat_header'>T</td>
			<td id ='stat_header'>W</td>
			<td id ='stat_header'>I</td>
			<td id ='stat_header'>A</td>
			<td id ='stat_header'>LD</td>
			<td id ='stat_header'>Sv</td>
		  </tr>
		  <tr>
			<td>4</td>
			<td>3</td>
			<td>3</td>
			<td>4</td>
			<td>4</td>
			<td>1</td>
			<td>2</td>
			<td>1</td>
			<td>8</td>
			<td>0</td>
		  </tr>
		  <tr>
			<td class ='stat_font'>4</td>
			<td class ='stat_font'>8</td>
			<td class ='stat_font'>8</td>
			<td class ='stat_font'>4</td>
			<td class ='stat_font'>4</td>
			<td class ='stat_font'>3</td>
			<td class ='stat_font'>6</td>
			<td class ='stat_font'>3</td>
			<td class ='stat_font'>10</td>
			<td class ='stat_font'></td>
		  </tr>
		</table>
		<div>
		<span id ='skills'>
		Skills: Combat, Speed, special, minimim
		</span>
		<span id ='xpspan' class ='large_bold'>
		EXP:
		</span>
		<span id = "xp">
		<Table>
			<tr><td>14</td></tr>
		</Table>
		</span>
		</div>
	  </div>
	  <div class ="flex-container">
	  <div class = 'large_bold'>
	  skills/spells
	  </div>
	    <ul class ="open_text">
		  <li>Merchant Skills</li>
		  <li>+1 M, +1 S</li>
		  <li>stupid</li>
		</ul>
	  </div>
	  <div class ="flex-container">
	  <div class = 'large_bold'>
	  items/injuries
	  </div>
	  	<ul class ="open_text">
		  <li>Axe</li>
		  <li></li>
		</ul>
	  </div>
  </body>
  	<footer>
      <p class="text-center">this is a footer</p>
    </footer>
</html>
