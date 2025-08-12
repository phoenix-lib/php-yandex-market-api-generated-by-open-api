# OpenAPI\Client\PricesApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDefaultPrices()**](PricesApi.md#getDefaultPrices) | **POST** /businesses/{businessId}/offer-prices | Просмотр цен на указанные товары во всех магазинах |
| [**getPrices()**](PricesApi.md#getPrices) | **GET** /campaigns/{campaignId}/offer-prices | Список цен |
| [**getPricesByOfferIds()**](PricesApi.md#getPricesByOfferIds) | **POST** /campaigns/{campaignId}/offer-prices | Просмотр цен на указанные товары в конкретном магазине |
| [**getSuggestedPrices()**](PricesApi.md#getSuggestedPrices) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров |
| [**updateBusinessPrices()**](PricesApi.md#updateBusinessPrices) | **POST** /businesses/{businessId}/offer-prices/updates | Установка цен на товары для всех магазинов |
| [**updatePrices()**](PricesApi.md#updatePrices) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине |


## `getDefaultPrices()`

```php
getDefaultPrices($business_id, $page_token, $limit, $get_default_prices_request): \OpenAPI\Client\Model\GetDefaultPricesResponse
```

Просмотр цен на указанные товары во всех магазинах

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getDefaultPrices.md) %}  Возвращает список цен, которые вы установили для всех магазинов любым способом. Например, через API или с помощью Excel-шаблона.  О способах установки цен читайте [в Справке Маркета для продавцов](https://yandex.ru/support/marketplace/assortment/operations/prices.html).  |**:no-translate[⚙️] Лимит:** 10 000 товаров в минуту| |-|

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


$apiInstance = new OpenAPI\Client\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]).  ℹ️ [Что такое кабинет и магазин на Маркете](:no-translate[https://yandex.ru/support/marketplace/account/introduction.html])
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра :no-translate[`nextPageToken`], полученное при последнем запросе.  Если задан :no-translate[`page_token`] и в запросе есть параметры :no-translate[`page`] и :no-translate[`pageSize`], они игнорируются.
$limit = 20; // int | Количество значений на одной странице.
$get_default_prices_request = new \OpenAPI\Client\Model\GetDefaultPricesRequest(); // \OpenAPI\Client\Model\GetDefaultPricesRequest

try {
    $result = $apiInstance->getDefaultPrices($business_id, $page_token, $limit, $get_default_prices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->getDefaultPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]).  ℹ️ [Что такое кабинет и магазин на Маркете](:no-translate[https://yandex.ru/support/marketplace/account/introduction.html]) | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра :no-translate[&#x60;nextPageToken&#x60;], полученное при последнем запросе.  Если задан :no-translate[&#x60;page_token&#x60;] и в запросе есть параметры :no-translate[&#x60;page&#x60;] и :no-translate[&#x60;pageSize&#x60;], они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |
| **get_default_prices_request** | [**\OpenAPI\Client\Model\GetDefaultPricesRequest**](../Model/GetDefaultPricesRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetDefaultPricesResponse**](../Model/GetDefaultPricesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPrices()`

```php
getPrices($campaign_id, $page_token, $limit, $archived): \OpenAPI\Client\Model\GetPricesResponse
```

Список цен

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getPrices.md) %}  {% note warning \"Какой метод использовать вместо устаревшего\" %}  [POST campaigns/{campaignId}/offer-prices](../../reference/assortment/getPricesByOfferIds.md)  {% endnote %}  Возвращает список цен, установленных вами на товары любым способом: например, через :no-translate[API] или в файле с каталогом.  {% note info \"Как считается общее количество товаров\" %}  По данным за последние семь дней (не включая сегодня) и не может быть выше 2 миллионов.  {% endnote %}  Способы установки цен описаны [в Справке Маркета для продавцов](https://yandex.ru/support/marketplace/assortment/operations/prices.html).  |**:no-translate[⚙️] Лимит:** 150 000 товаров в минуту| |-|

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


$apiInstance = new OpenAPI\Client\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах.
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра :no-translate[`nextPageToken`], полученное при последнем запросе.  Если задан :no-translate[`page_token`] и в запросе есть параметры :no-translate[`page`] и :no-translate[`pageSize`], они игнорируются.
$limit = 20; // int | Количество значений на одной странице.
$archived = false; // bool | Фильтр по нахождению в архиве.

try {
    $result = $apiInstance->getPrices($campaign_id, $page_token, $limit, $archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->getPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра :no-translate[&#x60;nextPageToken&#x60;], полученное при последнем запросе.  Если задан :no-translate[&#x60;page_token&#x60;] и в запросе есть параметры :no-translate[&#x60;page&#x60;] и :no-translate[&#x60;pageSize&#x60;], они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |
| **archived** | **bool**| Фильтр по нахождению в архиве. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\GetPricesResponse**](../Model/GetPricesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPricesByOfferIds()`

```php
getPricesByOfferIds($campaign_id, $page_token, $limit, $get_prices_by_offer_ids_request): \OpenAPI\Client\Model\GetPricesByOfferIdsResponse
```

Просмотр цен на указанные товары в конкретном магазине

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getPricesByOfferIds.md) %}  Возвращает список цен на указанные товары в магазине.  {% note warning \"Метод только для отдельных магазинов\" %}  Используйте этот метод, только если в кабинете установлены уникальные цены в отдельных магазинах.  Для просмотра цен, которые действуют во всех магазинах, используйте [POST businesses/{businessId}/offer-mappings](../../reference/business-assortment/getOfferMappings.md).  {% endnote %}  |**:no-translate[⚙️] Лимит:** 150 000 товаров в минуту| |-|

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


$apiInstance = new OpenAPI\Client\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах.
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра :no-translate[`nextPageToken`], полученное при последнем запросе.  Если задан :no-translate[`page_token`] и в запросе есть параметры :no-translate[`page`] и :no-translate[`pageSize`], они игнорируются.
$limit = 20; // int | Количество значений на одной странице.
$get_prices_by_offer_ids_request = new \OpenAPI\Client\Model\GetPricesByOfferIdsRequest(); // \OpenAPI\Client\Model\GetPricesByOfferIdsRequest

try {
    $result = $apiInstance->getPricesByOfferIds($campaign_id, $page_token, $limit, $get_prices_by_offer_ids_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->getPricesByOfferIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра :no-translate[&#x60;nextPageToken&#x60;], полученное при последнем запросе.  Если задан :no-translate[&#x60;page_token&#x60;] и в запросе есть параметры :no-translate[&#x60;page&#x60;] и :no-translate[&#x60;pageSize&#x60;], они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |
| **get_prices_by_offer_ids_request** | [**\OpenAPI\Client\Model\GetPricesByOfferIdsRequest**](../Model/GetPricesByOfferIdsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPricesByOfferIdsResponse**](../Model/GetPricesByOfferIdsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSuggestedPrices()`

```php
getSuggestedPrices($campaign_id, $suggest_prices_request): \OpenAPI\Client\Model\SuggestPricesResponse
```

Цены для продвижения товаров

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getSuggestedPrices.md) %}  {% note warning \"Не используйте его, это может привести к ошибкам. Информацию о ценах вы можете получить в помощью [отчета «Цены на рынке»](../../reference/reports/generatePricesReport.md).\" %}     {% endnote %}  {% note warning \"Метод только для некоторых магазинов\" %}  Этот метод подходит только тем магазинам, которые устанавливают цены на товары в рублях.  {% endnote %}  Возвращает цены для продвижения товаров, которые вы размещаете на Маркете.  Товары, для которых нужно получить цены, передаются в теле POST-запроса.  Цены для продвижения зависят от цен, установленных на товары другими магазинами. Если один товар поставляют несколько магазинов, на Маркете сначала продается товар с более низкой ценой. Когда закончится товар по низкой цене, начнет продаваться товар по более высокой цене.  Выходные данные содержат для каждого товара несколько цен, соответствующих разным типам продвижения.  Установить цены на товары можно с помощью запроса [POST campaigns/{campaignId}/offer-prices/updates](../../reference/assortment/updatePrices.md) или другими способами: например, указать их в файле с каталогом. Также вы можете использовать стратегии для автоматической установки рекомендованных цен или минимальных цен на Маркете.  Подробно об автоматическом управлении ценами рассказано [в Справке Маркета для продавцов](https://yandex.ru/support/marketplace/marketing/prices.html).  |**:no-translate[⚙️] Лимит:** 100 000 товаров в час| |-|

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


$apiInstance = new OpenAPI\Client\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах.
$suggest_prices_request = new \OpenAPI\Client\Model\SuggestPricesRequest(); // \OpenAPI\Client\Model\SuggestPricesRequest

try {
    $result = $apiInstance->getSuggestedPrices($campaign_id, $suggest_prices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->getSuggestedPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. | |
| **suggest_prices_request** | [**\OpenAPI\Client\Model\SuggestPricesRequest**](../Model/SuggestPricesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SuggestPricesResponse**](../Model/SuggestPricesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBusinessPrices()`

```php
updateBusinessPrices($business_id, $update_business_prices_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Установка цен на товары для всех магазинов

{% include notitle [:no-translate[access]](../../_auto/method_scopes/updateBusinessPrices.md) %}  Устанавливает цены, которые действуют во всех магазинах. Чтобы получить рекомендации Маркета, касающиеся цен, выполните запрос [POST businesses/{businessId}/offers/recommendations](../../reference/business-assortment/getOfferRecommendations.md).  При необходимости передавайте НДС с помощью параметра `vat` в запросе [POST campaigns/{campaignId}/offers/update](../../reference/assortment/updateCampaignOffers.md).  {% note info \"Данные в каталоге обновляются не мгновенно\" %}  Это занимает до нескольких минут.  {% endnote %}  |**:no-translate[⚙️] Лимит:** 10 000 товаров в минуту, не более 500 товаров в одном запросе| |-|

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


$apiInstance = new OpenAPI\Client\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]).  ℹ️ [Что такое кабинет и магазин на Маркете](:no-translate[https://yandex.ru/support/marketplace/account/introduction.html])
$update_business_prices_request = new \OpenAPI\Client\Model\UpdateBusinessPricesRequest(); // \OpenAPI\Client\Model\UpdateBusinessPricesRequest

try {
    $result = $apiInstance->updateBusinessPrices($business_id, $update_business_prices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->updateBusinessPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]).  ℹ️ [Что такое кабинет и магазин на Маркете](:no-translate[https://yandex.ru/support/marketplace/account/introduction.html]) | |
| **update_business_prices_request** | [**\OpenAPI\Client\Model\UpdateBusinessPricesRequest**](../Model/UpdateBusinessPricesRequest.md)|  | |

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

## `updatePrices()`

```php
updatePrices($campaign_id, $update_prices_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Установка цен на товары в конкретном магазине

{% include notitle [:no-translate[access]](../../_auto/method_scopes/updatePrices.md) %}  Устанавливает цены на товары в магазине. Чтобы получить рекомендации Маркета, касающиеся цен, выполните запрос [POST businesses/{businessId}/offers/recommendations](../../reference/business-assortment/getOfferRecommendations.md).  {% note warning \"Метод только для отдельных магазинов\" %}  Вам доступен этот метод, если в кабинете продавца на Маркете есть возможность установить уникальные цены в отдельных магазинах. Как это проверить — в методе [POST businesses/{businessId}/settings](../../reference/businesses/getBusinessSettings.md) в параметре `onlyDefaultPrice` возвращается значение `false`.  В ином случае используйте метод управления ценами, которые действуют во всех магазинах, — [POST businesses/{businessId}/offer-prices/updates](../../reference/business-assortment/updateBusinessPrices.md).  {% endnote %}  {% note info \"Данные в каталоге обновляются не мгновенно\" %}  Это занимает до нескольких минут.  {% endnote %}  |**:no-translate[⚙️] Лимит:** 10 000 товаров в минуту| |-|

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


$apiInstance = new OpenAPI\Client\Api\PricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах.
$update_prices_request = new \OpenAPI\Client\Model\UpdatePricesRequest(); // \OpenAPI\Client\Model\UpdatePricesRequest

try {
    $result = $apiInstance->updatePrices($campaign_id, $update_prices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricesApi->updatePrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. | |
| **update_prices_request** | [**\OpenAPI\Client\Model\UpdatePricesRequest**](../Model/UpdatePricesRequest.md)|  | |

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
