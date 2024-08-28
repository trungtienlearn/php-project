<?php
namespace App\Models;
use App\Core\Model;
use PDO;

class AccountModel extends Model {
	public function getAllUser() {
		$stmt = $this->db->query("SELECT * FROM users");
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function verifyLogin($usernameOrEmail, $password) {
		$password = md5($password);
		$sql = "SELECT * FROM users WHERE (username = :usernameOrEmail OR email = :usernameOrEmail) AND password = :password";
		try {
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":usernameOrEmail", $usernameOrEmail);
			$stmt->bindParam(":password", $password);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
			return false;
		}
	}
	function createAccount() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$fullname = $_POST['fullname'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$repassword = $_POST['repassword'];
			$email = $_POST['email'];
			$tel = $_POST['tel'];
			if ($password === $repassword) {
				$password = md5($password);
				$sql = "INSERT INTO users (fullname, username, password, email, tel) VALUES(:fullname, :username, :password, :email, :tel)";
				try {
					$stmt = $this->db->prepare($sql);
					$stmt->bindParam(':fullname', $fullname);
					$stmt->bindParam(':username', $username);
					$stmt->bindParam(':password', $password);
					$stmt->bindParam(':email', $email);
					$stmt->bindParam(':tel', $tel);
					if ($stmt->execute()) {
						echo json_encode(["success" => "true"]);
					} else {
						echo json_encode(["success" => "false"]);
					}

				} catch (PDOException $e) {
					echo "Error: " . $e->getMessage();
				}
			} else {
				echo json_encode(["success" => "false"]);
			}
		}
	}

	public function deletePost($id) {
		$stmt = $this->db->prepare("DELETE FROM posts WHERE id = :id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute();
	}

	function getUserById($id) {
		$sql = "SELECT * FROM users WHERE id = :id";
		try {
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			$stmt->execute();
			// Fetch the result
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			if ($result) {
				return $result;
			} else {
				return null;
			}
		} catch (PDOException $e) {
			return ["error" => "Database error: " . $e->getMessage()];
		} catch (Exception $e) {
			return ["error" => $e->getMessage()];
		}
	}
	function updatePost($id, $title, $content) {
		$sql = "UPDATE posts SET title = :title, content = :content WHERE id = :id";
		try {
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(':title', $title);
			$stmt->bindParam(':content', $content);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);

			if ($stmt->execute()) {
				return "Bài viết đã được sửa.";
			} else {
				throw new Exception('Database Error: Could not update post.');
			}
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	public function checkUser() {
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$username = $_POST['username'];
			$sql = "SELECT * FROM users WHERE username = :username";
			try {
				$stmt = $this->db->prepare($sql);
				$stmt->bindParam(':username', $username);
				$stmt->execute();
				if ($stmt->rowCount() > 0) {
					// Checks if any rows are returned
					return true; // Username exists
				} else {
					return false; // Username does not exist
				}
			} catch (Exception $e) {
				echo "Error: " . $e->getMessage();
				return false;
			}
		}
	} // checkUser End
}
