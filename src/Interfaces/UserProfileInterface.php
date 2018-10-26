<?php
/**
 * Project facebook-messenger-sdk.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/26/18
 * Time: 09:11
 */

namespace nguyenanhung\FacebookMessenger\SDK\Interfaces;

/**
 * Interface UserProfileInterface
 *
 * @package   nguyenanhung\FacebookMessenger\SDK\Interfaces
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
interface UserProfileInterface
{
    /**
     * Function getFirstName
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:09
     *
     * @return mixed|null
     */
    public function getFirstName();

    /**
     * Function getLastName
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:09
     *
     * @return mixed|null
     */
    public function getLastName();

    /**
     * Function getPicture
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:09
     *
     * @return mixed|null
     */
    public function getPicture();

    /**
     * Function getLocale
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:09
     *
     * @return mixed|null
     */
    public function getLocale();

    /**
     * Function getTimezone
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:09
     *
     * @return mixed|null
     */
    public function getTimezone();

    /**
     * Function getGender
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:09
     *
     * @return mixed|null
     */
    public function getGender();

    /**
     * Function getData
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 09:09
     *
     * @return array
     */
    public function getData();
}