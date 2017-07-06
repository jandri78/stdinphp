<?php
$connection = ssh2_connect('146.250.193.162', 22);
ssh2_auth_password($connection, 'centos', 'centos');

$fecha= "`date +%Y%m%d%H%M `";

//$stream = ssh2_exec($connection, 'echo I am a test!'.$fecha.'>/tmp/hello.txt');

$stream = ssh2_exec($connection, 'cat /tmp/disco.txt');
stream_set_blocking($stream, true);
$output= stream_get_contents($stream);

var_dump($output);
echo json_encode($output);
echo $output;

?>
