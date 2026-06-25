# # CommentDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор комментария к ответу. |
**text** | **string** | Текстовое содержимое. |
**status** | [**\OpenAPI\Client\Model\QuestionsTextContentModerationStatusType**](QuestionsTextContentModerationStatusType.md) |  |
**answer_id** | **int** | Идентификатор ответа на вопрос. |
**created_at** | **\DateTime** | Дата создания комментария. |
**can_modify** | **bool** | Может ли продавец изменять комментарий или удалять его. | [optional]
**parent_id** | **int** | Идентификатор комментария к ответу. | [optional]
**author** | [**\OpenAPI\Client\Model\QuestionsTextContentAuthorDTO**](QuestionsTextContentAuthorDTO.md) |  | [optional]
**votes** | [**\OpenAPI\Client\Model\VotesDTO**](VotesDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
