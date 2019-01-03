<?php
// Load config
require_once("/resources/config.php");

// Start session
session_start();
 
// Including the CRUD library file
require_once(LIBRARY_PATH . '/class.crud.php');
$crud = new Crud();

// Set the action type
if(isset($_POST['add'])){
    $action = 'add';
}elseif(isset($_POST['edit'])){
    $action = 'edit';
}elseif(isset($_POST['delete'])){
    $action = 'delete';
}elseif(isset($_GET['id'])){
    $action = 'select';
}elseif(isset($_POST['login'])){
    $action = 'auth';
}elseif(isset($_GET['logout'])){
    $action = 'logout';
}else{
    $action = '';
}

// Apply CRUD action
switch($action){
    case 'add':
        $title    = $crud->escape_string($_POST['title']);
        $format   = $crud->escape_string($_POST['format']);
        $length   = $crud->escape_string($_POST['length']);
        $released = $crud->escape_string($_POST['released']);
        $rating   = $crud->escape_string($_POST['rating']);

        if(!empty($title)){
            // Insert data to database
            $sql = "INSERT INTO movie (title, format, length, released, rating) VALUES ('" . $title . "', '" . $format . "', '" . $length . "', '" . $released . "', " . $rating . ")";

            if($crud->execute($sql)){
                $_SESSION['message'] = 'Movie added successfully!';
            }else{
                $_SESSION['message'] = 'Cannot add movie.';
            }
        }else{
            $_SESSION['message'] = 'Cannot add movie.';
        }
        
        header('location: movies.php');
        break;
    case 'edit':
        $id       = $crud->escape_string($_POST['id']);
        $title    = $crud->escape_string($_POST['title']);
        $format   = $crud->escape_string($_POST['format']);
        $length   = $crud->escape_string($_POST['length']);
        $released = $crud->escape_string($_POST['released']);
        $rating   = $crud->escape_string($_POST['rating']);

        if(!empty($title)){
            // Update data
            $sql = "UPDATE movie SET title = '" . $title . "', format = '" . $format . "', length = '" . $length . "', released = '" . $released . "', rating = " . $rating . " WHERE id = " . $id;

            if($crud->execute($sql)){
                $_SESSION['message'] = 'Movie updated successfully!';
            }else{
                $_SESSION['message'] = 'Cannot update movie.';
            }
        }else{
            $_SESSION['message'] = 'Cannot update movie.';
        }
        
        header('location: movies.php');
        break;
    case 'delete':
        $id = $crud->escape_string($_POST['id']);

        // Delete data
        $sql = "DELETE FROM movie WHERE id = " . $id;

        if($crud->execute($sql)){
            $_SESSION['message'] = 'Movie deleted successfully!';
        }else{
            $_SESSION['message'] = 'Cannot delete movie.';
        }
        
        header('location: movies.php');
        break;
    case 'select':
        $id = $crud->escape_string($_GET['id']);

        // Delete data
        $sql = "SELECT * FROM movie WHERE id = " . $id;

        if($result = $crud->read($sql)){
            $return = array('id'       => $result[0]['id'],
                            'title'    => $result[0]['title'], 
                            'format'   => $result[0]['format'], 
                            'length'   => $result[0]['length'], 
                            'released' => $result[0]['released'], 
                            'rating'   => $result[0]['rating']);
            echo json_encode($return);
        }else{
            echo json_encode(array('data' => false));
        }
        break;
    case 'auth':
        $user = $crud->escape_string($_POST['user']);
        $pass = $crud->escape_string($_POST['pass']);

        // Including the user library file
        require_once(LIBRARY_PATH . '/class.user.php');
        $users = new User($user, $pass);
        if ($user_id = $users->login()) {
            header('location: movies.php');
        }else{
            $_SESSION['message'] = 'Login failed!';
            header('location: index.php');
        }
        break;
    case 'logout':
        // Including the user library file
        require_once(LIBRARY_PATH . '/class.user.php');
        $users = new User();
        $users->logout();
        header('location: index.php');
        break;
    default:
        // Throw error
        echo 'Error: action required';
        exit();
        break;
}
?>