<?php


  if(empty($_FILES['file']['tmp_name'])){
    die('文件未上传');
    }
  $filename = $_FILES['file']['name'];
  $filetype=substr(strrchr($filename,'.'),1);
  if(!($filetype == "ppt"|| $filetype == "pptx")){
    die('文件类型错误，请上传ppt文件');
  }
  if ($_FILES["file"]["size"] > 20971520){  
    die('文件大于20M');
  }

  if ($_FILES["file"]["error"] > 0){
  echo "文件上传失败";
  }else{
    if (file_exists("ppt/content."."$filetype")){
      unlink("ppt/content."."$filetype");
    }
    move_uploaded_file($_FILES["file"]["tmp_name"],"ppt/content."."$filetype");
  }
  


  //ppt转换为图片
  function pptToPic($filetype){
    try {
      deldir(__DIR__.'/images');
      $powerpnt = new COM("powerpoint.application") or die("Unable to instantiate Powerpoint");
      $addr = __DIR__."/ppt/"."content.".$filetype;
      $presentation = $powerpnt->Presentations->Open($addr, false, false, false) or die("Unable to open presentation");
      foreach($presentation->Slides as $slide){
          $slideName = "Slide_" . $slide->SlideNumber;
          $uploadsFolder = __DIR__."/images/";
          $slide->Export($uploadsFolder.$slideName.".jpg", "jpg", "1920", "1080");
      }
      $presentation->Close();
      $powerpnt->Quit();
      $powerpnt = null;
      return true;
      } catch (Exception $e){
      return false;
    }
  }

  //循环删除目录和文件函数
  function deldir($dir) {
    $dh=opendir($dir);
    while ($file=readdir($dh)) {
      if($file!="." && $file!="..") {
        $fullpath=$dir."/".$file;
        if(!is_dir($fullpath)) {
            unlink($fullpath);
        } else {
            deldir($fullpath);
        }
      }
    }
    closedir($dh);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    <?php  if(pptToPic($filetype)):  ?>
    <h2>文件上传成功</h2>
    <p><span id="time">5</span>秒后跳转至主页</p>
    <script>
      var element = document.getElementById('time');
      var time = 5;
      setInterval(function(){
        element.innerHTML = --time;
        if(time==0){
          location.href ="./";
        }
      },1000)
    </script>
    <?php else :?>
    <h2>文件转换失败</h2>
    <p>如有疑问请联系编码人员</p>
    <?php endif; ?>
    <style>
      *{
        text-align:center;
      }
      h2{
        margin-top:100px;
        font-size:40px;
      }
      p{
        font-size:20px;
        margin-top:50px;
      }
    </style>
</body>
</html>