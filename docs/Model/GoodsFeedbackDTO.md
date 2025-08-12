# # GoodsFeedbackDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feedback_id** | **int** | Идентификатор отзыва. |
**created_at** | **\DateTime** | Дата и время создания отзыва. |
**need_reaction** | **bool** | Прочитан ли отзыв.  Принимает значение &#x60;false&#x60;, если магазин:  * Прочитал отзыв в кабинете продавца на Маркете. * Отметил отзыв прочитанным — метод [POST businesses/{businessId}/goods-feedback/skip-reaction](../../reference/goods-feedback/skipGoodsFeedbacksReaction.md). * Оставил комментарий к отзыву — метод [POST businesses/{businessId}/goods-feedback/comments/update](../../reference/goods-feedback/updateGoodsFeedbackComment.md). |
**identifiers** | [**\OpenAPI\Client\Model\GoodsFeedbackIdentifiersDTO**](GoodsFeedbackIdentifiersDTO.md) |  |
**author** | **string** | Имя автора отзыва. | [optional]
**description** | [**\OpenAPI\Client\Model\GoodsFeedbackDescriptionDTO**](GoodsFeedbackDescriptionDTO.md) |  | [optional]
**media** | [**\OpenAPI\Client\Model\GoodsFeedbackMediaDTO**](GoodsFeedbackMediaDTO.md) |  | [optional]
**statistics** | [**\OpenAPI\Client\Model\GoodsFeedbackStatisticsDTO**](GoodsFeedbackStatisticsDTO.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
