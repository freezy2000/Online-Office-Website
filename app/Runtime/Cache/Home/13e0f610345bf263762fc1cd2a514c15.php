<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html public/admin "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <title>后台管理系统--项目审批</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="public/admin/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="public/admin/stylesheets/theme.css">
    <link rel="stylesheet" href="public/admin/lib/font-awesome/css/font-awesome.css">
    <script src="public/admin/lib/jquery-1.7.2.min.js" type="text/javascript"></script>  <!--date picker--> 
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
    
<?php include("public/admin/include/navbar.php") ?>   <?php include("public/admin/include/left-nav.php") ?> 
<script>
function openNavList(){
  var currentClassName = document.getElementById("2").className;
  document.getElementById("2").className = currentClassName + "in";
}
window.onload = openNavList();
</script>
    
    <div class="content">
        
        <div class="header">
            <h1 class="page-title">项目审批</h1>
        </div>

        <div class="container-fluid">

<div class="row-fluid"><!--若本区域无内容，请勿显示-->
    <div class="block">
		<?php if(is_array($li)): $i = 0; $__LIST__ = $li;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lj): $mod = ($i % 2 );++$i;?><a href="#page-stats" class="block-heading" data-toggle="collapse"><?php echo ($lj["name"]); ?></a>        
		
		<div id="page-stats" class="block-body collapse in">
        	<div class="well">
			<style>
			.table11 th,.table11 td {
			font-size:13px;
			}
			</style>
            <form>
                <table class="table table11">
                  <thead>
                    <tr>
                      <th>编号</th>
                      <th>名称</th>
					  <th>承建单位</th>
                      <th>提交时间</th>
                      <th>状态</th>
					  
					  <th>推荐</th>
					  <th>是否支持</th>
					  <th>支持资金</th>
                      <th style="width: 136px;"></th>
                    </tr>
                  </thead>
                  <tbody>
				  	<?php if(is_array($lj['content'])): $i = 0; $__LIST__ = $lj['content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><tr>
                      <td><?php echo ($li["idd"]); ?></td>
                      <td><a href="index.php?m=Admin&a=app_project_content&id=<?php echo ($li["id"]); ?>"><?php echo ($li["proname"]); ?></a></td>
					   <td><a href="index.php?m=Admin&a=com&id=<?php echo ($li["uid"]); ?>"><?php echo ($li["unit"]); ?></a></td>
                      <td><?php echo ($li["time"]); ?></td>
                      <td><?php echo ($li["state"]); ?></td>
					 
					  <td><?php echo ($li["recornot"]); ?></td>
					
					  <td>
					  <form>
					  <select name="support" style="width:50px" id="v<?php echo ($li["id"]); ?>">
					  <option value="是" <?php echo ($li["s1"]); ?>>是</option>
					  <option value="否" <?php echo ($li["s2"]); ?>>否</option>
					  </select>
					  </td>
					 
					  </td>
					  <td><input name="support_money" value="<?php echo ($li["support_money"]); ?>" style="width:40px" id="vv<?php echo ($li["id"]); ?>" />万
					  <a  class="btn btn-mini" type="submit" onclick=mySubmit1<?php echo ($li["id"]); ?>()>确认</a> 
					  
					   <script>
							function mySubmit1<?php echo ($li["id"]); ?>(){
								var value1 = document.getElementById("v<?php echo ($li["id"]); ?>").value;
								var value2 = document.getElementById("vv<?php echo ($li["id"]); ?>").value;
								window.location.href="http://127.0.0.1/index.php?m=Admin&a=support&id=<?php echo ($li["id"]); ?>&support="+value1+"&support_money="+value2;
							}
					</script>
							
					  </form>
					  </td>
					  
					 
                      <td style="width:60px;">
                          <a href="#myModal1<?php echo ($li["id"]); ?>" role="button" data-toggle="modal">审批</a>
                          <a href="#myModal2<?php echo ($li["id"]); ?>" role="button" data-toggle="modal">删除</a>
						<div class="modal small hide fade" id="myModal1<?php echo ($li["id"]); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo ($li["id"]); ?>" aria-hidden="true">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h3 id="myModalLabel<?php echo ($li["id"]); ?>">项目状态更改</h3>
							</div>
						
							<div class="modal-body">
								<p>填写状态</p>
								<input name="id"  id="value1<?php echo ($li["id"]); ?>" />							
								
								<p>批复(请尽量精简，最好少于16个字)</p>
								<input id="value2<?php echo ($li["id"]); ?>" name="pifu" value=""/>
								<input name="id" value="<?php echo ($li["id"]); ?>" type="hidden" />
							</div>
							<div class="modal-footer">
								
								<a class="btn btn-primary" type="submit" onclick=mySubmit<?php echo ($li["id"]); ?>()>确定并反馈</a>
								<a class="btn btn-primary" type="submit" onclick=mySubmit_feed<?php echo ($li["id"]); ?>()>确定</a>
								<button class="btn" data-dismiss="modal" aria-hidden="true">取消<tton>
							</div>
							
							
							
                            <script>
							function mySubmit<?php echo ($li["id"]); ?>(){
								var value1 = document.getElementById("value1<?php echo ($li["id"]); ?>").value;
								var value2 = document.getElementById("value2<?php echo ($li["id"]); ?>").value;
								window.location.href="http://127.0.0.1/index.php?m=Admin&a=dec&id=<?php echo ($li["id"]); ?>&state="+value1+"&pifu="+value2;
							}
							</script>
							<script>
							function mySubmit_feed<?php echo ($li["id"]); ?>(){
								var value1 = document.getElementById("value1<?php echo ($li["id"]); ?>").value;
								var value2 = document.getElementById("value2<?php echo ($li["id"]); ?>").value;
								window.location.href="http://127.0.0.1/index.php?m=Admin&a=dec_nosee&id=<?php echo ($li["id"]); ?>&state="+value1+"&pifu="+value2;
							}
							</script>

							

						</div>
						<!--                  -->
						 <div class="modal small hide fade" id="myModal2<?php echo ($li["id"]); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h3 id="myModalLabel">项目删除确认</h3>
							</div>
							<div class="modal-body">
								<p class="error-text"><i class="icon-warning-sign modal-icon"></i>您确实要删除本项目吗？删除后不可恢复。</p>
							</div>
							<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
								<a  href="index.php?m=Admin&a=app_change_state&id=<?php echo ($li["id"]); ?>&action=del"class="btn btn-danger">删除</a>
							</div>
						</div>    
	
                      </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                  </tbody>
                </table> 
            </form>
            </div>
			
        </div><?php endforeach; endif; else: echo "" ;endif; ?>                    
    </div>  
</div>
 
   
   
<?php include("public/admin/include/footer.php") ?> </div></div> <script src="public/admin/lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>