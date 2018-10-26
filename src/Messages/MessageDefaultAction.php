<?php
/**
 * Project facebook-messenger-sdk.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/26/18
 * Time: 09:08
 */

namespace nguyenanhung\FacebookMessenger\SDK\Messages;

/**
 * Class MessageDefaultAction
 *
 * @package   nguyenanhung\FacebookMessenger\SDK\Messages
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class MessageDefaultAction
{
    /**
     * Web url button type
     */
    const TYPE_WEB = "web_url";

    /**
     * Button type
     *
     * @var null|string
     */
    protected $type = NULL;

    /**
     * Button url
     *
     * @var null|string
     */
    protected $url = NULL;

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

    /**
     * MessageDefaultAction constructor.
     *
     * @param string $url
     * @param string $webview_height_ratio
     * @param bool   $messenger_extensions
     * @param string $fallback_url
     */
    public function __construct($url = '', $webview_height_ratio = '', $messenger_extensions = FALSE, $fallback_url = ''
    ) {
        $this->type = self::TYPE_WEB;

        $this->webview_height_ratio = $webview_height_ratio;
        $this->messenger_extensions = $messenger_extensions;
        $this->fallback_url         = $fallback_url;
        $this->url                  = $url;
    }

    /**
     * Function getData
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 10:25
     *
     * @return array
     */
    public function getData()
    {
        $result = [
            'type' => $this->type
        ];

        switch ($this->type) {

            case self::TYPE_WEB:
                $result['url'] = $this->url;

                if ($this->webview_height_ratio) {
                    $result['webview_height_ratio'] = $this->webview_height_ratio;
                }

                if ($this->messenger_extensions) {
                    $result['messenger_extensions'] = $this->messenger_extensions;
                    $result['fallback_url']         = $this->fallback_url;
                }
                break;

        }

        return $result;
    }
}
