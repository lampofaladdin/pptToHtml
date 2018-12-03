<?php 
    $baseDir = './images/';
    $resource = opendir($baseDir);
    $imgArr = [];
    while(  $row  = readdir($resource)){
        if($row !='.' && $row !='..'){
            array_push($imgArr,$baseDir.$row);
        }
    }
    closedir($resource);
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./assets/swiper.min.js"></script>
    <link rel="stylesheet" href="./assets/swiper.min.css">
    <title>PPT文件转HTML</title>
</head>
<body>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach( $imgArr as $img): ?>
                <div class="swiper-slide">
                    <img src="<?php echo $img; ?>" alt="">
                </div>
            <?php endforeach;?>

        </div>
        <!-- 如果需要分页器 -->`
        <div class="swiper-pagination"></div>
        
        <!-- 如果需要导航按钮 -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        
        <!-- 如果需要滚动条 -->
        <div class="swiper-scrollbar"></div>
    </div>
    <script>        
        var mySwiper = new Swiper ('.swiper-container', {
            loop: true, // 循环模式选项
            
            // 如果需要分页器
            pagination: {
            el: '.swiper-pagination',
            },
            
            // 如果需要前进后退按钮
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
            
            // 如果需要滚动条
            scrollbar: {
            el: '.swiper-scrollbar',
            },
        })        
  </script>
    <style>
        *{
            margin:0;
            padding:0;
        }
        html{
            height:100%;
        }
        body{
            height:100%;
        }
        .swiper-container {
            width: 100%;
            height: 100%;
        }
        .swiper-container .swiper-slide img{
            width:100%;
            height:100%;
        }


    </style>
</body>
</html>