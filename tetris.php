<?php
include "header.php";
?>

    <meta charset="UTF-8">
    <title>Tetris AI</title>
    <style type="text/css">
        body
{
    background-color: #FCFCFC;
}

a:hover
{
    cursor: pointer
}

hr
{
    border: none;
    border-bottom: 1px solid #C8C8C8;
}

.container
{
    width:350px;
    margin: 0 auto;
}

.header
{
    text-align: center;
    font-family: Verdana;
    color:#0000FF;
}

.game-container
{
    height:400px;
    margin-top:10px;
}

.grid
{
    float:left;
    background-color: #FFFFFF;
    box-shadow: 0 0 10px 2px #EEEEEE;
    border:1px solid #CCCCCC;
}

.controls-container
{
    width:130px;
    float:right;
    height:100%;
}

.score-container
{
    background-color: #FFFFFF;
    box-shadow: 0 0 10px 2px #EEEEEE;
    text-align: center;
    color: #FF0000;
    font-size:25px;
    border:1px solid #CCCCCC;
    font-weight: bold;
    padding:5px;
}

.score-container::before
{
    content: "Score";
    width:100%;
    float:right;
    color: #BBBBBB;
    font-size:15px;
    font-weight: normal;
}

.next-container
{
    background-color: #FFFFFF;
    box-shadow: 0 0 10px 2px #EEEEEE;
    text-align: center;
    color: #FF0000;
    font-size:25px;
    border:1px solid #CCCCCC;
    font-weight: bold;
    padding:5px;
    margin-top: 10px;
}

.next-container::before
{
    content: "Next Piece";
    width:100%;
    float:right;
    color: #BBBBBB;
    font-size:15px;
    font-weight: normal;
}

.start-ai-button, .reset-button {
    -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
    -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
    box-shadow:inset 0px 1px 0px 0px #ffffff;
    background-color:#f9f9f9;
    -webkit-border-top-left-radius:3px;
    -moz-border-radius-topleft:3px;
    border-top-left-radius:3px;
    -webkit-border-top-right-radius:3px;
    -moz-border-radius-topright:3px;
    border-top-right-radius:3px;
    -webkit-border-bottom-right-radius:3px;
    -moz-border-radius-bottomright:3px;
    border-bottom-right-radius:3px;
    -webkit-border-bottom-left-radius:3px;
    -moz-border-radius-bottomleft:3px;
    border-bottom-left-radius:3px;
    text-indent:0;
    border:1px solid #dcdcdc;
    display:inline-block;
    color:#666666;
    font-family:Arial;
    font-size:15px;
    font-weight:bold;
    font-style:normal;
    height:40px;
    line-height:40px;
    width:100%;
    text-decoration:none;
    text-align:center;
    text-shadow:1px 1px 0px #ffffff;
}

.start-ai-button:hover, .reset-button:hover {
    background-color:#e9e9e9;
}

.start-ai-button:active, .reset-button:active {
     position:relative;
     top:1px;
 }

.start-ai-button{
    margin-top: 15px;
}

.reset-button{
    margin-top: 10px;
}

.footer
{
    font-family: Verdana;
    color:#000000;
    font-size: 12px;
}

.fb-like {
    vertical-align: top;
}
.fb_iframe_widget span {
    vertical-align: text-top !important;
}
    </style>
</head>
<body>
<div id="fb-root"></div>
<div class="container">
    <h1 class="header">Tetris</h1>

    <div class="game-container">
        <canvas width="200px" height="400px" id="grid-canvas" class="grid"></canvas>
        <div class="controls-container">
            <div id="score-container" class="score-container">0</div>
            <div id="next-container" class="next-container">
                <canvas id="next-canvas" class="next-canvas" width="80px" height="80px"></canvas>
            </div>
            <a id="ai-button" class="start-ai-button">Auto</a>
            <a id="reset-button" class="reset-button">Reset</a>
        </div>
    </div>
    <hr>
    <div class="footer">
        <p> </p>
    </div>
</div>

<script src="script/polyfill.js"></script>
<script src="script/grid.js"></script>
<script src="script/piece.js"></script>
<script src="script/timer.js"></script>
<script src="script/stopwatch.js"></script>
<script src="script/game_manager.js"></script>
<script src="script/random_piece_generator.js"></script>
<script src="script/ai.js"></script>
<script src="script/tuner.js"></script>
<script>
    var manager = new GameManager();
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68147157-4', 'auto');
  ga('send', 'pageview');
</script>

<?php
include "footers.php";
?>