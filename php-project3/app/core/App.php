<?php
namespace App\Core;

class App {
	protected $controller = "Home";
	protected $method = "index";
	protected $params = [];

	public function __construct() {
		$url = $this->parseUrl();
		if (isset($url[0]) && file_exists("../app/controllers/" . ucfirst($url[0]) . ".php")) {
			$this->controller = ucfirst($url[0]);
			unset($url[0]);
		}
		$controllerClass = 'App\\Controllers\\' . $this->controller;
		if (class_exists($controllerClass)) {
			$this->controller = new $controllerClass;
		} else {
			// Xử lý khi controller không tồn tại
			// Có thể chuyển hướng tới trang lỗi
			throw new \Exception("Controller không tồn tại.");
		}

		if (isset($url[1])) {
			if (method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		$this->params = $url ? array_values($url) : [];
		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	public function parseUrl() {
		if (isset($_GET['url'])) {
			return explode("/", filter_var(rtrim($_GET['url'], "/"), FILTER_SANITIZE_URL));
		} else {
			return [];
		}
	}
}
