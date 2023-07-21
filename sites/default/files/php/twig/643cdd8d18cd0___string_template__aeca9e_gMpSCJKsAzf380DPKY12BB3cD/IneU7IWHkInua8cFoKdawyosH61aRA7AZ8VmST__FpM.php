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

/* __string_template__aeca9e8102ed7e972d38e93d8c8c46a799d38c58fd9302cf870d1bd2a836ec45 */
class __TwigTemplate_f6fe08157a0f4eac3dfe421210271a745d199e6fad3da9eabe63b3de7832beb4 extends \Twig\Template
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
        echo "<div class=\"event-box\">
<div class=\"event-img\">";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_event_images"] ?? null), 2, $this->source), "html", null, true);
        echo "</div>
<div class=\"event-body\">
<div class=\"event-title\">";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 4, $this->source), "html", null, true);
        echo " </div>
<div class=\"event-disc\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 5, $this->source), "html", null, true);
        echo " </div>
<div class=\"event-footer\">
\t<div class=\"event-start-date\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_event_start"] ?? null), 7, $this->source), "html", null, true);
        echo " </div>
\t<div class=\"event-link\"><a href=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node"] ?? null), 8, $this->source), "html", null, true);
        echo "\">Know Details</a> </div>
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__aeca9e8102ed7e972d38e93d8c8c46a799d38c58fd9302cf870d1bd2a836ec45";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  56 => 7,  51 => 5,  47 => 4,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"event-box\">
<div class=\"event-img\">{{ field_event_images }}</div>
<div class=\"event-body\">
<div class=\"event-title\">{{ title }} </div>
<div class=\"event-disc\">{{ body }} </div>
<div class=\"event-footer\">
\t<div class=\"event-start-date\">{{ field_event_start }} </div>
\t<div class=\"event-link\"><a href=\"{{ view_node }}\">Know Details</a> </div>
</div>
</div>
</div>", "__string_template__aeca9e8102ed7e972d38e93d8c8c46a799d38c58fd9302cf870d1bd2a836ec45", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
