<?php
require_once 'Template/Template.php';

$tpl = new Template('./tpl/');
$tpl->set('title', 'Kroptimal.dk');
$tpl->set('content_main', '�bner snart');

echo $tpl->fetch('main-tpl.php');
