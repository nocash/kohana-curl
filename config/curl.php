<?php defined('SYSPATH') or die('No direct script access.');
// cURL base set of options. These are the most common, for more see http://www.php.net/manual/en/function.curl-setopt.php
$config['options'] = array
(
	CURLOPT_FAILONERROR        => TRUE,
	CURLOPT_FOLLOWLOCATION     => TRUE,
	CURLOPT_RETURNTRANSFER     => TRUE,
	CURLOPT_TIMEOUT            => 30,
	CURLOPT_FRESH_CONNECT      => TRUE,
	CURLOPT_FORBID_REUSE       => TRUE,
	CURLOPT_POST               => TRUE,
	CURLOPT_URL                => 'http://site.tld',
	CURLOPT_SSL_VERIFYPEER     => FALSE,
	CURLOPT_SSL_VERIFYHOST     => FALSE,
	CURLOPT_AUTOREFERER        => TRUE
);

// Allow caching of results. FALSE for no cache, else number of seconds for cache to live
$config['cache']  = FALSE;

// The cache tag(s) to use
$config['cache_tags'] = array('mod_Curl');

// The hash method (for caching)
$config['hash']   = 'sha1';

// The Curl error codes to ignore
$config['ignored_errors'] = array();