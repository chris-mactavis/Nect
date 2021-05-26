<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="social-icons">
                <?php $footer = get_field('social_icons', 'option'); if($footer): ?>
                    <?php $socials = $footer['social_links']; foreach($socials as $social):?>
                      <a href="<?= $social['social_url']; ?>" target="_blank" title="Facebook"><i class="fa <?= $social['icon_text']; ?>"></i></a>
                    <?php endforeach; ?>
                <?php endif; ?>    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="footer-bottom">
                    <ul class="text-center">
                        <li>&copy; 2020 The North-East Children's Trust. All rights reserved. <br> Made with <i class="fa fa-heart" style="color: #b3fad7;"></i> in Nigeria.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- <script src="js/jquery-2.1.4.min.js"></script> -->
<script src="js/flexslider.min.js"></script>
<script src="js/scripts.js"></script>
<script src="lightbox/js/lightbox.js"></script>
<!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('ffaac72eu22x');
</script>
<!-- End of Async Drift Code -->

<?php wp_footer(); ?>
</body>

</html>