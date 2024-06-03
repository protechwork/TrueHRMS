<?php
            $CI =& get_instance();
            $CI->load->library('generic_repository');
			// echo(FCPATH);
			// echo(BASEPATH);
			// echo(APPPATH);
			// echo (base_url());
			// echo(site_url());

?>
<!DOCTYPE html>
<html lang="en">
	<?php include("parts/head.php"); ?>
	<body class="hold-transition sidebar-mini">
		<div class="wrapper">
			<!-- Navbar -->
			<?php include("parts/topnavbar.php"); ?>
			<!-- /.navbar -->
			<!-- Main Sidebar Container -->
			<?php include('parts/sidebar.php'); ?>
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>General Form</h1>
							</div>
							<div class="col-sm-6">
								<ol class="breadcrumb float-sm-right">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active">General Form</li>
								</ol>
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				
				<?php include('create_new_master_part.php'); ?>


			</div>
			<!-- /.content-wrapper -->
			<?php include('parts/footer.php'); ?>
			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				<!-- Control sidebar content goes here
			</aside> -->
			<!-- /.control-sidebar -->
		</div>
		<!-- ./wrapper -->
		
		<!-- Bootstrap 4 -->
		<script src="<?php echo(site_url()); ?>alte320/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- bs-custom-file-input -->
		<script src="<?php echo(site_url()); ?>alte320/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?php echo(site_url()); ?>alte320/dist/js/adminlte.min.js"></script>
		
		<!-- DataTables  & Plugins -->
		
		<script src="<?php echo(site_url()); ?>alte320/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?php echo(site_url()); ?>alte320/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
		<script src="<?php echo(site_url()); ?>alte320/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
		<script src="<?php echo(site_url()); ?>alte320/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
		<script src="<?php echo(site_url()); ?>alte320/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
		<script src="<?php echo(site_url()); ?>alte320/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
		<script src="<?php echo(site_url()); ?>alte320/plugins/jszip/jszip.min.js"></script>
		<script src="<?php echo(site_url()); ?>alte320/plugins/pdfmake/pdfmake.min.js"></script>
		<script src="<?php echo(site_url()); ?>alte320/plugins/pdfmake/vfs_fonts.js"></script>
		<script src="<?php echo(site_url()); ?>alte320/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
		<script src="<?php echo(site_url()); ?>alte320/plugins/datatables-buttons/js/buttons.print.min.js"></script>
		<script src="<?php echo(site_url()); ?>alte320/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


		
		<script>
			$(function () {
			  bsCustomFileInput.init();

			  $("#master_table").DataTable({
				"responsive": true, "lengthChange": false, "autoWidth": false,
				"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
				}).buttons().container().appendTo('#master_table_wrapper .col-md-6:eq(0)');

				
			});
		</script>																								

<script type="text/javascript">
            $(document).ready(function(){
              //alert($().jquery);
			
			  

			  /*$("#edit_master").click(function(){					
					//clear_form();
					show_master(2);
			  });*/

			  $("#create_master").click(function(){					
					clear_form();
					AddRow (0,0, 'sName');
					AddRow (0,0, 'sCode');
					//show_master(2);
			  });

			  /*$(document).on('blur', '#caption', function() {
	
				var fieldValue = $(this).val();
				//alert(fieldValue);		
				$.ajax({
					url: '<?php echo base_url("AjaxController/get_field_value"); ?>',
					method: 'POST',
					data: {
						tableName: 'core_master',
						fielddisplay: 'id',						
						fieldName: 'caption',
						fieldvalue: fieldValue
					},
					success: function(response) {
						// Handle the response
						console.log(response);
						alert(response.id);
					},
					error: function(xhr, status, error) {
						// Handle errors
						console.error(xhr.responseText);
					}
				});

			});*/

            
              $("#btnSubmit").click(function(){
                //var formData = new FormData($("#dynamicMaster")[0]);
                //alert($("#email").val());
                
                //var form = document.getElementById('dynamicMaster'); 
                var formData = new FormData(); 
                formData.append("MasterCaption", $("#caption").val());	
                formData.append("MasterName", $("#masterName").val());	
                
                $.ajax({ 
                    url: 'https://icsweb.in/dynamic/index.php/DynamicForm/new_master_save', 
                    type: 'POST', 
                    processData: false, // tell jQuery not to process the data
                    contentType: false, // tell jQuery not to set contentType
                    data: formData, 
                    success: function (response) { 
                        alert(response.msg); 
                        console.log(response);
                    }, 
                    error: function (jqXHR, textStatus, errorThrown) { 
                        alert('Your form was not sent successfully.'); 
                    } 
                }); 

                //console.log(formData);
              });
            });

			var row_id=0;
			var MASTER_ID = 0;
			var Totalrecord = 0;
       		var Processrecord = 0;

			function ValidateMasterName()
			{
				var fieldValue = $("#masterName").val();
				//alert(fieldValue);		
				$.ajax({
					url: '<?php echo base_url("AjaxController/get_field_value"); ?>',
					method: 'POST',
					dataType: "json",
					data: {
						tableName: 'core_master',
						fielddisplay: 'id',						
						fieldName: 'name',
						fieldvalue: fieldValue
					},
					success: function(response) {
						// Handle the response
						console.log(response);
						alert(response.id);
					},
					error: function(xhr, status, error) {
						// Handle errors
						console.error(xhr.responseText);
					}
				});
			}

			function AddRow (FiledID, RemoveMode=1, DefaultName='')
			{
				//alert($("#caption").val());
				row_id++;

				var deleteButton = `<button onclick="RemoveRow('row_id`+row_id+`')" style="margin-top: 1px;float: left;"  class="btn btn-danger btn-sm removeRow small-textbox"><i   class="fas fa-times"></i></button>`;
				var disabled = "";
				var sysField = 0;

				if(RemoveMode < 1) // means 0
				{
					deleteButton = '';
					disabled = "disabled";
					sysField = 1;
				}
				
				var tableRow = `
						<tr  id="row_id`+row_id+`" style="padding: 0; margin: 0;">						
						<td  style="padding: 0; margin: 0;">
							`+deleteButton+`
							<input id="filed_name`+row_id+`" value="`+DefaultName+`" `+disabled+` type="text" class="form-control form-control-sm small-textbox"  style="padding: 0; margin: 0;width: -webkit-fill-available;" name="data">
						</td>
						<td  style="padding: 0; margin: 0;">
							<select id="filed_type`+row_id+`" class="form-control form-control-sm small-textbox" name="option"  style="padding: 0; margin: 0;">
								<option value="text">Text</option>
								<option value="select">Select</option>
								<option value="date">Date</option>
								<option value="master">Master</option>
							</select>
						</td>
						<td  style="padding: 0; margin: 0;">
							<input id="filed_length`+row_id+`" type="text" class="form-control form-control-sm small-textbox"  style="padding: 0; margin: 0;width: -webkit-fill-available;" name="data">
						</td>
						
						<td  style="padding: 0; margin: 0;">
							<select id="filed_mandetory`+row_id+`" class="form-control form-control-sm small-textbox" name="option"  style="padding: 0; margin: 0;">
							<option value="0">No</option>
							<option value="1">Yes</option>
							</select>
						</td>
						<td  style="padding: 0; margin: 0;">
							<input id="filed_default`+row_id+`" type="text" class="form-control form-control-sm small-textbox"  style="padding: 0; margin: 0;" name="data">
						</td>
						
						<td  style="padding: 0; margin: 0;">
							<select id="filed_master`+row_id+`" onchange="GetColumnNames(this, `+row_id+`)" class="form-control form-control-sm small-textbox" name="option"  style="padding: 0; margin: 0;">
							<?php foreach( $masterData as $row ) { 
								?>
								<option value="<?=$row["id"]?>"><?=$row["caption"]?></option>
								<?php
							}
							?>
							</select>
						</td>
						<td  style="padding: 0; margin: 0;">
							<select id="filed_master_display`+row_id+`" class="form-control form-control-sm small-textbox" name="option"  style="padding: 0; margin: 0;">
							<option value="Yes">Yes</option>
							<option value="No">No</option>
							</select>
						</td>

						<td  style="padding: 0; margin: 0;">
							<input id="filed_sequence`+row_id+`" type="text" class="form-control form-control-sm small-textbox seq-ids" arg1='`+row_id+`' arg2='`+FiledID+`' arg3='`+sysField+`' style="padding: 0; margin: 0;width: -webkit-fill-available;" name="data">
						</td>

						</tr>`;
					
						/*if(FiledID == -1)
					{
						var tableRow = `
						<tr  id="row_id`+row_id+`" style="padding: 0; margin: 0;">						
						<td  style="padding: 0; margin: 0;">							
							<input id="filed_name`+row_id+`" value="sName" type="text" class="form-control form-control-sm small-textbox"  style="padding: 0; margin: 0;width: -webkit-fill-available;" name="data">
						</td>
						<td  style="padding: 0; margin: 0;">
							<select id="filed_type`+row_id+`" class="form-control form-control-sm small-textbox" name="option"  style="padding: 0; margin: 0;">
								<option value="text">Text</option>
								<option value="select">Select</option>
								<option value="date">Date</option>
								<option value="master">Master</option>
							</select>
						</td>
						<td  style="padding: 0; margin: 0;">
							<input id="filed_length`+row_id+`" type="text" class="form-control form-control-sm small-textbox"  style="padding: 0; margin: 0;width: -webkit-fill-available;" name="data">
						</td>
						
						<td  style="padding: 0; margin: 0;">
							<select id="filed_mandetory`+row_id+`" class="form-control form-control-sm small-textbox" name="option"  style="padding: 0; margin: 0;">
							<option value="0">No</option>
							<option value="1">Yes</option>
							</select>
						</td>
						<td  style="padding: 0; margin: 0;">
							<input id="filed_default`+row_id+`" type="text" class="form-control form-control-sm small-textbox"  style="padding: 0; margin: 0;" name="data">
						</td>
						
						<td  style="padding: 0; margin: 0;">
							<select id="filed_master`+row_id+`" onchange="GetColumnNames(this, `+row_id+`)" class="form-control form-control-sm small-textbox" name="option"  style="padding: 0; margin: 0;">
							<?php foreach( $masterData as $row ) { 
								?>
								<option value="<?=$row["id"]?>"><?=$row["caption"]?></option>
								<?php
							}
							?>
							</select>
						</td>
						<td  style="padding: 0; margin: 0;">
							<select id="filed_master_display`+row_id+`" class="form-control form-control-sm small-textbox" name="option"  style="padding: 0; margin: 0;">
							<option value="Yes">Yes</option>
							<option value="No">No</option>
							</select>
						</td>

						<td  style="padding: 0; margin: 0;">
							<input id="filed_sequence`+row_id+`" type="text" class="form-control form-control-sm small-textbox seq-ids" arg1='`+row_id+`' arg2='`+FiledID+`' style="padding: 0; margin: 0;width: -webkit-fill-available;" name="data">
						</td>

						</tr>`;
					}
					if(FiledID == -2)
					{
						var tableRow = `
						<tr  id="row_id`+row_id+`" style="padding: 0; margin: 0;">						
						<td  style="padding: 0; margin: 0;">							
							<input id="filed_name`+row_id+`" value="sCode" type="text" class="form-control form-control-sm small-textbox"  style="padding: 0; margin: 0;width: -webkit-fill-available;" name="data">
						</td>
						<td  style="padding: 0; margin: 0;">
							<select id="filed_type`+row_id+`" class="form-control form-control-sm small-textbox" name="option"  style="padding: 0; margin: 0;">
								<option value="text">Text</option>
								<option value="select">Select</option>
								<option value="date">Date</option>
								<option value="master">Master</option>
							</select>
						</td>
						<td  style="padding: 0; margin: 0;">
							<input id="filed_length`+row_id+`" type="text" class="form-control form-control-sm small-textbox"  style="padding: 0; margin: 0;width: -webkit-fill-available;" name="data">
						</td>
						
						<td  style="padding: 0; margin: 0;">
							<select id="filed_mandetory`+row_id+`" class="form-control form-control-sm small-textbox" name="option"  style="padding: 0; margin: 0;">
							<option value="0">No</option>
							<option value="1">Yes</option>
							</select>
						</td>
						<td  style="padding: 0; margin: 0;">
							<input id="filed_default`+row_id+`" type="text" class="form-control form-control-sm small-textbox"  style="padding: 0; margin: 0;" name="data">
						</td>
						
						<td  style="padding: 0; margin: 0;">
							<select id="filed_master`+row_id+`" onchange="GetColumnNames(this, `+row_id+`)" class="form-control form-control-sm small-textbox" name="option"  style="padding: 0; margin: 0;">
							<?php foreach( $masterData as $row ) { 
								?>
								<option value="<?=$row["id"]?>"><?=$row["caption"]?></option>
								<?php
							}
							?>
							</select>
						</td>
						<td  style="padding: 0; margin: 0;">
							<select id="filed_master_display`+row_id+`" class="form-control form-control-sm small-textbox" name="option"  style="padding: 0; margin: 0;">
							<option value="Yes">Yes</option>
							<option value="No">No</option>
							</select>
						</td>

						<td  style="padding: 0; margin: 0;">
							<input id="filed_sequence`+row_id+`" type="text" class="form-control form-control-sm small-textbox seq-ids" arg1='`+row_id+`' arg2='`+FiledID+`' style="padding: 0; margin: 0;width: -webkit-fill-available;" name="data">
						</td>

						</tr>`;
					}*/

			$("#field_list").append(tableRow);

			}

			function clear_form()
			{
			
				$("#caption").val("");
				$("#masterName").val("");
				$("#field_list").html("");
				row_id=0;
				MASTER_ID =0;
			}

			function DeleteMaster(MasterID)
			{
				//alert(MasterID);
				var formData = new FormData(); 
                formData.append("MasterID", MasterID);	              
                
                $.ajax({ 
                    url: '<?=base_url()?>DynamicForm/delete_master', 
                    type: 'POST', 
                    processData: false, // tell jQuery not to process the data
                    contentType: false, // tell jQuery not to set contentType
                    data: formData, 
                    success: function (response) { 
                        alert(response.msg); 	
						location.reload();					
                    }, 
                    error: function (jqXHR, textStatus, errorThrown) { 
                        alert('Your form was not sent successfully.'); 
                    } 
                }); 
			}


			function show_master(MasterID)
			  {
				//alert("showing master");
				clear_form();
				//$("#create_master").click();
				$('#modal-lg').modal('show');
				MASTER_ID=MasterID;
				$.ajax({
                type: "POST",
                url: '<?=base_url()?>index.php/DynamicForm/get_master_by_master_id', 
                data: {
					master_id:MasterID
                },
                dataType: "json",
                success: function(response) {
					console.log(response);
				
				  var masterData = response.masterData[0];
				  var masterFields = response.masterFiled;

				  console.log("Caption:" + masterData.caption);
				  console.log("MasterName:" + masterData.name);

				  $("#caption").val(masterData.caption);
				  $("#masterName").val(masterData.name);

				  
				  $.each(masterFields, function(key, item) 
                  {		
						if(item.Sysfld == 1)
						{
							AddRow (item.FileldID,0, item.FieldName);
						}
						else
						{
							AddRow (item.FileldID);		
						}
						/*if(key == 0)
						{
							//AddRow (0,0, 'sName');							
							AddRow (0,0, item.FieldName);							
						}
						else if(key == 1)
						{
							//AddRow (0,0, 'sCode');
							AddRow (0,0, item.FieldName);
						}
						else
						{
							AddRow (item.FileldID);		
						}*/
								
						console.log("key:" + key + "item:" + item);
						$("#filed_name" + row_id).val(item.FieldName);
						$("#filed_type" + row_id).val(item.Fieldtype);
						$("#filed_length" + row_id).val(item.MaxLength);
						$("#filed_mandetory" + row_id).val(item.Mandatory);

						if(item.Fieldtype == "master")
						{
							//$("#filed_master" + row_id).val(item.value).trigger('change'); // otherwise create function for adding items to filed_master_display

							$("#filed_master" + row_id).val(item.value);

							$.ajax({
								type: "POST",
								url: '<?=base_url()?>DynamicForm/get_columns_by_master_id', 
								data: {
									master_id: item.value
								},
								dataType: "json",
								success: function(response) {
								// Handle the response from the server
								console.log(response);
								var options ="";
								$("#filed_master_display" + row_id).html("");

								$.each(response, function(key, item) 
								{							
										options = options + "<option value=" + item.FieldName + ">" + item.Caption + "</option>";
								});

								$("#filed_master_display" + row_id).html(options);

								$("#filed_master_display" + row_id).val(item.master_values);

								},
								error: function() {
								// Display error message
								alert("An error occurred while updating Database.");
								}
							});


							
						}
						else
						{
							$("#filed_default" + row_id).val(item.value);
							$("#filed_master" + row_id).val(item.MasterId);
						}

						//$("#filed_default" + row_id).val(item.value);
						//$("#filed_master" + row_id).val(item.MasterId);
						//$("#filed_master" + row_id).val(item.value).trigger('change');
						//$("#filed_master_display" + row_id).val(item.xxx);


						$("#filed_sequence" + row_id).val(item.seqence);
                  });

				  /*
				  // Handle the response from the server
				  console.log(response);
				  var options ="";
				  $("#filed_master_display" + RowID).html("");

				  $.each(response, function(key, item) 
                  {							
						options = options + "<option value=" + item.FieldName + ">" + item.Caption + "</option>";
                  });

				  $("#filed_master_display" + RowID).html(options);
				  */

                },
                error: function() {
                  // Display error message
                  alert("An error occurred while updating Database.");
                }
              });

			  }


			function GetColumnNames(MasterID, RowID)
			{
				//alert($(MasterID).val());
				//return;

				$.ajax({
                type: "POST",
                url: '<?=base_url()?>index.php/DynamicForm/get_columns_by_master_id', 
                data: {
					master_id:$(MasterID).val()
                },
                dataType: "json",
                success: function(response) {
                  // Handle the response from the server
				  console.log(response);
				  var options ="";
				  $("#filed_master_display" + RowID).html("");

				  $.each(response, function(key, item) 
                  {							
						options = options + "<option value=" + item.FieldName + ">" + item.Caption + "</option>";
                  });

				  $("#filed_master_display" + RowID).html(options);

                },
                error: function() {
                  // Display error message
                  alert("An error occurred while updating Database.");
                }
              });
			}

			function RemoveRow(RowID)
			{
				$("#"+RowID).remove();
			}

			function SaveMasterFileds ()
			{
				var formData = new FormData(); 
                formData.append("MasterID", MASTER_ID);	
                formData.append("MasterCaption", $("#caption").val());	
                formData.append("MasterName", $("#masterName").val());	
                
                $.ajax({ 
                    url: '<?=base_url()?>DynamicForm/master_submit', 
                    type: 'POST', 
                    processData: false, // tell jQuery not to process the data
                    contentType: false, // tell jQuery not to set contentType
                    data: formData, 
                    success: function (response) { 
                        //alert(response.msg); 
						var MasterID = response.MasterID;
                        //seq-ids
						$('.seq-ids').each(function () {
							//alert($(this).val());
							//alert($(this).attr("arg1"));
							//alert($("#filed_name"+$(this).attr("arg1")).val());
							//SavePendPo($(this).attr("arg1"), $(this).attr("arg2"), $(this).attr("arg3"), $(this).attr("arg4"), $(this).attr("arg5"), $(this).val());
							SaveField (MasterID, $(this).attr("arg3"), $(this).attr("arg2"),  $("#filed_name"+$(this).attr("arg1")).val(), $("#filed_type"+$(this).attr("arg1")).val(), $("#filed_length"+$(this).attr("arg1")).val(), $("#filed_mandetory"+$(this).attr("arg1")).val(), $("#filed_default"+$(this).attr("arg1")).val(), $("#filed_master"+$(this).attr("arg1")).val(), $("#filed_master_display"+$(this).attr("arg1")).val(), $("#filed_sequence"+$(this).attr("arg1")).val());
							Totalrecord++;
						});	
                    }, 
                    error: function (jqXHR, textStatus, errorThrown) { 
                        alert('Your form was not sent successfully.'); 
                    } 
                }); 

							
			}

			function SaveField (MasterID, SysField, FiledId,FiledName, FieldType, Length, Mendotary, DefaultValue, SelectMaster, DisplayFiled, Sequence)
			{
				console.log(FiledName, SysField, FieldType, Length, Mendotary, DefaultValue, SelectMaster, DisplayFiled, Sequence);

				var formData = new FormData(); 
                formData.append("MasterId", MasterID);	
                formData.append("fieldID", FiledId);	
                formData.append("filedName", FiledName);	
                formData.append("caption", FiledName);	
                formData.append("filedType", FieldType);	
                formData.append("length", Length);	
                formData.append("value", DefaultValue);	
                formData.append("sequence", Sequence);	

                formData.append("Sysfld", SysField);	

                formData.append("master_names", SelectMaster);	
                formData.append("display_field", DisplayFiled);	
                
                $.ajax({ 
                    url: '<?=base_url()?>index.php/DynamicForm/save_new_field', 
                    type: 'POST', 
                    processData: false, // tell jQuery not to process the data
                    contentType: false, // tell jQuery not to set contentType
                    data: formData, 
                    success: function (response) { 
                        //alert('Your form has been sent successfully.'); 
                        console.log(response);
						Processrecord++;
						if (Totalrecord == Processrecord)
						{
							alert("Completed");
							location.reload();
						}
                    }, 
                    error: function (jqXHR, textStatus, errorThrown) { 
                        alert('Your form was not sent successfully.'); 
                    } 
                }); 


				//alert(Sequence);
				/*Processrecord++;
				if (Totalrecord == Processrecord)
				{
					Finish
				}*/
			}



        </script>

	</body>
</html>