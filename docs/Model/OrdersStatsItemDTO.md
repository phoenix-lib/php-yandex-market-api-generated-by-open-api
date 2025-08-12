# # OrdersStatsItemDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offer_name** | **string** | Название товара. | [optional]
**market_sku** | **int** | Идентификатор карточки товара на Маркете. | [optional]
**shop_sku** | **string** | Ваш :no-translate[SKU] — идентификатор товара в вашей системе.  Правила использования :no-translate[SKU]:  * У каждого товара :no-translate[SKU] должен быть свой.  * Уже заданный :no-translate[SKU] нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  :no-translate[SKU] товара можно изменить в кабинете продавца на Маркете. О том, как это сделать, читайте [в Справке Маркета для продавцов](https://yandex.ru/support2/marketplace/ru/assortment/operations/edit-sku).  [Что такое :no-translate[SKU] и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields) | [optional]
**count** | **int** | Количество единиц товара с учетом удаленных единиц.  Если из заказа удалены все единицы товара, он попадет только в список &#x60;initialItems&#x60;. | [optional]
**prices** | [**\OpenAPI\Client\Model\OrdersStatsPriceDTO[]**](OrdersStatsPriceDTO.md) | Цена или скидки на товар. | [optional]
**warehouse** | [**\OpenAPI\Client\Model\OrdersStatsWarehouseDTO**](OrdersStatsWarehouseDTO.md) |  | [optional]
**details** | [**\OpenAPI\Client\Model\OrdersStatsDetailsDTO[]**](OrdersStatsDetailsDTO.md) | Информация об удалении товара из заказа. | [optional]
**cis_list** | **string[]** | Список кодов идентификации товара в системе [:no-translate[«Честный ЗНАК»]](https://честныйзнак.рф/) или [:no-translate[«ASL BELGISI»]](https://aslbelgisi.uz) (для продавцов :no-translate[Market Yandex Go]). | [optional]
**initial_count** | **int** | Первоначальное количество единиц товара. | [optional]
**bid_fee** | **int** | Списанная ставка ближайшего конкурента.  Указывается в процентах от стоимости товара и умножается на 100. Например, ставка 5% обозначается как 500. | [optional]
**cofinance_threshold** | **float** | Порог для скидок с Маркетом на момент оформления заказа. [Что это такое?](https://yandex.ru/support/marketplace/marketing/smart-pricing.html#sponsored-discounts)  Точность — два знака после запятой. | [optional]
**cofinance_value** | **float** | Скидка с Маркетом. [Что это такое?](https://yandex.ru/support/marketplace/marketing/smart-pricing.html#sponsored-discounts)  Точность — два знака после запятой. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
