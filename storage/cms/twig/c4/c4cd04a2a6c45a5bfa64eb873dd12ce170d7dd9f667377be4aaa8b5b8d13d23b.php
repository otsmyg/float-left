<?php

/* /home/floatlef/float-left.com/www/themes/laratify-octobercms-octaskin/pages/contact.htm */
class __TwigTemplate_4005a20fce86ae4fe5223572e740d0677f4a5edcf76214a5e088d028b47d50c3 extends Twig_Template
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
        echo "<section id=\"lt-header\" class=\"lt-section lt-section-fullwidth section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-header-content\">
      ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pages-contact/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </div>
  </div>
</section>

<section id=\"lt-mainpage\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-mainpage-content\">
      ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pages-contact/mainpage"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/floatlef/float-left.com/www/themes/laratify-octobercms-octaskin/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 13,  37 => 12,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"lt-header\" class=\"lt-section lt-section-fullwidth section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-header-content\">
      {% partial \"pages-contact/header\" %}
    </div>
  </div>
</section>

<section id=\"lt-mainpage\" class=\"lt-section section\">
  <div class=\"lt-container container\">
    <div class=\"lt-content lt-mainpage-content\">
      {% partial \"pages-contact/mainpage\" %}
    </div>
  </div>
</section>", "/home/floatlef/float-left.com/www/themes/laratify-octobercms-octaskin/pages/contact.htm", "");
    }
}
