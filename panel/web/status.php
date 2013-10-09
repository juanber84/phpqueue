<?php 
	session_start();
	if (!isset($_SESSION['user'])) : 
		header("Location: login.php");
	endif; 

	$file = dirname(__FILE__)."/../src/config.json";
	$json = json_decode(file_get_contents($file));

	foreach($json->queue as $queue):
?>
	<tr>
		<td><?= $queue ?></td>
		<td>
			<?php  
				if (msg_queue_exists($queue)) :
					echo "ON";
				else :
					echo "OFF";
				endif;
			?>
		</td>
		<td>
			<?php  
				if (msg_queue_exists($queue)) :
					echo msg_stat_queue($queue)['msg_qnum'];
				else :
					echo "---";
				endif;
			?>			
		</td>
	</tr>
<?php
	endforeach;