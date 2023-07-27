<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Tests\Concerns\CreatesMockClient;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Models\Account;
use Vazaha\Mastodon\Requests\GetFollowedAccountsRequest;
use Vazaha\Mastodon\Results\AccountResult;

class PagingTest extends TestCase
{
    use CreatesMockClient;

    protected ApiClient $apiClient;

    protected function setUp(): void
    {
        parent::setUp();
        $this->apiClient = $this->createMockClient([
            $this->createJsonResponseFromFile(
                'accounts1.json',
                [
                    'Link' => '<https://example.org/accounts?min_id=3>; rel="next"',
                ],
            ),
            $this->createJsonResponseFromFile(
                'accounts2.json',
                [
                    'Link' => '<https://example.org/accounts?max_id=2>; rel="previous"',
                ],
            ),
            $this->createJsonResponseFromFile(
                'accounts1.json',
                [
                    'Link' => '<https://example.org/accounts?min_id=3>; rel="next"',
                ],
            ),
        ]);
    }

    public function testPagingRequestAndResult(): void
    {
        $this->apiClient->setBaseUri('https://example.org');

        $result = $this->apiClient->doRequest(new GetFollowedAccountsRequest('testid'));
        self::assertInstanceOf(AccountResult::class, $result);

        $accounts = $result->getModels();
        self::assertInstanceOf(Account::class, $accounts[0]);
        self::assertEquals(1, $accounts[0]->id);

        $previousResult = $result->getPreviousResult();
        self::assertNull($previousResult);

        $nextResult = $result->getNextResult();
        self::assertInstanceOf(AccountResult::class, $nextResult);

        $accounts = $nextResult->getModels();
        self::assertEquals(3, $accounts[0]->id);

        $previousResult = $nextResult->getPreviousResult();
        self::assertInstanceOf(AccountResult::class, $nextResult);

        $nextResult = $nextResult->getNextResult();
        self::assertNull($nextResult);
    }
}
