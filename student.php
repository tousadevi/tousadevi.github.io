<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<?php
include 'config.php';
session_start();
 //starting the session
 $search_value = $_post["search"];
 $sql = "select * from files where eventid like["select eventid from events where eventname = '$search_value'"]";
 print_r($sql);
 die;
 $res = $db-> query($sql);
 while ($row = $res -> fetch_assoc() ){
	 echo 'eventname :' .row["eventname'"];
	 echo 'filename:' .row['filename'];
 }
 ?> 
<html>
<head>
<title>PROFILE</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="jscripts/requests.js"></script>
 <script>
 setInterval("users()",3000);
  function users(){
	xhr1 = new XMLHttpRequest();
	xhr1.open('POST' , 'useronline.php' , true);
	xhr1.setRequestHeader('content-type','application/x-www-form-urlencoded');
	xhr1.send();
	xhr1.onreadystatechange = function(){
	//	alert(xhr.responseText);
			document.getElementById('onlineusers').innerHTML = xhr1.responseText;
			}
		
		
		}
 </script>
</head>

<body>
	<div id="header">																																																																																																																																																																																																																																																																																																					<div class="inner_copy"><a href="http://ecommercebuilders.blogspot.com/">http://ecommercebuilders.blogspot.com/</a></div>
		<span class="logo">student profile</span>																																																											
		<ul id="menu">
			<li><a href="download.php"><img src="images/but1.gif" alt="" width="64" height="42" /></a></li>
			<li><a href="edit.php"><img src="images/but2.gif" alt="" width="108" height="42" /></a></li>
			<li><a href="index2.html"><img src="images/but3.gif" alt="" width="93" height="42" /></a></li>
			<li><a href="index2.html"><img src="images/but4.gif" alt="" width="101" height="42" /></a></li>
			<li><a href="index2.html"><img src="images/but5.gif" alt="" width="86" height="42" /></a></li>
			<li><a href="index2.html"><img src="images/but6.gif" alt="" width="102" height="42" /></a></li>
		</ul>
		<img src="images/spacer.gif" alt="setalpm" width="120" height="120" border="0" usemap="#Map" class="rss" />
        <map name="Map">
          <area shape="circle" coords="60,60,63" href="#" onclick = "logout()">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
      </map>
	</div>
	<div id="content">																																																																																																																																																																																																																																																																																																					<div class="inner_copy"><a href="http://www.mgwebmaster.com/free-website-builders/">Best free website builders - choose online platform for creating a free website</a></div>
		<div id="posts">
			<div class="post">
			 <p><strong>welcome <?php echo $_SESSION["name"]; echo '&nbsp'; echo $_SESSION["surname"];?></strong>
				<h2>Events</h2>
				<div><span class="date"><input id="date" name="date">
                   <script type="text/javascript">document.getElementById('date').value = Date();</script><a href="#"></a>   <span></span>   </p>
			</span></div>
				<div class="description">
					<p>
					 <iframe height="700px" width="900px" src="download.php"name="iframe_a"></iframe>

								<a href="download.php" target="iframe_a">
				</div>
				</div>
			<div class="post">
				
				<div class="date"><span class=""> </span><span class=""></span></div>
			
				<div class="description">
					</div>
				<p class=""><a href="#"></a>   <span></span>   </p>
			</div>
		</div>
		<div id="sidebar">
		    <div id="search">
				<input type="text" value="Search"> <a href="#"><img src="images/go.gif" alt="" width="26" height="26" /></a>																																																																																																																																																																																																																																																						
			</div>
			<div class="list">
				<img src="images/title1.gif" alt="" width="150px" height="36px" />
				<ul>
					<li><a href="#">animation</a></li>
					<li><a href="#">magazines</a></li>
					<li><a href="#">architecture</a></li>
					<li><a href="#">news</a></li>
					<li><a href="#">art</a></li>
					<li><a href="#">photography</a></li>
					<li><a href="#">blogs</a></li>
					<li><a href="#">product design</a></li>
					<li><a href="#">books</a></li>
					<li><a href="#">stuff</a></li>
					<li><a href="#">graphic design</a></li>
					<li><a href="#">web design</a></li>
					<li><a href="#">illustration</a></li>
				</ul>
				<img src="onlineusersstudent.jpg" alt="" width="190" height="34" />
				<ul id = "onlineusers">
					
				</ul>
			</div>
		</div>
	</div>
	<div id="footer">																																																																																																																																																			<div class="inner_copy"><a href="http://www.business.com/web-design/top-7-professional-website-builders-for-small-businesses/">small business website builder</a></div>
		<p>2016 Copyright,All rights reserved. <a href="" style="color:#ffffff;">educational website</a> designed by karishma tousadevi gobindoo</span> </a></p>																																																																		
	</div>
</body>
</html>
