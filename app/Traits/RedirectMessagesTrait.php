<?php

namespace App\Traits;

/**
 * Custom redirect messages.
 */
trait RedirectMessagesTrait {

    /**
     * Implement function for redirect if item not exists.
     *
     * @param string $route
     *  Route name.
     * @param mixed $data
     *  Extra data.
     * @return \Illuminate\Http\Response
     *  Return response.
     */
    public function redirectIfNotFound($route, $message=null, $data = null, $type = null) {
        return redirect()->route($route, $data)->with([
            'message' => $message !== null ? $message : 'Sorry,This item not found.',
            'messageType' => $type !== null ? $type : 'error'
        ]);
    }

    /**
     * Implement function for redirect if success.
     *
     * @param string $route
     *  Route name.
     * @param string $message
     *  Success message.
     * @param mixed $data
     *  Extra data.
     * @return \Illuminate\Http\Response
     *  Return response.
     */
    public function redirectIfSuccess($route = null,$message = null, $data = null, $type = null) {
        return redirect()->route($route, $data)->with([
            'message' => $message,
            'messageType' => $type !== null ? $type : 'success'
        ]);
    }

    /**
     * Implement function for redirect if error.
     *
     * @param string $route
     *  Route name.
     * @param string $message
     *  Error message.
     * @param mixed $data
     *  Extra data.
     * @return \Illuminate\Http\Response
     *  Return response.
     */
    public function redirectIfError($route = null,$message = null, $data = null, $type = null) {
        return redirect()->route($route, $data)->with([
            'message' => $message !== null ? $message : 'Sorry, An error occurs please try again.',
            'messageType' => $type !== null ? $type : 'error'
        ]);
    }
}