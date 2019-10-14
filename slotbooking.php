<?php include("header.php"); ?>
<style>
/* HIDE RADIO */
[type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
[type=radio] + div {
  cursor: pointer;
}

/* CHECKED STYLES */
[type=radio]:checked + div {
  outline: 2px solid #4cb235;
}
</style>
<div class="header-space"></div>

    <section class="page-header">
        <div class="bg-f5f5f5">
		<br>
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-md-offset-3">
						
                           <img src="img/doctors/2.png" class="img-responsive img-thumbnail"> 
                    </div>
					<div class="col-md-4">
						<div class="team-content">
                                    <h3 class="title m-0">Dr. Gopireddy </h3>
                                    <div class="post ">Pulmonology </div>
                                    <div class="post mt-2"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> MBBS ,FNB ,EDIC ,MBA</div>
                                   
                                    <div class="post mt-2"><i class="fa fa-clock-o" aria-hidden="true"></i> 10.00 Am - 1.00 Pm
                                        <br>
                                        <span class="ml-5"> 06.00 Pm - 10.00 Pm</span>
                                    </div>
									 <div class="post mt-2"> <b>consultation fee :</b> ₹ 500</div>

                                </div>
                    </div>
					
                    
                </div>
            </div>
		<div class="clearfix">&nbsp;</div>
        </div>
    </section>
    <section>
		<div class="container">
		<div class="row">
			<div class="">
			<div class="col-md-4 col-md-offset-4 py-4">
				<div class="form-group">
					<label >Select your Purpose of Vist:</label>
					<select class="form-control">
						<option>Select</option>
						<option>Consultation</option>
						<option>Follow Up</option>
					</select>
				</div>
			</div>
				<div class="col-md-12 py-4" style="display:flex;justify-content:space-evenly;">
					<label>
					  <input type="radio" name="test" value="small" checked>
					 <div class="slot-days-comp">
						Today 12 Oct
						<div class="text-danger">
							No slots available
						</div>
					 </div>
					</label>

					<label>
					  <input type="radio" name="test" value="big">
					<div class="slot-days">
						Tommarow 13 Oct
						<div class="green-col">
							1 slots available
						</div>
					 </div>
					</label>
					<label>
					  <input type="radio" name="test" value="big">
					<div class="slot-days">
						Mon, 14 Oct
						<div class="green-col">
							7 slots available
						</div>
					 </div>
					</label>
					<label>
					  <input type="radio" name="test" value="big">
					<div class="slot-days">
						Thu, 15 Oct
						<div class="green-col">
							6 slots available
						</div>
					 </div>
					</label>
					<label>
					  <input type="radio" name="test" value="big">
					<div class="slot-days">
						Wed, 16 Oct
						<div class="green-col">
							2 slots available
						</div>
					 </div>
					</label>
					<label>
					  <input type="radio" name="test" value="big">
					<div class="slot-days">
						Thur, 17 Oct
						<div class="green-col">
							20 slots available
						</div>
					 </div>
					</label>
					<label>
					  <input type="radio" name="test" value="big">
					<div class="slot-days">
						Fri, 18 Oct
						<div class="green-col">
							10 slots available
						</div>
					 </div>
					</label>
				</div>
				
			</div>
		</div>
		<form>
		<div class="row">
<fieldset class="scheduler-border">
    <legend class="scheduler-border">Start Time</legend>
	<div class="row">
		<div class="col-md-1" style="width:100px;padding:0">
		<img style="width:50px;float:right" src="img/moning.png" alt="mrng" class="img-responsive">
		</div>
		<div style="margin-top:12px;padding:0" class="col-md-10 text-left"> <h4>Morning 5 Slots</h4></div>
		</div>
		<div class="col-md-12 py-4" style="display:flex;justify-content:space-evenly;">
					<label>
					  <input type="radio" name="test1" value="small" checked>
					 <div class="slot-time-days-comp">
						10.00 AM
					 </div>
					</label>

					<label>
					  <input type="radio" name="test1" value="big">
					<div class="slot-days-avail">
						10.30 AM
					 </div>
					</label>
					<label>
					  <input type="radio" name="test1" value="big">
					<div class="slot-days-avail">
						11.00 AM
					 </div>
					</label>
					<label>
					  <input type="radio" name="test1" value="big">
					<div class="slot-days-avail">
						11.30 AM
					 </div>
					</label><label>
					  <input type="radio" name="test1" value="big">
					<div class="slot-days-avail">
						12.00 PM
					 </div>
					</label><label>
					  <input type="radio" name="test1" value="big">
					<div class="slot-days-avail">
						12.30 PM
					 </div>
					</label>
					<label>
					  <input type="radio" name="test1" value="big">
					<div class="slot-days-avail">
						01.00 PM
					 </div>
					</label>
					<label>
					  <input type="radio" name="test1" value="big">
					<div class="slot-days-avail">
						01.30 PM
					 </div>
					</label>
					<label>
					  <input type="radio" name="test1" value="big">
					<div class="slot-days-avail">
						02.00 PM
					 </div>
					</label>
					
					
				</div>
				
				<div class="clearfix" style="border-bottom:1px solid #ddd;margin:10px 0px;">&nbsp;</div>
				<div class="row">
		<div class="col-md-1" style="width:100px;padding:0">
		<img style="width:40px;float:right" src="img/evng.png" alt="mrng" class="img-responsive">
		</div>
		<div style="margin-top:8px;padding:0" class="col-md-10 text-left"> <h4>Evening 10 Slots</h4></div>
		</div>
		<div class="col-md-12 py-4" style="display:flex;justify-content:space-evenly;">
					<label>
					  <input type="radio" name="test2" value="small" checked>
					 <div class="slot-time-days-comp">
						04.00 PM
					 </div>
					</label>

					<label>
					  <input type="radio" name="test2" value="big">
					<div class="slot-days-avail">
						04.30 PM
					 </div>
					</label>
					<label>
					  <input type="radio" name="test2" value="big">
					<div class="slot-days-avail">
						05.00 PM
					 </div>
					</label>
					<label>
					  <input type="radio" name="test2" value="big">
					<div class="slot-days-avail">
						05.30 PM
					 </div>
					</label><label>
					  <input type="radio" name="test2" value="big">
					<div class="slot-days-avail">
						06.00 PM
					 </div>
					</label><label>
					  <input type="radio" name="test2" value="big">
					<div class="slot-days-avail">
						06.30 PM
					 </div>
					</label>
					<label>
					  <input type="radio" name="test2" value="big">
					<div class="slot-days-avail">
						07.00 PM
					 </div>
					</label>
					<label>
					  <input type="radio" name="test2" value="big">
					<div class="slot-days-avail">
						07.30 PM
					 </div>
					</label>
					<label>
					  <input type="radio" name="test2" value="big">
					<div class="slot-days-avail">
						08.00 PM
					 </div>
					</label>	
					<label>
					  <input type="radio" name="test2" value="big">
					<div class="slot-days-avail">
						08.30 PM
					 </div>
					</label>
					
					
				</div>
</fieldset>
		</div>
		<div class="py-4 text-center">
			<a href="add-details.php" class="btn btn-warning">Book Appointment</a>
		</div>
		</form>
		</div>
    </section>
   
   
    <?php include("footer.php"); ?>
       