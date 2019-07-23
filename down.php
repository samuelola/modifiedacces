

<?php
/*if(!empty($_GET['file'])){
    $fileName = basename($_GET['file']);
    $filePath = 'images/school_timetable/'.$fileName;
    if(!empty($fileName) && file_exists($filePath)){
        // Define headers
    header('Content-Description: File Transfer');
    header('Content-Type: application/force-download');
    header("Content-Disposition: attachment; filename=\"" . basename($fileName) . "\";");
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($fileName));
    ob_clean();
    flush();
    readfile("your_file_path/".$fileName); //showing the path to the server where the file is to be download
    exit;
    }else{
        echo 'The file does not exist.';
    }
}

*/



$file = $_GET['file'];

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    @readfile($file);
    exit;
}



?>