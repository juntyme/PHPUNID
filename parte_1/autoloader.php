<?php

/// Autoload
spl_autoload_register(function ($className) {
    include $className . '.php';
});
