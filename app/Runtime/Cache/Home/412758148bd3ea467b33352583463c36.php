<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <title>项目申报系统--密码重置</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="public/lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="public/stylesheets/theme.css">
    <link rel="stylesheet" href="public/lib/font-awesome/css/font-awesome.css">

    <script src="public/lib/jquery-1.7.2.min.js" type="text/javascript"></script>


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    
<?php include("public/include/navbar.php") ?>  <div class="row-fluid">
    <div class="dialog">
        <div class="block">
            <p class="block-heading">密码重置</p>
            <div class="block-body">
                <form action="index.php?m=Unit&a=reset_password" method="post">
                    <label>请输入您注册时填写的邮箱</label>
                    <input type="text"  name="mail" value="" class="span12"></input>
                    <button value="发送" type="submit" class="btn btn-primary pull-right" onClick="document.getElementById('pass_alert').style.display='block'">发送</button>
                    <div class="clearfix"></div>
                    <p></p>
                    <p id="pass_alert" style="display:<?php echo ($show); ?>">1.如果您的邮箱填写正确，那么新的密码已发送至您注册时填写的邮箱，请查收。&nbsp;&nbsp;&nbsp;2.如果没有收到密码邮件，那么可能是邮箱错误或者邮件服务器失效，请联系管理员。</p>   
					
		                  
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        <a href="index.php?m=Unit&a=sign_in">登录</a>
    </div>
</div>


    


    <script src="public/lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>