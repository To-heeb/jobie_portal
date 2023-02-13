@extends('layouts.employer')
@section('page_title', 'Jobs')
@section('content')
    <div class="container-fluid">
		<div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Jobs</a></li>
			</ol>
		</div>
		
		<!-- row -->
        <div class="row">
            <div class="col-lg-12">
				<x-flash-message />
			</div>

            <div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Jobs</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive" >
                            <table class="table display mb-4 dataTablesCard table-responsive-xl card-table" style="min-width: 845px" id="example5">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
										<th>Applications</th>
                                        <th>Category</th>
                                        <th>Sub-Category</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Experience Level</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="edit_delete_td">
                                    @foreach ($jobs as $job)	
                                        <tr>
                                            <td>{{$loop->iteration }}</td>
                                            <td>{{$job->title}}</td>
											<td>{{count($job->applications)}}</td>
                                            <td>{{$job->job_sub_category->job_category->name}}</td>
                                            <td>{{$job->job_sub_category->name}}</td> 
                                            <td>{{ucfirst($job->type)}}</td>
                                            <td>{{ucfirst($job->status)}}</td>
                                            <td>{{ucfirst(str_replace('_', ' ',$job->level))}}</td>
                                            <td>{{ date("F j, Y", strtotime($job->start_range)) }}</td>
                                            <td>{{ date("F j, Y", strtotime($job->end_range))}}</td>
                                            <td>
                                                <div class="d-flex"> 
                                                    <a href="#" class="btn btn-sm btn-primary sharp shadow me-4" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-id="{{$job->id}}">Preview</a>
													<a href="/employer/jobs/applications/{{$job->id}}" class="btn btn-sm btn-info sharp shadow me-4">Applications</a>
                                                    <a href="/employer/jobs/{{$job->id}}" class="btn btn-sm btn-secondary sharp shadow me-4">Edit</a>
                                                    <a href="#" class="btn btn-sm sharp shadow btn-danger sweet-confirm"  data-id="{{$job->id}}">Delete</a>
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

			<!-- Large modal -->
			<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="preview_job_modal">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title"><b id="">Preview Job</b></h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal">
							</button>
						</div>
						<div class="modal-body">
							<div class="card d-sm-flex flex-xl-column flex-md-row">
								<div class="card-body border-bottom col-xl-12 col-md-6">
									<h4 class="fs-22 text-black font-w600 mb-1" id="job_title"></h4>
									<p id="company_name"></p>
									<div class="row">
										<div class="media pr-2 mb-2">
											<i class="fa fa-building me-3" style="font-size:24px"></i>
											<div class="media-body text-left">
												<h4 class="fs-8 mb-0 text-black font-w600" id="no_of_employees"></h4>
												<span class="fs-6">Employee</span> • <span id="job_sub_category"></span>
											</div>
										</div>
										<div class="media pr-2 mb-4">
											<i class="fa fa-briefcase me-3" style="font-size:24px"></i>
											<div class="media-body text-left">
												<span class="fs-6" id="job_type"></span> • <span id="job_level"></span>
											</div>
										</div>
										<div class="media pr-2 mb-4">
											<i class="fa fa-map me-3" style="font-size:24px"></i>
											<div class="media-body text-left">
												<span class="fs-6" id="job_location_type"></span>
											</div>
										</div>
										{{-- Add job level and type --}}
										<div class="mb-3">
											<a href="javascript:void(0);" class="btn btn-primary light btn-rounded me-auto" style='pointer-events: none; opacity: 0.3;' >Apply Now</a>
										</div>
									</div>
									<div class="row">
										<h6 class="fs-16 text-black mb-1">Job Summary</h6>
										<p id="job_summary"></p>
									</div>
									<div class="row">
										<h6 class="fs-16 text-black mb-1">Job Description</h6>
										<p id="job_description"></p>
									</div>
								</div>
								<div class="card-body col-xl-12 col-md-6 border-left ">
									<h6 class="fs-16 text-black font-w600 mb-4">About Company</h6>
									<p class="fs-14" id="company_about"></p>
									<div class="d-flex justify-content-between flex-wrap pt-3">
										<a href="/employer/company/profiles/{{auth()->user()->company_id}}" class="btn btn-dark btn-rounded btn-sm mb-2" id="">More Details</a>
									</div>
									<div class="row mt-5">
										<div class="col-xl-12">
											<div class="media pr-2 mb-4">
												<svg class="me-3 min-w46" width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="46" height="46" rx="23" fill="#40189D"/>
													<path fill-rule="evenodd" clip-rule="evenodd" d="M20.7833 23.3841C20.7391 23.3453 20.6369 23.255 20.6006 23.2209C19.7145 22.3882 19.134 21.0843 19.134 19.6148C19.134 17.0488 20.8998 15.0156 23.0004 15.0156C25.101 15.0156 26.8668 17.0488 26.8668 19.6148C26.8668 21.083 26.2873 22.386 25.4036 23.2201C25.3664 23.2552 25.2623 23.3473 25.2186 23.3857L25.2148 23.4495C25.2396 23.8322 25.4968 24.1639 25.866 24.281C28.6105 25.149 30.6003 27.223 30.9344 29.6811C30.9803 30.0091 30.882 30.3408 30.6647 30.5906C30.4474 30.8405 30.1326 30.984 29.8016 30.984C27.3793 30.9844 18.6216 30.9844 16.1993 30.9844C15.8681 30.9844 15.5531 30.8409 15.3357 30.591C15.1184 30.341 15.02 30.0091 15.0657 29.6833C15.4006 27.2229 17.3903 25.149 20.1344 24.2811C20.5049 24.1636 20.7624 23.8306 20.7861 23.4465L20.7833 23.3841Z" fill="white"/>
												</svg>
												<div class="media-body text-left">
													<h4 class="fs-18 mb-0 text-black font-w600" id="no_of_employees_two"></h4>
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
													<h4 class="fs-18 text-black font-w600 mb-0" id="company_location"></h4>
													<span class="fs-14">Location</span>
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

			<input type="hidden" name="" id="csrf_token" value="{{ csrf_token() }}">
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
        
        // (function($) {
		// 	var table = $('#example5').DataTable({
		// 		searching: false,
		// 		paging:true,
		// 		select: false,
		// 		//info: false,         
		// 		lengthChange:false 
				
		// 	});
		// 	$('#example tbody').on('click', 'tr', function () {
		// 		var data = table.row( this ).data();
				
		// 	});
		// })(jQuery);


		$('#preview_job_modal').on('show.bs.modal', function(e) {
			
			var job_id = $(e.relatedTarget).data('id');
			
			var url = '{{  url("/employer/jobs/details/:id") }}';
			url = url.replace(':id', job_id);

			//alert(url);
			var company_name = document.querySelector("#company_name");
			var company_about = document.querySelector("#company_about")
			var company_location = document.querySelector("#company_location");
			var no_of_employees = document.querySelector("#no_of_employees");
			var no_of_employees_two = document.querySelector("#no_of_employees_two");
			var job_title = document.querySelector("#job_title");
			var job_sub_category = document.querySelector("#job_sub_category");
			var job_level = document.querySelector("#job_level");
			var job_type = document.querySelector("#job_type");
			var job_location_type = document.querySelector("#job_location_type");
			var job_summary = document.querySelector("#job_summary");
			var job_description = document.querySelector("#job_description");


			var ucfirst_str_replace = function(string){
				return string.charAt(0).toUpperCase() + string.slice(1).replace('_', '-');
			}

			var ucfirst = function(string){
				return string.charAt(0).toUpperCase() + string.slice(1);
			}	

			fetch(url)
			.then((response) => response.json())
			.then((job_details) => {
				console.log(job_details.job.company)

				var job = job_details.job;
				var company = job_details.job.company;
				company_name.innerHTML = company.name;
				company_about.innerHTML = company.about;
				company_location.innerHTML = `${company.state +','+company.country}`;
				no_of_employees.innerHTML = company.no_of_employees;
				no_of_employees_two.innerHTML = company.no_of_employees;
				job_title.innerHTML = job.title;
				job_sub_category.innerHTML = ucfirst(job.job_sub_category.name);
				job_level.innerHTML = ucfirst_str_replace(job.level);
				job_type.innerHTML = ucfirst_str_replace(job.type);
				job_location_type.innerHTML = ucfirst_str_replace(job.location_type);
				job_summary.innerHTML = job.summary;
				job_description.innerHTML = job.description;


			})
			.catch((error) => {
				console.log('Error:', error);
			})
		})

		var ucfirst_str_replace = function(string){
				return string.replace('_', '-').charAt(0).toUpperCase();
			}

		var ucfirst = function(string){
			return string.charAt(0).toUpperCase();
		}

		document.querySelector("#edit_delete_td").addEventListener('click', function (event) {
			 //alert(event.target.classList)
			 if(!event.target.classList.contains("sweet-confirm")) return false;
			 Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
				}).then((result) => {

					// make ajax call here
					if(result.isConfirmed){
						var job_id = event.target.dataset.id;
						//alert(event.target.dataset.id);
						var url = '{{  url("/employer/jobs/:id") }}';
						url = url.replace(':id', job_id);
						var csrf_token = document.querySelector('#csrf_token').value;
						
						//alert(url);
						fetch(url, 
							{
								method: 'DELETE',
								headers: {
									'Content-Type': 'application/json',
									'X-CSRF-TOKEN': csrf_token
								},
							})
						.then((response) => response)
						.then((data) => {
							
							console.log('Success:', data);

							if(data.status === 204){
								Swal.fire(
								'Deleted!',
								'Job has been deleted.',
								'success'
								)

								location.reload();
							}else{
								Swal.fire({
								icon: 'error',
								title: 'Oops...',
								text: 'Something went wrong!',
								})
							}
						})
						.catch((error) => {
							console.log('Error:', error);
						});
					}
			})
		})

    </script>
@endsection