# # GetSizeTablesResultDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**size_tables** | [**\OpenAPI\Client\Model\SizeTableDTO[]**](SizeTableDTO.md) | Таблицы размеров: сначала созданные бизнесом, затем брендовые, затем стандартные; внутри каждой группы — по убыванию идентификатора. |
**not_found_size_table_ids** | **int[]** | Идентификаторы из запроса, по которым таблицу вернуть не удалось: такой таблицы нет или она принадлежит другому бизнесу.  Заполняется только на первой странице. На следующих страницах и в запросе без &#x60;sizeTableIds&#x60; список пустой. |
**paging** | [**\OpenAPI\Client\Model\PackagingForwardScrollingPagerDTO**](PackagingForwardScrollingPagerDTO.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
