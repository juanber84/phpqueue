<?php

namespace phpqueue;

/**
 * This file is part of the phpqueue library.
 *
 * (c) Juan Berzal <juanber84@gmail.com>
 *
 * This source file is subject to the MIT license.
 */

class Consumer 
{

	private $msgtype_receive;
	private $maxsize;
	private $option_receive;	
	private $serialize_needed;
	private $queue;

	/*
	 * @package phpqueue
 	 * @author  Juan Berzal <juanber84@gmail.com>
	 */	
	public function __construct($argument = '')
	{
		$settings = array(
			'msgtype_receive'	=> 1,
			'maxsize' 			=> 100,         
			'option_receive'	=> MSG_IPC_NOWAIT,
			'serialize_needed'	=> false,
		);

		if(!empty($argument)){
			foreach($argument as $key => $val){
				if(!empty($val)){ 
					$settings[$key] = $val; 
				}
			}
		}

		$this->msgtype_receive  = $settings['msgtype_receive'];
		$this->maxsize 			= $settings['maxsize'];
		$this->option_receive  	= $settings['option_receive'];
		$this->serialize_needed = $settings['serialize_needed'];

	}

    public function setMsgtypeReceive($msgtype_receive){
        $this->msgtype_receive = $msgtype_receive;   
    }

    public function setMaxsize($maxsize){
        $this->maxsize = $maxsize;   
    }

    public function setOptionReceive($option_receive){
        $this->option_receive = $option_receive;   
    }

    public function setMsgtype_send($serialize_needed){
        $this->serialize_needed = $serialize_needed;   
    }

    public function setQueue($key){
        $this->queue = msg_get_queue($key);   
    }

    public function pickup(){
		if (msg_receive($this->queue,$this->msgtype_receive ,$msgtype_erhalten,$this->maxsize,$daten,$this->serialize_needed, $this->option_receive, $err)===true) {
		    return $daten;
		} else {
		    //var_dump($err);
		}
    }  

}

