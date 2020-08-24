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

/* /Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/home-slider/default.htm */
class __TwigTemplate_1017217c84f6f85ad5a0f7bb176815ebc7bf113aebaccc7478b878dce8d96cf4 extends \Twig\Template
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
        if (($context["slides"] ?? null)) {
            // line 2
            echo "<!-- Start Hero Area -->
<section class=\"section hero-area\">
    <div class=\"hero-slider owl-carousel owl-controls-1\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slides"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 6
                echo "            <div class=\"hero-slider-item slider-bg-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "image_align", [], "any", false, false, false, 6), "html", null, true);
                echo "\"
                 data-bg-img=\"";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slide"], "image", [], "any", false, false, false, 7), "thumb", [0 => 1920, 1 => 900, 2 => ["mode" => "crop"]], "method", false, false, false, 7), "html", null, true);
                echo "\">
                    <div class=\"hero-overlay-wrapper\">
                        <div class=\"pos-tb-center hero-overlay-inner\">
                            <div class=\"container\">
                                <div class=\"row row-tb-20\">
                                    <div class=\"col-md-12";
                // line 12
                if ((twig_get_attribute($this->env, $this->source, $context["slide"], "text_align", [], "any", false, false, false, 12) == "center")) {
                    echo " text-center";
                }
                echo "\">
                                        ";
                // line 13
                if (twig_get_attribute($this->env, $this->source, $context["slide"], "subtitle", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "                                        <h2 style=\"font-family: 'Kimberlly Regular'; font-size: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "subtitle_size", [], "any", false, false, false, 14), "html", null, true);
                    echo "px !important;";
                    if (twig_get_attribute($this->env, $this->source, $context["slide"], "subtitle_color", [], "any", false, false, false, 14)) {
                        echo " color: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "subtitle_color", [], "any", false, false, false, 14), "html", null, true);
                        echo " !important; ";
                    }
                    echo "\"
                                            class=\"mb-10\">";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "subtitle", [], "any", false, false, false, 15), "html", null, true);
                    echo "</h2>";
                }
                // line 16
                echo "                                        <h1 style=\"font-family: 'Kimberlly Regular'; font-size: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "title_size", [], "any", false, false, false, 16), "html", null, true);
                echo "px !important;";
                if (twig_get_attribute($this->env, $this->source, $context["slide"], "title_color", [], "any", false, false, false, 16)) {
                    echo " color: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "title_color", [], "any", false, false, false, 16), "html", null, true);
                    echo " !important; ";
                }
                echo "\"
                                            class=\"t-uppercase mb-20\">";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 17), "html", null, true);
                echo "</h1>
                                        ";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["slide"], "description", [], "any", false, false, false, 18)) {
                    echo "<p";
                    if (twig_get_attribute($this->env, $this->source, $context["slide"], "description_color", [], "any", false, false, false, 18)) {
                        echo " style=\"color: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "description_color", [], "any", false, false, false, 18), "html", null, true);
                        echo " !important;\"";
                    }
                    echo " class=\"mb-30 color-lighter h4\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "description", [], "any", false, false, false, 18), "html", null, true);
                    echo "</p>";
                }
                // line 19
                echo "                                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["slide"], "button_1_active", [], "any", false, false, false, 19) && twig_get_attribute($this->env, $this->source, $context["slide"], "button_1_text", [], "any", false, false, false, 19)) && twig_get_attribute($this->env, $this->source, $context["slide"], "button_1_url", [], "any", false, false, false, 19))) {
                    // line 20
                    echo "                                        <a ";
                    if (twig_get_attribute($this->env, $this->source, $context["slide"], "button_1_color", [], "any", false, false, false, 20)) {
                        echo "style=\"background-color:";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "button_1_color", [], "any", false, false, false, 20), "html", null, true);
                        echo "; border-color:";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "button_1_color", [], "any", false, false, false, 20), "html", null, true);
                        echo "; color:#000!important;\" ";
                    }
                    echo "href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "button_1_url", [], "any", false, false, false, 20), "html", null, true);
                    echo "\"
                                           class=\"btn btn-rounded btn-wt btn-lg mr-10 mb-20 mt-3 smooth\">";
                    // line 21
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "button_1_text", [], "any", false, false, false, 21), "html", null, true);
                    echo "</a>
                                        ";
                }
                // line 23
                echo "                                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["slide"], "button_2_active", [], "any", false, false, false, 23) && twig_get_attribute($this->env, $this->source, $context["slide"], "button_2_text", [], "any", false, false, false, 23)) && twig_get_attribute($this->env, $this->source, $context["slide"], "button_2_url", [], "any", false, false, false, 23))) {
                    // line 24
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "button_2_url", [], "any", false, false, false, 24), "html", null, true);
                    echo "\" class=\"btn btn-rev btn-rounded btn-o btn-lg mb-20 smooth\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "button_2_text", [], "any", false, false, false, 24), "html", null, true);
                    echo "</a>
                                        ";
                }
                // line 26
                echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    </div>
</section>
<!-- End Hero Area -->
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/home-slider/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 33,  143 => 26,  135 => 24,  132 => 23,  127 => 21,  114 => 20,  111 => 19,  99 => 18,  95 => 17,  84 => 16,  80 => 15,  69 => 14,  67 => 13,  61 => 12,  53 => 7,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/partials/home-slider/default.htm", "");
    }
}
