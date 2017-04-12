<div class='container'>
	<div class='row'>
		  
		<table class="table table-bordered table-responsive" style='width:80%;'>
		<thead>
			<tr>
				<th>#</th>
				<th>Package Name</th>
				<th>Username</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Adults & Children</th>
				<th>Date and Time for booking </th>
			</tr>
		</thead>
			<?php for($user as $row){
				echo $row->package_name;
				} ?>
		<tbody>
		 
		 
		</tbody>
		</table>
	</div>
</div>







<link rel="stylesheet" href="assets/js/zurb-responsive-tables/responsive-tables.css">
<script src="assets/js/zurb-responsive-tables/responsive-tables.js"></script>