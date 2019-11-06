<?php
include __DIR__ . '/../vendor/autoload.php';

use HttpStatusCodes\HttpStatusCodes;

// get OK status code
var_dump(HttpStatusCodes::HTTP_OK_CODE);
// get code message
var_dump(HttpStatusCodes::getMessage(HttpStatusCodes::HTTP_OK_CODE));
// get code more user friendly description
var_dump(HttpStatusCodes::getDescription(HttpStatusCodes::HTTP_OK_CODE));
// check if code exist
var_dump(HttpStatusCodes::has(HttpStatusCodes::HTTP_OK_CODE));

