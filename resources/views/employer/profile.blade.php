@extends('layouts.employer')
@section('page_title', 'Profile')
@section('content')
    <div class="container-fluid">
		<x-flash-message />
		<!-- row -->
        <div class="row">
			<div class="col-xl-9 col-xxl-8 col-lg-12">
				<div class="row">
					<div class="col-xl-12">
						<div class="card profile-card">
							<div class="card-header flex-wrap border-0 pb-0">
								<h3 class="fs-24 text-black font-w600 me-auto mb-2 pe-3">Edit Profile</h3>
								
							</div>
							<div class="card-body">
								<form action="/employer/profile" class="needs-validation" novalidate method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
									<div class="mb-5">
										<div class="title mb-4"><span class="fs-18 text-black font-w600">Generals</span></div>
										<div class="row">
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" name="first_name" class="form-control" placeholder="Enter name" value="{{$employer->first_name}}" required>
													<div class="invalid-feedback">
														Please Enter Your First Name.
													</div>
                                                    @error('first_name')
                                                        <p class="text-danger fs-6">{{ $message }}</p>
                                                    @enderror
												</div>
											</div>
                                            <div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" name="last_name" class="form-control" placeholder="Last name" value="{{$employer->last_name}}" required>
													<div class="invalid-feedback">
														Please Enter Your Last Name.
													</div>
                                                    @error('last_name')
                                                        <p class="text-danger fs-6">{{ $message }}</p>
                                                    @enderror
												</div>
											</div>
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>Email</label>
													<input type="text" name="email" class="form-control" placeholder="Type here" value="{{$employer->email}}" required>
													<div class="invalid-feedback">
														Please Enter Your Email.
													</div>
                                                    @error('email')
                                                        <p class="text-danger fs-6">{{ $message }}</p>
                                                    @enderror
												</div>
											</div>
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>Profile Photo</label>
													<input type="file" class="form-file-input form-control" name="profile_photo">
													@error('profile_photo')
                                                        <p class="text-danger fs-6">{{ $message }}</p>
                                                    @enderror
												</div>
											</div>
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>Password</label>
													<input type="password" name="password" class="form-control" placeholder="Enter password">
                                                    @error('password')
                                                        <p class="text-danger fs-6">{{ $message }}</p>
                                                    @enderror
                                                </div>
											</div>
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>Re-Type Password</label>
													<input type="password" name="password_confirmation" class="form-control" placeholder="Enter password">
                                                    @error('password_confirmation')
                                                        <p class="text-danger fs-6">{{ $message }}</p>
                                                    @enderror
												</div>
											</div>
										</div>
									</div>
									{{-- <div class="mb-5">
										<div class="title mb-4"><span class="fs-18 text-black font-w600">CONTACT</span></div>
										<div class="row">
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>Profile Photo</label>
													<div class="input-group input-icon mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
														</div>
														<input type="text" name="phone_number" class="form-control" placeholder="Phone no." value="{{$employer->phone_number}}">
                                                        @error('phone_number')
                                                            <p class="text-danger fs-6">{{ $message }}</p>
                                                        @enderror
													</div>
												</div>
											</div>
										</div>
									</div> --}}
                                    <div class="d-sm-flex d-block">
                                        <input class="btn btn-primary btn-rounded me-3 mb-2" type="submit" value="Save Changes">
                                        <input class="btn btn-dark light btn-rounded mb-2" type="reset" value="Cancel">
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
									<img src="{{ asset('storage/'.auth()->user()->profile_photo)}}" class="rounded-circle" alt="">
								</div>
								<h4 class="fs-22 text-black mb-1">{{$employer->last_name.' '.$employer->first_name}}</h4>
								<p class="mb-4">Employer</p>
							</div>
							<div class="card-body  activity-card">
                                <div class="d-flex mb-3 align-items-center">
									<a class="contact-icon me-3" href="#"><i class="las la-envelope"></i></a>
									<span class="text-black text-wrap" style="width: 12rem;">{{$employer->email}}</span>
								</div>
								{{-- <div class="d-flex mb-3 align-items-center">
									<a class="contact-icon me-3" href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
									<span class="text-black">{{$employer->phone_number ?? "NULL"}}</span>
								</div> --}}
							</div>
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
        
		
    </script>
@endsection