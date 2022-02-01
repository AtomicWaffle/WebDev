<DOCTYPE=html>
<html>
	<head>
		<title>My PHP</title>
	</head>
	<body>
		<?php
			$verses = array("overcome", "heart2", "believe","hand", "heart", "peace", 
										"heart", "free", "heart", "afraid", "heart", "overcome", "heart2", "believe");
			foreach ($verses as $line){
				if($line == "overcome"){
					print "<p>We shall overcome,<br>We shall overcome,<br>We shall overcome, some day.</p>";}
				else if($line == "heart2"){
					print "<p>Oh, deep in my heart,<br>";}
				else if($line == "believe"){
					print "I do believe<br> We shall overcome, some day.</p>";}
				else if($line == "hand"){
					print "<p>We'll walk hand in hand,<br>We'll walk hand in hand,<br>We'll walk hand in hand, some day.</p>";}
				else if($line == "heart"){
					print "<p> Oh, deep in my heart,</p>";}
				else if($line == "peace"){
					print "<p>We shall live in peace,<br>We shall live in peace,<br>We shall live in peace, some day.</p>";}
				else if($line == "free"){
				 print "<p>We shall all be free,<br>We shall all be free,<br>We shall all be free, some day.</p>";}
				else if($line == "afraid"){
				 print "<p>We are not afraid,<br>We are not afraid,<br>We are not afraid, TODAY</p>";}	
					}
		?>
	</body>
</html>