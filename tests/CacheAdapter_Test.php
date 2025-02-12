<?php

namespace tests\jgivoni\Flysystem\Cache;

use jgivoni\Flysystem\Cache\CacheAdapter;
use League\Flysystem\AdapterTestUtilities\FilesystemAdapterTestCase;
use League\Flysystem\FilesystemAdapter;
use League\Flysystem\InMemory\InMemoryFilesystemAdapter;
use Generator;
use Symfony\Component\Cache\Adapter\ArrayAdapter;

class CacheAdapter_Test extends FilesystemAdapterTestCase
{
    protected static function createFilesystemAdapter(): FilesystemAdapter
    {
        $cache = new ArrayAdapter();
        $fileSystemAdapter = new InMemoryFilesystemAdapter();

        return new CacheAdapter($fileSystemAdapter, $cache);
    }
}
