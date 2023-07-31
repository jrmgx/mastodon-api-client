<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Carbon\Carbon;

/**
 * @see https://link.to.docs
 */
class TokenModel extends Model
{
    /**
     * An OAuth token to be used for authorization.
     */
    public string $access_token;

    /**
     * The OAuth token type. Mastodon uses `Bearer` tokens.
     */
    public string $token_type;

    /**
     * The OAuth scopes granted by this token, space-separated.
     */
    public string $scope;

    /**
     * When the token was generated.
     */
    public Carbon $created_at;
}