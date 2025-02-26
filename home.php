<?php
include 'db_connect.php';
?>

<style>
	.welcome-bold {
		font-weight: bold;
		letter-spacing: 1px;
		color: #2D336B;
	}

	.body-center {
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
	}

	.vision-margin {
		margin-bottom: 20px;
		display: flex;
		justify-content: center;
	}
</style>

<div class="container-fluid">
    <div class="row mt-3 ml-3 mr-3">
        <div class="col-lg-12">
            <div class="body-center">
                <div class="card-body">
                    <h5 class="welcome-bold"><?php echo "Welcome back, " . $_SESSION['login_name'] . "!"; ?></h5>
                </div>
				<div class="vision-margin">
					<img src="image/Vision.png" alt="Vision" height="60%" width="60%">
				</div>
				<div class="vision-margin">
					<img src="image/Mision.png" alt="Mision" height="60%" width="60%">
				</div>
            </div>
        </div>
    </div>
</div>
