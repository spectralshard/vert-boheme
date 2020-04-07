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

/* /Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/myportfolio/default.htm */
class __TwigTemplate_5dc6b9e35cf14917d41e6d2b47a608e2b9e6b177894e8addc35891c49feba250 extends \Twig\Template
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
            echo "        <div class=\"grid col-sm-12 col-md-6 col-lg-4 col-xl-4\">
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
    ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "portfolio", [], "any", false, false, false, 19), "lastPage", [], "any", false, false, false, 19) > 1)) {
            // line 20
            echo "    <div class=\"row\">
        <div class=\"col py-5 d-flex justify-content-center\">
            <ul class=\"pagination\">
                ";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "portfolio", [], "any", false, false, false, 23), "currentPage", [], "any", false, false, false, 23) > 1)) {
                // line 24
                echo "                <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 24), "baseFileName", [], "any", false, false, false, 24), ["page" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "portfolio", [], "any", false, false, false, 24), "currentPage", [], "any", false, false, false, 24) - 1)]);
                echo "\">&larr; Précédent</a>&nbsp;</li>
                ";
            }
            // line 26
            echo "
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "portfolio", [], "any", false, false, false, 27), "lastPage", [], "any", false, false, false, 27)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 28
                echo "                <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "portfolio", [], "any", false, false, false, 28), "currentPage", [], "any", false, false, false, 28) == $context["page"])) ? ("active") : (null));
                echo "\">
                    <a href=\"";
                // line 29
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 29), "baseFileName", [], "any", false, false, false, 29), ["page" => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>&nbsp;
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
                ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "portfolio", [], "any", false, false, false, 33), "lastPage", [], "any", false, false, false, 33) > twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "portfolio", [], "any", false, false, false, 33), "currentPage", [], "any", false, false, false, 33))) {
                // line 34
                echo "                <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 34), "baseFileName", [], "any", false, false, false, 34), ["page" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "portfolio", [], "any", false, false, false, 34), "currentPage", [], "any", false, false, false, 34) + 1)]);
                echo "\">Suivant &rarr;</a></li>
                ";
            }
            // line 36
            echo "            </ul>
        </div>
    </div>
    ";
        }
        // line 40
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/myportfolio/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 40,  135 => 36,  129 => 34,  127 => 33,  124 => 32,  113 => 29,  108 => 28,  104 => 27,  101 => 26,  95 => 24,  93 => 23,  88 => 20,  86 => 19,  83 => 18,  70 => 13,  67 => 12,  59 => 9,  54 => 8,  51 => 7,  49 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/myportfolio/default.htm", "");
    }
}
