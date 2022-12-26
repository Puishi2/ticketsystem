<?php
session_start();

include_once "includes/includes.php";

$headerView = new HeaderView();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="de">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Ticketsystem</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.css">


    <script src="https://kit.fontawesome.com/c0411759e8.js" crossorigin="anonymous"></script>
    <script src="assets/js/app.js"></script>
</head>
<body>

<?php $headerView->createLogoutHeader(); ?>

<div class="container">
    <div class="card">
        <div class="card-content">
            <div class="content">
                Lorem ipsum leo risus, porta ac consectetur ac, vestibulum at eros. Donec id elit non mi porta gravida at eget metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis consectetur purus sit amet fermentum.
            </div>
        </div>
    </div>
</div>
</body>
</html>