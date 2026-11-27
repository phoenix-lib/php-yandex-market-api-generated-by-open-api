# # SuggestSizeTablesResultDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**size_tables** | [**\OpenAPI\Client\Model\SizeTableDTO[]**](SizeTableDTO.md) | Подходящие таблицы размеров: сначала созданные бизнесом, затем брендовые, затем стандартные; внутри каждой группы — по убыванию идентификатора. |
**paging** | [**\OpenAPI\Client\Model\PackagingForwardScrollingPagerDTO**](PackagingForwardScrollingPagerDTO.md) |  |
**size_parameter_id** | **int** | Идентификатор размерной характеристики категории. Отсутствует, если у категории нет размерной характеристики — тогда и таблиц нет. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
