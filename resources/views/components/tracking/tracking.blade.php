
	<script>
		(function(w, d, t, r, u) {
			var f, n, i;
			w[u] = w[u] || [], f = function() {
				var o = {
					ti: "17531024"
				};
				o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad")
			}, n = d.createElement(t), n.src = r, n.async = 1, n.onload = n.onreadystatechange = function() {
				var s = this.readyState;
				s && s !== "loaded" && s !== "complete" || (f(), n.onload = n.onreadystatechange = null)
			}, i = d.getElementsByTagName(t)[0], i.parentNode.insertBefore(n, i)
		})(window, document, "script", "//bat.bing.com/bat.js", "uetq");
	</script>
	<!-- Matomo -->
	<script type="text/javascript">
		var _paq = window._paq = window._paq || [];
		/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
		_paq.push(['trackPageView']);
		_paq.push(['enableLinkTracking']);
		(function() {
			var u = "//matomo.dockerexperts.com/";
			_paq.push(['setTrackerUrl', u + 'matomo.php']);
			_paq.push(['setSiteId', '7']);
			var d = document,
				g = d.createElement('script'),
				s = d.getElementsByTagName('script')[0];
			g.type = 'text/javascript';
			g.async = true;
			g.src = u + 'matomo.js';
			s.parentNode.insertBefore(g, s);
		})();
	</script>
	<!-- End Matomo Code -->
	<!-- TrafficGuard Integration -->
	<script>
		var dataTrafficGuard = dataTrafficGuard || [];
		dataTrafficGuard.push(['property', 'tg-002718-001']);
		dataTrafficGuard.push(['event', 'pageview']);
		(function() {
			var tg = document.createElement('script');
			tg.type = 'text/javascript';
			tg.async = true;
			tg.src = '//tgtag.io/tg.js?pid=tg-002718-001';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(tg, s);
		})();
	</script>
	<noscript><img src="//p.tgtag.io/event?property_id=tg-002718-001&event_name=pageview&no_script=1" width="1" height="1" border="0" /></noscript>
	<!-- TrafficGuard End-->

