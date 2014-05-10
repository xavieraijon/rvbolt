<?php

/* _sub_menu.twig */
class __TwigTemplate_66910a3cedcd64d12c5aca25139bb97e7faa1d007ca14dceefd58bb32e43e144 extends Twig_Template
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
        // line 16
        echo "
";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "    ";
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array(), "any", true, true)) {
                // line 19
                echo "        ";
                echo $this->getAttribute($this, "display_menu_item", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => (isset($context["loop"]) ? $context["loop"] : null)), "method");
                echo "
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 1
    public function getdisplay_menu_item($_item = null, $_loop = null)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $_item,
            "loop" => $_loop,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<li class=\"index-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo " first";
            }
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) {
                echo " last";
            }
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array(), "any", true, true)) {
                echo " has-dropdown";
            }
            if ($this->env->getExtension('Bolt')->current((isset($context["item"]) ? $context["item"] : null))) {
                echo " active";
            }
            echo "\">
    <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array(), "any", true, true)) {
                echo "title='";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"));
                echo "'";
            }
            // line 4
            echo "       class='";
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "class", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "class"), "html", null, true);
            }
            echo "'>
        ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label"), "html", null, true);
            echo "
    </a>
    ";
            // line 7
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array(), "any", true, true)) {
                // line 8
                echo "        <ul class=\"dropdown\">
        ";
                // line 9
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                    // line 10
                    echo "                ";
                    echo $this->getAttribute($this, "display_menu_item", array(0 => (isset($context["submenu"]) ? $context["submenu"] : null), 1 => (isset($context["loop"]) ? $context["loop"] : null)), "method");
                    echo "
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "        </ul>
    ";
            }
            // line 14
            echo "</li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_sub_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 14,  113 => 8,  99 => 4,  91 => 3,  74 => 2,  62 => 1,  39 => 18,  164 => 79,  158 => 77,  156 => 76,  151 => 75,  115 => 49,  106 => 5,  98 => 33,  88 => 30,  83 => 26,  79 => 25,  75 => 24,  70 => 22,  65 => 21,  60 => 16,  45 => 13,  42 => 19,  34 => 5,  30 => 4,  26 => 3,  22 => 17,  194 => 91,  185 => 84,  182 => 83,  173 => 75,  170 => 74,  157 => 67,  150 => 12,  147 => 73,  140 => 60,  136 => 64,  133 => 10,  131 => 57,  127 => 59,  122 => 54,  116 => 9,  111 => 7,  104 => 42,  101 => 39,  95 => 37,  93 => 31,  90 => 35,  84 => 33,  78 => 31,  72 => 29,  69 => 28,  66 => 26,  59 => 22,  55 => 15,  52 => 20,  50 => 14,  47 => 18,  41 => 16,  38 => 15,  33 => 14,  21 => 2,  19 => 16,);
    }
}
