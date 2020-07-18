<?php

namespace TMS\Common\Tests;

use Orchestra\TestBench\TestCase as OrchestraTestCase;
namespace TMS\Common\CommonServiceProvider;

abstract class PackageTestCase extends OrchestraTestCase
{
    // Here you can add global testing functions

    protected function getPackageProviders($app)
    {
        return [CommonServiceProvider::class];
    }
}
