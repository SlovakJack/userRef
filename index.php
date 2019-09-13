<?php

//include phpSDK
include_once "vx-php-sdk-2.12/TinypassClient.php";

//Configure for the app in question
$applicationId ='XXXX';
$privateKey = $pianoPrivateKey = 'XXXX';
$isSandbox = true;

//Set the configuration
$tinypassConfig = new TPConfig( $applicationId, $apiToken, $privateKey,
$isSandbox );
$tinypassClient = new TinypassClient( $tinypassConfig );


//Load the document

?>
<!DOCTYPE html>
<html>
<head>
	<title>Piano User Ref Generation</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>(function(src){var a=document.createElement("script");a.type="text/javascript";a.async=true;a.src=src;var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})("//dashboard.tinypass.com/xbuilder/experience/load?aid=<?= $applicationId?>");</script>
	<style type="text/css">
		html {
			height: 105%; /* mock trigger for scrolling */
			border: 2px solid black;
		}
	</style>
</head>
<body>
	<script type="text/javascript">
		tp = window.tp || [];
		tp.push(["setUserRef", <?php echo json_encode(
		        TPUserRefBuilder::create( $_POST["uid"], $_POST["username"] )
		            ->setFirstName( $_POST["firstname"] )
		            ->setLastName( $_POST["lastname"])
			    ->setCreateDate('1547108011')
		            ->build( $pianoPrivateKey )) ?> ]);

	</script>
		<h1>Some fancy content here</h1>

		<div style="position: relative" >
			<form method="post" action="index.php" id="simple-login-modal-form">

				<label for="uid">uid</label>
				<input type="text" name="uid" id="uid" value="12345"><br>
				<label for="username">Username</label>
				<input type="text" name="username" id="username" value="Stuart.ashford+test@piano.io"><br>
				<label for="firstname">Firstname</label>


				<input type="text" name="firstname" id="firstname" value="Stuart"><br>
				<label for="lastname">Last Name</label>
				<input type="text" name="lastname" id="lastname" value="Ashford"><br>
				<label for="password">Password</label>
				<input type="text" name="password" id="password" value="Piano_123"><br>
				<input type="submit" value="Login">
			</form>
		</div> 
		<div>
			Run tp.userRef in the console to see your userRef.
		</div>
</body>
</html>
