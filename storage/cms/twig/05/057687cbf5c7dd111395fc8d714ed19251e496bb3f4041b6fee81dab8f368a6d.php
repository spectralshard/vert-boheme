<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/mysimplecontact/default.htm */
class __TwigTemplate_897ed8984458341b2fe466ed63a51e166c85c3bafc8a080662e11deece601c80 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, false, 1), "text_top_form", [], "any", false, false, false, 1);
        echo "

<form id=\"simpleContactForm\" data-request=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onFormSubmit\">
    <div id=\"simple_contact_flash_message\"></div>
    <div class=\"row mt-5\">
        <div class=\"col-xs-12 col-sm-6\">
            <div class=\"form-group\">
                <label for=\"name\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 8), "nameLabel", [], "any", false, false, false, 8), "html", null, true);
        echo "</label>
                <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required >
            </div>
        </div>
        <div class=\"col-xs-12 col-sm-6\">
            <div class=\"form-group\">
                <label for=\"email\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 14), "emailLabel", [], "any", false, false, false, 14), "html", null, true);
        echo "</label>
                <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required >
            </div>
        </div>
    </div>
    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 19), "phoneEnabled", [], "any", false, false, false, 19)) {
            // line 20
            echo "    <div class=\"row\">
        <div class=\"col\">
            <div class=\"form-group\">
                <label for=\"phone\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 23), "phoneLabel", [], "any", false, false, false, 23), "html", null, true);
            echo "</label>
                <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" required>
            </div>
        </div>
    </div>
    ";
        }
        // line 29
        echo "    <div class=\"row\">
        <div class=\"col\">
            <div class=\"form-group\">
                <label for=\"subject\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 32), "subjectLabel", [], "any", false, false, false, 32), "html", null, true);
        echo "</label>
                <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\" required>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"form-group\">
                <label for=\"message\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 40), "messageLabel", [], "any", false, false, false, 40), "html", null, true);
        echo "</label>
                <textarea id=\"message\" name=\"message\" class=\"form-control\" style=\"height:150px;resize: none;\" required></textarea>
            </div>
        </div>
    </div>
    <!-- Injecting reCaptcha if enabled -->
    ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, false, 46), "recaptcha_enabled", [], "any", false, false, false, 46)) {
            // line 47
            echo "    <div class=\"row\">
        <div class=\"col\">
            <div class=\"form-group\">
                <label for=\"message\"></label>
                <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, false, 51), "recaptcha_site_key", [], "any", false, false, false, 51), "html", null, true);
            echo "\"></div>
            </div>
        </div>
    </div>
    ";
        }
        // line 56
        echo "    <!-- End reCaptcha -->
    <div class=\"row pt-3\">
        <div class=\"col\">
            <button id=\"simpleContactSubmitButton\"
                    type=\"submit\" class=\"btn btn-lg btn-primary text-white float-right\">
                ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 61), "buttonText", [], "any", false, false, false, 61), "html", null, true);
        echo "
            </button>
        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/mysimplecontact/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 61,  124 => 56,  116 => 51,  110 => 47,  108 => 46,  99 => 40,  88 => 32,  83 => 29,  74 => 23,  69 => 20,  67 => 19,  59 => 14,  50 => 8,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ __SELF__.settings.text_top_form|raw}}

<form id=\"simpleContactForm\" data-request=\"{{ __SELF__ }}::onFormSubmit\">
    <div id=\"simple_contact_flash_message\"></div>
    <div class=\"row mt-5\">
        <div class=\"col-xs-12 col-sm-6\">
            <div class=\"form-group\">
                <label for=\"name\">{{__SELF__.properties.nameLabel}}</label>
                <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required >
            </div>
        </div>
        <div class=\"col-xs-12 col-sm-6\">
            <div class=\"form-group\">
                <label for=\"email\">{{__SELF__.properties.emailLabel}}</label>
                <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required >
            </div>
        </div>
    </div>
    {% if(__SELF__.properties.phoneEnabled) %}
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"form-group\">
                <label for=\"phone\">{{__SELF__.properties.phoneLabel}}</label>
                <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" required>
            </div>
        </div>
    </div>
    {% endif %}
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"form-group\">
                <label for=\"subject\">{{__SELF__.properties.subjectLabel}}</label>
                <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\" required>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"form-group\">
                <label for=\"message\">{{__SELF__.properties.messageLabel}}</label>
                <textarea id=\"message\" name=\"message\" class=\"form-control\" style=\"height:150px;resize: none;\" required></textarea>
            </div>
        </div>
    </div>
    <!-- Injecting reCaptcha if enabled -->
    {% if(__SELF__.settings.recaptcha_enabled) %}
    <div class=\"row\">
        <div class=\"col\">
            <div class=\"form-group\">
                <label for=\"message\"></label>
                <div class=\"g-recaptcha\" data-sitekey=\"{{__SELF__.settings.recaptcha_site_key}}\"></div>
            </div>
        </div>
    </div>
    {% endif %}
    <!-- End reCaptcha -->
    <div class=\"row pt-3\">
        <div class=\"col\">
            <button id=\"simpleContactSubmitButton\"
                    type=\"submit\" class=\"btn btn-lg btn-primary text-white float-right\">
                {{__SELF__.properties.buttonText}}
            </button>
        </div>
    </div>
</form>", "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/mysimplecontact/default.htm", "");
    }
}
