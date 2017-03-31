<!DOCTYPE html>

<html>
    <head>
        <? include $_SERVER['DOCUMENT_ROOT']."/includes/header.php" ?>

        <title><?php wp_title( ' &ndash; ', true, 'right' ); ?><?php bloginfo('name'); ?></title>

        <link rel="stylesheet" href="/_/css/secondary.css">

        <meta property="og:type" content="company" />
        <meta property="og:title" content="Hum" />
        <meta property="og:image" content="/_/img/facebook.jpg" />
        <meta property="og:site_name" content="Hum" />
        <meta property="og:description" content="Hum is an iPhone app that combines note-taking and audio recording into a single app for capturing and organizing all your songwriting ideas." />
        <meta property="og:url" content="http://justhum.com/" />

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

      <? if (!$headless) {
        $is_blog = TRUE;
        include $_SERVER['DOCUMENT_ROOT']."/includes/navigation.php";
      } ?>

        <div class="container">
