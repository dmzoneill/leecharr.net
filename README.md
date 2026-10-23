# leecharr.net

WordPress site for the Leecharr BitTorrent media downloader. The theme style sheet describes it as a BitTorrent Media Downloader theme based on the Leecharr design, with theme URI `https://leecharr.net/`. The application itself is linked from the theme as [github.com/dmzoneill/Leecharr](https://github.com/dmzoneill/Leecharr). This repository is the site.

## Layout

The tree is a WordPress install. `wp-includes/version.php` sets the core version to **7.1.1**, minimum PHP **7.4** (extensions `json` and `hash`), and minimum MySQL **5.5.5**.

`index.php` is the front controller. It defines `WP_USE_THEMES` and loads `wp-blog-header.php`. `wp-load.php` loads `wp-config.php` from this directory, or from the parent directory when that parent has `wp-config.php` and does not have `wp-settings.php`. `wp-config.php` is listed in `.gitignore` and is not in this checkout. Database credentials, salts, and keys belong in that file.

### Custom theme

`wp-content/themes/leecharr`

The style sheet header records:

- Theme name: Leecharr
- Author: dmzoneill (`https://github.com/dmzoneill`)
- Version: 1.0.0
- Requires at least WordPress 6.0 and PHP 7.4
- License: Apache License 2.0
- Text domain: `leecharr`

Templates:

- `front-page.php` — landing page (screenshots, feature sections, and download copy for the Leecharr application)
- `header.php`, `footer.php`
- `index.php`, `page.php`, `single.php`
- `inc/asset-uri.php`, `inc/docker-run.php`, `inc/markup.php`
- `template-parts/lightbox.php`, `template-parts/post-meta.php`, `template-parts/singular.php`

`functions.php` registers theme support (title tag, thumbnails, HTML5 markup, responsive embeds, automatic feed links) and a `primary` nav menu.
It enqueues Bootstrap 3.4.1, Font Awesome 6.0.0, and highlight.js 11 from `assets/`, then the theme style sheet and `assets/js/app.js` (dependency: WordPress `jquery`).
That script highlights code blocks, smooth-scrolls in-page links, marks the active nav item, and opens the screenshot lightbox.

On `init`, the theme copies `assets/img/og-image.png` into the uploads directory at `2026/09/og-image.png` when the file is missing or differs. It also filters `wpseo_opengraph_image` and `wpseo_twitter_image` to the theme asset. Yoast SEO is not under `wp-content/plugins`.

`inc/docker-run.php` prints the Docker examples in the landing-page download section (`feeditout/leecharr` and `ghcr.io/dmzoneill/leecharr`).
Those snippets are page content for the application.
They do not start this WordPress tree.
The footer fetches `https://api.github.com/repos/dmzoneill/Leecharr/releases/latest` and writes the tag into `#latest-version`.
`header.php` includes a Google tag (`gtag.js`) snippet.

Nothing in the repository selects the active theme. WordPress stores that in the database.

### Themes and plugins shipped with core

- `wp-content/themes/twentytwentythree` (style sheet version 1.7)
- `wp-content/themes/twentytwentyfour` (style sheet version 1.6)
- `wp-content/themes/twentytwentyfive` (style sheet version 1.5; includes `package.json`)
- `wp-content/plugins/akismet` (plugin header version 5.7.2)

### Static page files

`index.html.original` is a standalone HTML document titled "Leecharr - BitTorrent Media Downloader". `index.php` does not load it. The document references styles and scripts under `vendor/` (`css/`, `js/`, `fonts/`), images under `img/`, and `js/app.js`. Root `js/app.js` injects `wp-content/themes/leecharr/assets/js/app.js`.

`img/` holds the favicon and wordmark SVGs, `og-image.png`, screenshot PNGs, `slides/`, and `screenshots-manifest.json`. The theme keeps a copy under `wp-content/themes/leecharr/assets/img/`. Minified Bootstrap, Font Awesome, and highlight.js files are also committed under the theme `assets/` directory. `favicon.ico` is at the repository root.

### Other root files

| Path               | Role                                                                                                                                                                                |
| ------------------ | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `CNAME`            | Contents are `leecharr.net` (no trailing newline).                                                                                                                                  |
| `version`          | Contents are `version=1.0.34`. The theme style sheet version stays 1.0.0. No file in this repository reads `version`.                                                               |
| `checks.sh`        | Bash script. When `GITHUB_ENV` is set, appends `VALIDATE_CSS=false` and `VALIDATE_CSS_STYLELINT=false` to that file, then prints `0`.                                               |
| `.prettierrc.json` | Prettier options: semicolons, double quotes, tab width 2, ES5 trailing commas, print width 100. No script in this repository runs Prettier.                                         |
| `.ignore`          | Paths for jscpd. The file comment says Super-linter replaces a repository `.jscpd.json`, so vendored WordPress, third-party assets, screenshot manifests, and SVGs are listed here. |
| `.gitignore`       | Ignores `wp-config.php` and `wp-content/uploads/*`.                                                                                                                                 |

## Running the site

This repository has no build manifest, Dockerfile, Compose file, or start script for the site. Theme CSS and JavaScript are already committed.

`wp-load.php` expects `wp-config.php` before WordPress will boot. Create that file outside Git. A PHP runtime that meets the versions in `wp-includes/version.php` (and the theme header) is required. This repository does not document the web server or database layout.

The hostname in `CNAME` is not wired to a publish step in this repository.
`.github/workflows/main.yml` (workflow name `CICD`) runs on pushes and pull requests to `main`, and on `repository_dispatch` type `refresh`.
The job calls `dmzoneill/dmzoneill/.github/workflows/dispatch.yaml` at `main` with `basic` set to `"true"` and `VALIDATE_CSS`, `VALIDATE_SHELL_SHFMT`, and `VALIDATE_BASH` set to `"false"`.
What that reusable workflow does with the tree is defined in the other repository.

`.github/workflows/ai-responder.yml` runs on opened issues and pull requests (it skips `dependabot[bot]`) and on `workflow_dispatch`. It installs pinned Python packages and runs `ai-responder.py` downloaded from `dmzoneill/dmzoneill`.

`.github/linters/phpstan.neon` and `.github/linters/psalm.xml` point at `.github/linters/wordpress-stubs.phpstub`. This repository does not define a command that runs PHPStan or Psalm.

`.github/dependabot.yml` schedules weekly grouped updates for GitHub Actions (`/`), npm (`/wp-content/themes/twentytwentyfive`), and Composer (`/wp-includes/sodium_compat`). The file says it is managed by [dmzoneill/dmzoneill](https://github.com/dmzoneill/dmzoneill) `setup.sh`.

## License

The root [`LICENSE`](LICENSE) file is the Apache License, Version 2.0. The Leecharr theme style sheet also declares Apache License 2.0.

Bundled components state their own terms in file headers:

- WordPress core PHP files include the GNU General Public License notice.
- Twenty Twenty-Three, Twenty Twenty-Four, and Twenty Twenty-Five: GNU General Public License v2 or later.
- Akismet: GPLv2 or later.
