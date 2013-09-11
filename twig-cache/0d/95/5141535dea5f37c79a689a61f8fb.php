<?php

/* components/hdr-megamenu.html */
class __TwigTemplate_0d955141535dea5f37c79a689a61f8fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section class=\"hdr-megamenu\">
    <article class=\"nav-storylist-mod ui-block-1\">
        <div class=\"ui-block-inner\">
            <ul class=\"nav-storylist\">

                ";
        // line 6
        if ($this->getAttribute((isset($context["nav_term"]) ? $context["nav_term"] : null), "previewed_posts")) {
            // line 7
            echo "                    ";
            $context["previewed_posts"] = $this->getAttribute((isset($context["nav_term"]) ? $context["nav_term"] : null), "previewed_posts");
            // line 8
            echo "                ";
        } elseif (($this->getAttribute((isset($context["nav_term"]) ? $context["nav_term"] : null), "previewed_posts") == "null")) {
            // line 9
            echo "                    ";
            $context["previewed_posts"] = false;
            // line 10
            echo "                ";
        } else {
            // line 11
            echo "                    ";
            $context["previewed_posts"] = $this->getAttribute((isset($context["nav_term"]) ? $context["nav_term"] : null), "get_posts", array(0 => 3, 1 => "any", 2 => "InkwellArticle"), "method");
            // line 12
            echo "                ";
        }
        // line 13
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["previewed_posts"]) ? $context["previewed_posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 14
            echo "                    <li class=\"nav-story-item media-block\">
                        <h3 class=\"h4 nav-story-h\"><a href=\"";
            // line 15
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "path");
            echo "\">";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title");
            echo "</a></h3>
                        <p class=\"tz-txt nav-story-txt\">";
            // line 16
            echo strip_tags($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "get_preview", array(0 => 15, 1 => true, 2 => ""), "method"));
            echo "</p>
                        <a class=\"read-more\" href=\"";
            // line 17
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "path");
            echo "\">Read more &raquo;</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </ul>
        </div> <!-- /ui-block-inner -->
    </article><!-- /nav-storylist-mod -->

    ";
        // line 24
        if ($this->getAttribute((isset($context["nav_term"]) ? $context["nav_term"] : null), "drop_down_links")) {
            // line 25
            echo "    <article class=\"nav-subcats-mod ui-block-2\">
        <h4 class=\"nav-subcats-h\">More ";
            // line 26
            echo (isset($context["nav_term"]) ? $context["nav_term"] : null);
            echo "</h4>
        <ul class=\"nav-subcats\">
            ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["nav_term"]) ? $context["nav_term"] : null), "drop_down_links"));
            foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
                // line 29
                echo "                <li class=\"subcat-item\"><a href=\"";
                echo $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "get_path");
                echo "\">";
                echo trim($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "name"));
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        </ul>
    </article><!-- /nav-subcats-mod -->
    ";
        }
        // line 34
        echo "
</section><!-- hdr-megamenu -->";
    }

    public function getTemplateName()
    {
        return "components/hdr-megamenu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 34,  104 => 31,  89 => 28,  79 => 24,  73 => 20,  64 => 17,  60 => 16,  46 => 13,  43 => 12,  40 => 11,  37 => 10,  110 => 56,  96 => 55,  93 => 29,  76 => 53,  44 => 24,  65 => 32,  63 => 31,  58 => 29,  38 => 12,  19 => 1,  84 => 26,  81 => 25,  77 => 3,  74 => 2,  69 => 24,  67 => 23,  62 => 21,  56 => 17,  54 => 15,  51 => 14,  45 => 12,  41 => 11,  36 => 8,  34 => 9,  30 => 6,  26 => 6,  23 => 2,  21 => 1,  31 => 8,  28 => 7,);
    }
}
