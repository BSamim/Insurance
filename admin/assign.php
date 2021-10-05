<?php

include('database.php');
include("header.php");
include("sidebar.php");


?>

<html>
<head>
	<style>
	.dtHorizontalExampleWrapper {
		max-width: 600px;
		margin: 0 auto;
	}
	#dtHorizontalExample th, td {
		white-space: nowrap;
	}

	table.dataTable thead .sorting:after,
	table.dataTable thead .sorting:before,
	table.dataTable thead .sorting_asc:after,
	table.dataTable thead .sorting_asc:before,
	table.dataTable thead .sorting_asc_disabled:after,
	table.dataTable thead .sorting_asc_disabled:before,
	table.dataTable thead .sorting_desc:after,
	table.dataTable thead .sorting_desc:before,
	table.dataTable thead .sorting_desc_disabled:after,
	table.dataTable thead .sorting_desc_disabled:before {
		bottom: .5em;
	}
	.text{
		color: white
	}
</style>

<script>
	$(document).ready(function () {
		$('#dtHorizontalExample').DataTable({
			"scrollX": true
		});
		$('.dataTables_length').addClass('bs-select');
	});
</script>

</head>
</html>
<!-- Main content -->
<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header page-header-light">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
				<a href="categories_panel.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Roles Panel</a>
				<span class="breadcrumb-item active">Roles Lists</span>
			</div>

			<div class="header-elements d-none">

			</div>
		</div>


	</div>
	<!-- /page header -->

	<!-- Content area -->
	<div class="content">

		<div class="row">
			<div class="col-xl-12">

				<div class="card">
					<div class="row">
						<div class="col-md-12">
							<h2 class="p-3">Roles</h2>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<form action="/action_page.php">
								<label class="font-weight-bold" for="cars">User List</label>
								<select class="form-control" name="cars" id="cars">
									<option value="volvo">User 1</option>
									<option value="saab">User 2</option>
									<option value="opel">User 3</option>
									<option value="audi">User 4</option>
								</select>
								<br><br>
							</form>
						</div>
						<div class="col-md-4"></div>
					</div>

					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<form action="/action_page.php">
								<label class="font-weight-bold" for="cars">Role List</label>
								<select class="form-control" name="cars" id="cars">
									<option value="volvo">Role 1</option>
									<option value="saab">Role 2</option>
									<option value="opel">Role 3</option>
									<option value="audi">Role 4</option>
								</select>
								<br><br>
							</form>
						</div>
						<div class="col-md-4"></div>
					</div>

					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4 text-center mb-3">
							<button type="button" class="btn btn-success text-center" >Submit</button>
						</div>
						<div class="col-md-4"></div>
					</div>



				</div>
				<!-- /support tickets -->


			</div>


		</div>


	</div>	
	

	<script>
		function deleteit(){
			return(confirm("The record will be deleted permanently. Do you really want to continue?"));
		}
		function editit(){
			return(confirm("Do you want to edit?"));
		}
	</script>

	<?php

	include("footer.php");            

	?>
