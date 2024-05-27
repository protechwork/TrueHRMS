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
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>AdminLTE 3 | General Form Elements</title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?php echo(site_url()); ?>theme_files/plugins/fontawesome-free/css/all.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?php echo(site_url()); ?>theme_files/dist/css/adminlte.min.css">
	</head>
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
				
				<?php include($page_name); ?>


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
		<!-- jQuery -->
		<script src="<?php echo(site_url()); ?>theme_files/plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="<?php echo(site_url()); ?>theme_files/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- bs-custom-file-input -->
		<script src="<?php echo(site_url()); ?>theme_files/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?php echo(site_url()); ?>theme_files/dist/js/adminlte.min.js"></script>
		<!-- Page specific script -->
		<script>
			$(function () {
			  bsCustomFileInput.init();
			});
		</script>																								

<script type="text/javascript">
            $(document).ready(function(){
              //alert($().jquery);
            
              $("#btnSubmit").click(function(){
                //var formData = new FormData($("#dynamicMaster")[0]);
                //alert($("#email").val());
                
                //var form = document.getElementById('dynamicMaster'); 
                var formData = new FormData(); 
                formData.append("MasterCaption", $("#caption").val());	
                formData.append("MasterName", $("#masterName").val());	
                
                $.ajax({ 
                    url: 'https://icsweb.in/dynamic/app/index.php/DynamicForm/new_master_save', 
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
        </script>

	</body>
</html>