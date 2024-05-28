<?php
            $CI =& get_instance();
            $CI->load->library('generic_repository');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>AdminLTE 3 | General Form Elements</title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://icsweb.in/dynamic/theme_files/plugins/fontawesome-free/css/all.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="https://icsweb.in/dynamic/theme_files/dist/css/adminlte.min.css">

		<!-- DataTables -->
		<!--
		<link rel="stylesheet" href="https://icsweb.in/dynamic/theme_files/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="https://icsweb.in/dynamic/theme_files/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
		<link rel="stylesheet" href="https://icsweb.in/dynamic/theme_files/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
		-->

	</head>
	<body class="hold-transition sidebar-mini">
		<div class="wrapper">
			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand navbar-white navbar-light">
				<!-- Left navbar links -->
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
					</li>
					<li class="nav-item d-none d-sm-inline-block">
						<a href="../../index3.html" class="nav-link">Home</a>
					</li>
					<li class="nav-item d-none d-sm-inline-block">
						<a href="#" class="nav-link">Contact</a>
					</li>
				</ul>
				<!-- Right navbar links -->
				<ul class="navbar-nav ml-auto">
					<!-- Navbar Search -->
					<li class="nav-item">
						<a class="nav-link" data-widget="navbar-search" href="#" role="button">
						<i class="fas fa-search"></i>
						</a>
						<div class="navbar-search-block">
							<form class="form-inline">
								<div class="input-group input-group-sm">
									<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
									<div class="input-group-append">
										<button class="btn btn-navbar" type="submit">
										<i class="fas fa-search"></i>
										</button>
										<button class="btn btn-navbar" type="button" data-widget="navbar-search">
										<i class="fas fa-times"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</li>
					<!-- Messages Dropdown Menu -->
					<li class="nav-item dropdown">
						<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-comments"></i>
						<span class="badge badge-danger navbar-badge">3</span>
						</a>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
							<a href="#" class="dropdown-item">
								<!-- Message Start -->
								<div class="media">
									<img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
									<div class="media-body">
										<h3 class="dropdown-item-title">
											Brad Diesel
											<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
										</h3>
										<p class="text-sm">Call me whenever you can...</p>
										<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
									</div>
								</div>
								<!-- Message End -->
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
								<!-- Message Start -->
								<div class="media">
									<img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
									<div class="media-body">
										<h3 class="dropdown-item-title">
											John Pierce
											<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
										</h3>
										<p class="text-sm">I got your message bro</p>
										<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
									</div>
								</div>
								<!-- Message End -->
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
								<!-- Message Start -->
								<div class="media">
									<img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
									<div class="media-body">
										<h3 class="dropdown-item-title">
											Nora Silvester
											<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
										</h3>
										<p class="text-sm">The subject goes here</p>
										<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
									</div>
								</div>
								<!-- Message End -->
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
						</div>
					</li>
					<!-- Notifications Dropdown Menu -->
					<li class="nav-item dropdown">
						<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-bell"></i>
						<span class="badge badge-warning navbar-badge">15</span>
						</a>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
							<span class="dropdown-item dropdown-header">15 Notifications</span>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
							<i class="fas fa-envelope mr-2"></i> 4 new messages
							<span class="float-right text-muted text-sm">3 mins</span>
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
							<i class="fas fa-users mr-2"></i> 8 friend requests
							<span class="float-right text-muted text-sm">12 hours</span>
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
							<i class="fas fa-file mr-2"></i> 3 new reports
							<span class="float-right text-muted text-sm">2 days</span>
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-widget="fullscreen" href="#" role="button">
						<i class="fas fa-expand-arrows-alt"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
						<i class="fas fa-th-large"></i>
						</a>
					</li>
				</ul>
			</nav>
			<!-- /.navbar -->
			<!-- Main Sidebar Container -->
			<aside class="main-sidebar sidebar-dark-primary elevation-4">
				<!-- Brand Logo -->
				<a href="../../index3.html" class="brand-link">
				<img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">AdminLTE 3</span>
				</a>
				<!-- Sidebar -->
				<div class="sidebar">
					<!-- Sidebar user (optional) -->
					<div class="user-panel mt-3 pb-3 mb-3 d-flex">
						<div class="image">
							<img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
						</div>
						<div class="info">
							<a href="#" class="d-block">Alexander Pierce</a>
						</div>
					</div>
					<!-- SidebarSearch Form -->
					<div class="form-inline">
						<div class="input-group" data-widget="sidebar-search">
							<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
							<div class="input-group-append">
								<button class="btn btn-sidebar">
								<i class="fas fa-search fa-fw"></i>
								</button>
							</div>
						</div>
					</div>
					<!-- Sidebar Menu -->
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
							<!-- Add icons to the links using the .nav-icon class
								with font-awesome or any other icon font library -->
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>
										Master
										<i class="right fas fa-angle-left"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="https://icsweb.in/dynamic/app/index.php/DynamicForm/new_master_view" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>New Master</p>
										</a>
									</li>
									<?php
										$masterData = $CI->generic_repository->query("SELECT * FROM core_master");
										foreach( $masterData as $row ) { ?>											
									
										<li class="nav-item">
											<a href="https://icsweb.in/dynamic/app/index.php/DynamicForm/admin_lite/<?=$row['id']?>" class="nav-link">
												<i class="far fa-circle nav-icon"></i>
												<p><?=$row['caption']?></p>
											</a>
										</li>
									<?php
										}
									?>
									
								</ul>
							</li>
						</ul>
					</nav>
					<!-- /.sidebar-menu -->
				</div>
				<!-- /.sidebar -->
			</aside>
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



				<div class="modal fade" id="modal-lg">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Customize Master</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form>                           
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categoryName">Filed Name</label>
                                        <input type="text" class="form-control" id="filedName" name="filedName" required>
                                    </div>
                                </div>

								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categoryName">Caption</label>
                                        <input type="text" class="form-control" id="caption" name="caption" required>
                                    </div>
                                </div>
                                
                            </div>
							
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categoryName">Filed Type</label>
                                        <select class="form-control" name="filedType" id="filedType">
											<option value="text">Text</option>
											<option value="select">Select</option>
											<option value="date">Date</option>
											<option value="master">Master</option>
									</select>
                                    </div>
                                </div>

								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categoryName">Length</label>
                                        <input type="text" class="form-control number-only" id="length" name="length" required>
                                    </div>
                                </div>                                
                            </div>

							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categoryName">Default Value</label>
                                        <input type="text" class="form-control" id="value" name="value" required>
                                    </div>
                                </div>

								<div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categoryName">Sequence</label>
                                        <input type="text" class="form-control number-only" id="sequence" name="sequence" required>
                                    </div>
                                </div>
                                
                            </div>

							<div id="master_fileds_view" class="row">
								<div class="col-md-6">
									<div class="form-group">
                                        <label for="categoryName">Select Master</label>
                                        <select id="master_names" class="form-control">
											<!-- <option value="iMasterId">MasterID</option> -->
											<?php foreach( $masterData as $row ) { 
												?>
												<option value="<?=$row["id"]?>"><?=$row["caption"]?></option>
												<?php
											}
											?>
										</select>
                                    </div>
								</div>



								<div class="col-md-6">
									<div class="form-group">
										<label>Select Display Column</label>
										<select id="display_field"  class="form-control">
										<option value="iMasterId">option 1</option>
										<option value="itemname">option 2</option>
										<option value="3">option 3</option>
										<option value="4">option 4</option>
										<option value="5">option 5</option>
										</select>
									</div>
								</div>
                            </div>
							
                            
                            
                            <button type="button" class="btn btn-primary float-right" data-dismiss="modal" aria-label="Close" style="margin-left: 2%;">
                                Close
                            </button>
                            <button type="button" class="btn btn-primary float-right" onclick="saveField()"><i class="fas fa-save"></i> Submit</button>
                            <input type="text" hidden class="form-control" id="id" name="id" required>
                        </form>
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





				<?php
					$masterName = $CI->generic_repository->query("SELECT * FROM core_master where id=".$masterID)[0]["caption"];					
				?>

				<!-- Main content -->
				<section class="content">
					<div class="container-fluid">
						<div class="row">
							<!-- left column -->
							<div class="col-md-12">
								<!-- general form elements -->
								<div class="card card-primary">
									<div class="card-header">
										<h3 class="card-title"><?=$masterName?></h3>
									</div>
									<!-- /.card-header -->
									<!-- form start -->
									
										<div class="card-body">
                                        <form id="dynamicMaster">  
											<div class="container">
											<div class="form-group">
												<button id="btnAdd" type="button" class="btn btn-primary btnAdd" data-toggle="modal" data-target="#modal-lg">Add New</button>
											</div>
											<div class="row">												
												<table id="filedTable" class="table">
												<thead>
													<tr>
														<th>Action</th>
														<th>Field Name</th>
														<th>Caption</th>
														<th>Type</th>
														<th>Default Value</th>
													</tr>
												</thead>
												<tbody>
													<!--<tr>
														<td>1</td>
													</tr>-->
													<?php
														$i = 0;
													?>
													<?php foreach ($fields as $field): ?>
														<tr>
															<td><i class="fas fa-edit" onclick="ShowFiledData(<?=$field['FileldID']?>)"></i> <i class="fas fa-trash" onclick="DeleteField(<?=$field['FileldID']?>)"></i></td>
															<td><?=$field['FieldName']?></td>
															<td><?=$field['Caption']?></td>
															<td><?=$field['Fieldtype']?></td>
															<td><?=$field['value']?></td>
														</tr>
													<?php endforeach; ?>
												</tbody>
												</table>

												
											</div>
											</div>

                                        </form>

										</div>
										<!-- /.card-body -->
										<div class="card-footer">
											<button id="btnSubmit" type="submit" class="btn btn-primary">Save Changes</button>											
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
			<footer class="main-footer">
				<div class="float-right d-none d-sm-block">
					<b>Version</b> 3.2.0
				</div>
				<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
			</footer>
			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				<!-- Control sidebar content goes here -->
			</aside>
			<!-- /.control-sidebar -->
		</div>
		<!-- ./wrapper -->
		<!-- jQuery -->
		<script src="https://icsweb.in/dynamic/theme_files/plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="https://icsweb.in/dynamic/theme_files/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- bs-custom-file-input -->
		<script src="https://icsweb.in/dynamic/theme_files/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
		<!-- AdminLTE App -->
		<script src="https://icsweb.in/dynamic/theme_files/dist/js/adminlte.min.js"></script>
		<!-- Page specific script -->

		<!-- DataTables  & Plugins -->
		<!--
		<script src="https://icsweb.in/dynamic/theme_files/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="https://icsweb.in/dynamic/theme_files/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
		<script src="https://icsweb.in/dynamic/theme_files/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
		<script src="https://icsweb.in/dynamic/theme_files/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
		<script src="https://icsweb.in/dynamic/theme_files/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
		<script src="https://icsweb.in/dynamic/theme_files/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
		<script src="https://icsweb.in/dynamic/theme_files/plugins/jszip/jszip.min.js"></script>
		<script src="https://icsweb.in/dynamic/theme_files/plugins/pdfmake/pdfmake.min.js"></script>
		<script src="https://icsweb.in/dynamic/theme_files/plugins/pdfmake/vfs_fonts.js"></script>
		<script src="https://icsweb.in/dynamic/theme_files/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
		<script src="https://icsweb.in/dynamic/theme_files/plugins/datatables-buttons/js/buttons.print.min.js"></script>
		<script src="https://icsweb.in/dynamic/theme_files/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
		-->


		<script>
			$(function () {
			  bsCustomFileInput.init();
			 
			});
		</script>																								

<script type="text/javascript">
			var fieldID = "";
            $(function () {				
            //$(document).ready(function(){
              //alert($().jquery);

			  //$("#filedTable").DataTable();

			  


			  $('.number-only').keypress(function (e) {    
				var charCode = (e.which) ? e.which : event.keyCode    
				if (String.fromCharCode(charCode).match(/[^0-9]/g))    
					return false;                        
			  }); 
              
              $("#btnCustomize").click(function(){
					window.open('https://icsweb.in/dynamic/app/index.php/DynamicForm/admin_lite/<?=$masterID?>');
			  });

			  
			  $("#master_names").change(function(){
				GetColumnNames($("#master_names").val());
			  });

              $("#btnSubmit").click(function(){
                //var formData = new FormData($("#dynamicMaster")[0]);
                //alert($("#email").val());
                
                var form = document.getElementById('dynamicMaster'); 
                var formData = new FormData(form); 
                formData.append("MasterId", <?=$masterID?>);	
                
                $.ajax({ 
                    url: 'https://icsweb.in/dynamic/app/index.php/DynamicForm/submit', 
                    type: 'POST', 
                    processData: false, // tell jQuery not to process the data
                    contentType: false, // tell jQuery not to set contentType
                    data: formData, 
                    success: function (response) { 
                        alert('Your form has been sent successfully.'); 
                        console.log(response);
                    }, 
                    error: function (jqXHR, textStatus, errorThrown) { 
                        alert('Your form was not sent successfully.'); 
                    } 
                }); 
                
                //console.log(formData);
              });

			  $("#btnAdd").click(function(){
					//$("#id").val("");
					$("#filedName").val("");
					$("#caption").val("");
					$("#length").val("");
					$("#value").val("");
					$("#sequence").val("");
					$("#master_fileds_view").hide();
					//$("#filedType").trigger('change');
				

					fieldID = "0";
				});

				$("#filedType").change(function(){
					if($("#filedType").val() == "master")
					{
						$("#master_fileds_view").show();
					}
					else {
						$("#master_fileds_view").hide();
					}
					

				});
				
              
              
            });

			function saveField ()
			{
				var formData = new FormData(); 
                formData.append("MasterId", <?=$masterID?>);	
                formData.append("fieldID", fieldID);	
                formData.append("filedName", $("#filedName").val());	
                formData.append("caption", $("#caption").val());	
                formData.append("filedType", $("#filedType").val());	
                formData.append("length", $("#length").val());	
                formData.append("value", $("#value").val());	
                formData.append("sequence", $("#sequence").val());	

                formData.append("master_names", $("#master_names").val());	
                formData.append("display_field", $("#display_field").val());	
                
                $.ajax({ 
                    url: 'https://icsweb.in/dynamic/app/index.php/DynamicForm/save_new_field', 
                    type: 'POST', 
                    processData: false, // tell jQuery not to process the data
                    contentType: false, // tell jQuery not to set contentType
                    data: formData, 
                    success: function (response) { 
                        alert('Your form has been sent successfully.'); 
                        console.log(response);
                    }, 
                    error: function (jqXHR, textStatus, errorThrown) { 
                        alert('Your form was not sent successfully.'); 
                    } 
                }); 
                
                //console.log(formData);
              
			}

			function DeleteField (FiledID)
			{				
				if (confirm("Press a button!") == true) {
					$.ajax({
						type: "POST",
						url: 'https://icsweb.in/dynamic/app/index.php/DynamicForm/delete_field_by_id', 
						data: {
						field_id:FiledID
						},
						dataType: "json",
						success: function(response) {
							
						},
						error: function() {
						// Display error message
						alert("An error occurred while updating Database.");
						}
					});
				}
			}

			function GetColumnNames(MasterID)
			{
				$.ajax({
                type: "POST",
                url: 'https://icsweb.in/dynamic/app/index.php/DynamicForm/get_columns_by_master_id', 
                data: {
					master_id:MasterID
                },
                dataType: "json",
                success: function(response) {
                  // Handle the response from the server
				  console.log(response);
				  var options ="";
				  $("#display_field").html("");

				  $.each(response, function(key, item) 
                  {							
						options = options + "<option value=" + item.FieldName + ">" + item.Caption + "</option>";
                  });

				  $("#display_field").html(options);

                },
                error: function() {
                  // Display error message
                  alert("An error occurred while updating Database.");
                }
              });
			}

			function ShowFiledData(FiledID)
			{
				$(".btnAdd").trigger('click');
				// Send the AJAX request
				$.ajax({
                type: "POST",
                url: 'https://icsweb.in/dynamic/app/index.php/DynamicForm/get_field_by_id', 
                data: {
                  field_id:FiledID
                },
                dataType: "json",
                success: function(response) {
                  // Handle the response from the server
				  var field_data = response[0];

				  $("#filedName").val(field_data.FieldName);
                  $("#caption").val(field_data.Caption);
                  $("#filedType").val(field_data.Fieldtype);
                  $("#length").val(field_data.MaxLength);
                  $("#value").val(field_data.value);
                  $("#sequence").val(field_data.seqence);
                  
				  //$("#master_names").val(field_data.value);
				  if(field_data.Fieldtype == "master")
				  {
					$("#master_names").val(field_data.value).trigger('change');
					$("#display_field").val(field_data.master_values);
					$("#master_fileds_view").show();
				  }
				  

				  fieldID = field_data.FileldID;


                },
                error: function() {
                  // Display error message
                  alert("An error occurred while updating Database.");
                }
              });
			}


        </script>

	</body>
</html>