# # GenerateUnitedNettingReportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_id** | **int** | Идентификатор кабинета. |
**date_time_from** | **\DateTime** | Начало периода, включительно. | [optional]
**date_time_to** | **\DateTime** | Конец периода, включительно. Максимальный период — 3 месяца. | [optional]
**date_from** | **\DateTime** | Начало периода, включительно. | [optional]
**date_to** | **\DateTime** | Конец периода, включительно. Максимальный период — 3 месяца. | [optional]
**bank_order_id** | **int** | Номер платежного поручения. | [optional]
**bank_order_date_time** | **\DateTime** | Дата платежного поручения. | [optional]
**month_of_year** | [**\OpenAPI\Client\Model\MonthOfYearDTO**](MonthOfYearDTO.md) |  | [optional]
**placement_programs** | [**\OpenAPI\Client\Model\PlacementType[]**](PlacementType.md) | Список моделей, которые нужны в отчете. | [optional]
**inns** | **string[]** | Список ИНН, которые нужны в отчете. | [optional]
**campaign_ids** | **int[]** | Список идентификаторов кампании тех магазинов, которые нужны в отчете.  Их можно узнать с помощью запроса [GET campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не используйте вместо них идентификаторы магазинов, которые указаны в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
