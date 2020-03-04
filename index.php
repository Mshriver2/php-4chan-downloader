<?php
error_reporting(E_ALL);
//includes imageScrape class
include("imageScrape.php");


    //runs if submit button is pressed
    if(isset($_POST["submit"])){

        //stores all post values into vars
        $chanSelection = $_POST['chans'];
        $boardSelection = $_POST['boards'];
        $threadURL = $_POST['thread-url'];

        $kektest = new ImageScrape();

        //executes imgGrab method from imageScrape class, passing in properties
        //$grabIT = $imgscrape->imgGrab($chanSelection, $boardSelection, $threadURL);
        $grabIT = $kektest->downloadArray();
        echo $grabIT;
    }

?>


    <?php include("includes/header.php"); ?>

         <div class="main-container">

             <div class="text-main">
                 <h1>4chan Image Downloader</h1>
             </div>


             <form class="input-form" method="post">
                 <p>Please select 4chan or 4channel.</p>
                 <select id="chanSelector" name="chans">
                    <option value="4chan">4chan</option>
                    <option value="4channel">4channel</option>
                 </select>

                 <p>Please select a board letter.</p>
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

                 <p>Please enter the url for the thread.</p>
                 <input type="text" name="thread-url" value="">
                 <input type="submit" class="submit-button" name="submit" value="Submit">
             </form>



         </div>

    <?php include("includes/footer.php"); ?>
