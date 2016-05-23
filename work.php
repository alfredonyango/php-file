<html>

<head><title>Hello Php</title>
</head

<body>



<?php

$first="The quick brown fox";
$second="Jumped over the fence";
$third=$first;
$third.=$second;

echo $third;
?>
<br/>
Lowercase: <?php echo strtolower($third); ?><br />
uppercase: <?php echo strtoupper($third); ?><br />
uppercase first: <?php echo ucfirst($third); ?><br />
uppercase words: <?php echo ucwords($third); ?><br />


<br/>
Length <?php echo strlen($third); ?><br/><br/>
Trim: <?php echo "A" . trim("B C D") . "E"; ?><br/><br/>
Find: <?php echo strstr ($third, "brown"); ?><br/><br/>
Replace by string: <?php echo str_replace("quick", "super-fast", $third); ?>
<br/><br/>

Repeat: <?php echo str_repeat ($third, 2)?> <br/> <br/>
Make Substring: <?php echo substr ($third, 5, 10)?> <br/> <br/>
Find Position: <?php echo strpos ($third, "brown")?> <br/> <br/>
find character: <?php echo strchr($third, "z")?> <br/> <br/>

</body>
</html>
