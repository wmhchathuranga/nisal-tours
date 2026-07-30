<?php

function normalizedPageCopy(string $html): string
{
    return preg_replace('/\s+/u', ' ', strip_tags(html_entity_decode($html)));
}

it('renders the approved homepage wording', function () {
    $copy = normalizedPageCopy($this->get(route('home'))->assertOk()->getContent());

    expect($copy)
        ->toContain('Create unforgettable memories with us.')
        ->toContain('Let’s create your perfect journey together.')
        ->toContain('WHY CHOOSE NOVARA HOLIDAYS?')
        ->toContain('What Customers Say About Us')
        ->not->toContain('What Our Customers Are Saying');
});

it('renders the approved services wording', function () {
    $copy = normalizedPageCopy($this->get(route('services'))->assertOk()->getContent());

    expect(substr_count($copy, 'There are many variations of packages available.'))->toBe(3);
});

it('renders the approved footer and UK office wording', function () {
    $approvedFooter = 'We provide the most hassle free and unforgettable travel experience in Sri Lanka.';

    foreach (['services', 'about', 'contact'] as $routeName) {
        $copy = normalizedPageCopy($this->get(route($routeName))->assertOk()->getContent());

        expect($copy)
            ->toContain($approvedFooter)
            ->toContain('UK Office')
            ->not->toContain('England Office');
    }
});
