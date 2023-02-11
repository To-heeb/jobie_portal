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
                                                    <a href="#" class="btn btn-sm btn-primary sharp shadow me-4" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-id="{{$job->id}}">View</a>
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
			<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="edit_industry_modal">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title"><b id="">View Job</b></h5>
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

		
		$('#edit_industry_modal').on('show.bs.modal', function(e) {

			var industry_id = $(e.relatedTarget).data('id');
			
			var url = '{{  url("/admin/industry/:id") }}';
			url = url.replace(':id', industry_id);

			var industry_name_edit = document.querySelector("#industry_name_edit")
			var industry_id = document.querySelector("#industry_id")
			industry_name_edit.value = "";

			fetch(url)
			.then((response) => response.json())
			.then((industry_data) => {
				//console.log(range_data)
				industry_name_edit.value = industry_data.name;
				industry_id.value = industry_data.id

			})
			.catch((error) => {
				console.log('Error:', error);
			})
		})

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

					var job_id = event.target.dataset.id;
					//alert(event.target.dataset.id);
					var url = '{{  url("/employer/jobs/:id") }}';
					url = url.replace(':id', job_id);
					var csrf_token = document.querySelector('#csrf_token').value;
					
					alert(url);

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
			})
		})

    </script>
@endsection