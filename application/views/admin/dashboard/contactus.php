<?php $this->view('templates/admin/header.php'); ?>

 <!-- Row -->
 <div class="row">
        <div class="col-xl-12">
					<div class="d-flex align-items-center justify-content-between mt-40 mb-20">
						<h4>Quick Request</h4>
						<!-- <button class="btn btn-sm btn-link">view all</button> -->
						<span id="notification"><?php echo $this->session->flashdata('updateMessage'); ?></span>
					</div>
						<div class="card">
							<div class="card-body pa-0">
								<div class="table-wrap">
									<div class="table-responsive">
									
										<table class="table table-sm table-hover mb-0">
											<thead>
												<tr>
													<th>S No</th>
													<th>Name</th>
													<th>Eamil</th>
													<th>Mobile No</th>
													<th>Comapny Name</th>													
													<th>Message</th>													
													<th>Date</th>													
												</tr>
											</thead>
											<tbody>
											<?php

											//echo "<pre>";print_r($data);die("hello");
											$i = 1;
											if($data && count($data)){
												
											foreach($data as $dt){
											?>
												<tr>
													<td><?php echo $i ?></td>
													<td><?php echo $dt->name ?></td>
													<td><?php echo $dt->email ?></td>
													<td><?php echo $dt->mobileno ?></td>
													<td><?php echo $dt->comapnyName ?></td>
													<td><?php echo $dt->message ?></td>													
													<td><?php echo $dt->createdDate ?></td>
												</tr>
											<?php 
												$i++;
											}											
												}else{
											?>
												<tr>
													<td colspan="7" align="center">No record found!</td>
												</tr>	
											<?php 
								
										}?>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>		
					</div>
                </div>
                <!-- /Row -->


<?php  $this->view('templates/admin/footer.php'); ?>
