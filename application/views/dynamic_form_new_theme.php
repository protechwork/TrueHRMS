<?php
            $CI =& get_instance();
            $CI->load->library('generic_repository');	
			$masterName = $CI->generic_repository->query("SELECT * FROM core_master where id=".$masterID)[0]["caption"];	
?>
<!DOCTYPE html>
<html lang="en">
	<?php include('parts/head.php'); ?>
	<body class="hold-transition sidebar-mini">
		<div class="wrapper">
			<!-- Navbar -->
			<?php include('parts\topnavbar.php')?>
			<!-- /.navbar -->
			<!-- Main Sidebar Container -->
			<?php include('parts\sidebar.php');?>
			<!-- Content Wrapper. Contains page content -->
			<div class="modal fade" id="modal-lg">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title"><?=$masterName; ?> </h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    
                           
							<!--<form id="dynamicMaster">  -->
											<div class="container">
											<div class="row">
											<div class="col-md-12">
								<!-- general form elements -->
								<div class="card card-primary">
									
									<!-- /.card-header -->
									<!-- form start -->
									
										<div class="card-body">
                                        <form id="dynamicMaster">  
											<div class="container">
											<div class="row">
                                            <?php foreach ($fields as $field): ?>
												<div class="col-md-6">
                                                   
                                                        <div class="form-group">
                                                            <label for="<?=ucfirst($field['Caption'])?>"><?=ucfirst($field['Caption'])?></label>
                                                            <?php if ($field['Fieldtype'] === 'text') { ?>
                                                                <input type="text" class="form-control" name="<?=$field['FieldName']?>" id="<?=$field['FieldName']?>" value="<?=$field['value']?>">
                                                            <?php } else if ($field['Fieldtype'] === 'select' && !empty($field['value'])) { ?>
                                                                <?php $options = explode(',', $field['value']); ?>
                                                                <?php
                                                                    //var_dump($options, count($options));die();
                                                                ?>
                                                                <select class="form-control" name="<?php echo $field['FieldName']; ?>" id="<?php echo $field['FieldName']; ?>">
                                                                    
                                                                    <?php for($i = 0; $i < count($options); $i=$i+2) { ?>
                                                                        <option value="<?php echo $options[$i]; ?>"><?php echo $options[$i+1]; ?></option>
                                                                <?php } ?>
                                                                </select>
                                                            
                                                            <?php }
                                                            elseif ($field['Fieldtype'] === 'master' && !empty($field['value']))
                                                            {                    
                                                                //$CI->generic_repository->yourFunction();
                                                                //$echo = $CI->db->query("select * from FileldMst")->result_array(); 

                                                                $tableName = $CI->generic_repository->query("select * from core_master where id=".$field['value'])[0]["name"];                     
                                                                
																$data = $CI->generic_repository->query("select iMasterId,".$field['master_values']." from ".$tableName );                     
                                                                //var_dump($echo);die();
                                                                ?>
                                                                <select class="form-control" name="<?php echo $field['FieldName']; ?>" id="<?php echo $field['FieldName']; ?>">
                                                                    <?php
                                                                    foreach( $data as $row ) { ?>
                                                                            <option value="<?=$row['iMasterId']?>"><?=$row[$field['master_values']]?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                                <?php
                                                            }
                                                            elseif  ($field['Fieldtype'] === 'date') { ?>                    
                                                                <input type="date" class="form-control" name="<?=$field['FieldName']?>" id="<?=$field['FieldName']?>" value="<?=$field['value']?>">                   
                                                            <?php } ?>

                                                        </div>                                                        
                                                    

												</div>
                                                <?php endforeach; ?>
											</div>
											</div>
                                        </form>

										</div>
										<!-- /.card-body -->
										<div class="card-footer">
											<button id="btnSubmit" type="submit" class="btn btn-primary">Submit</button>
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
											<!--<button id="btnCustomize" type="submit" class="btn btn-primary">Customize</button>-->
										</div>
									
								</div>
								<!-- /.card -->
								<!-- /.card -->
							</div>
											</div>
											</div>
											
											<div class="row">
											
											
											</div>
											
                            <input type="text" hidden class="form-control" id="id" name="id" required>
                                        <!--</form>-->
                            
                            
                        
                    </div>
                    <!--<div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>-->
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
<!-- Main content -->

			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Master</h1>
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
				<!-- Main content -->

				


				<section class="content">
					<div class="container-fluid">						
						
						<div class="row">
							<!-- left column -->
							<div class="col-md-12">
								<!-- general form elements -->
								<div class="card card-primary">
									<div class="card-header">
										<h3 class="card-title"><?=$masterName;?></h3>
										<button id="modal_view" type = "button"  class="btn btn-primary add-btn"   data-toggle="modal" data-target="#modal-lg" style="float: right;margin: 0;padding: 0;background-color: white;color: black;width: 10%;">Create</button>
									</div>
									<!-- /.card-header -->
									<!-- form start -->
									
										<div class="card-body">
                                        <form id="dynamicMaster2">  
											<div class="container">
											
												
											<table id="filedTable" class="table table-bordered table-striped">
												<thead>
													<tr>														
														<?php foreach ($fields as $field): ?>
															<th><?=$field['FieldName'];?></th>                                                              
                                                		<?php endforeach; ?>
														<th>Action</th>   
													</tr>
												</thead>
												<tbody>													
													<?php
														
														$tableName = $CI->generic_repository->query("SELECT * FROM core_master WHERE id=".$masterID)[0]["name"];														
														$tableData = $CI->generic_repository->query("SELECT * FROM ".$tableName);
														
													?>
													<?php foreach ($tableData as $row): ?>
														<tr>															
															<?php foreach ($fields as $field): ?>
																<?php
																	if($field['Fieldtype'] == "master")
																	{
																		$tableNameForMaster = $CI->generic_repository->query("select * from core_master where id=".$field['value'])[0]["name"];                                                                                     
																		$dataForMaster = $CI->generic_repository->query("select iMasterId,".$field['master_values']." from ".$tableNameForMaster." WHERE iMasterId=".$row[$field['FieldName']]);                     
																		?>
																			<td><?=$dataForMaster[0][$field['master_values']];?></td>
																		<?php

																	} else { ?>
																		<td><?=$row[$field['FieldName']];?></td>
																	<?php
																	}
																?>                                                         
                                                			<?php endforeach; ?>
															<td><i class="fas fa-edit" onclick="EditMaster('<?=$row['iMasterId'];?>')"></i>&nbsp;<i class="fas fa-trash"></i></td>
														</tr>
													<?php endforeach; ?>
												</tbody>
												</table>
											
											</div>
                                        </form>

										</div>
										<!-- /.card-body -->
										<div class="card-footer">
											
										</div>
									
								</div>
								<!-- /.card -->
								<!-- /.card -->
							</div>
							<!--/.col (right) -->
						</div>
						<!-- /.row -->


					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			<?php include('parts/footer.php'); ?>
			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				<!-- Control sidebar content goes here -->
			</aside>
			<!-- /.control-sidebar -->
		</div>
		<!-- ./wrapper -->
		<!-- jQuery -->
		<script src="<?=base_url()?>alte320/plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="<?=base_url()?>alte320/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- bs-custom-file-input -->
		<script src="<?=base_url()?>alte320/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?=base_url()?>alte320/dist/js/adminlte.min.js"></script>


		<!-- DataTables  & Plugins -->
		
		<script src="<?=base_url()?>alte320/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?=base_url()?>alte320/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
		<script src="<?=base_url()?>alte320/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
		<script src="<?=base_url()?>alte320/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
		<script src="<?=base_url()?>alte320/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
		<script src="<?=base_url()?>alte320/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
		<script src="<?=base_url()?>alte320/plugins/jszip/jszip.min.js"></script>
		<script src="<?=base_url()?>alte320/plugins/pdfmake/pdfmake.min.js"></script>
		<script src="<?=base_url()?>alte320/plugins/pdfmake/vfs_fonts.js"></script>
		<script src="<?=base_url()?>alte320/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
		<script src="<?=base_url()?>alte320/plugins/datatables-buttons/js/buttons.print.min.js"></script>
		<script src="<?=base_url()?>alte320/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

		
		
		<!-- Page specific script -->
		<script>
			$(function () {
			  bsCustomFileInput.init();

			  

			  $("#filedTable").DataTable({
				"responsive": true, "lengthChange": false, "autoWidth": false,
				"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
				}).buttons().container().appendTo('#filedTable_wrapper .col-md-6:eq(0)');


			});
		</script>																								

<script type="text/javascript">
			var iMasterId = 0;
            $(document).ready(function(){
              //alert($().jquery);
			  
              console.log('<?=base_url()?>');
              $("#btnCustomize").click(function(){
					window.open('<?=base_url()?>index.php/DynamicForm/customize_master/<?=$masterID?>');
			  });

			  $("#modal_view").click(function(){
				iMasterId = 0;	
				<?php
					foreach ($fields as $field)
					{
						if($field["Fieldtype"] == "text")
						{
							echo "$('#".$field['FieldName']."').val('".$field['value']."');";
						}
						elseif($field["Fieldtype"] == "select")
						{
							//echo "$('#".$field['FieldName']."').val('".$field['value']."');";
						}
						elseif($field["Fieldtype"] == "master")
						{
							//echo "$('#".$field['FieldName']."').val('".$field['value']."');";
						}
						elseif($field["Fieldtype"] == "date")
						{
							echo "$('#".$field['FieldName']."').val('".$field['value']."');";
						}

						//echo "$('#".$field['FieldName']."').val('".$field['value']."');";
						echo "console.log('".$field['FieldName']."');";
					}
				?>
				
			  });
			  


              $("#btnSubmit").click(function(){
                //var formData = new FormData($("#dynamicMaster")[0]);
                //alert($("#email").val());
                
                var form = document.getElementById('dynamicMaster'); 
                var formData = new FormData(form); 

                formData.append("iMasterId", iMasterId);	
                formData.append("MasterId", <?=$masterID?>);	
                
                $.ajax({ 
                    url: '<?=base_url()?>index.php/DynamicForm/submit', 
                    type: 'POST', 
                    processData: false, // tell jQuery not to process the data
                    contentType: false, // tell jQuery not to set contentType
                    data: formData, 
                    success: function (response) { 
                        alert('Your form has been sent successfully.'); 
                        console.log(response);
						location.reload();
                    }, 
                    error: function (jqXHR, textStatus, errorThrown) { 
                        alert('Your form was not sent successfully.'); 
                    } 
                }); 
                
                //console.log(formData);
              });
              
              
            });

			function EditMaster(IMasterId)
			  {				
				iMasterId = IMasterId;
				//$("#modal_view").trigger('click'); 
				$('#modal-lg').modal('show');

				var formData = new FormData(); 

                formData.append("iMasterId", iMasterId);	
                formData.append("MasterId", <?=$masterID?>);	

				$.ajax({ 
                    url: '<?=base_url()?>DynamicForm/get_data_by_imaster_id', 
                    type: 'POST', 
                    processData: false, // tell jQuery not to process the data
                    contentType: false, // tell jQuery not to set contentType
                    data: formData, 
                    success: function (response) { 
                        //alert('Your form has been sent successfully.'); 
                        console.log(response);

						$.each(response[0], function(key, val) {
							if(key != "iMasterId")
							{			
								console.log (key+ " *** " + val);	
								$("#"+key).val(val);			
							}							
						});

                    }, 
                    error: function (jqXHR, textStatus, errorThrown) { 
                        alert('Your form was not sent successfully.'); 
                    } 
                }); 





			  }
        </script>

	</body>
</html>