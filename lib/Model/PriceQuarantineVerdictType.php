<?php
/**
 * PriceQuarantineVerdictType
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
 * PriceQuarantineVerdictType Class Doc Comment
 *
 * @category Class
 * @description Типы карантина:  * &#x60;PRICE_CHANGE&#x60; — новая цена слишком сильно отличается от прежней. В поле &#x60;params&#x60; будет  новая цена &#x60;CURRENT_PRICE&#x60; и последняя цена до попадания в карантин &#x60;LAST_VALID_PRICE&#x60;. * &#x60;LOW_PRICE&#x60; — установленная цена слишком сильно отличается от рыночной. В поле &#x60;params&#x60; будет установленная вами цена &#x60;CURRENT_PRICE&#x60; и порог попадания в карантин &#x60;MIN_PRICE&#x60;. * &#x60;LOW_PRICE_PROMO&#x60; — цена после применения акций слишком сильно отличается от рыночной. В поле &#x60;params&#x60; будет цена после применения акций &#x60;CURRENT_PRICE&#x60; и порог попадания в карантин &#x60;MIN_PRICE&#x60;.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PriceQuarantineVerdictType
{
    /**
     * Possible values of this enum
     */
    public const PRICE_CHANGE = 'PRICE_CHANGE';

    public const LOW_PRICE = 'LOW_PRICE';

    public const LOW_PRICE_PROMO = 'LOW_PRICE_PROMO';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PRICE_CHANGE,
            self::LOW_PRICE,
            self::LOW_PRICE_PROMO
        ];
    }
}


