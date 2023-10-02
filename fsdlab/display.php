<?php
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
$sql = " SELECT * FROM details ";
$result =  mysqli_query($con, $sql);;
// to ensure that the connection is made
if (!$con)
{
    die("Connection failed!" . mysqli_connect_error());
}

?>

<html>
    
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="styles.css"> -->
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;">DETAILS FROM THE DATABASE:</h1>
        <br>
    </div>
    <section>
    <table class="table table-striped table-bordered">
            <tr>
                
                <th>Names</th>
                <th>School</th>
                <th>number</th>
                <th>email_address</th>
                <th>state</th>
                <th>city</th>
                <th>country</th>
                <th>pincode</th>
                <th>id</th>
            </tr>
    

    <?php
                
                while($rows=$result->fetch_assoc())
                {
    ?>
    <tr>
                
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['school'];?></td>
                <td><?php echo $rows['pnumber'];?></td>
                <td><?php echo $rows['email_address'];?></td>
                <td><?php echo $rows['state'];?></td>
                <td><?php echo $rows['city'];?></td>
                <td><?php echo $rows['country'];?></td>
                <td><?php echo $rows['pincode'];?></td>
                <td><?php echo $rows['id'];?></td>

                
    </tr>
    <?php
                }
    ?>
    </table>

</section>
<br>
<a href="homepage.html">
<button type="button" class="btn btn-dark">
       
GO BACK

</button>
            </a>
</body>
<!-- <script src="i.js" charset="utf-8"> -->

    
</script>
</html>