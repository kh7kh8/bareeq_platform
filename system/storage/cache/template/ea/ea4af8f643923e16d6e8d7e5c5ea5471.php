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

/* catalog/view/template/account/subscription_list.twig */
class __TwigTemplate_cae1ab5e9b7a2e7bed253813cbd5ab0b extends Template
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
<div id=\"account-subscription\" class=\"container\">
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

      ";
        // line 16
        yield "      <div class=\"bareq-login-wrapper\">

        ";
        // line 19
        yield "        <div class=\"mb-4\">
          <h1 class=\"bareq-login-title\">";
        // line 20
        yield ($context["heading_title"] ?? null);
        yield "</h1>
          <p class=\"bareq-login-subtitle\">
            Manage your subscriptions and recurring orders in one place.
          </p>
        </div>

        ";
        // line 27
        yield "        <div class=\"bareq-login-card bareq-login-card--main\">

          ";
        // line 29
        if (($context["subscriptions"] ?? null)) {
            // line 30
            yield "            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover mb-0\">
                <thead>
                  <tr>
                    <th class=\"text-end\">";
            // line 34
            yield ($context["column_subscription_id"] ?? null);
            yield "</th>
                    <th class=\"text-end\">";
            // line 35
            yield ($context["column_product_total"] ?? null);
            yield "</th>
                    <th>";
            // line 36
            yield ($context["column_description"] ?? null);
            yield "</th>
                    <th>";
            // line 37
            yield ($context["column_status"] ?? null);
            yield "</th>
                    <th>";
            // line 38
            yield ($context["column_date_added"] ?? null);
            yield "</th>
                    <th class=\"text-end\"></th>
                  </tr>
                </thead>
                <tbody>
                  ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscriptions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
                // line 44
                yield "                    <tr>
                      <td class=\"text-end\">#";
                // line 45
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "subscription_id", [], "any", false, false, false, 45);
                yield "</td>
                      <td class=\"text-end\">";
                // line 46
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "product_total", [], "any", false, false, false, 46);
                yield "</td>
                      <td>";
                // line 47
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "description", [], "any", false, false, false, 47);
                yield "</td>
                      <td>";
                // line 48
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 48);
                yield "</td>
                      <td>";
                // line 49
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "date_added", [], "any", false, false, false, 49);
                yield "</td>
                      <td class=\"text-end\">
                        <a href=\"";
                // line 51
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription"], "view", [], "any", false, false, false, 51);
                yield "\"
                           data-bs-toggle=\"tooltip\"
                           title=\"";
                // line 53
                yield ($context["button_view"] ?? null);
                yield "\"
                           class=\"bareq-btn-main btn btn-sm border-0\">
                          <i class=\"fa-solid fa-eye me-1\"></i>
                          ";
                // line 56
                yield ($context["button_view"] ?? null);
                yield "
                        </a>
                      </td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subscription'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            yield "                </tbody>
              </table>
            </div>

            <div class=\"row mt-3\">
              <div class=\"col-sm-6 text-start\">";
            // line 66
            yield ($context["pagination"] ?? null);
            yield "</div>
              <div class=\"col-sm-6 text-end\">";
            // line 67
            yield ($context["results"] ?? null);
            yield "</div>
            </div>

          ";
        } else {
            // line 71
            yield "            ";
            // line 72
            yield "            <div class=\"py-4\">
              <div class=\"row align-items-center\">
                <div class=\"col-md-8 text-md-end text-center mb-3 mb-md-0\">
                  <p class=\"mb-0 text-muted\">
                    ";
            // line 76
            yield ($context["text_no_subscription"] ?? null);
            yield "
                  </p>
                </div>
                <div class=\"col-md-4 text-md-start text-center mt-2 mt-md-0\">
                  <a href=\"";
            // line 80
            yield ($context["continue"] ?? null);
            yield "\" class=\"bareq-btn-main\">
                    ";
            // line 81
            yield ($context["button_continue"] ?? null);
            yield "
                  </a>
                </div>
              </div>
            </div>
          ";
        }
        // line 87
        yield "
        </div>
      </div>

      ";
        // line 91
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>

    ";
        // line 94
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>
";
        // line 97
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
        return "catalog/view/template/account/subscription_list.twig";
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
        return array (  245 => 97,  239 => 94,  233 => 91,  227 => 87,  218 => 81,  214 => 80,  207 => 76,  201 => 72,  199 => 71,  192 => 67,  188 => 66,  181 => 61,  170 => 56,  164 => 53,  159 => 51,  154 => 49,  150 => 48,  146 => 47,  142 => 46,  138 => 45,  135 => 44,  131 => 43,  123 => 38,  119 => 37,  115 => 36,  111 => 35,  107 => 34,  101 => 30,  99 => 29,  95 => 27,  86 => 20,  83 => 19,  79 => 16,  74 => 13,  68 => 10,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-subscription\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>

  <div class=\"row\">
    {{ column_left }}

    <div id=\"content\" class=\"col\">
      {{ content_top }}

      {# الكرت العام – نفس ستايل صفحات بريق الأخرى #}
      <div class=\"bareq-login-wrapper\">

        {# رأس الصفحة #}
        <div class=\"mb-4\">
          <h1 class=\"bareq-login-title\">{{ heading_title }}</h1>
          <p class=\"bareq-login-subtitle\">
            Manage your subscriptions and recurring orders in one place.
          </p>
        </div>

        {# كرت المحتوى الداخلي #}
        <div class=\"bareq-login-card bareq-login-card--main\">

          {% if subscriptions %}
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover mb-0\">
                <thead>
                  <tr>
                    <th class=\"text-end\">{{ column_subscription_id }}</th>
                    <th class=\"text-end\">{{ column_product_total }}</th>
                    <th>{{ column_description }}</th>
                    <th>{{ column_status }}</th>
                    <th>{{ column_date_added }}</th>
                    <th class=\"text-end\"></th>
                  </tr>
                </thead>
                <tbody>
                  {% for subscription in subscriptions %}
                    <tr>
                      <td class=\"text-end\">#{{ subscription.subscription_id }}</td>
                      <td class=\"text-end\">{{ subscription.product_total }}</td>
                      <td>{{ subscription.description }}</td>
                      <td>{{ subscription.status }}</td>
                      <td>{{ subscription.date_added }}</td>
                      <td class=\"text-end\">
                        <a href=\"{{ subscription.view }}\"
                           data-bs-toggle=\"tooltip\"
                           title=\"{{ button_view }}\"
                           class=\"bareq-btn-main btn btn-sm border-0\">
                          <i class=\"fa-solid fa-eye me-1\"></i>
                          {{ button_view }}
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
            {# حالة لا توجد اشتراكات – نفس شكل Downloads/Wishlist #}
            <div class=\"py-4\">
              <div class=\"row align-items-center\">
                <div class=\"col-md-8 text-md-end text-center mb-3 mb-md-0\">
                  <p class=\"mb-0 text-muted\">
                    {{ text_no_subscription }}
                  </p>
                </div>
                <div class=\"col-md-4 text-md-start text-center mt-2 mt-md-0\">
                  <a href=\"{{ continue }}\" class=\"bareq-btn-main\">
                    {{ button_continue }}
                  </a>
                </div>
              </div>
            </div>
          {% endif %}

        </div>
      </div>

      {{ content_bottom }}
    </div>

    {{ column_right }}
  </div>
</div>
{{ footer }}
", "catalog/view/template/account/subscription_list.twig", "C:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\account\\subscription_list.twig");
    }
}
