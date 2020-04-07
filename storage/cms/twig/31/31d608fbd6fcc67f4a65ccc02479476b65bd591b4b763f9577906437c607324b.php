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

/* /Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/layouts/pf-template.htm */
class __TwigTemplate_6283931d1cc7ac9b5b9572ca96d223ab9d67d8aecd244373069e4173876ce605 extends \Twig\Template
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
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"author\" content=\"Vert Bohème\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "html", null, true);
        echo " | Vert Bohème\"</title>
    <meta name=\"title\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "html", null, true);
        echo " | Vert Bohème\">
    <meta name=\"description\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "summary", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
    <meta name=\"robots\" content=\"index,follow\">
    <link rel=\"canonical\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\"/>
    ";
        // line 13
        if (($context["image_url"] ?? null)) {
            // line 14
            echo "    <meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, ($context["image_url"] ?? null), "html", null, true);
            echo "\" />
    <meta name=\"twitter:image\" content=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["image_url"] ?? null), "html", null, true);
            echo "\">
    ";
        } else {
            // line 17
            echo "    <meta property=\"og:image\" content=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dafault-share-img.jpg");
            echo "\" />
    <meta name=\"twitter:image\" content=\"";
            // line 18
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/dafault-share-img.jpg");
            echo "\">
    ";
        }
        // line 20
        echo "    <meta property=\"og:title\" content=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 20), "title", [], "any", false, false, false, 20), "html", null, true);
        echo " | Vert Bohème\" />
    <meta property=\"og:url\" content=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\" />
    <meta property=\"og:description\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "summary", [], "any", false, false, false, 22), "html", null, true);
        echo "\" />
    <meta property=\"og:image\" content=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["image_url"] ?? null), "html", null, true);
        echo "\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:locale\" content=\"fr_CA\">
    <meta property=\"og:site_name\" content=\"Vert Bohème\" />
    <meta name=\"twitter:title\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 27), "title", [], "any", false, false, false, 27), "html", null, true);
        echo "| Vert Bohème\">
    <meta name=\"twitter:description\" content=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 28), "settings", [], "any", false, false, false, 28), "meta_description", [], "any", false, false, false, 28), "html", null, true);
        echo "\">
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <link rel=\"icon\" type=\"image/jpg\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\"/>
    <link href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-touch-icon.png");
        echo "\" rel=\"apple-touch-icon\">
    <link href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-touch-icon-precomposed.png");
        echo "\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/theme.css", 1 => "assets/vendor/animate.css/animate.min.css"]);
        // line 36
        echo "\" rel=\"stylesheet\">
    ";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 38
        echo "</head>
<body>
<header>
    ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "</header>
<main role=\"main\" id=\"page\">
    ";
        // line 44
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 45
        echo "</main>
<footer>
    ";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "</footer>
";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 49
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 50
                echo "<span id=\"flash\" data-type=\"";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\" data-message=\"";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "\"></span>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 52
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/jquery/jquery-3.4.1.min.js", 1 => "assets/vendor/tether/dist/js/tether.min.js", 2 => "assets/vendor/bootstrap/js/bootstrap.min.js", 3 => "assets/js/main.js"]);
        // line 57
        echo "\"></script>
";
        // line 58
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
        // line 59
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 60
        echo "</body>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/layouts/pf-template.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 60,  189 => 59,  178 => 58,  175 => 57,  172 => 52,  163 => 50,  160 => 49,  157 => 48,  153 => 47,  149 => 45,  147 => 44,  143 => 42,  139 => 41,  134 => 38,  131 => 37,  128 => 36,  126 => 33,  122 => 32,  118 => 31,  114 => 30,  109 => 28,  105 => 27,  98 => 23,  94 => 22,  90 => 21,  85 => 20,  80 => 18,  75 => 17,  70 => 15,  65 => 14,  63 => 13,  59 => 12,  54 => 10,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/Users/alexandrefoisy/web sites/vert-boheme/themes/vert-boheme/layouts/pf-template.htm", "");
    }
}
