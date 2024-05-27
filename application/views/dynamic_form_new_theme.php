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
		<link rel="stylesheet" href="<?=base_url()?>alte320/plugins/fontawesome-free/css/all.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?=base_url()?>alte320/dist/css/adminlte.min.css">
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
										<a href="<?=base_url()?>index.php/DynamicForm/new_master_view" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>New Master</p>
										</a>
									</li>

									<?php
										$masterData = $CI->generic_repository->query("SELECT * FROM core_master");
										foreach( $masterData as $row ) { ?>											
									
										<li class="nav-item">
											<a href="<?=base_url()?>index.php/DynamicForm/admin_lite/<?=$row['id']?>" class="nav-link">
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
				<!-- Main content -->

				<?php						
					$masterName = $CI->generic_repository->query("SELECT * FROM core_master where id=".$masterID)[0]["caption"];			
				?>


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
											<button id="btnCustomize" type="submit" class="btn btn-primary">Customize</button>
										</div>
									
								</div>
								<!-- /.card -->
								<!-- /.card -->
							</div>
							<!--/.col (right) -->
						</div>
						<!-- /.row -->

						
						<div class="row">
							<!-- left column -->
							<div class="col-md-12">
								<!-- general form elements -->
								<div class="card card-primary">
									<div class="card-header">
										<h3 class="card-title"><?=$masterName;?></h3>
									</div>
									<!-- /.card-header -->
									<!-- form start -->
									
										<div class="card-body">
                                        <form id="dynamicMaster2">  
											<div class="container">
											<div class="row">
												
											<table id="filedTable" class="table">
												<thead>
													<tr>														
														<?php foreach ($fields as $field): ?>
															<th><?=$field['FieldName'];?></th>                                                              
                                                		<?php endforeach; ?>
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
		<script src="<?=base_url()?>alte320/plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="<?=base_url()?>alte320/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- bs-custom-file-input -->
		<script src="<?=base_url()?>alte320/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?=base_url()?>alte320/dist/js/adminlte.min.js"></script>
		<!-- Page specific script -->
		<script>
			$(function () {
			  bsCustomFileInput.init();
			});
		</script>																								

<script type="text/javascript">
            $(document).ready(function(){
              //alert($().jquery);
              console.log('<?=base_url()?>');
              $("#btnCustomize").click(function(){
					window.open('<?=base_url()?>index.php/DynamicForm/customize_master/<?=$masterID?>');
			  });


              $("#btnSubmit").click(function(){
                //var formData = new FormData($("#dynamicMaster")[0]);
                //alert($("#email").val());
                
                var form = document.getElementById('dynamicMaster'); 
                var formData = new FormData(form); 
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
                    }, 
                    error: function (jqXHR, textStatus, errorThrown) { 
                        alert('Your form was not sent successfully.'); 
                    } 
                }); 
                
                //console.log(formData);
              });
              
              
            });
        </script>

	</body>
</html>