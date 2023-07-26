<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Concerns;

use Vazaha\Mastodon\Models\Application;
use Vazaha\Mastodon\Results\ApplicationResult;

trait RequestsApplications
{
    public function getModelClass(): string
    {
        return Application::class;
    }

    public function getResultClass(): string
    {
        return ApplicationResult::class;
    }
}