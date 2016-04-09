<?php
include'dd.php';
?>

<html>
  <link rel="icon" href="../suramshivareddy.com/photo.png" type="image/gif">
    <meta name="author" content="Suram ShivaReddy" />
    <meta name="keywords"  content="ShivaReddy, Suram ShivaReddy, Suram Shiva, Shiva R'dy" />
<meta name="description" content="I'm Suram ShivaReddy a Webdeveloper from India (Hyderabad). If you are looking for a
good looking Responsive website, I can help you with it">
<head><title> Ping your Friend</title>
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
 #footer{
 widht:100%;
position:absolute;
  left:0;right:0;  bottom:0;
padding:14px;
  background-color:#444;
  text-align: center;
  color:white;
 
 }
  #header{
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

#formbox{
margin:5px auto;
text-align:center;

line-height:50px;
border:2px solid #ff3366;
width:500px;
height:150px;
border-radius:3px;
background: white;
padding:10px;
 color:#399;
 }
 input{
 border:1px solid #444;
 height:30px;
 text-align:left;
padding-left:5px;
 widht:100px;
 }
 
 .modal {
    display: none; 
    position: fixed; 
    z-index: 1;
    padding-top: 100px; 
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
}


.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
	line-height:35px;
	text-align:center;
    border: 1px solid #888;
    width: 80%;
}
.modal-content h2{
color:#ff3366;
background-color:#444;
padding:5px;
}

#okay {
border:0;
border-radius:3px;
    color: :white;
  align:center;

  text-align:center;
 
    font-size: 21px;
  padding:5px;
  background-color:#ff3366;
	width:100%;
	transition:1s
}

#okay:hover,
#okay:focus {
    background-color:#399;
    text-decoration: none;
    cursor: pointer;
}
 #sub{
visibility: hidden;
 }
 #namespot{
 float:right;
margin-top:-30;
 }
    #container{
 background:white;
 margin: auto;
 margin-top:1;
 padding:20px;
width:80%;
height:67%;

overflow-y: scroll;
 
   }

   #chatbox{
width:90%;
min-height: 24px;
}
   #msgbox{

    margin: 5 auto;
	margin-left:10%;
	border-radius:6px;
   }
#nam{
border-radius:2px;
border: 1px solid #ff3366;
transition:1s;
}
#nam:focus{
border: 1px solid #ff3366;
box-shadow: 3px 3px 2px #888888;
width:230px;
}

#msg{
width:90%;

height:40px;
padding-left:15px;
margin:auto;
box-shadow:inset 0 0 7px #399;
	border:2px solid #ff3366;
	border-radius:5px;
}

#myBtn{
border-radius:3px;
border:none;
width:80px;
text-align:center;
background-color:#ff3366;
color:white;
margin-top:20px;
	transition:1s;
}
#myBtn:hover{
width:100px;
height:35px;
cursor: pointer;
}
textarea{
width:100%;
height:40px;
border:1px solid gray;
border-radius:5px;
}
  #chatdata{
  width:100%;
  padding:5px;
  
  margin-bottom:5px;
  border-bottom:1px solid silver;
 
  }
  #chatsystem{
  display:none;
  }
   
@media only screen and (max-width: 540px){

#formbox{
width:90%;

}


} 
</style>
	<script>

		function ajaxd(){
	var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('chatbox').innerHTML = req.responseText;
		} 
		}
		req.open('GET','display.php',true); 
		req.send();
		}
		setInterval(function(){ajaxd()},1000);
	</script>
</head>

<body id="body">
<div id="header">
<a href="index.php"><h2>Ping Your Friend..</h2></a>
<div >

<h2 id="namespot" ></h2>
</div>
</div>
<div id="formbox" action="index.php">
<form  method="post">
<h2>Enter Your Name: </h2>
<p><input type="text" id="nam" name="name" placeholder="Enter name"></p>
<input type="submit" name="submit" value="Submit !!" id="myBtn">
</form>
</div>
<div id="chatsystem">
<div id="chattext">
<div id="msgbox"  >
<input  type="text" id="msg" name="entermsg" placeholder="Type message... Press Enter"  onKeyDown="if(event.keyCode==13) validate();">
</div>
<div id="container">
<div id="chatbox">
<div id="chats"></div>
</div>
</div>
</div>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" id="disply">
  
	  <?php 
	  function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
	 $attach=generateRandomString();
setcookie(
  "tablename",
  $attach,
  time() + (10 * 365 * 24 * 60 * 60)
);

	  ?>
	

	
  </div>
  <span class="close">
	  <input type="button" id="okay" value="Click Okay" onclick="myfun();">
</span>
	
</div>
<div id="footer">
<p>Production by - <a href="www.facebook.com/shivareddy0">Shiva R'dy</a></p>
</div>
<?php
$name;
if(isset($_POST['submit'])){
$name=$_POST['name'];
$text="text";
$style="width:250px;";

$url="http://localhost:12/shiva/ping.php";
$a="<script>var modal = document.getElementById('myModal');
	 document.getElementById('disply').innerHTML ='<h2>Hi ".$name." Invite your friend to Chat<h2>';
 
 document.getElementById('disply').innerHTML = document.getElementById('disply').innerHTML +'Give this URL and PINGCODE to the people you want to chat ';
    document.getElementById('disply').innerHTML = document.getElementById('disply').innerHTML +'<br>Url: <input type=".$text." style=".$style." value=".$url."><br> Pingcode: <input type=".$text." value=".$attach."><br><br>';  
	
	modal.style.display = 'block';</script>";
echo $a;

$query="INSERT INTO pingcode(pingcode) values ('$attach')";
$run=$con->query($query);

$creat="CREATE TABLE ".$attach."( 
id INT NOT NULL AUTO_INCREMENT , 
name VARCHAR(255) NOT NULL ,
msg VARCHAR(255) NOT NULL , 
date VARCHAR(255) NOT NULL  , 
PRIMARY KEY (id))";
$run=$con->query($creat);
} ?>
<script>
function validate(){
ajax_post();
ajaxd();

}

function myfun(){
var name="<?php  echo $name;?>";
document.getElementById('namespot').innerHTML="<h2 style='font-size:4.0vh;'>"+name+"</h2>";
modal.style.display = 'none';
document.getElementById('formbox').style.display="none";
document.getElementById('chatsystem').style.display="block";
}

function ajax_post(){
   var hr = new XMLHttpRequest();
    var url = "chat.php";
    var fn = document.getElementById("msg").value;
	var ln="<?php  echo $attach;?>";
	var name="<?php  echo $name;?>";
	var vars = "msg="+fn+"&pingcode="+ln+"&uname="+name;
	  hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

   document.getElementById("msg").value = "";
    hr.send(vars);
    
}
</script>
</body>
</html>