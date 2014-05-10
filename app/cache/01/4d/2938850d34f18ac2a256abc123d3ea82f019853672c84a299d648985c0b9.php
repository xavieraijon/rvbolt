<?php

/* _footer.twig */
class __TwigTemplate_014d2938850d34f18ac2a256abc123d3ea82f019853672c84a299d648985c0b9 extends Twig_Template
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
        echo "    <!-- Grab Google CDN's jQuery, fall back to local if offline -->
    <!-- 2.0 for modern browsers, 1.10 for .oldie -->
    <script>
    var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\\soldie\\s/g));
    if(!oldieCheck) {
    document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"><\\/script>');
    } else {
    document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js\"><\\/script>');
    }
    </script>
    <script>
    if(!window.jQuery) {
    if(!oldieCheck) {
      document.write('<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/libs/jquery-2.0.2.min.js\"><\\/script>');
    } else {
      document.write('<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/libs/jquery-1.10.1.min.js\"><\\/script>');
    }
    }
    </script>
    
    <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script>    

    <!--
    Include gumby.js followed by UI modules followed by gumby.init.js
    Or concatenate and minify into a single file -->
    <script gumby-touch=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/libs\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/libs/gumby.js\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/libs/ui/gumby.retina.js\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/libs/ui/gumby.fixed.js\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/libs/ui/gumby.skiplink.js\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/libs/ui/gumby.toggleswitch.js\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/libs/ui/gumby.checkbox.js\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/libs/ui/gumby.radiobtn.js\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/libs/ui/gumby.tabs.js\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/libs/ui/gumby.navbar.js\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/libs/ui/gumby.images.js\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/libs/ui/gumby.parallax.js\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/libs/ui/jquery.validation.js\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/libs/gumby.init.js\"></script>

    <!--
    Google's recommended deferred loading of JS
    gumby.min.js contains gumby.js, all UI modules and gumby.init.js

    Note: If you opt to use this method of defered loading,
    ensure that any javascript essential to the initial
    display of the page is included separately in a normal
    script tag.

    <script type=\"text/javascript\">
    function downloadJSAtOnload() {
    var element = document.createElement(\"script\");
    element.src = \"js/libs/gumby.min.js\";
    document.body.appendChild(element);
    }
    if (window.addEventListener)
    window.addEventListener(\"load\", downloadJSAtOnload, false);
    else if (window.attachEvent)
    window.attachEvent(\"onload\", downloadJSAtOnload);
    else window.onload = downloadJSAtOnload;
    </script> -->

    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/plugins.js\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme"), "html", null, true);
        echo "js/main.js\"></script>

    <!-- Change UA-XXXXX-X to be your site's ID -->
    <!--<script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
    </script>-->

    <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
    <!--[if lt IE 7 ]>
    <script src=\"//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js\"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]-->

  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 63,  129 => 62,  102 => 38,  98 => 37,  94 => 36,  90 => 35,  86 => 34,  82 => 33,  78 => 32,  74 => 31,  70 => 30,  66 => 29,  62 => 28,  58 => 27,  52 => 26,  39 => 16,  34 => 14,  19 => 1,);
    }
}
