<?php
function interface_exists_mock($emul,$name,$autoload=true)
{
	return interface_exists($name,$autoload) or $emul->user_interface_exists($name);
}