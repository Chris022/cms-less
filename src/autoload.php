<?php
namespace cms_less;

//autoload all classes
spl_autoload_register(function ($class) {
    //remove cms_less from the file-path, since it is the root namespace and does not exist as a folder!
    //replace \ in the file-path with the system Directory Seperator (/ on linux)
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