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

/* extension/opencart/catalog/view/template/module/account.twig */
class __TwigTemplate_e53153a2000671a3196aeaafc1baed02 extends Template
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
        yield "<div class=\"list-group mb-3\"> ";
        // line 2
        yield "  ";
        if ( !($context["logged"] ?? null)) {
            yield " ";
            // line 3
            yield "    <a href=\"";
            yield ($context["login"] ?? null);
            yield "\" class=\"list-group-item\">";
            yield ($context["text_login"] ?? null);
            yield "</a> ";
            // line 4
            yield "    <a href=\"";
            yield ($context["register"] ?? null);
            yield "\" class=\"list-group-item\">";
            yield ($context["text_register"] ?? null);
            yield "</a> ";
            // line 5
            yield "    <a href=\"";
            yield ($context["forgotten"] ?? null);
            yield "\" class=\"list-group-item\">";
            yield ($context["text_forgotten"] ?? null);
            yield "</a> ";
            // line 6
            yield "  ";
        }
        yield " ";
        // line 7
        yield "  <a href=\"";
        yield ($context["account"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_account"] ?? null);
        yield "</a> ";
        // line 8
        yield "  ";
        if (($context["logged"] ?? null)) {
            yield " ";
            // line 9
            yield "    <a href=\"";
            yield ($context["edit"] ?? null);
            yield "\" class=\"list-group-item\">";
            yield ($context["text_edit"] ?? null);
            yield "</a> ";
            // line 10
            yield "    <a href=\"";
            yield ($context["password"] ?? null);
            yield "\" class=\"list-group-item\">";
            yield ($context["text_password"] ?? null);
            yield "</a> ";
            // line 11
            yield "  ";
        }
        yield " ";
        // line 12
        yield "  <a href=\"";
        yield ($context["payment_method"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_payment_method"] ?? null);
        yield "</a>  ";
        // line 13
        yield "  <a href=\"";
        yield ($context["address"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_address"] ?? null);
        yield "</a>   ";
        // line 14
        yield "  <a href=\"";
        yield ($context["wishlist"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</a>   ";
        // line 15
        yield "  <a href=\"";
        yield ($context["order"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_order"] ?? null);
        yield "</a>   ";
        // line 16
        yield "  <a href=\"";
        yield ($context["download"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_download"] ?? null);
        yield "</a>   ";
        // line 17
        yield "  <a href=\"";
        yield ($context["subscription"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_subscription"] ?? null);
        yield "</a>   ";
        // line 18
        yield "  <a href=\"";
        yield ($context["reward"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_reward"] ?? null);
        yield "</a>  ";
        // line 19
        yield "  <a href=\"";
        yield ($context["return"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_return"] ?? null);
        yield "</a>   ";
        // line 20
        yield "  <a href=\"";
        yield ($context["transaction"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_transaction"] ?? null);
        yield "</a>  ";
        // line 21
        yield "  <a href=\"";
        yield ($context["newsletter"] ?? null);
        yield "\" class=\"list-group-item\">";
        yield ($context["text_newsletter"] ?? null);
        yield "</a>   ";
        // line 22
        yield "  ";
        if (($context["logged"] ?? null)) {
            yield "  ";
            // line 23
            yield "    <a href=\"";
            yield ($context["logout"] ?? null);
            yield "\" class=\"list-group-item\">";
            yield ($context["text_logout"] ?? null);
            yield "</a>   ";
            // line 24
            yield "  ";
        }
        // line 25
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/catalog/view/template/module/account.twig";
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
        return array (  169 => 25,  166 => 24,  160 => 23,  156 => 22,  150 => 21,  144 => 20,  138 => 19,  132 => 18,  126 => 17,  120 => 16,  114 => 15,  108 => 14,  102 => 13,  96 => 12,  92 => 11,  86 => 10,  80 => 9,  76 => 8,  70 => 7,  66 => 6,  60 => 5,  54 => 4,  48 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"list-group mb-3\"> {#  عرض روابط حساب المستخدم بناءً على حالة تسجيل الدخول #}
  {% if not logged %} {# إذا لم يسجل المستخدم الدخول #}
    <a href=\"{{ login }}\" class=\"list-group-item\">{{ text_login }}</a> {# رابط الدخول #}
    <a href=\"{{ register }}\" class=\"list-group-item\">{{ text_register }}</a> {# رابط التسجيل #}
    <a href=\"{{ forgotten }}\" class=\"list-group-item\">{{ text_forgotten }}</a> {# رابط استعادة كلمة المرور #}
  {% endif %} {# إذا كان المستخدم مسجل دخول #}
  <a href=\"{{ account }}\" class=\"list-group-item\">{{ text_account }}</a> {# رابط حساب المستخدم #}
  {% if logged %} {# إذا كان المستخدم مسجل دخول #}
    <a href=\"{{ edit }}\" class=\"list-group-item\">{{ text_edit }}</a> {# رابط تعديل الحساب #}
    <a href=\"{{ password }}\" class=\"list-group-item\">{{ text_password }}</a> {# رابط تغيير كلمة المرور #}
  {% endif %} {# روابط الحساب العامة #}
  <a href=\"{{ payment_method }}\" class=\"list-group-item\">{{ text_payment_method }}</a>  {# رابط طرق الدفع #}
  <a href=\"{{ address }}\" class=\"list-group-item\">{{ text_address }}</a>   {# رابط عناوين الشحن #}
  <a href=\"{{ wishlist }}\" class=\"list-group-item\">{{ text_wishlist }}</a>   {# رابط المفضلة #}
  <a href=\"{{ order }}\" class=\"list-group-item\">{{ text_order }}</a>   {# رابط الطلبات #}
  <a href=\"{{ download }}\" class=\"list-group-item\">{{ text_download }}</a>   {# رابط التنزيلات #}
  <a href=\"{{ subscription }}\" class=\"list-group-item\">{{ text_subscription }}</a>   {# رابط الاشتراكات #}
  <a href=\"{{ reward }}\" class=\"list-group-item\">{{ text_reward }}</a>  {# رابط نقاط المكافآت #}
  <a href=\"{{ return }}\" class=\"list-group-item\">{{ text_return }}</a>   {# رابط المرتجعات #}
  <a href=\"{{ transaction }}\" class=\"list-group-item\">{{ text_transaction }}</a>  {# رابط المعاملات #}
  <a href=\"{{ newsletter }}\" class=\"list-group-item\">{{ text_newsletter }}</a>   {# رابط النشرة الإخبارية #}
  {% if logged %}  {# إذا كان المستخدم مسجل دخول #}
    <a href=\"{{ logout }}\" class=\"list-group-item\">{{ text_logout }}</a>   {# رابط تسجيل الخروج #}
  {% endif %}
</div>
", "extension/opencart/catalog/view/template/module/account.twig", "C:\\xampp\\htdocs\\bareeq_platform\\extension\\opencart\\catalog\\view\\template\\module\\account.twig");
    }
}
