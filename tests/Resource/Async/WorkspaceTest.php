<?php declare(strict_types=1);

namespace Jaapio\Tests\Toggl\Resource\Async;

use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;
use Jaapio\Toggl\ApiSettings;
use Jaapio\Toggl\Resource\Workspace;

class WorkspaceTest extends AbstractResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Async';
    }
    public function getClass() : string
    {
        return Workspace::class;
    }
    public function getNamespace() : string
    {
        return Apisettings::NAMESPACE;
    }
}
