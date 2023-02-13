@extends('layouts.employer')
@section('page_title', 'Applications')
@section('content')
    <div class="container-fluid">
		<div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>/
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Applications</a></li>
			</ol>
		</div>
		
		<!-- row -->
        <div class="row">
            <div class="col-lg-12">
				<x-flash-message/>
			</div>

            <div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Applications</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive" >
                            <table class="table display mb-4 dataTablesCard table-responsive-xl card-table" style="min-width: 845px" id="example5">
                                <thead>
                                    <tr>
                                        <th>No</th>
										<th>Photo</th>
                                        <th>Name</th>
                                        <th>Date Applied</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="edit_delete_td">
                                    @foreach ($applications as $application)	
                                        <tr>
                                            <td>{{$loop->iteration }}</td>
											<td> <img src="" alt="{{strtolower($application->user->last_name."_".$application->user->first_name."'s image")}}"> </td>
                                            <td>{{$application->user->last_name." ".$application->user->first_name}}</td>
                                            <td>{{ date("F j, Y", strtotime($application->created_at))}}</td>
                                            <td>
                                                <div class="d-flex"> 
                                                    <a href="#" class="btn btn-sm btn-primary sharp shadow me-4" data-bs-toggle="modal" data-bs-target=".view-profile-modal" data-id="{{$application->user->id}}">View Profile</a>
                                                    <a href="" class="btn btn-sm btn-secondary sharp shadow me-4" data-bs-toggle="modal" data-bs-target=".view-document-modal" data-cover-letter="" data-resume="">View Document(s)</a>
                                                    <a href="#" class="btn btn-sm sharp shadow btn-danger sweet-confirm" data-id="{{$application->id}}">Status</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>        
						</div>
					</div>
				</div>
			</div>

			<!-- View Profile Modal -->
			<div class="modal fade view-profile-modal" tabindex="-1" role="dialog" aria-hidden="true" id="view_profile_modal">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title"><b id="">View Employer</b></h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal">
							</button>
						</div>
						<div class="modal-body">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xl-9 col-xxl-8 col-lg-12">
										<div class="row">
											<div class="col-xl-12">
												<div class="card profile-card">
													<div class="card-body">
														<form>
															<div class="mb-5">
																<div class="title mb-4"><span class="fs-18 text-black font-w600">Generals</span></div>
																<div class="row">
																	<div class="col-xl-4 col-sm-6">
																		<div class="form-group">
																			<label>First Name</label>
																			<p id="first_name">First name</p>
																		</div>
																	</div>
																	<div class="col-xl-4 col-sm-6">
																		<div class="form-group">
																			<label>Middle Name</label>
																			<p id="middle_name">Middle Name</p>
																		</div>
																	</div>
																	<div class="col-xl-4 col-sm-6">
																		<div class="form-group">
																			<label>Last Name</label>
																			<p id="last_name">Last Name</p>
																		</div>
																	</div>
																</div>
															</div>
															<div class="mb-5">
																<div class="title mb-4"><span class="fs-18 text-black font-w600">ADDRESS</span></div>
																<div class="row">
																	<div class="col-xl-4 col-sm-6">
																		<div class="form-group">
																			<label>Address</label>
																			<div class="input-group">
																				<div class="input-group-prepend">
																					<span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt" aria-hidden="true"></i></span>
																				</div>
																				<p id="address"></p>
																			</div>
																		</div>
																	</div>
																	<div class="col-xl-4 col-sm-6">
																		<div class="form-group">
																			<label>City</label>
																			<p id="city"></p>
																		</div>
																	</div>
																	<div class="col-xl-4 col-sm-6">
																		<div class="form-group">
																			<label>Country</label>
																			<p id="country"></p>
																		</div>
																	</div>
																</div>
															</div>
															<div class="mb-5">
																<div class="title mb-4"><span class="fs-18 text-black font-w600">About</span></div>
																<div class="row">
																	<div class="col-xl-12">
																		<div class="form-group">
																			{{-- <label>Tell About You</label> --}}
																			<textarea class="form-control" rows="6" id="about" readonly>
																			</textarea>
																		</div>
																	</div>
																</div>
															</div>
															<div>
																<div class="title mb-4"><span class="fs-18 text-black font-w600">SKILLS</span></div>
																<div class="row">
																	<div class="col-xl-6" id="skills">
																		
																	</div>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-xxl-4 col-lg-12">
										<div class="row">
											<div class="col-xl-12 col-lg-6">
												<div class="card  flex-lg-column flex-md-row ">
													<div class="card-body card-body  text-center border-bottom profile-bx">
														<div class="profile-image mb-4">
															<img src="public/assets/images/avatar/1.jpg" class="rounded-circle" alt="">
														</div>
														<h4 class="fs-22 text-black mb-1" id="full_name">Oda Dink</h4>
														<p class="mb-4" id="headline"></p>
													</div>
													<div class="card-body  activity-card">
														<div class="d-flex mb-3 align-items-center">
															<a class="contact-icon me-3" href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
															<span class="text-black" id="phone_number"></span>
														</div>
														<div class="d-flex mb-3 align-items-center">
															<a class="contact-icon me-3" href="#"><i class="las la-envelope"></i></a>
															<span class="text-black text-wrap" style="width: 12rem;"id="email">info@example.com</span>
														</div>
														{{-- <div class="row text-center mt-2 mt-md-5">
															<div class="col-4 p-0">
																<div class="d-inline-block mb-2 relative donut-chart-sale">
																	<span class="donut" data-peity='{ "fill": ["rgb(255, 142, 38)", "rgba(236, 236, 236, 1)"],   "innerRadius": 27, "radius": 10}'>7/9</span>
																	<small class="text-black">66%</small>
																</div>
																<span class="d-block">PHP</span>
															</div>
															<div class="col-4 p-0">
																<div class="d-inline-block mb-2 relative donut-chart-sale">
																	<span class="donut" data-peity='{ "fill": ["rgb(62, 168, 52)", "rgba(236, 236, 236, 1)"],   "innerRadius": 27, "radius": 10}'>4/9</span>
																	<small class="text-black">31%</small>
																</div>
																<span class="d-block">Vue</span>
															</div>
															<div class="col-4 p-0">
																<div class="d-inline-block mb-2 relative donut-chart-sale">
																	<span class="donut" data-peity='{ "fill": ["rgb(34, 172, 147)", "rgba(236, 236, 236, 1)"],   "innerRadius": 27, "radius": 10}'>2/9</span>
																	<small class="text-black">7%</small>
																</div>
																<span class="d-block">Laravel</span>
															</div>
														</div> --}}
													</div>
												</div>
											</div>
											<div class="col-xl-12 col-lg-6">
												<div class="card">	
													<div class="card-header border-0 pb-0">
														<h4 class="fs-20 text-black">Portfolios</h4>
													</div>
													<div class="card-body portfolios-card">
														<div class="d-flex mb-3 align-items-center rounded">
															<svg class="me-3 min-w50" width="50" height="50" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect width="49" height="49" rx="18" fill="#3D6AD6"/>
																<path d="M22.7047 25.2398C22.6293 25.2398 21.0484 25.2403 20.3193 25.2396C19.9439 25.2394 19.81 25.1045 19.81 24.7267C19.8095 23.7564 19.8093 22.7861 19.81 21.8158C19.8103 21.4428 19.9519 21.3005 20.3224 21.3002C21.0515 21.2998 22.6238 21.3 22.7047 21.3C22.7047 21.2335 22.7044 19.8326 22.7047 19.1875C22.7051 18.2338 22.8753 17.3208 23.3599 16.4849C23.8559 15.6293 24.5779 15.0432 25.5031 14.7043C26.0956 14.4871 26.7107 14.4005 27.3395 14.4C28.1263 14.3995 28.913 14.4002 29.6999 14.4017C30.0381 14.4022 30.1881 14.5517 30.1888 14.8922C30.1903 15.805 30.1903 16.7177 30.1888 17.6302C30.1883 17.9743 30.0446 18.1126 29.6987 18.1164C29.0539 18.1234 28.4085 18.119 27.7643 18.145C27.1137 18.145 26.7715 18.4627 26.7715 19.1362C26.7559 19.8485 26.765 20.5615 26.765 21.2998C26.8259 21.2998 28.6775 21.2995 29.543 21.2998C29.9361 21.2998 30.0705 21.4349 30.0705 21.8302C30.0705 22.7952 30.0703 23.7605 30.0695 24.7255C30.0693 25.115 29.9431 25.2394 29.5475 25.2396C28.6821 25.2401 26.8377 25.2398 26.7571 25.2398V33.0506C26.7571 33.467 26.626 33.5998 26.2151 33.5998C25.2134 33.5998 24.2114 33.6 23.2096 33.5998C22.8465 33.5998 22.7049 33.4586 22.7049 33.0955C22.7047 30.5518 22.7047 25.3291 22.7047 25.2398Z" fill="white"/>
															</svg>
															<span class="font-w500">/davidheree.porto</span>
														</div>
														<div class="d-flex mb-3 align-items-center rounded">
															<svg class="me-3 min-w50" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect width="50" height="50" rx="18" fill="#EA518D"/>
																<path d="M28.4575 25.3758C29.4183 27.8067 30.1319 30.3093 30.5955 32.866C31.2569 32.4627 31.8751 31.9783 32.4371 31.4165C33.8964 29.9569 34.8383 28.1177 35.1711 26.1218C33.7375 25.5286 32.1672 25.2005 30.5215 25.2005C29.8179 25.2005 29.1285 25.261 28.4575 25.3758Z" fill="white"/>
																<path d="M32.4447 17.5714C32.4418 17.5687 32.4391 17.5658 32.4364 17.5631C30.5862 15.7129 28.1262 14.6939 25.5097 14.6939C24.4865 14.6939 23.4873 14.8504 22.5391 15.1509C24.0587 17.0549 25.3956 19.0869 26.5414 21.2344C28.7 20.3177 30.6881 19.0761 32.4447 17.5714Z" fill="white"/>
																<path d="M33.2143 18.4386C31.3717 20.0214 29.3123 21.3039 27.0718 22.2627C27.4021 22.9276 27.7141 23.6033 28.0085 24.289C28.8309 24.1325 29.6696 24.0526 30.5209 24.0526C32.1698 24.0526 33.7734 24.3492 35.2952 24.9328C35.3018 24.7856 35.3055 24.6379 35.3055 24.49C35.3055 22.2668 34.5698 20.1575 33.2143 18.4386V18.4386Z" fill="white"/>
																<path d="M19.4805 32.2117C21.1955 33.5564 23.2967 34.2857 25.5101 34.2857C26.917 34.2857 28.2784 33.9906 29.5242 33.4308C29.0572 30.7249 28.3095 28.1143 27.3121 25.6295C23.8453 26.5756 20.989 29.0155 19.4805 32.2117V32.2117Z" fill="white"/>
																<path d="M25.3247 25.1018C25.8284 24.8887 26.3422 24.708 26.8638 24.5596C26.5886 23.9292 26.2964 23.3077 25.9891 22.6949C23.3427 23.6775 20.5599 24.1756 17.7012 24.1756C17.0371 24.1756 16.3773 24.1482 15.7224 24.0948C15.7171 24.2258 15.7139 24.3576 15.7139 24.49C15.7139 27.1065 16.7329 29.5665 18.5831 31.4167C18.5836 31.4172 18.5843 31.418 18.5851 31.4184C19.225 30.1423 20.0618 28.9822 21.0815 27.9624C22.3073 26.7367 23.7348 25.7743 25.3247 25.1018V25.1018Z" fill="white"/>
																<path d="M25.4519 21.6637C24.2893 19.5108 22.9294 17.4796 21.3966 15.5941C20.3636 16.0726 19.4119 16.7341 18.583 17.5631C17.1008 19.0452 16.1526 20.9189 15.834 22.9509C16.4499 23.0013 17.0724 23.0275 17.7013 23.0275C20.4219 23.0273 23.0325 22.5458 25.4519 21.6637V21.6637Z" fill="white"/>
															</svg>
															<span class="font-w500">/david.drib</span>
														</div>
														<div class="d-flex mb-3 align-items-center rounded">
															<svg class="me-3 min-w50" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect width="50" height="50" rx="18" fill="#0073B1"/>
																<path d="M34.5948 33.6V33.5993H34.5996V26.5577C34.5996 23.113 33.858 20.4593 29.8308 20.4593C27.8948 20.4593 26.5956 21.5218 26.0652 22.5288H26.0093V20.7809H22.1909V33.5993H26.167V27.252C26.167 25.5809 26.4838 23.9647 28.5533 23.9647C30.5926 23.9647 30.6228 25.872 30.6228 27.359V33.6H34.5948Z" fill="white"/>
																<path d="M15.7168 20.7816H19.6977V33.6H15.7168V20.7816Z" fill="white"/>
																<path d="M17.7056 14.4C16.4326 14.4 15.3999 15.4327 15.3999 16.7057C15.3999 17.9786 16.4326 19.0329 17.7056 19.0329C18.9785 19.0329 20.0113 17.9786 20.0113 16.7057C20.0103 15.4327 18.9776 14.4 17.7056 14.4Z" fill="white"/>
															</svg>
															<span class="font-w500">/davidheree222</span>
														</div>
														<div class="d-flex mb-3 align-items-center rounded">
															<svg class="me-3 min-w50" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect width="50" height="50" rx="18" fill="#FF0000"/>
																<path d="M30.9677 17.1386H19.0321C17.0247 17.1386 15.3999 18.7658 15.3999 20.771V27.2292C15.3999 29.2342 17.0247 30.8614 19.0321 30.8614H30.9675C32.9751 30.8614 34.5999 29.2342 34.5999 27.229V20.771C34.5999 18.7658 32.9751 17.1386 30.9677 17.1386ZM22.4705 26.9434V21.0566L27.529 24.006L22.4705 26.9434Z" fill="white"/>
															</svg>
															<span class="font-w500">/davidhereechan</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

			{{-- View Document Modal --}}
			<div class="modal fade view-document-modal" tabindex="-1" role="dialog" aria-hidden="true" id="view_document_modal">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title"><b id="">View Employer</b></h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal">
							</button>
						</div>
						<div class="modal-body">
							<form class="needs-validation" novalidate action="/admin/industry" method="POST">
								@csrf
								@method('PUT')
								<div class="row">
									<div class="mb-3 col-md-6">
										<label class="form-label" for="industry_name_edit">Name</label>
										<input type="text" class="form-control" name="industry_name_edit" id="industry_name_edit" placeholder="" required>
										<input type="hidden" name="id" id="industry_id">
                                        <div class="invalid-feedback">
											Please Enter Industry Name.
										</div>
                                        @error('industry_name_edit')
										    <p class="text-danger fs-6">{{ $message }}</p>
									    @enderror
									</div>
								</div>
								
								<button type="submit" class="btn me-2 btn-primary">Submit</button>
							</form>	
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
@endsection

@section('script');
    <script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins-init/datatables.init.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins-init/jquery.validate-init.js') }}"></script>
	<script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
		
		$('#view_profile_modal').on('show.bs.modal', function(e) {

			var user_id = $(e.relatedTarget).data('id');
			var url = '{{  url("/employer/user/details/:id") }}';
			url = url.replace(':id', user_id);

			var first_name = document.querySelector("#first_name");
			var last_name = document.querySelector("#last_name");
			var email = document.querySelector("#email");
			var username = document.querySelector("#username");
			var phone_number = document.querySelector("#phone_number");
			var state = document.querySelector("#state");
			var city = document.querySelector("#city");
			var country = document.querySelector("#country");
			var address = document.querySelector("#address");
			var headline = document.querySelector("#headline");
			var full_name = document.querySelector("#full_name");
			var email_two = document.querySelector("#email_two");
			var about = document.querySelector("#about");
			var skills_div = document.querySelector("#skills");

			fetch(url)
			.then((response) => response.json())
			.then((user_details) => {
				console.log(user_details);
				
				var user = user_details.user;
				var skills = user_details.user.skills;

				first_name.innerHTML = user.first_name;
				last_name.innerHTML = user.last_name;
				email.innerHTML =  user.email;
				phone_number.innerHTML = user.phone_number;
				city.innerHTML = user.city;
				country.innerHTML = user.country;
				address.innerHTML = user.address;
				headline.innerHTML = user.headline;
				full_name.innerHTML = user.last_name+' '+user.first_name;
				about.innerHTML = user.about;
				

				var skill_output = "";

				skills.forEach((skill) =>{

					skill_output +=`<div class="media mb-4">
								<span class="text-primary progress-icon"><i class="fas fa-plus-circle fa-2x mt-3" aria-hidden="true"></i></span>
								<div class="media-body">
									<p class="font-w500">${skill.name}</p>
									<div class="progress skill-progress" style="height:10px;">
										<div class="progress-bar bg-primary progress-animated" style="width: 100%; height:10px;" role="progressbar">
											<span class="sr-only">100% Complete</span>
										</div>
									</div>
								</div>
							</div>`;
				})


				if(skill_output == ""){ 
					skills_div.innerHTML = '<div class="">No Skill listed yet</div>'
				}else{
					skills_div.innerHTML = skill_output
				}

			})
			.catch((error) => {
				console.log('Error:', error);
			})
		})

		$('#view_document_modal').on('show.bs.modal', function(e) {

			var user_id = $(e.relatedTarget).data('id');
			var url = '{{  url("/employer/user/details/:id") }}';
			url = url.replace(':id', user_id);			

			fetch(url)
			.then((response) => response.json())
			.then((user_details) => {
				console.log(user_details);
				

			})
			.catch((error) => {
				console.log('Error:', error);
			})
		})

		document.querySelector("#edit_delete_td").addEventListener('click', function (event) {
			 //alert(event.target.classList)
			 if(!event.target.classList.contains("sweet-confirm")) return false;
			 Swal.fire({
				title: 'What is the status?',
				text: "You won't be able to revert this!",
				icon: 'question',
				showCancelButton: true,
				showDenyButton: true,
				confirmButtonText: 'Accept',
				denyButtonText: 'Reject',
				}).then((result) => {
					// make ajax call here
				if (result.isConfirmed) {
					Swal.fire(
					'Deleted!',
					'Salary Range has been deleted.',
					'success'
					)
				}else if(result.isDenied){
					Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Something went wrong!',
					})
				}
			})
		})

    </script>
@endsection