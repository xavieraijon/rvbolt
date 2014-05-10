<?php

require_once dirname(__FILE__) . '/vendor/autoload.php';

use Maid\Maid;
use Maid\Parser;

$html = <<<HTML
<!DOCTYPE html>
<html pre:fix="none">
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<!-- I inserted a comment here, OK? -->
		<h1 class="heading">Hello, world!</h1>
		<p class="some sort of paragraph">
			This is a paragraph!
			Some of it is <strong>bold</strong>.
            Some of it is even <invalid> invalid.
		</p>
		<p/>
		<p>
			Images? Let's <img src="foobar" onerror="do-something-nasty"/> see about those.
		</p>
		<div>
			Sómè ıñṫëřņåţîøńāł text
		</div>
	</body>
	<script>var i = 1; if (i < 1) { (alert('woop woop woop'); } /* some JS with </close> <tags/> <inside> <script> */</script>



HTML;

$options = array();
$options['full-document'] = true;
$options['allowed-tags'] = array('html', 'body', 'div', 'p', 'em', 'img', 'i', 'b', 'li', 'ol', 'ul', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6');
$options['remove-tags'] = array('head', 'script');
$options['allowed-attribs'] = array('src', 'class', 'id');
$options['strip-comments'] = true;
$maid = new Maid($options);
echo $maid->clean($html);
$options['output-format'] = 'text';
$maid = new Maid($options);
echo $maid->clean($html);

$html = <<<HTML
<div>
<p>Foo</p>
<p>Bar</p>
</div>
HTML;
$options = array();
$options['allowed-tags'] = array('p');
$options['output-format'] = 'text';
$maid = new Maid($options);
echo $maid->clean($html);
