<!--<script type="text/javascript">
	$(document).ready(function () {
		var validator = $("#index").bootstrapValidator({
			feedbackIcons: {
				valid: "glyphicon glyphicon-ok",
				invalid: "glyphicon glyphicon-remove", 
				validating: "glyphicon glyphicon-refresh"
			}, 
			fields : {
				PID_karyawan :{
					message : "butuh PID_karyawan",
					validators : {
						notEmpty : {
							message : "tolong masukan id_staff"
						}, 
						stringLength: {
							min : 5, 
							max: 50,
							message: "nama minimal 5 kata"
						},
					}
				},
				nama_staff :{
					message : "butuh nama_staff",
					validators : {
						notEmpty : {
							message : "tolong masukan nama_staff"
						}, 
						stringLength: {
							min : 6, 
							max: 40,
							message: "panjang nama_staff antara 6 sampai 40 kata"
						},
						nama_staff: {
							message: "nama_staff salah"
						}
					}
				}, 
				jabatan_staff : {
					validators : {
						greaterThan : {
							value: 1,
							message: "jabatan harus dipilih"
						}
					}
				},				
				email_staff :{
					message : "butuh email_staff",
					validators : {
						notEmpty : {
							message : "tolong masukan email_staff"
						}, 
						stringLength: {
							min : 6, 
							max: 30,
							message: "panjang nama_staff antara 6 sampai 30 kata"
						},
						email_staff: {
							message: "email_staff salah"
						}
					}
				}, 		
				alamat_staff :{
					message : "butuh alamat_staff",
					validators : {
						notEmpty : {
							message : "tolong masukan alamat_staff"
						}, 
						stringLength: {
							min : 3, 
							max: 60,
							message: "panjang alamat_staff antara 3 sampai 60 kata"
						},
						alamat_staff: {
							message: "alamat_staff salah"
						}
					}
				},
				telepon_staff :{
					message : "butuh telepon_staff",
					validators : {
						notEmpty : {
							message : "tolong masukan telepon_staff"
						}, 
						stringLength: {
							min : 3, 
							max: 15,
							message: "panjang telepon_staff antara 3 sampai 60 kata"
						},
						telepon_staff: {
							message: "telepon_staff salah"
						}
					}
				}	
			}
		});
	
		validator.on("success.form.bv", function (e) {
			e.preventDefault();
			$("#index").addClass("hidden");
			$("#confirmation").removeClass("hidden");
		});
		
	});
</script>-->