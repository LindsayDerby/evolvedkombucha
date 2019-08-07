<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
  font-family: 'Barlow Condensed', sans-serif;
}

.container {
  max-width: 100%;
  background-color: #f7f7f7;
  padding: 40px;

}

body {
  background-color: #f7f7f7;
}

main {
  padding-top: 102px;
  background-color: #f7f7f7;
  padding-bottom: 40px;
}


h1 {
  font-family: 'Barlow Condensed', sans-serif;
  color: black;
  font-size: 30px;
  margin-bottom: 15px;
}


p {
  font-family: 'Lato', sans-serif;
  color: black;
  font-size: 14px;
  line-height: 20px;
  margin-bottom: 20px;
}

ul {
  font-family: 'Lato', sans-serif;
  color: black;
  font-size: 14px;
  line-height: 20px;
  margin-bottom: 27px;
  margin-left: 16px;
}


/*===================
*
* Footer
*
=====================*/


footer {
 position: absolute;
 bottom: 0;
 width: 100%;
 height: 30px;
 background-color: #000;
 color: white;
 padding: 20px;
 display: inline-block;
 left: 0;
}

#footer-text {
  color: white;
  text-align: left;
}

.footer-text, .footer-icons {
	width: 40%;
	display: inline-block;
}

.footer-icons {
float: right;
	text-align: right;
	margin-right: 60px;
}

.footer-icons img:hover {
	opacity: .5;
}


/*===================
*
* Header
*
=====================*/

header {
  background: #F7F7F7;
  padding: 20px 0px;
  position: fixed;
  width: 100%;
  margin-right: 50px;
  margin-bottom: 50px;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center top;
  background-size: auto;
	z-index: 9999;
}

.button {
  font-family: 'Barlow Condensed', sans-serif;
  color: white;
  background-color: black;
  font-size: 18px;
  border-radius: 2px;
  width: 130px;
  text-align: center;
  border: none;
  text-decoration: none;
  padding: 8px 15px;
}

.button:hover {
  font-family: 'Barlow Condensed', sans-serif;
  color: black;
  background-color: #b5dcd9;
  font-size: 18px;
  border-radius: 2px;
  width: 130px;
  text-align: center;
  border: none;
  text-decoration: none;
  padding: 8px 15px;
}

.logo {
  float: left;
  width: 200px;
  display: inline;
  padding-left: 30px;
}


nav {
    float: right;
    padding-right: 30px;
}

nav ul li {
  display: inline;
}

nav a {
  text-decoration: none;
  color: black;
  font-family: 'Barlow Condensed', sans-serif;
  text-transform: uppercase;
  padding: 0px 20px;
}

nav a:active {
  text-decoration: none;
  color: black;
  padding: 0px 20px;
  font-family: 'Barlow Condensed', sans-serif;
  text-transform: uppercase;
  font-weight: 900;
}

nav a:hover {
  text-decoration: none;
  background-color: #b5dcd9;
  padding: 10px 20px;
  border-radius: 2px;
  color: black;
  font-family: 'Barlow Condensed', sans-serif;
  text-transform: uppercase;
}



</style>


    <header>
      <a href="index.html"><img src="images/logo-horizontal.png" class="logo" alt="Evolved Kombucha Logo" title="logo"/></a>
        <nav>
          <ul class="top-menu">
            <li><a href="/">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="products">Products</a></li>
            <li><a href="contact">Contact</a></li>
          </ul>
        </nav>
    </header>

    <main>

<div class="container">
	<h1>WE NEED A LITTLE MORE INFORMATION...</h1>
<p>The following required fields were left blank. Please go back and complete them.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><a href="http://evolvedkombucha.com/contact" onClick="history.go(-1)" class="button">Back to form</a></p>
</div>

</main>

    <footer>
    <div id="footer">
      	<div class="footer-text">
		<p id="footer-text">Evolved Kombucha</p>
		</div>

		<div class="footer-icons">
		<a href="#"><img src="images/facebook.png"  alt="Facebook" style="height: 15px; padding-left: 10px;"></a>
		<a href="#"><img src="images/instagram.png"  alt="Instagram" style="height: 13px;  padding-left: 10px;"></a>
		<a href="#"><img src="images/youtube.png"  alt ="Youtube" style="height: 13px;  padding-left: 10px;"></a>
        <a href="contact.html"><img src="images/email.png" alt="Email" style="height: 12px;  padding-left: 10px;"></a>
		</div>

    </div>
    </footer>
