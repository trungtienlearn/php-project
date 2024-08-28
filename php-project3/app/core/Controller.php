<?php
namespace App\Core;

class Controller {
	public function view($view, $data = []) {
		extract($data);

		ob_start();
		require_once "../app/views/{$view}.php";
		$content = ob_get_clean();

		require_once '../app/views/layout/main.php';
	}
}

?>