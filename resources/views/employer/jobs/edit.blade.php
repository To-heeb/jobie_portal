@extends('layouts.employer')
@section('page_title', 'Edit Job')
@section('content')
    <div class="container-fluid">
		<div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/employer/dahboard">Home</a></li>/
				<li class="breadcrumb-item active"><a href="">Edit Job</a></li>
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
						<form class="needs-validation" novalidate action="/employer/jobs/{{$job_info->id}}" method="POST">
							@csrf
                            @method('PUT')
							<div class="row form-material">
								<div class="col-xl-3 col-xxl-12 col-md-6 mb-3">
									<label class="form-label" for="validationCustom01">Job Title</label>
									<input type="text" name="title" class="form-control" placeholder="" id="validationCustom01" value="{{ $job_info->title }}" required>
									<input type="hidden" name="company_id" value="{{ auth()->user()->company_id }}">
									<input type="hidden" name="id" value="{{ $job_info->id }}">
									<div class="invalid-feedback">
										Please Enter the Job Title.
									</div>
									@error('title')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="job_category_id">Job Category</label>
									<select name="job_category_id" id="job_category_id" class="form-select form-control" required style="background: url(https://static.thenounproject.com/png/1720660-200.png) 99% / 15% no-repeat;">
										<option value="">Select Job Category</option>
										@foreach ($job_categories as $job_category)
											<option value="{{ $job_category->id }}" @if($job_category->id == $job_info->job_category_id) selected @endif>{{ $job_category->name }}</option>
										@endforeach
									</select>
									<div class="invalid-feedback">
										Please Select the Job Category.
									</div>
									@error('job_category_id')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="job_sub_category_id">Job Sub-Category</label>
                                    <input type="hidden" name="" id="job_sub_category_id_js" value="{{ $job_info->job_sub_category_id }}">
									<select name="job_sub_category_id" id="job_sub_category_id" class="form-select form-control" required style="background: url(https://static.thenounproject.com/png/1720660-200.png) 99% / 15% no-repeat;">
										<option value="">Select Job Sub-Category</option>
									</select>
									<div class="invalid-feedback">
										Please Select the Job Sub-Category.
									</div>
									@error('job_sub_category_id')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="validationCustom04">Job Type</label>
									<select name="type" class="form-select form-control" id="validationCustom04" required style="background: url(https://static.thenounproject.com/png/1720660-200.png) 99% / 15% no-repeat;">
										<option value="">Select Job Type</option>
										<option value="freelance" @if($job_info->type  == "freelance") selected @endif >Freelance</option>
										<option value="contract" @if($job_info->type == "contract") selected @endif>Contract</option>
										<option value="fulltime" @if($job_info->type == "fulltime") selected @endif>Fulltime</option>
										<option value="parttime" @if($job_info->type == "parttime") selected @endif>Part-time</option>
									</select>
									<div class="invalid-feedback">
										Please Enter the Job Type.
									</div>
									@error('type')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6">
									<label class="form-label" for="validationCustom05">Job Status</label>	
									<select name="status" class="form-select form-control" id="validationCustom05" required style="background: url(https://static.thenounproject.com/png/1720660-200.png) 99% / 15% no-repeat;">
										<option value="">Select Job Status</option>
										<option value="pending" @if($job_info->status == "pending") selected @endif >Pending</option>
										<option value="live" @if($job_info->status == "live") selected @endif>Live</option>
									</select>
									<div class="invalid-feedback">
										Please Select the Job Status.
									</div>
									@error('status')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="validationCustom06">Location Type</label>
									<select name="location_type" class="form-select form-control" id="validationCustom06" required style="background: url(https://static.thenounproject.com/png/1720660-200.png) 99% / 15% no-repeat;">
										<option value="">Select Location Type</option>
										<option value="remote" @if($job_info->location_type == "remote") selected @endif >Remote</option>
										<option value="on_site" @if($job_info->location_type == "on_site") selected @endif>On site</option>
										<option value="hybrid" @if($job_info->location_type == "hybrid") selected @endif>Hybrid</option>
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
									<input type="text" name="tags" class="form-control" id="validationCustom07" placeholder="php, css, laravel, html" value="{{$job_info->tags}}" required>
									<div class="invalid-feedback">
										Please Enter a username.
									</div>
									@error('tags')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="validationCustom10">Experience Level</label>
									<select name="level" class="form-select form-control" id="validationCustom10" required style="background: url(https://static.thenounproject.com/png/1720660-200.png) 99% / 15% no-repeat;">
										<option value="">Select Experience Level</option>
										<option value="internship" @if($job_info->level == "internship") selected @endif>Internship</option>
										<option value="graduate_trainee" @if($job_info->level == "graduate_trainee") selected @endif>Graduate trainee</option>
										<option value="entry_level" @if($job_info->level == "entry_level") selected @endif >Entry level</option>
										<option value="mid_level" @if($job_info->level == "mid_level") selected @endif>Mid level</option>
										<option value="mid_senior_level" @if($job_info->level == "mid_senior_level") selected @endif>Mid senior level</option>
										<option value="senior" @if($job_info->level == "senior") selected @endif>Senior</option>
										<option value="director" @if($job_info->level == "director") selected @endif>Director</option>
										<option value="executive" @if($job_info->level == "executive") selected @endif>Executive</option>
									</select>
									<div class="invalid-feedback">
										Please Select the Location Type.
									</div>
									@error('level')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="salary_range_id">Salary Range</label>
									<select name="salary_range_id" id="salary_range_id" class="form-select form-control" required style="background: url(https://static.thenounproject.com/png/1720660-200.png) 99% / 15% no-repeat;">
										<option value="">Select Salary Range</option>
										@foreach ($salary_ranges as $salary_range)
											<option value="{{ $salary_range->id }}" @if($salary_range->id == $job_info->salary_range_id) selected @endif>{{ "₦".number_format($salary_range->start_range, 2, '.', ',').' - '.  "₦".number_format($salary_range->end_range, 2, '.', ',')}}</option>
										@endforeach
									</select>
									<div class="invalid-feedback">
										Please Select the Salary Range.
									</div>
									@error('salary_range_id')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label">Duration Range</label>
									<input class="form-control input-limit-datepicker" type="text" name="daterange" value="<?=  $job_info->start_range."-".$job_info->end_range ?>" required>
									<input type="hidden" name="start_range" id="start_range_id" value="{{$job_info->start_range}}">
									<input type="hidden" name="end_range" id="end_range_id" value="{{$job_info->end_range}}">
									<div class="invalid-feedback">
										Please Select the Duration Range.
									</div>
									@error('start_range')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
									@error('end_range')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="validationCustom09">Salary Status</label>
									<select name="salary_status" class="form-select form-control" id="validationCustom09" required style="background: url(https://static.thenounproject.com/png/1720660-200.png) 99% / 15% no-repeat;">
										<option value="">Select Salary Status</option>
										<option value="public" @if($job_info->salary_status == "public") selected @endif >Public</option>
										<option value="confidential" @if($job_info->salary_status == "confidential") selected @endif >Confidential</option>
									</select>
									<div class="invalid-feedback">
										Please Select the Salary Range Status.
									</div>
									@error('salary_status')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
									<label class="form-label" for="validationCustom10">Cover Letter Status</label>
									<select name="cover_letter_status" class="form-select form-control" id="validationCustom10" required style="background: url(https://static.thenounproject.com/png/1720660-200.png) 99% / 15% no-repeat;">
										<option value="">Select Cover Letter Status</option>
										<option value="yes" @if($job_info->cover_letter_status  == "yes") selected @endif >Required</option>
										<option value="no" @if($job_info->cover_letter_status  == "no") selected @endif >Not Required</option>
									</select>
									<div class="invalid-feedback">
										Please Select the Cover Letter Status.
									</div>
									@error('cover_letter_status')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								@php 
									if($job_info->custom_question):
										$custom_questions = json_decode($job_info->custom_question);
										@endphp
										@foreach($custom_questions as $custom_question)
								
											<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
												<label class="form-label">Custom Question {{$loop->iteration }}</label>
												<input type="text" class="form-control custom-questions" id="" name="custom_question[]" value="{{$custom_question}}" required>
												<div class="invalid-feedback">
													Please fill Custom Question {{$loop->iteration }} field.
												</div>
											</div>
								
										@endforeach
										@php
									endif;
								@endphp
								<div id="custom-sibling"></div>
								<div class="col-lg-12 mb-2">
									<button type="button" class="btn btn-primary" id="add-custom-field-btn" style="float: right;">Add Custom Fields</button>
									<p style="clear: both"></p>
								</div>
								<div class="col-xl-3 col-xxl-12 col-md-6 mb-4">
									<label class="form-label" >Job Summary</label>
									<textarea name="summary" class="form-control" placeholder="The summary helps you attract the right candidate, only include the most important information to grab the attention of the job seekers. Keep it as short as possible." rows="3" required>{{$job_info->summary}}</textarea>
									<div class="invalid-feedback">
										Please Enter the Job Summary.
									</div>
									@error('summary')
										<p class="text-danger fs-6">{{ $message }}</p>
									@enderror
								</div>
								<div class="col-xl-3 col-xxl-12 col-md-6 mb-3">
									<label class="form-label">Job Description</label>
									<textarea id="ckeditor" class="form-control" name="description" required placeholder="The job description/requirements should accurately reflect the duties and responsibilities of the position. It helps give a realistic overview of the job and what is required from the candidate applying.">{{$job_info->description}}</textarea>
									<div class="invalid-feedback">
										Please Enter the Job Description.
									</div>
									@error('description')
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
<script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
						Swal.fire(
						'Exceeded Limit',
						'The maximum number of custom questions allowed is 5',
						'warning'
						)
					return false;
				}

				

				Swal.fire({
					title: 'Please enter custom question',
					input: 'text',
					inputLabel: "Question "+(custom_questions_length+1),
					showCancelButton: true,
					inputValidator: (value) => {
						if (!value) {
							return 'You need to write something!'
						}else{
							let field_input = `<div class="col-xl-3 col-xxl-6 col-md-6 mb-3">
													<label class="form-label">Custom Question ((number))</label>
													<input type="text" class="form-control custom-questions" id="" name="custom_question[]" value="${value}" readonly>
												</div>`;
                
                            custom_question_template = field_input.replaceAll('((number))', custom_questions_length + 1);
                            document.querySelector("#custom-sibling").insertAdjacentHTML('beforebegin', custom_question_template)
						}
					}
				})
			});


            var job_category_id = document.querySelector("#job_category_id").value;
            var job_sub_category_id_js = document.querySelector("#job_sub_category_id_js").value;
            var job_sub_category_select = document.querySelector("#job_sub_category_id");
            var url = '{{  url("/employer/jobs/job_sub_categories/:id") }}';
				url = url.replace(':id', job_category_id);
            fetch(url)
            .then((response) => response.json())
            .then((sub_categories_data) => {
                //console.log(sub_categories_data)
                var output = "<option value=''>Select Job Sub-Category</option>";
               
                sub_categories_data.forEach((sub_category_data) =>{
                    var selected = (job_sub_category_id_js == sub_category_data.id) ? "selected" : ""; 
                    output +=`<option value="${sub_category_data.id}" ${selected}>${sub_category_data.name}</option>`;
                })
                job_sub_category_select.innerHTML = output;
            })
            .catch((error) => {
                console.log('Error:', error);
            })

			document.querySelector('#job_category_id').addEventListener('change', (event) => {

				var job_category_id = event.target.value;
				
				var url = '{{  url("/employer/jobs/job_sub_categories/:id") }}';
				url = url.replace(':id', job_category_id);

				var job_sub_category_select = document.querySelector("#job_sub_category_id")

				fetch(url)
				.then((response) => response.json())
				.then((sub_categories_data) => {
					//console.log(sub_categories_data)

					var output = "<option value=''>Select Job Sub-Category</option>";
					sub_categories_data.forEach((sub_category_data) =>{

						output +=`<option value="${sub_category_data.id}">${sub_category_data.name}</option>`;
					})
					job_sub_category_select.innerHTML = output;
					
				})
				.catch((error) => {
					console.log('Error:', error);
				})
				
			})

			document.querySelector('#job_sub_category_id').addEventListener('click', (event) => {
				var job_category_id = document.querySelector("#job_category_id")
				if(job_category_id.value === '') {

					Swal.fire({
						icon: 'error',
						title: 'Oops...',
						text: 'Please Select Job Category first',
					})
					return false
				}
			})


			$(function() {
				$('input[name="daterange"]').daterangepicker({
					opens: 'left'
				}, function(start, end, label) {
					var start_range = document.querySelector("#start_range_id")
					var end_range = document.querySelector("#end_range_id")
					start_range.value = start.format('YYYY-MM-DD');
					end_range.value = end.format('YYYY-MM-DD');
					console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
				});
			});
							
		});
</script>
@endsection