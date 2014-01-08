<?php

$file	= '/home/.sites/513/site313/web/staa/unzip/radfeld19.jpg';

1: $command = "/usr/bin/convert -size 100x80 ".$pfadsource.$namesource." -resize 100x80 ".$pfaddest.$namesource."; /usr/bin/montage -geometry 100x80 ".$pfaddest.$namesource." ".$pfaddest.$namesource." ";<br />$output = shell_exec($command);<br />


$ret	= '';

echo system('unzip /home/.sites/513/site313/web/staa/unzip/'.$file.' -d /home/.sites/513/site313/web/staa/unzip/',$ret);
echo '<pre>'.print_r($ret,true).'</pre>';

echo exec('unzip /home/.sites/513/site313/web/staa/unzip/'.$file.'',$ret);
echo '<pre>'.print_r($ret,true).'</pre>';

echo passthru('unzip /home/.sites/513/site313/web/staa/unzip/'.$file.' -d /home/.sites/513/site313/web/staa/unzip/',$ret);
echo '<pre>'.print_r($ret,true).'</pre>';

?>