# ot-sitekit-ce-texticon

This TYPO3 extension provides a content element that displays an icon above a text block.
It is part of the TYPO3 Sitekit ecosystem.

## Requirements

- TYPO3 v13.4 or newer
- [oliverthiele/ot-sitekit-base](https://packagist.org/packages/oliverthiele/ot-sitekit-base)
- [oliverthiele/ot-irrebuttons](https://packagist.org/packages/oliverthiele/ot-irrebuttons)

## Features

- Adds a content element for an icon + text layout
- Integrates optional button management below the text using `ot-irrebuttons`
- Compatible with the `lib.sitekitContentElement` rendering structure from `ot-sitekit-base`

## Installation

```bash
composer require oliverthiele/ot-sitekit-ce-texticon
```

## TypoScript Integration

Make sure to include the TypoScript set from this extension in your sitepackage.
For example, in your `my-sitepackage/Configuration/Sets/Main/config.yaml` file
(or wherever your sitepackage manages dependencies):

```yaml
name: example/my-sitepackage

dependencies:
- typo3/fluid-styled-content
- oliverthiele/ot-sitekit-base
- oliverthiele/ot-sitekit-base-container-cards
# …
- oliverthiele/ot-sitekit-ce-texticon
# …
```

## License

GPL-2.0-or-later
