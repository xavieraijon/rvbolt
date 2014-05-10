<?php

/* index.twig */
class __TwigTemplate_8a163807b876efbf763cee9cd485116a9b85d3a333e2e5ca62b57c942c2010b8 extends Twig_Template
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
        $this->env->loadTemplate("_header.twig")->display($context);
        // line 2
        echo "
<!-- Main Page Content and Sidebar -->

<div class=\"row\">

    <!-- Main Blog Content -->
    <div class=\"eight columns\" role=\"content\">

        <article>

            ";
        // line 14
        echo "            ";
        $template_storage = new Bolt\Storage($context['app']);
        $context['home'] =         $template_storage->getContent("page/1", array (
) );
        // line 15
        echo "            ";
        if (($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "title", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "title"))))) {
            // line 16
            echo "                <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "title"), "html", null, true);
            echo "</h1>
            ";
        }
        // line 18
        echo "
            ";
        // line 19
        if (($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "image", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "image"))))) {
            // line 20
            echo "                <div class=\"five columns imageholder\">
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "image")), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "image"), 400, 260), "html", null, true);
            echo "\">
                    </a>
                </div>
            ";
        }
        // line 26
        echo "
            ";
        // line 28
        echo "            ";
        if (($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "introduction", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "introduction"))))) {
            // line 29
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "introduction"), "html", null, true);
            echo "
            ";
        } elseif (($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "teaser", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "teaser"))))) {
            // line 31
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "teaser"), "html", null, true);
            echo "
            ";
        } elseif ((!twig_test_empty((isset($context["home"]) ? $context["home"] : null)))) {
            // line 33
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "excerpt", array(0 => 500), "method"), "html", null, true);
            echo "</p>
            ";
        }
        // line 35
        echo "
            ";
        // line 36
        if (($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "link", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "link"))))) {
            // line 37
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["home"]) ? $context["home"] : null), "link"), "html", null, true);
            echo "\">Read more &raquo;</a>
            ";
        }
        // line 39
        echo "
            ";
        // line 42
        echo "
        </article>

        <hr>

        <h4>";
        // line 47
        echo $this->env->getExtension('Bolt')->trans("Latest entries");
        echo "</h4>

        ";
        // line 53
        echo "        ";
        $template_storage = new Bolt\Storage($context['app']);
        $context['records'] =         $template_storage->getContent("entries/latest/6", array (
  'paging' => true,
) );
        // line 54
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 55
            echo "            <article>

                ";
            // line 57
            if (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image") != "")) {
                // line 58
                echo "                    <div class=\"three columns imageholder\">
                        <a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->image($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image")), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image"), 400, 260), "html", null, true);
                echo "\">
                        </a>
                    </div>
                ";
            }
            // line 64
            echo "
                <h3><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title"), "html", null, true);
            echo "</a></h3>

                <p>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "excerpt", array(0 => 220), "method"), "html", null, true);
            echo "</p>

            </article>

            <hr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
        ";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->pager($this->env), "html", null, true);
        echo "


    </div>

    <!-- End Main Content -->
    ";
        // line 83
        echo "    ";
        $this->env->loadTemplate("_aside.twig")->display($context);
        // line 84
        echo "
</div>

<!-- End Main Content and Sidebar -->



";
        // line 91
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 91,  185 => 84,  182 => 83,  173 => 75,  170 => 74,  157 => 67,  150 => 65,  147 => 64,  140 => 60,  136 => 59,  133 => 58,  131 => 57,  127 => 55,  122 => 54,  116 => 53,  111 => 47,  104 => 42,  101 => 39,  95 => 37,  93 => 36,  90 => 35,  84 => 33,  78 => 31,  72 => 29,  69 => 28,  66 => 26,  59 => 22,  55 => 21,  52 => 20,  50 => 19,  47 => 18,  41 => 16,  38 => 15,  33 => 14,  21 => 2,  19 => 1,);
    }
}
