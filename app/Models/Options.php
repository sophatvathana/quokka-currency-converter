<?php

namespace App\Models;
use App\Libraries\Utils\ActionHooks;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Options extends Model
{

    private $options = array();

    /**
     * Function that gets option based on passed name
     * @param  string $name
     * @return string
    */
    public static function get_option($name, $where = array())
    {
        $val = '';
        $name = trim($name);

        if (!isset(self::$options[$name])) {
            // is not auto loaded
            $where[] = ['name',"=", $name];
            $row = DB::table('options')->where($where)->value('value');
            if ($row) {
                $val = $row;
            }
        } else {
            $val = self::$options[$name];
        }

        $hook_data = ActionHooks::instance()->do_action('get_option',array('name'=>$name,'value'=>$val));
        return $hook_data['value'];
    }

    public static function add_option($name, $value = '', $autoload = 1)
    {
        $exists = DB::table('options')->where('name', $name)->count();
        if ($exists == 0) {
            $newData = array(
                'name' => $name,
                'value' => $value,
            );

        if (\Schema::hasColumn('options', 'autoload')) {
            $newData['autoload'] = $autoload;
        }

        $insert_id = DB::table('options')->insertGetId(
         $newData
        );

        if ($insert_id) {
            return true;
        }

        return false;
      }

      return false;
    }
}
