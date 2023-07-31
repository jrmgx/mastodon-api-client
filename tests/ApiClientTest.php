<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Tests\Concerns\CreatesMockClient;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Exceptions\BaseUriNotSetException;
use Vazaha\Mastodon\Factories\ApiClientFactory;
use Vazaha\Mastodon\Models\AccountModel;
use Vazaha\Mastodon\Models\ListModel;
use Vazaha\Mastodon\Requests\Accounts\GetRequest;
use Vazaha\Mastodon\Requests\GetAccountRequest;
use Vazaha\Mastodon\Requests\GetListsRequest;
use Vazaha\Mastodon\Results\AccountResult;
use Vazaha\Mastodon\Results\ListResult;

class ApiClientTest extends TestCase
{
    use CreatesMockClient;

    protected ApiClient $apiClient;

    protected function setUp(): void
    {
        parent::setUp();

        $responses = [
            $this->createJsonResponseFromFile(200, 'account.json'),
            $this->createJsonResponseFromFile(200, 'list.json'),
        ];
        $this->apiClient = $this->createMockClient($responses);
    }

    public function testClientCanBeInstantiatedUsingFactory(): void
    {
        $factory = new ApiClientFactory();
        $client = $factory->build();
        self::assertInstanceOf(ApiClient::class, $client);
    }

    public function testThrowsDomainNotSetExceptionWithoutDomain(): void
    {
        $this->expectException(BaseUriNotSetException::class);
        $this->apiClient->doRequest(new GetAccountRequest('testid'));
    }

    public function testGetAccountAndList(): void
    {
        $response = $this->apiClient
            ->setBaseUri('https://example.org')
            // ->doRequest(new GetAccountRequest('testid'));
            ->doRequest(new GetRequest('foo'));
        self::assertInstanceOf(AccountResult::class, $response);

        $account = $response->getModel();

        self::assertInstanceOf(AccountModel::class, $account);
        self::assertEquals('23634', $account->id);

        $response = $this->apiClient
            ->setBaseUri('https://example.org')
            ->doRequest(new GetListsRequest());
        self::assertInstanceOf(ListResult::class, $response);

        $list = $response->getModel();

        self::assertInstanceOf(ListModel::class, $list);
        self::assertEquals(12345, $list->id);
        self::assertEquals('Test List', $list->title);
    }

    public function testGetLists(): void
    {
        $response = $this->apiClient
            ->setBaseUri('https://example.org')
            ->doRequest(new GetListsRequest());
        self::assertInstanceOf(ListResult::class, $response);
    }
}
