# # SupplyRequestDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | [**\OpenAPI\Client\Model\SupplyRequestIdDTO**](SupplyRequestIdDTO.md) |  |
**type** | [**\OpenAPI\Client\Model\SupplyRequestType**](SupplyRequestType.md) |  |
**subtype** | [**\OpenAPI\Client\Model\SupplyRequestSubType**](SupplyRequestSubType.md) |  |
**status** | [**\OpenAPI\Client\Model\SupplyRequestStatusType**](SupplyRequestStatusType.md) |  |
**updated_at** | **\DateTime** | Дата и время последнего обновления заявки. |
**counters** | [**\OpenAPI\Client\Model\SupplyRequestCountersDTO**](SupplyRequestCountersDTO.md) |  |
**target_location** | [**\OpenAPI\Client\Model\SupplyRequestLocationDTO**](SupplyRequestLocationDTO.md) |  |
**parent_link** | [**\OpenAPI\Client\Model\SupplyRequestReferenceDTO**](SupplyRequestReferenceDTO.md) |  | [optional]
**children_links** | [**\OpenAPI\Client\Model\SupplyRequestReferenceDTO[]**](SupplyRequestReferenceDTO.md) | Ссылки на дочерние заявки. | [optional]
**transit_location** | [**\OpenAPI\Client\Model\SupplyRequestLocationDTO**](SupplyRequestLocationDTO.md) |  | [optional]
**etrn_identifier** | [**\OpenAPI\Client\Model\EtrnIdentifierDTO**](EtrnIdentifierDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
