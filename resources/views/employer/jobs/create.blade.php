@extends('layouts.employer')

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
						<form class="needs-validation" novalidate action="/employer/job/store" method="POST">
							<div class="row form-material">
								<div class="col-xl-3 col-xxl-12 col-md-6 mb-3">
									<label class="form-label" for="validationCustom01">Job Title</label>
									<input type="text" name="job_title" class="form-control" placeholder="" id="validationCustom01" required>
									<div class="invalid-feedback">
										Please Enter the Job Title.
									</div>
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="validationCustom02">Job Category</label>
									<input type="text" name="job_category" class="form-control" placeholder="" id="validationCustom02" required>
									<div class="invalid-feedback">
										Please Select the Job Category.
									</div>
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="validationCustom03">Job Industry</label>
									<input type="text" name="job_industry" class="form-control" placeholder="" id="validationCustom03" required>
									<div class="invalid-feedback">
										Please Select the Job Industry.
									</div>
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="validationCustom04">Job Type</label>
									<input name="job_type" class="form-control" placeholder="" required id="validationCustom04">
									<div class="invalid-feedback">
										Please Enter the Job Type.
									</div>
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6">
									<label class="form-label" for="validationCustom05">Job Status</label>
									<input type="text" name="job_status" class="form-control" placeholder="" id="validationCustom05" required>
									<div class="invalid-feedback">
										Please Select the Job Status.
									</div>
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="validationCustom05">Location Type</label>
									<input type="text" name="location_type" class="form-control" id="validationCustom06" placeholder="" required>
									<div class="invalid-feedback">
										Please Select the Location Type.
									</div>
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="validationCustom07">Job Tags</label>
									<input type="text" name="job_tags" class="form-control" id="validationCustom07" placeholder="php, css, laravel, html" required>
									<div class="invalid-feedback">
										Please Enter a username.
									</div>
								</div>
								
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="validationCustom08">Salary Range</label>
									<input type="text" name="salary range" class="form-control" placeholder="" id="validationCustom08" required>
									<div class="invalid-feedback">
										Please Select the Salary Range.
									</div>
								</div>

								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="validationCustom09">Salary Status</label>
									<select name="salary_status" class="default-select form-control wide" id="validationCustom09" required>
										<option>Select Salary Status</option>
										<option value="Public" @if(old('salary_status') == "Public") selected @endif >Public</option>
										<option value="Confidential" @if(old('salary_status') == "Confidential") selected @endif >Confidential</option>
									</select>
									<div class="invalid-feedback">
										Please Select the Salary Range Status.
									</div>
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
								</div>
								<div class="col-xl-3 col-xxl-12 col-md-6 mb-3">
									<label class="form-label">Job Description</label>
									<textarea id="ckeditor" class="form-control" name="job_description" required placeholder="The job description/requirements should accurately reflect the duties and responsibilities of the position. It helps give a realistic overview of the job and what is required from the candidate applying."></textarea>
									<div class="invalid-feedback">
										Please Enter the Job Description.
									</div>
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
					alert("The maximum number of custom questions is allowed 5")
					return false;
				}

				let title = prompt("Please enter custom field title:");
				if (title !== null || title !== "") {
					
					let field_input = `<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
											<label class="form-label">Custom Question ((number))</label>
											<input type="text" class="form-control custom-questions" id="" placeholder="${title}" name="question_((number))" readonly disabled>
									   </div>`;
					
					custom_question_template = field_input.replaceAll('((number))', custom_questions_length + 1);
					document.querySelector("#custom-sibling").insertAdjacentHTML('beforebegin', custom_question_template)
				} 
			});
			
		});
</script>
@endsection