[![TYPO3 11](https://img.shields.io/badge/TYPO3-11-orange.svg)](https://get.typo3.org/version/11)

# TYPO3 Extension `w4_cacheautoclear` 

Clears the cache of related pages after saving records. It's configured out of the box for files managed via `Filelist` and the extensions `news` and `tt_address`, but any kind of record from other third party extension can be added via setup.

Once installed, when creating or modifying any file in the `Filelist` or a `news` or `tt_address` record (or any other record configured in the setup), the cache of the pages containing plugins of Uploads, news or addressess (or any other extension configured) are cleared, without the need for the editors to clear the FE cache.

|                  | URL                                                       |
|------------------|-----------------------------------------------------------|
| **Repository:**  | https://github.com/w4holding/w4_cacheautoclear            |
| **TER:**         | https://extensions.typo3.org/extension/w4_cacheautoclear/ |

## Compatibility

| w4_cacheautoclear | TYPO3 | PHP       | Support / Development                |
|-------------------|-------|-----------|--------------------------------------|
| dev-main          | 11.5  | 7.4 - 8.1 | unstable development branch          |
| 1.x.x             | 11.5  | 7.4 - 8.1 | features, bugfixes, security updates |

## Installation

Install via composer:

    composer require w4services/w4_cacheautoclear
