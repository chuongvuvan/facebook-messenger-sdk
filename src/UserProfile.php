<?php
/**
 * Project facebook-messenger-sdk.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/26/18
 * Time: 09:08
 */

namespace nguyenanhung\FacebookMessenger\SDK;

use nguyenanhung\FacebookMessenger\SDK\Interfaces\UserProfileInterface;

/**
 * Class UserProfile
 *
 * @package   nguyenanhung\FacebookMessenger\SDK
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class UserProfile implements UserProfileInterface
{
    /** @var array */
    protected $data = [];

    /**
     * UserProfile constructor.
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Function getFirstName
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:09
     *
     * @return mixed|null
     */
    public function getFirstName()
    {
        return isset($this->data['first_name']) ? $this->data['first_name'] : NULL;
    }

    /**
     * Function getLastName
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:09
     *
     * @return mixed|null
     */
    public function getLastName()
    {
        return isset($this->data['last_name']) ? $this->data['last_name'] : NULL;
    }

    /**
     * Function getPicture
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:09
     *
     * @return mixed|null
     */
    public function getPicture()
    {
        return isset($this->data['profile_pic']) ? $this->data['profile_pic'] : NULL;
    }

    /**
     * Function getLocale
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:09
     *
     * @return mixed|null
     */
    public function getLocale()
    {
        return isset($this->data['locale']) ? $this->data['locale'] : NULL;
    }

    /**
     * Function getTimezone
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:09
     *
     * @return mixed|null
     */
    public function getTimezone()
    {
        return isset($this->data['timezone']) ? $this->data['timezone'] : NULL;
    }

    /**
     * Function getGender
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:09
     *
     * @return mixed|null
     */
    public function getGender()
    {
        return isset($this->data['gender']) ? $this->data['gender'] : NULL;
    }

    /**
     * Function getData
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:09
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }
}
