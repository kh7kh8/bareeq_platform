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

/* extension/opencart/catalog/view/template/module/banner.twig */
class __TwigTemplate_dde6b699c038deddce54b6be0a1deb64 extends Template
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
        // line 94
        yield "


";
        // line 98
        $context["lang"] = "ar";
        yield " 
";
        // line 100
        yield "
";
        // line 101
        $context["translations"] = ["ar" => ["banner_default_desc" => "استكشف عالماً جديداً من التسوق الإلكتروني في الواقع الافتراضي. اختبر تجربة تسوق فريدة تجمع بين الابتكار والخيال.", "start_shopping" => "ابدأ التسوق الآن", "learn_more" => "تعرف علينا", "features_badge" => "المميزات", "features_title" => "لماذا تختار بريق؟", "features_subtitle" => "نقدم لك تجربة تسوق فريدة تجمع بين التكنولوجيا المتقدمة والراحة.", "feature1_title" => "تجربة ثلاثية الأبعاد", "feature1_text" => "استكشف المنتجات في بيئة ثلاثية الأبعاد تفاعلية.", "feature2_title" => "تسليم فوري", "feature2_text" => "احصل على منتجاتك الرقمية فوراً بعد الشراء.", "feature3_title" => "أمان متقدم", "feature3_text" => "نحمي بياناتك بأحدث تقنيات التشفير.", "feature4_title" => "دعم على مدار الساعة", "feature4_text" => "فريق دعم متاح 24/7 لمساعدتك في أي وقت."], "en" => ["banner_default_desc" => "Explore a new world of online shopping in virtual reality. Experience a unique shopping journey combining innovation and imagination.", "start_shopping" => "Start Shopping", "learn_more" => "Learn More", "features_badge" => "Features", "features_title" => "Why Choose Bareeq?", "features_subtitle" => "We offer a unique shopping experience combining advanced technology and convenience.", "feature1_title" => "3D Experience", "feature1_text" => "Explore products in an interactive 3D environment.", "feature2_title" => "Instant Delivery", "feature2_text" => "Get your digital products instantly after purchase.", "feature3_title" => "Advanced Security", "feature3_text" => "We protect your data with the latest encryption technologies.", "feature4_title" => "24/7 Support", "feature4_text" => "Support team available 24/7 to assist you anytime."]];
        // line 135
        yield "
";
        // line 136
        $context["t"] = (($_v0 = ($context["translations"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["lang"] ?? null)] ?? null) : null);
        // line 137
        yield "
<div id=\"carousel-banner-";
        // line 138
        yield ($context["module"] ?? null);
        yield "\" class=\"custom-banner-box\">
  ";
        // line 139
        if (($context["banners"] ?? null)) {
            // line 140
            yield "    ";
            $context["banner"] = (($_v1 = ($context["banners"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null);
            // line 141
            yield "
    <div class=\"banner-content row align-items-center\">
      <div class=\"col-lg-6 col-md-12 banner-image text-center\">
        <img src=\"";
            // line 144
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "image", [], "any", false, false, false, 144);
            yield "\" alt=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "title", [], "any", false, false, false, 144);
            yield "\" class=\"img-fluid\"/>
      </div>

      <div class=\"col-lg-6 col-md-12 banner-text text-center text-lg-start\">
        <h2 class=\"banner-title\">";
            // line 148
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "title", [], "any", false, false, false, 148);
            yield "</h2>

        <p class=\"banner-desc\">
          ";
            // line 151
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "description", [], "any", false, false, false, 151)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "description", [], "any", false, false, false, 151)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "banner_default_desc", [], "any", false, false, false, 151)));
            yield "
        </p>

        ";
            // line 154
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "link", [], "any", false, false, false, 154)) {
                // line 155
                yield "          <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "link", [], "any", false, false, false, 155);
                yield "\" class=\"banner-btn\">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "start_shopping", [], "any", false, false, false, 155);
                yield "</a>
        ";
            }
            // line 157
            yield "
        <a href=\"#\" class=\"banner-btn-outline\">";
            // line 158
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "learn_more", [], "any", false, false, false, 158);
            yield "</a>
      </div>
    </div>
  ";
        }
        // line 162
        yield "</div>

<!-- المميزات - لماذا تختار بريق؟ -->
<section class=\"features-section\" id=\"features\">
  <div class=\"features-container\">
    <div class=\"features-badge\">";
        // line 167
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "features_badge", [], "any", false, false, false, 167);
        yield "</div>
    <h2 class=\"features-title\">";
        // line 168
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "features_title", [], "any", false, false, false, 168);
        yield "</h2>
    <p class=\"features-subtitle\">";
        // line 169
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "features_subtitle", [], "any", false, false, false, 169);
        yield "</p>

    <div class=\"features-grid\">
      <article class=\"feature-card\">
        <div class=\"feature-icon\"><i class=\"fa-solid fa-vr-cardboard\"></i></div>
        <h3 class=\"feature-title\">";
        // line 174
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "feature1_title", [], "any", false, false, false, 174);
        yield "</h3>
        <p class=\"feature-text\">";
        // line 175
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "feature1_text", [], "any", false, false, false, 175);
        yield "</p>
      </article>

      <article class=\"feature-card\">
        <div class=\"feature-icon\"><i class=\"fa-solid fa-bolt\"></i></div>
        <h3 class=\"feature-title\">";
        // line 180
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "feature2_title", [], "any", false, false, false, 180);
        yield "</h3>
        <p class=\"feature-text\">";
        // line 181
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "feature2_text", [], "any", false, false, false, 181);
        yield "</p>
      </article>

      <article class=\"feature-card\">
        <div class=\"feature-icon\"><i class=\"fa-solid fa-shield-halved\"></i></div>
        <h3 class=\"feature-title\">";
        // line 186
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "feature3_title", [], "any", false, false, false, 186);
        yield "</h3>
        <p class=\"feature-text\">";
        // line 187
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "feature3_text", [], "any", false, false, false, 187);
        yield "</p>
      </article>

      <article class=\"feature-card\">
        <div class=\"feature-icon\"><i class=\"fa-solid fa-headset\"></i></div>
        <h3 class=\"feature-title\">";
        // line 192
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "feature4_title", [], "any", false, false, false, 192);
        yield "</h3>
        <p class=\"feature-text\">";
        // line 193
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["t"] ?? null), "feature4_text", [], "any", false, false, false, 193);
        yield "</p>
      </article>
    </div>
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
        return "extension/opencart/catalog/view/template/module/banner.twig";
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
        return array (  182 => 193,  178 => 192,  170 => 187,  166 => 186,  158 => 181,  154 => 180,  146 => 175,  142 => 174,  134 => 169,  130 => 168,  126 => 167,  119 => 162,  112 => 158,  109 => 157,  101 => 155,  99 => 154,  93 => 151,  87 => 148,  78 => 144,  73 => 141,  70 => 140,  68 => 139,  64 => 138,  61 => 137,  59 => 136,  56 => 135,  54 => 101,  51 => 100,  47 => 98,  42 => 94,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# <div id=\"carousel-banner-{{ module }}\" class=\"custom-banner-box\">
  {% if banners %}
    {% set banner = banners[0] %}

    <div class=\"banner-content row align-items-center\">
      <div class=\"col-lg-6 col-md-12 banner-image text-center\">
        <img src=\"{{ banner.image }}\" alt=\"{{ banner.title }}\" class=\"img-fluid\"/>
      </div>

      <div class=\"col-lg-6 col-md-12 banner-text text-center text-lg-start\">
        <h2 class=\"banner-title\">{{ banner.title }}</h2>

        {% if banner.description %}
          <p class=\"banner-desc\">{{ banner.description }}</p>
        {% else %}
          <p class=\"banner-desc\">استكشف عالماً جديداً من التسوق الإلكتروني في الواقع الافتراضي. اختبر تجربة تسوق فريدة تجمع بين الابتكار والخيال.</p>
        {% endif %}

        {% if banner.link %}
          <a href=\"{{ banner.link }}\" class=\"banner-btn\">ابدأ التسوق الآن</a>
        {% endif %}

           <a href=\"#\" class=\"banner-btn-outline\">تعرف علينا</a>
      </div>

    </div>
  </div>
  {% endif %}
</div>

<!-- المميزات - لماذا تختار بريق؟ -->
<section class=\"features-section\" id=\"features\">
  <div class=\"features-container\">

    <!-- الشارة الصغيرة -->
    <div class=\"features-badge\">المميزات</div>

    <!-- العنوان والوصف -->
    <h2 class=\"features-title\">لماذا تختار بريق؟</h2>
    <p class=\"features-subtitle\">
      نقدم لك تجربة تسوق فريدة تجمع بين التكنولوجيا المتقدمة والراحة.
    </p>

    <!-- كروت المميزات -->
    <div class=\"features-grid\">

      <!-- كرت 1 -->
      <article class=\"feature-card\">
        <div class=\"feature-icon\">
          <i class=\"fa-solid fa-vr-cardboard\"></i>
        </div>
        <h3 class=\"feature-title\">تجربة ثلاثية الأبعاد</h3>
        <p class=\"feature-text\">
          استكشف المنتجات في بيئة ثلاثية الأبعاد تفاعلية.
        </p>
      </article>

      <!-- كرت 2 -->
      <article class=\"feature-card\">
        <div class=\"feature-icon\">
          <i class=\"fa-solid fa-bolt\"></i>
        </div>
        <h3 class=\"feature-title\">تسليم فوري</h3>
        <p class=\"feature-text\">
          احصل على منتجاتك الرقمية فوراً بعد الشراء.
        </p>
      </article>

      <!-- كرت 3 -->
      <article class=\"feature-card\">
        <div class=\"feature-icon\">
          <i class=\"fa-solid fa-shield-halved\"></i>
        </div>
        <h3 class=\"feature-title\">أمان متقدم</h3>
        <p class=\"feature-text\">
          نحمي بياناتك بأحدث تقنيات التشفير.
        </p>
      </article>

      <!-- كرت 4 -->
      <article class=\"feature-card\">
        <div class=\"feature-icon\">
          <i class=\"fa-solid fa-headset\"></i>
        </div>
        <h3 class=\"feature-title\">دعم على مدار الساعة</h3>
        <p class=\"feature-text\">
          فريق دعم متاح 24/7 لمساعدتك في أي وقت.
        </p>
      </article>

    </div>
  </div>
</section> #}



{# تعريف الترجمة في نفس الملف #}
{% set lang = 'ar' %} 
{# غيري هذا إلى 'en' لتجربة اللغة الإنجليزية #}

{% set translations = {
  'ar': {
    'banner_default_desc': 'استكشف عالماً جديداً من التسوق الإلكتروني في الواقع الافتراضي. اختبر تجربة تسوق فريدة تجمع بين الابتكار والخيال.',
    'start_shopping': 'ابدأ التسوق الآن',
    'learn_more': 'تعرف علينا',
    'features_badge': 'المميزات',
    'features_title': 'لماذا تختار بريق؟',
    'features_subtitle': 'نقدم لك تجربة تسوق فريدة تجمع بين التكنولوجيا المتقدمة والراحة.',
    'feature1_title': 'تجربة ثلاثية الأبعاد',
    'feature1_text': 'استكشف المنتجات في بيئة ثلاثية الأبعاد تفاعلية.',
    'feature2_title': 'تسليم فوري',
    'feature2_text': 'احصل على منتجاتك الرقمية فوراً بعد الشراء.',
    'feature3_title': 'أمان متقدم',
    'feature3_text': 'نحمي بياناتك بأحدث تقنيات التشفير.',
    'feature4_title': 'دعم على مدار الساعة',
    'feature4_text': 'فريق دعم متاح 24/7 لمساعدتك في أي وقت.'
  },
  'en': {
    'banner_default_desc': 'Explore a new world of online shopping in virtual reality. Experience a unique shopping journey combining innovation and imagination.',
    'start_shopping': 'Start Shopping',
    'learn_more': 'Learn More',
    'features_badge': 'Features',
    'features_title': 'Why Choose Bareeq?',
    'features_subtitle': 'We offer a unique shopping experience combining advanced technology and convenience.',
    'feature1_title': '3D Experience',
    'feature1_text': 'Explore products in an interactive 3D environment.',
    'feature2_title': 'Instant Delivery',
    'feature2_text': 'Get your digital products instantly after purchase.',
    'feature3_title': 'Advanced Security',
    'feature3_text': 'We protect your data with the latest encryption technologies.',
    'feature4_title': '24/7 Support',
    'feature4_text': 'Support team available 24/7 to assist you anytime.'
  }
} %}

{% set t = translations[lang] %}

<div id=\"carousel-banner-{{ module }}\" class=\"custom-banner-box\">
  {% if banners %}
    {% set banner = banners[0] %}

    <div class=\"banner-content row align-items-center\">
      <div class=\"col-lg-6 col-md-12 banner-image text-center\">
        <img src=\"{{ banner.image }}\" alt=\"{{ banner.title }}\" class=\"img-fluid\"/>
      </div>

      <div class=\"col-lg-6 col-md-12 banner-text text-center text-lg-start\">
        <h2 class=\"banner-title\">{{ banner.title }}</h2>

        <p class=\"banner-desc\">
          {{ banner.description ?: t.banner_default_desc }}
        </p>

        {% if banner.link %}
          <a href=\"{{ banner.link }}\" class=\"banner-btn\">{{ t.start_shopping }}</a>
        {% endif %}

        <a href=\"#\" class=\"banner-btn-outline\">{{ t.learn_more }}</a>
      </div>
    </div>
  {% endif %}
</div>

<!-- المميزات - لماذا تختار بريق؟ -->
<section class=\"features-section\" id=\"features\">
  <div class=\"features-container\">
    <div class=\"features-badge\">{{ t.features_badge }}</div>
    <h2 class=\"features-title\">{{ t.features_title }}</h2>
    <p class=\"features-subtitle\">{{ t.features_subtitle }}</p>

    <div class=\"features-grid\">
      <article class=\"feature-card\">
        <div class=\"feature-icon\"><i class=\"fa-solid fa-vr-cardboard\"></i></div>
        <h3 class=\"feature-title\">{{ t.feature1_title }}</h3>
        <p class=\"feature-text\">{{ t.feature1_text }}</p>
      </article>

      <article class=\"feature-card\">
        <div class=\"feature-icon\"><i class=\"fa-solid fa-bolt\"></i></div>
        <h3 class=\"feature-title\">{{ t.feature2_title }}</h3>
        <p class=\"feature-text\">{{ t.feature2_text }}</p>
      </article>

      <article class=\"feature-card\">
        <div class=\"feature-icon\"><i class=\"fa-solid fa-shield-halved\"></i></div>
        <h3 class=\"feature-title\">{{ t.feature3_title }}</h3>
        <p class=\"feature-text\">{{ t.feature3_text }}</p>
      </article>

      <article class=\"feature-card\">
        <div class=\"feature-icon\"><i class=\"fa-solid fa-headset\"></i></div>
        <h3 class=\"feature-title\">{{ t.feature4_title }}</h3>
        <p class=\"feature-text\">{{ t.feature4_text }}</p>
      </article>
    </div>
  </div>
</section>
", "extension/opencart/catalog/view/template/module/banner.twig", "C:\\xampp\\htdocs\\bareeq_platform\\extension\\opencart\\catalog\\view\\template\\module\\banner.twig");
    }
}
