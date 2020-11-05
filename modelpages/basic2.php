<?php 
session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Full Body Skin</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="https://code.create3000.de/x_ite/4.6.9/dist/x_ite.css"/>
		<script type="text/javascript" src="https://code.create3000.de/x_ite/4.6.9/dist/x_ite.min.js"></script>
		<link rel='stylesheet' type='text/css' href='css/styles.css'/>
	</head>
	<body style="background-color: #FAFAFA;">
				<nav>
					<ul>
					<li> <a href="http://web-students.armstrong.edu/~em07614/test_repo/active/3dmodels.php">Home</a></li> 
					</ul>
				</nav>
		<div class="center">
			<div class="sidebar">
				<h2>Mouse Controls:</h2>
				<table id="mouseTable">
					<tr id="mouseLeftRow"><td><img src="MouseImages/Mouse_Left.png"></img></td><td id="mouseLeft">Rotate</td></tr>
					<tr id="mouseRightRow"><td><img src="MouseImages/Mouse_Right.png"></img></td><td id="mouseRight">X.ITE Browser</td></tr>
					<tr id="mouseWheelScrollRow"><td><img src="MouseImages/Mouse_Wheel_Scroll.png"></img></td><td id="mouseWheelScroll">Zoom</td></tr>
					<tr id="mouseWheelPressRow"><td><img src="MouseImages/Mouse_Wheel_Press.png"></img></td><td id="mouseWheelPress">Pan</td></tr>
				</table>
			</div>
			<div class="maxwrap">
				<div class="x3d">
					<X3DCanvas id="skullScene" src="<?php echo $_GET["x3d-loc"];?>">
						<p>Your browser may not support all features required by X_ITE.
						For a better experience, keep your browser up to date.
						<a href="http://outdatedbrowser.com">Check here for latest versions.</a></p>
					</X3DCanvas>
				</div>
			</div>
		</div>
	</body>
</html>