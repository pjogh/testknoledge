<?php
    echo "input.php";
    file_put_contents("/home/pjo/Documents/testproject/log.txt", print_r(['hello'], true), FILE_APPEND);
?>