<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />

    <link rel="stylesheet" type="text/css" href="/yanwan/index.php/Home/Public/css/css.css" />
		<!--<script src="js/bootstrap.min.js"></script>-->
		<title></title>

	</head>
	<body>
                <div class="book_content">
                    <div class="preface">skinupadat</div>
     
                </div>

<div style="width:100px;border:red 1px solid; text-align:center;"><a>nishio</a></div>

<form action="/yanwan/index.php/Home/Userinfo/skintype?YW_User_ID=1" method="post" onSubmit="return shijian()" > 
您喜欢的水果？<br /><br /> 
<label><input style="display:none;"  name='YW_User_Skin_Type'   class="one" value="" /> </label> 
<label><input  type="checkbox" value="1"  class="YW_User_Skin_Type"/>苹果 </label> 
<label><input  type="checkbox" value="1"  class="YW_User_Skin_Type" />桃子 </label> 
<label><input type="checkbox" value="1"  class="YW_User_Skin_Type" />香蕉 </label> 
<label><input type="checkbox" value="1"  class="YW_User_Skin_Type" />梨 </label> 
<label><input style="display:none;"    name='YW_User_Skin_Condition'  value="" class="one"  /> </label> 
<label><input type="checkbox" value="1"  class='YW_User_Skin_Condition'/>苹果 </label> 
<label><input type="checkbox" value="1"  class='YW_User_Skin_Condition' />桃子 </label> 
<label><input type="checkbox" value="1"  class='YW_User_Skin_Condition' />香蕉 </label> 
<label><input type="checkbox" value="1"  class='YW_User_Skin_Condition' />梨 </label> 
<input type="submit" value="tijiao"   />

</form> 
<script>
   
//   for(i=1;i<inputl.length;i++){
//	   inputl[i].onchange=function(){
//		   if(this.checked==true){
//			   this.value=1
//			}else{
//				this.value=0
//			}
//			alert(this.value)
//		   
//	       }
//	  }
//	    

     
     function shijian(){
		 var filed=['YW_User_Skin_Type','YW_User_Skin_Condition']
		 for(j=0;j<filed.length;j++){
		     var input=document.getElementsByClassName(filed[j])
		     var str="";
		     for(i=0;i<input.length;i++){
			   if(input[i].checked==true){
				
				   str+="1,"
				}else{
					str+="0,"
				}
             }
			 console.log(str);
		    document.getElementsByName(filed[j])[0].value=str;
			
		   
		 }
		 return true;
         
	  }
	  </script>
	</body>
</html>