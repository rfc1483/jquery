<?php

/* AcmeJqueryBundle:Default:animate.html.twig */
class __TwigTemplate_6551d9a675af06c0f15f32a7bb01e19a extends Twig_Template
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

        // line 26
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
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(\"button\").click(function(){
                \$(\"div.animate\").animate({height:300},\"slow\");
                \$(\"div.animate\").animate({width:300},\"slow\");
                \$(\"div.animate\").animate({height:100},\"slow\");
                \$(\"div.animate\").animate({width:100},\"slow\");        
            });
        });
    </script>        
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "    <h1>Description</h1>
    
    <button>Start Animation</button>
    <br /><br />
    <div class=\"animate\" style=\"background:#98bf21;height:100px;width:100px;position:relative\">
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeJqueryBundle:Default:animate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
