<?php

/* newcomer.html.twig */
class __TwigTemplate_a3f88c34db2e09c271d7e9ba55a77fa9588c618432e1b5e2e65f499ad0f019e4 extends Twig_Template
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
        echo "<div id=\"NewcomerBox\" class=\"Themebox\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/themeboxes/newcomer/newcomerbox.gif);\">
\t<a class=\"ThemeboxButton\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getLink')->getCallable(), array("account/create")), "html", null, true);
        echo "\" onMouseOver=\"MouseOverBigButton(this);\" onMouseOut=\"MouseOutBigButton(this);\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/buttons/sbutton.gif);\"><div class=\"BigButtonOver\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/buttons/sbutton_over.gif);\"></div><div class=\"ButtonText\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/global/buttons/_sbutton_jointibia.gif);\"></div>
\t</a>
\t<div class=\"Bottom\" style=\"background-image:url(";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/general/box-bottom.gif);\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "newcomer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newcomer.html.twig", "/var/www/html/templates/tibiacom/boxes/templates/newcomer.html.twig");
    }
}
