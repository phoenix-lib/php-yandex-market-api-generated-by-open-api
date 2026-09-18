# # GetChatsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_ids** | **int[]** | {% note warning \&quot;Параметр устарел и будет отключен 19.10.2026.\&quot; %}  Вместо него используйте &#x60;contexts&#x60;.  {% endnote %}  Фильтр по идентификаторам заказов на Маркете. | [optional]
**contexts** | [**\OpenAPI\Client\Model\ChatContextDTO[]**](ChatContextDTO.md) | Фильтр по контексту чата. | [optional]
**context_types** | [**\OpenAPI\Client\Model\ChatContextType[]**](ChatContextType.md) | Фильтр по типу контекста чата. | [optional]
**types** | [**\OpenAPI\Client\Model\ChatType[]**](ChatType.md) | Фильтр по типам чатов. | [optional]
**statuses** | [**\OpenAPI\Client\Model\ChatStatusType[]**](ChatStatusType.md) | Фильтр по статусам чатов. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
