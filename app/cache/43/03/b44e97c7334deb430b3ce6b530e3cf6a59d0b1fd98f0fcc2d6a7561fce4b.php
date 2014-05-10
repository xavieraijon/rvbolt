<?php

/* base.twig */
class __TwigTemplate_4303b44e97c7334deb430b3ce6b530e3cf6a59d0b1fd98f0fcc2d6a7561fce4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("_header.twig")->display($context);
        // line 2
        echo "
<h1><strong>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</strong></h1>

";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 10
        echo "
    ";
        // line 11
        if (((array_key_exists("form", $context)) ? (_twig_default_filter((isset($context["form"]) ? $context["form"] : null), null)) : (null))) {
            // line 12
            echo "    <form method=\"post\" id=\"prefill\" class=\"form-horizontal\">
        <div class=\"control-group\">

        <div id=\"form\">
            <div class=\"control-group\">
                <div class=\"info\">";
            // line 17
            echo $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "prefill.short_help", 1 => array(), 2 => "infos"), "method");
            echo "</div>
                <div id=\"form_contenttypes\">
                    ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contenttypes"]) ? $context["contenttypes"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["ctype"]) {
                // line 20
                echo "                    <label><input type=\"checkbox\" id=\"form_contenttypes_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index0"), "html", null, true);
                echo "\" name=\"form[contenttypes][]\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" />";
                echo twig_escape_filter($this->env, (isset($context["ctype"]) ? $context["ctype"] : null), "html", null, true);
                echo "</label>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['ctype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                </div>
            </div>
        </div>
        ";
            // line 25
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token"), 'widget');
            echo "

            <button type=\"button\" class=\"btn\" id=\"check-all\"><i class=\"icon-check\"></i> ";
            // line 27
            echo $this->env->getExtension('Bolt')->trans("Select all");
            echo "</button>
            <button type=\"button\" class=\"btn\" id=\"uncheck-all\" ><i class=\"icon-check-empty\"></i> ";
            // line 28
            echo $this->env->getExtension('Bolt')->trans("Deselect all");
            echo "</button> &nbsp;
            <button type=\"submit\" class=\"btn btn-primary\" ><i class=\"icon-wrench\"></i> ";
            // line 29
            echo $this->env->getExtension('Bolt')->trans("Prefill database");
            echo "</button>

<script type=\"text/javascript\">
    \$(function() {

        \$('#check-all').on('click', function() {
            // because jQuery is being retarded. See: http://stackoverflow.com/questions/5907645/jquery-chrome-and-checkboxes-strange-behavior
            \$(\"#form_contenttypes :checkbox\").removeAttr('checked').trigger('click')
        });
        \$('#uncheck-all').on('click', function() {
            \$(\"#form_contenttypes :checkbox\").removeAttr('checked');
        });

    });

</script>

    </form>
    ";
        }
        // line 48
        echo "

";
        // line 50
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        // line 7
        echo "        ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 7,  138 => 6,  135 => 5,  131 => 50,  127 => 48,  105 => 29,  97 => 27,  92 => 25,  87 => 22,  66 => 20,  49 => 19,  37 => 12,  35 => 11,  32 => 10,  30 => 5,  25 => 3,  22 => 2,  20 => 1,  126 => 37,  120 => 34,  115 => 33,  113 => 32,  108 => 31,  101 => 28,  96 => 25,  93 => 24,  84 => 22,  80 => 21,  74 => 19,  67 => 15,  62 => 13,  57 => 11,  53 => 9,  44 => 17,  40 => 6,  34 => 4,  31 => 3,  28 => 2,);
    }
}
