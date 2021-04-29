<!DOCTYPE html>
<html>
<head>
	<title>site</title>
	<!-- <link rel="stylesheet" href="type2.css"> -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&display=swap" rel="stylesheet">
	<!--<script type="text/javascript" src="anime.js"></script>-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@700&family=Quicksand:wght@700&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style type="text/css">
		body{
	margin: 0 auto;
}
#main_header{
	
	background-color: white;
	
}
.nav{

	position: fixed;
	width: 100%;
	height: 137px;
	z-index: 2000;
	top: 0;
}
.header{
	background-color: white;
	/* width: 100%; */
	float: left;
	padding: 10px 0px 0px 20px;
	max-height: 50px;
	z-index: -1;
	/*background-color: rgb(255, 255, 0);*/

}


.clubs{
	margin-right: 0;
	/* width: 100%; */
	padding: 15px 50px 0px 20px;
	display: flex;
	justify-content: space-between;
	background-color: white;
}
.clubs p{
	 font-family: 'Quicksand', sans-serif;
	color: #999999;
}
.clubs img{
	
	transition: transform .2s;
	margin: 0 auto;

}
 .clubs img:hover{
 	transform: scale(1.25);
	
}
.header2{
	
	/* width: 100%; */
	padding: 0px 40px 0px 125px;
	background-color: #102c68;


	
}
.header2 .main div{
	padding: 20px 10px;
	height: 30px;
}
.header2 .main div a{

	color: white;
	text-decoration-line: none;
	 font-family: 'Quicksand', sans-serif;
	font-size: 20px;

}
.header2 .main{
	justify-content: space-around;
	display: flex;
}
.header2 .main .searchbox{
	width: 180px;
	display: flex;
	margin-left: 90px;
	
}
.header2 .main .searchbox .sbox{
	display: flex;
	padding: 0 0;
	background-color: white;
	border-radius: 5px;
}
.header2 .main .searchbox .sbox input{
	height: 22px;
	width: 144px;
	margin-left: 12px;
	border: none;
	outline: none;
	padding: 3px 0px;
}
.header2 .main .searchbox .sbox .searchicon{
	margin-left: 4px;
	cursor: pointer;
	padding: 6px 4px 0 0;

}
.header2 .main .stick{
	padding:0 0;
	border-left: 1px solid #8b9dc3;
	height: 37px;
	margin-top: 15px;
	margin-left:-50px;
	margin-right:-55px;
}
.header2 .main #login button{
	background-color: transparent;
	outline: none;
	border:none;
	cursor: pointer;
}
.header2 .main #login img{
	width: 40px;
	height: 40px;
	margin-top: -5px;
	margin-left: 5px;	
	cursor: pointer;
}
#avatar{
	width: 2.5%;
	display: none;
	cursor: pointer;

}
#logout{
	display: none;
	position: fixed;
	top: 20%;
	right: 1%;
	z-index: 3;
	height: 300px;
}
#logout .profile{
	position:fixed;
	height: 300px;
	width: 300px;
	top: 21%;
	right:1%;
	z-index: 2;
	background-color: white;
	border-radius: 5px;
	box-shadow: 0 1px 4px 0 rgba(0,0,0,.20);
}
#triangle{
	position:fixed;
	top: 18.6%;
	right: 5.8%;


}
#logout .profile img{
	margin-top: 5%;
	margin-left: 40%;
	
}
#logout .profile p{
	 font-family: 'Quicksand', sans-serif;
	text-align: center;
	margin: 0;
	padding-bottom: 15px;
	padding-top: 15px;
}
#logout .profile div a{
	text-decoration: none;
	color: black;
	 font-family: 'Quicksand', sans-serif;
}
#logout .profile div div{
	padding-left: 30px;
	margin-bottom: 15px;
}
#logout .profile div .log1{
	padding-top: 15px;
	border-top: solid #ADCBE1;
	border-width: 1px;
}
#logout .profile div .log2{
	border-top: solid #ADCBE1;
	padding-top: 15px;
	border-width: 1px;
}
/* Page2 */

#loginbox{
	display: none;
	background-color: rgba(0,0,0,0.4);
	position: absolute;
	z-index: 3000;
	top: 0%;
	width: 100%;
	height: 100%;
	border-style:none;
}
#loginbox .hide{
	
	float: left;
	height: 690px;
	width:540px;
}
#loginbox .hide2{

	float: right;
	height: 690px;
	width:540px;
}
#loginbox .account{
	background-color: white;
	height: 400px;
	width: 470px;
	border-radius: 10px;
	margin-left: 35%;
	margin-top: 10%;
	margin-right: 0;

}
#loginbox .account p{

	font-size: 30px;
	text-align: center;
	padding-top: 15px;
	margin-bottom: 20px;

	 font-family: 'Quicksand', sans-serif;
}
#loginbox .account .socsites{
	width: 358px;
	margin-left: 55px;
	
}
#loginbox .account .socsites button{
	border:none;
	width: 100px;
	height: 40px;
	border-radius: 3px;
	outline: none;
	cursor: pointer;
}
#google{
	background-color: #dd4b39;
	margin-right: 24.5px;

}
#google:hover{
	background-color: #d73925;
	
}
#facebook{
	background-color: #3b5998;
	margin-right: 24.5px;
}
#facebook:hover{
	background-color: #344e86;
}
#twitter{
	background-color: #55acee;
}
#twitter:hover{
	background-color: #3ea1ec;
	
}
#loginbox .account .socsites button img{
		margin-bottom: -2px;
}
#loginbox .account .socsites button span{
		color: white;
		font-size: 15px;
}
#loginbox .account form .typelog{
	width: 350px;
	display: flex;
	box-shadow: inset 0 0 0 1px #bac8d3;
	margin-top: 20px;
	margin-bottom: 20px;
	padding: 8px 5px 8px 3px; 
	border-radius: 3px;
	margin-left: 55px;
}
#loginbox .account form .typelog div input{
	width: 300px;
	padding: 3px 0 3px 3px;
	border: none;
	outline: none;



}
#loginbox .account form .typelog .user{
	padding-left: 7px;	 
	padding-right: 3px;
}
#loginbox .account form .typeparol{
	width: 350px;
	display: flex;
	box-shadow: inset 0 0 0 1px #bac8d3;
	padding: 8px 5px 8px 3px;
	border-radius: 3px;
	margin-left: 55px;
	margin-bottom: 10px;
}
#loginbox .account form .typeparol div input{
	width: 300px;
	padding: 3px 0 3px 3px;
	border: none;
	outline: none;
}
#loginbox .account form .typeparol .lock{
		padding-left: 7px;	 
		padding-right: 3px;
}
#loginbox .account form a{
	text-decoration: none;
	margin:0 0 0 265px;
	color: #1273eb;
}
#sign {
	height: 39px;
	width: 357px;
	margin-left: 55px;
	margin-top: 12px;
	border-radius: 4px;
	border: none;
	outline: none;
	cursor: pointer;
	font-size: 20px;
	background-color: #1273eb;
	color: white;
}
#sign:hover {
	background-color: #1067d3;
}
.news{
	background-image: url(wall1.jpg);
	background-size: cover;
	height: 650px;
	padding-right:70px; 
	padding-left:70px;
	padding-top: 40px;
	display: flex;
	margin-top: 130px;


}
.news .news1{
	color:white;
	font-size: 20px;
	border-top-right-radius:5px;
	border-top-left-radius: 5px;
	
	padding-top: 5px;

}
.news .news1 .prem{
	border-top-right-radius:5px; 
	border-top-left-radius:5px;
	background-color: darkturquoise;
	display: flex;
	justify-content: space-between;
	padding-top: 5px;
	padding-right: 21px;
	padding-left: 21px;
	 font-family: 'Quicksand', sans-serif;

}
.news .news1 .prem .prem1{
	margin-top:10px;

}
.news .news1 .prem .prem3{
	margin-top:10px;
}
.news .news1 .table1 {
	box-sizing: border-box;
	color:black;
	background-color: white;
	border-bottom-right-radius: 5px;
	border-bottom-left-radius: 5px;
	
}
.news .news1 .table1 table{
	width: 100%;
    text-align: center;
    font-family: 'Quicksand', sans-serif;
    border-spacing: 0;
   


    
}
.news .news1 .table1 table thead{
	color: gray;
	font-size: 13px;
	

}
.news .news1 .table1 table thead tr th{
	padding-top: 15px;
	padding-bottom: 15px;
	
}
.news .news1 .table1 table tbody tr td{

	padding-top: 7px;
	padding-bottom: 7px;
	font-size: 13px;
	border-bottom: 1px solid #ebebeb;
}
.news .news1 .table1 table tbody tr:hover{
	background-color: 	#e1e0e0;
}
.news .news1 .table1 table tbody tr td a{
	text-decoration: none;
	color:black;
	display: flex;
	
}
.news .news1 .table1 table tbody tr td a span{
	margin-right: 5px;
}
#tdsize{
	width: 100px;
}
.news .news1 .summary{
	padding-right: 30px;
	padding-left: 30px;
}
.news .news1 .summary .sub_summary{
	margin-top: 20px;
	height: 5px;
	background-image: linear-gradient(to right , #247ba0,  #6fffe9);

}
.news .news1 .table2 table{
	width: 100%;
    font-family: 'Quicksand', sans-serif;
    border-spacing: 0;
   


    
}
.news .news1 .table2{
	box-sizing: border-box;
	color:black;
	background-color: white;
	box-shadow: 0 1px 4px 0 rgba(0,0,0,.15);

}

.news .news1 .table2 table tr td{
	/*box-shadow: 0 1px 4px 0 rgba(0,0,0,.15);*/
	padding-left: 10px;
	padding-top: 7px;
	padding-bottom: 7px;
	font-size: 13px;
	border-bottom: 1px solid #ebebeb;
	 
}
.news .news1 .table2 table tr th{
	text-align: initial; 
	padding-left: 10px;
	border-bottom: 1px solid #ebebeb;
	font-size: 16px;


}
.news .news1 .table2 .tourment{
	font-family: 'Dosis', sans-serif;
	border-top-right-radius: 5px;
	border-top-left-radius: 5px;
	text-align: center;

}
.news .syzyk{
	

	width: 4px;
	height: 2153px;
	background-color: #ececec;
	margin-top: 650px;
	margin-left: 25px;
	margin-right: 25px;
	
	
}
.nav2{
	margin-top: 6px;
	
}
.nav2 .news2 .zain img{
  	transition: all 2s ease;
  	display: block;
  	height: 455px;
  	z-index: 1;


}
.nav2 .news2 .zain{
	overflow: hidden;
	display: inline-block;
	width: 541px;

}
.nav2 .news2 .zain:hover img{
	z-index: 2;
  	transform: scale(1.1);
}
.nav2 .news2 .zain{
	overflow: hidden;

}
.nav2 .news2{
	display: flex;
	height: 455px;
}
.nav2 .news2 .cap{
	color: white;
	background-color: rgba(0,55,93,0.8);
	
	 font-family: 'Quicksand', sans-serif;
	padding: 30px 20px 0px 20px;
	width: 500px;
	
	
}
#gradient{
	width: 5px;
	background-image: linear-gradient(to bottom , #247ba0,  #6fffe9);
	height: 455px; 
}
.kazal{
	display: flex;
	margin-top: 20px;

}
.kazal a{
	text-decoration: none;
	color: white;
	font-family: 'Dosis', sans-serif;
	font-size: 20px;


}
.kazal a .amaz_goal{
	padding: 10px 149px 20px 20px;
	background-color:rgb(0,55,93) 

}
.kazal a .amaz_goal p{
	margin: 0;
}
.kazal a .amaz_goal i{
	font-size: 15px;
	margin: 0;
	color: cyan;
}

#space{
	margin-left: 5px;
}
.nav2 .news2 .cap h1{
	margin:0;
}
#feature{
	margin: 0;
	color: cyan;
}
.nav2 .news2 .cap p{
	color: #fff;
    opacity: .7;
    font-size: 1.3rem;
     font-family: 'Quicksand', sans-serif;
}
a .qfantasy{
	margin-top: 93px;
	background-image: url(qfantasy.jpg);
	height: 300px;
	background-size: contain;
	background-position: center;
	background-repeat: no-repeat;
	
}
#qfanta{
	text-decoration: none;
}

.nav2 .main_news{
	position: relative;
	
	margin-top: 3rem;
	padding-top: 3rem;
	margin-top: 90px;
	margin-bottom: 40px;
	padding: 0px;
}
.nav2 .main_news h2{
	font-family: 'Roboto', sans-serif;
	margin-bottom: 40px;
	 
	 font-size: 35px;
}
.main_news ul {
	display: flex;
	padding: 0;
	justify-content: space-between;
	font-family: 'Dosis', sans-serif;

}
.main_news ul li a figure{
	margin: 0;
}
.main_news ul li a{
	text-decoration: none;
	color:black;
}
.main_news ul li{
	list-style-type: none;
}
#news_color{
	color: darkturquoise;
}
#news_underline:hover{
	border-bottom: 2px solid black;
}
#line_horizontal{
	width: 1086px;
	height: 2px;
	background-color: gray;
	margin-top: 0px;
	
}
.nav2 .main_news2{
	position: relative;
	
	margin-top: 3rem;
	padding-top: 3rem;
	margin-top: 40px;
	margin-bottom: 50px;
	padding: 0px;
}
.nav2 .main_news2 h2{
	font-family: 'Roboto', sans-serif;
	margin-bottom: 40px;
	 
	 font-size: 35px;
}
.main_news2 ul {
	display: flex;
	padding: 0;
	justify-content: space-between;
	font-family: 'Dosis', sans-serif;

}
.main_news2 ul li a figure{
	margin: 0;
}
.main_news2 ul li a{
	text-decoration: none;
	color:black;
}
.main_news2 ul li{
	list-style-type: none;
}

.sonline{
	
	position: relative;
	left: 5%;
	width:90.5%;
	height: 5px;
	margin-top: 2200px;
	background-image: linear-gradient(to right , #247ba0,  #6fffe9);
}
.sondiv{
	display:flex;
	justify-content: space-between;
	margin-top: 30px;
	margin-bottom: 30px;
	margin-right: 55px;
	margin-left: 70px;
}
footer{
	padding-top: 30px;
	text-align: center;
	color: #8b9dc3;
	height:100px;
	width: 100%;
	background-color: #102c68;
	margin-top: 20px;
}
footer .cpr{
	margin-top: 15px;
}
footer .cpr p{
	margin: 0;
	font-family: 'JetBrains Mono', monospace;
}
#spa2{
	margin-left: 25px;
	margin-right: 20px;
}
#spa4{
	margin-left: 22px;
	margin-right: 25px;
}
#bi{
	padding-top: 25px;
}
#nike{
	margin-top: 15px;
}
/*futsal page'*/
.youth_table{
	font-family: Arial, Helvetica, sans-serif;
  	border-collapse: collapse;
    width: 80%;
}
.youth_table td, .youth_table th{
	border: 1px solid #ddd;
    padding: 8px;
}
#youth_footer{
	
	padding-top: 30px;
	text-align: center;
	color: #8b9dc3;
	height:100px;
	width: 100%;
	background-color: #102c68;
	

}
.youth_div{
	padding-left: 15%;
	margin-bottom: 70px;
}
#youth_p{
	margin-top: 160px;
	margin-bottom: 10px;
	font-size: 20px;
	font-family: Arial, Helvetica, sans-serif;
	text-align: center;
}
#youth_p1{
	margin-top: 0;
	font-size: 20px;
	font-family: Arial, Helvetica, sans-serif;
	text-align: center;

}



/*futsal page*/
.y_div{

}
#y_ul{
	padding-left: 0;
	list-style-type: none;
	display: flex;
	justify-content: space-around;

}
#y_ul2{
	padding-left: 0;
	list-style-type: none;
	display: flex;
	justify-content: space-between;
	margin-right: 300px;
	margin-left: 300px;


}

.y_tour{
	margin: 0 15px 30px 15px;
    overflow: hidden;
    position: relative;
    height: 230px;
    width: 350px;
    z-index: 11;
}
.y_tour .tour_img{
		
	background-color: #EEE;
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    display: block;
    height: 100%;
    z-index: 10;

}
.y_tour .img_title{
	position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 15px;
    background: rgba(0, 0, 0, 0.4);
    font-size: 13px;
    line-height: 1.5;
    color: #FFFFFF;
    font-family: 'Roboto', sans-serif;
    text-transform: uppercase;
    z-index: 1020;
}
/*history page*/
#h_p{
		font-family: 'Roboto', sans-serif;
		margin-right: 200px;
		margin-left: 200px;
		margin-bottom: 50px;
}
#his_p{
	margin-bottom: 10px;
	font-size: 20px;
	font-family: Arial, Helvetica, sans-serif;
	text-align: center;
}
/*projects page*/
.p_ul{
	margin-top: 200px;
	display: flex;
	justify-content: space-around;
	list-style-type: none;
}
.p_ul li{
	border-radius: 5px;
	padding-top: 50px;
	padding-bottom: 50px;
	padding-right: 10px;
	padding-left: 10px;
	width: 300px;
	background-color: #f2f2f2;
	text-align: center;
	font-size: 25px;
	font-family: 'Roboto', sans-serif;
	color: #102c68;

}
.p_ul li a{
	text-decoration: none;
	color: #102c68;
}
.p_ul1{
	margin-top:50px;
	margin-bottom: 50px;
	display: flex;
	justify-content: space-around;
	list-style-type: none;
}
.p_ul1 li{
	border-radius: 5px;
	padding-top: 50px;
	padding-bottom: 50px;
	padding-right: 10px;
	padding-left: 10px;
	width: 300px;
	background-color: #f2f2f2;
	text-align: center;
	font-size: 25px;
	font-family: 'Roboto', sans-serif;
	color: #102c68;

}
.p_ul1 li a{
	text-decoration: none;
	color: #102c68;
}



	.nav0{
	float:left;
	display:flex;
	z-index: 3000;
	}
label{
	font-size:25px;
	margin:8px 0 20px;
	display:none;
	z-index: 3000;
	}




@media screen and (max-width:900px) {
	body{
	overflow-x:hidden;

	}
	.nav0{
		display: inline;
	}




@media screen and (min-width:900px) {
	.nav0{
	display:none;
	}
	</style>

</head>
<body>
	
<!-- 	<div class="nava">
	<label id="label" for="toggle"> &#9776;</label>
	</div> -->
	<div class="nav">
		<div class="header">
			<a href="project.html"><img class="logo" src="https://upload.wikimedia.org/wikipedia/en/thumb/0/08/Kazakhstan_Football_Federation_logo.svg/1200px-Kazakhstan_Football_Federation_logo.svg.png" width="120px" height="120px" id=""></img></a>
		</div>
			<div class="clubs">
				
					<p>CLUBS</p>
					<img src="https://upload.wikimedia.org/wikipedia/en/thumb/0/0d/FC_Kairat_logo.svg/1200px-FC_Kairat_logo.svg.png" width="30px" height="45px">
					<img src="https://upload.wikimedia.org/wikipedia/ru/thumb/9/96/FC_Astana_Logo.svg/1200px-FC_Astana_Logo.svg.png" width="30px" height="45px">
					<img src="ordabasy.png" width="45px" height="45px" id="ord">
					<img src="https://upload.wikimedia.org/wikipedia/ru/thumb/8/82/FK_Shakhtyor_Karagandy.svg/1200px-FK_Shakhtyor_Karagandy.svg.png" width="35px" height="45px" id="sha">
					<img src="https://upload.wikimedia.org/wikipedia/lt/thumb/b/b4/FK_Taraz_logo_nuo_2012.png/150px-FK_Taraz_logo_nuo_2012.png" width="35" height="45" id="tar">
					<img src="https://seeklogo.com/images/F/fk-kyzylzhar-petropavlovsk-late-10-s-logo-549295DCDE-seeklogo.com.png" width="45px" height="45px" id="jar">
					<img src="https://seeklogo.com/images/F/fk-okzhetpes-kokshetau-logo-8575A4B6AF-seeklogo.com.png" width="45px" height="45px" id="ok">
					<img src="https://www.fckaysar.kz/uploads/posts/2020-11/1605961024_1602909072_kaysarlog.png" width="40px" height="45px" id="kai">
					<img src="https://upload.wikimedia.org/wikipedia/en/4/40/FC_Irtysh.png" width="45px" height="45px" id="ir">
					<img src="https://upload.wikimedia.org/wikipedia/en/8/86/FC_Zhetysu.png" width="35px" height="45px" id="zhts">
					<img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c4/FC_Aktobe_Logo.svg/1200px-FC_Aktobe_Logo.svg.png" width="35px" height="45px" id="akt">
					<img src="https://upload.wikimedia.org/wikipedia/en/3/3c/FC_Atyrau_Logo.png" width="32px" height="45px" id="aty">
					<img src="https://upload.wikimedia.org/wikipedia/ru/0/0e/140px-FC_Tobol.png" width="35px" height="45px" id="tob">
					<img src="https://upload.wikimedia.org/wikipedia/en/4/4c/Akzhayik.png" width="35px" height="45px" id="akzha">
				
			</div>
			<div class="header2">
				<div class="main">
					 <div><a href="project.html" style="color:#8b9dc3;">Home</a></div>
					<div><a href="history.html">History</a></div>
					<div><a href="youth.html">Youth Football</a></div>
					<div><a href="futsal.html">Futsal</a></div>
					<div><a href="projects.html">Projects</a></div>
					<div class="searchbox">
						<div class="sbox"><input type="text" name="search" placeholder="search...">
							 <div class="searchicon"><img src="loupe.svg" width="15px" height="15px"></div>
						</div>
					</div>
					<div class="stick"></div>
					<div id="login"><a href="#" id="returnlog" onclick="on()" >Log in</a></div>
					<img id="avatar" src="profile.svg" alt="" onclick="data()" >
	
				</div>
			</div>
	</div>
	
	
	

		<div id="logout">
				<img id="triangle" src="bleach.svg" height="20px" width="20px">
		    <div class="profile">
				
			<div>
				<img src="profile.svg" height="60px" width="60px">
				<p id="johnty">Johnti Aga</p>
				<div class="log1"><a href="#">My team</a></div>
				<div><a href="#">Following</a></div>
				<div><a href="#">Support</a></div>
				<div class="log2"><a href="#" onclick="logout()">Log out</a></div>
			</div>
		    </div> 
		</div>  
		<div id ="loginbox" >
			<div class="hide" onclick="off()"></div>
			<div class="hide2" onclick="off()"></div>
			<div class="account">
				<p>Login</p>
				<div class="socsites">
					<button id="google">
						<img src="google1.svg" width="15px" height="15px;">
						<span>Google</span>
					</button>
					<button id="facebook">
						<img src="face.svg" width="15px" height="15px;">
						<span>Facebook</span>
					</button>
					<button id="twitter">
						<img src="Twit.svg" width="15px" height="15px;">
						<span>Twitter</span>
					</button>
				</div>
				<form>
					<div class="typelog">
						<div class="user"><img src="user.svg" width="20px" height="20px"></div>
						<div><input class="typename" type="text" id="usename" placeholder="Type you username"></div>
					</div>
					<div class="typeparol">
						<div class="lock"><img src="padlock.svg" width="20px" height="20px"></div>
						<div><input class="typepass" type="password" id="passw" placeholder="Type your password" ></div>
					</div>
					<a href="#">Forgot your password?</a>
					<button id="sign" onclick="sign_in(usename.value,passw.value)"><span>Sign in</span></button>
				</form>
			</div>
		</div>


	<div class="news">
		<nav class="news1">
			<div class="prem">
				<div class="prem1">Premier</div> 
				<div class="prem2"><img src="https://upload.wikimedia.org/wikipedia/ru/thumb/d/df/Premjer-Liga_Kasachstan.svg/1200px-Premjer-Liga_Kasachstan.svg.png" height="50px" width="50px"></div> 
				<div class="prem3">League</div>
			</div>
			<div class="table1">
				<table>
					<thead>
						<tr>
						 	 <th>Pos</th>
						 	 <th>Clubs &nbsp &nbsp &nbsp &nbsp</th>
							 <th>Pl</th>
							 <th>GD</th>
							 <th>Pts</th>
					 	</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td id="tdsize"><a href="#"><span><img src="https://upload.wikimedia.org/wikipedia/en/thumb/0/0d/FC_Kairat_logo.svg/1200px-FC_Kairat_logo.svg.png" width="10px" height="15px"></span>Kairat</a></td>
							<td>20</td>
							<td>+29</td>
							<td>45</td>
						</tr>
						<tr>
							<td>2</td>
							<td id="tdsize"><a href="#"><span><img src="https://upload.wikimedia.org/wikipedia/ru/0/0e/140px-FC_Tobol.png" width="10px" height="15px"></span>Tobol</a></td>
							<td>20</td>
							<td>+10</td>
							<td>38</td>
						</tr>
						<tr>
							<td>3</td>
							<td id="tdsize"><a href="#"><span><img src="https://upload.wikimedia.org/wikipedia/ru/thumb/9/96/FC_Astana_Logo.svg/1200px-FC_Astana_Logo.svg.png" width="10px" height="15px"></span>Astana</a></td>
							<td>19</td>
							<td>+8</td>
							<td>33</td>
						</tr>
						<tr>
							<td>4</td>
							<td id="tdsize"><a href="#"><span><img src="https://upload.wikimedia.org/wikipedia/ru/thumb/8/82/FK_Shakhtyor_Karagandy.svg/1200px-FK_Shakhtyor_Karagandy.svg.png"  width="10px" height="15px"></span>Shakter</a></td>
							<td>20</td>
							<td>+7</td>
							<td>32</td>
						</tr>
						<tr>
							<td>5</td>
							<td id="tdsize"><a href="#"><span ><img src="ordabasy.png" width="15px" height="15px"></span>Ordabasy</a></td>
							<td>20</td>
							<td>+1</td>
							<td>31</td>
						</tr>
						<tr>
							<td>6</td>
							<td id="tdsize"><a href="#"><span><img src="https://upload.wikimedia.org/wikipedia/en/8/86/FC_Zhetysu.png" width="12px" height="15px"></span>Zhetisu</a></td>
							<td>19</td>
							<td>+2</td>
							<td>28</td>
						</tr>
						<tr>
							<td>7</td>
							<td id="tdsize"><a href="#"><span><img src="https://www.fckaysar.kz/uploads/posts/2020-11/1605961024_1602909072_kaysarlog.png" width="13px" height="15px"></span>Kaisar</a></td>
							<td>20</td>
							<td>+6</td>
							<td>24</td>
						</tr>
						<tr>
							<td>8</td>
							<td id="tdsize"><a href="#"><span><img src="https://upload.wikimedia.org/wikipedia/lt/thumb/b/b4/FK_Taraz_logo_nuo_2012.png/150px-FK_Taraz_logo_nuo_2012.png" width="10px" height="15px"></span>Taraz</a></td>
							<td>20</td>
							<td>-4</td>
							<td>23</td>
						</tr>
						<tr>
							<td>9</td>
							<td id="tdsize"><a href="#"><span ><img src="https://seeklogo.com/images/F/fk-kyzylzhar-petropavlovsk-late-10-s-logo-549295DCDE-seeklogo.com.png" width="15px" height="15px"></span>Kyzylzhar</a></td>
							<td>20</td>
							<td>-9</td>
							<td>23</td>
						</tr>
						<tr>
							<td>10</td>
							<td id="tdsize"><a href="#"><span><img src="https://upload.wikimedia.org/wikipedia/ru/e/e8/Kasp%C4%B1%C4%B1_FK.png" width="13px" height="15px"></span>Kaspi</a></td>
							<td>20</td>
							<td>-19</td>
							<td>17</td>
						</tr>
						<tr>
							<td>11</td>
							<td id="tdsize"><a href="#"><span><img src="https://seeklogo.com/images/F/fk-okzhetpes-kokshetau-logo-8575A4B6AF-seeklogo.com.png" width="15px" height="15px"></span>Okzhetpes</a></td>
							<td>20</td>
							<td>-22</td>
							<td>11</td>
						</tr>
						
						
					</tbody>
				</table>
			</div>
			<div class="summary">
				<div class="sub_summary"></div>
			</div>
			<div class="table2">
			<div class="tourment">Tournament summary</div>
				<table>
					
						<tr>
						 	 <th><b>All matches</b></th>
						 	 <td>110</td>
						 	 
					 	</tr>
					
					
						<tr>
							<td>Played games</td>
							<td >110</td>
							
						</tr>
						<tr>
							<td>Home wins</td>
							<td>48</td>
						</tr>
						<tr>
							<td>Draws</td>
							<td >22</td>
						</tr>
						<tr>
							<td>Guests wins</td>
							<td >40</td>
							
						</tr>
						<tr>
							<th>Scored goals</th>
							<td >274</td>
							
						</tr>
						<tr>
							<td>Goals scored by the hosts</td>
							<td >145</td>
							
						</tr>
						<tr>
							<td>Goals scored by guests</td>
							<td >102</td>
							
						</tr>
						<tr>
							<td>Goals per game</td>
							<td >2.49</td>
							
						</tr>
						<tr>
							<td>Goals per game (hosts)</td>
							<td >1.32</td>
							
						</tr>
						<tr>
							<td>Goals per game (guests)</td>
							<td >1.17</td>
							
						</tr>
						<tr>
							<th>Total viewers</th>
							<td >15500</td>
						</tr>
						<tr>
							<td>Average viewers per game</td>
							<td >2214.29</td>
						</tr>
						
						
					
				</table>
			</div>

			
		</nav>
		<div class="syzyk"></div>
		<nav class="nav2">
		<div class="news2">
			<div class="zain"><img src="bakh0.jpg" height="450px" width="550px;"></div>
			<div id="gradient"></div>
			<div class="cap">
				<i id="feature">Feature</i>
				<h1>New captain of Kazakhstan </h1>
				<h1> national team</h1>
				<p>In the national team of Kazakhstan on football will definitely be changes in the near future, not least because there will come a new head coach. Correspondent Vesti.kz is sure that in the next qualifying round in the team, the captain's armband should be entrusted to Bakhtiyar Zaynutdinov.</p>

			</div>	
		</div>
		<div class="kazal">
			<a href="https://www.youtube.com/watch?v=ptceLpUvMRc"><div><img src="kazal.jpg" width="120px" height="107px;"></div></a>
			<a href="https://www.youtube.com/watch?v=ptceLpUvMRc"><div class="grad"></div></a>
			<a href="https://www.youtube.com/watch?v=ptceLpUvMRc">
				<div class="amaz_goal">
					<i>Highlights</i>
					<p>Kazakhstan 1-3 Albany</p>
					<p>Amazing goal from the centre</p>
				</div>
			</a>


			<a href="https://vesti.kz/kazfutbol/polskiy-havbek-poproschalsya-s-kayratom-289141/" id="space"><div><img src="konrad1.jpg" width="115px" height="107px;"></div></a>
			
			<a href="https://vesti.kz/kazfutbol/polskiy-havbek-poproschalsya-s-kayratom-289141/">
				<div class="amaz_goal">
					<i>News</i>
					<p>Kairat loses player</p>
					<p>Vjesinski intends to leave the team</p>
				</div>
			</a>
		</div>
	
		<section class="main_news">
			<h2>Latest news</h2>
			<ul>
				<li>
					<a href="https://vesti.kz/national/kazahstan-otbore-chm-2022-popadet-gruppu-smerti-hudshie-289240/">
						<figure>
							<span><img src="nateam.jpg" width="310px" height="200px"></span>
						</figure>
						<figcaption>
							<span id="news_color">Vesti.kz</span><br>
							<span id="news_underline">Will Kazakhstan qualify for the 2022 world Cup in <br> the "group of death"?</span>
						</figcaption>
					</a>
				</li>
				<li>
					<a href="https://vesti.kz/kazfutbol/sportivnyiy-direktor-taraza-oshtrafovan-diskvalifitsirovan-289239/">
						<figure>
							<span><img src="taraz.png" width="310px" height="200px"></span>
						</figure>
						<figcaption>
							<span id="news_color">Vesti.kz</span><br>
							<span id="news_underline">Sports Director of "Taraz" is fined and  suspended <br> for seven matches</span>
						</figcaption>
					</a>
				</li>
				<li>
					<a href="https://vesti.kz/kazfutbol/neodnoznachnyiy-sostav-vozvraschenie-evrokubki-lider-osetii-289274/">
						<figure>
							<span><img src="shakhter.jpg" width="310px" height="200px"></span>
						</figure>
						<figcaption>
							<span id="news_color">Vesti.kz</span><br>
							<span id="news_underline">Mixed composition, the return to European <br>competition, the leader of South Ossetia. <br> Shakhtar - results of the KPL-2020 season</span>
						</figcaption>
					</a>
				</li>
			</ul>
		</section>


		<div id="line_horizontal"></div>



		<section class="main_news2">
			<h2>Fan clubs</h2>
			<ul>
				<li>
					<a href="https://fckairat.com/fans/fan-klub/">
						<figure>
							<span><img src="kaifan.jpg" width="310px" height="200px"></span>
						</figure>
						<figcaption>
							<span id="news_color">Kairat</span><br>
							<span id="news_underline">  Most solid fan club: "Kuw birlikte", "Bul kairat"</span>
						</figcaption>
					</a>
				</li>
				<li>
					<a href="http://www.fc-aktobe.kz/index.php/ru/">
						<figure>
							<span><img src="aktube.jpg" width="310px" height="200px"></span>
						</figure>
						<figcaption>
							<span id="news_color">13 sector</span><br>
							<span id="news_underline">Faithful fan club: "Till we live, Aktobe stay alive" </span>
						</figcaption>
					</a>
				</li>
				<li>
					<a href="https://fcastana.kz/">
						<figure>
							<span><img src="astana.jpg" width="310px" height="200px"></span>
						</figure>
						<figcaption>
							<span id="news_color">12th player</span><br>
							<span id="news_underline">Most victorious fans: "The impossible is possible"</span>
						</figcaption>
					</a>
				</li>
			</ul>
		</section>

		<div id="line_horizontal"></div>

		<section class="main_news2">
			<h2>Season coaches</h2>
			<ul>
				<li>
					<a href="https://www.transfermarkt.com/aleksey-shpilevski/profil/trainer/61441">
						<figure>
							<span><img src="aleks.jpg" width="310px" height="200px"></span>
						</figure>
						<figcaption>
							<span id="news_color">A.Shpilevski</span><br>
							<span id="news_underline">The youngest head coach ever in Kazakhstan <br> who won "Premier League"</span>
						</figcaption>
					</a>
				</li>
				<li>
					<a href="https://www.transfermarkt.com/grigori-babayan/profil/trainer/29920">
						<figure>
							<span><img src="babayan.jpg" width="310px" height="200px"></span>
						</figure>
						<figcaption>
							<span id="news_color">G.Babayan</span><br>
							<span id="news_underline">Manager who won ticket to the qualification <br> round of the European League in first year of <br> coaching in Tobol </span>
						</figcaption>
					</a>
				</li>
				<li>
					<a href="https://www.transfermarkt.com/konstantin-gorovenko/profil/trainer/79239">
						<figure>
							<span><img src="goro.jpg" width="310px" height="200px"></span>
						</figure>
						<figcaption>
							<span id="news_color">K.Gorovenko</span><br>
							<span id="news_underline">For the first time, Shakhter made his way to the <br> European Cup games under the leadership of <br> Konstantin  since 2012</span>
						</figcaption>
					</a>
				</li>
			</ul>
		</section>


		


		<div id="line_horizontal"></div>

		<section class="main_news2">
			<h2>Kazakh footballers abroad</h2>
			<ul>
				<li>
					<a href="https://www.sports.ru/tags/161016349/">
						<figure>
							<span><img src="voro.jpg" width="310px" height="200px"></span>
						</figure>
						<figcaption>
							<span id="news_color">Vorogovskiy</span><br>
							<span id="news_underline">Yan played 11 matches in 15 possible games during <br> this season</span>
						</figcaption>
					</a>
				</li>
				<li>
					<a href="https://www.sports.ru/tags/161016349/">
						<figure>
							<span><img src="merk.webp" width="310px" height="200px"></span>
						</figure>
						<figcaption>
							<span id="news_color">Merkel</span><br>
							<span id="news_underline">Alex took yellow card against "Al-'Ain" in last game</span>
						</figcaption>
					</a>
				</li>
				<li>
					<a href="https://www.sports.ru/baktiyar-zaynutdinov/">
						<figure>
							<span><img src="bokh.jpg" width="310px" height="200px"></span>
						</figure>
						<figcaption>
							<span id="news_color">Zainutdinov</span><br>
							<span id="news_underline">Bateka played a full match in the European <br> league  against "Wolfsburg" </span>
						</figcaption>
					</a>
				</li>
			</ul>
		</section>


		<div id="line_horizontal"></div>

		<section class="main_news2">
			<h2>World news</h2>
			<ul>
				<li>
					<a href="https://www.bbc.com/sport/football/55203905">
						<figure>
							<span><img src="arteta.jpg" width="310px" height="200px"></span>
						</figure>
						<figcaption>
							<span id="news_color">BBC sport</span><br>
							<span id="news_underline">Arteta vows to fight on depite Arsenal's worst <br>  start since 1981</span>
						</figcaption>
					</a>
				</li>
				<li>
					<a href="https://www.marca.com/en/football/real-madrid/2020/12/07/5fcdf80a46163f9f4a8b457c.html">
						<figure>
							<span><img src="ramoos.jpg" width="310px" height="200px"></span>
						</figure>
						<figcaption>
							<span id="news_color">Marca</span><br>
							<span id="news_underline">Ramos is ready for a battle </span>
						</figcaption>
					</a>
				</li>
				<li>
					<a href="https://www.skysports.com/football/news/11095/12153863/euro-round-up-ac-milan-restore-five-point-lead-at-top-of-serie-a">
						<figure>
							<span><img src="milan1.jpg" width="310px" height="200px"></span>
						</figure>
						<figcaption>
							<span id="news_color">Skysports</span><br>
							<span id="news_underline">Euro round-up: AC Milan restore five-point lead  <br> at top of Serie A</span>
						</figcaption>
					</a>
				</li>
			</ul>
		</section>
		
		
	</nav>
	
</div>
	<div class="sonline"></div>
	<div class="sondiv">
		<a href="#"><img src="fifa2.png" width="150px" height="150px" ></a>
		<a href="#"><img src="uefa.png" width="150px" height="150px" ></a>
		<a href="#" ><img src="samruk.png" width="290px" height="150px" ></a>
		<a href="#" id="bi"><img src="bi.png" width="180px" height="100px" ></a>
		<a href="#" id="nike"><img src="nike1.png" width="200px" height="125px" ></a>
	</div>
	<footer id="footer">
		

		<div>
				<a href="#"><span id="spa1"><img src="ins.svg" height="35px" width="35px"></span></a>
				<a href="#"><span id="spa2"><img src="faceboook.svg" height="35px" width="35px"></span></a>
				<a href="#"><span id="spa3"><img src="gogle.svg" height="35px" width="35px"></span></a>
				<a href="#"><span id="spa4"><img src="twitter.svg" height="35px" width="35px"></span></a>
				<a href="#"><span id="spa5"><img src="envelope.svg" height="35px" width="35px"></span></a>
			</div>

			<div class="cpr">

				<p>website crafted by sdudent <span id="copyright"><img src="copyright.svg" height="10px" width="10px"></span> 2020</p>	
			</div>
			
			
	</footer>
</body>
<script type="text/javascript">
	
function on() {
 	document.getElementById('loginbox').style.display="block";
 	$(".loginbox").animate({opacity:"1"}, "slow");
 	document.body.style.overflow = "hidden";
 	}
function off() {
 	document.getElementById('loginbox').style.display="none";
 	document.body.style.overflow = "scroll";
 	
 	}

function sign_in(usename,passw) 
	{
	document.getElementById('loginbox').style.display="none";	
	document.getElementById('login').style.display="none";
	document.body.style.overflow = "scroll";
	document.getElementById("johnty").innerHTML=usename;
	document.getElementById("avatar").style.display="block";
	document.getElementById("usename").value="";
	document.getElementById("passw").value="";
	
	}
 function data() {
	var b = document.getElementById('logout').style.display;
	 if(b == "none"){
		document.getElementById('logout').style.display="block";
	} else{
		document.getElementById('logout').style.display="none";
	}	
 }

function logout() {
	document.getElementById("login").style.display="block";
	document.getElementById("logout").style.display="none";
	document.getElementById("avatar").style.display="none";


}




     function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 14,
          center: {  lat: 43.235331249897044, lng:76.93835820052809},  
        });

  const marker1 = new google.maps.Marker({
  position: { lat: 43.23354179631279, lng: 76.9568517838564 },
          map:map,
 
    });
  const infowindow1 = new google.maps.InfoWindow({
   content:'<h2>Hey</h2>Premier League <h5><h5>Самал-2, 111, Алматы</h5> <h5>Открыто:  10:00–22:00</h5> <h5>+77272221387</h5>'
   });
   marker1.addListener('click', function(){
   infowindow1.open(map,marker1);
   map.setCenter(marker1.getPosition());
   });
  
  const marker2 = new google.maps.Marker({
   position:{lat:43.2205860997279,lng:76.92750662138727}, 
   map:map
   });
  const infowindow2 = new google.maps.InfoWindow({
   content:'<h2>Hey</h2>Football store <h5> <h5>проспект Aль-Фараби 77/8, Алматы 050040</h5> <h5>Открыто:  10:00–22:00</h5> <h5>+77272221387</h5>'
   });
   marker2.addListener('click', function(){
   infowindow2.open(map,marker2);
   map.setCenter(marker1.getPosition());
   });
  
  const marker3 = new google.maps.Marker({
  position:{lat:43.22794313577942,lng:76.95676442323372}, 
   map:map
   });
  const infowindow3 = new google.maps.InfoWindow({
   content:'<h2>Hey</h2>KFF<h5>уг. ул. Достык, проспект Aль-Фараби 1, Алматы</h5> <h5>Открыто:  09:00–23:00</h5> <h5>+77272221387</h5>'
   });
   marker3.addListener('click', function(){
   infowindow3.open(map,marker3);
   map.setCenter(marker1.getPosition());
  });
  
     const flightPlanCoordinates = [ 
   {lat: 43.23354179631279, lng: 76.9568517838564 },
   {lat:43.2205860997279,lng:76.92750662138727}, 
   {lat:43.22794313577942,lng:76.95676442323372}, 
  ];
  const flightPath = new google.maps.Polyline({
   path: flightPlanCoordinates,
   geodesic: true,
   strokeColor: "#FF0000",
   strokeOpacity: 1.0,
   strokeWeight: 2,
  });

   flightPath.setMap(map);
   
   const cityCircle = new google.maps.Circle({
   strokeColor: "#FF0000",
   strokeOpacity: 0.5,
   strokeWeight: 2,
   fillColor: "black",
   fillOpacity: 0.35,
   map,
   center: {  lat: 43.235331249897044, lng:76.93835820052809},  
   radius: 4000,
   });
  }
</script>
</html>