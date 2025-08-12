# # GetWarehouseStocksRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stocks_warehouse_id** | **int** | Идентификатор склада.  Если параметр указан, возвращаются только товары на переданном складе.  **Для модели :no-translate[FBY]:** получить список складов Маркета можно с помощью метода [GET warehouses](../../reference/warehouses/getFulfillmentWarehouses.md). | [optional]
**has_stocks** | **bool** | Фильтр по наличию товаров. Используйте только вместе со &#x60;stocksWarehouseId&#x60;.  Передайте &#x60;false&#x60;, чтобы получить информацию о товарах, которых нет в наличие. При значении &#x60;true&#x60; возвращаются данные о товарах, которые есть на указанном складе. | [optional]
**with_turnover** | **bool** | **Только для модели FBY**  Возвращать ли информацию по оборачиваемости.  Значение по умолчанию: &#x60;false&#x60;. Если информация нужна, передайте значение &#x60;true&#x60;. | [optional] [default to false]
**archived** | **bool** | Фильтр по нахождению в архиве.  Передайте &#x60;true&#x60;, чтобы получить информацию об остатках товаров, которые находятся в архиве. Если фильтр не заполнен или передано &#x60;false&#x60;, в ответе возвращается информация о товарах, которые не находятся в архиве. | [optional]
**offer_ids** | **string[]** | Фильтр по вашим :no-translate[SKU] товаров.  Возвращается информация об остатках всех переданных :no-translate[SKU], включая товары в архиве.  {% note warning \&quot;Такой список возвращается только целиком\&quot; %}  Если вы запрашиваете информацию по конкретным :no-translate[SKU], не заполняйте:  * &#x60;page_token&#x60; * &#x60;limit&#x60; * &#x60;archived&#x60; * &#x60;stocksOnWarehouse&#x60;  {% endnote %}    | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
