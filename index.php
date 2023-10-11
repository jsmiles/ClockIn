<?php

require "vendor/autoload.php";

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

$writer = new PngWriter();

$qrCode = QrCode::create('QR Code Generator');

$result = $writer->write($qrCode);

header("Content-Type: " . "image/png");

echo $result->getString();
