<?php

namespace SportsWear\Blog\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use Magento\Tests\NamingConvention\true\string;
use SportsWear\Blog\Api\Data\PostInterface;

class Post extends AbstractModel implements PostInterface, IdentityInterface
{
    const CACHE_TAG = 'sportswear_blog_post';

    /**
     * Post initialization
     */
    protected function _construct()
    {
        $this->_init('SportsWear\Blog\Model\ResourceModel\Post');
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->getData(self::TITLE);
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->getData(self::CONTENT);
    }

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->getData(self::POST_ID);
    }

    /**
     * Return identities
     *
     * @return string[]
     */
    public function getIdentities(): array
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title)
    {
        return $this->setData(self::TITLE, $title);
    }

    /**
     * @param string $content
     * @return $this
     */
    public function setContent(string $content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    /**
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt(string $createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt(string $updatedAt)
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id)
    {
        return $this->setData(self::POST_ID, $id);
    }
}
