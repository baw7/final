<?php
class Manage
{
    public static function core($class)
    {
    $path = 'core/' . str_replace('\\', '/', $class) . '.php';
  if (is_file($path)) {
            include $path;
            return;
        }
    }
    public static function controllers($class)
    {
    $path = 'controllers/' . str_replace('\\', '/', $class) . '.php';
 if (is_file($path)) {
            include $path;
            return;
        }
    }
    public static function model($class)
    {
    $path = 'model/' . str_replace('\\', '/', $class) . '.php';
        if (is_file($path)) {
            include $path;
            return;
        }
    }
    public static function collections($class)
    {
    $path = 'collections/' . str_replace('\\', '/', $class) . '.php';
            if (is_file($path)) {
            include $path;
            return;
        }
    }
    public static function route($class)
    {
        $path = 'route/' . str_replace('\\', '/', $class) . '.php';
        if (is_file($path)) {
            include $path;
            return;
        }
    }
}
spl_autoload_register(array('Manage', 'route'));
spl_autoload_register(array('Manage', 'controllers'));
spl_autoload_register(array('Manage', 'collections'));
spl_autoload_register(array('Manage', 'model'));
spl_autoload_register(array('Manage', 'core'));
?>
