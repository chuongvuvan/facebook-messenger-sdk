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
 * Class QuickReplyButton
 *
 * @package   nguyenanhung\FacebookMessenger\SDK\Messages
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class QuickReplyButton
{
    /**
     * Text quick reply
     */
    const TYPE_TEXT = "text";

    /**
     * Location quick reply
     */
    const TYPE_LOCATION = "location";

    /**
     * Button type
     *
     * @var null|string
     */
    protected $type = NULL;

    /**
     * Button title
     *
     * @var null|string
     */
    protected $title = NULL;

    /**
     * Button payload
     *
     * @var null|string
     */
    protected $payload = NULL;

    /**
     * Image url of quick reply icon
     *
     * @var boolean
     */
    protected $image_url = FALSE;

    /**
     * QuickReplyButton constructor.
     *
     * @param        $type
     * @param string $title
     * @param null   $payload
     * @param null   $image_url
     */
    public function __construct($type, $title = '', $payload = NULL, $image_url = NULL)
    {
        $this->type      = $type;
        $this->title     = $title;
        $this->payload   = $payload;
        $this->image_url = $image_url;

    }

    /**
     * Function getData
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 10:27
     *
     * @return array
     */
    public function getData()
    {
        $result = [
            'content_type' => $this->type
        ];

        switch ($this->type) {
            case self::TYPE_LOCATION:
                $result['image_url'] = $this->image_url;
                break;

            case self::TYPE_TEXT:
                $result['payload']   = $this->payload;
                $result['title']     = $this->title;
                $result['image_url'] = $this->image_url;
                break;
        }

        return $result;
    }
}
