<?php
	class DP {
		// Phương thức kết nối 
		private static function connect_DB(){
			$host = 'localhost';
			$dbname = 'quanlyshopquanao';
			$username = 'root';
			$password = '';
			try{
				$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password,
				array (
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_PERSISTENT => FALSE,
					PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
					)
				);
				return $conn;
			}
			catch(PDOExceptions $e){
				echo '<script>alert("Error: '. $e->getMessage().'");</script>';
				return null;
			}
		}
		
		// Phuong thuc xac dinh kieu du lieu du lieu truyen vao cua tham so, cau truy van
		private static function get_type($var) {
				switch (gettype($var)) {
					case 'integer': return PDO::PARAM_INT;
					case 'boolean': return PDO::PARAM_BOOL;
					case 'NULL': return PDO::PARAM_NULL;
					default: return PDO::PARAM_STR;
				}
		}
		
		//Phuong thuc thuc thi truy van
		public static function run_query($query,$paras,$type){
			try{
				$con = DP::connect_DB();
				$h = $con->prepare($query);
				foreach($paras as $key=>$para){
					$h->bindValue($key+1,$para,DP::get_type($para));
				}
				$h->execute();
				$result;
				switch($type)
				{
				case 1: $result = true; break;
				case 2: $result = $h->fetchALL(); break;
				case 3: $result = $con->lastInsertId();break;
				}
				$con = NULL;
				return $result;								
			}catch(PDOExceptions $e){
			echo '<script>alert("Error: '. $e->getMessage().'");</script>';
			}
		}
	}
 
?>