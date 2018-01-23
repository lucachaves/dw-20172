<?php

shell_exec("crontab <<EOF
00 09 * * 1-5 echo hello
EOF");

echo shell_exec("crontab -l");
