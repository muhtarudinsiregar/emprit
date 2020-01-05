<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Mockery;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    /** @test */
    public function it_redirect_to_twitter_oath()
    {
        $response = $this->get('/auth/twitter');
        $this->assertStringContainsString(
            'https://api.twitter.com/oauth/authenticate',
            $response->getTargetUrl()
        );
    }

    /** @test */
    public function it_receives_the_twitter_response_and_create_new_user()
    {
        $this->mockSocialiteFacade();
        Auth::shouldReceive('login')->withAnyArgs();
        $response = $this->get('/auth/twitter/callback');
        $user = User::first();
        $twitterUser = Socialite::driver('twitter')->user();
        // dd($user);
        $this->assertEquals($twitterUser->getName(), $user->name);
        $response->assertRedirect('/dashboard');
    }

    public function mockSocialiteFacade()
    {
        // reference
        // https: //stackoverflow.com/questions/35294257/how-to-test-laravel-socialite
        $abstractUser = Mockery::mock('Laravel\Socialite\Two\User');
        $abstractUser->shouldReceive('getId')
            ->andReturn("loremipsumdoloramet")
            ->shouldReceive('getNickname')
            ->andReturn('FooBar')
            ->shouldReceive('getName')
            ->andReturn('Foo Bar')
            ->shouldReceive('getAvatar')
            ->andReturn(
                'https://api.adorable.io/avatars/285/abott@adorable.png'
            );
        $provider = Mockery::mock('Laravel\Socialite\Contracts\Provider');
        $provider->shouldReceive('user')->andReturn($abstractUser);
        Socialite::shouldReceive('driver')->with('twitter')->andReturn($provider);
    }
}
