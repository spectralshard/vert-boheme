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
class __TwigTemplate_223d0c0b6bf7e861a198e09b4062780c599a03a1d9b0fb08dd9339218e1eb661 extends \Twig\Template
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
             class=\"img-fluid\" style=\"width: 150px;\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"container\">
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"nav navbar-nav\">
                <li class=\"nav-item px-2\">
                    <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Acceuil</a>
                </li>
                <li class=\"nav-item px-2\">
                    <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">À propos</a>
                </li>
            </ul>
            <ul class=\"nav navbar-nav mx-auto d-none d-sm-none d-md-block\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                        <img src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/vert-boheme-logo.svg");
        echo "\"
                             title=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 25), "site_name", [], "any", false, false, false, 25), "html", null, true);
        echo "\"
                             alt=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 26), "site_motto", [], "any", false, false, false, 26), "html", null, true);
        echo "\"
                             class=\"img-fluid\" style=\"width: 150px;\">
                    </a></li>
            </ul>
            <ul class=\"nav navbar-nav\">
                <li class=\"nav-item dropdown px-2\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Créations
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("mariages");
        echo "\">Mariages</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("collabo");
        echo "\">Collabo</a>
                    </div>
                </li>
                <li class=\"nav-item px-2\">
                    <a class=\"nav-link\" href=\"#contact\">Contact</a>
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
        return array (  109 => 38,  105 => 37,  91 => 26,  87 => 25,  83 => 24,  79 => 23,  71 => 18,  65 => 15,  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-light bg-light fixed-top\">
    <a class=\"navbar-brand mx-auto d-block d-md-none\" href=\"{{ 'home'|page }}\">
        <img src=\"{{ 'assets/images/vert-boheme-logo.svg'|theme }}\"
             title=\"{{ this.theme.site_name }}\"
             alt=\"{{ this.theme.site_motto }}\"
             class=\"img-fluid\" style=\"width: 150px;\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"container\">
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"nav navbar-nav\">
                <li class=\"nav-item px-2\">
                    <a class=\"nav-link\" href=\"{{ 'home'|page }}\">Acceuil</a>
                </li>
                <li class=\"nav-item px-2\">
                    <a class=\"nav-link\" href=\"{{ 'about'|page }}\">À propos</a>
                </li>
            </ul>
            <ul class=\"nav navbar-nav mx-auto d-none d-sm-none d-md-block\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ 'home'|page }}\">
                        <img src=\"{{ 'assets/images/vert-boheme-logo.svg'|theme }}\"
                             title=\"{{ this.theme.site_name }}\"
                             alt=\"{{ this.theme.site_motto }}\"
                             class=\"img-fluid\" style=\"width: 150px;\">
                    </a></li>
            </ul>
            <ul class=\"nav navbar-nav\">
                <li class=\"nav-item dropdown px-2\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\"
                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Créations
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"{{ 'mariages'|page }}\">Mariages</a>
                        <a class=\"dropdown-item\" href=\"{{ 'collabo'|page }}\">Collabo</a>
                    </div>
                </li>
                <li class=\"nav-item px-2\">
                    <a class=\"nav-link\" href=\"#contact\">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>", "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/navbar.htm", "");
    }
}
