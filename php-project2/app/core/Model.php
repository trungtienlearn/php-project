<?php

namespace App\Core;

use Exception;
use mysqli;

class Model {
	protected $db;

	public function __construct() {
		$config = require_once '../config/config.php';
		try {
			$this->db = new mysqli($config['host'], $config['username'], $config['password'], $config['dbname']);
			if ($this->db->connect_error) {
				throw new Exception('Database connection failed: ' . $this->db->connect_error);
			}
		} catch (Exception $e) {
			echo $e->getMessage();
		}

	}
}