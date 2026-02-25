---
id: add-ons/editor-button-add-on
title: Editor button
sidebar_label: Editor button
---

# Editor button

The editor button plugin adds a "Snap Gallery" button to the Joomla article editor, making it easy to insert gallery tags without typing them manually.

This plugin is included with Snap Gallery and distributed as a separate `editors-xtd` plugin for Joomla 5/6. It is inspired by Rich Court's original [Editor Button Addon](https://therichcourt.com/joomla/gallery-editor-button-addon), rewritten from scratch for Joomla 5/6.

## How it works

Once installed and enabled, a **Snap Gallery** button appears below the article editor. Clicking it opens a modal where you can:

1. **Choose the image folder** for your gallery (lists all subfolders from your configured root folder)
2. **Optionally override plugin settings**: layout, row height, margins, sort order, image titles
3. **Preview the tag** that will be generated
4. Click **"Insert"** to add the `{gallery}` tag into your article

![Editor button](../editor-button.png)

## Available options

The following settings can be overridden per-gallery from the modal:

| Option | Inline parameter | Values |
|--------|-----------------|--------|
| Layout | `layout` | justified, square_grid |
| Target row height | `target-row-height` | Number (px) |
| Image margin | `image-margin-size` | Number (px) |
| Sort by | `sort-type` | 0 (filename), 1 (date), 2 (random) |
| Sort direction | `sort-desc` | 0 (ascending), 1 (descending) |
| Image titles | `image-title-option` | 0 (hide), 1 (hover), 2 (always) |

When left as "Default", the option is not included in the tag and the plugin's global settings apply.

## Installation

The editor button plugin is installed alongside Snap Gallery via the package installer, or separately as `plg_editors_xtd_snap_gallery.zip`.

After installation, verify the plugin is enabled under **System > Plugins > Snap Gallery - Editor Button**.

> [!NOTE]
> You can always insert gallery tags manually without this plugin. See [Include in an article](../include-in-an-article.md) for details.
