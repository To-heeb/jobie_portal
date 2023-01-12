@extends('layouts.employer')

@section('content')
    <div class="container-fluid">
		<div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/employer/dahboard">Home</a></li>/
				<li class="breadcrumb-item active"><a href="">Create Company</a></li>
			</ol>
		</div>
		<!-- row -->
		<div class="row">
			<div class="col-xl-12 col-xxl-12">
				<div class="card">
					<div class="card-header">
						<div>
							<h4 class="card-title">Create Company</h4>
							<p><span class="text-danger">*</span> stands for required</p>
						</div>
						
					</div>

					
					<div class="card-body">
						<form action="/employer/company/store" method="POST" enctype="multipart/form-data" id="create_company_form">
							@csrf
							<div id="smartwizard" class="form-wizard order-create">
								
								<ul class="nav nav-wizard">
									{{-- <li><a class="nav-link" href="#wizard_Service"> 
										<span>1</span> 
									</a></li> --}}
									<li><a class="nav-link" href="#wizard_info">
										<span>1</span>
									</a></li>
									
									<li><a class="nav-link" href="#wizard_links">
										<span>2</span>
									</a></li>
									<li><a class="nav-link" href="#wizard_industry_details">
										<span>3</span>
									</a></li>
									<li><a class="nav-link" href="#wizard_company_details">
										<span>4</span>
									</a></li>
								</ul>
								<div class="tab-content">
									<div id="wizard_info" class="tab-pane" role="tabpanel">
										<div class="row">
											<div class="alert alert-danger mb-3" id="info-error" role="alert"  style="display: none;">
												Please fill all compulsory fields before moving to the next step
											</div>
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">Company Name <span class="text-danger">*</span></label>
													<input type="text" name="name" class="form-control info-step" value="{{old('name')}}" placeholder="Cellophane Square" >
												</div>
												@error('name')
													<p class="text-danger fs-6" >{{ $message }}</p>
												@enderror
											</div>
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">Company Email Address <span class="text-danger">*</span></label>
													<input type="email" class="form-control info-step" name="email" value="{{old('email')}}" placeholder="example@example.com" >
													
												</div>
												@error('email')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
											</div>
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">Company Phone Number <span class="text-danger">*</span></label>
													<input type="text" name="phone_number" class="form-control info-step" value="{{old('phone_number')}}"  placeholder="(+1)408-657-9007" required>
												</div>
												@error('phone_number')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
											</div>
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">Country <span class="text-danger">*</span></label>
													<select class="default-select form-control wide mb-3 info-step" name="country" required>
														<option value="">Select Country</option>
														<option value="Nigeria" @if(old('country') == "Nigeria") selected @endif >Nigeria</option>
														<option value="Ghana" @if(old('country') == "Ghana") selected @endif >Ghana</option>
													</select>
												</div>
												@error('country')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
											</div>
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">State <span class="text-danger">*</span></label>
													<select class="default-select form-control wide mb-3 info-step" name="state" required>
														<option value="">Select State</option>
														<option value="Lagos" @if(old('state') == "Lagos") selected @endif >Lagos</option>
														<option value="Ogun" @if(old('state') == "Ogun") selected @endif>Ogun</option>
													</select>
												</div>
												@error('state')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
											</div>
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">City <span class="text-danger">*</span></label>
													<select class="default form-control wide mb-3 info-step" name="city" required>
														<option value="">Select City</option>
														<option value="Ikeja" @if(old('city') == "Ikeja") selected @endif >Ikeja</option>
														<option value="Abeokuta" @if(old('city') == "Abeokuta") selected @endif >Abeokuta</option>
													</select>
												</div>
												@error('city')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
											</div>
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">Address <span class="text-danger">*</span></label>
													<input type="text" name="address" class="form-control info-step" value="{{old('address')}}" placeholder="" required>
												</div>
												@error('address')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
											</div>
										</div>
									</div>
									<div id="wizard_links" class="tab-pane" role="tabpanel">
										<div class="row">
											<div class="alert alert-danger mb-3" id="links-error" role="alert"  style="display: none;">
												Please fill all compulsory fields before moving to the next step
											</div>
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">Website Link <span class="text-danger">*</span></label>
													<input type="url" name="website_link" class="form-control links-step" value="{{old('website_link')}}" placeholder="http://example.com" required>
												</div>
												@error('website_link')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
											</div>
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">Twitter Link </span></label>
													<input type="url" name="twitter_link" class="form-control" value="{{old('twitter_link')}}" placeholder="http://twitter.com/example">
												</div>
												@error('twitter_link')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
											</div>
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">Facebook Link </span></label>
													<input type="url" name="facebook_link" class="form-control" value="{{old('facebook_link')}}" placeholder="http://facebook.com/example">
												</div>
												@error('facebook_link')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
											</div>
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">Instagram Link </span></label>
													<input type="url" name="instagram_link" class="form-control" placeholder="http://facebook.com/example">
												</div>
												@error('instagram_link')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
											</div>
										</div>
									</div>
									<div id="wizard_industry_details" class="tab-pane" role="tabpanel">
										<div class="row">
											<div class="alert alert-danger mb-3" id="industry-details-error" role="alert"  style="display: none;">
												Please fill all compulsory fields before moving to the next step
											</div>
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">Industry <span class="text-danger">*</span></label>
													<select class="default-select form-control wide mb-3 industry-details-step" name="industry_id" required>
														<option value="">Select Industry</option>
														@foreach ($industries as $industry)
															<option value="{{ $industry->id }}" @if($industry->id == old('industry')) selected @endif>{{ $industry->name }}</option>
														@endforeach
													</select>
												</div>
												@error('industry')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
											</div>
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">Employer type <span class="text-danger">*</span></label>
													<select class="default-select form-control wide mb-3 industry-details-step" name="employer_type" id="employer_type" required>
														<option value="">Select employer type</option>
														<option value="employee"  @if(old('employer_type') == "employee") selected @endif >Employee</option>
														<option value="recruiter"  @if(old('employer_type')  == "recruiter") selected @endif>Recruiter</option>
													</select>
												</div>
												@error('employer_type')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
											</div>
											<div class="col-lg-6 mb-2" id="position_in_company_div" >
												<div class="form-group">
													<label class="text-label">Your position in Company <span class="text-danger">*</span></label>
													<input type="text" name="position_in_company" id="position_in_company" class="form-control industry-details-step" >	
												</div>
												@error('position_in_company')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
											</div>
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">Number of Employees <span class="text-danger">*</span></label>
													<select class="default-select form-control wide mb-3 industry-details-step" name="no_of_employees" required>
														<option value="">Select employee strength</option>
														<option value="1 - 4" @if(old('no_of_employees') == "1 - 4") selected @endif>1 - 4</option>
														<option value="5 - 10" @if(old('no_of_employees') == "5 - 10") selected @endif>5 - 10</option>
														<option value="11 - 25" @if(old('no_of_employees') == "11 - 25") selected @endif>11 - 25</option>
														<option value="26 - 50" @if(old('no_of_employees') == "26 - 50") selected @endif>26 - 50</option>
														<option value="51 - 100" @if(old('no_of_employees') == "51 - 100") selected @endif>51 - 100</option>
														<option value="101 - 200" @if(old('no_of_employees') == "101 - 200") selected @endif>101 - 200</option>
														<option value="201 - 500" @if(old('no_of_employees') == "201 - 500") selected @endif>201 - 500</option>
														<option value="501 - 1000" @if(old('no_of_employees') == "501 - 1000") selected @endif>501 - 1000</option>
														<option value="1001+" @if(old('no_of_employees') == "1001+") selected @endif>1001+</option>
													</select>
												</div>
												@error('no_of_employees')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
											</div>
											
										</div>
									</div>
									<div id="wizard_company_details" class="tab-pane" role="tabpanel">
										<div class="row emial-setup">
											<div class="alert alert-danger mb-3" id="company-details-error" role="alert"  style="display: none;">
												Please fill all compulsory fields before moving to the next step
											</div>
											<div class="col-lg-12 mb-2">
												<div class="form-group">
													<label class="text-label">About Company <span class="text-danger">*</span></label>
													<textarea id="ckeditor" name="about" class="company-details-step">{{old('about')}}</textarea>
												</div>
												@error('about')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
											</div>
											<div class="col-lg-12 mb-2">
												<div class="form-group">
													<label class="text-label">Company Logo <span class="text-danger">*</span></label>
													<div class="input-group mb-3">
														<button class="btn btn-primary btn-sm" type="button">Button</button>
														<div class="form-file">
															<input type="file" name="company_logo" class="form-file-input form-control company-details-step" accept="image/*">
														</div>
													</div>
													@error('company_logo')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
												</div>
											</div>
										</div>

										<div class="col-lg-12 mb-2">
											<button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
											<p style="clear: both"></p>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script');
<script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/decoupled-document/ckeditor.js"></script>
<script src="https://cdn.tiny.cloud/1/nwn241m8p8fyxf4m834j6okt29kjcp4dt4ga5szmz70ssq3o/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function(){
			document.querySelector("#position_in_company_div").style.display = 'none';

			// SmartWizard initialize
			$('#smartwizard').smartWizard(); 

			$('#smartwizard').smartWizard("reset");
			
			document.getElementById('create_company_form').reset();

			tinymce.init({
				selector: '#ckeditor'
			});


			const selectElement = document.querySelector('#employer_type');
			selectElement.addEventListener('change', (event) => {
				//alert(event.target.value);
				if (event.target.value === 'employee') {
					document.querySelector("#position_in_company_div").style.display = 'block';	
					document.querySelector("#position_in_company").classList.add("required","industry-details-step")
					
				}else{
					document.querySelector("#position_in_company_div").style.display = 'none';
					document.querySelector("#position_in_company").classList.remove("required","industry-details-step")
					
				}
			});

			// document.addEventListener('#employer_type').change(function(this){
			// 	alert(this).)
			// })
			//$("#position_in_company_div").

		$(function() {

			// Leave step event is used for validating the forms
			$("#smartwizard").on("leaveStep", function(e, anchorObject, currentStepIdx, nextStepIdx, stepDirection) {

			
				// Validate only on forward movement  
				if (stepDirection == 'forward') {

					// Validate  each step here
					if(currentStepIdx == 0) {

						var elements = document.querySelectorAll(".info-step");
						var info_error = document.querySelector("#info-error");
						var status = true;
						console.log(elements);
						elements.forEach(function (element) {
							if(element.value == ''){
								
								status = false;
								//info_error.style.display = 'block';
								//wizard_height.setAttribute("style","height:695px");
								Swal.fire({
									icon: 'error',
									title: 'Oops...',
									text: "Please fill all required fields before moving to the next step",
									showConfirmButton: false,
									timer: 1800
                            	})
								e.preventDefault();
								e.stopPropagation();
								return false;
							}
						})

						if(status){
							info_error.style.display = 'none';
						}
					}

					if(currentStepIdx == 1) {

						var elements = document.querySelectorAll(".links-step");
						var links_error = document.querySelector("#links-error");
						var status = true;
						//console.log(elements);
						elements.forEach(function (element) {
							if(element.value == ''){
								
								status = false;
								//links_error.style.display = 'block';
								//wizard_height.setAttribute("style","height:695px");
								Swal.fire({
									icon: 'error',
									title: 'Oops...',
									text: "Please fill all required fields before moving to the next step",
									showConfirmButton: false,
									timer: 1800
                            	})
								e.preventDefault();
								e.stopPropagation();
								return false;
							}
						})

						if(status){
							links_error.style.display = 'none';
						}
					}

					if(currentStepIdx == 2) {

						var elements = document.querySelectorAll(".industry-details-step");
						var industry_details_error = document.querySelector("#industry-details-error");
						var status = true;
						console.log(elements);
						elements.forEach(function (element) {
							if(element.value == ''){
								
								status = false;
								//links_error.style.display = 'block';
								//wizard_height.setAttribute("style","height:695px");
								Swal.fire({
									icon: 'error',
									title: 'Oops...',
									text: "Please fill all required fields before moving to the next step",
									showConfirmButton: false,
									timer: 1800
                            	})
								e.preventDefault();
								e.stopPropagation();
								return false;
							}
						})

						if(status){
							industry_details_error.style.display = 'none';
						}
					}
					
				}
			});

		})
	});
</script>
@endsection