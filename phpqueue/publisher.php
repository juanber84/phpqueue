<?php

namespace phpqueue;

/**
 * This file is part of the phpqueue library.
 *
 * (c) Juan Berzal <juanber84@gmail.com>
 *
 * This source file is subject to the MIT license.
 */

class Publisher 
{

	private $msgkey;
	private $message;
	private $serialize_needed;	
	private $block_send;
	private $msgtype_send;	

	/*
	 * @package phpqueue
 	 * @author  Juan Berzal <juanber84@gmail.com>
	 */	
	public function __construct($argument = '')
	{
		$settings = array(
			'msgkey' 			=> md5(uniqid(microtime(), true)),
			'serialize_needed'	=> false,
			'block_send' 		=> false,         
			'msgtype_send'		=> 1
		);

		if(!empty($argument)){
			foreach($argument as $key => $val){
				if(!empty($val)){ 
					$settings[$key] = $val; 
				}
			}
		}

		$this->msgkey  			= $settings['msgkey'];
		$this->message  		= array();
		$this->serialize_needed = $settings['serialize_needed'];
		$this->block_send  		= $settings['block_send'];
		$this->msgtype_send 	= $settings['msgtype_send'];

	}

    public function setMsgkey($msgkey){
        $this->msgkey = $msgkey;   
    }

    public function getMsgkey(){
        return $this->msgkey;   
    }

    public function setMessage($message){
        $this->message = $message;   
    }

    public function getMessage(){
        return $this->message;   
    }    

    public function serialize_needed($serialize_needed){
        $this->serialize_needed = $serialize_needed;   
    }

    public function setBlock_send($block_send){
        $this->block_send = $block_send;   
    }

    public function setMsgtype_send($msgtype_send){
        $this->msgtype_send = $msgtype_send;   
    }

    public function publish(){
		$queue = msg_get_queue($this->msgkey); 
		if (is_array($this->message)) {
			foreach ($this->message as $value) {
				msg_send($queue,$this->msgtype_send, $value, $this->serialize_needed, $this->block_send, $err);
			}
		} else{
			msg_send($queue,$this->msgtype_send, $this->message, $this->serialize_needed, $this->block_send, $err);
		}
    }  

}

