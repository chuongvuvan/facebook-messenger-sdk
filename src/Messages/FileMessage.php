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
 * Class FileMessage
 *
 * @package   nguyenanhung\FacebookMessenger\SDK\Messages
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class FileMessage extends Message
{
    // /**
    //  * @var null|string
    //  */
    // protected $recipient = null;
    //
    // /**
    //  * @var null|string
    //  */
    // protected $text = null;

    /**
     * Message constructor.
     *
     * @param string $recipient
     * @param string $file              Web Url, local file with @ prefix, attachment_id
     * @param array  $quick_replies     array of array to be added after attachment
     * @param string $notification_type - REGULAR, SILENT_PUSH, or NO_PUSH
     * @param string $messaging_type
     *
     * @see https://developers.facebook.com/docs/messenger-platform/send-api-reference
     */
    public function __construct(
        $recipient, $file, $quick_replies = [], $notification_type = parent::NOTIFY_REGULAR,
        $messaging_type = parent::TYPE_RESPONSE
    ) {
        $this->recipient         = $recipient;
        $this->text              = $file;
        $this->quick_replies     = $quick_replies;
        $this->notification_type = $notification_type;
        $this->messaging_type    = $messaging_type;
    }

    /**
     * Function getData
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 10:23
     *
     * @return array
     */
    public function getData()
    {
        $res = [
            'recipient'         => [
                'id' => $this->recipient
            ],
            'notification_type' => $this->notification_type,
            'messaging_type'    => $this->messaging_type
        ];

        $attachment = new Attachment(Attachment::TYPE_FILE, [], $this->quick_replies);

        if (strcmp(intval($this->text), $this->text) === 0) {
            $attachment->setPayload(['attachment_id' => $this->text]);
        } elseif (strpos($this->text, 'http://') === 0 || strpos($this->text, 'https://') === 0) {
            $attachment->setPayload(['url' => $this->text]);
        } else {
            $attachment->setFileData($this->getCurlValue($this->text, mime_content_type($this->text), basename($this->text)));
        }

        $res['message'] = $attachment->getData();

        return $res;
    }
}
