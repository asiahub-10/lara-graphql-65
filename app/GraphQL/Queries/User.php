<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\Models\User as ModelUser;

final readonly class User
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        return ModelUser::all();
    }
    public function find(null $_, array $args): ModelUser {
        return ModelUser::find($args['id']);
    }
}
