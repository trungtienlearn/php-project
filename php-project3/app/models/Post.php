<?php
namespace App\Models;
use App\Core\Model;
use PDO;

class Post extends Model {
	public function getAllPost() {
		$stmt = $this->db->query("SELECT * FROM posts");
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	function createPost() {
		if (isset($_POST['title'])) {
			$title = $_POST['title'];
			$content = $_POST['content'];
			$sql = "INSERT INTO posts (title, content) VALUES(:title, :content)";
			try {
				$stmt = $this->db->prepare($sql);
				$stmt->bindParam(':title', $title);
				$stmt->bindParam(':content', $content);
				if ($stmt->execute()) {
					echo "Đã tạo bài viết";
				} else {
					echo "Lỗi tạo bài viết";
				}

			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}
		}
	}

	public function deletePost($id) {
		$stmt = $this->db->prepare("DELETE FROM posts WHERE id = :id");
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute();
	}

	function getPostById($id) {
		$sql = "SELECT * FROM posts WHERE id = :id";
		try {
			// Prepare the statement
			$stmt = $this->db->prepare($sql);

			// Bind the parameter
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);

			// Execute the statement
			$stmt->execute();

			// Fetch the result
			$result = $stmt->fetch(PDO::FETCH_ASSOC);

			if ($result) {
				return $result;
			} else {
				throw new Exception('No post found with the given ID.');
			}
		} catch (PDOException $e) {
			echo "Database error: " . $e->getMessage();
		} catch (Exception $e) {
			echo $e->getMessage();
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
}
