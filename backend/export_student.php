<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;

// Create a new Spreadsheet object
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Set headers and apply styling
$headerStyle = [
    'font' => ['bold' => true, 'color' => ['rgb' => 'FFFFFF']],
    'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER, 'vertical' => Alignment::VERTICAL_CENTER],
    'fill' => ['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID, 'startColor' => ['rgb' => '4CAF50']]
];
$sheet->getStyle('A1:J1')->applyFromArray($headerStyle);
$sheet->setCellValue('A1', 'Id');
$sheet->setCellValue('B1', 'User Id');
$sheet->setCellValue('C1', 'Name');
$sheet->setCellValue('D1', 'Gender');
$sheet->setCellValue('E1', 'Grade');
$sheet->setCellValue('F1', 'Dob');
$sheet->setCellValue('G1', 'Roll No');
$sheet->setCellValue('H1', 'Religion');
$sheet->setCellValue('I1', 'Email');
$sheet->setCellValue('J1', 'Phone No');
 


// Fetch data from the database
require_once 'head/controller/connection.php';
session_start();
$school_id = $_SESSION['school_id'];
$query = $conn->query("SELECT * FROM `student` WHERE `school_id` = $school_id") or die($query);

$rowNumber = 2; // Start from the second row

while ($fetch = $query->fetch_array()) {
    $sheet->setCellValue('A' . $rowNumber, $fetch['id']);
    $sheet->setCellValue('B' . $rowNumber, $fetch['user_id']);
    $sheet->setCellValue('C' . $rowNumber, $fetch['name']);
    $sheet->setCellValue('D' . $rowNumber, $fetch['gender']);
    $sheet->setCellValue('E' . $rowNumber, $fetch['grade']);
    $sheet->setCellValue('F' . $rowNumber, $fetch['dob']);
    $sheet->setCellValue('G' . $rowNumber, $fetch['roll_no']);
    $sheet->setCellValue('H' . $rowNumber, $fetch['religion']);
    $sheet->setCellValue('I' . $rowNumber, $fetch['email']);
    $sheet->setCellValue('J' . $rowNumber, $fetch['phone_no']);

    $rowNumber++;
}

// Apply cell styling
$cellStyle = [
    'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER, 'vertical' => Alignment::VERTICAL_CENTER],
    'borders' => ['allBorders' => ['borderStyle' => Border::BORDER_THIN, 'color' => ['rgb' => '000000']]],
];
$sheet->getStyle('A2:J' . ($rowNumber - 1))->applyFromArray($cellStyle);

// Set column widths
$sheet->getColumnDimension('A')->setWidth(25);
$sheet->getColumnDimension('B')->setWidth(25);
$sheet->getColumnDimension('C')->setWidth(25);
$sheet->getColumnDimension('D')->setWidth(25);
$sheet->getColumnDimension('E')->setWidth(25);
$sheet->getColumnDimension('F')->setWidth(25);
$sheet->getColumnDimension('G')->setWidth(25);
$sheet->getColumnDimension('H')->setWidth(25);
$sheet->getColumnDimension('I')->setWidth(25);
$sheet->getColumnDimension('J')->setWidth(40);
 
// Create an Xlsx writer and save the spreadsheet to a file
$writer = new Xlsx($spreadsheet);
$milliseconds = floor(microtime(true) * 1000);
$filename = 'all_students' . $milliseconds . '.xlsx';
$writer->save($filename);

// Set the appropriate headers to trigger download
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Cache-Control: max-age=0');

// Output the file content
readfile($filename);
unlink($filename); // Delete the temporary file
exit;
?>
