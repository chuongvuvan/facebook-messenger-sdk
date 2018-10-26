<?php
/**
 * Project facebook-messenger-sdk.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/26/18
 * Time: 09:08
 */

namespace nguyenanhung\FacebookMessenger\SDK\Menu;

use nguyenanhung\FacebookMessenger\SDK\Interfaces\LocalizedMenuInterface;

/**
 * Class LocalizedMenu
 *
 * @package   nguyenanhung\FacebookMessenger\SDK\Menu
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class LocalizedMenu implements LocalizedMenuInterface
{
    /** @var null|string */
    private $locale;
    /** @var null|string */
    private $composer_input_disabled;
    /** @var null|array|object */
    private $menuItems;

    /**
     * LocalizedMenu constructor.
     *
     * @param null|string|bool $locale
     * @param null|string|bool $composer_input_disabled
     * @param null|array       $menuItems
     */
    public function __construct($locale, $composer_input_disabled, $menuItems = NULL)
    {

        $this->locale                  = $locale;
        $this->composer_input_disabled = $composer_input_disabled;
        $this->menuItems               = $menuItems;
    }

    /**
     * Function getData
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:22
     *
     * @return array
     */
    public function getData()
    {
        $result = [
            'locale'                  => $this->locale,
            'composer_input_disabled' => $this->composer_input_disabled
        ];
        if (isset($this->menuItems)) {
            foreach ($this->menuItems as $menuItem) {
                $result['call_to_actions'][] = $menuItem->getData();
            }
        }

        return $result;
    }
}
