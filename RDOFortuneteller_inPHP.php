<?php


  $posted = false;
  if( $_POST ) {
    $posted = true;

    
  }


$story_lines = array("There is a mysterious tent alone in a field, emitting a soft purple glow. ", //1
	"Something draws you near it, either curiosity, or some other etheral force, you do not know. ", //2
	"Once you reach the ragged cloth that seems to be serving as a door, your heart is racing. ", //3
	"'What could be inside?' You ask yourself. ", //4
	"Will terror await? Who built this thing? ", //5
	"You muster all your courage, and sweep aside the cloth with a brisk pull of your hand! ", //6
	"Inside, you see a frail old woman, sitting behind a glowing orb of crystal.", //7
	"It illuminates the entire tent! ", //8
	"There is also, a huge neon sign that reads: ", //9
	"WELCOME ALL! TO PHP'S MAGIC FORTUNE-TELLING HUT!!! ", //10
	"'Yikes' You think. 'This must be PHP '", //11
	"'Would you like a fortune?' Asks the PHP server... "); //12


$fortunes = array( "*** You will encounter someone from your past today! ***",
				"*** Today you should watch out for falling pianos! ***",
				"*** Hold on to your money today! ***",
				"*** Someone you know will win a prize! ***",
				"*** Love is in the air! Keep an eye out! ***",
				"*** At some point today, you will find yourself hungry! ***",
				"*** You will take over 25 breaths today! ***",
				"*** At some point in the day,you might take a drink of a liquid!***",
				"*** Danger ahead! Proceed with caution! ***",
				"*** Be careful! Someone is watching you! ***",
				"*** You just may win the lottery, if you chose to play it! ***",
				"*** Wash yourself! You stink! ***",
				"*** A figure on a quest for adventure may appear today. ***",
				"*** Don't PANIC! Bring a towel. ***",
				"*** Finders keepers, loosers weepers! ***",
				"*** If it is not heads up, leave it on the floor. ***",
				"*** Brush your teeth more than usual today. Yikes, that breath! ***",
				"*** Look up!!!! (did you see it!?) ***",
				"*** You will develop an obnoxious allergy soon. ***",
				"*** Don't forget to smell the roses! ***");

$given_fortune = array_rand($fortunes, 1);

function story($startline, $endline) {
		global $story_lines;
		for ($startline ; $startline <= $endline ; $startline++) {
			echo nl2br($story_lines[$startline]);

		}
}

?>
<html>
  <head>
    <meta charset="UTF-8">
    <script src="typewriter.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="fortune.css">

    <title></title>
  </head>
  <body>



<div id="story">
	<?php story(0,9); ?>

</div>
  
<br />
<div id="app">
</div>
<br />

<form action="" method="post">
     
      <input type="submit" value="Get Fortune?" name="submit"/>
    </form>



<?php
    if( $posted ) {
      
        echo $fortunes[$given_fortune];
      
    }
  ?>




<script type="text/javascript">
	
var app = document.getElementById('app');

var typewriter = new Typewriter(app, {
    loop: true
});

typewriter.typeString("'Would you like a fortune?' Asks the PHP server... ")
    .pauseFor(2500)
    .deleteAll()
    .typeString("C'mon, you know you do.")
    .pauseFor(2500)
    .deleteChars(7)
    .typeString('stuff about things.')
    .start();


</script>


<!--<?php //echo $fortunes[$given_fortune]; ?> -->















</body>
</html>
