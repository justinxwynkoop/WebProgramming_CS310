<html>
<head>
<link rel="stylesheet" type="text/css" href="http://96.48.39.33/student13/bala2.css" />
<title>Grade Calculator</title>
</head>
<body>
<?php
$grade=0;
if ($_POST['Quiz1'] >= 0 && $_POST['Quiz1'] <= 100)
  $grade = $grade + $_POST['Quiz1'] * 0.05;
else
  $grade = $grade + 5;
if ($_POST['Mid-Term'] >= 0 && ($_POST['Mid-Term'] <= 100))
  $grade = $grade + $_POST['Mid-Term'] * 0.30;
else
  $grade = $grade + 30;
if ($_POST['Quiz2'] >= 0 && ($_POST['Quiz2'] <= 100))
  $grade = $grade + $_POST['Quiz2'] * 0.05;
else
  $grade = $grade + 5;
if ($_POST['AL1'] >= 0 && ($_POST['AL1'] <= 100))
  $grade = $grade + $_POST['AL1'] * 0.05;
else
  $grade = $grade + 5;
if ($_POST['AL2'] >= 0 && ($_POST['AL2'] <= 100))
  $grade = $grade + $_POST['AL2'] * 0.05;
else
  $grade = $grade + 5;
if ($_POST['Participation'] >= 0 && ($_POST['Participation'] <= 100))
  $grade = $grade + $_POST['Participation'] * 0.10;
else
  $grade = $grade + 10;
if ($_POST['Final'] >= 0 && ($_POST['Final'] <= 100))
  $grade = $grade + $_POST['Final'] * 0.40;
else
  $grade = $grade + 40;

?>
<?php
echo "Grade Report: <br />";
echo "<br />";
?>
Your final grade percentage will be: <?php echo $grade . "%";
echo "<br />";
{
if ($grade > 90.9)
echo "Your final grade for the course will be: A+ <br />";
elseif ($grade > 85.9)
echo "Your final grade for the course will be: A <br />";
elseif ($grade > 79)
echo "Your final grade for the course will be: A- <br />";
elseif ($grade > 76.9)
echo "Your final grade for the course will be: B+ <br />";
elseif ($grade >71.9)
echo "Your final grade for the course will be: B <br />";
elseif ($grade > 69.9)
echo "Your final grade for the course will be: B- <br />";
elseif ($grade > 65.9)
echo "Your final grade for the course will be: C+ <br />";
elseif ($grade > 59.9)
echo "Your final grade for the course will be: C <br />";
elseif ($grade > 54.9)
echo "Your final grade for the course will be: C- <br />";
elseif ($grade > 49.9)
echo "Your final grade for the course will be: P <br />";
else
echo "Your final grade for the course will be: F <br />";

}

?>
</body>
</html>
<!--Using PHP and HTML5, design and build a webpage that calculates letter grades for students. The user enters the student’s name, total quiz score (q),
total assignment score (a), midterm exam score (m), and final exam score (f). Your PHP script should read all the input, calculate the average score,
compute the letter grade and display the average score and the letter grade.

average score = (q * 15%) + (a * 40%) + (m * 20%) + (f * 25%)

Use a straight grading scale for assigning letter grades.-->
