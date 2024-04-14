<?php
add_shortcode('scrolling_box', function ($atts, $content = null) {
    $content = '<div class="scrolling-box">' . do_shortcode($content) . '</div>';

    $css = <<<EOF
<style>
.scrolling-box {
    display: block;
    height: 455px;
    padding: 1em;
    overflow-y: scroll;
    text-align: left;
    margin-bottom: 1rem;
}
</style>
EOF;
    return $css . $content;
});