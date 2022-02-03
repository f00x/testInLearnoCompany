<?php
function readPartFile($filePath,$startByte=101,$EndByte=200)
{
    $offsetByte=$startByte-1;
    $offsetByte= max($offsetByte, 0);
    $stream = fopen('./testFileContent', 'r');
    fseek($stream, $offsetByte, SEEK_SET);
    return fread($stream, ($EndByte - $offsetByte));
}
var_export(readPartFile('./testFileContent', 101 ,200));