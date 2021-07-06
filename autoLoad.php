<?php

/** Loads all classes in the root directory */
function __autoload($class_name)
{
    if (file_exists('./' . $class_name . '.php')) {
        require_once './' . $class_name . '.php';
    }
}
