<?php 
	trait HomeModel{
		//san pham noi bat (6 san pham)
		public function modelHotProduct(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot = 1 order by id desc limit 0,4");
			return $query->fetchAll();
		}
		//lấy các danh mục cha
		public function modelCategoriesParent(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = 0 and id in (select category_id from products)");
			return $query->fetchAll();
		}
		//lấy các danh mục cha Home
		public function modelCategoriesParentHome(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = 0");
			return $query->fetchAll();
		}
		//lay cac danh muc co chua san pham ben trong
		public function modelCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where id in (select category_id from products)");
			return $query->fetchAll();
		}
		//lay cac san pham thuoc danh muc
		public function modelProducts($category_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id = $category_id order by id desc limit 0,4");
			return $query->fetchAll();
		}
		//liệt kê các danh mục cấp 1 (cấp con của cấp cha)
		public function modelCategoriesSub($category_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = $category_id order by id desc");
			//trả về tất cả các kết quả lấy được
			return $query->fetchAll();
		}
		//lấy 10 tin nổi bật để hiển thị ở trang chủ
		public function modelHotNews(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where hot = 1 order by id desc limit 0,10");
			return $query->fetchAll();
		}
	}
 ?>