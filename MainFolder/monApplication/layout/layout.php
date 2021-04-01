<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css2?family=Sarala&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?version=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/myajaxfile.js"></script>
    <title>
        WeDrive
    </title>

</head>

<body>
    <div class="container">
        <div class="row justify-content-start align-items-center p-4 bg-light text-dark titlerow">
            <div class="col-xs-2">
                <img src="images/carlogo.png" class="mylogo" alt="Logo">
            </div>
            <div class="col-xs-2">
                <h1 class="col-sm logotitle"> WeDrive </h1>
            </div>
        </div>
    </div>

    <?php if($context->getSessionAttribute('user_id')): ?>
    <?php echo $context->getSessionAttribute('user_id')." est connecte"; ?>
    <?php endif; ?>

    <div id="page">
        <?php if($context->error): ?>
        <div id="flash_error" class="error">
            <?php echo " $context->error !!!!!" ?>
        </div>
        <?php endif; ?>
        <div id="page_maincontent">
            <?php include($template_view); ?>

        </div>
    </div>
</body>

</html>