<?php

namespace SportsWear\Blog\Api\Data;

use Magento\Tests\NamingConvention\true\string;

interface PostInterface
{
    const POST_ID = 'post_id';
    const TITLE = 'title';
    const CONTENT = 'content';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * Get Title
     * @return string|null
     */
    public function getTitle(): ?string;

    /**
     * Get content
     * @return string|null
     */
    public function getContent(): ?string;

    /**
     * Get Created At
     * @return string|null
     */
    public function getCreatedAt(): ?string;

    /**
     * Get Updated At
     * @return string|null
     */
    public function getUpdatedAt(): ?string;

    /**
     * Get ID
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title);

    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */
    public function setContent(string $content);

    /**
     * Set Created At
     *
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt(string $createdAt);

    /**
     * Set Updated At
     *
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt(string $updatedAt);

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId(int $id);
}
