=== Pressbooks Shibboleth Single Sign-On ===
Contributors: conner_bw, greatislander
Donate link: https://opencollective.com/pressbooks/
Tags: pressbooks, sso, shibboleth
Requires at least: 4.9.7
Tested up to: 4.9
Stable tag: 0.0.1
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Shibboleth Single Sign-On integration for Pressbooks.

== Description ==

[![Packagist](https://img.shields.io/packagist/v/pressbooks/pressbooks-shibboleth-sso.svg?style=flat-square)](https://packagist.org/packages/pressbooks/pressbooks-shibboleth-sso) [![GitHub release](https://img.shields.io/github/release/pressbooks/pressbooks-shibboleth-sso.svg?style=flat-square)](https://github.com/pressbooks/pressbooks-shibboleth-sso/releases) [![Travis](https://img.shields.io/travis/pressbooks/pressbooks-shibboleth-sso.svg?style=flat-square)](https://travis-ci.org/pressbooks/pressbooks-shibboleth-sso/) [![Codecov](https://img.shields.io/codecov/c/github/pressbooks/pressbooks-shibboleth-sso.svg?style=flat-square)](https://codecov.io/gh/pressbooks/pressbooks-shibboleth-sso)

Plugin to integrate Pressbooks with a [Shibboleth](https://www.shibboleth.net/) single sign-on service.

Users who attempt to login to Pressbooks are redirected to a Shibboleth or SAML2 Identity Provider. After the user’s credentials are verified, they are redirected back to the
Pressbooks network. If the Shibboleth UID matches the Pressbooks username, the user is recognized as valid and allowed access. If the CAS user does not have an account in
Pressbooks, a new user can be created, or access can be refused, depending on the configuration.

== Installation ==

```
composer require pressbooks/pressbooks-shibboleth-sso
```

Or, download the latest version from the releases page and unzip it into your WordPress plugin directory): https://github.com/pressbooks/pressbooks-shibboleth-sso/releases

Then, create the necessary certificates:

```
cd vendor/onelogin/php-saml/certs
openssl req -newkey rsa:2048 -new -x509 -days 3652 -nodes -out sp.crt -keyout sp.key
openssl req -newkey rsa:2048 -new -x509 -days 3652 -nodes -out metadata.crt -keyout metadata.key
```

Then, activate and configure the plugin at the Network level.

== Screenshots ==

TK

== Changelog ==

= 0.0.1 =
* TK

== Upgrade Notice ==

= 0.0.1 =
* Pressbooks Shibboleth Single Sign-On requires Pressbooks >= 5.4 and WordPress >= 4.9
