<?php
namespace App\Controllers;
use App\Core\Controller;

class About extends Controller {
	public function index() {
		$this->view("about/about", ["data" => "Trung Tien"]);
	}
}
