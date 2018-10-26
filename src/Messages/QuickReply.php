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
 * Class QuickReply
 *
 * @package   nguyenanhung\FacebookMessenger\SDK\Messages
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class QuickReply extends Message
{
    // /**
    //  * @var array
    //  */
    // protected $quick_replies = array();

    /**
     * QuickReply constructor.
     *
     * @param        $recipient
     * @param        $text
     * @param array  $quick_replies
     * @param null   $tag
     * @param string $notification_type
     * @param string $messaging_type
     */
    public function __construct(
        $recipient, $text, $quick_replies = [], $tag = NULL, $notification_type = parent::NOTIFY_REGULAR,
        $messaging_type = parent::TYPE_RESPONSE
    ) {
        $this->recipient         = $recipient;
        $this->text              = $text;
        $this->quick_replies     = $quick_replies;
        $this->tag               = $tag;
        $this->notification_type = $notification_type;
        $this->messaging_type    = $messaging_type;
    }

    /**
     * Function getData
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 10:26
     *
     * @return array
     */
    public function getData()
    {
        $result = [
            'recipient'         => [
                'id' => $this->recipient
            ],
            'message'           => [
                'text' => $this->text
            ],
            'tag'               => $this->tag,
            'notification_type' => $this->notification_type,
            'messaging_type'    => $this->messaging_type
        ];

        foreach ($this->quick_replies as $qr) {
            if ($qr instanceof QuickReplyButton) {
                $result['message']['quick_replies'][] = $qr->getData();
            } else {
                $result['message']['quick_replies'][] = $qr;
            }
        }

        return $result;
    }
}
