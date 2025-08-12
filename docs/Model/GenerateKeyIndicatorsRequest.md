# # GenerateKeyIndicatorsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_id** | **int** | Идентификатор кабинета.  Указывается, если нужно составить отчет по всем магазинам в кабинете. В запросе обязательно должен быть либо &#x60;businessId&#x60;, либо &#x60;campaignId&#x60;, но не оба сразу. | [optional]
**campaign_id** | **int** | Идентификатор кампании.  Указывается, если нужно составить отчет по конкретному магазину. В запросе обязательно должен быть либо &#x60;businessId&#x60;, либо &#x60;campaignId&#x60;, но не оба сразу.  Его можно узнать с помощью запроса [GET campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. | [optional]
**detalization_level** | [**\OpenAPI\Client\Model\KeyIndicatorsReportDetalizationLevelType**](KeyIndicatorsReportDetalizationLevelType.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
