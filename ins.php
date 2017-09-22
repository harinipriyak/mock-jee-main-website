<?php
            
            $con = mysqli_connect('localhost', 'harini', 'harini');
            
            if(! $con ) {
               echo 'Could not connect: ';
            }
            
if(!mysqli_select_db($con,'first'))
{
    echo 'Database not selected';
}

$Candidate_Name=$_POST['name'];
$Father_Name=$_POST['fname'];
$Gender=$_POST['gender'];
$Aadhaar_number=$_POST['ano'];
$State_of_Eligibility=$_POST['state'];
$City=$_POST['center'];

$sql="INSERT INTO reg(Candidate_Name,Father_Name,Gender,Aadhaar_number,State_of_Eligibility,City) VALUES ('$Candidate_Name','$Father_Name','$Gender',$Aadhaar_number,'$State_of_Eligibility','$City')";

if(!mysqli_query($con,$sql))
{
    echo 'Registration was not successful.Please try again';
}
else
{
    echo 'Registration successful.Your login and password will be given shortly.';
}
            
         header("refresh:2;url=register.php");
      ?>