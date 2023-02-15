@extends('layouts.user')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-9 col-xxl-8 col-lg-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card profile-card">
                        <div class="card-header flex-wrap border-0 pb-0">
                            <h3 class="fs-24 text-black font-w600 me-auto mb-2 pe-3">Edit Profile</h3>
                        </div>
                        <div class="card-body">
                            <form action="/admin/profile" class="needs-validation" novalidate method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="d-sm-flex d-block mb-4">
                                    <div class="d-flex me-5 align-items-center">
                                        <div class="form-check custom-checkbox">
                                            <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                            <label class="form-check-label" for="customCheckBox1">Available for hire?</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <div class="title mb-4"><span class="fs-18 text-black font-w600">Generals</span></div>
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="first_name" class="form-control" placeholder="Enter name" value="{{$user->first_name}}">
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
                                                <input type="text" name="last_name" class="form-control" placeholder="Last name" value="{{$user->last_name}}">
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
                                                <input type="text" name="email" class="form-control" placeholder="Type here" value="{{$user->email}}">
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
                                <div class="mb-5">
                                    <div class="title mb-4"><span class="fs-18 text-black font-w600">CONTACT</span></div>
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <select class="form-control">
                                                    <option>London</option>
                                                    <option>United State</option>
                                                    <option>United Kingdom</option>
                                                    <option>Germany</option>
                                                    <option>Netherland</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select class="form-control">
                                                    <option>England</option>
                                                    <option>United State</option>
                                                    <option>United Kingdom</option>
                                                    <option>Germany</option>
                                                    <option>Netherland</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="title mb-4"><span class="fs-18 text-black font-w600">About me</span></div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label>Tell About You</label>
                                                <textarea class="form-control" rows="6">{{$user->about}}
                                                </textarea>
                                                <div class="invalid-feedback">
                                                    Please Enter Your First Name.
                                                </div>
                                                @error('about')
                                                    <p class="text-danger fs-6">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-sm-flex d-block">
                                    <input class="btn btn-primary btn-rounded me-3 mb-2" type="submit" value="Save Changes">
                                    <input class="btn btn-dark light btn-rounded mb-2" type="reset" value="Cancel">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card profile-card">
                        <div class="card-header flex-wrap border-0 pb-0">
                            <h3 class="fs-24 text-black font-w600 me-auto mb-2 pe-3">Experience</h3>
                            <a href="#" class="btn btn-sm btn-outline-primary"  data-bs-toggle="modal" data-bs-target=".add-experience-modal">Add Experience</a>
                        </div>	
                        <div class="card-body">
                            <div class="mb-2">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="media mb-4">
                                            <span class="text-primary progress-icon me-4"><i class="fas fa-building" style="font-size: 30px" aria-hidden="true"></i></span>
                                            <div class="media-body">
                                                <p class="font-w350">Programming</p>
                                                <p>2020 - 2022</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card profile-card">
                        <div class="card-header flex-wrap border-0 pb-0">
                            <h3 class="fs-24 text-black font-w600 me-auto mb-2 pe-3">Education</h3>
                            <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target=".add-education-modal">Add Education</a>
                        </div>
                        <div class="card-body">
                            <div class="mb-2">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="media mb-4">
                                            <span class="text-primary progress-icon me-4"><i class="fas fa-school" style="font-size: 30px" aria-hidden="true"></i></span>
                                            <div class="media-body">
                                                <p class="font-w350">Programming</p>
                                                <p><i class="fas fa-graduation-cap"  aria-hidden="true"></i> 2020 - 2022</p>
                                                <p><i class="fas fa-book-open"  aria-hidden="true"></i> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card profile-card">
                        <div class="card-header flex-wrap border-0 pb-0">
                            <h3 class="fs-24 text-black font-w600 me-auto mb-2 pe-3">Skills</h3>
                            <a href="#" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target=".add-skill-modal">Add Skill</a>
                        </div>
                        <div class="card-body">
                     
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
                            <h4 class="fs-22 text-black mb-1">Oda Dink</h4>
                            <p class="mb-4">Programmer</p>
                        </div>
                        <div class="card-body  activity-card">
                            <div class="d-flex mb-3 align-items-center">
                                <a class="contact-icon me-3" href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                                <span class="text-black">+50 123 456 7890</span>
                            </div>
                            <div class="d-flex mb-3 align-items-center">
                                <a class="contact-icon me-3" href="#"><i class="las la-envelope"></i></a>
                                <span class="text-black text-wrap" style="width: 12rem;">info@example.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-6">
                    <div class="card">	
                        <div class="card-header border-0 pb-0">
                            <h4 class="fs-20 text-black">Portofolios</h4>
                            <div class="dropdown float-right custom-dropdown mb-0">
                                <div class="" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                    <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                </div>
                            </div>
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

        {{-- Add Experience Modal --}}
        <div class="modal fade add-experience-modal" tabindex="-1" role="dialog" aria-hidden="true" id="add_experience_modal">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><b id="">Add Experience</b></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><span class="text-danger">*</span> Indicates required</p>
                        <form class="needs-validation" novalidate action="/user/experience" method="POST" id="add_experience_form">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please Enter Title.
                                    </div>
                                    @error('title')
                                        <p class="text-danger fs-6">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="employment_type">Employment type <span class="text-danger">*</span></label>
                                    <select style="background: url(https://static.thenounproject.com/png/1720660-200.png) 105% / 13% no-repeat;" name="employment_type" id="employment_type" class="form-control" required>
                                        <option value="">Please select</option>
                                          <option value="full-time">Full-time</option>
                                          <option value="part-time">Part-time</option>
                                          <option value="self-employed">Self-employed</option>
                                          <option value="freelance">Freelance</option>
                                          <option value="contract">Contract</option>
                                          <option value="internship">Internship</option>
                                          <option value="apprenticeship">Apprenticeship</option>
                                          <option value="seasonal">Seasonal</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please Select Employment type.
                                    </div>
                                    @error('employment_type')
                                        <p class="text-danger fs-6">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="company_name">Company Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="company_name" id="company_name" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please Enter Company Name.
                                    </div>
                                    @error('company_name')
                                        <p class="text-danger fs-6">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="company_mail">Company Email <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="company_mail" id="company_mail" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please Enter Company's Email.
                                    </div>
                                    @error('company_mail')
                                        <p class="text-danger fs-6">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="location_type">Location type </label>
                                    <select style="background: url(https://static.thenounproject.com/png/1720660-200.png) 105% / 13% no-repeat;" name="location_type" id="location_type" class="form-select form-control" >
                                        <option value="">Please select</option>
                                          <option value="on-site">On-site</option>
                                          <option value="hybrid">Hybrid</option>
                                          <option value="remote">Remote</option>
                                    </select>
                                    @error('location_type')
                                        <p class="text-danger fs-6">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="currently_working">
                                        <label class="form-check-label" for="currently_working">
                                          I am currently working here
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-3 col-md-12">
                                    <div class="row">
                                        <label class="form-label" for="">Start date <span class="text-danger">*</span></label>
                                        <div class="col">
                                            <select style="background: url(https://static.thenounproject.com/png/1720660-200.png) 105% / 15% no-repeat;" name="start_month" id="start_month" class="form-control" required>
                                                <option value="">Select Month</option>
                                                  <option value="January">January</option>
                                                  <option value="February">February</option>
                                                  <option value="March">March</option>
                                                  <option value="April">April</option>
                                                  <option value="May">May</option>
                                                  <option value="June">June</option>
                                                  <option value="July">July</option>
                                                  <option value="August">August</option>
                                                  <option value="September">September</option>
                                                  <option value="November">November</option>
                                                  <option value="December">December</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please Select Month.
                                            </div>
                                            @error('start_month')
                                                <p class="text-danger fs-6">{{ $message }}</p>
                                            @enderror
                                          </div>
                                          <div class="col">
                                                <select style="background: url(https://static.thenounproject.com/png/1720660-200.png) 105% / 15% no-repeat;" name="start_year" id="start_year" class="form-control" required>
                                                    <option value="">Select Year</option>
                                                   @php for($i = 1923; $i <= date('Y'); $i++): @endphp
                                                   <option value="{{$i}}">{{$i}}</option>
                                                   @php endfor; @endphp
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please Select Year.
                                                </div>
                                                @error('start_year')
                                                    <p class="text-danger fs-6">{{ $message }}</p>
                                                @enderror
                                          </div>
                                    </div>
                                </div>

                                <div class="mb-3 col-md-12">
                                    <div class="row">
                                        <label class="form-label" for="">End date <span class="text-danger">*</span></label>
                                        <div class="col">
                                                <select style="background: url(https://static.thenounproject.com/png/1720660-200.png) 105% / 15% no-repeat;" name="end_month" id="end_month" class="form-control" required>
                                                    <option value="">Select Month</option>
                                                    <option value="January">January</option>
                                                    <option value="February">February</option>
                                                    <option value="March">March</option>
                                                    <option value="April">April</option>
                                                    <option value="May">May</option>
                                                    <option value="June">June</option>
                                                    <option value="July">July</option>
                                                    <option value="August">August</option>
                                                    <option value="September">September</option>
                                                    <option value="November">November</option>
                                                    <option value="December">December</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please Select Month.
                                                </div>
                                                @error('end_month')
                                                    <p class="text-danger fs-6">{{ $message }}</p>
                                                @enderror
                                          </div>
                                          <div class="col">
                                                <select style="background: url(https://static.thenounproject.com/png/1720660-200.png) 105% / 15% no-repeat;" name="end_year" id="end_year" class="form-control" required>
                                                    <option value="">Select Year</option>
                                                    @php for($i = 1923; $i <= date('Y'); $i++): @endphp
                                                    <option value="{{$i}}">{{$i}}</option>
                                                    @php endfor; @endphp
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please Select Year.
                                                </div>
                                                @error('end_year')
                                                    <p class="text-danger fs-6">{{ $message }}</p>
                                                @enderror
                                          </div>
                                    </div>
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="description">Description </label>
                                    <textarea id="" cols="30" rows="6" name="description" class="form-control" id="description"></textarea>
                                    @error('description')
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


        {{-- Edit Experience Modal --}}
        <div class="modal fade edit-experience-modal" tabindex="-1" role="dialog" aria-hidden="true" id="edit_experience_modal">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><b id="">Edit Experience</b></h5>
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


        {{-- Add Education Modal --}}
        <div class="modal fade add-education-modal" tabindex="-1" role="dialog" aria-hidden="true" id="add_education_modal">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><b id="">Add Education</b></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" novalidate action="/admin/industry" method="POST" id="add_education_form">
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

        {{-- Edit Education Modal --}}
        <div class="modal fade edit-education-modal" tabindex="-1" role="dialog" aria-hidden="true" id="edit_education_modal">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><b id="">Edit Education</b></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" novalidate action="/admin/industry" id='edit_education_form'>
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


        {{-- Add Skill Modal --}}
        <div class="modal fade add-skill-modal" tabindex="-1" role="dialog" aria-hidden="true" id="add_skill_modal">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><b id="">Add Skill</b></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" novalidate action="/admin/industry" method="POST" id='add_skill_form'>
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

        {{-- Edit Skill Modal --}}
        <div class="modal fade add-edit-modal" tabindex="-1" role="dialog" aria-hidden="true" id="edit_skill_modal">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><b id="">Edit Skill</b></h5>
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
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            //alert("I am here")
            document.querySelector("#currently_working").addEventListener('change', (event) => {

                if (event.target.checked) {
                    console.log("Checkbox is checked..");
                } else {
                    console.log("Checkbox is not checked..");
                }
            })


            $('#add_experience_modal').on('hide.bs.modal', function () {
                //alert(" I am here already")
                document.getElementById('add_experience_form').reset();
            });

        })
    </script>
@endsection