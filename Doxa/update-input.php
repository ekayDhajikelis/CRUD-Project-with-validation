<?php
include "Connect.php";
$query = "SELECT * FROM karyawan LEFT JOIN `detail_karyawan` ON (karyawan.ID_karyawan = detail_karyawan.ID_karyawan)
						JOIN detail_tentang_diri ON (karyawan.ID_karyawan = detail_tentang_diri.ID_karyawan) WHERE karyawan.ID_karyawan='$_GET[id]'";
$data = $db->prepare($query);
$data->execute();

$data = $data->fetch(PDO::FETCH_LAZY);
?>


	 <div class="col-lg-6">
				<form id="input-user" action="update-code.php" method="post" class="form-horizontal" >
					
					<div class="form-group">
						<input class="hidden" id="id" name="id" value="<?php echo $data->ID_karyawan ?>"/>
					</div> 
					
					<div class="form-group">
						<label for="text">Nama Karyawan:</label>
						<input type="text" class="form-control" name="Pnama_Karyawan" value="<?php echo $data->nama_karyawan ?>">
					</div> 
						 
					<div class="form-group">
						<label for="text">Kelamin:</label>
							  <select class="form-control" id="Pgender" name="Pgender" value="<?php echo $data->peminatan_jabatan ?>">
								<option value="">--silahkan pilih--</option>
								<option value="Pria">Pria</option>
								<option value="Wanita" <?php if($data->kelamin == 'Wanita') { echo "selected"; }?>>Wanita</option>
							</select>
					</div> 
						 
					<div class="form-group">
						<label for="text">Email:</label>
						<input type="text" class="form-control" id="Pemail" name="Pemail" value="<?php echo $data->email ?>">
					</div>
					
					<div class="form-group">
						<label for="text">Telepon:</label>
						<input type="text" class="form-control" id="Ptelepon" name="Ptelepon" value="<?php echo $data->telepon ?>">
					</div>
						
					<div class="form-group">
						<label>Peminatan Jabatan</label>
							<select class="form-control" id="Pjabatan" name="Pjabatan">
								<option value="">--pilih--</option>
								<option value="Manager" <?php if($data->peminatan_jabatan == 'Manager') { echo "selected"; }?>>Manager</option>
								<option value="Director" <?php if($data->peminatan_jabatan == 'Director') { echo "selected"; }?>>Director</option>
								<option value="Programmer" <?php if($data->peminatan_jabatan == 'Programmer') { echo "selected"; }?>>Programmer</option>
							</select>
					</div>
					
					<div class="form-group">
						<label>Ceritakan dirimu:</label>
						<textarea id="Pbiography" name="Pbiography" ><?php echo $data->tentang_diri ?></textarea>
					</div>
					
					 
					<div class="form-group">
						<div class=".col-lg-3" style="width:500px;" align="center">
							<button type="submit" name="insert" value="Insert Data" class="btn btn-default">Submit</button>
							<button type="reset" class="btn btn-default">Reset </button>			
						</div>		
					</div>
					
				</div>
				<div id="confirmation" class="alert alert-success hidden">
					Data sudah dimasukan
				</div>