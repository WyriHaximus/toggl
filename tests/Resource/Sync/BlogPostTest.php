<?php declare(strict_types=1);

namespace Jaapio\Tests\Toggl\Resource\Sync;

use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;
use Jaapio\Toggl\ApiSettings;
use Jaapio\Toggl\Resource\BlogPost;

class BlogPostTest extends AbstractResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Sync';
    }
    public function getClass() : string
    {
        return BlogPost::class;
    }
    public function getNamespace() : string
    {
        return Apisettings::NAMESPACE;
    }
}
