<?php

/* buttons.change_email.html.twig */
class __TwigTemplate_ba97a17dd08b958899fa272c11335c86d5905fbb66cc87a4f27416f1ceebb8d3 extends Twig_Template
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
        $context["button_name"] = "Change Email";
        // line 2
        $context["button_image"] = "_sbutton_changeemail";
        // line 3
        $this->loadTemplate("buttons.base.html.twig", "buttons.change_email.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "buttons.change_email.html.twig";
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
        return new Twig_Source("", "buttons.change_email.html.twig", "/var/www/html/templates/tibiacom/buttons.change_email.html.twig");
    }
}
