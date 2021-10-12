<?php


include("database.php");
include("header.php");
include("sidebar.php");

$query = "SELECT * FROM get_job";
$get_jobs = db::getRecords($query);
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
				<span class="breadcrumb-item active">Get a Job</span>
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
				<button style="    margin-right: 20px;" type="button" class="btn btn-success mt-3" data-toggle="modal" data-target="#myModal">Add Get a Job  </button>
			</div>
		</div>
		<div class="col-xl-12">
			<div class="card px-4 py-3">
				<div class="row">
					<?php
					if ($get_jobs) {
						foreach ($get_jobs as $get_job) {
							?>
							<div class="col-md-12">
								<div class="card p-3 text-center" >
									<div class="card-body p-0 mt-3">
										<h2 class="card-title mt-2"><?php echo $get_job['heading']; ?></h2>
										<p><?php echo $get_job['dcp']; ?></p>
										<div class="text-center card_edit_delet">
											<a class="text-dark" href="update_get_job.php?id=<?php echo $get_job['id']; ?>" ><i class="fas fa-pencil-alt"></i></a>
											<a href="action.php?del_get_job=<?php echo $get_job['id']; ?>" class="text-dark ml-4"><i class="fas fa-trash-alt"></i></a>
										</div>
									</div>
								</div>
							</div>

							<!-- update modal -->
							<?php
						}
					}
					?>

				</div>
			</div>
			<!-- /support tickets -->
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
								<h4 class="modal-title mb-3">Add Get a Job</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-body">
					<form method="POST" action="action.php" enctype="multipart/form-data" >
						<h5 >Heading</h5>
						<input class="form-control" type="text" required name="heading" placeholder="Enter your name">

						<h5 >Description</h5>
						<textarea class="form-control" name="dcp" required placeholder="Lorem ipsum" style="height: 130px;"></textarea>

						<button name="add_get_job" class="btn btn-success text-center ml-3 mt-3">Submit</button>
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
	</script>

	<?php

	include("footer.php");            

	?>
