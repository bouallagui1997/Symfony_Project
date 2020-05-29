<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // forum_default_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ForumBundle\\Controller\\DefaultController::indexAction',  '_route' => 'forum_default_index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_forum_default_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'forum_default_index'));
            }

            return $ret;
        }
        not_forum_default_index:

        if (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/listeQuestion')) {
                // listeQuestion
                if ('/listeQuestion' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\QuestionController::AfficherDbAction',  '_route' => 'listeQuestion',);
                }

                // listeQuestionDASHBOARD
                if ('/listeQuestionDASHBOARD' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\QuestionController::listeQuestionDASHBOARDAction',  '_route' => 'listeQuestionDASHBOARD',);
                }

                if (0 === strpos($pathinfo, '/listeQuestionpdf')) {
                    // listeQuestionpdf
                    if ('/listeQuestionpdf' === $pathinfo) {
                        return array (  '_controller' => 'ForumBundle\\Controller\\QuestionController::QuestionpdfAction',  '_route' => 'listeQuestionpdf',);
                    }

                    // listeQuestionpdfDASHBOARD
                    if ('/listeQuestionpdfDASHBOARD' === $pathinfo) {
                        return array (  '_controller' => 'ForumBundle\\Controller\\QuestionController::QuestionpdfDASHBOARDAction',  '_route' => 'listeQuestionpdfDASHBOARD',);
                    }

                }

                // listeQuestionMobile
                if ('/listeQuestionMobile' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\QuestionMobileController::AfficherDbMobileAction',  '_route' => 'listeQuestionMobile',);
                }

            }

            elseif (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_security_login;
                    }

                    return $ret;
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_security_check;
                    }

                    return $ret;
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_logout;
                }

                return $ret;
            }
            not_fos_user_security_logout:

        }

        elseif (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/ajoutQuestion')) {
                // ajoutQuestion
                if ('/ajoutQuestion' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\QuestionController::ajouterQestionAction',  '_route' => 'ajoutQuestion',);
                }

                // ajoutQuestionMobile
                if ('/ajoutQuestionMobile' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\QuestionMobileController::ajouterQestionAction',  '_route' => 'ajoutQuestionMobile',);
                }

            }

            elseif (0 === strpos($pathinfo, '/ajoutReponse')) {
                // ajoutReponse
                if (preg_match('#^/ajoutReponse/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'ajoutReponse']), array (  '_controller' => 'ForumBundle\\Controller\\ReponseController::ajouteReponseAction',));
                }

                // ajoutReponseMobile
                if ('/ajoutReponseMobile' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\ReponseMobileController::ajouteReponseAction',  '_route' => 'ajoutReponseMobile',);
                }

            }

            // affichequestion
            if ('/affichequestion' === $pathinfo) {
                return array (  '_controller' => 'ForumBundle\\Controller\\QuestionMobileController::affichequestionAction',  '_route' => 'affichequestion',);
            }

            if (0 === strpos($pathinfo, '/affichereponse')) {
                // affichereponse
                if (preg_match('#^/affichereponse/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'affichereponse']), array (  '_controller' => 'ForumBundle\\Controller\\ReponseController::affichereponseAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_affichereponse;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'affichereponse'));
                    }

                    return $ret;
                }
                not_affichereponse:

                // affichereponseDASHBOARD
                if (0 === strpos($pathinfo, '/affichereponseDASHBOARD') && preg_match('#^/affichereponseDASHBOARD/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'affichereponseDASHBOARD']), array (  '_controller' => 'ForumBundle\\Controller\\ReponseController::affichereponseDASHBOARDAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_affichereponseDASHBOARD;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'affichereponseDASHBOARD'));
                    }

                    return $ret;
                }
                not_affichereponseDASHBOARD:

                if (0 === strpos($pathinfo, '/affichereponsepdf')) {
                    // affichereponsepdf
                    if (preg_match('#^/affichereponsepdf/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'affichereponsepdf']), array (  '_controller' => 'ForumBundle\\Controller\\ReponseController::affichereponsepdfAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_affichereponsepdf;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'affichereponsepdf'));
                        }

                        return $ret;
                    }
                    not_affichereponsepdf:

                    // affichereponsepdfDASHBOARD
                    if (0 === strpos($pathinfo, '/affichereponsepdfDASHBOARD') && preg_match('#^/affichereponsepdfDASHBOARD/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'affichereponsepdfDASHBOARD']), array (  '_controller' => 'ForumBundle\\Controller\\ReponseController::affichereponsepdfDASHBOARDAction',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_affichereponsepdfDASHBOARD;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'affichereponsepdfDASHBOARD'));
                        }

                        return $ret;
                    }
                    not_affichereponsepdfDASHBOARD:

                }

                // affichereponseMobile
                if (0 === strpos($pathinfo, '/affichereponseMobile') && preg_match('#^/affichereponseMobile/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'affichereponseMobile']), array (  '_controller' => 'ForumBundle\\Controller\\ReponseMobileController::affichereponseMobileAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_affichereponseMobile;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'affichereponseMobile'));
                    }

                    return $ret;
                }
                not_affichereponseMobile:

            }

            // backoffice_homepage
            if ('/admin/dashboard' === $pathinfo) {
                return array (  '_controller' => 'backofficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'backoffice_homepage',);
            }

            // backoffice_category
            if ('/admin/category' === $pathinfo) {
                return array (  '_controller' => 'backofficeBundle\\Controller\\DefaultController::categoryAction',  '_route' => 'backoffice_category',);
            }

        }

        elseif (0 === strpos($pathinfo, '/deletequestion')) {
            // deletequestion
            if (preg_match('#^/deletequestion/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'deletequestion']), array (  '_controller' => 'ForumBundle\\Controller\\QuestionController::deletequestionAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_deletequestion;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'deletequestion'));
                }

                return $ret;
            }
            not_deletequestion:

            // deletequestionMobile
            if (0 === strpos($pathinfo, '/deletequestionMobile') && preg_match('#^/deletequestionMobile/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'deletequestionMobile']), array (  '_controller' => 'ForumBundle\\Controller\\QuestionMobileController::deletequestionMobileAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_deletequestionMobile;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'deletequestionMobile'));
                }

                return $ret;
            }
            not_deletequestionMobile:

            // deletequestionDASHBOARD
            if (0 === strpos($pathinfo, '/deletequestionDASHBOARD') && preg_match('#^/deletequestionDASHBOARD/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'deletequestionDASHBOARD']), array (  '_controller' => 'ForumBundle\\Controller\\QuestionMobileController::deletequestionDASHBOARDAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_deletequestionDASHBOARD;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'deletequestionDASHBOARD'));
                }

                return $ret;
            }
            not_deletequestionDASHBOARD:

        }

        elseif (0 === strpos($pathinfo, '/deletereponse')) {
            // deletereponse
            if (preg_match('#^/deletereponse/(?P<idrep>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'deletereponse']), array (  '_controller' => 'ForumBundle\\Controller\\ReponseController::deletereponseAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_deletereponse;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'deletereponse'));
                }

                return $ret;
            }
            not_deletereponse:

            // deletereponseDASHBOARD
            if (0 === strpos($pathinfo, '/deletereponseDASHBOARD') && preg_match('#^/deletereponseDASHBOARD/(?P<idrep>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'deletereponseDASHBOARD']), array (  '_controller' => 'ForumBundle\\Controller\\ReponseController::deletereponseDASHBOARDAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_deletereponseDASHBOARD;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'deletereponseDASHBOARD'));
                }

                return $ret;
            }
            not_deletereponseDASHBOARD:

            // deletereponseMobile
            if (0 === strpos($pathinfo, '/deletereponseMobile') && preg_match('#^/deletereponseMobile/(?P<idrep>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'deletereponseMobile']), array (  '_controller' => 'ForumBundle\\Controller\\ReponseMobileController::deletereponseAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_deletereponseMobile;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'deletereponseMobile'));
                }

                return $ret;
            }
            not_deletereponseMobile:

        }

        // updatequestion
        if (0 === strpos($pathinfo, '/updatequestion') && preg_match('#^/updatequestion/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'updatequestion']), array (  '_controller' => 'ForumBundle\\Controller\\QuestionMobileController::modifierquestionAction',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_updatequestion;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'updatequestion'));
            }

            return $ret;
        }
        not_updatequestion:

        if (0 === strpos($pathinfo, '/modifierreponse')) {
            // modifierreponse
            if (preg_match('#^/modifierreponse/(?P<idrep>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'modifierreponse']), array (  '_controller' => 'ForumBundle\\Controller\\ReponseController::modifierreponseAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_modifierreponse;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'modifierreponse'));
                }

                return $ret;
            }
            not_modifierreponse:

            // modifierreponseMobile
            if (0 === strpos($pathinfo, '/modifierreponseMobile') && preg_match('#^/modifierreponseMobile/(?P<idrep>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'modifierreponseMobile']), array (  '_controller' => 'ForumBundle\\Controller\\ReponseMobileController::modifierreponseAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_modifierreponseMobile;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'modifierreponseMobile'));
                }

                return $ret;
            }
            not_modifierreponseMobile:

        }

        elseif (0 === strpos($pathinfo, '/shop')) {
            // shop_homepage
            if ('/shop' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'shopBundle\\Controller\\DefaultController::indexAction',  '_route' => 'shop_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_shop_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'shop_homepage'));
                }

                return $ret;
            }
            not_shop_homepage:

            if (0 === strpos($pathinfo, '/shop/category')) {
                // category_index
                if ('/shop/category' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'shopBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_category_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'category_index'));
                    }

                    return $ret;
                }
                not_category_index:

                // category_new
                if ('/shop/category/new' === $pathinfo) {
                    return array (  '_controller' => 'shopBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
                }

                // category_show
                if (preg_match('#^/shop/category/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'category_show']), array (  '_controller' => 'shopBundle\\Controller\\CategoryController::showAction',));
                }

                // category_edit
                if (preg_match('#^/shop/category/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'category_edit']), array (  '_controller' => 'shopBundle\\Controller\\CategoryController::editAction',));
                }

                // category_delete
                if (preg_match('#^/shop/category/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'category_delete']), array (  '_controller' => 'shopBundle\\Controller\\CategoryController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/shop/product')) {
                // product_index
                if ('/shop/product' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'shopBundle\\Controller\\ProductController::indexAction',  '_route' => 'product_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_product_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'product_index'));
                    }

                    return $ret;
                }
                not_product_index:

                // product_new
                if ('/shop/product/new' === $pathinfo) {
                    return array (  '_controller' => 'shopBundle\\Controller\\ProductController::newAction',  '_route' => 'product_new',);
                }

                // product_show
                if (preg_match('#^/shop/product/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'product_show']), array (  '_controller' => 'shopBundle\\Controller\\ProductController::showAction',));
                }

                // product_edit
                if (preg_match('#^/shop/product/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'product_edit']), array (  '_controller' => 'shopBundle\\Controller\\ProductController::editAction',));
                }

                // product_delete
                if (preg_match('#^/shop/product/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'product_delete']), array (  '_controller' => 'shopBundle\\Controller\\ProductController::deleteAction',));
                }

            }

            // shopb
            if ('/shopb' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::shopbAction',  '_route' => 'shopb',);
            }

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/publicite')) {
            // publicite
            if ('/publicite' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::publiciteAction',  '_route' => 'publicite',);
            }

            // publiciteb
            if ('/publiciteb' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::publicitebAction',  '_route' => 'publiciteb',);
            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_registration_register;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                    }

                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_registration_register;
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_check_email;
                    }

                    return $ret;
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirm;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirmed;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_request;
                    }

                    return $ret;
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_resetting_reset;
                    }

                    return $ret;
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_resetting_send_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_check_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_check_email:

            }

            elseif (0 === strpos($pathinfo, '/reclamation')) {
                // reclamation
                if ('/reclamation' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::reclamationAction',  '_route' => 'reclamation',);
                }

                // reclamationb
                if ('/reclamationb' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::reclamationbAction',  '_route' => 'reclamationb',);
                }

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/c')) {
            // cart
            if ('/cart' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::cartAction',  '_route' => 'cart',);
            }

            // commande
            if ('/commande' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::commandeAction',  '_route' => 'commande',);
            }

            if (0 === strpos($pathinfo, '/chatroom')) {
                // fos_message_inbox
                if ('/chatroom' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::inboxAction',  '_route' => 'fos_message_inbox',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_message_inbox;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_message_inbox'));
                    }

                    return $ret;
                }
                not_fos_message_inbox:

                // fos_message_sent
                if ('/chatroom/sent' === $pathinfo) {
                    return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::sentAction',  '_route' => 'fos_message_sent',);
                }

                // fos_message_search
                if ('/chatroom/search' === $pathinfo) {
                    return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::searchAction',  '_route' => 'fos_message_search',);
                }

                // fos_message_deleted
                if ('/chatroom/deleted' === $pathinfo) {
                    return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::deletedAction',  '_route' => 'fos_message_deleted',);
                }

                // fos_message_thread_new
                if ('/chatroom/new' === $pathinfo) {
                    return array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::newThreadAction',  '_route' => 'fos_message_thread_new',);
                }

                // fos_message_thread_delete
                if (preg_match('#^/chatroom/(?P<threadId>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_message_thread_delete']), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::deleteAction',));
                    if (!in_array($requestMethod, ['POST', 'DELETE'])) {
                        $allow = array_merge($allow, ['POST', 'DELETE']);
                        goto not_fos_message_thread_delete;
                    }

                    return $ret;
                }
                not_fos_message_thread_delete:

                // fos_message_thread_undelete
                if (preg_match('#^/chatroom/(?P<threadId>[^/]++)/undelete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_message_thread_undelete']), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::undeleteAction',));
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_message_thread_undelete;
                    }

                    return $ret;
                }
                not_fos_message_thread_undelete:

                // fos_message_thread_view
                if (preg_match('#^/chatroom/(?P<threadId>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_message_thread_view']), array (  '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::threadAction',));
                }

            }

        }

        // equipement
        if ('/equipement' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::equipementAction',  '_route' => 'equipement',);
        }

        if (0 === strpos($pathinfo, '/event')) {
            // event
            if ('/event' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::eventAction',  '_route' => 'event',);
            }

            // eventb
            if ('/eventb' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::eventbAction',  '_route' => 'eventb',);
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
