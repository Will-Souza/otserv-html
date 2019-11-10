<?php

/* admin.mailer.html.twig */
class __TwigTemplate_2b117660e6cc5bfdfd2d098c6e44f9f070293e3a77fcc766746905273adb28a4 extends Twig_Template
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
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "tools/tinymce/tinymce.min.js\"></script>
<script type=\"text/javascript\">
\ttinymce.init({
\t\tselector: \"textarea\",
\t\ttheme: \"modern\",
\t\tplugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount spellchecker imagetools contextmenu colorpicker textpattern help code emoticons',
\t\ttoolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | emoticons link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat code',
\t\timage_advtab: true,
\t\trelative_urls: false,
\t\tremove_script_host: false,
\t\tdocument_base_url: \"";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "\"
\t});
</script>

<div class=\"row\">
\t<div class=\"col-md-8\">
\t\t<div class=\"box box-danger\">
\t\t\t<div class=\"box-header with-border\">
\t\t\t\t<h3 class=\"box-title\">Mailer</h3>
\t\t\t</div>
\t\t\t<form method=\"post\">
\t\t\t\t<div class=\"box-body\">
\t\t\t\t\t<div align=\"center\" class=\"row\"><p class=\"note note-image\" style=\"width: 80%;\">Sending mails may
\t\t\t\t\t\t\ttake some time if there are many users in db.</p></div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12 \">
\t\t\t\t\t\t\t\t<label for=\"mail_subject\" class=\"control-label\">Subject:</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"mail_subject\" name=\"mail_subject\"
\t\t\t\t\t\t\t\t\t   value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["mail_subject"]) ? $context["mail_subject"] : null), "html", null, true);
        echo "\" size=\"30\" maxlength=\"30\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<label for=\"mail_content\" class=\"control-label\">Content:</label>
\t\t\t\t\t<textarea id=\"mail_content\" name=\"mail_content\" style=\"width: 100%\"
\t\t\t\t\t\t\t  class=\"tinymce\">";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["mail_content"]) ? $context["mail_content"] : null), "html", null, true);
        echo "</textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"box-footer\">
\t\t\t\t\t<input type=\"checkbox\" name=\"preview\" id=\"preview\" value=\"1\"/><label for=\"preview\">Just send test
\t\t\t\t\t\temail to me (preview)</label>";
        // line 41
        if ((isset($context["preview_done"]) ? $context["preview_done"] : null)) {
            echo " - <b>Done.</b>";
        }
        echo "<br/>
\t\t\t\t\t<button type=\"submit\" name=\"submit\" value=\"Send\" class=\"btn btn-primary\">Send</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin.mailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 41,  65 => 37,  55 => 30,  33 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.mailer.html.twig", "/var/www/html/system/templates/admin.mailer.html.twig");
    }
}
