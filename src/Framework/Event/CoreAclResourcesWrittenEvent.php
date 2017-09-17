<?php declare(strict_types=1);

namespace Shopware\Framework\Event;

class CoreAclResourcesWrittenEvent extends NestedEvent
{
    const NAME = 'core_acl_resources.written';

    /**
     * @var string[]
     */
    private $coreAclResourcesUuids;

    /**
     * @var NestedEventCollection
     */
    private $events;

    /**
     * @var array
     */
    private $errors;

    public function __construct(array $coreAclResourcesUuids, array $errors = [])
    {
        $this->coreAclResourcesUuids = $coreAclResourcesUuids;
        $this->events = new NestedEventCollection();
        $this->errors = $errors;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    /**
     * @return string[]
     */
    public function getCoreAclResourcesUuids(): array
    {
        return $this->coreAclResourcesUuids;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function hasErrors(): bool
    {
        return count($this->errors) > 0;
    }

    public function addEvent(NestedEvent $event): void
    {
        $this->events->add($event);
    }

    public function getEvents(): NestedEventCollection
    {
        return $this->events;
    }
}
