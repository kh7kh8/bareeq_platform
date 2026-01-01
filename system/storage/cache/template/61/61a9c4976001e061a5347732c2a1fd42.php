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

/* catalog/view/template/common/footer.twig */
class __TwigTemplate_a9f16eabb1eb76d8d2295fef732a8811 extends Template
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
        yield "</main>

<footer class=\"site-footer mt-auto\">
  <div class=\"container\">

    <div class=\"footer-main row gy-4\">

      ";
        // line 9
        yield "      <div class=\"col-lg-3 col-md-6 footer-col footer-contact\">
        <h5 class=\"footer-title\">تواصل معنا</h5>

        <div class=\"footer-contact-item\">
          <span class=\"footer-contact-label\">البريد:</span>
          <a href=\"mailto:info@bareq.com\" class=\"footer-contact-link\">info@bareq.com</a>
        </div>

        <div class=\"footer-contact-item\">
          <span class=\"footer-contact-label\">الهاتف:</span>
          <a href=\"tel:+966456712350\" class=\"footer-contact-link\">4567 123 50 966+</a>
        </div>

        <div class=\"footer-contact-item\">
          <span class=\"footer-contact-label\">العنوان:</span>
          <p class=\"footer-contact-text mb-0\">
            الرياض، المملكة العربية السعودية
          </p>
        </div>
      </div>

      ";
        // line 31
        yield "      <div class=\"col-lg-3 col-md-6 footer-col footer-support\">
        <h5 class=\"footer-title\">الدعم</h5>
        <ul class=\"footer-list\">
          <li><a href=\"";
        // line 34
        yield ($context["contact"] ?? null);
        yield "\">الأسئلة الشائعة</a></li>
          <li><a href=\"";
        // line 35
        yield ($context["contact"] ?? null);
        yield "\">سياسة الخصوصية</a></li>
          <li><a href=\"";
        // line 36
        yield ($context["contact"] ?? null);
        yield "\">الشروط والأحكام</a></li>
          <li><a href=\"";
        // line 37
        yield ($context["contact"] ?? null);
        yield "\">اتصل بنا</a></li>
        </ul>
      </div>

      ";
        // line 42
        yield "      <div class=\"col-lg-3 col-md-6 footer-col footer-links\">
        <h5 class=\"footer-title\">روابط سريعة</h5>
        <ul class=\"footer-list\">
          <li><a href=\"";
        // line 45
        yield ($context["sitemap"] ?? null);
        yield "\">الرئيسية</a></li>
          <li><a href=\"";
        // line 46
        yield ($context["special"] ?? null);
        yield "\">المميزات</a></li>
          <li><a href=\"";
        // line 47
        yield ($context["account"] ?? null);
        yield "\">من نحن</a></li>
          <li><a href=\"";
        // line 48
        yield ($context["contact"] ?? null);
        yield "\">اتصل بنا</a></li>
        </ul>
      </div>

      ";
        // line 53
        yield "      <div class=\"col-lg-3 col-md-6 footer-col footer-brand text-md-end text-center\">
        <div class=\"footer-brand-header d-inline-flex align-items-center gap-2 mb-2\">
          ";
        // line 55
        if (($context["logo"] ?? null)) {
            // line 56
            yield "            <div class=\"footer-logo-wrap\">
              <img src=\"";
            // line 57
            yield ($context["logo"] ?? null);
            yield "\" alt=\"";
            yield ($context["name"] ?? null);
            yield "\" class=\"img-fluid\">
            </div>
          ";
        }
        // line 60
        yield "          <div class=\"text-start text-md-end\">
            <div class=\"footer-brand-name\">بريق</div>
            <div class=\"footer-brand-tagline\">في الواقع والخيال</div>
          </div>
        </div>

        <p class=\"footer-brand-text mb-3\">
          عالم افتراضي جديد من التجارة الإلكترونية يجمع بين الواقع والخيال.
        </p>

        <div class=\"footer-social d-flex justify-content-md-end justify-content-center gap-2\">
          <a href=\"#\" aria-label=\"Instagram\"><i class=\"fab fa-instagram\"></i></a>
          <a href=\"#\" aria-label=\"Twitter\"><i class=\"fab fa-x-twitter\"></i></a>
          <a href=\"#\" aria-label=\"YouTube\"><i class=\"fab fa-youtube\"></i></a>
          <a href=\"#\" aria-label=\"Facebook\"><i class=\"fab fa-facebook-f\"></i></a>
        </div>
      </div>

    </div>

    <hr class=\"footer-divider\">

    <p class=\"footer-copy text-center mb-0\">
      بريق في الواقع والخيال. جميع الحقوق محفوظة &copy; ";
        // line 83
        yield $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y");
        yield "
    </p>

  </div>
</footer>

</div> ";
        // line 90
        yield "
";
        // line 91
        yield ($context["cookie"] ?? null);
        yield "

<script src=\"";
        // line 93
        yield ($context["bootstrap"] ?? null);
        yield "\" type=\"text/javascript\"></script>
";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 95
            yield "  <script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 95);
            yield "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "<script src=\"./catalog/view/javascript/framework/webcomponent.js\" type=\"module\"></script>
</body></html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/footer.twig";
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
        return array (  198 => 97,  189 => 95,  185 => 94,  181 => 93,  176 => 91,  173 => 90,  164 => 83,  139 => 60,  131 => 57,  128 => 56,  126 => 55,  122 => 53,  115 => 48,  111 => 47,  107 => 46,  103 => 45,  98 => 42,  91 => 37,  87 => 36,  83 => 35,  79 => 34,  74 => 31,  51 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("</main>

<footer class=\"site-footer mt-auto\">
  <div class=\"container\">

    <div class=\"footer-main row gy-4\">

      {# ❶ عمود: تواصل معنا #}
      <div class=\"col-lg-3 col-md-6 footer-col footer-contact\">
        <h5 class=\"footer-title\">تواصل معنا</h5>

        <div class=\"footer-contact-item\">
          <span class=\"footer-contact-label\">البريد:</span>
          <a href=\"mailto:info@bareq.com\" class=\"footer-contact-link\">info@bareq.com</a>
        </div>

        <div class=\"footer-contact-item\">
          <span class=\"footer-contact-label\">الهاتف:</span>
          <a href=\"tel:+966456712350\" class=\"footer-contact-link\">4567 123 50 966+</a>
        </div>

        <div class=\"footer-contact-item\">
          <span class=\"footer-contact-label\">العنوان:</span>
          <p class=\"footer-contact-text mb-0\">
            الرياض، المملكة العربية السعودية
          </p>
        </div>
      </div>

      {# ❷ عمود: الدعم #}
      <div class=\"col-lg-3 col-md-6 footer-col footer-support\">
        <h5 class=\"footer-title\">الدعم</h5>
        <ul class=\"footer-list\">
          <li><a href=\"{{ contact }}\">الأسئلة الشائعة</a></li>
          <li><a href=\"{{ contact }}\">سياسة الخصوصية</a></li>
          <li><a href=\"{{ contact }}\">الشروط والأحكام</a></li>
          <li><a href=\"{{ contact }}\">اتصل بنا</a></li>
        </ul>
      </div>

      {# ❸ عمود: روابط سريعة #}
      <div class=\"col-lg-3 col-md-6 footer-col footer-links\">
        <h5 class=\"footer-title\">روابط سريعة</h5>
        <ul class=\"footer-list\">
          <li><a href=\"{{ sitemap }}\">الرئيسية</a></li>
          <li><a href=\"{{ special }}\">المميزات</a></li>
          <li><a href=\"{{ account }}\">من نحن</a></li>
          <li><a href=\"{{ contact }}\">اتصل بنا</a></li>
        </ul>
      </div>

      {# ❹ عمود: هوية بريق + السوشال #}
      <div class=\"col-lg-3 col-md-6 footer-col footer-brand text-md-end text-center\">
        <div class=\"footer-brand-header d-inline-flex align-items-center gap-2 mb-2\">
          {% if logo %}
            <div class=\"footer-logo-wrap\">
              <img src=\"{{ logo }}\" alt=\"{{ name }}\" class=\"img-fluid\">
            </div>
          {% endif %}
          <div class=\"text-start text-md-end\">
            <div class=\"footer-brand-name\">بريق</div>
            <div class=\"footer-brand-tagline\">في الواقع والخيال</div>
          </div>
        </div>

        <p class=\"footer-brand-text mb-3\">
          عالم افتراضي جديد من التجارة الإلكترونية يجمع بين الواقع والخيال.
        </p>

        <div class=\"footer-social d-flex justify-content-md-end justify-content-center gap-2\">
          <a href=\"#\" aria-label=\"Instagram\"><i class=\"fab fa-instagram\"></i></a>
          <a href=\"#\" aria-label=\"Twitter\"><i class=\"fab fa-x-twitter\"></i></a>
          <a href=\"#\" aria-label=\"YouTube\"><i class=\"fab fa-youtube\"></i></a>
          <a href=\"#\" aria-label=\"Facebook\"><i class=\"fab fa-facebook-f\"></i></a>
        </div>
      </div>

    </div>

    <hr class=\"footer-divider\">

    <p class=\"footer-copy text-center mb-0\">
      بريق في الواقع والخيال. جميع الحقوق محفوظة &copy; {{ \"now\"|date(\"Y\") }}
    </p>

  </div>
</footer>

</div> {# #container .d-flex #}

{{ cookie }}

<script src=\"{{ bootstrap }}\" type=\"text/javascript\"></script>
{% for script in scripts %}
  <script src=\"{{ script.href }}\" type=\"text/javascript\"></script>
{% endfor %}
<script src=\"./catalog/view/javascript/framework/webcomponent.js\" type=\"module\"></script>
</body></html>
", "catalog/view/template/common/footer.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\common\\footer.twig");
    }
}
