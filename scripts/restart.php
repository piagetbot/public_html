<?php
	/**
	 * Bot restart script
	 */
	// Command
	$commands = array(
		'echo $PWD',
		'whoami',
		'kubectl get deployments',
		'kubectl get pods',
		'kubectl delete sopelbot',
		'kubectl create -f ../sopelbot.yaml',
		'kubectl get deployments',
		'kubectl get pods',
	);
	// Run the commands for output
	$output = '';
	foreach($commands AS $command){
		// Run it
		$tmp = shell_exec($command);
		// Output
		$output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
		$output .= htmlentities(trim($tmp)) . "\n";
	}
	// Make it pretty for manual user access (and why not?)
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Bot restart script</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
<pre>
 .  ____  .    ____________________________
 |/      \|   |                            |
[| <span style="color: #FF0000;">&hearts;    &hearts;</span> |]  | Bot Restart Script v0.2 |
 |___==___|  /              &copy; oodavid 2012, tom29739 2016 |
              |____________________________|

<?php echo $output; ?>
</pre>
</body>
</html>
