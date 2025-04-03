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

/* pages/stories.twig */
class __TwigTemplate_b68037ac9d51dae2ee0e14f3d1041fbf extends Template
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
        $this->parent = $this->loadTemplate("layouts/base.twig", "pages/stories.twig", 1);
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
        $context["featuredStory"] = ["image" => "/stories/desktop/moon-of-appalacia.jpg", "title" => "Hazy full moon of Appalachia", "author" => "John Doe", "date" => "March 2nd 2020", "href" => "/dummy-link/", "excerpt" => "The dissected plateau area, while not actually made up of geological mountains, is popularly called \"mountains,\" especially in eastern Kentucky and West Virginia, and while the ridges are not high, the terrain is extremely rugged."];
        // line 13
        yield "
  ";
        // line 14
        yield from $this->loadTemplate("components/hero/hero.twig", "pages/stories.twig", 14)->unwrap()->yield(CoreExtension::merge($context, Twig\Extension\CoreExtension::merge(($context["featuredStory"] ?? null), ["variant" => "overlay", "eyebrow" => "Last month's featured story", "buttonText" => "Read the story", "backgroundColor" => "black"])));
        // line 20
        yield "
  ";
        // line 22
        yield "  <section class=\"stories-section full-width\" data-featured>
    <div class=\"story-cards-grid\">
      ";
        // line 24
        $context["stories"] = [["image" => "/stories/desktop/mountains.jpg", "title" => "The Mountains", "author" => "John Appleseed", "href" => "/dummy-link/", "date" => "April 16th 2020"], ["image" => "/stories/desktop/cityscapes.jpg", "title" => "Sunset Cityscapes", "author" => "Benjamin Cruz", "href" => "/dummy-link/", "date" => "April 14th 2020"], ["image" => "/stories/desktop/18-days-voyage.jpg", "title" => "18 Days Voyage", "author" => "Alexei Borodin", "href" => "/dummy-link/", "date" => "April 11th 2020"], ["image" => "/stories/desktop/architecturals.jpg", "title" => "Architecturals", "author" => "Samantha Brooks", "href" => "/dummy-link/", "date" => "April 10th 2020"], ["image" => "/stories/desktop/world-tour.jpg", "title" => "World Tour 2019", "author" => "Timothy Wagner", "href" => "/dummy-link/", "date" => "April 9th 2020"], ["image" => "/stories/desktop/unforeseen-corners.jpg", "title" => "Unforeseen Corners", "author" => "William Malcolm", "href" => "/dummy-link/", "date" => "April 8th 2020"], ["image" => "/stories/desktop/king-on-africa.jpg", "title" => "King on Africa: Part II", "author" => "Tim Hillenburg", "href" => "/dummy-link/", "date" => "April 7th 2020"], ["image" => "/stories/desktop/trip-to-nowhere.jpg", "title" => "The Trip to Nowhere", "author" => "Felicia Rourke", "href" => "/dummy-link/", "date" => "April 6th 2020"], ["image" => "/stories/desktop/rage-of-the-sea.jpg", "title" => "Rage of The Sea", "author" => "Mohammed Abdul", "href" => "/dummy-link/", "date" => "April 5th 2020"], ["image" => "/stories/desktop/running-free.jpg", "title" => "Running Free", "author" => "Michelle Thomas", "href" => "/dummy-link/", "date" => "April 4th 2020"], ["image" => "/stories/desktop/behind-the-waves.jpg", "title" => "Behind the Waves", "author" => "Lamarr Wilson", "href" => "/dummy-link/", "date" => "April 3rd 2020"], ["image" => "/stories/desktop/calm-waters.jpg", "title" => "Calm Waters", "author" => "Samantha Brooke", "href" => "/dummy-link/", "date" => "April 3rd 2020"], ["image" => "/stories/desktop/milky-way.jpg", "title" => "The Milky Way", "author" => "Benjamin Cruz", "href" => "/dummy-link/", "date" => "April 2nd 2020"], ["image" => "/stories/desktop/dark-forest.jpg", "title" => "Dark Forest", "author" => "Mohammed Abdul", "href" => "/dummy-link/", "date" => "April 1st 2020"], ["image" => "/stories/desktop/somwarpet.jpg", "title" => "Somwarpet's Beauty", "author" => "Michelle Thomas", "href" => "/dummy-link/", "date" => "March 31st 2020"], ["image" => "/stories/desktop/land-of-dreams.jpg", "title" => "Land of Dreams", "author" => "William Malcolm", "href" => "/dummy-link/", "date" => "March 30th 2020"]];
        // line 138
        yield "
      ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stories"] ?? null));
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
            // line 140
            yield "        ";
            yield from $this->loadTemplate("components/story-card/story-card.twig", "pages/stories.twig", 140)->unwrap()->yield(CoreExtension::merge($context, $context["story"]));
            // line 141
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
        unset($context['_seq'], $context['_key'], $context['story'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
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
        return "pages/stories.twig";
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
        return array (  114 => 142,  100 => 141,  97 => 140,  80 => 139,  77 => 138,  75 => 24,  71 => 22,  68 => 20,  66 => 14,  63 => 13,  60 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layouts/base.twig' %}

{% block content %}
  {# Featured Story Hero #}
  {% set featuredStory = {
    image: '/stories/desktop/moon-of-appalacia.jpg',
    title: 'Hazy full moon of Appalachia',
    author: 'John Doe',
    date: 'March 2nd 2020',
    href: '/dummy-link/',
    excerpt: 'The dissected plateau area, while not actually made up of geological mountains, is popularly called \"mountains,\" especially in eastern Kentucky and West Virginia, and while the ridges are not high, the terrain is extremely rugged.'
  } %}

  {% include 'components/hero/hero.twig' with featuredStory|merge({
    variant: 'overlay',
    eyebrow: 'Last month\\'s featured story',
    buttonText: 'Read the story',
    backgroundColor: 'black'
  }) %}

  {# Stories Grid #}
  <section class=\"stories-section full-width\" data-featured>
    <div class=\"story-cards-grid\">
      {% set stories = [
        {
          image: '/stories/desktop/mountains.jpg',
          title: 'The Mountains',
          author: 'John Appleseed',
          href: '/dummy-link/',
          date: 'April 16th 2020'
        },
        {
          image: '/stories/desktop/cityscapes.jpg',
          title: 'Sunset Cityscapes',
          author: 'Benjamin Cruz',
          href: '/dummy-link/',
          date: 'April 14th 2020'
        },
        {
          image: '/stories/desktop/18-days-voyage.jpg',
          title: '18 Days Voyage',
          author: 'Alexei Borodin',
          href: '/dummy-link/',
          date: 'April 11th 2020'
        },
        {
          image: '/stories/desktop/architecturals.jpg',
          title: 'Architecturals',
          author: 'Samantha Brooks',
          href: '/dummy-link/',
          date: 'April 10th 2020'
        },
        {
          image: '/stories/desktop/world-tour.jpg',
          title: 'World Tour 2019',
          author: 'Timothy Wagner',
          href: '/dummy-link/',
          date: 'April 9th 2020'
        },
        {
          image: '/stories/desktop/unforeseen-corners.jpg',
          title: 'Unforeseen Corners',
          author: 'William Malcolm',
          href: '/dummy-link/',
          date: 'April 8th 2020'
        },
        {
          image: '/stories/desktop/king-on-africa.jpg',
          title: 'King on Africa: Part II',
          author: 'Tim Hillenburg',
          href: '/dummy-link/',
          date: 'April 7th 2020'
        },
        {
          image: '/stories/desktop/trip-to-nowhere.jpg',
          title: 'The Trip to Nowhere',
          author: 'Felicia Rourke',
          href: '/dummy-link/',
          date: 'April 6th 2020'
        },
        {
          image: '/stories/desktop/rage-of-the-sea.jpg',
          title: 'Rage of The Sea',
          author: 'Mohammed Abdul',
          href: '/dummy-link/',
          date: 'April 5th 2020'
        },
        {
          image: '/stories/desktop/running-free.jpg',
          title: 'Running Free',
          author: 'Michelle Thomas',
          href: '/dummy-link/',
          date: 'April 4th 2020'
        },
        {
          image: '/stories/desktop/behind-the-waves.jpg',
          title: 'Behind the Waves',
          author: 'Lamarr Wilson',
          href: '/dummy-link/',
          date: 'April 3rd 2020'
        },
        {
          image: '/stories/desktop/calm-waters.jpg',
          title: 'Calm Waters',
          author: 'Samantha Brooke',
          href: '/dummy-link/',
          date: 'April 3rd 2020'
        },
        {
          image: '/stories/desktop/milky-way.jpg',
          title: 'The Milky Way',
          author: 'Benjamin Cruz',
          href: '/dummy-link/',
          date: 'April 2nd 2020'
        },
        {
          image: '/stories/desktop/dark-forest.jpg',
          title: 'Dark Forest',
          author: 'Mohammed Abdul',
          href: '/dummy-link/',
          date: 'April 1st 2020'
        },
        {
          image: '/stories/desktop/somwarpet.jpg',
          title: 'Somwarpet\\'s Beauty',
          author: 'Michelle Thomas',
          href: '/dummy-link/',
          date: 'March 31st 2020'
        },
        {
          image: '/stories/desktop/land-of-dreams.jpg',
          title: 'Land of Dreams',
          author: 'William Malcolm',
          href: '/dummy-link/',
          date: 'March 30th 2020'
        }
      ] %}

      {% for story in stories %}
        {% include 'components/story-card/story-card.twig' with story %}
      {% endfor %}
    </div>
  </section>
{% endblock %}", "pages/stories.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/pages/stories.twig");
    }
}
