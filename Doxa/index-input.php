	<?php 

		if(isset($_POST['insert']))
		{
			try{include "Connect.php";}
			catch (PDOException $exc){
				echo $exc->getMessage();
				exit();
			}
			
			$PID_karyawan 	= $_POST ['PID_karyawan'];
			$Pnama_Karyawan = $_POST ['Pnama_Karyawan'];
			$Pgender		= $_POST ['Pgender'];
			$Pemail			= $_POST ['Pemail'];
			$Ptelepon 		= $_POST ['Ptelepon'];
			$Pjabatan 		= $_POST ['Pjabatan'];
			$Pbiography 	= $_POST ['Pbiography'];
			
			
			$query = 	"INSERT INTO `karyawan`(`ID_karyawan`,`nama_karyawan`) VALUES (:PID_karyawan,:Pnama_Karyawan);
						INSERT INTO `detail_karyawan`(`ID_karyawan`, `kelamin`, `email`, `telepon`, `peminatan_jabatan`) VALUES (:PID_karyawan,:Pgender,:Pemail,:Ptelepon,:Pjabatan);
						INSERT INTO `detail_tentang_diri`(`ID_karyawan`, `tentang_diri`) VALUES (:PID_karyawan,:Pbiography);
			";
			
			$result = $db->prepare($query);
			
			$result->bindValue(":PID_karyawan",$PID_karyawan);
			$result->bindValue(":Pnama_Karyawan",$Pnama_Karyawan);
			$result->bindValue(":Pgender",$Pgender);
			$result->bindValue(":Pemail",$Pemail);
			$result->bindValue(":Ptelepon",$Ptelepon);
			$result->bindValue(":Pjabatan", $Pjabatan);
			$result->bindValue(":Pbiography",$Pbiography);
			
			$execute = $result->execute();

		
			if($execute)
				{
					echo 'data masuk';
				} else {
					echo 'data tidak masuk';
				}
		}
		?>
	<div class="col-lg-6">
				<form id="input-user" method="POST" class="form-horizontal" action="#">
					<div class="form-group">
						<label for="text">ID_karyawan:</label>
						<input type="text" class="form-control" id="PID_karyawan" name="PID_karyawan">
						<input type="button" id="refresh" value="Refresh" onclick="GUID();" />
					</div> 
					<div class="form-group">
						<label for="text">Nama Karyawan:</label>
						<input type="text" class="form-control" id="Pnama_Karyawan" name="Pnama_Karyawan">
					</div> 
						 
					<div class="form-group">
						<label for="text">Kelamin:</label>
							  <select class="form-control" id="Pgender" name="Pgender">
								<option value="">--silahkan pilih--</option>
								<option value="Pria">Pria</option>
								<option value="Wanita">Wanita</option>
							</select>
					</div> 
						 
					<div class="form-group">
						<label for="text">Email:</label>
						<input type="text" class="form-control" id="Pemail" name="Pemail">
					</div>
					
					<div class="form-group">
						<label for="pwd">Telepon:</label>
						<input type="text" class="form-control" id="Ptelepon" name="Ptelepon">
					</div>
						
					<div class="form-group">
						<label>Peminatan Jabatan</label>
							<select class="form-control" id="Pjabatan" name="Pjabatan">
								<option value="">--pilih--</option>
								<option value="Manager">Manager</option>
								<option value="Director">Director</option>
								<option value="Programmer">Programmer</option>
							</select>
					</div>
					
					<div class="form-group">
						<label>Ceritakan dirimu:</label>
						<textarea class="form-control" name="Pbiography" style="margin: 2.5% 2.5%;"></textarea>
					</div>
					
					<div class="form-group">
						<div class=".col-lg-3" style="width:500px;" align="center">
							<button type="submit" name="insert" value="Insert Data" class="btn btn-default">Submit</button>
							<button type="reset" class="btn btn-default">Reset </button>			
						</div>		
					</div>
				</form>	
	</div>
				
	<div id="confirmation" class="alert alert-success hidden">
		Data sudah dimasukan
	</div>