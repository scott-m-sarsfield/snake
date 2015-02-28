<?php include '../inc/doc_header.php';?>
	<link rel="stylesheet" href="/~ssarsfie/css/standard_gs_styles.css">
	<link rel="stylesheet" href="css/styles.css">

	<link rel="icon" href="/~ssarsfie/img/favicon.png">
	<link rel="apple-touch-icon" href="/~ssarsfie/snake/favicon.png">
	
		<!--GAME SCRIPT-->	
		<script src="js/mobile.js"></script>
		<script src="js/gameplay.js"></script>
		<?php include 'lb.php';?>
		<?php addJava();?>

	<title> Scott Mathias Sarsfield's Web Site </title>
</head>
<body>
	<?php include '../inc/header.php';?>
	
	<div class="page-title">
		<span>Snake</span>
	</div>
	
	<div class="content-area"><div>
				

		<!--GAME LAYOUT-->
		<div class="content">
			<img class="game-screenshot" alt="Snake" src="img/splash.png" />
			<div class="game-description">
				<p><span style="font-weight:bold;">Snake</span> is a classic arcade game
				where the goal is to get to each colored red dot to grow the "snake" as long
				as you can before running into yourself.</p>
			</div>

		</div>
		
		
		<input class="game-launch-button" id="restart" type="button" onclick="launchGame() " value="Launch Game" />	
		
		<div class="content" style="text-align:center;padding:10px">
			<h3 style="font-family:Courier,serif;">Controls</h3>
			<span>Use Arrow Keys (on your keyboard) for movement.  <br /><br />Support for mobile coming soon.</span>
		</div>
		
		<div id="leaderboard" class="content">
			<h3 class="classy">Leaderboard</h3>
			<div id="rankings">
				<?php printTable();?>
			</div>
		</div>
		<div class="content">
			<p style="margin:auto;text-align:center">**Please keep usernames appropriate**</p>		
		</div>

			<!--END GAME-->
	</div></div>

<?php include '../inc/footer.php';?>
