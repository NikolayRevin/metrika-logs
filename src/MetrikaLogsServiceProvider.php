<?php

declare(strict_types=1);

namespace Volga\MetrikaLogs;

use Doctrine\Common\Annotations\AnnotationRegistry;
use Illuminate\Support\ServiceProvider;

class MetrikaLogsServiceProvider extends ServiceProvider
{

    public function boot()
    {
    }

    public function provides()
    {
        return [MetrikaClient::class];
    }
}
