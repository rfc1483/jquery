<?php

/* AcmeJqueryBundle:Default:basics.html.twig */
class __TwigTemplate_a6368222b848821b3ff55ece78ed6804 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("AcmeJqueryBundle::layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 25
        $context['code'] = $this->env->getExtension('demo')->getCode($this);
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->renderParentBlock("head", $context, $blocks);
        echo "
     <style>
        a.test { font-weight: bold; }
     </style>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    <h1>JQuery</h1>
    <a href=\"http://jquery.com/\">jQuery</a>
    <script>
         \$(document).ready(function(){
             \$(\"a\").click(function(event){
               event.preventDefault();
               \$(this).hide(\"slow\");
             });
             \$(\"a\").addClass(\"test\");
             \$(\"a\").removeClass(\"test\");
         });
    </script>
";
    }

    public function getTemplateName()
    {
        return "AcmeJqueryBundle:Default:basics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
