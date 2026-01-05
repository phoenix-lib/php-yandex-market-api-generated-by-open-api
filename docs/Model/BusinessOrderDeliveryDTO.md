# # BusinessOrderDeliveryDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\OpenAPI\Client\Model\OrderDeliveryType**](OrderDeliveryType.md) |  |
**service_name** | **string** | Название службы доставки. |
**delivery_service_id** | **int** | Идентификатор службы доставки. |
**warehouse_id** | **string** | Идентификатор склада в системе магазина, на который сформирован заказ. | [optional]
**delivery_partner_type** | [**\OpenAPI\Client\Model\OrderDeliveryPartnerType**](OrderDeliveryPartnerType.md) |  |
**dispatch_type** | [**\OpenAPI\Client\Model\OrderDeliveryDispatchType**](OrderDeliveryDispatchType.md) |  | [optional]
**dates** | [**\OpenAPI\Client\Model\BusinessOrderDeliveryDatesDTO**](BusinessOrderDeliveryDatesDTO.md) |  |
**shipment** | [**\OpenAPI\Client\Model\BusinessOrderShipmentDTO**](BusinessOrderShipmentDTO.md) |  | [optional]
**courier** | [**\OpenAPI\Client\Model\BusinessOrderCourierDeliveryDTO**](BusinessOrderCourierDeliveryDTO.md) |  | [optional]
**pickup** | [**\OpenAPI\Client\Model\BusinessOrderPickupDeliveryDTO**](BusinessOrderPickupDeliveryDTO.md) |  | [optional]
**transfer** | [**\OpenAPI\Client\Model\BusinessOrderTransferDTO**](BusinessOrderTransferDTO.md) |  | [optional]
**boxes_layout** | [**\OpenAPI\Client\Model\BusinessOrderBoxLayoutDTO[]**](BusinessOrderBoxLayoutDTO.md) | Раскладка товаров по коробкам. | [optional]
**tracks** | [**\OpenAPI\Client\Model\OrderTrackDTO[]**](OrderTrackDTO.md) | Информация для отслеживания посылки. | [optional]
**estimated** | **bool** | Приблизительная ли дата доставки. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
