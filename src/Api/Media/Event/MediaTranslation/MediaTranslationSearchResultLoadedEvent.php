<?php declare(strict_types=1);

namespace Shopware\Api\Media\Event\MediaTranslation;

use Shopware\Api\Media\Struct\MediaTranslationSearchResult;
use Shopware\Context\Struct\TranslationContext;
use Shopware\Framework\Event\NestedEvent;

class MediaTranslationSearchResultLoadedEvent extends NestedEvent
{
    public const NAME = 'media_translation.search.result.loaded';

    /**
     * @var MediaTranslationSearchResult
     */
    protected $result;

    public function __construct(MediaTranslationSearchResult $result)
    {
        $this->result = $result;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function getContext(): TranslationContext
    {
        return $this->result->getContext();
    }
}