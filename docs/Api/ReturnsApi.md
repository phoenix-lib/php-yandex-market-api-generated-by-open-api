# OpenAPI\Client\ReturnsApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getReturn()**](ReturnsApi.md#getReturn) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о невыкупе или возврате |
| [**getReturnApplication()**](ReturnsApi.md#getReturnApplication) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application | Получение заявления на возврат |
| [**getReturnPhoto()**](ReturnsApi.md#getReturnPhoto) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографий товаров в возврате |
| [**getReturns()**](ReturnsApi.md#getReturns) | **GET** /campaigns/{campaignId}/returns | Список невыкупов и возвратов |
| [**setReturnDecision()**](ReturnsApi.md#setReturnDecision) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision | Принятие или изменение решения по возврату |
| [**submitReturnDecision()**](ReturnsApi.md#submitReturnDecision) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/submit | Передача и подтверждение решения по возврату |


## `getReturn()`

```php
getReturn($campaign_id, $order_id, $return_id): \OpenAPI\Client\Model\GetReturnResponse
```

Информация о невыкупе или возврате

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getReturn.md) %}  Получает информацию по одному невыкупу или возврату.  {% note tip \"Подключите API-уведомления\" %}  Маркет отправит вам запрос [POST notification](../../push-notifications/reference/sendNotification.md), когда появится новый невыкуп или возврат.  [{#T}](../../push-notifications/index.md)  {% endnote %}  |**:no-translate[⚙️] Лимит:** 10 000 запросов в час| |-|

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


$apiInstance = new OpenAPI\Client\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах.
$order_id = 56; // int | Идентификатор заказа.
$return_id = 56; // int | Идентификатор невыкупа или возврата.

try {
    $result = $apiInstance->getReturn($campaign_id, $order_id, $return_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->getReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **return_id** | **int**| Идентификатор невыкупа или возврата. | |

### Return type

[**\OpenAPI\Client\Model\GetReturnResponse**](../Model/GetReturnResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturnApplication()`

```php
getReturnApplication($campaign_id, $order_id, $return_id): \SplFileObject
```

Получение заявления на возврат

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getReturnApplication.md) %}  Загружает заявление покупателя на возврат товара.  |**:no-translate[⚙️] Лимит:** 10 000 запросов в час| |-|

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


$apiInstance = new OpenAPI\Client\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах.
$order_id = 56; // int | Идентификатор заказа.
$return_id = 56; // int | Идентификатор невыкупа или возврата.

try {
    $result = $apiInstance->getReturnApplication($campaign_id, $order_id, $return_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->getReturnApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **return_id** | **int**| Идентификатор невыкупа или возврата. | |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturnPhoto()`

```php
getReturnPhoto($campaign_id, $order_id, $return_id, $item_id, $image_hash): \SplFileObject
```

Получение фотографий товаров в возврате

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getReturnPhoto.md) %}  Получает фотографии товаров, которые покупатель приложил к заявлению на возврат.  |**:no-translate[⚙️] Лимит:** 10 000 запросов в час| |-|

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


$apiInstance = new OpenAPI\Client\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах.
$order_id = 56; // int | Идентификатор заказа.
$return_id = 56; // int | Идентификатор невыкупа или возврата.
$item_id = 56; // int | Идентификатор товара в возврате.
$image_hash = 'image_hash_example'; // string | Хеш ссылки изображения для загрузки.

try {
    $result = $apiInstance->getReturnPhoto($campaign_id, $order_id, $return_id, $item_id, $image_hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->getReturnPhoto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **return_id** | **int**| Идентификатор невыкупа или возврата. | |
| **item_id** | **int**| Идентификатор товара в возврате. | |
| **image_hash** | **string**| Хеш ссылки изображения для загрузки. | |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturns()`

```php
getReturns($campaign_id, $page_token, $limit, $order_ids, $statuses, $type, $from_date, $to_date, $from_date2, $to_date2): \OpenAPI\Client\Model\GetReturnsResponse
```

Список невыкупов и возвратов

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getReturns.md) %}  Получает список невыкупов и возвратов.  Чтобы получить информацию по одному невыкупу или возврату, выполните запрос [GET campaigns/{campaignId}/orders/{orderId}/returns/{returnId}](../../reference/orders/getReturn.md).  {% note tip \"Подключите API-уведомления\" %}  Маркет отправит вам запрос [POST notification](../../push-notifications/reference/sendNotification.md), когда появится новый невыкуп или возврат.  [{#T}](../../push-notifications/index.md)  {% endnote %}  |**:no-translate[⚙️] Лимит:** 10 000 запросов в час| |-|

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


$apiInstance = new OpenAPI\Client\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах.
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра :no-translate[`nextPageToken`], полученное при последнем запросе.  Если задан :no-translate[`page_token`] и в запросе есть параметры :no-translate[`page`] и :no-translate[`pageSize`], они игнорируются.
$limit = 20; // int | Количество значений на одной странице.
$order_ids = array(56); // int[] | Идентификаторы заказов — для фильтрации результатов.  Несколько идентификаторов перечисляются через запятую без пробела.
$statuses = STARTED_BY_USER,WAITING_FOR_DECISION; // \OpenAPI\Client\Model\RefundStatusType[] | Статусы невыкупов или возвратов — для фильтрации результатов.  Несколько статусов перечисляются через запятую.
$type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReturnType(); // \OpenAPI\Client\Model\ReturnType | Тип заказа для фильтрации:  * `UNREDEEMED` — невыкуп.  * `RETURN` — возврат.  Если не указать, в ответе будут и невыкупы, и возвраты.
$from_date = 2022-10-31; // \DateTime | Начальная дата для фильтрации невыкупов или возвратов по дате обновления.  Формат: `ГГГГ-ММ-ДД`.
$to_date = 2022-11-30; // \DateTime | Конечная дата для фильтрации невыкупов или возвратов по дате обновления.  Формат: `ГГГГ-ММ-ДД`.
$from_date2 = 2022-10-31; // \DateTime | {% note warning \"Вместо него используйте `fromDate`.\" %}     {% endnote %}  Начальная дата для фильтрации невыкупов или возвратов по дате обновления.
$to_date2 = 2022-11-30; // \DateTime | {% note warning \"Вместо него используйте `toDate`.\" %}     {% endnote %}  Конечная дата для фильтрации невыкупов или возвратов по дате обновления.

try {
    $result = $apiInstance->getReturns($campaign_id, $page_token, $limit, $order_ids, $statuses, $type, $from_date, $to_date, $from_date2, $to_date2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->getReturns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра :no-translate[&#x60;nextPageToken&#x60;], полученное при последнем запросе.  Если задан :no-translate[&#x60;page_token&#x60;] и в запросе есть параметры :no-translate[&#x60;page&#x60;] и :no-translate[&#x60;pageSize&#x60;], они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |
| **order_ids** | [**int[]**](../Model/int.md)| Идентификаторы заказов — для фильтрации результатов.  Несколько идентификаторов перечисляются через запятую без пробела. | [optional] |
| **statuses** | [**\OpenAPI\Client\Model\RefundStatusType[]**](../Model/\OpenAPI\Client\Model\RefundStatusType.md)| Статусы невыкупов или возвратов — для фильтрации результатов.  Несколько статусов перечисляются через запятую. | [optional] |
| **type** | [**\OpenAPI\Client\Model\ReturnType**](../Model/.md)| Тип заказа для фильтрации:  * &#x60;UNREDEEMED&#x60; — невыкуп.  * &#x60;RETURN&#x60; — возврат.  Если не указать, в ответе будут и невыкупы, и возвраты. | [optional] |
| **from_date** | **\DateTime**| Начальная дата для фильтрации невыкупов или возвратов по дате обновления.  Формат: &#x60;ГГГГ-ММ-ДД&#x60;. | [optional] |
| **to_date** | **\DateTime**| Конечная дата для фильтрации невыкупов или возвратов по дате обновления.  Формат: &#x60;ГГГГ-ММ-ДД&#x60;. | [optional] |
| **from_date2** | **\DateTime**| {% note warning \&quot;Вместо него используйте &#x60;fromDate&#x60;.\&quot; %}     {% endnote %}  Начальная дата для фильтрации невыкупов или возвратов по дате обновления. | [optional] |
| **to_date2** | **\DateTime**| {% note warning \&quot;Вместо него используйте &#x60;toDate&#x60;.\&quot; %}     {% endnote %}  Конечная дата для фильтрации невыкупов или возвратов по дате обновления. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetReturnsResponse**](../Model/GetReturnsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setReturnDecision()`

```php
setReturnDecision($campaign_id, $order_id, $return_id, $set_return_decision_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Принятие или изменение решения по возврату

{% include notitle [:no-translate[access]](../../_auto/method_scopes/setReturnDecision.md) %}  {% note warning \"Какой метод использовать вместо устаревшего\" %}  [POST campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/submit](../../reference/orders/submitReturnDecision.md)  {% endnote %}   Выбирает решение по возврату от покупателя. После этого для подтверждения решения нужно выполнить запрос [POST campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/submit](../../reference/orders/submitReturnDecision.md).  |**:no-translate[⚙️] Лимит:** 10 000 запросов в час| |-|

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


$apiInstance = new OpenAPI\Client\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах.
$order_id = 56; // int | Идентификатор заказа.
$return_id = 56; // int | Идентификатор невыкупа или возврата.
$set_return_decision_request = new \OpenAPI\Client\Model\SetReturnDecisionRequest(); // \OpenAPI\Client\Model\SetReturnDecisionRequest

try {
    $result = $apiInstance->setReturnDecision($campaign_id, $order_id, $return_id, $set_return_decision_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->setReturnDecision: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **return_id** | **int**| Идентификатор невыкупа или возврата. | |
| **set_return_decision_request** | [**\OpenAPI\Client\Model\SetReturnDecisionRequest**](../Model/SetReturnDecisionRequest.md)|  | |

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

## `submitReturnDecision()`

```php
submitReturnDecision($campaign_id, $order_id, $return_id, $submit_return_decision_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Передача и подтверждение решения по возврату

{% include notitle [:no-translate[access]](../../_auto/method_scopes/submitReturnDecision.md) %}  Позволяет выполнить одну из операций:  * **Для моделей :no-translate[FBS], Экспресс и :no-translate[DBS]:** передать список решений по возврату и подтвердить их.  * **Для модели :no-translate[DBS]:** подтвердить решение, переданное в [POST campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision](../../reference/orders/setReturnDecision.md). Для этого используйте запрос без тела.  |**:no-translate[⚙️] Лимит:** 10 000 запросов в час| |-|

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


$apiInstance = new OpenAPI\Client\Api\ReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах.
$order_id = 56; // int | Идентификатор заказа.
$return_id = 56; // int | Идентификатор невыкупа или возврата.
$submit_return_decision_request = new \OpenAPI\Client\Model\SubmitReturnDecisionRequest(); // \OpenAPI\Client\Model\SubmitReturnDecisionRequest | description

try {
    $result = $apiInstance->submitReturnDecision($campaign_id, $order_id, $return_id, $submit_return_decision_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsApi->submitReturnDecision: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании.  Его можно узнать с помощью запроса [:no-translate[GET campaigns]](:no-translate[../../reference/campaigns/getCampaigns.md]) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **return_id** | **int**| Идентификатор невыкупа или возврата. | |
| **submit_return_decision_request** | [**\OpenAPI\Client\Model\SubmitReturnDecisionRequest**](../Model/SubmitReturnDecisionRequest.md)| description | [optional] |

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
