<?php

    include('dd.php');
?>
<html>
<head>
  <link rel="icon" href="../suramshivareddy.com/photo.png" type="image/gif">
    <meta name="author" content="Suram ShivaReddy" />
    <meta name="keywords"  content="ShivaReddy, Suram ShivaReddy, Suram Shiva, Shiva R'dy" />
<meta name="description" content="I'm Suram ShivaReddy a Webdeveloper from India (Hyderabad). If you are looking for a
good looking Responsive website, I can help you with it">
<style>
*{
padding:0;
margin:0;
border:0;
}
body{
background:#399	;
font-family:Zapf Chancery, cursive;

   }

   #chatdata{
  width:100%;
  padding:5px;
  margin-bottom:5px;
  border-bottom:1px solid silver;
  
  }
  textarea{
width:100%;
height:40px;
border:1px solid gray;
border-radius:5px;
}
   #container{

 background:white;
 margin: auto;
 margin-top:1;
 padding:20px;
width:80%;
height:65%;

overflow-y: scroll;
 
   }
   #chatbox{
width:90%;
min-height: 24px;
}
   #msgbox{
width:100%;
    margin: 5 auto;
	border-radius:6px;
   }

   #msg{
   width:220px;
height:30px;
padding-left:15px;
margin-bottom:10px;
	border:1px solid #ff3366;
	border-radius:5px;
	transition:1s;
   }
   #msg:focus{
      width:320px;
	  box-shadow: 3px 3px 2px #399;
   }
#ms{
position:relative;
left:10%;
width:80%;

height:40px;
padding-left:15px;
margin:auto;
box-shadow:inset 0 0 7px #399;
	border:2px solid #ff3366;
	border-radius:5px;
}



  
 #footer{
 widht:100%;
position:absolute;
  left:0;right:0;  bottom:0;
padding:14px;
  background-color:#444;
  text-align: center;
  color:white;

 }

  #headd{
 widht:100%;
  background-color:#ff3366;
  text-align:left;
  padding:16px;
  color:white;
  }
  
 a{
text-decoration:none;
color:white;
 } 

 #namespot{
 float:right;
margin-top:-40;
 }


 #pingentry{
 text-align:center;
 margin:5px auto;
 display:block;
border:2px solid #ff3366;
width:500px;
height:180px;
background: white;
padding:20px;
color:#399;
 }
 #pingsubmit{
 border-radius:3px;
border:none;
width:80px;
height:30px;
text-align:center;
background-color:#ff3366;
color:white;

 transition:1s;
 }
 #pingsubmit:hover{
width:100px;
height:35px;
cursor: pointer;
}
 #chattext{
 display:none;
 }
 
 
@media only screen and (max-width: 540px){
#pingentry{
width:90%;
padding:0px;
font-size:14px;
}

#namespot{
font-size:10px;
margin-top:-25px;
}
#msgbox{
width:98%;
}
#container{
width:85%;
height:67%;

}

}
 
 
 
</style>
	<script>
		function ajaxd(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('chat').innerHTML = req.responseText;
		} 
		}
		req.open('GET','display.php',true); 
		req.send();
		}
		setInterval(function(){ajaxd()},1000);
	</script>
</head>
<body >

<div id="headd">
<h2><a href="index.php">Ping Your Friend..</a></h2>
<div id="namespot">

<h2><?php
if(isset($_POST['pingername'])){
$pname=$_POST['pingername'];
echo $pname;
}

 ?></h2>
</div>

</div>
<div id="pingentry">
<form method="post" action="ping.php"  >
<h2>Enter Your Name :</h2><input  type="text"  name="pingername" id="msg" placeholder="Enter your name">
<h2>Enter Pingcode :</h2><input  type="text"  name="ping" id="msg" placeholder="Enter Pingcode">
<br><input type="submit" value="Click Okay"id="pingsubmit" name="subping" onclick="ajaxd();">
</form>
</div>

<div id="chattext">
<div id="msgbox">
<input  type="text" id="ms" name="entermsg" placeholder="Type message... Press Enter" onKeyDown="if(event.keyCode==13) validate();">

</div>
<div id="container">
<div id="chatbox">
<div id="chat"></div>
</div>
</div>
</div>
<?php 
$pname;$ping;$msg;
echo "<script>aj();</script>";
if(isset($_POST['subping'])){
if(isset($_POST['pingername'])){
$pname=$_POST['pingername'];

}
if(isset($_POST['ping'])){

$ping=$_POST['ping'];
setcookie(
  "tablename",
  $ping,
  time() + (10 * 365 * 24 * 60 * 60)
);
$query="SELECT * FROM pingcode WHERE pingcode='$ping'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_array($run,MYSQLI_NUM);
if($row){
$pid=$row[1];

echo "<script>document.getElementById('pingentry').style.display='none';</script>";
echo "<script>document.getElementById('chattext').style.display='block';</script>";
}else
{
echo "<H1 style='text-align:center;color:white;'>Hi ".$pname." You Entered Wrong Pingcode..</h1>";
}
}
}

?>

<script>
function validate(){
ajax_post();
ajaxd();

}

$("#msg").keyup(function(event){
    if(event.keyCode == 13){
        $("#sub").click();
    }
});
function ajax_post(){
   var hr = new XMLHttpRequest();
var fn=document.getElementById("ms").value;
	var ln="<?php  echo $ping;?>";
	var name="<?php  echo $pname;?>";
	  var url = "chat.php";
var vars = "msg="+fn+"&pingcode="+ln+"&uname="+name;
  hr.open("POST", url, true);
  hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  document.getElementById("ms").value = "";
    hr.send(vars);
}
</script>
<div id="footer">
<p>Production by - <a href="www.facebook.com/shivareddy0">Shiva R'dy</a></p>
</div>
</body>
</html>