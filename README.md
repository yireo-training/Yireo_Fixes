# Yireo Fixes for Magento 2
Collection of fixes for issues in Magento 2.

## CSP Whitelist
Adds a `etc/csp_whitelist.xml` file to get rid of CSP message in the browsers Error Console on the frontend. Adds a `etc/config` entry to point towards a dummy CSP reporting URL.

## MessageQueue dummy resolving
Adds a dummy resolver for the MessageQueue when the module has been removed from Magento. Fixes a broken REST call `rest/en/V1/carts/mine/estimate-shipping-methods-by-address-id` but not really.
