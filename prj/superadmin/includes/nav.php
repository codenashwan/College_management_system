<?php include '../includes/config.php';?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Admin</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/Speda.ttf">
    <link type="text/css" href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-white">
<?php if(isset($super)){?>
    <nav class="navbar p-1 navbar-expand-lg bg-white shadow-sm">
        <a class="navbar-brand text-danger" href="?logout">LOGOUT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default"
            aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img src="assets/img/hum.svg" alt=""></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-default">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="index.html">
                            <img src="assets/img/login.svg">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse"
                            data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav ml-lg-auto " style="direction:rtl">
            <?php 
            $name = ['سەرەتا' , 'زیادکردنی کۆلێژ' , 'زیادکردنی ئەدمین'];
            $url = ['home' , 'add_college' , 'add_admin'];
            for($i = 0 ; $i <count($name); $i++):?>
            <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url[$i];?>.php">
                        <span class="text-dark font-weight-bold"><?php echo $name[$i];?></span>
                    </a>
                </li>
            <?php endfor ?>
            </ul>
        </div>
    </nav>
<?php } ?>