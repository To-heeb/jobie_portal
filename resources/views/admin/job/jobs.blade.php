@extends('layouts.admin')
@section('page_title', 'Jobs')
@section('content')
    <div class="container-fluid">
		<div class="page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
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
						<h4 class="card-title">Employers</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive" >
                            <table class="table display mb-4 dataTablesCard table-responsive-xl card-table" style="min-width: 845px" id="example5">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Company</th>
                                        <th>Type</th>
                                        <th>Postition</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="edit_delete_td">
                                    @foreach ($jobs as $job)	
                                        <tr>
                                            <td>{{$loop->iteration }}</td>
                                            <td>{{$job->title}}</td>
                                            <td>{{$job->company->name ?? "NILL"}}</td> 
                                            <td>{{ucfirst($job->employer_type)}}</td>
                                            <td>{{$job->position_in_company ?? "NILL"}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    
                                                    <a href="#" class="btn btn-sm btn-primary sharp shadow me-4" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-id="{{$job->id}}">View</a>
                                                    {{-- <a href="#" class="btn btn-sm sharp shadow btn-danger sweet-confirm">Delete</a> --}}
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
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title"><b id="">View Employer</b></h5>
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
        
        (function($) {
			var table = $('#example5').DataTable({
				searching: false,
				paging:true,
				select: false,
				//info: false,         
				lengthChange:false 
				
			});
			$('#example tbody').on('click', 'tr', function () {
				var data = table.row( this ).data();
				
			});
		})(jQuery);

		
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
				if (result.isConfirmed) {
					Swal.fire(
					'Deleted!',
					'Salary Range has been deleted.',
					'success'
					)
				}else{
					Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Something went wrong!',
					})
				}
			})
		})

    </script>
@endsection