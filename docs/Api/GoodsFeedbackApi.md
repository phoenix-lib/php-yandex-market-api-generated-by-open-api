# OpenAPI\Client\GoodsFeedbackApi



All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteGoodsFeedbackComment()**](GoodsFeedbackApi.md#deleteGoodsFeedbackComment) | **POST** /v2/businesses/{businessId}/goods-feedback/comments/delete | Удаление комментария к отзыву |
| [**getGoodsFeedbackComments()**](GoodsFeedbackApi.md#getGoodsFeedbackComments) | **POST** /v2/businesses/{businessId}/goods-feedback/comments | Получение комментариев к отзыву |
| [**getGoodsFeedbacks()**](GoodsFeedbackApi.md#getGoodsFeedbacks) | **POST** /v2/businesses/{businessId}/goods-feedback | Получение отзывов о товарах продавца |
| [**getGoodsFeedbacksUrbanads()**](GoodsFeedbackApi.md#getGoodsFeedbacksUrbanads) | **POST** /v1/businesses/{businessId}/goods-feedback-advertiser | Получение отзывов о товарах для рекламодателей |
| [**skipGoodsFeedbacksReaction()**](GoodsFeedbackApi.md#skipGoodsFeedbacksReaction) | **POST** /v2/businesses/{businessId}/goods-feedback/skip-reaction | Пропуск реакции на отзывы |
| [**updateGoodsFeedbackComment()**](GoodsFeedbackApi.md#updateGoodsFeedbackComment) | **POST** /v2/businesses/{businessId}/goods-feedback/comments/update | Добавление нового или изменение созданного комментария |


## `deleteGoodsFeedbackComment()`

```php
deleteGoodsFeedbackComment($business_id, $delete_goods_feedback_comment_request, $source_type): \OpenAPI\Client\Model\EmptyApiResponse
```

Удаление комментария к отзыву

{% include notitle [access](../../_auto/method_scopes/deleteGoodsFeedbackComment.md) %}  Удаляет комментарий магазина.  {% include notitle [limit](../../_auto/method_limits/deleteGoodsFeedbackComment.md) %}

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


$apiInstance = new OpenAPI\Client\Api\GoodsFeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$delete_goods_feedback_comment_request = new \OpenAPI\Client\Model\DeleteGoodsFeedbackCommentRequest(); // \OpenAPI\Client\Model\DeleteGoodsFeedbackCommentRequest
$source_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SourceType(); // \OpenAPI\Client\Model\SourceType | Признак типа кабинета, от имени которого вызывается метод: {% if audience == \"partner\" %}  - `SELLER` — продавец.  {% endif %}  - `ADVERTISER` — рекламодатель.  {% if audience == \"advertiser\" %}  {% note info \"Обязательно указывайте sourceType=ADVERTISER в каждом запросе.\" %}     {% endnote %}  {% endif %}

try {
    $result = $apiInstance->deleteGoodsFeedbackComment($business_id, $delete_goods_feedback_comment_request, $source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsFeedbackApi->deleteGoodsFeedbackComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **delete_goods_feedback_comment_request** | [**\OpenAPI\Client\Model\DeleteGoodsFeedbackCommentRequest**](../Model/DeleteGoodsFeedbackCommentRequest.md)|  | |
| **source_type** | [**\OpenAPI\Client\Model\SourceType**](../Model/.md)| Признак типа кабинета, от имени которого вызывается метод: {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  - &#x60;SELLER&#x60; — продавец.  {% endif %}  - &#x60;ADVERTISER&#x60; — рекламодатель.  {% if audience &#x3D;&#x3D; \&quot;advertiser\&quot; %}  {% note info \&quot;Обязательно указывайте sourceType&#x3D;ADVERTISER в каждом запросе.\&quot; %}     {% endnote %}  {% endif %} | [optional] |

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

## `getGoodsFeedbackComments()`

```php
getGoodsFeedbackComments($business_id, $get_goods_feedback_comments_request, $page_token, $limit, $source_type): \OpenAPI\Client\Model\GetGoodsFeedbackCommentsResponse
```

Получение комментариев к отзыву

{% include notitle [access](../../_auto/method_scopes/getGoodsFeedbackComments.md) %}  Возвращает комментарии к отзыву, кроме:    * тех, которые удалили пользователи или Маркет;   * комментариев к удаленным отзывам.  Идентификатор родительского комментария `parentId` возвращается только для ответов на другие комментарии, но не для ответов на отзывы.  {% if audience == \"partner\" %}  {% note tip \"Вы также можете настроить API-уведомления\" %}  Маркет отправит вам [запрос](../../push-notifications/reference/sendNotification.md), когда появится новый комментарий. А полную информацию о нем можно получить с помощью этого метода.  [{#T}](../../push-notifications/index.md)  {% endnote %}  {% endif %}  Результаты возвращаются постранично.  Комментарии расположены в порядке публикации, поэтому вы можете передавать определенный идентификатор страницы в `pageToken`, если вы получали его ранее.  {% include notitle [limit](../../_auto/method_limits/getGoodsFeedbackComments.md) %}

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


$apiInstance = new OpenAPI\Client\Api\GoodsFeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$get_goods_feedback_comments_request = new \OpenAPI\Client\Model\GetGoodsFeedbackCommentsRequest(); // \OpenAPI\Client\Model\GetGoodsFeedbackCommentsRequest
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 25; // int | {{ limit-param-description }}
$source_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SourceType(); // \OpenAPI\Client\Model\SourceType | Признак типа кабинета, от имени которого вызывается метод: {% if audience == \"partner\" %}  - `SELLER` — продавец.  {% endif %}  - `ADVERTISER` — рекламодатель.  {% if audience == \"advertiser\" %}  {% note info \"Обязательно указывайте sourceType=ADVERTISER в каждом запросе.\" %}     {% endnote %}  {% endif %}

try {
    $result = $apiInstance->getGoodsFeedbackComments($business_id, $get_goods_feedback_comments_request, $page_token, $limit, $source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsFeedbackApi->getGoodsFeedbackComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **get_goods_feedback_comments_request** | [**\OpenAPI\Client\Model\GetGoodsFeedbackCommentsRequest**](../Model/GetGoodsFeedbackCommentsRequest.md)|  | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 25] |
| **source_type** | [**\OpenAPI\Client\Model\SourceType**](../Model/.md)| Признак типа кабинета, от имени которого вызывается метод: {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  - &#x60;SELLER&#x60; — продавец.  {% endif %}  - &#x60;ADVERTISER&#x60; — рекламодатель.  {% if audience &#x3D;&#x3D; \&quot;advertiser\&quot; %}  {% note info \&quot;Обязательно указывайте sourceType&#x3D;ADVERTISER в каждом запросе.\&quot; %}     {% endnote %}  {% endif %} | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetGoodsFeedbackCommentsResponse**](../Model/GetGoodsFeedbackCommentsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGoodsFeedbacks()`

```php
getGoodsFeedbacks($business_id, $page_token, $limit, $get_goods_feedback_request): \OpenAPI\Client\Model\GetGoodsFeedbackResponse
```

Получение отзывов о товарах продавца

{% include notitle [access](../../_auto/method_scopes/getGoodsFeedbacks.md) %}  Возвращает отзывы о товарах продавца по указанным фильтрам. **Исключение:** отзывы, которые удалили покупатели или Маркет.  {% note tip \"Вы также можете настроить API-уведомления\" %}  Маркет отправит вам [запрос](../../push-notifications/reference/sendNotification.md), когда появится новый отзыв. А полную информацию о нем можно получить с помощью этого метода.  [{#T}](../../push-notifications/index.md)  {% endnote %}  Результаты возвращаются постранично.  Отзывы расположены в порядке публикации, поэтому вы можете передавать определенный идентификатор страницы в `pageToken`, если вы получали его ранее.  {% include notitle [limit](../../_auto/method_limits/getGoodsFeedbacks.md) %}

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


$apiInstance = new OpenAPI\Client\Api\GoodsFeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 25; // int | {{ limit-param-description }}
$get_goods_feedback_request = new \OpenAPI\Client\Model\GetGoodsFeedbackRequest(); // \OpenAPI\Client\Model\GetGoodsFeedbackRequest

try {
    $result = $apiInstance->getGoodsFeedbacks($business_id, $page_token, $limit, $get_goods_feedback_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsFeedbackApi->getGoodsFeedbacks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 25] |
| **get_goods_feedback_request** | [**\OpenAPI\Client\Model\GetGoodsFeedbackRequest**](../Model/GetGoodsFeedbackRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetGoodsFeedbackResponse**](../Model/GetGoodsFeedbackResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGoodsFeedbacksUrbanads()`

```php
getGoodsFeedbacksUrbanads($business_id, $page_token, $limit, $source_type, $get_goods_feedback_urbanads_request): \OpenAPI\Client\Model\GetGoodsFeedbackUrbanadsResponse
```

Получение отзывов о товарах для рекламодателей

{% include notitle [access](../../_auto/method_scopes/getGoodsFeedbacksUrbanads.md) %}  Возвращает отзывы о товарах бренда по указанным фильтрам. **Исключение:** отзывы, которые удалили покупатели или Маркет.  Результаты возвращаются постранично.  Отзывы расположены в порядке публикации, поэтому вы можете передавать определенный идентификатор страницы в `pageToken`, если вы получали его ранее.  {% include notitle [limit](../../_auto/method_limits/getGoodsFeedbacksUrbanads.md) %}

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


$apiInstance = new OpenAPI\Client\Api\GoodsFeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 25; // int | {{ limit-param-description }}
$source_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SourceType(); // \OpenAPI\Client\Model\SourceType | Признак типа кабинета, от имени которого вызывается метод: {% if audience == \"partner\" %}  - `SELLER` — продавец.  {% endif %}  - `ADVERTISER` — рекламодатель.  {% if audience == \"advertiser\" %}  {% note info \"Обязательно указывайте sourceType=ADVERTISER в каждом запросе.\" %}     {% endnote %}  {% endif %}
$get_goods_feedback_urbanads_request = new \OpenAPI\Client\Model\GetGoodsFeedbackUrbanadsRequest(); // \OpenAPI\Client\Model\GetGoodsFeedbackUrbanadsRequest

try {
    $result = $apiInstance->getGoodsFeedbacksUrbanads($business_id, $page_token, $limit, $source_type, $get_goods_feedback_urbanads_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsFeedbackApi->getGoodsFeedbacksUrbanads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 25] |
| **source_type** | [**\OpenAPI\Client\Model\SourceType**](../Model/.md)| Признак типа кабинета, от имени которого вызывается метод: {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  - &#x60;SELLER&#x60; — продавец.  {% endif %}  - &#x60;ADVERTISER&#x60; — рекламодатель.  {% if audience &#x3D;&#x3D; \&quot;advertiser\&quot; %}  {% note info \&quot;Обязательно указывайте sourceType&#x3D;ADVERTISER в каждом запросе.\&quot; %}     {% endnote %}  {% endif %} | [optional] |
| **get_goods_feedback_urbanads_request** | [**\OpenAPI\Client\Model\GetGoodsFeedbackUrbanadsRequest**](../Model/GetGoodsFeedbackUrbanadsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetGoodsFeedbackUrbanadsResponse**](../Model/GetGoodsFeedbackUrbanadsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `skipGoodsFeedbacksReaction()`

```php
skipGoodsFeedbacksReaction($business_id, $skip_goods_feedback_reaction_request, $source_type): \OpenAPI\Client\Model\EmptyApiResponse
```

Пропуск реакции на отзывы

{% include notitle [access](../../_auto/method_scopes/skipGoodsFeedbacksReaction.md) %}  Пропускает реакцию на отзыв — параметр `needReaction` принимает значение `false` в методе получения всех отзывов [POST v2/businesses/{businessId}/goods-feedback](../../reference/goods-feedback/getGoodsFeedbacks.md).  {% include notitle [limit](../../_auto/method_limits/skipGoodsFeedbacksReaction.md) %}

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


$apiInstance = new OpenAPI\Client\Api\GoodsFeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$skip_goods_feedback_reaction_request = new \OpenAPI\Client\Model\SkipGoodsFeedbackReactionRequest(); // \OpenAPI\Client\Model\SkipGoodsFeedbackReactionRequest
$source_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SourceType(); // \OpenAPI\Client\Model\SourceType | Признак типа кабинета, от имени которого вызывается метод: {% if audience == \"partner\" %}  - `SELLER` — продавец.  {% endif %}  - `ADVERTISER` — рекламодатель.  {% if audience == \"advertiser\" %}  {% note info \"Обязательно указывайте sourceType=ADVERTISER в каждом запросе.\" %}     {% endnote %}  {% endif %}

try {
    $result = $apiInstance->skipGoodsFeedbacksReaction($business_id, $skip_goods_feedback_reaction_request, $source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsFeedbackApi->skipGoodsFeedbacksReaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **skip_goods_feedback_reaction_request** | [**\OpenAPI\Client\Model\SkipGoodsFeedbackReactionRequest**](../Model/SkipGoodsFeedbackReactionRequest.md)|  | |
| **source_type** | [**\OpenAPI\Client\Model\SourceType**](../Model/.md)| Признак типа кабинета, от имени которого вызывается метод: {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  - &#x60;SELLER&#x60; — продавец.  {% endif %}  - &#x60;ADVERTISER&#x60; — рекламодатель.  {% if audience &#x3D;&#x3D; \&quot;advertiser\&quot; %}  {% note info \&quot;Обязательно указывайте sourceType&#x3D;ADVERTISER в каждом запросе.\&quot; %}     {% endnote %}  {% endif %} | [optional] |

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

## `updateGoodsFeedbackComment()`

```php
updateGoodsFeedbackComment($business_id, $update_goods_feedback_comment_request, $source_type): \OpenAPI\Client\Model\UpdateGoodsFeedbackCommentResponse
```

Добавление нового или изменение созданного комментария

{% include notitle [access](../../_auto/method_scopes/updateGoodsFeedbackComment.md) %}  Добавляет новый комментарий магазина или изменяет комментарий, который магазин оставлял ранее.  Для создания комментария к отзыву передайте только идентификатор отзыва `feedbackId`.  Чтобы добавить комментарий к другому комментарию, передайте:  * `feedbackId` — идентификатор отзыва; * `comment.parentId` — идентификатор родительского комментария.  Чтобы изменить комментарий, передайте:  * `feedbackId`— идентификатор отзыва; * `comment.id` — идентификатор комментария, который нужно изменить.  Если передать одновременно `comment.parentId` и `comment.id`, будет изменен существующий комментарий.  {% include notitle [limit](../../_auto/method_limits/updateGoodsFeedbackComment.md) %}

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


$apiInstance = new OpenAPI\Client\Api\GoodsFeedbackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$update_goods_feedback_comment_request = new \OpenAPI\Client\Model\UpdateGoodsFeedbackCommentRequest(); // \OpenAPI\Client\Model\UpdateGoodsFeedbackCommentRequest
$source_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SourceType(); // \OpenAPI\Client\Model\SourceType | Признак типа кабинета, от имени которого вызывается метод: {% if audience == \"partner\" %}  - `SELLER` — продавец.  {% endif %}  - `ADVERTISER` — рекламодатель.  {% if audience == \"advertiser\" %}  {% note info \"Обязательно указывайте sourceType=ADVERTISER в каждом запросе.\" %}     {% endnote %}  {% endif %}

try {
    $result = $apiInstance->updateGoodsFeedbackComment($business_id, $update_goods_feedback_comment_request, $source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsFeedbackApi->updateGoodsFeedbackComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **update_goods_feedback_comment_request** | [**\OpenAPI\Client\Model\UpdateGoodsFeedbackCommentRequest**](../Model/UpdateGoodsFeedbackCommentRequest.md)|  | |
| **source_type** | [**\OpenAPI\Client\Model\SourceType**](../Model/.md)| Признак типа кабинета, от имени которого вызывается метод: {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  - &#x60;SELLER&#x60; — продавец.  {% endif %}  - &#x60;ADVERTISER&#x60; — рекламодатель.  {% if audience &#x3D;&#x3D; \&quot;advertiser\&quot; %}  {% note info \&quot;Обязательно указывайте sourceType&#x3D;ADVERTISER в каждом запросе.\&quot; %}     {% endnote %}  {% endif %} | [optional] |

### Return type

[**\OpenAPI\Client\Model\UpdateGoodsFeedbackCommentResponse**](../Model/UpdateGoodsFeedbackCommentResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
