<?php

namespace Apility\LaravelViteComponents\View\Components;

use Illuminate\Support\Collection;
use Illuminate\View\Component;

abstract class ViteBase extends Component
{
    public object $manifest;
    public ?string $command;
    public Collection $chunks;

    public function __construct ()
    {
        $this->manifest = json_decode(file_get_contents(public_path('/assets/manifest.json')));

        $this->command = $this->manifest->command ?? null;

        $this->chunks = $this->command === 'serve'
            ? new Collection()
            : Collection::make($this->manifest);
    }
}
