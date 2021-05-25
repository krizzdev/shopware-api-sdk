<?php

declare(strict_types=1);


namespace GeNyaa\ShopwareApiSdk\Endpoints;

use GeNyaa\ShopwareApiSdk\Dto\Resources\PropertyOption;

class PropertyOptionEndpoint extends EndpointAbstract
{
    protected string $resourcePath = '/api/v3/property-group-option';

    protected string $resource = 'property_group_option';

    public function first(): ?PropertyOption
    {
        $propertyOption = parent::first();

        return is_null($propertyOption) ? null : $this->mapInto($propertyOption);
    }

    public function mapInto(array $propertyOption): PropertyOption
    {
        return new PropertyOption(
            $propertyOption['id'],
            $propertyOption['groupId'],
            $propertyOption['name'],
            $propertyOption['position'],
            $propertyOption['translations'],
        );
    }
}
