<?php
	$g = greetings_time_now();
	switch($g){
		case 'm':
			$class = 'morning';
			$i     = 'coffee';
			break;
		case 'a': 
			$class = 'afternoon';
			$i 	   = 'sun-o';
			break;
		case 'e':
			$class = "evening";
			$i     = 'moon-o';
			break;
		case 'n':
			$class = 'night';
			$i     = 'bed';
			break;
	}
?>
<div class="greetings greetings-<?php echo $class;?>">
		<div class="row">
        	<div class="col-md-6">
				<p><?php echo ossn_print("greetings:welcomeback", array(ossn_loggedin_user()->first_name));?></p>
				<span><?php echo ossn_print("greetings:{$class}");?></span>
           </div> 
         	<div class="col-md-6">
	        	<span class="icon"><i class="fa fa-<?php echo $i;?>"></i></span>
           	</div> 
        </div>    
</div>