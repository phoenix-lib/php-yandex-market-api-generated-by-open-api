# # GenerateStocksOnWarehousesReportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_id** | **int** | {% note warning \&quot;Отчет об остатках на конкретном складе магазина скоро станет недоступен.\&quot; %}     {% endnote %}  Идентификатор кампании.  Его можно узнать с помощью запроса [GET campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах.  Не передавайте вместе с &#x60;businessId&#x60;. | [optional]
**business_id** | **int** | Идентификатор кабинета, по магазинам которого нужно сформировать отчет (кроме :no-translate[FBY]-магазинов).  Не передавайте вместе с &#x60;campaignId&#x60;. | [optional]
**warehouse_ids** | **int[]** | Фильтр по идентификаторам складов (только модель :no-translate[FBY]). Чтобы узнать идентификатор, воспользуйтесь запросом [GET warehouses](../../reference/warehouses/getFulfillmentWarehouses.md). | [optional]
**report_date** | **\DateTime** | Фильтр по дате (для модели :no-translate[FBY]). В отчет попадут данные за **предшествующий** дате день. | [optional]
**category_ids** | **int[]** | Фильтр по категориям на Маркете (кроме модели :no-translate[FBY]). | [optional]
**has_stocks** | **bool** | Фильтр по наличию остатков (кроме модели :no-translate[FBY]). | [optional]
**campaign_ids** | **int[]** | Фильтр по магазинам для отчета по кабинету (кроме модели :no-translate[FBY]).  Передавайте вместе с &#x60;businessId&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
