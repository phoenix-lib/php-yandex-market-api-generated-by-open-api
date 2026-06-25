# # GoodsFeedbackCommentDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор комментария к отзыву. |
**text** | **string** | Текст комментария.  Не должен содержать контакты магазина и ссылки на сайты, кроме Маркета. |
**status** | [**\OpenAPI\Client\Model\GoodsFeedbackCommentStatusType**](GoodsFeedbackCommentStatusType.md) |  |
**feedback_id** | **int** | Идентификатор отзыва. |
**can_modify** | **bool** | Может ли продавец изменять комментарий или удалять его. | [optional]
**parent_id** | **int** | Идентификатор родительского комментария. | [optional]
**author** | [**\OpenAPI\Client\Model\GoodsFeedbackCommentAuthorDTO**](GoodsFeedbackCommentAuthorDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
