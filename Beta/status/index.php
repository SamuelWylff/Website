<?php
$start_time = microtime(TRUE);

if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit;
}

?>
<html>
<head>
	<link rel="stylesheet" href=".\framework\bulma.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href=".\css\styles.css">
	<meta property="og:title" content="Samuel Wylff"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="https://samuelwylff.ga/"/>
	<meta property="og:image" content="https://samuelwylff.ga/img/serverlogo.png">
	<meta property="og:description" content="The official page of Samuel Wylff."/>
	<meta property="og:determiner" content="the"/>
	<title>Samuel Wylff</title>
</head>
<section class="hero is-medium" style="background-size: cover; background-position: bottom;">
	<div id="hero-head">
		<nav class="nav">
			<div class="nav-left">
				<a class="nav-item" href="./index.html">
							Samuel Wylff
				</a>
			</div>
			<div class="nav-right">
				<a class="nav-item" target="_blank" href="https://discord.gg/RM9ayT2">
							Discord
				</a>
				<a class="nav-item" target="_blank" href="https://github.com/SamuelWylff">
							Github
				</a>
				<a class="nav-item" target="_blank" href="https://twitter.com/_Samuel_Wylff_">
							Twitter
				</a>
			</div>
		</nav>
	</div>
	<div class="hero-body" style="background-color: #062f70">
		<h1 class="title">Samuel Wylff - Website Status.</h1>
        <br>
        <br>
	</div>
</section>
<div id="content">
	<div id="content-inner">
	<br>
	<br>
	<br>
		<div class="box" style="text-align: center;" id="about">
			<h1 class="title">Website Services.</h1>
			<p></p>
        </div>
    </div>
</div>
<br>
<br>
<br>
</div>
<footer class="footer">
	<div class="container" id="footer-inner">
		<div class="content has-text-centered">
			SamuelWylff.ga. All rights reserved.
			<br>
			<br>
			Hosted using <a target="_blank" href="https://github.com/SamuelWylff/Website">Github Pages</a>.
		</div>
	<br>
	</div>
</footer>
</body>
</html>