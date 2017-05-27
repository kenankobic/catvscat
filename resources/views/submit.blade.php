<!DOCTYPE html>
<html>

<head>
  <title>Cat vs Cat</title>
  <link rel="stylesheet" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

</head>
<body>

  <header>
    <nav>
      <h1>Cat vs Cat</h1>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/videos">Videos</a></li>
        <li><a class="is-active" href="/submit">Submit</a></li>
      </ul>
    </nav>
  </header>

<div class="submit-form">
	   <form action="/insert" method="post">
	
	  <input type="text" name="link" placeholder="Youtube Link"><br>

	  <input type="text" name="email" placeholder="Your Email (Optional)"><br>
Leave a comment (Optional):<br>
	   <textarea name="comment" rows="10" cols="30">
		</textarea>

	  <br><br>

	  <input type="submit" value="Submit">
	</form> 
</div>

<script type="text/javascript" src="js/index.js"></script>

</body>
</html>
