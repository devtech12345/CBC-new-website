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

/* modules/contrib/password_policy/templates/password-policy-status.html.twig */
class __TwigTemplate_7c5735b6df9361529f3c0a694297cdba8f4ff7b1169baa03656b6361c9ed5020 extends \Twig\Template
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
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["constraints_table"] ?? null), 17, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/password_policy/templates/password-policy-status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display the password policy status message.
 *
 * Available variables:
 *  - constraints_table: Policy data themed using theme_table.
 *  - constraints: Array of policy data:
 *    - policy: The name of the policy this constraint belongs to.
 *    - status: Boolean - whether the constraint passed or failed.
 *    - constraint: Name of the constraint.
 *    - message: Failure message, or empty if passed.
 *
 * @see template_preprocess_password_policy_status()
 */
#}
{{ constraints_table }}
", "modules/contrib/password_policy/templates/password-policy-status.html.twig", "/var/www/html/drupal-master-design/drupal-master/modules/contrib/password_policy/templates/password-policy-status.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 17);
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
