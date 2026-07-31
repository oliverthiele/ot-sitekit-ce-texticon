# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

---

## [4.0.0] — 2026-07-31

### Changed

- **Breaking:** Require `oliverthiele/ot-irrebuttons ^5.0`
- **Breaking:** Require `oliverthiele/ot-sitekit-base ^1.0`, replacing the `*`
  wildcard that dated from before the base extension had a tagged release

### Fixed

- `ext_emconf.php` did not declare `ot_sitekitbase` under `depends`, although
  `composer.json` requires it. A non-Composer installation therefore never
  verified that dependency
- `ext_emconf.php` left `suggests` empty, while `composer.json` suggests
  `ot-iconselector` — the extension uses its selector for the
  `icon_identifier` field when it is installed

---

## [3.0.0] — 2026-07-28

### Changed

- Drop TYPO3 v13 support, require TYPO3 `^14.3`
- Raise PHP minimum to `>=8.4`
- Require `ot-icons` `^3.0`
- Migrate the language files from XLIFF 1.2 to XLIFF 2.0. Unit identifiers and
  all translations are unchanged, so no label reference needs adjusting
- Reference labels via translation domain mapping instead of full file paths:
  `ot_sitekitcetexticon.db:` replaces
  `LLL:EXT:ot_sitekitcetexticon/Resources/Private/Language/locallang_db.xlf:`,
  and the media tab label now uses `core.form.tabs:media`

---

## [2.1.0] — 2026-06-23

### Added

- Per-element icon style selection via `icon_style` TCA select field
- Icon rendering via `<i:icon>` ViewHelper with `icon_style` support, asset image as fallback
- `otIconSelector` renderType for `icon_identifier` field when `ot-iconselector` is installed
- `ot-icons` (`^2.1`) as required dependency
- `ot-iconselector` as suggested dependency

---

## [2.0.0] — 2026-04-25

### Added

- TYPO3 v14.3 support (`^13.4||^14.3`)

### Changed

- Raise PHP minimum constraint to `>=8.3`
- Raise `ot-irrebuttons` constraint to `^4.0`
- Drop TYPO3 v12 support

---

## [1.0.2] — 2026-01-26

### Added

- SiteKit configuration for CE Text with Icon element

---

## [1.0.0] — 2025-10-10

### Added

- Initial release

[Unreleased]: https://github.com/oliverthiele/ot-sitekit-ce-texticon/compare/v4.0.0...HEAD
[4.0.0]: https://github.com/oliverthiele/ot-sitekit-ce-texticon/compare/v3.0.0...v4.0.0
[3.0.0]: https://github.com/oliverthiele/ot-sitekit-ce-texticon/compare/v2.1.0...v3.0.0
[2.1.0]: https://github.com/oliverthiele/ot-sitekit-ce-texticon/compare/v2.0.0...v2.1.0
[2.0.0]: https://github.com/oliverthiele/ot-sitekit-ce-texticon/compare/v1.0.2...v2.0.0
[1.0.2]: https://github.com/oliverthiele/ot-sitekit-ce-texticon/compare/v1.0.0...v1.0.2
[1.0.0]: https://github.com/oliverthiele/ot-sitekit-ce-texticon/releases/tag/v1.0.0