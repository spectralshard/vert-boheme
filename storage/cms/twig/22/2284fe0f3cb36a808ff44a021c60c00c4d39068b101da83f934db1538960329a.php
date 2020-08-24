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

/* /Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/pages/portfolio/article.htm */
class __TwigTemplate_bc9ebabe6c5c599c22ee0c8ae65a5114cc5a5d779c5288099ad6c06d7bd9cb70 extends \Twig\Template
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
        echo "<section class=\"paralax-mf\" style=\"background: #fff url(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 1), 0, [], "any", false, false, false, 1), "path", [], "any", false, false, false, 1), "html", null, true);
        echo ");background-repeat: no-repeat;background-attachment: fixed;background-size: cover;
-moz-background-size: cover;-webkit-background-size: cover;-o-background-size: cover;background-position: center center;\">
    <div class=\"overlay-dark-mf\"></div>
    <div class=\"container py-5 my-5\">
        <div class=\"row py-5 my-5\">
            <div class=\"col text-center\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 7));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "                <h6 class=\"h6-responsive text-white\"><em>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "</em></h6>
                ";
            // line 9
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 9)) {
                echo ", ";
            }
            // line 10
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "                <h1 class=\"h1-responsive text-white header-var2 mt-4\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
            </div>
        </div>
    </div>
</section>
<section id=\"blog\">
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-8\">
                ";
        // line 23
        if (($context["post"] ?? null)) {
            // line 24
            echo "                ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("article"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 25
            echo "                        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("share"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 26
            echo "                ";
        } else {
            // line 27
            echo "                <h2>Sujet introuvable</h2>
                ";
        }
        // line 29
        echo "                    </div>
                    <div class=\"col-xs-12 col-sm-4\">
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
            </div>
            </div>
        </div>
    </div>
</section>
<div id=\"fb-root\"></div>
<script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=297141914583105&autoLogAppEvents=1\"></script>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/pages/portfolio/article.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 29,  118 => 27,  115 => 26,  110 => 25,  105 => 24,  103 => 23,  87 => 11,  73 => 10,  69 => 9,  64 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/pages/portfolio/article.htm", "");
    }
}
