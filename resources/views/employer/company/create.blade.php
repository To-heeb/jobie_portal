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
						<form action="/employer/company/store" method="POST" enctype="multipart/form-data">
							@csrf
							<div id="smartwizard" class="form-wizard order-create">
								<ul class="nav nav-wizard">
									{{-- <li><a class="nav-link" href="#wizard_Service"> 
										<span>1</span> 
									</a></li> --}}
									<li><a class="nav-link" href="#wizard_Info">
										<span>1</span>
									</a></li>
									
									<li><a class="nav-link" href="#wizard_Link">
										<span>2</span>
									</a></li>
									<li><a class="nav-link" href="#wizard_Details">
										<span>3</span>
									</a></li>
									<li><a class="nav-link" href="#wizard_Payment">
										<span>4</span>
									</a></li>
								</ul>
								<div class="tab-content">
									<div id="wizard_Info" class="tab-pane" role="tabpanel">
										<div class="row">
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">Company Name <span class="text-danger">*</span></label>
													<input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Cellophane Square" >
												</div>
												@error('name')
													<p class="text-danger fs-6" >{{ $message }}</p>
												@enderror
											</div>
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">Company Email Address <span class="text-danger">*</span></label>
													<input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="example@example.com" >
													
												</div>
												@error('email')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
											</div>
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">Company Phone Number <span class="text-danger">*</span></label>
													<input type="text" name="phone_number" class="form-control" value="{{old('phone_number')}}"  placeholder="(+1)408-657-9007" required>
												</div>
												@error('phone_number')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
											</div>
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">Country <span class="text-danger">*</span></label>
													<select class="default-select form-control wide mb-3" name="country" required>
														<option>Select Country</option>
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
													<select class="default-select form-control wide mb-3" name="state" required>
														<option>Select State</option>
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
													<select class="default form-control wide mb-3" name="city" required>
														<option>Select City</option>
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
													<input type="text" name="address" class="form-control" value="{{old('address')}}" placeholder="" required>
												</div>
												@error('address')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
											</div>
										</div>
									</div>
									<div id="wizard_Link" class="tab-pane" role="tabpanel">
										<div class="row">
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">Website Link <span class="text-danger">*</span></label>
													<input type="url" name="website_link" class="form-control" value="{{old('website_link')}}" placeholder="http://example.com" required>
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
									<div id="wizard_Details" class="tab-pane" role="tabpanel">
										<div class="row">
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">Industry <span class="text-danger">*</span></label>
													<select class="default-select form-control wide mb-3" name="industry_id" required>
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
													<select class="default-select form-control wide mb-3" name="employer_type" id="employer_type" required>
														<option >Select employer type</option>
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
													<input type="text" name="position_in_company" id="position_in_company" class="form-control" >	
												</div>
												@error('position_in_company')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
											</div>
											<div class="col-lg-6 mb-2">
												<div class="form-group">
													<label class="text-label">Number of Employees <span class="text-danger">*</span></label>
													<select class="default-select form-control wide mb-3" name="no_of_employees" required>
														<option selected="">Select employee strength</option>
														<option value="1" @if(old('no_of_employees') == 1) selected @endif>1-4</option>
														<option value="2" @if(old('no_of_employees') == 2) selected @endif>5-10</option>
														<option value="3" @if(old('no_of_employees') == 3) selected @endif>11-25</option>
														<option value="4" @if(old('no_of_employees') == 4) selected @endif>26-50</option>
														<option value="5" @if(old('no_of_employees') == 5) selected @endif>51-100</option>
														<option value="6" @if(old('no_of_employees') == 6) selected @endif>101-200</option>
														<option value="7" @if(old('no_of_employees') == 7) selected @endif>201-500</option>
														<option value="8" @if(old('no_of_employees') == 8) selected @endif>501-1000</option>
														<option value="9" @if(old('no_of_employees') == 9) selected @endif>1001+</option>
													</select>
												</div>
												@error('no_of_employees')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
											</div>
											
										</div>
									</div>
									<div id="wizard_Payment" class="tab-pane" role="tabpanel">
										<div class="row emial-setup">
											<div class="col-lg-12 mb-2">
												<div class="form-group">
													<label class="text-label">About Company <span class="text-danger">*</span></label>
													<textarea id="ckeditor" name="about">{{old('about')}}</textarea>
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
															<input type="file" name="company_logo" class="form-file-input form-control" accept="image/*">
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

<script>
    $(document).ready(function(){
			document.querySelector("#position_in_company_div").style.display = 'none';

			// SmartWizard initialize
			$('#smartwizard').smartWizard(); 
			tinymce.init({
				selector: '#ckeditor'
			});


			const selectElement = document.querySelector('#employer_type');
			selectElement.addEventListener('change', (event) => {
				//alert(event.target.value);
				if (event.target.value === 'employee') {
					document.querySelector("#position_in_company_div").style.display = 'block';	
					document.querySelector("#position_in_company").classList.add("required")
					
				}else{
					document.querySelector("#position_in_company_div").style.display = 'none';
					document.querySelector("#position_in_company").classList.remove("required")
					
				}
			});

			// document.addEventListener('#employer_type').change(function(this){
			// 	alert(this).)
			// })
			//$("#position_in_company_div").
	});
</script>
@endsection