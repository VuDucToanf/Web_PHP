<?php
    trait ContactModel{
        //lấy các danh mục cha Home
		public function modelCategoriesParentHome(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = 0");
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
    }
?>