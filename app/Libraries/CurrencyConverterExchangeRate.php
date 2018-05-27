<?php
namespace App\Libraries;
use App\Libraries\Utils\ActionHooks;
class CurrencyConverterExchangeRate extends ExchangeRateSetting {

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
        $this->setId('CurrencyConverter');

        /**
         * REQUIRED
         * Mode name
         */
        $this->setName('Currency Converter Free');

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
