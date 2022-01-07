
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/layout.css">
 <style type="text/css">
		body{
    background: url('../images/logo_background/body-bg.gif');
    font-size:12px;
    line-height:1.3;
    font-family:Arial, Helvetica, Sans-Serif;
    color:#ccc;
    width:1000px;
    margin:0 auto;
}
.header {
    padding: 1em 0;
	border-top: 3px solid #FF8D1B;
}
.logo{
	float:left;
}
.logo a{
	display:block;
	text-decoration:none;
}
.logo a h1{
	font-size: 2.8em;
    color: white;
    text-transform: uppercase;
    padding-right: 1.67em;
    font-weight: 900;
	padding-bottom: .3em;
}
.logo a h1 span{
	color: #FF8D1B;
    font-size: 16px;
    display: block;
    font-weight: bolder;
    letter-spacing: 5px;
    text-align: right;
    line-height: 0;
}
#navbar{
    position: relative;
    width: 650px;
    margin: 0 auto;
    margin-top: 50px;
    padding: 10px;
    float: left;
}
#navigation{
    margin: 0 auto;
    position: relative;
    float: left;
    border-left: 1px solid #FF8D1B;
    border-right: 1px solid #FF8D1B;
}
ul#navigation li{
    display: inline;
    font-size: 12px;
    font-weight: bolder;
    margin: 0;
    padding:0;
    float: left;
    position:relative;
    border-top: 1px solid #FF8D1B;
    border-bottom: 1px solid #FF8D1B;
}
ul#navigation li a{
    padding: 10px 25px;
    color: #FF8D1B;
    text-decoration: none;
    display: inline-block;
    border-right: 1px solid #FF8D1B;
    border-left: 1px solid #FF8D1B;
    border-top: 1px solid #FF8D1B;
}
ul#navigation li a:hover{
    background: grey;
    color: white;
}
ul#navigation li:hover> a{
    background: grey;
}
ul#navigation li:hover>ul{
    visibility: visible;
    opacity: 1;
}
ul#navigation ul{
    list-style: none;
    margin: 0;
    padding: 0;
    visibility: hidden;
    opacity: 0;
    position: absolute;
    z-index:999999;
    width: 180px;
    background: #FF8D1B;
    box-shadow: 1px 1px 3px grey;
}
ul#navigation ul{
    top:43px;
    left: 1px;
}
ul#navigation ul li{
    clear: both;
    width: 100%;
    border:0 none;
    border-bottom: 1px solid blue;
}
ul#navigation ul li a{
    background: none;
    padding: 7px 15px;
    color: white;
    text-shadow: 1px 1px 0px black;
    text-decoration: none;
    display: inline-block;
    border:0 none;
    float: left;
    clear: both;
    width: 150px;
}
.login{
    position: relative;
    display: inline-block;
}
.logindrp{
    background-color: #FF8D1B;
    padding: 16px;
    color: white;
    font-size: 16px;
    border:none;
    cursor: pointer;
}
.user-admin{
    display: none;
    position: absolute;
    padding: 5px 10px;
    z-index: 1;
}
.user-admin a{
    color: orange;
    padding: 5px 10px;
    text-decoration: none;
    display: block;
}
.login:hover .user-admin{
    display: block;
}

#search {
    width:400px;
    height: 50px;
    margin-bottom:50px;
    margin:0 0 0 auto;
    margin-right: auto;
    margin-left: auto;
    margin-top: .5em;
}
#search label {
    float:left;
    display:inline;
    font-size:14px;
    font-weight:bold;
    color:#fff;
    line-height:24px;
    padding-right:1px;
}
#search .search-field {
    width:150px;
    border:1px solid #413e3e;
    background:white;
    color:#787878;
    padding:1px 0px;
}
#search .search-button {
    font-size:14px;
    font-weight:bold;
    border:0;
    background:none;
    color:#fff;
    cursor:pointer;
}
/* end header styling ------*/

	</style>
</head>
<body>
<div class="header">
	<div class="container">
		<div class="logo"><img src="images/logo_background/1.jpg">
			<a href="index.html"><h1>Filamu<span>254</span></h1></a>
		</div>
	</div>
    <div id="search">
                 <form action="#" method="get" accept-charset="utf-8">
                    <input type="text" name="search field" value="" id="search-field" class="blink search-field" placeholder="search..."  />
                    <button type="submit" name="submit">Go</button>
                 </form>
    </div>
</div>
		<nav id="navbar">
			<ul id="navigation">
				<li><a href="index.php">Home</a></li>
				<li><a href="movie.php">Movies & Series</a>
					<ul>
						<li><a href="movie.php">Action</a></li>
						<li><a href="movie.php">Adventure</a></li>
						<li><a href="movie.php">Crime</a></li>
						<li><a href="movie.php">Horror</a></li>
						<li><a href="movie.php">Sci-Fi</a></li>
						<li><a href="movie.php">Romance</a></li>
					</ul>
				</li>
				<li><a href="tv.php">Tv Shows</a>
					<ul>
						<li><a href="tv.php">Animation</a></li>
						<li><a href="tv.php">Comedy</a></li>
						<li><a href="tv.php">Drama</a></li>
						<li><a href="tv.php">Documentary</a></li>
						<li><a href="tv.php">Music</a></li>
						<li><a href="tv.php">Sports</a></li>
					</ul>
				</li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.html">Contacts</a></li>
			</ul>
		</nav>
            <div class="login">
                <button class="logindrp">Users</button>
                <div class="user-admin">
                    <a href="choir_signup.php">Sign Up</a>
                    <a href="adm_login.php">Admin Login</a>
                    <a href="userlogin.php">Login</a>
                </div>
            </div>
	<!-- begin main container -->
	<div id="main">