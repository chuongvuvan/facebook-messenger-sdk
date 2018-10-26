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
 * Class Attachment
 *
 * @package   nguyenanhung\FacebookMessenger\SDK\Messages
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Attachment
{
    const TYPE_IMAGE    = 'image';
    const TYPE_AUDIO    = 'audio';
    const TYPE_VIDEO    = 'video';
    const TYPE_FILE     = 'file';
    const TYPE_LOCATION = 'location';

    /**
     * @var string
     */
    private $type;

    /**
     * @var array
     */
    private $payload = [];

    /**
     * @var string
     */
    private $fileData;

    /**
     * @var array
     */
    private $quick_replies = [];

    /**
     * Attachment constructor.
     *
     * @param       $type
     * @param array $payload
     * @param array $quick_replies
     */
    public function __construct($type, $payload = [], $quick_replies = [])
    {
        $this->type          = $type;
        $this->payload       = $payload;
        $this->quick_replies = $quick_replies;
    }

    /**
     * Function getType
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:34
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Function setType
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:34
     *
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Function getPayload
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:34
     *
     * @return array
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Function setPayload
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:34
     *
     * @param $payload
     */
    public function setPayload($payload)
    {
        $this->payload = $payload;
    }

    /**
     * Function getFileData
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:34
     *
     * @return string
     */
    public function getFileData()
    {
        return $this->fileData;
    }

    /**
     * Function setFileData
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:34
     *
     * @param $fileData
     */
    public function setFileData($fileData)
    {
        $this->fileData = $fileData;
    }

    /**
     * Function getData
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:34
     *
     * @return array
     */
    public function getData()
    {
        $data = [
            'attachment' => [
                'type'    => $this->type,
                'payload' => $this->payload
            ]
        ];
        foreach ($this->quick_replies as $qr) {
            $data['quick_replies'][] = $qr->getData();
        }
        if (!empty($this->fileData)) {
            $data['filedata'] = $this->fileData;
        }

        return $data;
    }
}
