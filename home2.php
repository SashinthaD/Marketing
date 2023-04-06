<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Noritake</title>



	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	
	
	<script src="assests/js/de.js"></script>
	
<!-- Footer-->	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assests/css/Footer.css">
<link rel="stylesheet" type="text/css" href="assests/css/Footer2.css">
<link rel="stylesheet" type="text/css" href="assests/css/stylescer.css">

</head>
<body>
	<div class="box-area">
		<header>
			<div class="wrapper">



				<nav>
					<div class="content">
						<img class="img" src="assests/img/lo.png"  width="290px" height="255px"  ">
					</div>
				<a href="home2.php">Home</a>	
				<a href="#">News</a>
				<a href="#">Contact</a>
				<a href="#">About</a>
				</nav>
			</div>
		</header>
		<div class="banner-area">
			<div class="w3-content w3-section"  style="margin-right: 0px;margin-left: 0px;  ">
	
			  <img class="mySlides w3-animate-fading" src="assests/img/BN.jpg" >
			  <img class="mySlides w3-animate-fading" src="assests/img/BN2.jpg">
			  <img class="mySlides w3-animate-fading" src="assests/img/BN3.jpg" >
			  <img class="mySlides w3-animate-fading" src="assests/img/BG3.jpg" >
			  <img class="mySlides w3-animate-fading" src="assests/img/BG1.jpg" >
				
			</div>
		</div>
		<div class="content-area">
			<div class="wrapper">
			<br>
<br>
<br>
<br>
	<center>
<h2>Marketing Department <br> WAR </h2></center><br><br>		
		<br><br><br>		<br><br><br>		<br><br><br>
			<div class="introduction-container">
				<div class="intro-colom">
					<div class="colom-part">
						<div class="colom-img">
							<a href="sAdminLogin.jsp"><img src="assests/img/Admin.png" width="80px" height="80px"></a>

							
						</div>
						<div>
							<h3>Marketing Administration</h3>
							<p>The main purpose of marketing administration login.</p>
						</div>
					</div>
					<div class="colom-part">
						<div class="colom-img">
							 <a href="pAdminlogin.jsp"><img src="assests/img/complain.png" width="80px" height="80px"></a>
						</div><!-- colom-img -->
						<div>
							<h3>Customer Complains</h3>
              				<p>This process is keeping track of customer complains.</p>
						</div>
					</div><!-- colom-part -->			
				</div>
				<div class="intro-colom">
					<div class="colom-part">
						<div class="colom-img">
							<a href="oAdminLogin.jsp"><img src="assests/img/User1.png" width="80px" height="80px"></a>
						</div>
						<div>
							<h3>&nbsp &nbsp Marketing Users</h3>
							<p> &nbsp &nbsp &nbsp &nbsp Marketing department users login.</p>
						</div>
					</div>
					<div class="colom-part">
						<div class="colom-img">
							 <a href="tAdminLogin.jsp"><img src="assests/img/about.png" width="80px" height="80px"></a>
						</div><!-- colom-img -->
						<div>
							<h3>&nbsp &nbsp About Department</h3>
              				<p>&nbsp  &nbsp &nbsp &nbsp &nbsp About of marketing department.</p>
						</div>
					</div><!-- colom-part -->			
				</div>
			
	
			</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<script>
var myIndex = 0;
carousel();
function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 9000);
}
</script>
<footer class="container-fluid bg-grey py-5">
<div class="container">
   <div class="row">
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6 ">
               <div class="logo-part">
                  <img src="assests/img/lo.png"  width="150px" height="100px"  class="center" >
                  
                  <p> &nbsp Noritake Lanka Porcelain (Pvt) Limited  </p>
                  
               </div>
            </div>
            <div class="col-md-6 px-4">
               <h6> About Company</h6>
               <p>We a gathering of multi skilled.</p>
               <a href="#" class="btn-footer"> More Info </a><br>
               <a href="#" class="btn-footer"> Contact Us</a>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6 px-4">
               <h6> Help us</h6>
               <div class="row ">
                  <div class="col-md-6">
                     <ul>
                        <li> <a href="Home.jsp"> Home</a> </li>
                        <li> <a href="#"> About</a> </li>
                        <li> <a href="#"> Service</a> </li>
                        <li> <a href="#"> Team</a> </li>
                        <li> <a href="#"> Help</a> </li>
                        <li> <a href="#"> Contact</a> </li>
                     </ul>
                  </div>
                  
                  <div class="col-md-6 px-4">
                  
                     <ul>
                        <li> <a href="Home.jsp"> Home</a> </li>
                        <li> <a href="SupplierHome.jsp"> Supplier</a> </li>
                        <li> <a href="ProductManagementHome.jsp"> Product</a> </li>
                        <li> <a href="SalesHome.jsp"> Sales</a> </li>
                        <li> <a href="TransportHome.jsp"> Transport </a> </li>
                        <li> <a href="#"> Policy</a> </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-6 ">
               <h6> Newsletter</h6>
               <div class="social">
                  <a href="https://www.facebook.com/noritakelanka/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="https://lk.linkedin.com/company/noritake-lanka-porcelain-pvt-limited"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
               </div>
               <form class="form-footer my-3">
                  <input type="text"  placeholder="search here...." name="search">
                  <input type="button" value="Go" >
               </form>
               <p>World Best Porcelain Company </p>
            </div>
         </div>
      </div>
   </div>
</div>
</footer>
		</div>
	</div>


</body>
</html>