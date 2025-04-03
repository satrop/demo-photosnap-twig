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

/* pages/features.twig */
class __TwigTemplate_b76a7aa391161a2d0e8e1af56b00e4e5 extends Template
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
        $this->parent = $this->loadTemplate("layouts/base.twig", "pages/features.twig", 1);
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
        // line 5
        yield "  ";
        yield from $this->loadTemplate("components/hero/hero.twig", "pages/features.twig", 5)->unwrap()->yield(CoreExtension::merge($context, ["image" => "/features/desktop/hero.jpg", "imageAlt" => "Person taking a photo with a vintage camera", "title" => "Features", "excerpt" => "We make sure all of our features are designed to be loved by every aspiring and even professional photographers who wanted to share their stories.", "variant" => "side-by-side", "backgroundColor" => "black", "standout" => true, "short" => true]));
        // line 15
        yield "
  ";
        // line 17
        yield "  <section class=\"features-section\">
    <div class=\"feature-cards-container\">
      ";
        // line 19
        $context["features"] = [["icon" => "/features/desktop/responsive.svg", "title" => "100% Responsive", "description" => "No matter which device you're on, our site is fully responsive and stories look beautiful on any screen.", "width" => 72, "height" => 72], ["icon" => "/features/desktop/no-limit.svg", "title" => "No Photo Upload Limit", "description" => "Our tool has no limits on uploads or bandwidth. Freely upload in bulk and share all of your stories in one go.", "width" => 72, "height" => 36], ["icon" => "/features/desktop/embed.svg", "title" => "Available to Embed", "description" => "Embed Tweets, Facebook posts, Instagram media, Vimeo or YouTube videos, Google Maps, and more.", "width" => 71, "height" => 72], ["icon" => "/features/desktop/custom-domain.svg", "title" => "Custom Domain", "description" => "With Photosnap subscriptions you can host your stories on your own domain. You can also remove our branding!", "width" => 81, "height" => 72], ["icon" => "/features/desktop/boost-exposure.svg", "title" => "Boost Your Exposure", "description" => "Users that viewed your story or gallery can easily get notified of new and featured stories with our built in mailing list.", "width" => 72, "height" => 72], ["icon" => "/features/desktop/drag-drop.svg", "title" => "Drag & Drop Image", "description" => "Easily drag and drop your image and get beautiful shots every time. No over the top tooling to add friction to creating stories.", "width" => 91, "height" => 72]];
        // line 63
        yield "
      ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["features"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 65
            yield "        ";
            yield from $this->loadTemplate("components/feature-card/feature-card.twig", "pages/features.twig", 65)->unwrap()->yield(CoreExtension::merge($context, $context["feature"]));
            // line 66
            yield "      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "    </div>
  </section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/features.twig";
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
        return array (  109 => 67,  95 => 66,  92 => 65,  75 => 64,  72 => 63,  70 => 19,  66 => 17,  63 => 15,  60 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/base.twig' %}

{% block content %}
  {# Hero Section #}
  {% include 'components/hero/hero.twig' with {
    image: '/features/desktop/hero.jpg',
    imageAlt: 'Person taking a photo with a vintage camera',
    title: 'Features',
    excerpt: 'We make sure all of our features are designed to be loved by every aspiring and even professional photographers who wanted to share their stories.',
    variant: 'side-by-side',
    backgroundColor: 'black',
    standout: true,
    short: true
  } %}

  {# Features Section #}
  <section class=\"features-section\">
    <div class=\"feature-cards-container\">
      {% set features = [
        {
          icon: '/features/desktop/responsive.svg',
          title: '100% Responsive',
          description: 'No matter which device you\\'re on, our site is fully responsive and stories look beautiful on any screen.',
          width: 72,
          height: 72
        },
        {
          icon: '/features/desktop/no-limit.svg',
          title: 'No Photo Upload Limit',
          description: 'Our tool has no limits on uploads or bandwidth. Freely upload in bulk and share all of your stories in one go.',
          width: 72,
          height: 36
        },
        {
          icon: '/features/desktop/embed.svg',
          title: 'Available to Embed',
          description: 'Embed Tweets, Facebook posts, Instagram media, Vimeo or YouTube videos, Google Maps, and more.',
          width: 71,
          height: 72
        },
        {
          icon: '/features/desktop/custom-domain.svg',
          title: 'Custom Domain',
          description: 'With Photosnap subscriptions you can host your stories on your own domain. You can also remove our branding!',
          width: 81,
          height: 72
        },
        {
          icon: '/features/desktop/boost-exposure.svg',
          title: 'Boost Your Exposure',
          description: 'Users that viewed your story or gallery can easily get notified of new and featured stories with our built in mailing list.',
          width: 72,
          height: 72
        },
        {
          icon: '/features/desktop/drag-drop.svg',
          title: 'Drag & Drop Image',
          description: 'Easily drag and drop your image and get beautiful shots every time. No over the top tooling to add friction to creating stories.',
          width: 91,
          height: 72
        }
      ] %}

      {% for feature in features %}
        {% include 'components/feature-card/feature-card.twig' with feature %}
      {% endfor %}
    </div>
  </section>
{% endblock %}", "pages/features.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/pages/features.twig");
    }
}
