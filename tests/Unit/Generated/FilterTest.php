<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\FilterModel;

class FilterTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "id" : "19972",
   "context" : [
      "home"
   ],
   "filter_action" : "warn",
   "title" : "Test filter",
   "expires_at" : "2022-09-20T17:27:39.296Z",
   "statuses" : [
      {
         "id" : "1",
         "status_id" : "109031743575371913"
      }
   ],
   "keywords" : [
      {
         "keyword" : "bad word",
         "whole_word" : false,
         "id" : "1197"
      }
   ]
}

JSON;
    }

    public function testModelInstantation(): void
    {
        self::assertTrue(true);

        $array = json_decode($this->json, true);

        if (!is_array($array)) {
            return;
        }

        if (array_is_list($array)) {
            $array = $array[0] ?? [];
        }

        $model = FilterModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = FilterModel::sanitizePropertyName($property);

            self::assertObjectHasProperty($property, $model);

            $modelValue = $model->{$property};

            if (!is_string($modelValue) && !is_int($modelValue)) {
                // TODO find some other way to test this
                continue;
            }

            self::assertEquals($value, $model->{$property});
        }
    }
}