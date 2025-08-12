# # GetChatInfoDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chat_id** | **int** | Идентификатор чата. |
**order_id** | **int** | Идентификатор заказа. | [optional]
**context** | [**\OpenAPI\Client\Model\ChatFullContextDTO**](ChatFullContextDTO.md) |  |
**type** | [**\OpenAPI\Client\Model\ChatType**](ChatType.md) |  |
**status** | [**\OpenAPI\Client\Model\ChatStatusType**](ChatStatusType.md) |  |
**created_at** | **\DateTime** | Дата и время создания чата.  Формат даты: :no-translate[ISO 8601] со смещением относительно :no-translate[UTC]. |
**updated_at** | **\DateTime** | Дата и время последнего сообщения в чате.  Формат даты: :no-translate[ISO 8601] со смещением относительно :no-translate[UTC]. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
