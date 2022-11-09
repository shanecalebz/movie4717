<?php
// (A) LOAD LIBRARY
require "newsletter.php";

// (B) SEND!
$_NEWS->send(
  "Atlantic_Cinema", // subject
  "mail_bulk.html", // email template
  ["[customer_email]" => "customer_email"] // replace "[NAME]" with database name column
);