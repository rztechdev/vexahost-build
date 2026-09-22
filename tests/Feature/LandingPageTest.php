<?php

namespace Tests\Feature;

use Tests\TestCase;

class LandingPageTest extends TestCase
{
    public function test_home_page_renders_successfully(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('VexaHost - Jasa Website');
        $response->assertSee('build.vexahostcloud.my.id');
    }

    public function test_vexahost_alias_route_renders_successfully(): void
    {
        $response = $this->get('/vexahost');

        $response->assertStatus(200);
        $response->assertSee('VexaHost');
    }

    public function test_sitemap_xml_returns_valid_xml(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/xml; charset=UTF-8');
    }
}
