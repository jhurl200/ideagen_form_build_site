<?php

session_start()
?>
<html>
  <title>Starter</title>
  <head>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
  </head>
<body>
  <h1>Lets get started</h1>
  <style>
    #draggable { width: 200px; height: 40px; padding: 0.5em; background-color:lightgrey ; }
  </style>
  <script>
    $(function() {
      $( "#draggable" ).draggable();
    });
  </script>
  <div id="draggable"></div>
  <div id="draggable"></div>
</body>
</html>
