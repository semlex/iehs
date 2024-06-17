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

/* @help_topics/color.changing.html.twig */
class __TwigTemplate_e9a7c17a657912104aac48bf40c3c4d9 extends Template
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
        // line 6
        $context["appearance"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("system.themes_page"));
        // line 7
        echo "<h2>";
        echo t("Goal", array());
        echo "</h2>
<p>";
        // line 8
        echo t("Change the colors for links, backgrounds, and text in a theme that supports the Color module. Color-specific stylesheets will be generated and saved; you will need to follow these steps again to regenerate the stylesheets if you make any changes to the base stylesheets of your theme.", array());
        echo "</p>
<h2>";
        // line 9
        echo t("Steps", array());
        echo "</h2>
<ol>
  <li>";
        // line 11
        echo t("In the Manage administrative menu, navigate to <a href=\"@appearance\">Appearance</a>.", array("@appearance" => ($context["appearance"] ?? null), ));
        echo "</li>
  <li>";
        // line 12
        echo t("Click the <em>Settings</em> link for the theme you want to change the colors of.", array());
        echo "</li>
  <li>";
        // line 13
        echo t("In the <em>Color scheme</em> section, choose new colors for the backgrounds, text, and links that your theme defines colors for. However, if you do not see color settings, then your theme does not support the Color module.", array());
        echo "</li>
  <li>";
        // line 14
        echo t("Click <em>Save configuration</em>. Color-specific stylesheets will be generated and saved in the file system.", array());
        echo "</li>
</ol>

<h2>";
        // line 17
        echo t("Additional resources", array());
        echo "</h2>
<ul>
  <li><a href=\"https://www.drupal.org/docs/8/core/modules/color/overview\">";
        // line 19
        echo t("Color module overview", array());
        echo "</a></li>
</ul>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/color.changing.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  78 => 19,  73 => 17,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  50 => 9,  46 => 8,  41 => 7,  39 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/color.changing.html.twig", "/var/www/html/web/modules/contrib/color/help_topics/color.changing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 6, "trans" => 7);
        static $filters = array("escape" => 11);
        static $functions = array("render_var" => 6, "url" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'url']
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
