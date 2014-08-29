<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="utf-8" />
        <title><?php if (isset($title)) echo $title . ' &middot; '; ?>Team Zuura <?php echo date('Y'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" href="/favicon.ico" type="image/x-icon" sizes="16x16">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <?php
        if (isset($stylesheets)):
            foreach($stylesheets as $s): ?>
        <link href="<?php echo $s; ?>" rel="stylesheet">
        <?php
            endforeach;
        endif;
        ?>
    </head>
    <body>
