<?php

spl_autoload_register( 'my_psr4_autoloader' );
/**
 * An example of a project-specific implementation.
 *
 * @param string
 * @return void
 */
function my_psr4_autoloader($class_name) {
    
    if ( false === strpos( $class_name, 'App' ) ) {
        return;
    }
    // Split the class name into an array to read the namespace and class.
    $file_parts = explode( '\\', $class_name );

    // Do a reverse loop through $file_parts to build the path to the file.
    $namespace = '';
    //var_dump($file_parts);

    $file_name = strtolower( $file_parts[count($file_parts) - 1] );
    $file_name = str_ireplace( '_', '-', $file_name );

    for ($i = 1; $i < count($file_parts) - 1; $i++) {
        $current = strtolower( $file_parts[ $i ] );
        $current = str_ireplace( '_', '-', $current );
        $namespace = '/' . $current . $namespace;
    }

    // Now build a path to the file using mapping to the file location.
    $filepath  =  __DIR__ . '/inc' . $namespace;


	$maybe_interface = "{$filepath}/interface-{$file_name}.php";
	$maybe_class = "{$filepath}/class-{$file_name}.php";

    // If the file exists in the specified path, then include it.
    if (file_exists($maybe_class)) {

        include_once($maybe_class);

    } else if (file_exists($maybe_interface)) {

	    include_once($maybe_interface);

    }
}