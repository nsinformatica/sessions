<?php
require_once("config.php");
echo session_save_path();
echo "<br>";
var_dump(session_status());
echo "<br>";
switch(session_status()){
	case PHP_SESSION_DISABLED:
	echo "As sessões estiverem desabilitadas";
	break;
	case PHP_SESSION_NONE:
	echo "As sessoes estiverem desabilitadas, mas nenhuma existir";
	break;
	case PHP_SESSION_ACTIVE:
	echo "As sessoes estiverem habilitadas, e uma existir";
	break;
}


?>