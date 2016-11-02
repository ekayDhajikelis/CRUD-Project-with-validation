function GUID(){
                    var alphabets = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
					var numbers = new Array('1','2','3','4','5','6','7','8','9','0');
                    var i;
                    for (i=0;i<3;i++){
                       var a = 16;
                       
                       var c = numbers[Math.floor(Math.random() * numbers.length)];
                       var d = numbers[Math.floor(Math.random() * numbers.length)];
                       var e = numbers[Math.floor(Math.random() * numbers.length)];
                    }
                    var code = a + c + d + e ;
                    document.getElementById("PID_karyawan").value = code
            }
			

				
/*validator */				
$(document).ready(function () {
	
		tinymce.init({
			selector: 'textarea',
			setup: function(editor) {
				editor.on('keyup', function(e) {
					console.debug('Editor contents was modified. Contents: ' + editor.getContent({
                    format: 'text'
						}));
							$('#input-user').bootstrapValidator('revalidateField', 'Pbiography');
							console.debug('Editor contents was modified. Contents: ' + editor.getContent({
							format: 'text'
						}));
							$('#input-user').bootstrapValidator('revalidateField', 'Pbiography');
							});
			}
		});		
		var validator = $("#input-user").bootstrapValidator({
			framework: 'bootstrap',
            excluded: [':disabled'],
			feedbackIcons: {
				valid: "glyphicon glyphicon-ok",
				invalid: "glyphicon glyphicon-remove", 
				validating: "glyphicon glyphicon-refresh"
			},	
			fields : {
				Pnama_Karyawan :{
					message : "butuh nama karyawan",
					validators : {
						notEmpty : {
							message : "tolong masukan nama karyawan"
						}, 
						stringLength: {
							min : 3, 
							max: 50,
							message: "panjang nama karyawan antara 5 sampai 50 kata"
						},
					}
				}, 	
				Pemail :{
					message : "butuh email karyawan",
					validators : {
						notEmpty : {
							message : "tolong masukan email"
						}, 
						stringLength: {
							min : 5, 
							max: 50,
							message: "panjang nama karyawan antara 5 sampai 50 kata"
						},
						regexp: {
                            regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                            message: 'The value is not a valid email address'
                        }
					}
				},
				Pgender :{
					message : "pilih gender",
					validators : {
						notEmpty : {
							message : "tolong masukan gender"
						}, 
					}
				}, 
				Ptelepon : {
					message : "masukan nomer telepon",
					validators: {
						notEmpty : {
							message : "tolong masukan nomer telepon"
						}, 
                        numeric: {
                            message: "nomer telepon haruslah angka"
                        }
                    }
				},
				Pjabatan :{
					message : "pilih jabatan",
					validators : {
						notEmpty : {
							message : "tolong masukan pilihan jabatan"
						}, 
					}
				},
				Pbiography :{
					validators: {
						callback: {
							message: 'Cerita mu berisikan 5 hingga 200 kata',
							callback: function (value, validator, $field) {
								// Get the plain text without HTML
								var text = tinyMCE.activeEditor.getContent({
									format: 'text'
								});
								return text.length <= 200 && text.length >= 5;
							}
						}
					}
				}
			}
});	
		validator.on("#index", function (e) {
			e.preventDefault();
			$("#index").addClass("hidden");
			$("#confirmation").removeClass("hidden");
		});
	});

