<?php declare(strict_types=1); ?>
<div>
    @foreach($oauth2_clients as $client)
        <a href="/bear/auth/redirect/{{$client->id}}" class="items-center shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21"><title>MS-SymbolLockup</title><rect x="1" y="1" width="9" height="9" fill="#f25022"/><rect x="1" y="11" width="9" height="9" fill="#00a4ef"/><rect x="11" y="1" width="9" height="9" fill="#7fba00"/><rect x="11" y="11" width="9" height="9" fill="#ffb900"/></svg>
            Sign in with Microsoft
        </a>
    @endforeach
</div>