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

/* /Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/layouts/default.htm */
class __TwigTemplate_51204034bf8321e0e7773bdd729045d3b9c8bbc41b20694fc9a82ac4a932ad31 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_title", [], "any", false, false, false, 6), "html", null, true);
        echo " | Vert Bohème</title>
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_description", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_title", [], "any", false, false, false, 8), "html", null, true);
        echo " | Techno24\">
    <meta name=\"author\" content=\"Vert Bohème\">
    <meta name=\"robots\" content=\"index,follow\">
    <link rel=\"canonical\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\"/>
    <meta property=\"og:title\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 12), "meta_title", [], "any", false, false, false, 12), "html", null, true);
        echo " | Techno24\" />
    <meta property=\"og:url\" content=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\" />
    <meta property=\"og:image\" content=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dafault-share-img.jpg");
        echo "\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:description\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 16), "settings", [], "any", false, false, false, 16), "meta_description", [], "any", false, false, false, 16), "html", null, true);
        echo "\" />
    <meta property=\"og:locale\" content=\"fr_CA\">
    <meta property=\"og:site_name\" content=\"Vert Bohème\" />
    <meta name=\"twitter:title\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 19), "meta_title", [], "any", false, false, false, 19), "html", null, true);
        echo " | Vert Bohème\">
    <meta name=\"twitter:description\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 20), "settings", [], "any", false, false, false, 20), "meta_description", [], "any", false, false, false, 20), "html", null, true);
        echo "\">
    <meta name=\"twitter:image\" content=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dafault-share-img.jpg");
        echo "\">
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"icon\" type=\"image/jpg\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\"/>
    <link href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-touch-icon.png");
        echo "\" rel=\"apple-touch-icon\">
    <link href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-touch-icon-precomposed.png");
        echo "\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/theme.css", 1 => "assets/vendor/animate.css/animate.min.css"]);
        // line 30
        echo "\" rel=\"stylesheet\">
    ";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 32
        echo "</head>
<body>
<header>
    ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "</header>
<main role=\"main\" id=\"page\">
    ";
        // line 38
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 39
        echo "</main>
<footer>
    ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "</footer>
";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 43
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 44
                echo "<span id=\"flash\" data-type=\"";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\" data-message=\"";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "\"></span>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 46
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/jquery/jquery-3.4.1.min.js", 1 => "assets/vendor/popper/popper.js", 2 => "assets/vendor/tether/dist/js/tether.min.js", 3 => "assets/vendor/bootstrap/js/bootstrap.min.js"]);
        // line 51
        echo "\"></script>
";
        // line 52
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 53
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 54
        echo "</body>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 54,  170 => 53,  159 => 52,  156 => 51,  153 => 46,  144 => 44,  141 => 43,  138 => 42,  134 => 41,  130 => 39,  128 => 38,  124 => 36,  120 => 35,  115 => 32,  112 => 31,  109 => 30,  107 => 27,  103 => 26,  99 => 25,  95 => 24,  89 => 21,  85 => 20,  81 => 19,  75 => 16,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{{ this.page.meta_title }} | Vert Bohème</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }} | Techno24\">
    <meta name=\"author\" content=\"Vert Bohème\">
    <meta name=\"robots\" content=\"index,follow\">
    <link rel=\"canonical\" href=\"{{ ''|page }}\"/>
    <meta property=\"og:title\" content=\"{{ this.page.meta_title }} | Techno24\" />
    <meta property=\"og:url\" content=\"{{ ''|page }}\" />
    <meta property=\"og:image\" content=\"{{'assets/images/dafault-share-img.jpg'|theme}}\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:description\" content=\"{{ this.page.settings.meta_description }}\" />
    <meta property=\"og:locale\" content=\"fr_CA\">
    <meta property=\"og:site_name\" content=\"Vert Bohème\" />
    <meta name=\"twitter:title\" content=\"{{ this.page.meta_title }} | Vert Bohème\">
    <meta name=\"twitter:description\" content=\"{{ this.page.settings.meta_description }}\">
    <meta name=\"twitter:image\" content=\"{{'assets/images/dafault-share-img.jpg'|theme}}\">
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"icon\" type=\"image/jpg\" href=\"{{ 'assets/images/favicon.png'|theme }}\"/>
    <link href=\"{{ 'assets/images/apple-touch-icon.png'|theme }}\" rel=\"apple-touch-icon\">
    <link href=\"{{ 'assets/images/apple-touch-icon-precomposed.png'|theme }}\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"{{ [
    'assets/css/theme.css',
    'assets/vendor/animate.css/animate.min.css',
    ]|theme }}\" rel=\"stylesheet\">
    {% styles %}
</head>
<body>
<header>
    {% partial 'navbar' %}
</header>
<main role=\"main\" id=\"page\">
    {% page %}
</main>
<footer>
    {% partial 'footer' %}
</footer>
{% flash %}
<span id=\"flash\" data-type=\"{{ type }}\" data-message=\"{{ message }}\"></span>
{% endflash %}
<script src=\"{{ [
'assets/vendor/jquery/jquery-3.4.1.min.js',
'assets/vendor/popper/popper.js',
'assets/vendor/tether/dist/js/tether.min.js',
'assets/vendor/bootstrap/js/bootstrap.min.js',
]|theme }}\"></script>
{% framework extras %}
{% scripts %}
</body>", "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/layouts/default.htm", "");
    }
}
