	<header>
		<title>DentISt 4.0</title>
		<link href="/var/www/DentISt/css/style.css" rel='stylesheet' type='text/css'>
	</header>

	<body>
		<div class="wrapper">
			<div class="left">
				<div>
						<b><a href="index.php"> Install DentISt</a></b>
				</div>
				<div class="module-div">
						<a href="stepone.php" <?php if(strpos($_SERVER["PHP_SELF"],"stepone")) echo 'class="current"'?>> STEP 1 - System Requirements</a>
				</div>
				<div class="module-div">
						<a href="steptwo.php" <?php if(strpos($_SERVER["PHP_SELF"],"steptwo")) echo 'class="current"'?>> STEP 2 - DentISt Database Setup</a>
				</div>
				<div class="module-div">
						<a href="stepfour.php" <?php if(strpos($_SERVER["PHP_SELF"],"stepthree")) echo 'class="current"'?>> STEP 3 - Create Tables </a>
				</div>
				<div class="module-div">
						<a href="stepfive.php" <?php if(strpos($_SERVER["PHP_SELF"],"stepfour")) echo 'class="current"'?>> STEP 4 - Create Administrator</a>
				</div>
				<div class="module-div">
						<a href="end.php" <?php if(strpos($_SERVER["PHP_SELF"],"end")) echo 'class="current"'?>> END of Installation</a>
				</div>
			</div>
	
			<div class="maindiv">
				<h2>DentISt Installation</h2>
				
				<br/>
				This will guide you in installing DentISt through a step by step process.

				<br/><br/>
				<a href="stepone.php">Install DentISt.</a>
			</div>
		</div>	
	</body>
