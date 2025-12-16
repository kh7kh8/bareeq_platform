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

/* extension/opencart/catalog/view/template/module/featured.twig */
class __TwigTemplate_c2775d8fabc8d0991a73d2175de10fce extends Template
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
        yield "<section id=\"stores-section\" class=\"section-stores\">

  <div class=\"stores-container\">

    ";
        // line 6
        yield "    <div class=\"stores-header\">
      <span class=\"stores-badge\">
        ";
        // line 8
        yield ((array_key_exists("text_stores_badge", $context)) ? (Twig\Extension\CoreExtension::default(($context["text_stores_badge"] ?? null), "المتاجر")) : ("المتاجر"));
        yield "
      </span>

      <h2 class=\"stores-title\">
        ";
        // line 12
        yield ((array_key_exists("heading_title", $context)) ? (Twig\Extension\CoreExtension::default(($context["heading_title"] ?? null), "اكتشف عالم متاجر بريق")) : ("اكتشف عالم متاجر بريق"));
        yield "
      </h2>

      <p class=\"stores-subtitle\">
        ";
        // line 16
        yield ((array_key_exists("text_stores_subtitle", $context)) ? (Twig\Extension\CoreExtension::default(($context["text_stores_subtitle"] ?? null), "مجموعة مميزة من المتاجر الرقمية وتجارب التسوق الفريدة.")) : ("مجموعة مميزة من المتاجر الرقمية وتجارب التسوق الفريدة."));
        yield "
      </p>
    </div>

    ";
        // line 21
        yield "    <div class=\"stores-grid\">
      ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 23
            yield "
        <article class=\"store-card\">
          ";
            // line 26
            yield "          <div class=\"store-card-image-wrapper\">
            <a href=\"";
            // line 27
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 27);
            yield "\">
              <img src=\"";
            // line 28
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "thumb", [], "any", false, false, false, 28);
            yield "\" alt=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 28);
            yield "\" class=\"store-card-image\">
            </a>

            ";
            // line 32
            yield "            <button type=\"button\"
                    class=\"store-fav-btn\"
                    data-store-id=\"";
            // line 34
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 34);
            yield "\">
              <i class=\"fa-regular fa-heart\"></i>
            </button>

            ";
            // line 39
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["store"], "badge", [], "any", false, false, false, 39)) {
                // line 40
                yield "              <span class=\"store-badge-top\">
                ";
                // line 41
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "badge", [], "any", false, false, false, 41);
                yield "
              </span>
            ";
            }
            // line 44
            yield "          </div>

          ";
            // line 47
            yield "          <div class=\"store-card-body\">

            <div class=\"store-meta\">
              ";
            // line 50
            if (CoreExtension::getAttribute($this->env, $this->source, $context["store"], "rating", [], "any", false, false, false, 50)) {
                // line 51
                yield "                <div class=\"store-rating\">
                  <span class=\"rating-value\">";
                // line 52
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "rating", [], "any", false, false, false, 52);
                yield "</span>
                  <i class=\"fa-solid fa-star\"></i>
                </div>
              ";
            }
            // line 56
            yield "
              ";
            // line 57
            if (CoreExtension::getAttribute($this->env, $this->source, $context["store"], "tag", [], "any", false, false, false, 57)) {
                // line 58
                yield "                <span class=\"store-tag\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "tag", [], "any", false, false, false, 58);
                yield "</span>
              ";
            }
            // line 60
            yield "            </div>

            <h3 class=\"store-name\">
              <a href=\"";
            // line 63
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 63);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 63);
            yield "</a>
            </h3>

            ";
            // line 66
            if (CoreExtension::getAttribute($this->env, $this->source, $context["store"], "description", [], "any", false, false, false, 66)) {
                // line 67
                yield "              <p class=\"store-desc\">
                ";
                // line 68
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "description", [], "any", false, false, false, 68);
                yield "
              </p>
            ";
            }
            // line 71
            yield "
            <div class=\"store-card-footer\">
              ";
            // line 73
            if (CoreExtension::getAttribute($this->env, $this->source, $context["store"], "price_from", [], "any", false, false, false, 73)) {
                // line 74
                yield "                <span class=\"store-price-range\">
                  ";
                // line 75
                yield ((array_key_exists("text_price_from", $context)) ? (Twig\Extension\CoreExtension::default(($context["text_price_from"] ?? null), "من")) : ("من"));
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "price_from", [], "any", false, false, false, 75);
                yield "
                </span>
              ";
            }
            // line 78
            yield "
              <a href=\"";
            // line 79
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 79);
            yield "\" class=\"store-visit-btn\">
                <i class=\"fa-solid fa-bag-shopping\"></i>
                <span>";
            // line 81
            yield ((array_key_exists("text_visit_store", $context)) ? (Twig\Extension\CoreExtension::default(($context["text_visit_store"] ?? null), "زيارة المتجر")) : ("زيارة المتجر"));
            yield "</span>
              </a>
            </div>
          </div>
        </article>

      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            yield "        <p class=\"text-center mt-4\">
          ";
            // line 89
            yield ((array_key_exists("text_no_stores", $context)) ? (Twig\Extension\CoreExtension::default(($context["text_no_stores"] ?? null), "لا توجد متاجر لعرضها حالياً.")) : ("لا توجد متاجر لعرضها حالياً."));
            yield "
        </p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "    </div>

    ";
        // line 95
        yield "    ";
        if (($context["view_all"] ?? null)) {
            // line 96
            yield "      <div class=\"stores-footer\">
        <a href=\"";
            // line 97
            yield ($context["view_all"] ?? null);
            yield "\" class=\"stores-view-all-btn\">
          ";
            // line 98
            yield ((array_key_exists("text_view_all_stores", $context)) ? (Twig\Extension\CoreExtension::default(($context["text_view_all_stores"] ?? null), "عرض جميع المتاجر")) : ("عرض جميع المتاجر"));
            yield "
        </a>
      </div>
    ";
        }
        // line 102
        yield "
  </div>
</section>

";
        // line 107
        yield "<section class=\"newsletter-section\">
  <div class=\"newsletter-container\">

    <div class=\"newsletter-icon-wrap\">
      <i class=\"fa-regular fa-envelope\"></i>
    </div>

    <h2 class=\"newsletter-title\">اشترك في النشرة الإخبارية</h2>

    <p class=\"newsletter-subtitle\">
      كن أول من يعرف عن المنتجات الجديدة والعروض الحصرية في عالمنا الافتراضي.
    </p>

    <form action=\"";
        // line 120
        yield ((array_key_exists("newsletter_action", $context)) ? (Twig\Extension\CoreExtension::default(($context["newsletter_action"] ?? null), "#")) : ("#"));
        yield "\" method=\"post\" class=\"newsletter-form\">
      <div class=\"newsletter-input-wrap\">
        <input type=\"email\"
               name=\"email\"
               class=\"newsletter-input\"
               placeholder=\"أدخل بريدك الإلكتروني\"
               required>
      </div>

      <button type=\"submit\" class=\"newsletter-btn\">
        <i class=\"fa-regular fa-paper-plane\"></i>
        <span>اشترك الآن</span>
      </button>
    </form>

    <p class=\"newsletter-note\">
      لن نشارك بريدك الإلكتروني مع أي جهة خارجية.
    </p>

  </div>
</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/catalog/view/template/module/featured.twig";
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
        return array (  270 => 120,  255 => 107,  249 => 102,  242 => 98,  238 => 97,  235 => 96,  232 => 95,  228 => 92,  219 => 89,  216 => 88,  204 => 81,  199 => 79,  196 => 78,  188 => 75,  185 => 74,  183 => 73,  179 => 71,  173 => 68,  170 => 67,  168 => 66,  160 => 63,  155 => 60,  149 => 58,  147 => 57,  144 => 56,  137 => 52,  134 => 51,  132 => 50,  127 => 47,  123 => 44,  117 => 41,  114 => 40,  111 => 39,  104 => 34,  100 => 32,  92 => 28,  88 => 27,  85 => 26,  81 => 23,  76 => 22,  73 => 21,  66 => 16,  59 => 12,  52 => 8,  48 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section id=\"stores-section\" class=\"section-stores\">

  <div class=\"stores-container\">

    {# شارة صغيرة فوق العنوان #}
    <div class=\"stores-header\">
      <span class=\"stores-badge\">
        {{ text_stores_badge|default('المتاجر') }}
      </span>

      <h2 class=\"stores-title\">
        {{ heading_title|default('اكتشف عالم متاجر بريق') }}
      </h2>

      <p class=\"stores-subtitle\">
        {{ text_stores_subtitle|default('مجموعة مميزة من المتاجر الرقمية وتجارب التسوق الفريدة.') }}
      </p>
    </div>

    {# شبكة المتاجر #}
    <div class=\"stores-grid\">
      {% for store in stores %}

        <article class=\"store-card\">
          {# صورة المتجر + الأزرار العلوية #}
          <div class=\"store-card-image-wrapper\">
            <a href=\"{{ store.href }}\">
              <img src=\"{{ store.thumb }}\" alt=\"{{ store.name }}\" class=\"store-card-image\">
            </a>

            {# زر المفضلة #}
            <button type=\"button\"
                    class=\"store-fav-btn\"
                    data-store-id=\"{{ store.store_id }}\">
              <i class=\"fa-regular fa-heart\"></i>
            </button>

            {# البادج الصغير (مثلاً: جديد / عرض خاص) #}
            {% if store.badge %}
              <span class=\"store-badge-top\">
                {{ store.badge }}
              </span>
            {% endif %}
          </div>

          {# النص داخل الكرت #}
          <div class=\"store-card-body\">

            <div class=\"store-meta\">
              {% if store.rating %}
                <div class=\"store-rating\">
                  <span class=\"rating-value\">{{ store.rating }}</span>
                  <i class=\"fa-solid fa-star\"></i>
                </div>
              {% endif %}

              {% if store.tag %}
                <span class=\"store-tag\">{{ store.tag }}</span>
              {% endif %}
            </div>

            <h3 class=\"store-name\">
              <a href=\"{{ store.href }}\">{{ store.name }}</a>
            </h3>

            {% if store.description %}
              <p class=\"store-desc\">
                {{ store.description }}
              </p>
            {% endif %}

            <div class=\"store-card-footer\">
              {% if store.price_from %}
                <span class=\"store-price-range\">
                  {{ text_price_from|default('من') }} {{ store.price_from }}
                </span>
              {% endif %}

              <a href=\"{{ store.href }}\" class=\"store-visit-btn\">
                <i class=\"fa-solid fa-bag-shopping\"></i>
                <span>{{ text_visit_store|default('زيارة المتجر') }}</span>
              </a>
            </div>
          </div>
        </article>

      {% else %}
        <p class=\"text-center mt-4\">
          {{ text_no_stores|default('لا توجد متاجر لعرضها حالياً.') }}
        </p>
      {% endfor %}
    </div>

    {# زر \"عرض جميع المتاجر\" أسفل الشبكة (اختياري) #}
    {% if view_all %}
      <div class=\"stores-footer\">
        <a href=\"{{ view_all }}\" class=\"stores-view-all-btn\">
          {{ text_view_all_stores|default('عرض جميع المتاجر') }}
        </a>
      </div>
    {% endif %}

  </div>
</section>

{# ===== قسم النشرة الإخبارية ===== #}
<section class=\"newsletter-section\">
  <div class=\"newsletter-container\">

    <div class=\"newsletter-icon-wrap\">
      <i class=\"fa-regular fa-envelope\"></i>
    </div>

    <h2 class=\"newsletter-title\">اشترك في النشرة الإخبارية</h2>

    <p class=\"newsletter-subtitle\">
      كن أول من يعرف عن المنتجات الجديدة والعروض الحصرية في عالمنا الافتراضي.
    </p>

    <form action=\"{{ newsletter_action|default('#') }}\" method=\"post\" class=\"newsletter-form\">
      <div class=\"newsletter-input-wrap\">
        <input type=\"email\"
               name=\"email\"
               class=\"newsletter-input\"
               placeholder=\"أدخل بريدك الإلكتروني\"
               required>
      </div>

      <button type=\"submit\" class=\"newsletter-btn\">
        <i class=\"fa-regular fa-paper-plane\"></i>
        <span>اشترك الآن</span>
      </button>
    </form>

    <p class=\"newsletter-note\">
      لن نشارك بريدك الإلكتروني مع أي جهة خارجية.
    </p>

  </div>
</section>
", "extension/opencart/catalog/view/template/module/featured.twig", "C:\\xampp\\htdocs\\opencart\\extension\\opencart\\catalog\\view\\template\\module\\featured.twig");
    }
}
