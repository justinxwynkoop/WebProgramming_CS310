

<html>
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

  h4 {
    font-size: 11px;

  }
</style>
<div class="container">

  <body>


    <br/>Job Title
    <h4>(Choose from 1 = Tester, 2 = Developer, or 3 = Manager)</h4>
    <input type="text" id="emp_name" name="emp_name">
    <br>
    <br/>
    <br/> Number of Hours Worked
    <input type="text" id="hours_worked" name="hours_worked">
    <br>
    <br>


    <button onclick="solve_salary()">Solve Salary</button>
    <button type="button" onClick="refreshPage()">Reset</button>
    <br><br>

    <p id="pay"></p>

</div>
<script>

  function solve_salary() {
    $var emp_name = document.getElementById("emp_name").value;
    $var hours_worked = document.getElementById("hours_worked").value;
    if (emp_name == 1) {
      if (hours_worked <= 40) {
        gross_pay = 35 * hours_worked;
      } else {
        gross_pay = ((35 * 40) + ((35 * 1.5) * ((hours_worked) - 40)));

      }

    }
    if (emp_name == 2) {
      if (hours_worked <= 40) {

        gross_pay = 50 * hours_worked;
      }
      if (hours_worked >= 41) {
        gross_pay = ((50 * 40) + ((50 * 1.5) * ((hours_worked) - 40)));

      }

    }
    if (emp_name == 3) {
      if (hours_worked <= 40) {

        gross_pay = 60 * hours_worked;
      }
      if (hours_worked >= 41) {
        gross_pay = ((60 * 40) + ((60 * 1.5) * ((hours_worked) - 40)));

      }

    }


    results = "Basic Salary " + gross_pay.toFixed(2) + ".";


    document.getElementById("pay").innerHTML = results;

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
<!--Using PHP and HTML 5, write a program that computes an employee's salary. Prompt the user for the number of hours worked and the type of employee
 (1 -- Tester, 2 -- Developer, 3 -- Manager). The pay rate for a Tester is $35/hour, for a Developer is $50/hour, and for a Manager is $65/hour. Compute the salary of the employee.
 Display the employee’s salary on your webpage
