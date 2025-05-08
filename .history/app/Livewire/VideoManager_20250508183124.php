<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;
use App\Models\Video;
use Illuminate\Support\Str;

class VideoManager extends Component
{
    public $videos;
    public $title;
    public $details;
    public $video_link;
    public $video_id;
    public $editing = false;

    // Load videos when the component mounts
    public function mount()
    {
        $this->videos = News::whereNotNull('video_link')->get();
    }

    // Create a new video
    public function create()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'details' => 'required|string',
            'video_link' => 'required|url',
        ]);

        News::create([
            'title' => $this->title,
            'details' => $this->details,
            'video_link' => $this->video_link,
        ]);

        session()->flash('message', 'Video successfully created.');

        $this->resetForm();
        $this->videos = News::all(); // Refresh the video list
    }

    // Edit an existing video
    public function edit($id)
    {
        $this->editing = true;
        $video = News::find($id);
        $this->video_id = $video->id;
        $this->title = $video->title;
        $this->details = $video->details;
        $this->video_link = $video->video_link;
    }

    // Update an existing video
    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'details' => 'required|string',
            'video_link' => 'required|url',
        ]);

        $video = News::find($this->video_id);
        $video->update([
            'title' => $this->title,
            'details' => $this->details,
            'video_link' => $this->video_link,
        ]);

        session()->flash('message', 'Video successfully updated.');

        $this->resetForm();
        $this->videos = News::all(); // Refresh the video list
    }

    // Delete a video
    public function delete($id)
    {
        News::find($id)->delete();
        session()->flash('message', 'Video successfully deleted.');
        $this->videos = News::all(); // Refresh the video list
    }

    // Reset the form fields
    public function resetForm()
    {
        $this->title = '';
        $this->details = '';
        $this->video_link = '';
        $this->video_id = null;
        $this->editing = false;
    }

    public function render()
    {
        return view('livewire.video-manager');
    }
}
