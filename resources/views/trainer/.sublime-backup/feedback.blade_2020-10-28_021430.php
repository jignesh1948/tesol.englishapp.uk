@extends('layout.trainer_layout')
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
					<div class="row mb-3">
						<div class="col-sm-12 col-md-7 col-lg-6 col-xl-6">
							<h1 class="page__title">Feedback</h1>
						</div>
						<div class="col-sm-12 col-md-7 col-lg-6 col-xl-6">
						</div>
					</div>
					<div class="row">
						
						<div class="col-sm-6 col-md-5 col-lg-4 col-xl-4">
							<div class="custom-select-dropdown">
								<select>
									@foreach(session::get('group')[0] as $group)
										<option>{{$group['group_name']}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-sm-12 col-md-7 col-lg-6 col-xl-6">
						</div>
					</div>
					<div class="actions hidden-sm-down">
						<img class="logo__img_right" src="{{asset('/images/trainer/header-logo/IEUK-text-logo.png')}}" alt="logo right">
					</div>
				</header>
				<div class="row">
					<div class="col-sm-12 col-md-10 col-lg-10 col-xl-10">
						<div class="tab-container tab-container-heading">
							<ul class="nav nav-tabs nav-tabs-header" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#training-feedback" role="tab">Training Feedback</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#teacher-feedback-report" role="tab">Teacher Feedback Report</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active fade show" id="training-feedback" role="tabpanel">
									<div class="card rounded20 box-shadow">
										<div class="card-block">
											<form>
											<div class="row">
												<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
													<div class="row mb-3 hidden-sm-down">
														<div class="col-sm-12 col-md-7 col-lg-8 col-xl-9">
															<label class="feedback-question"></label>
														</div>
														<div class="col-sm-12 col-md-5 col-lg-4 col-xl-3">
															<div class="row feedback-icon">
																<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 p-0 text-center">
																	<label class="custom-control custom-radio bold-label">Disagree</label>
																</div>
																<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
																<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
																<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 p-0 text-center">
																	<label class="custom-control custom-radio bold-label">Agree</label>
																</div>
															</div>
														</div>
													</div>
													@foreach($getFeedBack['result'] as $key=>$feedbackQue)
														@if($feedbackQue['question_type'] == "emoji")
															<div class="row mb-3 emojiparent" data="{{$feedbackQue['_id']}}">
																<div class="col-sm-12 col-md-7 col-lg-8 col-xl-9">
																	<label class="feedback-question">{{$feedbackQue['question']}}</label>
																</div>
																<div class="col-sm-12 col-md-5 col-lg-4 col-xl-3">
																	<div class="row feedback-icon" id="feedback_icon_parent_{{$key}}" data="{{$key}}">
																		
																		<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center <?php echo $feedbackQue['answer_pos']==1?"Active":"" ?>" data="0">
																			<label class="custom-control custom-radio" id="parent_{{$key}}">
																				<input type="radio" name="radio-inline" id="q1-1" class="custom-control-input" >
																				@if($feedbackQue['answer_pos']==1)
																					<img src="/images/trainer/emoji/11.png" class="q1-1" width="20">
																				@else
																					<img src="/images/trainer/emoji/1.png" class="q1-1" width="20">
																				@endif
																			</label>
																		</div>
																		
																		<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center <?php echo $feedbackQue['answer_pos']==2?"Active":"" ?>"  data="1">
																			<label class="custom-control custom-radio" id="parent1_{{$key}}">
																				<input type="radio" name="radio-inline" id="q1-2" class="custom-control-input">

																				<input type="radio" name="radio-inline" id="q1-1" class="custom-control-input" >
																				@if($feedbackQue['answer_pos']==1)
																					<img src="/images/trainer/emoji/22.png" class="q1-2" width="20">
																				@else
																					<img src="/images/trainer/emoji/2.png" class="q1-2" width="20">
																				@endif

																				
																			</label>
																		</div>
																		
																		<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center <?php echo $feedbackQue['answer_pos']==3?"Active":"" ?>" data="2">
																			<label class="custom-control custom-radio" id="parent2_{{$key}}">
																				<input type="radio" name="radio-inline" id="q1-3" class="custom-control-input">
																				@if($feedbackQue['answer_pos']==1)
																					<img src="/images/trainer/emoji/33.png" class="q1-3" width="20">
																				@else
																					<img src="/images/trainer/emoji/3.png" class="q1-3" width="20">
																				@endif
																			
																			</label>
																		</div>

																		<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center <?php echo $feedbackQue['answer_pos']==4?"Active":"" ?>" data="3">
																			<label class="custom-control custom-radio" id="parent3_{{$key}}">
																				<input type="radio" name="radio-inline" id="q1-4" class="custom-control-input">
																				@if($feedbackQue['answer_pos']==1)
																					<img src="/images/trainer/emoji/44.png" class="q1-4" width="20">
																				@else
																					<img src="/images/trainer/emoji/4.png" class="q1-4" width="20">
																				@endif
																			
																			</label>
																		</div>

																	</div>
																</div>
															</div>	
														@endif
													@endforeach

													@foreach($getFeedBack['result'] as $key=>$feedbackQue)
														@if($feedbackQue['question_type'] == "text_box")										
															<div class="row mb-3">
																<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
																	<input type="hidden" value="{{$feedbackQue['_id']}}" id="add_id">
																	<label class="feedback-question">{{$feedbackQue['question']}}</label>
																</div>
																<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
																	<div class="form-group rounded10 textarea-box-shadow mb-0">
																		<textarea class="form-control scrollbar-inner" rows="5" placeholder="Write something here .........." id="additional"></textarea>
																		<i class="form-group__bar"></i>
																	</div>
																</div>
															</div>
															@endif
													@endforeach
													<div class="btn-demo text-center">
														<button type="button" class="btn btn-save waves-effect submit">Submit</button>
													</div>
												</div>
											</div>
											</form>
										</div>
									</div>
								</div>
								
								<div class="tab-pane fade" id="teacher-feedback-report" role="tabpanel">
									<div class="card rounded20 box-shadow">
										<div class="card-block">
										@if(!is_null($getFeedBackTrainer))
											<form>
											<div class="row">
												<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

													@foreach($getFeedBackTrainer['result'] as $key=>$feedback)
														@if($feedback['question_type'] == "emoji")	
															<div class="row">
																<div class="col-sm-12 col-md-6 col-lg-7 col-xl-7">
																	<label class="feedback-question">{{$feedback['question']}}</label>
																</div>

																<div class="col-sm-12 col-md-6 col-lg-5 col-xl-5">
																	<div class="feedback-icon-fix">
																		<label class="custom-control custom-radio">
																			<input type="radio" name="radio-inline" class="custom-control-input">

																			<img src="/images/trainer/emoji/11.png" width="20">

																			<span class="custom-control-description">{{$feedback['ans_pos_0']}}</span>
																		</label>
																		<label class="custom-control custom-radio">
																			<input type="radio" name="radio-inline" class="custom-control-input">
																			<img src="/images/trainer/emoji/22.png" width="20">
																			<span class="custom-control-description">{{$feedback['ans_pos_1']}}</span>
																		</label>
																		<label class="custom-control custom-radio">
																			<input type="radio" name="radio-inline" class="custom-control-input">
																			<img src="/images/trainer/emoji/33.png" width="20">
																			<span class="custom-control-description">{{$feedback['ans_pos_2']}}</span>
																		</label>
																		<label class="custom-control custom-radio">
																			<input type="radio" name="radio-inline" class="custom-control-input">
																			<img src="/images/trainer/emoji/44.png" width="20">
																			<span class="custom-control-description">{{$feedback['ans_pos_3']}}</span>
																		</label>
																	</div>
																</div>
															</div>
														@endif
													@endforeach
													
													
													@foreach($getFeedBackTrainer['result'] as $key=>$feedback)
														@if($feedback['question_type'] == "text_box")	
															<div class="row mb-3 tfr-comment-block">
																<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
																	<div class="form-group rounded10 textarea-box-shadow mb-0 pb-3">
																		<h5>View additional comments and suggestions</h5>
																		<span class="scrollbar-inner">
																			@foreach($feedback['text_box'] as $key=>$text)
																				<div class="additional_comments_view">
																					<p><span></span></p>
																					<p>
																						{{$text}}
																					</p>
																				</div>
																			@endforeach
																		</span>
																	</div>
																</div>
															</div>
														@endif
													@endforeach

												</div>
											</div>
											</form>
											@else
												<h2>No found teacher feedback Report.</h2>
											@endif
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
@section('scripts')
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/custom.select.js') }}"></script>
<script type="text/javascript">
		function fadeIN(selector){
			$('.'+selector).css("display","block");
		}
		function fadeOUT(selector){
			$('.'+selector).css("display","none");
		}
		function editProfile(data){
			var loginData   = data
				$.ajax({
				url: url + "editprofile",
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
		function commonSave(note_type,note){
			var loginData   = {
					sessionId: $('#sessionId').val(),
					note: note,
					note_type: note_type,
					ppt_id: $('#ppt_id').val(),
					api:"add_ppt_note",
				}
				$.ajax({
				url: url + "trainer/addnote",
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

		function removeActive(dataid){

			$('#feedback_icon_parent_'+dataid).children().removeClass("active");
			$('#feedback_icon_parent_'+dataid).children().removeClass("active");
			$('#feedback_icon_parent_'+dataid).children().removeClass("active");
			$('#feedback_icon_parent_'+dataid).children().removeClass("active");
		}
		$(document).on('change','.select2',function(){
			location.href = "?id="+$(this).val();
		});

		$('.q1-1').click(function(){
			var topParent = $(this).parent().parent().parent().attr("id");
			var dataid = $(this).parent().parent().parent().attr("data");
			removeActive(dataid);
			var id = $(this).parent().attr("id");
			$(this).parent().parent().addClass("active");
			$('#'+id+' .q1-1').attr('src','/images/trainer/emoji/11.png');
			$('#'+topParent+' #parent1_'+dataid+' .q1-2').attr('src','/images/trainer/emoji/2.png');
			$('#'+topParent+' #parent2_'+dataid+' .q1-3').attr('src','/images/trainer/emoji/3.png');
			$('#'+topParent+' #parent3_'+dataid+' .q1-4').attr('src','/images/trainer/emoji/4.png');
		});
		$('.q1-2').click(function(){
			var topParent = $(this).parent().parent().parent().attr("id");
			var dataid = $(this).parent().parent().parent().attr("data");
			removeActive(dataid);
			var id = $(this).parent().attr("id");
			$('#'+id+' .q1-2').attr('src','/images/trainer/emoji/22.png');
			$(this).parent().parent().addClass("active");
			$('#'+topParent+' #parent_'+dataid+' .q1-1').attr('src','/images/trainer/emoji/1.png');
			$('#'+topParent+' #parent2_'+dataid+' .q1-3').attr('src','/images/trainer/emoji/3.png');
			$('#'+topParent+' #parent3_'+dataid+' .q1-4').attr('src','/images/trainer/emoji/4.png');
		});
		$('.q1-3').click(function(){
			var topParent = $(this).parent().parent().parent().attr("id");
			var dataid = $(this).parent().parent().parent().attr("data");
			removeActive(dataid);

			var id = $(this).parent().attr("id");
			$(this).parent().parent().addClass("active");
			$('#'+id+' .q1-3').attr('src','/images/trainer/emoji/33.png');
			$('#'+topParent+' #parent_'+dataid+' .q1-1').attr('src','/images/trainer/emoji/1.png');
			$('#'+topParent+' #parent1_'+dataid+' .q1-2').attr('src','/images/trainer/emoji/2.png');
			$('#'+topParent+' #parent3_'+dataid+' .q1-4').attr('src','/images/trainer/emoji/4.png');
		});
		$('.q1-4').click(function(){
			var topParent = $(this).parent().parent().parent().attr("id");
			var dataid = $(this).parent().parent().parent().attr("data");
			removeActive(dataid);

			var id = $(this).parent().attr("id");
			$(this).parent().parent().addClass("active");
			$('#'+id+' .q1-4').attr('src','/images/trainer/emoji/44.png');
			$('#'+topParent+' #parent_'+dataid+' .q1-1').attr('src','/images/trainer/emoji/1.png');
			$('#'+topParent+' #parent1_'+dataid+' .q1-2').attr('src','/images/trainer/emoji/2.png');
			$('#'+topParent+' #parent2_'+dataid+' .q1-3').attr('src','/images/trainer/emoji/3.png');
		});

		$('.submit').click(function(){
			var hash = [];
			var i=0;
			var objects = {};
			$('.emojiparent').each(function(){
				if(i==0){
					objects = {answer_pos: 0,question_id:$('#add_id').val(),answer:$('#additional').val()};
				}else{
					objects = {answer_pos: $(this).find(".active").attr("data"),question_id:$(this).attr("data"),answer:"good"};
				}
				hash.push(objects);
				i++;
			});
			$.ajax({
				url: url + "trainer/addfeedback",
				type: 'post',
				dataType: 'json',
				contentType: 'application/json',
				success: function (data) {
				   console.log(data);
				},
				data: JSON.stringify(hash),
				headers: {
				    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			console.log(objects);
		});
</script>
@stop	