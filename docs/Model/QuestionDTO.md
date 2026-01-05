# # QuestionDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**question_identifiers** | [**\OpenAPI\Client\Model\QuestionIdentifiersDTO**](QuestionIdentifiersDTO.md) |  |
**business_id** | **int** | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) |
**text** | **string** | Текстовое содержимое. |
**created_at** | **\DateTime** | Дата и время создания вопроса. |
**votes** | [**\OpenAPI\Client\Model\VotesDTO**](VotesDTO.md) |  |
**author** | [**\OpenAPI\Client\Model\QuestionsTextContentAuthorDTO**](QuestionsTextContentAuthorDTO.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
