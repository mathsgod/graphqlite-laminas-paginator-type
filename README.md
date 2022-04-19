# graphqlite-laminas-paginator-type

## Setup
```php
use Laminas\Paginator\Mappers\TypeMapperFactory;
use TheCodingMachine\GraphQLite\SchemaFactory;

$factory = new SchemaFactory($cache, $container);
$factory->addTypeMapperFactory(new TypeMapperFactory); // add type mapper

```
        

## Example
```php
//Controller class
class Root{
    #[Query()]
    /**
     * @return Product[]
     */
    function products():Paginator{
        //get the products paginator
        return $paginator;
    }
}

//Type class
#[Type]
class Product{
    #[Field]
    public string $name
}
```

```gql
query{
    products{
        items(limit:5,offset:10){
            name
        }
        count
    }
}
```
