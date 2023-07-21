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

/* __string_template__b8f2ec8cd650208726fed8b7434c55fa2589878dedc534e832866c591670d4aa */
class __TwigTemplate_fce1627994962d3b1d11fa18e2a72c32250306718c7b8a92a4719915ed1ff805 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["date_time"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["changed"] ?? null), 1, $this->source), " ");
        // line 2
        echo "<div class=\"footer_updated\">
<h4>Last Updated on :</h4>

<p class=\"date\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["date_time"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 5, $this->source), "html", null, true);
        echo "</p>

<p class=\"time\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["date_time"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), 7, $this->source), "html", null, true);
        echo "</p>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__b8f2ec8cd650208726fed8b7434c55fa2589878dedc534e832866c591670d4aa";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  46 => 5,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}{% set date_time = changed|split(' ') %}
<div class=\"footer_updated\">
<h4>Last Updated on :</h4>

<p class=\"date\">{{ date_time[0] }}</p>

<p class=\"time\">{{ date_time[1] }}</p>
</div>", "__string_template__b8f2ec8cd650208726fed8b7434c55fa2589878dedc534e832866c591670d4aa", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1);
        static $filters = array("split" => 1, "escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['split', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
