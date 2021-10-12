<?php


include("database.php");
include("header.php");
include("sidebar.php");

$query = "SELECT * FROM about";
$abouts = db::getRecords($query);
?>
<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
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
				<span class="breadcrumb-item active">About</span>
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
				<div class="card px-4 py-3">
					<div class="row">
						<?php
						if ($abouts) {
							foreach ($abouts as $about) {
								?>
								<div class="col-md-12">
									<div class="card p-3 text-center">
										<div class="card-body p-0 mt-3">
											<h2 class="card-title mt-2"><?php echo $about['heading']; ?></h2>
											<p><?php echo $about['dcp']; ?></p>
											<div class="text-center card_edit_delet">
												<a class="text-dark" href="#"  data-toggle="modal" data-target="#myModal1<?php echo $about['id']; ?>"><i class="fas fa-pencil-alt"></i></a>
												<a href="action.php?del_about=<?php echo $about['id']; ?>" class="text-dark ml-4"><i class="fas fa-trash-alt"></i></a>
											</div>
										</div>
									</div>
								</div>

								<!-- update modal -->
								<div class="modal fade" id="myModal1<?php echo $about['id']; ?>" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header" style="background-color: black">
												<div class="row">
													<div class="col-md-12">
														<div class="text">
															<h4 class="modal-title mb-3">update Banner</h4>
														</div>
													</div>
												</div>
											</div>
											<div class="modal-body">
												<form method="POST" action="action.php" enctype="multipart/form-data" >
													<h5 >Large heading</h5>
													<input class="form-control" type="text" name="heading" placeholder="Enter your name" value="<?php echo $about['heading']; ?>">
													<input type="hidden" name="id" value="<?php echo $about['id']; ?>">


													<h5 >Description</h5>
													<textarea class="form-control" name="dcp" placeholder="Lorem ipsum" style="height: 130px;"><?php echo $about['dcp']; ?></textarea>

													<button name="update_about" type="submit" class="btn btn-success text-center ml-3 mt-3">Submit</button>
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
								<h4 class="modal-title mb-3">Add Insurense</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-body">
					<form method="POST" action="action.php" enctype="multipart/form-data" >
						<h5 >Large heading</h5>
						<input class="form-control" type="text" name="heading" placeholder="Enter your name">

						<h5 >Description</h5>
						<textarea class="form-control" name="dcp1" placeholder="Lorem ipsum" style="height: 130px;"></textarea>

						<button type="submit" name="add_about" class="btn btn-success text-center ml-3 mt-3">Submit</button>
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

		CKEDITOR.replace( 'dcp' );
		CKEDITOR.replace( 'dcp1' );
		CKEDITOR.replace( 'dcp2' );
	</script>

	<?php

	include("footer.php");            

	?>
