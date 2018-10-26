<?php
/**
 * Project facebook-messenger-sdk.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/26/18
 * Time: 10:43
 */

namespace nguyenanhung\FacebookMessenger\SDK\Interfaces;

/**
 * Interface FacebookMessengerBotAppInterface
 *
 * @package   nguyenanhung\FacebookMessenger\SDK\Interfaces
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
interface FacebookMessengerBotAppInterface
{
    /**
     * Send Message
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 10:34
     *
     * @param object $message
     *
     * @return mixed
     */
    public function send($message);

    /**
     * Function batch
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 10:34
     *
     * @param array|object $messages
     *
     * @return array
     */
    public function batch($messages);

    /**
     * Function batchIds
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 10:33
     *
     * @param int|string|array|object $fb_ids
     * @param object|null             $message
     *
     * @return array
     */
    public function batchIds($fb_ids, $message);

    /**
     * Debugging Tool - Can accept an object, array, string, number
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 10:32
     *
     * @param $fb_id
     * @param $message
     *
     * @return array
     */
    public function debug($fb_id, $message);

    /**
     * Upload File (image, audio, video, file)
     *
     * @see Attachment Reuse on https://developers.facebook.com/docs/messenger-platform/send-api-reference
     *
     * @param $attachment
     *
     * @return array contains attachment_id (if successfully uploaded).
     */
    public function upload($attachment);

    /**
     * Get User Profile Info
     *
     * @param int    $id
     * @param string $fields
     *
     * @return mixed
     */
    public function userProfile($id, $fields = '*');

    /**
     * Set Get Started Button
     *
     * @see https://developers.facebook.com/docs/messenger-platform/thread-settings/get-started-button
     *
     * @param string $payload
     *
     * @return array
     */
    public function setGetStartedButton($payload);

    /**
     * Delete Get Started Button
     *
     * @see https://developers.facebook.com/docs/messenger-platform/thread-settings/get-started-button
     * @return array
     */
    public function deleteGetStartedButton();

    /**
     * Set Greeting Message
     *
     * @see https://developers.facebook.com/docs/messenger-platform/messenger-profile/greeting-text
     *
     * @param array $localizedGreetings
     *
     * @return array
     */
    public function setGreetingText($localizedGreetings);

    /**
     * Delete Greeting Text
     *
     * @see https://developers.facebook.com/docs/messenger-platform/messenger-profile/greeting-text
     * @return array
     */
    public function deleteGreetingText();

    /**
     * Get Greeting Text
     *
     * @see https://developers.facebook.com/docs/messenger-platform/messenger-profile/greeting-text
     * @return array
     */
    public function getGreetingText();

    /**
     * Set Target Audience
     *
     * @see https://developers.facebook.com/docs/messenger-platform/messenger-profile/target-audience
     *
     * @param string $audience_type ("all", "custom", "none")
     * @param string $list_type     ("whitelist", "blacklist")
     * @param array  $countries_array
     *
     * @return array
     */
    public function setTargetAudience($audience_type, $list_type = NULL, $countries_array = NULL);

    /**
     * Delete Target Audience
     *
     * @see https://developers.facebook.com/docs/messenger-platform/messenger-profile/target-audience
     * @return array
     */
    public function deleteTargetAudience();

    /**
     * Get Target Audience
     *
     * @see https://developers.facebook.com/docs/messenger-platform/messenger-profile/target-audience
     * @return array
     */
    public function getTargetAudience();

    /**
     * Set Domain Whitelisting
     *
     * @see https://developers.facebook.com/docs/messenger-platform/messenger-profile/domain-whitelisting
     *
     * @param array|string $domains
     *
     * @return array
     */
    public function setDomainWhitelist($domains);

    /**
     * Delete Domain Whitelisting
     *
     * @see https://developers.facebook.com/docs/messenger-platform/messenger-profile/domain-whitelisting
     * @return array
     */
    public function deleteDomainWhitelist();

    /**
     * Get Domain Whitelisting
     *
     * @see https://developers.facebook.com/docs/messenger-platform/messenger-profile/domain-whitelisting
     * @return array
     */
    public function getDomainWhitelist();

    /**
     * Set Chat Extension Home URL
     *
     * @see https://developers.facebook.com/docs/messenger-platform/messenger-profile/home-url/
     *
     * @param string  $url
     * @param string  $webview_height_ratio
     * @param string  $webview_share_button
     * @param boolean $in_test
     *
     * @return array
     */
    public function setHomeUrl($url, $webview_height_ratio = 'tall', $webview_share_button = 'hide', $in_test = FALSE);

    /**
     * Delete Chat Extension Home Url
     *
     * @see https://developers.facebook.com/docs/messenger-platform/messenger-profile/home-url/
     * @return array
     */
    public function deleteHomeUrl();

    /**
     * Get Chat Extension Home Url
     *
     * @see https://developers.facebook.com/docs/messenger-platform/messenger-profile/home-url/
     * @return array
     */
    public function getHomeUrl();

    /**
     * Set Nested Menu
     *
     * @see https://developers.facebook.com/docs/messenger-platform/messenger-profile/persistent-menu
     *
     * @param object $localizedMenu
     *
     * @return array
     */
    public function setPersistentMenu($localizedMenu);

    /**
     * Get Nested Menu
     *
     * @see https://developers.facebook.com/docs/messenger-platform/messenger-profile/persistent-menu
     * @return array
     */
    public function getPersistentMenu();

    /**
     * Remove Persistent Menu
     *
     * @see https://developers.facebook.com/docs/messenger-platform/messenger-profile/persistent-menu
     * @return array
     */
    public function deletePersistentMenu();

    /**
     * Set NLP Settings
     *
     * @see   https://developers.facebook.com/docs/messenger-platform/built-in-nlp
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 10:31
     *
     * @param bool   $nlp_enabled
     * @param string $model
     * @param null   $custom_token
     * @param bool   $verbose
     * @param int    $n_best
     *
     * @return mixed
     */
    public function setNLP($nlp_enabled = TRUE, $model = 'ENGLISH', $custom_token = NULL, $verbose = FALSE, $n_best = 1
    );

    /**
     * Messaging Insights API
     * Metrics = page_messages_active_threads_unique, page_messages_blocked_conversations_unique,
     * page_messages_reported_conversations_unique page_messages_reported_conversations_by_report_type_unique,
     * page_messages_feedback_by_action_unique,
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 10:31
     *
     * @param string $metric
     *
     * @see   https://developers.facebook.com/docs/messenger-platform/analytics#insights
     * @return array
     */
    public function getInsights($metric = 'page_messages_active_threads_unique');

    /**
     * Function call
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 10:30
     *
     * @param string       $url
     * @param string|array $data
     * @param string       $type Type of request (GET|POST|DELETE)
     *
     * @return mixed
     */
    public function call($url, $data, $type = 'post');

    /**
     * Function getCurlError
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/26/18 10:30
     *
     * @return null|string
     */
    public function getCurlError();
}
