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

/* /Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/home/about.htm */
class __TwigTemplate_86ec66a84dd8c0d4a3de68c4dcd13f13b35f1e2aec06d96107cac605d832a085 extends \Twig\Template
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
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-3 col-lg-4 pb-5\">
                <img class=\"img-fluid mx-auto d-block\"
                     src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/profil-picture.jpg");
        echo "\"
                     data-holder-rendered=\"true\">
        </div>
        <div class=\"col\">
            <h2 class=\"h2-responsive\">
                <span class=\"underline_text\">À propos de moi</span>
            </h2>
            <p>";
        // line 12
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("home/about"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</p>
            <a href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\" class=\"btn btn-outline-secondary\">En savoir plus!</a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/home/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  53 => 12,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-3 col-lg-4 pb-5\">
                <img class=\"img-fluid mx-auto d-block\"
                     src=\"{{ 'assets/images/profil-picture.jpg'|theme }}\"
                     data-holder-rendered=\"true\">
        </div>
        <div class=\"col\">
            <h2 class=\"h2-responsive\">
                <span class=\"underline_text\">À propos de moi</span>
            </h2>
            <p>{% content \"home/about\" %}</p>
            <a href=\"{{ 'about'|page }}\" class=\"btn btn-outline-secondary\">En savoir plus!</a>
        </div>
    </div>
</div>", "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/home/about.htm", "");
    }
}
