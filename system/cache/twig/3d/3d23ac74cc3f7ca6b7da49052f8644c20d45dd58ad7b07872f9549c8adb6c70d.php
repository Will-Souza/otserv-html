<?php

/* news.back_button.html.twig */
class __TwigTemplate_54a1b1ca8cbc24c414b0fbeee3a8e111dbc0a463ed45e4e22e3ba7ba6c41bada extends Twig_Template
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
        echo "<div style=\"text-align:center\">
\t<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
\t\t<form method=\"post\" action=\"";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("news/archive")), "html", null, true);
        echo "\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input width=\"120\" height=\"18\" border=\"0\" type=\"image\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/buttons/sbutton_back.gif\" alt=\"Back\" name=\"Back\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</form>
\t</table>
</div>";
    }

    public function getTemplateName()
    {
        return "news.back_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "news.back_button.html.twig", "/var/www/html/system/templates/news.back_button.html.twig");
    }
}
