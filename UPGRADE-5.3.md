# CHANGELOG for Shopware 5.3.x

This changelog references changes done in Shopware 5.3 patch versions.

## 5.3.0

[View all changes from v5.2.9...v5.3.0](https://github.com/shopware/shopware/compare/v5.2.9...v5.3.0)

### Additions

* Added config element `displayOnlySubShopVotes` to display only shop assigned article votes
* Added parameter `displayProgressOnSingleDelete` to `Shopware.grid.Panel` to hide progress window on single delete action
* Added parameter `expression` in `Shopware.listing.FilterPanel` to allow define own query expressions
* Added parameter `splitFields` to `Shopware.model.Container` to configure fieldset column layout
* Added interface `Shopware\Components\Captcha\CaptchaInterface`
* Added method `Shopware\Models\Order\Repository::getList()`
* Added method `Shopware\Models\Order\Repository::search()`
* Added method `Shopware\Models\Order\Repository::getDocuments()`
* Added method `Shopware\Models\Order\Repository::getDetails()`
* Added method `Shopware\Models\Order\Repository::getPayments()`
* Added responsive helper css/less classes in `_mixins/visibility-helper.less`
* Added `displayListingBuyButton` config to display listing buy button

### Changes

* Changed theme path for new plugins from `/resources` into `/Resources`
* Changed sorting of `Shopware.listing.FilterPanel` fields
* Changed database column `s_articles_vote`.`answer_date` to allow `NULL` values
* Changed `LastArticle` plugin config elements `show`, `controller` and `time` to be prefixed with `lastarticles_`
* Changed product listings in shopping worlds to only be loaded if `showListing` is true
* Changed sql query in `sAdmin` queries which uses a sub query for address compatibility, following functions affected:
    * `sAdmin::sGetDispatchBasket`
    * `sAdmin::sGetPremiumDispatches`
    * `sAdmin::sGetPremiumDispatchSurcharge`
* Changed attribute type `string` mapping to mysql `TEXT` type. String and single selection data type supports no longer a sql default value.

### Removals

* Removed configuration option `sCOUNTRYSHIPPING`
* Removed `{$sShopname}` from forms, use `{sShopname}` instead
* Removed import / export module
* Removed article vote module files
    * `themes/Backend/ExtJs/backend/vote/view/vote/detail.js`
    * `themes/Backend/ExtJs/backend/vote/view/vote/edit.js`
    * `themes/Backend/ExtJs/backend/vote/view/vote/infopanel.js`
    * `themes/Backend/ExtJs/backend/vote/view/vote/list.js`
    * `themes/Backend/ExtJs/backend/vote/view/vote/toolbar.js`
    * `themes/Backend/ExtJs/backend/vote/view/vote/window.js`
    * `themes/Backend/ExtJs/backend/vote/controller/vote.js`
    * `themes/Backend/ExtJs/backend/vote/controller/vote.js`
* Removed database column `s_emarketing_lastarticles`.`articleName`
* Removed database column `s_emarketing_lastarticles`.`img`
* Removed default plugin `LastArticle`, use `shopware.components.last_articles_subscriber` instead
* Removed session key `sLastArticle`
* Removed view variable `sLastActiveArticle` from basket
* Removed block `frontend_checkout_actions_link_last`
* Removed snippet `frontend/checkout/actions/CheckoutActionsLinkLast`
* Removed meta tag `fragment`
* Removed view variable `hasEscapedFragment`
* Removed method `Shopware\Models\Order\Repository::getBackendOrdersQueryBuilder()`
* Removed method `Shopware\Models\Order\Repository::getBackendOrdersQuery()`
* Removed method `Shopware\Models\Order\Repository::getBackendAdditionalOrderDataQuery()`
* Removed jQuery plugin method `showFallbackContent` in `jquery.emotion.js`
* Removed jQuery plugin method `hideFallbackContent` in `jquery.emotion.js`
* Removed jQuery plugin event `plugin/swEmotionLoader/onShowFallbackContent` in `jquery.emotion.js`
* Removed jQuery plugin event `plugin/swEmotionLoader/onHideFallbackContent`in `jquery.emotion.js`
* Removed alias support from `Enlight_Controller_Request_Request` (`getAlias`, `getAliases`, `setAlias`)
* Removed unused Zend Framework Components
    * Changes to `Zend_Json`
        * Removed `Zend_Json_Decoder`
        * Removed `Zend_Json_Encoder`
        * Removed `Zend_Json_Expr`
        * Option `enableJsonExprFinder`
        * Removed property `Zend_Json::$useBuiltinEncoderDecoder`
        * Removed property `Zend_Json::$maxRecursionDepthAllowed`
        * Removed method `Zend_Json::fromXml()`
    * Changes to `Zend_Loader`
         * Removed `Zend_Loader_Autoloader`
         * Removed `Zend_Loader_ClassMapAutoloader`
         * Removed `Zend_Loader_StandardAutoloader`
         * Removed `Zend_Loader_Autoloader_Resource`
         * Removed method `Zend_Loader::autoload()`
         * Removed method `Zend_Loader::registerAutoload()`
    * Changes to `Zend_DB` 
        * Removed unused adapters like Db2, Mysqli, Oracle, Ibm, MsSql, Oci, PgSQL, Sqlsrv
    * `Zend_Controller`
    * `Zend_Navigation`
    * `Zend_View`
    * `Zend_Form`
    * `Zend_Paginator`
    * `Zend_Crypt`
    * `Zend_Oauth`
    * `Zend_Dom`
    * `Zend_Server`
    * `Zend_Rest`
    * `Zend_Stdlib`
    * `Zend_Text`
    * `Zend_Debug`
    * `Zend_Registry`
    * `Zend_XmlRpc`
    * `Zend_Soap`
    * `Zend_Service`
    * `Zend_Filter_Compress`
    * `Zend_Filter_Decompress`
    * `Zend_Filter_Encrypt`
    * `Zend_Filter_Decrypt`
    * `Zend_Layout`
        * Also removed `Zend_Log_Writer_Mail::setLayout()` config options `layout` and `layoutFormatter` `setLayoutFormatter()` `getLayoutFormatter()`
    * `Zend_Infocard`
         * Also removed `Zend_Auth_Adapter_InfoCard`
    * `Zend_OpenId`
         * Also removed `Zend_Auth_Adapter_OpenId`
    * `Zend_TimeSync`
        * Also removed TimeSync support from `Zend_Date`
    * `Zend_ProgressBar` 
        * Also removed ProgressBar support from `Zend_File_Transfer_Adapter_Http`
    * `Zend_Ldap` 
        * Also removed `Zend_Auth_Adapter_Ldap` 
        * Also removed `Zend_Validate_Ldap_Dn`
    * `Zend_Wildfire`
        * Also removed `Zend_Db_Profiler_Firebug`
        * Also removed `Zend_Log_Formatter_Firebug`
        * Also removed `Zend_Log_Writer_Firebug`
    * `Zend_File`
        * Also removed `Zend_Filter_File_*`
        * Also removed `Zend_Validate_File_*`
* Removed method `Shopware\Components\Model\ModelManager::__call()`
* Removed class `Enlight_Application`
* Removed function `Enlight()`
* Removed class `Enlight_Bootstrap`
* Removed class `Shopware_Bootstrap`
* Removed service ID `bootstrap`
* Remmoved the following methods from `Shopware` respectively `Enlight_Application`:
    - `Shopware()/Enlight()->DS()`
    - `Shopware()/Enlight()->setEventManager()`
    - `Shopware()/Enlight()->Bootstrap()`
    - `Shopware()/Enlight()->App()`
    - `Shopware()/Enlight()->Environment()`
    - `Shopware()/Enlight()->OldPath()`
    - `Shopware()/Enlight()->CorePath()`
    - `Shopware()/Enlight()->ComponentsPath()`
    - `Shopware()/Enlight()->Path()`
* Removed parameter `$checkProxy` from `Enlight_Controller_Request_Request::getClientIp()`
    
### Deprecations

* Deprecated `Shopware_Components_Convert_Csv` without replacement, to be removed with 5.4
* Deprecated `Shopware_Components_Convert_Xml` without replacement, to be removed with 5.4
* Deprecated `Shopware_Components_Convert_Excel` without replacement, to be removed with 5.4

### Backend Components

You can now define the expression for the comparison in SQL. For example `>=` like seen below:

```javascript
Ext.define('Shopware.apps.Vote.view.list.extensions.Filter', {
    extend: 'Shopware.listing.FilterPanel',
    alias:  'widget.vote-listing-filter-panel',
    configure: function() {
        return {
            controller: 'Vote',
            model: 'Shopware.apps.Vote.model.Vote',
            fields: {
                points: {
                    expression: '>=',
                }
            }
        };
    }
});
```

### Captcha

Captchas are now configurable via backend and can be added using the `captcha` dependency injection container tag.

```xml
<service id="shopware.captcha.recaptcha" class="SwagReCaptcha\ReCaptcha">
    <argument type="service" id="guzzle_http_client_factory"/>
    <argument type="service" id="config"/>
    <tag name="captcha"/>
</service>
```

For more information, please refer to our [Captcha Documentation](https://developers.shopware.com/developers-guide/implementing-your-own-captcha/).