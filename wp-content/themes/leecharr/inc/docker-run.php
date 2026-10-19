<?php

declare(strict_types=1);

/**
 * Shared docker run snippet for the download section.
 *
 * @package Leecharr
 */

/**
 * Print one docker run example. Both registries share every flag except the image.
 */
function leecharr_render_docker_run(string $label, string $image): void
{
    echo '            <p><strong style="color: var(--text-secondary)">'
        . htmlspecialchars($label, ENT_QUOTES, 'UTF-8')
        . "</strong></p>\n";
    echo "            <pre><code class=\"language-bash\">docker run -d \\\n";
    echo "  --name leecharr \\\n";
    echo "  -p 7889:7889 \\\n";
    echo "  -p 51413:51413 \\\n";
    echo "  -v leecharr-config:/config \\\n";
    echo "  -v leecharr-downloads:/downloads \\\n";
    echo "  --restart unless-stopped \\\n";
    echo '  ' . htmlspecialchars($image, ENT_QUOTES, 'UTF-8') . "</code></pre>\n";
}
