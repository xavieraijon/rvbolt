<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_8575274a1d15fcd0f8b31707c2e7d918c9cd459b4a8b4f8bcf1eaf0a3dec4066 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : null))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  70 => 26,  50 => 15,  42 => 12,  26 => 3,  176 => 31,  160 => 28,  146 => 26,  132 => 23,  126 => 21,  118 => 18,  115 => 17,  100 => 15,  48 => 4,  36 => 3,  31 => 30,  22 => 8,  150 => 39,  136 => 36,  130 => 34,  120 => 19,  104 => 28,  96 => 26,  78 => 22,  75 => 28,  72 => 20,  69 => 19,  63 => 17,  57 => 15,  54 => 6,  52 => 5,  49 => 12,  46 => 14,  40 => 9,  37 => 8,  30 => 5,  25 => 14,  279 => 98,  260 => 91,  258 => 90,  251 => 89,  248 => 88,  244 => 87,  240 => 85,  235 => 82,  218 => 78,  213 => 76,  208 => 75,  202 => 73,  200 => 72,  195 => 71,  189 => 70,  186 => 69,  169 => 68,  161 => 65,  151 => 58,  138 => 48,  125 => 41,  121 => 40,  113 => 34,  92 => 29,  87 => 12,  81 => 10,  79 => 29,  67 => 9,  64 => 22,  47 => 21,  28 => 25,  24 => 2,  291 => 104,  280 => 96,  274 => 95,  269 => 91,  264 => 89,  257 => 85,  253 => 84,  242 => 75,  227 => 73,  222 => 70,  207 => 68,  203 => 67,  201 => 66,  198 => 65,  181 => 64,  174 => 60,  168 => 57,  164 => 66,  159 => 53,  157 => 27,  154 => 41,  137 => 50,  133 => 46,  129 => 22,  123 => 20,  117 => 42,  112 => 16,  109 => 40,  105 => 39,  102 => 38,  97 => 31,  91 => 35,  85 => 11,  80 => 30,  77 => 29,  73 => 24,  66 => 25,  62 => 24,  60 => 16,  56 => 19,  51 => 16,  45 => 14,  43 => 10,  39 => 12,  34 => 7,  32 => 6,  27 => 6,  21 => 2,  19 => 1,);
    }
}
