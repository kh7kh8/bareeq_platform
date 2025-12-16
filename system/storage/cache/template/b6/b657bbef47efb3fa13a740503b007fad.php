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

/* catalog/view/template/common/cart.twig */
class __TwigTemplate_ffb0c88b6ae76fad9c3696deea37ef7f extends Template
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
        yield "<div id=\"cart\" class=\"header-cart-dropdown dropdown\">
  ";
        // line 3
        yield "  <button type=\"button\"
          data-bs-toggle=\"dropdown\"
          class=\"cart-toggle-btn d-flex align-items-center\">
    <span class=\"cart-icon-wrap\">
      <i class=\"fa-solid fa-cart-shopping\"></i>
    </span>
    <span class=\"cart-toggle-label\">
      ";
        // line 10
        yield ($context["text_items"] ?? null);
        yield "
    </span>
  </button>

  <ul class=\"dropdown-menu dropdown-menu-end cart-dropdown-menu p-0\">
    ";
        // line 15
        if (($context["products"] ?? null)) {
            // line 16
            yield "      <li class=\"p-3\">
        <div class=\"cart-items-list\">
          ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 19
                yield "            <div class=\"cart-item\">
              <div class=\"cart-item-thumb\">
                ";
                // line 21
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21)) {
                    // line 22
                    yield "                  <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
                    yield "\">
                    <img src=\"";
                    // line 23
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 23);
                    yield "\"
                         alt=\"";
                    // line 24
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                    yield "\"
                         title=\"";
                    // line 25
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                    yield "\">
                  </a>
                ";
                }
                // line 28
                yield "              </div>

              <div class=\"cart-item-info\">
                <a href=\"";
                // line 31
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 31);
                yield "\" class=\"cart-item-name\">
                  ";
                // line 32
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32);
                yield "
                </a>

                <ul class=\"cart-item-meta list-unstyled mb-0\">
                  <li class=\"cart-item-model\">
                    <small>";
                // line 37
                yield ($context["text_model"] ?? null);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 37);
                yield "</small>
                  </li>

                  ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 40));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 41
                    yield "                    <li>
                      <small>";
                    // line 42
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 42);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 42);
                    yield "</small>
                    </li>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                yield "
                  ";
                // line 46
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 46)) {
                    // line 47
                    yield "                    <li>
                      <small>";
                    // line 48
                    yield ($context["text_subscription"] ?? null);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 48);
                    yield "</small>
                    </li>
                  ";
                }
                // line 51
                yield "
                  ";
                // line 52
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 52)) {
                    // line 53
                    yield "                    <li>
                      <small>";
                    // line 54
                    yield ($context["text_points"] ?? null);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 54);
                    yield "</small>
                    </li>
                  ";
                }
                // line 57
                yield "                </ul>
              </div>

              <div class=\"cart-item-side text-end\">
                <div class=\"cart-item-qty\">
                  x ";
                // line 62
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 62);
                yield "
                </div>
                <div class=\"cart-item-price\">
                  <x-currency code=\"";
                // line 65
                yield ($context["currency"] ?? null);
                yield "\" amount=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 65);
                yield "\"></x-currency>
                </div>

                <form action=\"";
                // line 68
                yield ($context["remove"] ?? null);
                yield "\"
                      method=\"post\"
                      data-oc-toggle=\"ajax\"
                      data-oc-load=\"";
                // line 71
                yield ($context["list"] ?? null);
                yield "\"
                      data-oc-target=\"#cart\"
                      class=\"cart-item-remove\">
                  <input type=\"hidden\" name=\"key\" value=\"";
                // line 74
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 74);
                yield "\">
                  <button type=\"submit\"
                          data-bs-toggle=\"tooltip\"
                          title=\"";
                // line 77
                yield ($context["button_remove"] ?? null);
                yield "\"
                          class=\"cart-remove-btn\">
                    <i class=\"fa-solid fa-circle-xmark\"></i>
                  </button>
                </form>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            yield "        </div>

        <div class=\"cart-summary\">
          ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 89
                yield "            <div class=\"cart-summary-row\">
              <span class=\"cart-summary-title\">";
                // line 90
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 90);
                yield "</span>
              <span class=\"cart-summary-value\">
                <x-currency code=\"";
                // line 92
                yield ($context["currency"] ?? null);
                yield "\" amount=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "value", [], "any", false, false, false, 92);
                yield "\"></x-currency>
              </span>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            yield "        </div>

        <div class=\"cart-actions\">
          <a href=\"";
            // line 99
            yield ($context["cart"] ?? null);
            yield "\" class=\"cart-action-btn cart-action-btn--outline\">
            <i class=\"fa-solid fa-cart-shopping\"></i>
            <span>";
            // line 101
            yield ($context["text_cart"] ?? null);
            yield "</span>
          </a>

          <a href=\"";
            // line 104
            yield ($context["checkout"] ?? null);
            yield "\" class=\"cart-action-btn cart-action-btn--primary\">
            <i class=\"fa-solid fa-share\"></i>
            <span>";
            // line 106
            yield ($context["text_checkout"] ?? null);
            yield "</span>
          </a>
        </div>
      </li>
    ";
        } else {
            // line 111
            yield "      <li class=\"text-center p-4\">";
            yield ($context["text_no_results"] ?? null);
            yield "</li>
    ";
        }
        // line 113
        yield "  </ul>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/cart.twig";
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
        return array (  289 => 113,  283 => 111,  275 => 106,  270 => 104,  264 => 101,  259 => 99,  254 => 96,  242 => 92,  237 => 90,  234 => 89,  230 => 88,  225 => 85,  211 => 77,  205 => 74,  199 => 71,  193 => 68,  185 => 65,  179 => 62,  172 => 57,  164 => 54,  161 => 53,  159 => 52,  156 => 51,  148 => 48,  145 => 47,  143 => 46,  140 => 45,  129 => 42,  126 => 41,  122 => 40,  114 => 37,  106 => 32,  102 => 31,  97 => 28,  91 => 25,  87 => 24,  83 => 23,  78 => 22,  76 => 21,  72 => 19,  68 => 18,  64 => 16,  62 => 15,  54 => 10,  45 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"cart\" class=\"header-cart-dropdown dropdown\">
  {# زر فتح السلة في الهيدر #}
  <button type=\"button\"
          data-bs-toggle=\"dropdown\"
          class=\"cart-toggle-btn d-flex align-items-center\">
    <span class=\"cart-icon-wrap\">
      <i class=\"fa-solid fa-cart-shopping\"></i>
    </span>
    <span class=\"cart-toggle-label\">
      {{ text_items }}
    </span>
  </button>

  <ul class=\"dropdown-menu dropdown-menu-end cart-dropdown-menu p-0\">
    {% if products %}
      <li class=\"p-3\">
        <div class=\"cart-items-list\">
          {% for product in products %}
            <div class=\"cart-item\">
              <div class=\"cart-item-thumb\">
                {% if product.thumb %}
                  <a href=\"{{ product.href }}\">
                    <img src=\"{{ product.thumb }}\"
                         alt=\"{{ product.name }}\"
                         title=\"{{ product.name }}\">
                  </a>
                {% endif %}
              </div>

              <div class=\"cart-item-info\">
                <a href=\"{{ product.href }}\" class=\"cart-item-name\">
                  {{ product.name }}
                </a>

                <ul class=\"cart-item-meta list-unstyled mb-0\">
                  <li class=\"cart-item-model\">
                    <small>{{ text_model }}: {{ product.model }}</small>
                  </li>

                  {% for option in product.option %}
                    <li>
                      <small>{{ option.name }}: {{ option.value }}</small>
                    </li>
                  {% endfor %}

                  {% if product.subscription %}
                    <li>
                      <small>{{ text_subscription }}: {{ product.subscription }}</small>
                    </li>
                  {% endif %}

                  {% if product.reward %}
                    <li>
                      <small>{{ text_points }}: {{ product.reward }}</small>
                    </li>
                  {% endif %}
                </ul>
              </div>

              <div class=\"cart-item-side text-end\">
                <div class=\"cart-item-qty\">
                  x {{ product.quantity }}
                </div>
                <div class=\"cart-item-price\">
                  <x-currency code=\"{{ currency }}\" amount=\"{{ product.total }}\"></x-currency>
                </div>

                <form action=\"{{ remove }}\"
                      method=\"post\"
                      data-oc-toggle=\"ajax\"
                      data-oc-load=\"{{ list }}\"
                      data-oc-target=\"#cart\"
                      class=\"cart-item-remove\">
                  <input type=\"hidden\" name=\"key\" value=\"{{ product.cart_id }}\">
                  <button type=\"submit\"
                          data-bs-toggle=\"tooltip\"
                          title=\"{{ button_remove }}\"
                          class=\"cart-remove-btn\">
                    <i class=\"fa-solid fa-circle-xmark\"></i>
                  </button>
                </form>
              </div>
            </div>
          {% endfor %}
        </div>

        <div class=\"cart-summary\">
          {% for total in totals %}
            <div class=\"cart-summary-row\">
              <span class=\"cart-summary-title\">{{ total.title }}</span>
              <span class=\"cart-summary-value\">
                <x-currency code=\"{{ currency }}\" amount=\"{{ total.value }}\"></x-currency>
              </span>
            </div>
          {% endfor %}
        </div>

        <div class=\"cart-actions\">
          <a href=\"{{ cart }}\" class=\"cart-action-btn cart-action-btn--outline\">
            <i class=\"fa-solid fa-cart-shopping\"></i>
            <span>{{ text_cart }}</span>
          </a>

          <a href=\"{{ checkout }}\" class=\"cart-action-btn cart-action-btn--primary\">
            <i class=\"fa-solid fa-share\"></i>
            <span>{{ text_checkout }}</span>
          </a>
        </div>
      </li>
    {% else %}
      <li class=\"text-center p-4\">{{ text_no_results }}</li>
    {% endif %}
  </ul>
</div>
", "catalog/view/template/common/cart.twig", "C:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\common\\cart.twig");
    }
}
