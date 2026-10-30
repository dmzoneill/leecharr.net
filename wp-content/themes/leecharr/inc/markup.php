<?php

declare(strict_types=1);

/**
 * Shared landing-page markup that was copied between sections.
 *
 * @package Leecharr
 */

/**
 * Uppercase label above a feature diagram.
 */
function leecharr_eyebrow(string $label): void
{
    echo '<div style="font-size: 10px; color: var(--text-dim); margin-bottom: 10px;'
        . ' text-transform: uppercase; letter-spacing: 1px;">'
        . htmlspecialchars($label, ENT_QUOTES, 'UTF-8')
        . "</div>\n";
}

/**
 * One client adapter tile in the compatibility diagram.
 */
function leecharr_client_card(string $name, string $detail): void
{
    echo '<div style="flex: 1; text-align: center; padding: 12px 8px;'
        . ' border: 1px solid var(--accent-border); border-radius: 4px;'
        . ' background: var(--accent-subtle);">'
        . '<div style="font-size: 11px; color: var(--accent); font-weight: 700;">'
        . htmlspecialchars($name, ENT_QUOTES, 'UTF-8')
        . '</div>'
        . '<div style="font-size: 10px; color: var(--text-dim); margin-top: 3px;">'
        . htmlspecialchars($detail, ENT_QUOTES, 'UTF-8')
        . "</div></div>\n";
}

/**
 * Indexer or automation chip. The accent chip is the primary one.
 */
function leecharr_chip(string $label, bool $accent): void
{
    if ($accent === true) {
        $style = 'font-size: 11px; padding: 3px 10px; border-radius: 10px;'
            . ' background: var(--accent-bg); color: var(--accent);';
    } else {
        $style = 'font-size: 11px; padding: 3px 10px; border-radius: 10px;'
            . ' border: 1px solid var(--border); color: var(--text-secondary);';
    }

    echo '<span style="' . $style . '">'
        . htmlspecialchars($label, ENT_QUOTES, 'UTF-8')
        . "</span>\n";
}

/**
 * One comparison-table result cell.
 */
function leecharr_compare_cell(string $tone, string $icon, string $label, bool $highlight): void
{
    $cell = $highlight === true ? ' class="leecharr-col"' : '';
    echo '<td' . $cell . '>'
        . '<span class="status-pill ' . htmlspecialchars($tone, ENT_QUOTES, 'UTF-8') . '">'
        . '<i class="fas fa-' . htmlspecialchars($icon, ENT_QUOTES, 'UTF-8') . '"></i> '
        . htmlspecialchars($label, ENT_QUOTES, 'UTF-8')
        . "</span></td>\n";
}

/**
 * Comparison body. Each row is the feature plus one cell per client.
 *
 * @param array<int, array{
 *   title: string,
 *   detail: string,
 *   cells: array<int, array{0: string, 1: string, 2: string, 3: bool}>
 * }> $rows
 */
function leecharr_render_compare_body(array $rows): void
{
    foreach ($rows as $row) {
        echo "<tr>\n";
        echo '<td class="feature-title">'
            . htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8')
            . '<small>'
            . htmlspecialchars($row['detail'], ENT_QUOTES, 'UTF-8')
            . "</small></td>\n";
        foreach ($row['cells'] as $cell) {
            leecharr_compare_cell($cell[0], $cell[1], $cell[2], $cell[3]);
        }
        echo "</tr>\n";
    }
}
