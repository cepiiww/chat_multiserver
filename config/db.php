<?php
require("func.php");
require("value.php");
$db = mysqli_connect("localhost","root","") or die("can't connect this database"); //dbuser & pass
mysqli_select_db($db, "vn_room_chat"); //dbnaem
mysqli_set_charset($db, 'utf8');
