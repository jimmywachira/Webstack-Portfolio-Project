<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Job;

class Search extends Component
{
    public $search = '';

    public function render()
    {
        $searchedJobs = Job::with('employer', 'tags')
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%')
                      ->orWhereHas('employer', function ($q) {
                          $q->where('name', 'like', '%' . $this->search . '%');
                      })
                      ->orWhereHas('tags', function ($q) {
                          $q->where('name', 'like', '%' . $this->search . '%');
                      });
            })
            ->latest()
            ->get();

        // Optionally, fetch all tags for the tags section
        $tags = \App\Models\Tag::all();

        return view('livewire.search', [
            'searchedJobs' => $searchedJobs,
            'tags' => $tags,
        ]);
    }
}