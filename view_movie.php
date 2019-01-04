<?php
// Start session
session_start();

// Check for active user
if(!isset($_SESSION['user_id'])){
  header('location: index.php');
}

// Load config 
require_once($_SERVER['DOCUMENT_ROOT'] . '/resources/config.php');

// Including the database connection file
require_once(LIBRARY_PATH . '/class.crud.php');
$crud = new Crud();

// Fetch data
if(isset($_GET['id'])){
    $sql = "SELECT * FROM movie WHERE id = " . $crud->escape_string($_GET['id']);
    $result = $crud->read($sql);
    $row = array('id'      => $result[0]['id'],
                'title'    => $result[0]['title'], 
                'format'   => $result[0]['format'], 
                'length'   => $result[0]['length'], 
                'released' => $result[0]['released'], 
                'rating'   => $result[0]['rating']);
}else{
    header('location: movies.php');
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
          <h2><?php echo ucfirst($row['title']); ?></h2>
          <p><a href="movies.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a> to movie listings page.</p>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <div class="poster">
                        <img src="/img/film-poster-placeholder.png" alt="movie poster placeholder">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="facts">
                        <h2>Movie Facts</h2>
                        <ol class="rounded-list">
                            <li><a href="">Format: <?php echo ucfirst($row['format']); ?></a></li>
                            <li><a href="">Length: <?php echo ucfirst($row['length']); ?> mins</a></li> 
                            <li><a href="">Released Year: <?php echo ucfirst($row['released']); ?></a></li>
                        </ul>
                        <h2>Movie Rating</h2>
                        <div class="rating">
                        <?php for($i = 1; $i <= $row['rating']; $i++){ ?>
                        <span class="rating-star"><i class="fa fa-star"></i></span>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>