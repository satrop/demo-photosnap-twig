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

/* components/footer/footer.twig */
class __TwigTemplate_e8b1f7b951561c0c4c70a628697417e3 extends Template
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
        $context["data"] = ($context["footer"] ?? null);
        // line 2
        yield "
";
        // line 4
        yield "<footer class=\"footer background--black grid-container\" role=\"contentinfo\">
\t<div class=\"container main-width\">
\t\t<div class=\"col\">
\t\t\t<div class=\"logoSection\">
\t\t\t\t<a href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_path"] ?? null), "html", null, true);
        yield "/\" aria-label=\"Photosnap home\">
\t\t\t\t\t";
        // line 9
        yield from $this->loadTemplate("components/logo/logo.twig", "components/footer/footer.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "\t\t\t\t</a>
\t\t\t</div>

\t\t\t<nav class=\"socialLinks\" aria-label=\"Social media links\">
\t\t\t\t<h2 class=\"visually-hidden\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "social", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        yield "</h2>
\t\t\t\t<ul role=\"list\">
\t\t\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "social", [], "any", false, false, false, 16), "links", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 17
            yield "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 18), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "label", [], "any", false, false, false, 18), "html", null, true);
            yield " (opens in new window)\">
\t\t\t\t\t\t\t\t<i class=\"fa ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "icon", [], "any", false, false, false, 19), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "\t\t\t\t</ul>
\t\t\t</nav>

\t\t\t<nav class=\"pageLinks\" aria-label=\"Site pages\">
\t\t\t\t<h2 class=\"visually-hidden\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "navigation", [], "any", false, false, false, 27), "title", [], "any", false, false, false, 27), "html", null, true);
        yield "</h2>
\t\t\t\t<ul role=\"list\">
\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "navigation", [], "any", false, false, false, 29), "links", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 30
            yield "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_path"] ?? null), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 31), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "text", [], "any", false, false, false, 31), "html", null, true);
            yield "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>

\t\t<div class=\"col\">
\t\t\t";
        // line 39
        yield from $this->loadTemplate("components/button/button.twig", "components/footer/footer.twig", 39)->unwrap()->yield(CoreExtension::merge($context, ["text" => "Get an invite", "variant" => "secondary", "ariaLabel" => "Get an invite to join Photosnap", "class" => "inviteButton"]));
        // line 45
        yield "
\t\t\t<div class=\"copyright\">
\t\t\t\t<p>Copyright
\t\t\t\t\t";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield ". All Rights Reserved</p>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/footer/footer.twig";
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
        return array (  137 => 48,  132 => 45,  130 => 39,  123 => 34,  111 => 31,  108 => 30,  104 => 29,  99 => 27,  93 => 23,  83 => 19,  77 => 18,  74 => 17,  70 => 16,  65 => 14,  59 => 10,  57 => 9,  53 => 8,  47 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set data = footer %}

{# Footer Component #}
<footer class=\"footer background--black grid-container\" role=\"contentinfo\">
\t<div class=\"container main-width\">
\t\t<div class=\"col\">
\t\t\t<div class=\"logoSection\">
\t\t\t\t<a href=\"{{ base_path }}/\" aria-label=\"Photosnap home\">
\t\t\t\t\t{% include 'components/logo/logo.twig' %}
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<nav class=\"socialLinks\" aria-label=\"Social media links\">
\t\t\t\t<h2 class=\"visually-hidden\">{{ data.social.title }}</h2>
\t\t\t\t<ul role=\"list\">
\t\t\t\t\t{% for link in data.social.links %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ link.url }}\" target=\"_blank\" rel=\"noopener noreferrer\" aria-label=\"{{ link.label }} (opens in new window)\">
\t\t\t\t\t\t\t\t<i class=\"fa {{ link.icon }}\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</nav>

\t\t\t<nav class=\"pageLinks\" aria-label=\"Site pages\">
\t\t\t\t<h2 class=\"visually-hidden\">{{ data.navigation.title }}</h2>
\t\t\t\t<ul role=\"list\">
\t\t\t\t\t{% for link in data.navigation.links %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ base_path }}{{ link.url }}\">{{ link.text }}</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>

\t\t<div class=\"col\">
\t\t\t{% include 'components/button/button.twig' with {
        text: 'Get an invite',
        variant: 'secondary',
        ariaLabel: 'Get an invite to join Photosnap',
        class: 'inviteButton'
      } %}

\t\t\t<div class=\"copyright\">
\t\t\t\t<p>Copyright
\t\t\t\t\t{{ \"now\"|date(\"Y\") }}. All Rights Reserved</p>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
", "components/footer/footer.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/components/footer/footer.twig");
    }
}
