# # LogisticPointDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**logistic_point_id** | **int** | Идентификатор пункта выдачи.  Его можно узнать с помощью метода [POST v1/businesses/{businessId}/logistics-points](../../reference/logistic-points/getLogisticPoints.md). |
**brand** | [**\OpenAPI\Client\Model\LogisticPointBrandType**](LogisticPointBrandType.md) |  |
**address** | [**\OpenAPI\Client\Model\LogisticPointAddressDTO**](LogisticPointAddressDTO.md) |  |
**working_schedule** | [**\OpenAPI\Client\Model\LogisticPointScheduleDTO**](LogisticPointScheduleDTO.md) |  |
**delivery_restrictions** | [**\OpenAPI\Client\Model\LogisticPointDeliveryRestrictionDTO**](LogisticPointDeliveryRestrictionDTO.md) |  |
**storage_period** | **int** | Срок хранения заказа в пункте выдачи.  Указывается в днях. |
**features** | [**\OpenAPI\Client\Model\LogisticPointFeatureType[]**](LogisticPointFeatureType.md) | Свойства пункта выдачи. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
