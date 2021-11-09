<?php

$files = dir("arquivos"); 

while ($f = $files ->read()) {
	if(!is_dir($f)){
	echo '<a href='.$files.'/'.$f.'>' .$f.'</a>'."<br>";

}
}