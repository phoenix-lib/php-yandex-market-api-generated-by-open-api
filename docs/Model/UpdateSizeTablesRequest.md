# # UpdateSizeTablesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**size_tables** | [**\OpenAPI\Client\Model\UpdateSizeTableDTO[]**](UpdateSizeTableDTO.md) | Таблицы размеров с новым содержимым. Обрабатываются по порядку, каждая независимо от остальных.  Идентификаторы таблиц не должны повторяться в одном запросе. Если идентификаторы повторяются, запрос не обрабатывается.  Суммарно во всех таблицах — не больше 5000 ячеек. Если ячеек больше, запрос не обрабатывается. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
