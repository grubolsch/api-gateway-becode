<?php
file_put_contents('test.txt', rand(1, 100) . "<br>", FILE_APPEND);
echo file_get_contents('test.txt');
