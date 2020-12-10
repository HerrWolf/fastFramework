<?php

namespace fastFramework\kernel;


use fastFramework\helper\routing\RoutingHelper;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

/**
 * {@inheritdoc}
 */
class FastFrameworkHttpKernel extends HttpKernel
{

    /**
     * @var FastFrameworkHttpKernel $kernel
     * Singleton var to avoid multiple kernel instances.
     */
    public static $kernel = NULL;

    /**
     * Singleton method to return the kernel instance.
     *
     * @return FastFrameworkHttpKernel
     */
    public static function getInstance()
    {
        if (empty(self::$kernel)) {
            $dispatcher = new EventDispatcher();
            $controllerResolver = new ControllerResolver();
            $requestStack = new RequestStack();
            $argumentResolver = new ArgumentResolver();
            self::$kernel = new FastFrameworkHttpKernel($dispatcher, $controllerResolver, $requestStack, $argumentResolver);
        }
        return self::$kernel;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(Request $request, $type = HttpKernelInterface::MASTER_REQUEST, $catch = TRUE)
    {

        $routes = RoutingHelper::getCompleteRouteCollection();
        $context = new RequestContext();
        $context->fromRequest($request);

        $matcher = new UrlMatcher($routes, $context);
        $parameters = $matcher->match($request->getPathInfo());
        $request->attributes->add($parameters);
        return parent::handle($request, $type, $catch);
    }
}
