<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="<?php echo IMAGES_DIR; ?>/favicon.ico">
    <title>Home | My Site</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo CSS_DIR; ?>/style.css" rel="stylesheet">
    <script src="<?php echo JS_DIR; ?>/app.js"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h1>Home</h1>
                <p>Part of the page layout</p>
                <?php
                // include view file if present , otherwise fallback view file
                $viewFilePath = VIEWS_DIR . DS . $CONTROLLER . DS . $VIEW . ".php";
                if (file_exists($viewFilePath)) {
                    include_once(VIEWS_DIR . DS . $CONTROLLER . DS . $VIEW . ".php");
                } else {
                    include_once(VIEWS_DIR . DS . "no-view-file.php");
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>