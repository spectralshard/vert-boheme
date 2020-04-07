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
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "images", [], "any", false, false, false, 2)) > 0)) {
            // line 3
            $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "images", [], "any", false, false, false, 3), "first", [], "any", false, false, false, 3);
            // line 4
            echo "<script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=297141914583105&autoLogAppEvents=1\"></script>
<section class=\"paralax-mf\"
         style=\"background: url('";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "path", [], "any", false, false, false, 6), "html", null, true);
            echo "');
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-size: cover;
         background-position: center center;\">
    <div class=\"overlay-dark-mf\"></div>
        <div class=\"container py-5 my-5\">
            <div class=\"row py-5 my-5\">
                <div class=\"col text-center\">
                    <h1 class=\"h1-responsive text-white header-var2\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 15), "html", null, true);
            echo "</h1>
                </div>
            </div>
        </div>
</section>
";
        }
        // line 21
        echo "<div class=\"container py-5\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-lg-8 pb-4\">
            <p>";
        // line 24
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description", [], "any", false, false, false, 24);
        echo "</p>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "images", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 26
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 26), "html", null, true);
            echo "\" class=\"img-fluid py-3\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>
        <div class=\"col-xs-12 col-lg-4\">
            <div class=\"card text-white bg-primary mb-4\">
                <div class=\"card-body\">
                    <p class=\"card-text\">
                        Catégorie : ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
        echo "
                    </p>
                    <p class=\"card-text\">
                       Date : ";
        // line 36
        echo call_user_func_array($this->env->getFilter('strftime')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "created_at", [], "any", false, false, false, 36), "%d %B %Y"]);
        echo "
                    </p>
                    ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, false, 38)) {
            // line 39
            echo "                    <p class=\"card-text\">
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, false, 40), "html", null, true);
            echo "\" class=\"btn btn-default\" target=\"_blank\">Voir le projet</a>
                    </p>
                    ";
        }
        // line 43
        echo "                    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("share"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 44
        echo "                </div>
            </div>
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
        return array (  126 => 44,  121 => 43,  115 => 40,  112 => 39,  110 => 38,  105 => 36,  99 => 33,  92 => 28,  81 => 26,  77 => 25,  73 => 24,  68 => 21,  59 => 15,  47 => 6,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/item/default.htm", "");
    }
}
