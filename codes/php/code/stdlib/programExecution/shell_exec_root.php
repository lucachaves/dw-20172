<?php

// shell_exec root
echo shell_exec('sudo cat /etc/shadow');

// SSH
$connection = ssh2_connect('localhost', 22);
ssh2_auth_password($connection, 'ubuntu', 'ubuntu');

$stream = ssh2_exec($connection, 'sudo cat /etc/shadow');
stream_set_blocking($stream, true);
$stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
$output = stream_get_contents($stream_out);
echo "<pre>{$output}</pre>";

// root ssh
// /etc/ssh/sshd_config
// PermitRootLogin yes
// sudo service ssh reload

// http://www.tldp.org/LDP/lame/LAME/linux-admin-made-easy/shadow-file-formats.html
// https://www.aychedee.com/2012/03/14/etc_shadow-password-hash-formats/
// https://www.cyberciti.biz/faq/understanding-etcshadow-file/
// http://php.net/manual/en/function.crypt.php
// 1 -> MD5
// 2a -> Blowfish
// 5 -> SHA-256
// 6 -> SHA-512
// mkpasswd -m sha-512 // sudo apt-get install whois
// mkpasswd -m sha-512 -S H.czqcYc vagrant
// echo crypt('ubuntu', '$6$4HVs4t9N$');
