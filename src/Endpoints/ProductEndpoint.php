<?php

declare(strict_types=1);


namespace GeNyaa\ShopwareApiSdk\Endpoints;


use GeNyaa\ShopwareApiSdk\Dto\Resources\Product;
use Illuminate\Support\Collection;

class ProductEndpoint extends EndpointAbstract
{
    protected string $resourcePath = '/api/v3/product';

    protected string $resource = 'product';

    public function all(): Collection
    {
        return parent::all()->mapInto(Product::class);
    }

    public function mapInto(array $product): Product
    {
        return new Product(
            $product['id'],
            $product['name'],
            $product['taxId'],
            $product['price'],
            $product['productNumber'],
            $product['stock'],
            $product['active'],
            $product['purchaseUnit'],
            $product['manufacturerId'],
            collect($product['categories']),
            $product['customFields'],
            collect($product['properties']),
        );
    }
}
