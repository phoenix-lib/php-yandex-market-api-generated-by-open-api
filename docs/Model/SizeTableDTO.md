# # SizeTableDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**size_table_id** | **int** | Идентификатор таблицы размеров. |
**size_table_name** | **string** | Название таблицы размеров. |
**size_table_type** | [**\OpenAPI\Client\Model\SizeTableType**](SizeTableType.md) |  |
**size_parameter_id** | **int** | Идентификатор размерной характеристики, к которой относятся размеры из таблицы. |
**editable** | **bool** | Может ли бизнес редактировать таблицу: &#x60;true&#x60; — для таблиц, созданных бизнесом, &#x60;false&#x60; — для таблиц Маркета. |
**size_charts** | [**\OpenAPI\Client\Model\SizeChartDTO[]**](SizeChartDTO.md) | Колонки таблицы: размерные сетки и обмеры. Колонки без значений не возвращаются. |
**key** | [**\OpenAPI\Client\Model\SizeTableKeyDTO**](SizeTableKeyDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
