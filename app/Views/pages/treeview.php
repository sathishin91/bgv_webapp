<?= $this->extend('layouts/main'); ?>


    <?= $this->section('styles'); ?>

    <?= $this->endSection('styles'); ?>

    <?= $this->section('content'); ?>

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Treeview</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
										<li class="breadcrumb-item active" aria-current="page">Treeview</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW -->
							<div class="row">
								<div class="col-md-12">
									<div class="card ">
										<div class="card-header border-bottom">
											<h3 class="card-title">Basic Treeview</h3>
										</div>
										<div class="card-body">
											<p class=" card-sub-title text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="row">
												<!-- col -->
												<div class="col-lg-4">
													<ul id="treeview1">
														<li><a href="#">TECH</a>
															<ul>
																<li>Company Maintenance</li>
																<li><a href="#">Employees</a>
																	<ul>
																		<li>Reports</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="#">XRP</a>
															<ul>
																<li>Company Maintenance</li>
																<li><a href="#">Employees</a>
																	<ul>
																		<li>Reports</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
													</ul>
												</div>
												<!-- /col -->

												<!-- col -->
												<div class="col-lg-4 mt-4 mt-lg-0">
													<ul id="treeview2">
														<li><a href="#">TECH</a>
															<ul>
																<li>Company Maintenance</li>
																<li><a href="#">Employees</a>
																	<ul>
																		<li>Reports</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="#">XRP</a>
															<ul>
																<li>Company Maintenance</li>
																<li><a href="#">Employees</a>
																	<ul>
																		<li>Reports</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
													</ul>
												</div>
												<!-- /col -->

												<!-- col -->
												<div class="col-lg-4 mt-4 mt-lg-0">
													<ul id="treeview3">
														<li><a href="#">TECH</a>
															<ul>
																<li>Company Maintenance</li>
																<li><a href="#">Employees</a>
																	<ul>
																		<li>Reports</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="#">XRP</a>
															<ul>
																<li>Company Maintenance</li>
																<li><a href="#">Employees</a>
																	<ul>
																		<li>Reports</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
													</ul>
												</div>
												<!-- /col -->
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Tree View Styles</h3>
										</div>
										<div class="card-body">
											<p class=" card-sub-title text-muted">It is Very Easy to Customize and it uses in website apllication.</p>
											<div class="row">
												<!-- col -->
												<div class="col-lg-4">
													<ul id="tree1">
														<li><a href="#">Treeview1</a>
															<ul>
																<li>Company Maintenance</li>
																<li><a href="#">Employees</a>
																	<ul>
																		<li><a href="#">Reports</a>
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li><a href="#">Employee Maint.</a>
																			<ul>
																				<li><a href="#">Reports</a>
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li><a href="#">Employee Maint.</a>
																					<ul>
																						<li><a href="#">Reports</a>
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="#">Treeview2</a>
															<ul>
																<li>Company Maintenance</li>
																<li><a href="#">Employees</a>
																	<ul>
																		<li><a href="#">Reports</a>
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li><a href="#">Employee Maint.</a>
																			<ul>
																				<li><a href="#">Reports</a>
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li><a href="#">Employee Maint.</a>
																					<ul>
																						<li><a href="#">Reports</a>
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="#">Treeview3</a>
															<ul>
																<li>Company Maintenance</li>
																<li><a href="#">Employees</a>
																	<ul>
																		<li><a href="#">Reports</a>
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li><a href="#">Employee Maint.</a>
																			<ul>
																				<li><a href="#">Reports</a>
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li><a href="#">Employee Maint.</a>
																					<ul>
																						<li><a href="#">Reports</a>
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="#">Treeview4</a>
															<ul>
																<li>Company Maintenance</li>
																<li><a href="#">Employees</a>
																	<ul>
																		<li><a href="#">Reports</a>
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li><a href="#">Employee Maint.</a>
																			<ul>
																				<li><a href="#">Reports</a>
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li><a href="#">Employee Maint.</a>
																					<ul>
																						<li><a href="#">Reports</a>
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="#">Treeview5</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="#">Treeview6</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
													</ul>
												</div>
												<!-- /col -->

												<!-- col -->
												<div class="col-lg-4 mt-4 mt-lg-0">
													<ul id="tree2">
														<li><a href="#">Treeview1</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="#">Treeview2</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="#">Treeview3</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="#">Treeview4</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="#">Treeview5</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="#">Treeview6</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
													</ul>
												</div>
												<!-- /col -->

												<!-- col -->
												<div class="col-lg-4 mt-4 mt-lg-0">
													<ul id="tree3">
														<li><a href="#">Treeview1</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="#">Treeview2</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="#">Treeview3</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="#">Treeview4</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="#">Treeview5</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.
																					<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
														<li><a href="#">Treeview6</a>
															<ul>
																<li>Company Maintenance</li>
																<li>Employees
																	<ul>
																		<li>Reports
																			<ul>
																				<li>Report1</li>
																				<li>Report2</li>
																				<li>Report3</li>
																			</ul>
																		</li>
																		<li>Employee Maint.
																			<ul>
																				<li>Reports
																					<ul>
																						<li>Report1</li>
																						<li>Report2</li>
																						<li>Report3</li>
																					</ul>
																				</li>
																				<li>Employee Maint.<ul>
																						<li>Reports
																							<ul>
																								<li>Report1</li>
																								<li>Report2</li>
																								<li>Report3</li>
																							</ul>
																						</li>
																						<li>Employee Maint.</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>Human Resources</li>
															</ul>
														</li>
													</ul>
												</div>
												<!-- /col -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /ROW -->
																 																																																																																   																								                        								
	<?= $this->endSection('content'); ?>
	
	<?= $this->section('scripts'); ?>

		<!-- INTERNAL TREEVIEW JS -->
		<script src="<?php echo base_url('assets/plugins/treeview/treeview.js'); ?>"></script>

		<!-- COLOR THEME JS -->
		<script src="<?php echo base_url('assets/js/themeColors.js'); ?>"></script>
													 																					
	<?= $this->endSection('scripts'); ?>

