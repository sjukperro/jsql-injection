<?php
require_once 'PJBS.php';

$drv = new PJBS(null, null);

$drv->connect('jdbc:h2:tcp://ip/~/db', 'login', 'password');

$res = $drv->exec("SELECT col1, col2 FROM my_table where id=$_GET[lib]");

while ($row = $drv->fetch_array($res))
    var_dump($row);