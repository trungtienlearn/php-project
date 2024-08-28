<?php
namespace App\Controllers;
use App\Core\Controller;
use App\Models\AccountModel;

class Account extends Controller {
	public function index($id) {
		$model = new AccountModel;
		$user = $model->getUserById($id);
		$this->view("account/account", ["user" => $user]);
	}

	public function login() {
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$usernameOrEmail = $_POST['username_or_email'];
			$password = $_POST['password'];

			$account = new AccountModel;
			$user = $account->verifyLogin($usernameOrEmail, $password);
			if ($user) {
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['username'] = $user['username'];
				$_SESSION['status'] = $user['status'];
				header("Location: /");
				exit();
			} else {
				$this->view("account/login", ["alert" => "Email, username hoặc mật khẩu không chính xác"]);
			}
		} else {
			$this->view("account/login", ["data" => ""]);
		}
	}
	public function logout() {
		// Bắt đầu phiên làm việc nếu chưa có
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}

		// Hủy bỏ tất cả các biến session
		session_unset();

		// Hủy bỏ phiên làm việc
		session_destroy();

		// Chuyển hướng người dùng về trang đăng nhập hoặc trang chủ
		header("Location: /");
		exit();
	}
	public function registry() {
		$account = new AccountModel;
		$alert = $account->createAccount();
		$this->view("account/registry", ["data" => "Trung Tien", "alert" => $alert]);
	}

	public function checkUserAPI() {
		$model = new AccountModel;
		$result = $model->checkUser();
		if ($result) {
			echo json_encode(["message" => true]);
		} else {
			echo json_encode(["message" => false]);
		}
	}
}
