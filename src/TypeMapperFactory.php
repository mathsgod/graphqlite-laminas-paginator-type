<?php

namespace Laminas\Paginator\Mappers;

use TheCodingMachine\GraphQLite\FactoryContext;
use TheCodingMachine\GraphQLite\Mappers\TypeMapperFactoryInterface;
use TheCodingMachine\GraphQLite\Mappers\TypeMapperInterface;

class TypeMapperFactory implements TypeMapperFactoryInterface
{

    public function create(FactoryContext $context): TypeMapperInterface
    {
        return new PaginationTypeMapper($context);
    }
}
