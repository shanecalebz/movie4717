<?php
class Newsletter {
	// (A) PROPERTIES & SETTINGS
	private $pdo = null;  // pdo object
	private $stmt = null; // sql statement
	private $from = "Atlantic_Cinema@localhost"; // email from
	private $each = 5; // get 10 subscribers each send cycle
	private $pause = 1; // 1 sec pause between each cycle

  // (B) CONSTRUCTOR - CONNECT TO DATABASE
	function __construct () { try {
		$this->pdo = new PDO(
			"mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET,
			DB_USER, DB_PASSWORD, [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		]);
	} catch (Exception $ex) { exit($ex->getMessage()); }}

  // (C) DESTRUCTOR - CLOSE DATABASE CONNECTION
	function __destruct () {
		if ($this->stmt!==null) { $this->stmt = null; }
		if ($this->pdo!==null) { $this->pdo = null; }
	}

  // (D) COUNT TOTAL NUMBER OF SUBSCRIBERS
	function count () {
		$this->stmt = $this->pdo->prepare("SELECT COUNT(*) `cnt` FROM `customer_newsletter`");
		$this->stmt->execute();
		return $this->stmt->fetchColumn();
	}

  // (E) GET SUBSCRIBERS
	function get ($x=0, $y=5) {
    $this->stmt = $this->pdo->prepare("SELECT * FROM `customer_newsletter` LIMIT $x, $y");
    $this->stmt->execute();
		return $this->stmt->fetchAll();
	}

	// (F) SEND NEWSLETTER
	function send ($subject, $template, $replace=null) {
		// (F1) EMAIL HEADERS
		$header = implode("\r\n", [
			"From: " . $this->from,
    	"MIME-Version: 1.0",
    	"Content-Type: text/html; charset=utf-8",
		]);

		// (F2) LOAD TEMPLATE
		if (!file_exists($template)) {
			$this->error = "$template not found";
			return false;
		}
		$template = file_get_contents($template);

		// (F3) SEND BATCH BY BATCH
		for ($i=0; $i<$this->count(); $i+=$this->each) {
			$subs = $this->get($i, $this->each);
			foreach ($subs as $s) {
				// (F3-1) EMAIL TEMPLATE REPLACE
				$msg = $template;
				if ($replace != null) { foreach ($replace as $from=>$to) {
					$msg = str_replace($from, $s[$to], $msg);
				}}

				// (F3-2) SEND - SAVE THE SEND STATUS HERE IF YOU WANT
				if (@mail($s["customer_email"], $subject, $msg, $header)) {
					// OK
				} else {
					// NOT OK
				}
			}

			// (F3-3) NEXT CYCLE
			sleep($this->pause);
		}
	}
}

// (G) DATABASE SETTINGS - CHANGE TO YOUR OWN!
define("DB_HOST", "localhost");
define("DB_NAME", "Atlantic");
define("DB_CHARSET", "utf8");
define("DB_USER", "root");
define("DB_PASSWORD", "");

// (H) NEWSLETTER OBJECT
$_NEWS = new Newsletter();