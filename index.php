<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-Palengke</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
<style>
body{
	background-color: beige;
}
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}	
	@font-face{
	font-family: myFont;
	src: url(font/MAFINS.otf);
}
	@font-face{
	font-family: myFont1;
	src: url(font/ROBOTO.ttf);
}

.navigation-bar1{
	padding: 20px 5%;
	display: flex;
	justify-content: space-between;
	align-items: center;
	position: revert;
	z-index: 999;
	background-color: #dce947;
	margin-bottom: 10px;
}
.name h1{
	font-size: 40px;
	color: black;
	border-bottom: 5px solid red;
	font-family: myFont;
}
.logo i{
	font-size: 50px;

}
.menu li {
	list-style: none;
	display: inline-block;
}
.menu li a{
	display: block;
	color: black;
	font-size: 25px;
	margin-left: 20px;
}
.menu li a:hover{
	border-bottom: 4px solid #f63e4e;
}
.menu li a:active{
	transform: scale(0.90);	
}
.name h1{
	margin-left: 310px;
	font-size: 40px;
	color: black;
	border-bottom: 5px solid red;
	font-family: myFont;
}

.menu1 li {
	list-style: none;
	display: inline-block;
}
.menu1 li a{
	display: block;
	color: black;
	font-size: 25px;
	margin-left: 20px;
	text-decoration: none;
	font-family: myFont;
}
.menu1 li a:hover{
	border-bottom: 4px solid #f63e4e;
}
.menu1 li a:active{
	transform: scale(0.90);
}

.navigation-bar{
	padding: 20px 5%;
	display: flex;
	justify-content: space-between;
	align-items: center;
	position: revert;
	z-index: 999;
	background-color: #dce947;
}
.logo i{
	margin-left: 10px;
	font-size: 50px;

}
.menu button #btn1{
	list-style: none;
	display: inline-block;
}
.menu button #btn1{
	display: block;
	color: black;
	font-size: 25px;
	margin-left: 20px;
}
.menu button #btn1:hover{
	border-bottom: 4px solid #f63e4e;
}
.menu button #btn1:active{
	transform: scale(0.90);
}
.menu button{
	font-size: 25px;
	color: black;
	border: none;
	background: none;
}
.menu button:hover{
	border-bottom: 4px solid #f63e4e;
}
.menu button:active{
	transform: scale(0.90);
}


.container{
	width: 800px;
	height: 50px;
	display: flex;
	align-items: center;
	justify-content: center;
}

.searchbar{
	background: white;
	width: 800px;
	height: 50px;
	display: flex;
	border-radius: 20px;
}
.searchbar input{
	margin-left: 20px;
	flex: 1;
	border: none;
	outline: none;
}
.searchbar button{
	background: tomato;
	padding: 10px;
	border: none;
	outline: none;
	color: white;
	font-size: 20px;
	border-radius: 20px;

}
.searchbar button:active{
	transform: scale(0.90);
}
.searchbar button:hover{
	color: black;
}
.select{
	position: absolute;
	top: -150%;
	left: 50%;
	opacity: 0;
	transform: translate(-50%, -50%);
	width: 400px;
	padding: 20px 30px;
	background: whitesmoke;
	border-radius: 10px;
	font-family: myFont;
	transition: top 0ms ease-in-out 200ms,
				opacity 200ms ease-in-out 0ms,
				transform 200ms ease-in-out 0ms;
}

.select.active{
	top: 50%;
	opacity: 1;
	transform: translate(-50%, -50%);
	transition: top 0ms ease-in-out 0ms,
				opacity 200ms ease-in-out 0ms,
				transform 200ms ease-in-out 0ms;
}

.select .close-button{
	position: absolute;
	top: 10px;
	right: 10px;
	width: 15px;
	height: 15px;
	background: black;
	text-align: center;
	line-height: 20px;
	border-radius: 15px;
	cursor: pointer;
	color: white;
}

.select .close-button:hover{
	color: red;
}

.select .close-button:active{
	transform: scale(0.90);
}

.select .form0 .h2{
	text-align: center;
	color: black;
	margin-left: 10px 0px 20px;
	font-size: 25px;
}

.select .form0 .form-element{
	margin: 15px 0px;
}

.select .form0 .form-element button{
	padding-top: 5px;
	width: 100%;
	height: 40px;
	border: none;
	outline: none;
	font-size: 20px;
	background: black;
	color: white;
	border-radius: 20px;
	cursor: pointer;
	font-family: myFont;
}

.select .form0 .form-element button:hover{
	color: #dce947;
}

.select .form0 .form-element button:active{
	transform: scale(0.90);
}

.select .form0 .form-element a{
	text-decoration: none;
	display: block;
	text-align: center;
	font-size: 15px;
	color: #1a79ca;
}

.select .form0 .form-element a:active{
	transform: scale(0.90);
}

.popup-login{
	position: absolute;
	top: -150%;
	left: 50%;
	opacity: 0;
	transform: translate(-50%, -50%);
	width: 400px;
	padding: 20px 30px;
	background: whitesmoke;
	border-radius: 10px;
	font-family: myFont;
	transition: top 0ms ease-in-out 200ms,
				opacity 200ms ease-in-out 0ms,
				transform 200ms ease-in-out 0ms;
}

.popup-login.active0{
	top: 50%;
	opacity: 1;
	transform: translate(-50%, -50%);
	transition: top 0ms ease-in-out 0ms,
				opacity 200ms ease-in-out 0ms,
				transform 200ms ease-in-out 0ms;
}

.popup-login .close-button{
	position: absolute;
	top: 10px;
	right: 10px;
	width: 15px;
	height: 15px;
	background: black;
	text-align: center;
	line-height: 20px;
	border-radius: 15px;
	cursor: pointer;
	color: white;
}

.popup-login .close-button:hover{
	color: red;
}

.popup-login .close-button:active{
	transform: scale(0.90);
}

.popup-login .form1 .h2{
	text-align: center;
	color: black;
	margin-left: 10px 0px 20px;
	font-size: 25px;
}

.popup-login .form1 .form-element{
	margin: 15px 0px;
}

.popup-login .form1 .form-element input{
	padding-left: 10px;
	margin-top: 5px;
	display: block;
	width: 100%;
	height: 50px;
	outline: none;
	border: 1px solid #aaa;
	border-radius: 20px;
	font
}

.popup-login .form1 .form-element button{
	padding-top: 5px;
	width: 100%;
	height: 40px;
	border: none;
	outline: none;
	font-size: 20px;
	background: black;
	color: white;
	border-radius: 20px;
	cursor: pointer;
	font-family: myFont;
}

.popup-login .form1 .form-element button:hover{
	color: #dce947;
}

.popup-login .form1 .form-element button:active{
	transform: scale(0.90);
}

.popup-login .form1 .form-element a{
	text-decoration: none;
	display: block;
	text-align: center;
	font-size: 15px;
	color: #1a79ca;
}

.popup-login .form1 .form-element a:active{
	transform: scale(0.90);
}

.popup-signup{
	position: absolute;
	top: -150%;
	left: 50%;
	opacity: 0;
	transform: translate(-50%, -50%);
	width: 400px;
	padding: 20px 30px;
	background: whitesmoke;
	border-radius: 10px;
	font-family: myFont;
	transition: top 0ms ease-in-out 200ms,
				opacity 200ms ease-in-out 0ms,
				transform 200ms ease-in-out 0ms;
}

.popup-signup.active1{
	top: 50%;
	opacity: 1;
	transform: translate(-50%, -50%);
	transition: top 0ms ease-in-out 0ms,
				opacity 200ms ease-in-out 0ms,
				transform 200ms ease-in-out 0ms;
}

.popup-signup .close-button{
	position: absolute;
	top: 10px;
	right: 10px;
	width: 15px;
	height: 15px;
	background: black;
	text-align: center;
	line-height: 20px;
	border-radius: 15px;
	cursor: pointer;
	color: white;
}

.popup-signup .close-button:hover{
	color: red;
}

.popup-signup .close-button:active{
	transform: scale(0.90);
}

.popup-signup .form2 .h2{
	text-align: center;
	color: black;
	margin-left: 10px 0px 20px;
	font-size: 25px;
}

.popup-signup .form2 .form-element{
	margin: 15px 0px;
}

.popup-signup .form2 .form-element input[id="name"], [id="password"], [id="email"]{
	padding-left: 10px;
	margin-top: 5px;
	display: block;
	width: 100%;
	height: 50px;
	outline: none;
	border: 1px solid #aaa;
	border-radius: 20px;
	font
}
.popup-signup .form2 .form-element  input[id="check"]{
	margin-left: 50px;
	margin-top: 5px;
	display: block;
	width: 10%;
	height: 20px;
	outline: none;
	border: 1px solid #aaa;
	border-radius: 20px;
	font
}
.popup-signup .form2 .form-element a{
	position: absolute;
	margin-top: -18px;
	margin-left: 90px;


}
.popup-signup .form2 .form-element button{
	padding-top: 5px;
	width: 100%;
	height: 40px;
	border: none;
	outline: none;
	font-size: 20px;
	background: black;
	color: white;
	border-radius: 20px;
	cursor: pointer;
	font-family: myFont;
}

.popup-signup .form2 .form-element button:hover{
	color: #dce947;
}

.popup-signup .form2 .form-element button:active{
	transform: scale(0.90);
}

.popup-signup .form2 .form-element a{
	text-decoration: none;
	display: block;
	text-align: center;
	font-size: 15px;
	color: #1a79ca;
}

.popup-signup .form2 .form-element a:active{
	transform: scale(0.90);
}


.select-login{
	position: absolute;
	top: -150%;
	left: 50%;
	opacity: 0;
	transform: translate(-50%, -50%);
	width: 400px;
	padding: 20px 30px;
	background: whitesmoke;
	border-radius: 10px;
	font-family: myFont;
	transition: top 0ms ease-in-out 200ms,
				opacity 200ms ease-in-out 0ms,
				transform 200ms ease-in-out 0ms;
}

.select-login.active2{
	top: 50%;
	opacity: 1;
	transform: translate(-50%, -50%);
	transition: top 0ms ease-in-out 0ms,
				opacity 200ms ease-in-out 0ms,
				transform 200ms ease-in-out 0ms;
}

.select-login .close-button{
	position: absolute;
	top: 10px;
	right: 10px;
	width: 15px;
	height: 15px;
	background: black;
	text-align: center;
	line-height: 20px;
	border-radius: 15px;
	cursor: pointer;
	color: white;
}

.select-login .close-button:hover{
	color: red;
}

.select-login .close-button:active{
	transform: scale(0.90);
}

.select-login .form .h2{
	text-align: center;
	color: black;
	margin-left: 10px 0px 20px;
	font-size: 25px;
}

.select-login .form .form-element{
	margin: 15px 0px;
}

.select-login .form .form-element button{
	padding-top: 5px;
	width: 100%;
	height: 40px;
	border: none;
	outline: none;
	font-size: 20px;
	background: black;
	color: white;
	border-radius: 20px;
	cursor: pointer;
	font-family: myFont;
}

.select-login .form .form-element button:hover{
	color: #dce947;
}

.select-login .form .form-element button:active{
	transform: scale(0.90);
}

.select-login .form .form-element a{
	text-decoration: none;
	display: block;
	text-align: center;
	font-size: 15px;
	color: #1a79ca;
}

.select-login .form .form-element a:active{
	transform: scale(0.90);
}


.Rectangle{	
	padding: 20px 5%;
	display: block;
	text-align: center;
	align-items: center;
	position: revert;
	z-index: 999;
	background-color:#379237;
	margin-top: 10px;
}
.head h1{
	margin-top: 15px;
	display: block;
	font-family: myFont;
	font-size: 70px;
	color: white;
	text-align: center;
}
.Rectangle-1{
	left: 50%;
	top: 45%;
	background: #82CD47;
	justify-content: space-around;
	padding: 20px 5%;
	display: flex;
	text-align: center;
	align-items: center;
	position: revert;
	z-index: 999;
	margin-top: 10px;
	
}
.frt{
	padding-top: 10px;
	margin: 0;
	width: 195px;
	height: 195px;
	border-radius: 20px;
	border: none;
	color: white;
	font-family: myFont;
	font-size: 30px;
	background: url(images/fruits.jpg);
	background-size: cover;
	border: 5px solid black;
}
.frt:active{
	transform: scale(0.90);
	box-shadow: 5px 5px 10px black;
}
.frt:hover{
	color:yellow;
	border: 5px solid red;
}
.veg{
	padding-top: 10px;
	margin: 0;
	width: 195px;
	height: 195px;
	border-radius: 20px;
	border: none;
	color: white;
	font-family: myFont;
	font-size: 30px;
	background: url(images/veg.jpg);
	background-size: cover;
	border: 5px solid black;
}
.veg:active{
	transform: scale(0.90);
	box-shadow: 5px 5px 10px black;
}
.veg:hover{
	color:yellow;
	border: 5px solid red;
}
.sea{
	padding-top: 10px;
	margin: 0;
	width: 195px;
	height: 195px;
	border-radius: 20px;
	border: none;
	color: white;
	font-family: myFont;
	font-size: 30px;
	background: url(images/sea.jpg);
	background-size: cover;
	border: 5px solid black;
}
.sea:active{
	transform: scale(0.90);
	box-shadow: 5px 5px 10px black;
}
.sea:hover{
	color:yellow;
	border: 5px solid red;
}
.meat{
	padding-top: 10px;
	margin: 0;
	width: 195px;
	height: 195px;
	border-radius: 20px;
	border: none;
	color: white;
	font-family: myFont;
	font-size: 30px;
	background: url(images/meat.jpg);
	background-size: cover;
	border: 5px solid black;
	 
}
.meat:active{
	transform: scale(0.90);
	box-shadow: 5px 5px 10px black;
}
.meat:hover{
	color:yellow;
	border: 5px solid red;
}
.hrb{
	padding-top: 10px;
	margin: 0;
	width: 195px;
	height: 195px;
	border-radius: 20px;
	border: none;
	color: white;
	font-family: myFont;
	font-size: 30px;
	background: url(images/herb.jpg);
	background-size: cover;
	border: 5px solid black;
}
.hrb:active{
	transform: scale(0.90);
	box-shadow: 5px 5px 10px black;
}
.hrb:hover{
	color:yellow;
	border: 5px solid red;
}
.grcy{
	padding-top: 10px;
	margin: 0;
	width: 195px;
	height: 195px;
	border-radius: 20px;
	border: none;
	color: white;
	font-family: myFont;
	font-size: 30px;
	background: url(images/grocery.jpg);
	background-size: cover;
	border: 5px solid black;
}
.grcy:active{
	transform: scale(0.90);
	box-shadow: 5px 5px 10px black;
}
.grcy:hover{
	color:yellow;
	border: 5px solid red;
}
@media only screen and (max-width: 1100px){
	.frt{
		width: 80px;
		height: 80px;
		font-size: 8px;
		border:1px solid black;
	}
	.frt:hover{
	color:yellow;
	border: 1px solid red;
	}
	.veg{
		margin-left: 10px;
		width: 80px;
		height: 80px;
		font-size: 8px;
		border:1px solid black;
	}
	.veg:hover{
	color:yellow;
	border: 1px solid red;
	}
	.meat{
		margin-left: 10px;
		width: 80px;
		height: 80px;
		font-size: 8px;
		border:1px solid black;
	}
	.meat:hover{
	color:yellow;
	border: 1px solid red;
	}
	.sea{
		margin-left: 10px;
		width: 80px;
		height: 80px;
		font-size: 8px;
		border:1px solid black;
	}
	.sea:hover{
	color:yellow;
	border: 1px solid red;
	}
	.hrb{
		margin-left: 10px;
		width: 80px;
		height: 80px;
		font-size: 8px;
		border:1px solid black;
	}
	.hrb:hover{
	color:yellow;
	border: 1px solid red;
	}
	.grcy{
		margin-left: 10px;
		width: 80px;
		height: 80px;
		font-size: 8px;
		border:1px solid black;
	}
	.grcy:hover{
	color:yellow;
	border: 1px solid red;
	}

	.name h1{
		font-size: 11px;
		margin-top: 3px;
		margin-left: 0px;
		border-bottom: 1px solid red;

	}
	.logo i{
		font-size: 20px;
	}
	.container{
		width: 60%;
		height: 20px;
	}
	.menu1 li a{
		font-size: 11px;
		margin-left: 1px;

	}
	.menu1 li a:hover{
	border-bottom: 1px solid #f63e4e;
	}
	.Rectangle-1{
		height: 120px;
		width: 100%;

	}	
	.menu #btn1{
		font-size: 20px;
	}
	.menu #btn1:hover{
		border-bottom: 1px solid red;
	}
	.menu button{
		font-size: 15px;
	}
	.menu button:hover{
		border-bottom: 1px solid red;
	}
	.Rectangle{
		height: 5px;
		width: 100%;
	}
	.head h1{
		font-size: 30px;
		margin-top: -13px;
	}
	.menu li a{
		font-size: 15px;
		margin-left: 2px;
	}
	.menu li a:hover{
		border-bottom: 1px solid red;
	}
	.select{
		width:60%;
	}
	.popup-signup{
		width: 100%;
	}
	.popup-signup .form2 .form-element button{
		font-size: 15px;
	}
	.popup-signup .form2 .form-element a{
		font-size: 10px;
		margin-left: 30px;
		margin-top: -14px;
	}
	.popup-signup .form2 .form-element input[id="check"]{
		display: block;
		margin-left: 10px;
	}
	.popup-login{
		width: 100%;
	}
	.select-login{
		width: 60%;
	}
	.navigation-bar{
		height: 50px;
	}
	form{
		height: 30px;
	}
	.container i{
		display: block;
		font-size: 15px;
		margin-top: -2px;
	}
	.navigation-bar1{
		height: 60px;
	}
}


</style>
</head>
<body>
	<!-- navigation bar -->
<div>
<nav class="navigation-bar1">	
	<ul class="menu">
		<button id="login" ><i class="fa-solid fa-right-to-bracket"></i></button>
		<li><a href=""><i class="fa-solid fa-cart-shopping"></i></a></li>
	</ul>
	<div class="name"><h1>Barangay Baclaran Online Palengke</h1></div>	
	<ul class="menu1">
		<li><a href="">HOME</a></li>
		<li><a href="">CONTACT US</a></li>
		<li><a href="">ABOUT US</a></li>

	</ul>
</nav>
<!-- end navigation bar -->

<!-- navigation bar1 -->
<nav class="navigation-bar">

	<div class="logo"><i class="fa-sharp fa-solid fa-store"></i></div>

	<div class="container">
		<form class=searchbar>
			<input type="text" placeholder="SEARCH">
			<button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
		</form>
	</div>

	<ul class="menu">
		<button id="btn1"><i class="fa-solid fa-user"></i></button>
	</ul>
</nav>
<!-- end navigation bar1 -->

<!--  start content -->
<div class="Rectangle">
	<div class="head"><h1>SHOP BY CATEGORIES</h1></div>
</div>

<div class="Rectangle-1">
	<button class="frt">FRUITS</button>
	<button class="veg">VEGETABLES</button>
	<button class="sea">SEAFOOD</button>
	<button class="meat">MEAT</button>
	<button class="hrb">HERBS AND SPICES</button>
	<button class="grcy">GROCERY</button>
</div>

	<!--end content-->
<!--start select login -->

<div class="select-login">
	<div class="close-button">&times;</div>
	<div class="form">
	<div class="h2"><h1>SELECT LOGIN</h1></div>
	<div class="form-element">
		<button id="buyer1">BUYER</button>
	</div>
	<div class="form-element">
		<button id="vendor1">SELLER</button>
	</div>
</div>
</div>
<!--  end start select login -->

<!-- start select register -->
<div class="register">

<div class="select">
	<div class="close-button">&times;</div>
	<div class="form0">
	<div class="h2"><h1>CREATE ACCOUNT</h1></div>
	<div class="form-element">
		<button id="buyer">BUYER</button>
	</div>
	<div class="form-element">
		<button id="vendor">SELLER</button>
	</div>
</div>
<!--  end select register -->

<!-- start buyer -->
<div class="buyer-register">
<form class="popup-login" action="connect.php" method="post">

	<div class="close-button">&times;</div>

	<div class="form1" >

	<div class="h2" ><h1>BUYER</h1></div>
	<div class="form-element">
		<input type="text" id="name" placeholder="ENTER USERNAME" name="username">
	</div>
	<div class="form-element">
		<input type="email" id="email" placeholder="ENTER EMAIL" name="email">
	</div>

	<div class="form-element">
		<input type="password" id="password" placeholder="ENTER PASSWORD" name="password">
	</div>

	<div class="form-element">
		<button >REGISTER</button>
	</div>
</form>
</div>
<!--  end buyer -->

<!--  start seller -->
<div class="seller-register">
<div class="popup-signup">
	<div class="close-button">&times;</div>
	<div class="form2">
	<div class="h2" ><h1>SELLER</h1></div>
	<div class="form-element">
		<input type="text" id="name" placeholder="ENTER FULL NAME">
	</div>
	<div class="form-element">
		<input type="text" id="email" placeholder="ENTER EMAIL">
	</div>
	<div class="form-element">
		<input type="password" id="password" placeholder="ENTER PASSWORD">
	</div>
	<div class="form-element">
		<button>UPLOAD VALID ID</button>
	</div>
	<div class="form-element">
		<button>UPLOAD BRGY CLEARANCE</button>
	</div>
	<div class="form-element">
		<input type="checkbox" id="check">
		<a href="#">AGREE TO TERMS AND CONDITIONS</a>
	</div>
	<div class="form-element">
		<button>REGISTER</button>
	</div>
</div>
</div>


<!--  end seller -->





</div>

<!--javascript-->
<script>
	//signup//
	document.querySelector("#login").addEventListener("click",function(){
		document.querySelector(".select").classList.add("active");
		document.querySelector(".select-login").classList.remove("active2");
	});
	document.querySelector(".select .close-button").addEventListener("click",function(){
		document.querySelector(".select").classList.remove("active");
	});
	document.querySelector("#buyer").addEventListener("click",function(){
		document.querySelector(".popup-login").classList.add("active0");

	});
	document.querySelector(".popup-login .close-button").addEventListener("click",function(){
		document.querySelector(".popup-login").classList.remove("active0");
		
	});
	document.querySelector("#vendor").addEventListener("click",function(){
		document.querySelector(".popup-signup").classList.add("active1");
	});
	document.querySelector(".popup-signup .close-button").addEventListener("click",function(){
		document.querySelector(".popup-signup").classList.remove("active1");

	});

	//login//
	document.querySelector("#btn1").addEventListener("click",function(){
		document.querySelector(".select-login").classList.add("active2");
		document.querySelector(".select").classList.remove("active");
		document.querySelector(".popup-login").classList.remove("active0");
		document.querySelector(".popup-signup").classList.remove("active1");
	});
	document.querySelector(".select-login .close-button").addEventListener("click",function(){
		document.querySelector(".select-login").classList.remove("active2");
	});	

	
</script>
</body>
</html>