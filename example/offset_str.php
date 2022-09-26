<?php

use DeathSatan\String\Tool\OffsetStr;

require_once dirname(__DIR__).'/vendor/autoload.php';

$str = '123123123';

$offset = new OffsetStr($str);

$res = [];
// output 12
$res[] = $offset->offset_substr(2);
// output 31
$res[] = $offset->offset_substr(2);
// output 23
$res[] = $offset->offset_substr(2);
// output 12
$res[] = $offset->offset_substr(2);
// output 8
$offset_length = $offset->getOffset();
// output 12
$str_length = $offset->length();
var_dump(get_defined_vars());
