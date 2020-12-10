<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="this is sn exsmple of meta description. This will often">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Removing file extension and variables fromurl</title>
    </head>
    <body>
        <?php
        
        //http://localhost/unique/url.php?id=2&name=HelloWorld
        
        $articleId = $_GET['id'];
        $articleName = $_GET['name'];
        
        echo "Article ID is: " . $articleId;
        echo "<br>";
        echo "Article name is: " . $articleName;
        ?>
    </body>
</html>