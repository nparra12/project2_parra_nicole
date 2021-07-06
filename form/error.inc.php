<style type="text/css">
** {
    margin: 0;
    padding: 0;
    border: 0;
    font-family: 'Montserrat', sans-serif;
    box-sizing: border-box;
}

body{
    background-color: #FFFFF8;
}

.contact-container{
    margin-bottom: 50px;
    padding: 50px;
}

nav ul li{
    display: inline;
}

li a:hover {
    color: #76afb4;
}
}

header nav a {
    color: gray;
    text-decoration: none;
    font-size: 18px;
    font-weight: bold;
    margin: 0 20px;
}

.contact-form{
    background: FFFFF8;
    padding: 20px;
    max-width: 500px;
    border-radius: 4px;
    color: white;
    font-family: sans-serif;
    margin: 20px auto;
    text-align: center;
}

footer{
    width: 100%;
    text-align: center;
    background-color: #AE5F41;
    padding: 10px;
    
}

.footer p{
    display: block;
}

.socialmedia{
    display: block;
    padding: 5px;
}

</style>

<header>
    <nav>
        <ul>
            <li><a href="#home"
              ><img class="logo" src="images/logo.png" alt="logo" title="logo"
            />Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#shop">Shop</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>   
    </nav>    
</header>

<div class="container">
    <h1>Sorry, something went wrong with your submission.</h1>
    <p>Please try again.</p>
</div>




<div class="container">
<h1>Missing fields</h1>
<p>Sorry, you have not completed all of the required fields.</p>
<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>


<footer>
      <div class="socialmedia">
        <a href="https://facebook.com/" target="_blank"
          ><img src="images/facebook.png" alt="facebook" title="facebook"
        /></a>
        <a href="https://twitter.com/" target="_blank"
          ><img src="images/twitter.png" alt="twitter" title="twitter"
        /></a>
        <a href="https://instagram.com/" target="_blank"
          ><img src="images/instagram.png" alt="facebook" title="facebook"
        /></a>
      </div>

      <p>2020 Luna Coffee Co. All Rights Reserved.</p>
</footer>