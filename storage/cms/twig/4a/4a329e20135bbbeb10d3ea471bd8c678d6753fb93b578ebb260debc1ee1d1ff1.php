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

/* /Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/navbar.htm */
class __TwigTemplate_1425fbe590959153479569d86fbd4cda5aae480f57fe120d7549643a461c0b63 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-md navbar-light bg-light fixed-top\">
    <a class=\"navbar-brand mx-auto d-block d-md-none\" href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
        <img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/vert-boheme-logo.svg");
        echo "\"
             title=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "site_name", [], "any", false, false, false, 4), "html", null, true);
        echo "\"
             alt=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "site_motto", [], "any", false, false, false, 5), "html", null, true);
        echo "\"
             class=\"img-fluid\" style=\"width: 120px;\">
    </a>
    <div class=\"hamburger hamburger--spring d-flexmr-auto d-md-none float-right\"  data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
        <div class=\"hamburger-box\">
            <div class=\"hamburger-inner\"></div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"nav-item px-2\">
                    <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\"
                       title=\"À propos\">À propos</a>
                </li>
                <li class=\"nav-item px-2\">
                    <a class=\"nav-link\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("faq");
        echo "\"
                       title=\"FAQ\">FAQ</a>
                </li>
            </ul>
            <ul class=\"nav navbar-nav mx-auto d-none d-sm-none d-md-block\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                        <img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/vert-boheme-logo.svg");
        echo "\"
                             title=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 29), "site_name", [], "any", false, false, false, 29), "html", null, true);
        echo "\"
                             alt=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 30), "site_motto", [], "any", false, false, false, 30), "html", null, true);
        echo "\"
                             class=\"img-fluid\" style=\"width: 150px;\">
                    </a></li>
            </ul>
            <ul class=\"nav navbar-nav\">
                <li class=\"nav-item dropdown px-2\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" title=\"Mes créations\">
                        Créations
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"/portfolio/categorie/marriage\" title=\"Mariage\">Mariages</a>
                        <a class=\"dropdown-item\" href=\"/portfolio/categorie/creations-magiques\" title=\"Collabo\">Créations Magiques</a>
                        <a class=\"dropdown-item\" href=\"/portfolio/categorie/collabo\" title=\"Collabo\">Collabo</a>
                    </div>
                </li>
                <li class=\"nav-item px-2\">
                    <a class=\"nav-link smooth\" href=\"#contact\" title=\"Contact\">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 30,  91 => 29,  87 => 28,  83 => 27,  74 => 21,  67 => 17,  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/navbar.htm", "");
    }
}
