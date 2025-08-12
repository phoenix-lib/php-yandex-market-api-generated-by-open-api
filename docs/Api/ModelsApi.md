# OpenAPI\Client\ModelsApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getModel()**](ModelsApi.md#getModel) | **GET** /models/{modelId} | Информация об одной модели |
| [**getModelOffers()**](ModelsApi.md#getModelOffers) | **GET** /models/{modelId}/offers | Список предложений для одной модели |
| [**getModels()**](ModelsApi.md#getModels) | **POST** /models | Информация о нескольких моделях |
| [**getModelsOffers()**](ModelsApi.md#getModelsOffers) | **POST** /models/offers | Список предложений для нескольких моделей |
| [**searchModels()**](ModelsApi.md#searchModels) | **GET** /models | Поиск модели товара |


## `getModel()`

```php
getModel($model_id, $region_id, $currency): \OpenAPI\Client\Model\GetModelsResponse
```

Информация об одной модели

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getModel.md) %}  Возвращает информацию о модели товара.  Для методов `GET models`, `GET models/{modelId}` и `POST models` действует групповое ресурсное ограничение. Ограничение вводится на суммарное количество моделей, информация о которых запрошена при помощи этих методов.  |**:no-translate[⚙️] Лимит:** 100 000 моделей в час| |-|

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


$apiInstance = new OpenAPI\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_id = 56; // int | Идентификатор модели товара.
$region_id = 56; // int | Идентификатор региона.  Идентификатор региона можно получить c помощью запроса [:no-translate[GET regions]](:no-translate[../../reference/regions/searchRegionsByName.md]).
$currency = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\CurrencyType(); // \OpenAPI\Client\Model\CurrencyType | Валюта, в которой отображаются цены предложений на страницах с результатами поиска.  Возможные значения:  * :no-translate[`BYN`] — белорусский рубль.  * :no-translate[`KZT`] — казахстанский тенге.  * :no-translate[`RUR`] — российский рубль.  * :no-translate[`UAH`] — украинская гривна.  Значение по умолчанию: используется национальная валюта магазина (национальная валюта страны происхождения магазина).

try {
    $result = $apiInstance->getModel($model_id, $region_id, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->getModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_id** | **int**| Идентификатор модели товара. | |
| **region_id** | **int**| Идентификатор региона.  Идентификатор региона можно получить c помощью запроса [:no-translate[GET regions]](:no-translate[../../reference/regions/searchRegionsByName.md]). | |
| **currency** | [**\OpenAPI\Client\Model\CurrencyType**](../Model/.md)| Валюта, в которой отображаются цены предложений на страницах с результатами поиска.  Возможные значения:  * :no-translate[&#x60;BYN&#x60;] — белорусский рубль.  * :no-translate[&#x60;KZT&#x60;] — казахстанский тенге.  * :no-translate[&#x60;RUR&#x60;] — российский рубль.  * :no-translate[&#x60;UAH&#x60;] — украинская гривна.  Значение по умолчанию: используется национальная валюта магазина (национальная валюта страны происхождения магазина). | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetModelsResponse**](../Model/GetModelsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getModelOffers()`

```php
getModelOffers($model_id, $region_id, $currency, $order_by_price, $count, $page): \OpenAPI\Client\Model\GetModelsOffersResponse
```

Список предложений для одной модели

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getModelOffers.md) %}  Возвращает информацию о первых десяти предложениях, расположенных на карточке модели.  Предложения выдаются для определенного региона и располагаются в том же порядке, в котором они показываются в выдаче Маркета на карточке модели.  Для групповых моделей метод не поддерживается. Идентификатор групповой модели игнорируется.  Для методов `GET models/{modelId}/offers` и `POST models/offers` действует групповое ресурсное ограничение. Ограничение вводится на суммарное количество моделей, информация о которых запрошена при помощи этих методов.  |**:no-translate[⚙️] Лимит:** 100 000 предложений в час| |-|

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


$apiInstance = new OpenAPI\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_id = 56; // int | Идентификатор модели товара.
$region_id = 56; // int | Идентификатор региона.  Идентификатор региона можно получить c помощью запроса [:no-translate[GET regions]](:no-translate[../../reference/regions/searchRegionsByName.md]).
$currency = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\CurrencyType(); // \OpenAPI\Client\Model\CurrencyType | Валюта, в которой отображаются цены предложений на страницах с результатами поиска.  Возможные значения:  * :no-translate[`BYN`] — белорусский рубль.  * :no-translate[`KZT`] — казахстанский тенге.  * :no-translate[`RUR`] — российский рубль.  * :no-translate[`UAH`] — украинская гривна.  Значение по умолчанию: используется национальная валюта магазина (национальная валюта страны происхождения магазина).
$order_by_price = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrderType(); // \OpenAPI\Client\Model\SortOrderType | Направление сортировки по цене.  Возможные значения: * :no-translate[`ASC`] — сортировка по возрастанию. * :no-translate[`DESC`] — сортировка по убыванию.  Значение по умолчанию: предложения выводятся в произвольном порядке.
$count = 10; // int | Количество предложений на странице ответа.
$page = 1; // int | {% note warning \"Если в методе есть :no-translate[`page_token`]\" %}  Используйте его вместо параметра :no-translate[`page`].  [Подробнее о типах пагинации и их использовании](:no-translate[../../concepts/pagination.md])  {% endnote %}  Номер страницы результатов.  Используется вместе с параметром :no-translate[`pageSize`].  :no-translate[`page`] игнорируется, если задан :no-translate[`page_token`] или :no-translate[`limit`].

try {
    $result = $apiInstance->getModelOffers($model_id, $region_id, $currency, $order_by_price, $count, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->getModelOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_id** | **int**| Идентификатор модели товара. | |
| **region_id** | **int**| Идентификатор региона.  Идентификатор региона можно получить c помощью запроса [:no-translate[GET regions]](:no-translate[../../reference/regions/searchRegionsByName.md]). | |
| **currency** | [**\OpenAPI\Client\Model\CurrencyType**](../Model/.md)| Валюта, в которой отображаются цены предложений на страницах с результатами поиска.  Возможные значения:  * :no-translate[&#x60;BYN&#x60;] — белорусский рубль.  * :no-translate[&#x60;KZT&#x60;] — казахстанский тенге.  * :no-translate[&#x60;RUR&#x60;] — российский рубль.  * :no-translate[&#x60;UAH&#x60;] — украинская гривна.  Значение по умолчанию: используется национальная валюта магазина (национальная валюта страны происхождения магазина). | [optional] |
| **order_by_price** | [**\OpenAPI\Client\Model\SortOrderType**](../Model/.md)| Направление сортировки по цене.  Возможные значения: * :no-translate[&#x60;ASC&#x60;] — сортировка по возрастанию. * :no-translate[&#x60;DESC&#x60;] — сортировка по убыванию.  Значение по умолчанию: предложения выводятся в произвольном порядке. | [optional] |
| **count** | **int**| Количество предложений на странице ответа. | [optional] [default to 10] |
| **page** | **int**| {% note warning \&quot;Если в методе есть :no-translate[&#x60;page_token&#x60;]\&quot; %}  Используйте его вместо параметра :no-translate[&#x60;page&#x60;].  [Подробнее о типах пагинации и их использовании](:no-translate[../../concepts/pagination.md])  {% endnote %}  Номер страницы результатов.  Используется вместе с параметром :no-translate[&#x60;pageSize&#x60;].  :no-translate[&#x60;page&#x60;] игнорируется, если задан :no-translate[&#x60;page_token&#x60;] или :no-translate[&#x60;limit&#x60;]. | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\GetModelsOffersResponse**](../Model/GetModelsOffersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getModels()`

```php
getModels($region_id, $get_models_request, $currency): \OpenAPI\Client\Model\GetModelsResponse
```

Информация о нескольких моделях

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getModels.md) %}  Возвращает информацию о моделях товаров.  В одном запросе можно получить информацию не более чем о 100 моделях.  Для методов `GET models`, `GET models/{modelId}` и `POST models` действует групповое ресурсное ограничение. Ограничение вводится на суммарное количество моделей, информация о которых запрошена при помощи этих методов.  |**:no-translate[⚙️] Лимит:** 100 000 моделей в час| |-|

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


$apiInstance = new OpenAPI\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$region_id = 56; // int | Идентификатор региона.  Идентификатор региона можно получить c помощью запроса [:no-translate[GET regions]](:no-translate[../../reference/regions/searchRegionsByName.md]).
$get_models_request = new \OpenAPI\Client\Model\GetModelsRequest(); // \OpenAPI\Client\Model\GetModelsRequest
$currency = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\CurrencyType(); // \OpenAPI\Client\Model\CurrencyType | Валюта, в которой отображаются цены предложений на страницах с результатами поиска.  Возможные значения:  * :no-translate[`BYN`] — белорусский рубль.  * :no-translate[`KZT`] — казахстанский тенге.  * :no-translate[`RUR`] — российский рубль.  * :no-translate[`UAH`] — украинская гривна.  Значение по умолчанию: используется национальная валюта магазина (национальная валюта страны происхождения магазина).

try {
    $result = $apiInstance->getModels($region_id, $get_models_request, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->getModels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **region_id** | **int**| Идентификатор региона.  Идентификатор региона можно получить c помощью запроса [:no-translate[GET regions]](:no-translate[../../reference/regions/searchRegionsByName.md]). | |
| **get_models_request** | [**\OpenAPI\Client\Model\GetModelsRequest**](../Model/GetModelsRequest.md)|  | |
| **currency** | [**\OpenAPI\Client\Model\CurrencyType**](../Model/.md)| Валюта, в которой отображаются цены предложений на страницах с результатами поиска.  Возможные значения:  * :no-translate[&#x60;BYN&#x60;] — белорусский рубль.  * :no-translate[&#x60;KZT&#x60;] — казахстанский тенге.  * :no-translate[&#x60;RUR&#x60;] — российский рубль.  * :no-translate[&#x60;UAH&#x60;] — украинская гривна.  Значение по умолчанию: используется национальная валюта магазина (национальная валюта страны происхождения магазина). | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetModelsResponse**](../Model/GetModelsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getModelsOffers()`

```php
getModelsOffers($region_id, $get_models_request, $currency, $order_by_price): \OpenAPI\Client\Model\GetModelsOffersResponse
```

Список предложений для нескольких моделей

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getModelsOffers.md) %}  Возвращает информацию о первых десяти предложениях, расположенных на карточках моделей, идентификаторы которых указаны в запросе.  Предложения выдаются для определенного региона и располагаются в том же порядке, в котором они показываются в выдаче Маркета на карточке модели.  Для групповых моделей выдача предложений не поддерживается. Идентификаторы групповых моделей игнорируются.  В одном запросе можно получить информацию о предложениях не более чем для 100 моделей.  Для методов `GET models/{modelId}/offers` и `POST models/offers` действует групповое ресурсное ограничение. Ограничение вводится на суммарное количество моделей, информация о которых запрошена при помощи этих методов.  |**:no-translate[⚙️] Лимит:** 100 000 предложений в час| |-|

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


$apiInstance = new OpenAPI\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$region_id = 56; // int | Идентификатор региона.  Идентификатор региона можно получить c помощью запроса [:no-translate[GET regions]](:no-translate[../../reference/regions/searchRegionsByName.md]).
$get_models_request = new \OpenAPI\Client\Model\GetModelsRequest(); // \OpenAPI\Client\Model\GetModelsRequest
$currency = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\CurrencyType(); // \OpenAPI\Client\Model\CurrencyType | Валюта, в которой отображаются цены предложений на страницах с результатами поиска.  Возможные значения:  * :no-translate[`BYN`] — белорусский рубль.  * :no-translate[`KZT`] — казахстанский тенге.  * :no-translate[`RUR`] — российский рубль.  * :no-translate[`UAH`] — украинская гривна.  Значение по умолчанию: используется национальная валюта магазина (национальная валюта страны происхождения магазина).
$order_by_price = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrderType(); // \OpenAPI\Client\Model\SortOrderType | Направление сортировки по цене.  Возможные значения: * :no-translate[`ASC`] — сортировка по возрастанию. * :no-translate[`DESC`] — сортировка по убыванию.  Значение по умолчанию: предложения выводятся в произвольном порядке.

try {
    $result = $apiInstance->getModelsOffers($region_id, $get_models_request, $currency, $order_by_price);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->getModelsOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **region_id** | **int**| Идентификатор региона.  Идентификатор региона можно получить c помощью запроса [:no-translate[GET regions]](:no-translate[../../reference/regions/searchRegionsByName.md]). | |
| **get_models_request** | [**\OpenAPI\Client\Model\GetModelsRequest**](../Model/GetModelsRequest.md)|  | |
| **currency** | [**\OpenAPI\Client\Model\CurrencyType**](../Model/.md)| Валюта, в которой отображаются цены предложений на страницах с результатами поиска.  Возможные значения:  * :no-translate[&#x60;BYN&#x60;] — белорусский рубль.  * :no-translate[&#x60;KZT&#x60;] — казахстанский тенге.  * :no-translate[&#x60;RUR&#x60;] — российский рубль.  * :no-translate[&#x60;UAH&#x60;] — украинская гривна.  Значение по умолчанию: используется национальная валюта магазина (национальная валюта страны происхождения магазина). | [optional] |
| **order_by_price** | [**\OpenAPI\Client\Model\SortOrderType**](../Model/.md)| Направление сортировки по цене.  Возможные значения: * :no-translate[&#x60;ASC&#x60;] — сортировка по возрастанию. * :no-translate[&#x60;DESC&#x60;] — сортировка по убыванию.  Значение по умолчанию: предложения выводятся в произвольном порядке. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetModelsOffersResponse**](../Model/GetModelsOffersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchModels()`

```php
searchModels($query, $region_id, $currency, $page, $page_size): \OpenAPI\Client\Model\SearchModelsResponse
```

Поиск модели товара

{% include notitle [:no-translate[access]](../../_auto/method_scopes/searchModels.md) %}  Возвращает информацию о моделях, удовлетворяющих заданным в запросе условиям поиска.  В одном запросе можно получить информацию не более чем о 100 моделях.  Для методов `GET models`, `GET models/{modelId}` и `POST models` действует групповое ресурсное ограничение. Ограничение вводится на суммарное количество моделей, информация о которых запрошена при помощи этих методов.  |**:no-translate[⚙️] Лимит:** 100 000 моделей в час| |-|

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


$apiInstance = new OpenAPI\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = 'query_example'; // string | Поисковый запрос по названию модели товара.
$region_id = 56; // int | Идентификатор региона.  Идентификатор региона можно получить c помощью запроса [:no-translate[GET regions]](:no-translate[../../reference/regions/searchRegionsByName.md]).
$currency = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\CurrencyType(); // \OpenAPI\Client\Model\CurrencyType | Валюта, в которой отображаются цены предложений на страницах с результатами поиска.  Возможные значения:  * :no-translate[`BYN`] — белорусский рубль.  * :no-translate[`KZT`] — казахстанский тенге.  * :no-translate[`RUR`] — российский рубль.  * :no-translate[`UAH`] — украинская гривна.  Значение по умолчанию: используется национальная валюта магазина (национальная валюта страны происхождения магазина).
$page = 1; // int | {% note warning \"Если в методе есть :no-translate[`page_token`]\" %}  Используйте его вместо параметра :no-translate[`page`].  [Подробнее о типах пагинации и их использовании](:no-translate[../../concepts/pagination.md])  {% endnote %}  Номер страницы результатов.  Используется вместе с параметром :no-translate[`pageSize`].  :no-translate[`page`] игнорируется, если задан :no-translate[`page_token`] или :no-translate[`limit`].
$page_size = 56; // int | Размер страницы.  Используется вместе с параметром :no-translate[`page`].  :no-translate[`pageSize`] игнорируется, если задан :no-translate[`page_token`] или :no-translate[`limit`].

try {
    $result = $apiInstance->searchModels($query, $region_id, $currency, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->searchModels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | **string**| Поисковый запрос по названию модели товара. | |
| **region_id** | **int**| Идентификатор региона.  Идентификатор региона можно получить c помощью запроса [:no-translate[GET regions]](:no-translate[../../reference/regions/searchRegionsByName.md]). | |
| **currency** | [**\OpenAPI\Client\Model\CurrencyType**](../Model/.md)| Валюта, в которой отображаются цены предложений на страницах с результатами поиска.  Возможные значения:  * :no-translate[&#x60;BYN&#x60;] — белорусский рубль.  * :no-translate[&#x60;KZT&#x60;] — казахстанский тенге.  * :no-translate[&#x60;RUR&#x60;] — российский рубль.  * :no-translate[&#x60;UAH&#x60;] — украинская гривна.  Значение по умолчанию: используется национальная валюта магазина (национальная валюта страны происхождения магазина). | [optional] |
| **page** | **int**| {% note warning \&quot;Если в методе есть :no-translate[&#x60;page_token&#x60;]\&quot; %}  Используйте его вместо параметра :no-translate[&#x60;page&#x60;].  [Подробнее о типах пагинации и их использовании](:no-translate[../../concepts/pagination.md])  {% endnote %}  Номер страницы результатов.  Используется вместе с параметром :no-translate[&#x60;pageSize&#x60;].  :no-translate[&#x60;page&#x60;] игнорируется, если задан :no-translate[&#x60;page_token&#x60;] или :no-translate[&#x60;limit&#x60;]. | [optional] [default to 1] |
| **page_size** | **int**| Размер страницы.  Используется вместе с параметром :no-translate[&#x60;page&#x60;].  :no-translate[&#x60;pageSize&#x60;] игнорируется, если задан :no-translate[&#x60;page_token&#x60;] или :no-translate[&#x60;limit&#x60;]. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SearchModelsResponse**](../Model/SearchModelsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
