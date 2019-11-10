<?php

/* buttons.login.html.twig */
class __TwigTemplate_609416f9ce9b31c291e9b38adad1fc60199247abd9a92035d2bf220ddb53d1e4 extends Twig_Template
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
        $context["button_name"] = "Login";
        // line 2
        $context["button_image"] = "_sbutton_login";
        // line 3
        $this->loadTemplate("buttons.base.html.twig", "buttons.login.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "buttons.login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "buttons.login.html.twig", "/var/www/html/templates/tibiacom/buttons.login.html.twig");
    }
}
