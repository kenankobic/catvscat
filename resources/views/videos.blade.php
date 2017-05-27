<!DOCTYPE html>
<html>

<head>
  <title>Cat vs Cat</title>
  <link rel="stylesheet" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

</head>
<body onload="videoGrid()">

  <header>
    <nav>
      <h1>Cat vs Cat</h1>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a class="is-active" href="/videos">Videos</a></li>
        <li><a href="/submit">Submit</a></li>
      </ul>
    </nav>
  </header>

  <a href="/byvotes"><button id="cat1">Sort By Votes</button></a>
  <a href="/videos"><button id="cat1">Sort By Date</button></a>
  <a href="/byrandom"><button id="cat1">Sort By Random</button></a>

  <div id="video-grid">
  	<ul class="video-list">
    @foreach ($videos as $video)

   <li class="vid-li">
    <div class="vid">
      <iframe src="https://www.youtube.com/embed/<?php echo $video->link ?>" frameborder="0" allowfullscreen></iframe>
      <div class="vid-name">Votes: {{ $video->votes }}</div>
    </div>
  </li>
    @endforeach
  	
  	</ul>
  </div>

<script type="text/javascript" src="js/index.js"></script>

</body>
</html>
