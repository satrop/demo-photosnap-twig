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

/* pages/index.twig */
class __TwigTemplate_ddc17178cd5491b9d1a956fd1701e574 extends Template
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
        $this->parent = $this->loadTemplate("layouts/base.twig", "pages/index.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield from $this->loadTemplate("components/hero/hero.twig", "pages/index.twig", 5)->unwrap()->yield(CoreExtension::merge($context, ["variant" => "side-by-side", "image" => "images/home/desktop/create-and-share.jpg", "imageAlt" => "Create and share your photo stories.", "title" => "Create and share your photo stories.", "excerpt" => "Photosnap is a platform for photographers and visual storytellers. We make it easy to share photos, tell stories and connect with others.", "buttonText" => "Get an invite", "buttonHref" => "/stories/", "backgroundColor" => "black", "imagePosition" => "right", "standout" => true]));
        // line 17
        yield "
";
        // line 19
        yield from $this->loadTemplate("components/hero/hero.twig", "pages/index.twig", 19)->unwrap()->yield(CoreExtension::merge($context, ["variant" => "side-by-side", "image" => "images/home/desktop/beautiful-stories.jpg", "imageAlt" => "Beautiful stories every time", "title" => "Beautiful stories every time.", "excerpt" => "We provide design templates to ensure your stories look terrific. Easily add photos, text, embed maps and media from other networks. Then share your story with everyone.", "buttonText" => "View the stories", "buttonHref" => "/stories/", "backgroundColor" => "white"]));
        // line 29
        yield "
";
        // line 31
        yield from $this->loadTemplate("components/hero/hero.twig", "pages/index.twig", 31)->unwrap()->yield(CoreExtension::merge($context, ["variant" => "side-by-side", "image" => "images/home/desktop/designed-for-everyone.jpg", "imageAlt" => "Designed for everyone", "title" => "Designed for everyone.", "excerpt" => "Photosnap can help you create stories that resonate with your audience. Our tool is designed for photographers of all levels, brands, businesses you name it.", "buttonText" => "View the stories", "buttonHref" => "/stories/", "backgroundColor" => "white"]));
        // line 41
        yield "
";
        // line 43
        yield "<section class=\"stories-section full-width\">
\t<div class=\"story-cards-grid\">
\t\t";
        // line 45
        $context["stories"] = [["image" => "images/stories/desktop/mountains.jpg", "date" => "April 16th 2023", "title" => "The Mountains", "author" => "John Appleseed", "href" => "/stories/"], ["image" => "images/stories/desktop/cityscapes.jpg", "date" => "April 14th 2023", "title" => "Sunset Cityscapes", "author" => "Benjamin Cruz", "href" => "/stories/"], ["image" => "images/stories/desktop/18-days-voyage.jpg", "date" => "April 11th 2023", "title" => "18 Days Voyage", "author" => "Alexei Borodin", "href" => "/stories/"], ["image" => "images/stories/desktop/architecturals.jpg", "date" => "April 9th 2023", "title" => "Architecturals", "author" => "Samantha Brooks", "href" => "/stories/"]];
        // line 75
        yield "
\t\t";
        // line 76
        $context["displayStories"] = ((array_key_exists("maxStories", $context)) ? (Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["stories"] ?? null), 0, ($context["maxStories"] ?? null))) : (($context["stories"] ?? null)));
        // line 77
        yield "
\t\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["displayStories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["story"]) {
            // line 79
            yield "\t\t\t";
            yield from $this->loadTemplate("components/story-card/story-card.twig", "pages/index.twig", 79)->unwrap()->yield(CoreExtension::merge($context, $context["story"]));
            // line 80
            yield "\t\t";
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
        unset($context['_seq'], $context['_key'], $context['story'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "\t</div>
</section>

";
        // line 85
        yield "<section class=\"features-section\">
\t<div class=\"feature-cards-container\">
\t\t";
        // line 87
        $context["features"] = [["icon" => "images/features/desktop/responsive.svg", "title" => "100% Responsive", "description" => "No matter which device you're on, our site is fully responsive and stories look beautiful on any screen.", "width" => 72, "height" => 72], ["icon" => "images/features/desktop/no-limit.svg", "title" => "No Photo Upload Limit", "description" => "Our tool has no limits on uploads or bandwidth. Freely upload in bulk and share all of your stories in one go.", "width" => 72, "height" => 36], ["icon" => "images/features/desktop/embed.svg", "title" => "Available to Embed", "description" => "Embed Tweets, Facebook posts, Instagram media, Vimeo or YouTube videos, Google Maps, and more.", "width" => 71, "height" => 72]];
        // line 110
        yield "
      ";
        // line 111
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
            // line 112
            yield "        ";
            yield from $this->loadTemplate("components/feature-card/feature-card.twig", "pages/index.twig", 112)->unwrap()->yield(CoreExtension::merge($context, $context["feature"]));
            // line 113
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
        // line 114
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
        return "pages/index.twig";
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
        return array (  169 => 114,  155 => 113,  152 => 112,  135 => 111,  132 => 110,  130 => 87,  126 => 85,  121 => 81,  107 => 80,  104 => 79,  87 => 78,  84 => 77,  82 => 76,  79 => 75,  77 => 45,  73 => 43,  70 => 41,  68 => 31,  65 => 29,  63 => 19,  60 => 17,  58 => 5,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/base.twig' %}

{% block content %}
{# Create and Share Hero #}
{% include 'components/hero/hero.twig' with {
    variant: 'side-by-side',
    image: 'images/home/desktop/create-and-share.jpg',
    imageAlt: 'Create and share your photo stories.',
    title: 'Create and share your photo stories.',
    excerpt: 'Photosnap is a platform for photographers and visual storytellers. We make it easy to share photos, tell stories and connect with others.',
    buttonText: 'Get an invite',
    buttonHref: '/stories/',
    backgroundColor: 'black',
    imagePosition: 'right',
    standout: true
  } %}

{# Beautiful Stories Hero #}
{% include 'components/hero/hero.twig' with {
    variant: 'side-by-side',
    image: 'images/home/desktop/beautiful-stories.jpg',
    imageAlt: 'Beautiful stories every time',
    title: 'Beautiful stories every time.',
    excerpt: 'We provide design templates to ensure your stories look terrific. Easily add photos, text, embed maps and media from other networks. Then share your story with everyone.',
    buttonText: 'View the stories',
    buttonHref: '/stories/',
    backgroundColor: 'white'
  } %}

{# Designed for Everyone Hero #}
{% include 'components/hero/hero.twig' with {
    variant: 'side-by-side',
    image: 'images/home/desktop/designed-for-everyone.jpg',
    imageAlt: 'Designed for everyone',
    title: 'Designed for everyone.',
    excerpt: 'Photosnap can help you create stories that resonate with your audience. Our tool is designed for photographers of all levels, brands, businesses you name it.',
    buttonText: 'View the stories',
    buttonHref: '/stories/',
    backgroundColor: 'white'
  } %}

{# Stories Section #}
<section class=\"stories-section full-width\">
\t<div class=\"story-cards-grid\">
\t\t{% set stories = [
        {
          image: 'images/stories/desktop/mountains.jpg',
          date: 'April 16th 2023',
          title: 'The Mountains',
          author: 'John Appleseed',
          href: '/stories/'
        },
        {
          image: 'images/stories/desktop/cityscapes.jpg',
          date: 'April 14th 2023',
          title: 'Sunset Cityscapes',
          author: 'Benjamin Cruz',
          href: '/stories/'
        },
        {
          image: 'images/stories/desktop/18-days-voyage.jpg',
          date: 'April 11th 2023',
          title: '18 Days Voyage',
          author: 'Alexei Borodin',
          href: '/stories/'
        },
        {
          image: 'images/stories/desktop/architecturals.jpg',
          date: 'April 9th 2023',
          title: 'Architecturals',
          author: 'Samantha Brooks',
          href: '/stories/'
        }
      ] %}

\t\t{% set displayStories = maxStories is defined ? stories|slice(0, maxStories) : stories %}

\t\t{% for story in displayStories %}
\t\t\t{% include 'components/story-card/story-card.twig' with story %}
\t\t{% endfor %}
\t</div>
</section>

{# Features Section #}
<section class=\"features-section\">
\t<div class=\"feature-cards-container\">
\t\t{% set features = [
        {
          icon: 'images/features/desktop/responsive.svg',
          title: '100% Responsive',
          description: 'No matter which device you\\'re on, our site is fully responsive and stories look beautiful on any screen.',
          width: 72,
          height: 72
        },
        {
          icon: 'images/features/desktop/no-limit.svg',
          title: 'No Photo Upload Limit',
          description: 'Our tool has no limits on uploads or bandwidth. Freely upload in bulk and share all of your stories in one go.',
          width: 72,
          height: 36
        },
        {
          icon: 'images/features/desktop/embed.svg',
          title: 'Available to Embed',
          description: 'Embed Tweets, Facebook posts, Instagram media, Vimeo or YouTube videos, Google Maps, and more.',
          width: 71,
          height: 72
        }
      ] %}

      {% for feature in features %}
        {% include 'components/feature-card/feature-card.twig' with feature %}
      {% endfor %}
    </div>
  </section>
{% endblock %}
", "pages/index.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/pages/index.twig");
    }
}
