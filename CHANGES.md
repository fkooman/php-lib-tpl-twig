# Release History

## 1.3.2 (2016-04-11)
- only test with en_XX locales as not all test services
  have all the locales installed
- remove language installs from Travis-CI file
- no longer test on HHVM, has no gettext support

## 1.3.1 (2016-04-11)
- make locale code more robust, fix Travis-CI build

## 1.3.0 (2016-04-11)
- implement i18n support

## 1.2.0 (2016-02-04)
- implement `addDefault`
- update `fkooman/tpl` dependency

## 1.1.0 (2015-12-17)
- add ability to add filters to Twig using `addFilter`

## 1.0.0 (2015-08-10)
- initial release
