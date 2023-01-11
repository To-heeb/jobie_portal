@extends('layouts.user')
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
                            <h4 class="fs-22 text-black font-w600 mb-1">{{$company_info->name}}</h4>
                            {{-- <p>{{$job_details->company->name}}</p> --}}
                            <div class="row">
                                <div class="media pr-2 mb-2">
                                    <i class="fa fa-building me-3" style="font-size:24px"></i>
                                    <div class="media-body text-left">
                                        <h4 class="fs-8 mb-0 text-black font-w600">{{$job_details->company->no_of_employees }}</h4>
                                        <span class="fs-6">Employee</span>
                                    </div>
                                </div>
                                <div class="media pr-2 mb-4">
                                    <i class="fa fa-briefcase me-3" style="font-size:24px"></i>
                                    <div class="media-body text-left">
                                        <span class="fs-6">{{ ucfirst(str_replace('_', '-',$job_details->location_type)) }}</span>
                                    </div>
                                </div>
                                <div class="media pr-2 mb-2">
                                    <i class="fa fa-building me-3" style="font-size:24px"></i>
                                    <div class="media-body text-left">
                                        <h4 class="fs-8 mb-0 text-black font-w600">{{$job_details->company->no_of_employees }}</h4>
                                        <span class="fs-6">Employee</span>
                                    </div>
                                </div>
                                <div class="media pr-2 mb-2">
                                    <i class="fa fa-star me-3" style="font-size:24px"></i>
                                    <div class="media-body text-left">
                                        <h4 class="fs-8 mb-0 text-black font-w600">4.5</h4>
                                        <span class="fs-6">Review</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body col-xl-12 col-md-6 border-left ">
                            <h6 class="fs-16 text-black font-w600 mb-4">About Company</h6>
                            <p class="fs-14"><?= substr_replace($job_details->company->about, "...", 150); ?></p>
                            <div class="d-flex justify-content-between flex-wrap pt-3">
                                {{-- <a href="javascript:void(0);" class="btn btn-primary btn-rounded btn-sm mb-2">23 Vacancy</a> --}}
                                <a href="/user/company/{{$job_details->company->id}}" class="btn btn-dark btn-rounded btn-sm mb-2">More Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection