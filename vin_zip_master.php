<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('max_execution_time', 1200);
ini_set('memory_limit', '2048M');


try {

    $host_name = $_SERVER['HTTP_HOST'];

    $host_name = str_replace(array('-', '.'), "_", $host_name);

    $filename = $host_name . "_" . date("Y_m_d_H_i_s") . "_live_backup.zip";

    $source_path = __DIR__ . "/*";

    $command = 'zip -r ' . $filename . ' .' . $source_path . ' -x "*.zip" -x "*.tar"  -x "*.tar.gz"';

    shell_exec($command);

    echo 'Command : >_' . $command . "<br>";

    echo memory_get_usage() . "<br>\n";

    echo memory_get_peak_usage() . "<br>\n";

    echo 'FIle Name: ' . $filename;

    echo '<br>';
} catch (Exception $e) {
    echo '<pre>';
    print_r($e);
    exit;
}


echo 'done';
die;
