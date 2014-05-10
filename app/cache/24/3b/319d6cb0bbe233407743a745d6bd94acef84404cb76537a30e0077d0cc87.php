<?php

/* _recordfooter.twig */
class __TwigTemplate_243b319d6cb0bbe233407743a745d6bd94acef84404cb76537a30e0077d0cc87 extends Twig_Template
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
        // line 2
        echo "<h6>
    ";
        // line 3
        $context["recdate"] = $this->env->getExtension('Bolt')->localedatetime($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "datepublish"), "%A %B %e, %Y");
        // line 4
        echo "    ";
        echo $this->env->getExtension('Bolt')->trans("Written by <em>%name%</em> on %date%", array("%name%" => $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "user"), "displayname"), "%date%" => (isset($context["recdate"]) ? $context["recdate"] : null)));
        echo " <br>
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "link"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Bolt')->trans("Permalink");
        echo "</a> -
    ";
        // line 8
        echo "    ";
        $this->env->loadTemplate("_sub_taxonomylinks.twig")->display(array_merge($context, array("record" => (isset($context["record"]) ? $context["record"] : null))));
        // line 9
        echo "</h6>
";
    }

    public function getTemplateName()
    {
        return "_recordfooter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  35 => 8,  29 => 5,  24 => 4,  22 => 3,  241 => 112,  232 => 105,  230 => 104,  219 => 97,  216 => 95,  208 => 92,  205 => 87,  198 => 83,  191 => 78,  184 => 74,  180 => 72,  178 => 71,  173 => 68,  155 => 62,  153 => 61,  150 => 60,  144 => 58,  138 => 56,  132 => 54,  129 => 53,  126 => 51,  119 => 47,  115 => 46,  112 => 45,  110 => 44,  103 => 42,  99 => 40,  81 => 39,  77 => 37,  71 => 34,  68 => 33,  65 => 32,  62 => 27,  58 => 25,  52 => 23,  46 => 21,  44 => 20,  40 => 19,  37 => 18,  34 => 17,  31 => 15,  21 => 2,  19 => 2,);
    }
}
