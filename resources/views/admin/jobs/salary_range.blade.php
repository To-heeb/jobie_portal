@extends('layouts.admin')
@section('page_title', 'Salary Range')
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
						<h4 class="card-title">Add Salary Range</h4>
					</div>
					<div class="card-body">
						<div class="basic-form">
							<form class="needs-validation" novalidate action="/admin/salary_range" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6">
										<label class="form-label" for="start_range">Start Range</label>
                                        {{-- min will be the heighest of the latest added fron db --}}
										<input type="number" class="form-control" name="start_range" id="start_range" placeholder="" min="" max="" required>
                                        <div class="invalid-feedback">
											Please Enter Start Range.
										</div>
                                        @error('start_range')
										    <p class="text-danger fs-6">{{ $message }}</p>
									    @enderror
									</div>
									<div class="mb-3 col-md-6">
										<label class="form-label" for="end_range">End Range</label>
										<input type="number" class="form-control" name="end_range" id="end_range" placeholder="" min="0"  required>
                                        <div class="invalid-feedback">
											Please Enter End Range.
										</div>
                                        @error('end_range')
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
						<h4 class="card-title">Salary Range</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive" >
							<table id="example3" class="display" style="min-width: 845px">
								<thead>
									<tr>
										<th>No</th>
										<th>Start Range</th>
										<th>End Range</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody id="edit_delete_td">

									@php $kounter = 0 @endphp
									@foreach ($salary_ranges as $salary_range)		
										<tr>
											<td>{{$loop->iteration }}</td>
											<td>{{"₦".number_format($salary_range->start_range, 2, '.', ',')}}</td>
											<td>{{"₦".number_format($salary_range->end_range, 2, '.', ',')}}</td>
											<td><a href="#" class="btn btn-sm btn-primary sharp shadow ml-4" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg" data-id="{{$salary_range->id}}">Edit</a> <a href="#" class="btn btn-sm sharp shadow btn-danger sweet-confirm">Delete</a></td>
										</tr>
										@if($loop->last)
											<input type="text" style="display: none;" name="max_range" id="max_range" value="" data-max="{{ $salary_range->end_range }}" data-min="{{ $salary_range->start_range }}">
										@endif

									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<!-- Large modal -->
			<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="edit_salary_modal">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title"><b id="">Edit Salary Range</b></h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal">
							</button>
						</div>
						<div class="modal-body">
							<form class="needs-validation" novalidate action="/admin/salary_range" method="POST">
								@csrf
								@method('PUT')
								<div class="row">
									<div class="mb-3 col-md-6">
										<label class="form-label" for="start_range_edit">Start Range</label>
										
										<input type="number" class="form-control" name="start_range_edit" id="start_range_edit" placeholder="" min="" max="" required>
										<input type="hidden" name="id" id="range_id">
										<div class="invalid-feedback">
											Please Enter Start Range.
										</div>
										@error('start_range_edit')
											<p class="text-danger fs-6">{{ $message }}</p>
										@enderror
									</div>
									<div class="mb-3 col-md-6">
										<label class="form-label" for="end_range_edit">End Range</label>
										<input type="number" class="form-control" name="end_range_edit" id="end_range_edit" placeholder="" min="0"  required>
										<div class="invalid-feedback">
											Please Enter End Range.
										</div>
										@error('end_range_edit')
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
        

		const rangeValue = document.querySelector('#max_range');
		var maxValue = rangeValue.dataset.max;
		var minValue = rangeValue.dataset.min;
		document.querySelector("#start_range").value = maxValue;

		$('#edit_salary_modal').on('show.bs.modal', function(e) {

			var range_id = $(e.relatedTarget).data('id');
			
			var url = '{{  url("/admin/salary_range/:id") }}';
			url = url.replace(':id', range_id);

			var start_range_edit = document.querySelector("#start_range_edit")
			var end_range_edit = document.querySelector("#end_range_edit")
			var range_id = document.querySelector("#range_id")
			start_range_edit.value = "";
			end_range_edit.value = "";

			fetch(url)
			.then((response) => response.json())
			.then((range_data) => {
				//console.log(range_data)
				start_range_edit.value = range_data.start_range;
				end_range_edit.value = range_data.end_range;
				range_id.value = range_data.id

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