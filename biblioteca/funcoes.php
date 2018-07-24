<?php
	function ErrosAlert($errors,$sucessMessage){
		if(!empty($_POST)){
			if (count($errors) != 0) {
				?>
				<div class="alert alert-danger" role="alert">
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					<span class="sr-only">Error:</span>
					<?php 
						for ($i=0; $i < count($errors); $i++) { 
							echo $errors[$i] . "<br>";
						}
					?>
				</div>
				<?php }else{ ?>
				<div class="alert alert-success" role="alert"><?php echo $sucessMessage; ?></div>
				<?php
			}
		}
	}
?>