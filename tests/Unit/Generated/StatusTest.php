<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\StatusModel;

class StatusTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "account" : {
      "acct" : "Gargron",
      "avatar" : "https://files.mastodon.social/accounts/avatars/000/000/001/original/d96d39a0abb45b92.jpg",
      "avatar_static" : "https://files.mastodon.social/accounts/avatars/000/000/001/original/d96d39a0abb45b92.jpg",
      "bot" : false,
      "created_at" : "2016-03-16T14:34:26.392Z",
      "discoverable" : true,
      "display_name" : "Eugen",
      "emojis" : [],
      "fields" : [
         {
            "name" : "Patreon",
            "value" : "<a href=\"https://www.patreon.com/mastodon\" rel=\"me nofollow noopener noreferrer\" target=\"_blank\"><span class=\"invisible\">https://www.</span><span class=\"\">patreon.com/mastodon</span><span class=\"invisible\"></span}",
            "verified_at" : null
         },
         {
            "name" : "Homepage",
            "value" : "<a href=\"https://zeonfederated.com\" rel=\"me nofollow noopener noreferrer\" target=\"_blank\"><span class=\"invisible\">https://</span><span class=\"\">zeonfederated.com</span><span class=\"invisible\"></span}",
            "verified_at" : "2019-07-15T18:29:57.191+00:00"
         }
      ],
      "followers_count" : 322930,
      "following_count" : 459,
      "group" : false,
      "header" : "https://files.mastodon.social/accounts/headers/000/000/001/original/c91b871f294ea63e.png",
      "header_static" : "https://files.mastodon.social/accounts/headers/000/000/001/original/c91b871f294ea63e.png",
      "id" : "1",
      "last_status_at" : "2019-12-10T08:14:44.811Z",
      "locked" : false,
      "note" : "<p>Developer of Mastodon and administrator of mastodon.social. I post service announcements, development updates, and personal stuff.</p>",
      "statuses_count" : 61323,
      "url" : "https://mastodon.social/@Gargron",
      "username" : "Gargron"
   },
   "application" : {
      "name" : "Web",
      "website" : null
   },
   "bookmarked" : false,
   "card" : {
      "author_name" : "",
      "author_url" : "",
      "description" : "When Peter Teich’s money went to another Barclays customer, the bank offered £25 as a token gesture",
      "embed_url" : "",
      "height" : 0,
      "html" : "",
      "image" : null,
      "provider_name" : "",
      "provider_url" : "",
      "title" : "‘I lost my £193,000 inheritance – with one wrong digit on my sort code’",
      "type" : "link",
      "url" : "https://www.theguardian.com/money/2019/dec/07/i-lost-my-193000-inheritance-with-one-wrong-digit-on-my-sort-code",
      "width" : 0
   },
   "content" : "<p>&quot;I lost my inheritance with one wrong digit on my sort code&quot;</p><p><a href=\"https://www.theguardian.com/money/2019/dec/07/i-lost-my-193000-inheritance-with-one-wrong-digit-on-my-sort-code\" rel=\"nofollow noopener noreferrer\" target=\"_blank\"><span class=\"invisible\">https://www.</span><span class=\"ellipsis\">theguardian.com/money/2019/dec</span><span class=\"invisible\">/07/i-lost-my-193000-inheritance-with-one-wrong-digit-on-my-sort-code</span}</p>",
   "created_at" : "2019-12-08T03:48:33.901Z",
   "emojis" : [],
   "favourited" : false,
   "favourites_count" : 11,
   "id" : "103270115826048975",
   "in_reply_to_account_id" : null,
   "in_reply_to_id" : null,
   "language" : "en",
   "media_attachments" : [],
   "mentions" : [],
   "muted" : false,
   "poll" : null,
   "reblog" : null,
   "reblogged" : false,
   "reblogs_count" : 6,
   "replies_count" : 5,
   "sensitive" : false,
   "spoiler_text" : "",
   "tags" : [],
   "uri" : "https://mastodon.social/users/Gargron/statuses/103270115826048975",
   "url" : "https://mastodon.social/@Gargron/103270115826048975",
   "visibility" : "public"
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

        $model = StatusModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = StatusModel::sanitizePropertyName($property);

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
