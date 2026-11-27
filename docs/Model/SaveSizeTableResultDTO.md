# # SaveSizeTableResultDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**size_table_id** | **int** | Идентификатор сохраненной таблицы размеров. | [optional]
**size_table_name** | **string** | Название сохраненной таблицы размеров. | [optional]
**errors** | [**\OpenAPI\Client\Model\SizeTableErrorDTO[]**](SizeTableErrorDTO.md) | Ошибки, из-за которых таблица не сохранена.  Сначала проверяются структура таблицы, ее колонки и значения ячеек — ошибки &#x60;INVALID_REQUEST&#x60;, &#x60;UNKNOWN_SIZE_CHART&#x60; и &#x60;INVALID_SIZE_VALUE&#x60;. Если они есть, остальные проверки не выполняются, поэтому после исправления могут вернуться другие ошибки. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
