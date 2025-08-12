# # GenerateShipmentListDocumentReportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_id** | **int** | Идентификатор кампании.  Его можно узнать с помощью запроса [GET campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. |
**shipment_id** | **int** | Идентификатор отгрузки.  В запросе обязательно передавайте &#x60;shipmentId&#x60; или &#x60;orderIds&#x60;. | [optional]
**order_ids** | **int[]** | Фильтр по идентификаторам заказа в отгрузке.  В запросе обязательно передавайте &#x60;shipmentId&#x60; или &#x60;orderIds&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
