<?php
require('/home/retlet/include/retlet_include.php');
require_once(DOCUMENT_ROOT_CORE. 'Template.php');

$tpl = new Template('./tpl/');
$tpl->set('title', 'Kroptimal.dk');
$tpl->set('content_main', '�bner snart');

echo $tpl->fetch('main-tpl.php');

?>