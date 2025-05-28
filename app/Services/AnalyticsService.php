<?php

namespace App\Services;

class AnalyticsService {
    public function analyzePost(Post $post) {
    // Business logic here
        return strlen($post->content);
    }
}