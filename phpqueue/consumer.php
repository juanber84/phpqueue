<?php

	$msgtype_receive=1; 
	$maxsize=100;       
	$option_receive=MSG_IPC_NOWAIT; 
	$serialize_needed = false;
	$MSGKey = "123456" ; 	
	$queue = msg_get_queue($MSGKey) ; 

	do {
		if (msg_receive($queue,$msgtype_receive ,$msgtype_erhalten,$maxsize,$daten,$serialize_needed, $option_receive, $err)===true) {
		    echo $daten; echo "\n";
		} else {
		    //var_dump($err);
		}
    } while (true);
	
?>