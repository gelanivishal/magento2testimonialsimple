<?php
namespace Calypso\Testimonial\Api\Data;


interface PostInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const POST_ID       = 'id';
    const URL_KEY       = 'url_key';
    const TITLE         = 'title';
    const CONTENT       = 'content';
    const IMAGE         = 'image';
    const MESSAGE       = 'message';
    const COLOR         = 'color';
    const FROM_DATE     = 'from_date';
    const STORE_ID      = 'store_id';
    const WEBSITE_ID    = 'website_id';
    const CREATION_TIME = 'creation_time';
    const UPDATE_TIME   = 'update_time';
    const IS_ACTIVE     = 'is_active';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get URL Key
     *
     * @return string
     */
    public function getUrlKey();

    /**
     * Get title
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Get content
     *
     * @return string|null
     */
    public function getContent();

    /*
     * Get Image
     *
     * @return string|null
     */
    public function getImage();

    /**
     * Get message
     *
     * @return string|null
     */
    public function getMessage();

    /**
     * Get Color
     *
     * @return string|null
     */
    public function getColor();

    /**
     * Get From Date
     *
     * @return string|null
     */
    public function getFromDate();

    /**
     * Get Store Id
     *
     * @return int|null
     */
    public function getStoreId();

    /**
     * Get Website Id
     *
     * @return int|null
     */
    public function getWebsiteId();

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime();

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime();

    /**
     * Is active
     *
     * @return bool|null
     */
    public function isActive();

    /**
     * Set ID
     *
     * @param int $id
     * @return \Calypso\Testimonial\Api\Data\PostInterface
     */
    public function setId($id);

    /**
     * Set URL Key
     *
     * @param string $url_key
     * @return \Calypso\Testimonial\Api\Data\PostInterface
     */
    public function setUrlKey($url_key);

    /**
     * Return full URL including base url.
     *
     * @return mixed
     */
    public function getUrl();

    /**
     * Set title
     *
     * @param string $title
     * @return \Calypso\Testimonial\Api\Data\PostInterface
     */
    public function setTitle($title);

    /**
     * Set content
     *
     * @param string $content
     * @return \Calypso\Testimonial\Api\Data\PostInterface
     */
    public function setContent($content);

    /**
     * Set Image
     *
     * @param string $image
     * @return \Calypso\Testimonial\Api\Data\PostInterface
     */
    public function setImage($image);

    /**
     * Set Message
     *
     * @param string $message
     * @return \Calypso\Testimonial\Api\Data\PostInterface
     */
    public function setMessage($message);

    /**
     * Set Color
     *
     * @param string $color
     * @return \Calypso\Testimonial\Api\Data\PostInterface
     */
    public function setColor($color);

    /**
     * Set From Date
     *
     * @param string $fromDate
     * @return \Calypso\Testimonial\Api\Data\PostInterface
     */
    public function setFromDate($fromDate);

    /**
     * Set Store Id
     *
     * @param string $storeId
     * @return \Calypso\Testimonial\Api\Data\PostInterface
     */
    public function setStoreId($storeId);

    /**
     * Set Message
     *
     * @param string $websiteId
     * @return \Calypso\Testimonial\Api\Data\PostInterface
     */
    public function setWebsiteId($websiteId);

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return \Calypso\Testimonial\Api\Data\PostInterface
     */
    public function setCreationTime($creationTime);

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return \Calypso\Testimonial\Api\Data\PostInterface
     */
    public function setUpdateTime($updateTime);

    /**
     * Set is active
     *
     * @param int|bool $isActive
     * @return \Calypso\Testimonial\Api\Data\PostInterface
     */
    public function setIsActive($isActive);
}
