# Retrosanity

The most lightweight WordPress theme possible for Elementor.

## What It Does

Provides just the essentials:
- Header with navigation
- Footer
- WordPress Customizer settings
- Clean canvas for Elementor page building

## Why

- Elementor optimized so page speed is still fast. Added as little as possible, so there's no bloat.
- This extended version, for theme without header/footer see original retrosanity.

## Features

- Minimal CSS footprint (header, footer, sidenav, bottom sections)
- Customizer integration for theme settings
- Standard WordPress template hierarchy support
- Mobile-friendly navigation

## Customizer Settings

**Retrosanity - Heading** section:
- Header background color
- Navigation text color
- Navigation hover underline color
- Logo image uploader (falls back to default)

## Navigation Menus

Three menu locations registered:
- **Hoofd Menu** - Primary header nav (desktop + mobile sidebar)
- **Footer menu 1** - First footer column
- **Footer menu 2** - Second footer column

## Built-in Features

- Mobile hamburger menu with sidebar nav
- Auto-disables WordPress fullscreen editor mode
- Social icons (WhatsApp, Instagram) in footer
- Logo customization via Customizer (with fallback)

## Structure

- Standard `header.php` / `footer.php` so `get_header()` / `get_footer()` work everywhere (required by Elementor templates)
- Modular partials (header navigation, footer, bottom) loaded via `get_template_part()`
- All CSS/JS enqueued through `wp_enqueue_scripts` with cache-busting versions
- Separate CSS files per section
- Minimal JavaScript (vanilla sidenav toggle, no jQuery on the frontend)

## Todo

- Footer editable in customizer
- Better css structure
- Testing with woocommerce
- Archive page with cards for cpt's
