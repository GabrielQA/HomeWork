<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read Archive</title>
</head>
<body>
<?php
require_once 'PHPExcel/Classes/PHPExcel.php';
$archive = "products.csv";
$inputFileType = PHPExcel_IOFactory::identify($archive);
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($archive);
$sheet = $objPHPExcel->getSheet(0); 
$highestRow = $sheet->getHighestRow(); 
$highestColumn = $sheet->getHighestColumn();
for ($row = 1; $row <= $highestRow; $row++){ 
		echo $sheet->getCell("A".$row)->getValue()." , ";
		echo "<br>";
}
?>
</body>
</html>

