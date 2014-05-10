<?php

/* form_bolt_layout.twig */
class __TwigTemplate_717f8c82b2de6a43d212dad4b94d311d7f71178ccd460206eb9fa2058cb9e2cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_errors', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 39
        echo "
";
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div class=\"control-group ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo "error";
        }
        echo "\">
            <div class=\"controls\">
                ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        echo "
                ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_form_errors($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        ob_start();
        // line 17
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 18
            echo "            <span class=\"help-inline\">";
            echo twig_escape_filter($this->env, (((null === $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messagePluralization"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageParameters"), "validators"))), "html", null, true);
            // line 22
            echo "</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        ob_start();
        // line 29
        echo "        <fieldset class=\"checkbox\">
            ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 31
            echo "                <div>
                    ";
            // line 32
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget');
            echo "
                    ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'label');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </fieldset>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "form_bolt_layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  128 => 36,  115 => 32,  99 => 27,  79 => 17,  64 => 9,  60 => 8,  35 => 27,  30 => 15,  27 => 14,  119 => 33,  110 => 33,  106 => 32,  102 => 28,  97 => 28,  93 => 26,  84 => 18,  74 => 20,  71 => 19,  67 => 17,  48 => 5,  22 => 2,  416 => 133,  408 => 130,  405 => 129,  395 => 123,  392 => 122,  387 => 118,  379 => 113,  374 => 111,  371 => 110,  361 => 104,  358 => 103,  353 => 99,  347 => 95,  340 => 93,  334 => 92,  328 => 91,  324 => 90,  321 => 89,  318 => 88,  310 => 86,  307 => 85,  299 => 83,  297 => 82,  293 => 81,  290 => 80,  282 => 78,  279 => 77,  271 => 75,  268 => 74,  260 => 72,  257 => 71,  249 => 69,  247 => 68,  242 => 67,  238 => 65,  228 => 61,  224 => 60,  220 => 59,  217 => 58,  213 => 57,  208 => 56,  206 => 55,  203 => 54,  197 => 51,  193 => 50,  189 => 49,  185 => 48,  181 => 47,  177 => 46,  169 => 44,  165 => 43,  161 => 42,  150 => 40,  148 => 39,  141 => 35,  134 => 34,  131 => 33,  111 => 27,  105 => 29,  100 => 29,  95 => 22,  90 => 21,  87 => 22,  81 => 18,  73 => 15,  56 => 7,  50 => 12,  42 => 3,  25 => 3,  173 => 45,  167 => 54,  163 => 53,  159 => 52,  155 => 41,  151 => 50,  146 => 48,  140 => 45,  136 => 44,  130 => 41,  125 => 28,  121 => 38,  116 => 36,  112 => 31,  108 => 30,  103 => 32,  98 => 30,  94 => 24,  89 => 27,  85 => 19,  80 => 23,  76 => 16,  72 => 22,  68 => 21,  58 => 15,  53 => 15,  49 => 14,  65 => 24,  63 => 19,  54 => 14,  52 => 15,  41 => 8,  28 => 5,  24 => 3,  45 => 4,  37 => 39,  32 => 26,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
