<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

final readonly class Role
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        return "GraphQL works!";
    }
    
    public function show(): string {
        return "Admin";
    }
}
