<?php
session_start();
  $connection = new mysqli('localhost', 'id18794570_mydb', 'byU=^D})=1YGb/IG', 'id18794570_kdb') or die(mysqli_error());

  $id = $_SESSION['uid'];
$result = mysqli_query($connection,"SELECT * FROM userbills WHERE uid = '$id'");
$test = mysqli_fetch_array($result);

if($test != null){    
$id=$test['id'] ;
$fname=$test['fname'] ;
$email=$test['email'] ;
$tdate=$test['tdate'] ;
$ddate=$test['ddate'] ;
}else{
    echo "No records Found";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
	<link rel="shortcut icon" type="image/jpg" href="images/favi.png"/>
	<title>KLOUDNET</title>
</head>


<body>

	<div class="container">

		<div class="row">
			<div class="col-md-12">
					<img src="img/logo.png">
				<div class="row">
					
					<div class="col-md-6" style="font-family: 'Poppins',sans-serif; margin-left: 5%; margin-top: 5%; font-weight: bold;">
						<h5 style="margin-bottom:2%; font-weight:bold;">NAME : 
						<?php 
						if($test != null){
						    echo $fname;
						}else{
						    echo "No Record Found";
						}
						
						?></h5>
						<h5 style="margin-bottom:2%; font-weight:bold;">EMAIL : 
						<?php 
						if($test != null){
						    echo $email;
						}else{
						    echo "No Record Found";
						}
						?>
						</h5>
						<h5 style="margin-bottom:2%; font-weight:bold;">DATE : <?php echo $CurrentDate = date("F d Y");?></h5>
						

					</div>


				</div>
				<hr>
				<?php

                $connection = mysqli_connect("localhost","id18794570_mydb","byU=^D})=1YGb/IG");
                $db = mysqli_select_db($connection, 'id18794570_kdb');

             	$id = $_SESSION['uid'];
                
                $query = "SELECT * FROM userbills WHERE uid='$id'";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-light">
                    	<thead>
                            <tr>
                                
                                <th scope="col">Date Issued</th>
                                <th scope="col">Due Date</th>
                                <th scope="col">Monthly Bill</th>
                                <th scope="col">Other fees</th>
                                <th scope="col">Charges</th>
                                <th scope="col">Total</th>
                                <th scope="col">Status</th>


                            </tr>
                        </thead>
                        <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {

                    $total= $row['bill'] + $row['charges']; 
                    $id = $row['id'];

                    $sql="UPDATE userbills SET total='$total'  WHERE id = $id";
                    mysqli_query($connection,$sql);
            ?>
                        <tbody>
                            <tr>
                                

                                <td> <?php echo $row['tdate']; ?> </td>
                                <td> <?php echo $row['ddate']; ?> </td>
                                <td> <?php echo $row['bill']; ?> </td>
                                <td> <?php echo $row['fees']; ?> </td>
                                <td> <?php echo $row['charges']; ?> </td>
                                <td> <?php echo $row['total']; ?> </td>
                                <td> <?php echo $row['status']; ?> </td>


                                </td>
                            </tr>

                        </tbody>
                        
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>

			</div>

		</div>
		
	</div>

<script>
    window.print();
</script>

</body>
</html>