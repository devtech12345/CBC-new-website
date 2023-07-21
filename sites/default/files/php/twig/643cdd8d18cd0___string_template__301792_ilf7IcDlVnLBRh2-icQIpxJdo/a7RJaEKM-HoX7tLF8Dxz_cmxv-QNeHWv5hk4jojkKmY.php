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

/* __string_template__301792f77ba75f042782c1fc5149fd0aa508aad3b5fe7b495c359a72d6a39bf8 */
class __TwigTemplate_dd7979255a761b094807af32b7f3e412d1450d0dc95e9e60b96a3ad04fb58cf9 extends \Twig\Template
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
    <div class=\"col-md-2 img-style\">
      ";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_image"] ?? null), 4, $this->source), "html", null, true);
        echo "
    </div>
    <div class=\"col-md-10\">
      <div class=\"card-body\">
        <h5 class=\"card-title mb-0\">";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 8, $this->source), "html", null, true);
        echo "</h5>
      <p class=\"card-text\"><small class=\"text-muted\">";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_designation"] ?? null), 9, $this->source), "html", null, true);
        echo "</small></p>
        ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 10, $this->source), "html", null, true);
        echo "
        <div class=\"\"><a href=\"";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node"] ?? null), 11, $this->source), "html", null, true);
        echo "\" class=\"btn btn-orange mt-0\">View More...</a> </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__301792f77ba75f042782c1fc5149fd0aa508aad3b5fe7b495c359a72d6a39bf8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  59 => 10,  55 => 9,  51 => 8,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"card mb-3\" style=\"\">
  <div class=\"row g-0\">
    <div class=\"col-md-2 img-style\">
      {{ field_image }}
    </div>
    <div class=\"col-md-10\">
      <div class=\"card-body\">
        <h5 class=\"card-title mb-0\">{{ title }}</h5>
      <p class=\"card-text\"><small class=\"text-muted\">{{ field_designation }}</small></p>
        {{ body }}
        <div class=\"\"><a href=\"{{ view_node }}\" class=\"btn btn-orange mt-0\">View More...</a> </div>
      </div>
    </div>
  </div>
</div>", "__string_template__301792f77ba75f042782c1fc5149fd0aa508aad3b5fe7b495c359a72d6a39bf8", "");
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
