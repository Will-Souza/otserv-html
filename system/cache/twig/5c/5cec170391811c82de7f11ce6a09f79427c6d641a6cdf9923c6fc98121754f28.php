<?php

/* buttons.change_password.html.twig */
class __TwigTemplate_f90785791896021e3896c90fb896cea8caa29305ccd6cddb88aac5132a3f7265 extends Twig_Template
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
        $context["button_name"] = "Change Password";
        // line 2
        $context["button_image"] = "_sbutton_changepassword";
        // line 3
        $this->loadTemplate("buttons.base.html.twig", "buttons.change_password.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "buttons.change_password.html.twig";
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
        return new Twig_Source("", "buttons.change_password.html.twig", "/var/www/html/templates/tibiacom/buttons.change_password.html.twig");
    }
}
