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
 * Class MessageElement
 *
 * @package   nguyenanhung\FacebookMessenger\SDK\Messages
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class MessageElement
{
    /**
     * Title
     *
     * @var null|string
     */
    protected $title = NULL;

    /**
     * Image url
     *
     * @var null|string
     */
    protected $image_url = NULL;

    /**
     * Subtitle
     *
     * @var null|string
     */
    protected $subtitle = NULL;

    /**
     * Url
     *
     * @var null|string
     */
    protected $url = NULL;

    /**
     * Buttons
     *
     * @var array
     */
    protected $buttons = [];

    /**
     * Default Action
     *
     * @var array
     */
    protected $default_action = [];

    /**
     * MessageElement constructor.
     *
     * @param        $title
     * @param        $subtitle
     * @param string $image_url
     * @param array  $buttons
     * @param string $url
     * @param array  $default_action
     */
    public function __construct($title, $subtitle, $image_url = '', $buttons = [], $url = '', $default_action = [])
    {
        $this->title     = $title;
        $this->subtitle  = $subtitle;
        $this->url       = $url;
        $this->image_url = $image_url;
        $this->buttons   = $buttons;
        if (!empty($default_action)) {
            $this->default_action = $default_action;
        }
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
            'title'     => $this->title,
            'subtitle'  => $this->subtitle,
            'item_url'  => $this->url,
            'image_url' => $this->image_url,
        ];

        if (!empty($this->default_action)) {
            $result['default_action'] = $this->default_action;
        }

        if (!empty($this->buttons)) {
            $result['buttons'] = [];

            foreach ($this->buttons as $btn) {
                $result['buttons'][] = $btn->getData();
            }
        }

        return $result;
    }
}
