<?php 
namespace App\GraphQL\Mutations;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use App\Shipment;

class ShipmentMutator
{
    public function create($root, array $args)
    {
        return \App\Shipment::create($args);
    }
}