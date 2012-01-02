<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Rnd_model extends MY_Model{
	public function __construct(){
		$this->endpoint="/";
	}
	/*function getReq($name){
		return $this->get("hi/$name");
	}
	function getReq2($name){
		return $this->get("hi/req/$name");
	}*/
	public function getUserInfo($id){
		return $this->get("userInfo/getByid/$id");
	}
	public function insertuser($data){
		//return $this->post("getUser/$data");
	}
	public function getInfo($data){
		$auth_info = $this->array2string($data);
		//echo $auth_info;
		return $this->get("getUser/$auth_info");
	}
	
	/* This function converts a one dimentional array to a string
	 * where each element is separated with '&'
	 * [key1]=[value1]&[key1]=[value1]
	 */
	public function array2string($data)
	{
		$ar_key = array_keys($data);
		$str = "";
		for($i=0; $i<count($data); $i++)
		{
			if($i == (count($data)-1))
				$str .= $ar_key[$i] . "=" . $data[$ar_key[$i]];
			else 
				$str .= $ar_key[$i] . "=" . $data[$ar_key[$i]]."&";
		}
		return $str;
	}
}
?>
