<?= $this->extend('layouts/main'); ?>


    <?= $this->section('styles'); ?>

    <?= $this->endSection('styles'); ?>

    <?= $this->section('content'); ?>

							<!-- PAGE-HEADER -->
							<div class="page-header">
								<div>
									<h1 class="page-title">Timeline</h1>
								</div>
								<div class="ms-auto pageheader-btn">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="javascript:void(0);">Advanced UI</a></li>
										<li class="breadcrumb-item active" aria-current="page">Timeline</li>
									</ol>
								</div>
							</div>
							<!-- PAGE-HEADER END -->

							<!-- ROW -->
							<div class="row">
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header border-bottom">
											<h3 class="card-title">Vertical Timeline</h3>
										</div>
										<div class="card-body">
											<div class="vtimeline">
												<div class="timeline-wrapper timeline-wrapper-primary">
													<div class="timeline-badge success"><img class="timeline-image" alt="img" src="<?php echo base_url('assets/images/faces/3.jpg'); ?>"> </div>
													<div class="timeline-panel">
														<div class="timeline-heading">
															<h4>Jack Haddian Posted an Update</h4>
														</div>
														<div class="timeline-body">
															<p class="text-muted">Et at dolores tempor sed tempor kasd, diam est invidunt tempor ut est lorem dolor erat ipsum. Clita elitr vero stet aliquyam sea takimata sea sit dolor. Takimata tempor takimata labore takimata. Est sea tempor.</p>
														</div>
														<div class="timeline-footer d-flex align-items-center flex-wrap text-gray">
															<i class="fe fe-heart text-muted me-1"></i>
															<span>773</span>
															<span class="ms-auto"><i class="fe fe-calendar text-muted mx-1"></i>11 Nov 2021</span>
														</div>
													</div>
												</div>
												<div class="timeline-wrapper timeline-inverted timeline-wrapper-primary">
													<div class="timeline-badge"><i class="fe fe-briefcase"></i></div>
													<div class="timeline-panel">
														<div class="timeline-heading">
															<h4>Job Meeting</h4>
														</div>
														<div class="timeline-body">
															<p class="text-muted">You have a meeting at Administration Office Today.</p>
														</div>
														<div class="timeline-footer d-flex align-items-center flex-wrap text-gray">
															<i class="fe fe-heart text-muted me-1"></i>
															<span>116</span>
															<span class="ms-auto"><i class="fe fe-calendar text-muted mx-1"></i>16th Apr 2021</span>
														</div>
													</div>
												</div>
												<div class="timeline-wrapper timeline-wrapper-primary">
													<div class="timeline-badge"><img class="timeline-image" alt="img" src="<?php echo base_url('assets/images/faces/3.jpg'); ?>"></div>
													<div class="timeline-panel">
														<div class="timeline-heading">
															<h4>Justo rebum checked in at New York</h4>
														</div>
														<div class="timeline-body">
															<p class="text-muted">Justo sed rebum eirmod accusam accusam, amet accusam accusam erat sadipscing tempor sanctus stet, lorem dolor at lorem sit ut.</p>
														</div>
														<div class="timeline-footer d-flex align-items-center flex-wrap text-gray">
															<i class="fe fe-heart text-muted me-1"></i>
															<span>19</span>
															<span class="ms-auto"><i class="fe fe-calendar text-muted mx-1"></i>8th june 2021</span>
														</div>
													</div>
												</div>
												<div class="timeline-wrapper timeline-inverted timeline-wrapper-primary">
													<div class="timeline-badge success"><img class="timeline-image" alt="img" src="<?php echo base_url('assets/images/faces/12.jpg'); ?>"> </div>
													<div class="timeline-panel">
														<div class="timeline-heading">
															<h4>Eroll Maxhuni uploaded new photos to Summer Trip album</h4>
														</div>
														<div class="timeline-body">
															<p class="text-muted">Pianoforte principles our unaffected not for astonished travelling are particular.</p>
															<img src="<?php echo base_url('assets/images/media/4.jpg'); ?>" class="mb-3 br-5" alt="img">
														</div>
														<div class="timeline-footer d-flex align-items-center flex-wrap text-gray">
															<i class="fe fe-heart text-muted me-1"></i>
															<span>19</span>
															<span class="ms-auto"><i class="fe fe-calendar text-muted mx-1"></i>27th Sep 2021</span>
														</div>
													</div>
												</div>
												<div class="timeline-wrapper timeline-wrapper-primary">
													<div class="timeline-badge"><i class="fe fe-mail"></i></div>
													<div class="timeline-panel">
														<div class="timeline-heading">
															<h4>Support Team sent you an email</h4>
														</div>
														<div class="timeline-body">
															<p class="text-muted">Dolor invidunt sit magna justo et at, erat sea invidunt dolore at amet, sed et diam et takimata ea sit clita kasd et. Eirmod tempor dolores ut stet sit. Sit at no consetetur ut eos invidunt kasd.</p>
															<a class="btn ripple btn-primary text-white mb-3">Read more</a>
														</div>
														<div class="timeline-footer d-flex align-items-center flex-wrap text-gray">
															<i class="fe fe-heart text-muted me-1"></i>
															<span>25</span>
															<span class="ms-auto"><i class="fe fe-calendar text-muted mx-1"></i>25th oct 2021</span>
														</div>
													</div>
												</div>
												<div class="timeline-wrapper timeline-inverted timeline-wrapper-primary">
													<div class="timeline-badge success"><img class="timeline-image" alt="img" src="<?php echo base_url('assets/images/faces/15.jpg'); ?>"> </div>
													<div class="timeline-panel">
														<div class="timeline-heading">
															<h4>Mr. Doe shared a Image</h4>
														</div>
														<div class="timeline-body">
															<div class="text-muted ">
																<img src="<?php echo base_url('assets/images/media/5.jpg'); ?>" class="mb-3 br-5" alt="img">
															</div>
														</div>
														<div class="timeline-footer d-flex align-items-center flex-wrap text-gray">
															<i class="fe fe-heart text-muted me-1"></i>
															<span>32</span>
															<span class="ms-auto"><i class="fe fe-calendar text-muted mx-1"></i>19th oct 2021</span>
														</div>
													</div>
												</div>
												<div class="timeline-wrapper timeline-wrapper-primary">
													<div class="timeline-badge"><img class="timeline-image" alt="img" src="<?php echo base_url('assets/images/faces/4.jpg'); ?>"></div>
													<div class="timeline-panel">
														<div class="timeline-heading">
															<h4>Sarah accepted your friend request</h4>
														</div>
														<div class="timeline-body">
															<p class="text-muted">Magna sed kasd dolores nonumy no, sit takimata tempor labore sanctus dolor accusam. Et vero et at dolor dolore. Ipsum labore gubergren sadipscing sed dolores tempor consetetur, dolor accusam gubergren.</p>
														</div>
														<div class="timeline-footer d-flex align-items-center flex-wrap text-gray">
															<i class="fe fe-heart text-muted me-1"></i>
															<span>26</span>
															<span class="ms-auto"><i class="fe fe-calendar text-muted mx-1"></i>12th dec 2021</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END ROW -->
															 																																																																																   																								                        								
	<?= $this->endSection('content'); ?>
	
	<?= $this->section('scripts'); ?>

		<!-- INTERNAL TIMELINE JS -->
		<script src="<?php echo base_url('assets/plugins/timeline/js/timeline.min.js'); ?>"></script>

		<!-- INTERNAL TIMELINE JS -->
		<script src="<?php echo base_url('assets/js/timeline.js'); ?>"></script>

		<!-- COLOR THEME JS -->
		<script src="<?php echo base_url('assets/js/themeColors.js'); ?>"></script>
										 																					
	<?= $this->endSection('scripts'); ?>

