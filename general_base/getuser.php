<?php
		 
	require_once 'dbconfigpdo.php';
	
	if (isset($_REQUEST['id'])) {
			
		$id = intval($_REQUEST['id']);
		$query = "SELECT * FROM messages WHERE id=:id";
		$stmt = $DBcon->prepare( $query );
		$stmt->execute(array(':id'=>$id));
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
		extract($row);
			
		?>
			
		<div>
         <div class="block-content">
             <p>From : <?php echo $sender; ?></p> <br> 
             <p><b> <?php echo $subject; ?> </b></p> <br> 
             <p><?php echo $message; ?></p>
                       
                        </div>
        
		
			
			
	
			
			
	
			
		</div>
			
		<?php				
	}

?>