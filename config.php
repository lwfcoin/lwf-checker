<?php
	/**
	 * @author Jan
	 * @link https://github.com/lepetitjan/shift-checker
	 * @license https://github.com/lepetitjan/shift-checker/blob/master/LICENSE
	 */

/*  GENERAL CONFIG
__________________________ */

// You should have installed lwf-checker as normal user, so the line below should work by default.
// However, if you installed as root (please don't..) change the path below to $homeDir = "/root/";
    $homeDir        = "/home/".get_current_user()."/";

// You may leave the settings below as they are...
	$date		= date("Y-m-d H:i:s");			// Current date
	$pathtoapp	= $homeDir."kwf-node/";			// Full path to your lwf installation	
	$baseDir	= dirname(__FILE__)."/";		// Folder which contains THIS file
	$lockfile	= $baseDir."checkdelegate.lock";	// Name of our lock file
	$database	= $baseDir."check_fork.sqlite3";	// Database name to use
	$table 		= "forks";				// Table name to use
	$msg 		= "\"cause\":3";			// Message that is printed when forked
	$lwflog 	= $pathtoapp."logs/lwf.log";		// Needs to be a FULL path, so not ~/lwf
	$linestoread	= 30;					// How many lines to read from the end of $lwflog
	$max_count 	= 3;					// How may times $msg may occur
	$okayMsg 	= "√";					// 'Okay' message from lwf_manager.bash

// Consensus settings
	$consensusEnable= false;                                // Enable consensus check? Be sure to check $nodes first..
	$master         = true;                                 // Is this your master node? True/False
	$masternode     = "http://127.0.0.1";                   // Master node
	$masterport     = 18124;                                 // Master port
	$slavenode      = "http://slave_IP";      // Slave node
	$slaveport      = 18124;                                 // Slave port
	$threshold      = 50;                                   // Percentage of consensus threshold
	$apiHost        = "$masternode:$masterport";	// Used to calculate $publicKey by $secret. Use $masternode:$masterport or $slavenode:slaveport
	$secret         = array("");                            // Add your secrets here. If you want to forge multiple, add extra to the array. 

// Snapshot settings
	$snapshotDir	= $homeDir."lwf-snapshot/";		// Base folder of lwf-snapshot
	$createsnapshot	= true;					// Do you want to create daily snapshots?
	$max_snapshots	= 3;					// How many snapshots to preserve? (in days)

// Log file rotation
	$logfile 	= $baseDir."logs/checkdelegate.log";	// The location of your log file (see section crontab on Github)
	$max_logfiles	= 3;					// How many log files to preserve? (in days)  
	$logsize 	= 5242880;				// Max file size, default is 5 MB

// Telegram Bot
	$telegramId 	= ""; 					// Your Telegram ID
	$telegramApiKey = ""; 					// Your Telegram API key 
	$telegramEnable = false;				// Change to true to enable Telegram Bot
	$telegramSendMessage 	= "https://api.telegram.org/bot".$telegramApiKey."/sendMessage"; // Full URL to post message
?>
