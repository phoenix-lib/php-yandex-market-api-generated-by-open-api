# # SizeChartInfoDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**size_chart_id** | **int** | Идентификатор размерной сетки или обмера. Передавайте его в &#x60;sizeChartId&#x60; ячейки таблицы. |
**size_chart_name** | **string** | Название размерной сетки или обмера. |
**column_type** | [**\OpenAPI\Client\Model\SizeTableColumnType**](SizeTableColumnType.md) |  |
**required** | **bool** | Обязательная ли размерная сетка. В таблице должна быть хотя бы одна обязательная сетка, а каждую обязательную сетку в таблице нужно заполнить во всех строках. У обмеров всегда &#x60;false&#x60;. |
**size_values** | [**\OpenAPI\Client\Model\SizeChartValueDTO[]**](SizeChartValueDTO.md) | Справочник значений размерной сетки. Заполнен только у стандартных размерных сеток Маркета: в ячейке такой колонки передавайте значение из справочника.  Если список пустой, значение задается текстом. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
