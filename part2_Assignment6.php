<!DOCTYPE html>
<html>
<head></head>
<body>
<p>Number of Hours for parking</p>
<input id="hours" onchange="calculate();">
<br>
<button onclick="calculate();">Calculate</button>
<button onClick="refreshPage()">Reset</button>
<tr>
  <br>
  <td>Monthly payment:</td>
  <td><span class="output" id="payment"></span></td>
</tr>
    <p id="pay"></p>
	<script>
		//Get input from a user
		function parkingFee()
		{
      var parkingHours = document.getElementById("hours");
      var total = document.getElementById("payment");

			if (parkingHours <= 3)
				{
				total = 5.0;
				}

			if (parkingHours > 3.0 && parkingHours <= 24.0)
				{
				 total = (parkingHours)*1.5;
				}
			if (parkingHours > 24.0)
				{
				total = 18.0;
				}
        results = "Summary " + total.toFixed(2) + ".";
        document.getElementById("pay").innerHTML = results;
		}
    function refreshPage() {
      window.location.reload();
    }
	</script>
</body>
</html>

<!--A parking garage charges $5.00 to park for up to three hours. The garage charges an additional $ 1.50 per hour for each hour or part thereof in excess of three hours.
The maximum charge for any given 24 hour period is $ 18.00. Assume that no car parks for longer than 24 hours at a time. Write a PHP script that calculates and displays the parking charges for a customer
who parked in this garage. The user enters the hours parked via a text box.
