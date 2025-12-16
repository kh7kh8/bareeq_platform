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

/* catalog/view/template/account/transaction.twig */
class __TwigTemplate_e63dae546d3017537facc7c0f222e1c2 extends Template
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
<div id=\"account-transaction\" class=\"container\">
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

  <div class=\"row\">
    ";
        // line 10
        yield ($context["column_left"] ?? null);
        yield "

    <div id=\"content\" class=\"col\">
      ";
        // line 13
        yield ($context["content_top"] ?? null);
        yield "

      <div class=\"bareq-login-wrapper\">
        ";
        // line 17
        yield "        <div class=\"mb-3\">
          <h1 class=\"bareq-login-title\">";
        // line 18
        yield ($context["heading_title"] ?? null);
        yield "</h1>
          <p class=\"bareq-login-subtitle\">
            ";
        // line 20
        yield ($context["text_total"] ?? null);
        yield "
            <strong><x-currency code=\"";
        // line 21
        yield ($context["currency"] ?? null);
        yield "\" amount=\"";
        yield ($context["total"] ?? null);
        yield "\"></x-currency></strong>.
          </p>
        </div>

        <div class=\"bareq-login-card bareq-login-card--main\">
          <div class=\"table-responsive mb-0\">
            <table class=\"table table-bordered table-hover mb-0\">
              <thead>
                <tr>
                  <th>";
        // line 30
        yield ($context["column_date_added"] ?? null);
        yield "</th>
                  <th>";
        // line 31
        yield ($context["column_description"] ?? null);
        yield "</th>
                  <th class=\"text-end\">";
        // line 32
        yield ($context["column_amount"] ?? null);
        yield "</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 36
        if (($context["transactions"] ?? null)) {
            // line 37
            yield "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["transactions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 38
                yield "                    <tr>
                      <td>";
                // line 39
                yield CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "date_added", [], "any", false, false, false, 39);
                yield "</td>
                      <td>";
                // line 40
                yield CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "description", [], "any", false, false, false, 40);
                yield "</td>
                      <td class=\"text-end\">
                        <x-currency code=\"";
                // line 42
                yield ($context["currency"] ?? null);
                yield "\" amount=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 42);
                yield "\"></x-currency>
                      </td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['transaction'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "                ";
        } else {
            // line 47
            yield "                  <tr>
                    <td class=\"text-center\" colspan=\"3\">";
            // line 48
            yield ($context["text_no_results"] ?? null);
            yield "</td>
                  </tr>
                ";
        }
        // line 51
        yield "              </tbody>
            </table>
          </div>

          <div class=\"row mt-3\">
            <div class=\"col-sm-6 text-start\">";
        // line 56
        yield ($context["pagination"] ?? null);
        yield "</div>
            <div class=\"col-sm-6 text-end\">";
        // line 57
        yield ($context["results"] ?? null);
        yield "</div>
          </div>

          <div class=\"mt-3 text-end\">
            <a href=\"";
        // line 61
        yield ($context["continue"] ?? null);
        yield "\" class=\"bareq-btn-main\">
              ";
        // line 62
        yield ($context["button_continue"] ?? null);
        yield "
            </a>
          </div>
        </div>
      </div>

      ";
        // line 68
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>

    ";
        // line 71
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>
";
        // line 74
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
        return "catalog/view/template/account/transaction.twig";
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
        return array (  207 => 74,  201 => 71,  195 => 68,  186 => 62,  182 => 61,  175 => 57,  171 => 56,  164 => 51,  158 => 48,  155 => 47,  152 => 46,  140 => 42,  135 => 40,  131 => 39,  128 => 38,  123 => 37,  121 => 36,  114 => 32,  110 => 31,  106 => 30,  92 => 21,  88 => 20,  83 => 18,  80 => 17,  74 => 13,  68 => 10,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-transaction\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>

  <div class=\"row\">
    {{ column_left }}

    <div id=\"content\" class=\"col\">
      {{ content_top }}

      <div class=\"bareq-login-wrapper\">
        {# رأس الصفحة #}
        <div class=\"mb-3\">
          <h1 class=\"bareq-login-title\">{{ heading_title }}</h1>
          <p class=\"bareq-login-subtitle\">
            {{ text_total }}
            <strong><x-currency code=\"{{ currency }}\" amount=\"{{ total }}\"></x-currency></strong>.
          </p>
        </div>

        <div class=\"bareq-login-card bareq-login-card--main\">
          <div class=\"table-responsive mb-0\">
            <table class=\"table table-bordered table-hover mb-0\">
              <thead>
                <tr>
                  <th>{{ column_date_added }}</th>
                  <th>{{ column_description }}</th>
                  <th class=\"text-end\">{{ column_amount }}</th>
                </tr>
              </thead>
              <tbody>
                {% if transactions %}
                  {% for transaction in transactions %}
                    <tr>
                      <td>{{ transaction.date_added }}</td>
                      <td>{{ transaction.description }}</td>
                      <td class=\"text-end\">
                        <x-currency code=\"{{ currency }}\" amount=\"{{ transaction.amount }}\"></x-currency>
                      </td>
                    </tr>
                  {% endfor %}
                {% else %}
                  <tr>
                    <td class=\"text-center\" colspan=\"3\">{{ text_no_results }}</td>
                  </tr>
                {% endif %}
              </tbody>
            </table>
          </div>

          <div class=\"row mt-3\">
            <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
            <div class=\"col-sm-6 text-end\">{{ results }}</div>
          </div>

          <div class=\"mt-3 text-end\">
            <a href=\"{{ continue }}\" class=\"bareq-btn-main\">
              {{ button_continue }}
            </a>
          </div>
        </div>
      </div>

      {{ content_bottom }}
    </div>

    {{ column_right }}
  </div>
</div>
{{ footer }}
", "catalog/view/template/account/transaction.twig", "C:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\account\\transaction.twig");
    }
}
