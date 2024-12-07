# # GetPromoDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Идентификатор акции. |
**name** | **string** | Название акции. |
**period** | [**\OpenAPI\Client\Model\PromoPeriodDTO**](PromoPeriodDTO.md) |  |
**participating** | **bool** | Участвует или участвовал ли продавец в этой акции.  Для текущих и будущих акций возвращается со значением &#x60;true&#x60;, если в акции есть товары, которые были добавлены вручную. Если товары не участвуют в акции или добавлены в нее автоматически, параметр возвращается со значением &#x60;false&#x60;.  Для прошедших акций всегда возвращается со значением &#x60;true&#x60;.  Об автоматическом и ручном добавлении товаров в акцию читайте [в Справке Маркета для продавцов](https://yandex.ru/support2/marketplace/ru/marketing/promos/market/index). |
**assortment_info** | [**\OpenAPI\Client\Model\GetPromoAssortmentInfoDTO**](GetPromoAssortmentInfoDTO.md) |  |
**mechanics_info** | [**\OpenAPI\Client\Model\GetPromoMechanicsInfoDTO**](GetPromoMechanicsInfoDTO.md) |  |
**bestseller_info** | [**\OpenAPI\Client\Model\GetPromoBestsellerInfoDTO**](GetPromoBestsellerInfoDTO.md) |  |
**channels** | [**\OpenAPI\Client\Model\ChannelType[]**](ChannelType.md) | Список каналов продвижения товаров. | [optional]
**constraints** | [**\OpenAPI\Client\Model\GetPromoConstraintsDTO**](GetPromoConstraintsDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
