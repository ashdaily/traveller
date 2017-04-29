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


	 
	</div>
</div>







<link rel="stylesheet" href="assets/js/zurb-responsive-tables/responsive-tables.css">
<script src="assets/js/zurb-responsive-tables/responsive-tables.js"></script>