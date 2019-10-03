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

/* themes/bootstrap/templates/node/node--disclaimer.html.twig */
class __TwigTemplate_1ef481b8bf3d8059f66e05d1cce3f3b3218c00e7b774476ecd8e4dee24bc2d20 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 69];
        $filters = ["clean_class" => 70, "escape" => 81];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape'],
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
        // line 69
        $context["classes"] = [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 70
($context["node"] ?? null), "bundle", []))), 1 => (($this->getAttribute(        // line 71
($context["node"] ?? null), "isPromoted", [], "method")) ? ("is-promoted") : ("")), 2 => (($this->getAttribute(        // line 72
($context["node"] ?? null), "isSticky", [], "method")) ? ("is-sticky") : ("")), 3 => (( !$this->getAttribute(        // line 73
($context["node"] ?? null), "isPublished", [], "method")) ? ("is-unpublished") : ("")), 4 => ((        // line 74
($context["view_mode"] ?? null)) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null)))) : ("")), 5 => "clearfix"];
        // line 78
        echo "


<article";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <div id=\"node-id-value\" data-node-id=\"";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "id", [])), "html", null, true);
        echo "\">
    <div class=\"modal-header\">
      <h5 class=\"modal-title\" id=\"exampleModalLabel\">";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "</h5>
    </div>
    <div class=\"modal-body\">
      ";
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
    </div>
    <div class=\"modal-footer\">
      <button type=\"button\" class=\"btn btn-secondary\" id=\"acceptBtn\" >Accept</button>
      <button type=\"button\" class=\"btn btn-primary\" id=\"declineBtn\">Decline</button>
    </div>
  </div>
</article>";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/node/node--disclaimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 87,  76 => 84,  71 => 82,  67 => 81,  62 => 78,  60 => 74,  59 => 73,  58 => 72,  57 => 71,  56 => 70,  55 => 69,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap/templates/node/node--disclaimer.html.twig", "C:\\Web\\dp85\\themes\\bootstrap\\templates\\node\\node--disclaimer.html.twig");
    }
}
