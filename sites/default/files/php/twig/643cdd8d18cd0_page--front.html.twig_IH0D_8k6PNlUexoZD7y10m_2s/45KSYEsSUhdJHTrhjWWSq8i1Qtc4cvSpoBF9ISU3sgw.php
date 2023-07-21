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

/* themes/perfect/templates/page--front.html.twig */
class __TwigTemplate_795ef7fe0980cadbb8bb6851e17346bcbd60a1e5e199befbec16f63706671d8f extends \Twig\Template
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
    ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider_area", [], "any", false, false, true, 74)) {
            // line 75
            echo "\t  <div id=\"slider_full\" class=\"carousel slide hero-slide\">            
\t\t  ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider_area", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "
\t  </div>
   ";
        }
        // line 79
        echo "   ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "whats_new", [], "any", false, false, true, 79)) {
            // line 80
            echo "\t<div class=\"whats_new\">
        <aside class=\"clearfix\" role=\"complementary\">
          ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "whats_new", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
   ";
        }
        // line 86
        echo "    ";
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
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 93)) {
            // line 94
            echo "      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section container clearfix\" role=\"complementary\">
          ";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 99
        echo "\t
\t";
        // line 100
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about_area_1", [], "any", false, false, true, 100)) {
            // line 101
            echo "      <div class=\"about_area_1\">
        <div class=\"about-area__inner section container clearfix\" role=\"complementary\">
          ";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about_area_1", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 107
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about_us", [], "any", false, false, true, 107)) {
            // line 108
            echo "      <div class=\"about-us\">
        <div class=\"container clearfix\" role=\"complementary\">
          ";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about_us", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
            echo " 
        </div>
      </div>
    ";
        }
        // line 114
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "karamyogi", [], "any", false, false, true, 114)) {
            // line 115
            echo "      <div class=\"karamyogi-section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"row\">
          ";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "karamyogi", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo " 
\t\t  </div>
        </div>
      </div>
    ";
        }
        // line 123
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "eventshome", [], "any", false, false, true, 123)) {
            // line 124
            echo "      <div class=\"events-home-section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t<h2>Latest <span>Events</span></h2>
\t\t<a href=\"http://103.25.130.160/drupal-master-design/drupal-master/event\" class=\"btn btn-theam\">View More...</a>
\t\t</div>
\t\t<div class=\"row\">
          ";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "eventshome", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
            echo " 
\t\t  </div>
        </div>
      </div>
    ";
        }
        // line 136
        echo "\t
\t";
        // line 137
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "gallery_section", [], "any", false, false, true, 137) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "event_calander", [], "any", false, false, true, 137))) {
            // line 138
            echo "      <div class=\"gallery_event_section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"gallery_main\">
\t\t\t\t\t";
            // line 143
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "gallery_section", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
            echo " 
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"colender_event\">
\t\t\t\t\t";
            // line 148
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "event_calander", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
            echo " 
\t\t\t\t</div>
\t\t\t</div>
\t\t  </div>
        </div>
      </div>
    ";
        }
        // line 155
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nscsti", [], "any", false, false, true, 155)) {
            // line 156
            echo "      <div class=\"nscsti-section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t
\t\t<div class=\"row\">
          ";
            // line 160
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nscsti", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
            echo " 
\t\t  </div>
        </div>
      </div>
    ";
        }
        // line 165
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_section", [], "any", false, false, true, 165)) {
            // line 166
            echo "      <div class=\"team_section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t<h2>Our <span>Leadership</span></h2>
\t\t
\t\t</div>
\t\t<div class=\"row\">
          ";
            // line 173
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_section", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
            echo " 
\t\t  </div>
        </div>
      </div>
    ";
        }
        // line 178
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "partner_section", [], "any", false, false, true, 178)) {
            // line 179
            echo "      <div class=\"partner_section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"row\">
          ";
            // line 182
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "partner_section", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
            echo " 
\t\t  </div>
        </div>
      </div>
    ";
        }
        // line 187
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper container clearfix front-none\">
      <div id=\"main\" class=\"layout-main clearfix\">
        ";
        // line 189
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
        echo "
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
           ";
        // line 194
        echo "          </section>
        </main>
        ";
        // line 196
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 196)) {
            // line 197
            echo "          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 199
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 203
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 203)) {
            // line 204
            echo "          <div id=\"sidebar-second\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 206
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 206), 206, $this->source), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 210
        echo "      </div>
    </div>
\t  
    ";
        // line 213
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 213) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 213)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 213))) {
            // line 214
            echo "      <div class=\"featured-bottom\">
        <aside class=\"container clearfix\" role=\"complementary\">
          ";
            // line 216
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 216), 216, $this->source), "html", null, true);
            echo "
          ";
            // line 217
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 217), 217, $this->source), "html", null, true);
            echo "
          ";
            // line 218
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 222
        echo "    <footer class=\"\">
      <div class=\"container\">
        ";
        // line 224
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 224) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 224)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 224)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 224))) {
            // line 225
            echo "          <div class=\"site-footer__top clearfix row\">
\t\t  
\t\t\t
            ";
            // line 228
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 228), 228, $this->source), "html", null, true);
            echo "
\t\t\t
            ";
            // line 230
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 230), 230, $this->source), "html", null, true);
            echo "
\t\t\t
            ";
            // line 232
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 232), 232, $this->source), "html", null, true);
            echo "
\t\t\t
            ";
            // line 234
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 234), 234, $this->source), "html", null, true);
            echo "
\t\t\t
\t\t\t
          </div>
        ";
        }
        // line 239
        echo "        
      </div>
    </footer>
\t";
        // line 242
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 242)) {
            // line 243
            echo "          <div class=\"footer-bottom-section\">
\t\t   <div class=\"container\">
            ";
            // line 245
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 245), 245, $this->source), "html", null, true);
            echo "
\t\t\t</div>
          </div>
        ";
        }
        // line 249
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/perfect/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 249,  386 => 245,  382 => 243,  380 => 242,  375 => 239,  367 => 234,  362 => 232,  357 => 230,  352 => 228,  347 => 225,  345 => 224,  341 => 222,  334 => 218,  330 => 217,  326 => 216,  322 => 214,  320 => 213,  315 => 210,  308 => 206,  304 => 204,  301 => 203,  294 => 199,  290 => 197,  288 => 196,  284 => 194,  277 => 189,  273 => 187,  265 => 182,  260 => 179,  257 => 178,  249 => 173,  240 => 166,  237 => 165,  229 => 160,  223 => 156,  220 => 155,  210 => 148,  202 => 143,  195 => 138,  193 => 137,  190 => 136,  182 => 131,  173 => 124,  170 => 123,  162 => 118,  157 => 115,  154 => 114,  147 => 110,  143 => 108,  140 => 107,  133 => 103,  129 => 101,  127 => 100,  124 => 99,  117 => 96,  113 => 94,  110 => 93,  103 => 89,  99 => 87,  96 => 86,  89 => 82,  85 => 80,  82 => 79,  76 => 76,  73 => 75,  71 => 74,  65 => 71,  56 => 65,  48 => 60,  39 => 53,);
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
    {% if page.slider_area %}
\t  <div id=\"slider_full\" class=\"carousel slide hero-slide\">            
\t\t  {{ page.slider_area }}
\t  </div>
   {% endif %}
   {% if page.whats_new %}
\t<div class=\"whats_new\">
        <aside class=\"clearfix\" role=\"complementary\">
          {{ page.whats_new }}
        </aside>
      </div>
   {% endif %}
    {% if page.highlighted %}
      <div class=\"highlighted\">
        <aside class=\"container section clearfix\" role=\"complementary\">
          {{ page.highlighted }}
        </aside>
      </div>
    {% endif %}
    {% if page.featured_top %}
      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section container clearfix\" role=\"complementary\">
          {{ page.featured_top }}
        </aside>
      </div>
    {% endif %}\t
\t{% if page.about_area_1 %}
      <div class=\"about_area_1\">
        <div class=\"about-area__inner section container clearfix\" role=\"complementary\">
          {{ page.about_area_1 }}
        </div>
      </div>
    {% endif %}
\t{% if page.about_us %}
      <div class=\"about-us\">
        <div class=\"container clearfix\" role=\"complementary\">
          {{ page.about_us }} 
        </div>
      </div>
    {% endif %}
\t{% if page.karamyogi %}
      <div class=\"karamyogi-section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"row\">
          {{ page.karamyogi }} 
\t\t  </div>
        </div>
      </div>
    {% endif %}
\t{% if page.eventshome %}
      <div class=\"events-home-section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t<h2>Latest <span>Events</span></h2>
\t\t<a href=\"http://103.25.130.160/drupal-master-design/drupal-master/event\" class=\"btn btn-theam\">View More...</a>
\t\t</div>
\t\t<div class=\"row\">
          {{ page.eventshome }} 
\t\t  </div>
        </div>
      </div>
    {% endif %}
\t
\t{% if page.gallery_section or page.event_calander %}
      <div class=\"gallery_event_section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"gallery_main\">
\t\t\t\t\t{{ page.gallery_section }} 
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"colender_event\">
\t\t\t\t\t{{ page.event_calander }} 
\t\t\t\t</div>
\t\t\t</div>
\t\t  </div>
        </div>
      </div>
    {% endif %}
\t{% if page.nscsti %}
      <div class=\"nscsti-section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t
\t\t<div class=\"row\">
          {{ page.nscsti }} 
\t\t  </div>
        </div>
      </div>
    {% endif %}
\t{% if page.team_section %}
      <div class=\"team_section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t<h2>Our <span>Leadership</span></h2>
\t\t
\t\t</div>
\t\t<div class=\"row\">
          {{ page.team_section }} 
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
    <div id=\"main-wrapper\" class=\"layout-main-wrapper container clearfix front-none\">
      <div id=\"main\" class=\"layout-main clearfix\">
        {{ page.breadcrumb }}
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
           {# {{ page.content }} #}
          </section>
        </main>
        {% if page.sidebar_first %}
          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              {{ page.sidebar_first }}
            </aside>
          </div>
        {% endif %}
        {% if page.sidebar_second %}
          <div id=\"sidebar-second\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              {{ page.sidebar_second }}
            </aside>
          </div>
        {% endif %}
      </div>
    </div>
\t  
    {% if page.featured_bottom_first or page.featured_bottom_second or page.featured_bottom_third %}
      <div class=\"featured-bottom\">
        <aside class=\"container clearfix\" role=\"complementary\">
          {{ page.featured_bottom_first }}
          {{ page.featured_bottom_second }}
          {{ page.featured_bottom_third }}
        </aside>
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
", "themes/perfect/templates/page--front.html.twig", "/var/www/html/drupal-master-design/drupal-master/themes/perfect/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 74);
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
