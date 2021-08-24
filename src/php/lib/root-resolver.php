<?php

if (!function_exists('resolve_root')) {
    function resolve_root($dir) {
        $path = implode('/', [$dir, 'functions.php']);
        if (file_exists($path)) {
            $result = $dir;
        } else {
            $result = resolve_root(dirname($dir));
        }
        return $result;
    }
}

// vi: se ts=4 sw=4 et:
