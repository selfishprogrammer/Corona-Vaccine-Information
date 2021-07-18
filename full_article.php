<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Corona Panademic</title>
</head>


<?php include 'nav.php'?>
<?php include 'world_wide.php'?>
<?php 
$news_id=$_GET['news_id'];
$news_data=file_get_contents("http://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=89f15cf31b4242869f108ab2e1dcff05");

$news_data_array=json_decode($news_data,true);

echo '<div class="container">
<div class="shadow bg-white round">

                                            <img src="'.$news_data_array['articles'][$news_id]['urlToImage'].'" alt="" width="100%" height="300px"
                                                class="card-img">
                                            <div class="text-center my-4"><b>Source :&nbsp;'.$news_data_array['articles'][$news_id]['source']['name'].' </b></div>
                                            <div class=" mt-4 text-center "> <b><span style="    font-size: 20px;
                                            font-family: monospace;
                                            color: tomato;">'.$news_data_array['articles'][$news_id]['title'].'</span></b></div>

                                            <div class="mx-4 mt-4"><b>Description :&nbsp;&nbsp;&nbsp; <span style="    font-size: 18px;
                                            font-family: cursive;
                                            color: slategrey;">'.$news_data_array['articles'][$news_id]['description'].'</span></b></div>

                                            <div class=" mx-4 mt-5"><b><span style="font-size: 16px;
                                            font-family: monospace;
                                            color: violet;">'.$news_data_array['articles'][$news_id]['content'].'</span></b></div>

                                            <div class="d-flex justify-content-between">


                                                <div class="text-center m-3"><b>Published By :&nbsp; <span style="    font-size: 15px;
                                                font-family: initial;
                                                color: black;">'.$news_data_array['articles'][$news_id]['author'].'</span></b></div>
                                                <div class="text-center m-3"><b>Published At :&nbsp; <span style="    font-size: 15px;
                                                font-family: initial;
                                                color: black;">'.$news_data_array['articles'][$news_id]['publishedAt'].'</span></b></div>
                                            </div>


</div>
</div>';

?>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>