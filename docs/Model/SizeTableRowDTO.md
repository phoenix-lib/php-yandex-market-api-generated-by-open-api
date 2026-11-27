# # SizeTableRowDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**values** | [**\OpenAPI\Client\Model\SizeTableCellDTO[]**](SizeTableCellDTO.md) | Ячейки строки в любом порядке. Каждая размерная сетка или обмер — не больше одного раза в строке, иначе вернется ошибка &#x60;INVALID_REQUEST&#x60;.  Ячейку без значения можно не передавать или передать с пустым &#x60;sizeValue&#x60;: она сохранится как «нет значения». В обязательной размерной сетке это ошибка &#x60;EMPTY_CELL&#x60;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
