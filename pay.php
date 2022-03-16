
<html>

<body>
<div>
            <h1 align="center">EXPRESS TRAVELLERS</h1>
			<form  action="greet.php" method="POST">
			<h2>  Flying from</h2>						   
                            <input type="text" placeholder="City or airport"name="flying_from">
                        </div>

                        <div class="col-sm-6 col-xm-6 abc">
                             <h2>Flying to</h2> 
                            <input type="text" placeholder="City or airport"name="flying_to">
                        </div>
                    </div><br>

                        <div class="col-sm-4 col-xm-6">
                            <h2> Departure Date</h2>
                            <input class="glyphicon glyphicon-calendar" type="date" name="departure_date" placeholder="mm/dd/yyyy">
                        </div>
						</br>
                         <div id="choiceone">
                           <h2> <label for="sel1"> TRAVELLERS:</label> </h2>
                            <select class="form-control" id="sel1">
                                <option>adults</option>
                                <option>childern</option>
                                <option>infants</option>
                            </select>
                        </div>
                    
                    </br>
                        <div id="choiceone">
                          <h2>  <label for="sel1">SELECT CLASS:</label></h2>
                            <select class="form-control" id="sel1">
                                <option>Premium</option>
                                <option>Business</option>
                                <option>Economic</option>
                            </select>
                        </div>
                        <br>
						<h2 align="center">PAYMENT</h2>
           <h3> Name on Card</h3>
            <input type="text" id="cname" name="cardname" placeholder="" required>
			</br>
           <h3> Card number</h3>
            <input type="text" id="cnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
			</br>
            <h3>Exp Month</h3>
            <input type="text" id="expmonth" name="expmonth" placeholder="00" required>

            <div class="row">
              <div>
			  </br>
                <h3>Exp Year</h3>
                <input type="text" id="expyear" name="expyear" placeholder="0000" required>
              </div>
              <div class="col-50">
			  </br>
                <h3>CVV</h3>
      
	  <input type="text" id="cvv" name="cvv" placeholder="" required>
              </div>
		  </br>
		  </br>
		      <input type="submit" name="Pay" value="Pay">
</form>

<?php
/*
	session_start();
		include("project026.php");

		if($_SERVER['REQUEST_METHOD']=="POST")
			{ $ff=$_POST['flyingfrom'];
		$ft=$_POST['flyingto'];
		$dd=$_POST['departuredate'];

		if(!empty($ff)&&!empty($ft)&&!empty($dd)&&!is_numeric($ff))
			{
		$query="insert into flight(flying from,flying to,departure date) values('$ff','$ft','$dd')";
		mysqli_query($conn,$query);
		header("location:greet.php");
		die;
			}else
				{
		echo "connected sucessfully";
				}
		}
*/
		?>
</body>
</html>