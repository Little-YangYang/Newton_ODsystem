<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>牛顿信息安全攻防展示系统-展示端</title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">
    * {font-family: Tahoma, "Microsoft Yahei", Arial; }
	body{text-align: center; margin: 0 auto; padding: 0; background-color:#FFFFFF;font-size:16px;font-family:Tahoma, Arial}
	h1 {font-size: 40px; font-weight: normal; padding: 0; margin: 0; color: #444444;}
	h1 small {font-size: 20px; font-family: Tahoma; font-weight: bold; }
	a{color: #000000; text-decoration:none;}
	a.black{color: #000000; text-decoration:none;}
	b{color: #999999;}
	.clear{clear:both;height:1px;width:100%; overflow:hidden; margin-top:-1px} 
	.pd5{ padding-top:5px} 
	ul#nav{ width:97%; height:60px; background:#00A2CA;margin:0 auto} 
	ul#nav li{display:inline; height:60px} 
	ul#nav li a{display:inline-block; padding:0 20px; height:60px; line-height:60px; 
	color:#FFF; font-family:"\5FAE\8F6F\96C5\9ED1"; font-size:16px} 
	ul#nav li a:hover{background:#0095BB} 
	ul#nav{ text-align:center }
	table{clear:both;padding: 0; margin: 0 0 10px;border-collapse:collapse; border-spacing: 0;}
	th{padding: 3px 6px; font-weight:bold;background:#3066a6;color:#FFFFFF;border:1px solid #3066a6; text-align:left;}
	.th_1{padding: 3px 6px; font-weight:bold;background:#666699;color:#FFFFFF;border:1px solid #3066a6; text-align:left;}

	tr{padding: 0; background:#F7F7F7;}
	td{padding: 3px 6px; border:1px solid #CCCCCC;}
	input{padding: 2px; background: #FFFFFF; border-top:1px solid #666666; border-left:1px solid #666666; border-right:1px solid #CCCCCC; border-bottom:1px solid #CCCCCC; font-size:12px}
	input.btn{font-weight: bold; height: 20px; line-height: 20px; padding: 0 6px; color:#666666; background: #f2f2f2; border:1px solid #999;font-size:12px}
	.bar {border:1px solid #999999; background:#FFFFFF; height:5px; font-size:2px; width:89%; margin:2px 0 5px 0;padding:1px;overflow: hidden;}
	.bar_1 {border:1px dotted #999999; background:#FFFFFF; height:5px; font-size:2px; width:89%; margin:2px 0 5px 0;padding:1px;overflow: hidden;}
	.barli_red{background:#ff6600; height:5px; margin:0px; padding:0;}
	.barli_blue{background:#0099FF; height:5px; margin:0px; padding:0;}
	.barli_green{background:#36b52a; height:5px; margin:0px; padding:0;}
	.barli_1{background:#999999; height:5px; margin:0px; padding:0;}
	.barli{background:#36b52a; height:5px; margin:0px; padding:0;}
	#page {width: 920px; padding: 0 20px; margin: 0 auto; text-align: left;}
	#header{position: relative; padding: 10px;}
	#footer {padding: 15px 15px; text-align: left; font-size: 12px; font-family: Tahoma, Verdana;line-height:16px}
	#lnmplink {position: absolute; top: 20px; left: 200px; text-align: right; font-weight: bold; color: #06C;}
	#lnmplink a {color: #0000FF; text-decoration: underline;}
	#lnmplink2 {position: absolute; top: 20px; right: 80px; text-align: right; font-weight: bold; color: #06C;}
	#lnmplink2 a {color: #0000FF; text-decoration: underline;}
	.w_small{font-family: Courier New;}
	.w_number{color: #f800fe;}
	.sudu {padding: 0; background:#5dafd1; }
	.suduk { margin:0px; padding:0;}
	.resNo{color: #FF0000;}
	.word{word-break:break-all;}

</style>

</head>
<body>

	<ul id="nav"> 
	<li><a href="index.php">系统概况</a></li> 
	<li><a href="javascript:location.reload();">刷新网页</a></li> 
	<li><a href="edit.php">编辑页面</a></li> 
	<li><a href="liuyan.php">留言系统</a></li> 
	</ul> 
    
	<div id="page">
	    <form action = "makepage.php" method="post">
           <h3>新建页面</h3>
		   <textarea type = "text" name = "code" rows="20" cols="100"> </textarea>
		   <br><br>
		   <input type="text" name="user" size="30" placeholder="帐号"/>
		   <input type="password" name="password" size="30" placeholder="密码" />
		   <input type="submit" name="submit" value="提交" style="width:100px" />
          </form>		   
	</div>

	<div id="footer">
	<p>　　</p>
	</div>

	</div>
</body>
</html>