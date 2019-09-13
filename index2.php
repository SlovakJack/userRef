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

<?php
	$jwt = "eyJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL2lkLnBpYW5vLmlvIiwic3ViIjoiUE5JYVphdXZycHc2M2hrIiwiYXVkIjoiTVJxWWhGbWpIUiIsImVtYWlsIjoic3R1YXJ0LmFzaGZvcmRAcGlhbm8uaW8iLCJlbWFpbF9jb25maXJtYXRpb25fcmVxdWlyZWQiOmZhbHNlLCJleHAiOjE1NjkxMDg5MjgsImlhdCI6MTU2NjQ4MDkyOCwianRpIjoiVElUNGlEbE1YU3B3bjRmNCJ9.2Gj4SjYGA7xTr0AdNVOS1beMG-zadeFnXGuBLvvyPFI";
  	$secret = "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAmdGMjzKFR5WG3JmfXIhBWlb77yZTr/uiHbE2/ePtfa9lpJIn0+B0Wnyy5n24qZzHPgCgyak2ReO0B5K9CmTwBBJcdZhqetJizxhPANx2q4gydfxX13YkSNJ7ZAXyFPCM5kQ7YOssuqKhoA50HOjnfraub3V3gTebq9QFPZhZKSFK4C2N7OVoBAHr3mnuWRvNec7SRQCC8+f+zgJ0sqXeI58gA3/mOPM2+gwUCuusiEGAyeSCMO9lsEsNZA5IegjWk1SsEPhsvB2MB28cVcK4DXkCDXyee2KlUTFDLu6mLBSft3LxVUX61jabklL3qoG3UTJrMZ2VnxCTSkqFzfKGwQIDAQAB";
     include("src/JWT.php");
     include("src/BeforeValidException.php");
     include('src/ExpiredException.php');
     include ('src/SignatureInvalidException.php');
     $decoded = '';
      $decoded = \Firebase\JWT\JWT::decode($jwt, base64_decode($secret),array('HS256'));
             $first_name = isset($decoded->first_name) ? $decoded->first_name : '';
             $last_name = isset($decoded->last_name) ? $decoded->last_name : '';
             $uid = $decoded->uid;
             
             
 

print_r($decoded)
?>
</body>
</html>
