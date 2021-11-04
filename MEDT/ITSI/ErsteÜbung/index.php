<?php

include_once 'base.php';

draw_header();

?> 
<script>
function shake() {
    function c() {
        var e = document.createElement("link");
        e.setAttribute("type", "text/css");
        e.setAttribute("rel", "stylesheet");
        e.setAttribute("href", f);
        e.setAttribute("class", l);
        document.body.appendChild(e)
    }
    function h() {
        var e = document.getElementsByClassName(l);
        for (var t = 0; t < e.length; t++) {
            document.body.removeChild(e[t])
        }
    }
    function p() {
        var e = document.createElement("div");
        e.setAttribute("class", a);
        document.body.appendChild(e);
        setTimeout(function () {
            document.body.removeChild(e)
        }, 100)
    }
    function d(e) {
        return {
            height: e.offsetHeight,
            width: e.offsetWidth
        }
    }
    function v(i) {
        var s = d(i);
        return s.height > e && s.height < n && s.width > t && s.width < r
    }
    function m(e) {
        var t = e;
        var n = 0;
        while ( !! t) {
            n += t.offsetTop;
            t = t.offsetParent
        }
        return n
    }
    function g() {
        var e = document.documentElement;
        if ( !! window.innerWidth) {
            return window.innerHeight
        } else if (e && !isNaN(e.clientHeight)) {
            return e.clientHeight
        }
        return 0
    }
    function y() {
        if (window.pageYOffset) {
            return window.pageYOffset
        }
        return Math.max(document.documentElement.scrollTop, document.body.scrollTop)
    }
    function E(e) {
        var t = m(e);
        return t >= w && t <= b + w
    }
    function S() {
        var e = document.createElement("audio");
        e.setAttribute("class", l);
        e.src = i;
        e.loop = false;
        e.addEventListener("canplay", function () {
            setTimeout(function () {
                x(k)
            }, 500);
            setTimeout(function () {
                N();
                p();
                for (var e = 0; e < O.length; e++) {
                    T(O[e])
                }
            }, 15500)
        }, true);
        e.addEventListener("ended", function () {
            N();
            h()
        }, true);
        e.innerHTML = " <p>If you are reading this, it is because your browser does not support the audio element. We recommend that you get a new browser.</p> <p>";
        document.body.appendChild(e);
        e.play()
    }
    function x(e) {
        e.className += " " + s + " " + o
    }
    function T(e) {
        e.className += " " + s + " " + u[Math.floor(Math.random() * u.length)]
    }
    function N() {
        var e = document.getElementsByClassName(s);
        var t = new RegExp("\\b" + s + "\\b");
        for (var n = 0; n < e.length;) {
            e[n].className = e[n].className.replace(t, "")
        }
    }
    var e = 30;
    var t = 30;
    var n = 350;
    var r = 350;
    var i = "https://s3.amazonaws.com/moovweb-marketing/playground/harlem-shake.mp3";
    var s = "mw-harlem_shake_me";
    var o = "im_first";
    var u = ["im_drunk", "im_baked", "im_trippin", "im_blown"];
    var a = "mw-strobe_light";
    var f = "https://s3.amazonaws.com/moovweb-marketing/playground/harlem-shake-style.css";
    var l = "mw_added_css";
    var b = g();
    var w = y();
    var C = document.getElementsByTagName("*");
    var k = null;
    for (var L = 0; L < C.length; L++) {
        var A = C[L];
        if (v(A)) {
            if (E(A)) {
                k = A;
                break
            }
        }
    }
    if (A === null) {
        console.warn("Could not find a node of the right size. Please try a different page.");
        return
    }
    c();
    S();
    var O = [];
    for (var L = 0; L < C.length; L++) {
        var A = C[L];
        if (v(A)) {
            O.push(A)
        }
    }
}

let shaked = false;

function shakeOne() {
	if (shaked)
		return;
	shaked = true;
	shake();
}
</script>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Wollen Sie das TGM sponsorn?</h1>
      <p class="lead">Folgende Pakete stehen zur Auswahl</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Einsteiger</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Jobangebote f&uuml; Absolventen</li>
              <li>Spannende ITP-Projekte</li>
              <li>Ferialpraktika</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Anfragen</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Unterst&uuml;tzer</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$1.000 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Werbung in der Schule</li>
              <li>Online-Werbung</li>
              <li>Kooperationen im Unterricht</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Jetzt anfragen</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Vision&auml;r</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$100.000 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Bewerbung im Unterricht</li>
              <li>Kooperation bei Lehrinhalten</li>
              <li>Bennenung eines Klassenraumes</li>
		    </ul>
            <button onclick="shakeOne()" type="button" class="btn btn-lg btn-block btn-primary">Shut up and take my money</button>
          </div>
	</div>
	</div>
	<div class="row">
<?php
if ($isUser) {
?>
<h2> Im Moment sind leider keine weiteren Angebote verf&uuml;gbar.</h2>

<h3> Folgende Dokumente stehen zum Download: </h3>
<ul>
	<li> <a href="getDocument.php?doc=documents/tgm.jpg">tgm.jpg</a> </li>
	<li> <a href="getDocument.php?doc=documents/security.png">security.png</a> </li>
	<li> <a href="getDocument.php?doc=documents/itsi-owasp-injections.pdf">itsi-owasp-injections.pdf</a> </li>
<?php

}

if (!$is_logged_in) {
?>
<h2> Melden Sie sich an f&uuml;r weitere Angebote!</h2>
<?php
}
?>
	</div>
      </div>

<?php

draw_footer();

?>

?>
