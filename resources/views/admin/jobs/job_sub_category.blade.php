@extends('layouts.admin')
@section('page_title', 'Job Sub-Category')
@section('content')
    
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