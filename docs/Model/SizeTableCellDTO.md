# # SizeTableCellDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**size_chart_id** | **int** | Идентификатор размерной сетки или обмера из ответа метода &#x60;POST v2/businesses/{businessId}/size-tables/charts&#x60;. У сеток и обмеров общее пространство идентификаторов. Обязателен, если не передан &#x60;sizeChartName&#x60;. | [optional]
**size_chart_name** | **string** | Название размерной сетки или обмера из ответа метода &#x60;POST v2/businesses/{businessId}/size-tables/charts&#x60;. Сравнивается без учета регистра и пробелов в начале и в конце. Обязательно, если не передан &#x60;sizeChartId&#x60;. | [optional]
**size_value_id** | **int** | Идентификатор значения из справочника размерной сетки. Справочник есть только у стандартных размерных сеток Маркета. | [optional]
**size_value** | **string** | Значение размера или обмера. В колонках без справочника — не длиннее 20 символов. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
