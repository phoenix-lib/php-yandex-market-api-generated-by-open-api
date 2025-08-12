# OpenAPI\Client\OfferMappingsApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOfferMappingEntries()**](OfferMappingsApi.md#getOfferMappingEntries) | **GET** /campaigns/{campaignId}/offer-mapping-entries | Список товаров в каталоге |
| [**getSuggestedOfferMappingEntries()**](OfferMappingsApi.md#getSuggestedOfferMappingEntries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/suggestions | Рекомендованные карточки для товаров |
| [**updateOfferMappingEntries()**](OfferMappingsApi.md#updateOfferMappingEntries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/updates | Добавление и редактирование товаров в каталоге |


## `getOfferMappingEntries()`

```php
getOfferMappingEntries($campaign_id, $offer_id, $shop_sku, $mapping_kind, $status, $availability, $category_id, $vendor, $page_token, $limit): \OpenAPI\Client\Model\GetOfferMappingEntriesResponse
```

Список товаров в каталоге

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getOfferMappingEntries.md) %}  {% note warning \"Какой метод использовать вместо устаревшего\" %}  [POST businesses/{businessId}/offer-mappings](../../reference/business-assortment/getOfferMappings.md)  {% endnote %}  Для каждого товара, который вы размещаете на Маркете, возвращается информация о карточках Маркета, к которым привязан этот товар:  * Идентификатор текущей карточки (marketSku), карточки, которая проходит модерацию и последней отклоненной карточки. * Описание товара, которое указано на карточке Маркета. Например, размер упаковки и вес товара.  Результаты возвращаются постранично. Выходные данные содержат идентификатор следующей страницы.  {% note info \"Как считается количество товаров в каталоге магазина\" %}  По данным за последние семь дней (не включая сегодня).  {% endnote %}  |**:no-translate[⚙️] Лимит:** 10 000 товаров в минуту| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OfferMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах.
$offer_id = array('offer_id_example'); // string[] | Идентификатор товара в каталоге.
$shop_sku = array('shop_sku_example'); // string[] | Ваш SKU товара.  Параметр может быть указан несколько раз, например:  ```text translate=no ...shop_sku=123&shop_sku=129&shop_sku=141... ```  В запросе можно указать либо параметр `shopSku`, либо любые параметры для фильтрации товаров. Совместное использование параметра `shopSku` и параметров для фильтрации приведет к ошибке.
$mapping_kind = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OfferMappingKindType(); // \OpenAPI\Client\Model\OfferMappingKindType | Тип маппинга.
$status = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OfferProcessingStatusType()); // \OpenAPI\Client\Model\OfferProcessingStatusType[] | Фильтрация по статусу публикации товара:  * `READY` — товар прошел модерацию. * `IN_WORK` — товар проходит модерацию. * `NEED_CONTENT` — для товара без SKU на Маркете `marketSku` нужно найти карточку самостоятельно или создать ее. * `NEED_INFO` — товар не прошел модерацию из-за ошибок или недостающих сведений в описании товара. * `REJECTED` — товар не прошел модерацию, так как Маркет не планирует размещать подобные товары. * `SUSPENDED` — товар не прошел модерацию, так как Маркет пока не размещает подобные товары. * `OTHER` — товар не прошел модерацию по другой причине.  Можно указать несколько статусов в одном параметре, через запятую, или в нескольких одинаковых параметрах. Например:  ```text translate=no ...status=READY,IN_WORK... ...status=READY&status=IN_WORK... ```  В запросе можно указать либо параметр shopSku, либо любые параметры для фильтрации товаров. Совместное использование параметра shopSku и параметров для фильтрации приведет к ошибке.
$availability = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OfferAvailabilityStatusType()); // \OpenAPI\Client\Model\OfferAvailabilityStatusType[] | Фильтрация по планам поставок товара:  * `ACTIVE` — поставки будут. * `INACTIVE` — поставок не будет: товар есть на складе, но вы больше не планируете его поставлять. * `DELISTED` — архив: товар закончился на складе, и его поставок больше не будет.  Можно указать несколько значений в одном параметре, через запятую, или в нескольких одинаковых параметрах. Например:  ```text translate=no ...availability=INACTIVE,DELISTED... ...availability=INACTIVE&availability=DELISTED... ```  В запросе можно указать либо параметр `shopSku`, либо любые параметры для фильтрации товаров. Совместное использование параметра `shopSku` и параметров для фильтрации приведет к ошибке.
$category_id = array(56); // int[] | Фильтрация по идентификатору категории на Маркете.  Чтобы узнать идентификатор категории, к которой относится товар, воспользуйтесь запросом [POST categories/tree](../../reference/categories/getCategoriesTree.md).  Можно указать несколько идентификаторов в одном параметре, через запятую, или в нескольких одинаковых параметрах. Например:  ```text translate=no ...category_id=14727164,14382343... ...category_id=14727164&category_id=14382343... ```  В запросе можно указать либо параметр `shopSku`, либо любые параметры для фильтрации товаров. Совместное использование параметра `shopSku` и параметров для фильтрации приведет к ошибке.
$vendor = array('vendor_example'); // string[] | Фильтрация по бренду товара.  Можно указать несколько брендов в одном параметре, через запятую, или в нескольких одинаковых параметрах. Например:  ```text translate=no ...vendor=Aqua%20Minerale,Borjomi... ...vendor=Aqua%20Minerale&vendor=Borjomi... ```  Чтобы товар попал в результаты фильтрации, его бренд должен точно совпадать с одним из указанных в запросе. Например, если указан бренд :no-translate[Schwarzkopf], то в результатах не будет товаров :no-translate[Schwarzkopf Professional].  Если в названии бренда есть символы, которые не входят в таблицу :no-translate[ASCII] (в том числе кириллические символы), используйте для них URL-кодирование. Например, пробел — %20, апостроф «'» — %27 и т. д. Подробнее см. в разделе [Кодирование :no-translate[URL] русскоязычной Википедии](https://ru.wikipedia.org/wiki/URL#Кодирование_URL).  В запросе можно указать либо параметр shopSku, либо любые параметры для фильтрации товаров. Совместное использование параметра `shopSku` и параметров для фильтрации приведет к ошибке.
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра :no-translate[`nextPageToken`], полученное при последнем запросе.  Если задан :no-translate[`page_token`] и в запросе есть параметры :no-translate[`page`] и :no-translate[`pageSize`], они игнорируются.
$limit = 20; // int | Количество значений на одной странице.

try {
    $result = $apiInstance->getOfferMappingEntries($campaign_id, $offer_id, $shop_sku, $mapping_kind, $status, $availability, $category_id, $vendor, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferMappingsApi->getOfferMappingEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. | |
| **offer_id** | [**string[]**](../Model/string.md)| Идентификатор товара в каталоге. | [optional] |
| **shop_sku** | [**string[]**](../Model/string.md)| Ваш SKU товара.  Параметр может быть указан несколько раз, например:  &#x60;&#x60;&#x60;text translate&#x3D;no ...shop_sku&#x3D;123&amp;shop_sku&#x3D;129&amp;shop_sku&#x3D;141... &#x60;&#x60;&#x60;  В запросе можно указать либо параметр &#x60;shopSku&#x60;, либо любые параметры для фильтрации товаров. Совместное использование параметра &#x60;shopSku&#x60; и параметров для фильтрации приведет к ошибке. | [optional] |
| **mapping_kind** | [**\OpenAPI\Client\Model\OfferMappingKindType**](../Model/.md)| Тип маппинга. | [optional] |
| **status** | [**\OpenAPI\Client\Model\OfferProcessingStatusType[]**](../Model/\OpenAPI\Client\Model\OfferProcessingStatusType.md)| Фильтрация по статусу публикации товара:  * &#x60;READY&#x60; — товар прошел модерацию. * &#x60;IN_WORK&#x60; — товар проходит модерацию. * &#x60;NEED_CONTENT&#x60; — для товара без SKU на Маркете &#x60;marketSku&#x60; нужно найти карточку самостоятельно или создать ее. * &#x60;NEED_INFO&#x60; — товар не прошел модерацию из-за ошибок или недостающих сведений в описании товара. * &#x60;REJECTED&#x60; — товар не прошел модерацию, так как Маркет не планирует размещать подобные товары. * &#x60;SUSPENDED&#x60; — товар не прошел модерацию, так как Маркет пока не размещает подобные товары. * &#x60;OTHER&#x60; — товар не прошел модерацию по другой причине.  Можно указать несколько статусов в одном параметре, через запятую, или в нескольких одинаковых параметрах. Например:  &#x60;&#x60;&#x60;text translate&#x3D;no ...status&#x3D;READY,IN_WORK... ...status&#x3D;READY&amp;status&#x3D;IN_WORK... &#x60;&#x60;&#x60;  В запросе можно указать либо параметр shopSku, либо любые параметры для фильтрации товаров. Совместное использование параметра shopSku и параметров для фильтрации приведет к ошибке. | [optional] |
| **availability** | [**\OpenAPI\Client\Model\OfferAvailabilityStatusType[]**](../Model/\OpenAPI\Client\Model\OfferAvailabilityStatusType.md)| Фильтрация по планам поставок товара:  * &#x60;ACTIVE&#x60; — поставки будут. * &#x60;INACTIVE&#x60; — поставок не будет: товар есть на складе, но вы больше не планируете его поставлять. * &#x60;DELISTED&#x60; — архив: товар закончился на складе, и его поставок больше не будет.  Можно указать несколько значений в одном параметре, через запятую, или в нескольких одинаковых параметрах. Например:  &#x60;&#x60;&#x60;text translate&#x3D;no ...availability&#x3D;INACTIVE,DELISTED... ...availability&#x3D;INACTIVE&amp;availability&#x3D;DELISTED... &#x60;&#x60;&#x60;  В запросе можно указать либо параметр &#x60;shopSku&#x60;, либо любые параметры для фильтрации товаров. Совместное использование параметра &#x60;shopSku&#x60; и параметров для фильтрации приведет к ошибке. | [optional] |
| **category_id** | [**int[]**](../Model/int.md)| Фильтрация по идентификатору категории на Маркете.  Чтобы узнать идентификатор категории, к которой относится товар, воспользуйтесь запросом [POST categories/tree](../../reference/categories/getCategoriesTree.md).  Можно указать несколько идентификаторов в одном параметре, через запятую, или в нескольких одинаковых параметрах. Например:  &#x60;&#x60;&#x60;text translate&#x3D;no ...category_id&#x3D;14727164,14382343... ...category_id&#x3D;14727164&amp;category_id&#x3D;14382343... &#x60;&#x60;&#x60;  В запросе можно указать либо параметр &#x60;shopSku&#x60;, либо любые параметры для фильтрации товаров. Совместное использование параметра &#x60;shopSku&#x60; и параметров для фильтрации приведет к ошибке. | [optional] |
| **vendor** | [**string[]**](../Model/string.md)| Фильтрация по бренду товара.  Можно указать несколько брендов в одном параметре, через запятую, или в нескольких одинаковых параметрах. Например:  &#x60;&#x60;&#x60;text translate&#x3D;no ...vendor&#x3D;Aqua%20Minerale,Borjomi... ...vendor&#x3D;Aqua%20Minerale&amp;vendor&#x3D;Borjomi... &#x60;&#x60;&#x60;  Чтобы товар попал в результаты фильтрации, его бренд должен точно совпадать с одним из указанных в запросе. Например, если указан бренд :no-translate[Schwarzkopf], то в результатах не будет товаров :no-translate[Schwarzkopf Professional].  Если в названии бренда есть символы, которые не входят в таблицу :no-translate[ASCII] (в том числе кириллические символы), используйте для них URL-кодирование. Например, пробел — %20, апостроф «&#39;» — %27 и т. д. Подробнее см. в разделе [Кодирование :no-translate[URL] русскоязычной Википедии](https://ru.wikipedia.org/wiki/URL#Кодирование_URL).  В запросе можно указать либо параметр shopSku, либо любые параметры для фильтрации товаров. Совместное использование параметра &#x60;shopSku&#x60; и параметров для фильтрации приведет к ошибке. | [optional] |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра :no-translate[&#x60;nextPageToken&#x60;], полученное при последнем запросе.  Если задан :no-translate[&#x60;page_token&#x60;] и в запросе есть параметры :no-translate[&#x60;page&#x60;] и :no-translate[&#x60;pageSize&#x60;], они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetOfferMappingEntriesResponse**](../Model/GetOfferMappingEntriesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSuggestedOfferMappingEntries()`

```php
getSuggestedOfferMappingEntries($campaign_id, $get_suggested_offer_mapping_entries_request): \OpenAPI\Client\Model\GetSuggestedOfferMappingEntriesResponse
```

Рекомендованные карточки для товаров

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getSuggestedOfferMappingEntries.md) %}  Возвращает идентификаторы карточек товаров на Маркете, рекомендованных для ваших товаров.  Каждому товару, который вы размещаете, должна соответствовать карточка товара на Маркете со своим идентификатором — :no-translate[SKU] на Маркете. Он указывается в :no-translate[URL] карточки товара, после :no-translate[«...sku=»], например:  ##https://market.yandex.ru/product--yandex-kniga/484830016?sku=484830016…##  Чтобы получить для товаров рекомендованные :no-translate[SKU] на Маркете, передайте в теле POST-запроса как можно больше информации о них: названия, производителей, штрихкоды, цены и т. д.  Полученные :no-translate[SKU] можно передать вместе с информацией о ваших товарах с помощью запроса [POST businesses/{businessId}/offer-mappings/update](../../reference/business-assortment/updateOfferMappings.md).  В одном запросе можно получить не более 500 рекомендаций.  |**:no-translate[⚙️] Лимит:** 100 000 рекомендаций в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OfferMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах.
$get_suggested_offer_mapping_entries_request = new \OpenAPI\Client\Model\GetSuggestedOfferMappingEntriesRequest(); // \OpenAPI\Client\Model\GetSuggestedOfferMappingEntriesRequest

try {
    $result = $apiInstance->getSuggestedOfferMappingEntries($campaign_id, $get_suggested_offer_mapping_entries_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferMappingsApi->getSuggestedOfferMappingEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. | |
| **get_suggested_offer_mapping_entries_request** | [**\OpenAPI\Client\Model\GetSuggestedOfferMappingEntriesRequest**](../Model/GetSuggestedOfferMappingEntriesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GetSuggestedOfferMappingEntriesResponse**](../Model/GetSuggestedOfferMappingEntriesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOfferMappingEntries()`

```php
updateOfferMappingEntries($campaign_id, $update_offer_mapping_entry_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Добавление и редактирование товаров в каталоге

{% include notitle [:no-translate[access]](../../_auto/method_scopes/updateOfferMappingEntries.md) %}  {% note warning \"Какой метод использовать вместо устаревшего\" %}  [POST businesses/{businessId}/offer-mappings/update](../../reference/business-assortment/updateOfferMappings.md)  {% endnote %}  Добавляет товары, указанные в запросе, в ваш каталог товаров и редактирует уже имеющиеся товары.  Информацию о товарах нужно передать в теле POST-запроса.  У каждого товара должен быть ваш :no-translate[SKU] — уникальный код, который вы используете для идентификации товара:  * Чтобы добавить в каталог новый товар, укажите в параметре `shopSku` ваш :no-translate[SKU], которого еще нет в каталоге. * Чтобы отредактировать товар из каталога, укажите в параметре `shopSku` ваш :no-translate[SKU] этого товара в каталоге.  В обоих случаях в запросе нужно передать полное описание товара, даже если вы хотите изменить только несколько характеристик.  Если вы знаете, какой карточке товара на Маркете соответствует ваш товар, укажите ее идентификатор (:no-translate[SKU] на Маркете) во входном параметре `mapping`. Получить :no-translate[SKU] на Маркете рекомендованной карточки товара можно через кабинет. Если :no-translate[SKU] на Маркете не указан, сотрудники Маркета сами подберут или создадут подходящую карточку товара, либо у него появится статус `NEED_CONTENT` (нужно найти карточку или создать ее самостоятельно) в выходных данных запроса [POST businesses/{businessId}/offer-mappings](../../reference/business-assortment/getOfferMappings.md).  Перед публикацией товары проходят модерацию. Если в одном из отправленных товаров найдена ошибка, ответ на запрос будет иметь HTTP-код :no-translate[400 Bad Request], и ни один из товаров не отправится на модерацию. При этом если вы не передадите все обязательные параметры для какого‑либо товара, после модерации у него появится статус `NEED_INFO` (в описании товара не хватает информации) в выходных данных запроса [POST businesses/{businessId}/offer-mappings](../../reference/business-assortment/getOfferMappings.md).  В одном запросе можно добавить не более 500 товаров.  {% note info \"Данные в каталоге обновляются не мгновенно\" %}  Это занимает до нескольких минут.  {% endnote %}  |**:no-translate[⚙️] Лимит:** 5 000 товаров в минуту| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OfferMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах.
$update_offer_mapping_entry_request = new \OpenAPI\Client\Model\UpdateOfferMappingEntryRequest(); // \OpenAPI\Client\Model\UpdateOfferMappingEntryRequest

try {
    $result = $apiInstance->updateOfferMappingEntries($campaign_id, $update_offer_mapping_entry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferMappingsApi->updateOfferMappingEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. | |
| **update_offer_mapping_entry_request** | [**\OpenAPI\Client\Model\UpdateOfferMappingEntryRequest**](../Model/UpdateOfferMappingEntryRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EmptyApiResponse**](../Model/EmptyApiResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
