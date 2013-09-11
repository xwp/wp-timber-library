<?php

/* core-image.html */
class __TwigTemplate_276e18600eb35e8d74b9ffe3846ad9d3 extends Twig_Template
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
        echo "<div class=\"core-image-mod ";
        echo (isset($context["align"]) ? $context["align"] : null);
        echo "\">

\t<a href=\"";
        // line 3
        echo (((isset($context["path"]) ? $context["path"] : null)) ? ((isset($context["path"]) ? $context["path"] : null)) : ($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "get_path")));
        echo "\">
\t\t";
        // line 4
        if (((isset($context["letterbox_w"]) ? $context["letterbox_w"] : null) && (isset($context["letterbox_h"]) ? $context["letterbox_h"] : null))) {
            // line 5
            echo "\t\t\t<img src=\"";
            echo wp_resize_letterbox($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "get_url"), (isset($context["letterbox_w"]) ? $context["letterbox_w"] : null), (isset($context["letterbox_h"]) ? $context["letterbox_h"] : null));
            echo "\" class=\"resp-img\"/>
\t\t";
        } elseif ((isset($context["resize_w"]) ? $context["resize_w"] : null)) {
            // line 7
            echo "\t\t\t<img src=\"";
            echo call_user_func_array($this->env->getFilter('resize')->getCallable(), array($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "get_url"), (isset($context["resize_w"]) ? $context["resize_w"] : null)));
            echo "\" class=\"resp-img\"/>
\t\t";
        } else {
            // line 9
            echo "\t\t\t<img src=\"";
            echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "get_url");
            echo "\" class=\"resp-img\"/>
\t\t";
        }
        // line 11
        echo "\t\t
\t</a>
\t";
        // line 13
        if ($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "smugmug_url")) {
            // line 14
            echo "\t\t<a href=\"";
            echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "smugmug_url");
            echo "\" class=\"smugmug\" target=\"_blank\">Purchase this photo </a>
\t";
        }
        // line 16
        echo "\t<figcaption class=\"photo-caption\">
\t\t<p class=\"byline\">";
        // line 17
        echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "credit_html");
        echo "</p>
\t\t<p class=\"tz-txt\">";
        // line 18
        echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "caption");
        echo "
\t\t";
        // line 19
        if ($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "can_edit")) {
            // line 20
            echo "\t\t\t<a href=\"/wp-admin/post.php?post=";
            echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "ID");
            echo "&amp;action=edit\">Edit Image</a>
\t\t";
        }
        // line 22
        echo "\t\t</p>
\t</figcaption>

</div>";
    }

    public function getTemplateName()
    {
        return "core-image.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  74 => 20,  72 => 19,  68 => 18,  64 => 17,  61 => 16,  55 => 14,  53 => 13,  49 => 11,  43 => 9,  37 => 7,  31 => 5,  29 => 4,  25 => 3,  19 => 1,);
    }
}
