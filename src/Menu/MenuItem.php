<?php
/**
 * Project facebook-messenger-sdk.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/26/18
 * Time: 09:08
 */

namespace nguyenanhung\FacebookMessenger\SDK\Menu;

use nguyenanhung\FacebookMessenger\SDK\Interfaces\MenuItemInterface;

/**
 * Class MenuItem
 *
 * @package   nguyenanhung\FacebookMessenger\SDK\Menu
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class MenuItem implements MenuItemInterface
{
    /**
     * Web url button type
     */
    const TYPE_WEB = "web_url";

    /**
     * Postback button type
     */
    const TYPE_POSTBACK = "postback";

    /**
     * Postback button type
     */
    const TYPE_NESTED = "nested";

    /**
     * Button type
     *
     * @var string
     */
    protected $type;

    /**
     * Button title
     *
     * @var string
     */
    protected $title;

    /**
     * Button url
     *
     * @var string|array
     */
    protected $data = NULL;

    /**
     * Webview height ratio ("compact", "tall" or "full")
     *
     * @var null|string
     */
    protected $webview_height_ratio = NULL;

    /**
     * Messenger extensions which enable your web page to integrate with Messenger using js
     *
     * @var boolean
     */
    protected $messenger_extensions = FALSE;

    /**
     * Fallback url to use on clients that don't support Messenger Extensions
     *
     * @var null|string
     */
    protected $fallback_url = NULL;

    /*
     * Set to hide to disable sharing in the webview (for sensitive info).
     * 
     * @var null|string
     */
    protected $webview_share_button = NULL;

    /**
     * MenuItem constructor.
     *
     * @param string|null|array $type
     * @param string|null|array $title
     * @param string|null|array $data
     * @param string|null|array $webview_height_ratio
     * @param bool|null|array   $messenger_extensions
     * @param string|null|array $fallback_url
     * @param null|null|array   $webview_share_button
     */
    public function __construct(
        $type, $title, $data, $webview_height_ratio = '', $messenger_extensions = FALSE, $fallback_url = '',
        $webview_share_button = NULL
    ) {
        $this->type                 = $type;
        $this->title                = $title;
        $this->data                 = $data;
        $this->webview_height_ratio = $webview_height_ratio;
        $this->messenger_extensions = $messenger_extensions;
        $this->fallback_url         = $fallback_url;
        $this->webview_share_button = $webview_share_button;

    }

    /**
     * Function getData
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:19
     *
     * @return mixed
     */
    public function getData()
    {
        $result['type']  = $this->type;
        $result['title'] = $this->title;
        switch ($this->type) {
            case self::TYPE_POSTBACK:
                $result['payload'] = $this->data;
                break;
            case self::TYPE_WEB:
                $result['url'] = $this->data;
                if ($this->webview_height_ratio) {
                    $result['webview_height_ratio'] = $this->webview_height_ratio;
                }
                if ($this->messenger_extensions) {
                    $result['messenger_extensions'] = $this->messenger_extensions;
                    $result['fallback_url']         = $this->fallback_url;
                }
                if ($this->webview_share_button) {
                    $result['webview_share_button'] = $this->webview_share_button;
                }
                break;
            case self::TYPE_NESTED:
                foreach ($this->data as $item) {
                    $result['call_to_actions'][] = $item->getData();
                }
                break;
        }

        return $result;
    }
}
