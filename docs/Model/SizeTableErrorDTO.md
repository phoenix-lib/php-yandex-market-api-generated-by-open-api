# # SizeTableErrorDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | [**\OpenAPI\Client\Model\SizeTableErrorCodeType**](SizeTableErrorCodeType.md) |  |
**row_index** | **int** | Номер строки с ошибкой в &#x60;rows&#x60; запроса, начиная с 0. Может не совпадать с &#x60;rowIndex&#x60; сохраненной таблицы. | [optional]
**size_chart_id** | **int** | Идентификатор размерной сетки или обмера, в колонке которого ошибка. | [optional]
**size_chart_ids** | **int[]** | Идентификаторы размерных сеток и обмеров, в колонках которых ошибка. | [optional]
**size_chart_names** | **string[]** | Названия колонок из &#x60;sizeChartName&#x60; запроса, которым не нашлось ровно одной размерной сетки или обмера. | [optional]
**row_indices** | **int[]** | Номера совпадающих строк в &#x60;rows&#x60; запроса, начиная с 0. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
