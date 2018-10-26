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
 * Class MessageMediaElement
 *
 * @package   nguyenanhung\FacebookMessenger\SDK\Messages
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class MessageMediaElement
{
    /**
     * Type
     *
     * @var null|string
     */
    protected $type = NULL;

    /**
     * Image url
     *
     * @var null|string
     */
    protected $url = NULL;

    /**
     * Attachment id
     *
     * @var null|string
     */
    protected $attachment_id = NULL;

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
     * MessageMediaElement constructor.
     *
     * @param        $type
     * @param string $url
     * @param string $attachment_id
     * @param array  $buttons
     */
    public function __construct($type, $url = '', $attachment_id = '', $buttons = [])
    {
        $this->type          = $type;
        $this->url           = $url;
        $this->attachment_id = $attachment_id;
        $this->buttons       = $buttons;
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
            'type' => $this->type,
        ];

        if (!empty($this->url)) {
            $result['url'] = $this->url;
        }

        if (!empty($this->attachment_id)) {
            $result['attachment_id'] = $this->attachment_id;
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
