The module requires Metasploit and tmux.
<br><br>
By <b>@xtr4nge</b>
<br><br>
This module starts msfconsole inside tmux (terminal name: METASPLOIT). To access the metasploit session started from FruityWiFi exec (from terminal) the following command:
<br><br>
<font style='font-family: monospace; font-weight: bold;'>
tmux a -t METASPLOIT
</font>
<br><br>
The Auto script (AutoRunScript) can be used to execute commands automatically when a meterpreter session is created.
<br>
To exec the AutoRunScript commands, the following line needs to be added into the handler:
<br><br>
<font style='font-family: monospace; font-weight: bold;'>
set AutoRunScript multi_console_command -rc auto.rc
</font>
