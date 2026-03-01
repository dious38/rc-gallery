# Snap Gallery for Joomla 5/6

[![Version](https://img.shields.io/badge/version-6.1.6-blue.svg)](https://github.com/dious38/rc-gallery/releases/tag/v6.1.6)
[![Joomla](https://img.shields.io/badge/Joomla-5%20%2F%206-orange.svg)](https://www.joomla.org/)
[![PHP](https://img.shields.io/badge/PHP-8.1%2B-purple.svg)](https://www.php.net/)
[![License](https://img.shields.io/badge/license-GPL--2.0-green.svg)](LICENSE)

A responsive gallery plugin for Joomla that displays beautiful edge-to-edge image galleries in your articles via simple `{gallery}folder{/gallery}` tags.

Snap Gallery is a fork of [RC Gallery](https://github.com/TheRichCourt/rc-gallery) by Rich Court, fully rewritten for **Joomla 5/6** compatibility with modern PHP 8.1+ support. Submitted to the [Joomla Extensions Directory (JED)](https://extensions.joomla.org/).

## Features

- **Justified layout** — edge-to-edge image rows without cropping, like Flickr or Google Photos
- **Responsive** — looks great on all screen sizes, dynamically resizes with the browser
- **Automatic thumbnails** — JPEG + WebP, LDPI + HDPI, generated on first view or via AJAX
- **Built-in shadowbox** — lightweight JavaScript lightbox with keyboard and swipe navigation
- **Inline parameters** — override settings per gallery: `{gallery target-row-height="200" image-margin-size="5"}folder{/gallery}`
- **Customisable** — row height, image spacing, sorting (name/date/random), title display, and more
- **Editor button** — insert `{gallery}` tags from the article editor via a modal with folder browser, layout choice, and parameter overrides
- **Package installer** — one-step install for both plugins (content + editor button) via `pkg_snap_gallery.zip`
- **5 languages** — English, French, German, Spanish, Italian

## Installation

1. Download `pkg_snap_gallery.zip` from the [Releases page](https://github.com/dious38/rc-gallery/releases)
2. In Joomla admin: **System > Install > Upload Package File**
3. Both plugins (Content and Editor Button) are automatically enabled
4. Configure the **Root image folder** in the plugin settings (Gallery tab)

## Requirements

- Joomla 5.x or 6.x
- PHP 8.1+

## Usage

Add a gallery to any article by inserting:

```
{gallery}my-image-folder{/gallery}
```

The folder path is relative to the root image folder configured in the plugin settings.

### Inline parameters

Override default settings for a specific gallery:

```
{gallery target-row-height="200" image-margin-size="5"}my-image-folder{/gallery}
```

## Editor Button

The package includes an **Editor Button plugin** that adds a "Snap Gallery" button to the Joomla article editor. Clicking it opens a modal where you can:

- Browse available image folders
- Choose a layout (justified or square grid)
- Set inline parameters (row height, margins, sort order, image titles)
- Insert the generated `{gallery}` tag directly into your article

No need to remember the tag syntax — the button builds it for you.

## Changelog

### v6.1.6
- Fix duplicate update site on Rebuild (only the package carries `<updateservers>` now)

### v6.1.5
- Fix JED Checker issues: `<name>` language key, fr-FR escaped quotes, exclude `tests/` from ZIP
- Add clickable links in all 5 language files

### v6.1.4
- Fix update server detection (`<client>site</client>` required for packages and content plugins)
- Add `<tags>`, `<maintainer>`, `<maintainerurl>` in `updates.xml`

### v6.1.3
- Fix duplicate update site when installed via package

### v6.1.2
- Fix package install error on Joomla 5 and 6 (rewrite `script.php` with DI)

### v6.1.1
- Fix update server for package installs (add package entry in `updates.xml`)
- Improve fr-FR translations (native UTF-8, clickable links)

### v6.1.0
- New: Editor button plugin for easy `{gallery}` tag insertion from the article editor
- New: Package installer (both plugins install in one step)
- Add GPL license headers to all PHP files

### v6.0.1
- New: Square Grid layout (`{gallery layout="square_grid"}folder{/gallery}`)
- Remove legacy external layouts support

### v6.0.0
- Renamed from RC Gallery to Snap Gallery for JED publication
- Added update server for automatic updates via Joomla
- New version numbering (6.0.0)

### v5.0.2
- Fix RC Shadowbox with single-image galleries (image disappearing, prev/next arrows hidden)

### v5.0.1
- Fix AJAX thumbnail generation (missing path separator)
- Fix language strings not loaded on frontend
- Fix missing translation keys for title text alignment
- Fix dataset property mismatch in rc_gallery.js
- Add internationalization: 5 languages (EN, FR, DE, ES, IT)

### v5.0.0
- Full migration from Joomla 3/4 to Joomla 5/6
- Modern architecture: `CMSPlugin` + `SubscriberInterface`, PSR-4 namespaces, dependency injection
- All legacy APIs replaced (`JPlugin`, `JFactory`, `JFolder`, `jimport`, etc.)
- Static assets moved to `media/` with WebAssetManager support
- Fix PHP 8.2+ deprecation in ThumbnailFactory (float to int)
- Fix `exif_read_data` crash
- Handle Unicode curly quotes from Joomla 6 TinyMCE editor

## Credits

Originally created by [Rich Court](https://github.com/TheRichCourt) as RC Gallery. This fork is maintained by [dious38](https://github.com/dious38) under the same GPL-2.0 license.
