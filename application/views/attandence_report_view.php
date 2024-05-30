<?php
            $CI =& get_instance();
            $CI->load->library('generic_repository');	
			
?>
<!DOCTYPE html>
<html lang="en">
	<?php include('parts/head.php'); ?>
    <style>
        .filter-section { margin-bottom: 20px; }
        .filter-toggle { cursor: pointer; font-size: 24px; }
    </style>
    <body class="hold-transition sidebar-mini">
		<div class="wrapper">
			<!-- Navbar -->
			<?php include('parts\topnavbar.php')?>
			<!-- /.navbar -->
			<!-- Main Sidebar Container -->
			<?php include('parts\sidebar.php');?>
			<!-- Content Wrapper. Contains page content -->
			<div class="modal fade" id="modal-lg">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Report</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                   
                            
                        
                    </div>
                    
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

				


				<section class="content">
					<div class="container-fluid">
						<div class="row">
							<!-- left column -->
							
							<!--/.col (right) -->
						</div>
						<!-- /.row -->

						
						<div class="row">
							<!-- left column -->
							<div class="col-md-12">
								<!-- general form elements -->
								<div class="card card-primary">
									<div class="card-header">
										<h3 class="card-title">Report</h3>
										
									</div>
									<!-- /.card-header -->
									<!-- form start -->
									
										<div class="card-body">
                                        
                                        <div class="container">
    
    <div class="row">
    <div class="filter-section">
        <i class="fas fa-filter filter-toggle float-right" data-toggle="collapse" data-target="#filterCollapse" aria-expanded="false" aria-controls="filterCollapse"></i>
        <div class="clearfix"></div>
        <div class="collapse mt-3" id="filterCollapse">
            <form id="filterForm">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="plant">Plant</label>
                        <select id="plant" name="plant" class="form-control">
                            <option value="">Select Plant</option>
                            <option value="Plant1">Plant 1</option>
                            <option value="Plant2">Plant 2</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="department">Department</label>
                        <select id="department" name="department" class="form-control">
                            <option value="">Select Department</option>
                            <option value="Dept1">Department 1</option>
                            <option value="Dept2">Department 2</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="fromDate">From Date</label>
                        <div class="input-group date" id="fromDate" data-target-input="nearest">
                            <input type="text" name="fromDate" class="form-control datetimepicker-input" data-target="#fromDate"/>
                            <div class="input-group-append" data-target="#fromDate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="toDate">To Date</label>
                        <div class="input-group date" id="toDate" data-target-input="nearest">
                            <input type="text" name="toDate" class="form-control datetimepicker-input" data-target="#toDate"/>
                            <div class="input-group-append" data-target="#toDate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Apply Filters</button>
            </form>
        </div>
    </div>

    <table id="reportTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Plant</th>
                <th>Department</th>
                <th>Date</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data will be populated here using JavaScript -->
        </tbody>
    </table>
</div>
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
		<!-- <script src="<?=base_url()?>alte320/plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="<?=base_url()?>alte320/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- bs-custom-file-input -->
		<script src="<?=base_url()?>alte320/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?=base_url()?>alte320/dist/js/adminlte.min.js"></script> -->
		<!-- Page specific script -->
																									

<script type="text/javascript">
            $(document).ready(function(){
              //alert($().jquery);
              bsCustomFileInput.init();
              console.log('<?=base_url()?>');
              $('#fromDate').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#toDate').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        });
        $("#fromDate").on("change.datetimepicker", function (e) {
            $('#toDate').datetimepicker('minDate', e.date);
        });
        $("#toDate").on("change.datetimepicker", function (e) {
            $('#fromDate').datetimepicker('maxDate', e.date);
        });

        $('#filterForm').on('submit', function (e) {
            e.preventDefault();
            fetchReportData();
        });

        function fetchReportData() {
            $.ajax({
                url: '<?= base_url('report/fetch_data') ?>',
                type: 'POST',
                data: $('#filterForm').serialize(),
                dataType: 'json',
                success: function (data) {
                    populateTable(data);
                }
            });
        }

        function populateTable(data) {
            var tbody = $('#reportTable tbody');
            tbody.empty();
            data.forEach(function (row) {
                var tr = $('<tr>');
                tr.append('<td>' + row.id + '</td>');
                tr.append('<td>' + row.plant + '</td>');
                tr.append('<td>' + row.department + '</td>');
                tr.append('<td>' + row.date + '</td>');
                tr.append('<td>' + row.value + '</td>');
                tbody.append(tr);
            });
        }
              
              
            });
        </script>

	</body>
</html>