<?php

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Sidebar;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Req;
use Illuminate\View\Component;
use Illuminate\View\View;

class Link extends Component {
    public string $classes = 'flex items-center px-2 py-2 font-medium rounded text-gray-500 hover:text-gray-500 hover:bg-gray-100';

    public function __construct(public readonly string $path, public readonly string|null $icon = null) {
        if ($this->path === '/bear' || str_starts_with(haystack: '/' . Req::path(), needle: $this->path)) {
            $this->classes .= ' sidebar-active';
        }
    }

    public function render(): View {
        return view(view: 'bear::sidebar.link');
    }
}
