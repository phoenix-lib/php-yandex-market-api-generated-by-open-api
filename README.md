# OpenAPIClient-php

API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.

В числе возможностей интеграции:

* управление каталогом товаров и витриной,

* обработка заказов,

* изменение настроек магазина,

* получение отчетов.



## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAuthTokenInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getAuthTokenInfo: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.partner.market.yandex.ru*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthApi* | [**getAuthTokenInfo**](docs/Api/AuthApi.md#getauthtokeninfo) | **POST** /auth/token | Получение информации об авторизационном токене
*BidsApi* | [**getBidsInfoForBusiness**](docs/Api/BidsApi.md#getbidsinfoforbusiness) | **POST** /businesses/{businessId}/bids/info | Информация об установленных ставках
*BidsApi* | [**getBidsRecommendations**](docs/Api/BidsApi.md#getbidsrecommendations) | **POST** /businesses/{businessId}/bids/recommendations | Рекомендованные ставки для заданных товаров
*BidsApi* | [**putBidsForBusiness**](docs/Api/BidsApi.md#putbidsforbusiness) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок
*BidsApi* | [**putBidsForCampaign**](docs/Api/BidsApi.md#putbidsforcampaign) | **PUT** /campaigns/{campaignId}/bids | Включение буста продаж и установка ставок для магазина
*BusinessOfferMappingsApi* | [**addOffersToArchive**](docs/Api/BusinessOfferMappingsApi.md#addofferstoarchive) | **POST** /businesses/{businessId}/offer-mappings/archive | Добавление товаров в архив
*BusinessOfferMappingsApi* | [**deleteOffers**](docs/Api/BusinessOfferMappingsApi.md#deleteoffers) | **POST** /businesses/{businessId}/offer-mappings/delete | Удаление товаров из каталога
*BusinessOfferMappingsApi* | [**deleteOffersFromArchive**](docs/Api/BusinessOfferMappingsApi.md#deleteoffersfromarchive) | **POST** /businesses/{businessId}/offer-mappings/unarchive | Удаление товаров из архива
*BusinessOfferMappingsApi* | [**getOfferMappings**](docs/Api/BusinessOfferMappingsApi.md#getoffermappings) | **POST** /businesses/{businessId}/offer-mappings | Информация о товарах в каталоге
*BusinessOfferMappingsApi* | [**getSuggestedOfferMappings**](docs/Api/BusinessOfferMappingsApi.md#getsuggestedoffermappings) | **POST** /businesses/{businessId}/offer-mappings/suggestions | Просмотр карточек на Маркете, которые подходят вашим товарам
*BusinessOfferMappingsApi* | [**updateOfferMappings**](docs/Api/BusinessOfferMappingsApi.md#updateoffermappings) | **POST** /businesses/{businessId}/offer-mappings/update | Добавление товаров в каталог и изменение информации о них
*BusinessesApi* | [**getBusinessSettings**](docs/Api/BusinessesApi.md#getbusinesssettings) | **POST** /businesses/{businessId}/settings | Настройки кабинета
*CampaignsApi* | [**getCampaign**](docs/Api/CampaignsApi.md#getcampaign) | **GET** /campaigns/{campaignId} | Информация о магазине
*CampaignsApi* | [**getCampaignSettings**](docs/Api/CampaignsApi.md#getcampaignsettings) | **GET** /campaigns/{campaignId}/settings | Настройки магазина
*CampaignsApi* | [**getCampaigns**](docs/Api/CampaignsApi.md#getcampaigns) | **GET** /campaigns | Список магазинов пользователя
*CategoriesApi* | [**getCategoriesMaxSaleQuantum**](docs/Api/CategoriesApi.md#getcategoriesmaxsalequantum) | **POST** /categories/max-sale-quantum | Лимит на установку кванта продажи и минимального количества товаров в заказе
*CategoriesApi* | [**getCategoriesTree**](docs/Api/CategoriesApi.md#getcategoriestree) | **POST** /categories/tree | Дерево категорий
*ChatsApi* | [**createChat**](docs/Api/ChatsApi.md#createchat) | **POST** /businesses/{businessId}/chats/new | Создание нового чата с покупателем
*ChatsApi* | [**getChat**](docs/Api/ChatsApi.md#getchat) | **GET** /businesses/{businessId}/chat | Получение чата по идентификатору
*ChatsApi* | [**getChatHistory**](docs/Api/ChatsApi.md#getchathistory) | **POST** /businesses/{businessId}/chats/history | Получение истории сообщений в чате
*ChatsApi* | [**getChatMessage**](docs/Api/ChatsApi.md#getchatmessage) | **GET** /businesses/{businessId}/chats/message | Получение сообщения в чате
*ChatsApi* | [**getChats**](docs/Api/ChatsApi.md#getchats) | **POST** /businesses/{businessId}/chats | Получение доступных чатов
*ChatsApi* | [**sendFileToChat**](docs/Api/ChatsApi.md#sendfiletochat) | **POST** /businesses/{businessId}/chats/file/send | Отправка файла в чат
*ChatsApi* | [**sendMessageToChat**](docs/Api/ChatsApi.md#sendmessagetochat) | **POST** /businesses/{businessId}/chats/message | Отправка сообщения в чат
*ContentApi* | [**getCategoryContentParameters**](docs/Api/ContentApi.md#getcategorycontentparameters) | **POST** /category/{categoryId}/parameters | Списки характеристик товаров по категориям
*ContentApi* | [**getOfferCardsContentStatus**](docs/Api/ContentApi.md#getoffercardscontentstatus) | **POST** /businesses/{businessId}/offer-cards | Получение информации о заполненности карточек магазина
*ContentApi* | [**updateOfferContent**](docs/Api/ContentApi.md#updateoffercontent) | **POST** /businesses/{businessId}/offer-cards/update | Редактирование категорийных характеристик товара
*DbsApi* | [**acceptOrderCancellation**](docs/Api/DbsApi.md#acceptordercancellation) | **PUT** /campaigns/{campaignId}/orders/{orderId}/cancellation/accept | Отмена заказа покупателем
*DbsApi* | [**addHiddenOffers**](docs/Api/DbsApi.md#addhiddenoffers) | **POST** /campaigns/{campaignId}/hidden-offers | Скрытие товаров и настройки скрытия
*DbsApi* | [**addOffersToArchive**](docs/Api/DbsApi.md#addofferstoarchive) | **POST** /businesses/{businessId}/offer-mappings/archive | Добавление товаров в архив
*DbsApi* | [**calculateTariffs**](docs/Api/DbsApi.md#calculatetariffs) | **POST** /tariffs/calculate | Калькулятор стоимости услуг
*DbsApi* | [**confirmBusinessPrices**](docs/Api/DbsApi.md#confirmbusinessprices) | **POST** /businesses/{businessId}/price-quarantine/confirm | Удаление товара из карантина по цене в кабинете
*DbsApi* | [**confirmCampaignPrices**](docs/Api/DbsApi.md#confirmcampaignprices) | **POST** /campaigns/{campaignId}/price-quarantine/confirm | Удаление товара из карантина по цене в магазине
*DbsApi* | [**createChat**](docs/Api/DbsApi.md#createchat) | **POST** /businesses/{businessId}/chats/new | Создание нового чата с покупателем
*DbsApi* | [**createOutlet**](docs/Api/DbsApi.md#createoutlet) | **POST** /campaigns/{campaignId}/outlets | Создание точки продаж
*DbsApi* | [**deleteCampaignOffers**](docs/Api/DbsApi.md#deletecampaignoffers) | **POST** /campaigns/{campaignId}/offers/delete | Удаление товаров из ассортимента магазина
*DbsApi* | [**deleteGoodsFeedbackComment**](docs/Api/DbsApi.md#deletegoodsfeedbackcomment) | **POST** /businesses/{businessId}/goods-feedback/comments/delete | Удаление комментария к отзыву
*DbsApi* | [**deleteHiddenOffers**](docs/Api/DbsApi.md#deletehiddenoffers) | **POST** /campaigns/{campaignId}/hidden-offers/delete | Возобновление показа товаров
*DbsApi* | [**deleteOffers**](docs/Api/DbsApi.md#deleteoffers) | **POST** /businesses/{businessId}/offer-mappings/delete | Удаление товаров из каталога
*DbsApi* | [**deleteOffersFromArchive**](docs/Api/DbsApi.md#deleteoffersfromarchive) | **POST** /businesses/{businessId}/offer-mappings/unarchive | Удаление товаров из архива
*DbsApi* | [**deleteOutlet**](docs/Api/DbsApi.md#deleteoutlet) | **DELETE** /campaigns/{campaignId}/outlets/{outletId} | Удаление точки продаж
*DbsApi* | [**deleteOutletLicenses**](docs/Api/DbsApi.md#deleteoutletlicenses) | **DELETE** /campaigns/{campaignId}/outlets/licenses | Удаление лицензий для точек продаж
*DbsApi* | [**deletePromoOffers**](docs/Api/DbsApi.md#deletepromooffers) | **POST** /businesses/{businessId}/promos/offers/delete | Удаление товаров из акции
*DbsApi* | [**generateBannersStatisticsReport**](docs/Api/DbsApi.md#generatebannersstatisticsreport) | **POST** /reports/banners-statistics/generate | Отчет по охватному продвижению
*DbsApi* | [**generateBoostConsolidatedReport**](docs/Api/DbsApi.md#generateboostconsolidatedreport) | **POST** /reports/boost-consolidated/generate | Отчет по бусту продаж
*DbsApi* | [**generateClosureDocumentsDetalizationReport**](docs/Api/DbsApi.md#generateclosuredocumentsdetalizationreport) | **POST** /reports/closure-documents/detalization/generate | Отчет по схождению с закрывающими документами
*DbsApi* | [**generateClosureDocumentsReport**](docs/Api/DbsApi.md#generateclosuredocumentsreport) | **POST** /reports/closure-documents/generate | Закрывающие документы
*DbsApi* | [**generateCompetitorsPositionReport**](docs/Api/DbsApi.md#generatecompetitorspositionreport) | **POST** /reports/competitors-position/generate | Отчет «Конкурентная позиция»
*DbsApi* | [**generateGoodsFeedbackReport**](docs/Api/DbsApi.md#generategoodsfeedbackreport) | **POST** /reports/goods-feedback/generate | Отчет по отзывам о товарах
*DbsApi* | [**generateGoodsRealizationReport**](docs/Api/DbsApi.md#generategoodsrealizationreport) | **POST** /reports/goods-realization/generate | Отчет по реализации
*DbsApi* | [**generateJewelryFiscalReport**](docs/Api/DbsApi.md#generatejewelryfiscalreport) | **POST** /reports/jewelry-fiscal/generate | Отчет по заказам с ювелирными изделиями
*DbsApi* | [**generateKeyIndicatorsReport**](docs/Api/DbsApi.md#generatekeyindicatorsreport) | **POST** /reports/key-indicators/generate | Отчет по ключевым показателям
*DbsApi* | [**generateMassOrderLabelsReport**](docs/Api/DbsApi.md#generatemassorderlabelsreport) | **POST** /reports/documents/labels/generate | Готовые ярлыки‑наклейки на все коробки в нескольких заказах
*DbsApi* | [**generateOrderLabel**](docs/Api/DbsApi.md#generateorderlabel) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label | Готовый ярлык‑наклейка для коробки в заказе
*DbsApi* | [**generateOrderLabels**](docs/Api/DbsApi.md#generateorderlabels) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels | Готовые ярлыки‑наклейки на все коробки в одном заказе
*DbsApi* | [**generatePricesReport**](docs/Api/DbsApi.md#generatepricesreport) | **POST** /reports/prices/generate | Отчет «Цены на рынке»
*DbsApi* | [**generateSalesGeographyReport**](docs/Api/DbsApi.md#generatesalesgeographyreport) | **POST** /reports/sales-geography/generate | Отчет по географии продаж
*DbsApi* | [**generateShelfsStatisticsReport**](docs/Api/DbsApi.md#generateshelfsstatisticsreport) | **POST** /reports/shelf-statistics/generate | Отчет по полкам
*DbsApi* | [**generateShowsBoostReport**](docs/Api/DbsApi.md#generateshowsboostreport) | **POST** /reports/shows-boost/generate | Отчет по бусту показов
*DbsApi* | [**generateShowsSalesReport**](docs/Api/DbsApi.md#generateshowssalesreport) | **POST** /reports/shows-sales/generate | Отчет «Аналитика продаж»
*DbsApi* | [**generateStocksOnWarehousesReport**](docs/Api/DbsApi.md#generatestocksonwarehousesreport) | **POST** /reports/stocks-on-warehouses/generate | Отчет по остаткам на складах
*DbsApi* | [**generateUnitedMarketplaceServicesReport**](docs/Api/DbsApi.md#generateunitedmarketplaceservicesreport) | **POST** /reports/united-marketplace-services/generate | Отчет по стоимости услуг
*DbsApi* | [**generateUnitedNettingReport**](docs/Api/DbsApi.md#generateunitednettingreport) | **POST** /reports/united-netting/generate | Отчет по платежам
*DbsApi* | [**generateUnitedOrdersReport**](docs/Api/DbsApi.md#generateunitedordersreport) | **POST** /reports/united-orders/generate | Отчет по заказам
*DbsApi* | [**generateUnitedReturnsReport**](docs/Api/DbsApi.md#generateunitedreturnsreport) | **POST** /reports/united-returns/generate | Отчет по невыкупам и возвратам
*DbsApi* | [**getAuthTokenInfo**](docs/Api/DbsApi.md#getauthtokeninfo) | **POST** /auth/token | Получение информации об авторизационном токене
*DbsApi* | [**getBidsInfoForBusiness**](docs/Api/DbsApi.md#getbidsinfoforbusiness) | **POST** /businesses/{businessId}/bids/info | Информация об установленных ставках
*DbsApi* | [**getBidsRecommendations**](docs/Api/DbsApi.md#getbidsrecommendations) | **POST** /businesses/{businessId}/bids/recommendations | Рекомендованные ставки для заданных товаров
*DbsApi* | [**getBusinessQuarantineOffers**](docs/Api/DbsApi.md#getbusinessquarantineoffers) | **POST** /businesses/{businessId}/price-quarantine | Список товаров, находящихся в карантине по цене в кабинете
*DbsApi* | [**getBusinessSettings**](docs/Api/DbsApi.md#getbusinesssettings) | **POST** /businesses/{businessId}/settings | Настройки кабинета
*DbsApi* | [**getCampaign**](docs/Api/DbsApi.md#getcampaign) | **GET** /campaigns/{campaignId} | Информация о магазине
*DbsApi* | [**getCampaignOffers**](docs/Api/DbsApi.md#getcampaignoffers) | **POST** /campaigns/{campaignId}/offers | Информация о товарах, которые размещены в заданном магазине
*DbsApi* | [**getCampaignQuarantineOffers**](docs/Api/DbsApi.md#getcampaignquarantineoffers) | **POST** /campaigns/{campaignId}/price-quarantine | Список товаров, находящихся в карантине по цене в магазине
*DbsApi* | [**getCampaignSettings**](docs/Api/DbsApi.md#getcampaignsettings) | **GET** /campaigns/{campaignId}/settings | Настройки магазина
*DbsApi* | [**getCampaigns**](docs/Api/DbsApi.md#getcampaigns) | **GET** /campaigns | Список магазинов пользователя
*DbsApi* | [**getCategoriesMaxSaleQuantum**](docs/Api/DbsApi.md#getcategoriesmaxsalequantum) | **POST** /categories/max-sale-quantum | Лимит на установку кванта продажи и минимального количества товаров в заказе
*DbsApi* | [**getCategoriesTree**](docs/Api/DbsApi.md#getcategoriestree) | **POST** /categories/tree | Дерево категорий
*DbsApi* | [**getCategoryContentParameters**](docs/Api/DbsApi.md#getcategorycontentparameters) | **POST** /category/{categoryId}/parameters | Списки характеристик товаров по категориям
*DbsApi* | [**getChat**](docs/Api/DbsApi.md#getchat) | **GET** /businesses/{businessId}/chat | Получение чата по идентификатору
*DbsApi* | [**getChatHistory**](docs/Api/DbsApi.md#getchathistory) | **POST** /businesses/{businessId}/chats/history | Получение истории сообщений в чате
*DbsApi* | [**getChatMessage**](docs/Api/DbsApi.md#getchatmessage) | **GET** /businesses/{businessId}/chats/message | Получение сообщения в чате
*DbsApi* | [**getChats**](docs/Api/DbsApi.md#getchats) | **POST** /businesses/{businessId}/chats | Получение доступных чатов
*DbsApi* | [**getDefaultPrices**](docs/Api/DbsApi.md#getdefaultprices) | **POST** /businesses/{businessId}/offer-prices | Просмотр цен на указанные товары во всех магазинах
*DbsApi* | [**getDeliveryServices**](docs/Api/DbsApi.md#getdeliveryservices) | **GET** /delivery/services | Справочник служб доставки
*DbsApi* | [**getGoodsFeedbackComments**](docs/Api/DbsApi.md#getgoodsfeedbackcomments) | **POST** /businesses/{businessId}/goods-feedback/comments | Получение комментариев к отзыву
*DbsApi* | [**getGoodsFeedbacks**](docs/Api/DbsApi.md#getgoodsfeedbacks) | **POST** /businesses/{businessId}/goods-feedback | Получение отзывов о товарах продавца
*DbsApi* | [**getGoodsStats**](docs/Api/DbsApi.md#getgoodsstats) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам
*DbsApi* | [**getHiddenOffers**](docs/Api/DbsApi.md#gethiddenoffers) | **GET** /campaigns/{campaignId}/hidden-offers | Информация о скрытых вами товарах
*DbsApi* | [**getModel**](docs/Api/DbsApi.md#getmodel) | **GET** /models/{modelId} | Информация об одной модели
*DbsApi* | [**getModelOffers**](docs/Api/DbsApi.md#getmodeloffers) | **GET** /models/{modelId}/offers | Список предложений для одной модели
*DbsApi* | [**getModels**](docs/Api/DbsApi.md#getmodels) | **POST** /models | Информация о нескольких моделях
*DbsApi* | [**getModelsOffers**](docs/Api/DbsApi.md#getmodelsoffers) | **POST** /models/offers | Список предложений для нескольких моделей
*DbsApi* | [**getOfferCardsContentStatus**](docs/Api/DbsApi.md#getoffercardscontentstatus) | **POST** /businesses/{businessId}/offer-cards | Получение информации о заполненности карточек магазина
*DbsApi* | [**getOfferMappingEntries**](docs/Api/DbsApi.md#getoffermappingentries) | **GET** /campaigns/{campaignId}/offer-mapping-entries | Список товаров в каталоге
*DbsApi* | [**getOfferMappings**](docs/Api/DbsApi.md#getoffermappings) | **POST** /businesses/{businessId}/offer-mappings | Информация о товарах в каталоге
*DbsApi* | [**getOfferRecommendations**](docs/Api/DbsApi.md#getofferrecommendations) | **POST** /businesses/{businessId}/offers/recommendations | Рекомендации Маркета, касающиеся цен
*DbsApi* | [**getOrder**](docs/Api/DbsApi.md#getorder) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация об одном заказе
*DbsApi* | [**getOrderBusinessBuyerInfo**](docs/Api/DbsApi.md#getorderbusinessbuyerinfo) | **POST** /campaigns/{campaignId}/orders/{orderId}/business-buyer | Информация о покупателе — юридическом лице
*DbsApi* | [**getOrderBusinessDocumentsInfo**](docs/Api/DbsApi.md#getorderbusinessdocumentsinfo) | **POST** /campaigns/{campaignId}/orders/{orderId}/documents | Информация о документах
*DbsApi* | [**getOrderBuyerInfo**](docs/Api/DbsApi.md#getorderbuyerinfo) | **GET** /campaigns/{campaignId}/orders/{orderId}/buyer | Информация о покупателе — физическом лице
*DbsApi* | [**getOrderLabelsData**](docs/Api/DbsApi.md#getorderlabelsdata) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels/data | Данные для самостоятельного изготовления ярлыков
*DbsApi* | [**getOrders**](docs/Api/DbsApi.md#getorders) | **GET** /campaigns/{campaignId}/orders | Информация о нескольких заказах
*DbsApi* | [**getOrdersStats**](docs/Api/DbsApi.md#getordersstats) | **POST** /campaigns/{campaignId}/stats/orders | Детальная информация по заказам
*DbsApi* | [**getOutlet**](docs/Api/DbsApi.md#getoutlet) | **GET** /campaigns/{campaignId}/outlets/{outletId} | Информация об одной точке продаж
*DbsApi* | [**getOutletLicenses**](docs/Api/DbsApi.md#getoutletlicenses) | **GET** /campaigns/{campaignId}/outlets/licenses | Информация о лицензиях для точек продаж
*DbsApi* | [**getOutlets**](docs/Api/DbsApi.md#getoutlets) | **GET** /campaigns/{campaignId}/outlets | Информация о нескольких точках продаж
*DbsApi* | [**getPagedWarehouses**](docs/Api/DbsApi.md#getpagedwarehouses) | **POST** /businesses/{businessId}/warehouses | Список складов
*DbsApi* | [**getPrices**](docs/Api/DbsApi.md#getprices) | **GET** /campaigns/{campaignId}/offer-prices | Список цен
*DbsApi* | [**getPricesByOfferIds**](docs/Api/DbsApi.md#getpricesbyofferids) | **POST** /campaigns/{campaignId}/offer-prices | Просмотр цен на указанные товары в конкретном магазине
*DbsApi* | [**getPromoOffers**](docs/Api/DbsApi.md#getpromooffers) | **POST** /businesses/{businessId}/promos/offers | Получение списка товаров, которые участвуют или могут участвовать в акции
*DbsApi* | [**getPromos**](docs/Api/DbsApi.md#getpromos) | **POST** /businesses/{businessId}/promos | Получение списка акций
*DbsApi* | [**getQualityRatingDetails**](docs/Api/DbsApi.md#getqualityratingdetails) | **POST** /campaigns/{campaignId}/ratings/quality/details | Заказы, которые повлияли на индекс качества
*DbsApi* | [**getQualityRatings**](docs/Api/DbsApi.md#getqualityratings) | **POST** /businesses/{businessId}/ratings/quality | Индекс качества магазинов
*DbsApi* | [**getRegionsCodes**](docs/Api/DbsApi.md#getregionscodes) | **POST** /regions/countries | Список допустимых кодов стран
*DbsApi* | [**getReportInfo**](docs/Api/DbsApi.md#getreportinfo) | **GET** /reports/info/{reportId} | Получение заданного отчета или документа
*DbsApi* | [**getReturn**](docs/Api/DbsApi.md#getreturn) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о невыкупе или возврате
*DbsApi* | [**getReturnApplication**](docs/Api/DbsApi.md#getreturnapplication) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application | Получение заявления на возврат
*DbsApi* | [**getReturnPhoto**](docs/Api/DbsApi.md#getreturnphoto) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографий товаров в возврате
*DbsApi* | [**getReturns**](docs/Api/DbsApi.md#getreturns) | **GET** /campaigns/{campaignId}/returns | Список невыкупов и возвратов
*DbsApi* | [**getStocks**](docs/Api/DbsApi.md#getstocks) | **POST** /campaigns/{campaignId}/offers/stocks | Информация об остатках и оборачиваемости
*DbsApi* | [**getSuggestedOfferMappingEntries**](docs/Api/DbsApi.md#getsuggestedoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/suggestions | Рекомендованные карточки для товаров
*DbsApi* | [**getSuggestedOfferMappings**](docs/Api/DbsApi.md#getsuggestedoffermappings) | **POST** /businesses/{businessId}/offer-mappings/suggestions | Просмотр карточек на Маркете, которые подходят вашим товарам
*DbsApi* | [**getSuggestedPrices**](docs/Api/DbsApi.md#getsuggestedprices) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров
*DbsApi* | [**getWarehouses**](docs/Api/DbsApi.md#getwarehouses) | **GET** /businesses/{businessId}/warehouses | Список складов и групп складов
*DbsApi* | [**provideOrderDigitalCodes**](docs/Api/DbsApi.md#provideorderdigitalcodes) | **POST** /campaigns/{campaignId}/orders/{orderId}/deliverDigitalGoods | Передача ключей цифровых товаров
*DbsApi* | [**provideOrderItemIdentifiers**](docs/Api/DbsApi.md#provideorderitemidentifiers) | **PUT** /campaigns/{campaignId}/orders/{orderId}/identifiers | Передача кодов маркировки единиц товара
*DbsApi* | [**putBidsForBusiness**](docs/Api/DbsApi.md#putbidsforbusiness) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок
*DbsApi* | [**putBidsForCampaign**](docs/Api/DbsApi.md#putbidsforcampaign) | **PUT** /campaigns/{campaignId}/bids | Включение буста продаж и установка ставок для магазина
*DbsApi* | [**searchModels**](docs/Api/DbsApi.md#searchmodels) | **GET** /models | Поиск модели товара
*DbsApi* | [**searchRegionChildren**](docs/Api/DbsApi.md#searchregionchildren) | **GET** /regions/{regionId}/children | Информация о дочерних регионах
*DbsApi* | [**searchRegionsById**](docs/Api/DbsApi.md#searchregionsbyid) | **GET** /regions/{regionId} | Информация о регионе
*DbsApi* | [**searchRegionsByName**](docs/Api/DbsApi.md#searchregionsbyname) | **GET** /regions | Поиск регионов по их имени
*DbsApi* | [**sendFileToChat**](docs/Api/DbsApi.md#sendfiletochat) | **POST** /businesses/{businessId}/chats/file/send | Отправка файла в чат
*DbsApi* | [**sendMessageToChat**](docs/Api/DbsApi.md#sendmessagetochat) | **POST** /businesses/{businessId}/chats/message | Отправка сообщения в чат
*DbsApi* | [**setOrderBoxLayout**](docs/Api/DbsApi.md#setorderboxlayout) | **PUT** /campaigns/{campaignId}/orders/{orderId}/boxes | Подготовка заказа
*DbsApi* | [**setOrderDeliveryDate**](docs/Api/DbsApi.md#setorderdeliverydate) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/date | Изменение даты доставки заказа
*DbsApi* | [**setOrderDeliveryTrackCode**](docs/Api/DbsApi.md#setorderdeliverytrackcode) | **POST** /campaigns/{campaignId}/orders/{orderId}/delivery/track | Передача трек‑номера посылки
*DbsApi* | [**setOrderShipmentBoxes**](docs/Api/DbsApi.md#setordershipmentboxes) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes | Передача количества грузовых мест в заказе
*DbsApi* | [**setReturnDecision**](docs/Api/DbsApi.md#setreturndecision) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision | Принятие или изменение решения по возврату
*DbsApi* | [**skipGoodsFeedbacksReaction**](docs/Api/DbsApi.md#skipgoodsfeedbacksreaction) | **POST** /businesses/{businessId}/goods-feedback/skip-reaction | Пропуск реакции на отзывы
*DbsApi* | [**submitReturnDecision**](docs/Api/DbsApi.md#submitreturndecision) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/submit | Передача и подтверждение решения по возврату
*DbsApi* | [**updateBusinessPrices**](docs/Api/DbsApi.md#updatebusinessprices) | **POST** /businesses/{businessId}/offer-prices/updates | Установка цен на товары для всех магазинов
*DbsApi* | [**updateCampaignOffers**](docs/Api/DbsApi.md#updatecampaignoffers) | **POST** /campaigns/{campaignId}/offers/update | Изменение условий продажи товаров в магазине
*DbsApi* | [**updateExternalOrderId**](docs/Api/DbsApi.md#updateexternalorderid) | **POST** /campaigns/{campaignId}/orders/{orderId}/external-id | Передача или изменение внешнего идентификатора заказа
*DbsApi* | [**updateGoodsFeedbackComment**](docs/Api/DbsApi.md#updategoodsfeedbackcomment) | **POST** /businesses/{businessId}/goods-feedback/comments/update | Добавление нового или изменение созданного комментария
*DbsApi* | [**updateOfferContent**](docs/Api/DbsApi.md#updateoffercontent) | **POST** /businesses/{businessId}/offer-cards/update | Редактирование категорийных характеристик товара
*DbsApi* | [**updateOfferMappingEntries**](docs/Api/DbsApi.md#updateoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/updates | Добавление и редактирование товаров в каталоге
*DbsApi* | [**updateOfferMappings**](docs/Api/DbsApi.md#updateoffermappings) | **POST** /businesses/{businessId}/offer-mappings/update | Добавление товаров в каталог и изменение информации о них
*DbsApi* | [**updateOrderItems**](docs/Api/DbsApi.md#updateorderitems) | **PUT** /campaigns/{campaignId}/orders/{orderId}/items | Удаление товаров из заказа или уменьшение их числа
*DbsApi* | [**updateOrderStatus**](docs/Api/DbsApi.md#updateorderstatus) | **PUT** /campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса одного заказа
*DbsApi* | [**updateOrderStatuses**](docs/Api/DbsApi.md#updateorderstatuses) | **POST** /campaigns/{campaignId}/orders/status-update | Изменение статусов нескольких заказов
*DbsApi* | [**updateOrderStorageLimit**](docs/Api/DbsApi.md#updateorderstoragelimit) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/storage-limit | Продление срока хранения заказа
*DbsApi* | [**updateOutlet**](docs/Api/DbsApi.md#updateoutlet) | **PUT** /campaigns/{campaignId}/outlets/{outletId} | Изменение информации о точке продаж
*DbsApi* | [**updateOutletLicenses**](docs/Api/DbsApi.md#updateoutletlicenses) | **POST** /campaigns/{campaignId}/outlets/licenses | Создание и изменение лицензий для точек продаж
*DbsApi* | [**updatePrices**](docs/Api/DbsApi.md#updateprices) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине
*DbsApi* | [**updatePromoOffers**](docs/Api/DbsApi.md#updatepromooffers) | **POST** /businesses/{businessId}/promos/offers/update | Добавление товаров в акцию или изменение их цен
*DbsApi* | [**updateStocks**](docs/Api/DbsApi.md#updatestocks) | **PUT** /campaigns/{campaignId}/offers/stocks | Передача информации об остатках
*DbsApi* | [**updateWarehouseStatus**](docs/Api/DbsApi.md#updatewarehousestatus) | **POST** /campaigns/{campaignId}/warehouse/status | Изменение статуса склада
*DeliveryServicesApi* | [**getDeliveryServices**](docs/Api/DeliveryServicesApi.md#getdeliveryservices) | **GET** /delivery/services | Справочник служб доставки
*ExpressApi* | [**addHiddenOffers**](docs/Api/ExpressApi.md#addhiddenoffers) | **POST** /campaigns/{campaignId}/hidden-offers | Скрытие товаров и настройки скрытия
*ExpressApi* | [**addOffersToArchive**](docs/Api/ExpressApi.md#addofferstoarchive) | **POST** /businesses/{businessId}/offer-mappings/archive | Добавление товаров в архив
*ExpressApi* | [**calculateTariffs**](docs/Api/ExpressApi.md#calculatetariffs) | **POST** /tariffs/calculate | Калькулятор стоимости услуг
*ExpressApi* | [**confirmBusinessPrices**](docs/Api/ExpressApi.md#confirmbusinessprices) | **POST** /businesses/{businessId}/price-quarantine/confirm | Удаление товара из карантина по цене в кабинете
*ExpressApi* | [**confirmCampaignPrices**](docs/Api/ExpressApi.md#confirmcampaignprices) | **POST** /campaigns/{campaignId}/price-quarantine/confirm | Удаление товара из карантина по цене в магазине
*ExpressApi* | [**createChat**](docs/Api/ExpressApi.md#createchat) | **POST** /businesses/{businessId}/chats/new | Создание нового чата с покупателем
*ExpressApi* | [**deleteCampaignOffers**](docs/Api/ExpressApi.md#deletecampaignoffers) | **POST** /campaigns/{campaignId}/offers/delete | Удаление товаров из ассортимента магазина
*ExpressApi* | [**deleteGoodsFeedbackComment**](docs/Api/ExpressApi.md#deletegoodsfeedbackcomment) | **POST** /businesses/{businessId}/goods-feedback/comments/delete | Удаление комментария к отзыву
*ExpressApi* | [**deleteHiddenOffers**](docs/Api/ExpressApi.md#deletehiddenoffers) | **POST** /campaigns/{campaignId}/hidden-offers/delete | Возобновление показа товаров
*ExpressApi* | [**deleteOffers**](docs/Api/ExpressApi.md#deleteoffers) | **POST** /businesses/{businessId}/offer-mappings/delete | Удаление товаров из каталога
*ExpressApi* | [**deleteOffersFromArchive**](docs/Api/ExpressApi.md#deleteoffersfromarchive) | **POST** /businesses/{businessId}/offer-mappings/unarchive | Удаление товаров из архива
*ExpressApi* | [**deletePromoOffers**](docs/Api/ExpressApi.md#deletepromooffers) | **POST** /businesses/{businessId}/promos/offers/delete | Удаление товаров из акции
*ExpressApi* | [**generateBannersStatisticsReport**](docs/Api/ExpressApi.md#generatebannersstatisticsreport) | **POST** /reports/banners-statistics/generate | Отчет по охватному продвижению
*ExpressApi* | [**generateBoostConsolidatedReport**](docs/Api/ExpressApi.md#generateboostconsolidatedreport) | **POST** /reports/boost-consolidated/generate | Отчет по бусту продаж
*ExpressApi* | [**generateClosureDocumentsDetalizationReport**](docs/Api/ExpressApi.md#generateclosuredocumentsdetalizationreport) | **POST** /reports/closure-documents/detalization/generate | Отчет по схождению с закрывающими документами
*ExpressApi* | [**generateClosureDocumentsReport**](docs/Api/ExpressApi.md#generateclosuredocumentsreport) | **POST** /reports/closure-documents/generate | Закрывающие документы
*ExpressApi* | [**generateCompetitorsPositionReport**](docs/Api/ExpressApi.md#generatecompetitorspositionreport) | **POST** /reports/competitors-position/generate | Отчет «Конкурентная позиция»
*ExpressApi* | [**generateGoodsFeedbackReport**](docs/Api/ExpressApi.md#generategoodsfeedbackreport) | **POST** /reports/goods-feedback/generate | Отчет по отзывам о товарах
*ExpressApi* | [**generateGoodsRealizationReport**](docs/Api/ExpressApi.md#generategoodsrealizationreport) | **POST** /reports/goods-realization/generate | Отчет по реализации
*ExpressApi* | [**generateJewelryFiscalReport**](docs/Api/ExpressApi.md#generatejewelryfiscalreport) | **POST** /reports/jewelry-fiscal/generate | Отчет по заказам с ювелирными изделиями
*ExpressApi* | [**generateKeyIndicatorsReport**](docs/Api/ExpressApi.md#generatekeyindicatorsreport) | **POST** /reports/key-indicators/generate | Отчет по ключевым показателям
*ExpressApi* | [**generateMassOrderLabelsReport**](docs/Api/ExpressApi.md#generatemassorderlabelsreport) | **POST** /reports/documents/labels/generate | Готовые ярлыки‑наклейки на все коробки в нескольких заказах
*ExpressApi* | [**generateOrderLabel**](docs/Api/ExpressApi.md#generateorderlabel) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label | Готовый ярлык‑наклейка для коробки в заказе
*ExpressApi* | [**generateOrderLabels**](docs/Api/ExpressApi.md#generateorderlabels) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels | Готовые ярлыки‑наклейки на все коробки в одном заказе
*ExpressApi* | [**generatePricesReport**](docs/Api/ExpressApi.md#generatepricesreport) | **POST** /reports/prices/generate | Отчет «Цены на рынке»
*ExpressApi* | [**generateSalesGeographyReport**](docs/Api/ExpressApi.md#generatesalesgeographyreport) | **POST** /reports/sales-geography/generate | Отчет по географии продаж
*ExpressApi* | [**generateShelfsStatisticsReport**](docs/Api/ExpressApi.md#generateshelfsstatisticsreport) | **POST** /reports/shelf-statistics/generate | Отчет по полкам
*ExpressApi* | [**generateShowsBoostReport**](docs/Api/ExpressApi.md#generateshowsboostreport) | **POST** /reports/shows-boost/generate | Отчет по бусту показов
*ExpressApi* | [**generateShowsSalesReport**](docs/Api/ExpressApi.md#generateshowssalesreport) | **POST** /reports/shows-sales/generate | Отчет «Аналитика продаж»
*ExpressApi* | [**generateStocksOnWarehousesReport**](docs/Api/ExpressApi.md#generatestocksonwarehousesreport) | **POST** /reports/stocks-on-warehouses/generate | Отчет по остаткам на складах
*ExpressApi* | [**generateUnitedMarketplaceServicesReport**](docs/Api/ExpressApi.md#generateunitedmarketplaceservicesreport) | **POST** /reports/united-marketplace-services/generate | Отчет по стоимости услуг
*ExpressApi* | [**generateUnitedNettingReport**](docs/Api/ExpressApi.md#generateunitednettingreport) | **POST** /reports/united-netting/generate | Отчет по платежам
*ExpressApi* | [**generateUnitedOrdersReport**](docs/Api/ExpressApi.md#generateunitedordersreport) | **POST** /reports/united-orders/generate | Отчет по заказам
*ExpressApi* | [**generateUnitedReturnsReport**](docs/Api/ExpressApi.md#generateunitedreturnsreport) | **POST** /reports/united-returns/generate | Отчет по невыкупам и возвратам
*ExpressApi* | [**getAuthTokenInfo**](docs/Api/ExpressApi.md#getauthtokeninfo) | **POST** /auth/token | Получение информации об авторизационном токене
*ExpressApi* | [**getBidsInfoForBusiness**](docs/Api/ExpressApi.md#getbidsinfoforbusiness) | **POST** /businesses/{businessId}/bids/info | Информация об установленных ставках
*ExpressApi* | [**getBidsRecommendations**](docs/Api/ExpressApi.md#getbidsrecommendations) | **POST** /businesses/{businessId}/bids/recommendations | Рекомендованные ставки для заданных товаров
*ExpressApi* | [**getBusinessQuarantineOffers**](docs/Api/ExpressApi.md#getbusinessquarantineoffers) | **POST** /businesses/{businessId}/price-quarantine | Список товаров, находящихся в карантине по цене в кабинете
*ExpressApi* | [**getBusinessSettings**](docs/Api/ExpressApi.md#getbusinesssettings) | **POST** /businesses/{businessId}/settings | Настройки кабинета
*ExpressApi* | [**getCampaign**](docs/Api/ExpressApi.md#getcampaign) | **GET** /campaigns/{campaignId} | Информация о магазине
*ExpressApi* | [**getCampaignOffers**](docs/Api/ExpressApi.md#getcampaignoffers) | **POST** /campaigns/{campaignId}/offers | Информация о товарах, которые размещены в заданном магазине
*ExpressApi* | [**getCampaignQuarantineOffers**](docs/Api/ExpressApi.md#getcampaignquarantineoffers) | **POST** /campaigns/{campaignId}/price-quarantine | Список товаров, находящихся в карантине по цене в магазине
*ExpressApi* | [**getCampaignSettings**](docs/Api/ExpressApi.md#getcampaignsettings) | **GET** /campaigns/{campaignId}/settings | Настройки магазина
*ExpressApi* | [**getCampaigns**](docs/Api/ExpressApi.md#getcampaigns) | **GET** /campaigns | Список магазинов пользователя
*ExpressApi* | [**getCategoriesMaxSaleQuantum**](docs/Api/ExpressApi.md#getcategoriesmaxsalequantum) | **POST** /categories/max-sale-quantum | Лимит на установку кванта продажи и минимального количества товаров в заказе
*ExpressApi* | [**getCategoriesTree**](docs/Api/ExpressApi.md#getcategoriestree) | **POST** /categories/tree | Дерево категорий
*ExpressApi* | [**getCategoryContentParameters**](docs/Api/ExpressApi.md#getcategorycontentparameters) | **POST** /category/{categoryId}/parameters | Списки характеристик товаров по категориям
*ExpressApi* | [**getChat**](docs/Api/ExpressApi.md#getchat) | **GET** /businesses/{businessId}/chat | Получение чата по идентификатору
*ExpressApi* | [**getChatHistory**](docs/Api/ExpressApi.md#getchathistory) | **POST** /businesses/{businessId}/chats/history | Получение истории сообщений в чате
*ExpressApi* | [**getChatMessage**](docs/Api/ExpressApi.md#getchatmessage) | **GET** /businesses/{businessId}/chats/message | Получение сообщения в чате
*ExpressApi* | [**getChats**](docs/Api/ExpressApi.md#getchats) | **POST** /businesses/{businessId}/chats | Получение доступных чатов
*ExpressApi* | [**getDefaultPrices**](docs/Api/ExpressApi.md#getdefaultprices) | **POST** /businesses/{businessId}/offer-prices | Просмотр цен на указанные товары во всех магазинах
*ExpressApi* | [**getDeliveryServices**](docs/Api/ExpressApi.md#getdeliveryservices) | **GET** /delivery/services | Справочник служб доставки
*ExpressApi* | [**getGoodsFeedbackComments**](docs/Api/ExpressApi.md#getgoodsfeedbackcomments) | **POST** /businesses/{businessId}/goods-feedback/comments | Получение комментариев к отзыву
*ExpressApi* | [**getGoodsFeedbacks**](docs/Api/ExpressApi.md#getgoodsfeedbacks) | **POST** /businesses/{businessId}/goods-feedback | Получение отзывов о товарах продавца
*ExpressApi* | [**getGoodsStats**](docs/Api/ExpressApi.md#getgoodsstats) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам
*ExpressApi* | [**getHiddenOffers**](docs/Api/ExpressApi.md#gethiddenoffers) | **GET** /campaigns/{campaignId}/hidden-offers | Информация о скрытых вами товарах
*ExpressApi* | [**getOfferCardsContentStatus**](docs/Api/ExpressApi.md#getoffercardscontentstatus) | **POST** /businesses/{businessId}/offer-cards | Получение информации о заполненности карточек магазина
*ExpressApi* | [**getOfferMappingEntries**](docs/Api/ExpressApi.md#getoffermappingentries) | **GET** /campaigns/{campaignId}/offer-mapping-entries | Список товаров в каталоге
*ExpressApi* | [**getOfferMappings**](docs/Api/ExpressApi.md#getoffermappings) | **POST** /businesses/{businessId}/offer-mappings | Информация о товарах в каталоге
*ExpressApi* | [**getOfferRecommendations**](docs/Api/ExpressApi.md#getofferrecommendations) | **POST** /businesses/{businessId}/offers/recommendations | Рекомендации Маркета, касающиеся цен
*ExpressApi* | [**getOrder**](docs/Api/ExpressApi.md#getorder) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация об одном заказе
*ExpressApi* | [**getOrderBusinessBuyerInfo**](docs/Api/ExpressApi.md#getorderbusinessbuyerinfo) | **POST** /campaigns/{campaignId}/orders/{orderId}/business-buyer | Информация о покупателе — юридическом лице
*ExpressApi* | [**getOrderBusinessDocumentsInfo**](docs/Api/ExpressApi.md#getorderbusinessdocumentsinfo) | **POST** /campaigns/{campaignId}/orders/{orderId}/documents | Информация о документах
*ExpressApi* | [**getOrderIdentifiersStatus**](docs/Api/ExpressApi.md#getorderidentifiersstatus) | **POST** /campaigns/{campaignId}/orders/{orderId}/identifiers/status | Статусы проверки УИНов
*ExpressApi* | [**getOrderLabelsData**](docs/Api/ExpressApi.md#getorderlabelsdata) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels/data | Данные для самостоятельного изготовления ярлыков
*ExpressApi* | [**getOrders**](docs/Api/ExpressApi.md#getorders) | **GET** /campaigns/{campaignId}/orders | Информация о нескольких заказах
*ExpressApi* | [**getOrdersStats**](docs/Api/ExpressApi.md#getordersstats) | **POST** /campaigns/{campaignId}/stats/orders | Детальная информация по заказам
*ExpressApi* | [**getPagedWarehouses**](docs/Api/ExpressApi.md#getpagedwarehouses) | **POST** /businesses/{businessId}/warehouses | Список складов
*ExpressApi* | [**getPrices**](docs/Api/ExpressApi.md#getprices) | **GET** /campaigns/{campaignId}/offer-prices | Список цен
*ExpressApi* | [**getPricesByOfferIds**](docs/Api/ExpressApi.md#getpricesbyofferids) | **POST** /campaigns/{campaignId}/offer-prices | Просмотр цен на указанные товары в конкретном магазине
*ExpressApi* | [**getPromoOffers**](docs/Api/ExpressApi.md#getpromooffers) | **POST** /businesses/{businessId}/promos/offers | Получение списка товаров, которые участвуют или могут участвовать в акции
*ExpressApi* | [**getPromos**](docs/Api/ExpressApi.md#getpromos) | **POST** /businesses/{businessId}/promos | Получение списка акций
*ExpressApi* | [**getQualityRatingDetails**](docs/Api/ExpressApi.md#getqualityratingdetails) | **POST** /campaigns/{campaignId}/ratings/quality/details | Заказы, которые повлияли на индекс качества
*ExpressApi* | [**getQualityRatings**](docs/Api/ExpressApi.md#getqualityratings) | **POST** /businesses/{businessId}/ratings/quality | Индекс качества магазинов
*ExpressApi* | [**getRegionsCodes**](docs/Api/ExpressApi.md#getregionscodes) | **POST** /regions/countries | Список допустимых кодов стран
*ExpressApi* | [**getReportInfo**](docs/Api/ExpressApi.md#getreportinfo) | **GET** /reports/info/{reportId} | Получение заданного отчета или документа
*ExpressApi* | [**getReturn**](docs/Api/ExpressApi.md#getreturn) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о невыкупе или возврате
*ExpressApi* | [**getReturnApplication**](docs/Api/ExpressApi.md#getreturnapplication) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application | Получение заявления на возврат
*ExpressApi* | [**getReturnPhoto**](docs/Api/ExpressApi.md#getreturnphoto) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографий товаров в возврате
*ExpressApi* | [**getReturns**](docs/Api/ExpressApi.md#getreturns) | **GET** /campaigns/{campaignId}/returns | Список невыкупов и возвратов
*ExpressApi* | [**getStocks**](docs/Api/ExpressApi.md#getstocks) | **POST** /campaigns/{campaignId}/offers/stocks | Информация об остатках и оборачиваемости
*ExpressApi* | [**getSuggestedOfferMappingEntries**](docs/Api/ExpressApi.md#getsuggestedoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/suggestions | Рекомендованные карточки для товаров
*ExpressApi* | [**getSuggestedOfferMappings**](docs/Api/ExpressApi.md#getsuggestedoffermappings) | **POST** /businesses/{businessId}/offer-mappings/suggestions | Просмотр карточек на Маркете, которые подходят вашим товарам
*ExpressApi* | [**getSuggestedPrices**](docs/Api/ExpressApi.md#getsuggestedprices) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров
*ExpressApi* | [**getWarehouses**](docs/Api/ExpressApi.md#getwarehouses) | **GET** /businesses/{businessId}/warehouses | Список складов и групп складов
*ExpressApi* | [**provideOrderItemIdentifiers**](docs/Api/ExpressApi.md#provideorderitemidentifiers) | **PUT** /campaigns/{campaignId}/orders/{orderId}/identifiers | Передача кодов маркировки единиц товара
*ExpressApi* | [**putBidsForBusiness**](docs/Api/ExpressApi.md#putbidsforbusiness) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок
*ExpressApi* | [**putBidsForCampaign**](docs/Api/ExpressApi.md#putbidsforcampaign) | **PUT** /campaigns/{campaignId}/bids | Включение буста продаж и установка ставок для магазина
*ExpressApi* | [**searchRegionChildren**](docs/Api/ExpressApi.md#searchregionchildren) | **GET** /regions/{regionId}/children | Информация о дочерних регионах
*ExpressApi* | [**searchRegionsById**](docs/Api/ExpressApi.md#searchregionsbyid) | **GET** /regions/{regionId} | Информация о регионе
*ExpressApi* | [**searchRegionsByName**](docs/Api/ExpressApi.md#searchregionsbyname) | **GET** /regions | Поиск регионов по их имени
*ExpressApi* | [**sendFileToChat**](docs/Api/ExpressApi.md#sendfiletochat) | **POST** /businesses/{businessId}/chats/file/send | Отправка файла в чат
*ExpressApi* | [**sendMessageToChat**](docs/Api/ExpressApi.md#sendmessagetochat) | **POST** /businesses/{businessId}/chats/message | Отправка сообщения в чат
*ExpressApi* | [**setOrderBoxLayout**](docs/Api/ExpressApi.md#setorderboxlayout) | **PUT** /campaigns/{campaignId}/orders/{orderId}/boxes | Подготовка заказа
*ExpressApi* | [**setOrderShipmentBoxes**](docs/Api/ExpressApi.md#setordershipmentboxes) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes | Передача количества грузовых мест в заказе
*ExpressApi* | [**skipGoodsFeedbacksReaction**](docs/Api/ExpressApi.md#skipgoodsfeedbacksreaction) | **POST** /businesses/{businessId}/goods-feedback/skip-reaction | Пропуск реакции на отзывы
*ExpressApi* | [**submitReturnDecision**](docs/Api/ExpressApi.md#submitreturndecision) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/submit | Передача и подтверждение решения по возврату
*ExpressApi* | [**updateBusinessPrices**](docs/Api/ExpressApi.md#updatebusinessprices) | **POST** /businesses/{businessId}/offer-prices/updates | Установка цен на товары для всех магазинов
*ExpressApi* | [**updateCampaignOffers**](docs/Api/ExpressApi.md#updatecampaignoffers) | **POST** /campaigns/{campaignId}/offers/update | Изменение условий продажи товаров в магазине
*ExpressApi* | [**updateExternalOrderId**](docs/Api/ExpressApi.md#updateexternalorderid) | **POST** /campaigns/{campaignId}/orders/{orderId}/external-id | Передача или изменение внешнего идентификатора заказа
*ExpressApi* | [**updateGoodsFeedbackComment**](docs/Api/ExpressApi.md#updategoodsfeedbackcomment) | **POST** /businesses/{businessId}/goods-feedback/comments/update | Добавление нового или изменение созданного комментария
*ExpressApi* | [**updateOfferContent**](docs/Api/ExpressApi.md#updateoffercontent) | **POST** /businesses/{businessId}/offer-cards/update | Редактирование категорийных характеристик товара
*ExpressApi* | [**updateOfferMappingEntries**](docs/Api/ExpressApi.md#updateoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/updates | Добавление и редактирование товаров в каталоге
*ExpressApi* | [**updateOfferMappings**](docs/Api/ExpressApi.md#updateoffermappings) | **POST** /businesses/{businessId}/offer-mappings/update | Добавление товаров в каталог и изменение информации о них
*ExpressApi* | [**updateOrderItems**](docs/Api/ExpressApi.md#updateorderitems) | **PUT** /campaigns/{campaignId}/orders/{orderId}/items | Удаление товаров из заказа или уменьшение их числа
*ExpressApi* | [**updateOrderStatus**](docs/Api/ExpressApi.md#updateorderstatus) | **PUT** /campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса одного заказа
*ExpressApi* | [**updateOrderStatuses**](docs/Api/ExpressApi.md#updateorderstatuses) | **POST** /campaigns/{campaignId}/orders/status-update | Изменение статусов нескольких заказов
*ExpressApi* | [**updatePrices**](docs/Api/ExpressApi.md#updateprices) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине
*ExpressApi* | [**updatePromoOffers**](docs/Api/ExpressApi.md#updatepromooffers) | **POST** /businesses/{businessId}/promos/offers/update | Добавление товаров в акцию или изменение их цен
*ExpressApi* | [**updateStocks**](docs/Api/ExpressApi.md#updatestocks) | **PUT** /campaigns/{campaignId}/offers/stocks | Передача информации об остатках
*ExpressApi* | [**updateWarehouseStatus**](docs/Api/ExpressApi.md#updatewarehousestatus) | **POST** /campaigns/{campaignId}/warehouse/status | Изменение статуса склада
*ExpressApi* | [**verifyOrderEac**](docs/Api/ExpressApi.md#verifyordereac) | **PUT** /campaigns/{campaignId}/orders/{orderId}/verifyEac | Передача кода подтверждения
*FbsApi* | [**addHiddenOffers**](docs/Api/FbsApi.md#addhiddenoffers) | **POST** /campaigns/{campaignId}/hidden-offers | Скрытие товаров и настройки скрытия
*FbsApi* | [**addOffersToArchive**](docs/Api/FbsApi.md#addofferstoarchive) | **POST** /businesses/{businessId}/offer-mappings/archive | Добавление товаров в архив
*FbsApi* | [**calculateTariffs**](docs/Api/FbsApi.md#calculatetariffs) | **POST** /tariffs/calculate | Калькулятор стоимости услуг
*FbsApi* | [**confirmBusinessPrices**](docs/Api/FbsApi.md#confirmbusinessprices) | **POST** /businesses/{businessId}/price-quarantine/confirm | Удаление товара из карантина по цене в кабинете
*FbsApi* | [**confirmCampaignPrices**](docs/Api/FbsApi.md#confirmcampaignprices) | **POST** /campaigns/{campaignId}/price-quarantine/confirm | Удаление товара из карантина по цене в магазине
*FbsApi* | [**confirmShipment**](docs/Api/FbsApi.md#confirmshipment) | **POST** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/confirm | Подтверждение отгрузки
*FbsApi* | [**createChat**](docs/Api/FbsApi.md#createchat) | **POST** /businesses/{businessId}/chats/new | Создание нового чата с покупателем
*FbsApi* | [**deleteCampaignOffers**](docs/Api/FbsApi.md#deletecampaignoffers) | **POST** /campaigns/{campaignId}/offers/delete | Удаление товаров из ассортимента магазина
*FbsApi* | [**deleteGoodsFeedbackComment**](docs/Api/FbsApi.md#deletegoodsfeedbackcomment) | **POST** /businesses/{businessId}/goods-feedback/comments/delete | Удаление комментария к отзыву
*FbsApi* | [**deleteHiddenOffers**](docs/Api/FbsApi.md#deletehiddenoffers) | **POST** /campaigns/{campaignId}/hidden-offers/delete | Возобновление показа товаров
*FbsApi* | [**deleteOffers**](docs/Api/FbsApi.md#deleteoffers) | **POST** /businesses/{businessId}/offer-mappings/delete | Удаление товаров из каталога
*FbsApi* | [**deleteOffersFromArchive**](docs/Api/FbsApi.md#deleteoffersfromarchive) | **POST** /businesses/{businessId}/offer-mappings/unarchive | Удаление товаров из архива
*FbsApi* | [**deletePromoOffers**](docs/Api/FbsApi.md#deletepromooffers) | **POST** /businesses/{businessId}/promos/offers/delete | Удаление товаров из акции
*FbsApi* | [**downloadShipmentAct**](docs/Api/FbsApi.md#downloadshipmentact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/act | Получение акта приема-передачи
*FbsApi* | [**downloadShipmentDiscrepancyAct**](docs/Api/FbsApi.md#downloadshipmentdiscrepancyact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/discrepancy-act | Получение акта расхождений
*FbsApi* | [**downloadShipmentInboundAct**](docs/Api/FbsApi.md#downloadshipmentinboundact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/inbound-act | Получение фактического акта приема-передачи
*FbsApi* | [**downloadShipmentPalletLabels**](docs/Api/FbsApi.md#downloadshipmentpalletlabels) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/pallet/labels | Ярлыки для доверительной приемки
*FbsApi* | [**downloadShipmentReceptionTransferAct**](docs/Api/FbsApi.md#downloadshipmentreceptiontransferact) | **GET** /campaigns/{campaignId}/shipments/reception-transfer-act | Подтверждение ближайшей отгрузки и получение акта приема-передачи для нее
*FbsApi* | [**downloadShipmentTransportationWaybill**](docs/Api/FbsApi.md#downloadshipmenttransportationwaybill) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/transportation-waybill | Получение транспортной накладной
*FbsApi* | [**generateBannersStatisticsReport**](docs/Api/FbsApi.md#generatebannersstatisticsreport) | **POST** /reports/banners-statistics/generate | Отчет по охватному продвижению
*FbsApi* | [**generateBoostConsolidatedReport**](docs/Api/FbsApi.md#generateboostconsolidatedreport) | **POST** /reports/boost-consolidated/generate | Отчет по бусту продаж
*FbsApi* | [**generateClosureDocumentsDetalizationReport**](docs/Api/FbsApi.md#generateclosuredocumentsdetalizationreport) | **POST** /reports/closure-documents/detalization/generate | Отчет по схождению с закрывающими документами
*FbsApi* | [**generateClosureDocumentsReport**](docs/Api/FbsApi.md#generateclosuredocumentsreport) | **POST** /reports/closure-documents/generate | Закрывающие документы
*FbsApi* | [**generateCompetitorsPositionReport**](docs/Api/FbsApi.md#generatecompetitorspositionreport) | **POST** /reports/competitors-position/generate | Отчет «Конкурентная позиция»
*FbsApi* | [**generateGoodsFeedbackReport**](docs/Api/FbsApi.md#generategoodsfeedbackreport) | **POST** /reports/goods-feedback/generate | Отчет по отзывам о товарах
*FbsApi* | [**generateGoodsRealizationReport**](docs/Api/FbsApi.md#generategoodsrealizationreport) | **POST** /reports/goods-realization/generate | Отчет по реализации
*FbsApi* | [**generateJewelryFiscalReport**](docs/Api/FbsApi.md#generatejewelryfiscalreport) | **POST** /reports/jewelry-fiscal/generate | Отчет по заказам с ювелирными изделиями
*FbsApi* | [**generateKeyIndicatorsReport**](docs/Api/FbsApi.md#generatekeyindicatorsreport) | **POST** /reports/key-indicators/generate | Отчет по ключевым показателям
*FbsApi* | [**generateMassOrderLabelsReport**](docs/Api/FbsApi.md#generatemassorderlabelsreport) | **POST** /reports/documents/labels/generate | Готовые ярлыки‑наклейки на все коробки в нескольких заказах
*FbsApi* | [**generateOrderLabel**](docs/Api/FbsApi.md#generateorderlabel) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label | Готовый ярлык‑наклейка для коробки в заказе
*FbsApi* | [**generateOrderLabels**](docs/Api/FbsApi.md#generateorderlabels) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels | Готовые ярлыки‑наклейки на все коробки в одном заказе
*FbsApi* | [**generatePricesReport**](docs/Api/FbsApi.md#generatepricesreport) | **POST** /reports/prices/generate | Отчет «Цены на рынке»
*FbsApi* | [**generateSalesGeographyReport**](docs/Api/FbsApi.md#generatesalesgeographyreport) | **POST** /reports/sales-geography/generate | Отчет по географии продаж
*FbsApi* | [**generateShelfsStatisticsReport**](docs/Api/FbsApi.md#generateshelfsstatisticsreport) | **POST** /reports/shelf-statistics/generate | Отчет по полкам
*FbsApi* | [**generateShipmentListDocumentReport**](docs/Api/FbsApi.md#generateshipmentlistdocumentreport) | **POST** /reports/documents/shipment-list/generate | Получение листа сборки
*FbsApi* | [**generateShowsBoostReport**](docs/Api/FbsApi.md#generateshowsboostreport) | **POST** /reports/shows-boost/generate | Отчет по бусту показов
*FbsApi* | [**generateShowsSalesReport**](docs/Api/FbsApi.md#generateshowssalesreport) | **POST** /reports/shows-sales/generate | Отчет «Аналитика продаж»
*FbsApi* | [**generateStocksOnWarehousesReport**](docs/Api/FbsApi.md#generatestocksonwarehousesreport) | **POST** /reports/stocks-on-warehouses/generate | Отчет по остаткам на складах
*FbsApi* | [**generateUnitedMarketplaceServicesReport**](docs/Api/FbsApi.md#generateunitedmarketplaceservicesreport) | **POST** /reports/united-marketplace-services/generate | Отчет по стоимости услуг
*FbsApi* | [**generateUnitedNettingReport**](docs/Api/FbsApi.md#generateunitednettingreport) | **POST** /reports/united-netting/generate | Отчет по платежам
*FbsApi* | [**generateUnitedOrdersReport**](docs/Api/FbsApi.md#generateunitedordersreport) | **POST** /reports/united-orders/generate | Отчет по заказам
*FbsApi* | [**generateUnitedReturnsReport**](docs/Api/FbsApi.md#generateunitedreturnsreport) | **POST** /reports/united-returns/generate | Отчет по невыкупам и возвратам
*FbsApi* | [**getAuthTokenInfo**](docs/Api/FbsApi.md#getauthtokeninfo) | **POST** /auth/token | Получение информации об авторизационном токене
*FbsApi* | [**getBidsInfoForBusiness**](docs/Api/FbsApi.md#getbidsinfoforbusiness) | **POST** /businesses/{businessId}/bids/info | Информация об установленных ставках
*FbsApi* | [**getBidsRecommendations**](docs/Api/FbsApi.md#getbidsrecommendations) | **POST** /businesses/{businessId}/bids/recommendations | Рекомендованные ставки для заданных товаров
*FbsApi* | [**getBusinessQuarantineOffers**](docs/Api/FbsApi.md#getbusinessquarantineoffers) | **POST** /businesses/{businessId}/price-quarantine | Список товаров, находящихся в карантине по цене в кабинете
*FbsApi* | [**getBusinessSettings**](docs/Api/FbsApi.md#getbusinesssettings) | **POST** /businesses/{businessId}/settings | Настройки кабинета
*FbsApi* | [**getCampaign**](docs/Api/FbsApi.md#getcampaign) | **GET** /campaigns/{campaignId} | Информация о магазине
*FbsApi* | [**getCampaignOffers**](docs/Api/FbsApi.md#getcampaignoffers) | **POST** /campaigns/{campaignId}/offers | Информация о товарах, которые размещены в заданном магазине
*FbsApi* | [**getCampaignQuarantineOffers**](docs/Api/FbsApi.md#getcampaignquarantineoffers) | **POST** /campaigns/{campaignId}/price-quarantine | Список товаров, находящихся в карантине по цене в магазине
*FbsApi* | [**getCampaignSettings**](docs/Api/FbsApi.md#getcampaignsettings) | **GET** /campaigns/{campaignId}/settings | Настройки магазина
*FbsApi* | [**getCampaigns**](docs/Api/FbsApi.md#getcampaigns) | **GET** /campaigns | Список магазинов пользователя
*FbsApi* | [**getCategoriesMaxSaleQuantum**](docs/Api/FbsApi.md#getcategoriesmaxsalequantum) | **POST** /categories/max-sale-quantum | Лимит на установку кванта продажи и минимального количества товаров в заказе
*FbsApi* | [**getCategoriesTree**](docs/Api/FbsApi.md#getcategoriestree) | **POST** /categories/tree | Дерево категорий
*FbsApi* | [**getCategoryContentParameters**](docs/Api/FbsApi.md#getcategorycontentparameters) | **POST** /category/{categoryId}/parameters | Списки характеристик товаров по категориям
*FbsApi* | [**getChat**](docs/Api/FbsApi.md#getchat) | **GET** /businesses/{businessId}/chat | Получение чата по идентификатору
*FbsApi* | [**getChatHistory**](docs/Api/FbsApi.md#getchathistory) | **POST** /businesses/{businessId}/chats/history | Получение истории сообщений в чате
*FbsApi* | [**getChatMessage**](docs/Api/FbsApi.md#getchatmessage) | **GET** /businesses/{businessId}/chats/message | Получение сообщения в чате
*FbsApi* | [**getChats**](docs/Api/FbsApi.md#getchats) | **POST** /businesses/{businessId}/chats | Получение доступных чатов
*FbsApi* | [**getDefaultPrices**](docs/Api/FbsApi.md#getdefaultprices) | **POST** /businesses/{businessId}/offer-prices | Просмотр цен на указанные товары во всех магазинах
*FbsApi* | [**getDeliveryServices**](docs/Api/FbsApi.md#getdeliveryservices) | **GET** /delivery/services | Справочник служб доставки
*FbsApi* | [**getGoodsFeedbackComments**](docs/Api/FbsApi.md#getgoodsfeedbackcomments) | **POST** /businesses/{businessId}/goods-feedback/comments | Получение комментариев к отзыву
*FbsApi* | [**getGoodsFeedbacks**](docs/Api/FbsApi.md#getgoodsfeedbacks) | **POST** /businesses/{businessId}/goods-feedback | Получение отзывов о товарах продавца
*FbsApi* | [**getGoodsStats**](docs/Api/FbsApi.md#getgoodsstats) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам
*FbsApi* | [**getHiddenOffers**](docs/Api/FbsApi.md#gethiddenoffers) | **GET** /campaigns/{campaignId}/hidden-offers | Информация о скрытых вами товарах
*FbsApi* | [**getOfferCardsContentStatus**](docs/Api/FbsApi.md#getoffercardscontentstatus) | **POST** /businesses/{businessId}/offer-cards | Получение информации о заполненности карточек магазина
*FbsApi* | [**getOfferMappingEntries**](docs/Api/FbsApi.md#getoffermappingentries) | **GET** /campaigns/{campaignId}/offer-mapping-entries | Список товаров в каталоге
*FbsApi* | [**getOfferMappings**](docs/Api/FbsApi.md#getoffermappings) | **POST** /businesses/{businessId}/offer-mappings | Информация о товарах в каталоге
*FbsApi* | [**getOfferRecommendations**](docs/Api/FbsApi.md#getofferrecommendations) | **POST** /businesses/{businessId}/offers/recommendations | Рекомендации Маркета, касающиеся цен
*FbsApi* | [**getOrder**](docs/Api/FbsApi.md#getorder) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация об одном заказе
*FbsApi* | [**getOrderBusinessBuyerInfo**](docs/Api/FbsApi.md#getorderbusinessbuyerinfo) | **POST** /campaigns/{campaignId}/orders/{orderId}/business-buyer | Информация о покупателе — юридическом лице
*FbsApi* | [**getOrderBusinessDocumentsInfo**](docs/Api/FbsApi.md#getorderbusinessdocumentsinfo) | **POST** /campaigns/{campaignId}/orders/{orderId}/documents | Информация о документах
*FbsApi* | [**getOrderIdentifiersStatus**](docs/Api/FbsApi.md#getorderidentifiersstatus) | **POST** /campaigns/{campaignId}/orders/{orderId}/identifiers/status | Статусы проверки УИНов
*FbsApi* | [**getOrderLabelsData**](docs/Api/FbsApi.md#getorderlabelsdata) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels/data | Данные для самостоятельного изготовления ярлыков
*FbsApi* | [**getOrders**](docs/Api/FbsApi.md#getorders) | **GET** /campaigns/{campaignId}/orders | Информация о нескольких заказах
*FbsApi* | [**getOrdersStats**](docs/Api/FbsApi.md#getordersstats) | **POST** /campaigns/{campaignId}/stats/orders | Детальная информация по заказам
*FbsApi* | [**getPagedWarehouses**](docs/Api/FbsApi.md#getpagedwarehouses) | **POST** /businesses/{businessId}/warehouses | Список складов
*FbsApi* | [**getPrices**](docs/Api/FbsApi.md#getprices) | **GET** /campaigns/{campaignId}/offer-prices | Список цен
*FbsApi* | [**getPricesByOfferIds**](docs/Api/FbsApi.md#getpricesbyofferids) | **POST** /campaigns/{campaignId}/offer-prices | Просмотр цен на указанные товары в конкретном магазине
*FbsApi* | [**getPromoOffers**](docs/Api/FbsApi.md#getpromooffers) | **POST** /businesses/{businessId}/promos/offers | Получение списка товаров, которые участвуют или могут участвовать в акции
*FbsApi* | [**getPromos**](docs/Api/FbsApi.md#getpromos) | **POST** /businesses/{businessId}/promos | Получение списка акций
*FbsApi* | [**getQualityRatingDetails**](docs/Api/FbsApi.md#getqualityratingdetails) | **POST** /campaigns/{campaignId}/ratings/quality/details | Заказы, которые повлияли на индекс качества
*FbsApi* | [**getQualityRatings**](docs/Api/FbsApi.md#getqualityratings) | **POST** /businesses/{businessId}/ratings/quality | Индекс качества магазинов
*FbsApi* | [**getRegionsCodes**](docs/Api/FbsApi.md#getregionscodes) | **POST** /regions/countries | Список допустимых кодов стран
*FbsApi* | [**getReportInfo**](docs/Api/FbsApi.md#getreportinfo) | **GET** /reports/info/{reportId} | Получение заданного отчета или документа
*FbsApi* | [**getReturn**](docs/Api/FbsApi.md#getreturn) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о невыкупе или возврате
*FbsApi* | [**getReturnApplication**](docs/Api/FbsApi.md#getreturnapplication) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application | Получение заявления на возврат
*FbsApi* | [**getReturnPhoto**](docs/Api/FbsApi.md#getreturnphoto) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографий товаров в возврате
*FbsApi* | [**getReturns**](docs/Api/FbsApi.md#getreturns) | **GET** /campaigns/{campaignId}/returns | Список невыкупов и возвратов
*FbsApi* | [**getShipment**](docs/Api/FbsApi.md#getshipment) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId} | Получение информации об одной отгрузке
*FbsApi* | [**getShipmentOrdersInfo**](docs/Api/FbsApi.md#getshipmentordersinfo) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/orders/info | Получение информации о возможности печати ярлыков
*FbsApi* | [**getStocks**](docs/Api/FbsApi.md#getstocks) | **POST** /campaigns/{campaignId}/offers/stocks | Информация об остатках и оборачиваемости
*FbsApi* | [**getSuggestedOfferMappingEntries**](docs/Api/FbsApi.md#getsuggestedoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/suggestions | Рекомендованные карточки для товаров
*FbsApi* | [**getSuggestedOfferMappings**](docs/Api/FbsApi.md#getsuggestedoffermappings) | **POST** /businesses/{businessId}/offer-mappings/suggestions | Просмотр карточек на Маркете, которые подходят вашим товарам
*FbsApi* | [**getSuggestedPrices**](docs/Api/FbsApi.md#getsuggestedprices) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров
*FbsApi* | [**getWarehouses**](docs/Api/FbsApi.md#getwarehouses) | **GET** /businesses/{businessId}/warehouses | Список складов и групп складов
*FbsApi* | [**provideOrderItemIdentifiers**](docs/Api/FbsApi.md#provideorderitemidentifiers) | **PUT** /campaigns/{campaignId}/orders/{orderId}/identifiers | Передача кодов маркировки единиц товара
*FbsApi* | [**putBidsForBusiness**](docs/Api/FbsApi.md#putbidsforbusiness) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок
*FbsApi* | [**putBidsForCampaign**](docs/Api/FbsApi.md#putbidsforcampaign) | **PUT** /campaigns/{campaignId}/bids | Включение буста продаж и установка ставок для магазина
*FbsApi* | [**searchRegionChildren**](docs/Api/FbsApi.md#searchregionchildren) | **GET** /regions/{regionId}/children | Информация о дочерних регионах
*FbsApi* | [**searchRegionsById**](docs/Api/FbsApi.md#searchregionsbyid) | **GET** /regions/{regionId} | Информация о регионе
*FbsApi* | [**searchRegionsByName**](docs/Api/FbsApi.md#searchregionsbyname) | **GET** /regions | Поиск регионов по их имени
*FbsApi* | [**searchShipments**](docs/Api/FbsApi.md#searchshipments) | **PUT** /campaigns/{campaignId}/first-mile/shipments | Получение информации о нескольких отгрузках
*FbsApi* | [**sendFileToChat**](docs/Api/FbsApi.md#sendfiletochat) | **POST** /businesses/{businessId}/chats/file/send | Отправка файла в чат
*FbsApi* | [**sendMessageToChat**](docs/Api/FbsApi.md#sendmessagetochat) | **POST** /businesses/{businessId}/chats/message | Отправка сообщения в чат
*FbsApi* | [**setOrderBoxLayout**](docs/Api/FbsApi.md#setorderboxlayout) | **PUT** /campaigns/{campaignId}/orders/{orderId}/boxes | Подготовка заказа
*FbsApi* | [**setOrderShipmentBoxes**](docs/Api/FbsApi.md#setordershipmentboxes) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes | Передача количества грузовых мест в заказе
*FbsApi* | [**setShipmentPalletsCount**](docs/Api/FbsApi.md#setshipmentpalletscount) | **PUT** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/pallets | Передача количества упаковок в отгрузке
*FbsApi* | [**skipGoodsFeedbacksReaction**](docs/Api/FbsApi.md#skipgoodsfeedbacksreaction) | **POST** /businesses/{businessId}/goods-feedback/skip-reaction | Пропуск реакции на отзывы
*FbsApi* | [**submitReturnDecision**](docs/Api/FbsApi.md#submitreturndecision) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/submit | Передача и подтверждение решения по возврату
*FbsApi* | [**transferOrdersFromShipment**](docs/Api/FbsApi.md#transferordersfromshipment) | **POST** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/orders/transfer | Перенос заказов в следующую отгрузку
*FbsApi* | [**updateBusinessPrices**](docs/Api/FbsApi.md#updatebusinessprices) | **POST** /businesses/{businessId}/offer-prices/updates | Установка цен на товары для всех магазинов
*FbsApi* | [**updateCampaignOffers**](docs/Api/FbsApi.md#updatecampaignoffers) | **POST** /campaigns/{campaignId}/offers/update | Изменение условий продажи товаров в магазине
*FbsApi* | [**updateExternalOrderId**](docs/Api/FbsApi.md#updateexternalorderid) | **POST** /campaigns/{campaignId}/orders/{orderId}/external-id | Передача или изменение внешнего идентификатора заказа
*FbsApi* | [**updateGoodsFeedbackComment**](docs/Api/FbsApi.md#updategoodsfeedbackcomment) | **POST** /businesses/{businessId}/goods-feedback/comments/update | Добавление нового или изменение созданного комментария
*FbsApi* | [**updateOfferContent**](docs/Api/FbsApi.md#updateoffercontent) | **POST** /businesses/{businessId}/offer-cards/update | Редактирование категорийных характеристик товара
*FbsApi* | [**updateOfferMappingEntries**](docs/Api/FbsApi.md#updateoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/updates | Добавление и редактирование товаров в каталоге
*FbsApi* | [**updateOfferMappings**](docs/Api/FbsApi.md#updateoffermappings) | **POST** /businesses/{businessId}/offer-mappings/update | Добавление товаров в каталог и изменение информации о них
*FbsApi* | [**updateOrderItems**](docs/Api/FbsApi.md#updateorderitems) | **PUT** /campaigns/{campaignId}/orders/{orderId}/items | Удаление товаров из заказа или уменьшение их числа
*FbsApi* | [**updateOrderStatus**](docs/Api/FbsApi.md#updateorderstatus) | **PUT** /campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса одного заказа
*FbsApi* | [**updateOrderStatuses**](docs/Api/FbsApi.md#updateorderstatuses) | **POST** /campaigns/{campaignId}/orders/status-update | Изменение статусов нескольких заказов
*FbsApi* | [**updatePrices**](docs/Api/FbsApi.md#updateprices) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине
*FbsApi* | [**updatePromoOffers**](docs/Api/FbsApi.md#updatepromooffers) | **POST** /businesses/{businessId}/promos/offers/update | Добавление товаров в акцию или изменение их цен
*FbsApi* | [**updateStocks**](docs/Api/FbsApi.md#updatestocks) | **PUT** /campaigns/{campaignId}/offers/stocks | Передача информации об остатках
*FbsApi* | [**updateWarehouseStatus**](docs/Api/FbsApi.md#updatewarehousestatus) | **POST** /campaigns/{campaignId}/warehouse/status | Изменение статуса склада
*FbyApi* | [**addHiddenOffers**](docs/Api/FbyApi.md#addhiddenoffers) | **POST** /campaigns/{campaignId}/hidden-offers | Скрытие товаров и настройки скрытия
*FbyApi* | [**addOffersToArchive**](docs/Api/FbyApi.md#addofferstoarchive) | **POST** /businesses/{businessId}/offer-mappings/archive | Добавление товаров в архив
*FbyApi* | [**calculateTariffs**](docs/Api/FbyApi.md#calculatetariffs) | **POST** /tariffs/calculate | Калькулятор стоимости услуг
*FbyApi* | [**confirmBusinessPrices**](docs/Api/FbyApi.md#confirmbusinessprices) | **POST** /businesses/{businessId}/price-quarantine/confirm | Удаление товара из карантина по цене в кабинете
*FbyApi* | [**confirmCampaignPrices**](docs/Api/FbyApi.md#confirmcampaignprices) | **POST** /campaigns/{campaignId}/price-quarantine/confirm | Удаление товара из карантина по цене в магазине
*FbyApi* | [**createChat**](docs/Api/FbyApi.md#createchat) | **POST** /businesses/{businessId}/chats/new | Создание нового чата с покупателем
*FbyApi* | [**deleteCampaignOffers**](docs/Api/FbyApi.md#deletecampaignoffers) | **POST** /campaigns/{campaignId}/offers/delete | Удаление товаров из ассортимента магазина
*FbyApi* | [**deleteGoodsFeedbackComment**](docs/Api/FbyApi.md#deletegoodsfeedbackcomment) | **POST** /businesses/{businessId}/goods-feedback/comments/delete | Удаление комментария к отзыву
*FbyApi* | [**deleteHiddenOffers**](docs/Api/FbyApi.md#deletehiddenoffers) | **POST** /campaigns/{campaignId}/hidden-offers/delete | Возобновление показа товаров
*FbyApi* | [**deleteOffers**](docs/Api/FbyApi.md#deleteoffers) | **POST** /businesses/{businessId}/offer-mappings/delete | Удаление товаров из каталога
*FbyApi* | [**deleteOffersFromArchive**](docs/Api/FbyApi.md#deleteoffersfromarchive) | **POST** /businesses/{businessId}/offer-mappings/unarchive | Удаление товаров из архива
*FbyApi* | [**deletePromoOffers**](docs/Api/FbyApi.md#deletepromooffers) | **POST** /businesses/{businessId}/promos/offers/delete | Удаление товаров из акции
*FbyApi* | [**generateBannersStatisticsReport**](docs/Api/FbyApi.md#generatebannersstatisticsreport) | **POST** /reports/banners-statistics/generate | Отчет по охватному продвижению
*FbyApi* | [**generateBoostConsolidatedReport**](docs/Api/FbyApi.md#generateboostconsolidatedreport) | **POST** /reports/boost-consolidated/generate | Отчет по бусту продаж
*FbyApi* | [**generateClosureDocumentsDetalizationReport**](docs/Api/FbyApi.md#generateclosuredocumentsdetalizationreport) | **POST** /reports/closure-documents/detalization/generate | Отчет по схождению с закрывающими документами
*FbyApi* | [**generateClosureDocumentsReport**](docs/Api/FbyApi.md#generateclosuredocumentsreport) | **POST** /reports/closure-documents/generate | Закрывающие документы
*FbyApi* | [**generateCompetitorsPositionReport**](docs/Api/FbyApi.md#generatecompetitorspositionreport) | **POST** /reports/competitors-position/generate | Отчет «Конкурентная позиция»
*FbyApi* | [**generateGoodsFeedbackReport**](docs/Api/FbyApi.md#generategoodsfeedbackreport) | **POST** /reports/goods-feedback/generate | Отчет по отзывам о товарах
*FbyApi* | [**generateGoodsMovementReport**](docs/Api/FbyApi.md#generategoodsmovementreport) | **POST** /reports/goods-movement/generate | Отчет по движению товаров
*FbyApi* | [**generateGoodsRealizationReport**](docs/Api/FbyApi.md#generategoodsrealizationreport) | **POST** /reports/goods-realization/generate | Отчет по реализации
*FbyApi* | [**generateGoodsTurnoverReport**](docs/Api/FbyApi.md#generategoodsturnoverreport) | **POST** /reports/goods-turnover/generate | Отчет по оборачиваемости
*FbyApi* | [**generateJewelryFiscalReport**](docs/Api/FbyApi.md#generatejewelryfiscalreport) | **POST** /reports/jewelry-fiscal/generate | Отчет по заказам с ювелирными изделиями
*FbyApi* | [**generateKeyIndicatorsReport**](docs/Api/FbyApi.md#generatekeyindicatorsreport) | **POST** /reports/key-indicators/generate | Отчет по ключевым показателям
*FbyApi* | [**generatePricesReport**](docs/Api/FbyApi.md#generatepricesreport) | **POST** /reports/prices/generate | Отчет «Цены на рынке»
*FbyApi* | [**generateSalesGeographyReport**](docs/Api/FbyApi.md#generatesalesgeographyreport) | **POST** /reports/sales-geography/generate | Отчет по географии продаж
*FbyApi* | [**generateShelfsStatisticsReport**](docs/Api/FbyApi.md#generateshelfsstatisticsreport) | **POST** /reports/shelf-statistics/generate | Отчет по полкам
*FbyApi* | [**generateShowsBoostReport**](docs/Api/FbyApi.md#generateshowsboostreport) | **POST** /reports/shows-boost/generate | Отчет по бусту показов
*FbyApi* | [**generateShowsSalesReport**](docs/Api/FbyApi.md#generateshowssalesreport) | **POST** /reports/shows-sales/generate | Отчет «Аналитика продаж»
*FbyApi* | [**generateStocksOnWarehousesReport**](docs/Api/FbyApi.md#generatestocksonwarehousesreport) | **POST** /reports/stocks-on-warehouses/generate | Отчет по остаткам на складах
*FbyApi* | [**generateUnitedMarketplaceServicesReport**](docs/Api/FbyApi.md#generateunitedmarketplaceservicesreport) | **POST** /reports/united-marketplace-services/generate | Отчет по стоимости услуг
*FbyApi* | [**generateUnitedNettingReport**](docs/Api/FbyApi.md#generateunitednettingreport) | **POST** /reports/united-netting/generate | Отчет по платежам
*FbyApi* | [**generateUnitedOrdersReport**](docs/Api/FbyApi.md#generateunitedordersreport) | **POST** /reports/united-orders/generate | Отчет по заказам
*FbyApi* | [**generateUnitedReturnsReport**](docs/Api/FbyApi.md#generateunitedreturnsreport) | **POST** /reports/united-returns/generate | Отчет по невыкупам и возвратам
*FbyApi* | [**getAuthTokenInfo**](docs/Api/FbyApi.md#getauthtokeninfo) | **POST** /auth/token | Получение информации об авторизационном токене
*FbyApi* | [**getBidsInfoForBusiness**](docs/Api/FbyApi.md#getbidsinfoforbusiness) | **POST** /businesses/{businessId}/bids/info | Информация об установленных ставках
*FbyApi* | [**getBidsRecommendations**](docs/Api/FbyApi.md#getbidsrecommendations) | **POST** /businesses/{businessId}/bids/recommendations | Рекомендованные ставки для заданных товаров
*FbyApi* | [**getBusinessQuarantineOffers**](docs/Api/FbyApi.md#getbusinessquarantineoffers) | **POST** /businesses/{businessId}/price-quarantine | Список товаров, находящихся в карантине по цене в кабинете
*FbyApi* | [**getBusinessSettings**](docs/Api/FbyApi.md#getbusinesssettings) | **POST** /businesses/{businessId}/settings | Настройки кабинета
*FbyApi* | [**getCampaign**](docs/Api/FbyApi.md#getcampaign) | **GET** /campaigns/{campaignId} | Информация о магазине
*FbyApi* | [**getCampaignOffers**](docs/Api/FbyApi.md#getcampaignoffers) | **POST** /campaigns/{campaignId}/offers | Информация о товарах, которые размещены в заданном магазине
*FbyApi* | [**getCampaignQuarantineOffers**](docs/Api/FbyApi.md#getcampaignquarantineoffers) | **POST** /campaigns/{campaignId}/price-quarantine | Список товаров, находящихся в карантине по цене в магазине
*FbyApi* | [**getCampaignSettings**](docs/Api/FbyApi.md#getcampaignsettings) | **GET** /campaigns/{campaignId}/settings | Настройки магазина
*FbyApi* | [**getCampaigns**](docs/Api/FbyApi.md#getcampaigns) | **GET** /campaigns | Список магазинов пользователя
*FbyApi* | [**getCategoriesMaxSaleQuantum**](docs/Api/FbyApi.md#getcategoriesmaxsalequantum) | **POST** /categories/max-sale-quantum | Лимит на установку кванта продажи и минимального количества товаров в заказе
*FbyApi* | [**getCategoriesTree**](docs/Api/FbyApi.md#getcategoriestree) | **POST** /categories/tree | Дерево категорий
*FbyApi* | [**getCategoryContentParameters**](docs/Api/FbyApi.md#getcategorycontentparameters) | **POST** /category/{categoryId}/parameters | Списки характеристик товаров по категориям
*FbyApi* | [**getChat**](docs/Api/FbyApi.md#getchat) | **GET** /businesses/{businessId}/chat | Получение чата по идентификатору
*FbyApi* | [**getChatHistory**](docs/Api/FbyApi.md#getchathistory) | **POST** /businesses/{businessId}/chats/history | Получение истории сообщений в чате
*FbyApi* | [**getChatMessage**](docs/Api/FbyApi.md#getchatmessage) | **GET** /businesses/{businessId}/chats/message | Получение сообщения в чате
*FbyApi* | [**getChats**](docs/Api/FbyApi.md#getchats) | **POST** /businesses/{businessId}/chats | Получение доступных чатов
*FbyApi* | [**getDefaultPrices**](docs/Api/FbyApi.md#getdefaultprices) | **POST** /businesses/{businessId}/offer-prices | Просмотр цен на указанные товары во всех магазинах
*FbyApi* | [**getFulfillmentWarehouses**](docs/Api/FbyApi.md#getfulfillmentwarehouses) | **GET** /warehouses | Идентификаторы складов Маркета
*FbyApi* | [**getGoodsFeedbackComments**](docs/Api/FbyApi.md#getgoodsfeedbackcomments) | **POST** /businesses/{businessId}/goods-feedback/comments | Получение комментариев к отзыву
*FbyApi* | [**getGoodsFeedbacks**](docs/Api/FbyApi.md#getgoodsfeedbacks) | **POST** /businesses/{businessId}/goods-feedback | Получение отзывов о товарах продавца
*FbyApi* | [**getGoodsStats**](docs/Api/FbyApi.md#getgoodsstats) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам
*FbyApi* | [**getHiddenOffers**](docs/Api/FbyApi.md#gethiddenoffers) | **GET** /campaigns/{campaignId}/hidden-offers | Информация о скрытых вами товарах
*FbyApi* | [**getOfferCardsContentStatus**](docs/Api/FbyApi.md#getoffercardscontentstatus) | **POST** /businesses/{businessId}/offer-cards | Получение информации о заполненности карточек магазина
*FbyApi* | [**getOfferMappingEntries**](docs/Api/FbyApi.md#getoffermappingentries) | **GET** /campaigns/{campaignId}/offer-mapping-entries | Список товаров в каталоге
*FbyApi* | [**getOfferMappings**](docs/Api/FbyApi.md#getoffermappings) | **POST** /businesses/{businessId}/offer-mappings | Информация о товарах в каталоге
*FbyApi* | [**getOfferRecommendations**](docs/Api/FbyApi.md#getofferrecommendations) | **POST** /businesses/{businessId}/offers/recommendations | Рекомендации Маркета, касающиеся цен
*FbyApi* | [**getOrder**](docs/Api/FbyApi.md#getorder) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация об одном заказе
*FbyApi* | [**getOrderBusinessBuyerInfo**](docs/Api/FbyApi.md#getorderbusinessbuyerinfo) | **POST** /campaigns/{campaignId}/orders/{orderId}/business-buyer | Информация о покупателе — юридическом лице
*FbyApi* | [**getOrderBusinessDocumentsInfo**](docs/Api/FbyApi.md#getorderbusinessdocumentsinfo) | **POST** /campaigns/{campaignId}/orders/{orderId}/documents | Информация о документах
*FbyApi* | [**getOrders**](docs/Api/FbyApi.md#getorders) | **GET** /campaigns/{campaignId}/orders | Информация о нескольких заказах
*FbyApi* | [**getOrdersStats**](docs/Api/FbyApi.md#getordersstats) | **POST** /campaigns/{campaignId}/stats/orders | Детальная информация по заказам
*FbyApi* | [**getPrices**](docs/Api/FbyApi.md#getprices) | **GET** /campaigns/{campaignId}/offer-prices | Список цен
*FbyApi* | [**getPricesByOfferIds**](docs/Api/FbyApi.md#getpricesbyofferids) | **POST** /campaigns/{campaignId}/offer-prices | Просмотр цен на указанные товары в конкретном магазине
*FbyApi* | [**getPromoOffers**](docs/Api/FbyApi.md#getpromooffers) | **POST** /businesses/{businessId}/promos/offers | Получение списка товаров, которые участвуют или могут участвовать в акции
*FbyApi* | [**getPromos**](docs/Api/FbyApi.md#getpromos) | **POST** /businesses/{businessId}/promos | Получение списка акций
*FbyApi* | [**getQualityRatings**](docs/Api/FbyApi.md#getqualityratings) | **POST** /businesses/{businessId}/ratings/quality | Индекс качества магазинов
*FbyApi* | [**getRegionsCodes**](docs/Api/FbyApi.md#getregionscodes) | **POST** /regions/countries | Список допустимых кодов стран
*FbyApi* | [**getReportInfo**](docs/Api/FbyApi.md#getreportinfo) | **GET** /reports/info/{reportId} | Получение заданного отчета или документа
*FbyApi* | [**getReturn**](docs/Api/FbyApi.md#getreturn) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о невыкупе или возврате
*FbyApi* | [**getReturnApplication**](docs/Api/FbyApi.md#getreturnapplication) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application | Получение заявления на возврат
*FbyApi* | [**getReturnPhoto**](docs/Api/FbyApi.md#getreturnphoto) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографий товаров в возврате
*FbyApi* | [**getReturns**](docs/Api/FbyApi.md#getreturns) | **GET** /campaigns/{campaignId}/returns | Список невыкупов и возвратов
*FbyApi* | [**getStocks**](docs/Api/FbyApi.md#getstocks) | **POST** /campaigns/{campaignId}/offers/stocks | Информация об остатках и оборачиваемости
*FbyApi* | [**getSuggestedOfferMappingEntries**](docs/Api/FbyApi.md#getsuggestedoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/suggestions | Рекомендованные карточки для товаров
*FbyApi* | [**getSuggestedOfferMappings**](docs/Api/FbyApi.md#getsuggestedoffermappings) | **POST** /businesses/{businessId}/offer-mappings/suggestions | Просмотр карточек на Маркете, которые подходят вашим товарам
*FbyApi* | [**getSuggestedPrices**](docs/Api/FbyApi.md#getsuggestedprices) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров
*FbyApi* | [**getSupplyRequestDocuments**](docs/Api/FbyApi.md#getsupplyrequestdocuments) | **POST** /campaigns/{campaignId}/supply-requests/documents | Получение документов по заявке на поставку, вывоз или утилизацию
*FbyApi* | [**getSupplyRequestItems**](docs/Api/FbyApi.md#getsupplyrequestitems) | **POST** /campaigns/{campaignId}/supply-requests/items | Получение товаров в заявке на поставку, вывоз или утилизацию
*FbyApi* | [**getSupplyRequests**](docs/Api/FbyApi.md#getsupplyrequests) | **POST** /campaigns/{campaignId}/supply-requests | Получение информации о заявках на поставку, вывоз и утилизацию
*FbyApi* | [**putBidsForBusiness**](docs/Api/FbyApi.md#putbidsforbusiness) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок
*FbyApi* | [**putBidsForCampaign**](docs/Api/FbyApi.md#putbidsforcampaign) | **PUT** /campaigns/{campaignId}/bids | Включение буста продаж и установка ставок для магазина
*FbyApi* | [**searchRegionChildren**](docs/Api/FbyApi.md#searchregionchildren) | **GET** /regions/{regionId}/children | Информация о дочерних регионах
*FbyApi* | [**searchRegionsById**](docs/Api/FbyApi.md#searchregionsbyid) | **GET** /regions/{regionId} | Информация о регионе
*FbyApi* | [**searchRegionsByName**](docs/Api/FbyApi.md#searchregionsbyname) | **GET** /regions | Поиск регионов по их имени
*FbyApi* | [**sendFileToChat**](docs/Api/FbyApi.md#sendfiletochat) | **POST** /businesses/{businessId}/chats/file/send | Отправка файла в чат
*FbyApi* | [**sendMessageToChat**](docs/Api/FbyApi.md#sendmessagetochat) | **POST** /businesses/{businessId}/chats/message | Отправка сообщения в чат
*FbyApi* | [**skipGoodsFeedbacksReaction**](docs/Api/FbyApi.md#skipgoodsfeedbacksreaction) | **POST** /businesses/{businessId}/goods-feedback/skip-reaction | Пропуск реакции на отзывы
*FbyApi* | [**submitReturnDecision**](docs/Api/FbyApi.md#submitreturndecision) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/submit | Передача и подтверждение решения по возврату
*FbyApi* | [**updateBusinessPrices**](docs/Api/FbyApi.md#updatebusinessprices) | **POST** /businesses/{businessId}/offer-prices/updates | Установка цен на товары для всех магазинов
*FbyApi* | [**updateCampaignOffers**](docs/Api/FbyApi.md#updatecampaignoffers) | **POST** /campaigns/{campaignId}/offers/update | Изменение условий продажи товаров в магазине
*FbyApi* | [**updateGoodsFeedbackComment**](docs/Api/FbyApi.md#updategoodsfeedbackcomment) | **POST** /businesses/{businessId}/goods-feedback/comments/update | Добавление нового или изменение созданного комментария
*FbyApi* | [**updateOfferContent**](docs/Api/FbyApi.md#updateoffercontent) | **POST** /businesses/{businessId}/offer-cards/update | Редактирование категорийных характеристик товара
*FbyApi* | [**updateOfferMappingEntries**](docs/Api/FbyApi.md#updateoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/updates | Добавление и редактирование товаров в каталоге
*FbyApi* | [**updateOfferMappings**](docs/Api/FbyApi.md#updateoffermappings) | **POST** /businesses/{businessId}/offer-mappings/update | Добавление товаров в каталог и изменение информации о них
*FbyApi* | [**updatePrices**](docs/Api/FbyApi.md#updateprices) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине
*FbyApi* | [**updatePromoOffers**](docs/Api/FbyApi.md#updatepromooffers) | **POST** /businesses/{businessId}/promos/offers/update | Добавление товаров в акцию или изменение их цен
*GoodsFeedbackApi* | [**deleteGoodsFeedbackComment**](docs/Api/GoodsFeedbackApi.md#deletegoodsfeedbackcomment) | **POST** /businesses/{businessId}/goods-feedback/comments/delete | Удаление комментария к отзыву
*GoodsFeedbackApi* | [**getGoodsFeedbackComments**](docs/Api/GoodsFeedbackApi.md#getgoodsfeedbackcomments) | **POST** /businesses/{businessId}/goods-feedback/comments | Получение комментариев к отзыву
*GoodsFeedbackApi* | [**getGoodsFeedbacks**](docs/Api/GoodsFeedbackApi.md#getgoodsfeedbacks) | **POST** /businesses/{businessId}/goods-feedback | Получение отзывов о товарах продавца
*GoodsFeedbackApi* | [**skipGoodsFeedbacksReaction**](docs/Api/GoodsFeedbackApi.md#skipgoodsfeedbacksreaction) | **POST** /businesses/{businessId}/goods-feedback/skip-reaction | Пропуск реакции на отзывы
*GoodsFeedbackApi* | [**updateGoodsFeedbackComment**](docs/Api/GoodsFeedbackApi.md#updategoodsfeedbackcomment) | **POST** /businesses/{businessId}/goods-feedback/comments/update | Добавление нового или изменение созданного комментария
*GoodsStatsApi* | [**getGoodsStats**](docs/Api/GoodsStatsApi.md#getgoodsstats) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам
*HiddenOffersApi* | [**addHiddenOffers**](docs/Api/HiddenOffersApi.md#addhiddenoffers) | **POST** /campaigns/{campaignId}/hidden-offers | Скрытие товаров и настройки скрытия
*HiddenOffersApi* | [**deleteHiddenOffers**](docs/Api/HiddenOffersApi.md#deletehiddenoffers) | **POST** /campaigns/{campaignId}/hidden-offers/delete | Возобновление показа товаров
*HiddenOffersApi* | [**getHiddenOffers**](docs/Api/HiddenOffersApi.md#gethiddenoffers) | **GET** /campaigns/{campaignId}/hidden-offers | Информация о скрытых вами товарах
*LaasApi* | [**deleteCampaignOffers**](docs/Api/LaasApi.md#deletecampaignoffers) | **POST** /campaigns/{campaignId}/offers/delete | Удаление товаров из ассортимента магазина
*LaasApi* | [**deleteOffers**](docs/Api/LaasApi.md#deleteoffers) | **POST** /businesses/{businessId}/offer-mappings/delete | Удаление товаров из каталога
*LaasApi* | [**generateClosureDocumentsDetalizationReport**](docs/Api/LaasApi.md#generateclosuredocumentsdetalizationreport) | **POST** /reports/closure-documents/detalization/generate | Отчет по схождению с закрывающими документами
*LaasApi* | [**generateClosureDocumentsReport**](docs/Api/LaasApi.md#generateclosuredocumentsreport) | **POST** /reports/closure-documents/generate | Закрывающие документы
*LaasApi* | [**generateGoodsMovementReport**](docs/Api/LaasApi.md#generategoodsmovementreport) | **POST** /reports/goods-movement/generate | Отчет по движению товаров
*LaasApi* | [**generateStocksOnWarehousesReport**](docs/Api/LaasApi.md#generatestocksonwarehousesreport) | **POST** /reports/stocks-on-warehouses/generate | Отчет по остаткам на складах
*LaasApi* | [**generateUnitedMarketplaceServicesReport**](docs/Api/LaasApi.md#generateunitedmarketplaceservicesreport) | **POST** /reports/united-marketplace-services/generate | Отчет по стоимости услуг
*LaasApi* | [**generateUnitedReturnsReport**](docs/Api/LaasApi.md#generateunitedreturnsreport) | **POST** /reports/united-returns/generate | Отчет по невыкупам и возвратам
*LaasApi* | [**getAuthTokenInfo**](docs/Api/LaasApi.md#getauthtokeninfo) | **POST** /auth/token | Получение информации об авторизационном токене
*LaasApi* | [**getBusinessSettings**](docs/Api/LaasApi.md#getbusinesssettings) | **POST** /businesses/{businessId}/settings | Настройки кабинета
*LaasApi* | [**getCampaign**](docs/Api/LaasApi.md#getcampaign) | **GET** /campaigns/{campaignId} | Информация о магазине
*LaasApi* | [**getCampaignOffers**](docs/Api/LaasApi.md#getcampaignoffers) | **POST** /campaigns/{campaignId}/offers | Информация о товарах, которые размещены в заданном магазине
*LaasApi* | [**getCampaignSettings**](docs/Api/LaasApi.md#getcampaignsettings) | **GET** /campaigns/{campaignId}/settings | Настройки магазина
*LaasApi* | [**getCampaigns**](docs/Api/LaasApi.md#getcampaigns) | **GET** /campaigns | Список магазинов пользователя
*LaasApi* | [**getCategoriesMaxSaleQuantum**](docs/Api/LaasApi.md#getcategoriesmaxsalequantum) | **POST** /categories/max-sale-quantum | Лимит на установку кванта продажи и минимального количества товаров в заказе
*LaasApi* | [**getCategoriesTree**](docs/Api/LaasApi.md#getcategoriestree) | **POST** /categories/tree | Дерево категорий
*LaasApi* | [**getCategoryContentParameters**](docs/Api/LaasApi.md#getcategorycontentparameters) | **POST** /category/{categoryId}/parameters | Списки характеристик товаров по категориям
*LaasApi* | [**getDefaultPrices**](docs/Api/LaasApi.md#getdefaultprices) | **POST** /businesses/{businessId}/offer-prices | Просмотр цен на указанные товары во всех магазинах
*LaasApi* | [**getFulfillmentWarehouses**](docs/Api/LaasApi.md#getfulfillmentwarehouses) | **GET** /warehouses | Идентификаторы складов Маркета
*LaasApi* | [**getOfferCardsContentStatus**](docs/Api/LaasApi.md#getoffercardscontentstatus) | **POST** /businesses/{businessId}/offer-cards | Получение информации о заполненности карточек магазина
*LaasApi* | [**getOfferMappings**](docs/Api/LaasApi.md#getoffermappings) | **POST** /businesses/{businessId}/offer-mappings | Информация о товарах в каталоге
*LaasApi* | [**getOrder**](docs/Api/LaasApi.md#getorder) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация об одном заказе
*LaasApi* | [**getOrders**](docs/Api/LaasApi.md#getorders) | **GET** /campaigns/{campaignId}/orders | Информация о нескольких заказах
*LaasApi* | [**getPricesByOfferIds**](docs/Api/LaasApi.md#getpricesbyofferids) | **POST** /campaigns/{campaignId}/offer-prices | Просмотр цен на указанные товары в конкретном магазине
*LaasApi* | [**getRegionsCodes**](docs/Api/LaasApi.md#getregionscodes) | **POST** /regions/countries | Список допустимых кодов стран
*LaasApi* | [**getReportInfo**](docs/Api/LaasApi.md#getreportinfo) | **GET** /reports/info/{reportId} | Получение заданного отчета или документа
*LaasApi* | [**getReturn**](docs/Api/LaasApi.md#getreturn) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о невыкупе или возврате
*LaasApi* | [**getReturns**](docs/Api/LaasApi.md#getreturns) | **GET** /campaigns/{campaignId}/returns | Список невыкупов и возвратов
*LaasApi* | [**getStocks**](docs/Api/LaasApi.md#getstocks) | **POST** /campaigns/{campaignId}/offers/stocks | Информация об остатках и оборачиваемости
*LaasApi* | [**getSupplyRequestDocuments**](docs/Api/LaasApi.md#getsupplyrequestdocuments) | **POST** /campaigns/{campaignId}/supply-requests/documents | Получение документов по заявке на поставку, вывоз или утилизацию
*LaasApi* | [**getSupplyRequestItems**](docs/Api/LaasApi.md#getsupplyrequestitems) | **POST** /campaigns/{campaignId}/supply-requests/items | Получение товаров в заявке на поставку, вывоз или утилизацию
*LaasApi* | [**getSupplyRequests**](docs/Api/LaasApi.md#getsupplyrequests) | **POST** /campaigns/{campaignId}/supply-requests | Получение информации о заявках на поставку, вывоз и утилизацию
*LaasApi* | [**searchRegionChildren**](docs/Api/LaasApi.md#searchregionchildren) | **GET** /regions/{regionId}/children | Информация о дочерних регионах
*LaasApi* | [**searchRegionsById**](docs/Api/LaasApi.md#searchregionsbyid) | **GET** /regions/{regionId} | Информация о регионе
*LaasApi* | [**searchRegionsByName**](docs/Api/LaasApi.md#searchregionsbyname) | **GET** /regions | Поиск регионов по их имени
*LaasApi* | [**updateBusinessPrices**](docs/Api/LaasApi.md#updatebusinessprices) | **POST** /businesses/{businessId}/offer-prices/updates | Установка цен на товары для всех магазинов
*LaasApi* | [**updateCampaignOffers**](docs/Api/LaasApi.md#updatecampaignoffers) | **POST** /campaigns/{campaignId}/offers/update | Изменение условий продажи товаров в магазине
*LaasApi* | [**updateOfferContent**](docs/Api/LaasApi.md#updateoffercontent) | **POST** /businesses/{businessId}/offer-cards/update | Редактирование категорийных характеристик товара
*LaasApi* | [**updateOfferMappings**](docs/Api/LaasApi.md#updateoffermappings) | **POST** /businesses/{businessId}/offer-mappings/update | Добавление товаров в каталог и изменение информации о них
*LaasApi* | [**updateOrderStatus**](docs/Api/LaasApi.md#updateorderstatus) | **PUT** /campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса одного заказа
*LaasApi* | [**updateOrderStatuses**](docs/Api/LaasApi.md#updateorderstatuses) | **POST** /campaigns/{campaignId}/orders/status-update | Изменение статусов нескольких заказов
*LaasApi* | [**updatePrices**](docs/Api/LaasApi.md#updateprices) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине
*ModelsApi* | [**getModel**](docs/Api/ModelsApi.md#getmodel) | **GET** /models/{modelId} | Информация об одной модели
*ModelsApi* | [**getModelOffers**](docs/Api/ModelsApi.md#getmodeloffers) | **GET** /models/{modelId}/offers | Список предложений для одной модели
*ModelsApi* | [**getModels**](docs/Api/ModelsApi.md#getmodels) | **POST** /models | Информация о нескольких моделях
*ModelsApi* | [**getModelsOffers**](docs/Api/ModelsApi.md#getmodelsoffers) | **POST** /models/offers | Список предложений для нескольких моделей
*ModelsApi* | [**searchModels**](docs/Api/ModelsApi.md#searchmodels) | **GET** /models | Поиск модели товара
*OfferMappingsApi* | [**getOfferMappingEntries**](docs/Api/OfferMappingsApi.md#getoffermappingentries) | **GET** /campaigns/{campaignId}/offer-mapping-entries | Список товаров в каталоге
*OfferMappingsApi* | [**getSuggestedOfferMappingEntries**](docs/Api/OfferMappingsApi.md#getsuggestedoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/suggestions | Рекомендованные карточки для товаров
*OfferMappingsApi* | [**updateOfferMappingEntries**](docs/Api/OfferMappingsApi.md#updateoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/updates | Добавление и редактирование товаров в каталоге
*OffersApi* | [**deleteCampaignOffers**](docs/Api/OffersApi.md#deletecampaignoffers) | **POST** /campaigns/{campaignId}/offers/delete | Удаление товаров из ассортимента магазина
*OffersApi* | [**getCampaignOffers**](docs/Api/OffersApi.md#getcampaignoffers) | **POST** /campaigns/{campaignId}/offers | Информация о товарах, которые размещены в заданном магазине
*OffersApi* | [**getOfferRecommendations**](docs/Api/OffersApi.md#getofferrecommendations) | **POST** /businesses/{businessId}/offers/recommendations | Рекомендации Маркета, касающиеся цен
*OffersApi* | [**updateCampaignOffers**](docs/Api/OffersApi.md#updatecampaignoffers) | **POST** /campaigns/{campaignId}/offers/update | Изменение условий продажи товаров в магазине
*OrderBusinessInformationApi* | [**getOrderBusinessBuyerInfo**](docs/Api/OrderBusinessInformationApi.md#getorderbusinessbuyerinfo) | **POST** /campaigns/{campaignId}/orders/{orderId}/business-buyer | Информация о покупателе — юридическом лице
*OrderBusinessInformationApi* | [**getOrderBusinessDocumentsInfo**](docs/Api/OrderBusinessInformationApi.md#getorderbusinessdocumentsinfo) | **POST** /campaigns/{campaignId}/orders/{orderId}/documents | Информация о документах
*OrderDeliveryApi* | [**getOrderBuyerInfo**](docs/Api/OrderDeliveryApi.md#getorderbuyerinfo) | **GET** /campaigns/{campaignId}/orders/{orderId}/buyer | Информация о покупателе — физическом лице
*OrderDeliveryApi* | [**setOrderDeliveryDate**](docs/Api/OrderDeliveryApi.md#setorderdeliverydate) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/date | Изменение даты доставки заказа
*OrderDeliveryApi* | [**setOrderDeliveryTrackCode**](docs/Api/OrderDeliveryApi.md#setorderdeliverytrackcode) | **POST** /campaigns/{campaignId}/orders/{orderId}/delivery/track | Передача трек‑номера посылки
*OrderDeliveryApi* | [**updateOrderStorageLimit**](docs/Api/OrderDeliveryApi.md#updateorderstoragelimit) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/storage-limit | Продление срока хранения заказа
*OrderDeliveryApi* | [**verifyOrderEac**](docs/Api/OrderDeliveryApi.md#verifyordereac) | **PUT** /campaigns/{campaignId}/orders/{orderId}/verifyEac | Передача кода подтверждения
*OrderLabelsApi* | [**generateOrderLabel**](docs/Api/OrderLabelsApi.md#generateorderlabel) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label | Готовый ярлык‑наклейка для коробки в заказе
*OrderLabelsApi* | [**generateOrderLabels**](docs/Api/OrderLabelsApi.md#generateorderlabels) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels | Готовые ярлыки‑наклейки на все коробки в одном заказе
*OrderLabelsApi* | [**getOrderLabelsData**](docs/Api/OrderLabelsApi.md#getorderlabelsdata) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels/data | Данные для самостоятельного изготовления ярлыков
*OrdersApi* | [**acceptOrderCancellation**](docs/Api/OrdersApi.md#acceptordercancellation) | **PUT** /campaigns/{campaignId}/orders/{orderId}/cancellation/accept | Отмена заказа покупателем
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация об одном заказе
*OrdersApi* | [**getOrderIdentifiersStatus**](docs/Api/OrdersApi.md#getorderidentifiersstatus) | **POST** /campaigns/{campaignId}/orders/{orderId}/identifiers/status | Статусы проверки УИНов
*OrdersApi* | [**getOrders**](docs/Api/OrdersApi.md#getorders) | **GET** /campaigns/{campaignId}/orders | Информация о нескольких заказах
*OrdersApi* | [**provideOrderDigitalCodes**](docs/Api/OrdersApi.md#provideorderdigitalcodes) | **POST** /campaigns/{campaignId}/orders/{orderId}/deliverDigitalGoods | Передача ключей цифровых товаров
*OrdersApi* | [**provideOrderItemIdentifiers**](docs/Api/OrdersApi.md#provideorderitemidentifiers) | **PUT** /campaigns/{campaignId}/orders/{orderId}/identifiers | Передача кодов маркировки единиц товара
*OrdersApi* | [**setOrderBoxLayout**](docs/Api/OrdersApi.md#setorderboxlayout) | **PUT** /campaigns/{campaignId}/orders/{orderId}/boxes | Подготовка заказа
*OrdersApi* | [**setOrderShipmentBoxes**](docs/Api/OrdersApi.md#setordershipmentboxes) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes | Передача количества грузовых мест в заказе
*OrdersApi* | [**updateExternalOrderId**](docs/Api/OrdersApi.md#updateexternalorderid) | **POST** /campaigns/{campaignId}/orders/{orderId}/external-id | Передача или изменение внешнего идентификатора заказа
*OrdersApi* | [**updateOrderItems**](docs/Api/OrdersApi.md#updateorderitems) | **PUT** /campaigns/{campaignId}/orders/{orderId}/items | Удаление товаров из заказа или уменьшение их числа
*OrdersApi* | [**updateOrderStatus**](docs/Api/OrdersApi.md#updateorderstatus) | **PUT** /campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса одного заказа
*OrdersApi* | [**updateOrderStatuses**](docs/Api/OrdersApi.md#updateorderstatuses) | **POST** /campaigns/{campaignId}/orders/status-update | Изменение статусов нескольких заказов
*OrdersStatsApi* | [**getOrdersStats**](docs/Api/OrdersStatsApi.md#getordersstats) | **POST** /campaigns/{campaignId}/stats/orders | Детальная информация по заказам
*OutletLicensesApi* | [**deleteOutletLicenses**](docs/Api/OutletLicensesApi.md#deleteoutletlicenses) | **DELETE** /campaigns/{campaignId}/outlets/licenses | Удаление лицензий для точек продаж
*OutletLicensesApi* | [**getOutletLicenses**](docs/Api/OutletLicensesApi.md#getoutletlicenses) | **GET** /campaigns/{campaignId}/outlets/licenses | Информация о лицензиях для точек продаж
*OutletLicensesApi* | [**updateOutletLicenses**](docs/Api/OutletLicensesApi.md#updateoutletlicenses) | **POST** /campaigns/{campaignId}/outlets/licenses | Создание и изменение лицензий для точек продаж
*OutletsApi* | [**createOutlet**](docs/Api/OutletsApi.md#createoutlet) | **POST** /campaigns/{campaignId}/outlets | Создание точки продаж
*OutletsApi* | [**deleteOutlet**](docs/Api/OutletsApi.md#deleteoutlet) | **DELETE** /campaigns/{campaignId}/outlets/{outletId} | Удаление точки продаж
*OutletsApi* | [**getOutlet**](docs/Api/OutletsApi.md#getoutlet) | **GET** /campaigns/{campaignId}/outlets/{outletId} | Информация об одной точке продаж
*OutletsApi* | [**getOutlets**](docs/Api/OutletsApi.md#getoutlets) | **GET** /campaigns/{campaignId}/outlets | Информация о нескольких точках продаж
*OutletsApi* | [**updateOutlet**](docs/Api/OutletsApi.md#updateoutlet) | **PUT** /campaigns/{campaignId}/outlets/{outletId} | Изменение информации о точке продаж
*PriceQuarantineApi* | [**confirmBusinessPrices**](docs/Api/PriceQuarantineApi.md#confirmbusinessprices) | **POST** /businesses/{businessId}/price-quarantine/confirm | Удаление товара из карантина по цене в кабинете
*PriceQuarantineApi* | [**confirmCampaignPrices**](docs/Api/PriceQuarantineApi.md#confirmcampaignprices) | **POST** /campaigns/{campaignId}/price-quarantine/confirm | Удаление товара из карантина по цене в магазине
*PriceQuarantineApi* | [**getBusinessQuarantineOffers**](docs/Api/PriceQuarantineApi.md#getbusinessquarantineoffers) | **POST** /businesses/{businessId}/price-quarantine | Список товаров, находящихся в карантине по цене в кабинете
*PriceQuarantineApi* | [**getCampaignQuarantineOffers**](docs/Api/PriceQuarantineApi.md#getcampaignquarantineoffers) | **POST** /campaigns/{campaignId}/price-quarantine | Список товаров, находящихся в карантине по цене в магазине
*PricesApi* | [**getDefaultPrices**](docs/Api/PricesApi.md#getdefaultprices) | **POST** /businesses/{businessId}/offer-prices | Просмотр цен на указанные товары во всех магазинах
*PricesApi* | [**getPrices**](docs/Api/PricesApi.md#getprices) | **GET** /campaigns/{campaignId}/offer-prices | Список цен
*PricesApi* | [**getPricesByOfferIds**](docs/Api/PricesApi.md#getpricesbyofferids) | **POST** /campaigns/{campaignId}/offer-prices | Просмотр цен на указанные товары в конкретном магазине
*PricesApi* | [**getSuggestedPrices**](docs/Api/PricesApi.md#getsuggestedprices) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров
*PricesApi* | [**updateBusinessPrices**](docs/Api/PricesApi.md#updatebusinessprices) | **POST** /businesses/{businessId}/offer-prices/updates | Установка цен на товары для всех магазинов
*PricesApi* | [**updatePrices**](docs/Api/PricesApi.md#updateprices) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине
*PromosApi* | [**deletePromoOffers**](docs/Api/PromosApi.md#deletepromooffers) | **POST** /businesses/{businessId}/promos/offers/delete | Удаление товаров из акции
*PromosApi* | [**getPromoOffers**](docs/Api/PromosApi.md#getpromooffers) | **POST** /businesses/{businessId}/promos/offers | Получение списка товаров, которые участвуют или могут участвовать в акции
*PromosApi* | [**getPromos**](docs/Api/PromosApi.md#getpromos) | **POST** /businesses/{businessId}/promos | Получение списка акций
*PromosApi* | [**updatePromoOffers**](docs/Api/PromosApi.md#updatepromooffers) | **POST** /businesses/{businessId}/promos/offers/update | Добавление товаров в акцию или изменение их цен
*RatingsApi* | [**getQualityRatingDetails**](docs/Api/RatingsApi.md#getqualityratingdetails) | **POST** /campaigns/{campaignId}/ratings/quality/details | Заказы, которые повлияли на индекс качества
*RatingsApi* | [**getQualityRatings**](docs/Api/RatingsApi.md#getqualityratings) | **POST** /businesses/{businessId}/ratings/quality | Индекс качества магазинов
*RegionsApi* | [**getRegionsCodes**](docs/Api/RegionsApi.md#getregionscodes) | **POST** /regions/countries | Список допустимых кодов стран
*RegionsApi* | [**searchRegionChildren**](docs/Api/RegionsApi.md#searchregionchildren) | **GET** /regions/{regionId}/children | Информация о дочерних регионах
*RegionsApi* | [**searchRegionsById**](docs/Api/RegionsApi.md#searchregionsbyid) | **GET** /regions/{regionId} | Информация о регионе
*RegionsApi* | [**searchRegionsByName**](docs/Api/RegionsApi.md#searchregionsbyname) | **GET** /regions | Поиск регионов по их имени
*ReportsApi* | [**generateBannersStatisticsReport**](docs/Api/ReportsApi.md#generatebannersstatisticsreport) | **POST** /reports/banners-statistics/generate | Отчет по охватному продвижению
*ReportsApi* | [**generateBoostConsolidatedReport**](docs/Api/ReportsApi.md#generateboostconsolidatedreport) | **POST** /reports/boost-consolidated/generate | Отчет по бусту продаж
*ReportsApi* | [**generateClosureDocumentsDetalizationReport**](docs/Api/ReportsApi.md#generateclosuredocumentsdetalizationreport) | **POST** /reports/closure-documents/detalization/generate | Отчет по схождению с закрывающими документами
*ReportsApi* | [**generateClosureDocumentsReport**](docs/Api/ReportsApi.md#generateclosuredocumentsreport) | **POST** /reports/closure-documents/generate | Закрывающие документы
*ReportsApi* | [**generateCompetitorsPositionReport**](docs/Api/ReportsApi.md#generatecompetitorspositionreport) | **POST** /reports/competitors-position/generate | Отчет «Конкурентная позиция»
*ReportsApi* | [**generateGoodsFeedbackReport**](docs/Api/ReportsApi.md#generategoodsfeedbackreport) | **POST** /reports/goods-feedback/generate | Отчет по отзывам о товарах
*ReportsApi* | [**generateGoodsMovementReport**](docs/Api/ReportsApi.md#generategoodsmovementreport) | **POST** /reports/goods-movement/generate | Отчет по движению товаров
*ReportsApi* | [**generateGoodsRealizationReport**](docs/Api/ReportsApi.md#generategoodsrealizationreport) | **POST** /reports/goods-realization/generate | Отчет по реализации
*ReportsApi* | [**generateGoodsTurnoverReport**](docs/Api/ReportsApi.md#generategoodsturnoverreport) | **POST** /reports/goods-turnover/generate | Отчет по оборачиваемости
*ReportsApi* | [**generateJewelryFiscalReport**](docs/Api/ReportsApi.md#generatejewelryfiscalreport) | **POST** /reports/jewelry-fiscal/generate | Отчет по заказам с ювелирными изделиями
*ReportsApi* | [**generateKeyIndicatorsReport**](docs/Api/ReportsApi.md#generatekeyindicatorsreport) | **POST** /reports/key-indicators/generate | Отчет по ключевым показателям
*ReportsApi* | [**generateMassOrderLabelsReport**](docs/Api/ReportsApi.md#generatemassorderlabelsreport) | **POST** /reports/documents/labels/generate | Готовые ярлыки‑наклейки на все коробки в нескольких заказах
*ReportsApi* | [**generatePricesReport**](docs/Api/ReportsApi.md#generatepricesreport) | **POST** /reports/prices/generate | Отчет «Цены на рынке»
*ReportsApi* | [**generateSalesGeographyReport**](docs/Api/ReportsApi.md#generatesalesgeographyreport) | **POST** /reports/sales-geography/generate | Отчет по географии продаж
*ReportsApi* | [**generateShelfsStatisticsReport**](docs/Api/ReportsApi.md#generateshelfsstatisticsreport) | **POST** /reports/shelf-statistics/generate | Отчет по полкам
*ReportsApi* | [**generateShipmentListDocumentReport**](docs/Api/ReportsApi.md#generateshipmentlistdocumentreport) | **POST** /reports/documents/shipment-list/generate | Получение листа сборки
*ReportsApi* | [**generateShowsBoostReport**](docs/Api/ReportsApi.md#generateshowsboostreport) | **POST** /reports/shows-boost/generate | Отчет по бусту показов
*ReportsApi* | [**generateShowsSalesReport**](docs/Api/ReportsApi.md#generateshowssalesreport) | **POST** /reports/shows-sales/generate | Отчет «Аналитика продаж»
*ReportsApi* | [**generateStocksOnWarehousesReport**](docs/Api/ReportsApi.md#generatestocksonwarehousesreport) | **POST** /reports/stocks-on-warehouses/generate | Отчет по остаткам на складах
*ReportsApi* | [**generateUnitedMarketplaceServicesReport**](docs/Api/ReportsApi.md#generateunitedmarketplaceservicesreport) | **POST** /reports/united-marketplace-services/generate | Отчет по стоимости услуг
*ReportsApi* | [**generateUnitedNettingReport**](docs/Api/ReportsApi.md#generateunitednettingreport) | **POST** /reports/united-netting/generate | Отчет по платежам
*ReportsApi* | [**generateUnitedOrdersReport**](docs/Api/ReportsApi.md#generateunitedordersreport) | **POST** /reports/united-orders/generate | Отчет по заказам
*ReportsApi* | [**generateUnitedReturnsReport**](docs/Api/ReportsApi.md#generateunitedreturnsreport) | **POST** /reports/united-returns/generate | Отчет по невыкупам и возвратам
*ReportsApi* | [**getReportInfo**](docs/Api/ReportsApi.md#getreportinfo) | **GET** /reports/info/{reportId} | Получение заданного отчета или документа
*ReturnsApi* | [**getReturn**](docs/Api/ReturnsApi.md#getreturn) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о невыкупе или возврате
*ReturnsApi* | [**getReturnApplication**](docs/Api/ReturnsApi.md#getreturnapplication) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application | Получение заявления на возврат
*ReturnsApi* | [**getReturnPhoto**](docs/Api/ReturnsApi.md#getreturnphoto) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографий товаров в возврате
*ReturnsApi* | [**getReturns**](docs/Api/ReturnsApi.md#getreturns) | **GET** /campaigns/{campaignId}/returns | Список невыкупов и возвратов
*ReturnsApi* | [**setReturnDecision**](docs/Api/ReturnsApi.md#setreturndecision) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision | Принятие или изменение решения по возврату
*ReturnsApi* | [**submitReturnDecision**](docs/Api/ReturnsApi.md#submitreturndecision) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/submit | Передача и подтверждение решения по возврату
*ShipmentsApi* | [**confirmShipment**](docs/Api/ShipmentsApi.md#confirmshipment) | **POST** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/confirm | Подтверждение отгрузки
*ShipmentsApi* | [**downloadShipmentAct**](docs/Api/ShipmentsApi.md#downloadshipmentact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/act | Получение акта приема-передачи
*ShipmentsApi* | [**downloadShipmentDiscrepancyAct**](docs/Api/ShipmentsApi.md#downloadshipmentdiscrepancyact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/discrepancy-act | Получение акта расхождений
*ShipmentsApi* | [**downloadShipmentInboundAct**](docs/Api/ShipmentsApi.md#downloadshipmentinboundact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/inbound-act | Получение фактического акта приема-передачи
*ShipmentsApi* | [**downloadShipmentPalletLabels**](docs/Api/ShipmentsApi.md#downloadshipmentpalletlabels) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/pallet/labels | Ярлыки для доверительной приемки
*ShipmentsApi* | [**downloadShipmentReceptionTransferAct**](docs/Api/ShipmentsApi.md#downloadshipmentreceptiontransferact) | **GET** /campaigns/{campaignId}/shipments/reception-transfer-act | Подтверждение ближайшей отгрузки и получение акта приема-передачи для нее
*ShipmentsApi* | [**downloadShipmentTransportationWaybill**](docs/Api/ShipmentsApi.md#downloadshipmenttransportationwaybill) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/transportation-waybill | Получение транспортной накладной
*ShipmentsApi* | [**getShipment**](docs/Api/ShipmentsApi.md#getshipment) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId} | Получение информации об одной отгрузке
*ShipmentsApi* | [**getShipmentOrdersInfo**](docs/Api/ShipmentsApi.md#getshipmentordersinfo) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/orders/info | Получение информации о возможности печати ярлыков
*ShipmentsApi* | [**searchShipments**](docs/Api/ShipmentsApi.md#searchshipments) | **PUT** /campaigns/{campaignId}/first-mile/shipments | Получение информации о нескольких отгрузках
*ShipmentsApi* | [**setShipmentPalletsCount**](docs/Api/ShipmentsApi.md#setshipmentpalletscount) | **PUT** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/pallets | Передача количества упаковок в отгрузке
*ShipmentsApi* | [**transferOrdersFromShipment**](docs/Api/ShipmentsApi.md#transferordersfromshipment) | **POST** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/orders/transfer | Перенос заказов в следующую отгрузку
*StocksApi* | [**getStocks**](docs/Api/StocksApi.md#getstocks) | **POST** /campaigns/{campaignId}/offers/stocks | Информация об остатках и оборачиваемости
*StocksApi* | [**updateStocks**](docs/Api/StocksApi.md#updatestocks) | **PUT** /campaigns/{campaignId}/offers/stocks | Передача информации об остатках
*SupplyRequestsApi* | [**getSupplyRequestDocuments**](docs/Api/SupplyRequestsApi.md#getsupplyrequestdocuments) | **POST** /campaigns/{campaignId}/supply-requests/documents | Получение документов по заявке на поставку, вывоз или утилизацию
*SupplyRequestsApi* | [**getSupplyRequestItems**](docs/Api/SupplyRequestsApi.md#getsupplyrequestitems) | **POST** /campaigns/{campaignId}/supply-requests/items | Получение товаров в заявке на поставку, вывоз или утилизацию
*SupplyRequestsApi* | [**getSupplyRequests**](docs/Api/SupplyRequestsApi.md#getsupplyrequests) | **POST** /campaigns/{campaignId}/supply-requests | Получение информации о заявках на поставку, вывоз и утилизацию
*TariffsApi* | [**calculateTariffs**](docs/Api/TariffsApi.md#calculatetariffs) | **POST** /tariffs/calculate | Калькулятор стоимости услуг
*WarehousesApi* | [**getFulfillmentWarehouses**](docs/Api/WarehousesApi.md#getfulfillmentwarehouses) | **GET** /warehouses | Идентификаторы складов Маркета
*WarehousesApi* | [**getPagedWarehouses**](docs/Api/WarehousesApi.md#getpagedwarehouses) | **POST** /businesses/{businessId}/warehouses | Список складов
*WarehousesApi* | [**getWarehouses**](docs/Api/WarehousesApi.md#getwarehouses) | **GET** /businesses/{businessId}/warehouses | Список складов и групп складов
*WarehousesApi* | [**updateWarehouseStatus**](docs/Api/WarehousesApi.md#updatewarehousestatus) | **POST** /campaigns/{campaignId}/warehouse/status | Изменение статуса склада

## Models

- [AcceptOrderCancellationRequest](docs/Model/AcceptOrderCancellationRequest.md)
- [AddHiddenOffersRequest](docs/Model/AddHiddenOffersRequest.md)
- [AddOffersToArchiveDTO](docs/Model/AddOffersToArchiveDTO.md)
- [AddOffersToArchiveErrorDTO](docs/Model/AddOffersToArchiveErrorDTO.md)
- [AddOffersToArchiveErrorType](docs/Model/AddOffersToArchiveErrorType.md)
- [AddOffersToArchiveRequest](docs/Model/AddOffersToArchiveRequest.md)
- [AddOffersToArchiveResponse](docs/Model/AddOffersToArchiveResponse.md)
- [AffectedOrderQualityRatingComponentType](docs/Model/AffectedOrderQualityRatingComponentType.md)
- [AgeDTO](docs/Model/AgeDTO.md)
- [AgeUnitType](docs/Model/AgeUnitType.md)
- [ApiClientDataErrorResponse](docs/Model/ApiClientDataErrorResponse.md)
- [ApiErrorDTO](docs/Model/ApiErrorDTO.md)
- [ApiErrorResponse](docs/Model/ApiErrorResponse.md)
- [ApiForbiddenErrorResponse](docs/Model/ApiForbiddenErrorResponse.md)
- [ApiKeyDTO](docs/Model/ApiKeyDTO.md)
- [ApiKeyScopeType](docs/Model/ApiKeyScopeType.md)
- [ApiLimitErrorResponse](docs/Model/ApiLimitErrorResponse.md)
- [ApiLockedErrorResponse](docs/Model/ApiLockedErrorResponse.md)
- [ApiNotFoundErrorResponse](docs/Model/ApiNotFoundErrorResponse.md)
- [ApiResponse](docs/Model/ApiResponse.md)
- [ApiResponseStatusType](docs/Model/ApiResponseStatusType.md)
- [ApiServerErrorResponse](docs/Model/ApiServerErrorResponse.md)
- [ApiUnauthorizedErrorResponse](docs/Model/ApiUnauthorizedErrorResponse.md)
- [BaseCampaignOfferDTO](docs/Model/BaseCampaignOfferDTO.md)
- [BaseOfferDTO](docs/Model/BaseOfferDTO.md)
- [BaseOfferResponseDTO](docs/Model/BaseOfferResponseDTO.md)
- [BasePriceDTO](docs/Model/BasePriceDTO.md)
- [BaseShipmentDTO](docs/Model/BaseShipmentDTO.md)
- [BenefitType](docs/Model/BenefitType.md)
- [BidRecommendationItemDTO](docs/Model/BidRecommendationItemDTO.md)
- [BriefOrderItemDTO](docs/Model/BriefOrderItemDTO.md)
- [BriefOrderItemInstanceDTO](docs/Model/BriefOrderItemInstanceDTO.md)
- [BusinessDTO](docs/Model/BusinessDTO.md)
- [BusinessSettingsDTO](docs/Model/BusinessSettingsDTO.md)
- [CalculateTariffsOfferDTO](docs/Model/CalculateTariffsOfferDTO.md)
- [CalculateTariffsOfferInfoDTO](docs/Model/CalculateTariffsOfferInfoDTO.md)
- [CalculateTariffsParametersDTO](docs/Model/CalculateTariffsParametersDTO.md)
- [CalculateTariffsRequest](docs/Model/CalculateTariffsRequest.md)
- [CalculateTariffsResponse](docs/Model/CalculateTariffsResponse.md)
- [CalculateTariffsResponseDTO](docs/Model/CalculateTariffsResponseDTO.md)
- [CalculatedTariffDTO](docs/Model/CalculatedTariffDTO.md)
- [CalculatedTariffType](docs/Model/CalculatedTariffType.md)
- [CampaignDTO](docs/Model/CampaignDTO.md)
- [CampaignQualityRatingDTO](docs/Model/CampaignQualityRatingDTO.md)
- [CampaignSettingsDTO](docs/Model/CampaignSettingsDTO.md)
- [CampaignSettingsDeliveryDTO](docs/Model/CampaignSettingsDeliveryDTO.md)
- [CampaignSettingsLocalRegionDTO](docs/Model/CampaignSettingsLocalRegionDTO.md)
- [CampaignSettingsScheduleDTO](docs/Model/CampaignSettingsScheduleDTO.md)
- [CampaignSettingsScheduleSourceType](docs/Model/CampaignSettingsScheduleSourceType.md)
- [CampaignSettingsTimePeriodDTO](docs/Model/CampaignSettingsTimePeriodDTO.md)
- [CampaignsQualityRatingDTO](docs/Model/CampaignsQualityRatingDTO.md)
- [CatalogLanguageType](docs/Model/CatalogLanguageType.md)
- [CategoryContentParametersDTO](docs/Model/CategoryContentParametersDTO.md)
- [CategoryDTO](docs/Model/CategoryDTO.md)
- [CategoryErrorDTO](docs/Model/CategoryErrorDTO.md)
- [CategoryErrorType](docs/Model/CategoryErrorType.md)
- [CategoryParameterDTO](docs/Model/CategoryParameterDTO.md)
- [CategoryParameterUnitDTO](docs/Model/CategoryParameterUnitDTO.md)
- [ChangeOutletRequest](docs/Model/ChangeOutletRequest.md)
- [ChannelType](docs/Model/ChannelType.md)
- [ChatContextDTO](docs/Model/ChatContextDTO.md)
- [ChatContextType](docs/Model/ChatContextType.md)
- [ChatFullContextDTO](docs/Model/ChatFullContextDTO.md)
- [ChatMessageDTO](docs/Model/ChatMessageDTO.md)
- [ChatMessagePayloadDTO](docs/Model/ChatMessagePayloadDTO.md)
- [ChatMessageSenderType](docs/Model/ChatMessageSenderType.md)
- [ChatMessagesResultDTO](docs/Model/ChatMessagesResultDTO.md)
- [ChatStatusType](docs/Model/ChatStatusType.md)
- [ChatType](docs/Model/ChatType.md)
- [ClosureDocumentsContractType](docs/Model/ClosureDocumentsContractType.md)
- [ClosureDocumentsMonthOfYearDTO](docs/Model/ClosureDocumentsMonthOfYearDTO.md)
- [CommodityCodeDTO](docs/Model/CommodityCodeDTO.md)
- [CommodityCodeType](docs/Model/CommodityCodeType.md)
- [ConfirmPricesRequest](docs/Model/ConfirmPricesRequest.md)
- [ConfirmShipmentRequest](docs/Model/ConfirmShipmentRequest.md)
- [CountryDTO](docs/Model/CountryDTO.md)
- [CreateChatRequest](docs/Model/CreateChatRequest.md)
- [CreateChatResponse](docs/Model/CreateChatResponse.md)
- [CreateChatResultDTO](docs/Model/CreateChatResultDTO.md)
- [CreateOutletResponse](docs/Model/CreateOutletResponse.md)
- [CurrencyType](docs/Model/CurrencyType.md)
- [CurrencyValueDTO](docs/Model/CurrencyValueDTO.md)
- [DayOfWeekType](docs/Model/DayOfWeekType.md)
- [DeleteCampaignOffersDTO](docs/Model/DeleteCampaignOffersDTO.md)
- [DeleteCampaignOffersRequest](docs/Model/DeleteCampaignOffersRequest.md)
- [DeleteCampaignOffersResponse](docs/Model/DeleteCampaignOffersResponse.md)
- [DeleteGoodsFeedbackCommentRequest](docs/Model/DeleteGoodsFeedbackCommentRequest.md)
- [DeleteHiddenOffersRequest](docs/Model/DeleteHiddenOffersRequest.md)
- [DeleteOfferParameterType](docs/Model/DeleteOfferParameterType.md)
- [DeleteOffersDTO](docs/Model/DeleteOffersDTO.md)
- [DeleteOffersFromArchiveDTO](docs/Model/DeleteOffersFromArchiveDTO.md)
- [DeleteOffersFromArchiveRequest](docs/Model/DeleteOffersFromArchiveRequest.md)
- [DeleteOffersFromArchiveResponse](docs/Model/DeleteOffersFromArchiveResponse.md)
- [DeleteOffersRequest](docs/Model/DeleteOffersRequest.md)
- [DeleteOffersResponse](docs/Model/DeleteOffersResponse.md)
- [DeletePromoOffersRequest](docs/Model/DeletePromoOffersRequest.md)
- [DeletePromoOffersResponse](docs/Model/DeletePromoOffersResponse.md)
- [DeletePromoOffersResultDTO](docs/Model/DeletePromoOffersResultDTO.md)
- [DeliveryServiceDTO](docs/Model/DeliveryServiceDTO.md)
- [DeliveryServiceInfoDTO](docs/Model/DeliveryServiceInfoDTO.md)
- [DeliveryServicesDTO](docs/Model/DeliveryServicesDTO.md)
- [DocumentDTO](docs/Model/DocumentDTO.md)
- [EacVerificationResultDTO](docs/Model/EacVerificationResultDTO.md)
- [EacVerificationStatusType](docs/Model/EacVerificationStatusType.md)
- [EmptyApiResponse](docs/Model/EmptyApiResponse.md)
- [EnrichedMappingsOfferDTO](docs/Model/EnrichedMappingsOfferDTO.md)
- [EnrichedModelDTO](docs/Model/EnrichedModelDTO.md)
- [EnrichedModelsDTO](docs/Model/EnrichedModelsDTO.md)
- [EnrichedOrderBoxLayoutDTO](docs/Model/EnrichedOrderBoxLayoutDTO.md)
- [ExtensionShipmentDTO](docs/Model/ExtensionShipmentDTO.md)
- [FeedbackReactionStatusType](docs/Model/FeedbackReactionStatusType.md)
- [FlippingPagerDTO](docs/Model/FlippingPagerDTO.md)
- [ForwardScrollingPagerDTO](docs/Model/ForwardScrollingPagerDTO.md)
- [FulfillmentWarehouseDTO](docs/Model/FulfillmentWarehouseDTO.md)
- [FulfillmentWarehousesDTO](docs/Model/FulfillmentWarehousesDTO.md)
- [FullOutletDTO](docs/Model/FullOutletDTO.md)
- [FullOutletLicenseDTO](docs/Model/FullOutletLicenseDTO.md)
- [GenerateBannersStatisticsRequest](docs/Model/GenerateBannersStatisticsRequest.md)
- [GenerateBoostConsolidatedRequest](docs/Model/GenerateBoostConsolidatedRequest.md)
- [GenerateClosureDocumentsDetalizationRequest](docs/Model/GenerateClosureDocumentsDetalizationRequest.md)
- [GenerateClosureDocumentsRequest](docs/Model/GenerateClosureDocumentsRequest.md)
- [GenerateCompetitorsPositionReportRequest](docs/Model/GenerateCompetitorsPositionReportRequest.md)
- [GenerateGoodsFeedbackRequest](docs/Model/GenerateGoodsFeedbackRequest.md)
- [GenerateGoodsMovementReportRequest](docs/Model/GenerateGoodsMovementReportRequest.md)
- [GenerateGoodsRealizationReportRequest](docs/Model/GenerateGoodsRealizationReportRequest.md)
- [GenerateGoodsTurnoverRequest](docs/Model/GenerateGoodsTurnoverRequest.md)
- [GenerateJewelryFiscalReportRequest](docs/Model/GenerateJewelryFiscalReportRequest.md)
- [GenerateKeyIndicatorsRequest](docs/Model/GenerateKeyIndicatorsRequest.md)
- [GenerateMassOrderLabelsRequest](docs/Model/GenerateMassOrderLabelsRequest.md)
- [GeneratePricesReportRequest](docs/Model/GeneratePricesReportRequest.md)
- [GenerateReportDTO](docs/Model/GenerateReportDTO.md)
- [GenerateReportResponse](docs/Model/GenerateReportResponse.md)
- [GenerateSalesGeographyRequest](docs/Model/GenerateSalesGeographyRequest.md)
- [GenerateShelfsStatisticsRequest](docs/Model/GenerateShelfsStatisticsRequest.md)
- [GenerateShipmentListDocumentReportRequest](docs/Model/GenerateShipmentListDocumentReportRequest.md)
- [GenerateShowsBoostRequest](docs/Model/GenerateShowsBoostRequest.md)
- [GenerateShowsSalesReportRequest](docs/Model/GenerateShowsSalesReportRequest.md)
- [GenerateStocksOnWarehousesReportRequest](docs/Model/GenerateStocksOnWarehousesReportRequest.md)
- [GenerateUnitedMarketplaceServicesReportRequest](docs/Model/GenerateUnitedMarketplaceServicesReportRequest.md)
- [GenerateUnitedNettingReportRequest](docs/Model/GenerateUnitedNettingReportRequest.md)
- [GenerateUnitedOrdersRequest](docs/Model/GenerateUnitedOrdersRequest.md)
- [GenerateUnitedReturnsRequest](docs/Model/GenerateUnitedReturnsRequest.md)
- [GetBidsInfoRequest](docs/Model/GetBidsInfoRequest.md)
- [GetBidsInfoResponse](docs/Model/GetBidsInfoResponse.md)
- [GetBidsInfoResponseDTO](docs/Model/GetBidsInfoResponseDTO.md)
- [GetBidsRecommendationsRequest](docs/Model/GetBidsRecommendationsRequest.md)
- [GetBidsRecommendationsResponse](docs/Model/GetBidsRecommendationsResponse.md)
- [GetBidsRecommendationsResponseDTO](docs/Model/GetBidsRecommendationsResponseDTO.md)
- [GetBusinessBuyerInfoResponse](docs/Model/GetBusinessBuyerInfoResponse.md)
- [GetBusinessDocumentsInfoResponse](docs/Model/GetBusinessDocumentsInfoResponse.md)
- [GetBusinessSettingsInfoDTO](docs/Model/GetBusinessSettingsInfoDTO.md)
- [GetBusinessSettingsResponse](docs/Model/GetBusinessSettingsResponse.md)
- [GetCampaignOfferDTO](docs/Model/GetCampaignOfferDTO.md)
- [GetCampaignOffersRequest](docs/Model/GetCampaignOffersRequest.md)
- [GetCampaignOffersResponse](docs/Model/GetCampaignOffersResponse.md)
- [GetCampaignOffersResultDTO](docs/Model/GetCampaignOffersResultDTO.md)
- [GetCampaignResponse](docs/Model/GetCampaignResponse.md)
- [GetCampaignSettingsResponse](docs/Model/GetCampaignSettingsResponse.md)
- [GetCampaignsResponse](docs/Model/GetCampaignsResponse.md)
- [GetCategoriesMaxSaleQuantumDTO](docs/Model/GetCategoriesMaxSaleQuantumDTO.md)
- [GetCategoriesMaxSaleQuantumRequest](docs/Model/GetCategoriesMaxSaleQuantumRequest.md)
- [GetCategoriesMaxSaleQuantumResponse](docs/Model/GetCategoriesMaxSaleQuantumResponse.md)
- [GetCategoriesRequest](docs/Model/GetCategoriesRequest.md)
- [GetCategoriesResponse](docs/Model/GetCategoriesResponse.md)
- [GetCategoryContentParametersResponse](docs/Model/GetCategoryContentParametersResponse.md)
- [GetChatHistoryRequest](docs/Model/GetChatHistoryRequest.md)
- [GetChatHistoryResponse](docs/Model/GetChatHistoryResponse.md)
- [GetChatInfoDTO](docs/Model/GetChatInfoDTO.md)
- [GetChatMessageResponse](docs/Model/GetChatMessageResponse.md)
- [GetChatResponse](docs/Model/GetChatResponse.md)
- [GetChatsInfoDTO](docs/Model/GetChatsInfoDTO.md)
- [GetChatsRequest](docs/Model/GetChatsRequest.md)
- [GetChatsResponse](docs/Model/GetChatsResponse.md)
- [GetDefaultPricesRequest](docs/Model/GetDefaultPricesRequest.md)
- [GetDefaultPricesResponse](docs/Model/GetDefaultPricesResponse.md)
- [GetDeliveryServicesResponse](docs/Model/GetDeliveryServicesResponse.md)
- [GetFulfillmentWarehousesResponse](docs/Model/GetFulfillmentWarehousesResponse.md)
- [GetGoodsFeedbackCommentsRequest](docs/Model/GetGoodsFeedbackCommentsRequest.md)
- [GetGoodsFeedbackCommentsResponse](docs/Model/GetGoodsFeedbackCommentsResponse.md)
- [GetGoodsFeedbackRequest](docs/Model/GetGoodsFeedbackRequest.md)
- [GetGoodsFeedbackResponse](docs/Model/GetGoodsFeedbackResponse.md)
- [GetGoodsStatsRequest](docs/Model/GetGoodsStatsRequest.md)
- [GetGoodsStatsResponse](docs/Model/GetGoodsStatsResponse.md)
- [GetHiddenOffersResponse](docs/Model/GetHiddenOffersResponse.md)
- [GetHiddenOffersResultDTO](docs/Model/GetHiddenOffersResultDTO.md)
- [GetMappingDTO](docs/Model/GetMappingDTO.md)
- [GetModelsOffersResponse](docs/Model/GetModelsOffersResponse.md)
- [GetModelsRequest](docs/Model/GetModelsRequest.md)
- [GetModelsResponse](docs/Model/GetModelsResponse.md)
- [GetOfferCardsContentStatusRequest](docs/Model/GetOfferCardsContentStatusRequest.md)
- [GetOfferCardsContentStatusResponse](docs/Model/GetOfferCardsContentStatusResponse.md)
- [GetOfferDTO](docs/Model/GetOfferDTO.md)
- [GetOfferMappingDTO](docs/Model/GetOfferMappingDTO.md)
- [GetOfferMappingEntriesResponse](docs/Model/GetOfferMappingEntriesResponse.md)
- [GetOfferMappingsRequest](docs/Model/GetOfferMappingsRequest.md)
- [GetOfferMappingsResponse](docs/Model/GetOfferMappingsResponse.md)
- [GetOfferMappingsResultDTO](docs/Model/GetOfferMappingsResultDTO.md)
- [GetOfferRecommendationsRequest](docs/Model/GetOfferRecommendationsRequest.md)
- [GetOfferRecommendationsResponse](docs/Model/GetOfferRecommendationsResponse.md)
- [GetOrderBuyerInfoResponse](docs/Model/GetOrderBuyerInfoResponse.md)
- [GetOrderIdentifiersStatusDTO](docs/Model/GetOrderIdentifiersStatusDTO.md)
- [GetOrderIdentifiersStatusResponse](docs/Model/GetOrderIdentifiersStatusResponse.md)
- [GetOrderLabelsDataResponse](docs/Model/GetOrderLabelsDataResponse.md)
- [GetOrderResponse](docs/Model/GetOrderResponse.md)
- [GetOrdersResponse](docs/Model/GetOrdersResponse.md)
- [GetOrdersStatsRequest](docs/Model/GetOrdersStatsRequest.md)
- [GetOrdersStatsResponse](docs/Model/GetOrdersStatsResponse.md)
- [GetOutletLicensesResponse](docs/Model/GetOutletLicensesResponse.md)
- [GetOutletResponse](docs/Model/GetOutletResponse.md)
- [GetOutletsResponse](docs/Model/GetOutletsResponse.md)
- [GetPagedWarehousesRequest](docs/Model/GetPagedWarehousesRequest.md)
- [GetPagedWarehousesResponse](docs/Model/GetPagedWarehousesResponse.md)
- [GetPriceDTO](docs/Model/GetPriceDTO.md)
- [GetPriceWithDiscountDTO](docs/Model/GetPriceWithDiscountDTO.md)
- [GetPriceWithVatDTO](docs/Model/GetPriceWithVatDTO.md)
- [GetPricesByOfferIdsRequest](docs/Model/GetPricesByOfferIdsRequest.md)
- [GetPricesByOfferIdsResponse](docs/Model/GetPricesByOfferIdsResponse.md)
- [GetPricesResponse](docs/Model/GetPricesResponse.md)
- [GetPromoAssortmentInfoDTO](docs/Model/GetPromoAssortmentInfoDTO.md)
- [GetPromoBestsellerInfoDTO](docs/Model/GetPromoBestsellerInfoDTO.md)
- [GetPromoConstraintsDTO](docs/Model/GetPromoConstraintsDTO.md)
- [GetPromoDTO](docs/Model/GetPromoDTO.md)
- [GetPromoMechanicsInfoDTO](docs/Model/GetPromoMechanicsInfoDTO.md)
- [GetPromoOfferDTO](docs/Model/GetPromoOfferDTO.md)
- [GetPromoOffersRequest](docs/Model/GetPromoOffersRequest.md)
- [GetPromoOffersResponse](docs/Model/GetPromoOffersResponse.md)
- [GetPromoOffersResultDTO](docs/Model/GetPromoOffersResultDTO.md)
- [GetPromoPromocodeInfoDTO](docs/Model/GetPromoPromocodeInfoDTO.md)
- [GetPromosRequest](docs/Model/GetPromosRequest.md)
- [GetPromosResponse](docs/Model/GetPromosResponse.md)
- [GetPromosResultDTO](docs/Model/GetPromosResultDTO.md)
- [GetQualityRatingDetailsResponse](docs/Model/GetQualityRatingDetailsResponse.md)
- [GetQualityRatingRequest](docs/Model/GetQualityRatingRequest.md)
- [GetQualityRatingResponse](docs/Model/GetQualityRatingResponse.md)
- [GetQuarantineOffersRequest](docs/Model/GetQuarantineOffersRequest.md)
- [GetQuarantineOffersResponse](docs/Model/GetQuarantineOffersResponse.md)
- [GetQuarantineOffersResultDTO](docs/Model/GetQuarantineOffersResultDTO.md)
- [GetRegionWithChildrenResponse](docs/Model/GetRegionWithChildrenResponse.md)
- [GetRegionsCodesResponse](docs/Model/GetRegionsCodesResponse.md)
- [GetRegionsResponse](docs/Model/GetRegionsResponse.md)
- [GetReportInfoResponse](docs/Model/GetReportInfoResponse.md)
- [GetReturnResponse](docs/Model/GetReturnResponse.md)
- [GetReturnsResponse](docs/Model/GetReturnsResponse.md)
- [GetShipmentOrdersInfoResponse](docs/Model/GetShipmentOrdersInfoResponse.md)
- [GetShipmentResponse](docs/Model/GetShipmentResponse.md)
- [GetSuggestedOfferMappingEntriesRequest](docs/Model/GetSuggestedOfferMappingEntriesRequest.md)
- [GetSuggestedOfferMappingEntriesResponse](docs/Model/GetSuggestedOfferMappingEntriesResponse.md)
- [GetSuggestedOfferMappingsRequest](docs/Model/GetSuggestedOfferMappingsRequest.md)
- [GetSuggestedOfferMappingsResponse](docs/Model/GetSuggestedOfferMappingsResponse.md)
- [GetSuggestedOfferMappingsResultDTO](docs/Model/GetSuggestedOfferMappingsResultDTO.md)
- [GetSupplyRequestDocumentsDTO](docs/Model/GetSupplyRequestDocumentsDTO.md)
- [GetSupplyRequestDocumentsRequest](docs/Model/GetSupplyRequestDocumentsRequest.md)
- [GetSupplyRequestDocumentsResponse](docs/Model/GetSupplyRequestDocumentsResponse.md)
- [GetSupplyRequestItemsDTO](docs/Model/GetSupplyRequestItemsDTO.md)
- [GetSupplyRequestItemsRequest](docs/Model/GetSupplyRequestItemsRequest.md)
- [GetSupplyRequestItemsResponse](docs/Model/GetSupplyRequestItemsResponse.md)
- [GetSupplyRequestsDTO](docs/Model/GetSupplyRequestsDTO.md)
- [GetSupplyRequestsRequest](docs/Model/GetSupplyRequestsRequest.md)
- [GetSupplyRequestsResponse](docs/Model/GetSupplyRequestsResponse.md)
- [GetTokenInfoResponse](docs/Model/GetTokenInfoResponse.md)
- [GetWarehouseStocksDTO](docs/Model/GetWarehouseStocksDTO.md)
- [GetWarehouseStocksRequest](docs/Model/GetWarehouseStocksRequest.md)
- [GetWarehouseStocksResponse](docs/Model/GetWarehouseStocksResponse.md)
- [GetWarehousesResponse](docs/Model/GetWarehousesResponse.md)
- [GoodsFeedbackCommentAuthorDTO](docs/Model/GoodsFeedbackCommentAuthorDTO.md)
- [GoodsFeedbackCommentAuthorType](docs/Model/GoodsFeedbackCommentAuthorType.md)
- [GoodsFeedbackCommentDTO](docs/Model/GoodsFeedbackCommentDTO.md)
- [GoodsFeedbackCommentListDTO](docs/Model/GoodsFeedbackCommentListDTO.md)
- [GoodsFeedbackCommentStatusType](docs/Model/GoodsFeedbackCommentStatusType.md)
- [GoodsFeedbackDTO](docs/Model/GoodsFeedbackDTO.md)
- [GoodsFeedbackDescriptionDTO](docs/Model/GoodsFeedbackDescriptionDTO.md)
- [GoodsFeedbackIdentifiersDTO](docs/Model/GoodsFeedbackIdentifiersDTO.md)
- [GoodsFeedbackListDTO](docs/Model/GoodsFeedbackListDTO.md)
- [GoodsFeedbackMediaDTO](docs/Model/GoodsFeedbackMediaDTO.md)
- [GoodsFeedbackStatisticsDTO](docs/Model/GoodsFeedbackStatisticsDTO.md)
- [GoodsStatsDTO](docs/Model/GoodsStatsDTO.md)
- [GoodsStatsGoodsDTO](docs/Model/GoodsStatsGoodsDTO.md)
- [GoodsStatsWarehouseDTO](docs/Model/GoodsStatsWarehouseDTO.md)
- [GoodsStatsWeightDimensionsDTO](docs/Model/GoodsStatsWeightDimensionsDTO.md)
- [GpsDTO](docs/Model/GpsDTO.md)
- [HiddenOfferDTO](docs/Model/HiddenOfferDTO.md)
- [KeyIndicatorsReportDetalizationLevelType](docs/Model/KeyIndicatorsReportDetalizationLevelType.md)
- [LabelsSortingType](docs/Model/LabelsSortingType.md)
- [LanguageType](docs/Model/LanguageType.md)
- [LicenseCheckStatusType](docs/Model/LicenseCheckStatusType.md)
- [LicenseType](docs/Model/LicenseType.md)
- [LogisticPickupPointDTO](docs/Model/LogisticPickupPointDTO.md)
- [LogisticPointType](docs/Model/LogisticPointType.md)
- [MappingsOfferDTO](docs/Model/MappingsOfferDTO.md)
- [MappingsOfferInfoDTO](docs/Model/MappingsOfferInfoDTO.md)
- [MaxSaleQuantumDTO](docs/Model/MaxSaleQuantumDTO.md)
- [MechanicsType](docs/Model/MechanicsType.md)
- [MediaFileUploadStateType](docs/Model/MediaFileUploadStateType.md)
- [ModelDTO](docs/Model/ModelDTO.md)
- [ModelOfferDTO](docs/Model/ModelOfferDTO.md)
- [ModelPriceDTO](docs/Model/ModelPriceDTO.md)
- [ModelsDTO](docs/Model/ModelsDTO.md)
- [MonthOfYearDTO](docs/Model/MonthOfYearDTO.md)
- [OfferAvailabilityStatusType](docs/Model/OfferAvailabilityStatusType.md)
- [OfferCampaignStatusDTO](docs/Model/OfferCampaignStatusDTO.md)
- [OfferCampaignStatusType](docs/Model/OfferCampaignStatusType.md)
- [OfferCardContentStatusType](docs/Model/OfferCardContentStatusType.md)
- [OfferCardDTO](docs/Model/OfferCardDTO.md)
- [OfferCardRecommendationDTO](docs/Model/OfferCardRecommendationDTO.md)
- [OfferCardRecommendationType](docs/Model/OfferCardRecommendationType.md)
- [OfferCardStatusType](docs/Model/OfferCardStatusType.md)
- [OfferCardsContentStatusDTO](docs/Model/OfferCardsContentStatusDTO.md)
- [OfferConditionDTO](docs/Model/OfferConditionDTO.md)
- [OfferConditionQualityType](docs/Model/OfferConditionQualityType.md)
- [OfferConditionType](docs/Model/OfferConditionType.md)
- [OfferContentDTO](docs/Model/OfferContentDTO.md)
- [OfferContentErrorDTO](docs/Model/OfferContentErrorDTO.md)
- [OfferContentErrorType](docs/Model/OfferContentErrorType.md)
- [OfferDefaultPriceDTO](docs/Model/OfferDefaultPriceDTO.md)
- [OfferDefaultPriceListResponseDTO](docs/Model/OfferDefaultPriceListResponseDTO.md)
- [OfferDefaultPriceResponseDTO](docs/Model/OfferDefaultPriceResponseDTO.md)
- [OfferErrorDTO](docs/Model/OfferErrorDTO.md)
- [OfferForRecommendationDTO](docs/Model/OfferForRecommendationDTO.md)
- [OfferManualDTO](docs/Model/OfferManualDTO.md)
- [OfferMappingDTO](docs/Model/OfferMappingDTO.md)
- [OfferMappingEntriesDTO](docs/Model/OfferMappingEntriesDTO.md)
- [OfferMappingEntryDTO](docs/Model/OfferMappingEntryDTO.md)
- [OfferMappingErrorDTO](docs/Model/OfferMappingErrorDTO.md)
- [OfferMappingErrorType](docs/Model/OfferMappingErrorType.md)
- [OfferMappingInfoDTO](docs/Model/OfferMappingInfoDTO.md)
- [OfferMappingKindType](docs/Model/OfferMappingKindType.md)
- [OfferMappingSuggestionsListDTO](docs/Model/OfferMappingSuggestionsListDTO.md)
- [OfferMediaFileDTO](docs/Model/OfferMediaFileDTO.md)
- [OfferMediaFilesDTO](docs/Model/OfferMediaFilesDTO.md)
- [OfferParamDTO](docs/Model/OfferParamDTO.md)
- [OfferPriceByOfferIdsListResponseDTO](docs/Model/OfferPriceByOfferIdsListResponseDTO.md)
- [OfferPriceByOfferIdsResponseDTO](docs/Model/OfferPriceByOfferIdsResponseDTO.md)
- [OfferPriceDTO](docs/Model/OfferPriceDTO.md)
- [OfferPriceListResponseDTO](docs/Model/OfferPriceListResponseDTO.md)
- [OfferPriceResponseDTO](docs/Model/OfferPriceResponseDTO.md)
- [OfferProcessingNoteDTO](docs/Model/OfferProcessingNoteDTO.md)
- [OfferProcessingNoteType](docs/Model/OfferProcessingNoteType.md)
- [OfferProcessingStateDTO](docs/Model/OfferProcessingStateDTO.md)
- [OfferProcessingStatusType](docs/Model/OfferProcessingStatusType.md)
- [OfferRecommendationDTO](docs/Model/OfferRecommendationDTO.md)
- [OfferRecommendationInfoDTO](docs/Model/OfferRecommendationInfoDTO.md)
- [OfferRecommendationsResultDTO](docs/Model/OfferRecommendationsResultDTO.md)
- [OfferSellingProgramDTO](docs/Model/OfferSellingProgramDTO.md)
- [OfferSellingProgramStatusType](docs/Model/OfferSellingProgramStatusType.md)
- [OfferType](docs/Model/OfferType.md)
- [OfferWeightDimensionsDTO](docs/Model/OfferWeightDimensionsDTO.md)
- [OptionValuesLimitedDTO](docs/Model/OptionValuesLimitedDTO.md)
- [OrderBoxLayoutDTO](docs/Model/OrderBoxLayoutDTO.md)
- [OrderBoxLayoutItemDTO](docs/Model/OrderBoxLayoutItemDTO.md)
- [OrderBoxLayoutPartialCountDTO](docs/Model/OrderBoxLayoutPartialCountDTO.md)
- [OrderBoxesLayoutDTO](docs/Model/OrderBoxesLayoutDTO.md)
- [OrderBusinessBuyerDTO](docs/Model/OrderBusinessBuyerDTO.md)
- [OrderBusinessDocumentsDTO](docs/Model/OrderBusinessDocumentsDTO.md)
- [OrderBuyerBasicInfoDTO](docs/Model/OrderBuyerBasicInfoDTO.md)
- [OrderBuyerDTO](docs/Model/OrderBuyerDTO.md)
- [OrderBuyerInfoDTO](docs/Model/OrderBuyerInfoDTO.md)
- [OrderBuyerType](docs/Model/OrderBuyerType.md)
- [OrderCancellationReasonType](docs/Model/OrderCancellationReasonType.md)
- [OrderCourierDTO](docs/Model/OrderCourierDTO.md)
- [OrderDTO](docs/Model/OrderDTO.md)
- [OrderDeliveryAddressDTO](docs/Model/OrderDeliveryAddressDTO.md)
- [OrderDeliveryDTO](docs/Model/OrderDeliveryDTO.md)
- [OrderDeliveryDateDTO](docs/Model/OrderDeliveryDateDTO.md)
- [OrderDeliveryDateReasonType](docs/Model/OrderDeliveryDateReasonType.md)
- [OrderDeliveryDatesDTO](docs/Model/OrderDeliveryDatesDTO.md)
- [OrderDeliveryDispatchType](docs/Model/OrderDeliveryDispatchType.md)
- [OrderDeliveryEacType](docs/Model/OrderDeliveryEacType.md)
- [OrderDeliveryPartnerType](docs/Model/OrderDeliveryPartnerType.md)
- [OrderDeliveryType](docs/Model/OrderDeliveryType.md)
- [OrderDigitalItemDTO](docs/Model/OrderDigitalItemDTO.md)
- [OrderDocumentStatusType](docs/Model/OrderDocumentStatusType.md)
- [OrderItemDTO](docs/Model/OrderItemDTO.md)
- [OrderItemDetailDTO](docs/Model/OrderItemDetailDTO.md)
- [OrderItemInstanceDTO](docs/Model/OrderItemInstanceDTO.md)
- [OrderItemInstanceModificationDTO](docs/Model/OrderItemInstanceModificationDTO.md)
- [OrderItemInstanceType](docs/Model/OrderItemInstanceType.md)
- [OrderItemModificationDTO](docs/Model/OrderItemModificationDTO.md)
- [OrderItemPromoDTO](docs/Model/OrderItemPromoDTO.md)
- [OrderItemStatusType](docs/Model/OrderItemStatusType.md)
- [OrderItemSubsidyDTO](docs/Model/OrderItemSubsidyDTO.md)
- [OrderItemSubsidyType](docs/Model/OrderItemSubsidyType.md)
- [OrderItemTagType](docs/Model/OrderItemTagType.md)
- [OrderItemValidationStatusDTO](docs/Model/OrderItemValidationStatusDTO.md)
- [OrderItemsModificationRequestReasonType](docs/Model/OrderItemsModificationRequestReasonType.md)
- [OrderItemsModificationResultDTO](docs/Model/OrderItemsModificationResultDTO.md)
- [OrderLabelDTO](docs/Model/OrderLabelDTO.md)
- [OrderLiftType](docs/Model/OrderLiftType.md)
- [OrderParcelBoxDTO](docs/Model/OrderParcelBoxDTO.md)
- [OrderPaymentMethodType](docs/Model/OrderPaymentMethodType.md)
- [OrderPaymentType](docs/Model/OrderPaymentType.md)
- [OrderPromoType](docs/Model/OrderPromoType.md)
- [OrderShipmentDTO](docs/Model/OrderShipmentDTO.md)
- [OrderStateDTO](docs/Model/OrderStateDTO.md)
- [OrderStatsStatusType](docs/Model/OrderStatsStatusType.md)
- [OrderStatusChangeDTO](docs/Model/OrderStatusChangeDTO.md)
- [OrderStatusChangeDeliveryDTO](docs/Model/OrderStatusChangeDeliveryDTO.md)
- [OrderStatusChangeDeliveryDatesDTO](docs/Model/OrderStatusChangeDeliveryDatesDTO.md)
- [OrderStatusType](docs/Model/OrderStatusType.md)
- [OrderSubsidyDTO](docs/Model/OrderSubsidyDTO.md)
- [OrderSubsidyType](docs/Model/OrderSubsidyType.md)
- [OrderSubstatusType](docs/Model/OrderSubstatusType.md)
- [OrderTaxSystemType](docs/Model/OrderTaxSystemType.md)
- [OrderTrackDTO](docs/Model/OrderTrackDTO.md)
- [OrderUpdateStatusType](docs/Model/OrderUpdateStatusType.md)
- [OrderVatType](docs/Model/OrderVatType.md)
- [OrdersShipmentInfoDTO](docs/Model/OrdersShipmentInfoDTO.md)
- [OrdersStatsCommissionDTO](docs/Model/OrdersStatsCommissionDTO.md)
- [OrdersStatsCommissionType](docs/Model/OrdersStatsCommissionType.md)
- [OrdersStatsDTO](docs/Model/OrdersStatsDTO.md)
- [OrdersStatsDeliveryRegionDTO](docs/Model/OrdersStatsDeliveryRegionDTO.md)
- [OrdersStatsDetailsDTO](docs/Model/OrdersStatsDetailsDTO.md)
- [OrdersStatsItemDTO](docs/Model/OrdersStatsItemDTO.md)
- [OrdersStatsItemStatusType](docs/Model/OrdersStatsItemStatusType.md)
- [OrdersStatsOrderDTO](docs/Model/OrdersStatsOrderDTO.md)
- [OrdersStatsOrderPaymentType](docs/Model/OrdersStatsOrderPaymentType.md)
- [OrdersStatsPaymentDTO](docs/Model/OrdersStatsPaymentDTO.md)
- [OrdersStatsPaymentOrderDTO](docs/Model/OrdersStatsPaymentOrderDTO.md)
- [OrdersStatsPaymentSourceType](docs/Model/OrdersStatsPaymentSourceType.md)
- [OrdersStatsPaymentType](docs/Model/OrdersStatsPaymentType.md)
- [OrdersStatsPriceDTO](docs/Model/OrdersStatsPriceDTO.md)
- [OrdersStatsPriceType](docs/Model/OrdersStatsPriceType.md)
- [OrdersStatsStockType](docs/Model/OrdersStatsStockType.md)
- [OrdersStatsSubsidyDTO](docs/Model/OrdersStatsSubsidyDTO.md)
- [OrdersStatsSubsidyOperationType](docs/Model/OrdersStatsSubsidyOperationType.md)
- [OrdersStatsSubsidyType](docs/Model/OrdersStatsSubsidyType.md)
- [OrdersStatsWarehouseDTO](docs/Model/OrdersStatsWarehouseDTO.md)
- [OutletAddressDTO](docs/Model/OutletAddressDTO.md)
- [OutletDTO](docs/Model/OutletDTO.md)
- [OutletDeliveryRuleDTO](docs/Model/OutletDeliveryRuleDTO.md)
- [OutletLicenseDTO](docs/Model/OutletLicenseDTO.md)
- [OutletLicensesResponseDTO](docs/Model/OutletLicensesResponseDTO.md)
- [OutletResponseDTO](docs/Model/OutletResponseDTO.md)
- [OutletStatusType](docs/Model/OutletStatusType.md)
- [OutletType](docs/Model/OutletType.md)
- [OutletVisibilityType](docs/Model/OutletVisibilityType.md)
- [OutletWorkingScheduleDTO](docs/Model/OutletWorkingScheduleDTO.md)
- [OutletWorkingScheduleItemDTO](docs/Model/OutletWorkingScheduleItemDTO.md)
- [PageFormatType](docs/Model/PageFormatType.md)
- [PagedReturnsDTO](docs/Model/PagedReturnsDTO.md)
- [PagedWarehousesDTO](docs/Model/PagedWarehousesDTO.md)
- [PalletsCountDTO](docs/Model/PalletsCountDTO.md)
- [ParameterType](docs/Model/ParameterType.md)
- [ParameterValueConstraintsDTO](docs/Model/ParameterValueConstraintsDTO.md)
- [ParameterValueDTO](docs/Model/ParameterValueDTO.md)
- [ParameterValueOptionDTO](docs/Model/ParameterValueOptionDTO.md)
- [ParcelBoxDTO](docs/Model/ParcelBoxDTO.md)
- [ParcelBoxLabelDTO](docs/Model/ParcelBoxLabelDTO.md)
- [ParcelBoxRequestDTO](docs/Model/ParcelBoxRequestDTO.md)
- [ParcelRequestDTO](docs/Model/ParcelRequestDTO.md)
- [PartnerShipmentWarehouseDTO](docs/Model/PartnerShipmentWarehouseDTO.md)
- [PaymentFrequencyType](docs/Model/PaymentFrequencyType.md)
- [PickupAddressDTO](docs/Model/PickupAddressDTO.md)
- [PlacementType](docs/Model/PlacementType.md)
- [PriceCompetitivenessThresholdsDTO](docs/Model/PriceCompetitivenessThresholdsDTO.md)
- [PriceCompetitivenessType](docs/Model/PriceCompetitivenessType.md)
- [PriceDTO](docs/Model/PriceDTO.md)
- [PriceQuarantineVerdictDTO](docs/Model/PriceQuarantineVerdictDTO.md)
- [PriceQuarantineVerdictParamNameType](docs/Model/PriceQuarantineVerdictParamNameType.md)
- [PriceQuarantineVerdictParameterDTO](docs/Model/PriceQuarantineVerdictParameterDTO.md)
- [PriceQuarantineVerdictType](docs/Model/PriceQuarantineVerdictType.md)
- [PriceRecommendationItemDTO](docs/Model/PriceRecommendationItemDTO.md)
- [PriceSuggestDTO](docs/Model/PriceSuggestDTO.md)
- [PriceSuggestOfferDTO](docs/Model/PriceSuggestOfferDTO.md)
- [PriceSuggestType](docs/Model/PriceSuggestType.md)
- [PriceWithDiscountDTO](docs/Model/PriceWithDiscountDTO.md)
- [PromoOfferAutoParticipatingDetailsDTO](docs/Model/PromoOfferAutoParticipatingDetailsDTO.md)
- [PromoOfferDiscountParamsDTO](docs/Model/PromoOfferDiscountParamsDTO.md)
- [PromoOfferParamsDTO](docs/Model/PromoOfferParamsDTO.md)
- [PromoOfferParticipationStatusFilterType](docs/Model/PromoOfferParticipationStatusFilterType.md)
- [PromoOfferParticipationStatusMultiFilterType](docs/Model/PromoOfferParticipationStatusMultiFilterType.md)
- [PromoOfferParticipationStatusType](docs/Model/PromoOfferParticipationStatusType.md)
- [PromoOfferUpdateWarningCodeType](docs/Model/PromoOfferUpdateWarningCodeType.md)
- [PromoOfferUpdateWarningDTO](docs/Model/PromoOfferUpdateWarningDTO.md)
- [PromoParticipationType](docs/Model/PromoParticipationType.md)
- [PromoPeriodDTO](docs/Model/PromoPeriodDTO.md)
- [ProvideOrderDigitalCodesRequest](docs/Model/ProvideOrderDigitalCodesRequest.md)
- [ProvideOrderItemIdentifiersRequest](docs/Model/ProvideOrderItemIdentifiersRequest.md)
- [ProvideOrderItemIdentifiersResponse](docs/Model/ProvideOrderItemIdentifiersResponse.md)
- [PutSkuBidsRequest](docs/Model/PutSkuBidsRequest.md)
- [QualityRatingAffectedOrderDTO](docs/Model/QualityRatingAffectedOrderDTO.md)
- [QualityRatingComponentDTO](docs/Model/QualityRatingComponentDTO.md)
- [QualityRatingComponentType](docs/Model/QualityRatingComponentType.md)
- [QualityRatingDTO](docs/Model/QualityRatingDTO.md)
- [QualityRatingDetailsDTO](docs/Model/QualityRatingDetailsDTO.md)
- [QuantumDTO](docs/Model/QuantumDTO.md)
- [QuarantineOfferDTO](docs/Model/QuarantineOfferDTO.md)
- [RecipientType](docs/Model/RecipientType.md)
- [RefundStatusType](docs/Model/RefundStatusType.md)
- [RegionDTO](docs/Model/RegionDTO.md)
- [RegionType](docs/Model/RegionType.md)
- [RegionalModelInfoDTO](docs/Model/RegionalModelInfoDTO.md)
- [RejectedPromoOfferDeleteDTO](docs/Model/RejectedPromoOfferDeleteDTO.md)
- [RejectedPromoOfferDeleteReasonType](docs/Model/RejectedPromoOfferDeleteReasonType.md)
- [RejectedPromoOfferUpdateDTO](docs/Model/RejectedPromoOfferUpdateDTO.md)
- [RejectedPromoOfferUpdateReasonType](docs/Model/RejectedPromoOfferUpdateReasonType.md)
- [ReportFormatType](docs/Model/ReportFormatType.md)
- [ReportInfoDTO](docs/Model/ReportInfoDTO.md)
- [ReportLanguageType](docs/Model/ReportLanguageType.md)
- [ReportStatusType](docs/Model/ReportStatusType.md)
- [ReportSubStatusType](docs/Model/ReportSubStatusType.md)
- [ReturnDTO](docs/Model/ReturnDTO.md)
- [ReturnDecisionDTO](docs/Model/ReturnDecisionDTO.md)
- [ReturnDecisionReasonType](docs/Model/ReturnDecisionReasonType.md)
- [ReturnDecisionSubreasonType](docs/Model/ReturnDecisionSubreasonType.md)
- [ReturnDecisionType](docs/Model/ReturnDecisionType.md)
- [ReturnInstanceDTO](docs/Model/ReturnInstanceDTO.md)
- [ReturnInstanceStatusType](docs/Model/ReturnInstanceStatusType.md)
- [ReturnInstanceStockType](docs/Model/ReturnInstanceStockType.md)
- [ReturnItemDTO](docs/Model/ReturnItemDTO.md)
- [ReturnItemDecisionDTO](docs/Model/ReturnItemDecisionDTO.md)
- [ReturnRequestDecisionReasonType](docs/Model/ReturnRequestDecisionReasonType.md)
- [ReturnRequestDecisionType](docs/Model/ReturnRequestDecisionType.md)
- [ReturnShipmentStatusType](docs/Model/ReturnShipmentStatusType.md)
- [ReturnType](docs/Model/ReturnType.md)
- [ScrollingPagerDTO](docs/Model/ScrollingPagerDTO.md)
- [SearchModelsResponse](docs/Model/SearchModelsResponse.md)
- [SearchShipmentsRequest](docs/Model/SearchShipmentsRequest.md)
- [SearchShipmentsResponse](docs/Model/SearchShipmentsResponse.md)
- [SearchShipmentsResponseDTO](docs/Model/SearchShipmentsResponseDTO.md)
- [SellingProgramType](docs/Model/SellingProgramType.md)
- [SendMessageToChatRequest](docs/Model/SendMessageToChatRequest.md)
- [SetOrderBoxLayoutRequest](docs/Model/SetOrderBoxLayoutRequest.md)
- [SetOrderBoxLayoutResponse](docs/Model/SetOrderBoxLayoutResponse.md)
- [SetOrderDeliveryDateRequest](docs/Model/SetOrderDeliveryDateRequest.md)
- [SetOrderDeliveryTrackCodeRequest](docs/Model/SetOrderDeliveryTrackCodeRequest.md)
- [SetOrderShipmentBoxesRequest](docs/Model/SetOrderShipmentBoxesRequest.md)
- [SetOrderShipmentBoxesResponse](docs/Model/SetOrderShipmentBoxesResponse.md)
- [SetReturnDecisionRequest](docs/Model/SetReturnDecisionRequest.md)
- [SetShipmentPalletsCountRequest](docs/Model/SetShipmentPalletsCountRequest.md)
- [ShipmentActionType](docs/Model/ShipmentActionType.md)
- [ShipmentBoxesDTO](docs/Model/ShipmentBoxesDTO.md)
- [ShipmentDTO](docs/Model/ShipmentDTO.md)
- [ShipmentInfoDTO](docs/Model/ShipmentInfoDTO.md)
- [ShipmentPalletLabelPageFormatType](docs/Model/ShipmentPalletLabelPageFormatType.md)
- [ShipmentStatusChangeDTO](docs/Model/ShipmentStatusChangeDTO.md)
- [ShipmentStatusType](docs/Model/ShipmentStatusType.md)
- [ShipmentType](docs/Model/ShipmentType.md)
- [ShowcaseType](docs/Model/ShowcaseType.md)
- [ShowcaseUrlDTO](docs/Model/ShowcaseUrlDTO.md)
- [ShowsSalesGroupingType](docs/Model/ShowsSalesGroupingType.md)
- [SignatureDTO](docs/Model/SignatureDTO.md)
- [SkipGoodsFeedbackReactionRequest](docs/Model/SkipGoodsFeedbackReactionRequest.md)
- [SkuBidItemDTO](docs/Model/SkuBidItemDTO.md)
- [SkuBidRecommendationItemDTO](docs/Model/SkuBidRecommendationItemDTO.md)
- [SortOrderType](docs/Model/SortOrderType.md)
- [StatisticsAttributionType](docs/Model/StatisticsAttributionType.md)
- [SubmitReturnDecisionRequest](docs/Model/SubmitReturnDecisionRequest.md)
- [SuggestOfferPriceDTO](docs/Model/SuggestOfferPriceDTO.md)
- [SuggestPricesRequest](docs/Model/SuggestPricesRequest.md)
- [SuggestPricesResponse](docs/Model/SuggestPricesResponse.md)
- [SuggestPricesResultDTO](docs/Model/SuggestPricesResultDTO.md)
- [SuggestedOfferDTO](docs/Model/SuggestedOfferDTO.md)
- [SuggestedOfferMappingDTO](docs/Model/SuggestedOfferMappingDTO.md)
- [SupplyRequestCountersDTO](docs/Model/SupplyRequestCountersDTO.md)
- [SupplyRequestDTO](docs/Model/SupplyRequestDTO.md)
- [SupplyRequestDocumentDTO](docs/Model/SupplyRequestDocumentDTO.md)
- [SupplyRequestDocumentType](docs/Model/SupplyRequestDocumentType.md)
- [SupplyRequestIdDTO](docs/Model/SupplyRequestIdDTO.md)
- [SupplyRequestItemCountersDTO](docs/Model/SupplyRequestItemCountersDTO.md)
- [SupplyRequestItemDTO](docs/Model/SupplyRequestItemDTO.md)
- [SupplyRequestLocationAddressDTO](docs/Model/SupplyRequestLocationAddressDTO.md)
- [SupplyRequestLocationDTO](docs/Model/SupplyRequestLocationDTO.md)
- [SupplyRequestLocationType](docs/Model/SupplyRequestLocationType.md)
- [SupplyRequestReferenceDTO](docs/Model/SupplyRequestReferenceDTO.md)
- [SupplyRequestReferenceType](docs/Model/SupplyRequestReferenceType.md)
- [SupplyRequestSortAttributeType](docs/Model/SupplyRequestSortAttributeType.md)
- [SupplyRequestSortingDTO](docs/Model/SupplyRequestSortingDTO.md)
- [SupplyRequestStatusType](docs/Model/SupplyRequestStatusType.md)
- [SupplyRequestSubType](docs/Model/SupplyRequestSubType.md)
- [SupplyRequestType](docs/Model/SupplyRequestType.md)
- [TariffDTO](docs/Model/TariffDTO.md)
- [TariffParameterDTO](docs/Model/TariffParameterDTO.md)
- [TariffType](docs/Model/TariffType.md)
- [TimePeriodDTO](docs/Model/TimePeriodDTO.md)
- [TimeUnitType](docs/Model/TimeUnitType.md)
- [TokenDTO](docs/Model/TokenDTO.md)
- [TrackDTO](docs/Model/TrackDTO.md)
- [TransferOrdersFromShipmentRequest](docs/Model/TransferOrdersFromShipmentRequest.md)
- [TurnoverDTO](docs/Model/TurnoverDTO.md)
- [TurnoverType](docs/Model/TurnoverType.md)
- [UinDTO](docs/Model/UinDTO.md)
- [UinStatusType](docs/Model/UinStatusType.md)
- [UnitDTO](docs/Model/UnitDTO.md)
- [UpdateBusinessOfferPriceDTO](docs/Model/UpdateBusinessOfferPriceDTO.md)
- [UpdateBusinessPricesDTO](docs/Model/UpdateBusinessPricesDTO.md)
- [UpdateBusinessPricesRequest](docs/Model/UpdateBusinessPricesRequest.md)
- [UpdateCampaignOfferDTO](docs/Model/UpdateCampaignOfferDTO.md)
- [UpdateCampaignOffersRequest](docs/Model/UpdateCampaignOffersRequest.md)
- [UpdateExternalOrderIdRequest](docs/Model/UpdateExternalOrderIdRequest.md)
- [UpdateGoodsFeedbackCommentDTO](docs/Model/UpdateGoodsFeedbackCommentDTO.md)
- [UpdateGoodsFeedbackCommentRequest](docs/Model/UpdateGoodsFeedbackCommentRequest.md)
- [UpdateGoodsFeedbackCommentResponse](docs/Model/UpdateGoodsFeedbackCommentResponse.md)
- [UpdateMappingDTO](docs/Model/UpdateMappingDTO.md)
- [UpdateMappingsOfferDTO](docs/Model/UpdateMappingsOfferDTO.md)
- [UpdateOfferContentRequest](docs/Model/UpdateOfferContentRequest.md)
- [UpdateOfferContentResponse](docs/Model/UpdateOfferContentResponse.md)
- [UpdateOfferContentResultDTO](docs/Model/UpdateOfferContentResultDTO.md)
- [UpdateOfferDTO](docs/Model/UpdateOfferDTO.md)
- [UpdateOfferMappingDTO](docs/Model/UpdateOfferMappingDTO.md)
- [UpdateOfferMappingEntryDTO](docs/Model/UpdateOfferMappingEntryDTO.md)
- [UpdateOfferMappingEntryRequest](docs/Model/UpdateOfferMappingEntryRequest.md)
- [UpdateOfferMappingResultDTO](docs/Model/UpdateOfferMappingResultDTO.md)
- [UpdateOfferMappingsRequest](docs/Model/UpdateOfferMappingsRequest.md)
- [UpdateOfferMappingsResponse](docs/Model/UpdateOfferMappingsResponse.md)
- [UpdateOrderItemRequest](docs/Model/UpdateOrderItemRequest.md)
- [UpdateOrderStatusDTO](docs/Model/UpdateOrderStatusDTO.md)
- [UpdateOrderStatusRequest](docs/Model/UpdateOrderStatusRequest.md)
- [UpdateOrderStatusResponse](docs/Model/UpdateOrderStatusResponse.md)
- [UpdateOrderStatusesDTO](docs/Model/UpdateOrderStatusesDTO.md)
- [UpdateOrderStatusesRequest](docs/Model/UpdateOrderStatusesRequest.md)
- [UpdateOrderStatusesResponse](docs/Model/UpdateOrderStatusesResponse.md)
- [UpdateOrderStorageLimitRequest](docs/Model/UpdateOrderStorageLimitRequest.md)
- [UpdateOutletLicenseRequest](docs/Model/UpdateOutletLicenseRequest.md)
- [UpdatePricesRequest](docs/Model/UpdatePricesRequest.md)
- [UpdatePromoOfferDTO](docs/Model/UpdatePromoOfferDTO.md)
- [UpdatePromoOfferDiscountParamsDTO](docs/Model/UpdatePromoOfferDiscountParamsDTO.md)
- [UpdatePromoOfferParamsDTO](docs/Model/UpdatePromoOfferParamsDTO.md)
- [UpdatePromoOffersRequest](docs/Model/UpdatePromoOffersRequest.md)
- [UpdatePromoOffersResponse](docs/Model/UpdatePromoOffersResponse.md)
- [UpdatePromoOffersResultDTO](docs/Model/UpdatePromoOffersResultDTO.md)
- [UpdateStockDTO](docs/Model/UpdateStockDTO.md)
- [UpdateStockItemDTO](docs/Model/UpdateStockItemDTO.md)
- [UpdateStocksRequest](docs/Model/UpdateStocksRequest.md)
- [UpdateTimeDTO](docs/Model/UpdateTimeDTO.md)
- [UpdateWarehouseStatusRequest](docs/Model/UpdateWarehouseStatusRequest.md)
- [UpdateWarehouseStatusResponse](docs/Model/UpdateWarehouseStatusResponse.md)
- [ValueRestrictionDTO](docs/Model/ValueRestrictionDTO.md)
- [VerifyOrderEacRequest](docs/Model/VerifyOrderEacRequest.md)
- [VerifyOrderEacResponse](docs/Model/VerifyOrderEacResponse.md)
- [WarehouseAddressDTO](docs/Model/WarehouseAddressDTO.md)
- [WarehouseComponentType](docs/Model/WarehouseComponentType.md)
- [WarehouseDTO](docs/Model/WarehouseDTO.md)
- [WarehouseDetailsDTO](docs/Model/WarehouseDetailsDTO.md)
- [WarehouseGroupDTO](docs/Model/WarehouseGroupDTO.md)
- [WarehouseGroupInfoDTO](docs/Model/WarehouseGroupInfoDTO.md)
- [WarehouseOfferDTO](docs/Model/WarehouseOfferDTO.md)
- [WarehouseOffersDTO](docs/Model/WarehouseOffersDTO.md)
- [WarehouseStatusDTO](docs/Model/WarehouseStatusDTO.md)
- [WarehouseStatusType](docs/Model/WarehouseStatusType.md)
- [WarehouseStockDTO](docs/Model/WarehouseStockDTO.md)
- [WarehouseStockType](docs/Model/WarehouseStockType.md)
- [WarehousesDTO](docs/Model/WarehousesDTO.md)
- [WarningPromoOfferUpdateDTO](docs/Model/WarningPromoOfferUpdateDTO.md)

## Authorization

Authentication schemes defined for the API:
### ApiKey

- **Type**: API key
- **API key parameter name**: Api-Key
- **Location**: HTTP header


### OAuth

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `https://oauth.yandex.ru/authorize`
- **Scopes**: 
    - **market:partner-api**: :no-translate[API] Яндекс.Маркета / Поиска по товарам для партнеров

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `LATEST`
    - Generator version: `7.14.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
