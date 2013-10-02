<?php

	$MSGKey = "123456" ; 	
	$queue = msg_get_queue($MSGKey) ; 
	do{
		$intail = msg_stat_queue($queue)['msg_qnum'];
		if ($intail != 0) {
			echo "mensajes en la cola ".msg_stat_queue($queue)['msg_qnum'];
			echo "\n";
		}
	}while(true);

