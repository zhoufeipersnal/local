<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,inital-scale=1" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/yanwan/Public/css/scss.css" />
<script src="/yanwan/Public/js/jquery-2.2.4.min.js"></script>
<style>
body{
	background:#fafafa;
	/*background:red;*/
}
*{margin:0px;font-family:"微软雅黑";}
.header{background:#009e96; overflow:hidden;width:100%;
}
.header p{float:right;margin-right:40%;font-size:1.5rem;color:#ffffff;line-height:100px;}
.header a{display:block;float:left;width:1.5rem;margin-left:4%;line-height:100px;}
.content{
	background:white;
	margin-top:20px;
	padding:0px 4%;
}
.content>div{
	background:white;
	}
label{
	font-size:1rem;
	color:#333333;
}
input{
	border:0px;
}
input[type="text"]{
	line-height:120px;
	font-size:0.9rem;
	color:#999999;
	padding-left:12%;
	outline:none;
}
.headpic{
	float:left;
	line-height:140px;
	width:13%;
/*	border:red 1px solid;*/
	font-size:1rem;
}
.picbox{
	padding:10px 0px;
	float:left;
	line-height:140px;
	
}
.imghead{
	height:120px;
	position:absolute;
	float:left;
	/*border:red 1px solid;*/
	margin-left:5%;
	opacity:0;
	}
.pic{
	display:block;
	width:120px;
	/*width:17%;*/
	border:#333333  1px solid;
	height:120px;
	background:url(backicon.png);
	background-position:center;
	border-radius:50%;
	margin-left:40%;
}
.content_module{
   overflow:hidden;
   border-bottom:#dcdcdc solid 1px;
   color:#333333;
	
}
.border_set{border-bottom:#dcdcdc solid 1px}
.title{
	line-height:120px;
	float:left;
	font-size:1rem;
}
.show_va{
	line-height:120px;
	float:left;
	font-size:1rem;
	margin-left:9%;
	color:#999999;
	font-size:0.9rem;
}
#preview{width:120px;}
.skin_content{
	background:white;
	margin-top:15px;
	padding:0px 4%;
	color:#333333;
	line-height:113px;
}
.consume{
	border-bottom:#dcdcdc solid 1px;
}

.recoder{
	display:block;
    line-height:100px;
	color:#333333;
	text-decoration:none;
	 background:url(/yanwan/Public/img/tubiao_03.png) no-repeat; background-position:right;
}

.project{
	display:block;
	line-height:120px;
	color:#333333;
	text-decoration:none;
	overflow:hidden;
	}
.project>div{
	float:left;
	
}
input{
    boorder:1px #CCC solid;	
}
</style>
</head>


<body>
 <div class="header">
    <a href=""><img src="/yanwan/Public/img/backicon.png"/></a>
    <p>个人信息</p>
 </div>
 <div class="content">
     <div class="content_module">
         <div class="headpic" >头像</div>
         <div class="picbox">
         <form action="/yanwan/index.php/Home/Userinfo/staffinfoupdata?YW_Staff_ID={$userinfo[0]['yw_staff_id']}" id="myform"  method="post" enctype="multipart/form-data"> 
             <input class="imghead"  name="YW_Staff_HeadPic"   type="file" id="file" />
             <img class="pic" id="preview" src="/yanwan/Uploads/headerpic/small/{$userinfo[0]['yw_staff_headpic']}" />
          <!--   <div class="pic" ></div>-->
         </div>
     </div>
     <div class="border_set"><label   for="info2">姓名&nbsp;&nbsp;&nbsp;</label><input  name="YW_Staff_Name"   id="info2" type="text"  class="inputbox"  value="{$userinfo[0]['yw_staff_name']}" /></div>
     <div class="border_set"><label  for="info3">手机号</label><input  class="inputbox"  name="YW_User_Phone"   id="info3" type="text"   value="{$userinfo[0]['yw_user_phone']}" /></div>
      <div class="border_set"><label  for="info3">个人简介</label><input  class="inputbox"  name="YW_Staff_Intro"   id="info3" type="text"   value="{$userinfo[0]['yw_staff_intro']}" /></div>
      <div class="border_set"><label  for="info3">工作年限</label><input  class="inputbox"  name="YW_Staff_WorkingAge"   id="info3" type="text"   value="{$userinfo[0]['yw_staff_workingage']}" /></div>
      <a class="project" href="?YW_User_ID={$userinfo[0]['yw_staff_id']}"><div class="project_title">擅长项目</div><div class="show_va">{$userinfo[0]['yw_staff_goods_project']}</div></a>
  </div>   
  <div class="skin_content">
     <a href="?YW_User_ID={$userinfo[0]['yw_staff_id']}" class="recoder" ><div class="consume">查看我的消费记录</div></a>
 </div>
 
</form>

 <script>
 $(document).ready(function(){
			$("#file").change(function(){
				
					var $file = $(this);
					var fileObj = $file[0];
					var windowURL = window.URL || window.webkitURL;
					var dataURL;
					var $img = $("#preview");
					if(fileObj && fileObj.files && fileObj.files[0]){
					dataURL = windowURL.createObjectURL(fileObj.files[0]);
					$img.attr('src',dataURL);
					}else{
					dataURL = $file.val();
					var imgObj = document.getElementById("preview");
					// 两坑:
					// 1、设置filter属性元素必须已经存DOM树态创建Node需要设置属性前加入DOM先设置属性加入效；
					// 2、src属性需要像面式添加面两种式添加效；
					imgObj.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
					imgObj.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = dataURL;
						
					 
			}
	});
});

$(document).ready(function(){

  $(".inputbox").blur(function(){
	   document.getElementById("myform").submit();    
  });
  $(".imghead").blur(function(){
	  
      setInterval("document.getElementById('myform').submit()",10000);
   
  });
});


 </script>
</body>
</html>