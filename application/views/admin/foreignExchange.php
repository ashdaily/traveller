<div class='container'>
	<div class='row'>
		<form class='form-group' action='<?php echo base_url('admin/foreignExchange');?>' method='post'>
		<?php 
		global $profit_sell,$profit_buy;
		$profit_sell = 0;
		$profit_buy = 0;
		foreach($profit as $row){
		
		?>
			<div class='col-xs-6 col-md-4'>
				<label>Sell Profit in % </label>
				<input type='number' min="1" max="50" name='sell' value='<?php echo $row->profit_sell;?>'>
			</div>
			<div class='col-xs-6 col-md-4'>
				<label>Buy Profit in %</label>
				<input type='number' min="1" max="50" name='buy' value='<?php echo $row->profit_buy;?>'>
			</div>
			<div class='col-xs-6 col-md-4'>

				<button class='btn btn-primary' type='submit' name='submit'>Change the Profit %</button>
			</div>
		<?php 

		$profit_sell = $row->profit_sell;
		$profit_buy = $row->profit_buy; 
		
		} 

		?>
		</form>
		<br>
		<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<th>#</th>
				<th>Currency Name</th>
				<th>1 JPY =</th>
				<th>Cost Per Unit in JPY</th>
				<th>Sell Rate</th>
				<th>Buy Rate</th>
			</tr>
		</thead>
		
		<tbody>
		<?php 
			$counter = 1;
			for($i=0;$i<count($noc);$i=$i+3){ 

		?>
			<tr>
				<td><?php echo $counter; ?></td>
				<td><?php echo $noc[$i]; ?></td>
				<td><?php echo $noc[$i+1]; ?></td>
				<td><?php echo $noc[$i+2]; ?></td> 
				<td>
				<?php 
					echo $noc[$i+2]+(($profit_sell*$noc[$i+2])/100);
				?> 	
				</td>
				<td>
					<?php 
						echo $noc[$i+2]-(($profit_buy*$noc[$i+2])/100);
					?> 
				</td>
				 
			</tr>
		<?php
		$counter++;
		 } 

		 ?> 
		</tbody>
		</table>
	</div>
</div>







<link rel="stylesheet" href="assets/js/zurb-responsive-tables/responsive-tables.css">
<script src="assets/js/zurb-responsive-tables/responsive-tables.js"></script>