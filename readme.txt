=== IIS Chinese Tag Permalink  ===
Contributors: bossma
Donate link:http://blog.bossma.cn
Tags: chinese tag, iis
Requires at least: 3.0
Tested up to: 3.0.2
Stable tag: 1.0

== Description ==

In iis,if you use chinese tag and custom rewrite permalinks, it will get a 404 error.
Perhaps this is because the IIS to get the URL with the GBK encoding,but the wordpress with UTF8.

This plugin can solve the above problem. 

Also,you must install the "WordPress URL Rewrite" on IIS first.
You can get it from "http://www.binaryfortress.com/wordpress-url-rewrite".

== Installation ==

1. Upload `iis-chinese-tag-permalink` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Need to install iis rewrite component?  =

Yes.With WordPress URL Rewrite.

== Changelog ==

= 1.0 =
* This is the first version.

== Upgrade Notice ==

== Screenshots ==
