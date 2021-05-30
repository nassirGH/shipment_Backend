<?php 
namespace App\GraphQL\Mutations;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use App\User;

class UserMutator
{
    public function create($root, array $args)
    {
        // $oldUsers=User::all();
        // foreach($oldUsers as $user){
        //     $user->api_token=null;
        //     $user->save();
        // }
        return \App\User::create($args);
    }
}