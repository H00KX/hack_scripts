<?php

$f = scandir('cfg/');
unset($f[0], $f[1]);

foreach($f as $k => $z){
	}
}

sort($f);

print(json_encode($f));

?>