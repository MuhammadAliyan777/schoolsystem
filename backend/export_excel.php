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
$sheet->getStyle('A1:D1')->applyFromArray($headerStyle);
$sheet->setCellValue('A1', 'Account Holder Name');
$sheet->setCellValue('B1', 'Bank Name');
$sheet->setCellValue('C1', 'IBAN');
$sheet->setCellValue('D1', 'Account Number');

// Fetch data from the database
require_once 'head/controller/connection.php';
$query = $conn->query("SELECT * FROM `bank`") or die($query);
$rowNumber = 2; // Start from the second row

while ($fetch = $query->fetch_array()) {
    $sheet->setCellValue('A' . $rowNumber, $fetch['account_holder']);
    $sheet->setCellValue('B' . $rowNumber, $fetch['bank_name']);
    $sheet->setCellValue('C' . $rowNumber, $fetch['iban']);
    $sheet->setCellValue('D' . $rowNumber, $fetch['acc_no']);
    $rowNumber++;
}

// Apply cell styling
$cellStyle = [
    'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER, 'vertical' => Alignment::VERTICAL_CENTER],
    'borders' => ['allBorders' => ['borderStyle' => Border::BORDER_THIN, 'color' => ['rgb' => '000000']]],
];
$sheet->getStyle('A2:D' . ($rowNumber - 1))->applyFromArray($cellStyle);

// Set column widths
$sheet->getColumnDimension('A')->setWidth(25);
$sheet->getColumnDimension('B')->setWidth(25);
$sheet->getColumnDimension('C')->setWidth(25);
$sheet->getColumnDimension('D')->setWidth(20);

// Create an Xlsx writer and save the spreadsheet to a file
$writer = new Xlsx($spreadsheet);
$milliseconds = floor(microtime(true) * 1000);
$filename = 'bank_data' . $milliseconds . '.xlsx';
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
