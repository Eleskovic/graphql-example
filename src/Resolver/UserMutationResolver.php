<?php

namespace App\Resolver;

use ApiPlatform\Core\GraphQl\Resolver\QueryItemResolverInterface;
use App\Entity\User;

final class BookResolver implements QueryItemResolverInterface
{
    /**
     * @param User|null $item
     *
     * @return User
     */
    public function __invoke($item, array $context)
    {
        // Query arguments are in $context['args'].

        // Do something with the user.
        // Or fetch the user if it has not been retrieved.

        //at this point, i know this method expects me to send the object that is gonna be persisted on the database but i need to customize my output like Facebook does.
        //For ex: if any error occurs, they send you { error: true } or some smiliar response. But in this Api-Platform i am unable to change my output like we do in rest.
        //Example: echo json_encode($outputArray);
        //This is not a very big issue for resource operations (like crud) but I need to be able to send fully-customized responses like my own arrays.
        //I am also aware in GraphQL client decides what to get but I think we can achieve this cuz I have seen this a lot in different oauth2 providers who use graphql.

        return $item;
    }
}