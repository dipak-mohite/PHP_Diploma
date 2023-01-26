<?php
$reg_num = rand(1111111, 99999999);
echo "<h1> Registration Successful!</h1>";
echo "<h4> Registration ID: DSE22".$reg_num."</h4>";
echo "Personal Details <br><br>";
echo "Name : ".$_POST['t4']."<br>";
echo "DOB : ".$_POST['dob']."<br>";
echo "Gender : ".$_POST['gender']."<br>";
echo "Category : ".$_POST['category']."<br>";
echo "Current Address : ".$_POST['tempn']."<br>";
echo "Permenent Address : ".$_POST['perm']."<br>";
echo "Mobile Number : ".$_POST['t6']."<br>";
echo "E-Mail : ".$_POST['t7']."<br>";
echo "<br><br><br>";

echo "Educational Details <br><br> 1) Diploma: <br><br>";

echo "Board : ".$_POST['university']."<br>";
echo "Passing Year : ".$_POST['dipyear']."<br>";
echo "Branch : ".$_POST['branch']."<br>";
echo "Institute : ".$_POST['institute']."<br>";
echo "Enrollment No. : ".$_POST['enroll']."<br>";
echo "Semester wise Marks of  Diploma<br>1st Semeter : ".$_POST['first']."<br>";
echo "2nd Semeter : ".$_POST['second']."<br>";
echo "3rd Semeter : ".$_POST['third']."<br>";
echo "4th Semeter : ".$_POST['fourth']."<br>";
echo "5th Semeter : ".$_POST['fifth']."<br>";
echo "6th Semeter : ".$_POST['sixth']."<br>";
echo "Aggrigate : ".$_POST['avg']."<br>";
echo "<br><br><br>";

echo "2) SSC: <br><br>";

echo "Board : ".$_POST['board']."<br>";
echo "Passing Year : ".$_POST['sscyear']."<br>";
echo "Technical Subject : ".$_POST['tech']."<br>";
echo "School Name : ".$_POST['school']."<br>";
echo "Exam Seat No. : ".$_POST['examseat']."<br>";
echo "Marks In SSC Examination<br>";
echo "Mathematics : ".$_POST['math']."<br>";
echo "English : ".$_POST['eng']."<br>";
echo "Science : ".$_POST['sci']."<br>";
echo "Percentage : ".$_POST['per']."<br>";

?>