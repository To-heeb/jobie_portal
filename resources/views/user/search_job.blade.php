@extends('layouts.user')
@section('page_title', 'Search Jobs')
@section('content')
<div class="container-fluid">
    <div class="d-flex align-items-center flex-wrap search-job bg-white rounded py-3 px-3 mb-4">
        <svg class="min-w20 primary-icon" width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 0C4.93398 0 0.8125 4.12148 0.8125 9.1875C0.8125 10.8091 1.24094 12.4034 2.05145 13.7979C2.24041 14.123 2.45162 14.4398 2.67934 14.7396L9.60081 24H10.3991L17.3207 14.7397C17.5483 14.4398 17.7595 14.1231 17.9485 13.7979C18.7591 12.4034 19.1875 10.8091 19.1875 9.1875C19.1875 4.12148 15.066 0 10 0ZM10 12.2344C8.31995 12.2344 6.95312 10.8675 6.95312 9.1875C6.95312 7.50745 8.31995 6.14062 10 6.14062C11.68 6.14062 13.0469 7.50745 13.0469 9.1875C13.0469 10.8675 11.68 12.2344 10 12.2344Z" fill="#40189D"/>
        </svg>
        {{-- <select class="form-control style-2 default-select mt-3 mt-sm-0">
            <option>Monthly</option>
            <option>Weekly</option>
            <option>Daily</option>
        </select> --}}
        <div class="col-lg-9 d-md-flex">
            <input class="form-control input-rounded me-auto mb-md-0 mb-3" type="text" name="search" placeholder="Search by Title, Company or any jobs keyword...">
            <a href="javascript:void(0);" class="bg-light btn btn-rounded text-primary me-3">
            <svg class="min-w20 me-3 primary-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 4H12C12 4.53043 12.2107 5.03914 12.5858 5.41421C12.9609 5.78929 13.4696 6 14 6H16C16.5304 6 17.0391 5.78929 17.4142 5.41421C17.7893 5.03914 18 4.53043 18 4H19C19.2652 4 19.5196 3.89464 19.7071 3.70711C19.8946 3.51957 20 3.26522 20 3C20 2.73478 19.8946 2.48043 19.7071 2.29289C19.5196 2.10536 19.2652 2 19 2H18C18 1.46957 17.7893 0.960859 17.4142 0.585786C17.0391 0.210714 16.5304 0 16 0H14C13.4696 0 12.9609 0.210714 12.5858 0.585786C12.2107 0.960859 12 1.46957 12 2H1C0.734784 2 0.48043 2.10536 0.292893 2.29289C0.105357 2.48043 0 2.73478 0 3C0 3.26522 0.105357 3.51957 0.292893 3.70711C0.48043 3.89464 0.734784 4 1 4ZM14 2H16V3V4H14V2ZM19 9H10C10 8.46957 9.78929 7.96086 9.41421 7.58579C9.03914 7.21071 8.53043 7 8 7H6C5.46957 7 4.96086 7.21071 4.58579 7.58579C4.21071 7.96086 4 8.46957 4 9H1C0.734784 9 0.48043 9.10536 0.292893 9.29289C0.105357 9.48043 0 9.73478 0 10C0 10.2652 0.105357 10.5196 0.292893 10.7071C0.48043 10.8946 0.734784 11 1 11H4C4 11.5304 4.21071 12.0391 4.58579 12.4142C4.96086 12.7893 5.46957 13 6 13H8C8.53043 13 9.03914 12.7893 9.41421 12.4142C9.78929 12.0391 10 11.5304 10 11H19C19.2652 11 19.5196 10.8946 19.7071 10.7071C19.8946 10.5196 20 10.2652 20 10C20 9.73478 19.8946 9.48043 19.7071 9.29289C19.5196 9.10536 19.2652 9 19 9ZM6 11V9H8V10V11H6ZM19 16H16C16 15.4696 15.7893 14.9609 15.4142 14.5858C15.0391 14.2107 14.5304 14 14 14H12C11.4696 14 10.9609 14.2107 10.5858 14.5858C10.2107 14.9609 10 15.4696 10 16H1C0.734784 16 0.48043 16.1054 0.292893 16.2929C0.105357 16.4804 0 16.7348 0 17C0 17.2652 0.105357 17.5196 0.292893 17.7071C0.48043 17.8946 0.734784 18 1 18H10C10 18.5304 10.2107 19.0391 10.5858 19.4142C10.9609 19.7893 11.4696 20 12 20H14C14.5304 20 15.0391 19.7893 15.4142 19.4142C15.7893 19.0391 16 18.5304 16 18H19C19.2652 18 19.5196 17.8946 19.7071 17.7071C19.8946 17.5196 20 17.2652 20 17C20 16.7348 19.8946 16.4804 19.7071 16.2929C19.5196 16.1054 19.2652 16 19 16ZM12 18V16H14V17V18H12Z" fill="#40189D"/>
            </svg>
            FILTER</a>
            <a href="javascript:void(0);" class="btn btn-primary btn-rounded"><i class="las la-search scale5 me-3"></i>FIND</a>
        </div>
    </div>
    <div class="d-flex pb-3 mb-4 border-bottom flex-wrap align-items-center">
        <a href="javascript:void(0);" class="btn btn-primary light btn-rounded me-2 mb-2">Suggestions</a>
        <a href="javascript:void(0);" class="btn btn-primary light btn-rounded me-2 mb-2">Your Skill</a>
        <a href="javascript:void(0);" class="btn btn-primary btn-rounded me-2 mb-2">Programmer</a>
        <a href="javascript:void(0);" class="btn btn-primary light btn-rounded me-2 mb-2">Software Engineer</a>
        <a href="javascript:void(0);" class="btn btn-primary light btn-rounded me-2 mb-2">Photographer</a>
        <a href="javascript:void(0);" class="btn btn-primary light btn-rounded me-2 mb-2">Digital Marketing</a>
    </div>
    <div class="d-flex flex-wrap mb-4 align-items-center search-filter">
        <div class="me-auto mb-2 pe-2">
            <h6 class="text-black fs-16 font-w600 mb-1">Showing {{count($jobs)}} Jobs Results</h6>
            <span class="fs-14">Based your preferences</span>
        </div>
        <div class="form-check custom-checkbox me-4 mb-2 mt-2">
            <input type="checkbox" class="form-check-input" id="customCheckBox11" required>
            <label class="form-check-label" for="customCheckBox11">Fulltime</label>
        </div>
        <div class="form-check custom-checkbox me-4 mb-2 mt-2">
            <input type="checkbox" class="form-check-input" id="customCheckBox12" required>
            <label class="form-check-label" for="customCheckBox12">Freelance</label>
        </div>
        <div class="form-check custom-checkbox me-4 mb-2 mt-2">
            <input type="checkbox" class="form-check-input" id="customCheckBox13" required>
            <label class="form-check-label" for="customCheckBox13">Details</label>
        </div>
        <div class="form-check custom-checkbox me-4 mb-2 mt-2">
            <input type="checkbox" class="form-check-input" id="customCheckBox14" required>
            <label class="form-check-label" for="customCheckBox14">Salary</label>
        </div>
        {{-- <select class="form-control style-3 default-select mt-3 mt-sm-0 me-3">
            <option>Monthly</option>
            <option>Weekly</option>
            <option>Daily</option>
        </select> --}}
        <ul class="nav grid-tabs">
            <li class="nav-item">
                <a href="#List" class="nav-link" data-bs-toggle="tab" aria-expanded="false">
                    <svg class="scale5 primary-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 7.5H3C2.17275 7.5 1.5 6.82687 1.5 6V3C1.5 2.17313 2.17275 1.5 3 1.5H6C6.82725 1.5 7.5 2.17313 7.5 3V6C7.5 6.82687 6.82725 7.5 6 7.5ZM3 3V6H6.00113L6 3H3ZM22.5 4.5C22.5 4.08544 22.1642 3.75 21.75 3.75H9.75C9.33581 3.75 9 4.08544 9 4.5C9 4.91456 9.33581 5.25 9.75 5.25H21.75C22.1642 5.25 22.5 4.91456 22.5 4.5ZM6 15H3C2.17275 15 1.5 14.3269 1.5 13.5V10.5C1.5 9.67313 2.17275 9 3 9H6C6.82725 9 7.5 9.67313 7.5 10.5V13.5C7.5 14.3269 6.82725 15 6 15ZM3 10.5V13.5H6.00113L6 10.5H3ZM22.5 12C22.5 11.5854 22.1642 11.25 21.75 11.25H9.75C9.33581 11.25 9 11.5854 9 12C9 12.4146 9.33581 12.75 9.75 12.75H21.75C22.1642 12.75 22.5 12.4146 22.5 12ZM6 22.5H3C2.17275 22.5 1.5 21.8269 1.5 21V18C1.5 17.1731 2.17275 16.5 3 16.5H6C6.82725 16.5 7.5 17.1731 7.5 18V21C7.5 21.8269 6.82725 22.5 6 22.5ZM3 18V21H6.00113L6 18H3ZM22.5 19.5C22.5 19.0854 22.1642 18.75 21.75 18.75H9.75C9.33581 18.75 9 19.0854 9 19.5C9 19.9146 9.33581 20.25 9.75 20.25H21.75C22.1642 20.25 22.5 19.9146 22.5 19.5Z" fill="#40189D"/>
                    </svg>
                </a>
            </li>
            <li class="nav-item">
                <a href="#Boxed" class="nav-link active" data-bs-toggle="tab" aria-expanded="false">
                    <svg class="scale5" width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 1H2C1.73478 1 1.48043 1.10536 1.29289 1.29289C1.10536 1.48043 1 1.73478 1 2V10C1 10.2652 1.10536 10.5196 1.29289 10.7071C1.48043 10.8946 1.73478 11 2 11H10C10.2652 11 10.5196 10.8946 10.7071 10.7071C10.8946 10.5196 11 10.2652 11 10V2C11 1.73478 10.8946 1.48043 10.7071 1.29289C10.5196 1.10536 10.2652 1 10 1ZM9 9H3V3H9V9Z" fill="white"/>
                        <path d="M22 1H14C13.7348 1 13.4804 1.10536 13.2929 1.29289C13.1054 1.48043 13 1.73478 13 2V10C13 10.2652 13.1054 10.5196 13.2929 10.7071C13.4804 10.8946 13.7348 11 14 11H22C22.2652 11 22.5196 10.8946 22.7071 10.7071C22.8946 10.5196 23 10.2652 23 10V2C23 1.73478 22.8946 1.48043 22.7071 1.29289C22.5196 1.10536 22.2652 1 22 1ZM21 9H15V3H21V9Z" fill="white"/>
                        <path d="M10 13H2C1.73478 13 1.48043 13.1054 1.29289 13.2929C1.10536 13.4804 1 13.7348 1 14V22C1 22.2652 1.10536 22.5196 1.29289 22.7071C1.48043 22.8946 1.73478 23 2 23H10C10.2652 23 10.5196 22.8946 10.7071 22.7071C10.8946 22.5196 11 22.2652 11 22V14C11 13.7348 10.8946 13.4804 10.7071 13.2929C10.5196 13.1054 10.2652 13 10 13ZM9 21H3V15H9V21Z" fill="white"/>
                        <path d="M22 13H14C13.7348 13 13.4804 13.1054 13.2929 13.2929C13.1054 13.4804 13 13.7348 13 14V22C13 22.2652 13.1054 22.5196 13.2929 22.7071C13.4804 22.8946 13.7348 23 14 23H22C22.2652 23 22.5196 22.8946 22.7071 22.7071C22.8946 22.5196 23 22.2652 23 22V14C23 13.7348 22.8946 13.4804 22.7071 13.2929C22.5196 13.1054 22.2652 13 22 13ZM21 21H15V15H21V21Z" fill="white"/>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane" id="List">
            <div class="row">
                <div class="col-xl-12">
                    @unless (count($jobs) == 0)
                        @foreach($jobs as $job)
                            <x-job-search-list-card :job="$job"/>
                        @endforeach
                    @else
                        <p>No listings found.</p>
                    @endunless
                </div>
            </div>
        </div>
        <div class="tab-pane active show" id="Boxed">					
            <div class="row">
                @unless (count($jobs) == 0)
                        @foreach($jobs as $job)
                            <x-job-search-boxed-card :job="$job"/>
                        @endforeach
                    @else
                        <p>No listings found.</p>
                    @endunless
            </div>
        </div>
    </div>
</div>
<input type="hidden" name="" id="additional_questions_status">
<!-- Modal -->
<div class="modal fade" id="apply_now_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Apply to <span id="modal_title_company_name"></span></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"  onclick="onCancel()" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">     
                        <div id="smartwizard" class="form-wizard order-create">
                            <ul class="nav nav-wizard">
                                <li><a class="nav-link" href="#wizard_start"> 
                                    <span>1</span> 
                                </a></li>
                                <li><a class="nav-link" href="#wizard_info"> 
                                    <span>2</span> 
                                </a></li>
                                <li><a class="nav-link" id="wizard_document_link" href="#wizard_document">
                                    <span>3</span>
                                </a></li>
                                <li><a class="nav-link" href="#wizard_preview">
                                    <span id="">4</span>
                                </a></li>
                            </ul>
                            <div class="tab-content wizard_adjustable_height">
                                <form action="/user/application/store" method="POST" enctype="multipart/form-data" id="application_form">
                                    @csrf
                                    <div id="wizard_start" class="tab-pane" role="tabpanel">
                                        <div class="d-flex justify-content-center">
                                            <h2>Apply to <span id="wizard_start_company_name" ></span></h2>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <h5>All field with <span class="text-danger">*</span> are compulsory</h5>
                                        </div>
                                       
                                    </div>
                                    <div id="wizard_info" class="tab-pane" role="tabpanel" style="display: block;">
                                        <div class="alert alert-danger" id="contact-info-error" role="alert" style="display: none;">
                                            Please fill all compulsory fields
                                          </div>
                                        <h3 class="mb-3">Contact info</h3>
                                        <div class="clearfix mb-3">
                                            <div class="d-flex flex-row">
                                                <img src="{{ asset('assets/images/profile/17.jpg')}}" width="50" alt="" class="rounded img-fluid d-inline-flex me-2"/>
                                                <div class="">
                                                    <h4 class="">{{auth()->user()->first_name.' '.auth()->user()->last_name}}</h4>
                                                    <h5>HeadLine</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">First Name <span class="text-danger">*</span></label>
                                                    <input type="text" name="first_name" class="form-control contact-info" placeholder="Parsley" value="{{ auth()->user()->first_name }}" readonly required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Last Name <span class="text-danger">*</span></label>
                                                    <input type="text" name="last_name" class="form-control contact-info" placeholder="Montana" value="{{ auth()->user()->last_name }}" readonly required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Email Address <span class="text-danger">*</span></label>
                                                    <input type="email" name="email" class="form-control contact-info" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" value="{{ auth()->user()->email }}" readonly required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Phone Number <span class="text-danger">*</span></label>
                                                    <input type="text" name="phone_number" class="form-control contact-info" placeholder="(+1)408-657-9007" value="+2349020414123" readonly required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mb-5">
                                                <div class="form-group">
                                                    <label class="text-label">Where are you from <span class="text-danger">*</span></label>
                                                    <input type="text" name="place" class="form-control contact-info" value="OYO" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="wizard_document" class="tab-pane" role="tabpanel">
                                        <div class="alert alert-danger" id="document-error" role="alert" style="display: none;">
                                            Please fill all compulsory fields
                                          </div>
                                        <h3 class="mb-2">Documents </h3>
                                        <div class="row">
                                            <div class="col-sm-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Resume(only pdf documents allowed) <span class="text-danger">*</span> </label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">Upload</span>
                                                        <div class="form-file">
                                                            <input type="file" class="form-file-input form-control documents" name="resume" accept=".pdf" id="resume-upload" max-file-size="2048" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 mb-2">
                                                <div class="form-group"> <!---- Cover letter not compulsory -->
                                                    <label class="text-label">Cover Letter(only pdf documents allowed) <span class="text-danger" id="required_star_for_cover_letter" style="display: none">*</span></label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">Upload</span>
                                                        <div class="form-file"> <!---- Cover letter depends if it is compoulsory or not -->
                                                            <input type="file" class="form-file-input form-control" accept=".pdf" name="cover_letter" id="cover-letter-upload">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="additional_questions_div">
                                            <h3 class="mb-3">Additional Questions </h3>
                                            <div class="row" id="additional_questions_input_div">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div id="wizard_preview" class="tab-pane" role="tabpanel">
                                        <h3 class="mb-3">Preview Your Application</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12 mb-2">
                                                <h4>Contact info</h4>
                                                <div class="clearfix mb-3">
                                                    <div class="d-flex flex-row">
                                                        <img src="{{ asset('assets/images/profile/17.jpg')}}" width="50" alt="" class="rounded img-fluid d-inline-flex me-2"/>
                                                        <div class="">
                                                            <h4 class="">{{auth()->user()->first_name.' '.auth()->user()->last_name}}</h4>
                                                            <h5>HeadLine</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p>Email</p>
                                                    <h6>{{ auth()->user()->email }}</h6>
                                                </div>
                                                <div>
                                                    <p>Country</p>
                                                </div>
                                                <div>
                                                    <p>Phone Number</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col-sm-12 mb-2">
                                                <h4>Documents <span class="me-3"><button type="button" class="btn btn-sm btn-dark" id="edit_documents">Edit</button></span></h4>
                                                <div>
                                                    <p>Resume</p>
                                                    <embed src="" type="" width="95%" height="400px" id="embedded-resume-upload" class="border border-3 border-primary rounded-2">
                                                </div>
                                                {{-- hide if not required --}}
                                                <div class="mt-3" id="preveiw_cover_letter_div">
                                                    <p>Cover letter</p>
                                                    <embed src="" type="" width="95%" height="400px" id="embedded-cover-letter-upload" class="border border-3 border-primary rounded-2"/>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col-sm-12 mb-2" id="additional_questions_main_div">
                                                <h4>Additional Questions <span class="me-3"><button type="button" class="btn btn-sm btn-dark" id="edit_additional_questions">Edit</button></span></h4>
                                                <div class="row" id="additional_questions_preview_div">
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mb-4">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="close-modal-btn">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        const MAX_FILE_SIZE = 2 * 1024 * 1024;
        
        $('#apply_now_modal').on('hide.bs.modal', function (e) {

            if(!$('#apply_now_modal').hasClass('programmatic')){
                e.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You will loose your data and can't contnue with the application this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, close it!'
                    }).then((result) => {
                        
                    if (result.isConfirmed) {

                        $('#apply_now_modal').addClass('programmatic');
                        $('#apply_now_modal').modal('hide');
                        e.stopPropagation();
                    }else{
                        e.stopPropagation();
                        return false;
                    }
                })
            }

            // update to sweet alert later
            // var response = confirm('Are you sure you want to cancel this?');
            //alert(response)
            // if(!response){
            //     e.preventDefault();
            //     e.stopPropagation();
            //     return false;
            // }
            $('#smartwizard').smartWizard("reset");

        });
        
        $('#apply_now_modal').on('hidden.bs.modal', function () {
            $('#apply_now_modal').removeClass('programmatic');
            // clear form here and clear all other places
            document.querySelector("#contact-info-error").style.display = 'none';
            document.querySelector("#document-error").style.display = 'none';
            document.querySelector("#additional_questions_input_div").innerHTML = "";
            document.getElementById('application_form').reset();
            $('#smartwizard').smartWizard("reset");

            document.querySelector("#required_star_for_cover_letter").style.display = "none";
            if($('#cover-letter-upload').hasClass('documents')){
                document.querySelector("#cover-letter-upload").classList.remove("documents")
                document.querySelector("#cover-letter-upload").setAttribute("required", false)
            }
           
        });

        document.addEventListener('DOMContentLoaded', function(){
            $('#smartwizard').smartWizard("reset");
        })

        $(document).ready(function(){
            
			// SmartWizard initialize
			$('#smartwizard').smartWizard();

            //reset SmartWizard 
            $('#smartwizard').smartWizard("reset");
            
            
            $('#apply_now_modal').on('show.bs.modal', function(e) {
               $('#smartwizard').smartWizard("reset");

                var job_id = $(e.relatedTarget).data('id');
                var company_name = $(e.relatedTarget).data('company-name');
                var cover_letter_status = $(e.relatedTarget).data('cover-letter-status');
                
                //alert(cover_letter_status);
                if(cover_letter_status == "yes"){
                    document.querySelector("#required_star_for_cover_letter").style.display = "block";
                    document.querySelector("#cover-letter-upload").classList.add("documents")
                    document.querySelector("#cover-letter-upload").setAttribute("required", true)
                }

                var url = '{{  url("/user/job_details/:id") }}';
                    url = url.replace(':id', job_id);
                var modal_title_company_name = document.querySelector("#modal_title_company_name")
                var wizard_start_company_name = document.querySelector("#wizard_start_company_name");
                var additional_questions_input_div = document.querySelector("#additional_questions_input_div");
                
            
                //console.log(company_name);
                fetch(url)
                .then((response) => response.json())
                .then((job_details) => {
                    //console.log(job_details)
                    //sub_category_name_edit.value = sub_category_data.name;
                    //console.log(job_details.custom_question);
                    if(job_details.custom_question !== "" && job_details.custom_question != null){

                        document.querySelector("#additional_questions_main_div").style.display = "block";
                        document.querySelector("#additional_questions_div").style.display = "block";
                        document.querySelector("#additional_questions_status").value = "yes";

                        let custom_questions = JSON.parse(job_details.custom_question) ;

                        let additional_field_input = '';
                        custom_questions.forEach((custom_question) =>{
                            additional_field_input +=`<div class="col-sm-12 col-lg-12 mb-2">
                                                        <div class="form-group">
                                                            <label class="text-label">${custom_question} <span class="text-danger">*</span></label>
                                                            <input type="text" name="custom_response[]" class="form-control additional-questions" placeholder="" value="" data-question="${custom_question}" required>
                                                        </div>
                                                    </div>`;
                        });

                        additional_questions_input_div.innerHTML = additional_field_input;
                        

                    }else{

                        //document.querySelector("#wizard_additional_questions_link").style.display = "none";
                        document.querySelector("#additional_questions_main_div").style.display = "none";
                        document.querySelector("#additional_questions_div").style.display = "none";
                        document.querySelector("#additional_questions_status").value = "no";

                    }
                    
                    modal_title_company_name.innerHTML = company_name;
                    wizard_start_company_name.innerHTML = company_name

                })
                .catch((error) => {
                    console.log('Error:', error);
                })
            })
            
            $('#apply_now_modal').on('shown.bs.modal', event => {
                document.querySelector(".wizard_adjustable_height").setAttribute("style","height:64px");
            })

            document.querySelector("#edit_additional_questions").addEventListener('click', function(event){
                var link = document.querySelector('#wizard_document_link');
                link.click();
            })

            document.querySelector("#edit_documents").addEventListener('click', function(event){
                var link = document.querySelector('#wizard_document_link');
                link.click();
            })

            $(function() {

                 // Leave step event is used for validating the forms
                $("#smartwizard").on("leaveStep", function(e, anchorObject, currentStepIdx, nextStepIdx, stepDirection) {

                    

                    // Validate only on forward movement  
                    if (stepDirection == 'forward') {
                        
                        let additional_questions_status = document.querySelector("#additional_questions_status").value

                        //alert(currentStepIdx);

                        // Validate  each step here
                        if(currentStepIdx == 1) {
                        
                            var elements = document.querySelectorAll(".contact-info");
                            var contact_info_error = document.querySelector("#contact-info-error");
                            var wizard_height = document.querySelector(".wizard_adjustable_height");
                            var status = true;

                            elements.forEach(function (element) {
                                if(element.value == ''){
                                   
                                    status = false;
                                    contact_info_error.style.display = 'block';
                                    wizard_height.setAttribute("style","height:695px");
                                    e.preventDefault();
                                    e.stopPropagation();
                                    return false;
                                }
                            })
                            //console.log(elements);

                            if(status){
                                contact_info_error.style.display = 'none';
                            }
                           
                         }

                         if(currentStepIdx == 2) {
                            var elements = document.querySelectorAll(".documents");
                            var additional_questions = document.querySelectorAll(".additional-questions");
                            var document_error = document.querySelector("#document-error");
                            var wizard_height = document.querySelector(".wizard_adjustable_height")
                            var cover_letter_upload = document.querySelector("#cover-letter-upload");
                            var status = true;

                            //alert(additional_questions.length);
                            elements.forEach(function (element) {
                                if(element.value == ''){
                                   
                                   status = false;
                                   document_error.style.display = 'block';
                                   
                                    wizard_height.setAttribute("style","height:305px");
                                    e.preventDefault();
                                    e.stopPropagation();
                                    return false;
                                }
                            })

                            
                            switch (additional_questions.length) {
                                case 5:
                                    //alert(additional_questions.length)
                                    //809px
                                    var height =  "834px" ;
                                    break;
                                case 4:
                                    //709px
                                    var height =  "734px" ;
                                    break;
                                case 3:
                                    //609px
                                    //var height = wizard_height.offsetHeight + 330 +'px' ;
                                    var height =  "634px" ;
                                    break;
                                case 2:
                                    //509px
                                    var height =  "534px" ;
                                    break;
                                case 1:
                                    //409px
                                    var height =  "434px" ;
                                    break;
                            
                                default:
                                    //var height = wizard_height.offsetHeight + 550 +'px' ;
                                    break;
                            }
                            
                            additional_questions.forEach(function(additional_question){
                                if(additional_question.value == ''){
                                   
                                   status = false;
                                   document_error.style.display = 'block';
                                
                                   wizard_height.setAttribute("style","height:"+height);
                                    e.preventDefault();
                                    e.stopPropagation();
                                    return false;
                                }
                            })
                            //console.log(elements);

                            if(status){
                                document_error.style.display = 'none';
                                
                                // additonal element here
                                let additional_question_preveiw = "";
                                additional_questions.forEach( additional_question => {
                                    additional_question_preveiw += `<div>
                                                                        <p>${additional_question.dataset.question}</p>
                                                                        <h6>${additional_question.value}</h6>
                                                                    </div>`
                                })

                                //console.log(additional_question_preveiw);
                                document.querySelector("#additional_questions_preview_div").innerHTML = additional_question_preveiw;

                                // if cover letter is not selected hide the 
                                if(cover_letter_upload.value == ""){
                                    document.querySelector("#preveiw_cover_letter_div").style.display = "none";
                                }else{
                                    document.querySelector("#preveiw_cover_letter_div").style.display = "block";
                                }
                                                
                            }
                        }
                        
                    }
                });


            })


            document.querySelector("#cover-letter-upload").addEventListener('change', function (event) {
                if (event.target.files[0].name != "") {
                    console.log(event.target.files)
                    if (event.target.files[0].size > MAX_FILE_SIZE){
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: "Cover letter must be less than " + (MAX_FILE_SIZE/1024/1024) + "MB",
                                showConfirmButton: false,
                                timer: 1500
                            })
                            event.target.value = "";
                            return false;
                    }

                    var file_type = event.target.files[0].type
                    let file_name = event.target.files[0].name;
                    var embed_id = "#embedded-cover-letter-upload";
                    //var content = readURL(event.target);  
                    let data = {input: event.target, file_type: file_type, id: embed_id}
                    readURL(data);  
                }  
            });

            document.querySelector("#resume-upload").addEventListener('change', function (event) {
                if (event.target.files[0].name != "") {
                    console.log(event.target.files)

                    if (event.target.files[0].size > MAX_FILE_SIZE){
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: "Resume must be less than " + (MAX_FILE_SIZE/1024/1024) + "MB",
                                showConfirmButton: false,
                                timer: 1500
                            })
                            event.target.value = "";
                            return false;
                    }
                    var file_type = event.target.files[0].type
                    let file_name = event.target.files[0].name;
                    var embed_id = "#embedded-resume-upload";
                    //var content = readURL(event.target);  
                    let data = {input: event.target, file_type: file_type, id: embed_id}
                    readURL(data);  
                }  
            });


            function readURL(data) {
                if (data.input.files && data.input.files[0]) {
                    //console.log(data.input.files)
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var content =  e.target.result;
                        //console.log(e.target.result);
                        content += "#toolbar=0&navpanes=0&scrollbar=0";
                        $(data.id).attr({src: content, type: data.file_type});
                           
                    }
                    reader.readAsDataURL(data.input.files[0]);
                }
                //console.log(event.target.result)
                //return content;
            } 
		});

        
    </script>
@endsection
