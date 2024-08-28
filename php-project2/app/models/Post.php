<?php namespace App\Models;

use App\Core\Model;

class Post extends Model {
	function getPostById($id) {
		$stmt = $this->db->query("SELECT * FROM posts WHERE id = ?");
		$stmt = execute([$id]);
		return $stmt->fetch();
	}
}?>