<?php
	session_start();
	session_destroy();
	return redirect()->route('user.index');
?>
