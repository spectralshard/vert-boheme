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

/* /Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/footer.htm */
class __TwigTemplate_9e788d130c15d51b73e63b9483a98c15767126d14ab0c695d27b16f9be108033 extends \Twig\Template
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
        echo "<section id=\"contact\" class=\"py-5 craftbg\">
    <div class=\"container\">
        <div class=\"row d-flex justify-content-center\">
            <div class=\"col-md-12 col-lg-8\">
                <h2 class=\"h2-responsive text-center\">
                    <span class=\"underline_text\">Contact</span>
                </h2>
                <p>";
        // line 8
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contactus-text"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</p>
               ";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("mysimpleContact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "            </div>
        </div>
    </div>
</section>
<footer>
    <section class=\"sub-footer craftbg py-3 text-center border-secondary border-top\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                Me suivre :
                <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 20), "facebook_url", [], "any", false, false, false, 20), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fab fa-facebook\"></i></a>
                <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 21), "instagram_url", [], "any", false, false, false, 21), "html", null, true);
        echo " \" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
            </div>
        </div>
    </div>
    </section>
    <section class=\"footer bg-secondary  py-3 text-white text-center\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    © Vert Bohème 2020
                </div>
            </div>
        </div>
    </section>
</footer>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 21,  68 => 20,  56 => 10,  52 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/footer.htm", "");
    }
}
