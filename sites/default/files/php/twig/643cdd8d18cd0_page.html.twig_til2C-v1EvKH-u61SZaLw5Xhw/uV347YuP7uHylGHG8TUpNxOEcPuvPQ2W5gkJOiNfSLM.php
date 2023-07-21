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

/* themes/perfect/templates/page.html.twig */
class __TwigTemplate_4fc08b6c3bb7873c0c22700cc2e8e333f6ce28140271aab4ea32fbc999c50ba8 extends \Twig\Template
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
        echo "    
    ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 87)) {
            // line 88
            echo "      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section container clearfix\" role=\"complementary\">
          ";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 93
        echo "\t
\t";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about_area_1", [], "any", false, false, true, 94)) {
            // line 95
            echo "      <div class=\"about_area_1\">
        <div class=\"about-area__inner section container clearfix\" role=\"complementary\">
          ";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about_area_1", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 101
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about_us", [], "any", false, false, true, 101)) {
            // line 102
            echo "      <div class=\"about-us\">
        <div class=\"container clearfix\" role=\"complementary\">
          ";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about_us", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo " 
        </div>
      </div>
    ";
        }
        // line 108
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "karamyogi", [], "any", false, false, true, 108)) {
            // line 109
            echo "      <div class=\"karamyogi-section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"row\">
          ";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "karamyogi", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
            echo " 
\t\t  </div>
        </div>
      </div>
    ";
        }
        // line 117
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "eventshome", [], "any", false, false, true, 117)) {
            // line 118
            echo "      <div class=\"events-home-section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t<h2>Latest <span>Events</span></h2> 
\t\t<a href=\"http://103.25.130.160/drupal-master-design/drupal-master/event\" class=\"btn btn-theam\">View More...</a> 
\t\t</div>
\t\t<div class=\"row\">
          ";
            // line 125
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "eventshome", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo " 
\t\t  </div>
        </div>
      </div>
    ";
        }
        // line 130
        echo "\t
\t";
        // line 131
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "gallery_section", [], "any", false, false, true, 131) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "event_calander", [], "any", false, false, true, 131))) {
            // line 132
            echo "      <div class=\"gallery_event_section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"gallery_main\">
\t\t\t\t\t";
            // line 137
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "gallery_section", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
            echo " 
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"colender_event\">
\t\t\t\t\t";
            // line 142
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "event_calander", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
            echo " 
\t\t\t\t</div>
\t\t\t</div>
\t\t  </div>
        </div>
      </div>
    ";
        }
        // line 149
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nscsti", [], "any", false, false, true, 149)) {
            // line 150
            echo "      <div class=\"nscsti-section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t
\t\t<div class=\"row\">
          ";
            // line 154
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nscsti", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo " 
\t\t  </div>
        </div>
      </div>
    ";
        }
        // line 159
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_section", [], "any", false, false, true, 159)) {
            // line 160
            echo "      <div class=\"team_section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t<h2>Our <span>Leadership</span></h2>
\t\t
\t\t</div>
\t\t<div class=\"row\">
          ";
            // line 167
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_section", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
            echo " 
\t\t  </div>
        </div>
      </div>
    ";
        }
        // line 172
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "partner_section", [], "any", false, false, true, 172)) {
            // line 173
            echo "      <div class=\"partner_section clearfix\">
        <div class=\"container clearfix\" role=\"complementary\">
\t\t<div class=\"row\">
          ";
            // line 176
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "partner_section", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
            echo " 
\t\t  </div>
        </div>
      </div>
    ";
        }
        // line 181
        echo "\t <div class=\"inner-banner-section\">
\t\t <img src=\"/drupal-master-design/drupal-master/themes/perfect/images/inner-banner.jpg\" class=\"\">
\t\t <div class=\"overlap-section\">
\t\t\t<div class=\"container\">
\t\t\t   <div class=\"row\">
\t\t\t\t  <div class=\"col-md-12 text-center\">
\t\t\t\t\t ";
        // line 187
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
        echo "
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t</div>
\t\t </div>
       </div>
\t   ";
        // line 193
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 193)) {
            // line 194
            echo "      <div class=\"highlighted\">
        <aside class=\"container section clearfix\" role=\"complementary\">
          ";
            // line 196
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 196), 196, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 200
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper container clearfix\">
      <div id=\"main\" class=\"layout-main clearfix\">
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 205
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 205), 205, $this->source), "html", null, true);
        echo "
          </section>
        </main>
        ";
        // line 208
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 208)) {
            // line 209
            echo "          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 211
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 211), 211, $this->source), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 215
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 215)) {
            // line 216
            echo "          <div id=\"sidebar-second\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 218
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 222
        echo "      </div>
    </div>
\t  
    ";
        // line 225
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 225) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 225)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 225))) {
            // line 226
            echo "      <div class=\"featured-bottom\">
        <aside class=\"container clearfix\" role=\"complementary\">
          ";
            // line 228
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 228), 228, $this->source), "html", null, true);
            echo "
          ";
            // line 229
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 229), 229, $this->source), "html", null, true);
            echo "
          ";
            // line 230
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 230), 230, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 234
        echo "    <footer class=\"\">
      <div class=\"container\">
        ";
        // line 236
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 236) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 236)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 236)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 236))) {
            // line 237
            echo "          <div class=\"site-footer__top clearfix row\">
\t\t  
\t\t\t
            ";
            // line 240
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 240), 240, $this->source), "html", null, true);
            echo "
\t\t\t
            ";
            // line 242
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 242), 242, $this->source), "html", null, true);
            echo "
\t\t\t
            ";
            // line 244
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 244), 244, $this->source), "html", null, true);
            echo "
\t\t\t
            ";
            // line 246
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 246), 246, $this->source), "html", null, true);
            echo "
\t\t\t
\t\t\t
          </div>
        ";
        }
        // line 251
        echo "        
      </div>
    </footer>
\t";
        // line 254
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 254)) {
            // line 255
            echo "          <div class=\"footer-bottom-section\">
\t\t   <div class=\"container\">
            ";
            // line 257
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 257), 257, $this->source), "html", null, true);
            echo "
\t\t\t</div>
          </div>
        ";
        }
        // line 261
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/perfect/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 261,  402 => 257,  398 => 255,  396 => 254,  391 => 251,  383 => 246,  378 => 244,  373 => 242,  368 => 240,  363 => 237,  361 => 236,  357 => 234,  350 => 230,  346 => 229,  342 => 228,  338 => 226,  336 => 225,  331 => 222,  324 => 218,  320 => 216,  317 => 215,  310 => 211,  306 => 209,  304 => 208,  298 => 205,  291 => 200,  284 => 196,  280 => 194,  278 => 193,  269 => 187,  261 => 181,  253 => 176,  248 => 173,  245 => 172,  237 => 167,  228 => 160,  225 => 159,  217 => 154,  211 => 150,  208 => 149,  198 => 142,  190 => 137,  183 => 132,  181 => 131,  178 => 130,  170 => 125,  161 => 118,  158 => 117,  150 => 112,  145 => 109,  142 => 108,  135 => 104,  131 => 102,  128 => 101,  121 => 97,  117 => 95,  115 => 94,  112 => 93,  105 => 90,  101 => 88,  99 => 87,  96 => 86,  89 => 82,  85 => 80,  82 => 79,  76 => 76,  73 => 75,  71 => 74,  65 => 71,  56 => 65,  48 => 60,  39 => 53,);
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
\t <div class=\"inner-banner-section\">
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
", "themes/perfect/templates/page.html.twig", "/var/www/html/drupal-master-design/drupal-master/themes/perfect/templates/page.html.twig");
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
