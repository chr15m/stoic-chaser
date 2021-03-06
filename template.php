<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="yes" name="mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <title>Stoic Chaser</title>
    <link href="alegreya/stylesheet.css" rel="stylesheet" type="text/css">
    <!-- <link href="img/icon.png" rel="apple-touch-icon-precomposed" sizes="192x192">
    <link href="img/icon.png" rel="icon" type="image/png">
    <link href="manifest.json" rel="manifest">
    <link href="css/site.css" rel="stylesheet" type="text/css">-->
    <style>
      html, body {
        margin: 0px;
        padding: 0px;
        background-color: #333;
      }
      
      body {
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        max-width: 800px;
        text-align: justify;
        padding: 0.55em;
      }
      
      body * {
        color: #aeaea0;
        font-size: 1.5em;
      }
      
      * { box-sizing: border-box; }
      
      p {
        font-family: alegreyaregular;
      }
      
      h1, h2, h3 {
        font-family: alegreyabold;
        margin: 0px;
        padding: 0px;
      }
      
      #footer {
        text-align: center;
      }
      
      a {
        font-size: 0.75em;
      }
    </style>
  </head>
  <body>
    <h1>Stoic Chaser</h1>
<?php echo getenv("content");?>
    <p id="footer"> ~ <a href="https://github.com/chr15m/stoic-chaser/blob/master/README.md">About</a> ~ </p>
  </body>
</html>
