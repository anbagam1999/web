<?php
define('SITEPATH', __DIR__);
include_once '../../../dawn/entry.php';

variable('use-preview', true);

runFrameworkFile('site');
