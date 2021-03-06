<!DOCTYPE html><html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Table </title>

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
    margin-top:  15px;
    float: right;
    box-shadow: 0 0 1px #ccc;
    -webkit-transition: all 0.5s ease-in-out;
    border: 0px;
    border-radius: 4px;
    color: #fff;
}
.btn-change:hover{
    -webkit-transform: scale(1.1);
    background: #31708f;
}



table tr td:last-child a span{
            margin-right: 10px;
        }

input[type="text"]
{
    font-size:16px;
}
select option{
	font-size: 16px;
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
								<h5 class="lh-1 mB-0 logo-text">Adminator</h5>
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
			</ul></div></div>




	<div class="page-container">
		<div class="header navbar">
			<div class="header-container">
		<ul class="nav-left">
			<li>
				<a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);">
					<i class="ti-menu"></i>
				</a>
			</li>
			<li class="search-box">
				<a class="search-toggle no-pdd-right" href="javascript:void(0);">
					<i class="search-icon ti-search pdd-right-10"></i> 
					<i class="search-icon-close ti-close pdd-right-10"></i>
				</a>
			</li>
			<li class="search-input">
				<input class="form-control" type="text" placeholder="Search...">
			</li>
		</ul>
		<ul class="nav-right">
			<li class="notifications dropdown">
				<span class="counter bgc-red">3</span> 
				<a href="" class="dropdown-toggle no-after" data-toggle="dropdown">
					<i class="ti-bell"></i>
				</a>
				<ul class="dropdown-menu">
					<li class="pX-20 pY-15 bdB">
						<i class="ti-bell pR-10"></i> 
						<span class="fsz-sm fw-600 c-grey-900">Notifications</span>
					</li>
					<li>
						<ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
							<li>
								<a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
									<div class="peer mR-15">
										<img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt="">
									</div>
									<div class="peer peer-greed">
										<span>
											<span class="fw-500">John Doe</span> 
										<span class="c-grey-600">liked your 
											<span class="text-dark">post</span>
										</span>
										</span>
										<p class="m-0"><small class="fsz-xs">5 mins ago</small></p>
									</div>
								</a>
							</li>
							<li>
								<a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
									<div class="peer mR-15">
										<img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg" alt="">
									</div>
									<div class="peer peer-greed">
										<span>
											<span class="fw-500">Moo Doe</span> 
											<span class="c-grey-600">liked your 
												<span class="text-dark">cover image</span>
												</span>
											</span>
											<p class="m-0"><small class="fsz-xs">7 mins ago</small></p>
									</div>
								</a>
							</li>
							<li>
								<a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
									<div class="peer mR-15">
										<img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt="">
									</div>
									<div class="peer peer-greed">
										<span>
											<span class="fw-500">Lee Doe</span> 
											<span class="c-grey-600">commented on your 
												<span class="text-dark">video</span>
											</span>
										</span>
											<p class="m-0"><small class="fsz-xs">10 mins ago</small></p>
									</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="pX-20 pY-15 ta-c bdT">
						<span>
							<a href="" class="c-grey-600 cH-blue fsz-sm td-n">View All Notifications 
								<i class="ti-angle-right fsz-xs mL-10"></i>
							</a>
						</span>
					</li>
				</ul>
			</li>
			<li class="notifications dropdown">
				<span class="counter bgc-blue">3</span> 
				<a href="" class="dropdown-toggle no-after" data-toggle="dropdown">
					<i class="ti-email"></i>
				</a>
				<ul class="dropdown-menu">
					<li class="pX-20 pY-15 bdB">
						<i class="ti-email pR-10"></i> 
						<span class="fsz-sm fw-600 c-grey-900">Emails</span>
					</li>
					<li>
						<ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
							<li>
								<a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
									<div class="peer mR-15">
										<img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt="">
									</div>
									<div class="peer peer-greed">
										<div>
											<div class="peers jc-sb fxw-nw mB-5">
												<div class="peer">
													<p class="fw-500 mB-0">John Doe</p>
												</div>
												<div class="peer">
													<small class="fsz-xs">5 mins ago</small>
												</div>
											</div>
											<span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
									<div class="peer mR-15">
										<img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg" alt="">
									</div>
									<div class="peer peer-greed"><div>
										<div class="peers jc-sb fxw-nw mB-5">
											<div class="peer">
												<p class="fw-500 mB-0">Moo Doe</p>
											</div>
											<div class="peer">
												<small class="fsz-xs">15 mins ago</small>
											</div>
										</div>
										<span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
								<div class="peer mR-15">
									<img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt="">
								</div>
								<div class="peer peer-greed">
									<div>
										<div class="peers jc-sb fxw-nw mB-5">
											<div class="peer">
												<p class="fw-500 mB-0">Lee Doe</p>
											</div>
											<div class="peer">
												<small class="fsz-xs">25 mins ago</small>
											</div>
										</div>
										<span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</li>
				<li class="pX-20 pY-15 ta-c bdT">
					<span>
						<a href="" class="c-grey-600 cH-blue fsz-sm td-n">View All Email 
							<i class="fs-xs ti-angle-right mL-10"></i>
						</a>
					</span>
				</li>
			</ul>
		</li>
		<li class="dropdown">
			<a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
				<div class="peer mR-10">
					<img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg" alt="">
				</div>
				<div class="peer">
					<span class="fsz-sm c-grey-900">John Doe</span>
				</div>
			</a>
			<ul class="dropdown-menu fsz-sm">
				<li>
					<a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
						<i class="ti-settings mR-10"></i> 
						<span>Setting</span>
					</a>
				</li>
				<li>
					<a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
						<i class="ti-user mR-10"></i> 
						<span>Profile</span>
					</a>
				</li>
				<li>
					<a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
						<i class="ti-email mR-10"></i> 
						<span>Messages</span>
					</a>
				</li>
				<li role="separator" class="divider"></li>
				<li>
					<a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
						<i class="ti-power-off mR-10"></i> 
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</li>
	</ul>
</div>
</div>



		<main class="main-content bgc-grey-100">
			<div id="mainContent">
				<div class="container-fluid">
				  <div class="container-fluid">
				<h2 class="c-grey-900 mT-10 mB-30">Upcoming Bookings</h2>
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
   
$date = date('Y-m-d H:i:s');


  // $sql = 'SELECT * FROM basic  WHERE psta="$psta"';

   $sql= "SELECT * FROM tablebook Where datebook>'$date' ";
  

   //echo $psta;

    if($result = mysqli_query($conn, $sql)) {
      if(mysqli_num_rows($result) > 0) {
      				echo "<thead>";
						echo "<tr>";
						echo"<th>I_id</th>";
						echo"<th>Name</th>";
						echo"<th>Email</th>";
						echo"<th>Mobile</th>";
						echo"<th>Date</th>";
						echo"<th>Attendees</th>";
						echo"</tr>";
					echo"</thead>";
					echo "<tfoot>";
						echo "<tr>";
						echo"<th>I_id</th>";
						echo"<th>Name</th>";
						echo"<th>Email</th>";
						echo"<th>Mobile</th>";
						echo"<th>Date</th>";
						echo"<th>Attendees</th>";
						echo"</tr>";
					echo"</tfoot>";
		echo"<tbody>";         
         while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['mobile'] . "</td>";
            echo "<td>" . $row['datebook'] . "</td>";
            echo "<td>" . $row['attendees'] . "</td>";
            echo "</tr>";
         }
         echo "</tbody>";
         mysqli_free_result($result);
      } else {
         echo "No Tables Were Booked.";
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
					</div>
				

		

	

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
<script type="text/javascript">
function gst() {
   price = document.getElementById("product_price").value;
   percentage = 12 ;
 
       igst = (price * percentage) / 100;
      
 
      document.getElementById("product_gst").value = igst;
   
}
		</script>
</footer></div></div><script type="text/javascript" src="vendor.js"></script><script type="text/javascript" src="bundle.js"></script></form></body></html>
