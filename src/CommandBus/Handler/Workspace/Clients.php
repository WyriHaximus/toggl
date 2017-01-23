<?php

namespace Jaapio\Toggl\CommandBus\Handler\Workspace;

use ApiClients\Tools\Services\Client\FetchAndIterateService;
use Jaapio\Toggl\CommandBus\Command\Workspace\Clients as Command;
use Jaapio\Toggl\Resource\ClientInterface;
use React\Promise\PromiseInterface;

final class Clients
{
    /**
     * @var FetchAndIterateService
     */
    private $fetchAndIterateService;

    public function __construct(FetchAndIterateService $fetchAndIterateService)
    {
        $this->fetchAndIterateService = $fetchAndIterateService;
    }

    /**
     * Fetch TimeEntries and hydrate it
     *
     * @param Command $command
     * @return PromiseInterface
     */
    public function handle(Command $command): PromiseInterface
    {
        return $this->fetchAndIterateService->handle(
            sprintf('workspaces/%d/clients', $command->workspaceId()),
            '',
            ClientInterface::HYDRATE_CLASS);
    }
}
