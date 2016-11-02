<?php
	include('Connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Doxa - Recruitment New Employee</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- BootstrapValidator CSS -->
    <link href="css/bootstrapValidator.min.css" rel="stylesheet"/>
	
    <!-- jQuery and Bootstrap JS -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
		
	<!-- BootstrapValidator -->
    <script src="js/bootstrapValidator.min.js" type="text/javascript"></script>
	
	<!-- rich editor by tinycme -->
	<script src="tinymce/tinymce.min.js"></script>
	
	
	<!-- validator and random number -->
	<script src="js/validator2.js" type="text/javascript"></script>

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

	

<body>

	<?php include 'header.php'; ?>
	

    <!-- Page Content -->
    <div class="container">

			<div class="row" width="500">
				
			<div class="table-responsive">
				<table class="table table-bordered table-hover" width="200" border="1" cellpadding="1" cellspacing="1">
					<thead>
				<tr>
					<th>ID_Karyawan</th>
					<th>Nama Karyawan</th>
					<th>Kelamin</th>
					<th>Email</th>
					<th>Telepon</th>	
					<th>Peminatan_jabatan</th>
					<th>Tentang_diri</th>	
					<th>Edit</th>	
				</tr>
					</thead>
						<tbody>
				
									
						<?php
						$query	= "SELECT * FROM karyawan JOIN `detail_karyawan` ON karyawan.ID_karyawan = detail_karyawan.ID_karyawan
						JOIN detail_tentang_diri ON karyawan.ID_karyawan = detail_tentang_diri.ID_karyawan";
						$data = $db->prepare($query);
						$data->execute();
						while($result=$data->fetch(PDO::FETCH_LAZY)){			 	  	
						?>
						
							<tr>
								<td><?php echo $result->ID_karyawan;?></td>
								<td><?php echo $result->nama_karyawan;?></td>
								<td><?php echo $result->kelamin;?></td>
								<td><?php echo $result->email;?></td>
								<td><?php echo $result->telepon;?></td>
								<td><?php echo $result->peminatan_jabatan;?></td>
								<td><?php echo $result->tentang_diri;?></td>
								<td>
									<a href="update.php?id=<?php echo $result->ID_karyawan ?>">Update | </a>
									<a href="delete.php?id=<?php echo $result->ID_karyawan ?>">Delete</a>
								</td>
							</tr>
							
						<?php
						}
						?>
							
						</tbody>	  
				</table>
				
				
				
			</div>
         </div>
       
     </div> 
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

	 <!-- /#wrapper -->
	<script src="js/bootstrapValidator.js"></script>
	
	
	<!-- boostrap validator CSS -->
	<script src="js/bootstrapValidator.min.css" type="text/javascript"></script>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- JQueery and Boostrap JS -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js.js"></script>

	<!-- Bootsrap Validator css-->
	 <script src="js/bootstrapValidator.min.js" type="text/javascript"></script>

</body>
</html>
