# # ChatMessagesResultDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | [**\OpenAPI\Client\Model\ChatFullContextDTO**](ChatFullContextDTO.md) |  |
**messages** | [**\OpenAPI\Client\Model\ChatMessageDTO[]**](ChatMessageDTO.md) | Информация о сообщениях. |
**order_id** | **int** | {% note warning \&quot;Параметр устарел и будет отключен 12.10.2026.\&quot; %}  Вместо него используйте &#x60;context&#x60;.  {% endnote %}  Идентификатор заказа. | [optional]
**paging** | [**\OpenAPI\Client\Model\PackagingForwardScrollingPagerDTO**](PackagingForwardScrollingPagerDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
