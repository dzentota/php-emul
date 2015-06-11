<?php
declare(ticks=500);
    // if (!preg_match("/charset=([a-zA-Z0-9\-]+)/",$transarray,$match)) //$match is byref here, it shouldn't work in emulator
var_dump(function_exists("f"));
function f($x)
{

	switch ($x)
	{
		case 5:
		echo "Match",PHP_EOL;
		break;
		case 7:
		echo "No match! should not output.",PHP_EOL;
		default:
		echo "Default",PHP_EOL;
	}
}
echo "Match=",f(5);

echo "Default=",f(3);

echo "No Match,Default=",f(7);


for ($i=0;$i<100;++$i)
{
	if ($i>5) break;
}
echo "6=",$i,PHP_EOL;

for ($j=0;$j<100;++$j)
for ($i=0;$i<100;++$i)
	if ($i>10 and $j>2) break 2;
echo "11,3=",$i,",",$j,PHP_EOL;
echo "fine=";
try {
	echo "fine",PHP_EOL;
}
catch (Exception $e)
{
	echo "No catch",PHP_EOL;
}
echo "proper catch=";
try {
	throw new Exception("just an exception");
}
catch (Exception $e)
{
	echo "proper catch",PHP_EOL;
}
echo "HTML=";
?>some inline html
<?php
$t=1;
function somefunc()
{
	global $t;
	echo $t, " should be 1",PHP_EOL;
}
somefunc();


$s=0;
for ($i=0;$i<100;++$i)
{
	if ($i&1)
		continue;
	$s++;
}
echo $s," should be 50",PHP_EOL;

const ABC="abc";
echo ABC, " should be abc",PHP_EOL;