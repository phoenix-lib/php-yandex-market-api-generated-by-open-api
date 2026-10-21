# # UpdateWarehouseModelStatusRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**partner_warehouse_id** | **int** | Идентификатор склада.  Чтобы узнать идентификатор склада, воспользуйтесь запросом [POST v3/businesses/{businessId}/warehouses](../../reference/warehouses/getPartnerWarehouses.md). |
**model** | [**\OpenAPI\Client\Model\WarehouseProgramType**](WarehouseProgramType.md) |  |
**enabled** | **bool** | Статус модели работы склада:  * &#x60;true&#x60; — включена. * &#x60;false&#x60; — отключена. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
