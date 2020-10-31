<?php

declare(strict_types=1);

namespace SimpleThings\EntityAudit;

class Events
{
    /**
     * This event is launched during postFlush Life Cycle, it is NOT save to flush within that event.
     */
    public const REVISION_UPDATED = 'revision.updated';
}