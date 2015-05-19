<?php

/* OCPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_21fc5dc9f54513e568472ab8e267646cb933a9ad26b9fd415271a1f913a9893f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:delete.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <h2>Supprimer une annonce une annonce</h2>

  ";
        // line 11
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    A faire...
  </p>

";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
