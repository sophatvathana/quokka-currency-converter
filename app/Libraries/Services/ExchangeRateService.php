<?php
namespace App\Libraries\Services;
use Eventy;
use App\Libraries\Utils\ActionHooks;
class ExchangeRateService{
		private $exchange_rate_modes = array();

    public function __construct(){
      $exchange_rate_modes       = array();
      $exchange_rate_modes       = ActionHooks::instance()->do_action('before_add_exchange_rate_modes', $exchange_rate_modes);

      $this->exchange_rate_modes = $exchange_rate_modes;
    }
    /**
     * Get all exchange rate modes
     * @return array exchange rate modes
     */
    public function get_exchange_rate_modes($all = false)
    {
        $modes = array();
        foreach ($this->exchange_rate_modes as $mode) {
            if ($all !== true) {
                if ($mode['active'] == 0) {
                    continue;
                }
            }
            $modes[] = $mode;
        }

        return $modes;
    }
}
