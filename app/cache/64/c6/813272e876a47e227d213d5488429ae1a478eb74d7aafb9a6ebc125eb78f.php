<?php

/* _messages.twig */
class __TwigTemplate_64c6813272e876a47e227d213d5488429ae1a478eb74d7aafb9a6ebc125eb78f extends Twig_Template
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
        echo "
";
        // line 2
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "has", array(0 => "info"), "method")) {
            // line 3
            echo "    <div class=\"alert alert-info\">
        <button class=\"close\" data-dismiss=\"alert\">×</button>
        ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "get", array(0 => "info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 6
                echo "            ";
                echo $this->env->getExtension('Bolt')->ymllink((isset($context["msg"]) ? $context["msg"] : null));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </div>
";
        }
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "has", array(0 => "error"), "method")) {
            // line 12
            echo "    <div class=\"alert alert-error\">
        <button class=\"close\" data-dismiss=\"alert\">×</button>
        ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 15
                echo "            ";
                echo $this->env->getExtension('Bolt')->ymllink((isset($context["msg"]) ? $context["msg"] : null));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </div>
";
        }
        // line 19
        echo "
";
        // line 20
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "has", array(0 => "warning"), "method")) {
            // line 21
            echo "    <div class=\"alert alert-warning\">
        <button class=\"close\" data-dismiss=\"alert\">×</button>
        ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "get", array(0 => "warning"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 24
                echo "            ";
                echo $this->env->getExtension('Bolt')->ymllink((isset($context["msg"]) ? $context["msg"] : null));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    </div>
";
        }
        // line 28
        echo "
";
        // line 29
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "has", array(0 => "success"), "method")) {
            // line 30
            echo "    <div class=\"alert alert-success\">
        <button class=\"close\" data-dismiss=\"alert\">×</button>
        ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashBag"), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 33
                echo "            ";
                echo $this->env->getExtension('Bolt')->ymllink((isset($context["msg"]) ? $context["msg"] : null));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "_messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  110 => 33,  106 => 32,  102 => 30,  97 => 28,  93 => 26,  84 => 24,  74 => 20,  71 => 19,  67 => 17,  48 => 11,  22 => 2,  416 => 133,  408 => 130,  405 => 129,  395 => 123,  392 => 122,  387 => 118,  379 => 113,  374 => 111,  371 => 110,  361 => 104,  358 => 103,  353 => 99,  347 => 95,  340 => 93,  334 => 92,  328 => 91,  324 => 90,  321 => 89,  318 => 88,  310 => 86,  307 => 85,  299 => 83,  297 => 82,  293 => 81,  290 => 80,  282 => 78,  279 => 77,  271 => 75,  268 => 74,  260 => 72,  257 => 71,  249 => 69,  247 => 68,  242 => 67,  238 => 65,  228 => 61,  224 => 60,  220 => 59,  217 => 58,  213 => 57,  208 => 56,  206 => 55,  203 => 54,  197 => 51,  193 => 50,  189 => 49,  185 => 48,  181 => 47,  177 => 46,  169 => 44,  165 => 43,  161 => 42,  150 => 40,  148 => 39,  141 => 35,  134 => 34,  131 => 33,  111 => 27,  105 => 25,  100 => 29,  95 => 22,  90 => 21,  87 => 20,  81 => 18,  73 => 16,  56 => 15,  50 => 12,  42 => 10,  25 => 4,  173 => 45,  167 => 54,  163 => 53,  159 => 52,  155 => 41,  151 => 50,  146 => 48,  140 => 45,  136 => 44,  130 => 41,  125 => 28,  121 => 38,  116 => 36,  112 => 35,  108 => 26,  103 => 32,  98 => 30,  94 => 29,  89 => 27,  85 => 19,  80 => 23,  76 => 21,  72 => 22,  68 => 21,  58 => 15,  53 => 15,  49 => 14,  65 => 24,  63 => 19,  54 => 14,  52 => 15,  41 => 8,  28 => 5,  24 => 3,  45 => 10,  37 => 7,  32 => 6,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
