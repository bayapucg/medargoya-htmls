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
.checkbox input[type="checkbox"], .checkbox-inline input[type="checkbox"] {
     margin-top: 4px !important; 
	 
}
.modal-backdrop {
  z-index: -1;
}
.modal-header {
    min-height: 16.43px;
    padding: 15px;
    border-bottom: 1px solid #e5e5e5;
    background: #4cb235;
	color:#fff;
}
.modal-header h4 {
   
	color:#fff;
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
		
		<form>
		<div class="row">
		<fieldset class="scheduler-border">
			<legend class="scheduler-border">Who is the Patient</legend>
			<div class="col-md-6">
				<div class="form-group">
					<label >Who is the Patient</label>
						<select class="form-control">
							<option>Select</option>
							<option>Patient 1</option>
							<option>Patient 2</option>
							<option>Patient 3</option>
						</select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label >&nbsp;</label>
					<div>
						<button type="button" class="btn btn-warning " data-toggle="modal" data-target="#myModal">Add New Patient</button>
						</div>
				</div>
			</div>
		</fieldset>
		<fieldset class="scheduler-border">
			<legend class="scheduler-border">Add Patient Details</legend>
			<div class="col-md-6">
				<div class="form-group">
					<label >Date and Time</label>
						<input type="text" class="form-control" value="Tommarow,11Am" disabled>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label >Name of the Patient</label>
						<input type="text" class="form-control" value="Patient1" disabled>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label >Email Id</label>
						<input type="text" class="form-control" value="Patient1@gmail.com" disabled>
				</div>
			</div>	
			<div class="col-md-6">
				<div class="form-group">
					<label >Mobile No</label>
						<input type="text" class="form-control" value="850022xxxx" disabled>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label >Age</label>
						<input type="text" class="form-control" value="25" disabled>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label >Gender</label>
						<select class="form-control" disabled>
							<option> Male</option>
							<option> Female</option>
							<option> Others</option>
						</select>
				</div>
			</div>	
			<div class="col-md-6 col-md-offset-6">
				<table class="table table-bordered">
					<tr>
						<th>Constalation Fee</th>
						<td>₹ 500</td>
					</tr>	
					<tr>
						<th>Lab test1</th>
						<td>₹ 50</td>
					</tr>
					<tr>
						<th>Lab test2</th>
						<td>₹ 50</td>
					</tr>
					<tr>
						<th>Discount</th>
						<td>₹ 200</td>
					</tr>
					<tr>
						<th>Grand Total</th>
						<td>₹ 400</td>
					</tr>
				</table>
				<p>Booking is FREE. All fees are payable at Hospital</p>
				<div class="checkbox">
				  <label>
				  <input style="width: 20px; 
            height: 20px; margin-left:-20px;" type="checkbox" value="">
				   &nbsp; 
				  </label>Booking this appointment  I agree to the <a href=""> T&C </a>
</div>
			</div>
			
			
		</fieldset>
		</div>
		<div class="py-4 text-center">
			<a href="booking-success.php" class="btn btn-success">Confirm Booking </a>
		</div>
		</form>
		</div>
    </section>
  
     <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="z-index:2000">
    <div class="modal-dialog" style="z-index:2000">
    
      <!-- Modal content-->
      <div class="modal-content" style="z-index:2000">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title ">Add New Patient Details</h4>
        </div>
        <div class="modal-body">
		<form>
			<div class="row">
				<div class="col-md-6">
				<div class="form-group">
					<label >Date and Time</label>
						<input type="text" class="form-control" value="Tommarow,11Am" disabled>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label >Name of the Patient</label>
						<input type="text" class="form-control" placeholder="Enter Patient Name" >
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label >Email Id</label>
						<input type="text" class="form-control" placeholder="Enter email Address" >
				</div>
			</div>	
			<div class="col-md-6">
				<div class="form-group">
					<label >Mobile No</label>
						<input type="text" class="form-control" placeholder="Enter Mobile No" >
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label >Age</label>
						<input type="text" class="form-control" placeholder="Enter Age" >
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label >Select Gender</label>
						<select class="form-control" >
							<option> Male</option>
							<option> Female</option>
							<option> Others</option>
						</select>
				</div>
			</div>	
			<div class="col-md-12  text-center">
				<button class="btn btn-warning bnt-success"> Add Patient</button>
			</div>
			</div>
			</form>
        </div>
        
      </div>
      
    </div>
  </div>
    <?php include("footer.php"); ?>
	
       