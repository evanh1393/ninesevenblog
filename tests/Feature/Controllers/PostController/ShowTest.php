<?php
use function Pest\Laravel\get;

it('can show a post', function () {
    $post = Post::factory()->create();
});
