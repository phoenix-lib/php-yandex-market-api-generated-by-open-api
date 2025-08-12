# # GetSupplyRequestsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_ids** | **int[]** | Идентификаторы заявок. | [optional]
**request_date_from** | **\DateTime** | Дата начала периода для фильтрации заявок. | [optional]
**request_date_to** | **\DateTime** | Дата окончания периода для фильтрации заявок. | [optional]
**request_types** | [**\OpenAPI\Client\Model\SupplyRequestType[]**](SupplyRequestType.md) | Типы заявок для фильтрации. | [optional]
**request_subtypes** | [**\OpenAPI\Client\Model\SupplyRequestSubType[]**](SupplyRequestSubType.md) | Подтипы заявок для фильтрации. | [optional]
**request_statuses** | [**\OpenAPI\Client\Model\SupplyRequestStatusType[]**](SupplyRequestStatusType.md) | Статусы заявок для фильтрации. | [optional]
**sorting** | [**\OpenAPI\Client\Model\SupplyRequestSortingDTO**](SupplyRequestSortingDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
