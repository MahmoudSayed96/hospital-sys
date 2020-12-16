<?php
/**
* @file
* Contains App/Helpers/Helper.php.
*
* Implements php helper functions using in my project.
*
*/

if(!function_exists('is_current_route')) {
    /**
     * @param $routeName ex.departments 
     *  @return bool
     */
     function is_current_route($route_name = '') {
       return NULL !== request()->segment(2) && request()->segment(2) == $route_name ? true : false;
     }
  }
  
  /**
   * Implements function to get current user.
   *
   * @return App\User $user.
   *  Return current user object.
   */
  if (!function_exists('currentUser')) {
      function currentUser() {
          return auth()->user();
      }
  }
  
  /**
   * Create slug.
   *
   * @param string $src.
   *  Sources string.
   * @return string $slug
   * Return slug.
   */
  if (!function_exists('slug')) {
    function slug(string $value = NULL)
    {
        return strtolower(trim(str_replace(' ', '-', $value)));
    }
  }
  
  /**
   * Get admin based on guard.
   * Return guard admin.
   */
  if (!function_exists('admin')) {
    function admin()
    {
    return auth()->guard('admin');
    }
  }

  /**
   * Get dashboard route name.
   * Change dashboard/admin prefix name from one place.
   * 
   * @param $route.
   * Route name 'sections.index'
   * @param $data.
   * 
   * @return String
   */
  if (!function_exists('admin_route_name')) {
    function admin_route_name($route = 'welcome', $data=[])
    {
        return 'admin.' . $route;
    }
  }

  /**
   * Get dashboard route name.
   * Change dashboard/admin prefix name from one place.
   * 
   * @param $route.
   * Route name 'sections.index'
   * @param $data.
   * 
   * @return \Illuminate\Http\Response $route_object.
   */
  if (!function_exists('admin_route')) {
    function admin_route($route = 'welcome', $data=[])
    {
        return route('admin.' . $route, $data);
    }
}