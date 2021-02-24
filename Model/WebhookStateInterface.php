<?php

declare(strict_types=1);

namespace Grin\Affiliate\Model;

interface WebhookStateInterface
{
    public const POSTFIX_DELETED = 'deleted';
    public const POSTFIX_UPDATED = 'updated';
    public const POSTFIX_CREATED = 'created';
}
