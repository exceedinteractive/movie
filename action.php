<?php
// Load config
require_once("/resources/config.php");

// Start session
session_start();
 
// Including the database connection file
require_once(LIBRARY_PATH . '/class.crud.php');

// Set the action type
if(isset($_POST['add'])){
    $action = 'add';
}elseif(isset($_POST['edit'])){
    $action = 'edit';
}elseif(isset($_POST['delete'])){
    $action = 'delete';
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
    
        // Insert data to database
        $sql = "INSERT INTO movie ('title', 'format', 'length', 'released', 'rating') VALUES ('" . $title . "', '" . $format . "', '" . $length . "', '" . $released . "', " . $rating . ")";
    
        if($crud->execute($sql)){
            $_SESSION['message'] = 'Movie added successfully!';
        }else{
            $_SESSION['message'] = 'Cannot add movie.';
        }
        
        header('location: home.php');
        break;
    case 'edit':
        $id       = $crud->escape_string($_POST['id']);
        $title    = $crud->escape_string($_POST['title']);
        $format   = $crud->escape_string($_POST['format']);
        $length   = $crud->escape_string($_POST['length']);
        $released = $crud->escape_string($_POST['released']);
        $rating   = $crud->escape_string($_POST['rating']);

        // Update data
        $sql = "UPDATE movies SET title = '" . $title . "', format = '" . $format . "', length = '" . $length . "', released = '" . $released . "', rating = " . $rating . " WHERE id = " . $id;

        if($crud->execute($sql)){
            $_SESSION['message'] = 'Movie added successfully!';
        }else{
            $_SESSION['message'] = 'Cannot add movie.';
        }
        
        header('location: home.php');
        break;
    case 'delete':
        $id = $crud->escape_string($_POST['id']);

        // Delete data
        $sql = "DELETE FROM movies WHERE id = " . $id;

        if($crud->execute($sql)){
            $_SESSION['message'] = 'Movie added successfully!';
        }else{
            $_SESSION['message'] = 'Cannot add movie.';
        }
        
        header('location: home.php');
        break;
    default:
        // Throw error
        echo 'Error: action required';
        exit();
        break;
}
?>