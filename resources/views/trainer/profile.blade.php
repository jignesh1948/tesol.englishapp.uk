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
							<h1 class="page__title">Profile</h1>
						</div>
						<div class="col-sm-12 col-md-7 col-lg-6 col-xl-6">
						</div>
					</div>
					<div class="actions hidden-sm-down">
						<img class="logo__img_right" src="{{asset('/images/trainer/header-logo/IEUK-text-logo.png')}}" alt="logo right">
					</div>
				</header>

				<div class="row mt-5 mr-3">
					<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
						<div class="card rounded20">
							<div class="card-block">
								<div class="card-block-title mb-4">
									<h4>Organisation Details</h4>
								</div>
								<div class="card-block-details profile-details">
									<h6>{{$profileList['org_name']}}</h6>
									<h6>{{$profileList['org_email']}}</h6>
									<h6>{{$profileList['org_mobile']}}</h6>
								</div>
								<div class="card-block-title mt-4">
									<h4>Training Programme</h4>
								</div>
								<div class="card-block-details profile-details">
									<h6>{{$profileList['training_rogramme']}}</h6>
								</div>
								<div class="card-block-title mt-4">
									<h4>Registered Group(s)</h4>
								</div>
								<div class="card-block-details profile-details">
									<h6>Batch 1, Batch 1, Batch 1, Batch 1, Batch 1,Batch 1, Batch 1, Batch 1, Batch 1, Batch 1,</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
						<div class="card rounded20">
							<div class="card-block edit-details">
								<div class="card-block-title mb-4">
									<h4>Your Details</h4>
								</div>
								<div class="row mb-4">
									<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
										<span class="fname-class">{{$profileList['first_name']}}</span>
										<div class="form-group mb-0 collapse fname-text">
											<input type="text" class="form-control text-light-blue" value="{{$profileList['first_name']}}" id="fname">
											<i class="form-group__bar"></i>
										</div>
									</div>
									<div class="col-3 col-md-sm col-md-3 col-lg-3 col-xl-3 text-right edit-fname">
										<a href="javascript:void(0)" class="a-theme saveFnameEdit">Edit</a>
										<a href="javascript:void(0)" class="btn btn-save prof-save2 collapse savefname">Save</a>
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
										<span class="lname-class">{{$profileList['last_name']}}</span>
										<div class="form-group mb-0 collapse fname lname-text">
											<input type="text" class="form-control text-light-blue" value="{{$profileList['last_name']}}"  id="lname">
											<i class="form-group__bar"></i>
											<!-- <button class="btn btn-info btn-sm savelname">Save</button> -->
										</div>
									</div>
									<div class="col-3 col-md-sm col-md-3 col-lg-3 col-xl-3 text-right edit-lname">
										<a href="javascript:void(0)" class="a-theme saveLnameEdit">Edit</a>
										<a href="javascript:void(0)" class="btn btn-save prof-save2 collapse savelname">Save</a>
									</div>
								</div>
								<div class="row mb-4">
									<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
										<span>{{$profileList['email']}}</span>
									</div>
									
								</div>
								<div class="row mb-4">
									<div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
										<span class="phone-class">{{trim($profileList['contact_number'])}}</span>
										<div class="form-group mb-0 collapse phone-text">
											<input type="text" class="form-control text-light-blue" value="{{$profileList['contact_number']}}
											" id="phone">
											<i class="form-group__bar"></i>
											<!-- <button class="btn btn-info btn-sm savephone">Save</button> -->
										</div>
									</div>
									<div class="col-3 col-md-sm col-md-3 col-lg-3 col-xl-3 text-right edit-phone">
										<a href="javascript:void(0)" class="a-theme savePhoneEdit">Edit</a>
										<a href="javascript:void(0)" class="btn btn-save prof-save2 collapse savephone">Save</a>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" id="commonError" style="display: none;">
									<span class="notify-sucsess" id="errormsg"> Successfully Saved</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
						<div class="card rounded20">
							<div class="card-block pass-change">
								<div class="card-block-title mb-4">
									<h4>Create a new password</h4>
								</div>
								<h6 class="sub__title mb-3">Current Password</h6>
								<div class="form-group">
									<input type="password" id="old-password" class="form-control" placeholder="Enter old password">
									<i class="form-group__bar"></i>
								</div>
								<h6 class="sub__title mb-3">New Password</h6>
								<div class="form-group mb-3">
									<input type="password" id="new-password" class="form-control" placeholder="Enter new password">
									<i class="form-group__bar"></i>
								</div>
								<div class="form-group">
									<input type="password" id="re-password" class="form-control" placeholder="Retype new password">
									<i class="form-group__bar"></i>
								</div>
								<div class="btn-demo text-center">
									<button type="button" class="btn btn-save waves-effect password_change">Save</button>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" id="passwordError" style="display: none;">
									<span class="notify-sucsess" id="passmsg"> Successfully Saved</span>
								</div>
							</div>
						</div>
						<h6 class="text-center mb-5">View <a href="#" id="terms_condition_open">Terms & Conditions</a> and <a href="#" id="privacy-policy">Privacy Policy</a></h6>
					</div>
				</div>
			</section>

			<div class="modal fade" id="privacy_policy" tabindex="-1">
				<div class="modal-dialog modal-lg">
					<div class="modal-content rounded15">
						@include('privacy-policy')
						<!-- <div class="modal-body text-center">Terms and Conditions will be display here!</div>
						<div class="modal-footer">
							<div class="row">
								<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
									<button type="button" class="btn btn-save" data-dismiss="modal">Ok</button>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
			<div class="modal fade" id="terms_condition" tabindex="-1">
				<div class="modal-dialog modal-lg">
					<div class="modal-content rounded15">
						@include('terms')
						<!-- <div class="modal-body text-center">Terms and Conditions will be display here!</div>
						<div class="modal-footer">
							<div class="row">
								<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
									<button type="button" class="btn btn-save" data-dismiss="modal">Ok</button>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>

		</main>

	


@stop	

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.4/select2.css">  
@stop	
@section('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.4/select2.js"></script>


<script type="text/javascript">
		var isPassword = false;
		$(document).ready(function(){
			$('#terms_condition_open').click(function(){
				$('#terms_condition').modal('show')
			});
			$('#privacy-policy').click(function(){
				$('#privacy_policy').modal('show')
			});
			
			$('.saveFnameEdit').click(function(){
				fadeIN('fname-text');
				fadeOUT('fname-class');
				$(this).css('display','none');
				$('.savefname').css('display','block');
			});
			$('.saveLnameEdit').click(function(){
				fadeIN('lname-text');
				fadeOUT('lname-class');
				$(this).css('display','none');
				$('.savelname').css('display','block');
			});
			$('.savePhoneEdit').click(function(){
				fadeIN('phone-text');
				fadeOUT('phone-class');
				$(this).css('display','none');
				$('.savephone').css('display','block');
			});

			$('.password_change').click(function(){
				var old_password 	= $('#old-password').val();
				var new_password 	= $('#new-password').val();
				var re_password 	= $('#re-password').val();
				var fname 			= $('#fname').val();
				var lname 			= $('#lname').val();
				var phone 			= $('#phone').val();
				if(old_password == ""){
					$('#passwordError').fadeIn();
					$('#passmsg').text("Please enter old password");
					$('#passmsg').css("color","red");
					return false;
				}
				if(new_password == ""){
					$('#passwordError').fadeIn();
					$('#passmsg').text("Please enter new password");
					$('#passmsg').css("color","red");
					return false;
				}
				if(old_password == new_password){
					$('#passwordError').fadeIn();
					$('#passmsg').text("New password can not be same with old password");
					$('#passmsg').css("color","red");
					return false;
				}
				if(new_password != re_password){
					$('#passwordError').fadeIn();
					$('#passmsg').text("Re-password not match with new password.");
					$('#passmsg').css("color","red");
					return false;
				}
				var data = new Array();
				data['old_password'] = old_password;
				data['new_password'] = new_password;
				data['first_name'] = fname;
				data['last_name'] = lname;
				data['contact_number'] = phone;
				data['api'] = "edit_tesol_profile";
				data['flag'] = "password";
				var newdata = Object.assign({}, data);
				isPassword = true;
				editProfile(newdata);
				
			});
			$('.savefname').click(function(){
				if($('#fname').val()==""){
					$('#commonError').fadeIn();
					$('#errormsg').text("Please enter first name");
					$('#errormsg').css("color","red");
					return false;
				}
				var fname 			= $('#fname').val();
				var lname 			= $('#lname').val();
				var phone 			= $('#phone').val();
				commonEditProfile();
				fadeOUT('fname-text');
				fadeIN('fname-class');
				$('.fname-class').text(fname);
				commonTextChange("First name added Successfully")

				$('.saveFnameEdit').css('display','block');
				$('.savefname').css('display','none');
			});
			$('.savelname').click(function(){
				if($('#lname').val()==""){
					$('#commonError').fadeIn();
					$('#errormsg').text("Please enter last name");
					$('#errormsg').css("color","red");
					return false;
				}
				var fname 			= $('#fname').val();
				var lname 			= $('#lname').val();
				var phone 			= $('#phone').val();
				commonEditProfile();
				fadeOUT('lname-text');
				fadeIN('lname-class');
				$('.lname-class').text(lname);
				commonTextChange("Last name added Successfully")
				$('.saveLnameEdit').css('display','block');
				$('.savelname').css('display','none');
			});

			$('.savephone').click(function(){
				if($('#phone').val()==""){
					$('#commonError').fadeIn();
					$('#errormsg').text("Please enter phone number");
					$('#errormsg').css("color","red");
					return false;
				}
				var fname 			= $('#fname').val();
				var lname 			= $('#lname').val();
				var phone 			= $('#phone').val();
				commonEditProfile();
				fadeOUT('phone-text');
				fadeIN('phone-class');
				$('.phone-class').text(phone);
				commonTextChange("Phone added Successfully")
				$('.savePhoneEdit').css('display','block');
				$('.savephone').css('display','none');
			});
		});	
		function commonTextChange(msg){
			$('#commonError').fadeIn();
			$('#errormsg').text(msg);
			$('#errormsg').css("color","green");
			fadeoutmsg();
		}
		function fadeoutmsg(){
			setTimeout(function(){
				$('#commonError').fadeOut();
			},3000)

		}
		function commonEditProfile(){
			var fname 			= $('#fname').val();
			var lname 			= $('#lname').val();
			var phone 			= $('#phone').val();
			var data = new Array();
			data['first_name'] = fname;
			data['last_name'] = lname;
			data['contact_number'] = phone;
			data['flag'] = "profile";
			data['api'] = "edit_tesol_profile";
			var newdata = Object.assign({}, data);
			editProfile(newdata);
		}
		function fadeIN(selector){		
			$('.'+selector).css("display","block");
		}
		function fadeOUT(selector){
			$('.'+selector).css("display","none");
		}
		function editProfile(data){
			var loginData   = data
			$.ajax({
				url: url + "trainer/editprofile",
				type: 'post',
				dataType: 'json',
				contentType: 'application/json',
				success: function (data) {
					if(isPassword){
						
						if(data.success){
							$('#passwordError').fadeIn();
							$('#passmsg').text("Password Successfully updated.");
							$('#passmsg').css("color","green");
							$('#old-password').val("");
							$('#new-password').val("");
							$('#re-password').val("");
							setTimeout(function(){
								$('#passwordError').fadeOut();
							},3000);
						}else{
							$('#passwordError').fadeIn();
							$('#passmsg').text(data.message);
							$('#passmsg').css("color","red");
							return false;
						}
					}
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