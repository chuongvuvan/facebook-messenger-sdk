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
 * Class Summary
 *
 * @package   nguyenanhung\FacebookMessenger\SDK\Messages
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Summary
{
    /**
     * @var array
     */
    protected $data = [];

    /**
     * Summary constructor.
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Function getData
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 10:28
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }
}