@extends('layouts.user')
@section('page_title', 'Dashboard')
@section('content')
<div class="container-fluid">
    <div class="row">
        <x-flash-message />
        <div class="col-xl-3 col-xxl-6 col-sm-6">
            <div class="card bg-primary">
                <div class="card-body">
                    <div class="media align-items-center">
                        <span class="p-3 me-3 feature-icon rounded">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.25 5.75H28.5V2.25C28.5 1.78587 28.3156 1.34075 27.9874 1.01256C27.6593 0.684374 27.2141 0.5 26.75 0.5C26.2859 0.5 25.8407 0.684374 25.5126 1.01256C25.1844 1.34075 25 1.78587 25 2.25V5.75H11V2.25C11 1.78587 10.8156 1.34075 10.4874 1.01256C10.1592 0.684374 9.71413 0.5 9.25 0.5C8.78587 0.5 8.34075 0.684374 8.01256 1.01256C7.68437 1.34075 7.5 1.78587 7.5 2.25V5.75H5.75C4.35761 5.75 3.02226 6.30312 2.03769 7.28769C1.05312 8.27226 0.5 9.60761 0.5 11V12.75H35.5V11C35.5 9.60761 34.9469 8.27226 33.9623 7.28769C32.9777 6.30312 31.6424 5.75 30.25 5.75Z" fill="white"/>
                                <path d="M0.5 30.25C0.5 31.6424 1.05312 32.9777 2.03769 33.9623C3.02226 34.9469 4.35761 35.5 5.75 35.5H30.25C31.6424 35.5 32.9777 34.9469 33.9623 33.9623C34.9469 32.9777 35.5 31.6424 35.5 30.25V16.25H0.5V30.25Z" fill="white"/>
                            </svg>
                        </span>
                        <div class="media-body text-end">
                            <p class="fs-18 text-white mb-2">Application Sent</p>
                            <span class="fs-48 text-white font-w600">86</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-6 col-sm-6">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="media align-items-center">
                        <span class="p-3 me-3 feature-icon rounded">
                            <svg width="40" height="40" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" d="M512 64a448 448 0 1 1 0 896 448 448 0 0 1 0-896zm-55.808 536.384-99.52-99.584a38.4 38.4 0 1 0-54.336 54.336l126.72 126.72a38.272 38.272 0 0 0 54.336 0l262.4-262.464a38.4 38.4 0 1 0-54.272-54.336L456.192 600.384z"/></svg>
                        </span>
                        <div class="media-body text-end">
                            <p class="fs-18 text-white mb-2">Application Accepted</p>
                            <span class="fs-48 text-white font-w600">75</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-6 col-sm-6">
            <div class="card bg-success">
                <div class="card-body">
                    <div class="media align-items-center">
                        <span class="p-3 me-3 feature-icon rounded">
                            <svg width="40" height="40" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>error-filled</title>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="add" fill="#fff" transform="translate(42.666667, 42.666667)">
                                        <path d="M213.333333,3.55271368e-14 C331.136,3.55271368e-14 426.666667,95.5306667 426.666667,213.333333 C426.666667,331.136 331.136,426.666667 213.333333,426.666667 C95.5306667,426.666667 3.55271368e-14,331.136 3.55271368e-14,213.333333 C3.55271368e-14,95.5306667 95.5306667,3.55271368e-14 213.333333,3.55271368e-14 Z M262.250667,134.250667 L213.333333,183.168 L164.416,134.250667 L134.250667,164.416 L183.168,213.333333 L134.250667,262.250667 L164.416,292.416 L213.333333,243.498667 L262.250667,292.416 L292.416,262.250667 L243.498667,213.333333 L292.416,164.416 L262.250667,134.250667 Z" id="Combined-Shape">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <div class="media-body text-end">
                            <p class="fs-18 text-white mb-2">Application Rejected</p>
                            <span class="fs-48 text-white font-w600">45</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-xxl-6 col-sm-6">
            <div class="card bg-secondary">
                <div class="card-body">
                    <div class="media align-items-center">
                        <span class="p-3 me-3 feature-icon rounded">
                            <svg width="36" height="36" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.1811 22.0083C15.065 21.9063 14.7968 21.6695 14.7015 21.5799C12.3755 19.3941 10.8517 15.9712 10.8517 12.1138C10.8517 5.37813 15.4868 0.0410156 21.001 0.0410156C26.5152 0.0410156 31.1503 5.37813 31.1503 12.1138C31.1503 15.9679 29.6292 19.3884 27.3094 21.5778C27.2118 21.6699 26.9384 21.9116 26.8238 22.0125L26.8139 22.1799C26.8789 23.1847 27.554 24.0553 28.5232 24.3626C35.7277 26.641 40.9507 32.0853 41.8276 38.538C41.9483 39.3988 41.6902 40.2696 41.1198 40.9254C40.5495 41.5813 39.723 41.9579 38.8541 41.9579C32.4956 41.9591 9.50672 41.9591 3.14818 41.9591C2.2787 41.9591 1.4518 41.5824 0.881242 40.9263C0.31068 40.2701 0.0523763 39.3989 0.172318 38.5437C1.05145 32.0851 6.27444 26.641 13.4777 24.3628C14.4504 24.0544 15.1263 23.1802 15.1885 22.1722L15.1811 22.0083Z" fill="white"/>
                            </svg>
                        </span>
                        <div class="media-body text-end">
                            <p class="fs-18 text-white mb-2">Profile View</p>
                            <span class="fs-48 text-white font-w600">93</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-xxl-5">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card d-flex flex-xl-column flex-sm-column flex-md-row flex-column">
                        
                        <div class="card-body col-xl-12 col-md-6 col-sm-12 activity-card">
                            <h4 class="fs-18 text-black mb-3">Recent Activities</h4>
                            <div id="DZ_W_TimeLine" class="widget-timeline dz-scroll height370">
                                <ul class="timeline">
                                    <li>
                                        <div class="timeline-badge primary"></div>
                                        <a class="timeline-panel text-muted" href="#">
                                            <span>10 minutes ago</span>
                                            <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="timeline-badge light">
                                        </div>
                                        <a class="timeline-panel text-muted" href="#">
                                            <span>20 minutes ago</span>
                                            <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
                                            <p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="timeline-badge danger">
                                        </div>
                                        <a class="timeline-panel text-muted" href="#">
                                            <span>30 minutes ago</span>
                                            <h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="timeline-badge success">
                                        </div>
                                        <a class="timeline-panel text-muted" href="#">
                                            <span>15 minutes ago</span>
                                            <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="timeline-badge warning">
                                        </div>
                                        <a class="timeline-panel text-muted" href="#">
                                            <span>20 minutes ago</span>
                                            <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="timeline-badge dark">
                                        </div>
                                        <a class="timeline-panel text-muted" href="#">
                                            <span>20 minutes ago</span>
                                            <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                        </a>
                                    </li>
                                </ul>
						    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-xxl-7">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0 pb-0 flex-wrap">
                            <h4 class="fs-20 text-black me-4 mb-2">Vacancy Stats</h4>
                            <div class="form-check custom-checkbox mb-3">
                                <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                <label class="form-check-label" for="customCheckBox1">Application Sent</label>
                            </div>
                            <div class="form-check custom-checkbox mb-3">
                                <input type="checkbox" class="form-check-input" id="customCheck1" required>
                                <label class="form-check-label" for="customCheck1">Interviews</label>
                            </div>
                            <div class="form-check custom-checkbox mb-3">
                                <input type="checkbox" class="form-check-input" id="customCheck2" required>
                                <label class="form-check-label" for="customCheck2">Rejected</label>
                            </div>
                            <select class="form-control style-1 default-select mt-3 mt-sm-0">
                                <option>Monthly</option>
                                <option>Weekly</option>
                                <option>Daily</option>
                            </select>
                        </div>
                        <div class="card-body">	
                            <canvas id="lineChart" class="Vacancy-chart"></canvas>
                            <div class="d-flex flex-wrap align-items-center justify-content-center mt-3">
                                <div class="fs-14 text-black me-4">
                                    <svg class="me-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="19" height="19" rx="9.5" fill="#4E36E2"/>
                                    </svg>
                                    Application Sent
                                </div>
                                <div class="fs-14 text-black me-4">
                                    <svg class="me-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="19" height="19" rx="9.5" fill="#1BD084"/>
                                    </svg>
                                    Interviews
                                </div>
                                <div class="fs-14 text-black">
                                    <svg class="me-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="19" height="19" rx="9.5" fill="#FF424D"/>
                                    </svg>
                                    Rejected
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <h4 class="fs-20 text-black mb-sm-4 mt-sm-0 mt-2  mb-2">Recommended Jobs</h4>
                    <div class="testimonial-one owl-carousel" style="display:flex !important;">
                        @unless (count($recommended_jobs) == 0)
                            @foreach($recommended_jobs as $recommended_job)
                                <x-recommended-job-card :recommended_job="$recommended_job"/>
                            @endforeach
                        @else
                            <p>No Recommended job found.</p>
                        @endunless
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="d-sm-flex align-items-center mb-3 mt-sm-0 mt-2">
                <h4 class="text-black fs-20 me-auto">Featured Companies</h4>
                <a href="/user/companies" class="btn btn-primary light btn-rounded">View More
                    <svg class="ms-3" width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.5607 5.93941L18.2461 0.62482C17.9532 0.331898 17.5693 0.185461 17.1854 0.185461C16.8015 0.185461 16.4176 0.331898 16.1247 0.62482C15.539 1.21062 15.539 2.16035 16.1247 2.74615L18.8787 5.50005L1.5 5.50005C0.671578 5.50005 0 6.17163 0 7.00005C0 7.82848 0.671578 8.50005 1.5 8.50005L18.8787 8.50005L16.1247 11.254C15.539 11.8398 15.539 12.7895 16.1247 13.3753C16.7106 13.9611 17.6602 13.9611 18.2461 13.3753L23.5607 8.06069C24.1464 7.47495 24.1464 6.52516 23.5607 5.93941Z" fill="#40189D"/>
                    </svg>
                </a>
            </div>
            <div class="testimonial-two owl-carousel">
                @unless (count($featured_companies) == 0)
                    @foreach($featured_companies as $featured_company)
                        <x-featured-company-card :featured_company="$featured_company"/>
                    @endforeach
                @else
                    <p>No listings found.</p>
                @endunless
            </div>
        </div>
        
    </div>
</div>
@endsection