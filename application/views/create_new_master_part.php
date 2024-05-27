<style>
	.table td, .table th {
		padding : 0;
		/*width:50%;*/
	}
	</style>
<div class="modal fade" id="modal-lg">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Add Company</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    
                           
							<form id="dynamicMaster">  
											<div class="container">
											<div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Caption">Caption</label>
                                                        <input type="text" class="form-control" name="caption" id="caption" value="">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Master Name">Master Name</label>
                                                        <input type="text" class="form-control" name="masterName" id="masterName" value="">
                                                    </div>
                                                </div>
											</div>
											</div>
											
											<div class="row">
											
											<table class="table table-bordered table-hover table-striped" id="invoice_table">
											<thead>
					<tr>
						<th width="200">
							<b><a onclick="AddRow(0)" href="#"  class="btn btn-success btn-xs add-row"><span class="fa fa-plus" aria-hidden="true"></span></a> Field Name</b>
						</th>
						<th width="200">
							<b>Type</b>
						</th>
						<th>
							<b>Length</b>
						</th>
						<th>
							<b>Mandetory</b>
						</th>
						<th>
							<b>Default</b>
						</th>

						<th>
							<b>Master</b>
						</th>

						<th>
							<b>Display</b>
						</th>

						<th>
							<b>Sequence</b>
						</th>	
					</tr>
				</thead>
				<tbody id="field_list">
				<!--<tr>
						<td>
							<div class="form-group form-group-sm  no-margin-bottom">
								<a href="#" class="btn btn-danger btn-xs delete-row"><span class="fa fa-times" aria-hidden="true"></span></a>
								<input type="text" class="form-control form-group-sm item-input invoice_product" name="invoice_product[]" placeholder="Enter Product Name OR Description">
								<p class="item-select">or <a href="#">select a product</a></p>
							</div>
						</td>
						<td class="text-right">
							<div class="form-group form-group-sm no-margin-bottom">
								<input type="number" class="form-control invoice_product_qty calculate" name="invoice_product_qty[]" value="1">
							</div>
						</td>
						<td class="text-right">
							<div class="input-group input-group-sm  no-margin-bottom">
								<span class="input-group-addon"></span>
								<input type="number" class="form-control calculate invoice_product_price required" name="invoice_product_price[]" aria-describedby="sizing-addon1" placeholder="0.00">
							</div>
						</td>
						<td class="text-right">
							<div class="form-group form-group-sm  no-margin-bottom">
								<input type="text" class="form-control calculate" name="invoice_product_discount[]" placeholder="Enter % OR value (ex: 10% or 10.50)">
							</div>
						</td>
						<td class="text-right">
							<div class="input-group input-group-sm">
								<span class="input-group-addon"></span>
								<input type="text" class="form-control calculate-sub" name="invoice_product_sub[]" id="invoice_product_sub" value="0.00" aria-describedby="sizing-addon1" disabled>
							</div>
						</td>
					</tr> -->

				</tbody>


											</table>
											</div>
											<button type="button" class="btn btn-primary float-right" data-dismiss="modal" aria-label="Close" style="margin-left: 2%;">
                                Close
                            </button>
                            <button type="button" class="btn btn-primary float-right" onclick="SaveMasterFileds()"><i class="fas fa-save"></i> Submit</button>
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
<!-- Main content -->
<section class="content">
					<div class="container-fluid">
						<div class="row">
							<!-- left column -->
							<div class="col-md-12">
								<!-- general form elements -->
								<div class="card card-primary">
									<div class="card-header">
										<h3 class="card-title">Master</h3>

										<button type = "button"  class="btn btn-primary add-btn"   data-toggle="modal" data-target="#modal-lg" style="float: right;margin: 0;padding: 0;background-color: white;color: black;width: 10%;">Create</button>
										<button id="edit_master" type = "button"  class="btn btn-primary add-btn"   data-toggle="modal" data-target="#modal-lg" style="float: right;margin: 0;padding: 0;background-color: white;color: black;width: 10%;">Edit</button>
									</div>
									<!-- /.card-header -->
									<!-- form start -->
									
										<div class="card-body">
										<table border="1">
											<thead>
												<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Caption</th>
												</tr>
											</thead>
											<tbody>
											<?php
													$masterData = $CI->generic_repository->query("SELECT * FROM core_master");
													foreach( $masterData as $row ) { ?>																							
														<tr onclick="show_master(<?=$row["id"]?>)">
															<td ><?=$row["id"]?></td>
															<td><?=$row["name"]?></td>
															<td><?=$row["caption"]?></td>
														</tr>
												<?php
													}
												?>
											</tbody>
										</table>

										</div>
										<!-- /.card-body -->
										<div class="card-footer">
											
										</div>
										<!-- <button type="button" class="btn btn-primary add-btn" data-toggle="modal" data-target="#modal-lg" style="float: right;margin: 0;padding: 0;background-color: white;color: black;width: 10%;">Add</button> -->
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
