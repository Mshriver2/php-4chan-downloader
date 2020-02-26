<?php
    require_once 'vendor/autoload.php';

    use DiDom\Document;

    $document = new Document('http://boards.4channel.org/g/thread/74884957', true);

    $posts = $document->find('a[href*=i.4cdn.org]');

    foreach($posts as $post) {
        echo "http://i.4cdn.org/g/" . $post->text(), "\n";
    }
    echo "completed";

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title></title>
     </head>
     <body>

     </body>
 </html>
