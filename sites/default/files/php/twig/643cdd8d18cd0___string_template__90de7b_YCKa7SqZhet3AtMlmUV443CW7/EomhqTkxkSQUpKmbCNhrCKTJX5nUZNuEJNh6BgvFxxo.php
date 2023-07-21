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

/* __string_template__90de7b8871b25f9abf89ecbcef55b7cf12867bcfe191f1c0b18c751fb90182bf */
class __TwigTemplate_5fb4bae6ec4ec00a49666e6387ebbd1eb390626a022086569cf008dd343501b7 extends \Twig\Template
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
        echo "<div class=\"calender-event-list\">
\t<div class=\"c-date-event\">";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_event_start"] ?? null), 2, $this->source), "html", null, true);
        echo "</div>
\t<div class=\"c-event-dicrb\">
\t\t<div class=\"title-event-c\">";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 4, $this->source), "html", null, true);
        echo "</div>
\t\t<div class=\"d-flex-c-event\">
\t\t\t<div class=\"title-event-timing\">10AM 11AM</div>
\t\t<div class=\"title-event-hall\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_event_venue"] ?? null), 7, $this->source), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"more-c-event\">";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node"] ?? null), 9, $this->source), "html", null, true);
        echo "</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__90de7b8871b25f9abf89ecbcef55b7cf12867bcfe191f1c0b18c751fb90182bf";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  53 => 7,  47 => 4,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"calender-event-list\">
\t<div class=\"c-date-event\">{{ field_event_start }}</div>
\t<div class=\"c-event-dicrb\">
\t\t<div class=\"title-event-c\">{{ title }}</div>
\t\t<div class=\"d-flex-c-event\">
\t\t\t<div class=\"title-event-timing\">10AM 11AM</div>
\t\t<div class=\"title-event-hall\">{{ field_event_venue }}</div>
\t\t</div>
\t\t<div class=\"more-c-event\">{{ view_node }}</div>
\t</div>
</div>", "__string_template__90de7b8871b25f9abf89ecbcef55b7cf12867bcfe191f1c0b18c751fb90182bf", "");
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
