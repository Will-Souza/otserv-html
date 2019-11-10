<?php

/* admin.menus.form.html.twig */
class __TwigTemplate_92491148794fc1f1d8d1cb4d15b6f9680e6e850af749c5b7e4aab5f55a69e59e extends Twig_Template
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
        echo "<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header with-border\">
\t\t\t\t<h3 class=\"box-title\">Templates</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<form method=\"post\" action=\"?p=menus\">
\t\t\t\t\t<p>Please choose template in which you want to edit menu items.</p>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t<select id=\"template\" name=\"template\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 15
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "template", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "template", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
<button type=\"submit\" type=\"button\" class=\"btn btn-primary btn-flat\">Edit</button>
</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin.menus.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  38 => 15,  34 => 14,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.menus.form.html.twig", "/var/www/html/system/templates/admin.menus.form.html.twig");
    }
}
