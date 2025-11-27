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

/* default/_language_selector.html.twig */
class __TwigTemplate_619779e12458abaad4e79d8b94c9f9c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_language_selector.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_language_selector.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_render_language_selector($display_current_language = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "display_current_language" => $display_current_language,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_language_selector"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_language_selector"));

            // line 2
            yield "    <a href=\"#\" class=\"nav-link dropdown-toggle language-selector-dropdown-button\" data-toggle=\"modal\" data-target=\"#locale-selector-modal\" role=\"button\" id=\"locales\">
        ";
            // line 3
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:world"]);
            yield "
        ";
            // line 4
            if ((($tmp = (isset($context["display_current_language"]) || array_key_exists("display_current_language", $context) ? $context["display_current_language"] : (function () { throw new RuntimeError('Variable "display_current_language" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 5
                yield "            <span class=\"current-language\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getLocaleName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "locale", [], "any", false, false, false, 5)), "html", null, true);
                yield "</span>
        ";
            }
            // line 7
            yield "        <span class=\"caret\"></span>
        <span class=\"sr-only\">";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.choose_language"), "html", null, true);
            yield "</span>
    </a>

    <div id=\"locale-selector-modal\" class=\"modal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-lg modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\" lang=\"en\">
                        ";
            // line 17
            yield "                        Choose your language
                    </p>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>

                <div class=\"modal-body\">
                    <ul class=\"locales\">
                        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['App\Twig\AppExtension']->getLocales());
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 27
                yield "                            ";
                $context["is_active"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "locale", [], "any", false, false, false, 27) == CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 27));
                // line 28
                yield "                            <li class=\"";
                yield (((($tmp = (isset($context["is_active"]) || array_key_exists("is_active", $context) ? $context["is_active"] : (function () { throw new RuntimeError('Variable "is_active" does not exist.', 28, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
                yield " ";
                yield (((($tmp = $this->extensions['App\Twig\AppExtension']->isRtl(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 28))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("rtl") : (""));
                yield "\" translate=\"no\">
                                <a class=\"stretched-link\" lang=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 29), "html", null, true);
                yield "\" hreflang=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 29), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "current_route", [], "any", true, true, false, 29) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "current_route", [], "any", false, false, false, 29)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "current_route", [], "any", false, false, false, 29)) : ("blog_index")), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "current_route_parameters", [], "any", false, false, false, 29), ["_locale" => CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 29)])), "html", null, true);
                yield "\">
                                    ";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 30)), "html", null, true);
                yield "
                                    <small>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "code", [], "any", false, false, false, 31), "html", null, true);
                yield "</small>
                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "                    </ul>
                </div>
            </div>
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/_language_selector.html.twig";
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
        return array (  151 => 35,  141 => 31,  137 => 30,  129 => 29,  122 => 28,  119 => 27,  115 => 26,  104 => 17,  93 => 8,  90 => 7,  84 => 5,  82 => 4,  78 => 3,  75 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro render_language_selector(display_current_language = false) %}
    <a href=\"#\" class=\"nav-link dropdown-toggle language-selector-dropdown-button\" data-toggle=\"modal\" data-target=\"#locale-selector-modal\" role=\"button\" id=\"locales\">
        {{ component('ux:icon', { name: 'tabler:world' }) }}
        {% if display_current_language %}
            <span class=\"current-language\">{{ app.locale|locale_name }}</span>
        {% endif %}
        <span class=\"caret\"></span>
        <span class=\"sr-only\">{{ 'menu.choose_language'|trans }}</span>
    </a>

    <div id=\"locale-selector-modal\" class=\"modal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-lg modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\" lang=\"en\">
                        {# display this title always in English to make the language selector easier to use #}
                        Choose your language
                    </p>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>

                <div class=\"modal-body\">
                    <ul class=\"locales\">
                        {% for locale in locales() %}
                            {% set is_active = app.locale == locale.code %}
                            <li class=\"{{ is_active ? 'active' }} {{ is_rtl(locale.code) ? 'rtl' }}\" translate=\"no\">
                                <a class=\"stretched-link\" lang=\"{{ locale.code }}\" hreflang=\"{{ locale.code }}\" href=\"{{ path(app.current_route ?? 'blog_index', app.current_route_parameters|merge({_locale: locale.code})) }}\">
                                    {{ locale.name|capitalize }}
                                    <small>{{ locale.code }}</small>
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    </div>
{% endmacro %}
", "default/_language_selector.html.twig", "/var/www/html/templates/default/_language_selector.html.twig");
    }
}
