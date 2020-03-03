<?php
    require_once 'vendor/autoload.php';

    use DiDom\Document;

    $document = new Document('http://boards.4channel.org/g/thread/74884957', true);

    $posts = $document->find('a[href*=i.4cdn.org]');

    foreach($posts as $post) {
        //echo "http://i.4cdn.org/g/" . $post->text(), "\n";
    }
    //echo "completed";

?>


    <?php include("includes/header.php"); ?>

         <div class="main-container">

             <div class="text-main">
                 <h1>4chan Image Downloader</h1>
             </div>


             <form class="input-form" action="" method="post">

                 <select id="chanSelector" name="chans">
                    <option value="4chan">4chan</option>
                    <option value="4channel">4channel</option>
                 </select>

                 <select id="boardSelector" name="boards">
                    <option value="g">g</option>
                    <option value="b">b</option>
                    <option value="k">k</option>
                    <option value="wsg">wsg</option>
                    <option value="gif">gif</option>
                    <option value="wg">wg</option>
                    <option value="a">a</option>
                    <option value="lit">lit</option>
                 </select>

                 <input type="text" name="thread-url" value="">
                 <input type="submit" name="submit" value="Submit">
             </form>



         </div>

    <?php include("includes/footer.php"); ?>
