<?php
class Page
{
    function __construct($title)
    {
        $logout =  (isset($_SESSION['user_id'])) ? '<a class="nav-link" href="action.php?logout=true">Logout</a>' : '';
        
        // Renders document header
        echo '<!doctype html>
        <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="description" content="">
                <meta name="author" content="">
            <title>' . $title . '</title>
            <!-- Bootstrap -->
            <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css" media="screen">
            <!-- Fontawesome -->
            <link rel="stylesheet" href="/vendor/fontawesome/css/all.css">
            <!-- Bootswatch united theme -->
            <link rel="stylesheet" href="/css/bootstrap_theme.css">
            <!-- Custom -->
            <link rel="stylesheet" href="/css/custom.css">
        </head>

        <body>
        <header>
            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="/img/logo_white.png" height="40" class="d-inline-block align-top" alt="">
                <span class="navbar-logo">MovieWeb</span>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        ' . $logout . '
                    </li>
                </ul>
            </div>
            </nav>
        </header>';

        include('modals.php'); 
    }

    function __destruct()
    {
        // Renders document footer
        echo '<!-- Footer -->
        <footer class="footer">
                <p class="navbar-text pull-left">&copy; Copyright 2019 - MovieWeb.</p>
        </footer>
        <!-- JQuery -->
        <script src="/vendor/jquery/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap -->
        <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Custom -->
        <script src="/js/custom.js"></script>
        </body>
        
        </html>';
    }
}
?>