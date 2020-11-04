<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>
<html>
	<head>
		<script type="text/javascript" src="//code.jquery.com/jquery-1.7.1.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<link rel='stylesheet' type='text/css' href='modelpages/css/main.css'/>
		<title>3D Models</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body class="scrolling">
        <center>
            <table class=mpf>
                <tr>
                    <td style="border: 0px solid #FFFFFF;">
                        <center>
                            <table class="title" cellpadding="20">
                                <tr>
                                    <td>
                                        <center><h1>X3D Based Systems for Neuroanatomy Exploration and Medical Training</h1></center>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <center>
                                            <table class=wrt>
                                                <tr>
													<td class=wrf><a class=wrf href=3dmodels.php>Models</a></td>
                                                    <td class=wrs><a class=wrf href=basic.php>Basic</a></td>
                                                    <td class=wrf><a class=wrf href=decomposable.php>Decomposable</a></td>
                                                    <td class=wrf><a class=wrf href=volume.php>Volume</a></td>
                                                </tr>
                                            </table>
                                        </center>
                                    </td>
                                </tr>
                            </table>
                        </center>
							
              <center>
                        <h2 style="color: white;">Basic Models</h2>
                        <hr>
                        <table style="width:77%"> 
							<table style="width:80%"> 
									<tr>
										
											<center><h3 style="color: white;"><i>Click on a model to view</i></h3><center>
											
											
											<div class="allcategories"><?php
												$product_array = $db_handle->runQuery("SELECT * FROM models");
													if (!empty($product_array)) {
														foreach($product_array as $key=>$value){
															if ($product_array [$key]["type"]=="basic"){?>
                                                                    <div class="cell">
                                                                    <div class="thumbnail"><a href="basic2.php"><img src="<?php echo $product_array[$key]["thumbnail"]; ?>"></a></div>
                                                                    <div class="titlename"><?php echo $product_array[$key]["name"]; ?></div>
													</div><?php}
				                                            }
			                                            }?>
								            </div>
                            </table>
                        </center>
                        <br/>
                        <center>
                            <table class=title>
                                <tr>
                                    <td style="border: 5px solid #FFFFFF;">
                                        <center>
                                            <i>
                                                <div style="margin-bottom: 12px">@ 2020 Prof. Felix G. Hamza-Lup</i>
                                                    <img style="position: relative; top: 6.5px;" src=thumbnails/team/gslo.png></img>
                                                </div>
                                        </center>
                                    </td>
                                </tr>
                            </table>
                        </center>    
                        <br/>
                    </center>
                </td>
            </tr>
        </table>
        <p><?php echo print_r($product_array)?>
    </center>
    <br/>	
	</body>
</html>