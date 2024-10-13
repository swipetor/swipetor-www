</div>

<?php global $config; ?>

<script>
    setBodyWrapperMarginTop();
</script>

<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['setRequestMethod', 'POST']);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);

    (function () {
        var u = "//mtm.swipetor.com/";
        _paq.push(['setTrackerUrl', u + 'mtm']);
        _paq.push(['setSiteId', '7']);
        var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
        g.async = true; g.src = u + 'mtm.js'; s.parentNode.insertBefore(g, s);
    })();
</script>
<!-- End Matomo Code -->

</body>

</html>