<?php

spl_autoload_register(function ($class) {
    $prefix   = 'kdaviesnz';
    $base_dir = __DIR__ . '/src';
    if ( strncmp( $prefix, $class, strlen( $prefix ) ) !== 0 ) {
        return;
    }
    $relative_class = substr( $class, strlen( $prefix ) );
    $file           = $base_dir . str_replace( '\\', '/', $relative_class ) . '.php';
    if ( file_exists( $file ) ) {
        if (!interface_exists($class)) {
            require $file;
        }
    }
});

if ( file_exists( 'vendor/autoload.php' ) ) {
    require_once( 'vendor/autoload.php' );
}