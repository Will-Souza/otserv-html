<?php

/* buttons.base.html.twig */
class __TwigTemplate_a119b17f4f552a41926d44120c6cb561e2c8d2f35ba7a04196b4dc7e2b35df80 extends Twig_Template
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
        echo "<input type=\"submit\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["button_name"]) ? $context["button_name"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["button_name"]) ? $context["button_name"] : null), "html", null, true);
        echo "\" />";
    }

    public function getTemplateName()
    {
        return "buttons.base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "buttons.base.html.twig", "/var/www/html/system/templates/buttons.base.html.twig");
    }
}
