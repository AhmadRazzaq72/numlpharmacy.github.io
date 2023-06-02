<!DOCTYPE html>
<html>
<head>
<title>
POS
</title>
 <link href="css/bootstrap.css" rel="stylesheet">
 <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
		body{
			font-family: "Poppins", sans-serif;

		}
      .sidebar-nav {
        padding: 9px 0;
      }
	  /* li a {
		font-family: "Poppins", sans-serif;
	  } */
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<!-- <script src="lib/jquery.js" type="text/javascript"></script> -->
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
<?php
	require_once('auth.php');
?>
<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>

 <script language="javascript" type="text/javascript">

</SCRIPT>	
</head>
<body>
<?php include('navfixed.php');?>
	<?php
$position=$_SESSION['SESS_LAST_NAME'];
if($position=='cashier') {
?>

<a href="../index.php">Logout</a>
<?php
}
if($position=='admin') {
?>
	
	<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav" style="width: min-content;">
                     <ul class="nav nav-list">
              <li class="active"><a href="#"><i class="icon-dashboard icon-2x" style="padding-left: 18px; color: black;"></i> Dashboard </a></li> 
			<li><a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>" style="padding-left: 30px;"><i class="icon-shopping-cart icon-2x" ></i> Sales</a>  </li>             
			<li><a href="products.php" style="padding-left: 20px;"><i class="icon-list-alt icon-2x" style="padding-left: 14px;"></i> Products</a>                                     </li>
			<li><a href="customer.php"><i class="icon-group icon-2x" style="padding-left: 20px;"></i> Customers</a>                                    </li>
			<li><a href="supplier.php" style="padding-left: 20px;"><i class="icon-group icon-2x" style="padding-left: 14px;"></i> Suppliers</a>                                    </li>
			<li><a href="salesreport.php?d1=0&d2=0" style="padding-left: 30px;"><i class="icon-bar-chart icon-2x"></i> Sales Report</a>                </li>
			<br><br><br><br><br><br>		
			<li>
			 
			</li>
				</ul>                               
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10" style="background-color:#eeeeee;width:1111px;margin-left:121px;">
	<div class="contentheader">
			<i class="icon-dashboard"></i> Dashboard
			</div>
			<ul class="breadcrumb" style="background-color: #eeeeee;">
			<li class="active">Dashboard</li>
			</ul>
			<font style=" font:bold 44px 'Aleo'; color:#4e4b4b;font-family: 'Poppins', sans-serif;"><center>NUML`s Pharmacy</center></font>
<div id="mainmain">


<a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius: 8px; border-color: white;"><i class="icon-shopping-cart icon-2x"></i><br> Sales</a>               
<a href="products.php" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius: 8px; border-color: white;"><i class="icon-list-alt icon-2x"></i><br> Products</a>      
<a href="customer.php" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius: 8px; border-color: white;"><i class="icon-group icon-2x"></i><br> Customers</a>     
<a href="supplier.php" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius: 8px; border-color: white;"><i class="icon-group icon-2x"></i><br> Suppliers</a>     
<a href="salesreport.php?d1=0&d2=0" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius: 8px; border-color: white;"><i class="icon-bar-chart icon-2x"></i><br> Sales Report</a>
<a href="../index.php" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius: 8px; border-color: white;"><i class="icon-off icon-2x"></i><br> Logout</a> 
<?php
}
?>

</div>
</div>
</div>
</div>
</body>
</html>
