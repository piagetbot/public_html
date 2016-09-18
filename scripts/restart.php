<?php
	/**
	 * Bot restart script
	 */
	// Command
	$commands = array(
		'/bin/echo $PWD',
		'/usr/bin/whoami',
		'../bin/kubectl get deployments 2>&1',
		'../bin/kubectl get pods 2>&1',
		'../bin/kubectl delete sopelbot 2>&1',
		'../bin/kubectl create -f ../../sopelbot.yaml 2>&1',
		'../bin/kubectl get deployments 2>&1',
		'../bin/kubectl get pods 2>&1',
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
[| <span style="color: #FF0000;">&hearts;    &hearts;</span> |]  |    Bot Restart Script v0.2 |
 |___==___|  / &copy;oodavid,tom29739 2012,2016 |
              |____________________________|

<?php echo $output; ?>
</pre>
</body>
</html>
