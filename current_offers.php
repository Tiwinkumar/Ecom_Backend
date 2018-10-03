<!DOCTYPE html><html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Current Offers</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>
	#loader
	{
		transition:all .3s ease-in-out;opacity:1;visibility:visible;position:fixed;height:100vh;width:100%;background:#fff;z-index:90000
	}
	#loader.fadeOut
	{
		opacity:0;visibility:hidden
	}
	.spinner
	{
		width:40px;height:40px;position:absolute;top:calc(50% - 20px);left:calc(50% - 20px);background-color:#333;border-radius:100%;-webkit-animation:sk-scaleout 1s infinite ease-in-out;animation:sk-scaleout 1s infinite ease-in-out
	}
	@-webkit-keyframes sk-scaleout
	{
		0%{-webkit-transform:scale(0)}100%{-webkit-transform:scale(1);opacity:0}
	}
	@keyframes sk-scaleout
	{
		0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}
	}

	::-webkit-input-placeholder {
   font-size: 14px;
}

:-moz-placeholder { /* Firefox 18- */
      font-size: 14px;
}

::-moz-placeholder {  /* Firefox 19+ */
      font-size: 14px;
}

:-ms-input-placeholder {
      font-size: 14px;
}

.btn-change{
    height: 30px;
    width: 100px;
    background: lightseagreen;
    margin-top:  20px;
    float: right;
    box-shadow: 0 0 1px #ccc;
    -webkit-transition: all 0.5s ease-in-out;
    border: 0px;
    color: #fff;
}
.btn-change:hover{
    -webkit-transform: scale(1.1);
    background: #31708f;
}
table tr td:last-child a span{
            margin-right: 0px;
        }


input[type="text"]
{
    font-size:16px;
}
select[type="text"]
{
    font-size:16px;
}
input[type="date"]
{
    font-size:16px;
}
</style>
<link href="style.css" rel="stylesheet">
</head>
<body class="app">
	<div id="loader"><div class="spinner"></div></div>
	<script type="text/javascript">window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        setTimeout(() => {
          loader.classList.add('fadeOut');
        }, 300);
      });
	</script>
<div>
	<div class="sidebar">
		<div class="sidebar-inner">
			<div class="sidebar-logo">
				<div class="peers ai-c fxw-nw">
					<div class="peer peer-greed">
						<a class="sidebar-link td-n" href="index.html" class="td-n">
							<div class="peers ai-c fxw-nw">
								<div class="peer">
									<div class="logo">
									<img src="assets/static/images/logo.png" alt="">
									</div>
								</div>
								<div class="peer peer-greed">
								<h5 class="lh-1 mB-0 logo-text" style="font-weight: 400;font-size: 20px;color: blue">Administrator</h5>
								</div>
							</div>
						</a>
					</div>
					<div class="peer">
						<div class="mobile-toggle sidebar-toggle">
							<a href="" class="td-n"><i class="ti-arrow-circle-left"></i></a>
						</div>
					</div>
				</div>
			</div>
			<ul class="sidebar-menu scrollable pos-r">
				<li class="nav-item mT-30 active">
					<a class="sidebar-link" href="index.html" default>
						<span class="icon-holder">
							<i class="c-blue-500 ti-home"></i>
						</span>
						<span class="title">Dashboard</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="sidebar-link" href="add_item.php">
						<span class="icon-holder">
							<i class="c-brown-500 ti-email"></i> 
						</span>
						<span class="title">Add Items</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="sidebar-link" href="current_offers.php">
						<span class="icon-holder">
							<i class="c-blue-500 ti-share"></i> 
						</span>
						<span class="title">Add Offers</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="sidebar-link" href="pending_orders.php">
						<span class="icon-holder">
							<i class="c-deep-orange-500 ti-calendar"></i> 
						</span>
						<span class="title">Pending Orders</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="sidebar-link" href="cancelled_orders.php">
						<span class="icon-holder">
							<i class="c-deep-purple-500 ti-comment-alt"></i>
						</span>
						<span class="title">Cancelled Orders</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="sidebar-link" href="delivered_orders.php">
						<span class="icon-holder">
							<i class="c-indigo-500 ti-comment-alt"></i> 
						</span>
						<span class="title">Delivered Orders</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="sidebar-link" href="todays_order.php">
						<span class="icon-holder">
							<i class="c-light-blue-500 ti-pencil"></i> 
						</span>
						<span class="title">Todays Orders</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="sidebar-link" href="upcoming_booking.php">
						<span class="icon-holder">
							<i class="c-pink-500 ti-palette"></i> 
						</span>
						<span class="title">Upcoming Table Booking</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="sidebar-link" href="completed_booking.php">
						<span class="icon-holder">
							<i class="c-pink-500 ti-palette"></i> 
						</span>
						<span class="title">Past Table Booking</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="sidebar-link" href="customer_review.php">
						<span class="icon-holder">
							<i class="c-pink-500 ti-palette"></i> 
						</span>
						<span class="title">Customer Reviews</span>
					</a>
				</li>
			</ul>
		</div>
	</div>




	<div class="page-container">
		<main class="main-content bgc-grey-100">
			<div id="mainContent">
				<div class="container-fluid">
				  <form method="POST" action="addoffers.php" enctype="multipart/form-data">
					<h2 class="c-grey-900 mT-10 mB-30">Add Offers</h2>
						<div class="bgc-white bd bdrs-3 p-20 mB-20">
							<div class="form-row">
								<div class=" form-group col-md-4">
									<label>Offer Title</label>
      									<input type="text" class="form-control"  name="offer_title" id="offer_title" ="product_name" placeholder="EPIC 50" required>
								</div>
								<div class="form-group col-md-4">
									<label>Offer Description</label>
      									<input type="text" class="form-control" name="offer_description" id="offer_description" placeholder="Burgers">
								</div>
								<div class="form-group col-md-4">
									<label for="image">Offer Image</label>
    								<input type="File" class="form-control" id="image" name="image" placeholder="Upload Image" >
    								<small id="fileHelpBlock" class="form-text text-muted">
  									Image should be less than 1MB.(allowed formats JPG & PNG)
									</small>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-2">
									<label>Condition Statement 1</label>
      									<select type="text" id="offer_cond1" class="form-control" name="offer_cond1" class="form-control" style="height: 35px;">
      										<option value="">Select the value</option>
    										<option value="true">True</option>
      										<option value="false">False</option>
    									</select>
								</div>
								<div class="form-group col-md-4">
									<label>Statement 1</label>
      									<input type="text" class="form-control"  name="offer_condition1" id="offer_condition1" placeholder=""  style="height: 35px;">
								</div>
								<div class="form-group col-md-2">
									<label>Condition Statement 2</label>
      									<select type="text" id="offer_cond2" class="form-control" name="offer_cond2" class="form-control" style="height: 35px;">
      										<option value="">Select the value</option>
    										<option value="true">True</option>
      										<option value="false">False</option>
    									</select>
								</div>
								<div class="form-group col-md-4">
									<label>Statement 1</label>
      									<input type="text" class="form-control"  name="offer_condition2" id="offer_condition2" placeholder=""  style="height: 35px;">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-2">
									<label>Condition Statement 2</label>
      									<select type="text" id="offer_cond2" class="form-control" name="offer_cond3" class="form-control" style="height: 35px;">
      										<option value="">Select the value</option>
    										<option value="true">True</option>
      										<option value="false">False</option>
    									</select>
								</div>
								<div class="form-group col-md-4">
									<label>Statement 1</label>
      									<input type="text" class="form-control"  name="offer_condition3" id="offer_condition2" placeholder=""  style="height: 35px;">
								</div>
								<div class="form-group col-md-6" style="float: right;padding-right: 3%;">
									<button type="submit" class="btn-change" name="submit">Add Offers</button>
								</div>
							</div>
							
						</div>
					</div>
				

		

	
<div class="container-fluid">
				<h2 class="c-grey-900 mT-10 mB-30">Offers Report</h2>
				<div class="row"><div class="col-md-12"><div class="bgc-white bd bdrs-3 p-20 mB-20">
					<table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<?php
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'food';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   //echo 'Connected successfully</br>';
   


  // $sql = 'SELECT * FROM basic  WHERE psta="$psta"';

   $sql= "SELECT * FROM soup_offers ";
  

   //echo $psta;

    if($result = mysqli_query($conn, $sql)) {
      if(mysqli_num_rows($result) > 0) {
      				echo "<thead>";
						echo "<tr>";
						echo"<th>I_id</th>";
						echo"<th>Offer Title</th>";
						echo"<th>Offer Description</th>";
						echo"<th>Statement1</th>";
						echo"<th>Statement2</th>";
						echo"<th>Statement3</th>";
						echo"<th>Actions</th>";
						echo"</tr>";
					echo"</thead>";
					echo "<tfoot>";
						echo "<tr>";
						echo"<th>I_id</th>";
						echo"<th>Offer Title</th>";
						echo"<th>Offer Description</th>";
						echo"<th>Statement1</th>";
						echo"<th>Statement2</th>";
						echo"<th>Statement3</th>";
						echo"<th>Actions</th>";
						echo"</tr>";
					echo"</tfoot>";
		echo"<tbody>";         
         while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['offer_title'] . "</td>";
            echo "<td>" . $row['offer_description'] . "</td>";
            echo "<td>" . $row['offer_condition1'] . "</td>";
            echo "<td>" . $row['offer_condition2'] . "</td>";
            echo "<td>" . $row['offer_condition3'] . "</td>";
            echo "<td>";
                                        echo "<a href='addoffers.php?del=". $row['id'] . "' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
            echo "</tr>";
         }
         echo "</tbody>";
         mysqli_free_result($result);
      } else {
         echo "No records matching your query were found.";
      }
   } else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
   }
   mysqli_close($conn);
?>

					</table>
					</div></div>
				</div></div>
			</div>
		</main>
		<footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600"><span>Copyright © 2017 Designed by <a href="../../index.html" target="_blank" title="StartupMillenium">StartUp Millenium</a>. All rights reserved.</span><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-23581568-13');
</script>

</footer></div></div><script type="text/javascript" src="vendor.js"></script><script type="text/javascript" src="bundle.js"></script></body></html>
