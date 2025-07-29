<?php
define('SITEPATH', __DIR__);
include_once '../../../amadeus8/entry.php';

variable('use-preview', true);

runFrameworkFile('site');
