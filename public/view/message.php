<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>友情提示</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/3.2.0/jquery.min.js"></script>

</head>
<body>
    <!--bootstrao 编辑器款及方式，需要对bootstrap样式、面板、表单、表格-->
    <!--安装bootstrap编辑器插件：setting->plugins->Browser ..->搜索bootstrap->
    <!--bs3-关键词,按ctrl+j(mac:command+j)-->
    <div class="jumbotron" style="background: #ffffff;">
    	<div class="container" style="text-align: center;margin-top: 100px">
    		<h1><?php echo  $msg; ?></h1>
            <p><span id="time">3</span>s之后自动跳转,或电此跳转</a></p>
    		<p>
    			<a class="btn btn-primary btn-lg">关于作者</a>
    		</p>
    	</div>
    </div>
    <script>
      $(function () {
          setInterval(function () {
              var time =$('#time').html();
              time--;
              if(time==0){
                  location.href="<?php echo $this->url;?>"
              }
              $('#time').html(time)
          },1000)

      })

    </script>



</body>
</html>