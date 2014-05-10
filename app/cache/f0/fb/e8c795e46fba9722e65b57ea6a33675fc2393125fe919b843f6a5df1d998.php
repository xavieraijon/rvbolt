<?php

/* editconfig.twig */
class __TwigTemplate_f0fbe8c795e46fba9722e65b57ea6a33675fc2393125fe919b843f6a5df1d998 extends Twig_Template
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
        $this->env->loadTemplate("_header.twig")->display(array_merge($context, array("active" => "settings")));
        // line 2
        echo "
<h1>";
        // line 3
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</h1>

";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["pathsegments"]) ? $context["pathsegments"] : null)) > 1)) {
            // line 6
            echo "    <p>";
            echo $this->env->getExtension('Bolt')->trans("Path:");
            echo "
        ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pathsegments"]) ? $context["pathsegments"] : null));
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
            foreach ($context['_seq'] as $context["path"] => $context["segment"]) {
                // line 8
                echo "            ";
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first"))) {
                    echo " / ";
                }
                // line 9
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("files", array("path" => (isset($context["path"]) ? $context["path"] : null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["segment"]) ? $context["segment"] : null), "html", null, true);
                echo "</a>
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
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    </p>
";
        }
        // line 13
        echo "
<form action=\"\" method=\"post\" class=\"form-inline\" autocomplete=\"off\">

<div>
<textarea id=\"form_contents\" name=\"form[contents]\" required=\"required\" class=\"CodeMirror-scroll\" style=\"width: 98%; min-height: 350px;\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "value"), "contents"), "html", null, true);
        echo "</textarea>
</div>
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token"), 'widget');
        echo "
    <br />
    <button type=\"submit\" id=\"saveeditfile\" class=\"btn btn-primary\" ";
        // line 21
        if ((!(isset($context["writeallowed"]) ? $context["writeallowed"] : null))) {
            echo "disabled";
        }
        echo "><i class=\"icon-flag\"></i> ";
        echo $this->env->getExtension('Bolt')->trans("Save");
        echo "</button>
    <a class=\"btn confirm\" style=\"margin-left: 24px;\"
       data-confirm=\"";
        // line 23
        echo $this->env->getExtension('Bolt')->trans("Are you sure you wish to revert? Your changes will be lost, if you don't save them.");
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fileedit", array("file" => (isset($context["file"]) ? $context["file"] : null))), "html", null, true);
        echo "\">
        <i class=\"icon-undo\"></i> ";
        // line 24
        echo $this->env->getExtension('Bolt')->trans("Revert changes");
        echo "
    </a>
</form>

";
        // line 28
        if ((!$this->env->getExtension('Bolt')->isMobileClient())) {
            // line 29
            echo "    ";
            // line 30
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
            echo "view/lib/ckeditor/plugins/codemirror/css/codemirror.min.css\">
    <script src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
            echo "view/lib/ckeditor/plugins/codemirror/js/codemirror.min.js\"></script>
    ";
            // line 32
            if (twig_in_filter((isset($context["filetype"]) ? $context["filetype"] : null), array(0 => "twig", 1 => "html", 2 => "htm"))) {
                // line 33
                echo "    <script src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "view/lib/codemirror/xml.js\"></script>
    <script src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "view/lib/codemirror/javascript.js\"></script>
    <script src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "view/lib/codemirror/css.js\"></script>
    <script src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "view/lib/codemirror/htmlmixed.js\"></script>
    ";
            } elseif (((isset($context["filetype"]) ? $context["filetype"] : null) == "php")) {
                // line 38
                echo "    <script src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "view/lib/codemirror/matchbrackets.js\"></script>
    <script src=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "view/lib/codemirror/javascript.js\"></script>
    <script src=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "view/lib/codemirror/css.js\"></script>
    <script src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "view/lib/codemirror/htmlmixed.js\"></script>
    <script src=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "view/lib/codemirror/clike.js\"></script>
    <script src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "view/lib/codemirror/php.js\"></script>
    ";
            } elseif (((isset($context["filetype"]) ? $context["filetype"] : null) == "yml")) {
                // line 45
                echo "    <script src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "view/lib/codemirror/yaml.js\"></script>
    ";
            } elseif (((isset($context["filetype"]) ? $context["filetype"] : null) == "md")) {
                // line 47
                echo "    <script src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "view/lib/codemirror/markdown.js\"></script>
    ";
            } elseif (twig_in_filter((isset($context["filetype"]) ? $context["filetype"] : null), array(0 => "css", 1 => "less"))) {
                // line 49
                echo "    <script src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "view/lib/codemirror/css.js\"></script>
    ";
            } elseif (((isset($context["filetype"]) ? $context["filetype"] : null) == "js")) {
                // line 51
                echo "    <script src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "view/lib/codemirror/javascript.js\"></script>
    ";
            }
            // line 53
            echo "
    <script type=\"text/javascript\">
        \$(function() {

            \$('#saveeditfile').bind('click', function(e){
                // Re-set the handler for checking changes to the form..
                window.onbeforeunload = null;
            });

            var editor = CodeMirror.fromTextArea(document.getElementById(\"form_contents\"), {
                lineNumbers: true,
                autofocus: true,
                tabSize: 4,
                indentUnit: 4,
                indentWithTabs: false,
                readOnly: ";
            // line 68
            if ((isset($context["writeallowed"]) ? $context["writeallowed"] : null)) {
                echo "false";
            } else {
                echo "true";
            }
            // line 69
            echo "            });

            var newheight = \$(window).height() - 312;
            if (newheight < 200) {
                newheight = 200;
            }

            editor.setSize(null, newheight);

        });
    </script>
";
        }
        // line 81
        echo "
";
        // line 82
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "editconfig.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 82,  239 => 81,  225 => 69,  219 => 68,  202 => 53,  196 => 51,  190 => 49,  184 => 47,  178 => 45,  173 => 43,  169 => 42,  165 => 41,  161 => 40,  157 => 39,  152 => 38,  147 => 36,  143 => 35,  139 => 34,  134 => 33,  132 => 32,  128 => 31,  123 => 30,  121 => 29,  119 => 28,  112 => 24,  106 => 23,  97 => 21,  92 => 19,  87 => 17,  81 => 13,  77 => 11,  58 => 9,  53 => 8,  36 => 7,  31 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
