# graphqlite-laminas-paginator-type

## example
```php
//Controller class
class Root{
    #[Query()]
    /**
     * @return Product[]
     */
    function products():Paginator{
        // after load product array
        // return the products paginator
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
