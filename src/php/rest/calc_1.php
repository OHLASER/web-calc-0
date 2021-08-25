<?php

require_once implode('/', [__DIR__, 'root-resolver.php']);
require_once implode('/', [resolve_root(__DIR__), 'functions.php']);
require_once implode('/', [$lib_dir, 'calc.php']);

if ($_REQUEST['run']) {
    $res = Calc::$instance->run($_REQUEST['run']);
    echo $res;
} else {
    http_response_code(404);
}

// vi: se ts=4 sw=4 et:
