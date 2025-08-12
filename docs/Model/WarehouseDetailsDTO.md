# # WarehouseDetailsDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор склада. |
**name** | **string** | Название склада. |
**campaign_id** | **int** | Идентификатор кампании того магазина, который связан со складом.  Его можно узнать с помощью запроса [GET campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете — нажмите на название своего бизнеса и перейдите на страницу:    * **Модули и :no-translate[API]** → блок **Передача данных Маркету**.   * **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не передавайте вместо него идентификатор магазина, который указан в кабинете продавца на Маркете рядом с названием магазина и в некоторых отчетах. |
**express** | **bool** | Возможна ли доставка для модели Экспресс. |
**group_info** | [**\OpenAPI\Client\Model\WarehouseGroupInfoDTO**](WarehouseGroupInfoDTO.md) |  | [optional]
**address** | [**\OpenAPI\Client\Model\WarehouseAddressDTO**](WarehouseAddressDTO.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\WarehouseStatusDTO**](WarehouseStatusDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
