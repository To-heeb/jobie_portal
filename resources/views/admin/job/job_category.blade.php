@extends('layouts.admin')
@section('page_title', 'Job Category')
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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Job Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="needs-validation" novalidate action="/admin/job_category" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="name">Job Category Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Health" required>
                                        <div class="invalid-feedback">
                                            Please Enter Job Category Name.
                                        </div>
                                        @error('name')
                                            <p class="text-danger fs-6">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn me-2 btn-primary" id="my-btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Job Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" >
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="edit_delete_td">

                                    @php $kounter = 0 @endphp
                                    @foreach ($job_categories as $job_category)		
                                        <tr>
                                            <td>{{$loop->iteration }}</td>
                                            <td>{{$job_category->name}}</td>
                                            <td><a href="#" class="btn btn-sm btn-primary sharp shadow ml-4" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-id="{{$job_category->id}}">Edit</a> <a href="#" class="btn btn-sm sharp shadow btn-danger sweet-confirm">Delete</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Large modal -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="edit_category_modal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><b id="">Edit Job Category</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="/admin/job_category" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="category_name_edit">Name</label>
                                        <input type="text" class="form-control" name="category_name_edit" id="category_name_edit" placeholder="" required>
                                        <input type="hidden" name="id" id="category_id">
                                        <div class="invalid-feedback">
                                            Please Enter Job Category.
                                        </div>
                                        @error('category_name_edit')
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
        

		
		$('#edit_category_modal').on('show.bs.modal', function(e) {

			var category_id = $(e.relatedTarget).data('id');
			
			var url = '{{  url("/admin/job_category/:id") }}';
			url = url.replace(':id', category_id);

			var category_name_edit = document.querySelector("#category_name_edit")
			var category_id = document.querySelector("#category_id")
			category_name_edit.value = "";

			fetch(url)
			.then((response) => response.json())
			.then((category_data) => {
				//console.log(range_data)
				category_name_edit.value = category_data.name;
				category_id.value = category_data.id

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