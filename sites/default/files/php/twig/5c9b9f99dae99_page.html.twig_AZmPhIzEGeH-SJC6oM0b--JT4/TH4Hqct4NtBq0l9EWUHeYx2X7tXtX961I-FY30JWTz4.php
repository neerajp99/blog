<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/bootstrap_clean_blog/templates/page.html.twig */
class __TwigTemplate_eb3ff99317529607dbbc341aa97f7f990d112ad02cb3d03114f4b32f94dc2a61 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'social_buttons' => [$this, 'block_social_buttons'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 75, "trans" => 99, "block" => 129, "for" => 149];
        $filters = ["t" => 70, "escape" => 76];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans', 'block', 'for'],
                ['t', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 64
        echo "<nav class=\"navbar navbar-default navbar-custom navbar-fixed-top\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header page-scroll\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
              data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
        echo "</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      ";
        // line 75
        if (($context["site_name"] ?? null)) {
            // line 76
            echo "        <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("<i class=\"fa fa-home fa-2x\" aria-hidden=\"true\"></i>");
            echo "</a>
      ";
        }
        // line 78
        echo "    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      ";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bootstrap_clean_blog_main_menu", [])), "html", null, true);
        echo "
    </div>
    <!-- /.navbar-collapse -->
  </div>
</nav>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class=\"intro-header\" style=\"background-image: url('";
        // line 90
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_image"] ?? null)), "html", null, true);
        echo "')\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 93
        if (($context["node"] ?? null)) {
            // line 94
            echo "        <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
          <div class=\"post-heading\">
            <h1>";
            // line 96
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "label", [])), "html", null, true);
            echo "</h1>
            ";
            // line 97
            if (($context["display_submitted"] ?? null)) {
                // line 98
                echo "              <span class=\"meta\">
                ";
                // line 99
                echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
                // line 100
                echo "              </span>
            ";
            }
            // line 102
            echo "          </div>
        </div>
      ";
        } else {
            // line 105
            echo "        <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
          <div class=\"site-heading\">
            <h1>";
            // line 107
            if ($this->getAttribute(($context["node"] ?? null), "label", [])) {
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "label", [])), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                echo " ";
            }
            echo "</h1>
            ";
            // line 108
            if (($context["site_slogan"] ?? null)) {
                // line 109
                echo "              <hr class=\"small\">
              <span class=\"subheading\">
                ";
                // line 111
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
                echo "
              </span>
            ";
            }
            // line 114
            echo "          </div>
        </div>
      ";
        }
        // line 117
        echo "    </div>
  </div>
</header>

<!-- Post Content -->
<article>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
        ";
        // line 126
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "

        ";
        // line 129
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 133
        echo "      </div>
    </div>
  </div>
</article>

<hr>

<!-- Footer -->
<footer>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
        ";
        // line 146
        echo "        ";
        $this->displayBlock('social_buttons', $context, $blocks);
        // line 162
        echo "
        ";
        // line 163
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</footer>
";
    }

    // line 129
    public function block_content($context, array $blocks = [])
    {
        // line 130
        echo "          <a id=\"main-content\"></a>
          ";
        // line 131
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 146
    public function block_social_buttons($context, array $blocks = [])
    {
        // line 147
        echo "        ";
        if (($context["social_links"] ?? null)) {
            // line 148
            echo "        <ul class=\"list-inline text-center\">
          ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["social_links"] ?? null));
            foreach ($context['_seq'] as $context["network"] => $context["url"]) {
                // line 150
                echo "          <li>
            <a target=\"_blank\" href=\"";
                // line 151
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["url"]), "html", null, true);
                echo "\">
              <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x\"></i>
                <i class=\"fa fa-";
                // line 154
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["network"]), "html", null, true);
                echo " fa-stack-1x fa-inverse\"></i>
              </span>
            </a>        
          </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['network'], $context['url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "        </ul>
        ";
        }
        // line 161
        echo "        ";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_clean_blog/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 161,  261 => 159,  250 => 154,  244 => 151,  241 => 150,  237 => 149,  234 => 148,  231 => 147,  228 => 146,  222 => 131,  219 => 130,  216 => 129,  206 => 163,  203 => 162,  200 => 146,  186 => 133,  183 => 129,  178 => 126,  167 => 117,  162 => 114,  156 => 111,  152 => 109,  150 => 108,  138 => 107,  134 => 105,  129 => 102,  125 => 100,  123 => 99,  120 => 98,  118 => 97,  114 => 96,  110 => 94,  108 => 93,  102 => 90,  91 => 82,  85 => 78,  75 => 76,  73 => 75,  65 => 70,  57 => 64,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap_clean_blog/templates/page.html.twig", "/Applications/MAMP/htdocs/drupal/themes/bootstrap_clean_blog/templates/page.html.twig");
    }
}
