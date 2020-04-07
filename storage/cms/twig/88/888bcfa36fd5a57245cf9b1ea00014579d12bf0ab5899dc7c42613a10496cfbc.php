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

/* /Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/pages/about.htm */
class __TwigTemplate_06af0b95788064bc1535bf76f9f6be3c72b60536560071b7144168c653fe31b5 extends \Twig\Template
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
        echo "<section class=\"py-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-md-6 col-lg-4 pb-5\">
                <img class=\"img-fluid mx-auto d-block\"
                     src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/profil-picture.jpg");
        echo "\"
                     data-holder-rendered=\"true\"
                alt=\"Photo d'Amélie Cauchon-Simard\">
            </div>
            <div class=\"col\">
                <h2 class=\"h2-responsive\">
                    <span class=\"underline_text\">À propos de moi</span>
                </h2>
                <p>";
        // line 14
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("about"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</p>
            </div>
        </div>
    </div>
</section>
<div class=\"paralax-mf bg-image py-5 text-center\">
    <div class=\"overlay-mf\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h2 class=\"h2-responsive\">
                    <span class=\"underline_text\">Mes dernières créations</span>
                </h2>
            </div>
        </div>
        ";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/lastportfolio"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "            <div class=\"row py-3\">
                <div class=\"col text-center\">
                    <a href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("mes-projets");
        echo "\"
                       class=\"btn btn-secondary text-white\">Voir tous mes projets</a>
                </div>
            </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 32,  79 => 30,  75 => 29,  55 => 14,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/pages/about.htm", "");
    }
}
