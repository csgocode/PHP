<?php
header('content-type: application/zip');
header('Content-Length: 10000000');
header('Content-Disposition: attachment; filename="download.zip"');

for ($i = 0; $i < 1000; $i++) {
    echo str_repeat(".", 10000);
    usleep(50000);
}
?>