<?php

use function Pest\Laravel\getJson;

test('passes 1', function() {
    getJson('/link?url=https://www.foo.com/?utm_campaign=some%2520campaign')->assertSuccessful();
});
test('fails 1', function() {
    getJson('/link?url=https://www.foo.com/?utm_campaign=some%20campaign')->assertSuccessful();
});
test('passes 2', function() {
    getJson('/link?url=https%3A%2F%2Fwww.foo.com%2F%3Futm_campaign%3Dsome%2520campaign')->assertSuccessful();
});
test('fails 2', function() {
    getJson('/link?url=https%3A%2F%2Fwww.foo.com%2F%3Futm_campaign%3Dsome%20campaign')->assertSuccessful();
});
