<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* catalog/view/template/account/newsletter.twig */
class __TwigTemplate_75b51779e0f762496d9bf73d6cb19953 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ($context["header"] ?? null);
        yield "
<div id=\"account-newsletter\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "      <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>
  <div class=\"row\">";
        // line 8
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">";
        // line 9
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 10
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <form id=\"form-newsletter\" action=\"";
        // line 11
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <div class=\"row mb-3 mb-0\">
            <label class=\"col-md-3 col-form-label\">";
        // line 14
        yield ($context["entry_newsletter"] ?? null);
        yield "</label>
            <div class=\"col-md-9\">
              <x-switch name=\"newsletter\" value=\"1\" checked=\"";
        // line 16
        yield ($context["newsletter"] ?? null);
        yield "\" input-id=\"input-newsletter\" input-class=\"form-switch form-switch-lg\"></x-switch>
            </div>
          </div>
        </fieldset>
        <div class=\"row\">
          <div class=\"col\">
            <a href=\"";
        // line 22
        yield ($context["back"] ?? null);
        yield "\" class=\"btn btn-light\">";
        yield ($context["button_back"] ?? null);
        yield "</a>
          </div>
          <div class=\"col text-end\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 25
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </div>
      </form>
      ";
        // line 29
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>
    ";
        // line 31
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 33
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/newsletter.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  123 => 33,  118 => 31,  113 => 29,  106 => 25,  98 => 22,  89 => 16,  84 => 14,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-newsletter\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      <form id=\"form-newsletter\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <div class=\"row mb-3 mb-0\">
            <label class=\"col-md-3 col-form-label\">{{ entry_newsletter }}</label>
            <div class=\"col-md-9\">
              <x-switch name=\"newsletter\" value=\"1\" checked=\"{{ newsletter }}\" input-id=\"input-newsletter\" input-class=\"form-switch form-switch-lg\"></x-switch>
            </div>
          </div>
        </fieldset>
        <div class=\"row\">
          <div class=\"col\">
            <a href=\"{{ back }}\" class=\"btn btn-light\">{{ button_back }}</a>
          </div>
          <div class=\"col text-end\">
            <button type=\"submit\" class=\"btn btn-primary\">{{ button_continue }}</button>
          </div>
        </div>
      </form>
      {{ content_bottom }}
    </div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "catalog/view/template/account/newsletter.twig", "C:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\account\\newsletter.twig");
    }
}
