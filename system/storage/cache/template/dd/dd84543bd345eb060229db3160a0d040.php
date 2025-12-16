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

/* catalog/view/template/account/returns_list.twig */
class __TwigTemplate_33a03fb3f2cb6abdd04aff7402e97bcb extends Template
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
<div id=\"account-return\" class=\"container\">
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
        yield ($context["text_no_results"] ?? null);
        yield "
          </p>
        </div>

        <div class=\"bareq-login-card bareq-login-card--main\">
          ";
        // line 25
        if (($context["returns"] ?? null)) {
            // line 26
            yield "            <div class=\"table-responsive mb-0\">
              <table class=\"table table-bordered table-hover mb-0\">
                <thead>
                  <tr>
                    <th class=\"text-end\">";
            // line 30
            yield ($context["column_return_id"] ?? null);
            yield "</th>
                    <th>";
            // line 31
            yield ($context["column_status"] ?? null);
            yield "</th>
                    <th>";
            // line 32
            yield ($context["column_date_added"] ?? null);
            yield "</th>
                    <th class=\"text-end\">";
            // line 33
            yield ($context["column_order_id"] ?? null);
            yield "</th>
                    <th class=\"text-end\"></th>
                  </tr>
                </thead>
                <tbody>
                  ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["returns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
                // line 39
                yield "                    <tr>
                      <td class=\"text-end\">#";
                // line 40
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return"], "return_id", [], "any", false, false, false, 40);
                yield "</td>
                      <td>";
                // line 41
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return"], "status", [], "any", false, false, false, 41);
                yield "</td>
                      <td>";
                // line 42
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return"], "date_added", [], "any", false, false, false, 42);
                yield "</td>
                      <td class=\"text-end\">";
                // line 43
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return"], "order_id", [], "any", false, false, false, 43);
                yield "</td>
                      <td class=\"text-end\">
                        <a href=\"";
                // line 45
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return"], "href", [], "any", false, false, false, 45);
                yield "\"
                           data-bs-toggle=\"tooltip\"
                           title=\"";
                // line 47
                yield ($context["button_view"] ?? null);
                yield "\"
                           class=\"btn btn-info\">
                          <i class=\"fa-solid fa-eye\"></i>
                        </a>
                      </td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['return'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "                </tbody>
              </table>
            </div>

            <div class=\"row mt-3\">
              <div class=\"col-sm-6 text-start\">";
            // line 59
            yield ($context["pagination"] ?? null);
            yield "</div>
              <div class=\"col-sm-6 text-end\">";
            // line 60
            yield ($context["results"] ?? null);
            yield "</div>
            </div>
          ";
        } else {
            // line 63
            yield "            <p class=\"mb-0 text-muted\">
              ";
            // line 64
            yield ($context["text_no_results"] ?? null);
            yield "
            </p>
          ";
        }
        // line 67
        yield "
          <div class=\"mt-3 text-end\">
            <a href=\"";
        // line 69
        yield ($context["continue"] ?? null);
        yield "\" class=\"bareq-btn-main\">
              ";
        // line 70
        yield ($context["button_continue"] ?? null);
        yield "
            </a>
          </div>
        </div>
      </div>

      ";
        // line 76
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>

    ";
        // line 79
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>
";
        // line 82
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
        return "catalog/view/template/account/returns_list.twig";
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
        return array (  221 => 82,  215 => 79,  209 => 76,  200 => 70,  196 => 69,  192 => 67,  186 => 64,  183 => 63,  177 => 60,  173 => 59,  166 => 54,  153 => 47,  148 => 45,  143 => 43,  139 => 42,  135 => 41,  131 => 40,  128 => 39,  124 => 38,  116 => 33,  112 => 32,  108 => 31,  104 => 30,  98 => 26,  96 => 25,  88 => 20,  83 => 18,  80 => 17,  74 => 13,  68 => 10,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-return\" class=\"container\">
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
            {{ text_no_results }}
          </p>
        </div>

        <div class=\"bareq-login-card bareq-login-card--main\">
          {% if returns %}
            <div class=\"table-responsive mb-0\">
              <table class=\"table table-bordered table-hover mb-0\">
                <thead>
                  <tr>
                    <th class=\"text-end\">{{ column_return_id }}</th>
                    <th>{{ column_status }}</th>
                    <th>{{ column_date_added }}</th>
                    <th class=\"text-end\">{{ column_order_id }}</th>
                    <th class=\"text-end\"></th>
                  </tr>
                </thead>
                <tbody>
                  {% for return in returns %}
                    <tr>
                      <td class=\"text-end\">#{{ return.return_id }}</td>
                      <td>{{ return.status }}</td>
                      <td>{{ return.date_added }}</td>
                      <td class=\"text-end\">{{ return.order_id }}</td>
                      <td class=\"text-end\">
                        <a href=\"{{ return.href }}\"
                           data-bs-toggle=\"tooltip\"
                           title=\"{{ button_view }}\"
                           class=\"btn btn-info\">
                          <i class=\"fa-solid fa-eye\"></i>
                        </a>
                      </td>
                    </tr>
                  {% endfor %}
                </tbody>
              </table>
            </div>

            <div class=\"row mt-3\">
              <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
              <div class=\"col-sm-6 text-end\">{{ results }}</div>
            </div>
          {% else %}
            <p class=\"mb-0 text-muted\">
              {{ text_no_results }}
            </p>
          {% endif %}

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
", "catalog/view/template/account/returns_list.twig", "C:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\account\\returns_list.twig");
    }
}
