# # CreateReturnDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_return_id** | **string** | Внешний идентификатор возврата в системе магазина. |
**order_id** | **int** | Идентификатор заказа, по которому нужно сделать возврат. |
**items** | [**\OpenAPI\Client\Model\CreateReturnItemDTO[]**](CreateReturnItemDTO.md) | Список товаров в возврате. |
**customer** | [**\OpenAPI\Client\Model\CustomerDTO**](CustomerDTO.md) |  |
**return_option** | [**\OpenAPI\Client\Model\CreateReturnOptionDTO**](CreateReturnOptionDTO.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
