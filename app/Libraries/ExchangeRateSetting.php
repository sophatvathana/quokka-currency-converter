<?php
namespace App\Libraries;
use App\Models\Options;
use Illuminate\Support\Facades\Crypt;
class ExchangeRateSetting
{
    /**
     * Hold Laravel instance
     * @var object
     */
    protected $ci;
    /**
     * Stores the mode id
     * @var alphanumeric
     */
    protected $id = '';
    /**
     * mode name
     * @var mixed
     */
    protected $name = '';
    /**
     * All mode settings
     * @var array
     */
    protected $settings = array();

    /**
     * Must be called from the main mode class that extends this class
     * @param alphanumeric $id   Mode id - required
     * @param mixed $name Mode name
     */
    public function __construct()
    {

    }

    public function initMode($modes)
    {
        /**
         * Try to add the options if the mode is first time added or is options page in admin area
         * May happen there is new options added so let the script re-check
         * add_option will not re-add the option if already exists
         */
        if (!$this->isInitialized()) {
            foreach ($this->settings as $option) {
                $val = isset($option['default_value']) ? $option['default_value'] : '';
                $this->add_option('exchangeratemode_'. strtolower($this->getId()) . '_' . $option['name'], $val, 0);
            }
            $this->add_option('exchangeratemode_'. strtolower($this->getId()) . '_initialized', 1);
        }

        /**
         * Inject the mode with other modes with action hook
         */
        $modes[] = array(
            'id' => $this->getId(),
            'name' => $this->getSetting('label'),
            'description' => '',
            'selected_by_default'=>$this->getSetting('default_selected'),
            'active' => $this->getSetting('active')
        );

        return $modes;
    }

    /**
     * Set mode name
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Return mode name
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set mode id
     * @param string alphanumeric $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Return mode id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mode settings
     * @param array $settings
     */
    public function setSettings($settings)
    {

        /**
         * Append on top the dafault settings active and label
         */
        array_unshift(
            $settings,
            array(
                'name'=>'active',
                'type'=>'yes_no',
                'default_value'=>0,
                'label'=>'Exchange Rate active',
                ),
            array(
                'name'=>'label',
                'default_value'=>$this->getName(),
                'label'=>'Exchange Rate label',
                )
        );
        $this->settings = $settings;
    }

    /**
     * Get all mode settings
     * @param  boolean $formatted Should the setting be formated like is on db or like it passed from the settings
     * @return array
     */
    public function getSettings($formatted = true)
    {
        $settings = $this->settings;
        if ($formatted) {
            foreach ($settings as $key => $option) {
                $settings[$key]['name'] = 'exchangeratemode_' . strtolower($this->getId()) . '_' . $option['name'];
            }
        }

        return $settings;
    }

    /**
     * Return single setting passed by name
     * @param  mixed $name Option name
     * @return string
     */
    public function getSetting($name)
    {
        return trim($this->get_option('exchangeratemode_'. strtolower($this->getId()) . '_' .$name));
    }

    function get_option($name)
    {

        return Options::get_option($name);
    }

    function add_option($name, $value)
    {

        return Options::add_option($name, $value);
    }

    /**
     * Decrypt setting value
     * @return string
     */
    public function decryptSetting($name)
    {
        return trim(decrypt($this->getSetting($name)));
    }

    /**
     * Check if payment mode is initialized and options are added into database
     * @return boolean
     */
    protected function isInitialized()
    {
        return $this->getSetting('initialized') == '' ? false : true;
    }

    /**
     * @return string
     */
    public function get_id()
    {
        return $this->getId();
    }

    /**
     * @return array
     */
    public function get_settings()
    {
        return $this->getSettings();
    }

    /**
     * @return string
     */
    public function get_name()
    {
        return $this->getName();
    }

    /**
     * @return string
     */
    public function get_setting_value($name)
    {
        return $this->getSetting($name);
    }
}
