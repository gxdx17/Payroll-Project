<?php include 'db_connect.php' ?>
<style>
   .card{
	font-family: tahoma;
	font-size: larger;
	font-weight: bolder;
	text-transform: uppercase;
	text-align: center;
	
   }
  
</style>

<div class="containe-fluid">

	<div class="row">
		<div class="col-lg-12">
			
		</div>
	</div>

	<div class="row mt-3 ml-3 mr-3">
			<div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <?php echo "Welcome back, ". $_SESSION['login_name']."!"  ?>
                                        
                    </div>
                    
                </div>
            </div>
	</div>

</div>
<script>
	
</script>