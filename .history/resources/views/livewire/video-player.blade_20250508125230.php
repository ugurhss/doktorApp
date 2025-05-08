<div>
    @if ($news && $news->video_link)
        <video class="js-player w-full max-w-3xl mx-auto" controls>
            <source src="{{ $news->video_link }}" type="video/mp4" />
        </video>
    @else
        <p class="text-center text-gray-500">Henüz video mevcut değil.</p>
    @endif

    <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
    <script>
        document.addEventListener('livewire:load', () => {
            const players = Plyr.setup('.js-player');
        });
    </script>
</div>
