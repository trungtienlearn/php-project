<?php

namespace App\Core;
use Exception;
use PDO;

class Model {
	protected $db;

	public function __construct() {
		$config = require_once "../config/config.php";
		$dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8";

		try {
			$this->db = new PDO($dsn, $config['username'], $config['password']);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (Exception $e) {
			// Ghi log lỗi và có thể hiển thị thông báo lỗi thân thiện hơn
			error_log($e->getMessage());
			die('Database connection error.');
		}
	}
}
?>
