=== Plugin Name ===
Contributors: znaeff
Donate link: http://xbsoft.org
Tags: comments, spam, blocking, DNSBL, spamhaus, spamcop, free
Requires at least: -.-.-
Tested up to: 3.1.2
Stable tag: 0.9.2

Free spam IP blocker according to public DNSBL bases.

== Description ==

This is a spam IP blocker. It is free. It marks any new comment as spam automatically when commenter's IP exists in at least one of '.zen.spamhaus.org' & '.bl.spamcop.net'.
Plugin is based on public DNSBL class.
[Official page of DNSBL class on PHPClasses.org](http://www.phpclasses.org/package/6994-PHP-Check-spam-IP-address-in-DNS-black-lists.html "DNSBL class on PHPClasses.org")

== Installation ==

1. Upload folder `spam-ip-blocker` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('plugin_name_hook'); ?>` in your templates

== Frequently Asked Questions ==

= Why do I need one more anti-spam plugin? =

Because I haven't found any free plugins using biggest spam blocking lists all together.

== Screenshots ==

There are no screenshots yet.

== Changelog ==

= 0.9 =
First version.

= 0.9.1 =
Now plugin uses just one default DNSBL checker.
DNSBL class also fixed to aviod this problem:
[http://www.spamhaus.org/faq/answers.lasso?section=DNSBL%20Usage#243 "Your DNSBL blocks the whole Internet!"]

= 0.9.2 =
Added the new feature of new DNSBL class version.
Group checking is back, 'all' key provides checking in group available checkers, now they are 'spamhaus' & 'spamcop'.
See readme of DNSBL class for details:
[http://www.phpclasses.org/package/6994-PHP-Check-spam-IP-address-in-DNS-black-lists.html "DNSBL class on PHPClasses.org"]

== Upgrade Notice ==

= 0.9 =
First version.

= 0.9.1 =
Error with incorrect DNS-server answers fixed.

= 0.9.1 =
Added the new feature of new DNSBL class version.
