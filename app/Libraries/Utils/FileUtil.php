<?php
namespace App\Libraries\Utils;

class FileUtil {

  /**
  * List files in a specific folder
  * @param  string $dir directory to list files
  * @return array
  */
  public static function list_files($dir){
    $ignored = array(
        '.',
        '..',
        '.svn',
        '.htaccess',
        'index.html',
        'Providers',
        'Utils',
        'Services',
        'ExchangeRateFactory.php',
        'ExchangeRateSetting.php',
        'Exceptions',
        'Enums'
    );
    $files   = array();
    foreach (scandir($dir) as $file) {
        if (in_array($file, $ignored)) {
            continue;
        }
        $files[$file] = filectime($dir . '/' . $file);
    }
    arsort($files);
    $files = array_keys($files);

    return ($files) ? $files : array();
  }

}
