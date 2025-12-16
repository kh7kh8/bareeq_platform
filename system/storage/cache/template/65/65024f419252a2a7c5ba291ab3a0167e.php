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

/* catalog/view/template/account/reward.twig */
class __TwigTemplate_7649ddaf01515321f7ead2874d6856e8 extends Template
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
<div id=\"account-reward\" class=\"container\">
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
        yield " <b>";
        yield ($context["total"] ?? null);
        yield "</b>.
          </p>
        </div>

        ";
        // line 25
        yield "        <div class=\"bareq-login-card bareq-login-card--main\">

          <div class=\"table-responsive mb-0\">
            <table class=\"table table-bordered table-hover mb-0\">
              <thead>
                <tr>
                  <th>";
        // line 31
        yield ($context["column_date_added"] ?? null);
        yield "</th>
                  <th>";
        // line 32
        yield ($context["column_description"] ?? null);
        yield "</th>
                  <th class=\"text-end\">";
        // line 33
        yield ($context["column_points"] ?? null);
        yield "</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 37
        if (($context["rewards"] ?? null)) {
            // line 38
            yield "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rewards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reward"]) {
                // line 39
                yield "                    <tr>
                      <td>";
                // line 40
                yield CoreExtension::getAttribute($this->env, $this->source, $context["reward"], "date_added", [], "any", false, false, false, 40);
                yield "</td>
                      <td>
                        ";
                // line 42
                if (CoreExtension::getAttribute($this->env, $this->source, $context["reward"], "order_id", [], "any", false, false, false, 42)) {
                    // line 43
                    yield "                          <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["reward"], "href", [], "any", false, false, false, 43);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["reward"], "description", [], "any", false, false, false, 43);
                    yield "</a>
                        ";
                } else {
                    // line 45
                    yield "                          ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["reward"], "description", [], "any", false, false, false, 45);
                    yield "
                        ";
                }
                // line 47
                yield "                      </td>
                      <td class=\"text-end\">";
                // line 48
                yield CoreExtension::getAttribute($this->env, $this->source, $context["reward"], "points", [], "any", false, false, false, 48);
                yield "</td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reward'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "                ";
        } else {
            // line 52
            yield "                  <tr>
                    <td colspan=\"3\" class=\"text-center text-muted py-4\">
                      ";
            // line 54
            yield ($context["text_no_results"] ?? null);
            yield "
                    </td>
                  </tr>
                ";
        }
        // line 58
        yield "              </tbody>
            </table>
          </div>

          <div class=\"row mt-3\">
            <div class=\"col-sm-6 text-start\">";
        // line 63
        yield ($context["pagination"] ?? null);
        yield "</div>
            <div class=\"col-sm-6 text-end\">";
        // line 64
        yield ($context["results"] ?? null);
        yield "</div>
          </div>

          <div class=\"mt-3 text-end\">
            <a href=\"";
        // line 68
        yield ($context["continue"] ?? null);
        yield "\" class=\"bareq-btn-main\">
              ";
        // line 69
        yield ($context["button_continue"] ?? null);
        yield "
            </a>
          </div>
        </div>
      </div>

      ";
        // line 75
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>

    ";
        // line 78
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>
";
        // line 81
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
        return "catalog/view/template/account/reward.twig";
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
        return array (  220 => 81,  214 => 78,  208 => 75,  199 => 69,  195 => 68,  188 => 64,  184 => 63,  177 => 58,  170 => 54,  166 => 52,  163 => 51,  154 => 48,  151 => 47,  145 => 45,  137 => 43,  135 => 42,  130 => 40,  127 => 39,  122 => 38,  120 => 37,  113 => 33,  109 => 32,  105 => 31,  97 => 25,  88 => 20,  83 => 18,  80 => 17,  74 => 13,  68 => 10,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-reward\" class=\"container\">
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
            {{ text_total }} <b>{{ total }}</b>.
          </p>
        </div>

        {# الكرت الداخلي مع الجدول دائماً #}
        <div class=\"bareq-login-card bareq-login-card--main\">

          <div class=\"table-responsive mb-0\">
            <table class=\"table table-bordered table-hover mb-0\">
              <thead>
                <tr>
                  <th>{{ column_date_added }}</th>
                  <th>{{ column_description }}</th>
                  <th class=\"text-end\">{{ column_points }}</th>
                </tr>
              </thead>
              <tbody>
                {% if rewards %}
                  {% for reward in rewards %}
                    <tr>
                      <td>{{ reward.date_added }}</td>
                      <td>
                        {% if reward.order_id %}
                          <a href=\"{{ reward.href }}\">{{ reward.description }}</a>
                        {% else %}
                          {{ reward.description }}
                        {% endif %}
                      </td>
                      <td class=\"text-end\">{{ reward.points }}</td>
                    </tr>
                  {% endfor %}
                {% else %}
                  <tr>
                    <td colspan=\"3\" class=\"text-center text-muted py-4\">
                      {{ text_no_results }}
                    </td>
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
", "catalog/view/template/account/reward.twig", "C:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\account\\reward.twig");
    }
}
