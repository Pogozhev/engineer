<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/Kohana/Core'.EXT;

if (is_file(APPPATH.'classes/Kohana'.EXT))
{
    // Application extends the core
    require APPPATH.'classes/Kohana'.EXT;
}
else
{
    // Load empty core extension
    require SYSPATH.'classes/Kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/timezones
 */
date_default_timezone_set('Asia/Dhaka');

/**
 * Set the default locale.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/function.setlocale
 */
setlocale(LC_ALL, 'ru_RU.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @link http://kohanaframework.org/guide/using.autoloading
 * @link http://www.php.net/manual/function.spl-autoload-register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Optionally, you can enable a compatibility auto-loader for use with
 * older modules that have not been updated for PSR-0.
 *
 * It is recommended to not enable this unless absolutely necessary.
 */
//spl_autoload_register(array('Kohana', 'auto_load_lowercase'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @link http://www.php.net/manual/function.spl-autoload-call
 * @link http://www.php.net/manual/var.configuration#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

/**
 * Set the mb_substitute_character to "none"
 *
 * @link http://www.php.net/manual/function.mb-substitute-character.php
 */
mb_substitute_character('none');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('ru-ru');

if (isset($_SERVER['SERVER_PROTOCOL']))
{
    // Replace the default protocol.
    HTTP::$protocol = $_SERVER['SERVER_PROTOCOL'];
}

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
Kohana::$environment = Kohana::PRODUCTION;
if (isset($_SERVER['KOHANA_ENV']))
{
    Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - integer  cache_life  lifetime, in seconds, of items cached              60
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  expose      set the X-Powered-By header                        FALSE
 */
Kohana::init(array(
    'base_url' => '/',
    index_file => FALSE
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
    'auth'     => MODPATH.'auth',       // Basic authentication
    'database' => MODPATH.'database',   // Database access
    // 'image'      => MODPATH.'image',      // Image manipulation
    'orm'      => MODPATH.'orm',        // Object Relationship Mapping
    'ulogin'   => MODPATH.'ulogin',   // ulogin
    'phpexcel' => MODPATH.'phpexcel', //by dshovchko
    'email' => MODPATH.'email',
    'smarty'   => MODPATH.'smarty3'
));


Cookie::$salt = 'foobar';
/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

//Административные роуты
Route::set('adminpage', 'adminpage')
    ->defaults(array(
        'controller' => 'admin',
        'action'     => 'adminpage',
    ));
Route::set('technical', 'technical')
    ->defaults(array(
        'controller' => 'admin',
        'action'     => 'technical',
    ));
Route::set('list', 'list')
    ->defaults(array(
        'controller' => 'admin',
        'action'     => 'list',
    ));

//Роуты общедоступных страниц
Route::set('titles', 'titles(/<id>)')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'titles',
    ));
Route::set('experts', 'experts(/<id>)')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'experts',
    ));
Route::set('foto', 'foto(/<id>)')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'foto',
    ));
Route::set('ideas', 'ideas(/<id>)')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'ideas',
    ));
Route::set('orgprojects', 'orgprojects(/<id>)')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'orgprojects',
    ));
Route::set('loginpage', 'loginpage(/<id>)')
    ->defaults(array(
        'controller' => 'account',
        'action'     => 'loginpage',
    ));
Route::set('registration', 'registration(/<id>)')
    ->defaults(array(
        'controller' => 'account',
        'action'     => 'registration',
    ));
Route::set('vacancies', 'vacancies(/<id>)')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'vacancies',
    ));
Route::set('projects', 'projects(/<id>)')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'projects',
    ));
Route::set('static', '<action>(/<id>)', array('action' => 'about|sections|contacts'))
    ->defaults(array(
        'controller' => 'static',
    ));
Route::set('personal', 'personal/<action>(/<id>)', array('action' => 'projects|masters|profile'))
    ->defaults(array(
        'controller' => 'personal',
    ));


//Роут регистрации на конференцию
Route::set('form', 'form(/<action>(/<id>))')
    ->defaults(array(
        'controller' => 'form',
        'action'     => 'index',
    ));


//Роуты специальных действий
Route::set('logout', 'logout(/<id>)')
    ->defaults(array(
        'controller' => 'account',
        'action'     => 'logout',
    ));

//Роут по умолчанию
Route::set('default', '(<controller>(/<action>(/<id>)))')
    ->defaults(array(
        'controller' => 'page',
        'action'     => 'index',
    ));