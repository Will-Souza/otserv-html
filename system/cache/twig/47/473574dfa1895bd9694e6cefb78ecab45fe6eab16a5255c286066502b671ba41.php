<?php

/* online.form.html.twig */
class __TwigTemplate_f2d8bc2e6d5132b0a2e4c622be01aee4e7cb9a558a23c7f8dc8487a58fec505c extends Twig_Template
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
        echo "<br/>
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("characters")), "html", null, true);
        echo "\" method=post>
\t<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\">
\t\t<tr>
\t\t\t<td bgcolor=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "vdarkborder", array()), "html", null, true);
        echo "\" class=\"white\">
\t\t\t\t<b>Search Character</b>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td bgcolor=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "darkborder", array()), "html", null, true);
        echo "\">
\t\t\t\t<table border=\"0\" cellpadding=\"1\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Name:</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input name=\"name\" value=\"\"size=29 maxlength=29>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 18
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>";
    }

    public function getTemplateName()
    {
        return "online.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 18,  36 => 10,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "online.form.html.twig", "/var/www/html/system/templates/online.form.html.twig");
    }
}
