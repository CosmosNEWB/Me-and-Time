<!DOCTYPE html>
<html>
<head>
<title>Cosmos Opurum</title>
<style>
  p{
  font-family:'Rancho', cursive;
  text-align: center;
  font-size: 25px;
  }
  #header{
  display: block;
  margin: 0;
  padding: 0;
  color: black;
  width: 100%;
  text-align: center;
  background: #B76868;
  }
  ul{
  left: 0;
  top: 0;
  width: 100%;
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #B76868;
  }
  li{
  font-family: 'Rancho', cursive;
  }
  li a{
   float: left;
   display: block;
   padding: 10px 55px;
   color: black;
   font-size: 35px;
   text-decoration: none;
   border-right: 1px solid white;
  }
  li a:hover{
  color: white;
  background-color: black;
  }
  .active{
  color: white;
  background-color: black;
  }
  img{
  height:500px;
  width: 250px;
  }
 table {
  table-layout: fixed;
  width: 100%;
  height: 95%;
}
td {
  width: 25%;
  text-align: top;
}
.footer{
  width: 100%;
  border-top: 2px solid #B76868;
  color: #B76868;
  font-family: 'Rancho', cursive;
  font-size: 25px;
  text-align: center;
  bottom: 0;
  position: fixed;
}
</style>
<link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
</head>
<body>
	<div id="header">
		<ul>
		<li><a class="active" href="#">About Me</a></li>
		<lI><a href="#">My Services</a></li>
		<lI><a href="#">My Works</a></li>
		<lI><a href="#">Contacts</a></li>
		<ul>
	</div>
	</br>
	</br>
	</br>
	<table>
		<tr>
			<td></td>
			<td><img src="new me.jpg"/></td>
			<td>
				<p>Hello</br>I’m Cosmos Opurum</br>Digital Marketer and Web  Developer.</br>
				The</br>
				Current Time</br> 
				is
					<?php
					date_default_timezone_set("Africa/Lagos");
					print date("h:ia");
					?>
				</p>
            </td>
			<td></td>
		</tr>
	</table>
	<div class="footer">
		Copyright 2018 | All rights reserved.
		</div>	
</body>
</html>