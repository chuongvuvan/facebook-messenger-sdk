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
 * Class MessageReceiptElement
 *
 * @package   nguyenanhung\FacebookMessenger\SDK\Messages
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class MessageReceiptElement extends MessageElement
{
    /**
     * @var int
     */
    protected $quantity = 1;

    /**
     * @var int
     */
    protected $price = 0;

    /**
     * @var string
     */
    protected $currency = "USD";

    /**
     * MessageReceiptElement constructor.
     *
     * @param        $title
     * @param        $subtitle
     * @param string $image_url
     * @param int    $quantity
     * @param int    $price
     * @param string $currency
     */
    public function __construct($title, $subtitle, $image_url = '', $quantity = 1, $price = 0, $currency = "USD")
    {
        $this->title     = $title;
        $this->subtitle  = $subtitle;
        $this->image_url = $image_url;
        $this->quantity  = $quantity;
        $this->price     = $price;
        $this->currency  = $currency;
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
        return [
            'title'     => $this->title,
            'subtitle'  => $this->subtitle,
            'image_url' => $this->image_url,
            'quantity'  => $this->quantity,
            'price'     => $this->price,
            'currency'  => $this->currency
        ];
    }
}