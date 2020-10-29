@extends('layout.trainer_layout')
@section('style')
	<link rel="stylesheet" href="{{ asset('css/teacher/annotator.min.css') }}">  
@stop
@section('content')
		<section class="content">
				<header class="content__title">
					<div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".sidebar">
						<div class="navigation-trigger__inner">
							<i class="navigation-trigger__line"></i>
							<i class="navigation-trigger__line"></i>
							<i class="navigation-trigger__line"></i>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 col-md-3 col-lg-3 col-xl-3 mb-3">
							<div class="custom-select-dropdown">
								<select>
									<option>Select Group</option>
									<option>Group 1</option>
									<option>Group 1</option>
									<option>Group 3</option>
									<option>Group 4</option>
									<option>Group 5</option>
								</select>
							</div>
						</div>
						<div class="col-sm-8 col-md-6 col-lg-5 col-xl-5">
							<div class="custom-select-dropdown">
								<select>
									<option>Session 1 : Lesson Planning & Classroom Management</option>
									<option>Session 1 : Lesson Planning & Classroom Management</option>
									<option>Session 2 : The Learner</option>
									<option>Session 3 : Assessment</option>
									<option>Session 4 : Teaching Grammar</option>
									<option>Session 5 : Teaching Vocabulary</option>
									<option>Session 6 : Teaching Reading</option>
									<option>Session 7 : Teaching Reading</option>
									<option>Session 8 : Teaching Listening</option>
									<option>Session 9 : Teachihng Speaking</option>
									<option>Session 10 : Academic English</option>
									<option>Session 11 : Language Awareness</option>
									<option>Session 12 : Materials Investigation</option>
									<option>Session 13 : Teaching Large Classes</option>
									<option>Session 14 : World Englishes</option>
									<option>Session 15 : Final Session - Roundup</option>
								</select>
							</div>
						</div>
					</div>
					<div class="actions hidden-sm-down">
						<img class="logo__img_right" src="{{asset('/images/trainer/header-logo/IEUK-text-logo.png')}}" alt="logo right">
					</div>
				</header>
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
						<div class="custom-select-dropdown">
							<select>
								<option>Teacher name</option>
								<option>Teacher name</option>
								<option>Teacher name</option>
								<option>Teacher name</option>
								<option>Teacher name</option>
								<option>Teacher name</option>
							</select>
						</div>
						<hr>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0 progress_details_heading">
							<h5>Progress Record</h5>
							<div id="donutchart"></div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 progress_details">
							<h5>Learner Journal</h5>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<p>Tasks Submitted : 15/15</p>
							<p>Mark Achieved : 100%</p>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 progress_details">
							<h5>Assessment</h5>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<p>Tasks Submitted : 15/100</p>
							<p>Mark Achieved : 100%</p>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 progress_details">
							<h5>Theory</h5>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<p>Tasks Submitted : 15/123</p>
							<p>Mark Achieved : 100%</p>
						</div>
					</div>
					<div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
						<div class="tab-container tab-container-heading">
							<ul class="nav nav-tabs nav-tabs-header" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#learnerjournal" role="tab">Learner Journal</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#assessment" role="tab">Assessment</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#theory" role="tab">Theory</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active fade show" id="learnerjournal" role="tabpanel">
									<div class="card rounded15 box-shadow">
										<div class="card-block">
											<div class="row">
												<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 lj_text" id="airlock">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultricies est ullamcorper enim euismod, ac facilisis tortor ultricies. Quisque interdum enim tortor, hendrerit efficitur nunc sollicitudin non. Phasellus diam ligula, consequat sollicitudin quam vel, laoreet ultrices quam. Etiam varius lectus sagittis placerat finibus.</p>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultricies est ullamcorper enim euismod, ac facilisis tortor ultricies. Quisque interdum enim tortor, hendrerit efficitur nunc sollicitudin non. Phasellus diam ligula, consequat sollicitudin quam vel, laoreet ultrices quam. Etiam varius lectus sagittis placerat finibus. Phasellus diam ligula, consequat sollicitudin quam vel, laoreet ultrices quam. Etiam varius lectus sagittis placerat finibus. Phasellus diam ligula, consequat sollicitudin quam vel, laoreet ultrices quam. Etiam varius lectus sagittis placerat finibus. Phasellus diam ligula, consequat sollicitudin quam vel, laoreet ultrices quam. Etiam varius lectus sagittis placerat finibus. Phasellus diam ligula, consequat sollicitudin quam vel, laoreet ultrices quam. Etiam varius lectus sagittis placerat finibus.</p>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultricies est ullamcorper enim euismod, ac facilisis tortor ultricies. Quisque interdum enim tortor, hendrerit efficitur nunc sollicitudin non. Phasellus diam ligula, consequat sollicitudin quam vel, laoreet ultrices quam. Etiam varius lectus sagittis placerat finibus.</p>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultricies est ullamcorper enim euismod, ac facilisis tortor ultricies. Quisque interdum enim tortor, hendrerit efficitur nunc sollicitudin non. Phasellus diam ligula, consequat sollicitudin quam vel, laoreet ultrices quam. Etiam varius lectus sagittis placerat finibus.</p>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultricies est ullamcorper enim euismod, ac facilisis tortor ultricies. Quisque interdum enim tortor, hendrerit efficitur nunc sollicitudin non. Phasellus diam ligula, consequat sollicitudin quam vel, laoreet ultrices quam. Etiam varius lectus sagittis placerat finibus. Phasellus diam ligula, consequat sollicitudin quam vel, laoreet ultrices quam. Etiam varius lectus sagittis placerat finibus. Phasellus diam ligula, consequat sollicitudin quam vel, laoreet ultrices quam. Etiam varius lectus sagittis placerat finibus. Phasellus diam ligula, consequat sollicitudin quam vel, laoreet ultrices quam. Etiam varius lectus sagittis placerat finibus. Phasellus diam ligula, consequat sollicitudin quam vel, laoreet ultrices quam. Etiam varius lectus sagittis placerat finibus.</p>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultricies est ullamcorper enim euismod, ac facilisis tortor ultricies. Quisque interdum enim tortor, hendrerit efficitur nunc sollicitudin non. Phasellus diam ligula, consequat sollicitudin quam vel, laoreet ultrices quam. Etiam varius lectus sagittis placerat finibus. Phasellus diam ligula, consequat sollicitudin quam vel, laoreet ultrices quam. Etiam varius lectus sagittis placerat finibus. Phasellus diam ligula, consequat sollicitudin quam vel, laoreet ultrices quam. Etiam varius lectus sagittis placerat finibus. Phasellus diam ligula, consequat sollicitudin quam vel, laoreet ultrices quam. Etiam varius lectus sagittis placerat finibus. Phasellus diam ligula, consequat sollicitudin quam vel, laoreet ultrices quam. Etiam varius lectus sagittis placerat finibus.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="assessment" role="tabpanel">
									<div class="card rounded15 box-shadow">
										<div class="card-block">
											<div class="row pb-3 ass_que">
												<div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 word-record-assessment">
													<p>1) What do many ‘Controllers’ find with this role?</p>
													<div class="row mb-4">
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" checked>
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">That they are very comfortable with that role</span>
															</label>
														</div>
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">That they like to change it from this role</span>
															</label>
														</div>
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">That is it a vital role</span>
															</label>
														</div>
													</div>
												</div>												
												<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 wr_assessment_ans">
													<div class="listview__item mb-3 p-0">
														<label class="custom-control p-0"> Ans. 1 )</label>
														<div class="listview__content text-center">
															<p>1/1</p>
														</div>
													</div>
													<p>That they are very comfortable with that role</p>
												</div>
											</div>
											<div class="row mt-3 pb-3 ass_que">
												<div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 word-record-assessment">
													<p class="mb-1">2) What are the three main learning styles?</p>
													<p class="pl-3 ml-1 mb-2">Fill in the gap</p>
													<div class="row mb-4">
														<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
															<div class="listview__item p-0">
																<label class="custom-control">V</label>
																<div class="listview__content underline_p">
																	<p>isual</p>
																</div>
															</div>
															<div class="listview__item p-0">
																<label class="custom-control">A</label>
																<div class="listview__content underline_p">
																	<p>uditory</p>
																</div>
															</div>
															<div class="listview__item p-0">
																<label class="custom-control">K</label>
																<div class="listview__content underline_p">
																	<p class="text-red">inaesthetic</p>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 wr_assessment_ans">
													<div class="listview__item mb-3 p-0">
														<label class="custom-control p-0">Ans. 2)</label>
														<div class="listview__content text-center">
															<p>2/3</p>
														</div>
													</div>
													<p><span>Visual</span></p>
													<p><span>Auditory</span></p>
													<p><span>Kinaesthetic</span></p>
												</div>
											</div>
											<div class="row mt-3 pb-3 ass_que">
												<div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 word-record-assessment">
													<p class="mb-1">3) What does ILP stand for?</p>
													<p class="pl-3 ml-1 mb-2">Fill in the gap</p>
													<div class="row mb-5">
														<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
															<div class="listview__item p-0">
																<label class="custom-control">I</label>
																<div class="listview__content underline_p">
																	<p>ndividual</p>
																</div>
																<label class="custom-control">L</label>
																<div class="listview__content underline_p">
																	<p>earning</p>
																</div>
																<label class="custom-control">P</label>
																<div class="listview__content underline_p">
																	<p class="text-red">lane</p>
																</div>
															</div>
														</div>
													</div>
												</div>												
												<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 wr_assessment_ans">
													<div class="listview__item mb-3 p-0">
														<label class="custom-control p-0">Ans. 3)</label>
														<div class="listview__content text-center">
															<p>2/3</p>
														</div>
													</div>
													<p><span>Individual</span></p>
													<p><span>Learning</span></p>
													<p><span>Plan</span></p>
												</div>
											</div>
											<div class="row mt-3 pb-3 ass_que">
												<div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 word-record-assessment">
													<p class="mb-3">4) Name the 9 tags a word can have.</p>
													<div class="row mb-5">
														<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
															<div class="listview__item p-0">
																<label class="custom-control">K</label>
																<div class="listview__content underline_p">
																	<p>something</p>
																</div>
																<label class="custom-control">K</label>
																<div class="listview__content underline_p">
																	<p>something</p>
																</div>
																<label class="custom-control"></label>
																<div class="listview__content">
																	<p class="text-red"></p>
																</div>
															</div>
														</div>
														<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
															<div class="listview__item p-0">
																<label class="custom-control">K</label>
																<div class="listview__content underline_p">
																	<p>something</p>
																</div>
																<label class="custom-control">K</label>
																<div class="listview__content underline_p">
																	<p>something</p>
																</div>
																<label class="custom-control">K</label>
																<div class="listview__content underline_p">
																	<p class="text-red">something</p>
																</div>
															</div>
														</div>
														<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
															<div class="listview__item p-0">
																<label class="custom-control">K</label>
																<div class="listview__content underline_p">
																	<p>something</p>
																</div>
																<label class="custom-control">K</label>
																<div class="listview__content underline_p">
																	<p>something</p>
																</div>
																<label class="custom-control"></label>
																<div class="listview__content">
																	<p class="text-red"></p>
																</div>
															</div>
														</div>
													</div>
												</div>												
												<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 wr_assessment_ans">
													<div class="listview__item mb-3 p-0">
														<label class="custom-control p-0">Ans. 4)</label>
														<div class="listview__content text-center">
															<p>6/7</p>
														</div>
													</div>
													<p><span>Individual</span><span>Learning</span></p>
													<p><span>Individual</span><span>Learning</span><span>Plan</span></p>
													<p><span>Individual</span><span>Learning</span></p>
												</div>
											</div>
											<div class="row mt-3 pb-3 ass_que">
												<div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 word-record-assessment">
													<p class="mb-3">5) Name the 9 tags a word can have.</p>
													<div class="row mb-5">
														<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
															<div class="listview__item p-0">
																<label class="custom-control">To confirm e</label>
																<div class="listview__content underline_p">
																	<p>Individual</p>
																</div>
															</div>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"></div>
														<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
															<div class="listview__item p-0">
																<label class="custom-control">To ex tract specific I</label>
																<div class="listview__content underline_p">
																	<p>Individual</p>
																</div>
															</div>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"></div>
														<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
															<div class="listview__item p-0">
																<label class="custom-control">For c</label>
																<div class="listview__content underline_p">
																	<p>Individual</p>
																</div>
																<label class="custom-control">tasks</label>
															</div>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"></div>
													</div>
												</div>												
												<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 wr_assessment_ans">
													<div class="listview__item mb-3 p-0">
														<label class="custom-control p-0">Ans. 5)</label>
														<div class="listview__content text-center">
															<p>3/3</p>
														</div>
													</div>
													<p><span>Individual</span></p>
													<p><span>Individual</span></p>
													<p><span>Individual</span></p>
												</div>
											</div>
											<div class="row mt-3 pb-3 ass_que">
												<div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 word-record-assessment">
													<p>6) A significant difference between General English and Academic English is that former <span>Individual</span> driven while the latter <span>Individual</span> driven.</p>
												</div>
												<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 wr_assessment_ans">
													<div class="listview__item mb-3 p-0">
														<label class="custom-control p-0">Ans. 6)</label>
														<div class="listview__content text-center">
															<p>2/2</p>
														</div>
													</div>
													<p><span>Individual</span></p>
													<p><span>Individual</span></p>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 word-record-assessment">
													<p>7) Which role brings together a ‘Prompter’ and a ‘Resource’?</p>
													<div class="row">
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" checked>
																<span class="custom-control-indicator-wrong"></span>
																<span class="custom-control-description">Controller</span>
															</label>
														</div>
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Assessor</span>
															</label>
														</div>
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" checked>
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Tutor</span>
															</label>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 wr_assessment_ans">
													<div class="listview__item mb-3 p-0">
														<label class="custom-control p-0">Ans. 7)</label>
														<div class="listview__content text-center">
															<p>0/1</p>
														</div>
													</div>
													<p>Tutor</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="theory" role="tabpanel">
									<div class="card rounded15 box-shadow">
										<div class="card-block">
											<div class="row pb-3 ass_que">
												<div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 word-record-assessment">
													<p>1) What do many ‘Controllers’ find with this role?</p>
													<div class="row mb-4">
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" checked>
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">That they are very comfortable with that role</span>
															</label>
														</div>
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">That they like to change it from this role</span>
															</label>
														</div>
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">That is it a vital role</span>
															</label>
														</div>
													</div>
												</div>												
												<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 wr_assessment_ans">
													<div class="listview__item mb-3 p-0">
														<label class="custom-control p-0"> Ans. 1 )</label>
														<div class="listview__content text-center">
															<p>1/1</p>
														</div>
													</div>
													<p>That they are very comfortable with that role</p>
												</div>
											</div>
											<div class="row mt-3 pb-3 ass_que">
												<div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 word-record-assessment">
													<p class="mb-1">2) What are the three main learning styles?</p>
													<p class="pl-3 ml-1 mb-2">Fill in the gap</p>
													<div class="row mb-4">
														<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
															<div class="listview__item p-0">
																<label class="custom-control">V</label>
																<div class="listview__content underline_p">
																	<p>isual</p>
																</div>
															</div>
															<div class="listview__item p-0">
																<label class="custom-control">A</label>
																<div class="listview__content underline_p">
																	<p>uditory</p>
																</div>
															</div>
															<div class="listview__item p-0">
																<label class="custom-control">K</label>
																<div class="listview__content underline_p">
																	<p class="text-red">inaesthetic</p>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 wr_assessment_ans">
													<div class="listview__item mb-3 p-0">
														<label class="custom-control p-0">Ans. 2)</label>
														<div class="listview__content text-center">
															<p>2/3</p>
														</div>
													</div>
													<p><span>Visual</span></p>
													<p><span>Auditory</span></p>
													<p><span>Kinaesthetic</span></p>
												</div>
											</div>
											<div class="row mt-3 pb-3 ass_que">
												<div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 word-record-assessment">
													<p class="mb-1">3) What does ILP stand for?</p>
													<p class="pl-3 ml-1 mb-2">Fill in the gap</p>
													<div class="row mb-5">
														<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
															<div class="listview__item p-0">
																<label class="custom-control">I</label>
																<div class="listview__content underline_p">
																	<p>ndividual</p>
																</div>
																<label class="custom-control">L</label>
																<div class="listview__content underline_p">
																	<p>earning</p>
																</div>
																<label class="custom-control">P</label>
																<div class="listview__content underline_p">
																	<p class="text-red">lane</p>
																</div>
															</div>
														</div>
													</div>
												</div>												
												<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 wr_assessment_ans">
													<div class="listview__item mb-3 p-0">
														<label class="custom-control p-0">Ans. 3)</label>
														<div class="listview__content text-center">
															<p>2/3</p>
														</div>
													</div>
													<p><span>Individual</span></p>
													<p><span>Learning</span></p>
													<p><span>Plan</span></p>
												</div>
											</div>
											<div class="row mt-3 pb-3 ass_que">
												<div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 word-record-assessment">
													<p class="mb-3">4) Name the 9 tags a word can have.</p>
													<div class="row mb-5">
														<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
															<div class="listview__item p-0">
																<label class="custom-control">K</label>
																<div class="listview__content underline_p">
																	<p>something</p>
																</div>
																<label class="custom-control">K</label>
																<div class="listview__content underline_p">
																	<p>something</p>
																</div>
																<label class="custom-control"></label>
																<div class="listview__content">
																	<p class="text-red"></p>
																</div>
															</div>
														</div>
														<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
															<div class="listview__item p-0">
																<label class="custom-control">K</label>
																<div class="listview__content underline_p">
																	<p>something</p>
																</div>
																<label class="custom-control">K</label>
																<div class="listview__content underline_p">
																	<p>something</p>
																</div>
																<label class="custom-control">K</label>
																<div class="listview__content underline_p">
																	<p class="text-red">something</p>
																</div>
															</div>
														</div>
														<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
															<div class="listview__item p-0">
																<label class="custom-control">K</label>
																<div class="listview__content underline_p">
																	<p>something</p>
																</div>
																<label class="custom-control">K</label>
																<div class="listview__content underline_p">
																	<p>something</p>
																</div>
																<label class="custom-control"></label>
																<div class="listview__content">
																	<p class="text-red"></p>
																</div>
															</div>
														</div>
													</div>
												</div>												
												<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 wr_assessment_ans">
													<div class="listview__item mb-3 p-0">
														<label class="custom-control p-0">Ans. 4)</label>
														<div class="listview__content text-center">
															<p>6/7</p>
														</div>
													</div>
													<p><span>Individual</span><span>Learning</span></p>
													<p><span>Individual</span><span>Learning</span><span>Plan</span></p>
													<p><span>Individual</span><span>Learning</span></p>
												</div>
											</div>
											<div class="row mt-3 pb-3 ass_que">
												<div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 word-record-assessment">
													<p class="mb-3">5) Name the 9 tags a word can have.</p>
													<div class="row mb-5">
														<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
															<div class="listview__item p-0">
																<label class="custom-control">To confirm e</label>
																<div class="listview__content underline_p">
																	<p>Individual</p>
																</div>
															</div>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"></div>
														<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
															<div class="listview__item p-0">
																<label class="custom-control">To ex tract specific I</label>
																<div class="listview__content underline_p">
																	<p>Individual</p>
																</div>
															</div>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"></div>
														<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
															<div class="listview__item p-0">
																<label class="custom-control">For c</label>
																<div class="listview__content underline_p">
																	<p>Individual</p>
																</div>
																<label class="custom-control">tasks</label>
															</div>
														</div>
														<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"></div>
													</div>
												</div>												
												<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 wr_assessment_ans">
													<div class="listview__item mb-3 p-0">
														<label class="custom-control p-0">Ans. 5)</label>
														<div class="listview__content text-center">
															<p>3/3</p>
														</div>
													</div>
													<p><span>Individual</span></p>
													<p><span>Individual</span></p>
													<p><span>Individual</span></p>
												</div>
											</div>
											<div class="row mt-3 pb-3 ass_que">
												<div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 word-record-assessment">
													<p>6) A significant difference between General English and Academic English is that former <span>Individual</span> driven while the latter <span>Individual</span> driven.</p>
												</div>
												<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 wr_assessment_ans">
													<div class="listview__item mb-3 p-0">
														<label class="custom-control p-0">Ans. 6)</label>
														<div class="listview__content text-center">
															<p>2/2</p>
														</div>
													</div>
													<p><span>Individual</span></p>
													<p><span>Individual</span></p>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 word-record-assessment">
													<p>7) Which role brings together a ‘Prompter’ and a ‘Resource’?</p>
													<div class="row">
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" checked>
																<span class="custom-control-indicator-wrong"></span>
																<span class="custom-control-description">Controller</span>
															</label>
														</div>
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Assessor</span>
															</label>
														</div>
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" checked>
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Tutor</span>
															</label>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 wr_assessment_ans">
													<div class="listview__item mb-3 p-0">
														<label class="custom-control p-0">Ans. 7)</label>
														<div class="listview__content text-center">
															<p>0/1</p>
														</div>
													</div>
													<p>Tutor</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<div class="modal fade" id="logout_popup" tabindex="-1">
				<div class="modal-dialog modal-sm">
					<div class="modal-content rounded15">
						<div class="modal-body text-center logout_mb">Are you sure you want to logout?</div>
						<div class="modal-footer">
							<div class="row">
								<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
									<button type="button" class="btn btn-save">Yes</button>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
									<button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>		

@stop	
@section('scripts')

<script src="{{ asset('js/teacher/annotator.min.js') }}"></script>
<script src="{{ asset('js/teacher/annotator.tags.min.js') }}"></script>
<script type="text/javascript">
		jQuery(function ($) {
	        if (typeof $.fn.annotator !== 'function') {
	          alert("Ooops! it looks like you haven't built the Annotator concatenation file. " +
	                "Either download a tagged release from GitHub, or modify the Cakefile to point " +
	                "at your copy of the YUI compressor and run `cake package`.");
	        } else {
	          $('#airlock').annotator().annotator('addPlugin', 'Tags');
	        }
	    });
</script>
@stop	