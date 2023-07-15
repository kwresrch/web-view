<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        iframe {
            border: none;
            width: 100%;
            height: 100vh;
        }
    </style>
</head>
<body>
    <?php
    // URL to be displayed in the web view
    $url = isset($_GET['url']) ? $_GET['url'] : '';

    if ($url !== '') {
        // Validate URL to prevent potential security issues
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            echo '<iframe src="' . $url . '"></iframe>';
        } else {
            echo '<p>Invalid URL</p>';
        }
    } else {
        echo '<p>No URL provided</p>';
    }
    ?>
</body>
</html>
