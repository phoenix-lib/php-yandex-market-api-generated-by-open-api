# # CreateSizeTableDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**size_parameter_id** | **int** | Идентификатор размерной характеристики, к которой относятся размеры из таблицы. |
**size_table_name** | **string** | Название таблицы размеров. Пробелы в начале и в конце удаляются. Название из одних пробелов — ошибка &#x60;INVALID_REQUEST&#x60;. |
**rows** | [**\OpenAPI\Client\Model\SizeTableRowDTO[]**](SizeTableRowDTO.md) | Строки таблицы: каждая описывает один размер. При сохранении порядок строк может измениться. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
