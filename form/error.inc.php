<style type="text/css">
  * {
    margin: 0;
    padding: 0;
    border: 0;
    font-family: 'Lato', sans-serif;
    box-sizing: border-box;
  }

  body {
    background: white;
  }

  header {
    background: #a7869e;
    text-align: center;
    position: fixed;
    width: 100%;
    z-index: 99999;
  }

  header nav li {
    display: inline-block;
    max-width: 200px;
  }

  header nav a {
    text-decoration: none;
    color: white;
    margin: 0 20px;
    font-size: 20px;
    text-align: center;
  }

  footer {
    background: white;
    text-align: center;
    position: fixed;
    width: 100%;
    bottom: 0;
    padding: 15px;
    z-index: 99999;
  }

  footer nav li {
    display: inline-block;
    max-width: 200px;
  }

  footer nav a {
    text-decoration: none;
    color: #48546f;
    margin: 0 20px;
    font-size: 16px;
    text-align: center;
  }

  .container {
    max-width: 900px;
    margin: 50px auto 180px;
    text-align: left;
    position: relative;
    top: 200px;
  }

	h1,
	p {
	  color: #48546f;
	}

	h1::first-line {
	  text-decoration: underline;
	}

	p::first-line {
	  font-variant: small-caps;
	}

	p::selection {
	   background: #a7869e;
	}

</style>

<header>
  <nav>
    <ul>
      <li><img src="images/logo.png" width="150" alt="logo"></li>
      <li><a href="#home">Home</a></li>
      <li><a href="#experience">Experience</a></li>
      <li><a href="#portfolio">Design Portfolio</a></li>
      <li><a href="index.html">Contact Me</a></li>
    </ul>
  </nav>
</header>

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
  <nav>
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#experience">Experience</a></li>
      <li><a href="#portfolio">Design Portfolio</a></li>
      <li><a href="index.html">Contact Me</a></li>
    </ul>
  </nav>
</footer>
