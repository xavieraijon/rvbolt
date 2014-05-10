<?php

/* _sub_editfields.twig */
class __TwigTemplate_c4c2e7ed1dd4a500eee197191ace4236a8f0e9af28d31187dbd7827488eeb181 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "fields"));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            // line 2
            echo "
";
            // line 4
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "prefix", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "prefix"))))) {
                // line 5
                echo "<div class='clearfix'>
    ";
                // line 6
                echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "prefix");
                echo "
</div>
";
            }
            // line 9
            echo "

";
            // line 12
            echo "
";
            // line 13
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "text")) {
                // line 14
                echo "    <label><b>";
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "variant") == "inline")) {
                    echo "<span class='left'>";
                }
                // line 15
                echo "        ";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                // line 16
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "variant") == "inline")) {
                    echo "</span>";
                }
                echo "</b></label>
    <input type=\"";
                // line 17
                if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern"), array(0 => "url", 1 => "email"))) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern"), "html", null, true);
                } else {
                    echo "text";
                }
                echo "\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
        value='";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                echo "'
        class='";
                // line 19
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " ";
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "variant") == "inline")) {
                    echo "narrow";
                }
                echo "'
        ";
                // line 20
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"))) {
                    echo "required=\"required\"";
                }
                // line 21
                echo "        ";
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern") && !twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern"), array(0 => "url", 1 => "email")))) {
                    echo "pattern=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern"), "html", null, true);
                    echo "\"";
                }
                // line 22
                echo "        >
";
            }
            // line 24
            echo "

";
            // line 27
            echo "
";
            // line 28
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "number")) {
                // line 29
                echo "    <label><b><span class='left'>
        ";
                // line 30
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null)), "html", null, true);
                }
                // line 31
                echo "    </span></b></label>
    <input type=\"number\" name=\"";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" step=\"0.000000001\"
        value='";
                // line 33
                echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")), "html", null, true);
                echo "'
        class='narrow ";
                // line 34
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo "'
        ";
                // line 35
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"))) {
                    echo "required=\"required\"";
                }
                // line 36
                echo "        ";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern")) {
                    echo "pattern=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern"), "html", null, true);
                    echo "\"";
                }
                // line 37
                echo "        >
";
            }
            // line 39
            echo "
";
            // line 41
            echo "
";
            // line 42
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "float")) {
                // line 43
                echo "    <label><b><span class='left'>
    ";
                // line 44
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                // line 45
                echo "</span></b></label>
    <input type=\"number\" name=\"";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" step=\"0.00000001\"
        value='";
                // line 47
                echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")), "html", null, true);
                echo "'
        class='narrow ";
                // line 48
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo "'
        ";
                // line 49
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"))) {
                    echo "required=\"required\"";
                }
                // line 50
                echo "        ";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern")) {
                    echo "pattern=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern"), "html", null, true);
                    echo "\"";
                }
                // line 51
                echo "        >
";
            }
            // line 53
            echo "
";
            // line 55
            echo "
";
            // line 56
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "integer")) {
                // line 57
                echo "    <label><b><span class='left'>
    ";
                // line 58
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                // line 59
                echo "</span></b></label>
    <input type=\"number\" name=\"";
                // line 60
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" step=\"1\"
        value='";
                // line 61
                echo twig_escape_filter($this->env, (0 + $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")), "html", null, true);
                echo "'
        class='narrow ";
                // line 62
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo "'
        ";
                // line 63
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"))) {
                    echo "required=\"required\"";
                }
                // line 64
                echo "        ";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern")) {
                    echo "pattern=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern"), "html", null, true);
                    echo "\"";
                }
                // line 65
                echo "        >
";
            }
            // line 67
            echo "
";
            // line 69
            echo "
";
            // line 70
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "checkbox")) {
                // line 71
                echo "<div class=\"checkboxwrapper\">
    <label for=\"";
                // line 72
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
        <b>
            <span class='left'>
                ";
                // line 75
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                // line 76
                echo "            </span>
        </b>
    </label>
    ";
                // line 80
                echo "    <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" value='0'>
    <input type=\"checkbox\" name=\"";
                // line 81
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" value='1'
           ";
                // line 82
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")) {
                    echo "checked";
                } else {
                    echo "notchecked";
                }
                // line 83
                echo "           class='";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo "'>
</div>
";
            }
            // line 86
            echo "

";
            // line 89
            echo "
";
            // line 90
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "slug")) {
                // line 91
                echo "<label class='permalink'>";
                echo $this->env->getExtension('Bolt')->trans("Permalink");
                echo ":
    <code>/";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "singular_slug"), "html", null, true);
                echo "/<span id='show-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                echo "</span></code>
    <input type=\"text\" name=\"";
                // line 93
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"  id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" value='";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                echo "' class='editslug'>
    <span class='sluglocker'><i class='icon-lock'></i></span> <span class='slugedit'><i class='icon-pencil'></i></span>
</label>


";
                // line 98
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses", array(), "any", true, true)) {
                    // line 99
                    echo "<script type=\"text/javascript\">
    \$(function() {
        \$('.sluglocker').bind('click', function() {
           if (\$('.sluglocker i').hasClass('icon-lock')) {
               \$('.sluglocker i').removeClass('icon-lock').addClass('icon-unlock');
               makeUri('";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "html", null, true);
                    echo "', ";
                    echo twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses"));
                    echo ", '";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "', false);
           } else {
               \$('.sluglocker i').addClass('icon-lock').removeClass('icon-unlock');
               stopMakeUri(";
                    // line 107
                    echo twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses"));
                    echo ");
           }
        });
        \$('.slugedit').bind('click', function() {

            newslug = prompt(\"Set the slug to:\");

            \$('.sluglocker i').addClass('icon-lock').removeClass('icon-unlock');
            stopMakeUri(";
                    // line 115
                    echo twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses"));
                    echo ");

            makeUriAjax(newslug, '";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype"), "slug"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "', false)


        });
    ";
                    // line 121
                    if (twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"))) {
                        // line 122
                        echo "        \$('.sluglocker').trigger('click');
    ";
                    }
                    // line 124
                    echo "    });
</script>
";
                }
                // line 127
                echo "
";
            }
            // line 129
            echo "
";
            // line 131
            echo "
";
            // line 132
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "select")) {
                // line 133
                echo "    <label><b><span class='left'>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</span></b></label>
    ";
                // line 134
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple"))) {
                    // line 135
                    echo "        <select name=\"";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "[]\" id=\"";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\" class='";
                    if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                    }
                    echo "' multiple>
            ";
                    // line 136
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "values"));
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 137
                        echo "                <option value=\"";
                        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                        echo "\" ";
                        if (twig_in_filter((isset($context["value"]) ? $context["value"] : null), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                        echo "</option>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 139
                    echo "        </select>
    ";
                } else {
                    // line 141
                    echo "        <select name=\"";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\" class='";
                    if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                    }
                    echo "'>
            ";
                    // line 142
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "values"));
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 143
                        echo "                <option value=\"";
                        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                        echo "\" ";
                        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") == (isset($context["value"]) ? $context["value"] : null))) {
                            echo "selected";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                        echo "</option>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    echo "        </select>
    ";
                }
            }
            // line 148
            echo "
";
            // line 150
            echo "
";
            // line 151
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "templateselect")) {
                // line 152
                echo "<label><b><span class='left'>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</span></b></label>
    <select name=\"";
                // line 153
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
        <option value=\"\">";
                // line 154
                echo $this->env->getExtension('Bolt')->trans("(default template)");
                echo "</option>
        <option value=\"\" disabled>-----------</option>
        ";
                // line 156
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Bolt')->listtemplates($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "filter")));
                foreach ($context['_seq'] as $context["filename"] => $context["name"]) {
                    // line 157
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : null), "html", null, true);
                    echo "\" ";
                    if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") == (isset($context["filename"]) ? $context["filename"] : null))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "</option>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['filename'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "    </select>
";
            }
            // line 161
            echo "
";
            // line 163
            echo "
";
            // line 164
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "image")) {
                // line 165
                echo "<div class=\"dropzone\" id=\"dropzone-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">

    <div class=\"image-right\">
        <div class='imageholder' id=\"thumbnail-";
                // line 168
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
            ";
                // line 169
                if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") != "")) {
                    // line 170
                    echo "            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), 120, 120, "c"), "html", null, true);
                    echo "\" width=\"120\" height=\"120\">
            ";
                } else {
                    // line 172
                    echo "            <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths"), "app"), "html", null, true);
                    echo "view/img/default_empty.png\" width=\"120\" height=\"120\">
            ";
                }
                // line 174
                echo "        </div>
    </div>
    <div class=\"image-container\">

        <label>
            <b>";
                // line 179
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b>
            <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 180
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null)), "html", null, true);
                }
                echo "\"
                data-content=\"";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.upload.image", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>
        </label>

        <input type=\"text\" name=\"";
                // line 184
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"field-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
            value='";
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                echo "'
            class='";
                // line 186
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " imageinput wide'>

<!-- The fileinput-button span is used to style the file input field as button -->
        <div class=\"btn-group\">
            <span class=\"btn btn-info fileinput-button\">
                <i class=\"icon-upload\"></i>
                <span>";
                // line 192
                echo $this->env->getExtension('Bolt')->trans("Upload image");
                echo "</span>
                <input id=\"fileupload-";
                // line 193
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" type=\"file\" name=\"fileupload-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[]\" data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "classes/upload/\">
            </span>
        </div>

        <div class=\"btn-group\" style=\"margin-left: 0px;\">
            <a data-target=\"#selectModal-";
                // line 198
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "async"), "html", null, true);
                echo "browse/files?key=";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" class=\"btn fileinput-select\" data-toggle=\"modal\">
                <i class=\"icon-upload-alt\"></i>
                ";
                // line 200
                echo $this->env->getExtension('Bolt')->trans("Select from server");
                echo "
            </a>
        </div>

        ";
                // line 204
                $context["items"] = $this->env->getExtension('Bolt')->stackitems(7, "image");
                // line 205
                echo "        ";
                if ((isset($context["items"]) ? $context["items"] : null)) {
                    // line 206
                    echo "        <div class=\"btn-group\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"icon-paper-clip\"></i>
                ";
                    // line 209
                    echo $this->env->getExtension('Bolt')->trans("Select from stack");
                    echo "
                <span class=\"caret\"></span>
            </a>

            <ul class=\"dropdown-menu\" id=\"stack-";
                    // line 213
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\">
                ";
                    // line 214
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 215
                        echo "                    <li>
                        <a href=\"#\" data-action=\"stack.selectFromPulldown('";
                        // line 216
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filepath"), "html", null, true);
                        echo "');\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "basename"), "html", null, true);
                        echo " <small>(";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filesize"), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "imagesize"), "html", null, true);
                        echo " px)</small></a>
                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 219
                    echo "            </ul>
        </div>
        ";
                }
                // line 222
                echo "

        <div class=\"progress progress-striped active\" id=\"progress-";
                // line 224
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
            <div class=\"bar\" style=\"width: 0%;\"></div>
        </div>

        <!-- Modal \"select from server\"  -->
        <div class=\"modal hide modal-wide\" id=\"selectModal-";
                // line 229
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">

            <div class=\"modal-body\">
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
                // line 234
                echo $this->env->getExtension('Bolt')->trans("Cancel");
                echo "</button>
            </div>
        </div>



";
                // line 240
                if ((!$this->env->getExtension('Bolt')->isMobileClient())) {
                    // line 241
                    echo "
<script type=\"text/javascript\">
    \$(function() {
        bindFileUpload('";
                    // line 244
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "');

        \$(\"#field-";
                    // line 246
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\").autocomplete({
            source: \"";
                    // line 247
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "async"), "html", null, true);
                    echo "filesautocomplete?ext=gif,jpg,jpeg,png\",
            minLength: 2,
            close: function(){
                if (\$('#field-";
                    // line 250
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "').val() != \"\" ) {
                    \$('#thumbnail-";
                    // line 251
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "').html(\"<img src='";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths"), "root"), "html", null, true);
                    echo "thumbs/120x120c/\"+encodeURI( \$('#field-";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "').val() )+\"' width='120' height='120'>\");
                } else {
                    \$('#thumbnail-";
                    // line 253
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "').html(\"<img src='";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths"), "app"), "html", null, true);
                    echo "view/img/default_empty.png' width='120' height='120'>\");
                }
            }
        });

    });
</script>
";
                }
                // line 261
                echo "
    </div>
</div>
";
            }
            // line 265
            echo "


";
            // line 269
            echo "
";
            // line 270
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "file")) {
                // line 271
                echo "<div class=\"dropzone\" id=\"dropzone-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">

    <div class=\"image-container\">

        <label>
            <b>";
                // line 276
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b>
            <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 277
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null)), "html", null, true);
                }
                echo "\"
                  data-content=\"";
                // line 278
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.upload.file", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>
        </label>

        <input type=\"text\" name=\"";
                // line 281
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"field-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
            value='";
                // line 282
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                echo "'
            class='";
                // line 283
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " imageinput'><br>

<!-- The fileinput-button span is used to style the file input field as button -->
        <div class=\"btn-group\">
            <span class=\"btn btn-info fileinput-button\">
                <i class=\"icon-upload\"></i>
                <span>";
                // line 289
                echo $this->env->getExtension('Bolt')->trans("Upload File");
                echo "</span>
                <input id=\"fileupload-";
                // line 290
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" type=\"file\" name=\"fileupload-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[]\" data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "classes/upload/\">
            </span>
        </div>

        ";
                // line 294
                $context["items"] = $this->env->getExtension('Bolt')->stackitems(7, "other,document");
                // line 295
                echo "        ";
                if ((isset($context["items"]) ? $context["items"] : null)) {
                    // line 296
                    echo "            <div class=\"btn-group\">
                <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"icon-paper-clip\"></i>
                    ";
                    // line 299
                    echo $this->env->getExtension('Bolt')->trans("Select from stack");
                    echo "
                    <span class=\"caret\"></span>
                </a>

                <ul class=\"dropdown-menu\" id=\"stack-";
                    // line 303
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\">
                    ";
                    // line 304
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 305
                        echo "                        <li>
                            <a href=\"#\" data-action=\"stack.selectFromPulldown('";
                        // line 306
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filepath"), "html", null, true);
                        echo "');\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "basename"), "html", null, true);
                        echo " <small>(";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filesize"), "html", null, true);
                        echo ")</small></a>
                        </li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 309
                    echo "                </ul>
            </div>
        ";
                }
                // line 312
                echo "
        <div class=\"progress progress-striped active\" id=\"progress-";
                // line 313
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
            <div class=\"bar\" style=\"width: 0%;\"></div>
        </div>

    ";
                // line 317
                if ((!$this->env->getExtension('Bolt')->isMobileClient())) {
                    // line 318
                    echo "        <div style=\"clear: left;\" class=\"hide-tablet\"><small>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.upload.filesmall", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                    echo "</small></div>
        <script type=\"text/javascript\">
            \$(function() {
                bindFileUpload('";
                    // line 321
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "');

                \$(\"#field-";
                    // line 323
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\").autocomplete({
                    source: \"";
                    // line 324
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "async"), "html", null, true);
                    echo "filesautocomplete?ext=";
                    echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions"), ","), "html", null, true);
                    echo "\",
                    minLength: 2
                });

            });
        </script>
    ";
                }
                // line 331
                echo "
    </div>
</div>
";
            }
            // line 335
            echo "

";
            // line 338
            echo "
";
            // line 339
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "imagelist")) {
                // line 340
                echo "<label>
    <b>
        ";
                // line 342
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                // line 343
                echo "    </b>
    <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 344
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "\"
      data-content=\"";
                // line 345
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.upload.imagelist", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>
</label>
<div class=\"imagelistholder dropzone\" id=\"imagelist-";
                // line 347
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
    <div class=\"list\"></div>

    <div class=\"buttons\">
        <span class=\"btn btn-info fileinput-button\" style=\"margin-bottom: 8px;\">
            <i class=\"icon-upload\"></i>
            <span>";
                // line 353
                echo $this->env->getExtension('Bolt')->trans("Upload image");
                echo "</span>
            <input id=\"fileupload-";
                // line 354
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" type=\"file\" name=\"fileupload-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[]\" data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "classes/upload/\">
        </span>

        <br clear=\"all\">

        <div class=\"btn-group\" style=\"margin-left: 0px;\">
            <a data-target=\"#selectModal-";
                // line 360
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "async"), "html", null, true);
                echo "browse/files?key=";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" class=\"btn fileinput-select\" data-toggle=\"modal\">
                <i class=\"icon-upload-alt\"></i>
                ";
                // line 362
                echo $this->env->getExtension('Bolt')->trans("Select from server");
                echo "
            </a>
        </div>

        ";
                // line 366
                $context["items"] = $this->env->getExtension('Bolt')->stackitems(7, "image");
                // line 367
                echo "        ";
                if ((isset($context["items"]) ? $context["items"] : null)) {
                    // line 368
                    echo "        <div class=\"btn-group\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"icon-paper-clip\"></i>
                ";
                    // line 371
                    echo $this->env->getExtension('Bolt')->trans("Select from stack");
                    echo "
                <span class=\"caret\"></span>
            </a>

            <ul class=\"dropdown-menu\" id=\"stack-";
                    // line 375
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "\">
                ";
                    // line 376
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 377
                        echo "                    <li>
                        <a href=\"#\" data-action=\"stack.selectFromPulldown('";
                        // line 378
                        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filepath"), "html", null, true);
                        echo "');\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "basename"), "html", null, true);
                        echo " <small>(";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filesize"), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "imagesize"), "html", null, true);
                        echo " px)</small></a>
                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 381
                    echo "            </ul>
        </div>
        ";
                }
                // line 384
                echo "
    </div>
    <textarea name=\"";
                // line 386
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" class=\"hide\">";
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                }
                echo "</textarea>
    <div class='clearfix'></div>

    <!-- Modal \"select from server\"  -->
    <div class=\"modal hide modal-wide\" id=\"selectModal-";
                // line 390
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-body\">
        </div>
        <div class=\"modal-footer\">
            <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
                // line 394
                echo $this->env->getExtension('Bolt')->trans("Close");
                echo "</button>
        </div>
    </div>
</div>


<script type=\"text/javascript\">
    \$(function() {

        if(typeof imagelist == \"undefined\") {
            imagelist = [];
        }

        imagelist['";
                // line 407
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "'] = new ImagelistHolder({id: '";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "'});
    });
</script>

";
            }
            // line 412
            echo "

";
            // line 415
            echo "
";
            // line 416
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "filelist")) {
                // line 417
                echo "<label>
    <b>
        ";
                // line 419
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                // line 420
                echo "    </b>
    <span class=\"label info-pop\"
          data-html=\"true\"
          data-title=\"";
                // line 423
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "\"
          data-content=\"";
                // line 424
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.upload.filelist", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">
          ";
                // line 425
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "
    </span>
</label>
<div class=\"filelistholder dropzone\" id=\"filelist-";
                // line 428
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\">
    <div class=\"list\"></div>
    <div class=\"buttons\">
        <span class=\"btn btn-info fileinput-button\"
              style=\"margin-bottom: 8px;\">

            <i class=\"icon-upload\"></i>
            <span>";
                // line 435
                echo $this->env->getExtension('Bolt')->trans("Upload files");
                echo "</span>
            <input id=\"fileupload-";
                // line 436
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
                   type=\"file\"
                   name=\"fileupload-";
                // line 438
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[]\"
                   data-url=\"";
                // line 439
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "classes/upload/\">
        </span>
    </div>
    <textarea name=\"";
                // line 442
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
              id=\"";
                // line 443
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
              class=\"hide\">";
                // line 444
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                }
                echo "</textarea>
</div>
<div class='clearfix'></div>

<script type=\"text/javascript\">
    \$(function() {

        if(typeof filelist == \"undefined\") {
            filelist = [];
        }

        filelist['";
                // line 455
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "'] = new FilelistHolder({id: '";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "'});
    });
</script>

";
            }
            // line 460
            echo "
";
            // line 462
            echo "
";
            // line 463
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "video")) {
                // line 464
                echo "
";
                // line 465
                $context["video"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method");
                // line 466
                echo "<div class=\"dropzone\">

    <div class=\"video-right hide-phone\">
        <div class='imageholder' id=\"thumbnail-";
                // line 469
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" style=\"width: 160px; text-align: center; background-color: #F8F8F8;\">
            ";
                // line 470
                if ((($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail"), "")) : (""))) {
                    // line 471
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail"), "html", null, true);
                    echo "\" width=\"160\" height=\"120\">
            ";
                } else {
                    // line 473
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths"), "app"), "html", null, true);
                    echo "view/img/default_empty.png\" width=\"120\" height=\"120\">
            ";
                }
                // line 475
                echo "        </div>
    </div>

    <div class=\"video-container\">
        <label>
            <b>";
                // line 480
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b>
            (<span id=\"video-";
                // line 481
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-text\">";
                if ($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title", array(), "any", true, true)) {
                    echo "\"";
                    echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title"), 18);
                    echo "\" by ";
                    echo $this->env->getExtension('Bolt')->trim($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorname"), 18);
                }
                echo "</span>)
            <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 482
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "\"
                  data-content=\"";
                // line 483
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.upload.video", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>
        </label>
        <label>";
                // line 485
                echo $this->env->getExtension('Bolt')->trans("URL:");
                echo " <input type=\"url\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[url]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
               value='";
                // line 486
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "url"), "")) : ("")), "html", null, true);
                echo "' style='width: 60%;'>
        </label>

        <label>";
                // line 489
                echo $this->env->getExtension('Bolt')->trans("Size:");
                echo " <input type=\"number\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[width]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-width\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "width"), "")) : ("")), "html", null, true);
                echo "\" style='width: 60px; min-width: 60px;'>
        x <input type=\"number\" name=\"";
                // line 490
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[height]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-height\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "height"), "")) : ("")), "html", null, true);
                echo "\" style='width: 60px; min-width: 60px;'>
            pixels.
            <span class=\"hide-tablet\"><a href=\"#myModal\" role=\"button\" class=\"btn\" data-toggle=\"modal\" style='float: right;'>";
                // line 492
                echo $this->env->getExtension('Bolt')->trans("Preview video");
                echo "</a></span>
        </label>

        <input type=\"hidden\" name=\"";
                // line 495
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[ratio]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-ratio\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "ratio", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "ratio"), "")) : ("")), "html", null, true);
                echo "\">
        <input type=\"hidden\" name=\"";
                // line 496
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[title]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-title\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title"), "")) : ("")), "html", null, true);
                echo "\" readonly>
        <input type=\"hidden\" name=\"";
                // line 497
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[authorname]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-author_name\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorname"), "")) : ("")), "html", null, true);
                echo "\" readonly>
        <input type=\"hidden\" name=\"";
                // line 498
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[authorurl]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-author_url\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorurl", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "authorurl"), "")) : ("")), "html", null, true);
                echo "\" readonly>
        <input type=\"hidden\" name=\"";
                // line 499
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[html]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-html\" value=\"";
                if ($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html"));
                }
                echo "\">
        <input type=\"hidden\" name=\"";
                // line 500
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[thumbnail]\" id=\"video-";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-thumbnail\" value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "thumbnail"), "")) : ("")), "html", null, true);
                echo "\">

        <script type=\"text/javascript\">
            bindVideoEmbed('";
                // line 503
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "');
        </script>
    </div>
</div>

<!-- Modal video preview -->
<div class=\"modal hide\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">

    <div class=\"modal-body\">
        ";
                // line 512
                if ($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html", array(), "any", true, true)) {
                    // line 513
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "html"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 515
                    echo "        <p>";
                    echo $this->env->getExtension('Bolt')->trans("No video url is set, no video to show.");
                    echo "</p>
        ";
                }
                // line 517
                echo "    </div>
    <div class=\"modal-footer\">
        <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
                // line 519
                echo $this->env->getExtension('Bolt')->trans("Close");
                echo "</button>
    </div>
</div>


";
            }
            // line 525
            echo "




";
            // line 531
            echo "
    ";
            // line 532
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "geolocation")) {
                // line 533
                echo "
        ";
                // line 534
                $context["geolocation"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method");
                // line 535
                echo "        <div class=\"dropzone geolocation\">

            <div class=\"map-right hide-phone\">
                <div class='mapholder' id=\"map-";
                // line 538
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" style=\"width: 200px;\">
                        <img src=\"";
                // line 539
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geo"]) ? $context["geo"] : null), "map", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geo"]) ? $context["geo"] : null), "map"), "")) : ("")), "html", null, true);
                echo "\" width=\"200\" height=\"200\">
                </div>
            </div>

            <div class=\"map-container\">
                <label>
                    <b>";
                // line 545
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b>
                    <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 546
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "\"
                          data-content=\"";
                // line 547
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.geolocation", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>
                </label>
                <label>";
                // line 549
                echo $this->env->getExtension('Bolt')->trans("Address lookup:");
                echo " <input type=\"text\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[address]\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-address\"
                    value='";
                // line 550
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "address"), "")) : ("")), "html", null, true);
                echo "' style='width: 60%;'>
                </label>
                <label>";
                // line 552
                echo $this->env->getExtension('Bolt')->trans("Latitude:");
                echo " <input type=\"text\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[latitude]\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-latitude\"
                    value='";
                // line 553
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "latitude", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "latitude"), "")) : ("")), "html", null, true);
                echo "' style='width: 30%;'>
                 - ";
                // line 554
                echo $this->env->getExtension('Bolt')->trans("Longitude:");
                echo " <input type=\"text\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[longitude]\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-longitude\"
                    value='";
                // line 555
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "longitude", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "longitude"), "")) : ("")), "html", null, true);
                echo "' style='width: 30%;'>
                </label>
                <p>";
                // line 557
                echo $this->env->getExtension('Bolt')->trans("Matched address:");
                echo "
                <span id=\"";
                // line 558
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-reversegeo\"> ";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "formatted_address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "formatted_address"), "")) : ("")), "html", null, true);
                echo "</span></p>
                <input type=\"hidden\" name=\"";
                // line 559
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "[formatted_address]\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-formatted_address\"
                       value='";
                // line 560
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "formatted_address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "formatted_address"), "")) : ("")), "html", null, true);
                echo "' style='width: 30%;'>
                <script type=\"text/javascript\">
                    \$(function() {
                        bindGeolocation('";
                // line 563
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "latitude", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "latitude"), "")) : ("")), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "longitude", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["geolocation"]) ? $context["geolocation"] : null), "longitude"), "")) : ("")), "html", null, true);
                echo "');
                    });
                </script>
            </div>
        </div>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
<script type=\"text/javascript\" src=\"";
                // line 569
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "view/js/jquery.gomap-1.3.2.min.js\"></script>

    ";
            }
            // line 572
            echo "





";
            // line 579
            echo "
";
            // line 580
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "html")) {
                // line 581
                echo "<label><b>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b></label>
<textarea name=\"";
                // line 582
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" class='";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " ckeditor'
    style='";
                // line 583
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height", array(), "any", true, true)) {
                    echo "height: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height"), "html", null, true);
                }
                echo "'
    ";
                // line 584
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"))) {
                    echo "required";
                }
                echo ">
    ";
                // line 585
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                }
                // line 586
                echo "</textarea>
";
            }
            // line 588
            echo "
";
            // line 590
            echo "
";
            // line 591
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "textarea")) {
                // line 592
                echo "<label><b>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b></label>
<textarea name=\"";
                // line 593
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" class='";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo "'
    style='";
                // line 594
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height", array(), "any", true, true)) {
                    echo "height: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height"), "html", null, true);
                }
                echo "'
    ";
                // line 595
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"))) {
                    echo "required";
                }
                // line 596
                echo "    >";
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                }
                echo "</textarea>
";
            }
            // line 598
            echo "

";
            // line 601
            echo "
";
            // line 602
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "markdown")) {
                // line 603
                echo "    <label>
        <b>";
                // line 604
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b>
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
                // line 605
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null)), "html", null, true);
                }
                echo "\"
              data-content=\"";
                // line 606
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator"), "trans", array(0 => "info.markdown", 1 => array(), 2 => "infos"), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Bolt')->trans("Info");
                echo "</span>

    </label>
    <textarea id=\"";
                // line 609
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" class='";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo "'
              style='";
                // line 610
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height", array(), "any", true, true)) {
                    echo "height: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height"), "html", null, true);
                    echo " !important;";
                }
                echo "' ";
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true) && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"))) {
                    echo "required";
                }
                // line 611
                echo "            >";
                if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "html", null, true);
                }
                echo "</textarea>

    <textarea id=\"jquery-catchpaste-textarea\" style=\"position: absolute; width: 0 !important; height: 0; left: -10000px;\"></textarea>

<script type=\"text/javascript\">
    \$(function() {
        bindMarkdown('";
                // line 617
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "');
    });
</script>

";
            }
            // line 622
            echo "

";
            // line 625
            echo "
";
            // line 626
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "date")) {
                // line 627
                echo "<label><b>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b></label>
<input type=\"text\" name=\"";
                // line 628
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-dateformatted\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-date\"
    value='";
                // line 629
                if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") && ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") > "0001-01-01 00:00:00"))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "l, d F Y"), "html", null, true);
                }
                echo "'
    class='";
                // line 630
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " datepicker'>
<input type=\"hidden\" name=\"";
                // line 631
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "Y-m-d H:i:s"), "html", null, true);
                echo "\">
<script type=\"text/javascript\">
    \$(function() {
        \$('#";
                // line 634
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-date').on('change.bolt', function(){
            var date = \$('#";
                // line 635
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-date').datepicker( \"getDate\" );
            \$('#";
                // line 636
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "').val(\$.datepicker.formatDate('yy-mm-dd', date));
        }).trigger('change.bolt');;
    });
</script>
";
            }
            // line 641
            echo "

";
            // line 644
            echo "
";
            // line 645
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type") == "datetime")) {
                // line 646
                echo "<label><b>";
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('Bolt')->ucfirst((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                }
                echo "</b></label>
<input type=\"text\" name=\"";
                // line 647
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-dateformatted\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-date\"
    value='";
                // line 648
                if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") && ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") > "0001-01-01 00:00:00"))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "l, d F Y"), "html", null, true);
                }
                echo "'
    class='";
                // line 649
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " datepicker'>
<input type=\"text\" name=\"";
                // line 650
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-timeformatted\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-time\"
    value='";
                // line 651
                if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") && ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method") > "0001-01-01 00:00:00"))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "H:i"), "html", null, true);
                }
                echo "'
    class='";
                // line 652
                if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class"), "html", null, true);
                }
                echo " timepicker'>
<input type=\"hidden\" name=\"";
                // line 653
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"), "Y-m-d H:i:s"), "html", null, true);
                echo "\">
<script type=\"text/javascript\">
    \$(function() {
        \$('#";
                // line 656
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-date, #";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-time').on('change.bolt', function(){
            var date = \$('#";
                // line 657
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-date').datepicker(\"getDate\");
            var time = \$('#";
                // line 658
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "-time').val() + \":00\";
            \$('#";
                // line 659
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "').val(\$.datepicker.formatDate('yy-mm-dd', date)+\" \"+time);
        }).trigger('change.bolt');;
    });
</script>
";
            }
            // line 664
            echo "

";
            // line 667
            echo "
";
            // line 668
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "postfix", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "postfix"))))) {
                // line 669
                echo "    <div class='clearfix'>
        ";
                // line 670
                echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "postfix");
                echo "
    </div>
";
            }
            // line 673
            echo "
";
            // line 674
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "separator", array(), "any", true, true) && ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "separator") == true))) {
                // line 675
                echo "    <hr>
";
            }
            // line 677
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 680
        echo "
";
    }

    public function getTemplateName()
    {
        return "_sub_editfields.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1956 => 680,  1948 => 677,  1944 => 675,  1942 => 674,  1939 => 673,  1933 => 670,  1930 => 669,  1928 => 668,  1925 => 667,  1921 => 664,  1913 => 659,  1909 => 658,  1905 => 657,  1899 => 656,  1889 => 653,  1883 => 652,  1877 => 651,  1871 => 650,  1865 => 649,  1859 => 648,  1853 => 647,  1844 => 646,  1842 => 645,  1839 => 644,  1835 => 641,  1827 => 636,  1823 => 635,  1819 => 634,  1809 => 631,  1803 => 630,  1797 => 629,  1791 => 628,  1782 => 627,  1780 => 626,  1777 => 625,  1773 => 622,  1765 => 617,  1753 => 611,  1743 => 610,  1733 => 609,  1725 => 606,  1717 => 605,  1709 => 604,  1706 => 603,  1704 => 602,  1701 => 601,  1697 => 598,  1689 => 596,  1685 => 595,  1678 => 594,  1670 => 593,  1661 => 592,  1659 => 591,  1656 => 590,  1653 => 588,  1649 => 586,  1645 => 585,  1639 => 584,  1632 => 583,  1624 => 582,  1615 => 581,  1613 => 580,  1610 => 579,  1602 => 572,  1596 => 569,  1583 => 563,  1577 => 560,  1571 => 559,  1565 => 558,  1561 => 557,  1556 => 555,  1548 => 554,  1544 => 553,  1536 => 552,  1531 => 550,  1523 => 549,  1516 => 547,  1508 => 546,  1500 => 545,  1491 => 539,  1487 => 538,  1482 => 535,  1480 => 534,  1477 => 533,  1475 => 532,  1472 => 531,  1465 => 525,  1456 => 519,  1452 => 517,  1446 => 515,  1440 => 513,  1438 => 512,  1426 => 503,  1416 => 500,  1406 => 499,  1398 => 498,  1390 => 497,  1382 => 496,  1374 => 495,  1368 => 492,  1359 => 490,  1349 => 489,  1343 => 486,  1335 => 485,  1328 => 483,  1320 => 482,  1309 => 481,  1301 => 480,  1294 => 475,  1288 => 473,  1282 => 471,  1280 => 470,  1276 => 469,  1271 => 466,  1269 => 465,  1266 => 464,  1264 => 463,  1261 => 462,  1258 => 460,  1248 => 455,  1232 => 444,  1228 => 443,  1224 => 442,  1218 => 439,  1214 => 438,  1209 => 436,  1205 => 435,  1195 => 428,  1189 => 425,  1185 => 424,  1177 => 423,  1172 => 420,  1166 => 419,  1162 => 417,  1160 => 416,  1157 => 415,  1153 => 412,  1143 => 407,  1127 => 394,  1120 => 390,  1107 => 386,  1103 => 384,  1098 => 381,  1081 => 378,  1078 => 377,  1074 => 376,  1070 => 375,  1063 => 371,  1058 => 368,  1055 => 367,  1053 => 366,  1046 => 362,  1037 => 360,  1024 => 354,  1020 => 353,  1011 => 347,  1004 => 345,  996 => 344,  993 => 343,  987 => 342,  983 => 340,  981 => 339,  978 => 338,  974 => 335,  968 => 331,  956 => 324,  952 => 323,  947 => 321,  940 => 318,  938 => 317,  931 => 313,  928 => 312,  923 => 309,  908 => 306,  905 => 305,  901 => 304,  897 => 303,  890 => 299,  885 => 296,  882 => 295,  880 => 294,  869 => 290,  865 => 289,  854 => 283,  850 => 282,  844 => 281,  836 => 278,  828 => 277,  820 => 276,  811 => 271,  809 => 270,  806 => 269,  801 => 265,  795 => 261,  782 => 253,  773 => 251,  769 => 250,  763 => 247,  759 => 246,  754 => 244,  749 => 241,  747 => 240,  738 => 234,  730 => 229,  722 => 224,  718 => 222,  713 => 219,  696 => 216,  693 => 215,  689 => 214,  685 => 213,  678 => 209,  673 => 206,  670 => 205,  668 => 204,  661 => 200,  652 => 198,  640 => 193,  636 => 192,  625 => 186,  621 => 185,  615 => 184,  607 => 181,  599 => 180,  591 => 179,  584 => 174,  578 => 172,  572 => 170,  570 => 169,  566 => 168,  559 => 165,  557 => 164,  554 => 163,  551 => 161,  547 => 159,  532 => 157,  528 => 156,  523 => 154,  517 => 153,  508 => 152,  506 => 151,  503 => 150,  500 => 148,  495 => 145,  480 => 143,  476 => 142,  465 => 141,  461 => 139,  446 => 137,  442 => 136,  431 => 135,  429 => 134,  420 => 133,  418 => 132,  412 => 129,  408 => 127,  399 => 122,  397 => 121,  386 => 117,  381 => 115,  370 => 107,  358 => 104,  351 => 99,  349 => 98,  337 => 93,  324 => 91,  322 => 90,  319 => 89,  315 => 86,  306 => 83,  300 => 82,  294 => 81,  287 => 80,  282 => 76,  276 => 75,  270 => 72,  265 => 70,  262 => 69,  259 => 67,  255 => 65,  244 => 63,  234 => 61,  228 => 60,  225 => 59,  219 => 58,  216 => 57,  214 => 56,  208 => 53,  204 => 51,  193 => 49,  187 => 48,  183 => 47,  177 => 46,  174 => 45,  168 => 44,  165 => 43,  163 => 42,  160 => 41,  157 => 39,  153 => 37,  146 => 36,  142 => 35,  136 => 34,  132 => 33,  126 => 32,  123 => 31,  117 => 30,  114 => 29,  112 => 28,  109 => 27,  105 => 24,  94 => 21,  90 => 20,  80 => 19,  76 => 18,  64 => 17,  58 => 16,  51 => 15,  46 => 14,  44 => 13,  41 => 12,  37 => 9,  31 => 6,  28 => 5,  26 => 4,  479 => 220,  469 => 213,  464 => 211,  440 => 192,  436 => 191,  415 => 131,  403 => 124,  387 => 157,  368 => 140,  362 => 138,  352 => 136,  350 => 135,  343 => 131,  336 => 127,  329 => 92,  323 => 120,  313 => 112,  307 => 110,  297 => 108,  295 => 107,  288 => 103,  281 => 99,  274 => 95,  267 => 71,  252 => 88,  248 => 64,  242 => 86,  238 => 62,  233 => 82,  218 => 80,  213 => 79,  211 => 55,  205 => 77,  201 => 76,  197 => 50,  188 => 73,  184 => 72,  176 => 71,  171 => 70,  169 => 69,  166 => 68,  156 => 60,  154 => 59,  150 => 58,  143 => 57,  139 => 56,  131 => 54,  127 => 53,  121 => 50,  118 => 49,  116 => 48,  113 => 47,  103 => 39,  101 => 22,  97 => 37,  92 => 36,  88 => 35,  82 => 33,  78 => 32,  72 => 29,  69 => 28,  67 => 27,  61 => 24,  54 => 20,  50 => 18,  48 => 17,  45 => 16,  43 => 15,  38 => 12,  36 => 11,  29 => 7,  23 => 2,  21 => 2,  19 => 1,);
    }
}
