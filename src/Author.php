<?php
namespace PaulJulio\SlimExample;

final class Author {

    public function __invoke($request, $response, $next) {
        $response = $next($request, $response);
        $body = $response->getBody();
        $body->offsetSet('author', 'Paul Hulett');
        return $response->withBody($body);
    }

}