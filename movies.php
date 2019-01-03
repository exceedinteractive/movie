<?php
// Load config
require_once("/resources/config.php");

// Start session
session_start();

// Including the database connection file
require_once(LIBRARY_PATH . '/class.crud.php');

$crud = new Crud();

// Get the sort order for the column, ascending or descending, default is ascending.
$sort_order = isset($_GET['order']) && strtolower($_GET['order']) == 'desc' ? 'DESC' : 'ASC';

// Fetch data
$sql = "SELECT * FROM movie";
if(!empty($_GET['sort'])){
  $sql .= " ORDER BY " . $crud->escape_string($_GET['sort']) . " " . $crud->escape_string($sort_order);
  $column = $_GET['sort'];
}else{
  $column = 'title';
}

if($result = $crud->read($sql)){
  	// Sort direction values.
    $up_or_down  = str_replace(array('ASC','DESC'), array('up','down'), $sort_order); 
    $asc_or_desc = $sort_order == 'ASC' ? 'desc' : 'asc';
}else{
    echo '<div id="container">
    <div id="content">
      <!-- Page content -->
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1>Ooops!</h1>
            <p>Sorry, we are unable to get movie data at this time.</p>
            <hr>
          </div>
        </div>
      </div>
    </div>
    </div>';
}

// Load page
require_once(LIBRARY_PATH . '/class.page.php');
$page = new page('MovieWeb - Listing');
?>
<div id="container">
  <div id="content">
    <!-- Page content -->
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
          <h1>Welcome!</h1>
          <p>Explore movie ratings, formats, length and release dates.</p>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <!-- Status messages -->
          <?php if(isset($_SESSION['message'])){ ?>
          <div class="alert alert-info text-center">
            <?php echo $_SESSION['message']; ?>
          </div>
          <?php unset($_SESSION['message']); } ?>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <a href="#add" data-toggle="modal" class="btn btn-outline-success btn-sm btn-table">Add New</a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <!-- Responsive table -->
          <table class="table">
            <thead>
              <tr>
                <th></th>
                <th><a href="movies.php?sort=title&order=<?php echo $asc_or_desc; ?>">Title <i class="fas fa-sort<?php echo $column == 'title' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                <th><a href="movies.php?sort=format&order=<?php echo $asc_or_desc; ?>">Format <i class="fas fa-sort<?php echo $column == 'format' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                <th><a href="movies.php?sort=length&order=<?php echo $asc_or_desc; ?>">Length <i class="fas fa-sort<?php echo $column == 'length' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                <th class="text-center"><a href="movies.php?sort=released&order=<?php echo $asc_or_desc; ?>">Release Year <i class="fas fa-sort<?php echo $column == 'released' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                <th class="text-center"><a href="movies.php?sort=rating&order=<?php echo $asc_or_desc; ?>">Rating <i class="fas fa-sort<?php echo $column == 'rating' ? '-' . $up_or_down : ''; ?>"></i></a></th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($result as $key => $row) { ?>
              <tr>
                <td>
                  <?php echo $row['id']; ?>
                </td>
                <td><a href="#">
                    <?php echo $row['title']; ?></a></td>
                <td>
                  <?php echo $row['format']; ?>
                </td>
                <td>
                  <?php echo $row['length']; ?> mins</td>
                <td class="text-center">
                  <?php echo $row['released']; ?>
                </td>
                <td class="text-center">
                  <?php echo $row['rating']; ?>
                </td>
                <td class="text-center">
                  <a href="#edit" data-toggle="modal" class="btn btn-outline-primary btn-sm" data="<?php echo $row['id']; ?>">Edit</a>
                  |
                  <a href="#delete" data-toggle="modal" class="btn btn-outline-primary btn-sm" data="<?php echo $row['id']; ?>">Delete</a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>