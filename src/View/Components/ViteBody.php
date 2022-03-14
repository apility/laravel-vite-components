<?php

namespace Apility\LaravelViteComponents\View\Components;

use Illuminate\Support\Collection;

class ViteBody extends ViteBase
{
    public Collection $entries;

    public function __construct (string $entry)
    {
        parent::__construct();

        $this->entries = new Collection();

        if ($this->command === 'serve') {
            $this->entries->push("{$this->manifest->url}/@vite/client");
            $this->entries->push("{$this->manifest->url}/{$entry}");
        }
    }

    public function render ()
    {
        return view('alvc::components.vite-body');
    }
}
