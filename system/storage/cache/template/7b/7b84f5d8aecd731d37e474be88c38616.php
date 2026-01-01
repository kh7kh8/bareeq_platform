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

/* catalog/view/template/account/wishlist_list.twig */
class __TwigTemplate_17791dfb1527fe1d16a8065a307a3e2d extends Template
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
        // line 52
        yield "

";
        // line 54
        if (($context["products"] ?? null)) {
            // line 55
            yield "  <div class=\"bareeq-wishlist-table-wrap\">
    <div class=\"table-responsive\">
      <table class=\"table bareeq-wishlist-table mb-0\">
        <thead>
          <tr>
            <th class=\"text-center bareeq-th-image\">";
            // line 60
            yield ($context["column_image"] ?? null);
            yield "</th>
            <th>";
            // line 61
            yield ($context["column_name"] ?? null);
            yield "</th>
            <th>";
            // line 62
            yield ($context["column_model"] ?? null);
            yield "</th>
            <th class=\"text-end\">";
            // line 63
            yield ($context["column_stock"] ?? null);
            yield "</th>
            <th class=\"text-end\">";
            // line 64
            yield ($context["column_price"] ?? null);
            yield "</th>
            <th class=\"text-end bareeq-th-action\">";
            // line 65
            yield ($context["column_action"] ?? null);
            yield "</th>
          </tr>
        </thead>

        <tbody>
          ";
            // line 70
            $context["product_row"] = 0;
            // line 71
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 72
                yield "            <tr>
              <td class=\"text-center\">
                ";
                // line 74
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 74)) {
                    // line 75
                    yield "                  <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 75);
                    yield "\" class=\"bareeq-wish-thumb\">
                    <img src=\"";
                    // line 76
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 76);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 76);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 76);
                    yield "\"/>
                  </a>
                ";
                }
                // line 79
                yield "              </td>

              <td>
                <div class=\"bareeq-wish-name\">
                  <a href=\"";
                // line 83
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 83);
                yield "\" class=\"bareeq-wish-link\">
                    ";
                // line 84
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 84);
                yield "
                  </a>
                </div>
              </td>

              <td class=\"bareeq-wish-text\">
                ";
                // line 90
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 90);
                yield "
              </td>

              <td class=\"text-end bareeq-wish-text\">
                ";
                // line 94
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 94);
                yield "
              </td>

              <td class=\"text-end text-nowrap bareeq-wish-text\">
                ";
                // line 98
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 98)) {
                    // line 99
                    yield "                  <div class=\"bareeq-wish-price\">
                    ";
                    // line 100
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 100)) {
                        // line 101
                        yield "                      <x-currency code=\"";
                        yield ($context["currency"] ?? null);
                        yield "\" amount=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 101);
                        yield "\"></x-currency>
                    ";
                    } else {
                        // line 103
                        yield "                      <strong><x-currency code=\"";
                        yield ($context["currency"] ?? null);
                        yield "\" amount=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 103);
                        yield "\"></x-currency></strong>
                      <s class=\"bareeq-wish-price-old\">
                        <x-currency code=\"";
                        // line 105
                        yield ($context["currency"] ?? null);
                        yield "\" amount=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 105);
                        yield "\"></x-currency>
                      </s>
                    ";
                    }
                    // line 108
                    yield "                  </div>
                ";
                }
                // line 110
                yield "              </td>

              <td class=\"text-end text-nowrap bareeq-wish-actions\">
                <button type=\"submit\"
        form=\"form-product-";
                // line 114
                yield ($context["product_row"] ?? null);
                yield "\"
        class=\"bareeq-btn-main\">
  ";
                // line 116
                yield ($context["button_cart"] ?? null);
                yield "
</button>


                <a href=\"";
                // line 120
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 120);
                yield "\" class=\"btn bareeq-btn-soft\">
                  ";
                // line 121
                yield ($context["button_remove"] ?? null);
                yield "
                </a>
              </td>
            </tr>

            ";
                // line 127
                yield "            <form id=\"form-product-";
                yield ($context["product_row"] ?? null);
                yield "\"
                  action=\"";
                // line 128
                yield ($context["cart_add"] ?? null);
                yield "\"
                  method=\"post\"
                  data-oc-toggle=\"ajax\"
                  data-oc-load=\"";
                // line 131
                yield ($context["cart"] ?? null);
                yield "\"
                  data-oc-target=\"#cart\">
              <input type=\"hidden\" name=\"product_id\" value=\"";
                // line 133
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 133);
                yield "\"/>
              <input type=\"hidden\" name=\"quantity\" value=\"";
                // line 134
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 134);
                yield "\"/>
            </form>

            ";
                // line 137
                $context["product_row"] = (($context["product_row"] ?? null) + 1);
                // line 138
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            yield "        </tbody>
      </table>
    </div>
  </div>
";
        } else {
            // line 144
            yield "  <p>";
            yield ($context["text_no_results"] ?? null);
            yield "</p>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/wishlist_list.twig";
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
        return array (  250 => 144,  243 => 139,  237 => 138,  235 => 137,  229 => 134,  225 => 133,  220 => 131,  214 => 128,  209 => 127,  201 => 121,  197 => 120,  190 => 116,  185 => 114,  179 => 110,  175 => 108,  167 => 105,  159 => 103,  151 => 101,  149 => 100,  146 => 99,  144 => 98,  137 => 94,  130 => 90,  121 => 84,  117 => 83,  111 => 79,  101 => 76,  96 => 75,  94 => 74,  90 => 72,  85 => 71,  83 => 70,  75 => 65,  71 => 64,  67 => 63,  63 => 62,  59 => 61,  55 => 60,  48 => 55,  46 => 54,  42 => 52,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# {% if products %}
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\">{{ column_image }}</th>
          <th>{{ column_name }}</th>
          <th>{{ column_model }}</th>
          <th class=\"text-end\">{{ column_stock }}</th>
          <th class=\"text-end\">{{ column_price }}</th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% set product_row = 0 %}
        {% for product in products %}
          <tr>
            <td class=\"text-center\">{% if product.thumb %}<a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\"/></a>{% endif %}</td>
            <td><a href=\"{{ product.href }}\">{{ product.name }}</a>
              <form id=\"form-product-{{ product_row }}\" action=\"{{ cart_add }}\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ cart }}\" data-oc-target=\"#cart\">
                <input type=\"hidden\" name=\"product_id\" value=\"{{ product.product_id }}\"/>
                <input type=\"hidden\" name=\"quantity\" value=\"{{ product.minimum }}\"/>
              </form>
            </td>
            <td>{{ product.model }}</td>
            <td class=\"text-end\">{{ product.stock }}</td>
            <td class=\"text-end text-nowrap\">
              {% if product.price %}
                <div class=\"price\">
                  {% if not product.special %}
                    <x-currency code=\"{{ currency }}\" amount=\"{{ product.price }}\"></x-currency>
                  {% else %}
                    <strong><x-currency code=\"{{ currency }}\" amount=\"{{ product.special }}\"></x-currency></strong> <s><x-currency code=\"{{ currency }}\" amount=\"{{ product.price }}\"></x-currency></s>
                  {% endif %}
                </div>
              {% endif %}</td>
            <td class=\"text-end text-nowrap\" style=\"width: 1px;\">
              <div class=\"d-grid\">
                <button type=\"submit\" form=\"form-product-{{ product_row }}\" class=\"btn btn-primary mb-1\">{{ button_cart }}</button>
                <a href=\"{{ product.remove }}\" class=\"btn btn-danger\">{{ button_remove }}</a>
              </div>
            </td>
          </tr>
          {% set product_row = product_row + 1 %}
        {% endfor %}
      </tbody>
    </table>
  </div>
{% else %}
  <p>{{ text_no_results }}</p>
{% endif %} #}


{% if products %}
  <div class=\"bareeq-wishlist-table-wrap\">
    <div class=\"table-responsive\">
      <table class=\"table bareeq-wishlist-table mb-0\">
        <thead>
          <tr>
            <th class=\"text-center bareeq-th-image\">{{ column_image }}</th>
            <th>{{ column_name }}</th>
            <th>{{ column_model }}</th>
            <th class=\"text-end\">{{ column_stock }}</th>
            <th class=\"text-end\">{{ column_price }}</th>
            <th class=\"text-end bareeq-th-action\">{{ column_action }}</th>
          </tr>
        </thead>

        <tbody>
          {% set product_row = 0 %}
          {% for product in products %}
            <tr>
              <td class=\"text-center\">
                {% if product.thumb %}
                  <a href=\"{{ product.href }}\" class=\"bareeq-wish-thumb\">
                    <img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\"/>
                  </a>
                {% endif %}
              </td>

              <td>
                <div class=\"bareeq-wish-name\">
                  <a href=\"{{ product.href }}\" class=\"bareeq-wish-link\">
                    {{ product.name }}
                  </a>
                </div>
              </td>

              <td class=\"bareeq-wish-text\">
                {{ product.model }}
              </td>

              <td class=\"text-end bareeq-wish-text\">
                {{ product.stock }}
              </td>

              <td class=\"text-end text-nowrap bareeq-wish-text\">
                {% if product.price %}
                  <div class=\"bareeq-wish-price\">
                    {% if not product.special %}
                      <x-currency code=\"{{ currency }}\" amount=\"{{ product.price }}\"></x-currency>
                    {% else %}
                      <strong><x-currency code=\"{{ currency }}\" amount=\"{{ product.special }}\"></x-currency></strong>
                      <s class=\"bareeq-wish-price-old\">
                        <x-currency code=\"{{ currency }}\" amount=\"{{ product.price }}\"></x-currency>
                      </s>
                    {% endif %}
                  </div>
                {% endif %}
              </td>

              <td class=\"text-end text-nowrap bareeq-wish-actions\">
                <button type=\"submit\"
        form=\"form-product-{{ product_row }}\"
        class=\"bareeq-btn-main\">
  {{ button_cart }}
</button>


                <a href=\"{{ product.remove }}\" class=\"btn bareeq-btn-soft\">
                  {{ button_remove }}
                </a>
              </td>
            </tr>

            {# الفورم لازم يبقى كما هو #}
            <form id=\"form-product-{{ product_row }}\"
                  action=\"{{ cart_add }}\"
                  method=\"post\"
                  data-oc-toggle=\"ajax\"
                  data-oc-load=\"{{ cart }}\"
                  data-oc-target=\"#cart\">
              <input type=\"hidden\" name=\"product_id\" value=\"{{ product.product_id }}\"/>
              <input type=\"hidden\" name=\"quantity\" value=\"{{ product.minimum }}\"/>
            </form>

            {% set product_row = product_row + 1 %}
          {% endfor %}
        </tbody>
      </table>
    </div>
  </div>
{% else %}
  <p>{{ text_no_results }}</p>
{% endif %}
", "catalog/view/template/account/wishlist_list.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\account\\wishlist_list.twig");
    }
}
