<?php
$connection = ssh2_connect('146.250.193.162', 22);
ssh2_auth_password($connection, 'centos', 'centos');

ssh2_scp_recv($connection, '/tmp/testdb.tar','/home/centos2/testdb.tar');
?>

