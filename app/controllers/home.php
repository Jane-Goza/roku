<?php
require_once 'database.php';

class Home extends Controller{
	public function __construct(){

	}
	public function index(){
	$server_name = "localhost";
	$database_username = "root";
	$database_password = "root";
	$database_name = "roku";
	
	$connect = new mysqli($server_name, $database_username, $database_password, $database_name);

	if($connect->connect_error){
		echo "ERROR";
	}
		$query = "SELECT * FROM tbl_movies";
		$result = $connect->query($query);

        $result = $connect->query($query);
        $rows = array();
        while($row = $result->fetch_assoc()){
            $rows[] = $row;
        }
		$this->view('home/index', ['movies' => $rows]);
	}
}