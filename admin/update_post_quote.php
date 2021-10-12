<?php
include("database.php");
include("header.php");
include("sidebar.php");
if(!isset($_GET['id'])){
    echo "<script>location='post_quote.php'</script>";
}
$id=$_GET['id'];
$query = "SELECT * FROM post_quote WHERE id='$id'";
$get_job = db::getRecord($query);
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
				<span class="breadcrumb-item active">Update Quote</span>
				
			</div>
			

		</div>


	</div>
	<div class="content">
	    <div class="col-xl-12">
				    
				    <form method="POST" action="action.php" enctype="multipart/form-data" >
				        <input type="hidden" name="id" value="<?php echo $get_job['id']; ?>">
						<h5 >Heading</h5>
						<input class="form-control" value="<?php echo $get_job['heading']; ?>" type="text" name="heading" required>

						<h5 >Description</h5>
						<textarea class="form-control" name="dcp" required style="height: 130px;"><?php echo $get_job['dcp']; ?></textarea>

						<button name="update_post_quote" class="btn btn-success text-center ml-3 mt-3">Submit</button>
					</form>

				    </div>
	    </div>
	    
	    
	 
	<!-- /page header -->

	<!-- Content area -->




	

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
