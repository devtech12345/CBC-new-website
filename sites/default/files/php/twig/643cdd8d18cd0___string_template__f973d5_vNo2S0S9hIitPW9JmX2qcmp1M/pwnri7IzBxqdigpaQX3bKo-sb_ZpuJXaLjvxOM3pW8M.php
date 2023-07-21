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

/* __string_template__f973d54fc89c91c092afee5acf4030c2aa391505effbcd73f75654e3297a7933 */
class __TwigTemplate_2a7de4628798e4ee6a4020d551052474fe2794067a8e2c6452e63ed2818a2a7b extends \Twig\Template
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
        echo "<div class=\"card mb-3\" style=\"\">
  <div class=\"row g-0\">
    <div class=\"col-md-4 img-style1\">
      ";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image"] ?? null), 4, $this->source), "html", null, true);
        echo "
    </div>
    <div class=\"col-md-8\">
      <div class=\"card-body\">
      <h4>";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_designation"] ?? null), 8, $this->source), "html", null, true);
        echo "</h4>
        ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 9, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__f973d54fc89c91c092afee5acf4030c2aa391505effbcd73f75654e3297a7933";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  51 => 8,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"card mb-3\" style=\"\">
  <div class=\"row g-0\">
    <div class=\"col-md-4 img-style1\">
      {{ field_image }}
    </div>
    <div class=\"col-md-8\">
      <div class=\"card-body\">
      <h4>{{ field_designation }}</h4>
        {{ body }}
      </div>
    </div>
  </div>
</div>", "__string_template__f973d54fc89c91c092afee5acf4030c2aa391505effbcd73f75654e3297a7933", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4);
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
