# # PromoOfferDiscountParamsDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**price** | **int** | Зачеркнутая цена — та, по которой товар продавался до акции.  Указывается в рублях.  Возвращается, только если товар участвует в акции. | [optional]
**promo_price** | **int** | Цена по акции — та, по которой вы хотите продавать товар.  Указывается в рублях.  Возвращается, только если товар участвует в акции. | [optional]
**max_promo_price** | **int** | Максимально возможная цена для участия в акции. Если значение не заполнено, ограничение отсутствует.  Указывается в рублях.  Для акции «Бестселлеры Маркета» пороги по уровням возвращаются в параметре &#x60;bestPriceLevels&#x60;. | [optional]
**best_price_levels** | [**\OpenAPI\Client\Model\PromoOfferBestPriceLevelsDTO**](PromoOfferBestPriceLevelsDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
