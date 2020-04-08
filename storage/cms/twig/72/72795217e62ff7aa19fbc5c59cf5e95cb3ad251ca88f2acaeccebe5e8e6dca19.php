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

/* /Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/item/default.htm */
class __TwigTemplate_acc35f8d60ef230aae6b644be9a983f3d7e2bfdfeb6f9db2cf09a4100badc3ff extends \Twig\Template
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
        $context["item"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "item", [], "any", false, false, false, 1);
        // line 2
        echo "<section class=\"paralax-mf bg-image-item\">
    <div class=\"overlay-dark-mf\"></div>
        <div class=\"container py-5 my-5\">
            <div class=\"row py-5 my-5\">
                <div class=\"col text-center\">
                    <h1 class=\"h1-responsive text-white header-var2\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
                </div>
            </div>
        </div>
</section>
<div class=\"container py-5\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-lg-8 pb-4\">
            <p>";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description", [], "any", false, false, false, 15);
        echo "</p>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "images", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 17
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"img-fluid py-3\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </div>
        <div class=\"col-xs-12 col-lg-4\">
            <div id=\"facebook-box\" class=\"my-3\">
                <div class=\"fb-page\" style=\"width:100%;max-width:290px\" data-href=\"https://www.facebook.com/Vert-Boh&#xe8;me-1089002674613879/\"
                     data-tabs=\"timeline\" data-width=\"\" data-height=\"\" data-small-header=\"false\"
                     data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\">
                    <blockquote cite=\"https://www.facebook.com/Vert-Boh&#xe8;me-1089002674613879/\"
                                class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/Vert-Boh&#xe8;me-1089002674613879/\">
                        Vert Bohème</a></blockquote>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/item/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  65 => 17,  61 => 16,  57 => 15,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/item/default.htm", "");
    }
}
