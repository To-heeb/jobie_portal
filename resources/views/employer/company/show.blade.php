@extends('layouts.employer')

@section('link')
<link href="{{ asset('assets/vendor/lightgallery/css/lightgallery.min.css') }}" rel="stylesheet" type="text/css"/>	
<link href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">App</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
        </ol>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="profile card card-body px-3 pt-3 pb-0">
                <div class="profile-head">
                    <div class="photo-content">
                        <div class="cover-photo rounded"></div>
                    </div>
                    <div class="profile-info">
                        <div class="profile-photo">
                            <a class="test-popup-link" href="{{ asset('storage/'.$companyInfo->company_logo) }} "><img src="{{ asset('storage/'.$companyInfo->company_logo) }}" class="img-fluid rounded-circle" alt="" width="100" height="100"></a>
                        </div>
                        <div class="profile-details">
                            <div class="profile-name px-3 pt-2">
                                <h4 class="text-primary mb-0">{{$companyInfo->name}}</h4>
                                <p>Company's Name</p>
                            </div>
                            <div class="profile-email px-2 pt-2">
                                <h4 class="text-muted mb-0">{{$companyInfo->email}}</h4>
                                <p>Company's Email</p>
                            </div>
                            {{-- <div class="dropdown ms-auto">
                                <a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
                                    <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
                                    <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
                                    <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-statistics">
                                <div class="text-center">
                                    <div class="row">
                                        {{-- <div class="col">
                                            <h3 class="m-b-0">150</h3><span>Follower</span>
                                        </div> --}}
                                        {{-- <div class="col">
                                            <h3 class="m-b-0">140</h3><span>Place Stay</span>
                                        </div> --}}
                                        <div class="col">
                                            <i class="fa fa-star" style="font-size:24px"></i>
                                            <h3 class="m-b-0">45</h3><span>Reviews</span>
                                        </div>
                                    </div>
                                    {{-- <div class="mt-4">
                                        <a href="javascript:void(0);" class="btn btn-primary mb-1 me-1">Follow</a> 
                                        <a href="javascript:void(0);" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#sendMessageModal">Send Message</a>
                                    </div> --}}
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="sendMessageModal">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Send Message</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="comment-form">
                                                    <div class="row"> 
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="text-black font-w600 form-label">Name <span class="required">*</span></label>
                                                                <input type="text" class="form-control" value="Author" name="Author" placeholder="Author">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="text-black font-w600 form-label">Email <span class="required">*</span></label>
                                                                <input type="text" class="form-control" value="Email" placeholder="Email" name="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label class="text-black font-w600 form-label">Comment</label>
                                                                <textarea rows="8" class="form-control" name="comment" placeholder="Comment"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-3 mb-0">
                                                                <input type="submit" value="Post Comment" class="submit btn btn-primary" name="submit">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-blog">
                                <h5 class="text-primary d-inline">Today Highlights</h5>
                                <img src="{{ asset('assets/images/profile/1.jpg')}}" alt="" class="img-fluid mt-4 mb-4 w-100">
                                <h4><a href="post_details.html" class="text-black">Darwin Creative Agency Theme</a></h4>
                                <p class="mb-0">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-interest">
                                <h5 class="text-primary d-inline">Interest</h5>
                                <div class="row mt-4 sp4" id="lightgallery">
                                    <a href="{{ asset('assets/images/profile/2.jpg')}}" data-exthumbimage="{{ asset('assets/images/profile/2.jpg')}}" data-src="{{ asset('assets/images/profile/2.jpg')}}" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                        <img src="{{ asset('assets/images/profile/2.jpg')}}" alt="" class="img-fluid">
                                    </a>
                                    <a href="{{ asset('assets/images/profile/3.jpg')}}" data-exthumbimage="{{ asset('assets/images/profile/3.jpg')}}" data-src="{{ asset('assets/images/profile/3.jpg')}}" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                        <img src="{{ asset('assets/images/profile/3.jpg')}}" alt="" class="img-fluid">
                                    </a>
                                    <a href="{{ asset('assets/images/profile/4.jpg')}}" data-exthumbimage="{{ asset('assets/images/profile/4.jpg')}}" data-src="{{ asset('assets/images/profile/4.jpg')}}" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                        <img src="{{ asset('assets/images/profile/4.jpg')}}" alt="" class="img-fluid">
                                    </a>
                                    <a href="{{ asset('assets/images/profile/3.jpg')}}" data-exthumbimage="{{ asset('assets/images/profile/3.jpg')}}" data-src="{{ asset('assets/images/profile/3.jpg')}}" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                        <img src="{{ asset('assets/images/profile/3.jpg')}}" alt="" class="img-fluid">
                                    </a>
                                    <a href="{{ asset('assets/images/profile/4.jpg')}}" data-exthumbimage="{{ asset('assets/images/profile/4.jpg')}}" data-src="{{ asset('assets/images/profile/4.jpg')}}" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                        <img src="{{ asset('assets/images/profile/4.jpg')}}" alt="" class="img-fluid">
                                    </a>
                                    <a href="{{ asset('assets/images/profile/2.jpg')}}" data-exthumbimage="{{ asset('assets/images/profile/2.jpg')}}" data-src="{{ asset('assets/images/profile/2.jpg')}}" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                        <img src="{{ asset('assets/images/profile/2.jpg')}}" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-news">
                                <h5 class="text-primary d-inline">Our Latest News</h5>
                                <div class="media pt-3 pb-3">
                                    <img src="{{ asset('assets/images/profile/5.jpg') }} " alt="image" class="me-3 rounded" width="75">
                                    <div class="media-body">
                                        <h5 class="m-b-5"><a href="post_details.html" class="text-black">Collection of textile samples</a></h5>
                                        <p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
                                    </div>
                                </div>
                                <div class="media pt-3 pb-3">
                                    <img src="{{ asset('assets/images/profile/6.jpg')}}" alt="image" class="me-3 rounded" width="75">
                                    <div class="media-body">
                                        <h5 class="m-b-5"><a href="post_details.html" class="text-black">Collection of textile samples</a></h5>
                                        <p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
                                    </div>
                                </div>
                                <div class="media pt-3 pb-3">
                                    <img src="{{ asset('assets/images/profile/7.jpg') }}" alt="image" class="me-3 rounded" width="75">
                                    <div class="media-body">
                                        <h5 class="m-b-5"><a href="post_details.html" class="text-black">Collection of textile samples</a></h5>
                                        <p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="profile-tab">
                        <div class="custom-tab-1">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="#my-posts" data-bs-toggle="tab" class="nav-link">Posts</a>
                                </li>
                                <li class="nav-item"><a href="#about" data-bs-toggle="tab" class="nav-link">About</a>
                                </li>
                                <li class="nav-item"><a href="#profile-settings" data-bs-toggle="tab" class="nav-link active show">Setting</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="my-posts" class="tab-pane fade">
                                    <div class="my-post-content pt-3">
                                        <div class="post-input">
                                            <textarea name="textarea" id="textarea" cols="30" rows="5" class="form-control bg-transparent" placeholder="Please type what you want...."></textarea> 
                                            <a href="javascript:void(0);" class="btn btn-primary light me-1 px-3" data-bs-toggle="modal" data-bs-target="#linkModal"><i class="fa fa-link m-0"></i> </a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="linkModal">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Social Links</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <a class="btn-social facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                                            <a class="btn-social google-plus" href="javascript:void(0)"><i class="fab fa-google-plus-g"></i></a>
                                                            <a class="btn-social linkedin" href="javascript:void(0)" ><i class="fab fa-linkedin"></i></a>
                                                            <a class="btn-social instagram" href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                                                            <a class="btn-social twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                                            <a class="btn-social youtube" href="javascript:void(0)"><i class="fab fa-youtube"></i></a>
                                                            <a class="btn-social whatsapp" href="javascript:void(0)"><i class="fab fa-whatsapp"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-primary light me-1 px-3" data-bs-toggle="modal" data-bs-target="#cameraModal"><i class="fa fa-camera m-0"></i> </a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="cameraModal">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Upload images</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text">Upload</span>
                                                                <div class="form-file">
                                                                    <input type="file" class="form-file-input form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#postModal">Post</a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="postModal">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Post</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                             <textarea name="textarea" id="textarea2" cols="30" rows="5" class="form-control bg-transparent" placeholder="Please type what you want...."></textarea>
                                                             <a class="btn btn-primary btn-rounded" href="javascript:void(0)">Post</a>																		 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                            <img src="public/assets/images/profile/8.jpg" alt="" class="img-fluid w-100 rounded">
                                            <a class="post-title" href="post_details.html"><h3 class="text-black">Collection of textile samples lay spread</h3></a>
                                            <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                of spare which enjoy whole heart.</p>
                                            <button class="btn btn-primary me-2"><span class="me-2"><i
                                                        class="fa fa-heart"></i></span>Like</button>
                                            <button class="btn btn-secondary"  data-bs-toggle="modal" data-bs-target="#replyModal"><span class="me-2"><i
                                                        class="fa fa-reply"></i></span>Reply</button>
                                        </div>
                                        <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                            <img src="public/assets/images/profile/9.jpg" alt="" class="img-fluid w-100 rounded">
                                            <a class="post-title" href="post_details.html"><h3 class="text-black">Collection of textile samples lay spread</h3></a>
                                            <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                of spare which enjoy whole heart.</p>
                                            <button class="btn btn-primary me-2"><span class="me-2"><i
                                                        class="fa fa-heart"></i></span>Like</button>
                                            <button class="btn btn-secondary"  data-bs-toggle="modal" data-bs-target="#replyModal"><span class="me-2"><i
                                                        class="fa fa-reply"></i></span>Reply</button>
                                        </div>
                                        <div class="profile-uoloaded-post pb-3">
                                            <img src="public/assets/images/profile/8.jpg" alt="" class="img-fluid w-100 rounded">
                                            <a class="post-title" href="post_details.html"><h3 class="text-black">Collection of textile samples lay spread</h3></a>
                                            <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                of spare which enjoy whole heart.</p>
                                            <button class="btn btn-primary me-2"><span class="me-2"><i
                                                        class="fa fa-heart"></i></span>Like</button>
                                            <button class="btn btn-secondary"  data-bs-toggle="modal" data-bs-target="#replyModal"><span class="me-2"><i
                                                        class="fa fa-reply"></i></span>Reply</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="about" class="tab-pane fade">
                                    <div class="profile-about-me">
                                        <div class="pt-4 border-bottom-1 pb-3">
                                            <h4 class="text-primary">About</h4>
                                            <p class="mb-2"><?= $companyInfo->about; ?></p>
                                        </div>
                                    </div>
                                    <div class="profile-skills mb-3">
                                        <h4 class="text-primary mb-2">Website</h4>
                                        <a href="{{$companyInfo->website_link}}" class="btn btn-primary light btn-xs mb-1">{{$companyInfo->name."'s website" }}</a>
                                    </div>
                                    <div class="profile-lang  mb-3">
                                        <h4 class="text-primary mb-2">Industry</h4>
                                        <p  class="text-muted pe-3 f-s-16">{{ $companyInfo->industry->name }}</p>
                                    </div>
                                    <div class="profile-personal-info mb-3">
                                        <h4 class="text-primary mb-2">Size</h4>
                                        <p  class="text-muted pe-3 f-s-16">{{ $companyInfo->no_of_employees." Employees" }}</p>
                                    </div>
                                    <div class="profile-personal-info mb-3">
                                        <h4 class="text-primary mb-2">Phone number</h4>
                                        <p  class="text-muted pe-3 f-s-16">{{ $companyInfo->phone_number }}</p>
                                    </div>
                                    <div class="profile-location  mb-3">
                                        <h4 class="text-primary mb-2">Location</h4>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Country <span class="pull-end">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-sm-9 col-7"><span>{{ $companyInfo->country }}</span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">State <span class="pull-end">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-sm-9 col-7"><span>{{ $companyInfo->state }}</span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">City <span class="pull-end">:</span></h5>
                                            </div>
                                            <div class="col-sm-9 col-7"><span>{{ $companyInfo->city }}</span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Address <span class="pull-end">:</span></h5>
                                            </div>
                                            <div class="col-sm-9 col-7"><span>{{ $companyInfo->address }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-personal-info mb-3">
                                        <h4 class="text-primary mb-3">Socials Link</h4>
                                        <div class="row mb-2">
                                            @if($companyInfo->facebook_link)<a class="btn-social facebook" href="{{$companyInfo->facebook_link}}"><i class="fab fa-facebook-f"></i></a>@endif
                                    
                                        </div>
                                        <div class="row mb-2">
                                            @if($companyInfo->twitter_link)<a class="btn-social twitter" href="{{$companyInfo->twitter_link}}"><i class="fab fa-twitter"></i></a>@endif
                                   
                                        </div>
                                        <div class="row mb-2">
                                            @if($companyInfo->instagram_link)<a class="btn-social instagram" href="{{$companyInfo->instagram_link}}"><i class="fab fa-instagram"></i></a>@endif
                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="profile-settings" class="tab-pane fade active show">
                                    <div class="pt-3">
                                        <div class="settings-form">
                                            <h4 class="text-primary">Account Setting</h4>
                                            <form action="/employer/company/profile/{{$companyInfo->id}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="text-label">Company Name <span class="text-danger">*</span></label>
                                                        <input type="text" name="name" class="form-control mb-3" value="{{ $companyInfo->name }}" >
                                                        <input type="hidden" name="id" value="{{ $companyInfo->id }}">
                                                        @error('name')
                                                            <p class="text-danger fs-6" >{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="text-label">Company Email Address <span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control mb-3" name="email" value="{{ $companyInfo->email }}" >
                                                        @error('email')
                                                            <p class="text-danger fs-6">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="text-label">Company Phone Number <span class="text-danger">*</span></label>
                                                        <input type="text" name="phone_number" class="form-control mb-3" value="{{ $companyInfo->phone_number }}" required>
                                                        @error('phone_number')
													        <p class="text-danger fs-6">{{ $message }}</p>
												        @enderror
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="text-label">Country <span class="text-danger">*</span></label>
                                                        <select class="default-select form-control wide mb-3" name="country" required>
                                                            <option>Select Country</option>
                                                            <option value="Nigeria" @if($companyInfo->country == "Nigeria") selected @endif >Nigeria</option>
                                                            <option value="Ghana" @if($companyInfo->country == "Ghana") selected @endif >Ghana</option>
                                                        </select>
                                                        @error('country')
                                                            <p class="text-danger fs-6">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="text-label">State <span class="text-danger">*</span></label>
                                                        <select class="default-select form-control wide mb-3" name="state" required>
                                                            <option>Select State</option>
                                                            <option value="Lagos" @if($companyInfo->state == "Lagos") selected @endif >Lagos</option>
                                                            <option value="Ogun" @if($companyInfo->state  == "Ogun") selected @endif>Ogun</option>
                                                        </select>
                                                        @error('state')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="text-label">City <span class="text-danger">*</span></label>
                                                        <select class="default-select form-control wide mb-3" name="city" required>
                                                            <option>Select City</option>
                                                            <option value="Ikeja" @if($companyInfo->city == "Ikeja") selected @endif >Ikeja</option>
                                                            <option value="Abeokuta" @if($companyInfo->city == "Abeokuta") selected @endif >Abeokuta</option>
                                                        </select>
                                                        @error('city')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="text-label">Address <span class="text-danger">*</span></label>
													<input type="text" name="address" class="form-control mb-3" value="{{$companyInfo->address}}"  required>
                                                    @error('address')
													    <p class="text-danger fs-6">{{ $message }}</p>
												    @enderror
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="text-label">Website Link <span class="text-danger">*</span></label>
                                                        <input type="url" name="website_link" class="form-control mb-3" value="{{$companyInfo->website_link}}" required>
                                                        @error('website_link')
                                                            <p class="text-danger fs-6">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="text-label">Twitter Link </span></label>
                                                        <input type="url" name="twitter_link" class="form-control mb-3" value="{{$companyInfo->twitter_link}}" >
                                                        @error('twitter_link')
                                                            <p class="text-danger fs-6">{{ $message }}</p>
												        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="text-label">Facebook Link </span></label>
                                                        <input type="url" name="facebook_link" class="form-control mb-3" value="{{$companyInfo->facebook_link}}">
                                                        @error('facebook_link')
                                                            <p class="text-danger fs-6">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="text-label">Instagram Link </span></label>
													    <input type="url" name="instagram_link" class="form-control mb-3" value="{{$companyInfo->instagram_link}}">
                                                        </select>
                                                        @error('instagram_link')
                                                            <p class="text-danger fs-6">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="text-label">Industry <span class="text-danger">*</span></label>
													    <select class="default-select form-control wide mb-3" name="industry_id" required>
														<option value="">Select Industry</option>  
														@foreach ($industries as $industry)
															<option value="{{ $industry->id }}" @if($industry->id == $companyInfo->industry_id) selected @endif>{{ $industry->name }}</option>
														@endforeach
                                                        </select>
                                                        @error('industry_id')
                                                            <p class="text-danger fs-6">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="text-label">Employer type <span class="text-danger">*</span></label>
                                                        <select class="default-select form-control wide mb-3" name="employer_type" id="employer_type" required>
                                                            <option>Select employer type</option>
                                                            <option value="employee"  @if(auth()->user()->employer_type == "employee") selected @endif >Employee</option>
                                                            <option value="recruiter"  @if(auth()->user()->employer_type == "recruiter") selected @endif>Recruiter</option>
                                                        </select>
                                                        @error('employer_type')
                                                            <p class="text-danger fs-6">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6" id="position_in_company_div">
                                                        <label class="text-label">Your position in Company <span class="text-danger">*</span></label>
                                                        <input type="text" name="position_in_company" id="position_in_company" class="form-control mb-3" value="{{auth()->user()->position_in_company}}">	
                                                        @error('position_in_company')
                                                            <p class="text-danger fs-6">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="text-label">Number of Employees <span class="text-danger">*</span></label>
													    <select class="default-select form-control wide mb-3" name="no_of_employees" required>
                                                            <option selected="">Select employee strength</option>
                                                            <option value="1 - 4" @if($companyInfo->no_of_employees == "1 - 4") selected @endif>1-4</option>
                                                            <option value="5 - 10" @if($companyInfo->no_of_employees == "5 - 10") selected @endif>5-10</option>
                                                            <option value="11 - 25" @if($companyInfo->no_of_employees == "11 - 25") selected @endif>11-25</option>
                                                            <option value="26 - 50" @if($companyInfo->no_of_employees == "26 - 50") selected @endif>26-50</option>
                                                            <option value="51 - 100" @if($companyInfo->no_of_employees == "51 - 100") selected @endif>51-100</option>
                                                            <option value="101- 200" @if($companyInfo->no_of_employees == "101- 200") selected @endif>101-200</option>
                                                            <option value="201 - 500" @if($companyInfo->no_of_employees == "201 - 500") selected @endif>201-500</option>
                                                            <option value="501 - 1000" @if($companyInfo->no_of_employees == "501 - 1000") selected @endif>501-1000</option>
                                                            <option value="1001+" @if($companyInfo->no_of_employees == "1001+") selected @endif>1001+</option>
                                                        </select>
                                                        @error('no_of_employees')
													<p class="text-danger fs-6">{{ $message }}</p>
												@enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 mb-2">
                                                        <div class="form-group">
                                                            <label class="text-label">About Company <span class="text-danger">*</span></label>
                                                            <textarea id="ckeditor" name="about">{{$companyInfo->about}}</textarea>
                                                        </div>
                                                        @error('about')
                                                            <p class="text-danger fs-6">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label class="text-label">Company Logo <span class="text-danger">*</span></label>
                                                        <div class="input-group mb-3">
                                                            <button class="btn btn-primary btn-sm" type="button">Button</button>
                                                            <div class="form-file">
                                                                <input type="file" name="company_logo" class="form-file-input form-control" accept="image/*">
                                                            </div>
                                                        </div>
                                                        <img src="{{ asset('storage/'.$companyInfo->company_logo)}}" alt=""  width="150" height="150">
                                                        @error('company_logo')
                                                            <p class="text-danger fs-6">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                {{-- <div class="mb-3">
                                                    <div class="form-check custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="gridCheck">
                                                        <label class="form-check-label form-label" for="gridCheck"> Check me out</label>
                                                    </div>
                                                </div> --}}
                                                <button class="btn btn-primary" type="submit">
                                                    Update</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="replyModal">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Post Reply</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <textarea class="form-control" rows="4">Message</textarea>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">btn-close</button>
                                        <button type="button" class="btn btn-primary">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script');
<script src="{{ asset('assets/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
<script src="{{ asset('assets/vendor/lightgallery/js/lightgallery-all.min.js')}}"></script>
<script src="https://cdn.tiny.cloud/1/nwn241m8p8fyxf4m834j6okt29kjcp4dt4ga5szmz70ssq3o/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    jQuery(document).ready(function(){
        jQuery('.test-popup-link').magnificPopup({
            type:'image'
        });
        
        jQuery('#lightgallery').lightGallery({
            thumbnail:true,
        });
    });

    document.addEventListener('DOMContentLoaded', function(){
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

            if(document.getElementById('employer_type').value == 'employee'){
                    document.querySelector("#position_in_company_div").style.display = 'block';	
					document.querySelector("#position_in_company").classList.add("required")
            }else{
                    document.querySelector("#position_in_company_div").style.display = 'none';
					document.querySelector("#position_in_company").classList.remove("required")
            }
    });
</script>
@endsection