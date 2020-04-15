<?php
$requestMethod = $_SERVER["REQUEST_METHOD"];
include('./class/Student.php');
$student = new Student();
switch($requestMethod) {
	case 'GET':
        //TODO insert json_decode
		$id = '';	
		if($_GET['id']) {
			$id = $_GET['id'];
			$student->_id = $id;
			$data = $student->one();
		} else {
			$data = $student->list();
		}
		if(!empty($data)) {
          $js_encode = json_encode(array('status'=>TRUE, 'studentInfo'=>$data), true);
        } else {
          $js_encode = json_encode(array('status'=>FALSE, 'message'=>'There is no record yet.'), true);
        }
        header('Content-Type: application/json');
		echo $js_encode;
		break;
        
    case 'POST':
        //TODO insert json_decode
        $id = '';	
		if($_GET['id']) {
			$id = $_GET['id'];
			$student->_id = $id;
			$data = $student->one();
		} else {
			$data = $student->list();
		}
		if(!empty($data)) {
          $js_encode = json_encode(array('status'=>TRUE, 'studentInfo'=>$data), true);
        } else {
          $js_encode = json_encode(array('status'=>FALSE, 'message'=>'There is no record yet.'), true);
        }
        header('Content-Type: application/json');
		echo $js_encode;
        break;

    case 'DELETE':
        //TODO delete 
        $id = '';	
		if($_GET['id']) {
			$id = $_GET['id'];
			$student->_id = $id;
			$data = $student->one();
		} else {
			$data = $student->list();
		}
		if(!empty($data)) {
          $js_encode = json_encode(array('status'=>TRUE, 'studentInfo'=>$data), true);
        } else {
          $js_encode = json_encode(array('status'=>FALSE, 'message'=>'There is no record yet.'), true);
        }
        header('Content-Type: application/json');
		echo $js_encode;
        break;

    case 'PATCH':
        //TODO patch json_decode
        $id = '';	
		if($_GET['id']) {
			$id = $_GET['id'];
			$student->_id = $id;
			$data = $student->one();
		} else {
			$data = $student->list();
		}
		if(!empty($data)) {
          $js_encode = json_encode(array('status'=>TRUE, 'studentInfo'=>$data), true);
        } else {
          $js_encode = json_encode(array('status'=>FALSE, 'message'=>'There is no record yet.'), true);
        }
        header('Content-Type: application/json');
		echo $js_encode;
        break;

    case 'PUT':
        //TODO put json_decode
        $id = '';	
		if($_GET['id']) {
			$id = $_GET['id'];
			$student->_id = $id;
			$data = $student->one();
		} else {
			$data = $student->list();
		}
		if(!empty($data)) {
          $js_encode = json_encode(array('status'=>TRUE, 'studentInfo'=>$data), true);
        } else {
          $js_encode = json_encode(array('status'=>FALSE, 'message'=>'There is no record yet.'), true);
        }
        header('Content-Type: application/json');
		echo $js_encode;
        break;
        
    default:
	    header("HTTP/1.0 405 Method Not Allowed");
	    break;
}
?>	