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
 * Class AccountLink
 *
 * @package   nguyenanhung\FacebookMessenger\SDK\Messages
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class AccountLink
{

    /**
     * Link Account title
     *
     * @var null|string
     */
    protected $title = NULL;

    /**
     * Button url
     *
     * @var null|string
     */
    protected $url = NULL;

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
     * Logout
     *
     * @var null|bool
     */
    protected $logout = NULL;

    /**
     * AccountLink constructor.
     *
     * @param        $title
     * @param string $subtitle
     * @param string $url
     * @param string $image_url
     * @param bool   $logout
     */
    public function __construct($title, $subtitle = '', $url = '', $image_url = '', $logout = FALSE)
    {
        $this->title     = $title;
        $this->subtitle  = $subtitle;
        $this->url       = $url;
        $this->image_url = $image_url;
        $this->logout    = $logout;
    }

    /**
     * Function getData
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:32
     *
     * @return array
     */
    public function getData()
    {
        if ($this->logout) {
            $buttons = new MessageButton(MessageButton::TYPE_ACCOUNT_UNLINK, '');
        } else {
            $buttons = new MessageButton(MessageButton::TYPE_ACCOUNT_LINK, '', $this->url);
        }
        $result = [
            'title'     => $this->title,
            'subtitle'  => $this->subtitle,
            'image_url' => $this->image_url,
            'buttons'   => [$buttons->getData()]
        ];

        return $result;
    }
}
