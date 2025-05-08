<?php

namespace App\Http\Livewire;

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
        $this->videos = Video::all();
    }

    // Create a new video
    public function create()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'details' => 'required|string',
            'video_link' => 'required|url',
        ]);

        Video::create([
            'title' => $this->title,
            'details' => $this->details,
            'video_link' => $this->video_link,
        ]);

        session()->flash('message', 'Video successfully created.');

        $this->resetForm();
        $this->videos = Video::all(); // Refresh the video list
    }

    // Edit an existing video
    public function edit($id)
    {
        $this->editing = true;
        $video = Video::find($id);
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

        $video = Video::find($this->video_id);
        $video->update([
            'title' => $this->title,
            'details' => $this->details,
            'video_link' => $this->video_link,
        ]);

        session()->flash('message', 'Video successfully updated.');

        $this->resetForm();
        $this->videos = Video::all(); // Refresh the video list
    }

    // Delete a video
    public function delete($id)
    {
        Video::find($id)->delete();
        session()->flash('message', 'Video successfully deleted.');
        $this->videos = Video::all(); // Refresh the video list
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
