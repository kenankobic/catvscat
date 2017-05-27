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
        <li><a class="is-active" href="/">Home</a></li>
        <li><a href="/videos">Videos</a></li>
        <li><a href="/submit">Submit</a></li>
      </ul>
    </nav>
  </header>

  <div class="row">
    @foreach ($videos as $video)
    <div class="col">

        <iframe id="vid1" width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video->link ?>" frameborder="0" allowfullscreen></iframe>
        <p id="show-votes1" style="display: none;">Votes: {{$video->votes}}</p>
    

    </div>
    @endforeach
  </div>

    <div class="vote">
      <h2>Which cat did you like more?</h2>
      @foreach ($videos as $video)
      <a href='vote/{{ $video->id }}'><button id="cat1">Cat {{ $video-> id}}</button></a>
      @endforeach
    </div>

    <div class="footer">
      <a href='/'><button id="continue">Neither</button></a>
    </div>




<script type="text/javascript" src="js/index.js"></script>

</body>
</html>
