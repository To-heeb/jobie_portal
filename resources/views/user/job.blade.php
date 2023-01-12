@extends('layouts.user')
@section('page_title', 'Job Details')
@section('content')
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{$job_details->title}}</a></li>/
                <li class="breadcrumb-item"><a href="javascript:void(0)">{{$job_details->company->name}}</a></li>
            </ol>
        </div>

        <div class="row">
            <div class="col-xl-12 col-xxl-12">
				<div class="row">
					<div class="col-xl-12">
						<div class="card d-sm-flex flex-xl-column flex-md-row">
							<div class="card-body border-bottom col-xl-12 col-md-6">
								<h4 class="fs-22 text-black font-w600 mb-1">{{$job_details->title}}</h4>
								<p>{{$job_details->company->name}}</p>
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
                                    <div class="mb-3">
                                        <a href="javascript:void(0);" class="btn btn-primary light btn-rounded me-auto" data-bs-toggle="modal" data-bs-target="#apply_now_modal" data-id="{{$job_details->id}}" data-company-name="{{$job_details->company->name}}">Apply Now</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <h6 class="fs-16 text-black mb-1">Job Summary</h6>
                                    <p>{{$job_details->summary}}</p>
                                </div>
                                <div class="row">
                                    <h6 class="fs-16 text-black mb-1">Job Description</h6>
                                    <?=$job_details->description?>
                                </div>
							</div>
							<div class="card-body col-xl-12 col-md-6 border-left ">
								<h6 class="fs-16 text-black font-w600 mb-4">About Company</h6>
								<p class="fs-14"><?= substr_replace($job_details->company->about, "...", 150); ?></p>
								<div class="d-flex justify-content-between flex-wrap pt-3">
									{{-- <a href="javascript:void(0);" class="btn btn-primary btn-rounded btn-sm mb-2">23 Vacancy</a> --}}
									<a href="/user/company/{{$job_details->company->id}}" class="btn btn-dark btn-rounded btn-sm mb-2">More Details</a>
								</div>
                                <div class="row mt-5">
									<div class="col-xl-12">
										<div class="media pr-2 mb-4">
											<svg class="me-3 min-w46" width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="46" height="46" rx="23" fill="#40189D"/>
												<path fill-rule="evenodd" clip-rule="evenodd" d="M20.7833 23.3841C20.7391 23.3453 20.6369 23.255 20.6006 23.2209C19.7145 22.3882 19.134 21.0843 19.134 19.6148C19.134 17.0488 20.8998 15.0156 23.0004 15.0156C25.101 15.0156 26.8668 17.0488 26.8668 19.6148C26.8668 21.083 26.2873 22.386 25.4036 23.2201C25.3664 23.2552 25.2623 23.3473 25.2186 23.3857L25.2148 23.4495C25.2396 23.8322 25.4968 24.1639 25.866 24.281C28.6105 25.149 30.6003 27.223 30.9344 29.6811C30.9803 30.0091 30.882 30.3408 30.6647 30.5906C30.4474 30.8405 30.1326 30.984 29.8016 30.984C27.3793 30.9844 18.6216 30.9844 16.1993 30.9844C15.8681 30.9844 15.5531 30.8409 15.3357 30.591C15.1184 30.341 15.02 30.0091 15.0657 29.6833C15.4006 27.2229 17.3903 25.149 20.1344 24.2811C20.5049 24.1636 20.7624 23.8306 20.7861 23.4465L20.7833 23.3841Z" fill="white"/>
											</svg>
											<div class="media-body text-left">
												<h4 class="fs-18 mb-0 text-black font-w600">{{$job_details->company->no_of_employees }}</h4>
												<span class="fs-14">Employee</span>
											</div>
										</div>
										<div class="media mb-4">
											<svg class="me-3 min-w46" width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="46" height="46" rx="23" fill="#FFBE17"/>
												<path d="M19.1205 30C18.9969 30.0004 18.8747 29.9732 18.7629 29.9203C18.6512 29.8674 18.5526 29.7902 18.4745 29.6944C18.3964 29.5985 18.3407 29.4865 18.3115 29.3663C18.2822 29.2462 18.2802 29.121 18.3055 29L18.9705 25.11L16.1455 22.365C16.0348 22.2569 15.9566 22.12 15.9196 21.9697C15.8826 21.8195 15.8883 21.6619 15.9362 21.5147C15.984 21.3675 16.072 21.2367 16.1903 21.1369C16.3086 21.0371 16.4524 20.9724 16.6055 20.95L20.5005 20.385L22.2455 16.845C22.3128 16.7031 22.419 16.5831 22.5518 16.4991C22.6845 16.4151 22.8384 16.3705 22.9955 16.3705C23.1526 16.3705 23.3065 16.4151 23.4393 16.4991C23.572 16.5831 23.6782 16.7031 23.7455 16.845L25.5005 20.385L29.4055 20.955C29.5586 20.9774 29.7024 21.0421 29.8207 21.1419C29.939 21.2417 30.027 21.3725 30.0749 21.5197C30.1227 21.6669 30.1284 21.8245 30.0914 21.9747C30.0545 22.125 29.9762 22.2619 29.8655 22.37L27.0405 25.125L27.6955 29C27.7216 29.1518 27.7049 29.3078 27.6474 29.4507C27.5898 29.5936 27.4937 29.7176 27.3697 29.8089C27.2457 29.9002 27.0987 29.9552 26.9452 29.9678C26.7917 29.9804 26.6377 29.95 26.5005 29.88L23.0005 28.045L19.5005 29.88C19.3856 29.9505 19.2551 29.9917 19.1205 30ZM17.0955 21.89L19.7355 24.465C19.8325 24.5586 19.9051 24.6745 19.9469 24.8027C19.9888 24.9308 19.9986 25.0672 19.9755 25.2L19.3505 28.83L22.6155 27.115C22.7343 27.0528 22.8664 27.0203 23.0005 27.0203C23.1346 27.0203 23.2667 27.0528 23.3855 27.115L26.6505 28.83L26.0255 25.195C26.0024 25.0622 26.0122 24.9258 26.0541 24.7977C26.0959 24.6695 26.1685 24.5536 26.2655 24.46L28.9055 21.885L25.2555 21.355C25.1222 21.3356 24.9957 21.284 24.8868 21.2047C24.7779 21.1255 24.69 21.0209 24.6305 20.9L23.0005 17.6L21.3705 20.905C21.3111 21.0259 21.2231 21.1305 21.1142 21.2097C21.0053 21.289 20.8788 21.3406 20.7455 21.36L17.0955 21.89Z" fill="white"/>
												<path d="M23.2958 17.065L25.0808 20.685C25.1042 20.7325 25.1387 20.7736 25.1814 20.8049C25.224 20.8362 25.2736 20.8569 25.3258 20.865L29.3258 21.445C29.3845 21.4561 29.4391 21.4828 29.4838 21.5225C29.5285 21.5621 29.5616 21.6131 29.5796 21.6701C29.5975 21.7271 29.5997 21.7879 29.5858 21.846C29.572 21.9041 29.5426 21.9573 29.5008 22L26.6108 24.815C26.5728 24.8521 26.5443 24.8979 26.5278 24.9484C26.5113 24.9989 26.5072 25.0526 26.5158 25.105L27.1958 29.105C27.2088 29.1685 27.2029 29.2343 27.1787 29.2944C27.1546 29.3545 27.1133 29.4062 27.06 29.443C27.0067 29.4797 26.9437 29.5 26.879 29.5013C26.8142 29.5025 26.7505 29.4847 26.6958 29.45L23.1258 27.57C23.0787 27.5455 23.0264 27.5327 22.9733 27.5327C22.9202 27.5327 22.8679 27.5455 22.8208 27.57L19.2758 29.435C19.2211 29.4697 19.1574 29.4875 19.0927 29.4863C19.0279 29.485 18.965 29.4647 18.9117 29.428C18.8584 29.3912 18.8171 29.3395 18.7929 29.2794C18.7688 29.2193 18.7628 29.1535 18.7758 29.09L19.4558 25.09C19.4645 25.0376 19.4604 24.9839 19.4439 24.9334C19.4273 24.8829 19.3988 24.8371 19.3608 24.8L16.5008 22C16.4576 21.9571 16.4271 21.9031 16.4127 21.844C16.3983 21.7848 16.4005 21.7228 16.4192 21.6648C16.4378 21.6069 16.4721 21.5552 16.5183 21.5155C16.5645 21.4758 16.6207 21.4497 16.6808 21.44L20.6808 20.86C20.7331 20.8519 20.7827 20.8312 20.8253 20.7999C20.8679 20.7686 20.9024 20.7275 20.9258 20.68L22.7108 17.06C22.7392 17.0068 22.7816 16.9624 22.8334 16.9316C22.8853 16.9008 22.9446 16.8848 23.0048 16.8853C23.0651 16.8858 23.1241 16.9028 23.1754 16.9345C23.2267 16.9662 23.2684 17.0113 23.2958 17.065Z" fill="white"/>
											</svg>
											<div class="media-body text-left">
												<h4 class="fs-18 mb-0 text-black font-w600">4.5</h4>
												<span class="fs-14">Reviews</span>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="media">
											<svg class="me-3 min-w46" width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="46" height="46" rx="23" fill="#ECECEC"/>
												<path d="M23 15C19.6227 15 16.875 17.7477 16.875 21.125C16.875 22.2061 17.1606 23.2689 17.701 24.1986C17.8269 24.4153 17.9677 24.6266 18.1196 24.8264L22.7339 31H23.2661L27.8804 24.8264C28.0322 24.6266 28.173 24.4154 28.299 24.1986C28.8394 23.2689 29.125 22.2061 29.125 21.125C29.125 17.7477 26.3773 15 23 15ZM23 23.1562C21.88 23.1562 20.9688 22.245 20.9688 21.125C20.9688 20.005 21.88 19.0938 23 19.0938C24.12 19.0938 25.0312 20.005 25.0312 21.125C25.0312 22.245 24.12 23.1562 23 23.1562Z" fill="#808080"/>
											</svg>
											<div class="media-body text-left">
												<h4 class="fs-18 text-black font-w600 mb-0">{{$job_details->company->state.', '.$job_details->company->country}}</h4>
												<span class="fs-14">Location</span>
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
                                                        <label class="text-label">Cover Letter(only pdf documents allowed) <span class="text-danger">*</span></label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Upload</span>
                                                            <div class="form-file"> <!---- Cover letter depends if it is compoulsory or not -->
                                                                <input type="file" class="form-file-input form-control documents" accept=".pdf" name="cover_letter" id="cover-letter-upload" required>
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
                                                    <div class="mt-3">
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
                            var status = true;

                            //alert(additional_questions.length);
                            elements.forEach(function (element) {
                                if(element.value == ''){
                                   
                                   status = false;
                                   document_error.style.display = 'block';
                                   
                                    wizard_height.setAttribute("style","height:280px");
                                    e.preventDefault();
                                    e.stopPropagation();
                                    return false;
                                }
                            })

                            
                            switch (additional_questions.length) {
                                case 5:
                                    //alert(additional_questions.length)
                                    //809px
                                    var height =  "809px" ;
                                    break;
                                case 4:
                                    //709px
                                    var height =  "709px" ;
                                    break;
                                case 3:
                                    //609px
                                    //var height = wizard_height.offsetHeight + 330 +'px' ;
                                    var height =  "609px" ;
                                    break;
                                case 2:
                                    //509px
                                    var height =  "509px" ;
                                    break;
                                case 1:
                                    //409px
                                    var height =  "409px" ;
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