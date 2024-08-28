<?php
namespace App\Models;

use App\Core\Model;

class HomeModel extends Model {
	function getPost() {
		$sql = "select * from posts";
		return $this->db->query($sql);
	}
}
?>