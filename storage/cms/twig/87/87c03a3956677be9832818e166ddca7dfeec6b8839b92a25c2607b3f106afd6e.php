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

/* /Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/pages/home.htm */
class __TwigTemplate_f64061e23c8b7109eed01c78c20bc5f8b1124da71fe00d35e9b1bf9704e8d271 extends \Twig\Template
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
        echo "<section class=\"py-2 text-center\">
        ";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("home-slider"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "</section>
<section class=\"py-5 text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"h2-responsive\">
                    <span class=\"underline_text\">Mes dernières créations</span>
                </h2>
            </div>
        </div>
        ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/lastportfolio"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "        <div class=\"row py-3\">
            <div class=\"col text-center\">
                <a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("mes-projets");
        echo "\"
                   class=\"btn btn-primary text-white\">Voir tous mes projets</a>
            </div>
        </div>
    </div>
</section>
<div class=\"paralax-mf bg-image py-5\">
    <div class=\"overlay-mf\"></div>
        ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  75 => 24,  64 => 16,  60 => 14,  56 => 13,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"py-2 text-center\">
        {% component 'home-slider' %}
</section>
<section class=\"py-5 text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"h2-responsive\">
                    <span class=\"underline_text\">Mes dernières créations</span>
                </h2>
            </div>
        </div>
        {% partial 'home/lastportfolio' %}
        <div class=\"row py-3\">
            <div class=\"col text-center\">
                <a href=\"{{ 'mes-projets'|page }}\"
                   class=\"btn btn-primary text-white\">Voir tous mes projets</a>
            </div>
        </div>
    </div>
</section>
<div class=\"paralax-mf bg-image py-5\">
    <div class=\"overlay-mf\"></div>
        {% partial 'home/about' %}
</div>", "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/pages/home.htm", "");
    }
}
