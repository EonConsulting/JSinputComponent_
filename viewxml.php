<?php
/**
 * @var $S_SESSION
 * Here is about a JSinput consumed and implemented as a LTI Component
 */
session_start();
if ( !isset($_SESSION['quiz']) ) die('Missing quiz data');
header('Content-type: application/xml; charset=utf-8');

echo($_SESSION['quiz']);

