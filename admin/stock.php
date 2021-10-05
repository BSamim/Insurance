<?php

include('database.php');
include("header.php");
include("sidebar.php");


?>

<link href="datatable/media/css/jquery.dataTables.min.css" rel="stylesheet">

	</script>
<!-- Main content -->
<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header page-header-light">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex">
				<a href="categories_panel.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>Stock Panel</a>
				<span class="breadcrumb-item active">Stock Lists</span>
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
							<h2 class="p-3">Stock</h2>
							
						</div>
					</div>
					<div class="table-responsive">
						<table id="myTable" class="table table-striped table-bordered table-sm text-center" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Id</th>
									<th>Name</th>
									<th>Detail</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Product1</td>
									<td><a href="stock-list.php">View Detail</a></td>
								</tr>
							</tbody>
						</table>
					</div>



				</div>
				<!-- /support tickets -->


			</div>


		</div>


	</div>


 
	<?php

	include("footer.php");            

	?>
	<!-- <script src="datatable/js/jquery.js"></script>  -->
	<script src="datatable/media/js/jquery.dataTables.min.js"></script> 

	<script>
		$(document).ready(function(){
			$("#myTable").dataTable();
		});
