<?php


include("database.php");
include("header.php");
include("sidebar.php");

$query = "SELECT * FROM brand";
$brands = db::getRecords($query);
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
	.card_edit_delet{
		font-size: 20px;
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
				<a href="dashboard.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Admin Pannel</a>
				<span class="breadcrumb-item active">Branding Testeminial</span>
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
				<button style="    margin-right: 20px;" type="button" class="btn btn-success mt-3" data-toggle="modal" data-target="#myModal">Add brand image  </button>
			</div>
			<div class="col-xl-12">
				<div class="card px-4 py-3">
					<div class="row">

						<?php
						if ($brands) {
							foreach ($brands as $brand) {
								?>
								<div class="col-md-4">
									<div class="card p-3 text-center" style="height:285px;">
										<div class="img_container" style="width:100%;height:200px">
											<img class="card-img-top" src="uploads/<?php echo $brand['image']; ?>" alt="Banner img" style="width:100%;height:100%; object-fit: cover;" >
										</div>
										<div class="card-body p-0 mt-3">
											<div class="text-center card_edit_delet">
												<a class="text-dark" href="#"  data-toggle="modal" data-target="#myModal1<?php echo $brand['id']; ?>"><i class="fas fa-pencil-alt"></i></a>
												<a href="action.php?del_brand=<?php echo $brand['id']; ?>" class="text-dark ml-4"><i class="fas fa-trash-alt"></i></a>
											</div>
										</div>
									</div>
								</div>

								<!-- update modal -->
								<div class="modal fade" id="myModal1<?php echo $brand['id']; ?>" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header" style="background-color: black">
												<div class="row">
													<div class="col-md-12">
														<div class="text">
															<h4 class="modal-title mb-3">update Branding Image</h4>
														</div>
													</div>
												</div>
											</div>
											<div class="modal-body">
												<form method="POST" action="action.php" enctype="multipart/form-data" >
													<h5 class="mt-2" >Branding Image</h5>
													<input class="form-control" type="file" name="image" placeholder="Enter your Email">

													<input type="hidden" name="id" value="<?php echo $brand['id']; ?>">
													<div class="text-center">
														<button name="update_brand" class="btn btn-success text-center ml-3 mt-3 ">Submit</button>
													</div>					
												</form>
											</div>
										</div>
									</div>
								</div>
								<?php
							}
						}
						?>

					</div>
				</div>
				<!-- /support tickets -->
			</div>
		</div>
	</div>



	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header" style="background-color: black">
					<div class="row">
						<div class="col-md-12">
							<div class="text">
								<h4 class="modal-title mb-3">Add Branding Image</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-body">
					<form method="POST" action="action.php" enctype="multipart/form-data" >
						<h5 class="mt-2" >Branding Image</h5>
						<input class="form-control" type="file" name="image" placeholder="Enter your Email">
						<div class="text-center">
							<button name="add_brand" class="btn btn-success text-center ml-3 mt-3 ">Submit</button>
						</div>
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
