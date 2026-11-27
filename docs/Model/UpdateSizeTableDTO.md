# # UpdateSizeTableDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**size_table_id** | **int** | Идентификатор таблицы размеров, созданной бизнесом. |
**size_table_name** | **string** | Новое название таблицы размеров. Пробелы в начале и в конце удаляются. Название из одних пробелов — ошибка &#x60;INVALID_REQUEST&#x60;. |
**rows** | [**\OpenAPI\Client\Model\SizeTableRowDTO[]**](SizeTableRowDTO.md) | Все строки таблицы: каждая описывает один размер. Строки и колонки, которых нет в запросе, удаляются. При сохранении порядок строк может измениться. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
