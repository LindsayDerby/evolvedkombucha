<style type="text/css">
* {
margin: 0;
padding: 0;
border: 0;
}

body {
  background-color: #f7f7f7;
}

.container {
  background-color: #F7F7F7;
  color: black;
  padding: 80px 30px 40px 30px;
  max-width: 500px;
  margin-left: 50px;
}

header {
  background: #F7F7F7;
  padding: 20px 0px;
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
  font-weight: bold;
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


h1 {
  font-family: 'Barlow Condensed', sans-serif;
  color: black;
  font-size: 30px;
  margin-bottom: 15px;
}

h1::before {
  content: url(http://evolvedkombucha.com/icon.png);
}

p{
  font-family: 'Lato', sans-serif;
  color: black;
  font-size: 14px;
  line-height: 20px;
  margin-bottom: 20px;
}

p::selection {
  background-color: #fbf4bd;
}
</style>

<header>
    <img src="images/logo.png" class="logo"/>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="products.html">Products</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
</header>

<div class="container">
	<h1>WE NEED A LITTLE MORE INFORMATION...</h1>
<p>Please go <a href="#" onClick="history.go(-1)">back</a> and complete all of the required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>
