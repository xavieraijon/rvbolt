<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_e07356968504a8c6a835e3a3610349b8434e9daa45be1496bb976ef4f759ff93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  70 => 26,  50 => 15,  42 => 12,  26 => 3,  176 => 31,  160 => 28,  146 => 26,  132 => 23,  126 => 21,  118 => 18,  115 => 17,  100 => 15,  48 => 4,  36 => 3,  31 => 30,  22 => 8,  150 => 39,  136 => 36,  130 => 34,  120 => 19,  104 => 28,  96 => 26,  78 => 22,  75 => 28,  72 => 20,  69 => 19,  63 => 17,  57 => 15,  54 => 6,  52 => 5,  49 => 12,  46 => 14,  40 => 9,  37 => 8,  30 => 5,  25 => 14,  279 => 98,  260 => 91,  258 => 90,  251 => 89,  248 => 88,  244 => 87,  240 => 85,  235 => 82,  218 => 78,  213 => 76,  208 => 75,  202 => 73,  200 => 72,  195 => 71,  189 => 70,  186 => 69,  169 => 68,  161 => 65,  151 => 58,  138 => 48,  125 => 41,  121 => 40,  113 => 34,  92 => 29,  87 => 12,  81 => 10,  79 => 29,  67 => 9,  64 => 22,  47 => 21,  28 => 25,  24 => 2,  291 => 104,  280 => 96,  274 => 95,  269 => 91,  264 => 89,  257 => 85,  253 => 84,  242 => 75,  227 => 73,  222 => 70,  207 => 68,  203 => 67,  201 => 66,  198 => 65,  181 => 64,  174 => 60,  168 => 57,  164 => 66,  159 => 53,  157 => 27,  154 => 41,  137 => 50,  133 => 46,  129 => 22,  123 => 20,  117 => 42,  112 => 16,  109 => 40,  105 => 39,  102 => 38,  97 => 31,  91 => 35,  85 => 11,  80 => 30,  77 => 29,  73 => 24,  66 => 25,  62 => 24,  60 => 16,  56 => 19,  51 => 16,  45 => 14,  43 => 10,  39 => 12,  34 => 7,  32 => 6,  27 => 6,  21 => 2,  19 => 1,);
    }
}
