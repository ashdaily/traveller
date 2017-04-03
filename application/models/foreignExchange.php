<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class foreignExchange extends CI_Model {

	public function enter_profit($values){
		 $sql = $this->db->query("UPDATE foreignExchange SET profit_sell = ?,profit_buy = ? WHERE id = 1",array($values['sell'],$values['buy']));
        return $sql;
	}

	public function get_profit(){
		$sql = $this->db->query('SELECT * from foreignExchange');
		return $sql->result();
	} 
}