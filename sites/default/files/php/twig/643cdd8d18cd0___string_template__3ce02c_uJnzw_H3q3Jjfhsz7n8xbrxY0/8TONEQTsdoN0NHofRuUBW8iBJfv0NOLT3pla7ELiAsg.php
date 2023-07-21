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

/* __string_template__3ce02cb065d96ce4be9554f6a58c10e5fecf9d8dcbfc0db83cb00073a4ce1489 */
class __TwigTemplate_7edadca5a49a2aa97615422c9cc5e438ac5af8ac854603df17fd385982be1193 extends \Twig\Template
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
        echo "<a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_upload_document_file"] ?? null), 1, $this->source), "html", null, true);
        echo " \" target=\"blank\">View ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_document_type"] ?? null), 1, $this->source), "html", null, true);
        echo " </a>(<strong>Format</strong>: ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["extension"] ?? null), 1, $this->source)), "html", null, true);
        echo " , <strong>Size</strong>:";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["filesize"] ?? null), 1, $this->source), "html", null, true);
        echo " , <strong>Language</strong>: ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_document_language"] ?? null), 1, $this->source), "html", null, true);
        echo " )";
    }

    public function getTemplateName()
    {
        return "__string_template__3ce02cb065d96ce4be9554f6a58c10e5fecf9d8dcbfc0db83cb00073a4ce1489";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<a href=\"{{ field_upload_document_file }} \" target=\"blank\">View {{ field_document_type }} </a>(<strong>Format</strong>: {{ extension | upper }} , <strong>Size</strong>:{{ filesize }} , <strong>Language</strong>: {{ field_document_language }} )", "__string_template__3ce02cb065d96ce4be9554f6a58c10e5fecf9d8dcbfc0db83cb00073a4ce1489", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1, "upper" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'upper'],
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
