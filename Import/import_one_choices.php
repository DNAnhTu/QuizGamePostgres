
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
            $answear1 = $row['1'];
            $answear2 = $row['2'];
            $answear3 = $row['3'];
            $answear4 = $row['4'];
            $correct_answear = $row['5'];
            $difficulty = $row['6'];
            $onhold = $row['7'];
            
            $sql = "insert into one_choice (question, ans1, ans2, ans3, ans4, correct_answear, difficulty, onhold) VALUES ('$question', '$answear1', '$answear2', '$answear3', '$answear4', '$correct_answear', '$difficulty','$onhold');";
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