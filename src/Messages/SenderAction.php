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
 * Class SenderAction
 *
 * @package   nguyenanhung\FacebookMessenger\SDK\Messages
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class SenderAction
{
    /* sender_action possible values */

    const ACTION_MARK_SEEN = "mark_seen";

    const ACTION_TYPING_ON = "typing_on";

    const ACTION_TYPING_OFF = "typing_off";

    /**
     * @var null|string
     */
    protected $recipient = NULL;

    /**
     * @var null|string
     */
    protected $action = NULL;

    /**
     * SenderAction constructor.
     *
     * @param $recipient
     * @param $action
     */
    public function __construct($recipient, $action)
    {
        $this->recipient = $recipient;
        $this->action    = $action;

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
        return [
            'recipient'     => [
                'id' => $this->recipient
            ],
            'sender_action' => $this->action
        ];
    }
}