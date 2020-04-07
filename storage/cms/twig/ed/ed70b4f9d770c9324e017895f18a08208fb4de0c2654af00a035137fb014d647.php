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

/* /Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/homeportfolio/default.htm */
class __TwigTemplate_cd7a561f1cf28f648026a7fa64e6f9a8c272e16264ae0869b7cb8ed7125a1e08 extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"row d-flex justify-content-center\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "portfolio", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "        <div class=\"grid col-xl-4 col-lg-4 col-sm-4 col-xs-12\">
            <figure class=\"effect-zoe\">
                ";
            // line 6
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "images", [], "any", false, false, false, 6)) > 0)) {
                // line 7
                echo "                ";
                $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "images", [], "any", false, false, false, 7), "first", [], "any", false, false, false, 7);
                // line 8
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "pageUrl", [], "any", false, false, false, 8), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "path", [], "any", false, false, false, 9), "html", null, true);
                echo "\" class=\"img-fluid\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "title", [], "any", false, false, false, 9), "html", null, true);
                echo "\">
                </a>
                ";
            }
            // line 12
            echo "                <figcaption>
                    <h4 class=\"h4-responsive\"><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "pageUrl", [], "any", false, false, false, 13), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 13), "html", null, true);
            echo "</a></h4>
                </figcaption>
            </figure>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/homeportfolio/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  70 => 13,  67 => 12,  59 => 9,  54 => 8,  51 => 7,  49 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row d-flex justify-content-center\">
        {% for item in __SELF__.portfolio %}
        <div class=\"grid col-xl-4 col-lg-4 col-sm-4 col-xs-12\">
            <figure class=\"effect-zoe\">
                {% if item.images|length > 0 %}
                {% set image = item.images.first %}
                <a href=\"{{ item.pageUrl }}\">
                    <img src=\"{{ image.path }}\" class=\"img-fluid\" alt=\"{{ image.title }}\">
                </a>
                {% endif %}
                <figcaption>
                    <h4 class=\"h4-responsive\"><a href=\"{{ item.pageUrl }}\">{{ item.title }}</a></h4>
                </figcaption>
            </figure>
        </div>
        {% endfor %}
    </div>
</div>", "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/homeportfolio/default.htm", "");
    }
}
