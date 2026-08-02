<?php

it('serves a crawlable XML sitemap containing the main public pages', function () {
    $this->get(route('sitemap'))
        ->assertOk()
        ->assertHeader('Content-Type', 'application/xml; charset=UTF-8')
        ->assertSee(route('home'), false)
        ->assertSee(route('services'), false)
        ->assertSee(route('about'), false)
        ->assertSee(route('gallery'), false)
        ->assertSee(route('contact'), false);
});

it('provides page-specific metadata and a canonical URL on public pages', function () {
    $this->get(route('services'))
        ->assertOk()
        ->assertSee('<title>Sri Lanka Tours &amp; Airport Transfers | Novara Holidays</title>', false)
        ->assertSee('<meta name="robots" content="index,follow,max-image-preview:large">', false)
        ->assertSee('<link rel="canonical" href="'.route('services').'">', false);
});

it('keeps authentication pages out of search results', function () {
    $this->get(route('login'))
        ->assertOk()
        ->assertSee('<meta name="robots" content="noindex,nofollow">', false);
});

it('publishes travel agency structured data on the homepage', function () {
    $this->get(route('home'))
        ->assertOk()
        ->assertSee('application/ld+json', false)
        ->assertSee('"@type":"TravelAgency"', false)
        ->assertSee('"name":"Novara Holidays"', false);
});
