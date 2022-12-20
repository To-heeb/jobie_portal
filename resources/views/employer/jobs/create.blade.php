@extends('layouts.employer')
@section('page_title', 'Create Job')
@section('content')
    <div class="container-fluid">
		<div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/employer/dahboard">Home</a></li>/
				<li class="breadcrumb-item active"><a href="">Add Job</a></li>
			</ol>
		</div>
		<!-- row -->
		<div class="row">
			{{-- <div class="col-xl-12 col-xxl-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Create Job</h4>
					</div>
					<div class="card-body">
						<div class="row">
						</div>
					</div>
				</div>
			</div> --}}
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Job Details</h4>
					</div>
					<div class="card-body">
						<form class="needs-validation" novalidate action="/employer/jobs/store" method="POST">
							@csrf
							<div class="row form-material">
								<div class="col-xl-3 col-xxl-12 col-md-6 mb-3">
									<label class="form-label" for="validationCustom01">Job Title</label>
									<input type="text" name="job_title" class="form-control" placeholder="" id="validationCustom01" required>
									<div class="invalid-feedback">
										Please Enter the Job Title.
									</div>
									@error('job_title')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="validationCustom02">Job Category</label>
									<input type="text" name="job_category" class="form-control" placeholder="" id="validationCustom02" required>
									<div class="invalid-feedback">
										Please Select the Job Category.
									</div>
									@error('job_category')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="validationCustom03">Job Sub-Category</label>
									<input type="text" name="job_sub_category" class="form-control" placeholder="" id="validationCustom03" required>
									<div class="invalid-feedback">
										Please Select the Job Industry.
									</div>
									@error('job_industry')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="validationCustom04">Job Type</label>
									<select name="job_type" class="form-select form-control" id="validationCustom04" required style="background: url(https://static.thenounproject.com/png/1720660-200.png) 99% / 15% no-repeat;">
										<option value="">Select Job Type</option>
										<option value="freelance" @if(old('job_type') == "freelance") selected @endif >Freelance</option>
										<option value="contract" @if(old('job_type') == "contract") selected @endif>Contract</option>
										<option value="fulltime" @if(old('job_type') == "fulltime") selected @endif>Fulltime</option>
										<option value="parttime" @if(old('job_type') == "parttime") selected @endif>Part-time</option>
									</select>
									<div class="invalid-feedback">
										Please Enter the Job Type.
									</div>
									@error('job_type')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6">
									<label class="form-label" for="validationCustom05">Job Status</label>	
									<select name="job_status" class="form-select form-control" id="validationCustom05" required style="background: url(https://static.thenounproject.com/png/1720660-200.png) 99% / 15% no-repeat;">
										<option value="">Select Job Status</option>
										<option value="pending" @if(old('job_status') == "pending") selected @endif >Pending</option>
										<option value="live" @if(old('job_status') == "live") selected @endif>Live</option>
									</select>
									<div class="invalid-feedback">
										Please Select the Job Status.
									</div>
									@error('job_status')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="validationCustom06">Location Type</label>
									<select name="location_type" class="form-select form-control" id="validationCustom06" required style="background: url(https://static.thenounproject.com/png/1720660-200.png) 99% / 15% no-repeat;">
										<option value="">Select Location Type</option>
										<option value="remote" @if(old('location_type') == "remote") selected @endif >Remote</option>
										<option value="on_site" @if(old('location_type') == "on_site") selected @endif>On site</option>
										<option value="hybrid" @if(old('location_type') == "hybrid") selected @endif>Hybrid</option>
									</select>
									<div class="invalid-feedback">
										Please Select the Location Type.
									</div>
									@error('location_type')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="validationCustom07">Job Tags</label>
									<input type="text" name="job_tags" class="form-control" id="validationCustom07" placeholder="php, css, laravel, html" required>
									<div class="invalid-feedback">
										Please Enter a username.
									</div>
									@error('job_tags')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="validationCustom10">Experience Level</label>
									<select name="level" class="form-select form-control" id="validationCustom10" required style="background: url(https://static.thenounproject.com/png/1720660-200.png) 99% / 15% no-repeat;">
										<option value="">Select Experience Level</option>
										<option value="internship" @if(old('level') == "internship") selected @endif>Internship</option>
										<option value="graduate_trainee" @if(old('level') == "graduate_trainee") selected @endif>Graduate trainee</option>
										<option value="entry_level" @if(old('level') == "entry_level") selected @endif >Entry level</option>
										<option value="mid_level" @if(old('level') == "mid_level") selected @endif>Mid level</option>
										<option value="mid_senior_level" @if(old('level') == "mid_senior_level") selected @endif>Mid senior level</option>
										<option value="senior" @if(old('level') == "senior") selected @endif>Senior</option>
										<option value="director" @if(old('level') == "director") selected @endif>Director</option>
										<option value="executive" @if(old('level') == "executive") selected @endif>Executive</option>
									</select>
									<div class="invalid-feedback">
										Please Select the Location Type.
									</div>
									@error('location_type')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="validationCustom08">Salary Range</label>
									<input type="text" name="salary_range" class="form-control" placeholder="" id="validationCustom08" required>
									<div class="invalid-feedback">
										Please Select the Salary Range.
									</div>
									@error('salary_range')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>

								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="validationCustom09">Salary Status</label>
									<select name="salary_status" class="form-select form-control" id="validationCustom09" required style="background: url(https://static.thenounproject.com/png/1720660-200.png) 99% / 15% no-repeat;">
										<option value="">Select Salary Status</option>
										<option value="Public" @if(old('salary_status') == "Public") selected @endif >Public</option>
										<option value="Confidential" @if(old('salary_status') == "Confidential") selected @endif >Confidential</option>
									</select>
									<div class="invalid-feedback">
										Please Select the Salary Range Status.
									</div>
									@error('salary_status')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>

								<div  id="custom-sibling"></div>
								<div class="col-lg-12 mb-2">
									<button type="button" class="btn btn-primary" id="add-custom-field-btn" style="float: right;">Add Custom Fields</button>
									<p style="clear: both"></p>
								</div>
								<div class="col-xl-3 col-xxl-12 col-md-6 mb-4">
									<label class="form-label" >Job Summary</label>
									<textarea name="job_summary" class="form-control" placeholder="The summary helps you attract the right candidate, only include the most important information to grab the attention of the job seekers. Keep it as short as possible." rows="3" required></textarea>
									<div class="invalid-feedback">
										Please Enter the Job Summary.
									</div>
									@error('job_summary')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-xl-3 col-xxl-12 col-md-6 mb-3">
									<label class="form-label">Job Description</label>
									<textarea id="ckeditor" class="form-control" name="job_description" required placeholder="The job description/requirements should accurately reflect the duties and responsibilities of the position. It helps give a realistic overview of the job and what is required from the candidate applying."></textarea>
									<div class="invalid-feedback">
										Please Enter the Job Description.
									</div>
									@error('job_description')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
							</div>
							<div class="col-lg-12 mb-2">
								<button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
								<p style="clear: both"></p>
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
			// SmartWizard initialize
			$('#smartwizard').smartWizard(); 
			tinymce.init({
				selector: '#ckeditor'
			});

			(function () {
				'use strict'

				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.querySelectorAll('.needs-validation')

				// Loop over them and prevent submission
				Array.prototype.slice.call(forms)
				.forEach(function (form) {
					form.addEventListener('submit', function (event) {
					if (!form.checkValidity()) {
						event.preventDefault()
						event.stopPropagation()
					}

					form.classList.add('was-validated')
					}, false)
				})
			})()

			
			document.querySelector('#add-custom-field-btn').addEventListener('click', (event) => {
				let custom_questions_length = document.querySelectorAll(".custom-questions").length;
				if(custom_questions_length >= 5){
					alert("The maximum number of custom questions allowed is 5")
					return false;
				}

				let title = prompt("Please enter custom question:");
				if (title !== null && title !== "") {
					
					let field_input = `<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
											<label class="form-label">Custom Question ((number))</label>
											<input type="text" class="form-control custom-questions" id="" name="question_((number))" value="${title}" readonly>
									   </div>`;
					
					custom_question_template = field_input.replaceAll('((number))', custom_questions_length + 1);
					document.querySelector("#custom-sibling").insertAdjacentHTML('beforebegin', custom_question_template)
				}else{
					alert("The custom question can't be empty");
				}
			});
			
		});
</script>
@endsection