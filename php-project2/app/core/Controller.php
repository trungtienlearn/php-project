<?php

namespace App\Core;

class Controller {
	public function model($model) {
		require_once '../app/models/' . ucfirst($model) . '.php';
		return new $model();
	}

	public function view($view, $data = []) {
		extract($data);

		ob_start();
		require_once "../app/views/{$view}.php";
		$content = ob_get_clean();

		require_once "../app/views/layout/main.php";
	}
}
