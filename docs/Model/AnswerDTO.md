# # AnswerDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор ответа на вопрос. |
**text** | **string** | Текстовое содержимое. |
**can_modify** | **bool** | Может ли продавец изменять комментарий или удалять его. |
**status** | [**\OpenAPI\Client\Model\QuestionsTextContentModerationStatusType**](QuestionsTextContentModerationStatusType.md) |  |
**question_id** | **int** | Идентификатор вопроса. |
**created_at** | **\DateTime** | Дата и время создания ответа. |
**votes** | [**\OpenAPI\Client\Model\VotesDTO**](VotesDTO.md) |  |
**author** | [**\OpenAPI\Client\Model\QuestionsTextContentAuthorDTO**](QuestionsTextContentAuthorDTO.md) |  | [optional]
**comments** | [**\OpenAPI\Client\Model\CommentDTO[]**](CommentDTO.md) | Список комментариев. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
