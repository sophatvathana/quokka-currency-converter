<?php
namespace App\Libraries;
use App\Libraries\Utils\ActionHooks;
class YahooExchangeRate extends ExchangeRateSetting {

	public function __construct()
    {
        /**
        * Call ExchangeRate __construct function
        */
        parent::__construct();
        /**
         * REQUIRED
         * Mode unique id
         * The ID must be alpha/alphanumeric
         */
        $this->setId('Yahoo');

        /**
         * REQUIRED
         * Mode name
         */
        $this->setName('Yahoo Exchange Rate');

        /**
         * Add mode settings
        */
        $this->setSettings(array(

        ));

        /**
         * REQUIRED
         * Hook mode with other exchange rate modes
         * Thank to Eventy
         */
        ActionHooks::instance()->add_action('before_add_exchange_rate_modes', array( $this, 'initMode' ));
    }
}
