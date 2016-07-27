<?php
namespace Calypso\Testimonial\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface for cms page search results.
 * @api
 */
interface PostSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get pages list.
     *
     * @return \Calypso\Testimonial\Api\Data\PostInterface[]
     */
    public function getItems();

    /**
     * Set pages list.
     *
     * @param \Calypso\Testimonial\Api\Data\PostInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
