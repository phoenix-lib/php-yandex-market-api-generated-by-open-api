# # OrderItemDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор товара в заказе.  Позволяет идентифицировать товар в рамках данного заказа. |
**offer_id** | **string** | Ваш :no-translate[SKU] — идентификатор товара в вашей системе.  Правила использования :no-translate[SKU]:  * У каждого товара :no-translate[SKU] должен быть свой.  * Уже заданный :no-translate[SKU] нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  :no-translate[SKU] товара можно изменить в кабинете продавца на Маркете. О том, как это сделать, читайте [в Справке Маркета для продавцов](https://yandex.ru/support2/marketplace/ru/assortment/operations/edit-sku).  [Что такое :no-translate[SKU] и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields) |
**offer_name** | **string** | Название товара. |
**price** | **float** | Цена на товар в валюте заказа без учета вознаграждения продавцу за скидки по промокодам, купонам и акциям (параметр &#x60;subsidies&#x60;).  Включает НДС. |
**buyer_price** | **float** | Цена на товар в валюте покупателя. В цене уже учтены скидки по:  * акциям; * купонам; * промокодам. |
**buyer_price_before_discount** | **float** | Стоимость товара в валюте покупателя до применения скидок по:  * акциям; * купонам; * промокодам. |
**price_before_discount** | **float** | Стоимость товара в валюте магазина до применения скидок. | [optional]
**count** | **int** | Количество единиц товара. |
**vat** | [**\OpenAPI\Client\Model\OrderVatType**](OrderVatType.md) |  |
**shop_sku** | **string** | Ваш :no-translate[SKU] — идентификатор товара в вашей системе.  Правила использования :no-translate[SKU]:  * У каждого товара :no-translate[SKU] должен быть свой.  * Уже заданный :no-translate[SKU] нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  :no-translate[SKU] товара можно изменить в кабинете продавца на Маркете. О том, как это сделать, читайте [в Справке Маркета для продавцов](https://yandex.ru/support2/marketplace/ru/assortment/operations/edit-sku).  [Что такое :no-translate[SKU] и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields) | [optional]
**subsidy** | **float** | {% note warning \&quot;Вместо него используйте &#x60;subsidies&#x60;.\&quot; %}     {% endnote %}  Общее вознаграждение продавцу за DBS-доставку и все скидки на товар:  * по промокодам; * по купонам; * по баллам Плюса; * по акциям. | [optional]
**partner_warehouse_id** | **string** | Идентификатор склада в системе магазина, на который сформирован заказ. | [optional]
**promos** | [**\OpenAPI\Client\Model\OrderItemPromoDTO[]**](OrderItemPromoDTO.md) | Информация о вознаграждениях продавцу за скидки на товар по промокодам, купонам и акциям. | [optional]
**instances** | [**\OpenAPI\Client\Model\OrderItemInstanceDTO[]**](OrderItemInstanceDTO.md) | Информация о маркировке единиц товара.  Возвращаются данные для маркировки, переданные в запросе [PUT campaigns/{campaignId}/orders/{orderId}/identifiers](../../reference/orders/provideOrderItemIdentifiers.md).  Если магазин еще не передавал коды для этого заказа, &#x60;instances&#x60; отсутствует. | [optional]
**details** | [**\OpenAPI\Client\Model\OrderItemDetailDTO[]**](OrderItemDetailDTO.md) | {% note warning \&quot;Для получения информации о невыкупах и возвратах используйте [GET campaigns/{campaignId}/returns](../../reference/orders/getReturns.md).\&quot; %}     {% endnote %}  Информация о невыкупленных или возвращенных товарах в заказе. | [optional]
**subsidies** | [**\OpenAPI\Client\Model\OrderItemSubsidyDTO[]**](OrderItemSubsidyDTO.md) | Список субсидий по типам. | [optional]
**required_instance_types** | [**\OpenAPI\Client\Model\OrderItemInstanceType[]**](OrderItemInstanceType.md) | Список необходимых маркировок товара. | [optional]
**tags** | [**\OpenAPI\Client\Model\OrderItemTagType[]**](OrderItemTagType.md) | Признаки товара. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
