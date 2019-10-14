<?php include("header.php"); ?>
<div class="header-space"></div>

    <section class="page-header">
        <div class="bg-f5f5f5">
		<br>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner doctors-height">
      <div class="item active">
        <img class="img-thumbnail" src="img/hospitals/ms.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img  class="img-thumbnail" src="img/hospitals/ms.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img class="img-thumbnail" src="img/hospitals/ms.png" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
                        
                    </div>
                    <div class="col-md-5 m-t-10 hospital-deatails">
                        <h4>MS Hospital</h4>
						<div>
							<strong> Doctors:</strong> 350
						</div>
						<div>
							<strong> Services:</strong> 200+
						</div>
						<div>
							<strong> loaction:</strong> Old Mumbai Hwy, Near Cyberabad Police Commissionerate, Jayabheri Pine Valley, Gachibowli, Hyderabad, Telangana 500032
						</div>
						<div>
							<strong> Contact:</strong> 1800 108 3999 , 850 0xx xxxx
						</div>
						<div>
							<strong> Distance:</strong> 2.5 Km  
						</div>
						<div>
							<strong> Directions:</strong> <button class="btn btn-theme" style="font-size:10px;padding:5px">Get Directions</button> 
						</div>
						
                    </div>
					<div class=" col-md-3">
						<div class="coupon">
						  <div class="" style="background-color:white;padding:10px;border-radius:5px;">
							<h2 style="color:green"><b>60% OFF </b></h2> 
						  </div>
						</div>
					</div>
                </div>
            </div>
		<div class="clearfix">&nbsp;</div>
        </div>
    </section>
    <section class="mt-4">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ">
					<div class="loop">
							<div class="panel panel-default">
								<div class="panel-heading"><span class="site-col">Date Of offer : 15th Oct - 2019</span> <span class="pull-right site-col"> <p id="demo"></p></span></div>
								<div class="panel-body">
									<div class="col-md-3">
										<img style="height:100px;widht:100px;border-radius:50%;border:1px solid #ddd;" src="img/doctors/1.png" alt="doctor">
									</div>
									<div class="col-md-6">
									<div class="team-content">
                                    <h5 class=" m-0">Dr. Pavan Kumar Reddy N </h5>
                                    <div class=" "><i class="fa fa-user-md" aria-hidden="true"></i> Ophthalmology </div>
									 <div class="post mt-2"> <i class="fa fa-hospital-o" aria-hidden="true"></i> MS Hospital</div>
                                    <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> MBBS ,FNB ,EDIC ,MBA</div>
                                    
                                   
									<div class="post mt-2"> <b>consultation fee :</b> ₹ 500</div>

                                </div>
									</div>
									<div class="col-md-3">
										<a href="slotbooking.php" class="btn btn-success btn-block" style="margin-top:50px;">
										Book Appointment</a>
										
										
									</div>
								
								</div>
								<div class="panel-footer"><span class="site-col">Note : Offer is avalable for first 150 Patients</span>
								</div>
							</div>
						</div>
						<div class="loop">
							<div class="panel panel-default">
								<div class="panel-heading"><span class="site-col">Date Of offer : 15th Oct - 2019</span> <span class="pull-right site-col"> <p id="demo"></p></span></div>
								<div class="panel-body">
									<div class="col-md-3">
										<img style="height:100px;widht:100px;border-radius:50%;border:1px solid #ddd;" src="img/doctors/1.png" alt="doctor">
									</div>
									<div class="col-md-6">
									<div class="team-content">
                                    <h5 class=" m-0">Dr. Pavan Kumar Reddy N </h5>
                                    <div class=" "><i class="fa fa-user-md" aria-hidden="true"></i> Ophthalmology </div>
									 <div class="post mt-2"> <i class="fa fa-hospital-o" aria-hidden="true"></i> MS Hospital</div>
                                    <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> MBBS ,FNB ,EDIC ,MBA</div>
                                    
                                   
									<div class="post mt-2"> <b>consultation fee :</b> ₹ 500</div>

                                </div>
									</div>
									<div class="col-md-3">
											<a href="slotbooking.php" class="btn btn-success btn-block" style="margin-top:50px;">
										Book Appointment</a>
										
										
									</div>
								
								</div>
								<div class="panel-footer"><span class="site-col">Note : Offer is avalable for first 150 Patients</span>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
    </section>
   
    <?php include("footer.php"); ?>
       
  <script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>   