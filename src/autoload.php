<?php
namespace cms_less;

spl_autoload_register(function ($class) {
    $file = __DIR__.DIRECTORY_SEPARATOR.
        str_replace("cms_less","",
            str_replace('\\', DIRECTORY_SEPARATOR, $class)
        ).'.php';

    if (file_exists($file)) {

        require $file;
        return true;
    }
    return false;
});