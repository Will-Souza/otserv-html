<?php

/* gallery.html.twig */
class __TwigTemplate_d81ddf093a2321a4f5003daa387ba9f0c65545eeb069a10af8e7b7a69c4e519a extends Twig_Template
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
        echo "<div id=\"GalleryBox\" class=\"Themebox\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/themeboxes/gallery/gallerybox.gif);\">
\t<a href=\"?subtopic=gallery&image=";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "gallery_image_id_from_database", array(), "array"), "html", null, true);
        echo "\" >
\t\t<img id=\"GalleryContent\" class=\"ThemeboxContent\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "thumb", array(), "array"), "html", null, true);
        echo "\" alt=\"Screenshot of the Day\" />
\t</a>
\t<div class=\"Bottom\" style=\"background-image:url(";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["template_path"]) ? $context["template_path"] : null), "html", null, true);
        echo "/images/general/box-bottom.gif);\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gallery.html.twig", "/var/www/html/templates/tibiacom/boxes/templates/gallery.html.twig");
    }
}
