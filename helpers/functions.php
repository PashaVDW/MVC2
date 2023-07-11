<?php

namespace functions;

class Functions {
    /**
     * @param $dir
     *
     * @return string
     */
    public static function basePath($dir): string
    {
        return __DIR__ .'/../' . $dir;
    }
}