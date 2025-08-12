# # CampaignDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | Название магазина. | [optional]
**id** | **int** | Идентификатор кампании.  Его также можно найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. | [optional]
**client_id** | **int** | Идентификатор плательщика в Яндекс Балансе. | [optional]
**business** | [**\OpenAPI\Client\Model\BusinessDTO**](BusinessDTO.md) |  | [optional]
**placement_type** | [**\OpenAPI\Client\Model\PlacementType**](PlacementType.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
