# # GetPartnerWarehousesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**warehouse_ids** | **int[]** | Список идентификаторов складов, которые необходимо вернуть.  Если параметр не указан, возвращаются все склады кабинета. | [optional]
**components** | [**\OpenAPI\Client\Model\PartnerWarehouseComponentType[]**](PartnerWarehouseComponentType.md) | Свойства складов, которые необходимо вернуть. Если какое-то значение параметра не задано, этой информации в ответе не будет.  Передавайте параметр, только если нужна информация, которую он возвращает. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
