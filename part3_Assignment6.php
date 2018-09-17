<?php
echo "Parking Garage";
?>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body,
    p {
      font-family: arial;
      font-size: 16px;
      font-weight: bolder;
    }

    .container {
      width: 500px;
      clear: both;
    }

    .container input {
      width: 100%;
      clear: both;
    }

    .dropbtn {
      background-color: #3498DB;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
    }

    .dropbtn:hover,
    .dropbtn:focus {
      background-color: #2980B9;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      overflow: auto;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown a:hover {
      background-color: #ddd;
    }

    .show {
      display: block;
    }
  </style>
</head>

<body>
  <select id="list">
    <option value="1">Compact</option>
    <option value="2">Intermediate</option>
    <option value="3">Standard</option>
  </select>
  <div id="container">
    <br/>How many days would you like to rent the car for?
    <input type="text" id="rent_days" name="rent_days">
    <br>
    <br/>
    <br/>
    <select id="extra">
      Would you like Insurance?
      <br>
      <option value="1">Yes</option>
      <option value="2">No</option>
    </select>
    <br>
    <br>
    <button onclick="solve_summary()">Summary</button>
    <button type="button" onClick="refreshPage()">Reset</button>
    <br><br>

    <p id="pay"></p>
    <p id="pay1"></p>
  </div>

  <script>
    function solve_summary() {
      var selectedValue = document.getElementById("list").value;
      var days_rented = document.getElementById("rent_days").value;
      var insure = document.getElementById("extra").value


      if (selectedValue == 1) {
        total = 30 * days_rented;
      }
      if (selectedValue == 2) {
        total = 40 * days_rented;
      }
      if (selectedValue == 3) {
        total = 50 * days_rented;
      }
      if (insure == 1) {
        total = (total + (15 * days_rented));
      }
      results = "Summary " + total.toFixed(2) + ".";
      document.getElementById("pay").innerHTML = results;


    }

    function refreshPage() {
      window.location.reload();
    }
  </script>

</body>
<br>
<br>
<br>

<a href="index.html">Home</a>
<br>
<a href="Assignment6.html">Assignment 6</a>

</html><!--Using HTML 5 and PHP, build a web page that allows customers to book rental cars. Customers pick a car type (Compact, Intermediate, Standard) using a drop down list, enter the number of days
using a text box and select if they want to buy Insurance or not using radio buttons. Compact cars cost $30 / day, Intermediate cars cost $40 / day and Standard cars cost $50 / day. Insurance costs $15 / day
for all car types. Your web page should compute and display the total cost of renting the car.-->
