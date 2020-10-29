@extends('layout.teacher_layout')
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
						<div class="col-sm-12 col-md-7 col-lg-6 col-xl-6">
							<div class="custom-select-dropdown">
								<select id="trainer" class="select2">
									@foreach($session['result'] as $data)
										@if($sessionId == $data['id'])
											<option value="{{$data['id']}}" selected="true">{{$data['name']}}</option>
										@else
											<option value="{{$data['id']}}">{{$data['name']}}</option>
										@endif
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-sm-12 col-md-7 col-lg-6 col-xl-6">
							
						</div>
					</div>
					<div class="actions hidden-sm-down">
						<img class="logo__img_right" src="/images/teacher/header-logo/IEUK-text-logo.png" alt="logo right">
					</div>
				</header>
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<div class="tab-container tab-container-heading">
							<ul class="nav nav-tabs nav-tabs-header" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#powerpoint" role="tab">PowerPoint</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#theory" role="tab">Theory</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#video" role="tab">Video</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active fade show" id="powerpoint" role="tabpanel">
									<div class="row">
										<div class="thumbnail-arrow hidden-xs-down">
											<a href="javascript:void(0)" class="thumb-indicator"><i class="zmdi zmdi-chevron-left"></i><i class="zmdi zmdi-chevron-left"></i></a>
										</div>
										<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 hidden-xs-down" id="thumb-hide">
											<div id="thumbnail-slider">
												<div class="inner">
													<ul>
														@foreach($pptList['result'][0]['ppt_file'] as $image)
															<li><a class="thumb" href="{{$image}}"></a></li>
														@endforeach
													</ul>
												</div>
											</div>
										</div>
										<div class="col-sm-9 col-md-9 col-lg-9 col-xl-9" id="thumb-show">
											<div id="ninja-slider">
												<div class="slider-inner">
													<ul>
														@foreach($pptList['result'][0]['ppt_file'] as $image)
															<li><a class="ns-img" href="{{$image}}"></a></li>
														@endforeach
													</ul>
													<div class="fs-icon" title="Expand/Close"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="theory" role="tabpanel">
									<div class="row">
										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
											@if(isset($pptList['result'][0]['theory_pdf']))
												<iframe class="pdf-viewer-theory" src="{{$pptList['result'][0]['theory_pdf']}}#pagemode=none" title="webviewer" frameborder="0" width="100%" height="500"></iframe>
											@endif
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="video" role="tabpanel">
									<object data="https://www.youtube.com/embed/COnQlsPglyQ" width="100%" height="400"></object>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<div class="tab-container tab-container-heading">
							<ul class="nav nav-tabs nav-tabs-header teacher-index-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#aims" role="tab">Aims</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#notes" role="tab">Notes</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#learnerjournal" role="tab">Learner Journal</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#theoryb" role="tab">Theory</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#assessment" role="tab">Assessment</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active fade show" id="aims" role="tabpanel">
									<div class="card rounded10">
										<div class="card-block aims-block">
											<div class="aims-point">
												<p><span></span></p>
												<p><span>To highlight components of lesson planning</span></p>
											</div>
											<div class="aims-point">
												<p><span></span></p>
												<p><span>To encourage teachers to consider their classroom language To encourage teachers to consider their classroom language</span></p>
											</div>
											<div class="aims-point">
												<p><span></span></p>
												<p><span>To encourage teachers to consider their classroom language</span></p>
											</div>
											<div class="aims-point">
												<p><span></span></p>
												<p><span>To discuss and breakdown methods of assessment encourage teachers to consider their classroom language s to consider their classroom language highlight components of lesson planning</span></p>
											</div>
											<div class="aims-point">
												<p><span></span></p>
												<p><span>To prompt teachers to think about conducting feedback</span></p>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="notes" role="tabpanel">
									<div class="card rounded10 mb-3">
										<div class="card-block p-2">
											<div class="form-group mb-0">
												<textarea class="form-control" rows="20" placeholder=""></textarea>
												<i class="form-group__bar"></i>
											</div>
											<div class="btn-demo text-center mt-3">
												<button type="button" class="btn btn-save waves-effect">Save</button>
											</div>
											<div class="row">
												<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
													<span class="notify-sucsess"><i class="zmdi zmdi-check"></i> Successfully Saved</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="learnerjournal" role="tabpanel">
									<div class="row">
										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 lj-teacher pl-5 mb-4">
											<p>Write a learner journal for this session. Please relate the ideas and activities covered in this session to your current and previous teaching and learning experiences. Note there is no minimum or maximum word count.</p>
											<div class="learnerjournal-point">
												<p><span></span></p>
												<p>Your Learner Journal should answer the following questions:</p>
											</div>
											<div class="learnerjournal-point">
												<p><span></span></p>
												<p>Give a brief summary of what you learnt in Session 1. Did you find the information in this Session useful? Why / why not?</p>
											</div>
											<div class="learnerjournal-point">
												<p><span></span></p>
												<p>Do you feel like you learnt something in Session 1? If yes, what? If no, why?</p>
											</div>
											<div class="learnerjournal-point">
												<p><span></span></p>
												<p>Do you feel confident in identifying the purpose and aims of a task?</p>
											</div>
											<div class="learnerjournal-point">
												<p><span></span></p>
												<p>Will this session change the way you have planned lessons in the past?</p>
											</div>
											<div class="learnerjournal-point">
												<p><span></span></p>
												<p>Is there any aspect of this topic you would like to explore further? Give details.</p>
											</div>
										</div>
									</div>
									<div class="card rounded10 mb-3">
										<div class="card-block">
											<div class="form-group mb-0">
												<textarea class="form-control" rows="10" placeholder="Write your answers here"></textarea>
												<i class="form-group__bar"></i>
											</div>
											<div class="row mt-3">
												<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center">
													<div class="btn-demo">
														<button type="button" class="btn btn-save waves-effect">Save</button>
													</div>
													<span class="notify-sucsess"><i class="zmdi zmdi-check"></i> Successfully Saved</span>
												</div>
												<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center">
													<div class="btn-demo">
														<button type="button" class="btn btn-save waves-effect">Submit</button>
													</div>
													<span class="notify-sucsess"><i class="zmdi zmdi-check"></i> Successfully Submitted</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="theoryb" role="tabpanel">
									<div class="card rounded15 box-shadow">
										<div class="card-block">
											<div class="row pb-3">
												<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 word-record-assessment">
													<p>1) How many teacher ‘roles’ does harmer discuss?</p>
													<div class="row mb-4 custom-radio-shape">
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-radio">
																<input type="radio" name="q1" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">3</span>
															</label>
														</div>
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-radio">
																<input type="radio" name="q1" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">5</span>
															</label>
														</div>
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-radio">
																<input type="radio" name="q1" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">10</span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<div class="row pb-3">
												<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 word-record-assessment">
													<p>2) Which role brings together a ‘Prompter ’ and a ‘Resource’?</p>
													<div class="row mb-4 custom-radio-shape">
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-radio">
																<input type="radio" name="q2" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Controller</span>
															</label>
														</div>
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-radio">
																<input type="radio" name="q2" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Assessor</span>
															</label>
														</div>
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-radio">
																<input type="radio" name="q2" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Tutor</span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<div class="row pb-3">
												<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 word-record-assessment">
													<p>3) What do many ‘Controllers’ find with this role?</p>
													<div class="row mb-4 custom-radio-shape">
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-radio">
																<input type="radio" name="q3" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">That they are very comfortable with that role</span>
															</label>
														</div>
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-radio">
																<input type="radio" name="q3" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">That they like to change it from this role</span>
															</label>
														</div>
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-radio">
																<input type="radio" name="q3" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">That is it a vital role</span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<div class="row pb-3">
												<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 word-record-assessment">
													<p class="mb-1">4) Select 3 things from below you should consider when lesson planning.</p>
													<p class="pl-3 ml-1 mb-2">Aims & Objectives, ILP, Learner Profile, Timing, Register, Breakfast, Warmer</p>
													<div class="row mb-4">
														<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
															<div class="listview__item p-0">
																<label class="custom-control">1 -</label>
																<div class="listview__content">
																	<div class="form-group mb-0">
																		<input type="text" class="form-control form-control-sm">
																		<i class="form-group__bar"></i>
																	</div>
																</div>
															</div>
															<div class="listview__item p-0">
																<label class="custom-control">2 -</label>
																<div class="listview__content">
																	<div class="form-group mb-0">
																		<input type="text" class="form-control form-control-sm">
																		<i class="form-group__bar"></i>
																	</div>
																</div>
															</div>
															<div class="listview__item p-0">
																<label class="custom-control">3 -</label>
																<div class="listview__content">
																	<div class="form-group mb-0">
																		<input type="text" class="form-control form-control-sm">
																		<i class="form-group__bar"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center">
													<div class="btn-demo">
														<button type="button" class="btn btn-save waves-effect">Save</button>
													</div>
													<span class="notify-sucsess"><i class="zmdi zmdi-check"></i> Successfully Saved</span>
												</div>
												<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center">
													<div class="btn-demo">
														<button type="button" class="btn btn-save waves-effect">Submit</button>
													</div>
													<span class="notify-sucsess"><i class="zmdi zmdi-check"></i> Successfully Submitted</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="assessment" role="tabpanel">
									<div class="card rounded15 box-shadow">
										<div class="card-block">
											<div class="row pb-3">
												<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 word-record-assessment">
													<p>1) How many teacher ‘roles’ does harmer discuss?</p>
													<div class="row mb-4 custom-radio-shape">
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-radio">
																<input type="radio" name="q1" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">3</span>
															</label>
														</div>
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-radio">
																<input type="radio" name="q1" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">5</span>
															</label>
														</div>
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-radio">
																<input type="radio" name="q1" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">10</span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<div class="row pb-3">
												<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 word-record-assessment">
													<p>2) Which role brings together a ‘Prompter ’ and a ‘Resource’?</p>
													<div class="row mb-4 custom-radio-shape">
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-radio">
																<input type="radio" name="q2" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Controller</span>
															</label>
														</div>
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-radio">
																<input type="radio" name="q2" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Assessor</span>
															</label>
														</div>
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-radio">
																<input type="radio" name="q2" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">Tutor</span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<div class="row pb-3">
												<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 word-record-assessment">
													<p>3) What do many ‘Controllers’ find with this role?</p>
													<div class="row mb-4 custom-radio-shape">
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-radio">
																<input type="radio" name="q3" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">That they are very comfortable with that role</span>
															</label>
														</div>
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-radio">
																<input type="radio" name="q3" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">That they like to change it from this role</span>
															</label>
														</div>
														<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
															<label class="custom-control custom-radio">
																<input type="radio" name="q3" class="custom-control-input">
																<span class="custom-control-indicator"></span>
																<span class="custom-control-description">That is it a vital role</span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<div class="row pb-3">
												<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 word-record-assessment">
													<p class="mb-1">4) Select 3 things from below you should consider when lesson planning.</p>
													<p class="pl-3 ml-1 mb-2">Aims & Objectives, ILP, Learner Profile, Timing, Register, Breakfast, Warmer</p>
													<div class="row mb-4">
														<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
															<div class="listview__item p-0">
																<label class="custom-control">1 -</label>
																<div class="listview__content">
																	<div class="form-group mb-0">
																		<input type="text" class="form-control form-control-sm">
																		<i class="form-group__bar"></i>
																	</div>
																</div>
															</div>
															<div class="listview__item p-0">
																<label class="custom-control">2 -</label>
																<div class="listview__content">
																	<div class="form-group mb-0">
																		<input type="text" class="form-control form-control-sm">
																		<i class="form-group__bar"></i>
																	</div>
																</div>
															</div>
															<div class="listview__item p-0">
																<label class="custom-control">3 -</label>
																<div class="listview__content">
																	<div class="form-group mb-0">
																		<input type="text" class="form-control form-control-sm">
																		<i class="form-group__bar"></i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center">
													<div class="btn-demo">
														<button type="button" class="btn btn-save waves-effect">Save</button>
													</div>
													<span class="notify-sucsess"><i class="zmdi zmdi-check"></i> Successfully Saved</span>
												</div>
												<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center">
													<div class="btn-demo">
														<button type="button" class="btn btn-save waves-effect">Submit</button>
													</div>
													<span class="notify-sucsess"><i class="zmdi zmdi-check"></i> Successfully Submitted</span>
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
		</main>

@stop	

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.4/select2.css">  
@stop	
@section('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.4/select2.js"></script>
<script type="text/javascript" src="{{ asset('js/trainer/custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/trainer/ninja-slider.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/trainer/thumbnail-slider.js') }}"></script>

<script type="text/javascript">
		$(document).ready(function(){
			$('#trainer').select2();

			$('#savenote').click(function(){
				var note = $('#note').val();
				commonSave("note_manual",note);
			});
			$('#savenotes').click(function(){
				var note = $('#note_s').val();
				commonSave("note",note);
			})

		});	
		function commonSave(note_type,note){
			var loginData   = {
					sessionId: $('#sessionId').val(),
					note: note,
					note_type: note_type,
					ppt_id: $('#ppt_id').val(),
					api:"add_ppt_note",
				}
				$.ajax({
				url: url + "teacher/addnote",
				type: 'post',
				dataType: 'json',
				contentType: 'application/json',
				success: function (data) {
				   console.log(data);
				},
				data: JSON.stringify(loginData),
				headers: {
				    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
				});
		}
		$(document).on('change','.select2',function(){
			location.href = "?id="+$(this).val();
		});

		
</script>
@stop	