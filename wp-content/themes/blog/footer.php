<?php //
if (_hui('layout') == 'ui-navtop') {
    ;
    echo '</div>
</section>
';
};
echo '<footer class="footer">
    &copy; ';
echo date('Y');;
echo ' <a href="';
bloginfo('url');;
echo '">';
bloginfo('name');;
echo '</a> &nbsp; ';

echo _hui('footer_seo');
echo '    ';
echo _hui('trackcode');
echo '</footer>
';
if (_hui('layout') !== 'ui-navtop') {
    ;
    echo '</section>
';
};
echo '
';
$roll = '';
if (is_home() && _hui('sideroll_index_s')) {
    $roll = _hui('sideroll_index');
} else if ((is_category() || is_tag() || is_search()) && _hui('sideroll_list_s')) {
    $roll = _hui('sideroll_list');
} else if (is_single() && _hui('sideroll_post_s')) {
    $roll = _hui('sideroll_post');
} else if (is_page() && _hui('sideroll_page_s')) {
    $roll = _hui('sideroll_page');
}
$ajaxpager = '0';
if (((!wp_is_mobile() && _hui('ajaxpager_s')) || (wp_is_mobile() && _hui('ajaxpager_s_m'))) && _hui('ajaxpager')) {
    $ajaxpager = _hui('ajaxpager');
};
echo '<script>
window.jui = {
	uri: \'';
echo THEME_URI;
echo '\',
	roll: \'';
echo $roll;
echo '\',
	ajaxpager: \'';
echo $ajaxpager;
echo '\'
}
</script>
';
wp_footer();;
echo '</body>
</html>';

