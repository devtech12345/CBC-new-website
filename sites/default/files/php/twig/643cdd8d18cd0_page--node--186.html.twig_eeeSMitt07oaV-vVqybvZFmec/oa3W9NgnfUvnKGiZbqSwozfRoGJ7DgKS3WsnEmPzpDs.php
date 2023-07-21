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

/* themes/perfect/templates/page--node--186.html.twig */
class __TwigTemplate_401e8d65277933be1e6b1d502df2a43c4e52c7c647bfbecae184b4b7604bac2f extends \Twig\Template
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
        // line 53
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
  
  
    <header id=\"header\" class=\"\" role=\"banner\">
\t\t<div class=\"header_top\">
\t\t <div class=\"section container clearfix\">
        ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
\t\t</div>
\t\t</div>
\t\t<div class=\"header\">
\t\t <div class=\"section container clearfix\">
        ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "
\t\t</div>
\t\t</div>
    </header>
\t<nav class=\"mainnav\">
\t\t <div class=\"section container clearfix\">
        ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "
\t\t</div>
\t</nav>
\t<div class=\"inner-banner-section\">
\t\t <img src=\"/drupal-master-design/drupal-master/themes/perfect/images/inner-banner.jpg\" class=\"\">
\t\t <div class=\"overlap-section\">
\t\t\t<div class=\"container\">
\t\t\t   <div class=\"row\">
\t\t\t\t  <div class=\"col-md-12 text-center\">
\t\t\t\t\t ";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
        echo "
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t</div>
\t\t </div>
       </div>
\t   ";
        // line 86
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 86)) {
            // line 87
            echo "      <div class=\"highlighted\">
        <aside class=\"container section clearfix\" role=\"complementary\">
          ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 93
        echo "     <div id=\"main-wrapper\" class=\"layout-main-wrapper container clearfix\">
      <div id=\"main\" class=\"layout-main clearfix\">
        
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
        echo "
          </section>
        </main>
        
      </div>
    </div>
\t";
        // line 105
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_of_nscsti", [], "any", false, false, true, 105)) {
            // line 106
            echo "      <div class=\"features_of_nscsti clearfix\"> 
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"row\">
          ";
            // line 109
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_of_nscsti", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
            echo " 
\t\t  </div>
        </div>
      </div>
    ";
        }
        // line 114
        echo "\t
\t
\t";
        // line 116
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cti_map_section_top", [], "any", false, false, true, 116) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cti_map_section_left", [], "any", false, false, true, 116)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cti_map_section_right", [], "any", false, false, true, 116))) {
            // line 117
            echo "\t
      <div class=\"cti_map_section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"row\">
\t\t <div class=\"col-lg-12\">
          ";
            // line 122
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cti_map_section_top", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
            echo " 
\t\t  </div>
\t\t 
\t\t  </div>
\t\t<div class=\"row\">
\t\t <div class=\"col-lg-6\">
          ";
            // line 128
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cti_map_section_left", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
            echo " 
\t\t  </div>
\t\t  <div class=\"col-lg-6\">
          ";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cti_map_section_right", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
            echo " 
\t\t  </div>
\t\t  </div>
        </div>
      </div>
    ";
        }
        // line 137
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cti_gallry_section", [], "any", false, false, true, 137)) {
            // line 138
            echo "      <div class=\"cti_gallry_section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"row\">
          ";
            // line 141
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cti_gallry_section", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
            echo " 
\t\t  </div>
        </div>
      </div>
    ";
        }
        // line 146
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cti_dashboard_section", [], "any", false, false, true, 146)) {
            // line 147
            echo "      <div class=\"cti_dashboard_section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"row\">
          ";
            // line 150
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cti_dashboard_section", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo " 
\t\t  </div>
        </div>
      </div>
    ";
        }
        // line 155
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "partner_section", [], "any", false, false, true, 155)) {
            // line 156
            echo "      <div class=\"partner_section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"row\">
          ";
            // line 159
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "partner_section", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
            echo " 
\t\t  </div>
        </div>
      </div>
    ";
        }
        // line 164
        echo "    <footer class=\"\">
      <div class=\"container\">
        ";
        // line 166
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 166) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 166)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 166)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 166))) {
            // line 167
            echo "          <div class=\"site-footer__top clearfix row\">
\t\t  
\t\t\t
            ";
            // line 170
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo "
\t\t\t
            ";
            // line 172
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
            echo "
\t\t\t
            ";
            // line 174
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
            echo "
\t\t\t
            ";
            // line 176
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
            echo "
\t\t\t
\t\t\t
          </div>
        ";
        }
        // line 181
        echo "        
      </div>
    </footer>
\t";
        // line 184
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 184)) {
            // line 185
            echo "          <div class=\"footer-bottom-section\">
\t\t   <div class=\"container\">
            ";
            // line 187
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
            echo "
\t\t\t</div>
          </div>
        ";
        }
        // line 191
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/perfect/templates/page--node--186.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 191,  261 => 187,  257 => 185,  255 => 184,  250 => 181,  242 => 176,  237 => 174,  232 => 172,  227 => 170,  222 => 167,  220 => 166,  216 => 164,  208 => 159,  203 => 156,  200 => 155,  192 => 150,  187 => 147,  184 => 146,  176 => 141,  171 => 138,  168 => 137,  159 => 131,  153 => 128,  144 => 122,  137 => 117,  135 => 116,  131 => 114,  123 => 109,  118 => 106,  116 => 105,  107 => 99,  99 => 93,  92 => 89,  88 => 87,  86 => 86,  77 => 80,  65 => 71,  56 => 65,  48 => 60,  39 => 53,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bartik's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables: 
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345). 
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.featured_top: Items for the featured top region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.featured_bottom_third: Items for the third featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.footer_third: Items for the third footer column.
 * - page.footer_fourth: Items for the fourth footer column.
 * - page.footer_fifth: Items for the fifth footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div id=\"page-wrapper\">
  <div id=\"page\">
  
  
    <header id=\"header\" class=\"\" role=\"banner\">
\t\t<div class=\"header_top\">
\t\t <div class=\"section container clearfix\">
        {{ page.secondary_menu }}
\t\t</div>
\t\t</div>
\t\t<div class=\"header\">
\t\t <div class=\"section container clearfix\">
        {{ page.header }}
\t\t</div>
\t\t</div>
    </header>
\t<nav class=\"mainnav\">
\t\t <div class=\"section container clearfix\">
        {{ page.primary_menu }}
\t\t</div>
\t</nav>
\t<div class=\"inner-banner-section\">
\t\t <img src=\"/drupal-master-design/drupal-master/themes/perfect/images/inner-banner.jpg\" class=\"\">
\t\t <div class=\"overlap-section\">
\t\t\t<div class=\"container\">
\t\t\t   <div class=\"row\">
\t\t\t\t  <div class=\"col-md-12 text-center\">
\t\t\t\t\t {{ page.breadcrumb }}
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t</div>
\t\t </div>
       </div>
\t   {% if page.highlighted %}
      <div class=\"highlighted\">
        <aside class=\"container section clearfix\" role=\"complementary\">
          {{ page.highlighted }}
        </aside>
      </div>
    {% endif %}
     <div id=\"main-wrapper\" class=\"layout-main-wrapper container clearfix\">
      <div id=\"main\" class=\"layout-main clearfix\">
        
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            {{ page.content }}
          </section>
        </main>
        
      </div>
    </div>
\t{% if page.features_of_nscsti %}
      <div class=\"features_of_nscsti clearfix\"> 
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"row\">
          {{ page.features_of_nscsti }} 
\t\t  </div>
        </div>
      </div>
    {% endif %}
\t
\t
\t{% if page.cti_map_section_top or page.cti_map_section_left or page.cti_map_section_right %}
\t
      <div class=\"cti_map_section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"row\">
\t\t <div class=\"col-lg-12\">
          {{ page.cti_map_section_top }} 
\t\t  </div>
\t\t 
\t\t  </div>
\t\t<div class=\"row\">
\t\t <div class=\"col-lg-6\">
          {{ page.cti_map_section_left }} 
\t\t  </div>
\t\t  <div class=\"col-lg-6\">
          {{ page.cti_map_section_right }} 
\t\t  </div>
\t\t  </div>
        </div>
      </div>
    {% endif %}
\t{% if page.cti_gallry_section %}
      <div class=\"cti_gallry_section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"row\">
          {{ page.cti_gallry_section }} 
\t\t  </div>
        </div>
      </div>
    {% endif %}
\t{% if page.cti_dashboard_section %}
      <div class=\"cti_dashboard_section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"row\">
          {{ page.cti_dashboard_section }} 
\t\t  </div>
        </div>
      </div>
    {% endif %}
\t{% if page.partner_section %}
      <div class=\"partner_section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"row\">
          {{ page.partner_section }} 
\t\t  </div>
        </div>
      </div>
    {% endif %}
    <footer class=\"\">
      <div class=\"container\">
        {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}
          <div class=\"site-footer__top clearfix row\">
\t\t  
\t\t\t
            {{ page.footer_first }}
\t\t\t
            {{ page.footer_second }}
\t\t\t
            {{ page.footer_third }}
\t\t\t
            {{ page.footer_fourth }}
\t\t\t
\t\t\t
          </div>
        {% endif %}
        
      </div>
    </footer>
\t{% if page.footer_fifth %}
          <div class=\"footer-bottom-section\">
\t\t   <div class=\"container\">
            {{ page.footer_fifth }}
\t\t\t</div>
          </div>
        {% endif %}
  </div>
</div>
", "themes/perfect/templates/page--node--186.html.twig", "/var/www/html/drupal-master-design/drupal-master/themes/perfect/templates/page--node--186.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 86);
        static $filters = array("escape" => 60);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
