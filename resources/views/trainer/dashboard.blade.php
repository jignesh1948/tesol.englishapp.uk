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
						<img class="logo__img_right" src="{{asset('/images/trainer/header-logo/IEUK-text-logo.png')}}" alt="logo right">
					</div>
				</header>
				<div class="row">
					<div class="col-sm-12 col-md-7 col-lg-6 col-xl-6">
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
								<input type="hidden" name="" value="{{$pptList['result'][0]['id']}}" id="ppt_id">
								<input type="hidden" name="" value="{{$sessionId}}" id="sessionId">
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
									<!-- <iframe width="100%" height="400" src="{{$pptList['result'][0]['ppt_video']}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
									<object data="{{$pptList['result'][0]['ppt_video']}}" width="100%" height="400"></object>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-5 col-lg-6 col-xl-6">
						<div class="tab-container tab-container-heading">
							<ul class="nav nav-tabs nav-tabs-header" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#trainernotes" role="tab">Trainer Notes</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#notes" role="tab">Notes</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active fade show" id="trainernotes" role="tabpanel">
									@if(isset($sessionNoteList['result']['trainer_manual_pdf'][0]))
										<iframe class="pdf-viewer-trainernotes" src="{{$sessionNoteList['result']['trainer_manual_pdf'][0]}}#pagemode=none" title="webviewer" frameborder="0" width="100%" height="330"></iframe>
									@endif
									<div class="card rounded10 mt-4 mb-3">
										<div class="card-block p-2">
											<div class="form-group mb-0">
												
												<textarea id="note" class="form-control" rows="3" placeholder="">{{$sessionNoteList['result']['trainer_manual_note'][0]['teacher_note']}}</textarea>
												<i class="form-group__bar"></i>
											</div>
										</div>
									</div>
									<div class="btn-demo text-center">
										<button type="button" class="btn btn-save waves-effect" id="savenote">Save</button>
										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" id="savenoteerror" style="display: none;">
											<span class="notify-sucsess"><i class="zmdi zmdi-check"></i> Successfully Saved</span>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="notes" role="tabpanel">
									<div class="card rounded10 mb-3">
										<div class="card-block p-2">
											<div class="form-group mb-0">
												<textarea class="form-control" rows="20" placeholder="" id="note_s">{{$sessionNoteList['result']['trainer_note'][0]['teacher_note']}}	</textarea>
												<i class="form-group__bar"></i>
											</div>
											
										</div>
									</div>
									<div class="btn-demo text-center">
										<button type="button" class="btn btn-save waves-effect" id="savenotes">Save</button>
										<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" id="savenoteserror" style="display: none;">
											<span class="notify-sucsess"><i class="zmdi zmdi-check"></i> Successfully Saved</span>
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
				url: url + "trainer/addnote",
				type: 'post',
				dataType: 'json',
				contentType: 'application/json',
				success: function (data) {
				   console.log(data);
				   if(note_type == "note_manual" ){
				   		$("#savenoteerror").fadeIn();
				   }else{

				   		$("#savenoteserror").fadeIn();
				   }
				   disaplyout();
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
		function disaplyout(){
			setTimeout(function(){
				   		$("#savenoteerror").fadeOut();
				   		$("#savenoteserror").fadeOut();

			},3000)
		}
		
</script>
@stop	