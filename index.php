<?php
use coreAppNS\Route;
use coreAppNS\Controllers;
use coreAppNS\View;
use coreAppNS\model;
include("core/route.php");
include("core/controllers.php");
include("core/view.php");
include("core/model.php");
$url=isset($_GET['url'])?$_GET['url']:"login";

new Route ($url);
?>