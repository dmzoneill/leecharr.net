<?php

/**
 * Template Name: Landing Page
 * Front Page template
 *
 * @package Leecharr
 */

require_once __DIR__ . '/inc/asset-uri.php';
require_once __DIR__ . '/inc/docker-run.php';
require_once __DIR__ . '/inc/markup.php';

get_header();
?>

<section id="hero">
      <div class="container text-center">
        <img class="hero-logo" src="<?php echo leecharr_asset_uri('/assets/img/leecharr-skull.svg'); ?>"
          alt="Leecharr" />
        <img class="hero-wordmark" src="<?php echo leecharr_asset_uri('/assets/img/leecharr-text.svg'); ?>"
          alt="Leecharr" />
        <p class="hero-tagline">
          BitTorrent Media Downloader &mdash; the <em>*arr</em>-family rich media client.
        </p>

        <div class="hero-pills">
          <span class="hero-pill"><i class="fas fa-film"></i> Rich Media Enrichment</span>
          <span class="hero-pill"><i class="fas fa-play-circle"></i> Sequential Streaming</span>
          <span class="hero-pill"><i class="fas fa-link"></i> Sonarr, Radarr &amp; Lidarr</span>
          <span class="hero-pill"><i class="fas fa-plug"></i> Deluge &amp; qBittorrent RPC</span>
          <span class="hero-pill"><i class="fab fa-docker"></i> Docker Ready</span>
        </div>

        <div class="hero-cta">
          <a href="#download" class="btn btn-leecharr"><i class="fas fa-download"></i> Download</a>
          <a
            href="https://github.com/dmzoneill/Leecharr"
            target="_blank"
            rel="noopener"
            class="btn btn-leecharr-outline"
            ><i class="fab fa-github"></i> View on GitHub</a
          >
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════ STATS ═══════════════════════════════ -->
    <section id="stats">
      <div class="container">
        <div class="stats-grid">
          <div class="stat-item">
            <div class="stat-value">.NET 10</div>
            <div class="stat-label">Runtime</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">React 19</div>
            <div class="stat-label">Frontend</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">7889</div>
            <div class="stat-label">Default Port</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">10+</div>
            <div class="stat-label">BEP Protocols</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">3</div>
            <div class="stat-label">RPC Adapters</div>
          </div>
          <div class="stat-item">
            <div class="stat-value" id="latest-version">...</div>
            <div class="stat-label">Latest Version</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════ SCREENSHOTS ═══════════════════════════════ -->
    <section id="screenshots">
      <div class="container">
        <div class="section-header">
          <h2>See it in <span>Action</span></h2>
          <div class="divider"></div>
        </div>

        <div
          id="screenshotCarousel"
          class="carousel slide leecharr-carousel"
          data-ride="carousel"
          data-interval="4000"
        >
          <!-- Indicators -->
          <ol class="carousel-indicators leecharr-indicators">
            <li data-target="#screenshotCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#screenshotCarousel" data-slide-to="1"></li>
            <li data-target="#screenshotCarousel" data-slide-to="2"></li>
            <li data-target="#screenshotCarousel" data-slide-to="3"></li>
            <li data-target="#screenshotCarousel" data-slide-to="4"></li>
            <li data-target="#screenshotCarousel" data-slide-to="5"></li>
            <li data-target="#screenshotCarousel" data-slide-to="6"></li>
            <li data-target="#screenshotCarousel" data-slide-to="7"></li>
            <li data-target="#screenshotCarousel" data-slide-to="8"></li>
          </ol>

          <!-- Slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img
                src="<?php echo leecharr_asset_uri('/assets/img/slides/screen-1.png'); ?>"
                alt="Leecharr Dashboard"
                data-full="<?php echo leecharr_asset_uri('/assets/img/screen-1.png'); ?>"
                class="carousel-img"
              />
            </div>
            <div class="item">
              <img
                src="<?php echo leecharr_asset_uri('/assets/img/slides/screen-2.png'); ?>"
                alt="Leecharr Torrents"
                data-full="<?php echo leecharr_asset_uri('/assets/img/screen-2.png'); ?>"
                class="carousel-img"
              />
            </div>
            <div class="item">
              <img
                src="<?php echo leecharr_asset_uri('/assets/img/slides/screen-3.png'); ?>"
                alt="Leecharr Activity"
                data-full="<?php echo leecharr_asset_uri('/assets/img/screen-3.png'); ?>"
                class="carousel-img"
              />
            </div>
            <div class="item">
              <img
                src="<?php echo leecharr_asset_uri('/assets/img/slides/screen-4.png'); ?>"
                alt="Leecharr Indexers"
                data-full="<?php echo leecharr_asset_uri('/assets/img/screen-4.png'); ?>"
                class="carousel-img"
              />
            </div>
            <div class="item">
              <img
                src="<?php echo leecharr_asset_uri('/assets/img/slides/screen-5.png'); ?>"
                alt="Leecharr Peer Map"
                data-full="<?php echo leecharr_asset_uri('/assets/img/screen-5.png'); ?>"
                class="carousel-img"
              />
            </div>
            <div class="item">
              <img
                src="<?php echo leecharr_asset_uri('/assets/img/slides/screen-6.png'); ?>"
                alt="Leecharr Schedule"
                data-full="<?php echo leecharr_asset_uri('/assets/img/screen-6.png'); ?>"
                class="carousel-img"
              />
            </div>
            <div class="item">
              <img
                src="<?php echo leecharr_asset_uri('/assets/img/slides/screen-7.png'); ?>"
                alt="Leecharr Statistics"
                data-full="<?php echo leecharr_asset_uri('/assets/img/screen-7.png'); ?>"
                class="carousel-img"
              />
            </div>
            <div class="item">
              <img
                src="<?php echo leecharr_asset_uri('/assets/img/slides/screen-8.png'); ?>"
                alt="Leecharr Settings"
                data-full="<?php echo leecharr_asset_uri('/assets/img/screen-8.png'); ?>"
                class="carousel-img"
              />
            </div>
            <div class="item">
              <img
                src="<?php echo leecharr_asset_uri('/assets/img/slides/screen-9.png'); ?>"
                alt="Leecharr System"
                data-full="<?php echo leecharr_asset_uri('/assets/img/screen-9.png'); ?>"
                class="carousel-img"
              />
            </div>
          </div>

          <!-- Controls -->
          <a
            class="left carousel-control leecharr-control"
            href="#screenshotCarousel"
            data-slide="prev"
          >
            <i class="fas fa-chevron-left"></i>
          </a>
          <a
            class="right carousel-control leecharr-control"
            href="#screenshotCarousel"
            data-slide="next"
          >
            <i class="fas fa-chevron-right"></i>
          </a>
        </div>

        <p class="carousel-hint">
          <i class="fas fa-expand-alt"></i> Click any screenshot to view full size
        </p>
      </div>
    </section>

    <?php get_template_part('template-parts/lightbox'); ?>

    <!-- ═══════════════════════════════ FEATURES ═══════════════════════════════ -->
    <section id="features">
      <div class="container">
        <div class="section-header">
          <h2>Features</h2>
          <div class="divider"></div>
          <p>
            Everything you need to download and manage BitTorrent media &mdash; enriched with
            artwork, sequential streaming, and deep Servarr automation.
          </p>
        </div>

        <!-- Feature 1: Dashboard & Media Enrichment -->
        <div class="feature-row">
          <div class="feature-visual">
            <div class="mock-dashboard">
              <div class="mock-titlebar">
                <span class="mock-dot red"></span>
                <span class="mock-dot yellow"></span>
                <span class="mock-dot green"></span>
                <span class="mock-url">localhost:7889 &mdash; Leecharr</span>
              </div>
              <div class="mock-body">
                <div class="mock-row">
                  <span class="mock-name">Dune.Part.Two.2024.2160p.UHD</span>
                  <span class="mock-badge streaming">Streaming</span>
                  <span class="mock-speed">&#8595; 38.4 MB/s</span>
                </div>
                <div class="mock-row">
                  <span class="mock-name">Shogun.2024.S01E08.1080p</span>
                  <span class="mock-badge downloading">Downloading</span>
                  <span class="mock-speed">&#8595; 16.2 MB/s</span>
                </div>
                <div class="mock-row">
                  <span class="mock-name">Oppenheimer.2023.IMAX.2160p</span>
                  <span class="mock-badge seeding">Seeding</span>
                  <span class="mock-speed" style="color: var(--success)">&#8593; 5.8 MB/s</span>
                </div>
                <div class="mock-row">
                  <span class="mock-name">The.Bear.S03.Complete.1080p</span>
                  <span class="mock-badge paused">Queued</span>
                  <span class="mock-speed" style="color: var(--text-dim)">&#8213; 0 B/s</span>
                </div>
                <div class="mock-bar">
                  <div class="mock-bar-fill" style="width: 84%"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="feature-info">
            <h3><i class="fas fa-film"></i> Deep *arr Media Enrichment</h3>
            <p>
              Experience your downloads visually. Leecharr pairs BitTorrent transfers with rich
              artwork, movie posters, season banners, audio specs, and episode information directly
              from your Servarr apps.
            </p>
            <ul class="feature-list">
              <li>
                <i class="fas fa-chevron-right"></i> Movie posters, fanart backdrops, and TV season
                banners
              </li>
              <li>
                <i class="fas fa-chevron-right"></i> Season pack hierarchy (Show &rarr; Season
                &rarr; Episode)
              </li>
              <li>
                <i class="fas fa-chevron-right"></i> Media stream info: 4K, HDR10+, Dolby Vision,
                Atmos, FLAC
              </li>
              <li>
                <i class="fas fa-chevron-right"></i> Sequential download mode for instant video
                streaming
              </li>
              <li>
                <i class="fas fa-chevron-right"></i> Sub-second speed graphs &amp; piece maps via
                SignalR
              </li>
              <li>
                <i class="fas fa-chevron-right"></i> Per-file priority selection and selective
                downloading
              </li>
            </ul>
          </div>
        </div>

        <!-- Feature 2: Protocol Support & Engine -->
        <div class="feature-row reverse">
          <div class="feature-visual">
            <div style="width: 100%">
              <?php leecharr_eyebrow('Protocol Stack & Transport'); ?>
              <div class="mock-protocols">
                <div class="mock-proto">
                  <div class="mock-proto-name">HTTP Tracker</div>
                  <div class="mock-proto-status">&#9679; BEP 3 &mdash; Active</div>
                </div>
                <div class="mock-proto">
                  <div class="mock-proto-name">UDP Tracker</div>
                  <div class="mock-proto-status">&#9679; BEP 15 &mdash; Active</div>
                </div>
                <div class="mock-proto">
                  <div class="mock-proto-name">DHT (Mainline)</div>
                  <div class="mock-proto-status">&#9679; BEP 5 &mdash; Active</div>
                </div>
                <div class="mock-proto">
                  <div class="mock-proto-name">Peer Exchange</div>
                  <div class="mock-proto-status">&#9679; BEP 11 &mdash; Active</div>
                </div>
                <div class="mock-proto">
                  <div class="mock-proto-name">MSE/PE Encryption</div>
                  <div class="mock-proto-status">&#9679; RC4 + DH &mdash; Active</div>
                </div>
                <div class="mock-proto">
                  <div class="mock-proto-name">uTP Transport</div>
                  <div class="mock-proto-status">&#9679; BEP 29 &mdash; Active</div>
                </div>
                <div class="mock-proto">
                  <div class="mock-proto-name">Fast Extension</div>
                  <div class="mock-proto-status">&#9679; BEP 6 &mdash; Active</div>
                </div>
                <div class="mock-proto">
                  <div class="mock-proto-name">ut_metadata</div>
                  <div class="mock-proto-status warn">&#9679; BEP 9 &mdash; Magnet</div>
                </div>
              </div>
            </div>
          </div>
          <div class="feature-info">
            <h3><i class="fas fa-bolt"></i> High-Performance .NET 10 Engine</h3>
            <p>
              Leecharr implements a native, high-throughput BitTorrent engine in pure C# .NET 10.
              Non-blocking asynchronous disk I/O, memory caching, and full protocol compliance
              deliver blazing speeds.
            </p>
            <ul class="feature-list">
              <li>
                <i class="fas fa-chevron-right"></i> Rarest-first, endgame, and sequential piece
                strategies
              </li>
              <li>
                <i class="fas fa-chevron-right"></i> HTTP &amp; UDP tracker scrape/announce with
                multi-tracker failover (BEP 12)
              </li>
              <li>
                <i class="fas fa-chevron-right"></i> Diffie-Hellman MSE/PE stream cipher encryption
              </li>
              <li>
                <i class="fas fa-chevron-right"></i> DHT distributed hash table &amp; PEX swarm
                discovery
              </li>
              <li>
                <i class="fas fa-chevron-right"></i> Configurable write/read disk cache
                (64MB&ndash;512MB)
              </li>
              <li>
                <i class="fas fa-chevron-right"></i> Fast resume piece bitfield persistence in
                SQLite
              </li>
            </ul>
          </div>
        </div>

        <!-- Feature 3: Universal Client Compatibility -->
        <div class="feature-row">
          <div class="feature-visual">
            <div style="width: 100%">
              <?php leecharr_eyebrow('Client RPC Compatibility'); ?>
              <div
                style="
                  background: var(--bg-dark);
                  border: 1px solid var(--border);
                  border-radius: 5px;
                  padding: 18px;
                "
              >
                <div style="display: flex; gap: 12px; margin-bottom: 14px">
                  <?php
                    leecharr_client_card('qBittorrent', 'WebAPI v2');
                    leecharr_client_card('Deluge', 'JSON-RPC');
                    leecharr_client_card('Transmission', 'RPC Adapter');
                    ?>
                </div>
                <div
                  style="
                    font-size: 10px;
                    color: var(--text-dim);
                    margin-bottom: 7px;
                    text-transform: uppercase;
                    letter-spacing: 1px;
                  "
                >
                  Indexer &amp; Automation
                </div>
                <div style="display: flex; gap: 7px; flex-wrap: wrap">
                  <?php
                    leecharr_chip('Prowlarr Sync', true);
                    leecharr_chip('Torznab / Newznab', false);
                    leecharr_chip('Webhooks', false);
                    leecharr_chip('REST API', false);
                    ?>
                </div>
              </div>
            </div>
          </div>
          <div class="feature-info">
            <h3><i class="fas fa-plug"></i> Universal Client Compatibility</h3>
            <p>
              Drop Leecharr into any existing automation pipeline. Built-in RPC adapters emulate
              Deluge, qBittorrent, and Transmission, allowing 3rd-party tools and mobile apps to
              interact with Leecharr without modifications.
            </p>
            <ul class="feature-list">
              <li><i class="fas fa-chevron-right"></i> Drop-in qBittorrent WebAPI v2 adapter</li>
              <li><i class="fas fa-chevron-right"></i> Deluge daemon JSON-RPC compatibility</li>
              <li><i class="fas fa-chevron-right"></i> Transmission RPC endpoint support</li>
              <li>
                <i class="fas fa-chevron-right"></i> Native Leecharr REST API v1
                (<code>/api/v1/</code>) with Swagger UI
              </li>
              <li>
                <i class="fas fa-chevron-right"></i> Webhook dispatch for download lifecycle events
              </li>
              <li>
                <i class="fas fa-chevron-right"></i> Direct Torznab/Newznab indexer search &amp;
                Prowlarr sync
              </li>
            </ul>
          </div>
        </div>

        <!-- Feature grid -->
        <div class="feature-grid">
          <div class="feature-card">
            <i class="fas fa-play-circle"></i>
            <h4>Sequential Streaming</h4>
            <p>
              Stream videos and preview music files instantly in your browser while the torrent is
              actively downloading.
            </p>
          </div>
          <div class="feature-card">
            <i class="fas fa-search"></i>
            <h4>Direct Indexer Search</h4>
            <p>
              Search Torznab and Newznab indexers directly within Leecharr with automatic Prowlarr
              synchronization.
            </p>
          </div>
          <div class="feature-card">
            <i class="fas fa-bell"></i>
            <h4>Rich Webhooks &amp; Alerts</h4>
            <p>
              Webhook, Discord, and email triggers with full media artwork and metadata on grab and
              download completion.
            </p>
          </div>
          <div class="feature-card">
            <i class="fas fa-code"></i>
            <h4>REST API &amp; Swagger</h4>
            <p>
              Comprehensive OpenAPI specification at <code>/api/v1/</code> with interactive Swagger
              UI at <code>/swagger</code>.
            </p>
          </div>
          <div class="feature-card">
            <i class="fas fa-calendar-alt"></i>
            <h4>Speed Scheduling</h4>
            <p>
              Define upload and download speed profiles by time of day and day of week to manage
              home network bandwidth.
            </p>
          </div>
          <div class="feature-card">
            <i class="fas fa-database"></i>
            <h4>SQLite + PostgreSQL</h4>
            <p>
              Embedded SQLite by default with fast piece checkpoints; PostgreSQL supported for
              multi-instance deployments.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════ INTEGRATION ═══════════════════════════════ -->
    <section id="integration">
      <div class="container">
        <div class="section-header">
          <h2>*arr <span>Integration</span></h2>
          <div class="divider"></div>
          <p>
            Connect seamlessly to your Servarr stack. Leecharr automatically enriches active
            downloads with posters, metadata, and category mappings from your arr apps.
          </p>
        </div>
        <div class="integration-cards">
          <div class="int-card">
            <i class="fas fa-tv"></i>
            <h4>Sonarr</h4>
            <p>TV series posters, episodes &amp; season packs</p>
          </div>
          <div class="int-card">
            <i class="fas fa-film"></i>
            <h4>Radarr</h4>
            <p>Movie artwork, trailers &amp; video stream specs</p>
          </div>
          <div class="int-card">
            <i class="fas fa-music"></i>
            <h4>Lidarr</h4>
            <p>Artist fanart, album covers &amp; audio tags</p>
          </div>
          <div class="int-card">
            <i class="fas fa-search-plus"></i>
            <h4>Prowlarr</h4>
            <p>Direct indexer sync &amp; proxy routing</p>
          </div>
          <div class="int-card">
            <i class="fas fa-book"></i>
            <h4>Readarr</h4>
            <p>Book covers, authors &amp; publication details</p>
          </div>
        </div>
        <div
          style="
            margin-top: 36px;
            background: var(--bg-primary);
            border: 1px solid var(--border);
            border-radius: 6px;
            padding: 26px;
          "
        >
          <h4 style="color: var(--text-primary); font-weight: 300; margin-bottom: 10px">
            <i class="fas fa-plug" style="color: var(--accent); margin-right: 8px"></i>Setup in 3
            steps
          </h4>
          <ol style="color: var(--text-muted); margin: 0; padding-left: 20px; line-height: 2.2">
            <li>
              Go to
              <strong style="color: var(--text-secondary)">Settings &gt; Arr Connections</strong>
              in Leecharr
            </li>
            <li>Add your Sonarr, Radarr, Lidarr, or Prowlarr URL and API key</li>
            <li>Leecharr imports active downloads and pulls full media artwork and metadata</li>
          </ol>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════ COMPARISON ═══════════════════════════════ -->
    <section id="compare">
      <div class="container">
        <div class="section-header">
          <h2>Why <span>Leecharr?</span></h2>
          <div class="divider"></div>
          <p>
            How Leecharr outclasses traditional BitTorrent clients by uniting low-level protocol
            rigor with deep *arr automation and real-time observability.
          </p>
        </div>

        <!-- Feature Matrix Table -->
        <div class="compare-table-wrapper">
          <table class="table compare-table">
            <thead>
              <tr>
                <th>Feature / Capability</th>
                <th class="leecharr-col">
                  Leecharr <span class="leecharr-badge-col">Next-Gen</span>
                </th>
                <th>qBittorrent</th>
                <th>Deluge</th>
                <th>Transmission</th>
              </tr>
            </thead>
            <tbody>
              <?php
                leecharr_render_compare_body(
                    array(
                        array(
                            'title' => '*arr Media Enrichment',
                            'detail' => 'Posters, season banners, episode stills, ratings, and cast in WebUI',
                            'cells' => array(
                                array('yes', 'check-circle', '100% Native', true),
                                array('no', 'times-circle', 'Raw filenames only', false),
                                array('no', 'times-circle', 'Raw filenames only', false),
                                array('no', 'times-circle', 'Raw filenames only', false),
                            ),
                        ),
                        array(
                            'title' => 'Drop-in Multi-API Gateway',
                            'detail' => 'Simultaneous qBittorrent v2, Deluge & Transmission RPC on port 7889',
                            'cells' => array(
                                array('yes', 'check-circle', 'Universal 4-in-1', true),
                                array('partial', 'circle', 'WebAPI v2 only', false),
                                array('partial', 'circle', 'JSON-RPC only', false),
                                array('partial', 'circle', 'Transmission RPC only', false),
                            ),
                        ),
                        array(
                            'title' => 'In-Engine Media Stream Inspector',
                            'detail' => 'Pure C# EBML: 4K UHD, HDR10+, Dolby Vision, Atmos stream specs',
                            'cells' => array(
                                array('yes', 'check-circle', 'Zero CLI dependencies', true),
                                array('no', 'times-circle', 'External ffprobe scripts', false),
                                array('no', 'times-circle', 'External ffprobe scripts', false),
                                array('no', 'times-circle', 'None', false),
                            ),
                        ),
                        array(
                            'title' => 'Private Tracker Protocol (BEP 27)',
                            'detail' => 'Strict per-swarm DHT, PEX, and LPD disablement to protect private ratios',
                            'cells' => array(
                                array('yes', 'check-circle', 'Strict Swarm Isolation', true),
                                array('yes', 'check-circle', 'Supported (libtorrent)', false),
                                array('yes', 'check-circle', 'Supported (libtorrent)', false),
                                array('yes', 'check-circle', 'Supported', false),
                            ),
                        ),
                        array(
                            'title' => 'Client Whitelist Emulation',
                            'detail' => 'Configurable Peer ID & User-Agent presets (qB 4.6/5.0, Deluge, etc.)',
                            'cells' => array(
                                array('yes', 'check-circle', 'Dynamic Presets', true),
                                array('no', 'times-circle', 'Locked to version', false),
                                array('no', 'times-circle', 'Third-party plugin', false),
                                array('no', 'times-circle', 'None', false),
                            ),
                        ),
                        array(
                            'title' => 'Memory & Cache Architecture',
                            'detail' => 'Dynamic dirty block coalescing without OS page-cache runaway bloat',
                            'cells' => array(
                                array('yes', 'check-circle', 'Predictable RAM Cache', true),
                                array('partial', 'exclamation-triangle', 'libtorrent 2.0 mmap OOM', false),
                                array('partial', 'exclamation-triangle', 'Python GIL UI stalls', false),
                                array('yes', 'check-circle', 'POSIX buffer cache', false),
                            ),
                        ),
                        array(
                            'title' => 'Live Hardware & Swarm Telemetry',
                            'detail' => 'Piece hash rates, cache hits/misses, protocol overhead, socket state',
                            'cells' => array(
                                array('yes', 'check-circle', 'Real-time Per-Torrent', true),
                                array('partial', 'circle', 'Basic swarm rates', false),
                                array('partial', 'circle', 'Basic swarm rates', false),
                                array('partial', 'circle', 'Minimal rates', false),
                            ),
                        ),
                        array(
                            'title' => 'Integrated Search & Prowlarr Sync',
                            'detail' => 'Torznab/Newznab multi-indexer discovery with one-click grab',
                            'cells' => array(
                                array('yes', 'check-circle', 'Built-in & Auto-Sync', true),
                                array('partial', 'circle', 'Fragile Python plugins', false),
                                array('no', 'times-circle', 'Third-party plugin', false),
                                array('no', 'times-circle', 'None', false),
                            ),
                        ),
                        array(
                            'title' => 'VPN Interface Binding & Kill Switch',
                            'detail' => 'Binds sockets strictly to tun0/wg0; halts all traffic immediately if dropped',
                            'cells' => array(
                                array('yes', 'check-circle', 'Automated Kill Switch', true),
                                array('yes', 'check-circle', 'Network Interface bind', false),
                                array('partial', 'circle', 'OS routing scripts', false),
                                array('partial', 'circle', 'Bind IP only', false),
                            ),
                        ),
                    )
                );
                ?>
            </tbody>
          </table>
        </div>

        <!-- 4 Architectural Advantage Cards -->
        <div class="compare-highlights">
          <div class="compare-highlight-card">
            <i class="fas fa-random card-icon"></i>
            <h4>Zero-Configuration Drop-in Gateway</h4>
            <p>
              Switching clients usually breaks downstream automation. Leecharr solves this by
              running <strong>qBittorrent WebAPI v2</strong>, <strong>Transmission RPC</strong>,
              <strong>Deluge JSON-RPC</strong>, and native
              <strong>REST API v1</strong> simultaneously on port <code>7889</code>. Point Sonarr,
              Radarr, or <code>qbit_manage</code> to Leecharr without rewriting scripts or container
              configs.
            </p>
          </div>
          <div class="compare-highlight-card">
            <i class="fas fa-user-shield card-icon"></i>
            <h4>Private Tracker Integrity &amp; Emulation</h4>
            <p>
              Avoid account warnings and passkey leaks. Strict
              <strong>BEP 27</strong> enforcement kills DHT, PEX, and LPD at the swarm level, while
              separated tracker tiers eliminate multi-tracker contamination. Built-in
              <strong>Client Emulation Presets</strong> allow Leecharr to announce as approved
              qBittorrent, Deluge, or Transmission versions on strict private communities.
            </p>
          </div>
          <div class="compare-highlight-card">
            <i class="fas fa-microchip card-icon"></i>
            <h4>Predictable Async Disk I/O (No mmap Bloat)</h4>
            <p>
              Say goodbye to unRAID and Docker container crashes caused by libtorrent 2.0's
              aggressive <code>mmap</code> kernel page caching. Leecharr's multi-threaded C# disk
              engine uses managed dirty block coalescing (128 MB &ndash; 1 GB dynamic cache) and
              non-blocking sparse allocation for wire-speed performance with zero memory leaks.
            </p>
          </div>
          <div class="compare-highlight-card">
            <i class="fas fa-eye card-icon"></i>
            <h4>Streaming Inspection &amp; Telemetry</h4>
            <p>
              Why wait for a 50 GB download to complete before checking its video resolution or
              audio tracks? Leecharr's pure C# EBML inspector extracts HDR10+, Dolby Vision, and
              Atmos codecs from streaming piece buffers in real time, accompanied by live hardware
              telemetry and per-torrent piece maps.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════ DOWNLOAD ═══════════════════════════════ -->
    <section id="download">
      <div class="container">
        <div class="section-header">
          <h2>Download</h2>
          <div class="divider"></div>
          <p>
            Leecharr runs on any platform that supports .NET 10. Docker is the recommended
            deployment.
          </p>
        </div>

        <ul class="nav nav-tabs" id="downloadTabs" role="tablist">
          <li class="active">
            <a href="#tab-docker" data-toggle="tab"><i class="fab fa-docker"></i> Docker</a>
          </li>
          <li>
            <a href="#tab-linux" data-toggle="tab"><i class="fab fa-linux"></i> Linux</a>
          </li>
          <li>
            <a href="#tab-macos" data-toggle="tab"><i class="fab fa-apple"></i> macOS</a>
          </li>
          <li>
            <a href="#tab-windows" data-toggle="tab"><i class="fab fa-windows"></i> Windows</a>
          </li>
          <li>
            <a href="#tab-nas" data-toggle="tab"><i class="fas fa-hdd"></i> NAS</a>
          </li>
          <li>
            <a href="#tab-source" data-toggle="tab"><i class="fas fa-code"></i> Source</a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active" id="tab-docker">
            <h4>Container Run (Podman / Docker)</h4>
            <p>
              The easiest way to run Leecharr. The official image is published to Docker Hub and
              GitHub Container Registry (GHCR).
            </p>
            <?php
            leecharr_render_docker_run('Option 1: Docker Hub', 'feeditout/leecharr:latest');
            leecharr_render_docker_run(
                'Option 2: GitHub Container Registry (GHCR)',
                'ghcr.io/dmzoneill/leecharr:latest'
            );
            ?>
            <p>
              Then open
              <strong style="color: var(--text-primary)">http://localhost:7889</strong>
            </p>
            <h4>Docker Compose / Podman Compose</h4>
            <pre><code class="language-yaml">services:
  leecharr:
    # Option 1 (Docker Hub):
    image: feeditout/leecharr:latest
    # Option 2 (GHCR):
    # image: ghcr.io/dmzoneill/leecharr:latest
    container_name: leecharr
    ports:
      - "7889:7889"
      - "51413:51413"
    volumes:
      - leecharr-config:/config
      - leecharr-downloads:/downloads
    restart: unless-stopped
    environment:
      - TZ=UTC
    healthcheck:
      test: ["CMD", "curl", "-f", "http://localhost:7889/api/v1/system/status"]
      interval: 30s
      timeout: 10s
      retries: 3
      start_period: 30s

volumes:
  leecharr-config:
  leecharr-downloads:</code></pre>
            <pre><code class="language-bash">docker compose up -d
# or
podman-compose up -d</code></pre>
            <div class="download-note">
              <strong style="color: var(--text-secondary)">Volumes:</strong>
              <code>/config</code> stores the database, settings, and logs.
              <code>/downloads</code> holds downloaded media files and torrent data.
            </div>
          </div>

          <div class="tab-pane" id="tab-linux">
            <h4>Linux</h4>
            <p>
              Leecharr requires .NET 10 runtime. Use the generic tar.gz for manual installation on
              any Linux distribution.
            </p>
            <div style="margin-bottom: 18px">
              <a
                href="https://github.com/dmzoneill/Leecharr/releases/latest"
                class="download-btn"
                target="_blank"
                rel="noopener"
                ><i class="fas fa-download"></i> Linux x64</a
              >
              <a
                href="https://github.com/dmzoneill/Leecharr/releases/latest"
                class="download-btn"
                target="_blank"
                rel="noopener"
                ><i class="fas fa-download"></i> Linux arm64</a
              >
              <a
                href="https://github.com/dmzoneill/Leecharr/releases/latest"
                class="download-btn"
                target="_blank"
                rel="noopener"
                ><i class="fas fa-download"></i> Linux arm</a
              >
            </div>
            <ol>
              <li>Download the appropriate archive for your architecture.</li>
              <li>
                Extract and move to a suitable directory (e.g.
                <code>/opt/leecharr</code>).
              </li>
              <li>Run <code>./Leecharr</code> or create a systemd unit file for autostart.</li>
              <li>
                Browse to
                <strong style="color: var(--text-primary)">http://localhost:7889</strong>
              </li>
            </ol>
            <div class="download-note">
              For production use on Linux, Docker is strongly recommended for isolation and easy
              updates.
            </div>
          </div>

          <div class="tab-pane" id="tab-macos">
            <h4>macOS</h4>
            <p>Leecharr supports macOS on both Intel and Apple Silicon (arm64).</p>
            <div style="margin-bottom: 18px">
              <a
                href="https://github.com/dmzoneill/Leecharr/releases/latest"
                class="download-btn"
                target="_blank"
                rel="noopener"
                ><i class="fas fa-download"></i> Intel (x64)</a
              >
              <a
                href="https://github.com/dmzoneill/Leecharr/releases/latest"
                class="download-btn"
                target="_blank"
                rel="noopener"
                ><i class="fas fa-download"></i> Apple Silicon (arm64)</a
              >
            </div>
            <ol>
              <li>Download the macOS archive for your CPU.</li>
              <li>Extract and move <code>Leecharr.app</code> to your Applications folder.</li>
              <li>
                Self-sign if needed:
                <code>codesign --force --deep -s - /Applications/Leecharr.app</code>
              </li>
              <li>
                Open Leecharr.app and browse to
                <strong style="color: var(--text-primary)">http://localhost:7889</strong>
              </li>
            </ol>
          </div>

          <div class="tab-pane" id="tab-windows">
            <h4>Windows</h4>
            <p>
              Leecharr can run as a Windows Service or System Tray Application. Supports Windows 10
              / Server 2019 or later.
            </p>
            <div style="margin-bottom: 18px">
              <a
                href="https://github.com/dmzoneill/Leecharr/releases/latest"
                class="download-btn"
                target="_blank"
                rel="noopener"
                ><i class="fas fa-download"></i> Windows x64 Installer</a
              >
              <a
                href="https://github.com/dmzoneill/Leecharr/releases/latest"
                class="download-btn"
                target="_blank"
                rel="noopener"
                ><i class="fas fa-download"></i> Windows x86 Installer</a
              >
            </div>
            <ol>
              <li>Download and execute the installer.</li>
              <li>
                Choose between Windows Service (always running) or System Tray Application (runs
                when logged in).
              </li>
              <li>
                Browse to
                <strong style="color: var(--text-primary)">http://localhost:7889</strong>
              </li>
            </ol>
            <div class="download-note">
              Windows Service accounts do not have access to network drives by default. If your
              config is on a mapped drive, use the System Tray installation instead.
            </div>
          </div>

          <div class="tab-pane" id="tab-nas">
            <h4>NAS Devices</h4>
            <p>
              Leecharr runs on most NAS devices via Docker. Synology, QNAP, Unraid, and TrueNAS are
              all supported.
            </p>
            <h4>Synology</h4>
            <ol>
              <li>Install Container Manager from the Package Center.</li>
              <li>
                Pull <code>feeditout/leecharr:latest</code> from Docker Hub, or
                <code>ghcr.io/dmzoneill/leecharr:latest</code> from GHCR.
              </li>
              <li>
                Configure port <code>7889</code> and map volumes for <code>/config</code> and
                <code>/downloads</code>.
              </li>
              <li>
                Browse to
                <strong style="color: var(--text-primary)">http://&lt;NAS-IP&gt;:7889</strong>
              </li>
            </ol>
            <h4>Unraid</h4>
            <ol>
              <li>Open the Community Applications plugin.</li>
              <li>
                Search for
                <strong style="color: var(--text-secondary)">Leecharr</strong>.
              </li>
              <li>Click Install and follow the prompts.</li>
            </ol>
            <h4>TrueNAS SCALE</h4>
            <ol>
              <li>Use the built-in Docker support or install via TrueCharts catalog.</li>
              <li>Set the app data path to a dataset on your pool.</li>
            </ol>
          </div>

          <div class="tab-pane" id="tab-source">
            <h4>Build from Source</h4>
            <p>Requirements: .NET 10 SDK, Node.js 24+, npm.</p>
            <pre><code class="language-bash">git clone https://github.com/dmzoneill/Leecharr.git
cd Leecharr

# Backend
dotnet run --project src/NzbDrone.Console/Leecharr.Console.csproj

# Frontend (hot reload dev server)
cd src/Leecharr.Frontend
npm install
npm start</code></pre>
            <h4>Makefile targets</h4>
            <pre><code class="language-bash">make setup          # Restore .NET + npm dependencies
make build          # Build release
make test           # Run unit tests
make publish        # Publish release artifacts
make frontend       # Build production frontend bundle</code></pre>
            <div class="download-note">
              The frontend dev server proxies API calls to the backend on port
              <code>7889</code>. Both must be running simultaneously during development.
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
get_footer();
