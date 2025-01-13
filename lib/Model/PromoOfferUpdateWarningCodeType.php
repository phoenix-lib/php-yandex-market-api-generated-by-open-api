<?php
/**
 * PromoOfferUpdateWarningCodeType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Партнерский API Маркета
 *
 * API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.  В числе возможностей интеграции:  * управление каталогом товаров и витриной,  * обработка заказов,  * изменение настроек магазина,  * получение отчетов.
 *
 * The version of the OpenAPI document: LATEST
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PromoOfferUpdateWarningCodeType Class Doc Comment
 *
 * @category Class
 * @description Предупреждение, которое появилось при добавлении товара:  * &#x60;DEEP_DISCOUNT_OFFER&#x60; — большая разница с ценой в каталоге. Проверьте, нет ли ошибки.  * &#x60;CATALOG_PRICE_IS_LOWER_THAN_PROMO&#x60; — цена, которая действует во всех магазинах, ниже цены по акции. У товара не будет отображаться цена по акции.  * &#x60;SHOP_PRICES_ARE_LOWER_THAN_PROMO&#x60; — цена в отдельном магазине ниже цены по акции. У товара в акции будет отображаться цена в магазине. Для остальных магазинов будет действовать цена по акции.  * &#x60;PROMOCODE_PRICE_MORE_THAN_MAX_FAIR_PRICE&#x60; — в отдельном магазине цена с учетом промокода выше максимально возможной цены. Товар не будет участвовать в акции.  * &#x60;SHOP_OFFER_NOT_ELIGIBLE_FOR_PROMO&#x60; — товар в отдельном магазине не подходит под условия акции.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PromoOfferUpdateWarningCodeType
{
    /**
     * Possible values of this enum
     */
    public const DEEP_DISCOUNT_OFFER = 'DEEP_DISCOUNT_OFFER';

    public const CATALOG_PRICE_IS_LOWER_THAN_PROMO = 'CATALOG_PRICE_IS_LOWER_THAN_PROMO';

    public const SHOP_PRICES_ARE_LOWER_THAN_PROMO = 'SHOP_PRICES_ARE_LOWER_THAN_PROMO';

    public const PROMOCODE_PRICE_MORE_THAN_MAX_FAIR_PRICE = 'PROMOCODE_PRICE_MORE_THAN_MAX_FAIR_PRICE';

    public const SHOP_OFFER_NOT_ELIGIBLE_FOR_PROMO = 'SHOP_OFFER_NOT_ELIGIBLE_FOR_PROMO';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DEEP_DISCOUNT_OFFER,
            self::CATALOG_PRICE_IS_LOWER_THAN_PROMO,
            self::SHOP_PRICES_ARE_LOWER_THAN_PROMO,
            self::PROMOCODE_PRICE_MORE_THAN_MAX_FAIR_PRICE,
            self::SHOP_OFFER_NOT_ELIGIBLE_FOR_PROMO
        ];
    }
}


