<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $aname = $_POST['aname'];
        $school = $_POST['school'];
        $pnumber=$_POST['pnumber'];
       
        $email_address=$_POST['email_address'];
        $state=$_POST['state'];
        $city=$_POST['city'];
        $country=$_POST['country'];
        $pincode=$_POST['pincode'];
    }
    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fsdlab";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO details(name,school,pnumber,email_address,state,city,country,pincode) VALUES ('$aname','$school','$pnumber','$email_address','$state','$city','$country','$pincode')"; 
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
            echo "entries added";
            
        
            
        
    }
    

    // close connection
    mysqli_close($con);

?>
