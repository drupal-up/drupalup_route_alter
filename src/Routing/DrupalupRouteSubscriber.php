<?php
/**
 * @file
 * Contains \Drupal\drupalup_route_alter\Routing\RouteSubscriber.
 */

namespace Drupal\drupalup_route_alter\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events.
 */
class DrupalupRouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {

    $user_login_route = $collection->get('user.login');
    $user_login_route->setPath('/hell/login');

    $user_route = $collection->get('user.page');
    $user_route->setPath('/hell');

  }
}