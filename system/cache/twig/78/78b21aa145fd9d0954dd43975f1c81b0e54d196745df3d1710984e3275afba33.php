<?php

/* buttons.edit.html.twig */
class __TwigTemplate_e178aad686216fd23f454234f00402c732dc455c806fd7c88085df7a19d99f30 extends Twig_Template
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
        $context["button_name"] = "Edit";
        // line 2
        $context["button_image"] = "_sbutton_edit";
        // line 3
        $this->loadTemplate("buttons.base.html.twig", "buttons.edit.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "buttons.edit.html.twig";
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
        return new Twig_Source("", "buttons.edit.html.twig", "/var/www/html/templates/tibiacom/buttons.edit.html.twig");
    }
}
