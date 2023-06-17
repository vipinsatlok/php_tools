<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your website description goes here">
    <meta name="keywords" content="keyword1, keyword2, keyword3">
    <meta name="author" content="Vipin Dass">
    <meta name="robots" content="index, follow">
    <meta name="referrer" content="origin-when-cross-origin">

    <!-- Open Graph Meta Tags (for social media sharing) -->
    <meta property="og:title" content="Your Website Title">
    <meta property="og:description" content="Your website description goes here">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.yourwebsite.com">
    <meta property="og:image" content="https://www.yourwebsite.com/images/og-image.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter Meta Tags (for Twitter Card) -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Your Website Title">
    <meta name="twitter:description" content="Your website description goes here">
    <meta name="twitter:image" content="https://www.yourwebsite.com/images/twitter-image.jpg">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="">

    <!-- Title -->
    <title><?php echo $title . " | Vipin Tools"; ?></title>
    <!-- CSS Stylesheets -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css"  rel="stylesheet" />
</head>

<body class="flex flex-col h-screen">
    <!-- header -->
    <?php include 'nav.php'; ?>
    <main class="flex-1 p-4">