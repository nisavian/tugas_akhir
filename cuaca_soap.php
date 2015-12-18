<?php
require_once 'adodb/adodb.inc.php';

class Cuaca
{

	function __construct()
	{
		$this->db = NewADOConnection('mysqli');
		$this->db->Connect('localhost','root','','weather');
	}

	function get_cuaca_by_id($id="")
	{
		$cuaca  = $this->db->Execute("SELECT * FROM weather WHERE kota LIKE ?","%$id%");
		return json_encode($cuaca->GetAssoc());
	}

}

// $penduduk = new Penduduk();
// $data = $penduduk->get_penduduk_by_nik();
// echo '<pre>';
// print_r($data);
// echo '</pre>';
?>