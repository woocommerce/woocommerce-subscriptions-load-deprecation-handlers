## WooCommerce Subscriptions Load Deprecation Handlers

WooCommerce Subscriptions v2.0 deprecated a number of [hooks](https://codex.wordpress.org/Plugin_API/Hooks) after changing the underlying storage and data structure of the subscription object.

To maintain backward compatibility, Subscriptions continued to call these deprecated hooks with data mapped to their old values.

This improved compatibility with out-of-date code. However, it also imposed additional overhead.

Subscriptions v2.1 no longer calls deprecated hooks by default.

The code to call these hooks is still available in Subscriptions, but instead of loading it by default, it now needs to be "switched on". This plugin switches it on.

This code is no longer loaded by default because it was slowing down all stores for the few running out-of-date code.

### Installation

1. Upload the plugin's files to the `/wp-content/plugins/` directory of your WordPress site
1. Activate the plugin through the **Plugins** menu in WordPress

### Requirements

In order to use the extension, you will need:

* WooCommerce Subscriptions v2.1 or newer (you could use it on older versions, but there is no need)
* WooCommerce v2.4 or newer, the version required by Subscriptions v2.1

### Further Reading

The FAQ on [Subscriptions 2.0 Deprecated Hooks & Query Monitor Warning](https://docs.woocommerce.com/document/subscriptions-query-monitor-warning/) provides additional background on the deprecated hooks. You can also find a [complete list of the deprecated hooks](https://docs.woocommerce.com/document/subscriptions-query-monitor-warning/#section-4) in that article.

#### License

This plugin is released under [GNU General Public License v3.0](http://www.gnu.org/licenses/gpl-3.0.html).

---

<p align="center">
<img src="https://cloud.githubusercontent.com/assets/235523/11986380/bb6a0958-a983-11e5-8e9b-b9781d37c64a.png" width="160">
</p>
