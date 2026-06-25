# # GetDeliveryOptionsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**items** | [**\OpenAPI\Client\Model\GetDeliveryOptionsItemDTO[]**](GetDeliveryOptionsItemDTO.md) | Товары на складах, для которых нужно вернуть варианты доставки.  В рамках одного запроса все значения &#x60;offerId&#x60; должны быть уникальными. Не допускается передача двух объектов с одинаковым &#x60;offerId&#x60;. |
**pickup_delivery** | [**\OpenAPI\Client\Model\PickupDeliveryParametersDTO**](PickupDeliveryParametersDTO.md) |  | [optional]
**courier_delivery** | [**\OpenAPI\Client\Model\CourierDeliveryParametersDTO**](CourierDeliveryParametersDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
