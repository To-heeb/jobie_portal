@extends('layouts.user')
@section('link')
<link href="{{ asset('assets/vendor/lightgallery/css/lightgallery.min.css') }}" rel="stylesheet" type="text/css"/>	
<link href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('page_title', 'Company')
@section('content')

<div class="container-fluid">
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Company</a></li>/
            <li class="breadcrumb-item"><a href="javascript:void(0)">{{$company_info->name}}</a></li>
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
                            <a class="test-popup-link" href="{{ asset('storage/'.$company_info->company_logo) }} "><img src="{{ asset('storage/'.$company_info->company_logo) }}" class="img-fluid rounded-circle" alt="" width="100" height="100"></a>
                        </div>
                        <div class="profile-details">
                            <div class="profile-name px-3 pt-2">
                                <h4 class="text-primary mb-0">{{$company_info->name}}</h4>
                                <p>Company's Name</p>
                            </div>
                            <div class="profile-email px-2 pt-2">
                                <h4 class="text-muted mb-0">{{$company_info->email}}</h4>
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
        <div class="col-xl-12 col-xxl-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card d-sm-flex flex-xl-column flex-md-row">
                        <div class="card-body border-bottom col-xl-12 col-md-6">
                            <h4 class="fs-22 text-black font-w600 mb-2">{{$company_info->name}}</h4>
                            {{-- <p>{{$job_details->company->name}}</p> --}}
                            <div class="row mt-3">
                                <div class="media pr-2 mb-2">
                                    <i class="fa fa-building me-3" style="font-size:24px"></i>
                                    <div class="media-body text-left">
                                        <h4 class="fs-8 mb-0 text-black font-w600">{{ $company_info->no_of_employees }}</h4>
                                        <span class="fs-6">Employee</span>
                                    </div>
                                </div>
                                <div class="media pr-2 mb-4">
                                    <i class="fa fa-tag me-3" style="font-size:24px"></i>
                                    <div class="media-body text-left">
                                        <h4 class="fs-18 text-black font-w600 mb-0">{{ $company_info->industry->name }}</h4>
                                    </div>
                                </div>
                                <div class="media pr-2 mb-2">
                                    <i class="fa fa-map-marker me-3" style="font-size:24px"></i>
                                    <div class="media-body text-left">
                                        <h4 class="fs-18 text-black font-w600 mb-0">{{$company_info->state.', '.$company_info->country}}</h4>
                                        <span class="fs-14">Location</span>
                                    </div>
                                </div>
                                <div class="media pr-2 mb-2">
                                    <i class="fa fa-star me-3" style="font-size:24px"></i>
                                    <div class="media-body text-left">
                                        <h4 class="fs-8 mb-0 text-black font-w600">4.5</h4>
                                        <span class="fs-6">Review</span>
                                    </div>
                                </div>
                                <div class="media pr-2 mb-2">
                                    <i class="fa fa-phone me-3" style="font-size:24px"></i>
                                    <div class="media-body text-left">
                                        <h4 class="fs-8 mb-0 text-black font-w600">{{ $company_info->phone_number }}</h4>
                                        <span class="fs-6">Phone Number</span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-body col-xl-12 col-md-6 border-left">
                            <h6 class="fs-16 text-black font-w600 mb-4">About Company</h6>
                            <p class="fs-14"><?= $company_info->about ?></p>
                            <div class="profile-skills mb-3">
                                <h6 class="mb-2">Website</h6>
                                <a href="{{$company_info->website_link}}" class="btn btn-primary light btn-xs mb-1">{{$company_info->name."'s website" }}</a>
                            </div>
                            <div class="profile-personal-info mb-2">
                                <h6 class="mb-2">Socials Link</h6>
                                <div class="row mb-2">
                                    @if($company_info->facebook_link)<a class="btn-social facebook" href="{{$company_info->facebook_link}}"><i class="fab fa-facebook-f"></i></a>@endif
                            
                                </div>
                                <div class="row mb-2">
                                    @if($company_info->twitter_link)<a class="btn-social twitter" href="{{$company_info->twitter_link}}"><i class="fab fa-twitter"></i></a>@endif
                           
                                </div>
                                <div class="row mb-4">
                                    @if($company_info->instagram_link)<a class="btn-social instagram" href="{{$company_info->instagram_link}}"><i class="fab fa-instagram"></i></a>@endif
                                </div>
                            </div>
                            <div class="profile-skills mb-3">
                                <h6 class="mb-4">Gallery</h6>
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
            </div>
        </div>
    </div>
</div>

@endsection

@section('script');
<script src="{{ asset('assets/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
<script src="{{ asset('assets/vendor/lightgallery/js/lightgallery-all.min.js')}}"></script>
<script>
    jQuery(document).ready(function(){
        jQuery('.test-popup-link').magnificPopup({
            type:'image'
        });
        
        jQuery('#lightgallery').lightGallery({
            thumbnail:true,
        });
    });
</script>
@endsection