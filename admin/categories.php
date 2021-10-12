<?php

include('database.php');
include("header.php");
include("sidebar.php");

$query = "SELECT * FROM categories";
$contacts = db::getRecords($query);
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
				<a href="categories_panel.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Admin Panel</a>
				<span class="breadcrumb-item active"> Categories</span>
			</div>

			<div class="header-elements d-none">

			</div>
		</div>


	</div>
	<!-- /page header -->

	<!-- Content area -->
	<div class="content">

		<div class="row">
		    <div class="col-md-6 mb-4">
				<!-- <h2 class="p-3">Users</h2> -->

			</div>
			<div class="col-md-6 mb-4 text-right ">
				<button style="    margin-right: 20px;" type="button" class="btn btn-success mt-3" data-toggle="modal" data-target="#add_cat">Add Category  </button>
			</div>
			<div class="col-xl-12">

				<div class="card">
					<div class="row">
						<div class="col-md-6">
							<h2 class="p-3"></h2>
							
						</div>
					</div>
					<div class="table-responsive">
						<table id="dtHorizontalExample" class="table table-striped table-bordered table-sm text-center" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Id</th>
									<th>Name</th>
									<th>Edit</th> 
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if ($contacts) {
									foreach ($contacts as $contact) {
										?>
										<tr>
											<td><?php echo $contact['id']; ?></td>
											<td><?php echo $contact['name']; ?></td>
											<td><a class="text-dark" href="#"  data-toggle="modal" data-target="#myModal1<?php echo $contact['id']; ?>"><i class="fas fa-pencil-alt"></i></a></td>
											<td><a href="action.php?delete_category=<?php echo $contact['id']; ?>"><i class="fas fa-trash text-dark"></i></a></td>
										</tr>
										<div class="modal fade" id="myModal1<?php echo $contact['id']; ?>" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header" style="background-color: black">
												<div class="text">
															<h4 class="modal-title mb-3">Update Category</h4>
														</div>
											</div>
											<div class="modal-body">
												<form method="POST" action="action.php" enctype="multipart/form-data" >
													<h5 >Category</h5>
													<input class="form-control" required type="text" name="name" value="<?php echo $contact['name']; ?>">
													<input type="hidden" name="id" value="<?php echo $contact['id']; ?>">

													<button name="update_category" type="submit" class="btn btn-success text-center ml-3 mt-3">Submit</button>
												</form>
											</div>
										</div>
									</div>
								</div>
										<?php

									}
								}
								?>

							</tbody>
						</table>
					</div>
				</div>
				<!-- /support tickets -->
			</div>
		</div>
	</div>
<div class="modal fade" id="add_cat" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header" style="background-color: black">
												<div class="text">
															<h4 class="modal-title mb-3">Add Category</h4>
														</div>
											</div>
											<div class="modal-body">
												<form method="POST" action="action.php" enctype="multipart/form-data" >
													<h5 >Name</h5>
													<input class="form-control" required type="text" name="name" placeholder="Enter name">

													<button name="add_category" type="submit" class="btn btn-success text-center ml-3 mt-3">Submit</button>
												</form>
											</div>
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
