<?php
$mod_name="metasploit";
$mod_version="1.1";
$mod_path="/usr/share/fruitywifi/www/modules/$mod_name";
$mod_logs="$log_path/$mod_name.log"; 
$mod_logs_history="$mod_path/includes/logs/";
$mod_logs_panel="disabled";
$mod_panel="show";
$mod_type="service";
$mod_isup="ps auxww | grep -iEe 'msfconsole.+handler' | grep -v -e grep";
$mod_alias="Metasploit";

# EXEC
$bin_sudo = "/usr/bin/sudo";
$bin_msfconsole = "/usr/bin/msfconsole";
$bin_tmux = "/usr/bin/tmux";
$bin_awk = "/usr/bin/awk";
$bin_grep = "/bin/grep";
$bin_sed = "/bin/sed";
$bin_cat = "/bin/cat";
$bin_echo = "/bin/echo";
$bin_ln = "/bin/ln";
$bin_killall = "/usr/bin/killall";
$bin_dos2unix = "/usr/bin/dos2unix";
?>
