<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;
use App\Models\User as ModelUser;

final readonly class User
{
    /** @param  array{}  $args */
    public function create(null $_, array $args)
    {        
        $user = ModelUser::create($args);
        return $user;
    }
    public function update(null $_, array $args)
    {        
        $user = ModelUser::find($args['id']);
        $user->update($args);
        return $user;
    }
    public function delete(null $_, array $args)
    {        
        $user = ModelUser::find($args['id']);
        if($user){
            $user->delete();
            return "User deleted";
        }
        return "User not found";
    }
}
