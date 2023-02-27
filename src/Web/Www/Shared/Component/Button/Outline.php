<?php declare(strict_types=1);

namespace GuardsmanPanda\Larabear\Web\Www\Shared\Component\Button;

use GuardsmanPanda\Larabear\Infrastructure\Http\Service\Resp;
use Illuminate\View\Component;
use Illuminate\View\View;
use RuntimeException;

final class Outline extends Component {
    public string $classes = 'whitespace-nowrap font-medium inline-flex rounded border transition-all hover:scale-105 items-center shadow hover:shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2';

    public function __construct(
        public readonly string $color = 'gray',
        public readonly string $size = 'default',
        public readonly string|null $icon = null
    ) {
        $this->classes .= match ($this->size) {
            'default' => ' px-5 h-9',
            'small' => ' px-4 h-8',
            'tiny' => ' text-sm px-3 h-7',
            default => throw new RuntimeException(message: 'Unknown size: ' . $this->size),
        };
        $this->classes .= match ($this->color) {
            'gray' => ' text-gray-600 border-gray-300 hover:text-gray-700 hover:bg-gray-100 focus:ring-gray-300',
            'red' => ' text-red-600 border-red-300 hover:text-red-700 hover:bg-red-100 shadow-red-300 hover:shadow-red-400 focus:ring-red-300',
            'green' => ' text-green-600 border-green-400 hover:text-green-700 hover:bg-green-100 shadow-green-400 hover:shadow-green-500 focus:ring-green-400',
            default => throw new RuntimeException(message: 'Unknown color: ' . $this->color),
        };
    }

    public function render(): View {
        $icon_classes = match ($this->size) {
            'default' => '-ml-1 mr-2',
            'small' => '-ml-1 mr-1.5',
            'tiny' => '-ml-1 mr-1',
            default => throw new RuntimeException(message: 'Unknown size: ' . $this->size),
        };
        return Resp::view(view: 'bear::button.basic', data: [
            'icon_size' => match ($this->size) {
                'default' => "6",
                'small' => "5",
                'tiny' => "3.5",
                default => throw new RuntimeException(message: 'Unknown size: ' . $this->size),
            },
            'icon_classes' => $icon_classes . match ($this->color) {
                    'gray' => ' text-gray-500',
                    'red' => ' text-red-500',
                    'green' => ' text-green-500',
                    default => '',
                },
        ]);
    }
}
