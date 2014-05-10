<?php

/* _sub_stack.twig */
class __TwigTemplate_777c40970665f174834f38cf0596e0705b798dc603dba8fa482b4ed1eb8cfd3a extends Twig_Template
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
        if ((isset($context["stack"]) ? $context["stack"] : null)) {
            // line 2
            echo "    ";
            if (((isset($context["options"]) ? $context["options"] : null) == "full")) {
                // line 3
                echo "
    <section>
        <h2><i class=\"icon-paper-clip\"></i> ";
                // line 5
                echo $this->env->getExtension('Bolt')->trans("Files on the stack");
                echo "</h2>

        <div id=\"protostack\">

            <div class=\"stackitem image info-pop item-1\" data-placement=\"bottom\" data-html=\"true\" data-title=\"\" data-content=\"\">
                <img src=\"\" width=\"100\" height=\"100\">
            </div>

            <div class=\"stackitem other info-pop item-1\" data-placement=\"bottom\" data-html=\"true\" data-title=\"\" data-content=\"\">
                <strong>HTML</strong>
                <small>index.html</small>
            </div>

        </div>

        <div id=\"stackholder\">
            ";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["stack"]) ? $context["stack"] : null));
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
                    // line 22
                    echo "
            <div class=\"stackitem item-";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type"), "html", null, true);
                    echo " info-pop\"
                 data-placement=\"bottom\" data-html=\"true\" data-title=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "basename"), "html", null, true);
                    echo "\" data-content=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "info"), "html", null, true);
                    echo "\">
                ";
                    // line 25
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type") == "image")) {
                        // line 26
                        echo "                    <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filepath"), 100, 100), "html", null, true);
                        echo "\" width=\"100\" height=\"100\">
                ";
                    } else {
                        // line 28
                        echo "                   <strong>";
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extension")), "html", null, true);
                        echo "</strong>
                   <small>";
                        // line 29
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "basename"), "html", null, true);
                        echo "</small>
                ";
                    }
                    // line 31
                    echo "            </div>

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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "        </div>


        <div class=\"btn-group\">
            <span class=\"btn fileinput-button\">
                <i class=\"icon-upload\"></i>
                <span>";
                // line 40
                echo $this->env->getExtension('Bolt')->trans("Upload");
                echo "</span>
                <input id=\"fileupload-stack\" type=\"file\" name=\"fileupload-stack[]\" data-url=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "classes/upload/\">
            </span>
        </div>

        <div class=\"btn-group\" style=\"margin-left: 0px;\">
            <a data-target=\"#selectModal-stack\" href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "async"), "html", null, true);
                echo "browse/files?key=stack\" class=\"btn fileinput-select\" data-toggle=\"modal\">
                <i class=\"icon-upload-alt\"></i>
                ";
                // line 48
                echo $this->env->getExtension('Bolt')->trans("Select");
                echo "
            </a>
        </div>

        <!-- Modal \"select from server\"  -->
        <div class=\"modal hide modal-wide\" id=\"selectModal-stack\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">

            <div class=\"modal-body\">
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
                // line 58
                echo $this->env->getExtension('Bolt')->trans("Cancel");
                echo "</button>
            </div>
        </div>

    </section>

    ";
            } elseif (((isset($context["options"]) ? $context["options"] : null) == "minimal")) {
                // line 65
                echo "
        <h2><i class=\"icon-paper-clip\"></i> ";
                // line 66
                echo $this->env->getExtension('Bolt')->trans("Files on the stack");
                echo "</h2>
        <div id=\"stackholder\">
            ";
                // line 68
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["stack"]) ? $context["stack"] : null));
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
                    // line 69
                    echo "
                <div class=\"stackitem stackitem-wide item-";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type"), "html", null, true);
                    echo "\">
                    <a href=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths"), "files"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filepath"), "html", null, true);
                    echo "\" class=\"filebrowserCallbackLink\">
                    ";
                    // line 72
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type") == "image")) {
                        // line 73
                        echo "                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filepath"), 100, 100), "html", null, true);
                        echo "\" width=\"100\" height=\"100\">
                    ";
                    } else {
                        // line 75
                        echo "                        <strong>";
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extension")), "html", null, true);
                        echo "</strong>
                        <small>";
                        // line 76
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "basename"), "html", null, true);
                        echo "</small>
                    ";
                    }
                    // line 78
                    echo "                    </a>
                </div>

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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "        </div>

    ";
            } elseif (((isset($context["options"]) ? $context["options"] : null) == "list")) {
                // line 85
                echo "
        <ul>
        ";
                // line 87
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["stack"]) ? $context["stack"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 88
                    echo "            <li>
                <a href=\"";
                    // line 89
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths"), "files"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filepath"), "html", null, true);
                    echo "\" class=\"filebrowserCallbackLink\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "basename"), "html", null, true);
                    echo "
                    <small>(";
                    // line 90
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filesize"), "html", null, true);
                    // line 91
                    if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "imagesize")) {
                        echo ", ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "imagesize"), "html", null, true);
                        echo " px";
                    }
                    echo ")</small></a>
            </li>

        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "        </ul>

    ";
            }
            // line 98
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "_sub_stack.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 98,  260 => 91,  258 => 90,  251 => 89,  248 => 88,  244 => 87,  240 => 85,  235 => 82,  218 => 78,  213 => 76,  208 => 75,  202 => 73,  200 => 72,  195 => 71,  189 => 70,  186 => 69,  169 => 68,  161 => 65,  151 => 58,  138 => 48,  125 => 41,  121 => 40,  113 => 34,  92 => 29,  87 => 28,  81 => 26,  79 => 25,  67 => 23,  64 => 22,  47 => 21,  28 => 5,  24 => 3,  291 => 104,  280 => 96,  274 => 95,  269 => 91,  264 => 89,  257 => 85,  253 => 84,  242 => 75,  227 => 73,  222 => 70,  207 => 68,  203 => 67,  201 => 66,  198 => 65,  181 => 64,  174 => 60,  168 => 57,  164 => 66,  159 => 53,  157 => 52,  154 => 51,  137 => 50,  133 => 46,  129 => 46,  123 => 45,  117 => 42,  112 => 41,  109 => 40,  105 => 39,  102 => 38,  97 => 31,  91 => 34,  85 => 31,  80 => 30,  77 => 29,  73 => 24,  66 => 24,  62 => 22,  60 => 21,  56 => 19,  51 => 16,  45 => 14,  43 => 13,  39 => 12,  34 => 9,  32 => 8,  27 => 6,  21 => 2,  19 => 1,);
    }
}
