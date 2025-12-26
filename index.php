<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>horses.quest</title>
        <link rel="stylesheet" href="styles.css">
        <script src="gallery.js"></script>
    </head>
    <body>
        <div class="gallery">
            <?php
                // (B) GET LIST OF IMAGE FILES FROM GALLERY FOLDER
                $dir = __DIR__ . DIRECTORY_SEPARATOR . "horse_pics" . DIRECTORY_SEPARATOR;
                $images = glob("$dir*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);

                // (C) OUTPUT IMAGES
                foreach ($images as $i) {
                printf("<img src='horse_pics/%s'/>", basename($i));
                }
            ?>
        </div>
    </body>
</html>