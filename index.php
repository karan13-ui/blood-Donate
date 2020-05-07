<?php 

	//include header file
        include ('include/config.php');
	include ('include/header.php');

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate the blood, save the life</h1>
						<p class="text-center">Donate the blood to help the others.</p>
						</div>


						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option><optgroup title="Delhi" label="&raquo; Delhi"></optgroup><option value="southdelhi" >South Delhi</option><option value="northdelhi" >North Delhi</option><option value="westdelhi" >West Delhi</option><option value="eastdelhi" >East Delhi</option><option value="northwestdelhi" >North West Delhi</option><option value="northeastdelhi" >North East Delhi</option><option value="southwestdelhi" >South West Delhi</option><option value="southeastdelhi" >South East Delhi</option><optgroup title="Maharashtra" label="&raquo; Maharashtra"></optgroup><option value="mumbai" >Mumbai</option><option value="thane" >Thane</option><option value="pune" >Pune</option><option value="sangli" >Sangli</option><option value="nasik" >Nasik</option><option value="nagpur" >Nagpur</option><option value="latur" >Latur</option><option value="buldana" >Buldana</option><option value="aurangabad" >Aurangabad</option><option value="hingoli" >Hingoli</option><option value="amravati" >Amravati</option><option value="jalna" >Jalna</option><option value="gondiya" >Gondiya</option><option value="washim" >Washim</option><option value="yavatmal" >Yavatmal</option><option value="sindhudurg" >Sindhudurg</option><option value="jalna" >Jalna</option><option value="ratnagiri" >Ratnagiri</option><option value="hingoli" >Hingoli</option><option value="osmanabad" >Osmanabad</option><option value="latur" >Latur</option><option value="kohlapur" >Kohlapur</option><optgroup title="UTTAR PRADESH" label="&raquo; UTTAR PRADESH"></optgroup><option value="varanasi" >Varanasi</option><option value="gaziabad" >Gaziabad</option><option value="kanpur" >Kanpur</option><option value="muradabad" >Muradabad</option><option value="shamli" >Shamli</option><option value="prayagraj" >Prayagraj</option><option value="mirzapur" >Mirzapur</option><optgroup title="Punjab" label="&raquo; Punjab"></optgroup><option value="Alipur" >Alipur</option><option value="Attock" >Attock</option><option value="Bahawalnagar" >Bahawalnagar</option><option value="Bahawalpur" >Bahawalpur</option><option value="Bhakkar" >Bhakkar</option><option value="Chakwal" >Chakwal</option><option value="Chiniot" >Chiniot</option><option value="Dera Ghazi Khan" >Dera Ghazi Khan</option><option value="Faisalabad" >Faisalabad</option><option value="Gujranwala" >Gujranwala</option><option value="Gujrat" >Gujrat</option><option value="Hafizabad" >Hafizabad</option><option value="Jhang" >Jhang</option><option value="Jhelum" >Jhelum</option><option value="Kasur" >Kasur</option><option value="Khanewal" >Khanewal</option><option value="Khushab" >Khushab</option><option value="Lahore" >Lahore</option><option value="Layyah" >Layyah</option><option value="Lodhran" >Lodhran</option><option value="Mandi Bahauddin" >Mandi Bahauddin</option><option value="Mianwali" >Mianwali</option><option value="Multan" >Multan</option><option value="Muzaffargarh" >Muzaffargarh</option><option value="Nankana Sahib" >Nankana Sahib</option><option value="Narowal" >Narowal</option><option value="Okara" >Okara</option><option value="Pakpattan" >Pakpattan</option><option value="Rahim Yar Khan" >Rahim Yar Khan</option><option value="Rajanpur" >Rajanpur</option><option value="Rawalpindi" >Rawalpindi</option><option value="Sahiwal" >Sahiwal</option><option value="Sargodha" >Sargodha</option><option value="Sheikhupura" >Sheikhupura</option><option value="Shekhupura" >Shekhupura</option><option value="Sialkot" >Sialkot</option><option value="Toba Tek Singh" >Toba Tek Singh</option><option value="Vehari" >Vehari</option>
              </select>
                                        </div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
									
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
							Blood donation is one of the most significant contribution that a person can make towards the society. It is not harmful for an adult person to donate blood. The body of the donor can regenerate the blood within few days. It poses no threat to the metabolism of the body.An ailing body needs blood for various reasons. He may be attacked with anemia, undergone an operation or may meet with an accident. But such a patient may die for want of blood as it is not always available. Even a pregnant mother may need blood in case of emergency situation.	
                        </p>
						<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vission</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									Blood donation is one of the most significant contribution that a person can make towards the society. It is not harmful for an adult person to donate blood. The body of the donor can regenerate the blood within few days. It poses no threat to the metabolism of the body.An ailing body needs blood for various reasons. He may be attacked with anemia, undergone an operation or may meet with an accident. But such a patient may die for want of blood as it is not always available. Even a pregnant mother may need blood in case of emergency situation.	
                        </p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									Blood donation is one of the most significant contribution that a person can make towards the society. It is not harmful for an adult person to donate blood. The body of the donor can regenerate the blood within few days. It poses no threat to the metabolism of the body.An ailing body needs blood for various reasons. He may be attacked with anemia, undergone an operation or may meet with an accident. But such a patient may die for want of blood as it is not always available. Even a pregnant mother may need blood in case of emergency situation.	
                        </p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									Blood donation is one of the most significant contribution that a person can make towards the society. It is not harmful for an adult person to donate blood. The body of the donor can regenerate the blood within few days. It poses no threat to the metabolism of the body.An ailing body needs blood for various reasons. He may be attacked with anemia, undergone an operation or may meet with an accident. But such a patient may die for want of blood as it is not always available. Even a pregnant mother may need blood in case of emergency situation.	
                        </p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>