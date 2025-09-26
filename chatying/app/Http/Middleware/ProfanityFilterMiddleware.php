<?php

namespace App\Http\Middleware;

use App\Helpers\ProfanityFilter;
use Closure;
use Illuminate\Http\Request;

class ProfanityFilterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $mode  (strict|filter|log)
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $mode = 'strict')
    {
        $fieldsToCheck = [
            'nickname', 'name', 'username', 'message', 'content', 'text', 'comment', 'description', 'title', 'subject'
        ];

        foreach ($fieldsToCheck as $field) {
            if ($request->has($field)) {
                $value = $request->input($field);
                
                if (is_string($value) && !empty($value)) {
                    $validation = ProfanityFilter::validate($value, $mode === 'strict');
                    
                    switch ($mode) {
                        case 'strict':
                            if (!$validation['valid']) {
                                return response()->json([
                                    'error' => true,
                                    'message' => $validation['message'],
                                    'field' => $field
                                ], 422);
                            }
                            break;
                            
                        case 'filter':
                            // Automatically filter the content
                            $request->merge([$field => $validation['text']]);
                            break;
                            
                        case 'log':
                            if (!$validation['valid']) {
                                \Log::warning('Profanity detected', [
                                    'field' => $field,
                                    'original' => $value,
                                    'ip' => $request->ip(),
                                    'user_agent' => $request->userAgent(),
                                    'url' => $request->fullUrl()
                                ]);
                            }
                            break;
                    }
                }
            }
        }

        return $next($request);
    }
}