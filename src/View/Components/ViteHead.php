<?php

namespace Apility\LaravelViteComponents\View\Components;

use Illuminate\Support\Collection;

class ViteHead extends ViteBase
{
    public Collection $entries;
    public Collection $css;
    public Collection $imports;

    public function __construct (string $entry)
    {
        parent::__construct();

        $this->entries = new Collection();
        $this->imports = new Collection();
        $this->css = new Collection();

        if ($this->command !== 'serve') {
            $entryChunk = $this->chunks->get($entry);

            $this->entries->push(asset($entryChunk->file));

            Collection::make($entryChunk->imports ?? [])->each(function ($import) {
               $importChunk = $this->chunks->get($import);

               $this->imports->push(asset($importChunk->file));
            });

            Collection::make($entryChunk->css ?? [])->each(function ($cssFile) {
               $this->css->push(asset($cssFile));
            });
        }
    }

    public function render ()
    {
        return view('alvc::components.vite-head');
    }
}
