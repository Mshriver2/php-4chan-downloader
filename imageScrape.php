<?php

class ImageScrape{

    //grabs all images and store them in an array
    function imgGrab($chanSelection, $boardSelection, $threadURL){

        require_once 'vendor/autoload.php';

        use DiDom\Document;

        $document = new Document('http://boards.4channel.org/g/thread/74884957', true);

        $posts = $document->find('a[href*=i.4cdn.org]');

        foreach($posts as $post) {
            //echo "http://i.4cdn.org/g/" . $post->text(), "\n";
        }
        //echo "completed";
    }

    //downloads all images from array and stores in temp folder
    function downloadArray(){

    }

    //puts images from temp folder into a zip, then puts download link on page
    function zipFiles(){

    }

}

$imgscrape = new ImageScrape();

 ?>
