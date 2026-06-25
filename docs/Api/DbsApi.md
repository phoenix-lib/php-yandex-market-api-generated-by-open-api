# OpenAPI\Client\DbsApi



All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptOrderCancellation()**](DbsApi.md#acceptOrderCancellation) | **PUT** /v2/campaigns/{campaignId}/orders/{orderId}/cancellation/accept | Отмена заказа покупателем |
| [**addHiddenOffers()**](DbsApi.md#addHiddenOffers) | **POST** /v2/campaigns/{campaignId}/hidden-offers | Скрытие товаров и настройки скрытия |
| [**addOffersToArchive()**](DbsApi.md#addOffersToArchive) | **POST** /v2/businesses/{businessId}/offer-mappings/archive | Добавление товаров в архив |
| [**calculateTariffs()**](DbsApi.md#calculateTariffs) | **POST** /v2/tariffs/calculate | Калькулятор стоимости услуг |
| [**confirmBusinessPrices()**](DbsApi.md#confirmBusinessPrices) | **POST** /v2/businesses/{businessId}/price-quarantine/confirm | Удаление товара из карантина по цене в кабинете |
| [**confirmCampaignPrices()**](DbsApi.md#confirmCampaignPrices) | **POST** /v2/campaigns/{campaignId}/price-quarantine/confirm | Удаление товара из карантина по цене в магазине |
| [**createChat()**](DbsApi.md#createChat) | **POST** /v2/businesses/{businessId}/chats/new | Создание нового чата с покупателем |
| [**createOutlet()**](DbsApi.md#createOutlet) | **POST** /v2/campaigns/{campaignId}/outlets | Создание точки продаж |
| [**deleteCampaignOffers()**](DbsApi.md#deleteCampaignOffers) | **POST** /v2/campaigns/{campaignId}/offers/delete | Удаление товаров из ассортимента магазина |
| [**deleteGoodsFeedbackComment()**](DbsApi.md#deleteGoodsFeedbackComment) | **POST** /v2/businesses/{businessId}/goods-feedback/comments/delete | Удаление комментария к отзыву |
| [**deleteHiddenOffers()**](DbsApi.md#deleteHiddenOffers) | **POST** /v2/campaigns/{campaignId}/hidden-offers/delete | Возобновление показа товаров |
| [**deleteOffers()**](DbsApi.md#deleteOffers) | **POST** /v2/businesses/{businessId}/offer-mappings/delete | Удаление товаров из каталога |
| [**deleteOffersFromArchive()**](DbsApi.md#deleteOffersFromArchive) | **POST** /v2/businesses/{businessId}/offer-mappings/unarchive | Удаление товаров из архива |
| [**deleteOutlet()**](DbsApi.md#deleteOutlet) | **DELETE** /v2/campaigns/{campaignId}/outlets/{outletId} | Удаление точки продаж |
| [**deleteOutletLicenses()**](DbsApi.md#deleteOutletLicenses) | **DELETE** /v2/campaigns/{campaignId}/outlets/licenses | Удаление лицензий для точек продаж |
| [**deletePromoOffers()**](DbsApi.md#deletePromoOffers) | **POST** /v2/businesses/{businessId}/promos/offers/delete | Удаление товаров из акции |
| [**generateBannersStatisticsReport()**](DbsApi.md#generateBannersStatisticsReport) | **POST** /v2/reports/banners-statistics/generate | Отчет по охватному продвижению |
| [**generateBoostConsolidatedReport()**](DbsApi.md#generateBoostConsolidatedReport) | **POST** /v2/reports/boost-consolidated/generate | Отчет по бусту продаж |
| [**generateClosureDocumentsDetalizationReport()**](DbsApi.md#generateClosureDocumentsDetalizationReport) | **POST** /v2/reports/closure-documents/detalization/generate | Отчет по схождению с закрывающими документами |
| [**generateClosureDocumentsReport()**](DbsApi.md#generateClosureDocumentsReport) | **POST** /v2/reports/closure-documents/generate | Закрывающие документы |
| [**generateCompetitorsPositionReport()**](DbsApi.md#generateCompetitorsPositionReport) | **POST** /v2/reports/competitors-position/generate | Отчет «Конкурентная позиция» |
| [**generateGoodsFeedbackReport()**](DbsApi.md#generateGoodsFeedbackReport) | **POST** /v2/reports/goods-feedback/generate | Отчет по отзывам о товарах |
| [**generateGoodsPricesReport()**](DbsApi.md#generateGoodsPricesReport) | **POST** /v2/reports/goods-prices/generate | Отчет «Цены» |
| [**generateGoodsRealizationReport()**](DbsApi.md#generateGoodsRealizationReport) | **POST** /v2/reports/goods-realization/generate | Отчет по реализации |
| [**generateJewelryFiscalReport()**](DbsApi.md#generateJewelryFiscalReport) | **POST** /v2/reports/jewelry-fiscal/generate | Отчет по заказам с ювелирными изделиями |
| [**generateKeyIndicatorsReport()**](DbsApi.md#generateKeyIndicatorsReport) | **POST** /v2/reports/key-indicators/generate | Отчет по ключевым показателям |
| [**generateMarketingDetalizationReport()**](DbsApi.md#generateMarketingDetalizationReport) | **POST** /v1/businesses/{businessId}/reports/marketing-detalization/generate | Отчет по счету маркетинга |
| [**generateMassOrderLabelsReport()**](DbsApi.md#generateMassOrderLabelsReport) | **POST** /v2/reports/documents/labels/generate | Готовые ярлыки‑наклейки на все коробки в нескольких заказах |
| [**generateOfferBarcodes()**](DbsApi.md#generateOfferBarcodes) | **POST** /v1/businesses/{businessId}/offer-mappings/barcodes/generate | Генерация штрихкодов |
| [**generateOrderLabel()**](DbsApi.md#generateOrderLabel) | **GET** /v2/campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label | Готовый ярлык‑наклейка для коробки в заказе |
| [**generateOrderLabels()**](DbsApi.md#generateOrderLabels) | **GET** /v2/campaigns/{campaignId}/orders/{orderId}/delivery/labels | Готовые ярлыки‑наклейки на все коробки в одном заказе |
| [**generateSalesGeographyReport()**](DbsApi.md#generateSalesGeographyReport) | **POST** /v2/reports/sales-geography/generate | Отчет по географии продаж |
| [**generateShelfsStatisticsReport()**](DbsApi.md#generateShelfsStatisticsReport) | **POST** /v2/reports/shelf-statistics/generate | Отчет по полкам |
| [**generateShowsBoostReport()**](DbsApi.md#generateShowsBoostReport) | **POST** /v2/reports/shows-boost/generate | Отчет по бусту показов |
| [**generateShowsSalesReport()**](DbsApi.md#generateShowsSalesReport) | **POST** /v2/reports/shows-sales/generate | Отчет «Аналитика продаж» |
| [**generateStocksOnWarehousesReport()**](DbsApi.md#generateStocksOnWarehousesReport) | **POST** /v2/reports/stocks-on-warehouses/generate | Отчет по остаткам на складах |
| [**generateUnitedMarketplaceServicesReport()**](DbsApi.md#generateUnitedMarketplaceServicesReport) | **POST** /v2/reports/united-marketplace-services/generate | Отчет по стоимости услуг |
| [**generateUnitedNettingReport()**](DbsApi.md#generateUnitedNettingReport) | **POST** /v2/reports/united-netting/generate | Отчет по платежам |
| [**generateUnitedOrdersReport()**](DbsApi.md#generateUnitedOrdersReport) | **POST** /v2/reports/united-orders/generate | Отчет по заказам |
| [**generateUnitedReturnsReport()**](DbsApi.md#generateUnitedReturnsReport) | **POST** /v2/reports/united-returns/generate | Отчет по невыкупам и возвратам |
| [**getAuthTokenInfo()**](DbsApi.md#getAuthTokenInfo) | **POST** /v2/auth/token | Получение информации о токене авторизации |
| [**getBidsInfoForBusiness()**](DbsApi.md#getBidsInfoForBusiness) | **POST** /v2/businesses/{businessId}/bids/info | Информация об установленных ставках |
| [**getBidsRecommendations()**](DbsApi.md#getBidsRecommendations) | **POST** /v2/businesses/{businessId}/bids/recommendations | Рекомендованные ставки для заданных товаров |
| [**getBusinessOrders()**](DbsApi.md#getBusinessOrders) | **POST** /v1/businesses/{businessId}/orders | Информация о заказах в кабинете |
| [**getBusinessQuarantineOffers()**](DbsApi.md#getBusinessQuarantineOffers) | **POST** /v2/businesses/{businessId}/price-quarantine | Список товаров, находящихся в карантине по цене в кабинете |
| [**getBusinessSettings()**](DbsApi.md#getBusinessSettings) | **POST** /v2/businesses/{businessId}/settings | Настройки кабинета |
| [**getCampaign()**](DbsApi.md#getCampaign) | **GET** /v2/campaigns/{campaignId} | Информация о магазине |
| [**getCampaignOffers()**](DbsApi.md#getCampaignOffers) | **POST** /v2/campaigns/{campaignId}/offers | Информация о товарах, которые размещены в заданном магазине |
| [**getCampaignQuarantineOffers()**](DbsApi.md#getCampaignQuarantineOffers) | **POST** /v2/campaigns/{campaignId}/price-quarantine | Список товаров, находящихся в карантине по цене в магазине |
| [**getCampaignSettings()**](DbsApi.md#getCampaignSettings) | **GET** /v2/campaigns/{campaignId}/settings | Настройки магазина |
| [**getCampaigns()**](DbsApi.md#getCampaigns) | **GET** /v2/campaigns | Список магазинов пользователя |
| [**getCategoriesMaxSaleQuantum()**](DbsApi.md#getCategoriesMaxSaleQuantum) | **POST** /v2/categories/max-sale-quantum | Лимит на установку кванта продажи и минимального количества товаров в заказе |
| [**getCategoriesTree()**](DbsApi.md#getCategoriesTree) | **POST** /v2/categories/tree | Дерево категорий |
| [**getCategoryContentParameters()**](DbsApi.md#getCategoryContentParameters) | **POST** /v2/category/{categoryId}/parameters | Списки характеристик товаров по категориям |
| [**getChat()**](DbsApi.md#getChat) | **GET** /v2/businesses/{businessId}/chat | Получение чата по идентификатору |
| [**getChatHistory()**](DbsApi.md#getChatHistory) | **POST** /v2/businesses/{businessId}/chats/history | Получение истории сообщений в чате |
| [**getChatMessage()**](DbsApi.md#getChatMessage) | **GET** /v2/businesses/{businessId}/chats/message | Получение сообщения в чате |
| [**getChats()**](DbsApi.md#getChats) | **POST** /v2/businesses/{businessId}/chats | Получение доступных чатов |
| [**getDefaultPrices()**](DbsApi.md#getDefaultPrices) | **POST** /v2/businesses/{businessId}/offer-prices | Просмотр цен на указанные товары во всех магазинах |
| [**getDeliveryServices()**](DbsApi.md#getDeliveryServices) | **GET** /v2/delivery/services | Справочник служб доставки |
| [**getGoodsFeedbackComments()**](DbsApi.md#getGoodsFeedbackComments) | **POST** /v2/businesses/{businessId}/goods-feedback/comments | Получение комментариев к отзыву |
| [**getGoodsFeedbacks()**](DbsApi.md#getGoodsFeedbacks) | **POST** /v2/businesses/{businessId}/goods-feedback | Получение отзывов о товарах продавца |
| [**getGoodsFeedbacksUrbanads()**](DbsApi.md#getGoodsFeedbacksUrbanads) | **POST** /v1/businesses/{businessId}/goods-feedback-advertiser | Получение отзывов о товарах для рекламодателей |
| [**getGoodsQuestionAnswers()**](DbsApi.md#getGoodsQuestionAnswers) | **POST** /v1/businesses/{businessId}/goods-questions/answers | Получение ответов на вопрос |
| [**getGoodsQuestions()**](DbsApi.md#getGoodsQuestions) | **POST** /v1/businesses/{businessId}/goods-questions | Получение вопросов о товарах продавца |
| [**getGoodsStats()**](DbsApi.md#getGoodsStats) | **POST** /v2/campaigns/{campaignId}/stats/skus | Отчет по товарам |
| [**getHiddenOffers()**](DbsApi.md#getHiddenOffers) | **GET** /v2/campaigns/{campaignId}/hidden-offers | Информация о скрытых вами товарах |
| [**getOfferCardsContentStatus()**](DbsApi.md#getOfferCardsContentStatus) | **POST** /v2/businesses/{businessId}/offer-cards | Получение информации о заполненности карточек магазина |
| [**getOfferMappings()**](DbsApi.md#getOfferMappings) | **POST** /v2/businesses/{businessId}/offer-mappings | Информация о товарах в каталоге |
| [**getOfferRecommendations()**](DbsApi.md#getOfferRecommendations) | **POST** /v2/businesses/{businessId}/offers/recommendations | Рекомендации Маркета, касающиеся цен |
| [**getOrder()**](DbsApi.md#getOrder) | **GET** /v2/campaigns/{campaignId}/orders/{orderId} | Информация об одном заказе в магазине |
| [**getOrderBusinessBuyerInfo()**](DbsApi.md#getOrderBusinessBuyerInfo) | **POST** /v2/campaigns/{campaignId}/orders/{orderId}/business-buyer | Информация о покупателе — юридическом лице |
| [**getOrderBusinessDocumentsInfo()**](DbsApi.md#getOrderBusinessDocumentsInfo) | **POST** /v2/campaigns/{campaignId}/orders/{orderId}/documents | Информация о документах |
| [**getOrderBuyerInfo()**](DbsApi.md#getOrderBuyerInfo) | **GET** /v2/campaigns/{campaignId}/orders/{orderId}/buyer | Информация о покупателе — физическом лице |
| [**getOrderLabelsData()**](DbsApi.md#getOrderLabelsData) | **GET** /v2/campaigns/{campaignId}/orders/{orderId}/delivery/labels/data | Данные для самостоятельного изготовления ярлыков |
| [**getOrders()**](DbsApi.md#getOrders) | **GET** /v2/campaigns/{campaignId}/orders | Информация о заказах в магазине |
| [**getOrdersStats()**](DbsApi.md#getOrdersStats) | **POST** /v2/campaigns/{campaignId}/stats/orders | Детальная информация по заказам |
| [**getOutlet()**](DbsApi.md#getOutlet) | **GET** /v2/campaigns/{campaignId}/outlets/{outletId} | Информация об одной точке продаж |
| [**getOutletLicenses()**](DbsApi.md#getOutletLicenses) | **GET** /v2/campaigns/{campaignId}/outlets/licenses | Информация о лицензиях для точек продаж |
| [**getOutlets()**](DbsApi.md#getOutlets) | **GET** /v2/campaigns/{campaignId}/outlets | Информация о нескольких точках продаж |
| [**getPagedWarehouses()**](DbsApi.md#getPagedWarehouses) | **POST** /v2/businesses/{businessId}/warehouses | Список складов |
| [**getPrices()**](DbsApi.md#getPrices) | **GET** /v2/campaigns/{campaignId}/offer-prices | Список цен |
| [**getPricesByOfferIds()**](DbsApi.md#getPricesByOfferIds) | **POST** /v2/campaigns/{campaignId}/offer-prices | Просмотр цен на указанные товары в конкретном магазине |
| [**getPromoOffers()**](DbsApi.md#getPromoOffers) | **POST** /v2/businesses/{businessId}/promos/offers | Получение списка товаров, которые участвуют или могут участвовать в акции |
| [**getPromos()**](DbsApi.md#getPromos) | **POST** /v2/businesses/{businessId}/promos | Получение списка акций |
| [**getQualityRatingDetails()**](DbsApi.md#getQualityRatingDetails) | **POST** /v2/campaigns/{campaignId}/ratings/quality/details | Заказы, которые повлияли на индекс качества |
| [**getQualityRatings()**](DbsApi.md#getQualityRatings) | **POST** /v2/businesses/{businessId}/ratings/quality | Индекс качества магазинов |
| [**getRegionsCodes()**](DbsApi.md#getRegionsCodes) | **POST** /v2/regions/countries | Список допустимых кодов стран |
| [**getReportInfo()**](DbsApi.md#getReportInfo) | **GET** /v2/reports/info/{reportId} | Получение заданного отчета или документа |
| [**getReturn()**](DbsApi.md#getReturn) | **GET** /v2/campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о невыкупе или возврате |
| [**getReturnApplication()**](DbsApi.md#getReturnApplication) | **GET** /v2/campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application | Получение заявления на возврат |
| [**getReturnAvailableDecisions()**](DbsApi.md#getReturnAvailableDecisions) | **POST** /v1/businesses/{businessId}/returns/decisions | Получение возможных решений по возврату |
| [**getReturnPhoto()**](DbsApi.md#getReturnPhoto) | **GET** /v2/campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографий товаров в возврате |
| [**getReturns()**](DbsApi.md#getReturns) | **GET** /v2/campaigns/{campaignId}/returns | Список невыкупов и возвратов |
| [**getStocks()**](DbsApi.md#getStocks) | **POST** /v2/campaigns/{campaignId}/offers/stocks | Информация об остатках и оборачиваемости |
| [**getWarehouses()**](DbsApi.md#getWarehouses) | **GET** /v2/businesses/{businessId}/warehouses | Список складов и групп складов |
| [**provideOrderDigitalCodes()**](DbsApi.md#provideOrderDigitalCodes) | **POST** /v2/campaigns/{campaignId}/orders/{orderId}/deliverDigitalGoods | Передача ключей цифровых товаров |
| [**provideOrderItemIdentifiers()**](DbsApi.md#provideOrderItemIdentifiers) | **PUT** /v2/campaigns/{campaignId}/orders/{orderId}/identifiers | Передача кодов маркировки единиц товара |
| [**putBidsForBusiness()**](DbsApi.md#putBidsForBusiness) | **PUT** /v2/businesses/{businessId}/bids | Включение буста продаж и установка ставок |
| [**putBidsForCampaign()**](DbsApi.md#putBidsForCampaign) | **PUT** /v2/campaigns/{campaignId}/bids | Включение буста продаж и установка ставок для магазина |
| [**searchRegionChildren()**](DbsApi.md#searchRegionChildren) | **GET** /v2/regions/{regionId}/children | Информация о дочерних регионах |
| [**searchRegionsById()**](DbsApi.md#searchRegionsById) | **GET** /v2/regions/{regionId} | Информация о регионе |
| [**searchRegionsByName()**](DbsApi.md#searchRegionsByName) | **GET** /v2/regions | Поиск регионов по их имени |
| [**sendFileToChat()**](DbsApi.md#sendFileToChat) | **POST** /v2/businesses/{businessId}/chats/file/send | Отправка файла в чат |
| [**sendMessageToChat()**](DbsApi.md#sendMessageToChat) | **POST** /v2/businesses/{businessId}/chats/message | Отправка сообщения в чат |
| [**setOrderBoxLayout()**](DbsApi.md#setOrderBoxLayout) | **PUT** /v2/campaigns/{campaignId}/orders/{orderId}/boxes | Подготовка заказа |
| [**setOrderDeliveryDate()**](DbsApi.md#setOrderDeliveryDate) | **PUT** /v2/campaigns/{campaignId}/orders/{orderId}/delivery/date | Изменение даты доставки заказа |
| [**setOrderDeliveryTrackCode()**](DbsApi.md#setOrderDeliveryTrackCode) | **POST** /v2/campaigns/{campaignId}/orders/{orderId}/delivery/track | Передача трек‑номера посылки |
| [**setOrderShipmentBoxes()**](DbsApi.md#setOrderShipmentBoxes) | **PUT** /v2/campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes | Передача количества грузовых мест в заказе |
| [**setReturnDecision()**](DbsApi.md#setReturnDecision) | **POST** /v2/campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision | Принятие или изменение решения по возврату |
| [**skipGoodsFeedbacksReaction()**](DbsApi.md#skipGoodsFeedbacksReaction) | **POST** /v2/businesses/{businessId}/goods-feedback/skip-reaction | Пропуск реакции на отзывы |
| [**submitReturnDecision()**](DbsApi.md#submitReturnDecision) | **POST** /v2/campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/submit | Передача решения по возврату |
| [**updateBusinessPrices()**](DbsApi.md#updateBusinessPrices) | **POST** /v2/businesses/{businessId}/offer-prices/updates | Установка цен на товары для всех магазинов |
| [**updateCampaignOffers()**](DbsApi.md#updateCampaignOffers) | **POST** /v2/campaigns/{campaignId}/offers/update | Изменение условий продажи товаров в магазине |
| [**updateExternalOrderId()**](DbsApi.md#updateExternalOrderId) | **POST** /v2/campaigns/{campaignId}/orders/{orderId}/external-id | Передача внешнего идентификатора заказа |
| [**updateGoodsFeedbackComment()**](DbsApi.md#updateGoodsFeedbackComment) | **POST** /v2/businesses/{businessId}/goods-feedback/comments/update | Добавление нового или изменение созданного комментария |
| [**updateGoodsQuestionTextEntity()**](DbsApi.md#updateGoodsQuestionTextEntity) | **POST** /v1/businesses/{businessId}/goods-questions/update | Создание, изменение и удаление ответа или комментария |
| [**updateOfferContent()**](DbsApi.md#updateOfferContent) | **POST** /v2/businesses/{businessId}/offer-cards/update | Редактирование категорийных характеристик товара |
| [**updateOfferMappings()**](DbsApi.md#updateOfferMappings) | **POST** /v2/businesses/{businessId}/offer-mappings/update | Добавление товаров в каталог и изменение информации о них |
| [**updateOrderItems()**](DbsApi.md#updateOrderItems) | **PUT** /v2/campaigns/{campaignId}/orders/{orderId}/items | Удаление товаров из заказа или уменьшение их числа |
| [**updateOrderStatus()**](DbsApi.md#updateOrderStatus) | **PUT** /v2/campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса одного заказа |
| [**updateOrderStatuses()**](DbsApi.md#updateOrderStatuses) | **POST** /v2/campaigns/{campaignId}/orders/status-update | Изменение статусов нескольких заказов |
| [**updateOrderStorageLimit()**](DbsApi.md#updateOrderStorageLimit) | **PUT** /v2/campaigns/{campaignId}/orders/{orderId}/delivery/storage-limit | Продление срока хранения заказа |
| [**updateOutlet()**](DbsApi.md#updateOutlet) | **PUT** /v2/campaigns/{campaignId}/outlets/{outletId} | Изменение информации о точке продаж |
| [**updateOutletLicenses()**](DbsApi.md#updateOutletLicenses) | **POST** /v2/campaigns/{campaignId}/outlets/licenses | Создание и изменение лицензий для точек продаж |
| [**updatePrices()**](DbsApi.md#updatePrices) | **POST** /v2/campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине |
| [**updatePromoOffers()**](DbsApi.md#updatePromoOffers) | **POST** /v2/businesses/{businessId}/promos/offers/update | Добавление товаров в акцию или изменение их цен |
| [**updateStocks()**](DbsApi.md#updateStocks) | **PUT** /v2/campaigns/{campaignId}/offers/stocks | Передача информации об остатках |
| [**updateWarehouseStatus()**](DbsApi.md#updateWarehouseStatus) | **POST** /v2/campaigns/{campaignId}/warehouse/status | Изменение статуса склада |


## `acceptOrderCancellation()`

```php
acceptOrderCancellation($campaign_id, $order_id, $accept_order_cancellation_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Отмена заказа покупателем

{% include notitle [access](../../_auto/method_scopes/acceptOrderCancellation.md) %}  Подтверждает или отклоняет заявку покупателя на отмену заказа, который передан службе доставки.  Покупатель может отменить заказ в течение его обработки или доставки. Если заказ еще обрабатывается (статус `PROCESSING`), вам не нужно подтверждать отмену заказа — он будет отменен автоматически.  Если заказ уже передан службе доставки (статус `DELIVERY` или `PICKUP`) и пользователь отменил его, вы можете предупредить службу об отмене в течение 48 часов.    * Служба доставки узнала об отмене до передачи заказа покупателю — подтвердите отмену с помощью запроса [PUT v2/campaigns/{campaignId}/orders/{orderId}/cancellation/accept](../../reference/orders/acceptOrderCancellation.md).   * Заказ уже доставлен — отклоните отмену с помощью этого же запроса. Тогда у покупателя останется заказ, и деньги за него возвращаться не будут.  **Как узнать об отмененных заказах:**    * Передайте параметр `onlyWaitingForCancellationApprove` в запросе [POST v1/businesses/{businessId}/orders](../../reference/orders/getBusinessOrders.md).   * В кабинете или через почту — на нее придет уведомление об отмене.   * Подключите API-уведомления. Маркет отправит вам запрос [POST notification](../../push-notifications/reference/sendNotification.md), когда появится новая заявка на отмену заказа. [{#T}](../../push-notifications/index.md)  Если в течение 48 часов вы не подтвердите или отклоните отмену, заказ будет отменен автоматически.  {% include notitle [limit](../../_auto/method_limits/acceptOrderCancellation.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.
$accept_order_cancellation_request = new \OpenAPI\Client\Model\AcceptOrderCancellationRequest(); // \OpenAPI\Client\Model\AcceptOrderCancellationRequest

try {
    $result = $apiInstance->acceptOrderCancellation($campaign_id, $order_id, $accept_order_cancellation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->acceptOrderCancellation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **accept_order_cancellation_request** | [**\OpenAPI\Client\Model\AcceptOrderCancellationRequest**](../Model/AcceptOrderCancellationRequest.md)|  | |

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

## `addHiddenOffers()`

```php
addHiddenOffers($campaign_id, $add_hidden_offers_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Скрытие товаров и настройки скрытия

{% include notitle [access](../../_auto/method_scopes/addHiddenOffers.md) %}  Скрывает товары магазина на Маркете.  {% note info \"Данные в каталоге обновляются не мгновенно\" %}  Это занимает до нескольких минут.  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/addHiddenOffers.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$add_hidden_offers_request = new \OpenAPI\Client\Model\AddHiddenOffersRequest(); // \OpenAPI\Client\Model\AddHiddenOffersRequest | Запрос на скрытие оферов.

try {
    $result = $apiInstance->addHiddenOffers($campaign_id, $add_hidden_offers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->addHiddenOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **add_hidden_offers_request** | [**\OpenAPI\Client\Model\AddHiddenOffersRequest**](../Model/AddHiddenOffersRequest.md)| Запрос на скрытие оферов. | |

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

## `addOffersToArchive()`

```php
addOffersToArchive($business_id, $add_offers_to_archive_request): \OpenAPI\Client\Model\AddOffersToArchiveResponse
```

Добавление товаров в архив

{% include notitle [access](../../_auto/method_scopes/addOffersToArchive.md) %}  Помещает товары в архив. Товары, помещенные в архив, скрыты с витрины во всех магазинах кабинета.  {% note warning \"В архив нельзя отправить товар, который хранится на складе Маркета\" %}  Вначале такой товар нужно распродать или вывезти.  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/addOffersToArchive.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$add_offers_to_archive_request = new \OpenAPI\Client\Model\AddOffersToArchiveRequest(); // \OpenAPI\Client\Model\AddOffersToArchiveRequest

try {
    $result = $apiInstance->addOffersToArchive($business_id, $add_offers_to_archive_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->addOffersToArchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **add_offers_to_archive_request** | [**\OpenAPI\Client\Model\AddOffersToArchiveRequest**](../Model/AddOffersToArchiveRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AddOffersToArchiveResponse**](../Model/AddOffersToArchiveResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `calculateTariffs()`

```php
calculateTariffs($calculate_tariffs_request): \OpenAPI\Client\Model\CalculateTariffsResponse
```

Калькулятор стоимости услуг

{% include notitle [access](../../_auto/method_scopes/calculateTariffs.md) %}  Рассчитывает стоимость услуг Маркета для товаров с заданными параметрами. Порядок товаров в запросе и ответе сохраняется, чтобы определить, для какого товара рассчитана стоимость услуги.  Обратите внимание: калькулятор осуществляет примерные расчеты. Финальная стоимость для каждого заказа зависит от предоставленных услуг.  Если у вас оформлена подписка, сниженный тариф применится в расчетах. Подробнее о подписке для продавцов читайте [в Справке Маркета для продавцов](https://yandex.ru/support/marketplace/ru/marketing/subscription).  В запросе можно указать либо параметр `campaignId`, либо `sellingProgram`. Совместное использование параметров приведет к ошибке.  {% include notitle [limit](../../_auto/method_limits/calculateTariffs.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calculate_tariffs_request = new \OpenAPI\Client\Model\CalculateTariffsRequest(); // \OpenAPI\Client\Model\CalculateTariffsRequest

try {
    $result = $apiInstance->calculateTariffs($calculate_tariffs_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->calculateTariffs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **calculate_tariffs_request** | [**\OpenAPI\Client\Model\CalculateTariffsRequest**](../Model/CalculateTariffsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CalculateTariffsResponse**](../Model/CalculateTariffsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmBusinessPrices()`

```php
confirmBusinessPrices($business_id, $confirm_prices_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Удаление товара из карантина по цене в кабинете

{% include notitle [access](../../_auto/method_scopes/confirmBusinessPrices.md) %}  Подтверждает во всех магазинах цену на товары, которые попали в карантин, и удаляет их из карантина.  Товар попадает в карантин, если его цена меняется слишком резко. [Как настроить карантин](https://yandex.ru/support/marketplace/assortment/operations/prices.html#quarantine)  Чтобы увидеть список товаров, которые попали в карантин, используйте запрос [POST v2/businesses/{businessId}/price-quarantine](getBusinessQuarantineOffers.md).  {% include notitle [limit](../../_auto/method_limits/confirmBusinessPrices.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$confirm_prices_request = new \OpenAPI\Client\Model\ConfirmPricesRequest(); // \OpenAPI\Client\Model\ConfirmPricesRequest

try {
    $result = $apiInstance->confirmBusinessPrices($business_id, $confirm_prices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->confirmBusinessPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **confirm_prices_request** | [**\OpenAPI\Client\Model\ConfirmPricesRequest**](../Model/ConfirmPricesRequest.md)|  | |

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

## `confirmCampaignPrices()`

```php
confirmCampaignPrices($campaign_id, $confirm_prices_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Удаление товара из карантина по цене в магазине

{% include notitle [access](../../_auto/method_scopes/confirmCampaignPrices.md) %}  Подтверждает в заданном магазине цену на товары, которые попали в карантин, и удаляет их из карантина.  Товар попадает в карантин, если его цена меняется слишком резко. [Как настроить карантин](https://yandex.ru/support/marketplace/assortment/operations/prices.html#quarantine)  Чтобы увидеть список товаров, которые попали в карантин, используйте запрос [POST v2/campaigns/{campaignId}/price-quarantine](getCampaignQuarantineOffers.md).  {% include notitle [limit](../../_auto/method_limits/confirmCampaignPrices.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$confirm_prices_request = new \OpenAPI\Client\Model\ConfirmPricesRequest(); // \OpenAPI\Client\Model\ConfirmPricesRequest

try {
    $result = $apiInstance->confirmCampaignPrices($campaign_id, $confirm_prices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->confirmCampaignPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **confirm_prices_request** | [**\OpenAPI\Client\Model\ConfirmPricesRequest**](../Model/ConfirmPricesRequest.md)|  | |

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

## `createChat()`

```php
createChat($business_id, $create_chat_request): \OpenAPI\Client\Model\CreateChatResponse
```

Создание нового чата с покупателем

{% include notitle [access](../../_auto/method_scopes/createChat.md) %}  Создает новый чат с покупателем и возвращает информацию о нем или созданном ранее.  Типы чатов, которые может начать продавец:  * по заказам; * по возвратам (доступны только для FBY-, FBS- и Экспресс-магазинов).  {% include notitle [limit](../../_auto/method_limits/createChat.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$create_chat_request = new \OpenAPI\Client\Model\CreateChatRequest(); // \OpenAPI\Client\Model\CreateChatRequest | description

try {
    $result = $apiInstance->createChat($business_id, $create_chat_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->createChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **create_chat_request** | [**\OpenAPI\Client\Model\CreateChatRequest**](../Model/CreateChatRequest.md)| description | |

### Return type

[**\OpenAPI\Client\Model\CreateChatResponse**](../Model/CreateChatResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOutlet()`

```php
createOutlet($campaign_id, $change_outlet_request): \OpenAPI\Client\Model\CreateOutletResponse
```

Создание точки продаж

{% include notitle [access](../../_auto/method_scopes/createOutlet.md) %}  Создает точку продаж магазина на Маркете.  {% include notitle [limit](../../_auto/method_limits/createOutlet.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$change_outlet_request = new \OpenAPI\Client\Model\ChangeOutletRequest(); // \OpenAPI\Client\Model\ChangeOutletRequest

try {
    $result = $apiInstance->createOutlet($campaign_id, $change_outlet_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->createOutlet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **change_outlet_request** | [**\OpenAPI\Client\Model\ChangeOutletRequest**](../Model/ChangeOutletRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateOutletResponse**](../Model/CreateOutletResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCampaignOffers()`

```php
deleteCampaignOffers($campaign_id, $delete_campaign_offers_request): \OpenAPI\Client\Model\DeleteCampaignOffersResponse
```

Удаление товаров из ассортимента магазина

{% include notitle [access](../../_auto/method_scopes/deleteCampaignOffers.md) %}  Удаляет заданные товары из заданного магазина.  {% note warning \"Запрос удаляет товары из конкретного магазина\" %}  На продажи в других магазинах и на наличие товара в общем каталоге он не влияет.  {% endnote %}  Товар не получится удалить, если он хранится на складах Маркета.  {% include notitle [limit](../../_auto/method_limits/deleteCampaignOffers.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$delete_campaign_offers_request = new \OpenAPI\Client\Model\DeleteCampaignOffersRequest(); // \OpenAPI\Client\Model\DeleteCampaignOffersRequest

try {
    $result = $apiInstance->deleteCampaignOffers($campaign_id, $delete_campaign_offers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->deleteCampaignOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **delete_campaign_offers_request** | [**\OpenAPI\Client\Model\DeleteCampaignOffersRequest**](../Model/DeleteCampaignOffersRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DeleteCampaignOffersResponse**](../Model/DeleteCampaignOffersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
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
    echo 'Exception when calling DbsApi->deleteGoodsFeedbackComment: ', $e->getMessage(), PHP_EOL;
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

## `deleteHiddenOffers()`

```php
deleteHiddenOffers($campaign_id, $delete_hidden_offers_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Возобновление показа товаров

{% include notitle [access](../../_auto/method_scopes/deleteHiddenOffers.md) %}  Возобновляет показ скрытых вами товаров магазина на Маркете.  {% note info \"Данные в каталоге обновляются не мгновенно\" %}  Это занимает до нескольких минут.  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/deleteHiddenOffers.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$delete_hidden_offers_request = new \OpenAPI\Client\Model\DeleteHiddenOffersRequest(); // \OpenAPI\Client\Model\DeleteHiddenOffersRequest | Запрос на возобновление показа оферов.

try {
    $result = $apiInstance->deleteHiddenOffers($campaign_id, $delete_hidden_offers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->deleteHiddenOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **delete_hidden_offers_request** | [**\OpenAPI\Client\Model\DeleteHiddenOffersRequest**](../Model/DeleteHiddenOffersRequest.md)| Запрос на возобновление показа оферов. | |

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

## `deleteOffers()`

```php
deleteOffers($business_id, $delete_offers_request): \OpenAPI\Client\Model\DeleteOffersResponse
```

Удаление товаров из каталога

{% include notitle [access](../../_auto/method_scopes/deleteOffers.md) %}  Удаляет товары из каталога.  {% include notitle [limit](../../_auto/method_limits/deleteOffers.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$delete_offers_request = new \OpenAPI\Client\Model\DeleteOffersRequest(); // \OpenAPI\Client\Model\DeleteOffersRequest

try {
    $result = $apiInstance->deleteOffers($business_id, $delete_offers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->deleteOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **delete_offers_request** | [**\OpenAPI\Client\Model\DeleteOffersRequest**](../Model/DeleteOffersRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DeleteOffersResponse**](../Model/DeleteOffersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOffersFromArchive()`

```php
deleteOffersFromArchive($business_id, $delete_offers_from_archive_request): \OpenAPI\Client\Model\DeleteOffersFromArchiveResponse
```

Удаление товаров из архива

{% include notitle [access](../../_auto/method_scopes/deleteOffersFromArchive.md) %}  Восстанавливает товары из архива.  {% include notitle [limit](../../_auto/method_limits/deleteOffersFromArchive.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$delete_offers_from_archive_request = new \OpenAPI\Client\Model\DeleteOffersFromArchiveRequest(); // \OpenAPI\Client\Model\DeleteOffersFromArchiveRequest

try {
    $result = $apiInstance->deleteOffersFromArchive($business_id, $delete_offers_from_archive_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->deleteOffersFromArchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **delete_offers_from_archive_request** | [**\OpenAPI\Client\Model\DeleteOffersFromArchiveRequest**](../Model/DeleteOffersFromArchiveRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DeleteOffersFromArchiveResponse**](../Model/DeleteOffersFromArchiveResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOutlet()`

```php
deleteOutlet($campaign_id, $outlet_id): \OpenAPI\Client\Model\EmptyApiResponse
```

Удаление точки продаж

{% include notitle [access](../../_auto/method_scopes/deleteOutlet.md) %}  Удаляет точку продаж магазина на Маркете.  {% include notitle [limit](../../_auto/method_limits/deleteOutlet.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$outlet_id = 56; // int | Идентификатор точки продаж.

try {
    $result = $apiInstance->deleteOutlet($campaign_id, $outlet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->deleteOutlet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **outlet_id** | **int**| Идентификатор точки продаж. | |

### Return type

[**\OpenAPI\Client\Model\EmptyApiResponse**](../Model/EmptyApiResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOutletLicenses()`

```php
deleteOutletLicenses($campaign_id, $ids): \OpenAPI\Client\Model\EmptyApiResponse
```

Удаление лицензий для точек продаж

{% include notitle [access](../../_auto/method_scopes/deleteOutletLicenses.md) %}  Удаляет информацию о лицензиях для точек продаж.  {% include notitle [limit](../../_auto/method_limits/deleteOutletLicenses.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$ids = array(56); // int[] | Список идентификаторов лицензий для удаления.

try {
    $result = $apiInstance->deleteOutletLicenses($campaign_id, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->deleteOutletLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **ids** | [**int[]**](../Model/int.md)| Список идентификаторов лицензий для удаления. | |

### Return type

[**\OpenAPI\Client\Model\EmptyApiResponse**](../Model/EmptyApiResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePromoOffers()`

```php
deletePromoOffers($business_id, $delete_promo_offers_request): \OpenAPI\Client\Model\DeletePromoOffersResponse
```

Удаление товаров из акции

{% include notitle [access](../../_auto/method_scopes/deletePromoOffers.md) %}  Убирает товары из акции.  Изменения начинают действовать в течение 4–6 часов. Узнать, применились ли они, можно с помощью параметра `processing` в ответе метода [POST v2/businesses/{businessId}/promos](../../reference/promos/getPromos.md).  {% include notitle [limit](../../_auto/method_limits/deletePromoOffers.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$delete_promo_offers_request = new \OpenAPI\Client\Model\DeletePromoOffersRequest(); // \OpenAPI\Client\Model\DeletePromoOffersRequest

try {
    $result = $apiInstance->deletePromoOffers($business_id, $delete_promo_offers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->deletePromoOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **delete_promo_offers_request** | [**\OpenAPI\Client\Model\DeletePromoOffersRequest**](../Model/DeletePromoOffersRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DeletePromoOffersResponse**](../Model/DeletePromoOffersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateBannersStatisticsReport()`

```php
generateBannersStatisticsReport($generate_banners_statistics_request, $format, $source_type): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по охватному продвижению

{% include notitle [access](../../_auto/method_scopes/generateBannersStatisticsReport.md) %}  Запускает генерацию сводного отчета по охватному продвижению. {% if audience == \"partner\" %}Что это за отчет: [для баннеров](https://yandex.ru/support/marketplace/ru/marketing/advertising-tools/banner#statistics), [для пуш-уведомлений](https://yandex.ru/support/marketplace/ru/marketing/advertising-tools/push-notifications#statistics).{% endif %}  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/incuts/banners_statistics.md) %}  {% if audience != \"advertiser\" %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-400-days.md) %}  {% endif %}  {% include notitle [limit](../../_auto/method_limits/generateBannersStatisticsReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_banners_statistics_request = new \OpenAPI\Client\Model\GenerateBannersStatisticsRequest(); // \OpenAPI\Client\Model\GenerateBannersStatisticsRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.
$source_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SourceType(); // \OpenAPI\Client\Model\SourceType | Признак типа кабинета, от имени которого вызывается метод: {% if audience == \"partner\" %}  - `SELLER` — продавец.  {% endif %}  - `ADVERTISER` — рекламодатель.  {% if audience == \"advertiser\" %}  {% note info \"Обязательно указывайте sourceType=ADVERTISER в каждом запросе.\" %}     {% endnote %}  {% endif %}

try {
    $result = $apiInstance->generateBannersStatisticsReport($generate_banners_statistics_request, $format, $source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateBannersStatisticsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_banners_statistics_request** | [**\OpenAPI\Client\Model\GenerateBannersStatisticsRequest**](../Model/GenerateBannersStatisticsRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |
| **source_type** | [**\OpenAPI\Client\Model\SourceType**](../Model/.md)| Признак типа кабинета, от имени которого вызывается метод: {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  - &#x60;SELLER&#x60; — продавец.  {% endif %}  - &#x60;ADVERTISER&#x60; — рекламодатель.  {% if audience &#x3D;&#x3D; \&quot;advertiser\&quot; %}  {% note info \&quot;Обязательно указывайте sourceType&#x3D;ADVERTISER в каждом запросе.\&quot; %}     {% endnote %}  {% endif %} | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateBoostConsolidatedReport()`

```php
generateBoostConsolidatedReport($generate_boost_consolidated_request, $format, $source_type): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по бусту продаж

{% include notitle [access](../../_auto/method_scopes/generateBoostConsolidatedReport.md) %}  Запускает генерацию сводного отчета по бусту продаж за заданный период. {% if audience == \"partner\" %}[Что такое буст продаж](https://yandex.ru/support/marketplace/ru/marketing/campaigns){% endif %}  Отчет содержит информацию по всем кампаниям, созданным и через API, и в кабинете.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports]({{ report-columns-boost-consolidated }}) %}  {% if audience != \"advertiser\" %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-400-days.md) %}  {% endif %}  {% include notitle [limit](../../_auto/method_limits/generateBoostConsolidatedReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_boost_consolidated_request = new \OpenAPI\Client\Model\GenerateBoostConsolidatedRequest(); // \OpenAPI\Client\Model\GenerateBoostConsolidatedRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.
$source_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SourceType(); // \OpenAPI\Client\Model\SourceType | Признак типа кабинета, от имени которого вызывается метод: {% if audience == \"partner\" %}  - `SELLER` — продавец.  {% endif %}  - `ADVERTISER` — рекламодатель.  {% if audience == \"advertiser\" %}  {% note info \"Обязательно указывайте sourceType=ADVERTISER в каждом запросе.\" %}     {% endnote %}  {% endif %}

try {
    $result = $apiInstance->generateBoostConsolidatedReport($generate_boost_consolidated_request, $format, $source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateBoostConsolidatedReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_boost_consolidated_request** | [**\OpenAPI\Client\Model\GenerateBoostConsolidatedRequest**](../Model/GenerateBoostConsolidatedRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |
| **source_type** | [**\OpenAPI\Client\Model\SourceType**](../Model/.md)| Признак типа кабинета, от имени которого вызывается метод: {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  - &#x60;SELLER&#x60; — продавец.  {% endif %}  - &#x60;ADVERTISER&#x60; — рекламодатель.  {% if audience &#x3D;&#x3D; \&quot;advertiser\&quot; %}  {% note info \&quot;Обязательно указывайте sourceType&#x3D;ADVERTISER в каждом запросе.\&quot; %}     {% endnote %}  {% endif %} | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateClosureDocumentsDetalizationReport()`

```php
generateClosureDocumentsDetalizationReport($generate_closure_documents_detalization_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по схождению с закрывающими документами

{% include notitle [access](../../_auto/method_scopes/generateClosureDocumentsDetalizationReport.md) %}  Запускает генерацию отчета по схождению с закрывающими документами в зависимости от типа договора.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% list tabs %}  - Договор на размещение    {% include notitle [reports](../../_auto/reports/period_closure/period_closure_income.md) %}  - Договор на продвижение    {% include notitle [reports](../../_auto/reports/period_closure/period_closure_outcome.md) %}  {% endlist %}  {% include notitle [limit](../../_auto/method_limits/generateClosureDocumentsDetalizationReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_closure_documents_detalization_request = new \OpenAPI\Client\Model\GenerateClosureDocumentsDetalizationRequest(); // \OpenAPI\Client\Model\GenerateClosureDocumentsDetalizationRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateClosureDocumentsDetalizationReport($generate_closure_documents_detalization_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateClosureDocumentsDetalizationReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_closure_documents_detalization_request** | [**\OpenAPI\Client\Model\GenerateClosureDocumentsDetalizationRequest**](../Model/GenerateClosureDocumentsDetalizationRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateClosureDocumentsReport()`

```php
generateClosureDocumentsReport($generate_closure_documents_request): \OpenAPI\Client\Model\GenerateReportResponse
```

Закрывающие документы

{% include notitle [access](../../_auto/method_scopes/generateClosureDocumentsReport.md) %}  Возвращает ZIP-архив с закрывающими документами в формате PDF за указанный месяц.  {% cut \"Состав документов в зависимости от типа договора\" %}  * **Договор на размещение**    * [акт об оказанных услугах](*acts-main-act)   * [счет-фактура](*acts-main-invoice)   * [сводный отчет по данным статистики](*acts-main-report)   * [отчет об исполнении поручения и о зачете взаимных требований](*acts-main-agent) (отчет агента)  * **Договор на продвижение** (в России не заключается после 30 сентября 2024 года)    * [акт об оказании услуг](*acts-discounts-act)   * [счет-фактура](*acts-discounts-invoice), если этого требует схема налогообложения  * **Договор на маркетинг**    * [акт об оказанных услугах](*acts-marketing-act)   * [счет-фактура](*acts-main-invoice)   * [счет-фактура на аванс](*acts-marketing-invoice)   * [выписка по лицевому счету](*acts-marketing-account)   * [детализация к акту](*acts-marketing-details)  {% endcut %}  Узнать статус генерации и получить ссылку на архив можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [limit](../../_auto/method_limits/generateClosureDocumentsReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_closure_documents_request = new \OpenAPI\Client\Model\GenerateClosureDocumentsRequest(); // \OpenAPI\Client\Model\GenerateClosureDocumentsRequest

try {
    $result = $apiInstance->generateClosureDocumentsReport($generate_closure_documents_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateClosureDocumentsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_closure_documents_request** | [**\OpenAPI\Client\Model\GenerateClosureDocumentsRequest**](../Model/GenerateClosureDocumentsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateCompetitorsPositionReport()`

```php
generateCompetitorsPositionReport($generate_competitors_position_report_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет «Конкурентная позиция»

{% include notitle [access](../../_auto/method_scopes/generateCompetitorsPositionReport.md) %}  Запускает генерацию отчета «Конкурентная позиция» за заданный период. [Что это за отчет](https://yandex.ru/support2/marketplace/ru/analytics/competitors.html)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% note info \"Значение -1 в отчете\" %}  Если в CSV-файле в столбце :no-translate[**POSITION**] стоит -1, в этот день не было заказов с товарами в указанной категории.  {% endnote %}  {% include notitle [reports](../../_auto/reports/masterstat/competitors_position.md) %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-400-days.md) %}  {% include notitle [limit](../../_auto/method_limits/generateCompetitorsPositionReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_competitors_position_report_request = new \OpenAPI\Client\Model\GenerateCompetitorsPositionReportRequest(); // \OpenAPI\Client\Model\GenerateCompetitorsPositionReportRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateCompetitorsPositionReport($generate_competitors_position_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateCompetitorsPositionReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_competitors_position_report_request** | [**\OpenAPI\Client\Model\GenerateCompetitorsPositionReportRequest**](../Model/GenerateCompetitorsPositionReportRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateGoodsFeedbackReport()`

```php
generateGoodsFeedbackReport($generate_goods_feedback_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по отзывам о товарах

{% include notitle [access](../../_auto/method_scopes/generateGoodsFeedbackReport.md) %}  Запускает генерацию отчета по отзывам о товарах. [Что это за отчет](https://yandex.ru/support/marketplace/ru/marketing/plus-reviews#stat)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/paid_opinion_models/paid_opinion_models.md) %}  {% include notitle [tariff-period](../../_includes/common/simultaneously-generated-reports-amount.md) %}  {% include notitle [limit](../../_auto/method_limits/generateGoodsFeedbackReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_goods_feedback_request = new \OpenAPI\Client\Model\GenerateGoodsFeedbackRequest(); // \OpenAPI\Client\Model\GenerateGoodsFeedbackRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateGoodsFeedbackReport($generate_goods_feedback_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateGoodsFeedbackReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_goods_feedback_request** | [**\OpenAPI\Client\Model\GenerateGoodsFeedbackRequest**](../Model/GenerateGoodsFeedbackRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateGoodsPricesReport()`

```php
generateGoodsPricesReport($generate_goods_prices_report_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет «Цены»

{% include notitle [access](../../_auto/method_scopes/generateGoodsPricesReport.md) %}  Запускает генерацию отчета «Цены».  **Какая информация вернется:**  * если передать `businessId` — по единым ценам кабинета; * если [включены магазинные цены](*onlyDefaultPrice-false) и указать `campaignId` — по ценам в соответствующем магазине.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% list tabs %}  - Цены во всех магазинах кабинета    {% include notitle [reports](../../_auto/reports/prices/mass_assortment_business_price_v2.md) %}  - Магазинные цены    {% include notitle [reports](../../_auto/reports/prices/mass_assortment_price_v2.md) %}  {% endlist %}  {% include notitle [tariff-period](../../_includes/common/simultaneously-generated-reports-amount.md) %}  {% include notitle [limit](../../_auto/method_limits/generateGoodsPricesReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_goods_prices_report_request = new \OpenAPI\Client\Model\GenerateGoodsPricesReportRequest(); // \OpenAPI\Client\Model\GenerateGoodsPricesReportRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateGoodsPricesReport($generate_goods_prices_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateGoodsPricesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_goods_prices_report_request** | [**\OpenAPI\Client\Model\GenerateGoodsPricesReportRequest**](../Model/GenerateGoodsPricesReportRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateGoodsRealizationReport()`

```php
generateGoodsRealizationReport($generate_goods_realization_report_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по реализации

{% include notitle [access](../../_auto/method_scopes/generateGoodsRealizationReport.md) %}  Запускает генерацию отчета по реализации за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/ru/accounting/transactions#sales-report)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% list tabs %}  - FBY, FBS, Экспресс    {% include notitle [reports](../../_auto/reports/united/statistics/generator/united_statistics_v2.md) %}  - DBS    {% include notitle [reports](../../_auto/reports/united/statistics/generator/united_statistics_v2_dbs.md) %}  {% endlist %}  {% include notitle [limit](../../_auto/method_limits/generateGoodsRealizationReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_goods_realization_report_request = new \OpenAPI\Client\Model\GenerateGoodsRealizationReportRequest(); // \OpenAPI\Client\Model\GenerateGoodsRealizationReportRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateGoodsRealizationReport($generate_goods_realization_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateGoodsRealizationReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_goods_realization_report_request** | [**\OpenAPI\Client\Model\GenerateGoodsRealizationReportRequest**](../Model/GenerateGoodsRealizationReportRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateJewelryFiscalReport()`

```php
generateJewelryFiscalReport($generate_jewelry_fiscal_report_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по заказам с ювелирными изделиями

{% include notitle [access](../../_auto/method_scopes/generateJewelryFiscalReport.md) %}  Запускает генерацию отчета по заказам с ювелирными изделиями.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/identifiers/jewelry/orders_jewelry_fiscal.md) %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-unchanged.md) %}  {% include notitle [limit](../../_auto/method_limits/generateJewelryFiscalReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_jewelry_fiscal_report_request = new \OpenAPI\Client\Model\GenerateJewelryFiscalReportRequest(); // \OpenAPI\Client\Model\GenerateJewelryFiscalReportRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateJewelryFiscalReport($generate_jewelry_fiscal_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateJewelryFiscalReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_jewelry_fiscal_report_request** | [**\OpenAPI\Client\Model\GenerateJewelryFiscalReportRequest**](../Model/GenerateJewelryFiscalReportRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateKeyIndicatorsReport()`

```php
generateKeyIndicatorsReport($generate_key_indicators_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по ключевым показателям

{% include notitle [access](../../_auto/method_scopes/generateKeyIndicatorsReport.md) %}  Запускает генерацию отчета по ключевым показателям. [Что это за отчет](https://yandex.ru/support/marketplace/ru/analytics/key-metrics)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/key_indicators/key_indicators.md) %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-400-days.md) %}  {% include notitle [limit](../../_auto/method_limits/generateKeyIndicatorsReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_key_indicators_request = new \OpenAPI\Client\Model\GenerateKeyIndicatorsRequest(); // \OpenAPI\Client\Model\GenerateKeyIndicatorsRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateKeyIndicatorsReport($generate_key_indicators_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateKeyIndicatorsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_key_indicators_request** | [**\OpenAPI\Client\Model\GenerateKeyIndicatorsRequest**](../Model/GenerateKeyIndicatorsRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateMarketingDetalizationReport()`

```php
generateMarketingDetalizationReport($business_id, $generate_marketing_detalization_request, $format, $source_type): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по счету маркетинга

{% include notitle [access](../../_auto/method_scopes/generateMarketingDetalizationReport.md) %}  Запускает генерацию отчета по счету маркетинга.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/advertiser_billing_operations/advertiser_billing_operations.md) %}  {% include notitle [limit](../../_auto/method_limits/generateMarketingDetalizationReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$generate_marketing_detalization_request = new \OpenAPI\Client\Model\GenerateMarketingDetalizationRequest(); // \OpenAPI\Client\Model\GenerateMarketingDetalizationRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.
$source_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SourceType(); // \OpenAPI\Client\Model\SourceType | Признак типа кабинета, от имени которого вызывается метод: {% if audience == \"partner\" %}  - `SELLER` — продавец.  {% endif %}  - `ADVERTISER` — рекламодатель.  {% if audience == \"advertiser\" %}  {% note info \"Обязательно указывайте sourceType=ADVERTISER в каждом запросе.\" %}     {% endnote %}  {% endif %}

try {
    $result = $apiInstance->generateMarketingDetalizationReport($business_id, $generate_marketing_detalization_request, $format, $source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateMarketingDetalizationReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **generate_marketing_detalization_request** | [**\OpenAPI\Client\Model\GenerateMarketingDetalizationRequest**](../Model/GenerateMarketingDetalizationRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |
| **source_type** | [**\OpenAPI\Client\Model\SourceType**](../Model/.md)| Признак типа кабинета, от имени которого вызывается метод: {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  - &#x60;SELLER&#x60; — продавец.  {% endif %}  - &#x60;ADVERTISER&#x60; — рекламодатель.  {% if audience &#x3D;&#x3D; \&quot;advertiser\&quot; %}  {% note info \&quot;Обязательно указывайте sourceType&#x3D;ADVERTISER в каждом запросе.\&quot; %}     {% endnote %}  {% endif %} | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateMassOrderLabelsReport()`

```php
generateMassOrderLabelsReport($generate_mass_order_labels_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Готовые ярлыки‑наклейки на все коробки в нескольких заказах

{% include notitle [access](../../_auto/method_scopes/generateMassOrderLabelsReport.md) %}  Запускает генерацию PDF-файла с ярлыками для переданных заказов. Подробно о том, зачем они нужны и как выглядят, рассказано [в Справке Маркета для продавцов](https://yandex.ru/support/marketplace/orders/fbs/packaging/marking.html).  Чтобы на ярлыке отображался внешний идентификатор заказа, передайте его в методе [POST v2/campaigns/{campaignId}/orders/{orderId}/external-id](../../reference/orders/updateExternalOrderId.md).  Узнать статус генерации и получить ссылку на готовый файл можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [limit](../../_auto/method_limits/generateMassOrderLabelsReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_mass_order_labels_request = new \OpenAPI\Client\Model\GenerateMassOrderLabelsRequest(); // \OpenAPI\Client\Model\GenerateMassOrderLabelsRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PageFormatType(); // \OpenAPI\Client\Model\PageFormatType | Настройка размещения ярлыков на странице. Если параметра нет, возвращается PDF с ярлыками формата :no-translate[A7].

try {
    $result = $apiInstance->generateMassOrderLabelsReport($generate_mass_order_labels_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateMassOrderLabelsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_mass_order_labels_request** | [**\OpenAPI\Client\Model\GenerateMassOrderLabelsRequest**](../Model/GenerateMassOrderLabelsRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\PageFormatType**](../Model/.md)| Настройка размещения ярлыков на странице. Если параметра нет, возвращается PDF с ярлыками формата :no-translate[A7]. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateOfferBarcodes()`

```php
generateOfferBarcodes($business_id, $generate_offer_barcodes_request): \OpenAPI\Client\Model\GenerateOfferBarcodesResponse
```

Генерация штрихкодов

{% include notitle [access](../../_auto/method_scopes/generateOfferBarcodes.md) %}  Генерирует штрихкоды и присваивает их указанным товарам.  Если у товара на упаковке уже есть штрихкод производителя, передайте его в параметре `barcodes` в методе [POST v2/businesses/{businessId}/offer-mappings/update](../../reference/business-offer-mappings/updateOfferMappings.md). Генерировать новый не нужно.  {% include notitle [limit](../../_auto/method_limits/generateOfferBarcodes.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$generate_offer_barcodes_request = new \OpenAPI\Client\Model\GenerateOfferBarcodesRequest(); // \OpenAPI\Client\Model\GenerateOfferBarcodesRequest

try {
    $result = $apiInstance->generateOfferBarcodes($business_id, $generate_offer_barcodes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateOfferBarcodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **generate_offer_barcodes_request** | [**\OpenAPI\Client\Model\GenerateOfferBarcodesRequest**](../Model/GenerateOfferBarcodesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GenerateOfferBarcodesResponse**](../Model/GenerateOfferBarcodesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateOrderLabel()`

```php
generateOrderLabel($campaign_id, $order_id, $shipment_id, $box_id, $format): \SplFileObject
```

Готовый ярлык‑наклейка для коробки в заказе

{% include notitle [access](../../_auto/method_scopes/generateOrderLabel.md) %}  Формирует ярлык‑наклейку для коробки в заказе и возвращает ярлык в PDF‑файле.  Чтобы на ярлыке отображался внешний идентификатор заказа, передайте его в методе [POST v2/campaigns/{campaignId}/orders/{orderId}/external-id](../../reference/orders/updateExternalOrderId.md).  {% include notitle [limit](../../_auto/method_limits/generateOrderLabel.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.
$shipment_id = 56; // int | { % note warning \"Параметр больше не используется\" % }  Передайте любое число, чтобы получился корректный URL.  { % endnote % }  Идентификатор грузового места.
$box_id = 56; // int | Идентификатор коробки.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PageFormatType(); // \OpenAPI\Client\Model\PageFormatType | Настройка размещения ярлыков на странице. Если параметра нет, возвращается PDF с ярлыками формата :no-translate[A7].

try {
    $result = $apiInstance->generateOrderLabel($campaign_id, $order_id, $shipment_id, $box_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateOrderLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **shipment_id** | **int**| { % note warning \&quot;Параметр больше не используется\&quot; % }  Передайте любое число, чтобы получился корректный URL.  { % endnote % }  Идентификатор грузового места. | |
| **box_id** | **int**| Идентификатор коробки. | |
| **format** | [**\OpenAPI\Client\Model\PageFormatType**](../Model/.md)| Настройка размещения ярлыков на странице. Если параметра нет, возвращается PDF с ярлыками формата :no-translate[A7]. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateOrderLabels()`

```php
generateOrderLabels($campaign_id, $order_id, $format): \SplFileObject
```

Готовые ярлыки‑наклейки на все коробки в одном заказе

{% include notitle [access](../../_auto/method_scopes/generateOrderLabels.md) %}  Возвращает PDF-файл с ярлыками, которые нужно наклеить на коробки перед отгрузкой. Подробно о том, зачем они нужны и как выглядят, рассказано [в Справке Маркета для продавцов](https://yandex.ru/support/marketplace/orders/fbs/packaging/marking.html).  На вход нужно передать идентификатор заказа и один необязательный параметр, который управляет версткой PDF-файла.  Чтобы на ярлыке отображался внешний идентификатор заказа, передайте его в методе [POST v2/campaigns/{campaignId}/orders/{orderId}/external-id](../../reference/orders/updateExternalOrderId.md).  {% include notitle [limit](../../_auto/method_limits/generateOrderLabels.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PageFormatType(); // \OpenAPI\Client\Model\PageFormatType | Настройка размещения ярлыков на странице. Если параметра нет, возвращается PDF с ярлыками формата :no-translate[A7].

try {
    $result = $apiInstance->generateOrderLabels($campaign_id, $order_id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateOrderLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **format** | [**\OpenAPI\Client\Model\PageFormatType**](../Model/.md)| Настройка размещения ярлыков на странице. Если параметра нет, возвращается PDF с ярлыками формата :no-translate[A7]. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateSalesGeographyReport()`

```php
generateSalesGeographyReport($generate_sales_geography_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по географии продаж

{% include notitle [access](../../_auto/method_scopes/generateSalesGeographyReport.md) %}  Запускает генерацию отчета по географии продаж. [Что это за отчет](https://yandex.ru/support/marketplace/ru/analytics/sales-geography)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/locality/locality_offers_report_v2.md) %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-400-days.md) %}  {% include notitle [limit](../../_auto/method_limits/generateSalesGeographyReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_sales_geography_request = new \OpenAPI\Client\Model\GenerateSalesGeographyRequest(); // \OpenAPI\Client\Model\GenerateSalesGeographyRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateSalesGeographyReport($generate_sales_geography_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateSalesGeographyReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_sales_geography_request** | [**\OpenAPI\Client\Model\GenerateSalesGeographyRequest**](../Model/GenerateSalesGeographyRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateShelfsStatisticsReport()`

```php
generateShelfsStatisticsReport($generate_shelfs_statistics_request, $format, $source_type): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по полкам

{% include notitle [access](../../_auto/method_scopes/generateShelfsStatisticsReport.md) %}  Запускает генерацию сводного отчета по полкам — рекламным блокам с баннером или видео и набором товаров. {% if audience == \"partner\" %}Подробнее о них читайте [в Справке Маркета для продавцов](https://yandex.ru/support2/marketplace/ru/marketing/shelf).{% endif %}  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/incuts/shelfs_statistics.md) %}  {% if audience != \"advertiser\" %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-400-days.md) %}  {% endif %}  {% include notitle [limit](../../_auto/method_limits/generateShelfsStatisticsReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_shelfs_statistics_request = new \OpenAPI\Client\Model\GenerateShelfsStatisticsRequest(); // \OpenAPI\Client\Model\GenerateShelfsStatisticsRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.
$source_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SourceType(); // \OpenAPI\Client\Model\SourceType | Признак типа кабинета, от имени которого вызывается метод: {% if audience == \"partner\" %}  - `SELLER` — продавец.  {% endif %}  - `ADVERTISER` — рекламодатель.  {% if audience == \"advertiser\" %}  {% note info \"Обязательно указывайте sourceType=ADVERTISER в каждом запросе.\" %}     {% endnote %}  {% endif %}

try {
    $result = $apiInstance->generateShelfsStatisticsReport($generate_shelfs_statistics_request, $format, $source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateShelfsStatisticsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_shelfs_statistics_request** | [**\OpenAPI\Client\Model\GenerateShelfsStatisticsRequest**](../Model/GenerateShelfsStatisticsRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |
| **source_type** | [**\OpenAPI\Client\Model\SourceType**](../Model/.md)| Признак типа кабинета, от имени которого вызывается метод: {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  - &#x60;SELLER&#x60; — продавец.  {% endif %}  - &#x60;ADVERTISER&#x60; — рекламодатель.  {% if audience &#x3D;&#x3D; \&quot;advertiser\&quot; %}  {% note info \&quot;Обязательно указывайте sourceType&#x3D;ADVERTISER в каждом запросе.\&quot; %}     {% endnote %}  {% endif %} | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateShowsBoostReport()`

```php
generateShowsBoostReport($generate_shows_boost_request, $format, $source_type): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по бусту показов

{% include notitle [access](../../_auto/method_scopes/generateShowsBoostReport.md) %}  Запускает генерацию сводного отчета по бусту показов за заданный период. {% if audience == \"partner\" %}[Что такое буст показов](https://yandex.ru/support/marketplace/ru/marketing/boost-shows){% endif %}  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports]({{ report-columns-shows-boost }}) %}  {% if audience != \"advertiser\" %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-400-days.md) %}  {% endif %}  {% include notitle [limit](../../_auto/method_limits/generateShowsBoostReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_shows_boost_request = new \OpenAPI\Client\Model\GenerateShowsBoostRequest(); // \OpenAPI\Client\Model\GenerateShowsBoostRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.
$source_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SourceType(); // \OpenAPI\Client\Model\SourceType | Признак типа кабинета, от имени которого вызывается метод: {% if audience == \"partner\" %}  - `SELLER` — продавец.  {% endif %}  - `ADVERTISER` — рекламодатель.  {% if audience == \"advertiser\" %}  {% note info \"Обязательно указывайте sourceType=ADVERTISER в каждом запросе.\" %}     {% endnote %}  {% endif %}

try {
    $result = $apiInstance->generateShowsBoostReport($generate_shows_boost_request, $format, $source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateShowsBoostReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_shows_boost_request** | [**\OpenAPI\Client\Model\GenerateShowsBoostRequest**](../Model/GenerateShowsBoostRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |
| **source_type** | [**\OpenAPI\Client\Model\SourceType**](../Model/.md)| Признак типа кабинета, от имени которого вызывается метод: {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  - &#x60;SELLER&#x60; — продавец.  {% endif %}  - &#x60;ADVERTISER&#x60; — рекламодатель.  {% if audience &#x3D;&#x3D; \&quot;advertiser\&quot; %}  {% note info \&quot;Обязательно указывайте sourceType&#x3D;ADVERTISER в каждом запросе.\&quot; %}     {% endnote %}  {% endif %} | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateShowsSalesReport()`

```php
generateShowsSalesReport($generate_shows_sales_report_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет «Аналитика продаж»

{% include notitle [access](../../_auto/method_scopes/generateShowsSalesReport.md) %}  Запускает генерацию отчета «Аналитика продаж» за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/analytics/shows-sales.html)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/masterstat/sales_funnel_by_created_at.md) %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-400-days.md) %}  {% include notitle [limit](../../_auto/method_limits/generateShowsSalesReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_shows_sales_report_request = new \OpenAPI\Client\Model\GenerateShowsSalesReportRequest(); // \OpenAPI\Client\Model\GenerateShowsSalesReportRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateShowsSalesReport($generate_shows_sales_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateShowsSalesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_shows_sales_report_request** | [**\OpenAPI\Client\Model\GenerateShowsSalesReportRequest**](../Model/GenerateShowsSalesReportRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateStocksOnWarehousesReport()`

```php
generateStocksOnWarehousesReport($generate_stocks_on_warehouses_report_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по остаткам на складах

{% include notitle [access](../../_auto/method_scopes/generateStocksOnWarehousesReport.md) %}  Запускает генерацию отчета по остаткам на складах. [Что это за отчет](https://yandex.ru/support/marketplace/ru/storage/logistics#remains-history)  **Какая информация вернется:**  * Для моделей FBY и LaaS, если указать `campaignId`, — об остатках на складах Маркета. * Для остальных моделей, если указать `campaignId`, — об остатках на соответствующем складе магазина. * Для остальных моделей, если указать `businessId`, — об остатках на всех складах магазинов в кабинете, кроме FBY и LaaS. Используйте фильтр `campaignIds`, чтобы указать определенные магазины.  ⚠️ Не передавайте одновременно `campaignId` и `businessId`.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% list tabs %}  - Склад Маркета    {% include notitle [reports](../../_auto/reports/stocks/stocks_on_warehouses.md) %}  - Склад магазина    {% include notitle [reports](../../_auto/reports/offers/mass/mass_shared_stocks_business_csv_config.md) %}  - Все склады магазинов в кабинете, кроме FBY и LaaS    {% include notitle [reports](../../_auto/reports/offers/stocks_business_config.md) %}  {% endlist %}  {% include notitle [limit](../../_auto/method_limits/generateStocksOnWarehousesReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_stocks_on_warehouses_report_request = new \OpenAPI\Client\Model\GenerateStocksOnWarehousesReportRequest(); // \OpenAPI\Client\Model\GenerateStocksOnWarehousesReportRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateStocksOnWarehousesReport($generate_stocks_on_warehouses_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateStocksOnWarehousesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_stocks_on_warehouses_report_request** | [**\OpenAPI\Client\Model\GenerateStocksOnWarehousesReportRequest**](../Model/GenerateStocksOnWarehousesReportRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateUnitedMarketplaceServicesReport()`

```php
generateUnitedMarketplaceServicesReport($generate_united_marketplace_services_report_request, $format, $language): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по стоимости услуг

{% include notitle [access](../../_auto/method_scopes/generateUnitedMarketplaceServicesReport.md) %}  Запускает генерацию отчета по стоимости услуг за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/ru/accounting/transactions#reports)  Тип отчета зависит от того, какие поля заполнены в запросе:  |**Тип отчета**               |**Какие поля нужны**             | |-----------------------------|---------------------------------| |По дате начисления услуги    |`dateFrom` и `dateTo`            | |По дате формирования акта    |`year` и `month`                 |  Заказать отчеты обоих типов одним запросом нельзя.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/united/services/generator/united_marketplace_services.md) %}  {% include notitle [limit](../../_auto/method_limits/generateUnitedMarketplaceServicesReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_united_marketplace_services_report_request = new \OpenAPI\Client\Model\GenerateUnitedMarketplaceServicesReportRequest(); // \OpenAPI\Client\Model\GenerateUnitedMarketplaceServicesReportRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.
$language = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportLanguageType(); // \OpenAPI\Client\Model\ReportLanguageType | Язык отчета или документа.

try {
    $result = $apiInstance->generateUnitedMarketplaceServicesReport($generate_united_marketplace_services_report_request, $format, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateUnitedMarketplaceServicesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_united_marketplace_services_report_request** | [**\OpenAPI\Client\Model\GenerateUnitedMarketplaceServicesReportRequest**](../Model/GenerateUnitedMarketplaceServicesReportRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |
| **language** | [**\OpenAPI\Client\Model\ReportLanguageType**](../Model/.md)| Язык отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateUnitedNettingReport()`

```php
generateUnitedNettingReport($generate_united_netting_report_request, $format, $language): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по платежам

{% include notitle [access](../../_auto/method_scopes/generateUnitedNettingReport.md) %}  Запускает генерацию отчета по платежам за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/ru/accounting/transactions#all-pay)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  Тип отчета зависит от того, какие поля заполнены в запросе:  #| || **Тип отчета** | **Какие поля нужны** | **Комментарий** || || О платежах за период | `dateFrom` и `dateTo` |   В отчет попадают все платежи, которые были выплачены и начислены в выбранный период.    Пример: если перевод выполнен 31 августа и зачислен 1 сентября, он попадет в отчет за оба месяца. || || О платежном поручении | `bankOrderId` и `bankOrderDateTime` |—|| || [О баллах Маркета](*баллы_маркета) | `monthOfYear` |—|| |#  Заказать отчеты нескольких типов одним запросом нельзя.  {% include notitle [reports](../../_auto/reports/united/netting/generator/united_netting.md) %}  {% include notitle [limit](../../_auto/method_limits/generateUnitedNettingReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_united_netting_report_request = new \OpenAPI\Client\Model\GenerateUnitedNettingReportRequest(); // \OpenAPI\Client\Model\GenerateUnitedNettingReportRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.
$language = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportLanguageType(); // \OpenAPI\Client\Model\ReportLanguageType | Язык отчета или документа.

try {
    $result = $apiInstance->generateUnitedNettingReport($generate_united_netting_report_request, $format, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateUnitedNettingReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_united_netting_report_request** | [**\OpenAPI\Client\Model\GenerateUnitedNettingReportRequest**](../Model/GenerateUnitedNettingReportRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |
| **language** | [**\OpenAPI\Client\Model\ReportLanguageType**](../Model/.md)| Язык отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateUnitedOrdersReport()`

```php
generateUnitedOrdersReport($generate_united_orders_request, $format, $language): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по заказам

{% include notitle [access](../../_auto/method_scopes/generateUnitedOrdersReport.md) %}  Запускает генерацию отчета по заказам за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/ru/accounting/transactions#get-report)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/united/orders/generator/united_orders.md) %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-unchanged.md) %}  {% include notitle [limit](../../_auto/method_limits/generateUnitedOrdersReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_united_orders_request = new \OpenAPI\Client\Model\GenerateUnitedOrdersRequest(); // \OpenAPI\Client\Model\GenerateUnitedOrdersRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.
$language = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportLanguageType(); // \OpenAPI\Client\Model\ReportLanguageType | Язык отчета или документа.

try {
    $result = $apiInstance->generateUnitedOrdersReport($generate_united_orders_request, $format, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateUnitedOrdersReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_united_orders_request** | [**\OpenAPI\Client\Model\GenerateUnitedOrdersRequest**](../Model/GenerateUnitedOrdersRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |
| **language** | [**\OpenAPI\Client\Model\ReportLanguageType**](../Model/.md)| Язык отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateUnitedReturnsReport()`

```php
generateUnitedReturnsReport($generate_united_returns_request, $format): \OpenAPI\Client\Model\GenerateReportResponse
```

Отчет по невыкупам и возвратам

{% include notitle [access](../../_auto/method_scopes/generateUnitedReturnsReport.md) %}  Запускает генерацию сводного отчета по невыкупам и возвратам за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/ru/orders/returns/logistic#rejected-orders)  Отчет содержит информацию о невыкупах и возвратах за указанный период, а также о тех, которые готовы к выдаче.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [reports](../../_auto/reports/united/returns/generator/united_returns.md) %}  {% include notitle [tariff-period](../../_includes/common/report-data-period-unchanged.md) %}  {% include notitle [limit](../../_auto/method_limits/generateUnitedReturnsReport.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_united_returns_request = new \OpenAPI\Client\Model\GenerateUnitedReturnsRequest(); // \OpenAPI\Client\Model\GenerateUnitedReturnsRequest
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReportFormatType(); // \OpenAPI\Client\Model\ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateUnitedReturnsReport($generate_united_returns_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->generateUnitedReturnsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_united_returns_request** | [**\OpenAPI\Client\Model\GenerateUnitedReturnsRequest**](../Model/GenerateUnitedReturnsRequest.md)|  | |
| **format** | [**\OpenAPI\Client\Model\ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuthTokenInfo()`

```php
getAuthTokenInfo(): \OpenAPI\Client\Model\GetTokenInfoResponse
```

Получение информации о токене авторизации

{% include notitle [access](../../_auto/method_scopes/getAuthTokenInfo.md) %}  {% note info \"Метод доступен только для Api-Key-токена.\" %}     {% endnote %}  Возвращает информацию о переданном токене авторизации.  {% include notitle [limit](../../_auto/method_limits/getAuthTokenInfo.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAuthTokenInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getAuthTokenInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetTokenInfoResponse**](../Model/GetTokenInfoResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBidsInfoForBusiness()`

```php
getBidsInfoForBusiness($business_id, $page_token, $limit, $get_bids_info_request): \OpenAPI\Client\Model\GetBidsInfoResponse
```

Информация об установленных ставках

{% include notitle [access](../../_auto/method_scopes/getBidsInfoForBusiness.md) %}  Возвращает значения ставок для заданных товаров.  {% note warning \"Получить информацию по кампаниям, созданным в кабинете, не получится\" %}  В ответе возвращаются значения только тех ставок, которые вы установили через запрос [PUT v2/businesses/{businessId}/bids](../../reference/bids/putBidsForBusiness.md).  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/getBidsInfoForBusiness.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 250; // int | {{ limit-truncate-param-description }}
$get_bids_info_request = new \OpenAPI\Client\Model\GetBidsInfoRequest(); // \OpenAPI\Client\Model\GetBidsInfoRequest | description

try {
    $result = $apiInstance->getBidsInfoForBusiness($business_id, $page_token, $limit, $get_bids_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getBidsInfoForBusiness: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-truncate-param-description }} | [optional] [default to 250] |
| **get_bids_info_request** | [**\OpenAPI\Client\Model\GetBidsInfoRequest**](../Model/GetBidsInfoRequest.md)| description | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetBidsInfoResponse**](../Model/GetBidsInfoResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBidsRecommendations()`

```php
getBidsRecommendations($business_id, $get_bids_recommendations_request): \OpenAPI\Client\Model\GetBidsRecommendationsResponse
```

Рекомендованные ставки для заданных товаров

{% include notitle [access](../../_auto/method_scopes/getBidsRecommendations.md) %}  Возвращает рекомендованные ставки для заданных товаров, что обеспечивает вашим предложениям определенную долю показов, и дополнительные инструменты продвижения.  Для одного товара может возвращаться одна рекомендованная ставка или несколько. Во втором случае разные ставки предназначены для достижения разной доли показов и получения дополнительных инструментов продвижения.  Если товар только добавлен в каталог, но пока не продается, рекомендованной ставки для него не будет.  В одном запросе может быть максимум 1500 товаров.  {% include notitle [limit](../../_auto/method_limits/getBidsRecommendations.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$get_bids_recommendations_request = new \OpenAPI\Client\Model\GetBidsRecommendationsRequest(); // \OpenAPI\Client\Model\GetBidsRecommendationsRequest | description.

try {
    $result = $apiInstance->getBidsRecommendations($business_id, $get_bids_recommendations_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getBidsRecommendations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **get_bids_recommendations_request** | [**\OpenAPI\Client\Model\GetBidsRecommendationsRequest**](../Model/GetBidsRecommendationsRequest.md)| description. | |

### Return type

[**\OpenAPI\Client\Model\GetBidsRecommendationsResponse**](../Model/GetBidsRecommendationsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessOrders()`

```php
getBusinessOrders($business_id, $get_business_orders_request, $page_token, $limit): \OpenAPI\Client\Model\GetBusinessOrdersResponse
```

Информация о заказах в кабинете

{% include notitle [access](../../_auto/method_scopes/getBusinessOrders.md) %}  Возвращает информацию о заказах в кабинете. Запрос можно использовать для отслеживания заказов и их статусов.  {% note tip \"Вы также можете настроить API-уведомления\" %}  Маркет отправит вам [запрос](../../push-notifications/reference/sendNotification.md), когда появится новый заказ или изменится его статус. А полную информацию можно получить с помощью этого метода.  [{#T}](../../push-notifications/index.md)  {% endnote %}  Доступна фильтрация по параметрам:  * дата оформления заказа;  * дата и время обновления заказа;  * дата отгрузки;  * статусы заказов (`statuses`);  * этапы обработки или причины отмены (`substatuses`);  * идентификаторы кампаний;  * идентификаторы заказов;  * внешние идентификаторы заказов;  * тип заказа (настоящий или тестовый);  * модели размещения;  * наличие запросов от покупателей на отмену заказа.  Максимальный диапазон дат за один запрос — 30 дней (передается в параметрах `fromDate` и `toDate`). Если их не передать, возвращается информация за последние 30 дней.  Результаты возвращаются постранично. Для навигации используйте параметры `pageToken` и `limit`.  Получить более подробную информацию о покупателе и его номере телефона можно с помощью запроса [GET v2/campaigns/{campaignId}/orders/{orderId}/buyer](../../reference/order-delivery/getOrderBuyerInfo.md).  {% include notitle [limit](../../_auto/method_limits/getBusinessOrders.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$get_business_orders_request = new \OpenAPI\Client\Model\GetBusinessOrdersRequest(); // \OpenAPI\Client\Model\GetBusinessOrdersRequest | Параметры фильтрации заказов.
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 50; // int | {{ limit-truncate-param-description }}

try {
    $result = $apiInstance->getBusinessOrders($business_id, $get_business_orders_request, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getBusinessOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **get_business_orders_request** | [**\OpenAPI\Client\Model\GetBusinessOrdersRequest**](../Model/GetBusinessOrdersRequest.md)| Параметры фильтрации заказов. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-truncate-param-description }} | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\GetBusinessOrdersResponse**](../Model/GetBusinessOrdersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessQuarantineOffers()`

```php
getBusinessQuarantineOffers($business_id, $get_quarantine_offers_request, $page_token, $limit): \OpenAPI\Client\Model\GetQuarantineOffersResponse
```

Список товаров, находящихся в карантине по цене в кабинете

{% include notitle [access](../../_auto/method_scopes/getBusinessQuarantineOffers.md) %}  Возвращает список товаров, которые находятся в карантине по цене, установленной для всех магазинов кабинета.  Проверьте цену каждого из товаров, который попал в карантин. Если ошибки нет и цена правильная, подтвердите ее с помощью запроса [POST v2/businesses/{businessId}/price-quarantine/confirm](../../reference/price-quarantine/confirmBusinessPrices.md). Если цена в самом деле ошибочная, установите верную с помощью запроса [POST v2/businesses/{businessId}/offer-prices/updates](../../reference/prices/updateBusinessPrices.md).  {% note info \"Что такое карантин?\" %}  Товар попадает в карантин, если его цена меняется слишком резко или слишком сильно отличается от рыночной. [Подробнее](https://yandex.ru/support/marketplace/assortment/operations/prices.html#quarantine)  {% endnote %}  В запросе можно использовать фильтры.  Результаты возвращаются постранично.  {% include notitle [limit](../../_auto/method_limits/getBusinessQuarantineOffers.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$get_quarantine_offers_request = new \OpenAPI\Client\Model\GetQuarantineOffersRequest(); // \OpenAPI\Client\Model\GetQuarantineOffersRequest
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 100; // int | {{ limit-param-description }}

try {
    $result = $apiInstance->getBusinessQuarantineOffers($business_id, $get_quarantine_offers_request, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getBusinessQuarantineOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **get_quarantine_offers_request** | [**\OpenAPI\Client\Model\GetQuarantineOffersRequest**](../Model/GetQuarantineOffersRequest.md)|  | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 100] |

### Return type

[**\OpenAPI\Client\Model\GetQuarantineOffersResponse**](../Model/GetQuarantineOffersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessSettings()`

```php
getBusinessSettings($business_id): \OpenAPI\Client\Model\GetBusinessSettingsResponse
```

Настройки кабинета

{% include notitle [access](../../_auto/method_scopes/getBusinessSettings.md) %}  Возвращает информацию о настройках кабинета, идентификатор которого указан в запросе.  {% include notitle [limit](../../_auto/method_limits/getBusinessSettings.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}

try {
    $result = $apiInstance->getBusinessSettings($business_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getBusinessSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |

### Return type

[**\OpenAPI\Client\Model\GetBusinessSettingsResponse**](../Model/GetBusinessSettingsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaign()`

```php
getCampaign($campaign_id): \OpenAPI\Client\Model\GetCampaignResponse
```

Информация о магазине

{% include notitle [access](../../_auto/method_scopes/getCampaign.md) %}  Возвращает информацию о магазине.  {% include notitle [limit](../../_auto/method_limits/getCampaign.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.

try {
    $result = $apiInstance->getCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |

### Return type

[**\OpenAPI\Client\Model\GetCampaignResponse**](../Model/GetCampaignResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignOffers()`

```php
getCampaignOffers($campaign_id, $get_campaign_offers_request, $page_token, $limit): \OpenAPI\Client\Model\GetCampaignOffersResponse
```

Информация о товарах, которые размещены в заданном магазине

{% include notitle [access](../../_auto/method_scopes/getCampaignOffers.md) %}  Возвращает список товаров, которые размещены в заданном магазине. Для каждого товара указываются параметры размещения.  {% include notitle [limit](../../_auto/method_limits/getCampaignOffers.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$get_campaign_offers_request = new \OpenAPI\Client\Model\GetCampaignOffersRequest(); // \OpenAPI\Client\Model\GetCampaignOffersRequest
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 100; // int | {{ limit-param-description }}

try {
    $result = $apiInstance->getCampaignOffers($campaign_id, $get_campaign_offers_request, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getCampaignOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **get_campaign_offers_request** | [**\OpenAPI\Client\Model\GetCampaignOffersRequest**](../Model/GetCampaignOffersRequest.md)|  | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 100] |

### Return type

[**\OpenAPI\Client\Model\GetCampaignOffersResponse**](../Model/GetCampaignOffersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignQuarantineOffers()`

```php
getCampaignQuarantineOffers($campaign_id, $get_quarantine_offers_request, $page_token, $limit): \OpenAPI\Client\Model\GetQuarantineOffersResponse
```

Список товаров, находящихся в карантине по цене в магазине

{% include notitle [access](../../_auto/method_scopes/getCampaignQuarantineOffers.md) %}  Возвращает список товаров, которые находятся в карантине по цене, установленной в заданном магазине.  Проверьте цену каждого из товаров, который попал в карантин. Если ошибки нет и цена правильная, подтвердите ее с помощью запроса [POST v2/campaigns/{campaignId}/price-quarantine/confirm](../../reference/price-quarantine/confirmCampaignPrices.md). Если цена в самом деле ошибочная, установите верную с помощью запроса [POST v2/campaigns/{campaignId}/offer-prices/updates](../../reference/prices/updatePrices.md).  {% note info \"Что такое карантин?\" %}  Товар попадает в карантин, если его цена меняется слишком резко или слишком сильно отличается от рыночной. [Подробнее](https://yandex.ru/support/marketplace/assortment/operations/prices.html#quarantine)  {% endnote %}  В запросе можно использовать фильтры.  Результаты возвращаются постранично.  {% include notitle [limit](../../_auto/method_limits/getCampaignQuarantineOffers.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$get_quarantine_offers_request = new \OpenAPI\Client\Model\GetQuarantineOffersRequest(); // \OpenAPI\Client\Model\GetQuarantineOffersRequest
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 100; // int | {{ limit-param-description }}

try {
    $result = $apiInstance->getCampaignQuarantineOffers($campaign_id, $get_quarantine_offers_request, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getCampaignQuarantineOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **get_quarantine_offers_request** | [**\OpenAPI\Client\Model\GetQuarantineOffersRequest**](../Model/GetQuarantineOffersRequest.md)|  | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 100] |

### Return type

[**\OpenAPI\Client\Model\GetQuarantineOffersResponse**](../Model/GetQuarantineOffersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignSettings()`

```php
getCampaignSettings($campaign_id): \OpenAPI\Client\Model\GetCampaignSettingsResponse
```

Настройки магазина

{% include notitle [access](../../_auto/method_scopes/getCampaignSettings.md) %}  Возвращает информацию о настройках магазина, идентификатор которого указан в запросе.  {% include notitle [limit](../../_auto/method_limits/getCampaignSettings.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.

try {
    $result = $apiInstance->getCampaignSettings($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getCampaignSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |

### Return type

[**\OpenAPI\Client\Model\GetCampaignSettingsResponse**](../Model/GetCampaignSettingsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaigns()`

```php
getCampaigns($page_token, $limit, $page, $page_size): \OpenAPI\Client\Model\GetCampaignsResponse
```

Список магазинов пользователя

{% include notitle [access](../../_auto/method_scopes/getCampaigns.md) %}  **Для Api-Key-токена:** возвращает список магазинов в кабинете, для которого выдан токен. Нельзя получить список только подагентских магазинов.  **Для OAuth-токена:** возвращает список магазинов, к которым имеет доступ пользователь — владелец токена авторизации, использованного в запросе. Для агентских пользователей список состоит из подагентских магазинов.  {% note warning \"Ограничение для параметра `pageSize`\" %}  Не передавайте значение больше 100.  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/getCampaigns.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 56; // int | {{ limit-param-description }}  {% note warning %}  У данного лимита нет значения по умолчанию.  {% endnote %}
$page = 1; // int | {% note warning \"Устаревший параметр\" %}  Вместо `page` и `pageSize` используйте пагинацию по `pageToken` и `limit`.  [Подробнее о типах пагинации и их использовании](../../concepts/pagination.md)  {% endnote %}  Номер страницы результатов.  Используется вместе с параметром `pageSize`.
$page_size = 56; // int | {% note warning \"Устаревший параметр\" %}  Вместо `page` и `pageSize` используйте пагинацию по `pageToken` и `limit`.  [Подробнее о типах пагинации и их использовании](../../concepts/pagination.md)  {% endnote %}  Размер страницы.  Используется вместе с параметром `page`.

try {
    $result = $apiInstance->getCampaigns($page_token, $limit, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }}  {% note warning %}  У данного лимита нет значения по умолчанию.  {% endnote %} | [optional] |
| **page** | **int**| {% note warning \&quot;Устаревший параметр\&quot; %}  Вместо &#x60;page&#x60; и &#x60;pageSize&#x60; используйте пагинацию по &#x60;pageToken&#x60; и &#x60;limit&#x60;.  [Подробнее о типах пагинации и их использовании](../../concepts/pagination.md)  {% endnote %}  Номер страницы результатов.  Используется вместе с параметром &#x60;pageSize&#x60;. | [optional] [default to 1] |
| **page_size** | **int**| {% note warning \&quot;Устаревший параметр\&quot; %}  Вместо &#x60;page&#x60; и &#x60;pageSize&#x60; используйте пагинацию по &#x60;pageToken&#x60; и &#x60;limit&#x60;.  [Подробнее о типах пагинации и их использовании](../../concepts/pagination.md)  {% endnote %}  Размер страницы.  Используется вместе с параметром &#x60;page&#x60;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCampaignsResponse**](../Model/GetCampaignsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoriesMaxSaleQuantum()`

```php
getCategoriesMaxSaleQuantum($get_categories_max_sale_quantum_request): \OpenAPI\Client\Model\GetCategoriesMaxSaleQuantumResponse
```

Лимит на установку кванта продажи и минимального количества товаров в заказе

{% include notitle [access](../../_auto/method_scopes/getCategoriesMaxSaleQuantum.md) %}  Возвращает лимит на установку [кванта](*quantum) и минимального количества товаров в заказе, которые вы можете задать для товаров указанных категорий.  Если вы передадите значение кванта или минимального количества товаров выше установленного Маркетом ограничения, товар будет скрыт с витрины.  Подробнее о том, как продавать товары по несколько штук, читайте [в Справке Маркета для продавцов](https://yandex.ru/support2/marketplace/ru/assortment/fields/quantum).  {% include notitle [limit](../../_auto/method_limits/getCategoriesMaxSaleQuantum.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_categories_max_sale_quantum_request = new \OpenAPI\Client\Model\GetCategoriesMaxSaleQuantumRequest(); // \OpenAPI\Client\Model\GetCategoriesMaxSaleQuantumRequest

try {
    $result = $apiInstance->getCategoriesMaxSaleQuantum($get_categories_max_sale_quantum_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getCategoriesMaxSaleQuantum: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_categories_max_sale_quantum_request** | [**\OpenAPI\Client\Model\GetCategoriesMaxSaleQuantumRequest**](../Model/GetCategoriesMaxSaleQuantumRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GetCategoriesMaxSaleQuantumResponse**](../Model/GetCategoriesMaxSaleQuantumResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoriesTree()`

```php
getCategoriesTree($get_categories_request): \OpenAPI\Client\Model\GetCategoriesResponse
```

Дерево категорий

{% include notitle [access](../../_auto/method_scopes/getCategoriesTree.md) %}  Возвращает дерево категорий Маркета.  {% include notitle [limit](../../_auto/method_limits/getCategoriesTree.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_categories_request = new \OpenAPI\Client\Model\GetCategoriesRequest(); // \OpenAPI\Client\Model\GetCategoriesRequest

try {
    $result = $apiInstance->getCategoriesTree($get_categories_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getCategoriesTree: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_categories_request** | [**\OpenAPI\Client\Model\GetCategoriesRequest**](../Model/GetCategoriesRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCategoriesResponse**](../Model/GetCategoriesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoryContentParameters()`

```php
getCategoryContentParameters($category_id, $business_id): \OpenAPI\Client\Model\GetCategoryContentParametersResponse
```

Списки характеристик товаров по категориям

{% include notitle [access](../../_auto/method_scopes/getCategoryContentParameters.md) %}  Возвращает список характеристик с допустимыми значениями для заданной [листовой категории](*list-category).  Поля в ответе определяют правила передачи характеристики в методах: - [POST v2/businesses/{businessId}/offer-mappings/update](../../reference/business-offer-mappings/updateOfferMappings.md) - [POST v2/businesses/{businessId}/offer-cards/update](../../reference/content/updateOfferContent.md)  {% include notitle [limit](../../_auto/method_limits/getCategoryContentParameters.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 56; // int | Идентификатор категории на Маркете.  Чтобы узнать идентификатор категории, к которой относится интересующий вас товар, воспользуйтесь запросом [POST v2/categories/tree](../../reference/categories/getCategoriesTree.md).
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  Передайте параметр, чтобы получить характеристики, которые являются особенностями варианта товара в данном кабинете.

try {
    $result = $apiInstance->getCategoryContentParameters($category_id, $business_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getCategoryContentParameters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **int**| Идентификатор категории на Маркете.  Чтобы узнать идентификатор категории, к которой относится интересующий вас товар, воспользуйтесь запросом [POST v2/categories/tree](../../reference/categories/getCategoriesTree.md). | |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  Передайте параметр, чтобы получить характеристики, которые являются особенностями варианта товара в данном кабинете. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCategoryContentParametersResponse**](../Model/GetCategoryContentParametersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChat()`

```php
getChat($business_id, $chat_id): \OpenAPI\Client\Model\GetChatResponse
```

Получение чата по идентификатору

{% include notitle [access](../../_auto/method_scopes/getChat.md) %}  Возвращает чат по его идентификатору.  {% note tip \"Подключите API-уведомления\" %}  Маркет отправит вам запрос [POST notification](../../push-notifications/reference/sendNotification.md), когда появится новый чат или сообщение.  [{#T}](../../push-notifications/index.md)  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/getChat.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$chat_id = 56; // int | Идентификатор чата.

try {
    $result = $apiInstance->getChat($business_id, $chat_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **chat_id** | **int**| Идентификатор чата. | |

### Return type

[**\OpenAPI\Client\Model\GetChatResponse**](../Model/GetChatResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChatHistory()`

```php
getChatHistory($business_id, $chat_id, $get_chat_history_request, $page_token, $limit): \OpenAPI\Client\Model\GetChatHistoryResponse
```

Получение истории сообщений в чате

{% include notitle [access](../../_auto/method_scopes/getChatHistory.md) %}  Возвращает историю сообщений в чате с покупателем.  {% include notitle [limit](../../_auto/method_limits/getChatHistory.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$chat_id = 56; // int | Идентификатор чата.
$get_chat_history_request = new \OpenAPI\Client\Model\GetChatHistoryRequest(); // \OpenAPI\Client\Model\GetChatHistoryRequest | description
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 50; // int | {{ limit-param-description }}

try {
    $result = $apiInstance->getChatHistory($business_id, $chat_id, $get_chat_history_request, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getChatHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **chat_id** | **int**| Идентификатор чата. | |
| **get_chat_history_request** | [**\OpenAPI\Client\Model\GetChatHistoryRequest**](../Model/GetChatHistoryRequest.md)| description | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\GetChatHistoryResponse**](../Model/GetChatHistoryResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChatMessage()`

```php
getChatMessage($business_id, $chat_id, $message_id): \OpenAPI\Client\Model\GetChatMessageResponse
```

Получение сообщения в чате

{% include notitle [access](../../_auto/method_scopes/getChatMessage.md) %}  Возвращает сообщение по его идентификатору.  {% note tip \"Подключите API-уведомления\" %}  Маркет отправит вам запрос [POST notification](../../push-notifications/reference/sendNotification.md), когда появится новый чат или сообщение.  [{#T}](../../push-notifications/index.md)  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/getChatMessage.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$chat_id = 56; // int | Идентификатор чата.
$message_id = 56; // int | Идентификатор сообщения.

try {
    $result = $apiInstance->getChatMessage($business_id, $chat_id, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getChatMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **chat_id** | **int**| Идентификатор чата. | |
| **message_id** | **int**| Идентификатор сообщения. | |

### Return type

[**\OpenAPI\Client\Model\GetChatMessageResponse**](../Model/GetChatMessageResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChats()`

```php
getChats($business_id, $get_chats_request, $page_token, $limit): \OpenAPI\Client\Model\GetChatsResponse
```

Получение доступных чатов

{% include notitle [access](../../_auto/method_scopes/getChats.md) %}  Возвращает чаты с покупателями.  {% note tip \"Подключите API-уведомления\" %}  Маркет отправит вам запрос [POST notification](../../push-notifications/reference/sendNotification.md), когда появится новый чат или сообщение.  [{#T}](../../push-notifications/index.md)  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/getChats.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$get_chats_request = new \OpenAPI\Client\Model\GetChatsRequest(); // \OpenAPI\Client\Model\GetChatsRequest | description
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 10; // int | {{ limit-param-description }}

try {
    $result = $apiInstance->getChats($business_id, $get_chats_request, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getChats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **get_chats_request** | [**\OpenAPI\Client\Model\GetChatsRequest**](../Model/GetChatsRequest.md)| description | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\Model\GetChatsResponse**](../Model/GetChatsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDefaultPrices()`

```php
getDefaultPrices($business_id, $page_token, $limit, $get_default_prices_request): \OpenAPI\Client\Model\GetDefaultPricesResponse
```

Просмотр цен на указанные товары во всех магазинах

{% include notitle [access](../../_auto/method_scopes/getDefaultPrices.md) %}  Возвращает список цен, которые вы установили для всех магазинов любым способом. Например, через API или с помощью Excel-шаблона.  О способах установки цен читайте [в Справке Маркета для продавцов](https://yandex.ru/support/marketplace/assortment/operations/prices.html).  {% include notitle [limit](../../_auto/method_limits/getDefaultPrices.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 250; // int | {{ limit-truncate-param-description }}
$get_default_prices_request = new \OpenAPI\Client\Model\GetDefaultPricesRequest(); // \OpenAPI\Client\Model\GetDefaultPricesRequest

try {
    $result = $apiInstance->getDefaultPrices($business_id, $page_token, $limit, $get_default_prices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getDefaultPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-truncate-param-description }} | [optional] [default to 250] |
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

## `getDeliveryServices()`

```php
getDeliveryServices(): \OpenAPI\Client\Model\GetDeliveryServicesResponse
```

Справочник служб доставки

{% include notitle [access](../../_auto/method_scopes/getDeliveryServices.md) %}  Возвращает справочник служб доставки: идентификаторы и наименования.  {% include notitle [limit](../../_auto/method_limits/getDeliveryServices.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDeliveryServices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getDeliveryServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetDeliveryServicesResponse**](../Model/GetDeliveryServicesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
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
    echo 'Exception when calling DbsApi->getGoodsFeedbackComments: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
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
    echo 'Exception when calling DbsApi->getGoodsFeedbacks: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
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
    echo 'Exception when calling DbsApi->getGoodsFeedbacksUrbanads: ', $e->getMessage(), PHP_EOL;
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

## `getGoodsQuestionAnswers()`

```php
getGoodsQuestionAnswers($business_id, $get_answers_request, $page_token, $limit): \OpenAPI\Client\Model\GetAnswersResponse
```

Получение ответов на вопрос

{% include notitle [access](../../_auto/method_scopes/getGoodsQuestionAnswers.md) %}  Возвращает ответы на вопрос о товаре по указанным фильтрам.  {% note tip \"Вы также можете настроить API-уведомления\" %}  Маркет отправит вам [запрос](../../push-notifications/reference/sendNotification.md), когда появится новый ответ или комментарий. А полную информацию о них можно получить с помощью этого метода.  [{#T}](../../push-notifications/index.md)  {% endnote %}  Результаты возвращаются постранично, одна страница содержит не более 50 ответов.  {% include notitle [limit](../../_auto/method_limits/getGoodsQuestionAnswers.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$get_answers_request = new \OpenAPI\Client\Model\GetAnswersRequest(); // \OpenAPI\Client\Model\GetAnswersRequest
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 25; // int | {{ limit-param-description }}

try {
    $result = $apiInstance->getGoodsQuestionAnswers($business_id, $get_answers_request, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getGoodsQuestionAnswers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **get_answers_request** | [**\OpenAPI\Client\Model\GetAnswersRequest**](../Model/GetAnswersRequest.md)|  | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 25] |

### Return type

[**\OpenAPI\Client\Model\GetAnswersResponse**](../Model/GetAnswersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGoodsQuestions()`

```php
getGoodsQuestions($business_id, $page_token, $limit, $get_questions_request): \OpenAPI\Client\Model\GetQuestionsResponse
```

Получение вопросов о товарах продавца

{% include notitle [access](../../_auto/method_scopes/getGoodsQuestions.md) %}  Возвращает вопросы о товарах продавца по указанным фильтрам.  {% note tip \"Вы также можете настроить API-уведомления\" %}  Маркет отправит вам [запрос](../../push-notifications/reference/sendNotification.md), когда появится новый вопрос. А полную информацию о нем можно получить с помощью этого метода.  [{#T}](../../push-notifications/index.md)  {% endnote %}  Результаты возвращаются постранично, одна страница содержит не более 50 вопросов.  {% include notitle [limit](../../_auto/method_limits/getGoodsQuestions.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 25; // int | {{ limit-param-description }}
$get_questions_request = new \OpenAPI\Client\Model\GetQuestionsRequest(); // \OpenAPI\Client\Model\GetQuestionsRequest

try {
    $result = $apiInstance->getGoodsQuestions($business_id, $page_token, $limit, $get_questions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getGoodsQuestions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 25] |
| **get_questions_request** | [**\OpenAPI\Client\Model\GetQuestionsRequest**](../Model/GetQuestionsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetQuestionsResponse**](../Model/GetQuestionsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGoodsStats()`

```php
getGoodsStats($campaign_id, $get_goods_stats_request): \OpenAPI\Client\Model\GetGoodsStatsResponse
```

Отчет по товарам

{% include notitle [access](../../_auto/method_scopes/getGoodsStats.md) %}  Возвращает подробный отчет по товарам, которые вы разместили на Маркете. С помощью отчета вы можете узнать, например, об остатках на складе, об условиях хранения ваших товаров и т. д.  {% include notitle [limit](../../_auto/method_limits/getGoodsStats.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$get_goods_stats_request = new \OpenAPI\Client\Model\GetGoodsStatsRequest(); // \OpenAPI\Client\Model\GetGoodsStatsRequest

try {
    $result = $apiInstance->getGoodsStats($campaign_id, $get_goods_stats_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getGoodsStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **get_goods_stats_request** | [**\OpenAPI\Client\Model\GetGoodsStatsRequest**](../Model/GetGoodsStatsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GetGoodsStatsResponse**](../Model/GetGoodsStatsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHiddenOffers()`

```php
getHiddenOffers($campaign_id, $offer_id, $page_token, $limit): \OpenAPI\Client\Model\GetHiddenOffersResponse
```

Информация о скрытых вами товарах

{% include notitle [access](../../_auto/method_scopes/getHiddenOffers.md) %}  Возвращает список скрытых вами товаров для заданного магазина.  В списке будут товары, скрытые любым способом — через API, с помощью YML-фида, в кабинете и так далее.  {% include notitle [limit](../../_auto/method_limits/getHiddenOffers.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$offer_id = array('offer_id_example'); // string[] | Идентификатор скрытого предложения.
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 250; // int | {{ limit-param-description }}

try {
    $result = $apiInstance->getHiddenOffers($campaign_id, $offer_id, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getHiddenOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **offer_id** | [**string[]**](../Model/string.md)| Идентификатор скрытого предложения. | [optional] |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 250] |

### Return type

[**\OpenAPI\Client\Model\GetHiddenOffersResponse**](../Model/GetHiddenOffersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfferCardsContentStatus()`

```php
getOfferCardsContentStatus($business_id, $page_token, $limit, $get_offer_cards_content_status_request): \OpenAPI\Client\Model\GetOfferCardsContentStatusResponse
```

Получение информации о заполненности карточек магазина

{% include notitle [access](../../_auto/method_scopes/getOfferCardsContentStatus.md) %}  Возвращает сведения о состоянии контента для заданных товаров:  * создана ли карточка товара и в каком она статусе; * рейтинг карточки — на сколько процентов она заполнена; * переданные характеристики товаров; * есть ли ошибки или предупреждения, связанные с контентом; * рекомендации по заполнению карточки.  Чтобы получить другие характеристики товаров, воспользуйтесь методом [POST v2/businesses/{businessId}/offer-mappings](../../reference/business-offer-mappings/getOfferMappings.md).  {% include notitle [limit](../../_auto/method_limits/getOfferCardsContentStatus.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 100; // int | {{ limit-param-description }}
$get_offer_cards_content_status_request = new \OpenAPI\Client\Model\GetOfferCardsContentStatusRequest(); // \OpenAPI\Client\Model\GetOfferCardsContentStatusRequest

try {
    $result = $apiInstance->getOfferCardsContentStatus($business_id, $page_token, $limit, $get_offer_cards_content_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getOfferCardsContentStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 100] |
| **get_offer_cards_content_status_request** | [**\OpenAPI\Client\Model\GetOfferCardsContentStatusRequest**](../Model/GetOfferCardsContentStatusRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetOfferCardsContentStatusResponse**](../Model/GetOfferCardsContentStatusResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfferMappings()`

```php
getOfferMappings($business_id, $page_token, $limit, $language, $get_offer_mappings_request): \OpenAPI\Client\Model\GetOfferMappingsResponse
```

Информация о товарах в каталоге

{% include notitle [access](../../_auto/method_scopes/getOfferMappings.md) %}  Возвращает список товаров в каталоге, их категории на Маркете и характеристики каждого товара.  Можно использовать тремя способами: * задать список интересующих SKU; * задать фильтр — в этом случае результаты возвращаются постранично; * не передавать тело запроса, чтобы получить список всех товаров в каталоге.  Чтобы получить категорийные характеристики товаров, воспользуйтесь методом [POST v2/businesses/{businessId}/offer-cards](../../reference/content/getOfferCardsContentStatus.md).  {% include notitle [limit](../../_auto/method_limits/getOfferMappings.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 50; // int | {{ limit-truncate-param-description }}
$language = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\CatalogLanguageType(); // \OpenAPI\Client\Model\CatalogLanguageType | Язык, на котором принимаются и возвращаются значения в параметрах `name` и `description`.  Значение по умолчанию: `RU`.
$get_offer_mappings_request = new \OpenAPI\Client\Model\GetOfferMappingsRequest(); // \OpenAPI\Client\Model\GetOfferMappingsRequest

try {
    $result = $apiInstance->getOfferMappings($business_id, $page_token, $limit, $language, $get_offer_mappings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getOfferMappings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-truncate-param-description }} | [optional] [default to 50] |
| **language** | [**\OpenAPI\Client\Model\CatalogLanguageType**](../Model/.md)| Язык, на котором принимаются и возвращаются значения в параметрах &#x60;name&#x60; и &#x60;description&#x60;.  Значение по умолчанию: &#x60;RU&#x60;. | [optional] |
| **get_offer_mappings_request** | [**\OpenAPI\Client\Model\GetOfferMappingsRequest**](../Model/GetOfferMappingsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetOfferMappingsResponse**](../Model/GetOfferMappingsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfferRecommendations()`

```php
getOfferRecommendations($business_id, $get_offer_recommendations_request, $page_token, $limit): \OpenAPI\Client\Model\GetOfferRecommendationsResponse
```

Рекомендации Маркета, касающиеся цен

{% include notitle [access](../../_auto/method_scopes/getOfferRecommendations.md) %}  Метод возвращает рекомендации нескольких типов.  1. Порог для привлекательной цены. 2. Оценка привлекательности цен на витрине.  Рекомендации показывают, какие цены нужно установить, чтобы привлечь покупателя.  В запросе можно использовать фильтры. Результаты возвращаются постранично.  {% include notitle [limit](../../_auto/method_limits/getOfferRecommendations.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$get_offer_recommendations_request = new \OpenAPI\Client\Model\GetOfferRecommendationsRequest(); // \OpenAPI\Client\Model\GetOfferRecommendationsRequest
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 100; // int | {{ limit-param-description }}

try {
    $result = $apiInstance->getOfferRecommendations($business_id, $get_offer_recommendations_request, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getOfferRecommendations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **get_offer_recommendations_request** | [**\OpenAPI\Client\Model\GetOfferRecommendationsRequest**](../Model/GetOfferRecommendationsRequest.md)|  | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 100] |

### Return type

[**\OpenAPI\Client\Model\GetOfferRecommendationsResponse**](../Model/GetOfferRecommendationsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($campaign_id, $order_id): \OpenAPI\Client\Model\GetOrderResponse
```

Информация об одном заказе в магазине

{% include notitle [access](../../_auto/method_scopes/getOrder.md) %}  Возвращает информацию о заказе в магазине.  {% note tip \"Вы также можете настроить API-уведомления\" %}  Маркет отправит вам [запрос](../../push-notifications/reference/sendNotification.md), когда появится новый заказ или изменится его статус. А полную информацию можно получить с помощью метода [POST v1/businesses/{businessId}/orders](../../reference/orders/getBusinessOrders.md).  [{#T}](../../push-notifications/index.md)  {% endnote %}  Получить более подробную информацию о покупателе и его номере телефона можно с помощью запроса [GET v2/campaigns/{campaignId}/orders/{orderId}/buyer](../../reference/order-delivery/getOrderBuyerInfo.md).  {% include notitle [limit](../../_auto/method_limits/getOrder.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.

try {
    $result = $apiInstance->getOrder($campaign_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |

### Return type

[**\OpenAPI\Client\Model\GetOrderResponse**](../Model/GetOrderResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderBusinessBuyerInfo()`

```php
getOrderBusinessBuyerInfo($campaign_id, $order_id): \OpenAPI\Client\Model\GetBusinessBuyerInfoResponse
```

Информация о покупателе — юридическом лице

{% include notitle [access](../../_auto/method_scopes/getOrderBusinessBuyerInfo.md) %}  Возвращает информацию о покупателе по идентификатору заказа.  {% note info \"Как получить информацию о покупателе, который является физическим лицом\" %}  Воспользуйтесь запросом [GET v2/campaigns/{campaignId}/orders/{orderId}/buyer](../../reference/order-delivery/getOrderBuyerInfo.md).  {% endnote %}  Получить данные можно, только если заказ находится в статусе `PROCESSING`, `DELIVERY`, `PICKUP` или `DELIVERED`.  {% include notitle [limit](../../_auto/method_limits/getOrderBusinessBuyerInfo.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.

try {
    $result = $apiInstance->getOrderBusinessBuyerInfo($campaign_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getOrderBusinessBuyerInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |

### Return type

[**\OpenAPI\Client\Model\GetBusinessBuyerInfoResponse**](../Model/GetBusinessBuyerInfoResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderBusinessDocumentsInfo()`

```php
getOrderBusinessDocumentsInfo($campaign_id, $order_id): \OpenAPI\Client\Model\GetBusinessDocumentsInfoResponse
```

Информация о документах

{% include notitle [access](../../_auto/method_scopes/getOrderBusinessDocumentsInfo.md) %}  Возвращает информацию о документах по идентификатору заказа.  Получить данные можно после того, как заказ перейдет в статус `DELIVERED`.  {% include notitle [limit](../../_auto/method_limits/getOrderBusinessDocumentsInfo.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.

try {
    $result = $apiInstance->getOrderBusinessDocumentsInfo($campaign_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getOrderBusinessDocumentsInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |

### Return type

[**\OpenAPI\Client\Model\GetBusinessDocumentsInfoResponse**](../Model/GetBusinessDocumentsInfoResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderBuyerInfo()`

```php
getOrderBuyerInfo($campaign_id, $order_id): \OpenAPI\Client\Model\GetOrderBuyerInfoResponse
```

Информация о покупателе — физическом лице

{% include notitle [access](../../_auto/method_scopes/getOrderBuyerInfo.md) %}  Возвращает информацию о покупателе по идентификатору заказа.  {% note info \"Как получить информацию о покупателе, который является юридическим лицом\" %}  Воспользуйтесь запросом [POST v2/campaigns/{campaignId}/orders/{orderId}/business-buyer](../../reference/order-business-information/getOrderBusinessBuyerInfo.md).  {% endnote %}  Получить данные можно, только если заказ находится в статусе `PROCESSING`, `DELIVERY` или `PICKUP`.  {% include notitle [limit](../../_auto/method_limits/getOrderBuyerInfo.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.

try {
    $result = $apiInstance->getOrderBuyerInfo($campaign_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getOrderBuyerInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |

### Return type

[**\OpenAPI\Client\Model\GetOrderBuyerInfoResponse**](../Model/GetOrderBuyerInfoResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderLabelsData()`

```php
getOrderLabelsData($campaign_id, $order_id): \OpenAPI\Client\Model\GetOrderLabelsDataResponse
```

Данные для самостоятельного изготовления ярлыков

{% include notitle [access](../../_auto/method_scopes/getOrderLabelsData.md) %}  Возвращает информацию на ярлыках, которые клеятся на коробки в заказе.  {% include notitle [limit](../../_auto/method_limits/getOrderLabelsData.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.

try {
    $result = $apiInstance->getOrderLabelsData($campaign_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getOrderLabelsData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |

### Return type

[**\OpenAPI\Client\Model\GetOrderLabelsDataResponse**](../Model/GetOrderLabelsDataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrders()`

```php
getOrders($campaign_id, $order_ids, $status, $substatus, $from_date, $to_date, $supplier_shipment_date_from, $supplier_shipment_date_to, $updated_at_from, $updated_at_to, $dispatch_type, $fake, $has_cis, $only_waiting_for_cancellation_approve, $only_estimated_delivery, $buyer_type, $page, $page_size, $page_token, $limit): \OpenAPI\Client\Model\GetOrdersResponse
```

Информация о заказах в магазине

{% include notitle [access](../../_auto/method_scopes/getOrders.md) %}  Возвращает информацию о заказах в магазине. Запрос можно использовать для отслеживания заказов и их статусов.  По умолчанию данные о тестовых заказах не приходят. Чтобы их получить, передайте значение `true` в параметре `fake`.  {% note tip \"Вы также можете настроить API-уведомления\" %}  Маркет отправит вам [запрос](../../push-notifications/reference/sendNotification.md), когда появится новый заказ или изменится его статус. А полную информацию можно получить с помощью метода [POST v1/businesses/{businessId}/orders](../../reference/orders/getBusinessOrders.md).  [{#T}](../../push-notifications/index.md)  {% endnote %}  Доступна фильтрация по параметрам:  * дата оформления заказа;  * дата и время обновления заказа;  * дата отгрузки;  * статусы заказов (`statuses`);  * этапы обработки или причины отмены (`substatuses`);  * идентификаторы заказов;  * тип заказа (настоящий или тестовый).  Не возвращается информация о заказах, которые доставили или отменили больше 30 дней назад. Как ее получить:  * [POST v1/businesses/{businessId}/orders](../../reference/orders/getBusinessOrders.md); * [POST v2/campaigns/{campaignId}/stats/orders](../../reference/orders-stats/getOrdersStats.md).  Максимальный диапазон дат за один запрос — 30 дней (передается в параметрах `fromDate` и `toDate`). Если их не передать, возвращается информация за последние 30 дней.  Результаты возвращаются постранично. Для навигации используйте параметры `pageToken` и `limit`.  Получить более подробную информацию о покупателе и его номере телефона можно с помощью запроса [GET v2/campaigns/{campaignId}/orders/{orderId}/buyer](../../reference/order-delivery/getOrderBuyerInfo.md).  {% include notitle [limit](../../_auto/method_limits/getOrders.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_ids = array(56); // int[] | Фильтрация заказов по идентификаторам. <br><br> ⚠️ Не используйте это поле одновременно с другими фильтрами. Если вы хотите воспользоваться ими, оставьте поле пустым.
$status = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderStatusType()); // \OpenAPI\Client\Model\OrderStatusType[] | Статус заказа:  * `CANCELLED` — заказ отменен.  * `DELIVERED` — заказ получен покупателем.  * `DELIVERY` — заказ передан в службу доставки.  * `PICKUP` — заказ доставлен в пункт выдачи.  * `PROCESSING` — заказ находится в обработке.  * `UNPAID` — заказ оформлен, но еще не оплачен (если выбрана оплата при оформлении).  * `RESERVED` — заказ оформлен, но ожидает подтвеждения от магазина (LaaS).
$substatus = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderSubstatusType()); // \OpenAPI\Client\Model\OrderSubstatusType[] | Этап обработки заказа (статус `PROCESSING`) или причина отмены заказа (статус `CANCELLED`).  Возможные значения для заказа в статусе `PROCESSING`:  * `STARTED` — заказ подтвержден, его можно начать обрабатывать. * `READY_TO_SHIP` — заказ собран и готов к отправке. * `SHIPPED` — заказ передан службе доставки.  Возможные значения для заказа в статусе `CANCELLED`:  * `RESERVATION_EXPIRED` — покупатель не завершил оформление зарезервированного заказа в течение 10 минут.  * `USER_NOT_PAID` — покупатель не оплатил заказ (для типа оплаты `PREPAID`) в течение 30 минут.  * `USER_UNREACHABLE` — не удалось связаться с покупателем. Для отмены с этой причиной необходимо выполнить условия:    * не менее 3 звонков с 8 до 21 в часовом поясе покупателя;   * перерыв между первым и третьим звонком не менее 90 минут;   * соединение не короче 5 секунд.    Если хотя бы одно из этих условий не выполнено (кроме случая, когда номер недоступен), отменить заказ не получится. Вернется ответ с кодом ошибки 400  * `USER_CHANGED_MIND` — покупатель отменил заказ по личным причинам.  * `USER_REFUSED_DELIVERY` — покупателя не устроили условия доставки.  * `USER_REFUSED_PRODUCT` — покупателю не подошел товар.  * `SHOP_FAILED` — магазин не может выполнить заказ.  * `USER_REFUSED_QUALITY` — покупателя не устроило качество товара.  * `REPLACING_ORDER` — покупатель решил заменить товар другим по собственной инициативе.  * `PROCESSING_EXPIRED` — значение более не используется.  * `PICKUP_EXPIRED` — закончился срок хранения заказа в ПВЗ.  * `DELIVERY_SERVICE_UNDELIVERED` — служба доставки не смогла доставить заказ.  * `CANCELLED_COURIER_NOT_FOUND` — не удалось найти курьера.  * `USER_WANTS_TO_CHANGE_DELIVERY_DATE` — покупатель хочет получить заказ в другой день.  * `RESERVATION_FAILED` — Маркет не может продолжить дальнейшую обработку заказа.
$from_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Начальная дата для фильтрации заказов по дате оформления.  Формат даты: `ДД-ММ-ГГГГ`.  Между начальной и конечной датой (параметр `toDate`) должно быть не больше 30 дней.  Значение по умолчанию: 30 дней назад от текущей даты.
$to_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Конечная дата для фильтрации заказов по дате оформления.  Показываются заказы, созданные до 00:00 указанного дня.  Формат даты: `ДД-ММ-ГГГГ`.  Между начальной (параметр `fromDate`) и конечной датой должно быть не больше 30 дней.  Значение по умолчанию: текущая дата.  Если промежуток времени между `toDate` и `fromDate` меньше суток, то `toDate` равен `fromDate` + сутки.
$supplier_shipment_date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Начальная дата для фильтрации заказов по дате отгрузки в службу доставки (параметр `shipmentDate`).  Формат даты: `ДД-ММ-ГГГГ`.  Между начальной и конечной датой (параметр `supplierShipmentDateTo`) должно быть не больше 30 дней.  Начальная дата включается в интервал для фильтрации.
$supplier_shipment_date_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Конечная дата для фильтрации заказов по дате отгрузки в службу доставки (параметр `shipmentDate`).  Формат даты: `ДД-ММ-ГГГГ`.  Между начальной (параметр `supplierShipmentDateFrom`) и конечной датой должно быть не больше 30 дней.  Конечная дата не включается в интервал для фильтрации.  Если промежуток времени между `supplierShipmentDateTo` и `supplierShipmentDateFrom` меньше суток, то `supplierShipmentDateTo` равен `supplierShipmentDateFrom` + сутки.
$updated_at_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Начальная дата для фильтрации заказов по дате и времени обновления (параметр `updatedAt`).  Формат даты: ISO 8601 со смещением относительно UTC. Например, `2017-11-21T00:42:42+03:00`.  Между начальной и конечной датой (параметр `updatedAtTo`) должно быть не больше 30 дней.  Начальная дата включается в интервал для фильтрации.
$updated_at_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Конечная дата для фильтрации заказов по дате и времени обновления (параметр `updatedAt`).  Формат даты: ISO 8601 со смещением относительно UTC. Например, `2017-11-21T00:42:42+03:00`.  Между начальной (параметр `updatedAtFrom`) и конечной датой должно быть не больше 30 дней.  Конечная дата не включается в интервал для фильтрации.
$dispatch_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderDeliveryDispatchType(); // \OpenAPI\Client\Model\OrderDeliveryDispatchType | Способ отгрузки
$fake = false; // bool | Фильтрация заказов по типам:  * `false` — настоящий заказ покупателя.  * `true` — [тестовый заказ](../../concepts/sandbox.md) Маркета.
$has_cis = false; // bool | Фильтр для получения заказов, в которых есть хотя бы один товар с кодом идентификации в системе [«Честный ЗНАК»](https://честныйзнак.рф/) или [«ASL BELGISI»](https://aslbelgisi.uz) (для продавцов :no-translate[Market Yandex Go]):  * `true` — да.  * `false` — нет.  Такие коды присваиваются товарам, которые подлежат маркировке и относятся к определенным категориям.
$only_waiting_for_cancellation_approve = false; // bool | **Только для модели DBS**  Фильтр для получения заказов, по которым был запрос на отмену.  При значении `true` возвращаются только заказы, которые находятся в статусе `DELIVERY` или `PICKUP` и которые пользователи решили отменить.  Чтобы подтвердить или отклонить отмену, отправьте запрос [PUT v2/campaigns/{campaignId}/orders/{orderId}/cancellation/accept](../../reference/orders/acceptOrderCancellation).
$only_estimated_delivery = false; // bool | Фильтрация заказов с долгой доставкой (31-60 дней) по подтвержденной дате доставки:  * `true` — возвращаются только заказы с неподтвержденной датой доставки. * `false` — фильтрация не применяется.
$buyer_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\OrderBuyerType(); // \OpenAPI\Client\Model\OrderBuyerType | Фильтрация заказов по типу покупателя.
$page = 1; // int | {% note warning \"Устаревший параметр\" %}  Вместо `page` и `pageSize` используйте пагинацию по `pageToken` и `limit`.  [Подробнее о типах пагинации и их использовании](../../concepts/pagination.md)  {% endnote %}  Номер страницы результатов.  Используется вместе с параметром `pageSize`.
$page_size = 56; // int | {% note warning \"Устаревший параметр\" %}  Вместо `page` и `pageSize` используйте пагинацию по `pageToken` и `limit`.  [Подробнее о типах пагинации и их использовании](../../concepts/pagination.md)  {% endnote %}  Размер страницы.  Используется вместе с параметром `page`.
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 56; // int | {{ limit-truncate-param-description }}  {% note warning %}  У данного лимита нет значения по умолчанию.  {% endnote %}

try {
    $result = $apiInstance->getOrders($campaign_id, $order_ids, $status, $substatus, $from_date, $to_date, $supplier_shipment_date_from, $supplier_shipment_date_to, $updated_at_from, $updated_at_to, $dispatch_type, $fake, $has_cis, $only_waiting_for_cancellation_approve, $only_estimated_delivery, $buyer_type, $page, $page_size, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_ids** | [**int[]**](../Model/int.md)| Фильтрация заказов по идентификаторам. &lt;br&gt;&lt;br&gt; ⚠️ Не используйте это поле одновременно с другими фильтрами. Если вы хотите воспользоваться ими, оставьте поле пустым. | [optional] |
| **status** | [**\OpenAPI\Client\Model\OrderStatusType[]**](../Model/\OpenAPI\Client\Model\OrderStatusType.md)| Статус заказа:  * &#x60;CANCELLED&#x60; — заказ отменен.  * &#x60;DELIVERED&#x60; — заказ получен покупателем.  * &#x60;DELIVERY&#x60; — заказ передан в службу доставки.  * &#x60;PICKUP&#x60; — заказ доставлен в пункт выдачи.  * &#x60;PROCESSING&#x60; — заказ находится в обработке.  * &#x60;UNPAID&#x60; — заказ оформлен, но еще не оплачен (если выбрана оплата при оформлении).  * &#x60;RESERVED&#x60; — заказ оформлен, но ожидает подтвеждения от магазина (LaaS). | [optional] |
| **substatus** | [**\OpenAPI\Client\Model\OrderSubstatusType[]**](../Model/\OpenAPI\Client\Model\OrderSubstatusType.md)| Этап обработки заказа (статус &#x60;PROCESSING&#x60;) или причина отмены заказа (статус &#x60;CANCELLED&#x60;).  Возможные значения для заказа в статусе &#x60;PROCESSING&#x60;:  * &#x60;STARTED&#x60; — заказ подтвержден, его можно начать обрабатывать. * &#x60;READY_TO_SHIP&#x60; — заказ собран и готов к отправке. * &#x60;SHIPPED&#x60; — заказ передан службе доставки.  Возможные значения для заказа в статусе &#x60;CANCELLED&#x60;:  * &#x60;RESERVATION_EXPIRED&#x60; — покупатель не завершил оформление зарезервированного заказа в течение 10 минут.  * &#x60;USER_NOT_PAID&#x60; — покупатель не оплатил заказ (для типа оплаты &#x60;PREPAID&#x60;) в течение 30 минут.  * &#x60;USER_UNREACHABLE&#x60; — не удалось связаться с покупателем. Для отмены с этой причиной необходимо выполнить условия:    * не менее 3 звонков с 8 до 21 в часовом поясе покупателя;   * перерыв между первым и третьим звонком не менее 90 минут;   * соединение не короче 5 секунд.    Если хотя бы одно из этих условий не выполнено (кроме случая, когда номер недоступен), отменить заказ не получится. Вернется ответ с кодом ошибки 400  * &#x60;USER_CHANGED_MIND&#x60; — покупатель отменил заказ по личным причинам.  * &#x60;USER_REFUSED_DELIVERY&#x60; — покупателя не устроили условия доставки.  * &#x60;USER_REFUSED_PRODUCT&#x60; — покупателю не подошел товар.  * &#x60;SHOP_FAILED&#x60; — магазин не может выполнить заказ.  * &#x60;USER_REFUSED_QUALITY&#x60; — покупателя не устроило качество товара.  * &#x60;REPLACING_ORDER&#x60; — покупатель решил заменить товар другим по собственной инициативе.  * &#x60;PROCESSING_EXPIRED&#x60; — значение более не используется.  * &#x60;PICKUP_EXPIRED&#x60; — закончился срок хранения заказа в ПВЗ.  * &#x60;DELIVERY_SERVICE_UNDELIVERED&#x60; — служба доставки не смогла доставить заказ.  * &#x60;CANCELLED_COURIER_NOT_FOUND&#x60; — не удалось найти курьера.  * &#x60;USER_WANTS_TO_CHANGE_DELIVERY_DATE&#x60; — покупатель хочет получить заказ в другой день.  * &#x60;RESERVATION_FAILED&#x60; — Маркет не может продолжить дальнейшую обработку заказа. | [optional] |
| **from_date** | **\DateTime**| Начальная дата для фильтрации заказов по дате оформления.  Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;.  Между начальной и конечной датой (параметр &#x60;toDate&#x60;) должно быть не больше 30 дней.  Значение по умолчанию: 30 дней назад от текущей даты. | [optional] |
| **to_date** | **\DateTime**| Конечная дата для фильтрации заказов по дате оформления.  Показываются заказы, созданные до 00:00 указанного дня.  Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;.  Между начальной (параметр &#x60;fromDate&#x60;) и конечной датой должно быть не больше 30 дней.  Значение по умолчанию: текущая дата.  Если промежуток времени между &#x60;toDate&#x60; и &#x60;fromDate&#x60; меньше суток, то &#x60;toDate&#x60; равен &#x60;fromDate&#x60; + сутки. | [optional] |
| **supplier_shipment_date_from** | **\DateTime**| Начальная дата для фильтрации заказов по дате отгрузки в службу доставки (параметр &#x60;shipmentDate&#x60;).  Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;.  Между начальной и конечной датой (параметр &#x60;supplierShipmentDateTo&#x60;) должно быть не больше 30 дней.  Начальная дата включается в интервал для фильтрации. | [optional] |
| **supplier_shipment_date_to** | **\DateTime**| Конечная дата для фильтрации заказов по дате отгрузки в службу доставки (параметр &#x60;shipmentDate&#x60;).  Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;.  Между начальной (параметр &#x60;supplierShipmentDateFrom&#x60;) и конечной датой должно быть не больше 30 дней.  Конечная дата не включается в интервал для фильтрации.  Если промежуток времени между &#x60;supplierShipmentDateTo&#x60; и &#x60;supplierShipmentDateFrom&#x60; меньше суток, то &#x60;supplierShipmentDateTo&#x60; равен &#x60;supplierShipmentDateFrom&#x60; + сутки. | [optional] |
| **updated_at_from** | **\DateTime**| Начальная дата для фильтрации заказов по дате и времени обновления (параметр &#x60;updatedAt&#x60;).  Формат даты: ISO 8601 со смещением относительно UTC. Например, &#x60;2017-11-21T00:42:42+03:00&#x60;.  Между начальной и конечной датой (параметр &#x60;updatedAtTo&#x60;) должно быть не больше 30 дней.  Начальная дата включается в интервал для фильтрации. | [optional] |
| **updated_at_to** | **\DateTime**| Конечная дата для фильтрации заказов по дате и времени обновления (параметр &#x60;updatedAt&#x60;).  Формат даты: ISO 8601 со смещением относительно UTC. Например, &#x60;2017-11-21T00:42:42+03:00&#x60;.  Между начальной (параметр &#x60;updatedAtFrom&#x60;) и конечной датой должно быть не больше 30 дней.  Конечная дата не включается в интервал для фильтрации. | [optional] |
| **dispatch_type** | [**\OpenAPI\Client\Model\OrderDeliveryDispatchType**](../Model/.md)| Способ отгрузки | [optional] |
| **fake** | **bool**| Фильтрация заказов по типам:  * &#x60;false&#x60; — настоящий заказ покупателя.  * &#x60;true&#x60; — [тестовый заказ](../../concepts/sandbox.md) Маркета. | [optional] [default to false] |
| **has_cis** | **bool**| Фильтр для получения заказов, в которых есть хотя бы один товар с кодом идентификации в системе [«Честный ЗНАК»](https://честныйзнак.рф/) или [«ASL BELGISI»](https://aslbelgisi.uz) (для продавцов :no-translate[Market Yandex Go]):  * &#x60;true&#x60; — да.  * &#x60;false&#x60; — нет.  Такие коды присваиваются товарам, которые подлежат маркировке и относятся к определенным категориям. | [optional] [default to false] |
| **only_waiting_for_cancellation_approve** | **bool**| **Только для модели DBS**  Фильтр для получения заказов, по которым был запрос на отмену.  При значении &#x60;true&#x60; возвращаются только заказы, которые находятся в статусе &#x60;DELIVERY&#x60; или &#x60;PICKUP&#x60; и которые пользователи решили отменить.  Чтобы подтвердить или отклонить отмену, отправьте запрос [PUT v2/campaigns/{campaignId}/orders/{orderId}/cancellation/accept](../../reference/orders/acceptOrderCancellation). | [optional] [default to false] |
| **only_estimated_delivery** | **bool**| Фильтрация заказов с долгой доставкой (31-60 дней) по подтвержденной дате доставки:  * &#x60;true&#x60; — возвращаются только заказы с неподтвержденной датой доставки. * &#x60;false&#x60; — фильтрация не применяется. | [optional] [default to false] |
| **buyer_type** | [**\OpenAPI\Client\Model\OrderBuyerType**](../Model/.md)| Фильтрация заказов по типу покупателя. | [optional] |
| **page** | **int**| {% note warning \&quot;Устаревший параметр\&quot; %}  Вместо &#x60;page&#x60; и &#x60;pageSize&#x60; используйте пагинацию по &#x60;pageToken&#x60; и &#x60;limit&#x60;.  [Подробнее о типах пагинации и их использовании](../../concepts/pagination.md)  {% endnote %}  Номер страницы результатов.  Используется вместе с параметром &#x60;pageSize&#x60;. | [optional] [default to 1] |
| **page_size** | **int**| {% note warning \&quot;Устаревший параметр\&quot; %}  Вместо &#x60;page&#x60; и &#x60;pageSize&#x60; используйте пагинацию по &#x60;pageToken&#x60; и &#x60;limit&#x60;.  [Подробнее о типах пагинации и их использовании](../../concepts/pagination.md)  {% endnote %}  Размер страницы.  Используется вместе с параметром &#x60;page&#x60;. | [optional] |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-truncate-param-description }}  {% note warning %}  У данного лимита нет значения по умолчанию.  {% endnote %} | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetOrdersResponse**](../Model/GetOrdersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrdersStats()`

```php
getOrdersStats($campaign_id, $page_token, $limit, $get_orders_stats_request): \OpenAPI\Client\Model\GetOrdersStatsResponse
```

Детальная информация по заказам

{% include notitle [access](../../_auto/method_scopes/getOrdersStats.md) %}  Возвращает информацию по заказам на Маркете, в которых есть ваши товары.  С помощью нее вы можете собрать статистику по вашим заказам и узнать, например, какие из товаров чаще всего возвращаются покупателями, какие, наоборот, пользуются большим спросом и т. п.  {% note tip \"Информация по созданным или обновленным заказам может появиться с задержкой до 40 минут\" %}  Чтобы получить данные без задержки, используйте метод [POST v1/businesses/{businessId}/orders](../../reference/orders/getBusinessOrders.md).  {% endnote %}  В одном запросе можно получить информацию не более чем по 200 заказам.  {% include notitle [limit](../../_auto/method_limits/getOrdersStats.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 100; // int | {{ limit-param-description }}
$get_orders_stats_request = new \OpenAPI\Client\Model\GetOrdersStatsRequest(); // \OpenAPI\Client\Model\GetOrdersStatsRequest

try {
    $result = $apiInstance->getOrdersStats($campaign_id, $page_token, $limit, $get_orders_stats_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getOrdersStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 100] |
| **get_orders_stats_request** | [**\OpenAPI\Client\Model\GetOrdersStatsRequest**](../Model/GetOrdersStatsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetOrdersStatsResponse**](../Model/GetOrdersStatsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutlet()`

```php
getOutlet($campaign_id, $outlet_id): \OpenAPI\Client\Model\GetOutletResponse
```

Информация об одной точке продаж

{% include notitle [access](../../_auto/method_scopes/getOutlet.md) %}  Возвращает информацию о точках продаж магазина.  {% include notitle [limit](../../_auto/method_limits/getOutlet.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$outlet_id = 56; // int | Идентификатор точки продаж.

try {
    $result = $apiInstance->getOutlet($campaign_id, $outlet_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getOutlet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **outlet_id** | **int**| Идентификатор точки продаж. | |

### Return type

[**\OpenAPI\Client\Model\GetOutletResponse**](../Model/GetOutletResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutletLicenses()`

```php
getOutletLicenses($campaign_id, $outlet_ids, $ids): \OpenAPI\Client\Model\GetOutletLicensesResponse
```

Информация о лицензиях для точек продаж

{% include notitle [access](../../_auto/method_scopes/getOutletLicenses.md) %}  Возвращает информацию о лицензиях для точек продаж.  {% include notitle [limit](../../_auto/method_limits/getOutletLicenses.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$outlet_ids = array(56); // int[] | Список идентификаторов точек продаж, для которых нужно получить информацию о лицензиях. Идентификаторы указываются через запятую.  В запросе должен быть либо параметр `outletIds`, либо параметр `ids`. Запрос с обоими параметрами или без них приведет к ошибке.
$ids = array(56); // int[] | Список идентификаторов лицензий.

try {
    $result = $apiInstance->getOutletLicenses($campaign_id, $outlet_ids, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getOutletLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **outlet_ids** | [**int[]**](../Model/int.md)| Список идентификаторов точек продаж, для которых нужно получить информацию о лицензиях. Идентификаторы указываются через запятую.  В запросе должен быть либо параметр &#x60;outletIds&#x60;, либо параметр &#x60;ids&#x60;. Запрос с обоими параметрами или без них приведет к ошибке. | [optional] |
| **ids** | [**int[]**](../Model/int.md)| Список идентификаторов лицензий. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetOutletLicensesResponse**](../Model/GetOutletLicensesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOutlets()`

```php
getOutlets($campaign_id, $page_token, $limit, $region_id, $shop_outlet_code, $region_id2): \OpenAPI\Client\Model\GetOutletsResponse
```

Информация о нескольких точках продаж

{% include notitle [access](../../_auto/method_scopes/getOutlets.md) %}  Возвращает список точек продаж магазина.  {% include notitle [limit](../../_auto/method_limits/getOutlets.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 25; // int | {{ limit-param-description }}
$region_id = 56; // int | Идентификатор региона. Если задать идентификатор родительского региона любого уровня, в выходных данных будут отображены точки продаж всех дочерних регионов. Идентификатор региона можно получить c помощью метода [GET v2/regions](../../reference/regions/searchRegionsByName.md).
$shop_outlet_code = 'shop_outlet_code_example'; // string | Идентификатор точки продаж, присвоенный магазином.
$region_id2 = 56; // int | {% note warning \"Вместо него используйте `region_id`.\" %}     {% endnote %}

try {
    $result = $apiInstance->getOutlets($campaign_id, $page_token, $limit, $region_id, $shop_outlet_code, $region_id2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getOutlets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 25] |
| **region_id** | **int**| Идентификатор региона. Если задать идентификатор родительского региона любого уровня, в выходных данных будут отображены точки продаж всех дочерних регионов. Идентификатор региона можно получить c помощью метода [GET v2/regions](../../reference/regions/searchRegionsByName.md). | [optional] |
| **shop_outlet_code** | **string**| Идентификатор точки продаж, присвоенный магазином. | [optional] |
| **region_id2** | **int**| {% note warning \&quot;Вместо него используйте &#x60;region_id&#x60;.\&quot; %}     {% endnote %} | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetOutletsResponse**](../Model/GetOutletsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagedWarehouses()`

```php
getPagedWarehouses($business_id, $page_token, $limit, $get_paged_warehouses_request): \OpenAPI\Client\Model\GetPagedWarehousesResponse
```

Список складов

{% include notitle [access](../../_auto/method_scopes/getPagedWarehouses.md) %}  Возвращает список складов и информацию о них.  {% include notitle [limit](../../_auto/method_limits/getPagedWarehouses.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 15; // int | {{ limit-param-description }}
$get_paged_warehouses_request = new \OpenAPI\Client\Model\GetPagedWarehousesRequest(); // \OpenAPI\Client\Model\GetPagedWarehousesRequest

try {
    $result = $apiInstance->getPagedWarehouses($business_id, $page_token, $limit, $get_paged_warehouses_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getPagedWarehouses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 15] |
| **get_paged_warehouses_request** | [**\OpenAPI\Client\Model\GetPagedWarehousesRequest**](../Model/GetPagedWarehousesRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPagedWarehousesResponse**](../Model/GetPagedWarehousesResponse.md)

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

{% include notitle [access](../../_auto/method_scopes/getPrices.md) %}  Возвращает список цен, установленных вами на товары любым способом: например, через API или в файле с каталогом.  Способы установки цен описаны [в Справке Маркета для продавцов](https://yandex.ru/support/marketplace/assortment/operations/prices.html).  {% include notitle [limit](../../_auto/method_limits/getPrices.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 250; // int | {{ limit-truncate-param-description }}
$archived = false; // bool | Фильтр по нахождению в архиве.

try {
    $result = $apiInstance->getPrices($campaign_id, $page_token, $limit, $archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-truncate-param-description }} | [optional] [default to 250] |
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

{% include notitle [access](../../_auto/method_scopes/getPricesByOfferIds.md) %}  Возвращает список цен на указанные товары в магазине.  {% note warning \"Метод только для отдельных магазинов\" %}  Используйте этот метод, только если в кабинете установлены уникальные цены в отдельных магазинах.  Для просмотра цен, которые действуют во всех магазинах, используйте [POST v2/businesses/{businessId}/offer-mappings](../../reference/business-offer-mappings/getOfferMappings.md).  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/getPricesByOfferIds.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 250; // int | {{ limit-truncate-param-description }}
$get_prices_by_offer_ids_request = new \OpenAPI\Client\Model\GetPricesByOfferIdsRequest(); // \OpenAPI\Client\Model\GetPricesByOfferIdsRequest

try {
    $result = $apiInstance->getPricesByOfferIds($campaign_id, $page_token, $limit, $get_prices_by_offer_ids_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getPricesByOfferIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-truncate-param-description }} | [optional] [default to 250] |
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

## `getPromoOffers()`

```php
getPromoOffers($business_id, $get_promo_offers_request, $page_token, $limit): \OpenAPI\Client\Model\GetPromoOffersResponse
```

Получение списка товаров, которые участвуют или могут участвовать в акции

{% include notitle [access](../../_auto/method_scopes/getPromoOffers.md) %}  Возвращает список товаров, которые участвуют или могут участвовать в акции.  {% note warning \"Условия участия в акциях могут меняться\" %}  Например, `maxPromoPrice`.  Установленные цены меняться не будут — `price` и `promoPrice`.  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/getPromoOffers.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$get_promo_offers_request = new \OpenAPI\Client\Model\GetPromoOffersRequest(); // \OpenAPI\Client\Model\GetPromoOffersRequest
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 250; // int | {{ limit-param-description }}

try {
    $result = $apiInstance->getPromoOffers($business_id, $get_promo_offers_request, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getPromoOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **get_promo_offers_request** | [**\OpenAPI\Client\Model\GetPromoOffersRequest**](../Model/GetPromoOffersRequest.md)|  | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 250] |

### Return type

[**\OpenAPI\Client\Model\GetPromoOffersResponse**](../Model/GetPromoOffersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromos()`

```php
getPromos($business_id, $get_promos_request): \OpenAPI\Client\Model\GetPromosResponse
```

Получение списка акций

{% include notitle [access](../../_auto/method_scopes/getPromos.md) %}  Возвращает информацию об акциях Маркета. Не возвращает данные об акциях, которые создал продавец.  По умолчанию возвращаются акции, в которых продавец участвует или может принять участие.  Чтобы получить текущие или завершенные акции, передайте параметр `participation`.  Типы акций, которые возвращаются в ответе:  * прямая скидка; * флеш-акция; * скидка по промокоду.  {% include notitle [limit](../../_auto/method_limits/getPromos.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$get_promos_request = new \OpenAPI\Client\Model\GetPromosRequest(); // \OpenAPI\Client\Model\GetPromosRequest

try {
    $result = $apiInstance->getPromos($business_id, $get_promos_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getPromos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **get_promos_request** | [**\OpenAPI\Client\Model\GetPromosRequest**](../Model/GetPromosRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPromosResponse**](../Model/GetPromosResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQualityRatingDetails()`

```php
getQualityRatingDetails($campaign_id): \OpenAPI\Client\Model\GetQualityRatingDetailsResponse
```

Заказы, которые повлияли на индекс качества

{% include notitle [access](../../_auto/method_scopes/getQualityRatingDetails.md) %}  Возвращает список заказов, которые повлияли на индекс качества магазина. Чтобы узнать значение индекса качества, выполните запрос [POST v2/businesses/{businessId}/ratings/quality](../../reference/ratings/getQualityRatings.md).  {% include notitle [limit](../../_auto/method_limits/getQualityRatingDetails.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.

try {
    $result = $apiInstance->getQualityRatingDetails($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getQualityRatingDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |

### Return type

[**\OpenAPI\Client\Model\GetQualityRatingDetailsResponse**](../Model/GetQualityRatingDetailsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQualityRatings()`

```php
getQualityRatings($business_id, $get_quality_rating_request): \OpenAPI\Client\Model\GetQualityRatingResponse
```

Индекс качества магазинов

{% include notitle [access](../../_auto/method_scopes/getQualityRatings.md) %}  Возвращает значение индекса качества магазинов и его составляющие.  Подробнее об индексе качества читайте [в Справке Маркета для продавцов](https://yandex.ru/support2/marketplace/ru/quality/score/).  {% include notitle [limit](../../_auto/method_limits/getQualityRatings.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$get_quality_rating_request = new \OpenAPI\Client\Model\GetQualityRatingRequest(); // \OpenAPI\Client\Model\GetQualityRatingRequest

try {
    $result = $apiInstance->getQualityRatings($business_id, $get_quality_rating_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getQualityRatings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **get_quality_rating_request** | [**\OpenAPI\Client\Model\GetQualityRatingRequest**](../Model/GetQualityRatingRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GetQualityRatingResponse**](../Model/GetQualityRatingResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRegionsCodes()`

```php
getRegionsCodes(): \OpenAPI\Client\Model\GetRegionsCodesResponse
```

Список допустимых кодов стран

{% include notitle [access](../../_auto/method_scopes/getRegionsCodes.md) %}  Возвращает список стран с их кодами в формате :no-translate[ISO 3166-1 alpha-2].  Страна производства `countryCode` понадобится при продаже товаров из-за рубежа для бизнеса. [Инструкция](../../step-by-step/business-info.md)  {% include notitle [limit](../../_auto/method_limits/getRegionsCodes.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRegionsCodes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getRegionsCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetRegionsCodesResponse**](../Model/GetRegionsCodesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportInfo()`

```php
getReportInfo($report_id, $source_type): \OpenAPI\Client\Model\GetReportInfoResponse
```

Получение заданного отчета или документа

{% include notitle [access](../../_auto/method_scopes/getReportInfo.md) %}  Возвращает статус генерации заданного отчета или документа и, если он готов, ссылку для скачивания.  Чтобы воспользоваться этим запросом, вначале нужно запустить генерацию отчета или документа. [Инструкция](../../step-by-step/reports.md)  {% include notitle [limit](../../_auto/method_limits/getReportInfo.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string | Идентификатор отчета или документа, который вы получили после запуска генерации.
$source_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SourceType(); // \OpenAPI\Client\Model\SourceType | Признак типа кабинета, от имени которого вызывается метод: {% if audience == \"partner\" %}  - `SELLER` — продавец.  {% endif %}  - `ADVERTISER` — рекламодатель.  {% if audience == \"advertiser\" %}  {% note info \"Обязательно указывайте sourceType=ADVERTISER в каждом запросе.\" %}     {% endnote %}  {% endif %}

try {
    $result = $apiInstance->getReportInfo($report_id, $source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getReportInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| Идентификатор отчета или документа, который вы получили после запуска генерации. | |
| **source_type** | [**\OpenAPI\Client\Model\SourceType**](../Model/.md)| Признак типа кабинета, от имени которого вызывается метод: {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  - &#x60;SELLER&#x60; — продавец.  {% endif %}  - &#x60;ADVERTISER&#x60; — рекламодатель.  {% if audience &#x3D;&#x3D; \&quot;advertiser\&quot; %}  {% note info \&quot;Обязательно указывайте sourceType&#x3D;ADVERTISER в каждом запросе.\&quot; %}     {% endnote %}  {% endif %} | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetReportInfoResponse**](../Model/GetReportInfoResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturn()`

```php
getReturn($campaign_id, $order_id, $return_id): \OpenAPI\Client\Model\GetReturnResponse
```

Информация о невыкупе или возврате

{% include notitle [access](../../_auto/method_scopes/getReturn.md) %}  Получает информацию по одному невыкупу или возврату.  {% note tip \"Подключите API-уведомления\" %}  Маркет отправит вам запрос [POST notification](../../push-notifications/reference/sendNotification.md), когда появится новый невыкуп или возврат.  [{#T}](../../push-notifications/index.md)  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/getReturn.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.
$return_id = 56; // int | Идентификатор невыкупа или возврата.

try {
    $result = $apiInstance->getReturn($campaign_id, $order_id, $return_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
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

{% include notitle [access](../../_auto/method_scopes/getReturnApplication.md) %}  Загружает заявление покупателя на возврат товара.  {% include notitle [limit](../../_auto/method_limits/getReturnApplication.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.
$return_id = 56; // int | Идентификатор невыкупа или возврата.

try {
    $result = $apiInstance->getReturnApplication($campaign_id, $order_id, $return_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getReturnApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **return_id** | **int**| Идентификатор невыкупа или возврата. | |

### Return type

**\SplFileObject**

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturnAvailableDecisions()`

```php
getReturnAvailableDecisions($business_id, $get_return_available_decisions_request): \OpenAPI\Client\Model\GetReturnAvailableDecisionsResponse
```

Получение возможных решений по возврату

{% include notitle [access](../../_auto/method_scopes/getReturnAvailableDecisions.md) %}  Возвращает список доступных решений по возврату.  {% include notitle [limit](../../_auto/method_limits/getReturnAvailableDecisions.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$get_return_available_decisions_request = new \OpenAPI\Client\Model\GetReturnAvailableDecisionsRequest(); // \OpenAPI\Client\Model\GetReturnAvailableDecisionsRequest

try {
    $result = $apiInstance->getReturnAvailableDecisions($business_id, $get_return_available_decisions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getReturnAvailableDecisions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **get_return_available_decisions_request** | [**\OpenAPI\Client\Model\GetReturnAvailableDecisionsRequest**](../Model/GetReturnAvailableDecisionsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GetReturnAvailableDecisionsResponse**](../Model/GetReturnAvailableDecisionsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturnPhoto()`

```php
getReturnPhoto($campaign_id, $order_id, $return_id, $item_id, $image_hash): \SplFileObject
```

Получение фотографий товаров в возврате

{% include notitle [access](../../_auto/method_scopes/getReturnPhoto.md) %}  Получает фотографии товаров, которые покупатель приложил к заявлению на возврат.  Хеш изображения (`imageHash`) можно получить из ответов методов [GET v2/campaigns/{campaignId}/orders/{orderId}/returns/{returnId}](../../reference/returns/getReturn.md) и [GET v2/campaigns/{campaignId}/returns](../../reference/returns/getReturns.md) — в поле `images` решения по товару.  Максимальный размер изображения — 50 МБ.  Тип изображения можно определить по заголовку `Content-Type` в ответе.  {% include notitle [limit](../../_auto/method_limits/getReturnPhoto.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.
$return_id = 56; // int | Идентификатор невыкупа или возврата.
$item_id = 56; // int | Идентификатор товара в возврате.
$image_hash = 'image_hash_example'; // string | Хеш ссылки изображения для загрузки.

try {
    $result = $apiInstance->getReturnPhoto($campaign_id, $order_id, $return_id, $item_id, $image_hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getReturnPhoto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
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
- **Accept**: `image/jpeg`, `image/png`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturns()`

```php
getReturns($campaign_id, $page_token, $limit, $order_ids, $statuses, $shipment_statuses, $type, $from_date, $to_date, $from_date2, $to_date2): \OpenAPI\Client\Model\GetReturnsResponse
```

Список невыкупов и возвратов

{% include notitle [access](../../_auto/method_scopes/getReturns.md) %}  Получает список невыкупов и возвратов.  Чтобы получить информацию по одному невыкупу или возврату, выполните запрос [GET v2/campaigns/{campaignId}/orders/{orderId}/returns/{returnId}](../../reference/returns/getReturn.md).  {% note tip \"Подключите API-уведомления\" %}  Маркет отправит вам запрос [POST notification](../../push-notifications/reference/sendNotification.md), когда появится новый невыкуп или возврат.  [{#T}](../../push-notifications/index.md)  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/getReturns.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 50; // int | {{ limit-truncate-param-description }}
$order_ids = array(56); // int[] | Идентификаторы заказов — для фильтрации результатов.  Несколько идентификаторов перечисляются через запятую без пробела.
$statuses = [STARTED_BY_USER, WAITING_FOR_DECISION]; // \OpenAPI\Client\Model\RefundStatusType[] | Фильтр по статусам возврата денег за возвраты.  Несколько статусов перечисляются через запятую.
$shipment_statuses = [READY_FOR_PICKUP, IN_TRANSIT]; // \OpenAPI\Client\Model\ReturnShipmentStatusType[] | Фильтр по логистическим статусам невыкупов и возвратов.  Несколько статусов перечисляются через запятую.
$type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReturnType(); // \OpenAPI\Client\Model\ReturnType | Тип заказа для фильтрации:  * `UNREDEEMED` — невыкуп.  * `RETURN` — возврат.  Если не указать, в ответе будут и невыкупы, и возвраты.
$from_date = 2022-10-31; // \DateTime | Начальная дата для фильтрации невыкупов или возвратов по дате обновления.  Формат: `ГГГГ-ММ-ДД`.
$to_date = 2022-11-30; // \DateTime | Конечная дата для фильтрации невыкупов или возвратов по дате обновления.  Формат: `ГГГГ-ММ-ДД`.
$from_date2 = 2022-10-31; // \DateTime | {% note warning \"Вместо него используйте `fromDate`.\" %}     {% endnote %}  Начальная дата для фильтрации невыкупов или возвратов по дате обновления.
$to_date2 = 2022-11-30; // \DateTime | {% note warning \"Вместо него используйте `toDate`.\" %}     {% endnote %}  Конечная дата для фильтрации невыкупов или возвратов по дате обновления.

try {
    $result = $apiInstance->getReturns($campaign_id, $page_token, $limit, $order_ids, $statuses, $shipment_statuses, $type, $from_date, $to_date, $from_date2, $to_date2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getReturns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-truncate-param-description }} | [optional] [default to 50] |
| **order_ids** | [**int[]**](../Model/int.md)| Идентификаторы заказов — для фильтрации результатов.  Несколько идентификаторов перечисляются через запятую без пробела. | [optional] |
| **statuses** | [**\OpenAPI\Client\Model\RefundStatusType[]**](../Model/\OpenAPI\Client\Model\RefundStatusType.md)| Фильтр по статусам возврата денег за возвраты.  Несколько статусов перечисляются через запятую. | [optional] |
| **shipment_statuses** | [**\OpenAPI\Client\Model\ReturnShipmentStatusType[]**](../Model/\OpenAPI\Client\Model\ReturnShipmentStatusType.md)| Фильтр по логистическим статусам невыкупов и возвратов.  Несколько статусов перечисляются через запятую. | [optional] |
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

## `getStocks()`

```php
getStocks($campaign_id, $page_token, $limit, $get_warehouse_stocks_request): \OpenAPI\Client\Model\GetWarehouseStocksResponse
```

Информация об остатках и оборачиваемости

{% include notitle [access](../../_auto/method_scopes/getStocks.md) %}  Возвращает данные об остатках товаров (для всех моделей) и об [оборачиваемости](*turnover) товаров (для модели FBY).  {% note info \"По умолчанию данные по оборачивамости не возращаются\" %}  Чтобы они были в ответе, передавайте `true` в поле `withTurnover`.  {% endnote %}  **Для моделей FBY и LaaS:** информация об остатках может возвращаться с нескольких складов Маркета, у которых будут разные `warehouseId`. Получить список складов Маркета можно с помощью метода [GET v2/warehouses](../../reference/warehouses/getFulfillmentWarehouses.md).  **Для модели FBS:** в ответе может вернуться не только партнерский склад, но и склад возвратов Маркета. Это возможно, если возврат поступил в указанную продавцом точку возвратов и долго не был забран.  {% include notitle [limit](../../_auto/method_limits/getStocks.md) %}  [//]: <> (turnover: Среднее количество дней, за которое товар продается. Подробно об оборачиваемости рассказано в Справке Маркета для продавцов https://yandex.ru/support/marketplace/analytics/turnover.html.)

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 100; // int | {{ limit-param-description }}
$get_warehouse_stocks_request = new \OpenAPI\Client\Model\GetWarehouseStocksRequest(); // \OpenAPI\Client\Model\GetWarehouseStocksRequest

try {
    $result = $apiInstance->getStocks($campaign_id, $page_token, $limit, $get_warehouse_stocks_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getStocks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 100] |
| **get_warehouse_stocks_request** | [**\OpenAPI\Client\Model\GetWarehouseStocksRequest**](../Model/GetWarehouseStocksRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetWarehouseStocksResponse**](../Model/GetWarehouseStocksResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWarehouses()`

```php
getWarehouses($business_id): \OpenAPI\Client\Model\GetWarehousesResponse
```

Список складов и групп складов

{% include notitle [access](../../_auto/method_scopes/getWarehouses.md) %}  Возвращает список складов и, если склады объединены, список групп складов. [Что такое группы складов и зачем они нужны](https://yandex.ru/support/marketplace/assortment/operations/stocks.html#unified-stocks)  Среди прочего запрос позволяет определить идентификатор, который нужно использовать при передаче остатков для группы складов.  {% include notitle [limit](../../_auto/method_limits/getWarehouses.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}

try {
    $result = $apiInstance->getWarehouses($business_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->getWarehouses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |

### Return type

[**\OpenAPI\Client\Model\GetWarehousesResponse**](../Model/GetWarehousesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `provideOrderDigitalCodes()`

```php
provideOrderDigitalCodes($campaign_id, $order_id, $provide_order_digital_codes_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Передача ключей цифровых товаров

{% include notitle [access](../../_auto/method_scopes/provideOrderDigitalCodes.md) %}  Передает ключи цифровых товаров, которые покупатель заказал и оплатил. После выполнения запроса Маркет отправит ему письмо с ключами и инструкциями по активации. Если письмо будет доставлено, Маркет переведет заказ в финальный статус `DELIVERED`.  {% note tip \"После передачи кода покупателю статус заказа изменится не сразу\" %}  Подключите API-уведомления — Маркет отправит вам запрос [POST notification](../../push-notifications/reference/sendNotification.md), когда заказ перейдет в статус `DELIVERED`.  [{#T}](../../push-notifications/index.md)  {% endnote %}  Ключ нужно передать в течение 30 минут после перехода заказа в статус `PROCESSING`.  Если в один заказ входят несколько ключей, передавайте их все в одном запросе.  Каждый товар с уникальным `id` передавайте в виде отдельного элемента в массиве `items`, а ключи товара — в массиве `codes`.  {% cut \"Пример\" %}  ```json translate=no {   \"items\": [     {       \"id\": 1,       \"codes\": [         \"code1\", \"code2\", \"code3\"       ],       \"slip\": \"slip\",       \"activate_till\": \"2025-02-18\"     },     {       \"id\": 2,       \"codes\": [         \"code4\", \"code5\", \"code6\"       ],       \"slip\": \"slip\",       \"activate_till\": \"2025-02-18\"     }   ] } ``` {% endcut %}  {% include notitle [limit](../../_auto/method_limits/provideOrderDigitalCodes.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.
$provide_order_digital_codes_request = new \OpenAPI\Client\Model\ProvideOrderDigitalCodesRequest(); // \OpenAPI\Client\Model\ProvideOrderDigitalCodesRequest

try {
    $result = $apiInstance->provideOrderDigitalCodes($campaign_id, $order_id, $provide_order_digital_codes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->provideOrderDigitalCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **provide_order_digital_codes_request** | [**\OpenAPI\Client\Model\ProvideOrderDigitalCodesRequest**](../Model/ProvideOrderDigitalCodesRequest.md)|  | |

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

## `provideOrderItemIdentifiers()`

```php
provideOrderItemIdentifiers($campaign_id, $order_id, $provide_order_item_identifiers_request): \OpenAPI\Client\Model\ProvideOrderItemIdentifiersResponse
```

Передача кодов маркировки единиц товара

{% include notitle [access](../../_auto/method_scopes/provideOrderItemIdentifiers.md) %}  {% note warning \"Если вы работаете по модели FBS\" %}  Используйте метод [PUT v2/campaigns/{campaignId}/orders/{orderId}/boxes](../../reference/orders/setOrderBoxLayout.md).  {% endnote %}  Передает Маркету коды маркировки для единиц товара в указанном заказе. Подробнее о работе с маркируемыми товарами читайте в [Справке продавца на Маркете](https://yandex.ru/support/marketplace/orders/cz.html).  Маркировка товаров в системе [«Честный ЗНАК»](https://честныйзнак.рф/) **необязательна** для заказов от физических лиц, но **обязательна** для заказов от бизнеса.  Для модели DBS коды маркировки в системе [«Честный ЗНАК»](https://честныйзнак.рф/) не проверяются в ГИС МТ — проверка выполняется только для моделей FBS и Экспресс.  Принимаются коды следующих типов:  * Коды в системе [«Честный ЗНАК»](https://честныйзнак.рф/) или [«ASL BELGISI»](https://aslbelgisi.uz) (для продавцов :no-translate[Market Yandex Go]). * УИН для ювелирных изделий. * РНПТ и ГТД для импортных прослеживаемых товаров.  Для каждой позиции в заказе, требующей маркировки, нужно передать список кодов — по одному для каждой единицы товара. Например, если в заказе две пары тапочек и одна пара туфель, получится список из двух кодов для первой позиции и список из одного кода для второй.  {% include notitle [limit](../../_auto/method_limits/provideOrderItemIdentifiers.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.
$provide_order_item_identifiers_request = new \OpenAPI\Client\Model\ProvideOrderItemIdentifiersRequest(); // \OpenAPI\Client\Model\ProvideOrderItemIdentifiersRequest

try {
    $result = $apiInstance->provideOrderItemIdentifiers($campaign_id, $order_id, $provide_order_item_identifiers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->provideOrderItemIdentifiers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **provide_order_item_identifiers_request** | [**\OpenAPI\Client\Model\ProvideOrderItemIdentifiersRequest**](../Model/ProvideOrderItemIdentifiersRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProvideOrderItemIdentifiersResponse**](../Model/ProvideOrderItemIdentifiersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putBidsForBusiness()`

```php
putBidsForBusiness($business_id, $put_sku_bids_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Включение буста продаж и установка ставок

{% include notitle [access](../../_auto/method_scopes/putBidsForBusiness.md) %}  Запускает буст продаж — создает и включает кампанию, добавляет в нее товары и назначает на них ставки.  {% cut \"Как в кабинете выглядит кампания, созданная через API\" %}  ![](../../_images/api-boost.png)  {% endcut %}  При первом использовании запроса Маркет: создаст единую на все магазины бизнес-аккаунта кампанию, добавит в нее товары с указанными ставками, включит для них ценовую стратегию и запустит продвижение. Повторное использование запроса позволит обновить ставки на товары в этой кампании или добавить новые. Подробнее о ценовой стратегии читайте в [Справке Маркета для продавцов](https://yandex.ru/support/marketplace/marketing/campaigns.html#price-strategy).  Если товара с указанным SKU нет, он будет проигнорирован. Если в будущем в каталоге появится товар с таким SKU, он автоматически будет добавлен в кампанию с указанной ставкой.  Запрос всегда работает с одной и той же созданной через API кампанией. Если в кабинете удалить ее, при следующем выполнении запроса Маркет создаст новую. Другими кампаниями управлять через API не получится. У созданной через API кампании всегда наибольший приоритет над остальными — изменить его нельзя.  Выполнение запроса включает кампанию и ценовую стратегию, если они были отключены.  Внести другие изменения в созданную через API кампанию можно в кабинете:  * выключить или включить кампанию; * изменить ее название; * выключить или включить ценовую стратегию.  Чтобы остановить продвижение отдельных товаров и удалить их из кампании, передайте для них нулевую ставку в параметре `bid`.  Подробнее о том, как работает буст продаж, читайте в [Справке Маркета для продавцов](https://yandex.ru/support/marketplace/marketing/campaigns.html).  Узнать расходы на буст продаж можно с помощью запроса [POST v2/campaigns/{campaignId}/stats/orders](../../reference/orders-stats/getOrdersStats.md). Сумма содержится в поле `bidFee`.  {% note info \"Данные обновляются не мгновенно\" %}  Это занимает до нескольких минут.  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/putBidsForBusiness.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$put_sku_bids_request = new \OpenAPI\Client\Model\PutSkuBidsRequest(); // \OpenAPI\Client\Model\PutSkuBidsRequest | description

try {
    $result = $apiInstance->putBidsForBusiness($business_id, $put_sku_bids_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->putBidsForBusiness: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **put_sku_bids_request** | [**\OpenAPI\Client\Model\PutSkuBidsRequest**](../Model/PutSkuBidsRequest.md)| description | |

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

## `putBidsForCampaign()`

```php
putBidsForCampaign($campaign_id, $put_sku_bids_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Включение буста продаж и установка ставок для магазина

{% include notitle [access](../../_auto/method_scopes/putBidsForCampaign.md) %}  Запускает буст продаж в указанном магазине — создает и включает кампанию, добавляет в нее товары и назначает на них ставки.  При первом использовании запроса Маркет: создаст кампанию, добавит в нее товары с указанными ставками для заданного магазина, включит для них ценовую стратегию и запустит продвижение. Повторное использование запроса позволит обновить ставки на товары в этой кампании или добавить новые. Подробнее о ценовой стратегии читайте в [Справке Маркета для продавцов](https://yandex.ru/support/marketplace/marketing/campaigns.html#price-strategy).  Если товара с указанным SKU нет, он будет проигнорирован. Если в будущем в каталоге появится товар с таким SKU, он автоматически будет добавлен в кампанию с указанной ставкой.  Запрос всегда работает с одной и той же кампанией, созданной через этот запрос или [PUT v2/businesses/{businessId}/bids](/reference/bids/putBidsForBusiness). Если в кабинете удалить ее, при следующем выполнении запроса Маркет создаст новую. У созданной через API кампании всегда наибольший приоритет над остальными — изменить его нельзя.  Выполнение запроса включает кампанию и ценовую стратегию, если они были отключены.  Внести другие изменения в созданную через API кампанию можно в кабинете:  * выключить или включить кампанию; * изменить ее название; * выключить или включить ценовую стратегию.  Чтобы остановить продвижение отдельных товаров и удалить их из кампании, передайте для них нулевую ставку в параметре `bid`.  Подробнее о том, как работает буст продаж, читайте в [Справке Маркета для продавцов](https://yandex.ru/support/marketplace/marketing/campaigns.html).  Узнать расходы на буст продаж можно с помощью запроса [POST v2/campaigns/{campaignId}/stats/orders](../../reference/orders-stats/getOrdersStats.md). Сумма содержится в поле `bidFee`.  {% note info \"Данные обновляются не мгновенно\" %}  Это занимает до нескольких минут.  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/putBidsForCampaign.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$put_sku_bids_request = new \OpenAPI\Client\Model\PutSkuBidsRequest(); // \OpenAPI\Client\Model\PutSkuBidsRequest | description

try {
    $result = $apiInstance->putBidsForCampaign($campaign_id, $put_sku_bids_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->putBidsForCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **put_sku_bids_request** | [**\OpenAPI\Client\Model\PutSkuBidsRequest**](../Model/PutSkuBidsRequest.md)| description | |

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

## `searchRegionChildren()`

```php
searchRegionChildren($region_id, $page_token, $limit, $page, $page_size): \OpenAPI\Client\Model\GetRegionWithChildrenResponse
```

Информация о дочерних регионах

{% include notitle [access](../../_auto/method_scopes/searchRegionChildren.md) %}  Возвращает информацию о регионах, являющихся дочерними по отношению к региону, идентификатор которого указан в запросе.  {% include notitle [limit](../../_auto/method_limits/searchRegionChildren.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$region_id = 56; // int | Идентификатор региона.  Идентификатор региона можно получить c помощью запроса [GET v2/regions](../../reference/regions/searchRegionsByName.md).
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 56; // int | {{ limit-truncate-param-description }}  {% note warning %}  У данного лимита нет значения по умолчанию.  {% endnote %}
$page = 1; // int | {% note warning \"Устаревший параметр\" %}  Вместо `page` и `pageSize` используйте пагинацию по `pageToken` и `limit`.  [Подробнее о типах пагинации и их использовании](../../concepts/pagination.md)  {% endnote %}  Номер страницы результатов.  Используется вместе с параметром `pageSize`.
$page_size = 56; // int | {% note warning \"Устаревший параметр\" %}  Вместо `page` и `pageSize` используйте пагинацию по `pageToken` и `limit`.  [Подробнее о типах пагинации и их использовании](../../concepts/pagination.md)  {% endnote %}  Размер страницы.  Используется вместе с параметром `page`.

try {
    $result = $apiInstance->searchRegionChildren($region_id, $page_token, $limit, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->searchRegionChildren: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **region_id** | **int**| Идентификатор региона.  Идентификатор региона можно получить c помощью запроса [GET v2/regions](../../reference/regions/searchRegionsByName.md). | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-truncate-param-description }}  {% note warning %}  У данного лимита нет значения по умолчанию.  {% endnote %} | [optional] |
| **page** | **int**| {% note warning \&quot;Устаревший параметр\&quot; %}  Вместо &#x60;page&#x60; и &#x60;pageSize&#x60; используйте пагинацию по &#x60;pageToken&#x60; и &#x60;limit&#x60;.  [Подробнее о типах пагинации и их использовании](../../concepts/pagination.md)  {% endnote %}  Номер страницы результатов.  Используется вместе с параметром &#x60;pageSize&#x60;. | [optional] [default to 1] |
| **page_size** | **int**| {% note warning \&quot;Устаревший параметр\&quot; %}  Вместо &#x60;page&#x60; и &#x60;pageSize&#x60; используйте пагинацию по &#x60;pageToken&#x60; и &#x60;limit&#x60;.  [Подробнее о типах пагинации и их использовании](../../concepts/pagination.md)  {% endnote %}  Размер страницы.  Используется вместе с параметром &#x60;page&#x60;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetRegionWithChildrenResponse**](../Model/GetRegionWithChildrenResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchRegionsById()`

```php
searchRegionsById($region_id): \OpenAPI\Client\Model\GetRegionByIdResponse
```

Информация о регионе

{% include notitle [access](../../_auto/method_scopes/searchRegionsById.md) %}  Возвращает информацию о регионе.  {% include notitle [limit](../../_auto/method_limits/searchRegionsById.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$region_id = 56; // int | Идентификатор региона.  Идентификатор региона можно получить c помощью запроса [GET v2/regions](../../reference/regions/searchRegionsByName.md).

try {
    $result = $apiInstance->searchRegionsById($region_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->searchRegionsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **region_id** | **int**| Идентификатор региона.  Идентификатор региона можно получить c помощью запроса [GET v2/regions](../../reference/regions/searchRegionsByName.md). | |

### Return type

[**\OpenAPI\Client\Model\GetRegionByIdResponse**](../Model/GetRegionByIdResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchRegionsByName()`

```php
searchRegionsByName($name, $page_token, $limit): \OpenAPI\Client\Model\GetRegionsResponse
```

Поиск регионов по их имени

{% include notitle [access](../../_auto/method_scopes/searchRegionsByName.md) %}  Возвращает информацию о регионе, удовлетворяющем заданным в запросе условиям поиска.  Если найдено несколько регионов, удовлетворяющих условиям поиска, возвращается информация по каждому найденному региону (но не более десяти регионов) для возможности определения нужного региона по родительским регионам.  {% include notitle [limit](../../_auto/method_limits/searchRegionsByName.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Название региона.  Важно учитывать регистр: первая буква должна быть заглавной, остальные — строчными. Например, `Москва`.
$page_token = 'page_token_example'; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра `nextPageToken`, полученное при последнем запросе.
$limit = 10; // int | {{ limit-param-description }}

try {
    $result = $apiInstance->searchRegionsByName($name, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->searchRegionsByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Название региона.  Важно учитывать регистр: первая буква должна быть заглавной, остальные — строчными. Например, &#x60;Москва&#x60;. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Передавайте значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе. | [optional] |
| **limit** | **int**| {{ limit-param-description }} | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\Model\GetRegionsResponse**](../Model/GetRegionsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendFileToChat()`

```php
sendFileToChat($business_id, $chat_id, $file): \OpenAPI\Client\Model\EmptyApiResponse
```

Отправка файла в чат

{% include notitle [access](../../_auto/method_scopes/sendFileToChat.md) %}  Отправляет файл в чат с покупателем.  {% include notitle [limit](../../_auto/method_limits/sendFileToChat.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$chat_id = 56; // int | Идентификатор чата.
$file = '/path/to/file.txt'; // \SplFileObject | Содержимое файла. Максимальный размер файла — 5 Мбайт.

try {
    $result = $apiInstance->sendFileToChat($business_id, $chat_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->sendFileToChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **chat_id** | **int**| Идентификатор чата. | |
| **file** | **\SplFileObject****\SplFileObject**| Содержимое файла. Максимальный размер файла — 5 Мбайт. | |

### Return type

[**\OpenAPI\Client\Model\EmptyApiResponse**](../Model/EmptyApiResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendMessageToChat()`

```php
sendMessageToChat($business_id, $chat_id, $send_message_to_chat_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Отправка сообщения в чат

{% include notitle [access](../../_auto/method_scopes/sendMessageToChat.md) %}  Отправляет сообщение в чат с покупателем.  {% include notitle [limit](../../_auto/method_limits/sendMessageToChat.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$chat_id = 56; // int | Идентификатор чата.
$send_message_to_chat_request = new \OpenAPI\Client\Model\SendMessageToChatRequest(); // \OpenAPI\Client\Model\SendMessageToChatRequest | description

try {
    $result = $apiInstance->sendMessageToChat($business_id, $chat_id, $send_message_to_chat_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->sendMessageToChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **chat_id** | **int**| Идентификатор чата. | |
| **send_message_to_chat_request** | [**\OpenAPI\Client\Model\SendMessageToChatRequest**](../Model/SendMessageToChatRequest.md)| description | |

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

## `setOrderBoxLayout()`

```php
setOrderBoxLayout($campaign_id, $order_id, $set_order_box_layout_request): \OpenAPI\Client\Model\SetOrderBoxLayoutResponse
```

Подготовка заказа

{% include notitle [access](../../_auto/method_scopes/setOrderBoxLayout.md) %}  {% note tip \"Подходит и для DBS\" %}  Запрос предназначен для работы с FBS-заказами, но вы можете использовать его для обработки DBS-заказов, если это удобно.  {% endnote %}  Позволяет выполнить три операции:  * передать Маркету информацию о распределении товаров по коробкам; * передать Маркету коды маркировки для товаров; * удалить товар из заказа, если его не оказалось на складе.  Если нужно что-то поправить в переданных данных, просто повторите запрос — это можно делать сколько угодно раз до перевода заказа в статус **Готов к отгрузке**. ⚠️ Если вы меняете раскладку уже после печати и расклейки ярлыков, не забудьте перепечатать их и наклеить заново.  {% cut \"Как передать информацию о распределении товаров\" %}  В этом запросе вам нужно передать Маркету список коробок и указать, какие именно товары лежат в каждой из них. Коробки могут быть двух типов:  * **Содержащие товары целиком.** Такая коробка может содержать сколько угодно единиц любых товаров.  * **Содержащие часть товара.** Такие коробки содержат по одной части одного товара. Например, одна содержит внешний блок кондиционера, а другая — внутренний блок.  ⚠️ Одна коробка не может содержать и товары целиком, и части товаров.  {% endcut %}  {% cut \"Как передавать коды маркировки и получать статус их проверки\" %}  {% note info \"Маркировка товаров в системе [«Честный ЗНАК»](https://честныйзнак.рф/) необязательна для заказов от физических лиц\" %}  Для заказов от бизнеса все еще нужно передавать коды маркировки.  {% endnote %}  Если в заказе есть товары, подлежащие маркировке, в запросе нужно передать соответствующие уникальные коды. [Что такое маркировка](https://yandex.ru/support/marketplace/orders/cz.html)  Принимаются коды следующих типов:  * Коды в системе [«Честный ЗНАК»](https://честныйзнак.рф/) или [«ASL BELGISI»](https://aslbelgisi.uz) (для продавцов :no-translate[Market Yandex Go]). * УИН для ювелирных изделий. * РНПТ и ГТД для импортных прослеживаемых товаров.  Для каждой позиции в заказе, требующей маркировки, нужно передать список кодов — по одному для каждой единицы товара. Например, если в заказе две пары тапочек и одна пара туфель, получится список из двух кодов для первой позиции и список из одного кода для второй.  Если товар едет в нескольких коробках, код маркировки нужно передать для каждой из них.  {% note warning \"Если вы работаете по модели FBS, EXPRESS\" %}  Для заказов, в которых есть ювелирные изделия или товары с маркировкой в системе :no-translate[«Честный ЗНАК»], перевод в статус `READY_TO_SHIP` становится доступен, только когда:  1. Вы передадите Маркету :no-translate[УИНы] по каждому ювелирному изделию в заказе и коды в системе :no-translate[«Честный ЗНАК»] по всем товарам в заказе, для которых обязательна эта маркировка. 2. Все коды маркировки успешно пройдут проверку. [Как получить статусы проверки](../../reference/orders/getOrderIdentifiersStatus.md)  {% endnote %}  {% endcut %}  {% cut \"Как удалить товар из заказа\" %}  Чтобы удалить товар из заказа:  1. Добавьте в запрос `allowRemove: true`. 2. Передайте распределение по коробкам без товара, который нужно удалить.  {% note warning \"Удаление нельзя отменить\" %}  Эта операция необратима: покупатель сразу получит уведомление, а состав заказа изменится.  {% endnote %}  Чтобы удалить позицию целиком, не передавайте соответствующий `OrderBoxLayoutItemDTO`. Чтобы уменьшить количество товара, передайте уменьшенное значение в поле `fullCount`.  Нельзя удалить или уменьшить количество товара, если он:  * добавлен по акции; * составляет 99% стоимости заказа; * единственный товар в заказе.  Если вы не можете отгрузить такой товар, отмените заказ. Для этого отправьте запрос методом [PUT v2/campaigns/{campaignId}/orders/{orderId}/status](../../reference/orders/updateOrderStatus.md) и передайте статус заказа `CANCELLED` с причиной отмены `SHOP_FAILED`.  {% endcut %}  {% note info \"Увеличить заказ нельзя\" %}  С помощью запроса нельзя увеличить количество одинаковых товаров, добавить новые товары в заказ или заменить один товар другим.  {% endnote %}  ## Примеры  {% cut \"Товар умещается в коробку\" %}  Вот как будет выглядеть запрос, если в одной коробке едут:    * три единицы одного товара, требующего маркировки;   * одна единица другого товара, не требущего маркировки.    ```json translate=no   {       \"boxes\": [           {               \"items\": [                   {                       \"id\": 123456,                       \"fullCount\": 3,                       \"instances\": [                           {                               \"cis\": \"01030410947874432155Qbag!\\u001d93Zjqw\"                           },                           {                               \"cis\": \"010304109478gftJ14545762!\\u001dhGt264\"                           },                           {                               \"cis\": \"010304109478fRs28323ks23!\\u001dhet201\"                           }                       ]                   },                   {                       \"id\": 654321,                       \"fullCount\": 1                   }               ]           }       ]   }   ```  {% endcut %}  {% cut \"Товар едет в разных коробках\" %}  Вот как будет выглядеть запрос, если товар едет в двух коробках:    ```json translate=no   {       \"boxes\": [           {               \"items\": [                   {                       \"id\": 123456,                       \"partialCount\": {                           \"current\": 1,                           \"total\": 2                       },                       \"instances\": [                           {                               \"cis\": \"01030410947874432155Qbag!\\u001d93Zjqw\"                           }                       ]                   }               ]           },           {               \"items\": [                   {                       \"id\": 123456,                       \"partialCount\": {                           \"current\": 2,                           \"total\": 2                       },                       \"instances\": [                           {                               \"cis\": \"01030410947874432155Qbag!\\u001d93Zjqw\"                           }                       ]                   }               ]           }       ]   }   ```  {% endcut %}  {% cut \"Одинаковые товары, где каждый едет в нескольких коробках\" %}  Вот как будет выглядеть запрос, если каждый из двух одинаковых товаров едет в двух коробках:    ```json translate=no   {       \"boxes\": [           {               \"items\": [                   {                       \"id\": 123456,                       \"partialCount\": {                           \"current\": 1,                           \"total\": 2                       },                       \"instances\": [                           {                               \"cis\": \"01030410947874432155Qbag!\\u001d93Zjqw\"                           }                       ]                   }               ]           },           {               \"items\": [                   {                       \"id\": 123456,                       \"partialCount\": {                           \"current\": 2,                           \"total\": 2                       },                       \"instances\": [                           {                               \"cis\": \"01030410947874432155Qbag!\\u001d93Zjqw\"                           }                       ]                   }               ]           },           {               \"items\": [                   {                       \"id\": 123456,                       \"partialCount\": {                           \"current\": 1,                           \"total\": 2                       },                       \"instances\": [                           {                               \"cis\": \"01030410947874432155Qbag!\\u001d93Zjqw\"                           }                       ]                   }               ]           },           {               \"items\": [                   {                       \"id\": 123456,                       \"partialCount\": {                           \"current\": 2,                           \"total\": 2                       },                       \"instances\": [                           {                               \"cis\": \"01030410947874432155Qbag!\\u001d93Zjqw\"                           }                       ]                   }               ]           }       ]   }   ```  {% endcut %}  {% cut \"Разные товары в разных коробках\" %}  Вот как будет выглядеть запрос, если два разных товара разложены по разным коробкам:    ```json translate=no   {       \"boxes\": [           {               \"items\": [                   {                       \"id\": 123456,                       \"fullCount\": 1                   }               ]           },           {               \"items\": [                   {                       \"id\": 654321,                       \"fullCount\": 1                   }               ]           }       ]   }   ```  {% endcut %}  {% include notitle [limit](../../_auto/method_limits/setOrderBoxLayout.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.
$set_order_box_layout_request = new \OpenAPI\Client\Model\SetOrderBoxLayoutRequest(); // \OpenAPI\Client\Model\SetOrderBoxLayoutRequest

try {
    $result = $apiInstance->setOrderBoxLayout($campaign_id, $order_id, $set_order_box_layout_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->setOrderBoxLayout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **set_order_box_layout_request** | [**\OpenAPI\Client\Model\SetOrderBoxLayoutRequest**](../Model/SetOrderBoxLayoutRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SetOrderBoxLayoutResponse**](../Model/SetOrderBoxLayoutResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setOrderDeliveryDate()`

```php
setOrderDeliveryDate($campaign_id, $order_id, $set_order_delivery_date_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Изменение даты доставки заказа

{% include notitle [access](../../_auto/method_scopes/setOrderDeliveryDate.md) %}  Метод изменяет дату доставки заказа в статусе `PROCESSING` или `DELIVERY`. Для заказов с другими статусами дату доставки изменить нельзя.  {% include notitle [limit](../../_auto/method_limits/setOrderDeliveryDate.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.
$set_order_delivery_date_request = new \OpenAPI\Client\Model\SetOrderDeliveryDateRequest(); // \OpenAPI\Client\Model\SetOrderDeliveryDateRequest

try {
    $result = $apiInstance->setOrderDeliveryDate($campaign_id, $order_id, $set_order_delivery_date_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->setOrderDeliveryDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **set_order_delivery_date_request** | [**\OpenAPI\Client\Model\SetOrderDeliveryDateRequest**](../Model/SetOrderDeliveryDateRequest.md)|  | |

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

## `setOrderDeliveryTrackCode()`

```php
setOrderDeliveryTrackCode($campaign_id, $order_id, $set_order_delivery_track_code_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Передача трек‑номера посылки

{% include notitle [access](../../_auto/method_scopes/setOrderDeliveryTrackCode.md) %}  Передает Маркету трек‑номер, по которому покупатель может отследить посылку со своим заказом через службу доставки. Если покупатели смогут узнать, на каком этапе доставки находятся их заказы, доверие покупателей к вашему магазину может возрасти.  Передать трек‑номер можно, только если заказ находится в статусе `PROCESSING`, `DELIVERY` или `PICKUP`.  {% include notitle [limit](../../_auto/method_limits/setOrderDeliveryTrackCode.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.
$set_order_delivery_track_code_request = new \OpenAPI\Client\Model\SetOrderDeliveryTrackCodeRequest(); // \OpenAPI\Client\Model\SetOrderDeliveryTrackCodeRequest

try {
    $result = $apiInstance->setOrderDeliveryTrackCode($campaign_id, $order_id, $set_order_delivery_track_code_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->setOrderDeliveryTrackCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **set_order_delivery_track_code_request** | [**\OpenAPI\Client\Model\SetOrderDeliveryTrackCodeRequest**](../Model/SetOrderDeliveryTrackCodeRequest.md)|  | |

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

## `setOrderShipmentBoxes()`

```php
setOrderShipmentBoxes($campaign_id, $order_id, $shipment_id, $set_order_shipment_boxes_request): \OpenAPI\Client\Model\SetOrderShipmentBoxesResponse
```

Передача количества грузовых мест в заказе

{% include notitle [access](../../_auto/method_scopes/setOrderShipmentBoxes.md) %}  Отгружаемый Маркету заказ может не влезть в одну коробку или упаковку — в этом случае получается, что он занимает несколько грузовых мест.  Количество грузовых мест нужно обязательно передавать Маркету, если оно не равно 1. Это делается перед переводом его в статус **Готов к отгрузке**. Подробно о том, что в какой момент нужно передавать, рассказано в [пошаговой инструкции](../../step-by-step/fbs.md).  Метод устроен немного нестандартно: количество задается длиной массива пустых объектов.  Раньше метод требовал передачи большего количества данных. Запросы, оформленные по старому образцу, работают, но лучше делать по-новому.  {% cut \"Как было раньше\" %}  Структура тела PUT-запроса:  ```text translate=no {   \"boxes\":   [     {       \"fulfilmentId\": \"{string}\",       \"weight\": {int64},       \"width\": {int64},       \"height\": {int64},       \"depth\": {int64},       \"items\":       [         {           \"id\": {int64},           \"count\": {int32}         },         ...       ]     },     ...   ] } ``` | **Параметр**  | **Тип**  | **Значение**  | | ----------- | ----------- | ----------- | | `boxes`       |           | Список грузовых мест.       |  **Параметры, вложенные в `boxes`** | **Параметр**  | **Тип**  | **Значение**  | | ----------- | ----------- | ----------- | | `fulfilmentId`       |  :no-translate[String]   | Идентификатор грузового места в системе магазина. Сформируйте идентификатор по шаблону: `номер заказа на Маркете-номер грузового места`. Например, `7206821‑1, 7206821‑2` и т. д. | | `weight`       | :no-translate[Int64]        | Масса брутто грузового места (суммарная масса упаковки и содержимого) в граммах. | | `width`       | :no-translate[Int64]   | Ширина грузового места в сантиметрах.       | | `height`       | :no-translate[Int64]   | Высота грузового места в сантиметрах.       | | `depth`       | :no-translate[Int64]   | Глубина грузового места в сантиметрах.        | | `items`       | :no-translate[Int64]   | Список товаров в грузовом месте.       |  **Параметры, вложенные в `items`** | **Параметр**  | **Тип**  | **Значение**  | | ----------- | ----------- | ----------- | | `id`       | :no-translate[Int64]     | Идентификатор товара в рамках заказа.   | | `count`    | :no-translate[Int32]     | Количество единиц товара в грузовом месте.       |  {% endcut %}  {% include notitle [limit](../../_auto/method_limits/setOrderShipmentBoxes.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.
$shipment_id = 56; // int | { % note warning \"Параметр больше не используется\" % }  Передайте любое число, чтобы получился корректный URL.  { % endnote % }  Идентификатор грузового места.
$set_order_shipment_boxes_request = new \OpenAPI\Client\Model\SetOrderShipmentBoxesRequest(); // \OpenAPI\Client\Model\SetOrderShipmentBoxesRequest

try {
    $result = $apiInstance->setOrderShipmentBoxes($campaign_id, $order_id, $shipment_id, $set_order_shipment_boxes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->setOrderShipmentBoxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **shipment_id** | **int**| { % note warning \&quot;Параметр больше не используется\&quot; % }  Передайте любое число, чтобы получился корректный URL.  { % endnote % }  Идентификатор грузового места. | |
| **set_order_shipment_boxes_request** | [**\OpenAPI\Client\Model\SetOrderShipmentBoxesRequest**](../Model/SetOrderShipmentBoxesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SetOrderShipmentBoxesResponse**](../Model/SetOrderShipmentBoxesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setReturnDecision()`

```php
setReturnDecision($campaign_id, $order_id, $return_id, $set_return_decision_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Принятие или изменение решения по возврату

{% include notitle [access](../../_auto/method_scopes/setReturnDecision.md) %}  Выбирает решение по возврату от покупателя. После этого для подтверждения решения нужно выполнить запрос [POST v2/campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/submit](../../reference/returns/submitReturnDecision.md).  {% include notitle [limit](../../_auto/method_limits/setReturnDecision.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.
$return_id = 56; // int | Идентификатор невыкупа или возврата.
$set_return_decision_request = new \OpenAPI\Client\Model\SetReturnDecisionRequest(); // \OpenAPI\Client\Model\SetReturnDecisionRequest

try {
    $result = $apiInstance->setReturnDecision($campaign_id, $order_id, $return_id, $set_return_decision_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->setReturnDecision: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
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
    echo 'Exception when calling DbsApi->skipGoodsFeedbacksReaction: ', $e->getMessage(), PHP_EOL;
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

## `submitReturnDecision()`

```php
submitReturnDecision($campaign_id, $order_id, $return_id, $submit_return_decision_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Передача решения по возврату

{% include notitle [access](../../_auto/method_scopes/submitReturnDecision.md) %}  Позволяет передать список решений по возврату.  {% note info \"Перед вызовом метода\" %}  Получите список доступных решений — [POST v1/businesses/{businessId}/returns/decisions](../../reference/returns/getReturnAvailableDecisions.md).  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/submitReturnDecision.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.
$return_id = 56; // int | Идентификатор невыкупа или возврата.
$submit_return_decision_request = new \OpenAPI\Client\Model\SubmitReturnDecisionRequest(); // \OpenAPI\Client\Model\SubmitReturnDecisionRequest | description

try {
    $result = $apiInstance->submitReturnDecision($campaign_id, $order_id, $return_id, $submit_return_decision_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->submitReturnDecision: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
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

## `updateBusinessPrices()`

```php
updateBusinessPrices($business_id, $update_business_prices_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Установка цен на товары для всех магазинов

{% include notitle [access](../../_auto/method_scopes/updateBusinessPrices.md) %}  Устанавливает цены, которые действуют во всех магазинах. Чтобы получить рекомендации Маркета, касающиеся цен, выполните запрос [POST v2/businesses/{businessId}/offers/recommendations](../../reference/offers/getOfferRecommendations.md).  При необходимости передавайте НДС с помощью параметра `vat` в запросе [POST v2/campaigns/{campaignId}/offers/update](../../reference/offers/updateCampaignOffers.md).  {% note info \"Данные в каталоге обновляются не мгновенно\" %}  Это занимает до нескольких минут.  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/updateBusinessPrices.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$update_business_prices_request = new \OpenAPI\Client\Model\UpdateBusinessPricesRequest(); // \OpenAPI\Client\Model\UpdateBusinessPricesRequest

try {
    $result = $apiInstance->updateBusinessPrices($business_id, $update_business_prices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->updateBusinessPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
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

## `updateCampaignOffers()`

```php
updateCampaignOffers($campaign_id, $update_campaign_offers_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Изменение условий продажи товаров в магазине

{% include notitle [access](../../_auto/method_scopes/updateCampaignOffers.md) %}  Изменяет параметры размещения товаров в конкретном магазине: доступность товара и применяемый НДС.  {% include notitle [limit](../../_auto/method_limits/updateCampaignOffers.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$update_campaign_offers_request = new \OpenAPI\Client\Model\UpdateCampaignOffersRequest(); // \OpenAPI\Client\Model\UpdateCampaignOffersRequest

try {
    $result = $apiInstance->updateCampaignOffers($campaign_id, $update_campaign_offers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->updateCampaignOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **update_campaign_offers_request** | [**\OpenAPI\Client\Model\UpdateCampaignOffersRequest**](../Model/UpdateCampaignOffersRequest.md)|  | |

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

## `updateExternalOrderId()`

```php
updateExternalOrderId($campaign_id, $order_id, $update_external_order_id_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Передача внешнего идентификатора заказа

{% include notitle [access](../../_auto/method_scopes/updateExternalOrderId.md) %}  Передает Маркету идентификатор заказа в системе магазина.  Его нельзя передавать:  * больше одного раза; * после перехода заказа в статус `PROCESSING` с подстатусом `READY_TO_SHIP`.  Этот идентификатор отражается в документах отгрузки: акте приема-передачи, листе сборки и ярлыках.  {% note alert \"В штрихкодах могут быть только символы ASCII\" %}  Если во внешнем идентификаторе вы используете другие символы, на ярлыке в штрихкоде будет отображаться идентификатор заказа Маркета.  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/updateExternalOrderId.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.
$update_external_order_id_request = new \OpenAPI\Client\Model\UpdateExternalOrderIdRequest(); // \OpenAPI\Client\Model\UpdateExternalOrderIdRequest

try {
    $result = $apiInstance->updateExternalOrderId($campaign_id, $order_id, $update_external_order_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->updateExternalOrderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **update_external_order_id_request** | [**\OpenAPI\Client\Model\UpdateExternalOrderIdRequest**](../Model/UpdateExternalOrderIdRequest.md)|  | |

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
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
    echo 'Exception when calling DbsApi->updateGoodsFeedbackComment: ', $e->getMessage(), PHP_EOL;
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

## `updateGoodsQuestionTextEntity()`

```php
updateGoodsQuestionTextEntity($business_id, $update_goods_question_text_entity_request): \OpenAPI\Client\Model\UpdateGoodsQuestionTextEntityResponse
```

Создание, изменение и удаление ответа или комментария

{% include notitle [access](../../_auto/method_scopes/updateGoodsQuestionTextEntity.md) %}  Создание, изменение и удаление ответа или комментария.  {% include notitle [limit](../../_auto/method_limits/updateGoodsQuestionTextEntity.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$update_goods_question_text_entity_request = new \OpenAPI\Client\Model\UpdateGoodsQuestionTextEntityRequest(); // \OpenAPI\Client\Model\UpdateGoodsQuestionTextEntityRequest

try {
    $result = $apiInstance->updateGoodsQuestionTextEntity($business_id, $update_goods_question_text_entity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->updateGoodsQuestionTextEntity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **update_goods_question_text_entity_request** | [**\OpenAPI\Client\Model\UpdateGoodsQuestionTextEntityRequest**](../Model/UpdateGoodsQuestionTextEntityRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdateGoodsQuestionTextEntityResponse**](../Model/UpdateGoodsQuestionTextEntityResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOfferContent()`

```php
updateOfferContent($business_id, $update_offer_content_request): \OpenAPI\Client\Model\UpdateOfferContentResponse
```

Редактирование категорийных характеристик товара

{% include notitle [access](../../_auto/method_scopes/updateOfferContent.md) %}  Редактирует характеристики товара, которые специфичны для категории, к которой он относится.  {% note warning \"Здесь только то, что относится к конкретной категории\" %}  Если вам нужно изменить основные параметры товара (название, описание, изображения, видео, производитель, штрихкод), воспользуйтесь запросом [POST v2/businesses/{businessId}/offer-mappings/update](../../reference/business-offer-mappings/updateOfferMappings.md).  {% endnote %}  Чтобы удалить характеристики, которые заданы в параметрах с типом `string`, передайте пустое значение.  {% note info \"Данные в каталоге обновляются не мгновенно\" %}  Это занимает до нескольких минут.  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/updateOfferContent.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$update_offer_content_request = new \OpenAPI\Client\Model\UpdateOfferContentRequest(); // \OpenAPI\Client\Model\UpdateOfferContentRequest

try {
    $result = $apiInstance->updateOfferContent($business_id, $update_offer_content_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->updateOfferContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **update_offer_content_request** | [**\OpenAPI\Client\Model\UpdateOfferContentRequest**](../Model/UpdateOfferContentRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdateOfferContentResponse**](../Model/UpdateOfferContentResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOfferMappings()`

```php
updateOfferMappings($business_id, $update_offer_mappings_request, $language): \OpenAPI\Client\Model\UpdateOfferMappingsResponse
```

Добавление товаров в каталог и изменение информации о них

{% include notitle [access](../../_auto/method_scopes/updateOfferMappings.md) %}  Добавляет товары в каталог и передает:  * их [листовые категории](*list-categories) на Маркете и категорийные характеристики; * основные характеристики; * цены на товары в кабинете.  Также объединяет товары на карточке, редактирует и удаляет информацию об уже добавленных товарах, в том числе цены в кабинете и категории товаров.  Список категорий Маркета можно получить с помощью запроса [POST v2/categories/tree](../../reference/categories/getCategoriesTree.md), а характеристики товаров по категориям с помощью [POST v2/category/{categoryId}/parameters](../../reference/content/getCategoryContentParameters.md).  {% cut \"Добавить новый товар\" %}  Передайте его с новым идентификатором, который раньше никогда не использовался в каталоге.  Обязательно укажите параметры: `offerId`, `name`, `marketCategoryId`, `pictures`, `vendor`, `description`.  Старайтесь сразу передать как можно больше информации — она потребуется Маркету для подбора подходящей карточки или создания новой.  Если известно, какой карточке на Маркете соответствует товар, можно сразу указать идентификатор этой карточки (SKU на Маркете) в поле `marketSKU`.  **Для продавцов Market Yandex Go:**  Когда вы добавляете товары в каталог, указывайте значения параметров `name` и `description` на русском языке. Чтобы на витрине они отображались и на другом языке, еще раз выполните запрос `POST v2/businesses/{businessId}/offer-mappings/update`, где укажите:    * язык в параметре `language`;   * значения параметров `name` и `description` на указанном языке.    Повторно передавать остальные характеристики товара не нужно.  {% endcut %}  {% cut \"Изменить информацию о товаре\" %}  Передайте новые данные, указав в `offerId` SKU товара в вашей системе.  Поля, в которых ничего не меняется, можно не передавать.  {% endcut %}  {% cut \"Удалить переданные ранее параметры товара\" %}  В `deleteParameters` укажите значения параметров, которые хотите удалить. Можно передать сразу несколько значений.  Для параметров с типом `string` также можно передать пустое значение.  {% endcut %}  Параметр `offerId` (SKU товара в вашей системе) должен быть **уникальным** для всех товаров, которые вы передаете.  {% note warning \"Правила использования SKU\" %}  * У каждого товара SKU должен быть свой.  * Уже заданный SKU нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  SKU товара можно изменить в кабинете продавца на Маркете. О том, как это сделать, читайте [в Справке Маркета для продавцов](https://yandex.ru/support2/marketplace/ru/assortment/operations/edit-sku).  {% endnote %}  {% note info \"Данные в каталоге обновляются не мгновенно\" %}  Это занимает до нескольких минут.  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/updateOfferMappings.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$update_offer_mappings_request = new \OpenAPI\Client\Model\UpdateOfferMappingsRequest(); // \OpenAPI\Client\Model\UpdateOfferMappingsRequest
$language = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\CatalogLanguageType(); // \OpenAPI\Client\Model\CatalogLanguageType | Язык, на котором принимаются и возвращаются значения в параметрах `name` и `description`.  Значение по умолчанию: `RU`.

try {
    $result = $apiInstance->updateOfferMappings($business_id, $update_offer_mappings_request, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->updateOfferMappings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **update_offer_mappings_request** | [**\OpenAPI\Client\Model\UpdateOfferMappingsRequest**](../Model/UpdateOfferMappingsRequest.md)|  | |
| **language** | [**\OpenAPI\Client\Model\CatalogLanguageType**](../Model/.md)| Язык, на котором принимаются и возвращаются значения в параметрах &#x60;name&#x60; и &#x60;description&#x60;.  Значение по умолчанию: &#x60;RU&#x60;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\UpdateOfferMappingsResponse**](../Model/UpdateOfferMappingsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderItems()`

```php
updateOrderItems($campaign_id, $order_id, $update_order_item_request)
```

Удаление товаров из заказа или уменьшение их числа

{% include notitle [access](../../_auto/method_scopes/updateOrderItems.md) %}  {% note warning \"Если вы работаете по модели FBS\" %}  Используйте метод [PUT v2/campaigns/{campaignId}/orders/{orderId}/boxes](../../reference/orders/setOrderBoxLayout.md).  {% endnote %}  Удаляет один или несколько товаров из заказа, если магазин не может поставить их все.  Заказ должен находится в статусе `\"status\": \"PROCESSING\"` этапа обработки `\"substatus\": \"STARTED\"`. Изменить состав нельзя после передачи статуса `\"substatus\": \"READY_TO_SHIP\"`.  {% cut \"Уменьшить количество одинаковых товаров\" %}  Передайте обновленное значение в параметре `count`.  {% endcut %}  {% cut \"Удалить товар из заказа\" %}  Передайте значение `0` в параметре `count` или не передавайте `item`.  {% endcut %}  Нельзя удалить или уменьшить количество товара, если он:  * добавлен по акции; * составляет 99% стоимости заказа; * единственный товар в заказе.  В таком случае отмените заказ — в методе [PUT v2/campaigns/{campaignId}/orders/{orderId}/status](../../reference/orders/updateOrderStatus.md) передайте статус заказа `CANCELLED` с причиной отмены `SHOP_FAILED`.  ### Как вернутся деньги {#money}    Если покупатель оплатил товар при оформлении, Маркет вернет ему деньги за удаленные из заказа товары в течение двух дней:    * при оплате банковской картой — с момента, когда магазин переведет заказ в статус `SHIPPED`;    * при оплате через :no-translate[Apple Pay] или :no-translate[Google Pay] — с момента, когда магазин удалит товар из заказа.  {% endcut %}  {% include notitle [limit](../../_auto/method_limits/updateOrderItems.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.
$update_order_item_request = new \OpenAPI\Client\Model\UpdateOrderItemRequest(); // \OpenAPI\Client\Model\UpdateOrderItemRequest

try {
    $apiInstance->updateOrderItems($campaign_id, $order_id, $update_order_item_request);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->updateOrderItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **update_order_item_request** | [**\OpenAPI\Client\Model\UpdateOrderItemRequest**](../Model/UpdateOrderItemRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderStatus()`

```php
updateOrderStatus($campaign_id, $order_id, $update_order_status_request): \OpenAPI\Client\Model\UpdateOrderStatusResponse
```

Изменение статуса одного заказа

{% include notitle [access](../../_auto/method_scopes/updateOrderStatus.md) %}  Изменяет статус заказа. Возможные изменения статусов:  * Если магазин подтвердил и подготовил заказ к отправке, то заказ из статуса `\"status\": \"PROCESSING\"` и этапа обработки `\"substatus\": \"STARTED\"` нужно перевести в статус `\"status\": \"PROCESSING\"` и этап обработки `\"substatus\": \"READY_TO_SHIP\"`. * Если магазин подтвердил заказ, но не может его выполнить (например, товар числится в базе, но отсутствует на складе или нет нужного цвета), то заказ из статуса `\"status\": \"PROCESSING\"` и этапа обработки `\"substatus\": \"STARTED\"` нужно перевести в статус `\"status\": \"CANCELLED\"` с причиной отмены заказа `\"substatus\": \"SHOP_FAILED\"`. * Если магазин подготовил заказ к отгрузке, но не может его выполнить (например, последний товар был поврежден или оказался с браком), то заказ из статуса `\"status\": \"PROCESSING\"` и этапа обработки `\"substatus\": \"READY_TO_SHIP\"` нужно перевести в статус `\"status\": \"CANCELLED\"` с причиной отмены заказа `\"substatus\": \"SHOP_FAILED\"`.  Полная информация о статусной модели DBS-заказов: [Как изменяются статусы заказов](../../concepts/dbs-order-status-model.md).  {% cut \"**Как подтвердить LaaS-заказ**\" %}  Для подтверждения черновика заказа передайте статус `\"status\": \"PROCESSING\"` с подстатусом `\"substatus\": \"STARTED\"`.  Подтверждение заказа, созданного с параметром `draft` равным `false`, не требуется.  {% endcut %}  {% cut \"**Как отменить LaaS-заказ**\" %}  Передайте статус `\"status\": \"CANCELLED\"` с причиной отмены заказа `\"substatus\": \"SHOP_FAILED\"`.  При успешном выполнении запроса отмена произойдет через некоторое время. [Как проверить статус операции](../../reference/operations/getOperations.md)  {% endcut %}  {% include notitle [limit](../../_auto/method_limits/updateOrderStatus.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.
$update_order_status_request = new \OpenAPI\Client\Model\UpdateOrderStatusRequest(); // \OpenAPI\Client\Model\UpdateOrderStatusRequest

try {
    $result = $apiInstance->updateOrderStatus($campaign_id, $order_id, $update_order_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->updateOrderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **update_order_status_request** | [**\OpenAPI\Client\Model\UpdateOrderStatusRequest**](../Model/UpdateOrderStatusRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdateOrderStatusResponse**](../Model/UpdateOrderStatusResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderStatuses()`

```php
updateOrderStatuses($campaign_id, $update_order_statuses_request): \OpenAPI\Client\Model\UpdateOrderStatusesResponse
```

Изменение статусов нескольких заказов

{% include notitle [access](../../_auto/method_scopes/updateOrderStatuses.md) %}  Изменяет статусы нескольких заказов.  Возможные изменения статусов:  * Если магазин подтвердил и подготовил заказ к отправке, то заказ из статуса `\"status\": \"PROCESSING\"`и этапа обработки `\"substatus\": \"STARTED\"` нужно перевести в статус `\"status\": \"PROCESSING\"` и этап обработки `\"substatus\": \"READY_TO_SHIP\"`. * Если магазин подтвердил заказ, но не может его выполнить (например, товар числится в базе, но отсутствует на складе или нет нужного цвета), то заказ из статуса `\"status\": \"PROCESSING\"` и этапа обработки `\"substatus\": \"STARTED\"` нужно перевести в статус `\"status\": \"CANCELLED\"` с причиной отмены заказа `\"substatus\": \"SHOP_FAILED\"`. * Если магазин подготовил заказ к отгрузке, но не может его выполнить (например, последний товар был поврежден или оказался с браком), то заказ из статуса `\"status\": \"PROCESSING\"` и этапа обработки `\"substatus\": \"READY_TO_SHIP\"` нужно перевести в статус `\"status\": \"CANCELLED\"` с причиной отмены заказа `\"substatus\": \"SHOP_FAILED\"`.  Полная информация о статусной модели DBS-заказов: [Как изменяются статусы заказов](../../concepts/dbs-order-status-model.md).  {% cut \"**Как подтвердить LaaS-заказ**\" %}  Для подтверждения черновика заказа передайте статус `\"status\": \"PROCESSING\"` с подстатусом `\"substatus\": \"STARTED\"`.  Подтверждение заказа, созданного с параметром `draft` равным `false`, не требуется.  {% endcut %}  {% cut \"**Как отменить LaaS-заказ**\" %}  Передайте статус `\"status\": \"CANCELLED\"` с причиной отмены заказа `\"substatus\": \"SHOP_FAILED\"`.  При успешном выполнении запроса отмена произойдет через некоторое время. [Как проверить статус операции](../../reference/operations/getOperations.md)  {% endcut %}  {% include notitle [limit](../../_auto/method_limits/updateOrderStatuses.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$update_order_statuses_request = new \OpenAPI\Client\Model\UpdateOrderStatusesRequest(); // \OpenAPI\Client\Model\UpdateOrderStatusesRequest

try {
    $result = $apiInstance->updateOrderStatuses($campaign_id, $update_order_statuses_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->updateOrderStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **update_order_statuses_request** | [**\OpenAPI\Client\Model\UpdateOrderStatusesRequest**](../Model/UpdateOrderStatusesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdateOrderStatusesResponse**](../Model/UpdateOrderStatusesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderStorageLimit()`

```php
updateOrderStorageLimit($campaign_id, $order_id, $update_order_storage_limit_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Продление срока хранения заказа

{% include notitle [access](../../_auto/method_scopes/updateOrderStorageLimit.md) %}  Продлевает срок хранения заказа в пункте выдачи продавца.  Заказ должен быть в статусе `PICKUP`. Продлить срок можно только один раз, не больше чем на 30 дней.  Новый срок хранения можно получить в параметре `outletStorageLimitDate` в ответе метода [POST v1/businesses/{businessId}/orders](../../reference/orders/getBusinessOrders.md).  {% include notitle [limit](../../_auto/method_limits/updateOrderStorageLimit.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.
$update_order_storage_limit_request = new \OpenAPI\Client\Model\UpdateOrderStorageLimitRequest(); // \OpenAPI\Client\Model\UpdateOrderStorageLimitRequest

try {
    $result = $apiInstance->updateOrderStorageLimit($campaign_id, $order_id, $update_order_storage_limit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->updateOrderStorageLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **update_order_storage_limit_request** | [**\OpenAPI\Client\Model\UpdateOrderStorageLimitRequest**](../Model/UpdateOrderStorageLimitRequest.md)|  | |

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

## `updateOutlet()`

```php
updateOutlet($campaign_id, $outlet_id, $change_outlet_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Изменение информации о точке продаж

{% include notitle [access](../../_auto/method_scopes/updateOutlet.md) %}  Изменяет информацию о точке продаж магазина на Маркете.  {% include notitle [limit](../../_auto/method_limits/updateOutlet.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$outlet_id = 56; // int | Идентификатор точки продаж.
$change_outlet_request = new \OpenAPI\Client\Model\ChangeOutletRequest(); // \OpenAPI\Client\Model\ChangeOutletRequest

try {
    $result = $apiInstance->updateOutlet($campaign_id, $outlet_id, $change_outlet_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->updateOutlet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **outlet_id** | **int**| Идентификатор точки продаж. | |
| **change_outlet_request** | [**\OpenAPI\Client\Model\ChangeOutletRequest**](../Model/ChangeOutletRequest.md)|  | |

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

## `updateOutletLicenses()`

```php
updateOutletLicenses($campaign_id, $update_outlet_license_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Создание и изменение лицензий для точек продаж

{% include notitle [access](../../_auto/method_scopes/updateOutletLicenses.md) %}  Передает информацию о новых и существующих лицензиях для точек продаж. Поддерживаются только лицензии на розничную продажу алкоголя.  Чтобы размещать алкогольную продукцию на Маркете, надо также прислать гарантийное письмо (если вы еще не делали этого раньше) и правильно оформить предложения в прайс-листе. Далее информация о лицензиях проходит проверку.  {% include notitle [limit](../../_auto/method_limits/updateOutletLicenses.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$update_outlet_license_request = new \OpenAPI\Client\Model\UpdateOutletLicenseRequest(); // \OpenAPI\Client\Model\UpdateOutletLicenseRequest

try {
    $result = $apiInstance->updateOutletLicenses($campaign_id, $update_outlet_license_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->updateOutletLicenses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **update_outlet_license_request** | [**\OpenAPI\Client\Model\UpdateOutletLicenseRequest**](../Model/UpdateOutletLicenseRequest.md)|  | |

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

{% include notitle [access](../../_auto/method_scopes/updatePrices.md) %}  Устанавливает цены на товары в магазине. Чтобы получить рекомендации Маркета, касающиеся цен, выполните запрос [POST v2/businesses/{businessId}/offers/recommendations](../../reference/offers/getOfferRecommendations.md).  {% note warning \"Метод только для отдельных магазинов\" %}  Вам доступен этот метод, если в кабинете продавца на Маркете есть возможность установить уникальные цены в отдельных магазинах. Как это проверить — в методе [POST v2/businesses/{businessId}/settings](../../reference/businesses/getBusinessSettings.md) в параметре `onlyDefaultPrice` возвращается значение `false`.  В ином случае используйте метод управления ценами, которые действуют во всех магазинах, — [POST v2/businesses/{businessId}/offer-prices/updates](../../reference/prices/updateBusinessPrices.md).  {% endnote %}  {% note info \"Данные в каталоге обновляются не мгновенно\" %}  Это занимает до нескольких минут.  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/updatePrices.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$update_prices_request = new \OpenAPI\Client\Model\UpdatePricesRequest(); // \OpenAPI\Client\Model\UpdatePricesRequest

try {
    $result = $apiInstance->updatePrices($campaign_id, $update_prices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->updatePrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
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

## `updatePromoOffers()`

```php
updatePromoOffers($business_id, $update_promo_offers_request): \OpenAPI\Client\Model\UpdatePromoOffersResponse
```

Добавление товаров в акцию или изменение их цен

{% include notitle [access](../../_auto/method_scopes/updatePromoOffers.md) %}  Добавляет товары в акцию или изменяет цены на товары, которые участвуют в акции.  Изменения начинают действовать в течение 4–6 часов. Узнать, применились ли они, можно с помощью параметра `processing` в ответе метода [POST v2/businesses/{businessId}/promos](../../reference/promos/getPromos.md).  {% include notitle [limit](../../_auto/method_limits/updatePromoOffers.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета.  {% if audience == \"partner\" %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %}
$update_promo_offers_request = new \OpenAPI\Client\Model\UpdatePromoOffersRequest(); // \OpenAPI\Client\Model\UpdatePromoOffersRequest

try {
    $result = $apiInstance->updatePromoOffers($business_id, $update_promo_offers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->updatePromoOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета.  {% if audience &#x3D;&#x3D; \&quot;partner\&quot; %}  Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)  {% endif %} | |
| **update_promo_offers_request** | [**\OpenAPI\Client\Model\UpdatePromoOffersRequest**](../Model/UpdatePromoOffersRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdatePromoOffersResponse**](../Model/UpdatePromoOffersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStocks()`

```php
updateStocks($campaign_id, $update_stocks_request): \OpenAPI\Client\Model\EmptyApiResponse
```

Передача информации об остатках

{% include notitle [access](../../_auto/method_scopes/updateStocks.md) %}  Передает данные об остатках товаров на витрине.  Для группы складов передавайте остатки только для **одного любого склада**. Информация для остальных складов в этой группе обновится автоматически.  Обязательно указывайте SKU **в точности** так, как он указан в каталоге. Например, _557722_ и _0557722_ — это два разных SKU.  {% note info \"Данные в каталоге обновляются не мгновенно\" %}  Это занимает до нескольких минут.  {% endnote %}  {% include notitle [limit](../../_auto/method_limits/updateStocks.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$update_stocks_request = new \OpenAPI\Client\Model\UpdateStocksRequest(); // \OpenAPI\Client\Model\UpdateStocksRequest

try {
    $result = $apiInstance->updateStocks($campaign_id, $update_stocks_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->updateStocks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **update_stocks_request** | [**\OpenAPI\Client\Model\UpdateStocksRequest**](../Model/UpdateStocksRequest.md)|  | |

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

## `updateWarehouseStatus()`

```php
updateWarehouseStatus($campaign_id, $update_warehouse_status_request): \OpenAPI\Client\Model\UpdateWarehouseStatusResponse
```

Изменение статуса склада

{% include notitle [access](../../_auto/method_scopes/updateWarehouseStatus.md) %}  Отключает или включает склад.  После отключения склада товары, которые находятся на нем, скрываются через 15 минут. После включения они возвращаются на витрину через 15 минут, а если склад был выключен 30 дней или дольше — через 4 часа.  {% include notitle [limit](../../_auto/method_limits/updateWarehouseStatus.md) %}

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


$apiInstance = new OpenAPI\Client\Api\DbsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$update_warehouse_status_request = new \OpenAPI\Client\Model\UpdateWarehouseStatusRequest(); // \OpenAPI\Client\Model\UpdateWarehouseStatusRequest

try {
    $result = $apiInstance->updateWarehouseStatus($campaign_id, $update_warehouse_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DbsApi->updateWarehouseStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **update_warehouse_status_request** | [**\OpenAPI\Client\Model\UpdateWarehouseStatusRequest**](../Model/UpdateWarehouseStatusRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UpdateWarehouseStatusResponse**](../Model/UpdateWarehouseStatusResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
