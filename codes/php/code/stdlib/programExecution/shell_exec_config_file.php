<?php
// list of important ubuntu configuration files
// https://www.ibm.com/developerworks/library/l-config/
// http://www.comptechdoc.org/os/linux/commands/linux_crspfiles.html
// https://updatedlinux.wordpress.com/2011/05/12/list-of-important-files-and-directories-in-linux-redhatcentosfedora/
// http://www.linuxtopia.org/online_books/introduction_to_linux/linux_The_most_important_configuration_files.html
// http://www.tecmint.com/linux-directory-structure-and-important-files-paths-explained/
// /etc/apt/sources.lst - apt-get source servers
// /etc/fstab - Disk drives mounted at boot
// /etc/hosts - self explanatory if you cat the file
// /etc/hostname
// /etc/resolv.conf - your dns information
// /etc/X11/xorg.conf - Xorg config file
// /etc/networks
// /etc/os-release
// /etc/lsb-release
// /etc/passwd
// /etc/lsb-release
// /etc/shadow
// /etc/protocol
// /etc/cron.daily/
// /etc/services
// /etc/timezone
// /etc/sudoers
// /etc/network/interfaces
// /etc/fstab
// /etc/crontab
// /etc/dhcp/dhcpd.conf
// /etc/named.conf
// /var/named/mydomain_name.db
// ~/.bash_aliases
// ~/.bashrc

shell_exec("crontab <<EOF
00 09 * * 1-5 echo hello
EOF");

echo shell_exec("crontab -l");
