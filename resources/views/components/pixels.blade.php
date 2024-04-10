@if (env('CLIENT') == 'LEO')
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 3851879,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
@endif
@if (env('CLIENT') == 'LEO' && env('PLATFORM') == 'KWAI')
    <script>
        ! function(e, t) {
            "object" == typeof exports && "object" == typeof module ? module.exports = t() : "function" == typeof define &&
                define.amd ? define([], t) : "object" == typeof exports ? exports.install = t() : e.install = t()
        }(window, (function() {
            return function(e) {
                var t = {};

                function n(o) {
                    if (t[o]) return t[o].exports;
                    var r = t[o] = {
                        i: o,
                        l: !1,
                        exports: {}
                    };
                    return e[o].call(r.exports, r, r.exports, n), r.l = !0, r.exports
                }
                return n.m = e, n.c = t, n.d = function(e, t, o) {
                    n.o(e, t) || Object.defineProperty(e, t, {
                        enumerable: !0,
                        get: o
                    })
                }, n.r = function(e) {
                    "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol
                        .toStringTag, {
                            value: "Module"
                        }), Object.defineProperty(e, "_esModule", {
                        value: !0
                    })
                }, n.t = function(e, t) {
                    if (1 & t && (e = n(e)), 8 & t) return e;
                    if (4 & t && "object" == typeof e && e && e.esModule) return e;
                    var o = Object.create(null);
                    if (n.r(o), Object.defineProperty(o, "default", {
                            enumerable: !0,
                            value: e
                        }), 2 & t && "string" != typeof e)
                        for (var r in e) n.d(o, r, function(t) {
                            return e[t]
                        }.bind(null, r));
                    return o
                }, n.n = function(e) {
                    var t = e && e.esModule ? function() {
                        return e.default
                    } : function() {
                        return e
                    };
                    return n.d(t, "a", t), t
                }, n.o = function(e, t) {
                    return Object.prototype.hasOwnProperty.call(e, t)
                }, n.p = "", n(n.s = 0)
            }([function(e, t, n) {
                "use strict";
                var o = this && this.spreadArray || function(e, t, n) {
                    if (n || 2 === arguments.length)
                        for (var o, r = 0, i = t.length; r < i; r++) !o && r in t || (o || (o =
                            Array.prototype.slice.call(t, 0, r)), o[r] = t[r]);
                    return e.concat(o || Array.prototype.slice.call(t))
                };
                Object.defineProperty(t, "_esModule", {
                    value: !0
                });
                var r = function(e, t, n) {
                    var o, i = e.createElement("script");
                    i.type = "text/javascript", i.async = !0, i.src = t, n && (i.onerror =
                        function() {
                            r(e, n)
                        });
                    var a = e.getElementsByTagName("script")[0];
                    null === (o = a.parentNode) || void 0 === o || o.insertBefore(i, a)
                };
                ! function(e, t, n) {
                    e.KwaiAnalyticsObject = n;
                    var i = e[n] = e[n] || [];
                    i.methods = ["page", "track", "identify", "instances", "debug", "on", "off", "once",
                        "ready", "alias", "group", "enableCookie", "disableCookie"
                    ];
                    var a = function(e, t) {
                        e[t] = function() {
                            for (var n = [], r = 0; r < arguments.length; r++) n[r] = arguments[
                                r];
                            var i = o([t], n, !0);
                            e.push(i)
                        }
                    };
                    i.methods.forEach((function(e) {
                        a(i, e)
                    })), i.instance = function(e) {
                        var t, n = (null === (t = i._i) || void 0 === t ? void 0 : t[e]) || [];
                        return i.methods.forEach((function(e) {
                            a(n, e)
                        })), n
                    }, i.load = function(e, o) {
                        var a = "https://s1.kwai.net/kos/s101/nlav11187/pixel/events.js";
                        i._i = i._i || {}, i._i[e] = [], i._i[e]._u = a, i._t = i._t || {}, i._t[
                            e] = +new Date, i._o = i._o || {}, i._o[e] = o || {};
                        var c = "?sdkid=".concat(e, "&lib=").concat(n);
                        r(t, a + c,
                            "https://s16-11187.ap4r.com/kos/s101/nlav11187/pixel/events.js" + c)
                    }
                }(window, document, "kwaiq")
            }])
        }));
    </script>
    <script>
        kwaiq.load('564250114819620883');
        kwaiq.page();
        kwaiq.track('completeRegistration')
        kwaiq.track('contentView')
        kwaiq.track('addToCart')
    </script>
@endif
@if (env('CLIENT') == 'GABRIEL' && env('PLATFORM') == 'MULTI')
    <!-- Hotjar Tracking Code for MUSICPIX APLICATIVO -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 3896829,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NV2T6BZK4M"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-NV2T6BZK4M');
    </script>

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '425200016747018');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=425200016747018&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '368385625701839');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=368385625701839&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
@endif
