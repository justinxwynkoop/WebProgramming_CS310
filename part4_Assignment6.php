<!DOCTYPE html>
<?php
echo "Car Loan Calc";
?>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <table>
    <tr>
      <th>Enter Loan Data:</th>
      <td></td>

    </tr>
    <tr>
      <td>Amount of the loan ($):</td>
      <td><input id="amount" onchange="calculate();"></td>
      <td rowspan=8>
        <canvas id="graph" width="400" height="250"></canvas></td>
    </tr>
    <tr>
      <td>Annual interest (%):</td>
      <td><input id="apr" onchange="calculate();"></td>
    </tr>
    <tr>
      <td>Down Payment ($):</td>
      <td><input id="down" onchange="calculate();"></td>
    </tr>
    <tr>
      <td>Length of Loan (years):</td>
      <td><input id="years" onchange="calculate();"></td>

      <tr>
        <th>Approximate Payments:</th>
        <td><button onclick="calculate();">Calculate</button>
          <button onClick="refreshPage()">Reset</button></td>
      </tr>
      <tr>
        <td>Monthly payment:</td>
        <td><span class="output" id="payment"></span></td>
      </tr>


  </table>
  <script>
    function calculate() {
      var amount = document.getElementById("amount");
      var apr = document.getElementById("apr");
      var years = document.getElementById("years");
      var down = document.getElementById("down");
      var payment = document.getElementById("payment");

      var principal = parseFloat(amount.value);
      var interest = parseFloat(apr.value) / 100 / 12;
      var payments = parseFloat(years.value) * 12;
      var down = parseFloat(down.value);

      var x = Math.pow(1 + interest, payments);
      var monthly = ((principal - down) * x * interest) / (x - 1);

      if (isFinite(monthly)) {
        payment.innerHTML = monthly.toFixed(2);
        total.innerHTML = (monthly * payments).toFixed(2);
        totalinterest.innerHTML = ((monthly * payments) - principal).toFixed(2);
        chart(principal, interest, monthly, payments);
      } else {
        payment.innerHTML = "";
        total.innerHTML = ""
        totalinterest.innerHTML = "";
        chart();
      }
    }

    function refreshPage() {
      window.location.reload();
    }
  </script>

</body>
<a href="index.html">Home</a>
<br>
<a href="Assignment6.html">Assignment 6</a>

</html>
<!--Using PHP and HTML 5, create a webpage that calculates the monthly payment for a car loan. The user enters the price of the car (P), down payment (D), Annual Percentage Rate (R),
and the number of years (N). Compute the monthly payment (M) using the following formula and display it:

Let i = R / 1200 and n = N * 12;

M = ((P - D) * i * (1 + i)n) / ((1 + i)n - 1)
