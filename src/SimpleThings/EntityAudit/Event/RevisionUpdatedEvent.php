<?php

declare(strict_types=1);

namespace SimpleThings\EntityAudit\Event;

use Symfony\Component\EventDispatcher\Event;

class RevisionUpdatedEvent extends Event
{

    private $revisionId;

    private $entity;

    public function __construct(int $revisionId, object $entity)
    {
        $this->revisionId = $revisionId;
        $this->entity = $entity;
    }

    public function getRevisionId(): int
    {
        return $this->revisionId;
    }

    public function getEntity(): object
    {
        return $this->entity;
    }
}