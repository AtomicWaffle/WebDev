<DOCTYPE=html>
<html>
	<head>
		<title>OldMcDonald</title>
	</head>
	<body>
	<section>
		<?php
			$sounds = array("cow"=>"moo", "dog"=>"woof", "pig"=>"oink", "duck"=>"quack");
			foreach ($sounds as $animal => $sound){
				print "<p>Old MacDonald had a farm EIEIO";
				print "<br>And on that farm he had a {$animal} EIEIO";
				print "<br>With a {$sound}-{$sound} here"; 
				print "<br>And a {$sound}-{$sound} there"; 
				print "<br>Here a {$sound}, there a {$sound}"; 
				print "<br>Everywhere a {$sound}-{$sound}"; 
				print "<p>Old MacDonald had a farm EIEIO";
					}
		?>
	</section>
	</body>
</html>