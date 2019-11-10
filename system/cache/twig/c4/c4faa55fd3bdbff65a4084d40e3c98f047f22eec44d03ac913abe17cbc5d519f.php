<?php

/* admin.pages.form.html.twig */
class __TwigTemplate_0aa7447a5ab278e962e1d1b2ca0a0b67cf1431f8b91d8ab97af3efe09261596e extends Twig_Template
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
        if ((isset($context["action"]) ? $context["action"] : null)) {
            // line 2
            echo "\t<div class=\"row\">
\t\t<form class=\"form-horizontal\" method=\"post\"
\t\t\t  action=\"?p=pages&action=";
            // line 4
            if (((isset($context["action"]) ? $context["action"] : null) == "edit")) {
                echo "edit";
            } else {
                echo "add";
            }
            echo "\">
\t\t\t";
            // line 5
            if (((isset($context["action"]) ? $context["action"] : null) == "edit")) {
                // line 6
                echo "\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\"/>
\t\t\t";
            }
            // line 8
            echo "\t\t\t<div class=\"col-md-8\" id=\"page-edit-table\">
\t\t\t\t<div class=\"box box-info\">
\t\t\t\t\t<div class=\"box-header with-border\">
\t\t\t\t\t\t<h3 class=\"box-title\">";
            // line 11
            if (((isset($context["action"]) ? $context["action"] : null) == "edit")) {
                echo "Edit";
            } else {
                echo "Add";
            }
            echo " page</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"name\" class=\"col-sm-2 control-label\">Link/name</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" autocomplete=\"off\"
\t\t\t\t\t\t\t\t\t   maxlength=\"29\"
\t\t\t\t\t\t\t\t\t   style=\"cursor: auto;\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"title\" class=\"col-sm-2 control-label\">Title</label>

\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" autocomplete=\"off\"
\t\t\t\t\t\t\t\t\t   maxlength=\"29\"
\t\t\t\t\t\t\t\t\t   style=\"cursor: auto;\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"php\" class=\"col-sm-2 control-label\">PHP</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"php\" name=\"php\"
\t\t\t\t\t\t\t\t\t   title=\"Check if page should be executed as PHP\"
\t\t\t\t\t\t\t\t\t   value=\"1\"";
            // line 36
            if ((isset($context["php"]) ? $context["php"] : null)) {
                echo " checked=\"true\"";
            }
            if (((isset($context["action"]) ? $context["action"] : null) == "edit")) {
                echo " disabled";
            }
            echo "/>
\t\t\t\t\t\t\t\t";
            // line 37
            if (((isset($context["action"]) ? $context["action"] : null) == "edit")) {
                // line 38
                echo "\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"php\" value=\"";
                if ((isset($context["php"]) ? $context["php"] : null)) {
                    echo "1";
                } else {
                    echo "0";
                }
                echo "\"/>
\t\t\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"body\" class=\"col-sm-2 control-label\">Content</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\" id=\"body-parent\">
                                <textarea class=\"form-control\" id=\"body\" name=\"body\" maxlength=\"65000\" cols=\"50\"
\t\t\t\t\t\t\t\t\t\t  rows=\"5\">";
            // line 46
            echo (isset($context["body"]) ? $context["body"] : null);
            echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"access\" class=\"col-sm-2 control-label\">Access</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"access\" name=\"access\">
\t\t\t\t\t\t\t\t\t";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
            foreach ($context['_seq'] as $context["id"] => $context["group"]) {
                // line 54
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getId", array(), "method"), "html", null, true);
                echo "\"";
                if (((isset($context["access"]) ? $context["access"] : null) == $this->getAttribute($context["group"], "getId", array(), "method"))) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-footer\">
\t\t\t\t\t\t<td align=\"right\"><input type=\"submit\" class=\"btn btn-info pull-right\" value=\"Save\"/></td>
\t\t\t\t\t\t<td align=\"left\">
\t\t\t\t\t\t\t<input type=\"button\" onclick=\"window.location = '";
            // line 63
            echo twig_escape_filter($this->env, twig_constant("ADMIN_URL"), "html", null, true);
            echo "?p=pages';\"
\t\t\t\t\t\t\t\t   class=\"btn btn-default\" value=\"Cancel\"/>
\t\t\t\t\t\t</td>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>

\t<script type=\"text/javascript\" src=\"";
            // line 72
            echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
            echo "tools/tinymce/tinymce.min.js\"></script>
\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\t\$('#php').on('change', function (e) {
\t\t\t\tif (this.checked) {
\t\t\t\t\ttinymce.remove('#body');
\t\t\t\t} else {
\t\t\t\t\tif (tinymce.editors.length > 0) {
\t\t\t\t\t\ttinymce.activeEditor.show();
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\tinit_tinymce();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\t";
            // line 88
            if ( !(isset($context["php"]) ? $context["php"] : null)) {
                // line 89
                echo "\t\t\tinit_tinymce();
\t\t\t";
            }
            // line 91
            echo "
\t\t\tfunction init_tinymce() {
\t\t\t\ttinymce.init({
\t\t\t\t\tselector: \"#body\",
\t\t\t\t\ttheme: \"modern\",
\t\t\t\t\tplugins: 'code print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount spellchecker imagetools contextmenu colorpicker textpattern help emoticons',
\t\t\t\t\ttoolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | emoticons link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat code',
\t\t\t\t\timage_advtab: true,
\t\t\t\t\trelative_urls: false,
\t\t\t\t\tremove_script_host: false,
\t\t\t\t\tdocument_base_url: \"";
            // line 101
            echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
            echo "\"
\t\t\t\t});
\t\t\t}

\t\t\tfunction decodeHtml(html) {
\t\t\t\tvar txt = document.createElement(\"textarea\");
\t\t\t\ttxt.innerHTML = html;
\t\t\t\treturn txt.value;
\t\t\t}
\t\t});
\t</script>  ";
        }
    }

    public function getTemplateName()
    {
        return "admin.pages.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 101,  188 => 91,  184 => 89,  182 => 88,  163 => 72,  151 => 63,  142 => 56,  127 => 54,  123 => 53,  113 => 46,  105 => 40,  95 => 38,  93 => 37,  84 => 36,  73 => 28,  61 => 19,  46 => 11,  41 => 8,  35 => 6,  33 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.pages.form.html.twig", "/var/www/html/system/templates/admin.pages.form.html.twig");
    }
}
