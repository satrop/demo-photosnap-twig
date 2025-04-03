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

/* pages/404.twig */
class __TwigTemplate_b12521b0847b31aa6e1e521a8a353330 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layouts/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/base.twig", "pages/404.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "  ";
        yield from $this->loadTemplate("components/hero/hero.twig", "pages/404.twig", 4)->unwrap()->yield(CoreExtension::merge($context, ["variant" => "side-by-side", "image" => "/shared/desktop/bg-beta.jpg", "imageAlt" => "Page not found", "title" => "Page Not Found", "excerpt" => "Sorry, we couldn't find the page you're looking for. Please check the URL or return to the homepage.", "buttonText" => "Return Home", "buttonHref" => "/", "backgroundColor" => "black", "standout" => true, "short" => true]));
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/404.twig";
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
        return array (  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/base.twig' %}

{% block content %}
  {% include 'components/hero/hero.twig' with {
    variant: 'side-by-side',
    image: '/shared/desktop/bg-beta.jpg',
    imageAlt: 'Page not found',
    title: 'Page Not Found',
    excerpt: 'Sorry, we couldn\\'t find the page you\\'re looking for. Please check the URL or return to the homepage.',
    buttonText: 'Return Home',
    buttonHref: '/',
    backgroundColor: 'black',
    standout: true,
    short: true
  } %}
{% endblock %}", "pages/404.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/pages/404.twig");
    }
}
