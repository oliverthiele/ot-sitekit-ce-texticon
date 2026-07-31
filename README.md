# OT SiteKit CE Text with Icon — TYPO3 Content Element

Content element that displays an icon above a text block for TYPO3 v14. Part of
the [SiteKit ecosystem](https://packagist.org/packages/oliverthiele/ot-sitekit-base).

[![TYPO3](https://img.shields.io/badge/TYPO3-14.3-orange.svg)](https://typo3.org/)
[![Packagist Version](https://img.shields.io/packagist/v/oliverthiele/ot-sitekit-ce-texticon.svg)](https://packagist.org/packages/oliverthiele/ot-sitekit-ce-texticon)
[![PHP](https://img.shields.io/packagist/dependency-v/oliverthiele/ot-sitekit-ce-texticon/php.svg)](https://php.net/)
[![License](https://img.shields.io/packagist/l/oliverthiele/ot-sitekit-ce-texticon.svg)](LICENSE)
[![Changelog](https://img.shields.io/badge/Changelog-CHANGELOG.md-blue.svg)](CHANGELOG.md)

---

## Features

- Icon above text block layout
- Optional button management via `ot-irrebuttons`
- Compatible with `lib.sitekitContentElement` from `ot-sitekit-base`

---

## Requirements

| Package                        | Version           |
|--------------------------------|-------------------|
| `typo3/cms-core`               | `^14.3`           |
| PHP                            | `>=8.4`           |
| `oliverthiele/ot-sitekit-base` | `^1.0`            |
| `oliverthiele/ot-icons`        | `^3.0`            |
| `oliverthiele/ot-irrebuttons`  | `^5.0`            |

---

## Installation

```bash
composer require oliverthiele/ot-sitekit-ce-texticon
```

### Include SiteSet

Add the extension as a dependency in your site configuration
(`config/sites/yoursite/config.yaml`):

```yaml
dependencies:
    - oliverthiele/ot-sitekit-ce-texticon
```

---

## License

GPL-2.0-or-later — see [LICENSE](LICENSE)

## Author

Oliver Thiele — [oliver-thiele.de](https://www.oliver-thiele.de)