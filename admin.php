<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>PowerPoint文件上传</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="file-chose">
            <input type="file" name="file" id="file" /> 
        </div>
        <input class="submit" type="submit" name="submit" value="提交" />
    </form>
    <p class="ps">
        <span>备注：</span>
        1、必须是PPT文件
        2、文件小于20M
    </p>
    <style>
        *{
            text-align:center;
        }
        h1{
            margin-top:100px;
            font-size:40px;
        }
        body{
            width:1000px;
            margin:50px auto;
        }
        form .file-chose{
            margin-top:50px;
            font-size:26px;
        }
        form .file-chose #file{
            width:300px;
            font-size:22px;
        }
        form .submit{
            margin-top:50px;
            font-size:22px;
        }
        .ps{
           margin-top:100px;
           font-size:16px;
        }
        .ps span{
            font-weight:bold;
        }
    </style>
</body>
</html>