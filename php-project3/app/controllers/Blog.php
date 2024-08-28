<?php
namespace App\Controllers;
use App\Core\Controller;

class Blog extends Controller {
	public function index() {
		$this->view("blog/blog", ["data" => "Trung Tien"]);
	}
}
