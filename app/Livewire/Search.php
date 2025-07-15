<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Job;

class Search extends Component
{

        public function search()
    {
        $results = Job::where('name', 'like', '%' . $this->search . '%');

        return $results->get();
    }
    public function render()
    {
        return view('livewire.search',[
            'searchedJobs' => $this->search(),
            ]);
    }
}
