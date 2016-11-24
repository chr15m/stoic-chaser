index.html: template.php chaser.txt
	content=`markdown chaser.txt` php template.php > index.html
