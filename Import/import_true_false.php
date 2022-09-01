
<?php
session_start();
$con = pg_connect("host=localhost port=5432 dbname=quizgame user=postgres password=Tu01228671340");
require '../vendor/PhpOffice/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_POST["import"])) {
    $fileName = $_FILES["import_file"]["name"];    
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION)  ;                  
    $allowed_ext = ['xlsx'];
     
    if(in_array($file_ext, $allowed_ext))
    {
        $inputFileNamePath = $_FILES["import_file"]["tmp_name"];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        foreach($data as $row)
        {
            //$id = $row['0'];
            $question = $row['0'];
            $answear= $row['1'];
            $difficulty = $row['2'];
            $onhold = $row['3'];
            
            $sql = "insert into  true_false (question, answear, difficulty, onhold) VALUES ('$question', '$answear','$difficulty','$onhold');";
            $result = pg_query($con, $sql);
            $msg = true;
            
        }
        if(isset($msg))
        {
            echo "<script> alert('Data Imported Successfully'); document.location.href='../php/moderator.php';</script>";
            exit(0);
        }
        else
        {
            echo "<script> alert('Data Not Imported'); document.location.href='../php/moderator.php';</script>";
            exit(0);
        }
    }
    else{
        echo "<script> alert('Invalid File'); document.location.href='../php/moderator.php';</script>";
        exit(0);
    }
}
?>