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

/* components/story-card/story-card.twig */
class __TwigTemplate_61d3125a3f12a82a4af5670b49e312b2 extends Template
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
        // line 9
        yield "
<article class=\"story-card\">
\t<a href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["href"] ?? null), "html", null, true);
        yield "\"  aria-labelledby=\"story-title-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["title"] ?? null), [" " => "-"])), "html", null, true);
        yield "\">
\t\t<div class=\"story-card__image-container\">
\t\t\t<img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image"] ?? null), "html", null, true);
        yield "\" alt=\"\" ";
        yield " class=\"story-card__image\" aria-hidden=\"true\"/>
\t\t</div>
\t\t<div class=\"story-card__content\">
\t\t\t";
        // line 16
        if (($context["date"] ?? null)) {
            // line 17
            yield "\t\t\t\t<time class=\"story-card__date\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["date"] ?? null), "html", null, true);
            yield "</time>
\t\t\t";
        }
        // line 19
        yield "\t\t\t<h3 id=\"story-title-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["title"] ?? null), [" " => "-"])), "html", null, true);
        yield "\" class=\"story-card__title\">
\t\t\t\t";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "
\t\t\t</h3>
\t\t\t<p class=\"story-card__author\">by
\t\t\t\t";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["author"] ?? null), "html", null, true);
        yield "</p>
\t\t\t<hr class=\"story-card__divider\" aria-hidden=\"true\"/>
\t\t\t<div class=\"story-card__cta\">
\t\t\t\t";
        // line 26
        yield from $this->loadTemplate("components/button/button.twig", "components/story-card/story-card.twig", 26)->unwrap()->yield(CoreExtension::merge($context, ["text" => "Read Story", "variant" => "secondary", "ariaLabel" => ("Read story about " .         // line 29
($context["title"] ?? null)), "ariaHidden" => true, "tabindex" =>  -1]));
        // line 33
        yield "\t\t\t</div>
\t\t</div>
\t</a>
</article>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/story-card/story-card.twig";
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
        return array (  88 => 33,  86 => 29,  85 => 26,  79 => 23,  73 => 20,  68 => 19,  62 => 17,  60 => 16,  53 => 13,  46 => 11,  42 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# 
  StoryCard Component
  @param {string} image - The image URL
  @param {string} date - Optional date of the story
  @param {string} title - The story title
  @param {string} author - The author name
  @param {string} href - The link URL
#}

<article class=\"story-card\">
\t<a href=\"{{ href }}\"  aria-labelledby=\"story-title-{{ title|replace({' ': '-'})|lower }}\">
\t\t<div class=\"story-card__image-container\">
\t\t\t<img src=\"{{ image }}\" alt=\"\" {# Decorative image, content described in title/text #} class=\"story-card__image\" aria-hidden=\"true\"/>
\t\t</div>
\t\t<div class=\"story-card__content\">
\t\t\t{% if date %}
\t\t\t\t<time class=\"story-card__date\">{{ date }}</time>
\t\t\t{% endif %}
\t\t\t<h3 id=\"story-title-{{ title|replace({' ': '-'})|lower }}\" class=\"story-card__title\">
\t\t\t\t{{ title }}
\t\t\t</h3>
\t\t\t<p class=\"story-card__author\">by
\t\t\t\t{{ author }}</p>
\t\t\t<hr class=\"story-card__divider\" aria-hidden=\"true\"/>
\t\t\t<div class=\"story-card__cta\">
\t\t\t\t{% include 'components/button/button.twig' with {
          text: 'Read Story',
          variant: 'secondary',
          ariaLabel: 'Read story about ' ~ title,
          ariaHidden: true,
          tabindex: -1
        } %}
\t\t\t</div>
\t\t</div>
\t</a>
</article>
", "components/story-card/story-card.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/components/story-card/story-card.twig");
    }
}
