<?php
    require_once("header.php");
?>
<div class='container' style='overflow-x:auto;'>

<div class='row'>	
	<div class='col-lg-4 col-md-3 col-sm-12'>
		<div class="card text-center bg-success text-white">
		  <div class="card-header">
		    Todays Balance
		  </div>
		  <div class="card-body">
		    <h5 class="card-title">RMS Value</h5>
		    <p class="card-text">Amount of money that can be invested today after RMS calculation</p>
		    <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
		  </div>
		</div>
	</div>
	<div class='col-lg-4 col-md-3 col-sm-12'>
		<div class="card text-center bg-info text-white">
		  <div class="card-header">
		    Todays Buy Value
		  </div>
		  <div class="card-body">
		    <h5 class="card-title">Shares Bought</h5>
		    <p class="card-text">Purchases Done today</p>
		    <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
		  </div>
		</div>
	</div>
	<div class='col-lg-4 col-md-3 col-sm-12'>
		<div class="card text-center bg-warning text-white">
		  <div class="card-header">
		    Todays Sell Value
		  </div>
		  <div class="card-body">
		    <h5 class="card-title">Shares Sold</h5>
		    <p class="card-text">Sells Done today</p>
		    <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
		  </div>
		</div>
	</div>
</div>
</div>
<?php
    require_once("footer.php");
?>